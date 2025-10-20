<?php

    namespace App\Http\Controllers;
    
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Http;
    
    class SummarizationController extends Controller
    {
        public function show()
        {
            return view('summary');
        }
        public function summarize(Request $request) {
            $request->validate([
                'text' => 'required|string|min:10'
            ]);
    
            // Get text input from form
            $text = $request->input('text');
    
            // Send request to Python Flask API
            $response = Http::timeout(120)->post("http://127.0.0.1:5052/summarize", [
                'text' => $text
            ]);
            
            // Get summary from API response
            $summary = $response->json()['summary'] ?? 'Summarization failed.';
    
            return view('summary', compact('summary', 'text'));
        }
    
    
      
    }
    
    

