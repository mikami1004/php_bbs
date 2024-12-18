<!DOCTYPE html>
<html>
    <head lang="ja">
        <meta charset="utf-8">
        <title>php_bbs_sample</title>
    </head>
    <body>
        <h1>php簡易掲示板</h1>

        <!-- ここで投稿内容を送信 -->
         <form action="" method="post">
            メッセージ:<input type="text" name="message">
            ユーザー名:<input type="text" name="user_name">
            <input type="submit" name="send_message" value="投稿">
         </form>

         <h2>投稿一覧</h2>
         <ul>
            <li><!-- ここに投稿内容が表示される --></li>
         </ul>
    </body>
</html>