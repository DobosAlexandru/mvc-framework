<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $this->title ?? $_ENV['APP_NAME'] . ' | ' . $_ENV['APP_NAME'] ?></title>
    <!-------- Styles -------->
<link rel="stylesheet" href="<?php $this->assets('assets/css/main.css') ?>">
</head>

<body>
    <nav>
        
    </nav>
    <section>
        <div class="container">
            {{ content }}
        </div>
    </section>
</body>

</html>