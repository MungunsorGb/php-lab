<?php declare(strict_types=1);

require_once "includes/config_session.inc.php"; 

if (empty($_SESSION["user_id"])) {
    header("Location: account.php");
    die();
}

$username = htmlspecialchars((string) ($_SESSION["user_username"] ?? "Хэрэглэгч"), ENT_QUOTES, "UTF-8");
?>
<!DOCTYPE html>
<html lang="mn">
<head>
    <meta charset="UTF-8">
    <title>Гишүүдийн хэсэг</title>
</head>
<body>
    <h1>Сайн байна уу, <?= $username ?>!</h1>
    <p>Та амжилттай нэвтэрлээ.</p>
    
    <form action="includes/logout.inc.php" method="post">
        <button type="submit">Системээс гарах</button>
    </form>
</body>
</html>
