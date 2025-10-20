<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Profile;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    // Show profile edit form
    public function edit()
    {
        $profile = Profile::where('user_id', Auth::id())->first();
        return view('profiles.edit', compact('profile'));
    }

    // Store a new profile
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'bio' => 'nullable|string',
            'link' => 'nullable|url',
            'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Create a new profile
        $profile = Profile::create([
            'user_id' => Auth::id(),
            'name' => $request->name,
            'bio' => $request->bio,
            'link' => $request->link,
        ]);

        // Handle profile picture
        if ($request->hasFile('profile_picture')) {
            $path = $request->file('profile_picture')->store('profile_pictures', 'public');
            $profile->update(['profile_picture' => $path]);
        }

        return redirect('/posts');
    }

    // Show a user's profile
    public function show()
{
    $profile = Profile::where('user_id', Auth::id())->with('user.posts')->firstOrFail();
    return view('show', compact('profile'));
}




    // Update an existing profile
    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'bio' => 'nullable|string',
            'link' => 'nullable|url',
            'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $profile = Profile::updateOrCreate(
            ['user_id' => Auth::id()],
            ['name' => $request->name, 'bio' => $request->bio, 'link' => $request->link]
        );

        if ($request->hasFile('profile_picture')) {
            $path = $request->file('profile_picture')->store('profile_pictures', 'public');
            $profile->update(['profile_picture' => $path]);
        }

        return redirect()->back()->with('success', 'Profile updated successfully!');
    }

    // Delete a profile
    public function destroy()
    {
        $profile = Profile::where('user_id', Auth::id())->first();
        
        if ($profile) {
            $profile->delete();
            return redirect()->route('home')->with('success', 'Profile deleted successfully!');
        }

        return redirect()->back()->with('error', 'Profile not found!');
    }

    
    public function search(Request $request)
    {
        $query = trim($request->input('query'));

        if (empty($query)) {
            return back()->with('error', 'Please enter a name to search.');
        }

        $users = User::where('name', 'LIKE', "%{$query}%")->get();

        if ($users->isEmpty()) {
            return back()->with('error', 'No users found.');
        }

        return view('searchresult', compact('users'));
    }

}
