<?php

namespace App\Http\Controllers;

use App\Game;
use App\Photo;
use App\Guest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class AppController extends Controller
{
    //
    public function login()
    {
        if(!Session::get('authorize'))
        {
            return view('loginTamu');
        }
        else
        {
            return redirect()->route('home');
        }
        
    }

    public function loginSubmit(Request $request)
    {
        $hp=Guest::where('hp', $request->hp)->first();
        if(!$hp)
        {
            return redirect()->route('login');
        }
        else 
        {
            Session::put('authorize','authorize');
            Session::put('hp', $request->hp);
            Session::put('nama', $hp->nama);
            return redirect()->route('home');
        }
    }

    public function home()
    {
        if(!Session::get('authorize'))
        {
            return redirect()->route('login');
        }
        else
        {
            return view('home');
        }
    }

    public function game()
    {
        if(!Session::get('authorize'))
        {
            return redirect()->route('login');
        }
        else
        {
            return view('gameCounter');
        }
    }

    public function score()
    {
        $game=Game::get();
        return $game;
    }

    public function displayScore()
    {
        return view('displayScore');
    }

    public function insertScore(Request $request)
    {
        
        DB::table('games')
              ->updateOrInsert(
                [ 
                  'nama'   => $request->nama, 
                  'hp' => $request->hp //find these arrays
                ], 
                [
                  'score' => $request->score //if match, then update or insert these arrays
                ]);
        
    }

    public function pickTable()
    {
        if(!Session::get('authorize'))
        {
            return redirect()->route('login');
        }
        else 
        {
            return view('tables');
        }
    }

    public function showGallery(Request $request)
    {
        if(!Session::get('authorize'))
        {
            return redirect()->route('login');
        }
        else 
        {
            $imagesArray =File::allFiles('images/tables/'. $request->table);
            $fileNameArray = [];
            foreach($imagesArray as $image)
            {
                $fileNameArray[] = $image->getFilename();
            }
            
            return view('gallery',[
                'fileNames' => $fileNameArray,
                'table'=> $request->table
            ]);
        }
    }

    public function galleryDetail($table, $photo)
    {
        return view('gallery-detail', [
            'table' => $table,
            'photo' => $photo
        ]);
    }

    public function cake()
    {
        return view('cake');
    }

    public function anniversary()
    {
        return view('anniversary');
    }


    
}
