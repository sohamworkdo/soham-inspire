<?php

namespace soham\Inspire;

use Illuminate\Support\Facades\Http;

class Inspire {

    public function justDoIt() {
        $response = Http::get('https://inspiration.goprogram.ai/');
        
        $data = $response->json();
    
        $quote = $data['quote'] ?? 'The only limit to our realization of tomorrow is our doubts of today.';
        $author = $data['author'] ?? 'Franklin D. Roosevelt';
    
        return "{$quote} - {$author}";
    }
    
}