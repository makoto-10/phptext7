<?php


if(!empty($_POST['id'])){
    $a = 1;
}else{
    $a = 2;
}

if(!empty($_POST['pass'])){
    $b = 1;
}else{
    $b = 2;
}
?>

<form action="" method="post">
    <label>ログインID</label>
        <input type="text" name="id"><br>
    <label>パスワード</label>
        <input type="password" name="pass"><br>
    <input type="submit" name="testname" value="送信">
    <input type="button" value="クッキー削除"　onclick="delcookie()">
</form>

<?=(!empty($a) ? ($a == 1 ? 'あなたのログインIDは'. $_POST['id']. 'です' : '') : '')?><br>
<?=(!empty($b) ? ($b == 1 ? 'あなたのログインパスワードは'. $_POST['pass']. 'です' : '') : '')?>