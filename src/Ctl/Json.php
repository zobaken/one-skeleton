<?php

namespace Ctl;
/**
 * Json sample controller
 */
class Json extends \Core\JsonController {

    static $routes = [
        '^list(/\d+)?$' => 'list',
        '^([^/]+)$' => 'object'
    ];

    public $success = true;
    public $error = null;

    function get() {
        $this->message = 'get!';
    }

    function getObject($id = null) {
        $this->object = [
            'id' => 1,
            'message' => 'test'
        ];
    }

    function getList($page = 1) {
        $this->list = [
            [
                'id' => 1,
                'message' => 'test'
            ]
        ];
    }

}