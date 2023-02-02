<?php
session_start();
include("functions.php");
check_session_id();
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>日記</title>
</head>

<body>
  <form action="diary_create.php" method="POST">
    <fieldset>
      <legend>日記
      </legend>
      <a href="diary_read.php">一覧画面</a>
      <a href="diary_logout.php">logout</a>
      <div>
       <p>日記</p> 
        <textarea name ="todo" cols="38" rows="10"></textarea>
      </div>
      <div>
         <p>日付:</p> 
         <input type="date" name="deadline">
      </div>
      <div>
        <p>
        <button>日記をつける</button>
        </p>
      </div>
    </fieldset>
  </form>

</body>

</html>