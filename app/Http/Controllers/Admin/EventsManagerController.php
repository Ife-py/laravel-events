<?php

namespace App\Http\Controllers\Admin;

use app\Models\Event;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventsManagerController extends Controller
{
    public function index(){
        return view("Admin.Events.index");
    }

    public function create(){
        return view("Admin.Events.create");
    }

    public function store(Request $request){
        $request->validate([
            "name"=>"required|min:6",
            "event-name"=>"required",

        ]);
        Event::create([
            "name"=> $request->name,
            "event-name"=>$request->eventName,
            "type"=>$request->type,
            "date"=>$request->date,

        ]);
        return redirect()->route('index');
    }
    public function edit(){
        return view("Admin.Events.edit");
    }

    public function delete(){

    }
}
