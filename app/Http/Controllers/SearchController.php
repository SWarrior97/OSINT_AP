<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request){
        //dd($request->nif);
        $num_length = strlen((string)$request->nif);

        if($num_length != 9){
            return back()->withErrors(['message'=>'Nif must contais 9 numbers']);
        }else{
            if(strlen((string)$request->phone)!=7){
                return back()->withErrors(['message'=>'Phone number must contais 7 numbers']);
            }else{
                //all good
            }
        }
    }
}
