<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Ksgreg;
use Illuminate\Http\Request;
use App\Exports\KsgregExport;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Facades\Excel;

class AdminController extends Controller
{
    //
    public function loginpage()
    {
        return view('admin.adminlogin'); // Assuming 'admin.login' is the name of your login page view
    }
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|string',
           
            'password' => 'required',
        ]);

        $admin = Admin::where('email', $credentials['email'])
       
        ->first();

if ($admin && Hash::check($credentials['password'], $admin->password)) {
Auth::guard('admin')->login($admin);
return redirect()->route('admin.dashboard');
} else {
return redirect()->route('admin')->withErrors([
'email' => 'Invalid credentials',
'password' => 'Invalid credentials',
]);
        }
    }
    public function Dashboard()
    {
        $ksgreg = Ksgreg::all();
    

    // Return a response or pass the data to the view
    return view('admin.dashboard', compact('ksgreg'));

    // Return the view with products data
    
}
public function logout(Request $request)
    {
        Auth::guard('admin')->logout(); // Logout the admin user
        $request->session()->invalidate(); // Invalidate the session
        $request->session()->regenerateToken(); // Regenerate the CSRF token

        return redirect()->route('admin.login'); // Redirect to admin login page
    }
    public function destroy(Request $request)
    {
        Auth::guard('admin')->logout(); // Logout the admin user
        $request->session()->invalidate(); // Invalidate the session
        $request->session()->regenerateToken(); // Regenerate the CSRF token

        return redirect()->route('admin'); // Redirect to admin login page
    }
    public function export()
    {
        return Excel::download(new KsgregExport, 'Register.xlsx');
    } 
    public function create()
    {
        return view('admin.create'); // Return your blade view
    }
    public function store(Request $request)
    {
        // Validate form inputs
        $validatedData = $request->validate([
            'name' => 'required|string|unique:admin',
            
            'National_id' => 'required|string|unique:admin',
            'date' => 'required|date',
            'email' => 'required|string|unique:admin',

            'password' => 'required|string',
            'role' => 'required|string',
            
                ]);
      


                $validatedData['password'] = Hash::make($validatedData['password']);

                // Create a new admin instance
                $admin = new Admin();
                $admin->fill($validatedData);
                $admin->save();
      

        $admin->save();

        // Redirect back with a success message
        return redirect()->back()->with('success', 'You have a new Admin has been stored successfully!'); 
    
    
    }
}
