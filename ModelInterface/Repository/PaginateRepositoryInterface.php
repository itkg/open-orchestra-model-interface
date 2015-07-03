<?php

namespace OpenOrchestra\ModelInterface\Repository;

use OpenOrchestra\Pagination\Configuration\PaginateFinderConfiguration;
use OpenOrchestra\Pagination\Configuration\FinderConfiguration;

/**
 * Interface PaginateRepositoryInterface
 */
interface PaginateRepositoryInterface
{
    /**
     * @param array|null  $descriptionEntity
     * @param array|null  $columns
     * @param string|null $search
     * @param array|null  $order
     * @param int|null    $skip
     * @param int|null    $limit
     *
     * @deprecated will be removed in 0.3.0, use findForPaginate instead
     *
     * @return array
     */
    public function findForPaginateAndSearch($descriptionEntity = null, $columns = null, $search = null, $order = null, $skip = null, $limit = null);

    /**
     * @param PaginateFinderConfiguration $configuration
     *
     * @return array
     */
    public function findForPaginate(PaginateFinderConfiguration $configuration);

    /**
     * @param string|null $descriptionEntity
     * @param string|null $columns
     * @param string|null $search
     *
     * @deprecated will be removed in 0.3.0, use countWithFilter instead
     *
     * @return mixed
     */
    public function countWithSearchFilter($descriptionEntity = null, $columns = null, $search = null);

    /**
     * @param FinderConfiguration $configuration
     *
     * @return int
     */

    public function countWithFilter(FinderConfiguration $configuration);

    /**
     * @return int
     */
    public function count();
}
