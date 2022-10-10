<?php

namespace App\Http\Controllers;

use App\Models\Bulletin;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Blog;
use App\Models\Contact;
use App\Models\Invention;
use App\Models\UploadInvention;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

use function Ramsey\Uuid\v1;

class HomePageController extends Controller
{
    public function index()
    {
        $bulletins = Bulletin::latest()->get();
        $inventions = UploadInvention::latest()->get();
        $latestblogs = Blog::latest()->take(1)->get();

        return view('welcome', [
            'bulletins' => $bulletins,
            'inventions' => $inventions,
            'latestblogs' => $latestblogs
        ]);
    }

    public function about()
    {
        $latestblogs = Blog::latest()->take(1)->get();

        return view('about', [
            'latestblogs' => $latestblogs
        ]);
    }

    public function contact()
    {
        $latestblogs = Blog::latest()->take(1)->get();  

        return view('contact',[
            'latestblogs' => $latestblogs
        ]);
    }

    public function contactConfirm(Request $request) 
    {
        //Validate Request
        $this->validate($request, [
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'subject' => 'required|string',
            'message' => 'required|string',
        ]);

        Contact::create([
            'name' => request()->name,
            'email' => request()->email,
            'phone_number' => request()->phone,
            'subject' => request()->subject,
            'message' => request()->message
        ]);

        /** Store information to include in mail in $data as an array */
        $data = array(
            'name' => request()->name,
            'email' => request()->email,
            'phone' => request()->phone,
            'subject' => request()->subject,
            'description' => request()->message,
            'created_at' => now(),
            'admin' => 'support@luzdecalcio.net',
        );
        /** Send message to the admin */
        Mail::send('emails.contact', $data, function ($m) use ($data) {
            $m->to($data['admin'])->subject('Contact Form Notification');
        });

        return back()->with([
            'type' => 'success',
            'message' => 'Form Submitted Successfully, We will get back to you shortly!'
        ]);   
    }

    public function gallery()
    {
       $latestblogs = Blog::latest()->take(1)->get();
        
        return view('gallery', [
            'latestblogs' => $latestblogs
        ]);
    }

    public function blog()
    {
        $blogs = Blog::latest()->get();
        $latestblogs = Blog::latest()->take(1)->get();

        return view('blog', [
            'blogs' => $blogs,
            'latestblogs' => $latestblogs
        ]);
    }
    
    public function single_blog($id)
    {
        $finder = Crypt::decrypt($id);

        $blog = Blog::findorfail($finder);

        $blog->views += 1;
        $blog->save();
        
        $latestblogs = Blog::latest()->take(1)->get();
        
        return view('single_blog',[
            'blog' => $blog,
            'latestblogs' => $latestblogs
        ]);
    }

    public function terms_conditions()
    {
        $latestblogs = Blog::latest()->take(1)->get();

        return view('terms_conditions', [
            'latestblogs' => $latestblogs
        ]);
    }

    public function register()
    {
        $categories = Category::latest()->get();
        $latestblogs = Blog::latest()->take(1)->get();

        return view('register', [
            'categories' => $categories,
            'latestblogs' => $latestblogs
        ]);
    }

