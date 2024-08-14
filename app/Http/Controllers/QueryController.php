<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Throwable;
class QueryController extends Controller
{
    public function index()
    {
        return view('query');
    }
    public function getResponse(Request $request)
    {
        $apiKey = env('OPENAI_API_KEY');
        $client = new Client();
        try {
            // POST request to OpenAI's API
            $response = $client->post('https://api.openai.com/v1/completions', [
                'headers' => [
                    'Authorization' => 'Bearer ' . $apiKey,
                    'Content-Type' => 'application/json',
                ],
                'json' => [
                    'prompt' => $request->input('message'),
                    'max_tokens' => 100,  
                    'temperature' => 0.7, 
                ],
            ]);
            $result = json_decode($response->getBody(), true);
            $text = $result['choices'][0]['text'];
            return response()->json(['response' => $text]);
        } catch (Throwable $e) {
            return response()->json(['response' => 'An error occurred or OpenAI API Limit Reached. Please try again later.'], 429);
        }
    }
}