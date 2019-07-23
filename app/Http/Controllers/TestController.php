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
    { $data = DB::table("questions")         
          ->get();
         // dd($data);
      return view('layouts.child',['questions'=>$data]) ;
    }
    
    public function storeForm()
    {
      $field_one = Input::get('inputval');
      $field_qtn = Input::get('qtn');
         $n = array_filter($field_one, function($n){
            return $n >= 3;
        });
     $res=array_intersect_key($field_qtn, $n);
   // dd($n,$res);
      $ans = array_sum($field_one);
     // print_r($ans);
      $final = DB::table("answers")
             ->select('content') 
             
             ->where('first','<=',$ans)  
             ->where('last','>=',$ans)      
             ->get();
     
         return view('layouts.thankyou',['final'=>$final,'q'=>$res]);
     
    }

     
}
