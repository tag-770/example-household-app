<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログイン | (参考用)家計簿アプリ</title>
</head>
<body>
    <header>
        <h1>ログインページ</h1>
    </header>
    <main>
        <form action="" method="post">
            @csrf
            <label for="email"></label>
            <input type="email" name="email" id="email">
            <label for="password"></label>
            <input type="password" name="password" id="password">
            <button type="submit">送信する</button>
        </form>
    </main>
    <footer></footer>
</body>
</html>