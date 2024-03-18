<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StuffController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard/{id}', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::middleware(['auth', 'role:admin'])->group(function(){

    Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashboard');

    Route::get('/admin/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout');

    Route::get('/admin/profile', [AdminController::class, 'AdminProfile'])->name('admin.profile');

    Route::post('/admin/profile/store', [AdminController::class, 'AdminProfileStore'])->name('admin.profile.store');

    Route::get('/admin/addnotice', [AdminController::class, 'AdminAddNotice'])->name('admin.addnotice');

    Route::post('admin/notice/store', [AdminController::class, 'AdminNoticeStore'])->name('admin.notice.store');

    Route::get('admin/updatenotice', [AdminController::class, 'AdminNoticeUpdate'])->name('admin.updatenotice');

    Route::get('admin/98734{id}8', [AdminController::class, 'AdminEditNotice'])->name('admin.editnotice');

    Route::post('admin/98734{id}8/edited', [AdminController::class, 'AdminNoticeEdited'])->name('admin.notice.edited');

    Route::get('admin/addEvents', [AdminController::class, 'AddEvent'])->name('admin.addevent');

    Route::post('admin/passwordupdate', [AdminController::class, 'AdminUpdatePassword'])->name('admin.password.store');

    Route::post('admin/event/store', [AdminController::class, 'AdminEventStore'])->name('admin.event.store');

    Route::get('admin/accountant', [AdminController::class, 'accountant']);

    Route::get('notice/detete/{id}', [AdminController::class, 'NoticeDelete'])->name('admin.noticedelete');

    Route::post('admin/academic', [AdminController::class, 'Academic'])->name('admin.profile.academin');

});
//end group admin middleware

Route::middleware(['auth', 'role:stuff'])->group(function(){

    Route::get('/stuff/dashboard', [StuffController::class, 'StuffDashboard'])->name('stuff.dashboard');
}); //end group stuff middleware

