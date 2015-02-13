<?php

namespace PHPOrchestra\ModelInterface\Event;

use PHPOrchestra\ModelInterface\Model\RedirectionInterface;
use Symfony\Component\EventDispatcher\Event;

/**
 * Class RedirectionEvent
 */
class RedirectionEvent extends Event
{
    protected $redirection;

    /**
     * @param RedirectionInterface $redirection
     */
    public function __construct(RedirectionInterface $redirection)
    {
        $this->redirection = $redirection;
    }

    /**
     * @return RedirectionInterface
     */
    public function getRedirection()
    {
        return $this->redirection;
    }
}
