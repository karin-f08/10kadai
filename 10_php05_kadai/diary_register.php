<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ふつうの日記ユーザ登録画面</title>
</head>

<body>
  <form action="diary_register_act.php" method="POST">
    <fieldset>
      <legend>ふつうの日記ユーザ登録画面</legend>
      <div>
        username: <input type="text" name="username">
      </div>
      <div>
        password: <input type="text" name="password">
      </div>
      <div>
        <p>
        <button>登録</button>
        </p>
      </div>
      <a href="diary_login.php">ログイン</a>
    </fieldset>
  </form>

</body>

</html>