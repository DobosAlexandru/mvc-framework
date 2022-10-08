<?php

use app\core\Application as App;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->include_file('_front/partials/meta') ?>
</head>

<body class="font-mono">
    <nav>
        <?php $this->include_file('_front/partials/header') ?>
    </nav>
    <main>
        {{ content }}
    </main>
    <footer>
        <?php $this->include_file('_front/partials/footer') ?>    
    </footer>
</body>

</html>