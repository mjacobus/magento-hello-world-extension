<?php

/**
 * Paths follow the following pattern:
 * /:module/:controller/:action
 *
 * :module is what matches package/module/config.xml
 *         config.fronten.routers.{module}.args.frontName value,
 *         and in this case 'helloworld'
 *
 * :controller defaults to index
 * :action defaults to index
 *
 */
class TinyApps_HelloWorld_IndexController extends Mage_Core_Controller_Front_Action
{
    /**
     * paths: /helloworld/
     *        /helloworld/index
     *        /helloworld/index/index
     *
     * @return void
     */
    public function indexAction()
    {
        $name = $this->getRequest()->getParam('name', 'World');
        echo "Hello $name!";
    }

    /**
     * path: /helloworld/index/goodbye
     * @return void
     */
    public function goodByeAction()
    {
        $name = $this->getRequest()->getParam('name', 'World');
        echo "Good bye $name! We will miss you.";
    }
}