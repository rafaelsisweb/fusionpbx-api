<?php

namespace Api\Users\Events;

use Infrastructure\Events\Event;
use Api\Users\Models\Group;

class GroupWasCreated extends Event
{
    public $group;

    public function __construct(Group $group)
    {
        $this->group = $group;
    }
}