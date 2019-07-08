<?php

namespace App\Http\Controllers;

use App\Guest;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('formDaftarTamu');
    }

    public function unexpectedIndex()
    {
        return view('unexpectedGuest');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $guest = new Guest;
        $guest->nama= strtolower($request->nama);
        $guest->hp=$request->hp;
        $guest->is_visit= false;
        $guest->save();

        return redirect()->route('daftarTamu')->with('sukses', 'sukses');
    }

    public function unexpectedStore(Request $request)
    {
        $guest = new Guest;
        $guest->nama= strtolower($request->nama);
        $guest->hp=$request->hp;
        $guest->is_visit= true;
        $guest->save();

        return redirect()->route('unexpected')->with('sukses', 'sukses');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Guest  $guest
     * @return \Illuminate\Http\Response
     */
    public function showWelcome(Guest $guest)
    {
        $guestCollection = Guest::where('is_visit', 0)
                                    ->orderBy('nama')
                                    ->get();
        return view('welcome', [
            'guestCollection' => $guestCollection
        ]);
    }

    public function pickName(Request $guest)
    {
        $visitor = Guest::find($guest->id);
        $explode= explode(' ', $visitor->nama);
        $namaTamu= ucwords($explode[0]);
        return view('guestbook', [
            'visitor' => $visitor,
            'namaTamu' => $namaTamu
        ]);
    }

    public function visit(Request $request)
    {
        $guest= Guest::find($request->id);
        $guest->is_visit = true;
        $guest->save();

        return redirect()->route('welcome')->with('thanks', 'thanks');
        
    }

}
