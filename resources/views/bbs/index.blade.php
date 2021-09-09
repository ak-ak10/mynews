<!DOCTYPE html>
<html>
    <head>
        <title>メンタリングで作ったBBS</title>
    </head>
    <body>
        これはbbs/index.blade.phpを表示しています!!!
        <h1>書き込み</h1>
        <form action="{{ action('BbsController@create') }}" method="post">
            @csrf
            タイトル：<input type="text" name="hoge"><br>
            本文：<input type="text" name="body"><br>
            <input type="submit" value="送信"/>
        </form>
    </body>
</html>