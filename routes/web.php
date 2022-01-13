<?php
// redup karena ga di pake

use App\Http\Controllers\AdminCategoryController;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardPostController;

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

Route::get('/', function () {
    return view('home', [
        "title" => "Home",
        "active" => 'home'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Mohamad Alghaz Hernanda",
        "email" => "alghaz.h@gmail.com",
        "image" => "alghaz.jpg",
        "active" => 'about'
    ]);
});



Route::get('/posts', [PostController::class, 'index']);

//halaman single post
//Route::get('posts/{slug}', [PostController::class, 'show']); ini buat metode lama yang di postcontroller pake slug

//kalo {post} doang dia bakal nyari id, tambahin :slug biar nyari slug
Route::get('posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function (Category $category) {
    return view('categories', [

        'title' => 'Post Categories',
        "active" => 'categories',
        'categories' => Category::all()

    ]);
});

//dimatiin karena udah di tangani di query kompleks yg di model
// Route::get('/categories/{category:slug}', function (Category $category) {
//     return view('posts', [

//         'title' => "Post By Catergory :$category->name",
//         "active" => 'categories',
//         'posts' => $category->posts->load('category', 'author'), //load agar menghindari kesalahan n+1, yaitu biar hemat query database

//     ]);
// });

//user:username = agar data yang di kirimi di url nya itu username bukan id
// Route::get('/authors/{author:username}', function (User $author) {
//     return view('Posts', [
//         'title' => "Post By Author : $author->name",
//         'active' => 'posts',
//         'posts' => $author->posts->load('category', 'author'), //load agar menghindari kesalahan n+1, yaitu biar hemat query database

//     ]);
// });

//name('login') = routes bisa di kasih nama, jadi sepanjang apapun url nya bisa di pake namanya
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest'); //ini hanya bisa di akses oleh user yg belum terauntetikasi

Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function () {

    return view('dashboard.index');
})->middleware('auth');

Route::get('/dashboard/post/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');

//kalo pake resource, sudah mengarah ke semuanya, jadinya udah bisa langsung create,update,delete,show data, dengan url yg sama
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

//[except] = untuk mematikan function show di controller
//middleware admin kita buat manual untuk pengecekan admin, ada di file 'is_admin', lalu kita daftarin dulu di kernel agar bisa di panggil disini
Route::resource('/dashboard/categories', AdminCategoryController::class)
    ->except('show')->middleware('admin');
