<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>家計簿作成 | (参考用)家計簿アプリ</title>
</head>
<body>
    <header>
        <h1>家計簿を登録する</h1>
    </header>
    <main>
        <form action="" method="post">
            @csrf
            <label for="title">タイトル</label>
            <input type="text" name="title" id="title">
            <label for="amount">金額</label>
            <input type="number" name="amount" id="amount">
            <label for="memo">メモ</label>
            <textarea name="memo" id="memo" cols="30" rows="10"></textarea>
            <button type="submit">送信する</button>
        </form>
    </main>
    <footer></footer>
</body>
</html>