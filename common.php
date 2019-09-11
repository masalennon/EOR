<?php
// エラーを画面に表示(1を0にすると画面上にはエラーは出ない)
ini_set('display_errors',1);

// 本番環境ではログに記録する
ini_set('log_errors','On');
// ログの保存先
ini_set('error_log','/log/php_error.log');

//==============================
// 出力するエラーの設定
// お好みに応じて
//==============================

// E_NOTICEエラー以外出力する
error_reporting(E_ALL ^ E_NOTICE);

// E_DEPRECATEDエラー以外出力する
// PHP5.3以降でPEARのQuickForm使う時に指定してました。
error_reporting(E_ALL ^ E_DEPRECATED);

// 全てのエラーを出力する
// PHP5.4からはE_ALLを指定しておけば、以降新しい定数が追加されても全てのエラーが表示される
error_reporting(E_ALL);
error_reporting(-1);

// エラーを出力しない
error_reporting(0);
?>