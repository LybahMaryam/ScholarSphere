<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ELibrary;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ELibraryController extends Controller
{
  
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'file' => 'nullable|mimes:pdf,doc,docx,txt|max:2048',
            'link' => 'nullable|url',
        ]);

        $filePath = null;

        if ($request->hasFile('file')) {
            $filePath = $request->file('file')->store('elibrary_files', 'public');
        }

        ELibrary::create([
            'user_id' => Auth::id(),
            'title' => $request->title,
            'author' => $request->author,
            'file_path' => $filePath,
            'link' => $request->link,
        ]);

        return redirect()->back()->with('success', 'Resource added successfully!');
    }
    public function index()
    {
        $resources = ELibrary::latest()->get() ?? collect([]); // Ensure it's an empty collection if null
        return view('elibrary', compact('resources'));
    }
    
}

