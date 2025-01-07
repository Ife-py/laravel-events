<?php

namespace App\Http\Controllers\Admin;

use App\Models\Event;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventsManagerController extends Controller
{
    public function index(){
        $events=Event::where('user_id',Auth::user()->id)->get();
        $user=User::find(Auth::user()->id);
        return view("Admin.Events.index",compact("events","user"));
    }

    public function create(){
        return view("Admin.Events.create");
    }

    public function store(Request $request){
        $request->validate([
            "name"=>"required|min:6",
            "type"=> "required",
            "time1"=> "required",
        ]);

        Event::create([
            'name' =>  $request->name,
            'type' => $request->type,
            'time' => $request->time1,
            'user_id' => Auth::user()->id,

        ]);
        return redirect()->route('index')->with("success","New event created");
    }

    public function edit($id){
        $events=Event::find($id);
        return view("Admin.Events.edit",compact("events"));
    }
    public function update(Request $request, Event $event){
        $request->validate([
            "name"=>"required|min:6",
            "type"=> "required",
            "time1"=> "required",
        ]);

        $event->update([
            'name' =>  $request->name,
            'type' => $request->type,
            'time' => $request->time1,
        ]);
        return redirect()->route('index')->with('success','Event Successfully updated');
    }

    public function destroy(Event $event){
        $event->delete();
        return redirect()->route('index')->with('danger','Event successfully deleted');
    }
}
