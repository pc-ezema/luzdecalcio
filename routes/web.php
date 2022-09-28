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
Route::get('/register/invention', [App\Http\Controllers\HomePageController::class, 'register'])->name('register.invention');
Route::post('/authregister', [App\Http\Controllers\HomePageController::class, 'post_invention'])->name('post.invention');
Route::get('/success/{email}', [App\Http\Controllers\HomePageController::class, 'registration_completed'])->name('registration.completed');

// Admin
Route::get('/admin/login', [App\Http\Controllers\HomePageController::class, 'admin_login'])->name('login');
Route::post('/login', [App\Http\Controllers\HomePageController::class, 'post_admin_login'])->name('admin.login');
Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/admin/dashboard', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/admin/inventions', [App\Http\Controllers\AdminController::class, 'inventions'])->name('admin.inventions');
    Route::get('/admin/upload/inventions', [App\Http\Controllers\AdminController::class, 'upload_inventions'])->name('admin.upload.inventions');
    Route::post('/admin/post/invention', [App\Http\Controllers\AdminController::class, 'post_invention'])->name('admin.post.invention');
    Route::post('/admin/update/postedinvention/{id}', [App\Http\Controllers\AdminController::class, 'update_posted_invention'])->name('admin.update.posted.invention');
    Route::post('/admin/delete/postedinvention/{id}', [App\Http\Controllers\AdminController::class, 'delete_posted_invention'])->name('admin.delete.posted.invention');
    Route::get('/admin/view/edit/invention/{id}', [App\Http\Controllers\AdminController::class, 'view_edit_invention'])->name('admin.view.edit.invention');
    Route::post('/admin/message/invention/{id}', [App\Http\Controllers\AdminController::class, 'message_invention'])->name('admin.message.invention');
    Route::post('/admin/delete/invention/{id}', [App\Http\Controllers\AdminController::class, 'delete_invention'])->name('admin.delete.invention');
    Route::get('/file/download/{id}', [App\Http\Controllers\AdminController::class, 'download'])->name('admin.download');
    Route::get('/pdf/{id}', [App\Http\Controllers\AdminController::class, 'pdf'])->name('admin.pdf');
    Route::get('/admin/bulletin', [App\Http\Controllers\AdminController::class, 'bulletin'])->name('admin.bulletin');
    Route::post('/admin/bulletin', [App\Http\Controllers\AdminController::class, 'post_bulletin'])->name('admin.post.bulletin');
    Route::post('/admin/update/bulletin/{id}', [App\Http\Controllers\AdminController::class, 'update_bulletin'])->name('admin.update.bulletin');
    Route::post('/admin/delete/bulletin/{id}', [App\Http\Controllers\AdminController::class, 'delete_bulletin'])->name('admin.delete.bulletin');
    Route::get('/admin/add/blog', [App\Http\Controllers\AdminController::class, 'add_blog'])->name('admin.add.blog');
    Route::post('/admin/post/blog', [App\Http\Controllers\AdminController::class, 'post_blog'])->name('admin.post.blog');
    Route::get('/admin/view/blogs', [App\Http\Controllers\AdminController::class, 'view_blogs'])->name('admin.view.blogs');
    Route::post('/admin/update/blog/{id}', [App\Http\Controllers\AdminController::class, 'update_blog'])->name('admin.update.blog');
    Route::post('/admin/delete/blog/{id}', [App\Http\Controllers\AdminController::class, 'delete_blog'])->name('admin.delete.blog');
    Route::get('/admin/category', [App\Http\Controllers\AdminController::class, 'category'])->name('admin.category');
    Route::post('/admin/category', [App\Http\Controllers\AdminController::class, 'post_category'])->name('admin.post.category');
    Route::post('/admin/update/category/{id}', [App\Http\Controllers\AdminController::class, 'update_category'])->name('admin.update.category');
    Route::post('/admin/delete/category/{id}', [App\Http\Controllers\AdminController::class, 'delete_category'])->name('admin.delete.category');
    Route::get('/admin/settings', [App\Http\Controllers\AdminController::class, 'settings'])->name('admin.settings');
    Route::post('/admin/account/upload_profile/{id}', [App\Http\Controllers\AdminController::class, 'update_profile'])->name('admin.account.update.profile');
    Route::post('/admin/account/upload_photo/{id}', [App\Http\Controllers\AdminController::class, 'upload_photo'])->name('admin.account.upload.photo');
    Route::post('/admin/account/update_password/{id}', [App\Http\Controllers\AdminController::class, 'update_password'])->name('admin.account.update.password');
    Route::get('/admin/admins', [App\Http\Controllers\AdminController::class, 'admins'])->name('admin.admins');
    Route::post('/admin/admins/update', [App\Http\Controllers\AdminController::class, 'admins_update'])->name('admin.admins.update');
    Route::post('/admin/admins/update_password', [App\Http\Controllers\AdminController::class, 'admins_update_password'])->name('admin.admins.update.password');
    Route::post('/admin/admins/delete', [App\Http\Controllers\AdminController::class, 'admins_delete'])->name('admin.admins.delete');
    Route::get('/admin/messages', [App\Http\Controllers\AdminController::class, 'messages'])->name('admin.messages');
});

Route::get('/logout', [App\Http\Controllers\AdminController::class, 'logout'])->name('logout');