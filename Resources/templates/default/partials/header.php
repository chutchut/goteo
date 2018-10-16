<?php

use Goteo\Application\Currency;

$currencies = Currency::$currencies;

$num_currencies=count($currencies);

$langs = $this->lang_list('short');

?>




<div id="header">
    <h1><?=$this->text('regular-main-header')?></h1>
    <div id="super-header">
	   <?php include __DIR__ . '/header/highlights.php' ?>

	
    </div>

    <?php include __DIR__ . '/header/menu.php' ?>

</div>

