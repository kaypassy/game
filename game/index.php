<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>プロフィールパズル</title>
</head>
<style>
    body {
        text-align: center;
    }
    .club {
        margin: 20px;
    }
    .hometown {
        margin: 20px;
    }
</style>
<body>
    <h1>プロフィール当てゲーム</h1>
    <div class="pro">
        <form action="next.php" method="POST">
            <div class="name">
                <label for="name">名前</label>
                <input name="nme" type="text">
            </div>
            <div class="club">
                <label for="club">部活</label>
                <input name="club" type="text">
            </div>
            <?php //echo "<br>"; ?>
            <div class="hometown">
                <label for="hometown">出身地</label>
                <input name="hometown" type="text">
            </div>
            <?php //echo "<br>"; ?>
            <input type="submit" value="確定する">
        </form>
    </div>
</body>
</html>