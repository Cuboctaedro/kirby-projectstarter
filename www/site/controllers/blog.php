<?php

return function($site, $pages, $page) {

    // fetch the basic set of pages
    $articles = $page->children()->sortBy('date', 'desc');

    // add the tag filter
    if($tag = param('tag')) {
        $articles = $articles->filterBy('tags', $tag, ',');
        $subtitle = $tag;
    }

    // fetch all tags
    $tags = $articles->pluck('tags', ',', true);

    // add the category filter
    if($cat = param('category')) {
        $articles = $articles->filterBy('categories', $cat);
    }
    
    // fetch all categories
    if($page->children()->find('categories')) {
        $categories = $page->children()->find('categories')->children();
    }
    

    // add the author filter
    if($author = param('author')) {
        $articles = $articles->filterBy('author', $author);
    }

    // fetch all authors
    $authors = $articles->pluck('author', null, true);

    
    // apply pagination
    $articles   = $articles->paginate(20);
    $pagination = $articles->pagination();

    return compact('articles', 'tags', 'tag', 'categories', 'cat', 'author', 'authors', 'pagination');
 
};
