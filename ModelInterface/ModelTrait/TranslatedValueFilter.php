<?php

namespace OpenOrchestra\ModelInterface\ModelTrait;

use Doctrine\Common\Collections\Collection;
use OpenOrchestra\ModelInterface\Model\TranslatedValueInterface;

/**
 * Trait TranslatedValueFilter
 *
 * @deprecated will be removed in 0.3.0
 */
trait TranslatedValueFilter
{
    /**
     * @param Collection $collection
     * @param string          $language
     *
     * @return mixed
     */
    public function filterByLanguage(Collection $collection, $language = 'en')
    {
        $result = $collection->filter(function(TranslatedValueInterface $translatedValue) use ($language) {
            return $language == $translatedValue->getLanguage();
        });

        return $result->first()->getValue();
    }
}
