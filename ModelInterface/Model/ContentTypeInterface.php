<?php

namespace OpenOrchestra\ModelInterface\Model;

use Doctrine\Common\Collections\ArrayCollection;
use OpenOrchestra\ModelInterface\Exceptions\TranslatedValueNotExisting;

/**
 * Interface ContentTypeInterface
 */
interface ContentTypeInterface extends FieldTypeContainerInterface, TranslatedValueContainerInterface, BlameableInterface, TimestampableInterface, VersionableInterface, SiteLinkableInterface, SoftDeleteableInterface
{
    /**
     * @param string $contentTypeId
     */
    public function setContentTypeId($contentTypeId);

    /**
     * @return string
     */
    public function getContentTypeId();

    /**
     * @param string $template
     */
    public function setTemplate($template);

    /**
     * @return string
     */
    public function getTemplate();

    /**
     * @param FieldTypeInterface $fields
     */
    public function setFields(FieldTypeInterface $fields);

    /**
     * @return string
     */
    public function getId();

    /**
     * @param TranslatedValueInterface $name
     */
    public function addName(TranslatedValueInterface $name);

    /**
     * @param TranslatedValueInterface $name
     */
    public function removeName(TranslatedValueInterface $name);

    /**
     * @param string $language
     *
     * @return string
     * @throws TranslatedValueNotExisting
     */
    public function getName($language);

    /**
     * @return ArrayCollection
     */
    public function getNames();

    /**
     * @return array
     */
    public function getDefaultListable();

    /**
     * @param string  $name
     * @param boolean $value
     */
    public function addDefaultListable($name, $value);

    /**
     * @param string $name
     */
    public function removeDefaultListable($name);

    /**
     * @param array $defaultListable
     */
    public function setDefaultListable(array $defaultListable);
}
