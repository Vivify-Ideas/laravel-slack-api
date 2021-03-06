<?php

namespace VivifyIdeas\SlackApi\Facades;

use Illuminate\Support\Facades\Facade;

class SlackChat extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'slack.chat';
    }
}
