<?php
    $nickname = htmlspecialchars($_POST['nickname'], ENT_QUOTES, 'UTF-8');
    $email = htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8');
    $content = htmlspecialchars($_POST['content'], ENT_QUOTES, 'UTF-8');

    if ($nickname === '') {
        $nickname_result = '入力されていません';
    } else {
        $nickname_result = $nickname;
    }
    if ($email === '') {
        $email_result = '入力されていません';
    } else {
        $email_result = $email;
    }
    if ($content === '') {
        $content_result = '入力されていません';
    } else {
        $content_result = $content;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>入力内容確認</title>
    <link rel="stylesheet" href="check.css">
</head>
<body>
    <h1>お問い合わせ内容</h1>
    <p>ニックネーム : <?php echo $nickname_result; ?></p>
    <p>メールアドレス : <?php echo $email_result; ?></p>
    <p>お問い合わせ内容 : <?php echo $content_result; ?></p>

    <form  method="POST" action="./thanks.php">
        <input type="hidden" name="nickname" value="<?php echo $nickname; ?>">
        <input type="hidden" name="email" value="<?php echo $email; ?>">
        <input type="hidden" name="content" value="<?php echo $content; ?>">

        <button type="button" onclick="history.back()">戻る</button>
        <?php if ($nickname !== '' && $email !== '' && $content !== ''): ?>
            <input type="submit" value="送信">
        <?php endif ?>
    </form>
</body>
</html>