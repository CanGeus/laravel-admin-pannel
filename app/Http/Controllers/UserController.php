<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function index()
    {
        // Fetch all users except the currently authenticated user
        $users = User::where('id', '<>', Auth::id())->get();
        return view('admin.user', compact('users'));
    }

    public function destroy($id)
    {
        // Find the user by ID
        $user = User::findOrFail($id);

        // Check if the authenticated user has permission to delete this user
        if (Auth::user()->id === $user->id) {
            return back()->withErrors(['error' => 'You cannot delete your own account.']);
        }

        try {
            if ($user->photo) {
                Storage::disk('public')->delete($user->photo);
            }
            $user->delete();
            return back()->with('success', 'User deleted successfully.');
        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'Failed to delete user: ' . $e->getMessage()]);
        }
    }
}