    public function post_invention(Request $request)
    {
        //Validate Request
        $this->validate($request, [
            'category' => ['string', 'max:255'],
            // 'groupleadername' => ['string', 'max:255'],
            'fullname' => ['required', 'string', 'max:255'],
            // 'groupnumber' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email'],
            'phone' => ['required', 'numeric'],
            'age' => ['required', 'string', 'max:255'],
            'level' => ['required', 'string', 'max:255'],
            'citystate' => ['required', 'string', 'max:255'],
            'country' => ['required', 'string', 'max:255'],
            'projectname' => ['required', 'string', 'max:255'],
            'difference' => ['required', 'string', 'max:255'],
            'importance' => ['required', 'string', 'max:255'],
            'patent' => ['required', 'string', 'max:255'],
            'registered' => ['required', 'string', 'max:255'],
            'workingdetails' => ['required', 'string', 'max:255'],
            'cost' => ['required', 'string'],
            'rear_view' => 'required|mimes:jpeg,png,jpg|max:3072',
            'front_view' => 'required|mimes:jpeg,png,jpg|max:3072',
            'short_video' => 'required|mimes:mp4,m4v,m4a,mp3,mpg,mov|max:10240',
            'inventor_photo' => 'required|mimes:jpeg,png,jpg|max:2048',
        ]);

        $admin = User::where('user_type', 'Administrator')->first();

        if (request()->hasFile('rear_view')) 
        {
            $rear_view = request()->rear_view->getClientOriginalName();
            request()->rear_view->storeAs('inventions/files', $rear_view, 'public');
        }
        
        if (request()->hasFile('front_view'))
        {
            $front_view = request()->front_view->getClientOriginalName();
            request()->front_view->storeAs('inventions/files', $front_view, 'public');
        }
        
        if (request()->hasFile('short_video'))
        {
            $short_video = request()->short_video->getClientOriginalName();
            request()->short_video->storeAs('inventions/files', $short_video, 'public');
        }
        
        if (request()->hasFile('inventor_photo')) 
        {
            $inventor_photo = request()->inventor_photo->getClientOriginalName();
            request()->inventor_photo->storeAs('inventions/files', $inventor_photo, 'public');
        }

        $inventions = Invention::latest()->get();

        if($inventions->isEmpty())
        {
            $invention = Invention::create([
                'category' => $request->category, 
                'groupleadername' => $request->groupleadername, 
                'fullname' => $request->fullname, 
                'groupnumber' => $request->groupnumber, 
                'email' => $request->email, 
                'phone' => $request->phone, 
                'age' => $request->age, 
                'level' => $request->level, 
                'citystate' => $request->citystate, 
                'country' => $request->country,
                'projectname' => $request->projectname, 
                'difference' => $request->difference, 
                'importance' => $request->importance, 
                'patent' => $request->patent, 
                'registered' => $request->registered, 
                'workingdetails' => $request->workingdetails, 
                'cost' => $request->cost, 
                'file' => $rear_view,
                'file2' => $front_view,
                'file3' => $short_video,
                'file4' => $inventor_photo
            ]);

            $data = array(
                'name' => request()->fullname,
                'email' => request()->email,
                'admin' => $admin->email,
                'adminName' => $admin->name,
                'created_at' => now(),
            );
            /** Send message to the user */
            Mail::send('emails.invention', $data, function ($m) use ($data) {
                $m->to($data['email'])->subject(config('app.name').' Invention');
            });

            /** Send message to the admin */
            Mail::send('emails.notify', $data, function ($m) use ($data) {
                $m->to($data['admin'])->subject(config('app.name').' Invention');
            });

            return redirect()->route('registration.completed', Crypt::encrypt($request->email));   

        } else {
            foreach ($inventions as $invention) {
                $email[] = $invention->email;
            }
            if (in_array($request->email, $email)) {
                return back()->with([
                    'type' => 'danger',
                    'message' => 'Email has been used!'
                ]);
            } else {
                Invention::create([
                    'category' => $request->category, 
                    'groupleadername' => $request->groupleadername, 
                    'fullname' => $request->fullname, 
                    'groupnumber' => $request->groupnumber, 
                    'email' => $request->email, 
                    'phone' => $request->phone, 
                    'age' => $request->age, 
                    'level' => $request->level, 
                    'citystate' => $request->citystate, 
                    'country' => $request->country,
                    'projectname' => $request->projectname, 
                    'difference' => $request->difference, 
                    'importance' => $request->importance, 
                    'patent' => $request->patent, 
                    'registered' => $request->registered, 
                    'workingdetails' => $request->workingdetails, 
                    'cost' => $request->cost, 
                    'file' => $rear_view,
                    'file2' => $front_view,
                    'file3' => $short_video,
                    'file4' => $inventor_photo
                ]);
                
                $data = array(
                    'name' => request()->fullname,
                    'email' => request()->email,
                    'created_at' => now(),
                );
                /** Send message to the user */
                Mail::send('emails.invention', $data, function ($m) use ($data) {
                    $m->to($data['email'])->subject(config('app.name').' Invention');
                });

                return redirect()->route('registration.completed', Crypt::encrypt($request->email)); 
            }
        }
    }

    public function registration_completed($email, Request $request)
    {
        $emailFinder = Crypt::decrypt($email);

        $latestblogs = Blog::latest()->take(1)->get();
        $registeredinvention = Invention::where('email', $emailFinder)->first();

        return view('success', [
            'registeredinvention' => $registeredinvention,
            'latestblogs' => $latestblogs
        ]);
    }

    public function admin_login()
    {
        return view('auth.admin_login');
    }

    public function post_admin_login(Request $request)
    {
        $this->validate($request, [
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8'],
        ]);
        
        $input = $request->only(['email', 'password']);
        
        $user = User::query()->where('email', $request->email)->first();

        if ($user && !Hash::check($request->password, $user->password)){
            return back()->with('failure_report', 'Incorrect Password!');
        }

        if(!$user || !Hash::check($request->password, $user->password)) {
            return back()->with('failure_report', 'Email does\'nt exist');
        }

        // authentication attempt
        if (auth()->attempt($input)) {
            // if($user->user_type == 'Administrator'){
                return redirect()->route('admin.dashboard');
            // }
           
            // return back()->with('failure_report', 'You are not an Administrator');
                    
        } else {
            return back()->with('failure_report', 'User authentication failed.');
        }
    }

    public function download($id)
    {
        $finder = Crypt::decrypt($id);

        $bulletin = Bulletin::find($finder);
        
        return Storage::download('/public/bulletins/'.$bulletin->file);
    }
}
