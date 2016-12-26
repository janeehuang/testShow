<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\light_notes;
use App\users;
use App\workoff;
use App\workon;
use Carbon\Carbon;
use Faker\Provider\DateTime;


use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;

class ContactUsController extends Controller
{
    public function index(){

        $query_red=DB::table('light_notes')
            ->where('level','=','red')
            ->get();
        $query_yellow=DB::table('light_notes')
            ->where('level','=','yellow')
            ->get();
        $query_green=DB::table('light_notes')
            ->where('level','=','green')
            ->get();

	$query_blue=DB::table('light_notes')
            ->where('level','=','blue')
            ->get();

        $rs_level=array(
            'red' => $query_red,
            'yellow' => $query_yellow,
            'green' => $query_green,
	    'blue' => $query_blue

        );

        //dd($rs_level);
        return View::make('contact/index')->with('rs_level',$rs_level);




    }

    public function store(){

        $input = \Request::all();



        if($input["title"] !== "" && $input["content"] !== "" && $input["hap_time"] !== ""){


            DB::table('light_notes')
                ->insert(array('uid'=>1,
                    'title' => $input["title"],
                    'level' =>$input["level"],
                    'content' => $input["content"],
                    'hap_time' => $input["hap_time"],
                    'created_at' => Carbon::now()));
        }else{
return "Error!";
}






        return Redirect::to('/contactUs');



    }

    public function create(){

        return View::make('contact.create');
    }

    public function edit($id){

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
    }



}

