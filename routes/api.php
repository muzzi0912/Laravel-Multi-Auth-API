<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Public routes
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login'])->name('login');

// Routes for authenticated users
Route::middleware('auth:sanctum')->group(function () {
    // Get authenticated user details
    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    // Routes for regular users
    Route::middleware('role:user')->group(function () {
        // Your regular user routes go here
    });

    // Routes for admin users
    Route::middleware('role:admin')->group(function () {
        // Your admin-only routes go here
        // For example, an endpoint to get all users
        Route::get('/users', function () {
            return response()->json(['message' => 'Admin-only route']);
        });
    });
});

