<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WelcomeController::class, 'index'])->name('index');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/logout', [WelcomeController::class, 'logout'])->name('logout');
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

Auth::routes(['register' => false]);

// Route::get('/test', function () {
//     $numbers = range(1, 100);
//     foreach ($numbers as $value) {
//         if ($value % 3 == 0 && $value % 5 == 0) {
//             echo "FizzBuzz<br>";
//         } else if ($value % 3 == 0) {
//             echo "Fizz<br>";
//         } else if ($value % 5 == 0) {
//             echo "Buzz<br>";
//         } else {
//             echo $value . "<br>";
//         }
//     }
// });
Route::get('/test', function () {
    return view('test');
});
