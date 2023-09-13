<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
{





    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       
        $admin = Admin::all();
        
        return view('Admin_Dashboard.Admins_Create', ['admin' => $admin]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $admin =  new Admin;
        $admin->name = $request->name;
        $admin->last_name = $request->last_name;
        $admin->email = $request->email;
        if ($request->hasFile('image')) {
            // Validate and store the uploaded image
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/users'), $imageName);


            // $imagePath = $request->file('image')->store('images/users');
            $admin->image =  $imageName;
        }        $admin->password = $request->password;
        $admin->save();


        return redirect()->route('Admin_Dashboard.Admins_Data');
    }
    public function store_admin(Request $request, $id)
    {


        return redirect()->route('Admin_Dashboard.Admins_Data');
    }

    /**
     * Display the specified resource.
     */
    public function show(Admin $admin)
    {

        $AdminList = Admin::all();
        return view('Admin_Dashboard.Admins_Data', ['admins' => $AdminList]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $admin = Admin::find($id);
        return view('Admin_Dashboard.Admins_Update')->with('admins', $admin);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $admin = Admin::find($id);
        $admin->name = $request->name;
        $admin->last_name = $request->last_name;
        $admin->email = $request->email;
        // $admin->password = $request->password;
        $admin->save();

        // $admin->update();
        return redirect()->route('Admin_Dashboard.Admins_Data')->with('success', 'student data dashboard successfully ');
    }

    public function updateprofile(Request $request, $id)
    {
        $admin = Admin::find($id);
        $admin->name = $request->name;
        $admin->last_name = $request->last_name;
        $admin->email = $request->email;
        // $admin->password = $request->password;
        $admin->save();

        // $admin->update();
        return redirect()->route('Admin_Dashboard.profile')->with('success', 'saved');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $admin = Admin::find($id);
        $admin->delete();
        return redirect()->route('Admin_Dashboard.Admins_Data')->with('success', 'student data dashboard successfully ');
    }
}
