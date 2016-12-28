<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('login',function(){
	return view ('login');
});

Route::get ('/submitContact','');

Route::get('/contactUs','ContactUsController@index');

Route::get('/create', 'ContactUsController@create');

Route::post('/store','ContactUsController@store');

Route::get('/contact/{id}/edit', function($id)
{

    $light_notes = DB::table('light_notes')
        ->where('id','=',$id)
        ->first();


    return view('edit')->with([
        'id' => $id,
        'hap_time' => $light_notes->hap_time,
        'title' => $light_notes->title,
        'content' => $light_notes->content,
        'level' => $light_notes-> level

    ]);

});
Route::post('/update', function (Request $request){

    $input = \Request::all();
    //dd($input);
    \App\light_notes::where('id', $input['id'])->update([
        'level' => $input['level'],
        'hap_time' => $input['hap_time'],
        'title'=> $input['title'],
        'content' =>$input['content']
    ]);

    //dd('1234');


    return Redirect::to('/contactUs');

});

Route::get('delete/{id}', function ($id){

    \App\light_notes::where('id',$id)->delete();
    return Redirect::to('/contactUs');

});
