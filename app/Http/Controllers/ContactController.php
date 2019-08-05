<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ContactController extends Controller
{
    public function index()
    {
    	$contact=DB::table('contacts')->get();
        return view('contact',compact('contact'));
    }
    public function show()
    {
    	return view('insert');
    }
    public function insert(Request $request)
    {
        $data=array();
        $data['name']=$request->name;
        $data['email']=$request->email;
        $data['phone']=$request->phone;
        $data['description']=$request->description;
        DB::table('contacts')->insert($data);
        return redirect()->route('contact');
    }
    public function destory($id)
    {
       DB::table('contacts')->where('id',$id)->delete();
       return redirect()->route('contact');
    }
    public function ron($id)
    {
        $edit=DB::table('contacts')->where('id',$id)->first();
    	return view('edit',compact('edit'));
    }
    public function update(Request $request,$id)
    {
        $data=array();
        $data['name']=$request->name;
        $data['email']=$request->email;
        $data['phone']=$request->phone;
        $data['description']=$request->description;
        DB::table('contacts')->where('id',$id)->update($data);
        return redirect()->route('contact');
    }
    public function view($id)
    {
    	$view=DB::table('contacts')->where('id',$id)->first();
    	return view('view',compact('view'));
    }

}
