<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>planet show</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <a href="/planets">戻る</a>
    <h1>論文詳細</h1>
    <p>
        <h2><b>タイトル：{{ $planet->name }}</b></h2>
    </p>

    <p>
        <b>{{ $planet->enname }}</b>
    </p>
    <p>
        <b>{{ $planet->radius }}</b>
    </p>
    <p>
        <b>{{ $planet->weight }}</b>
    </p>

    <div class="button-group">
        <!-- 商品のidを元に編集ページへ遷移する -->
        <button onclick="location.href='/planets'">一覧へ戻る</button>
        <button onclick="location.href='/planets/{{ $planet->id }}/edit'">編集する</button>
        <form action="/planets/{{ $planet->id }}" method="post">
            @csrf
            @method('DELETE')
            <input type="submit" value="削除する" onclick="if(!confirm('削除しますか？')){return false};">
        </form>
    </div>
    
</body>
</html>
