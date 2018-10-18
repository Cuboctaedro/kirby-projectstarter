<!doctype html>
<html lang="<?= site()->language()->code() ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title><?= $page->title() ?> | <?= $site->title() ?></title>
    <?php snippet('meta') ?>
    <meta name="robots" content="index, follow" />
    <meta property="fb:pages" content="" />
    <link rel="canonical" href="<?= $page->url() ?>"/>
    <?php foreach($site->languages as $lang): ?>
        <?php if ($lang != site()->language() ): ?>
        <link rel="alternate" hreflang="<?= $lang->code() ?>" href="<?= $page->url($lang->code()) ?>" />
    <?php endif; endforeach; ?>

    <?php $assetsbaseurl = kirby()->urls()->assets(); ?>
    <!-- <link rel="apple-touch-icon" sizes="57x57" href="<?= $assetsbaseurl; ?>/icons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?= $assetsbaseurl; ?>/icons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?= $assetsbaseurl; ?>/icons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?= $assetsbaseurl; ?>/icons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?= $assetsbaseurl; ?>/icons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?= $assetsbaseurl; ?>/icons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?= $assetsbaseurl; ?>/icons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?= $assetsbaseurl; ?>/icons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?= $assetsbaseurl; ?>/icons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?= $assetsbaseurl; ?>/icons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= $assetsbaseurl; ?>/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?= $assetsbaseurl; ?>/icons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= $assetsbaseurl; ?>/icons/favicon-16x16.png">
    <link rel="manifest" href="manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?= $assetsbaseurl; ?>/icons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff"> -->
    
    <?= css('assets/css/style.css'); ?>

</head>
<body itemscope itemtype="http://schema.org/WebPage" >
<p class="o-hidden"><a href="#main">skip to main content</a></p>

    <div>
        <header>
            <?php if ($page->isHomePage()) : ?>
                <h1 itemprop="name" class="title-2"><a href="<?= $site->url() ?>"><?= $site->title() ?></a></h1>
            <?php else: ?>
            <p itemprop="name" class="title-2"><a href="<?= $site->url() ?>"><?= $site->title() ?></a></p>
            <?php endif; ?>
         </header>
        <?php snippet('ui/menu'); ?>
    </div>

    <main id="main">

