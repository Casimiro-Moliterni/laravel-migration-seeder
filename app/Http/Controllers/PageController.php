<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;
class PageController extends Controller
{
    //
    public function index(){
      $trains = Train::whereDate('time_departure', '>=', today())->get();
        $data=[
          "trains"=>$trains
        ];
        return view('home',$data);
    }
}
