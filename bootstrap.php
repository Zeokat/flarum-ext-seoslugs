<?php
/*
 * (c) Zeokat
 */
 
namespace Zeokat\Transliterator;

use Illuminate\Contracts\Events\Dispatcher;

return function (Dispatcher $events) {
    $events->subscribe(Listener\SeoFriendlySlug::class);
};
