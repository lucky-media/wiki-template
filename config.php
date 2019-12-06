<?php

return [
    'production' => false,
    'baseUrl' => '',
    'collections' => [
        'posts' => [
            'path' => 'post/{filename}',
            'sort' => '-date',
        ]
    ],
    'getUppercase' => function($page) {
            return ucfirst($page->category);
    },
    'getExcerpt' => function ($page, $length = 150) {
        if ($page->excerpt) {
            return $page->excerpt;
        }
        $content = preg_split('/<!-- more -->/m', $page->getContent(), 2);
        $cleaned = trim(
            strip_tags(
                preg_replace(['/<pre>[\w\W]*?<\/pre>/', '/<h\d>[\w\W]*?<\/h\d>/'], '', $content[0]),
                '<code>'
            )
        );
        if (count($content) > 1) {
            return $content[0];
        }
        $truncated = substr($cleaned, 0, $length);
        if (substr_count($truncated, '<code>') > substr_count($truncated, '</code>')) {
            $truncated .= '</code>';
        }
        return strlen($cleaned) > $length
            ? preg_replace('/\s+?(\S+)?$/', '', $truncated) . '...'
            : $cleaned;
    },
];
