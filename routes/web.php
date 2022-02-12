<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Artisan;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|

/*
Route::get('/', function () {
    return view('welcome');
});
*/

 //Clear route cache:
 Route::get('/route-cache', function() {
    $exitCode = Artisan::call('route:cache');
    return 'Routes cache cleared';
});

//Clear config cache:
Route::get('/config-cache', function() {
    $exitCode = Artisan::call('config:cache');
    return 'Config cache cleared';
});

// Clear application cache:
Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    return 'Application cache cleared';
});

// Clear view cache:
Route::get('/view-clear', function() {
    $exitCode = Artisan::call('view:clear');
    return 'View cache cleared';
});



/// user Routes

Route::get('/', 'UserController@index')->name('index');
Route::get('/garbage_collection', 'UserController@garbage_collection')->name('garbage');
Route::get('/recycling', 'UserController@recycling')->name('recycling');
Route::get('/coming-soon', 'UserController@coming_soon')->name('coming_soon');
Route::get('/FAQs', 'UserController@FAQS')->name('FAQS');
Route::get('/blogbyid/{dataId}', 'UserController@blogbyid')->name('blogbyid');
Route::get('/faqs/{data}', 'UserController@faqs_group');

Route::post('/postcomment', 'UserPostController@postcomment')->name('postcomment');

Route::get('/contact_us', function () {
    return view('user/contactus');
});

Route::get('/blogs', function () {
    return view('user/blog');
});
Route::get('/test1', function () {
    return view('user/test');
});
Route::get('/test', function () {
    return view('user/blogById1');
});

   


Route::get('/history', function () {
    return view('user/history');
});
Route::get('/contact_us', function () {
    return view('user/contact_us');
});







// admin routes
Route::post('/post_blog', 'AdminPostController@post_blog')->name('post_blog');
Route::post('/admin_search_blog', 'AdminPostController@admin_search_blog')->name('admin_search_blog');
Route::post('/upload', 'AdminPostController@upload')->name('upload');
Route::post('/admin/new_category', 'AdminPostController@new_category')->name('new_category');
Route::post('/admin/faqs_post', 'AdminPostController@faqs_post')->name('faqs_post');
Route::post('/admin/faqs_update', 'AdminPostController@faqs_update')->name('faqs_update');
Route::post('/admin/postcomment', 'AdminPostController@postcomment')->name('postcomment');


Route::get('/blogcats', 'AdminPostController@blogcats')->name('blogcats');
Route::get('/post_blog', 'AdminPostController@post_blog1')->name('post_blog');
Route::get('/discard_blog', 'AdminPostController@discard_blog')->name('discard_blog');
Route::get('/allblogs', 'AdminPostController@allblogs')->name('allblogs');
Route::get('/newblog', 'AdminPostController@newblog')->name('newblog');
Route::get('/admin/FAQS', 'AdminController@FAQS')->name('FAQS'); 
Route::get('/admin/getfaqs/{dataId}', 'AdminController@getfaqs')->name('getfaqs');
Route::get('/admin/deletefaqs/{dataId}', 'AdminController@deletefaqs')->name('deletefaqs');
Route::get('/admin/showfaqs/{dataId}', 'AdminController@showfaqs')->name('showfaqs');
Route::get('/admin/hidefaqs/{dataId}', 'AdminController@hidefaqs')->name('hidefaqs');
Route::get('/admin/previewblogbyid/{dataId}', 'AdminController@previewblogbyid')->name('previewblogbyid');

Route::get('/newlead', function () {
    return view('admin/newlead');
});

Route::get('/admin', 'AdminController@admin')->name('admin'); 
