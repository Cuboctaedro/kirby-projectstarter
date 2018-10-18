<?php

$kirby->set('page::method', 'customThumb', function($page, $w, $h) {
    return thumb($page->featuredimage()->toFile(), array('width' => $w, 'height' => $h, 'crop' => true));
});

