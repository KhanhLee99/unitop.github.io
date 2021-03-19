<?php
use App\Post;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/post', function () {
//     return "Đây là trang bài viết";
// });

// Route::get('/admin/product', function () {
//     return "Đây là trang admin sản phẩm";
// });

// Route::get('/admin/product/add', function () {
//     return "Đây là trang admin thêm sản phẩm";
// });

// // Định tuyến có tham số

// Route::get('post/{id}', function ($id) {
//     return $id;
// });

// Route::get('post/{cat_id}/page/{page}', function ($cat_id, $page) {
//     return $cat_id . "-" . $page;
// });

// // Đặt tên định tuyến

// Route::get('users/profile', function () {
//     return route('profile');
// })->name('profile');

// Route::get('/admin/product/add', function () {
//     return route('product.add');
// })->name('product.add');

// // Định tuyến có tham số tùy chọn

// Route::get('users/{id?}', function ($id = 0) {
//     return $id;
// });

// // Định tuyến với tham số có ràng buộc biểu thức chính quy
// Route::get('music/{id}', function ($id) {
//     return $id;
// })->where('id', '[0-9]+');

// Route::get('music/{slug}/{id}', function ($slug, $id) {
//     return $id . ' ' . $slug;
// })->where(['slug' => '[A-Za-z0-9-_]+']);

// //Định tuyến đến một view
// Route::view('/welcome', 'welcome');

// Route::view('/post', 'post', ['id' => 20]);

// //Định tuyến qua controller
// Route::get('/post/{id}','PostController@detail');

//Bài tập
// Route::get('admin/post', 'Admin_PostController@index');
// Route::get('admin/post/add', 'Admin_PostController@add');
// Route::get('admin/post/delete/{id}', 'Admin_PostController@delete');
// Route::get('admin/post/update/{id}', 'Admin_PostController@update');

// 
Route::get('/', 'ProductController@index');
Route::get('product/show/{id}', 'ProductController@show');
Route::get('product/update/{id}', 'ProductController@update');
Route::get('product/add', 'ProductController@add');
Route::get('product/delete/{id}', 'ProductController@delete');

//cart
Route::get('cart', 'CartController@index');
Route::get('cart/add/{id}', 'CartController@add')->name('cart.add');
Route::get('cart/delete/{rowId}', 'CartController@delete');
Route::get('cart/destroy', 'CartController@destroy');
Route::post('cart/update', 'CartController@update');

//route resource
// Route::resource('post', 'PostController');

// Route::get('admin/product/show/{id}', 'AdminProductController@show');
// Route::get('admin/product/add', 'AdminProductController@add');

// Route::get('/child', function () {
//     $users = array(
//         1 => array(
//             'name' => 'Le Viet Khanh'
//         ),
//         2 => array(
//             'name' => 'Khanh Le Viet'
//         ),
//     );
//     return view('child', ['data' => 4, 'users' => $users, 'post_title' => 'LARAVAL PRO', 'product_title' => '']);
// });

// Route::get('/child/child', function () {
//     $users = array(
//         1 => array(
//             'name' => 'Le Viet Khanh'
//         ),
//         2 => array(
//             'name' => 'Khanh Le Viet'
//         ),
//     );
//     return view('child.child', ['data' => 4, 'users' => $users, 'post_title' => 'LARAVAL PRO', 'product_title' => '']);
// });

// //
// Route::get('admin/post/show', 'AdminPostController@show');
// Route::get('admin/post/add', 'AdminPostController@add');
// Route::get('admin/post/update/{id}', 'AdminPostController@update');

//
// Route::get('users/insert', function () {
//     DB::table('users') -> insert(
//         ['name' => 'Le Viet Khanh', 'email' => 'levietkhanh99@gmail.com', 'password' => bcrypt('khanhle')]
//     );
// });

// Route::get('admin/post/add', 'AdminPostController@add');
// Route::get('admin/post/show', 'AdminPostController@show');
// Route::get('admin/post/update/{id}', 'AdminPostController@update');
// Route::get('admin/post/delete/{id}', 'AdminPostController@delete');

// Route::get('admin/product/add', 'AdminProductController@add');
// Route::get('admin/product/show/{id}', 'AdminProductController@show');
// Route::get('admin/product/delete/{id}', 'AdminProductController@delete');
// Route::get('admin/product/update/{id}', 'AdminProductController@update');

//ELOQUENT ORM
// Route::get('posts/read', function(){
//     $posts = Post::all();
//     return $posts;
// });

// Route::get('admin/posts/read', 'Admin_PostController@read');
// Route::get('admin/posts/add', 'Admin_PostController@add');
// Route::get('admin/posts/create', 'Admin_PostController@create');
// Route::get('admin/posts/update/{id}', 'Admin_PostController@update');
// Route::get('admin/posts/delete/{id}', 'Admin_PostController@delete');
// Route::get('admin/posts/restore/{id}', 'Admin_PostController@restore');
// Route::get('admin/posts/permanentlyDelete/{id}', 'Admin_PostController@permanentlyDelete');

//Role
// Route::get('role/show', 'RoleController@show');

//
Route::get('post/add', 'PostController@add');
Route::get('post/show', 'PostController@show');
Route::post('post/store', 'PostController@store');

Route::get('user/reg', function(){
    return view('user/reg');
});

Route::get('post', 'PostController@index') -> name('post.show');

//
Route::get('helper/url', 'HelperController@url');
Route::get('helper/string', 'HelperController@string');

//
Route::get('session/add', 'SessionController@add');
Route::get('session/add/flash', 'SessionController@add_flash');
Route::get('session/show', 'SessionController@show');
Route::get('session/delete', 'SessionController@delete');

//
Route::get('cookie/get', 'CookieController@get');
Route::get('cookie/set', 'CookieController@set');

//send mail
Route::get('sendmail','DemoController@sendmail');

Route::group(['prefix' => 'laravel-filemanager'], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});