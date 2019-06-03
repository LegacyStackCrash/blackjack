<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EventObjects\ChatMessage;
use App\Events\NewLobbyChatMessage;
use Illuminate\Support\Facades\Log;

class ChatController extends Controller
{
    public function LobbyChatMessage()
    {
        Log::debug(auth()->user());
        Log::debug(request()->toArray());
        event(
            new NewLobbyChatMessage(
                new ChatMessage(
                    array_merge(
                        ['user' => auth()->user()->name],
                        request()->toArray()
                    )
                )
            )
        );
    }
}
