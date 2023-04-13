<?php

namespace App\Http\Controllers;

// Planetクラスを読み込む
use App\Models\Planet;
use Illuminate\Http\Request;

class PlanetController extends Controller
{
    // indexページへ移動
    
    public function index()
    {
        // モデル名::テーブル全件取得
        $planets = Planet::all();
        // memosディレクトリーの中のindexページを指定し、memosの連想配列を代入
        return view('planets.index', ['planets' => $planets]);
    }
    // showページへ移動
    public function show($id)
    {
        $planet = Planet::find($id);
        return view('planets.show', ['planet' => $planet]);
    }
}
