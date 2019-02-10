<?php
/*
 * (c) Zeokat
 */
 
namespace Zeokat\Transliterator;

use Flarum\Discussion\Event\Saving;
use Illuminate\Events\Dispatcher;

return function (Dispatcher $events) {
    $events->listen(Saving::class, Listeners\SeoFriendlySlug::class);
};
