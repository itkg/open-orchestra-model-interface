<?php

namespace OpenOrchestra\ModelInterface\Model;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use OpenOrchestra\ModelInterface\Model\AreaInterface;

/**
 * Interface AreaContainerInterface
 */
interface AreaContainerInterface
{
    /**
     * Add subArea
     *
     * @param AreaInterface $subArea
     */
    public function addArea(AreaInterface $subArea);

    /**
     * Remove subArea
     *
     * @param AreaInterface $subArea
     */
    public function removeArea(AreaInterface $subArea);

    /**
     * Remove subArea by areaId
     *
     * @param string $areaId
     */
    public function removeAreaByAreaId($areaId);

    /**
     * Get subAreas
     *
     * @return Collection $subAreas
     */
    public function setAreas(Collection $subAreas);

    /**
     * Get subAreas
     *
     * @return ArrayCollection $subAreas
     */
    public function getAreas();

    /**
     * Get blocks
     *
     * @return array $blocks
     */
    public function getBlocks();
}
