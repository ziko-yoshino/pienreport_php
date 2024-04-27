<?php
session_start();

include("funcs.php");
sschk();

$id = $_POST['id'];

// POSTデータ取得
$situation   = isset($_POST["situation"]) ? $_POST["situation"] : null;
$feelings    = isset($_POST["feelings"]) ? $_POST["feelings"] : null;
$thoughts    = isset($_POST["thoughts"]) ? $_POST["thoughts"] : null;
$evidence    = isset($_POST["evidence"]) ? $_POST["evidence"] : null;
$contraryThoughts = isset($_POST["contraryThoughts"]) ? $_POST["contraryThoughts"] : null;
$balancedview   = isset($_POST["balancedview"]) ? $_POST["balancedview"] : null;
$id   = isset($_POST["id"]) ? $_POST["id"] : null;



// DB接続
$pdo = db_conn();

// データ登録SQL作成
$stmt = $pdo->prepare("UPDATE nursebe_table SET situation=:situation, feelings=:feelings, thoughts=:thoughts, evidence=:evidence, balancedview=:balancedview, contraryThoughts=:contraryThoughts WHERE id=:id");
$stmt->bindValue(':situation', $situation, PDO::PARAM_STR);
$stmt->bindValue(':feelings', $feelings, PDO::PARAM_STR);
$stmt->bindValue(':thoughts', $thoughts, PDO::PARAM_STR);
$stmt->bindValue(':evidence', $evidence, PDO::PARAM_STR);
$stmt->bindValue(':contraryThoughts', $contraryThoughts, PDO::PARAM_STR);
$stmt->bindValue(':balancedview', $balancedview, PDO::PARAM_STR);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute(); // 実行

if($status == false){
  sql_error($stmt);
}else{
  redirect("select.php");
}
?>
