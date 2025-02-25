<?php

namespace Kanboard\Plugin\ExtendedFilters\Filter;

use Kanboard\Core\Filter\FilterInterface;
use Kanboard\Filter\BaseFilter;
use Kanboard\Model\ProjectModel;


/**
 * Filter project by description content.
 *
 * @package filter
 * @author  Manuel Senfft
 */
class ProjectDescriptionFilter extends BaseFilter implements FilterInterface
{
    /**
     * Get search attribute
     *
     * @access public
     * @return string[]
     */
    public function getAttributes()
    {
        return array('project_description');
    }

    /**
     * Apply filter
     *
     * @access public
     * @return FilterInterface
     */
    public function apply()
    {
        if (empty($this->value)) {
            $this->query->isNull(ProjectModel::TABLE.'.description');
        } else {
            $this->query->like(ProjectModel::TABLE.'.description', '%' . $this->value . '%');
        }

        return $this;
    }
}
