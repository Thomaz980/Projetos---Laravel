<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
// use App\Models\Event;

class EventsController extends Controller
{
    public function show(User $user)
    {
        return Inertia::render('User/Show', [
            'user' => $user
        ]);
    }





//     public function show(Event $event)
//     {
//         return Inertia::render('Event/Show', [
//             'event' => $event->only(
//                 'id',
//                 'title',
//                 'start_date',
//                 'description'
//             ),
//         ]);
//     }
}

