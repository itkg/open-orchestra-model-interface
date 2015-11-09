<?php

namespace OpenOrchestra\ModelInterface\Form\Type;

use Symfony\Component\Form\AbstractType;

/**
 * Class AbstractOrchestraSiteType
 */
abstract class AbstractOrchestraSiteType extends AbstractType
{
    /**
     * Returns the name of this type.
     *
     * @return string The name of this type
     */
    public function getName()
    {
        return 'oo_orchestra_site';
    }
}
