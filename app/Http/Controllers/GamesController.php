<?php

namespace App\Http\Controllers;
use App\Models\Newrelease;
use App\Models\Support;
use App\Models\Upcomingrelease;
use Illuminate\Http\Request;


class GamesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $games = Newrelease::all();
        $upcominggames = Upcomingrelease::all();

        return view('home', ['games' => $games,'upcominggames' => $upcominggames]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('contact');
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'message' => 'required|string|max:255',
        ]);


        Support::create($validatedData);
        return redirect('/home');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $game = Newrelease::find($id);
        $upcominggame = Upcomingrelease::find($id);

        if ($game) {
            $game->likes += 1;
            $game->save();
        } else {
            if ($upcominggame) {
                $upcominggame->likes += 1;
                $upcominggame->save();
            }
        }
        return redirect('/home');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $game = Newrelease::find($id);
        $upcominggame = Upcomingrelease::find($id);

        if ($game) {
            $game->delete();

        }
        else {
            if ($upcominggame) {
                $upcominggame->delete();

            }
        }

        return redirect('/home');
    }
}
