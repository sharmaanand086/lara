<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Question;
use DB;
use Input;
class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { $data = DB::table("Questions")         
          ->get();
         // dd($data);
      return view('layouts.child',['questions'=>$data]) ;
    }
    
    public function storeForm()
    {
      $field_one = Input::get('inputval');
    //  dd(array_sum($field_one));
      $ans = array_sum($field_one);
      //print_r($ans);
      $final = DB::table("answers")
             ->select('content') 
             ->where('first','<=',$ans)  
             ->where('last','>=',$ans)      
             ->get();  
            // print_r($final);
         return view('layouts.thankyou',['final'=>$final]);
     
    }

     
}
