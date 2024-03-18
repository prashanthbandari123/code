<?php

namespace App\Http\Controllers;

use App\Models\phone;
use Illuminate\Http\Request;

class phonecontroller extends Controller
{
    
    public function index(){
        $phone=phone::all();
     return view ('index',['phone'=>$phone]);
    }
    public function create(){
        return view ('create');
       }
       public function store(Request $request){
       $data = $request->validate([
       'name' => 'required',
       'price' => 'required',
       'company' =>'required',
       ]);
       $phone = phone::create($data);
       return redirect(route('index'));
       
       }
       public function edit(phone $phone){
        return view('edit',['phone'=>$phone]);
       }


       public function update(phone $phone, Request $request) {
        $data = $request->validate([
            'name' => 'required',
            'price' => 'required',
            'company' =>'required',
            ]);
            $phone->update($data);
            return redirect(route('index'));
    
       }
       public function delete(phone $phone){
        $phone->delete();
        return redirect(route('index'));
       }
}
