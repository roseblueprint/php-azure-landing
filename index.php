<?php
$title = "Welcome to My Azure PHP App";
$subtitle = "Deployed with GitHub & Azure App Service";
$ctaText = "Contact Us";
$ctaLink = "#";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(135deg, #0f2027, #203a43, #2c5364);
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            text-align: center;
        }
        .box {
            max-width: 800px;
            padding: 40px;
        }
        h1 { font-size: 3rem; }
        p { font-size: 1.1rem; }
        a {
            display: inline-block;
            margin-top: 20px;
            padding: 14px 30px;
            background: #00c6ff;
            color: #003344;
            text-decoration: none;
            border-radius: 25px;
            font-weight: bold;
        }
    </style>
</head>
<body>
<div class="box">
    <h1><?= $title ?></h1>
    <h2><?= $subtitle ?></h2>
    <p>This PHP application is deployed automatically from GitHub to Azure.</p>
    <a href="<?= $ctaLink ?>"><?= $ctaText ?></a>
    <p style="margin-top:30px;font-size:0.9rem;">
        © <?= date("Y") ?> PHP on Azure
    </p>
</div>
</body>
</html>
