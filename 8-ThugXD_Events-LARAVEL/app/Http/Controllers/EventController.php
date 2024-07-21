<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\User;

class EventController extends Controller
{
    public function index(){

            $search = request('search');
            if($search){
                $events = Event::where([
                    ['title', 'like', '%'.$search.'%']
                ])->get();
            }else {
                $events = Event::all();
            }
            //$events = Event::all();
        
            return view('welcome', ['events' => $events, 'search' => $search]);
        
    }
    public function create(){
        return view('events.create');
    }
    public function store(Request $request){

        $event = new Event;
        
        $event->title = $request->title;
        $event->city = $request->city;
        $event->private = $request->private;
        $event->description = $request->description;
        $event->items = $request->items;
        $event->date = $request->date;

        //Image upload
        if($request->hasFIle('image') && $request->file('image')->isValid()){

            $requestImage = $request->image;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")).".".$extension;

            $requestImage->move(public_path('img/events'), $imageName);
            $event->image = $imageName;
        }

        $user = auth()->user();
        $event->user_id = $user->id;
        $event->save();

        return redirect('/')->with('msg', 'Evento criado com sucesso');
    }

    public function show($id){
        $event = Event::findOrFail($id);

        $eventOwner = User::where('id', $event->user_id)->first()->toArray();

        return view('events.show', ['event'=>$event, 'eventOwner'=>$eventOwner]);
    }
    public function dashboard(){
        $user = auth()->user();

        $events = $user->events;

        $eventsAsParticipant = $user->eventsAsParticipant;

        return view('events.dashboard',
            ['events' => $events, 'eventsAsParticipant'=> $eventsAsParticipant]);
    }

    public function destroy($id){
        Event::findOrFail($id)->delete();

        return redirect('/dashboard')->with('msg', 'Deletado com sucesso');
    }
    public function edit($id){
        $event = Event::findOrFail($id);

        return view('events.edit', ['event'=>$event]);
    }
    public function update(Request $request){

        $data = $request->all();

        if($request->hasFIle('image') && $request->file('image')->isValid()){

            $requestImage = $request->image;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")).".".$extension;

            $requestImage->move(public_path('img/events'), $imageName);
            $data['image'] = $imageName;
        }


        Event::findOrFail($request->id)->update($data);

        return redirect('/dashboard')->with('msg', 'Editado com sucesso');

    }
    public function joinEvent($id){
        $user = auth()->user();

        $user->eventAsParticipant()->attach($id);

        $event = Event::findOrFail($id);

        return redirect('/dashboard')->with('msg', 'Presença confirmada no evento'.$event->title);
    }
}
