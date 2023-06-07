<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use Illuminate\Http\Request;

/**
 * Class ChatController
 * @package App\Http\Controllers
 */
class ChatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chats = Chat::paginate();

        return view('chat.index', compact('chats'))
            ->with('i', (request()->input('page', 1) - 1) * $chats->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $chat = new Chat();
        return view('chat.create', compact('chat'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Chat::$rules);

        $chat = Chat::create($request->all());

        return redirect()->route('chats.index')
            ->with('success', 'Chat created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $chat = Chat::find($id);

        return view('chat.show', compact('chat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $chat = Chat::find($id);

        return view('chat.edit', compact('chat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Chat $chat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Chat $chat)
    {
        request()->validate(Chat::$rules);

        $chat->update($request->all());

        return redirect()->route('chats.index')
            ->with('success', 'Chat updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $chat = Chat::find($id)->delete();

        return redirect()->route('chats.index')
            ->with('success', 'Chat deleted successfully');
    }
}
