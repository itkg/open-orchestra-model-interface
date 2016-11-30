<?php

namespace OpenOrchestra\ModelInterface\Model;

/**
 * Interface ReferenceInterface
 */
interface ReferenceInterface
{
    /**
     * @param string $id
     */
    public function setId($id);

    /**
     * @return string
     */
    public function getId();
}
