<?php

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

/** @var CMain $APPLICATION */

use Bitrix\Main\Localization\Loc;use Bitrix\Main\Page\Asset;

Loc::loadMessages(__FILE__);

Asset::getInstance()->addCss('https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css');

// AOS
Asset::getInstance()->addCss('https://unpkg.com/aos@2.3.1/dist/aos.css');
Asset::getInstance()->addJs('https://unpkg.com/aos@2.3.1/dist/aos.js');

// Vue.js
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/vue.js');

// Tooltip
Asset::getInstance()->addJs('https://unpkg.com/v-tooltip');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/vtooltip.js');
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/vtooltip.css');
Asset::getInstance()->addString('<meta name="viewport" content="width=device-width,initial-scale=1">');
?><!doctype html>
<html lang="<?= LANGUAGE_ID ?>">
<head>
    <title><?php $APPLICATION->ShowTitle() ?></title>
    <?php $APPLICATION->ShowHead() ?>
</head>
<body>
