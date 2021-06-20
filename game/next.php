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
    .a {
        margin: 20px;
    }
</style>
<body>
    <h1>今回のお題は部活です</h1>
    <h3>それぞれ選んで下さい</h3>
    <form action="">
        <div class= "select">
            <div class="a">
            Aさん
            <select name="example">
                <option value="選択肢1">サッカー</option>
                <option value="選択肢2">野球</option>
                <option value="選択肢3">吹奏楽</option>
            </select>
        </div>
        <div class="a">
        Bさん
        <select name="example">
            <option value="選択肢1">サッカー</option>
            <option value="選択肢2">野球</option>
            <option value="選択肢3">吹奏楽</option>
        </select>
        </div>
        <div class="a">
        Cさん
        <select name="example">
            <option value="選択肢1">サッカー</option>
            <option value="選択肢2">野球</option>
            <option value="選択肢3">吹奏楽</option>
        </select>
        </div>
        </div>
        <input type="submit" value="確定する">
    </form>
</body>
</html>