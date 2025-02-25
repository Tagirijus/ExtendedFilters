<?php

namespace Kanboard\Plugin\ExtendedFilters;

use Kanboard\Core\Plugin\Base;
use Kanboard\Plugin\ExtendedFilters\Filter\ProjectDescriptionFilter;


class Plugin extends Base
{
    public function initialize()
    {
        // Project Description Filter
        $this->container->extend('taskLexer', function($taskLexer, $c) {
            $taskLexer->withFilter(ProjectDescriptionFilter::getInstance());
            return $taskLexer;
        });
    }

    public function getPluginName()
    {
        return 'ExtendedFilters';
    }

    public function getPluginDescription()
    {
        return t('This plugin extends the filter you can use in the Kanboard search.');
    }

    public function getPluginAuthor()
    {
        return 'Tagirijus';
    }

    public function getPluginVersion()
    {
        return '1.0.0';
    }

    public function getCompatibleVersion()
    {
        // Examples:
        // >=1.0.37
        // <1.0.37
        // <=1.0.37
        return '>=1.2.27';
    }

    public function getPluginHomepage()
    {
        return 'https://github.com/Tagirijus/ExtendedFilters';
    }
}
