<?php

use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\Test2Controller;
use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Session;

// Get|Post|Put|Patch|Delete

Route::get('/', [FrontendController::class,'homePage']);
Route::get('/about', [FrontendController::class,'aboutPage']);
Route::get('/blog', [FrontendController::class, 'blogPage']);
Route::get('/contact', [FrontendController::class, 'contactPage']);
Route::post('/contact', [FrontendController::class, 'contactPost']);

Route::get('/view-session', [FrontendController::class, 'viewSession']);


Route::get('/hello', function () {
   Session::put('key', 'value');
   Session::put('key2', 'This is another set of key2');
   Session::put('key3', 'value3');
   Session::put('key4', 'value4');
   Session::put('token', 'thisisEncryptedTiken');
   return 'Session sets';
});


// Route::get('/view', [Test2Controller::class, 'create']);


// Route::get('/layout', [Test2Controller::class, 'create']);















// Route::get('/hello-2/{number?}', [Test2Controller::class, 'index'])->where('number', '[0-9]+');

// Route::get('/hello4', function () {
//     return 'Hello 123 4';
// });

// Route::get('/hello5', function () {
//     return 'Hello 123 5';
// });

// Route::get('/welcome/{name}/{age}/{address}', function ($q,$r,$s) {
//     return 'Welcome to Giopio!' . $q . $r . $s;
// });

// // Route::get('/user', function () {
// //     return "Hello Users";
// // });


// // TODO:: Routes matches
// Route::get('/users/{name?}', function ($name = 'Guest') {
//     return "Hello, $name!";
// });

// Route::get('/users/{id}', function ($id) {
//     return "User ID is: $id";
// })->where('id', '[0-9]+');




// Route::get('/photos', [PhotoController::class, 'index']);
// Route::post('/photos', [PhotoController::class, 'store']);


// Route::get('/photos/{id}', [PhotoController::class, 'show'])->where('id', '[0-9]+');
// Route::put('/photos/{id}', [PhotoController::class, 'update'])->where('id', '[0-9]+');
// Route::delete('/photos/{id}', [PhotoController::class, 'destroy'])->where('id', '[0-9]+');



// Route::get('/photos/create', [PhotoController::class, 'create']);














// // Route::get('/user/{id}', function ($id) {
// //     return "User ID: $id";
// // })->where('id', '[0-9]+');


// Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
//     Route::get('/dashboard', function () {
//         return 'Admin Dashboard';
//     });
//     Route::get('/settings', function () {
//         return 'Admin Settings';
//     });

// });


// Route::get('/my/profile/{username?}/{email?}', function () {
//     return 'User Profile';
// })->name('my-profile');

// // $url = route('my-profile');


// // Route::post('/submit', function () {
// //     return 'Form submitted!';
// // });


// // Route::match(['get', 'post'], '/submit', function () {
// //     return 'GET or POST request received!';
// // });


// // Route::any('/submit', function () {
// //     return 'Any HTTP request received!';
// // });

// // TODO:: Redirect header code
// Route::redirect('/profile-redirect', '/admin/dashboard');




// Route::fallback(function () {
//     return response(' Page not found', 404);
// });

// // Route::get('login', function () {
// //     return 'Login page';
// // });

// Route::get('/dashboard', function () {
//     return 'Dashboard';
// })->middleware('auth');

// // Route::group(['namespace' => 'Admin'], function () {
// //     Route::get('/dashboard', [PhotoController::class, 'index']);
// // });

// Route::resource('photos', PhotoController::class);
// // Route::apiResource('products', PhotoController::class);

// // Route::redirect('/home', '/dashboard');

// Route::get('/test-json', function () {
//     return response()->json(
//         [
//             'status' => 'success',
//             'message' => 'Data fetched successfully',
//             'code' => 200,
//             'data' => [
//                 'name' => 'John Doe',
//                 'age' => 30,
//                 'email' => 'lH2E6@example.com'
//             ]
//         ]
//     );
// });
