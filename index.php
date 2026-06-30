<?php
// アクセスカウンターの数字を保存するファイル名
$filename = 'counter.txt';

// 1. もしファイルがなければ、新しく作って「0」を書き込む
if (!file_exists($filename)) {
    file_put_contents($filename, '0');
}

// 2. ファイルから現在の数字を読み込む
$count = (int)file_get_contents($filename);

// 3. 数字を1つ増やす
$count++;

// 4. 増やした数字をファイルに上書き保存する
file_put_contents($filename, (string)$count);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>NT43-Web-Service</title>
</head>
<body>

    <h1>Hello World!</h1>

    <p>現在の時刻は <?php echo date('Y-m-d H:i:s'); ?> です。</p>

    <p>あなたは <strong><?php echo $count; ?></strong> 人目のお客様です。</p>

</body>
</html>