<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function menu(){
        return view ('pages.menu');
    }

    public function contact(){
        return view ('pages.contact');
    }

    public function placeorder(){
        return view ('pages.placeorder');
    }

    public function techstack(){
        return view ('pages.technologystack');
    }
    
    public function adminorders(){
        return view ('admin.adminorders');
    }
    
    public function edit($username){

        return view('pages.edit');
    }

    public function update($username){


        $data = request()->validate([
            'username' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
            'contact' => 'required',
        ]);

        auth()->user()->update($data);

        return redirect ('/home');
    }

}