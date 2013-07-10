<?php

/**
 * @author Marcelo Jacobus <marcelo.jacobus@gmail.com>
 *
 *
 * This block name is helloworld/helloWorld, as per the module config.xml file
 * under session global.blocks.<i>helloworld</i>.class
 *
 * In order to override the rendering of this class, the protected method
 * _toHtml() should be overriden.
 */
class TinyApps_HelloWorld_Block_HelloWorld extends Mage_Core_Block_Template
{

    /**
     * @var string
     */
    protected $_name = 'World';

    public function getName()
    {
        return $this->_name;
    }

}