<?php if ($data->picture()->isNotEmpty() && $page->images()->find($data->picture()) != false): ?>
<figure>
    <img src="<?= $page->image($data->picture())->url(); ?>"/>
    <figcaption class="">
        <?= $data->caption() ?>
    </figcaption>
</figure>
<?php endif; ?>