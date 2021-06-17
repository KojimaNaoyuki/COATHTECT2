<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="/registration" method="POST">
        @csrf
        <label class="input-box">
            <p>氏名</p>
            <input type="text" name="name">
        </label>
        <label class="input-box">
            <p>メールアドレス</p>
            <input type="text" name="email">
        </label>
        <input type="submit" value="送信する">
    </form>
</body>

<style>
    p {
        margin: 0;
    }

    .input-box {
        display: block;
    }
</style>

</html>