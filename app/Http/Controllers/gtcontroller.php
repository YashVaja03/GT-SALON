<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\gtmodel;

class gtcontroller extends Controller
{
    public function index()
    {
        return view('homepage');
    }

    public function store(Request  $request)
    {
      
            $customer = new gtmodel; //model name 
            $customer->name=$request['name'];
            $customer->email=$request['email'];
            $customer->password=$request['password'];
            $customer->mobile=$request['mobile'];
            $customer->datetime=$request['datetime'];

            $customer->save();
    
            return redirect('/');
       
    }


    public function view()
    {
       $data=gtmodel::all();
       
       return view('admin',['data'=>$data]);
    }

    public function delete($id)
    {
        $students =gtmodel::find($id);
        $students->delete();
        
        return redirect('admin')->with('status',"Data  Deleted  Successfully ");
    }

    public function edit($id)
    {
        $data =gtmodel::find($id);
        
        return view('edit',['data'=>$data]);
    }

    public function update(Request $req,$id)
    {
        $data=gtmodel::find($id);
        //   $customer = new Customers;
      
        $data->id=$req->id;
          $data->name=$req->input('name');
          $data->email=$req->input('email');
          $data->mobile=$req->input('mobile');
          $data->datetime=$req->input('datetime');
          $data->update();
          //return view('view');
          return redirect('/admin')->with('status',"Data Updated Successfully ");
        }


}
