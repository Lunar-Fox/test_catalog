<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GuestMessage;

class GuestBookController extends Controller
{

    /**
     * renden feedback form
     */
    public function create()
    {
        return view('createmessage');
    }

    /**
     * validate and save message
     */

    public function store()
    {
        $data = request()->validate([
            'author' => ['required', 'regex:/^[a-zA-Z\s]+$/'],
            'messagetext' => ['required', 'regex:/^[?!,.а-яА-Яa-zA-Z0-9\s]+$/'],
        ]);

        GuestMessage::create($data);

        return redirect('/feedback');
    }

    /**
     * render all messages
     */

    public function index()
    {
        $messages = GuestMessage::paginate(3);
        return view('messages', compact('messages'));
    }
}
