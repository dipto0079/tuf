<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Clint;

class ClintController extends Controller
{
    public function index(){
        return view("admin.clint.create");
    }

    
    public function clintpost(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'username' => 'required',
            'email' => 'required',
            'number' => 'required',
            'address' => 'required',
            'country' => 'required',
            'state' => 'required',
            'city' => 'required',
            'zip' => 'required',

        ]);

        $data = [
             'name' => $request->name,
             'username' => $request->username,
             'email' => $request->email,
             'number' => $request->number,
             'address' => $request->address,
             'country' => $request->country,
             'state' => $request->state,
             'city' => $request->city,
             'zip' => $request->zip,
                ];
               
                Clint::create($data);
                return redirect()->route('cshow')
                ->with('success','Team created successfully.');
    }

    public function show() {
        $data['test']=Clint::all();
        return view('admin.clint.show',$data);
    }
    
    public function delete($id) {
        Clint::where('id',$id)->delete();
        return back();
    }

    public function cedit($id) {
        $data['test']=Clint::findOrFail($id);
        return view('admin.clint.edit',$data);
    }

    
    public function cUpdate(Request $request){
        //     // Find the team by ID
           $id=$request->id;
            $post = Clint::findOrFail($id);
            
    
        //     // Update other specified fields
    
        $data = [
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'number' => $request->number,
            'address' => $request->address,
            'country' => $request->country,
            'state' => $request->state,
            'city' => $request->city,
            'zip' => $request->zip,
               ];
    
        //     // Update team data in the database
        Clint::where(['id' => $request->id])->update($data);
    
        //     // Redirect back to the previous page
        return redirect()->route('cshow')
        ->with('success','Team created successfully.');
        }
    
}
