<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Validator;
use Redirect;
use View;
use Carbon\Carbon;
use Illuminate\Support\Facades\Input;

class paparazziController extends Controller
{
    public function paparazzi(){
        $cat_name = $request->input('categoryname');
        
        $status = $request->input('status');
        
        $info = DB::table('paparazzi_post');
        if ($cat_name != '')
        $info = $info->where('cat_type',$cat_name);
        
        if ($status != '')
        $info = $info->where('status',$status);
                                                                                
        $info = $info->Orderby('postid', 'desc')->get();

          return view('back_end.paparazzi')->with(info,$info);
          //return response()->json(["success" => true, "data" => $info]);

      
    }

}-
