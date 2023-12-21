<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="/res/css/style.css">
</head>
<body <?= isset($bgClass) ? "class=$bgClass": ""?>>
    <?php require_once __DIR__ . "/_nav.php" ?>
    <?= $content ?>
</body>
</html>