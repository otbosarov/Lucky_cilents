<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Telegram\Bot\Laravel\Facades\Telegram;

class TelegramController extends Controller
{
    public function handle(Request $request){
        $update = Telegram::getWebhookUpdates();
       // Log::info('update', [$update]);
        $chatId = $request['message']['chat']['id'];
        $text = $update->getMessage()->getText();

        if ($text == '/start'){
            Telegram::sendMessage([
                'chat_id' => $chatId,
                'text' => "assalamu alaykum botimizga xush kelibsiz!"
            ]);
        }


    }
}
