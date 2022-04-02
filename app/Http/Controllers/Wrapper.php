<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Wrapper extends Controller
{
    public function gettwt($id){
        $json = Http::withToken('AAAAAAAAAAAAAAAAAAAAAJWyaAEAAAAAn8RgHB6ymvxJ4eeomF8QZXXpYU4%3D4UjqaWHcNVZ9cSuDBxUakc4iXIKY43QPXU46rCMvZJxE5YNOxK')->get('https://api.twitter.com/2/tweets/'.$id)->json();
        return response()->json($json);
    }

    public function userby($username){
        $json = Http::withToken('AAAAAAAAAAAAAAAAAAAAAJWyaAEAAAAAn8RgHB6ymvxJ4eeomF8QZXXpYU4%3D4UjqaWHcNVZ9cSuDBxUakc4iXIKY43QPXU46rCMvZJxE5YNOxK')->get('https://api.twitter.com/2/users/by/username/'.$username)->json();
        return response()->json($json);
    }

    public function userid($id){
        $json = Http::withToken('AAAAAAAAAAAAAAAAAAAAAJWyaAEAAAAAn8RgHB6ymvxJ4eeomF8QZXXpYU4%3D4UjqaWHcNVZ9cSuDBxUakc4iXIKY43QPXU46rCMvZJxE5YNOxK')->get('https://api.twitter.com/2/users/'.$id)->json();
        return response()->json($json);
    }

    public function followers($id){
        $json = Http::withToken('AAAAAAAAAAAAAAAAAAAAAJWyaAEAAAAAn8RgHB6ymvxJ4eeomF8QZXXpYU4%3D4UjqaWHcNVZ9cSuDBxUakc4iXIKY43QPXU46rCMvZJxE5YNOxK')->get('https://api.twitter.com/2/users/'.$id.'/followers')->json();
        return response()->json($json);
    }

    public function liked($id){
        $json = Http::withToken('AAAAAAAAAAAAAAAAAAAAAJWyaAEAAAAAn8RgHB6ymvxJ4eeomF8QZXXpYU4%3D4UjqaWHcNVZ9cSuDBxUakc4iXIKY43QPXU46rCMvZJxE5YNOxK')->get('https://api.twitter.com/2/users/'.$id.'/liked_tweets')->json();
        return response()->json($json);
    }
}
