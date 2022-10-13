<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo ($this->title ?? $_ENV['APP_NAME']) . ' | ' . $_ENV['APP_NAME'] ?></title>
<meta name="description" content="<?php echo $this->meta_description ?>">
<link rel="icon" href="<?php $this->assets('static/meta/favico.png') ?>">

<!-------- Styles -------->
<link rel="stylesheet" href="<?php $this->assets('assets/css/main.css') ?>">

<!-------- Fonts -------->
<link rel="stylesheet" href="<?php $this->assets('assets/css/fonts.css') ?>">

<!-------- Scripts -------->
<script src="<?php $this->assets('assets/js/main.js') ?>" defer></script>
