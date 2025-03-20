<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\ChatRequest;
use App\Models\EntertainmentPlace;
use App\Models\Hotel;
use App\Models\Restaurant;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Throwable;

class ChatController extends Controller
{

    protected $apiUrl = 'https://openrouter.ai/api/v1/chat/completions';
    protected $apiKey = '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';
    public function getTravelPlan(Request $request)
    {
        try {
            $question = $request->input('question');

            $restaurants = Restaurant::all();
            $hotels = Hotel::all();
            $entertainmentPlaces = EntertainmentPlace::all();

            $data = [
                'restaurants' => $restaurants->map(fn($restaurant) => [
                    'name' => $restaurant->name,
                    'location' => $restaurant->location,
                    'description' => $restaurant->description,
                    'price_range' => $restaurant->price_range,
                    'food_types' => $restaurant->food_types,
                    'character' => $restaurant->character,
                    'rating' => $restaurant->rating,
                    'open_time' => $restaurant->open_time,
                    'close_time' => $restaurant->close_time,
                    'contacts' => $restaurant->contacts,
                ]),
                'hotels' => $hotels->map(fn($hotel) => [
                    'name' => $hotel->name,
                    'location' => $hotel->location,
                    'description' => $hotel->description,
                    'price_range' => $hotel->price_range,
                    'rating' => $hotel->rating,
                    'has_activity' => $hotel->has_activity,
                    'room_sizes' => $hotel->room_sizes,
                    'available_times' => $hotel->available_times,
                    'contacts' => $hotel->contacts,
                ]),
                'entertainment_places' => $entertainmentPlaces->map(fn($place) => [
                    'name' => $place->name,
                    'location' => $place->location,
                    'description' => $place->description,
                    'price_range' => $place->price_range,
                    'rating' => $place->rating,
                    'type_of_activity' => $place->type_of_activity,
                    'open_time' => $place->open_time,
                    'close_time' => $place->close_time,
                    'contacts' => $place->contacts,
                ]),
            ];

            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . $this->apiKey,
                'Content-Type' => 'application/json',
            ])->post($this->apiUrl, [
                'model' => 'deepseek/deepseek-r1:free',
                'messages' => [
                    [
                        'role' => 'system',
                        'content' => 'You are a travel assistant specialized in Syria. Provide detailed and accurate travel plans, tips, and recommendations. If the question is unrelated to tourism and travel, respond that you only provide travel assistance.'
                    ],
                    [
                        'role' => 'user',
                        'content' => 'Provide a travel plan in Syria using the following data and based on this question: ' . $question . ' - ' . json_encode($data)
                    ]
                ],
            ]);

            if ($response->failed()) {
                return response()->json([
                    'status' => false,
                    'message' => 'Failed to get a response from the travel assistant.',
                    'error' => $response->body(),
                ], $response->status());
            }

            return response()->json([
                'status' => true,
                'data' => $response->json()
            ]);

        } catch (Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'An error occurred while processing the request.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

}
