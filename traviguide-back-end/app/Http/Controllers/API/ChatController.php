<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\ChatRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Throwable;

class ChatController extends Controller
{
    public function handleChat(ChatRequest $request)
    {
        try {

            $userMessage = $request->input('message');

            $response = Http::withHeaders([
                "Authorization" => "Bearer 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",
                "Content-Type" => "application/json"
            ])->post("https://openrouter.ai/api/v1/chat/completions", [
                "model" => "deepseek/deepseek-r1:free",
                "messages" => [
                    ["role" => "system", "content" => "You are a travel assistant specialized in Syria. Provide detailed and accurate travel plans, tips, and recommendations."],
                    ["role" => "user", "content" => $userMessage]
                ]
            ]);


            return response()->json($response->json());
        } catch (Throwable $th) {

            return response()->json(['error' => $th->getMessage()], 500);
        }
    }
}
