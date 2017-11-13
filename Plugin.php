<?php
namespace Kanboard\Plugin\TaskPushDate;
use Kanboard\Core\Plugin\Base;
use Kanboard\Plugin\TaskPushDate\Action\TaskPushDate;
class Plugin extends Base
{
    public function initialize()
    {
        $this->actionManager->register(new TaskPushDate($this->container));
    }
    public function getPluginName()
    {
        return 'TaskPushDate';
    }

    public function getPluginDescription()
    {
        return t('Push due date out when tasks are moved between columns');
    }

    public function getPluginAuthor()
    {
        return 'David Morlitz';
    }

    public function getPluginVersion()
    {
        return '0.0.1';
    }

    public function getPluginHomepage()
    {
        return 'https://github.com/dmorlitz/kanboard-TaskPushDate';
    }

    public function getCompatibleVersion()
    {
        return '>=1.0.44';
    }
}
