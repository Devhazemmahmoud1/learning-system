<?php

use Illuminate\Support\Facades\Route;

use Carbon\Carbon;

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
    /*
    if (!session()->has('login')) {
        return redirect('/log');
    }
    */

    return view('home')->with([
        'page' => 'Learning managment system'
    ]);
});


Route::get('/students', function () {
    return view('student')->with([
        'page' =>   'Students page',
        'students' => DB::table('students')->get(),
        'ismailia' => DB::table('groups')->where('city', 1)->get(),
        'obour' => DB::table('groups')->where('city', 2)->get(),
        'cairo' => DB::table('groups')->where('city', 3)->get()
    ]);
});

Route::post('/add-user', ['App\Http\Controllers\HomeController' , 'upload']);

Route::post('/update/user', ['App\Http\Controllers\HomeController' , 'updateNew']);

Route::get('/student/{serial}', function ($serial) {
    return view('single')->with([
        'page' => 'student page',
        'student' => DB::table('students')->where('serial', $serial)->first()
    ]);
});

Route::get('/get/user/{query}', function ($query) {
    $bySerial = DB::table('students')->where('serial', $query)->first();

    if ($bySerial) {
        return redirect('/student' . '/'  . $query);
    }

    $byPhone = DB::table('students')->where('phone', $query)->first();

    if ($byPhone) {
        return redirect('/student' . '/'  . $byPhone->serial);
    }

    return redirect('/');
});

Route::get('/student-action/delete/{id}', function($id) {
    DB::table('students')->where('id', $id)->delete();

    return redirect('/students');
});


Route::get('/attendance', function() {
    return view('att')->with([
        'page' => 'Add An Attendance'
    ]);
});

Route::post('/user/attendance', function (Request $request) {

    $data = request()->all();

    $user = DB::table('students')->where('serial', $data['userSerial'])->first();
    if (! $user) {
        return redirect('/attendance')->with([
            'error' => 'Student not found',
            'page' => 'Add An Attendance'
        ])->with([
            'error' => 'Student is not found'
        ]);
    }

    DB::table('attendances')->insert([
        'attend' => 1,
        'serial' => $data['userSerial'],
        'group'  => $user ? $user->group : 0,
        'city'   => $user ? $user->city : 0,
        'year'   => $user ? $user->year : 0, 
        'created_at' => Carbon::now(), 
        'updated_at' => Carbon::now(),
    ]);

    Session::put('success', 'Student has been assigned as attended');

    return back()->with([
        'success' => 'Student has been assigned as attended'
    ]);

});

Route::view('barcode', 'barcode');

/*
Route::get('/log', function() {

    if (session()->has('login')) {
        return redirect('/');
    }
    return view('login')->with([
        'page' => 'Garden Palace login'
    ]);

});

*/

//Route::post('/log-on', [App\Http\Controllers\AuthController::class, 'login']);

//Route::get('/logout', [App\Http\Controllers\AuthController::class, 'logout']);

Auth::routes();

