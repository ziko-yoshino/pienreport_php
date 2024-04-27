<?php
//1. POSTデータ取得
$situation = isset($_POST["situation"]) ? $_POST["situation"] : "";
$feelings = isset($_POST["feelings"]) ? $_POST["feelings"] : "";
$thoughts = isset($_POST["thoughts"]) ? $_POST["thoughts"] : "";
$evidence = isset($_POST["evidence"]) ? $_POST["evidence"] : "";
$balancedview = isset($_POST["balancedview"]) ? $_POST["balancedview"] : "";
$contraryThoughts = isset($_POST["contraryThoughts"]) ? $_POST["contraryThoughts"] : "";

//2. DB接続します
include("funcs.php");
$pdo = db_conn();

//３．データ登録SQL作成
$stmt = $pdo->prepare("INSERT INTO nursebe_table(situation,feelings,thoughts,evidence, balancedview, contraryThoughts, indate)VALUES(:situation,:feelings,:thoughts,:evidence,:balancedview,:contraryThoughts,sysdate())");
$stmt->bindValue(':situation', $situation, PDO::PARAM_STR);      //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':feelings', $feelings, PDO::PARAM_STR);    //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':thoughts', $thoughts, PDO::PARAM_STR);        //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':evidence', $evidence, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':contraryThoughts', $contraryThoughts, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':balancedview', $balancedview, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)

$status = $stmt->execute(); //実行

//４．データ登録処理後
if($status==false){
  sql_error($stmt);
}else{
  redirect("index.php");
}
?>