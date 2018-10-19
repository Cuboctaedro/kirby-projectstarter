<article itemprop="blogPost" itemscope itemtype="http://schema.org/BlogPosting">
    
    <?php if ($item->featuredimage()->isNotEmpty()) : ?>
    <div>
        <img src="<?= $item->featuredimage()->toFile()->url() ?>" />
    </div>
    <?php endif; ?>
    <div>
        <h2 itemprop="headline">
            <a href="<?= $item->url() ?>" itemprop="url"><?= $item->title() ?></a>
        </h2>
        <time datetime="<?= $page->date('c') ?>" itemprop="datePublished"><?= $page->date('l F jS, Y') ?></time>
        <meta itemprop="author" content="<?= $site->title() ?>">
        <meta itemprop="publisher" content="<?= $site->title() ?>">
        <div itemprop="description">
            <?= $item->summary()->excerpt(30, 'words') ?>
        </div>
    </div>
    
</article>
