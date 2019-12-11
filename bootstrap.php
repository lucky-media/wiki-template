<?php

use TightenCo\Jigsaw\Jigsaw;

/** @var $container \Illuminate\Container\Container */
/** @var $events \TightenCo\Jigsaw\Events\EventBus */

/**
 * You can run custom code at different stages of the build process by
 * listening to the 'beforeBuild', 'afterCollections', and 'afterBuild' events.
 *
 * For example:
 *
 * $events->beforeBuild(function (Jigsaw $jigsaw) {
 *     // Your code here
 * });
 */

$events->afterBuild(function (Jigsaw $jigsaw){

    $data = collect($jigsaw->getCollection('posts')->map(function ($page) use ($jigsaw) {
        return [
            'title' => $page->title,
            'categories' => $page->category,
            'link' => rightTrimPath($jigsaw->getConfig('baseUrl')) . $page->getPath(),
            'snippet' => $page->getExcerpt(),
        ];
    })->values());

    file_put_contents($jigsaw->getDestinationPath() . '/index.json', json_encode($data));

});