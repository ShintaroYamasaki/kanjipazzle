<?php

// 漢字パズルの問題
$question_kanjies = array(
  array( "大", "上", "中", "上", "海" ),
  array( "何", "事", "郷", "障", "故" ),
  array( "家", "自", "力", "役", "主" ),
  array( "地", "合", "形", "書", "図" )
);

// 出題する問題をランダムに決定
$question_key = rand(0, 3);


// セッションに現在出題中の問題を入れておく
session_start();

$_SESSION['question'] = $question_kanjies[$question_key];


//問題表示と解答入力画面をインクルードして表示
include 'form.php';