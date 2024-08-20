<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller

{
    public function showForm()
    {
        return view('form');
    }
    public function store(Request $request)
    {
        $request->validate([
            'firstName' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:admins,email',
        ]);

        $admin = new Admin();
        $admin->first_name = $request->firstName;
        $admin->last_name = $request->lastName;
        $admin->email = $request->email;
        $admin->save();

        return response()->json(['success' => 'Veriler başarıyla kaydedildi!']);
    }
    public function showAdmins(){
        $admins = Admin::all();
        return view('adminlist',['admins'=>$admins]);
    }
}
