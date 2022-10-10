<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Landing Page
Route::get('/', [App\Http\Controllers\HomePageController::class, 'index']);
Route::get('/download/{id}', [App\Http\Controllers\HomePageController::class, 'download'])->name('download');
Route::get('/about', [App\Http\Controllers\HomePageController::class, 'about']);
Route::get('/contact', [App\Http\Controllers\HomePageController::class, 'contact']);
Route::post('/contact-us', [App\Http\Controllers\HomePageController::class, 'contactConfirm']);
Route::get('/galleries', [App\Http\Controllers\HomePageController::class, 'gallery']);
Route::get('/blog', [App\Http\Controllers\HomePageController::class, 'blog']);
Route::get('/{id}', [App\Http\Controllers\HomePageController::class, 'single_blog'])->name('single.blog');
Route::get('/terms-and-conditions', [App\Http\Controllers\HomePageController::class, 'terms_conditions']);
Route::get('/project/registration', [App\Http\Controllers\HomePageController::class, 'register'])->name('project.registration');
Route::post('/authregister', [App\Http\Controllers\HomePageController::class, 'post_invention'])->name('post.invention');
Route::get('/success/{email}', [App\Http\Controllers\HomePageController::class, 'registration_completed'])->name('registration.completed');

// Admin
Route::get('/admin/login', [App\Http\Controllers\HomePageController::class, 'admin_login'])->name('login');
Route::post('/post/login', [App\Http\Controllers\HomePageController::class, 'post_admin_login'])->name('admin.login');
// Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/admin/dashboard', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/admin/inventions', [App\Http\Controllers\AdminController::class, 'inventions'])->name('admin.inventions');
    Route::get('/admin/inventions/upload', [App\Http\Controllers\AdminController::class, 'upload_inventions'])->name('admin.upload.inventions');
    Route::post('/admin/inventions/post', [App\Http\Controllers\AdminController::class, 'post_invention'])->name('admin.post.invention');
    Route::post('/admin/inventions/update/postedinvention/{id}', [App\Http\Controllers\AdminController::class, 'update_posted_invention'])->name('admin.update.posted.invention');
    Route::post('/admin/inventionsdelete/postedinvention/{id}', [App\Http\Controllers\AdminController::class, 'delete_posted_invention'])->name('admin.delete.posted.invention');
    Route::get('/admin/inventions/view/edit/{id}', [App\Http\Controllers\AdminController::class, 'view_edit_invention'])->name('admin.view.edit.invention');
    Route::post('/admin/inventions/message/{id}', [App\Http\Controllers\AdminController::class, 'message_invention'])->name('admin.message.invention');
    Route::post('/admin/inventions/delete/{id}', [App\Http\Controllers\AdminController::class, 'delete_invention'])->name('admin.delete.invention');
    Route::get('/file/download/{id}', [App\Http\Controllers\AdminController::class, 'download'])->name('admin.download');
    Route::get('/pdf/{id}', [App\Http\Controllers\AdminController::class, 'pdf'])->name('admin.pdf');
    Route::get('/admin/bulletin', [App\Http\Controllers\AdminController::class, 'bulletin'])->name('admin.bulletin');
    Route::post('/admin/bulletin', [App\Http\Controllers\AdminController::class, 'post_bulletin'])->name('admin.post.bulletin');
    Route::post('/admin/update/bulletin/{id}', [App\Http\Controllers\AdminController::class, 'update_bulletin'])->name('admin.update.bulletin');
    Route::post('/admin/delete/bulletin/{id}', [App\Http\Controllers\AdminController::class, 'delete_bulletin'])->name('admin.delete.bulletin');
    Route::get('/admin/blog/add', [App\Http\Controllers\AdminController::class, 'add_blog'])->name('admin.add.blog');
    Route::post('/admin/blog/post', [App\Http\Controllers\AdminController::class, 'post_blog'])->name('admin.post.blog');
    Route::get('/admin/blog/view', [App\Http\Controllers\AdminController::class, 'view_blogs'])->name('admin.view.blogs');
    Route::post('/admin/blog/update/{id}', [App\Http\Controllers\AdminController::class, 'update_blog'])->name('admin.update.blog');
    Route::post('/admin/blog/delete/{id}', [App\Http\Controllers\AdminController::class, 'delete_blog'])->name('admin.delete.blog');
    Route::get('/admin/category', [App\Http\Controllers\AdminController::class, 'category'])->name('admin.category');
    Route::post('/admin/category', [App\Http\Controllers\AdminController::class, 'post_category'])->name('admin.post.category');
    Route::post('/admin/update/category/{id}', [App\Http\Controllers\AdminController::class, 'update_category'])->name('admin.update.category');
    Route::post('/admin/delete/category/{id}', [App\Http\Controllers\AdminController::class, 'delete_category'])->name('admin.delete.category');
    Route::get('/admin/account/settings', [App\Http\Controllers\AdminController::class, 'settings'])->name('admin.settings');
    Route::post('/admin/account/upload_profile/{id}', [App\Http\Controllers\AdminController::class, 'update_profile'])->name('admin.account.update.profile');
    Route::post('/admin/account/upload_photo/{id}', [App\Http\Controllers\AdminController::class, 'upload_photo'])->name('admin.account.upload.photo');
    Route::post('/admin/account/update_password/{id}', [App\Http\Controllers\AdminController::class, 'update_password'])->name('admin.account.update.password');
    Route::get('/admin/account/admins', [App\Http\Controllers\AdminController::class, 'admins'])->name('admin.admins');
    Route::post('/admin/admin/add', [App\Http\Controllers\AdminController::class, 'admin_add'])->name('admin.admin.add');
    Route::post('/admin/admin/update/{id}', [App\Http\Controllers\AdminController::class, 'admin_update'])->name('admin.admin.update');
    Route::post('/admin/admin/update/password/{id}', [App\Http\Controllers\AdminController::class, 'admin_update_password'])->name('admin.admin.update.password');
    Route::post('/admin/admin/delete/{id}', [App\Http\Controllers\AdminController::class, 'admin_delete'])->name('admin.admin.delete');
    Route::get('/admin/messages', [App\Http\Controllers\AdminController::class, 'messages'])->name('admin.messages');
    Route::get('/admin/contact-us', [App\Http\Controllers\AdminController::class, 'contact_us'])->name('admin.contact-us');
    Route::post('/admin/contact-us/delete/{id}', [App\Http\Controllers\AdminController::class, 'contact_us_delete'])->name('admin.contact-us.delete');
// });

Route::get('/admin/logout', [App\Http\Controllers\AdminController::class, 'admin_logout'])->name('admin.logout');