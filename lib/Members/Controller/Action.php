<?php
namespace Members\Controller;

use Website\Controller\Action as WebsiteAction;

class Action extends WebsiteAction
{
    /**
     * @var \Zend_Auth
     */
    protected $auth;
    /**
     * @var \Pimcore\Translate\Website
     */
    protected $translate;

    public function init()
    {
        parent::init();

        $this->enableLayout();

        $this->view->addScriptPath(PIMCORE_PLUGINS_PATH . '/Members/views/scripts/members');
        $this->view->addScriptPath(PIMCORE_PLUGINS_PATH . '/Members/views/layouts');

        $this->translate = $this->initTranslation();

        $this->auth = \Zend_Auth::getInstance();
        $this->view->flashMessages = $this->_helper->flashMessenger->getMessages();
    }
}