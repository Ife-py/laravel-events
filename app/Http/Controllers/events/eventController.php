<?php

namespace App\Http\Controllers\events;

use App\Models\Event;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class eventController extends Controller
{
    public function event(){
        $events=Event::all();
        return view("events.eventRegister",compact("events"));
    }
}
