<?php

//ログイン時にアクセスした場合は、マイページにリダイレクトできるように
if(isset($_SESSION['id'])){
    header("Location:mypage.php");
};

?>

<!DOCTYPE HTML>
<htnl lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>マイページ登録</title>
        <link rel="stylesheet" type="text/css" href="login.css">
    </head>

    <body>
        <header>
            <img src="4eachblog_logo.jpg">
            <div class="login"><a href="login.php">ログイン</a></div>
        </header>

        <main>
            <form action="mypage.php" method="post">
                <div class="login_contents">
                    <div class="error_box">
                        メールアドレスまたはパスワードが間違っています。
                    </div>
                    <div class="mail">
                        <label>メールアドレス</label><br>
                            <input type="text" class="formbox" size="40" name="mail">
                    </div>
                    <div class="password">
                        <label>パスワード</label><br>
                            <input type="password" class="formbox" size="40" name="password">
                    </div>
                    <div class="loginBtn">
                        <input type="submit" class="login_button" size="35" value="ログイン">
                    </div>
                </div>
            </form>
        </main>

    <footer>
    ©2018 InterNous.inc. All rights reserved
    </footer>

    </body>
</html>