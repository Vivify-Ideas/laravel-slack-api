<?php

namespace VivifyIdeas\SlackApi\Contracts;

interface SlackGroup extends SlackChannel
{
    public function open($channel);
    public function close($channel);
    public function createChild($channel);
}
