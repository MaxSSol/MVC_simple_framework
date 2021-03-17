<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <?php if(!empty($path)):?>
    <link rel="stylesheet" href="<?php echo $path;?>">
    <?php endif;?>
    <?php if(!empty($bootstrap)) echo $bootstrap;?>
    <title><?php echo $title;?></title>
</head>
<body>
    <?php echo $content;?>
</body>
</html>