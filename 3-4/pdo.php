<?php

// ドライバ呼び出しを使用して MySQL データベースに接続します
// $dsn = 'mysql:dbname=checktest4;host=localhost';
// $user = 'root';
// $password = 'root';

// define("USER", "root");
// define("PASSWORD" , "root");
// define("DSN", "mysql:dbname=checktest4;host=localhost");

// function connect() {
//   $dbpdo = new PDO(dsn, user, password);
//   return $dbpdo;
// }
function connect() {
  try {
    $dbh = new PDO('mysql:dbname=checktest4;host=localhost', 'root', 'root');
    $dbh->setAttribute(PDO::ATTER_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $dbh;
  } catch (PDOException $e) {
    echo "ERROR" . $e->getMessage();
    die();
  }
// function connect() {
//   try {
//     $dbh = new PDO('mysql:dbname=checktest4;host=localhost', 'root', 'root');
//     echo "接続成功\n";
//   } catch (PDOException $e) {
//     echo "接続失敗: " . $e->getMessage() . "\n";
//     exit();
//   }
}
