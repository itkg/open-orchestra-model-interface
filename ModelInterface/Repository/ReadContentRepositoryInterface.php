<?php

namespace OpenOrchestra\ModelInterface\Repository;

use OpenOrchestra\ModelInterface\Model\ContentInterface;

/**
 * Interface ContentRepositoryInterface
 */
interface ReadContentRepositoryInterface
{
    const CHOICE_AND = 'choice_and';
    const CHOICE_OR = 'choice_or';

    /**
     * @param string $contentId
     *
     * @return ContentInterface
     */
    public function findOneByContentId($contentId);

    /**
     * @param string      $language
     * @param string      $contentType
     * @param string      $choiceType
     * @param string|null $keywords
     *
     * @deprecated will be removed in 1.3.0, use findByContentTypeAndKeywords
     *
     * @return array
     */
    public function findByContentTypeAndKeywords($language, $contentType = '', $choiceType = self::CHOICE_AND, $keywords = null);

    /**
     * @param string      $language
     * @param string      $contentType
     * @param string      $choiceType
     * @param string|null $condition
     *
     * @return array
     */
    public function findByContentTypeAndCondition($language, $contentType = '', $choiceType = self::CHOICE_AND, $condition = null);

    /**
     * @param string $contentId
     * @param string $language
     *
     * @deprecated will be removed in 1.2.0, use findLastPublishedVersion
     *
     * @return ContentInterface
     */
    public function findLastPublishedVersionByContentIdAndLanguage($contentId, $language);

    /**
     * @param string $contentId
     * @param string $language
     *
     * @return ContentInterface
     */
    public function findLastPublishedVersion($contentId, $language);
}
