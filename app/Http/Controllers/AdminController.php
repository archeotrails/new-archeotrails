<?php

namespace App\Http\Controllers;

use App\Models\Place; // Ensure Place model is imported
use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    /**
     * Display the admin dashboard.
     */
    public function index()
    {
        // Fetch all places and pass them to the view
        $places = Place::all(); // Retrieve all places
        $users = User::where('role', 'user')->get();
        $admins = User::where('role', 'admin')->get();
        $validators = User::where('role', 'validator')->get();

        return view('admin.dashboard', compact('places', 'users', 'admins', 'validators'));
    }
    public function dashboard()
{
    // Fetch users, admins, and validators
    $users = User::where('role', 'user')->get();
    $admins = User::where('role', 'admin')->get();
    $validators = User::where('role', 'validator')->get();

    return view('admin.dashboard', compact('users', 'admins', 'validators'));
}
public function deleteUser($id)
{
    $user = User::find($id);

    if ($user) {
        // Optionally delete places suggested by this user
        Place::where('suggested_by', $user->id)->delete();
        $user->delete(); // Delete the user
        return redirect()->route('admin.dashboard')->with('success', 'User deleted successfully.');
    }

    return redirect()->route('admin.dashboard')->with('error', 'User not found.');
}

public function deleteAdmin($id)
{
    $admin = User::where('role', 'admin')->find($id);

    if ($admin) {
        $admin->delete();
        return redirect()->route('admin.dashboard')->with('success', 'Admin deleted successfully.');
    }

    return redirect()->route('admin.dashboard')->with('error', 'Admin not found.');
}

public function deleteValidator($id)
{
    $validator = User::where('role', 'validator')->find($id);

    if ($validator) {
        $validator->delete();
        return redirect()->route('admin.dashboard')->with('success', 'Validator deleted successfully.');
    }

    return redirect()->route('admin.dashboard')->with('error', 'Validator not found.');
}
}
