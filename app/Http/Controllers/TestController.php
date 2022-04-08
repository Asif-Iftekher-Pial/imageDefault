<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function index()
    {
        return view('create');
    }


    public function create(Request $request)
    {
        // return $request->all();


        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('Ymdhms').'.'.$file->getClientOriginalExtension();
            $file->move(public_path('Image/'), $filename);
            
        }

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'image' => $filename,
        ]);

        return redirect()->route('list')->with('error', 'Data saved Successfully ');
            
    }

    public function list()
    {
        $list = User::all();
        return view('list', compact('list'));
    }

    public function find($id){
        $getData=User::find($id);
        return view('update',compact('getData'));
    }

    public function update(Request $request ,$id)
    {
        // return $request->all();


        $getData=User::find($id);

        $filename=$getData->image; // find the image that will update
    

        if ($request->file('image')) {
            $file = $request->file('image');
            $filename =date('Ymdhms').'.'.$file->getClientOriginalExtension();
            $file->move(public_path('Image'), $filename);
            @unlink(public_path('Image/' . $getData->image ));
            
        }
        $getData->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'image' => $filename
        ]);

        return redirect()->route('list');
    }
}
