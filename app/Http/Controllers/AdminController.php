<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Bulletin;
use App\Models\Category;
use App\Models\Contact;
use Illuminate\Http\Request;
use App\Models\Invention;
use App\Models\Message;
use App\Models\UploadInvention;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use PDF;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $inventions = Invention::latest()->get();
        $latestinventions = Invention::latest()->take(5)->get();
        $categories = Category::latest()->get();
        $bulletins = Bulletin::latest()->get();
        $blogs = Blog::latest()->get();

        return view('admin.dashboard', [
            'inventions' => $inventions,
            'latestinventions' => $latestinventions,
            'categories' => $categories,
            'bulletins' => $bulletins,
            'blogs' => $blogs
        ]);
    }

    public function inventions()
    {
        $inventions = Invention::latest()->get();

        return view('admin.inventions',[
            'inventions' => $inventions
        ]);
    }

    public function view_edit_invention($id)
    {
        $finder = Crypt::decrypt($id);

        $invention = Invention::find($finder);

        return view('admin.view_inventions',[
            'invention' => $invention
        ]);
    }

    public function delete_invention($id)
    {
        $finder = Crypt::decrypt($id);

        $invention = Invention::find($finder);

        Storage::delete('/public/inventions/files/'. $invention->file);
        Storage::delete('/public/inventions/files/'. $invention->file2);
        Storage::delete('/public/inventions/files/'. $invention->file3);
        Storage::delete('/public/inventions/files/'. $invention->file4);

        $invention->delete();

        return back()->with([
            'type' => 'success',
            'message' => 'Invention Deleted!'
        ]); 
    }

    public function admin_logout()
    {
        Session::flush();

        Auth::logout();

        return redirect('/');
    }

    public function category()
    {
        $categories = Category::latest()->get();

        return view('admin.category',[
            'categories' => $categories
        ]);
    }

    public function post_category (Request $request) 
    {
        $this->validate($request, [
            'category' => ['required', 'string', 'max:255'],
        ]);

        Category::create([
            'category' => $request->category
        ]);

        return back()->with([
            'type' => 'success',
            'message' => 'Category Added!'
        ]); 
    }

    public function update_category($id, Request $request)
    {
        $this->validate($request, [
            'category' => ['required', 'string', 'max:255'],
        ]);

        $finder = Crypt::decrypt($id);

        $category = Category::find($finder);

        $category->update([
            'category' => $request->category
        ]);

        return back()->with([
            'type' => 'success',
            'message' => 'Category Updated!'
        ]); 
    }

    public function delete_category($id, Request $request)
    {
        $finder = Crypt::decrypt($id);

        $category = Category::find($finder)->delete();

        return back()->with([
            'type' => 'success',
            'message' => 'Category Deleted!'
        ]); 
    }

    public function bulletin()
    {
        $bulletins = Bulletin::latest()->get();

        return view('admin.bulletin',[
            'bulletins' => $bulletins
        ]);
    }

    public function post_bulletin (Request $request) 
    {
        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'image' => 'required|mimes:jpeg,png,jpg',
            'file' => 'required|mimes:pdf',
        ]);

        $filepdf = request()->file->getClientOriginalName();
        $fileimage = request()->image->getClientOriginalName();
        request()->file->storeAs('bulletins', $filepdf, 'public');
        request()->image->storeAs('bulletins', $fileimage, 'public');

        Bulletin::create([
            'name' => $request->name,
            'image' => '/storage/bulletins/'.$fileimage,
            'file' => $filepdf
        ]);

        return back()->with([
            'type' => 'success',
            'message' => 'Bulletin Created Successfully!'
        ]); 
    }

    public function update_bulletin($id, Request $request)
    {
        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],            
        ]);

        $finder = Crypt::decrypt($id);

        $bulletin = Bulletin::find($finder);

        if (request()->hasFile('image')) {

            //Validate Request
            $this->validate($request, [
                'image' => 'required|mimes:jpeg,png,jpg',
            ]);
            
            $fileimage = request()->image->getClientOriginalName();

            if($bulletin->image) {
                Storage::delete(str_replace("storage", "public", $bulletin->image));
            }
            
            request()->image->storeAs('bulletins', $fileimage, 'public');
            
            
            $bulletin->update([
                'name' => $request->name,
                'image' => '/storage/bulletins/'.$fileimage,
            ]);

        } 
        
        if (request()->hasFile('file')) {

            //Validate Request
            $this->validate($request, [
                'file' => 'required|mimes:pdf',
            ]);
            
            $filepdf = request()->file->getClientOriginalName();
            
            if($bulletin->file) {
                Storage::delete('/public/bulletins/'. $bulletin->file);
            }
            
            request()->file->storeAs('bulletins', $filepdf, 'public');

            $bulletin->update([
                'name' => $request->name,
                'file' => $filepdf
            ]);
        }

        $bulletin->update([
            'name' => $request->name,
        ]);

        return back()->with([
            'type' => 'success',
            'message' => 'Bulletin Updated!'
        ]); 
    }

    public function delete_bulletin($id, Request $request)
    {
        $finder = Crypt::decrypt($id);

        $bulletin = Bulletin::find($finder);

        Storage::delete('/public/bulletins/'. $bulletin->file);
        Storage::delete('/public/bulletins/'. $bulletin->image);

        $bulletin->delete();

        return back()->with([
            'type' => 'success',
            'message' => 'Bulletin Deleted!'
        ]); 
    }

    public function add_blog()
    {
        return view('admin.blog');
    }

    public function post_blog(Request $request)
    {
        //Validate Request
        $this->validate($request, [
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'image' => 'required|mimes:jpeg,png,jpg',
        ]);

        $image = request()->image->getClientOriginalName();
        request()->image->storeAs('blogs', $image, 'public');

        Blog::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => '/storage/blogs/'.$image,
        ]);

        return back()->with([
            'type' => 'success',
            'message' => 'Blog Published Successfully!'
        ]); 
    }

    public function view_blogs()
    {
        $blogs = Blog::latest()->get();

        return view('admin.view_blogs', [
            'blogs' => $blogs
        ]);
    }

    public function update_blog($id, Request $request)
    {
        //Validate Request
        $this->validate($request, [
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
        ]);
        
        $finder = Crypt::decrypt($id);

        $blog = Blog::find($finder);

        if (request()->hasFile('image')) {

            //Validate Request
            $this->validate($request, [
                'image' => 'required|mimes:jpeg,png,jpg',
            ]);

            $image = request()->image->getClientOriginalName();
            if($blog->image) {
                Storage::delete(str_replace("storage", "public", $blog->image));
            }
            request()->image->storeAs('blogs', $image, 'public');

            $blog->update([
                'title' => $request->title,
                'description' => $request->description,
                'image' => '/storage/blogs/'.$image,
            ]);

        } 

        $blog->update([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        return back()->with([
            'type' => 'success',
            'message' => 'Blog Updated!'
        ]); 
    }

    public function delete_blog($id, Request $request)
    {
        $finder = Crypt::decrypt($id);

        $blog = Blog::find($finder);

        Storage::delete(str_replace("storage", "public", $blog->image));

        $blog->delete();

        return back()->with([
            'type' => 'success',
            'message' => 'Blog Deleted!'
        ]); 
    }

    public function settings()
    {
        return view('admin.settings');
    }

    public function upload_photo($id, Request $request) 
    {
        //Validate Request
        $this->validate($request, [
            'photo' => 'required|mimes:jpeg,png,jpg',
        ]);

        //Find User
        $userFinder = Crypt::decrypt($id);

        //Profile
        $profile = User::find($userFinder);

        //Validate User
        if (request()->hasFile('photo')) {
            $filename = request()->photo->getClientOriginalName();
            if($profile->photo) {
                Storage::delete('/public/users_avatar/'. $profile->avatar);
            }
            request()->photo->storeAs('users_avatar', $filename, 'public');
            $profile->photo = '/storage/users_avatar/'.$filename;
            $profile->save();
            
            return back()->with([
                'type' => 'success',
                'message' => 'Photo Updated Successfully!'
            ]);
        } else {
            return back()->with([
                'type' => 'danger',
                'message' => 'No Photo Added!',
            ]);
        }
    }

    public function update_profile($id, Request $request)
    {
        $this->validate($request, [
            'name' => ['required', 'string'],
        ]);

        $userFinder = Crypt::decrypt($id);

        $user = User::findorfail($userFinder);

        if($user->email == $request->email)
        {
            $user->update([
                'name' => $request->name
            ]);

            return back()->with([
                'type' => 'success',
                'message' => 'Profile Updated Successfully!'
            ]); 

        } else {
            $this->validate($request, [
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            ]);

            $user->update([
                'name' => $request->name,
                'email' => $request->email
            ]);

            return back()->with([
                'type' => 'success',
                'message' => 'Profile Updated Successfully!'
            ]);
        }
    }

    public function update_password ($id, Request $request) 
    {
        $this->validate($request, [
            'new_password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $userFinder = Crypt::decrypt($id);

        $user = User::findorfail($userFinder);
        
        $user->password = Hash::make($request->new_password);

        $user->save();

        return back()->with([
            'type' => 'success',
            'message' => 'Password Updated Successfully!'
        ]); 
    }

    public function admins()
    {
        $users = User::latest()->get();

        return view('admin.admins', [
            'users' => $users
        ]);
    }

    public function admin_add(Request $request)
    {
        $this->validate($request, [
            'user_type' => ['required'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'max:255', 'confirmed'],
        ]);

        User::create([
            'user_type' => $request->user_type,
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        
        return back()->with([
            'type' => 'success',
            'message' => 'Admin Added Successfully!'
        ]); 
    }

    public function admin_update($id, Request $request)
    {
        $this->validate($request, [
            'user_type' => ['required', 'string'],
            'name' => ['required', 'string']
        ]);

        $userFinder = Crypt::decrypt($id);

        $user = User::findorfail($userFinder);

        if($user->email == $request->email)
        {
            $user->update([
                'user_type' => $request->user_type,
                'name' => $request->name
            ]);

            return back()->with([
                'type' => 'success',
                'message' => 'Profile Updated Successfully!'
            ]); 

        } else {
            $this->validate($request, [
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            ]);

            $user->update([
                'user_type' => $request->user_type,
                'name' => $request->name,
                'email' => $request->email
            ]);

            return back()->with([
                'type' => 'success',
                'message' => 'Profile Updated Successfully!'
            ]);
        }
    }

    public function admin_update_password ($id, Request $request) 
    {
        $this->validate($request, [
            'new_password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $userFinder = Crypt::decrypt($id);

        $user = User::findorfail($userFinder);
        
        $user->password = Hash::make($request->new_password);

        $user->save();

        return back()->with([
            'type' => 'success',
            'message' => 'Password Updated Successfully!'
        ]); 
    }

    public function admin_delete($id)
    {
        $finder = Crypt::decrypt($id);

        $user = User::find($finder);

        if($user->photo)
        Storage::delete(str_replace("storage", "public", $user->photo));

        $user->delete();

        return back()->with([
            'type' => 'success',
            'message' => 'Admin Deleted!'
        ]); 
    }

    public function download($id)
    {
        $file = Crypt::decrypt($id);
        
        return Storage::download('/public/inventions/files/'.$file);
    }

    public function message_invention($id, Request $request) 
    {
        //Validate Request
        $this->validate($request, [
            'subject' => ['required','string', 'max:255'],
            'message' => ['required', 'string'],
        ]);

        $id = Crypt::decrypt($id);

        $invention = Invention::findorfail($id);

        $message = new Message();
        $message->from = config('app.name');
        $message->to = $invention->id;
        $message->subject = request()->subject;
        $message->message = request()->message;
        $message->save();

        /** Store information to include in mail in $data as an array */
        $data = array(
            'name' => $invention->fullname,
            'email' => $invention->email,
            'messages' => request()->message
        );
        
        /** Send message to the user */
        Mail::send('emails.message', $data, function ($m) use ($data) {
            $m->to($data['email'])->subject(request()->subject);
        });

        return back()->with([
            'type' => 'success',
            'message' => 'Message sent successfully to '.$invention->fullname,
        ]); 
    }

    public function messages()
    {
        $messages = Invention::join('messages', 'inventions.id', '=', 'messages.to')
                             ->get(['inventions.*', 'messages.*']);

        return view('admin.messages', [
            'messages' => $messages
        ]);
    }

    public function pdf($id)
    {   
        $finder = Crypt::decrypt($id);

        $invention = Invention::find($finder);
        
        $html = view('admin.myPDF', [
            'invention' => $invention
        ]);

        $pdf = PDF::loadHTML($html);
    
        return $pdf->download('Luzdecalcio-'.$invention->fullname.'.pdf');
    }

    public function upload_inventions()
    {
        $inventions = UploadInvention::latest()->get();

        return view('admin.upload_inventions', [
            'inventions' => $inventions
        ]);
    }

    public function post_invention(Request $request)
    {
        //Validate Request
        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'image' => 'required|mimes:jpeg,png,jpg',
        ]);

        $image = request()->image->getClientOriginalName();
        request()->image->storeAs('admin/inventions', $image, 'public');

        UploadInvention::create([
            'name' => $request->name,
            'image' => '/storage/admin/inventions/'.$image,
            'description' => $request->description
        ]);

        return back()->with([
            'type' => 'success',
            'message' => 'Invention Posted Successfully!'
        ]); 
    }

    public function update_posted_invention($id, Request $request)
    {
        //Validate Request
        $this->validate($request, [
            'name' => ['required', 'string', 'max:255']
        ]);
        
        $finder = Crypt::decrypt($id);

        $invention = UploadInvention::find($finder);

        if (request()->hasFile('image')) 
        {
            //Validate Request
            $this->validate($request, [
                'image' => 'required|mimes:jpeg,png,jpg',
            ]);

            $image = request()->image->getClientOriginalName();
            if($invention->image) {
                Storage::delete(str_replace("storage", "public", $invention->image));
            }
            request()->image->storeAs('admin/inventions', $image, 'public');

            $invention->update([
                'name' => $request->name,
                'image' => '/storage/admin/inventions/'.$image,
                'description' => $request->description
            ]);

        } 

        $invention->update([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return back()->with([
            'type' => 'success',
            'message' => 'Invention Updated!'
        ]); 
    }

    public function delete_posted_invention($id, Request $request)
    {
        $finder = Crypt::decrypt($id);

        $invention = UploadInvention::find($finder);

        Storage::delete(str_replace("storage", "public", $invention->image));

        $invention->delete();

        return back()->with([
            'type' => 'success',
            'message' => 'Invention Deleted!'
        ]); 
    }

    public function contact_us()
    {
        $contacts = Contact::latest()->get();

        return view('admin.contact', [
            'contacts' => $contacts
        ]);
    }

    public function contact_us_delete($id)
    {
        $finder = Crypt::decrypt($id);

        Contact::find($finder)->delete();

        return back()->with([
            'type' => 'success',
            'message' => 'Contact Form Deleted!'
        ]); 
    }
}
