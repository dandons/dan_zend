<?php
/**
 * Created by: Daniel
 * Date: 29-8-14
 */

namespace Helloworld;


class Module {
    public function getAutoloaderConfig(){
        return array(
            'Zend\Loader\StandardAutoLoader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ .'/src/'. __NAMESPACE__
                )
            )
        );
    }

    public function getConfig(){
        return include __DIR__ . '/config/module.config.php';
    }
} 