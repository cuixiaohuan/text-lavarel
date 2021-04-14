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

 $events->beforeBuild(function (Jigsaw $jigsaw) {
    // your code here
    echo 'beforeBuild aaaaaaaaaaaaa';
    echo $jigsaw.getEnvironment();
 });
 
 $events->afterCollections(function ($jigsaw) {
    // your code here
    echo 'afterCollections aaaaaaaaaaaaa';
 });
 
 $events->afterBuild(function ($jigsaw) {
    // your code here
    echo 'afterBuild aaaaaaaaaaaaa';
 });