<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="wrapper">
        <header>
            <div class="header-content">
                <div class="header-logo">
                    <img src="image/logo.jpg">
                </div>
                <?foreach ($menu as $link){?>
                <div class="header-link">
                    <a href="<?=$link['link']?>"><?=$link['name']?></a>
                <?}?>
                </div>
                <div class="header-end">
                    <a href="cabinet.html">Личный кабинет</a>
                </div>
            </div>
        </header>