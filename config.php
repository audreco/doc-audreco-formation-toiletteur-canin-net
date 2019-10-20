<?php

return [
    'baseUrl' => 'https://formation-toiletteur-canin.net',
    'production' => true,
    'siteName' => 'Formation Toiletteur Canin - Tout savoir sur la formation de toiletteur canin',
    'siteDescription' => 'Tout sur la formation de toiletteur canin - Tout savoir sur la formation de toiletteur canin : quelles formations en toilettage canin ? quels programmes ? quelles méthodes ? quels sont les points essentiels à observer ?',

    // Algolia DocSearch credentials
    'docsearchApiKey' => '',
    'docsearchIndexName' => '',

    // navigation menu
    'navigation' => require_once('navigation.php'),

    // helpers
    'isActive' => function ($page, $path) {
        return ends_with(trimPath($page->getPath()), trimPath($path));
    },
    'isActiveParent' => function ($page, $menuItem) {
        if (is_object($menuItem) && $menuItem->children) {
            return $menuItem->children->contains(function ($child) use ($page) {
                return trimPath($page->getPath()) == trimPath($child);
            });
        }
    },
    'url' => function ($page, $path) {
        return starts_with($path, 'http') ? $path : '/' . trimPath($path);
    },
];
