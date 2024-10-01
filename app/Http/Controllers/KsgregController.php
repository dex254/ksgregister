<?php

namespace App\Http\Controllers;

use App\Models\Ksgreg;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class KsgregController extends Controller
{
    public function index()
    {
        return view('ksgreg.index');
    }

    public function store(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'fname' => 'required|string|max:255',
            'phone' => 'required|numeric',
            'email' => 'required|email',
            'country' => 'required|string|max:255',
            'pysicaladress' => 'required|string|max:255',
            'nationality' => 'required|string|max:255',
            'orgarganisation' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'category' => 'required|string',
            'reserve' => 'nullable|string',
           
            'message' => 'nullable|string',
            'files' => 'required|file|max:2048', // Max file size 2MB
        ]);

        $fileName = null;
        if ($request->hasFile('files')) {
            $file = $request->file('files');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/proof'), $fileName);
        }

        // Save the data to the database
        Ksgreg::create([
            'file_name' => $fileName,
            'fname' => $request->input('fname'),
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
            'country' => $request->input('country'),
            'pysicaladress' => $request->input('pysicaladress'),
            'nationality' => $request->input('nationality'),
            'orgarganisation' => $request->input('orgarganisation'),
            'position' => $request->input('position'),
            'category' => $request->input('category'),
            
            'message' => $request->input('message'),
            'reserve' => $request->input('reserve'),
            
        ]);

        // Redirect with success message
        return redirect()->route('admin.welcome')->with('success', 'Registration successful  Advancing Africa’s Public Service Excellence: United in pursuit to realize capable institutions and transformed leadership!');
    }
    public function welcome()
    {
        return view('admin.welcome');
    }
}
