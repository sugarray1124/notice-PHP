<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>ろくまる農園</title>
</head>
<body>
  <h1>スタッフ追加</h1>
  <form method="post" action="staff_add_check.php">
    <p>スタッフ名を入力してください</p>
    <input type="text" name="name" style="width:200px">
    <p>パスワードを入力してください</p>
    <input type="password" name="pass" style="width:100px">
    <p>パスワードをもう一度入力してください</p>
    <input type="password" name="pass2" style="width:100px"></br>
    <input type="button" onclick="history.back()" value="戻る">
    <input type="submit" value="OK">
  </form>
</body>
</html>