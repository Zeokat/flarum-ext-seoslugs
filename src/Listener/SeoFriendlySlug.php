<?php
/*
 * (c) Zeokat
 */
 
namespace Zeokat\Transliterator\Listener;

use Flarum\Event\DiscussionWillBeSaved;
use Illuminate\Contracts\Events\Dispatcher;

class SeoFriendlySlug
{

    /**
     * @param Dispatcher $events
     */
    public function subscribe(Dispatcher $events)
    {
        $events->listen(DiscussionWillBeSaved::class, [$this, 'createSlug']);
    }

    /**
     * @param DiscussionWillBeSaved $event
     */
    public function createSlug(DiscussionWillBeSaved $event)
    {
    }
}
