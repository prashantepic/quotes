<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Http;
use Redirect;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index() {
        return view('kanye.index');
    }
    public function getQuotes() {
        try{
            $quote = [];
            for ($i = 1; $i <= 5; $i++) {
                $response = Http::get('https://api.kanye.rest');
                if ($response->successful()) {
                    $quote[] = json_decode($response->body(), true)['quote'];
                }
            }
            $data['quote'] = $quote;
        }catch (\Exception $exception) {
                report($exception);
                abort(401);
            }
        return view('dashboard',$data);
    }
}
