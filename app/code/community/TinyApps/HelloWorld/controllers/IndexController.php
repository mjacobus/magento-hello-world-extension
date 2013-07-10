<?php

/**
 * @author Marcelo Jacobus <marcelo.jacobus@gmail.com>
 *
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
        // Loads layouts inside app/design/frontend/base/default/layout
        // The layout of this page is in the helloworld.xml
        $this->loadLayout();
        $this->renderLayout();
    }

    /**
     * path: /helloworld/index/goodbye
     * @return void
     */
    public function goodByeAction()
    {
        $this->loadLayout()->renderLayout();
    }

}