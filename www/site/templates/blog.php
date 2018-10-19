<?php snippet('header') ?>

<header>
    <h1 itemprop="name"><?= $page->title()->html() ?></h1>
</header>

<section itemscope itemtype="http://schema.org/Blog">
    <ul>
        <?php foreach($articles as $item): ?>
        <li>
            <?php snippet('articlecard', array('item' => $item)); ?>
        </li>
        <?php endforeach; ?>
    </ul>
</section>

<?php snippet('footer') ?>
