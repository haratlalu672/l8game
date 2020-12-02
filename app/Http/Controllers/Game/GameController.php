<?php

namespace App\Http\Controllers\Game;

use App\Http\Controllers\Controller;
use App\Http\Requests\GameRequest;
use App\Models\Console;
use App\Models\Developer;
use App\Models\Game;
use App\Models\Genre;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $game = Game::latest()->paginate(16);
        return view('game.table', compact('game'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $game = new Game;
        $consoles = Console::orderBy('name', 'ASC')->get();
        $genres = Genre::orderBy('name', 'ASC')->get();
        $developer = Developer::orderBy('name', 'ASC')->get();
        $button = "Create";
        return view('game.create', compact('game', 'genres', 'developer', 'consoles', 'button'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GameRequest $request)
    {
        $game = Game::create([
            'developer_id' => request('developer'),
            'name' => request('name'),
            'slug' => Str::slug(request('name')),
            'thumbnail' => request('thumbnail') ? request()->file('thumbnail')->store('images/game') : '',
        ]);
        $game->genres()->sync(request('genres'));
        $game->consoles()->sync(request('consoles'));

        return back()->with('success', 'Game was created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Game $game)
    {
        $consoles = Console::orderBy('name', 'ASC')->get();
        $genres = Genre::orderBy('name', 'ASC')->get();
        $developer = Developer::orderBy('name', 'ASC')->get();
        $button = "Update";
        return view('game.edit', compact('game', 'genres', 'developer', 'consoles', 'button'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Game $game, GameRequest $request)
    {
        if (request('thumbnail')) {
            Storage::delete($game->thumbnail);
            $thumbnail = request()->file('thumbnail')->store('images/game');
        } elseif ($game->thumbnail) {
            $thumbnail = $game->thumbnail;
        } else {
            $thumbnail = null;
        }


        $game->update([
            'developer_id' => request('developer'),
            'name' => request('name'),
            'slug' => Str::slug(request('name')),
            'thumbnail' => $thumbnail,
        ]);
        $game->genres()->sync(request('genres'));
        $game->consoles()->sync(request('consoles'));

        return back()->with('success', 'Game was updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Game $game)
    {
        Storage::delete($game->thumbnail);
        $game->genres()->detach();
        $game->consoles()->detach();
        $game->delete();
    }
}
