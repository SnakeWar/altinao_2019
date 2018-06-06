<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InicioController extends Controller
{
    public function index(){

        $table = DB::table('teams')
            ->select('*')
            ->orderByraw('pontos DESC, vitorias DESC')
            ->get();
        $gols = DB::table('infogoals')
            ->select('players_id', DB::raw('SUM(quantidade) as gols'))
            ->groupBy('players_id')
            ->orderByraw('gols DESC')
            ->limit(9)
            ->get();
        $games=\App\Game::all();
        $teams=\App\Team::all();
        $players=\App\Player::all();

        return view('inicio.index')->with(compact('table'))->with(compact('games'))->with(compact('teams'))->with(compact('gols'))->with(compact('players'));
    }
}