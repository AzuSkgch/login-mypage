<?php
session_start();
if(isset($_SESSION['id'])) {
    header("Location:mypage.php");
}

?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
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
                <div class="contents">
                    <div class="mail">
                        <label>メールアドレス</label><br>
                        <input type="text" class="formbox" size="40" name="mail" value="
                        <?php 
                        if(isset($_SESSION['login_keep'])) {
                        echo $_COOKIE['mail'];
                        }
                         ?>">
                    </div>
                    <div class="password">
                        <label>パスワード</label><br>
                        <input type="text" class="formbox" size="40" name="password" value="
                        <?php 
                        if(isset($_SESSION['login_keep'])) {
                        echo $_COOKIE['password']; 
                        }
                        ?>">
                    </div>
                    <div class="login_check">
                        <label><input type="checkbox" class="formbox" size="40" name="login_keep" value="login_keep"
                        <?php
                        if(isset($_COOKIE['mail'], $_COOKIE['password'])) {
                            echo "checked='checked'";
                        }
                        ?>>ログイン状態を保持する</label>
                    </div>
                    <div class="loginbutton">
                        <input type="submit" class="submit_button" size="35" value="ログイン">
                    </div>
                </div>
            </form>
        </main>
        <footer>
        © 2018 InterNous.inc All rights reserved
        </footer>
    </body>
</html>     