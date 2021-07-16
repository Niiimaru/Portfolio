<?php
    $nickname = htmlspecialchars($_POST['nickname'], ENT_QUOTES, 'UTF-8');
    $email = htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8');
    $content = htmlspecialchars($_POST['content'], ENT_QUOTES, 'UTF-8');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>送信完了</title>
    <link rel="stylesheet" href="../css/thanks.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>
<body>
    <h1>お問い合わせありがとうございました！</h1>
    <h1 class="title">
        <span>T</span>
        <span>H</span>
        <span>A</span>
        <span>N</span>
        <span>K</span>
        <span>&nbsp;</span>
        <span>Y</span>
        <span>O</span>
        <span>U</span>
    </h1>
    <p>ニックネーム : <?php echo $nickname; ?></p>
    <p>メールアドレス : <?php echo $email; ?></p>
    <p>お問い合わせ内容 : <?php echo $content; ?></p>

    <a href="../index.html">入力画面へ戻る</a>
    <script src="../js/thanks.js"></script>
</body>
</html>