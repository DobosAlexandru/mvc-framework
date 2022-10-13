<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo ($this->title ?? $_ENV['APP_NAME']) . ' | ' . $_ENV['APP_NAME'] ?></title>
<meta name="description" content="<?php echo $this->meta_description ?>">
<link rel="icon" href="<?php $this->assets('static/meta/favico.png') ?>">

<!-------- Styles -------->
<link rel="stylesheet" href="<?php $this->assets('assets/css/main.css') ?>">

<!-------- Fonts -------->
<link rel="stylesheet" href="<?php $this->assets('assets/css/fonts.css') ?>">

<!-- Facebook OpenGraph -->
<meta property="og:title" content="<?php echo $this->og_title ?? $this->title ?>">
<meta property="og:description" content="<?php echo $this->$og_description ?? $this->meta_description ?>">
<meta property="og:image" content="">
<meta property="og:site_name" content="<?php echo $_ENV['APP_NAME'] ?>">

<!-------- Scripts -------->
<script src="<?php $this->assets('assets/js/main.js') ?>" defer></script>
<!-- <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script> -->