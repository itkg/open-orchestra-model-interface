<?php

namespace OpenOrchestra\ModelInterface\Model;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * Interface RoleInterface
 */
interface RoleInterface extends TranslatedValueContainerInterface
{
    /**
     * @return mixed
     */
    public function getId();

    /**
     * @return string
     */
    public function getName();

    /**
     * @param string $name
     */
    public function setName($name);

    /**
     * @return StatusInterface
     */
    public function getToStatus();

    /**
     * @param StatusInterface $toStatus
     */
    public function setToStatus(StatusInterface $toStatus);

    /**
     * @return StatusInterface
     */
    public function getFromStatus();

    /**
     * @param StatusInterface $fromStatus
     */
    public function setFromStatus(StatusInterface $fromStatus);

    /**
     * @param TranslatedValueInterface $description
     */
    public function addDescription(TranslatedValueInterface $description);

    /**
     * @param TranslatedValueInterface $description
     */
    public function removeDescription(TranslatedValueInterface $description);

    /**
     * @param string $language
     *
     * @return string
     */
    public function getDescription($language = 'en');

    /**
     * @return ArrayCollection
     */
    public function getDescriptions();
}
