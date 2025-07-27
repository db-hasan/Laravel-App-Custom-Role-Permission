<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\RoleRightController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;






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

Route::prefix('v1')->group(function () {
    Route::post('/login', [AuthController::class, 'apiLogin']);
});


Route::prefix('v1')->middleware('verify.cookie')->group(function () {
    /*
    |--------------------------------------------------------------------------
    | Role start
    |--------------------------------------------------------------------------
    */
     Route::prefix('role-right')->group(function () {
        Route::get('/get-role', [RoleRightController::class, 'index']);
        Route::post('/store-role', [RoleRightController::class, 'storeRole']);
        Route::put('/update-role/{id}', [RoleRightController::class, 'updateRole']);
        Route::delete('/delete-role/{id}', [RoleRightController::class, 'deleteRole']);


        Route::get('/get-right', [RoleRightController::class, 'indexRight']);
        Route::post('/store-right', [RoleRightController::class, 'storeRight']);
        Route::put('/update-right/{id}', [RoleRightController::class, 'updateRight']);
        Route::delete('/delete-right/{id}', [RoleRightController::class, 'deleteRight']);

        Route::get('/get-role-right', [RoleRightController::class, 'indexRoleRight']);
        Route::get('/specific-role-right', [RoleRightController::class, 'specificRoleRight']);
        Route::post('/update-role-right', [RoleRightController::class, 'updateRoleRights']);
    });

    /*
    |--------------------------------------------------------------------------
    | User Routes following the same pattern
    |--------------------------------------------------------------------------
    */

    Route::get('user-index', [UserController::class, 'indexUser']);
    Route::post('user-insert', [UserController::class, 'storeUser']);
    Route::put('user-update/{id}', [UserController::class, 'updateUser']);
    Route::delete('user-destroy/{id}', [UserController::class, 'destroyUser']);

    /*
    |--------------------------------------------------------------------------
    | Logout start
    |--------------------------------------------------------------------------
    */
    Route::post('/logout', function (Request $request) {
        $request->user()->tokens()->delete();
        return response()->json(['message' => 'Logged out'])->cookie('auth_token', '', -1, '/', 'localhost', true, true);

    });
    

});
