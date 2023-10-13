<?php

namespace App\Http\Controllers;

use App\Models\engineb;
use App\Models\gc;
use App\Models\oil;
use App\Models\rolex;
use Illuminate\Http\Request;
use Random\Engine;

class Bikecontrol extends Controller
{
    function login(Request $request)
    {
        return view ('login');
    }

    function register(Request $request)
    {
        return view ('register');
    }
    
    function order(Request $request)
    {
        return view ('order');
    }

    function home(Request $request)
    {
        return view ('home');
    }
    
    function book(Request $request)
    {
        return view ('book');
    }
     
    function book2(Request $request)
    {
        return view ('book2');
    }
     
    function book3(Request $request)
    {
        return view ('book3');
    }



    function vijay(Request $request)
    {
        
        $request->validate([
            'email'=>'required | email',
            'pass'=>'required | min:5'

        ]);
        // dd($request->all());

        // $valid = $request->only('mail','pass');

        $valid=Rolex::where('email','=',$request->email)->first();
        if($valid)
        {
            return redirect('home')->with('success','login successfully');
        }
        else{
            return redirect('login')->with('error','Invalid creditials');
        }

    }

    function kamal(Request $request)
    {
        $request->validate([
            'name'=>'required | min:3',
            'mail'=>'required | email | unique:rolexes,email',
            'phone'=>'required  | max:10',
            'pass'=>'required | min:5',
            'cpass'=>'required | min:5 | same:pass'

        ]);

        // $store=$request->name;
        // dd($store);

        $role=new Rolex;
        $role->name=$request->name;
        $role->email=$request->mail;
        $role->phone=$request->phone;
        $role->pass=$request->pass;
        // $rolexes->cpass=$request->cpass;
        $save=$role->save();

        if($save)
        {
            return redirect('login')->with('success','registred successfully');
         }
          else
        {
            return redirect('register')->with('error','please try again');
          }

    }
    function karthi(Request $request)
    {
        $request->validate([
            'name'=>'required | alpha ',
            'phone'=>'required  | min:10|max:10',
            'bno'=>'required ',
            'cin'=>'required',
            'cout'=>'required',

        ]);

        // $store=$request->name;
        // dd($store);

        $role=new Engineb() ;
        $role->name=$request->name;
        $role->phone=$request->phone;
        $role->bno=$request->bno;
        $role->cin=$request->cin;
        $role->cout=$request->cout;
        $save=$role->save();

        if($save)
        {
            return redirect('order')->with('success','registred successfully');
         }
          else
        {
            return redirect('book');
          }

    }

    function ajith(Request $request)
    {
        $request->validate([
            'name'=>'required | alpha ',
            'phone'=>'required  | min:10|max:10',
            'bno'=>'required ',
            'cin'=>'required',
            'cout'=>'required',

        ]);

        // $store=$request->name;
        // dd($store);

        $role=new Oil() ;
        $role->name=$request->name;
        $role->phone=$request->phone;
        $role->bno=$request->bno;
        $role->cin=$request->cin;
        $role->cout=$request->cout;
        $save=$role->save();

        if($save)
        {
            return redirect('order')->with('success','registred successfully');
         }
          else
        {
            return redirect('book');
          }

    }
    
    function surya(Request $request)
    {
        $request->validate([
            'name'=>'required | alpha ',
            'phone'=>'required  | min:10|max:10',
            'bno'=>'required ',
            'cin'=>'required',
            'cout'=>'required',

        ]);

        // $store=$request->name;
        // dd($store);

        $role=new Gc() ;
        $role->name=$request->name;
        $role->phone=$request->phone;
        $role->bno=$request->bno;
        $role->cin=$request->cin;
        $role->cout=$request->cout;
        $save=$role->save();

        if($save)
        {
            return redirect('order')->with('success','registred successfully');
         }
          else
        {
            return redirect('book');
          }

    }

    function sk(Request $request)
    {
        $gets = engineb::all();
        
        return view('order',['gets'=>$gets]);
    }
    function jai(Request $request)
    {
        $gcs = gc::all();
        
        return view('order',['gets'=>$gcs]);
    }

    function veram(Request $request)
    {
        $oils = oil::all();
        
        return view('order',['oil'=>$oils]);
    }


}
