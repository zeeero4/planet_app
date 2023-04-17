<?php

namespace App\Http\Controllers;

// Planetクラスを読み込む
use App\Models\Planet;
use App\Http\Requests\PlanetRequest;

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

    public function create()
    {
        return view('planets.create');
    }

    public function store(PlanetRequest $request)
    {
        // インスタンスの作成
        $planet = new Planet;

        // 値の用意
        $planet->name = $request->name;
        $planet->enname = $request->enname;
        $planet->radius = $request->radius;
        $planet->weight = $request->weight;

        // インスタンスに値を設定して保存
        $planet->save();

        // 登録したらindexに戻る
        return redirect('/planets');
    
        //
    }
    // showページへ移動
    public function show($id)
    {
        $planet = Planet::find($id);
        return view('planets.show', ['planet' => $planet]);
    }

    public function edit($id) 
    {
        $planet = Planet::find($id);
        return view('planets.edit', ['planet' => $planet]);
    }

    public function update(PlanetRequest $request, $id)
    {
        // ここはidで探して持ってくる以外はstoreと同じ
        $planet = Planet::find($id);

        // 値の用意
        $planet->name = $request->name;
        $planet->enname = $request->enname;
        $planet->radius = $request->radius;
        $planet->weight = $request->weight;

        // インスタンスに値を設定して保存
        $planet->save();

        // 登録したらindexに戻る
        return redirect('/planets');
    }

    public function destroy($id)
    {
        $planet = Planet::find($id);
        $planet->delete();

        return redirect('/planets');
    }
}
