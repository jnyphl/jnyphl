<?php

return [
    'baseUrl' => '',
    'production' => false,
    'siteName' => 'JNYPHL',
    'siteDescription' => 'Jenny and Phil',
    'siteAuthor' => 'Jenny and Phil',
    'excerpt' => function ($page, $characters = 200) {
        return substr($page->getContent(), 0, $characters);
    },

    // collections
    'collections' => [
        'posts' => [
            'author' => 'Jenny', // Default author, if not provided in a post
            'sort' => '-date',
            'path' => 'blog/{filename}',
            'excerpt' => function ($page, $characters = 200) {
                return substr(strip_tags($page->getContent()), 0, $characters);
            },
        ],
        'categories' => [
            'path' => '/blog/categories/{filename}',
            'posts' => function ($page, $allPosts) {
                return $allPosts->filter(function ($post) use ($page) {
                    return $post->categories ? in_array($page->getFilename(), $post->categories, true) : false;
                });
            },
        ],
    ],

    // helpers
    'getContent' => function ($page) {

    },
    'getDate' => function ($page) {
        return Datetime::createFromFormat('U', $page->date);
    },
    'excerpt' => function ($page, $length = 255) {
        $cleaned = strip_tags(
            preg_replace(['/<pre>[\w\W]*?<\/pre>/', '/<h\d>[\w\W]*?<\/h\d>/'], '', $page->getContent()),
            '<code>'
        );

        $truncated = substr($cleaned, 0, $length);

        if (substr_count($truncated, '<code>') > substr_count($truncated, '</code>')) {
            $truncated .= '</code>';
        }

        return strlen($cleaned) > $length
            ? preg_replace('/\s+?(\S+)?$/', '', $truncated) . '...'
            : $cleaned;
    },
    'isActive' => function ($page, $path) {
        return ends_with(trimPath($page->getPath()), trimPath($path));
    },
];
