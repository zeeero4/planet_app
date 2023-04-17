<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>planet show</title>
    
</head>
<body>
    <h1>惑星詳細</h1>
    <p>
        <b>名前 : {{ $planet->name }}</b>
    </p>

    <p>
        <b>名前(英語) : {{ $planet->enname }}</b>
    </p>
    <p>
        <b>半径 : {{ $planet->radius }}</b>
    </p>
    <p>
        <b>重量 : {{ $planet->weight }}</b>
    </p>

        <!-- 商品のidを元に編集ページへ遷移する -->
        <a href="/planets">戻る</a>
    
</body>
</html>
