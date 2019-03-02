<?php

	//"手を選んでください(0=グー, 1=チョキ, 2=パーを入力)" と表示する
	//0, 1, 2を入力させる
	//コンピュータの手をランダムで決める
	//もし　プレイヤーとコンピュータの手が同じなら
	//「あいこです」と表示する
	//もし　プレイヤーが0　でコンピュータが1　なら
	//「勝ちです」と表示する
	//もし　プレイヤーが0　でコンピュータが2　なら
	//「負けです」と表示する
	//以下なんかそんなかんじ
	
	echo "手を選んでください(0=グー, 1=チョキ, 2=パーを入力)".PHP_EOL;
	$hand = ['グー', 'チョキ', 'パー'];
	$player = fgets(STDIN);
	$playernum = intval($player);
	echo "あなた「".$hand[$playernum]."」\n";
	$rand = array_rand($hand);
	echo "相手「".$hand[$rand]."！」\n";
	//グーのとき
	if ($player == 0 && $rand == 0) {
	echo "あいこです".PHP_EOL;
	}
	if ($player == 0 && $rand == 1) {
	echo "勝ちです".PHP_EOL;
	}
	if ($player == 0 && $rand == 2) {
	echo "負けです".PHP_EOL;
	}

	//チョキのとき
	if ($player == 1 && $rand == 1) {
	echo "あいこです".PHP_EOL;
	}
	if ($player == 1 && $rand == 2) {
	echo "勝ちです".PHP_EOL;
	}
	if ($player == 1 && $rand == 0) {
	echo "負けです".PHP_EOL;
	}

	//パーのとき
	if ($player == 2 && $rand == 2) {
	echo "あいこです".PHP_EOL;
	}
	if ($player == 2 && $rand == 0) {
	echo "勝ちです".PHP_EOL;
	}
	if ($player == 2 && $rand == 1) {
	echo "負けです".PHP_EOL;
	}

	