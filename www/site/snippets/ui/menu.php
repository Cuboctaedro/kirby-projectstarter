<?php
if ( !isset($menupages) ) {
    $menupages = $site->pages()->visible(); 
}

?>
<nav aria-label="Main navigation">

    <ul class="" id="menu-list">

        <?php foreach ($menupages as $item):?>

            <li>

                <a href="<?= $item->url() ; ?>" class="<?php e($item->isOpen(), ' active') ?>"><?= $item->title() ; ?></a>

            </li>

    <?php endforeach; ?>

    </ul>

</nav>
