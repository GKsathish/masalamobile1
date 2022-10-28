<?php

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

Route::get('Horoscope_details', function () {
    return view('front_end.Horoscope_details');
});
Route::get('trailerscontent', function () {
    return view('front_end.trailerscontent');
});

Route::get('admin', function () {
    return view('auth.login');
});

Route::get('meta', function () {
    return view('front_end.meta');
});

Route::get('meta_share&id={postlink}&share={value}','Controller@meta_share');

Route::get('changePassword', function () {
    return view('back_end.change-password');
});

Auth::routes(['verify' => true]);

// Route::get('/home', 'HomeController@index')->name('home');

Auth::routes(['verify' => true]);

// Route::get('/personal-information', 'UserController.php@index')->name('personal-information');

// // change password
// Route::get('/changePassword','HomeController@showChangePasswordForm');
// Route::post('/changePassword','HomeController@changePassword')->name('changePassword');

// Route::get('posts', function () {
//     return view('back_end.posts');
// });
Route::get('posts', 'Controller@get_posts_admin');

Route::get('dashboard', function () {
    return view('back_end.home');
});

Route::get('trending', function () {
    return view('back_end.trending');
});

Route::get('rss-feed', function () {
    return view('back_end.rss-feed');
});

Route::get('visualstories', function () {
    return view('back_end.visualstories');
});

Route::get('add_visual_story', function () {
    return view('back_end.add_visual_story');
});
Route::get('add_posts', function () {
    return view('back_end.add_posts');
});

Route::get('edit_posts', function () {
    return view('back_end.edit_posts');
});

Route::get('add_rss', function () {
    return view('back_end.add_rss');
});
Route::get('edit_rss', function () {
    return view('back_end.edit_rss');
});


Route::get('view_stories', function () {
    return view('back_end.view_stories');
});

Route::get('edit_vstories', function () {
    return view('back_end.edit_vstories');
});

Route::get('edit_stories', function () {
    return view('back_end.edit_stories');
});

Route::get('privacy-policy', function () {
    return view('front_end.privacy-policy');
});

Route::get('paparazzi-details', function () {
    return view('front_end.paparazzi-details');
});
// Route::gety('/post-single&id={rsstitle}', function () {
//     return view('front_end.post-single');
// });
Route::get('/', function () {
    return view('front_end.index');
});

Route::get('/Telugu', function () {
    return view('front_end.Telugu');
});

Route::get('/Hindi', function () {
    return view('front_end.Hindi');
});

Route::get('/index27', function () {
    return view('front_end.index27');
});

Route::get('contact-us', function () {
    return view('front_end.contact-us');
});
Route::get('privacy-policy', function () {
    return view('front_end.privacy-policy');
});
Route::get('terms-of-use', function () {
    return view('front_end.copyright-policy');
});
Route::get('accessibility', function () {
    return view('front_end.accessibility-statement');
});
Route::get('disclosure', function () {
    return view('front_end.disclosures');
});

Route::get('send_noti', function () {
    return view('front_end.send_notification');
});
Route::get('tstindex', function () {
    return view('front_end.tstindex');
});


// Route::get('send_noti','Controller@send_noti_contro');

Route::get('send_schedule_noti', function () {
    return view('front_end.send_schedule_noti');
});

Route::get('roles', function () {
    return view('back_end.roles');
});
Route::get('create-user', function () {
    return view('back_end.create_user');
});
Route::get('paparazzi', function () {
    return view('back_end.paparazzi');
});

Route::get('add_paparazzi_posts', function () {
    return view('back_end.add_paparazzi_post');
});


Route::get('edit_paparazzi_posts', function () {
    return view('back_end.edit_paparazzi_post');
});


Route::get('addrss', 'addrsspostsController@index');
Route::get('setschedule', 'addrsspostsController@schedule');
Route::get('search', 'Controller@search');
Route::get('searchhashtag', 'Controller@searchhashtag');
Route::get('post-single&id={rsstitle}', 'Controller@feed');
Route::get('paparazzi-post&id={rsstitle}', 'Controller@paparazzi_feed');
Route::get('post-single/{rsstitle}', 'Controller@feed');
Route::get('post-single&id={rsstitle}.html', 'Controller@feed');
Route::get('admin-post-single&id={rsstitle}', 'Controller@adminfeed');
Route::get('post-content&id={rsstitle}', 'Controller@category');
Route::get('stories&id={id}', 'Controller@vs');
Route::get('horoscope&id={id}', 'Controller@hs');
Route::post('subscribe-addon', 'Controller@add_subscribe');
Route::post('keep-in-touch', 'Controller@enquiry');

Route::get('add_story&id={id}','Controller@add_story');

Route::post('new_post', 'postController@new_post');
Route::post('add_new_paparazzi_post', 'postController@add_new_paparazzi_post');

Route::post('edit_post', 'postController@edit_post');
Route::post('edit_paparazzi_post', 'postController@edit_paparazzi_post');

Route::get('delete_paparazzi_post&{id}','postController@delete_paparazzi_post');
Route::get('delete_post&{id}','postController@delete_post');
Route::post('sessionfilter','Controller@filtersearch');
Route::post('add-rss-feed', 'postController@add_rss_feed');
Route::post('edit_rss_feed', 'postController@edit_rss_feed');
Route::get('delete_rss&{id}','postController@delete_rss');
Route::get('remove_trending&postid={id}', 'postController@remove_trending');

Route::post('add_visualstory', 'postController@add_visualstory');
Route::post('add_newstories', 'postController@add_newstories');

Route::post('edit_vstory', 'postController@edit_vstory');
Route::get('delete_vstory&{id}','postController@delete_vstory');

Route::post('edit_storynew', 'postController@edit_storynew');
Route::get('delete_stories&transid={transid}&storyid={storyid}','postController@delete_stories');

Route::post('login_process','LoginController@login_process');
Route::get('login_process','LoginController@login_process');
Route::post('change_password','LoginController@change_password');

// Route::post('postscategory','Controller@postcategoryadmin');
Route::post('posts','Controller@postcategoryadmin');
Route::get('get-json','Controller@getjson');
Route::post('posts-pending','Controller@post_pending');
Route::get('noti-token-send&id={id}','Controller@getnotitoken');
Route::get('get-share-info&id={id}','Controller@getshareinfo');
Route::get('delete_role&roleid={id}','roleController@delete_role');
Route::post('add_role', 'roleController@add_role');
Route::get('manage-permission&id={id}','roleController@manage_permission');
Route::post('edit_rolepermission','roleController@edit_rolepermission');
Route::post('add_user', 'roleController@add_user');
Route::get('delete_user&userid={id}','roleController@delete_user');
Route::post('get-user-rss', 'roleController@get_user_rss');
Route::get('add_subcription','Controller@add_subcription');


Route::get('/upload',function(){
    return view('upload');
});


Route::get('/trailers',function(){
    return view('front_end.trailers');
});