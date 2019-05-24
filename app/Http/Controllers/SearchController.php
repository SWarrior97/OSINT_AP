<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request){
        $nif = $request->nif;
        $name = $request->name;
        $phone = $request->phone;
        $type = $request->type;

        if($nif != null){
            if(strlen((string)$nif)!= 9){
                return back()->with(['message_danger'=>'Nif must contais 9 numbers']);
            } 
        }else{
            if($phone !=null){
                if(strlen((string)$phone)!= 7){
                    return back()->with(['message_danger'=>'Phone number must contais 7 numbers']);
                } 
            }else{
                if($name == null){
                    return  redirect('/')->with(['message_danger'=>'Please give some information']);
                }
            }
        }
        
        //dd($nif);
        
        //return view('result')->with('nif','name','phone');
        return view('result',compact('nif','name','phone','type'));
        //return redirect('/test')->with('nif','name','phone');
    }

    
}
