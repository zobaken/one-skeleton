<?php

namespace Ctl;
/**
 * Json sample controller
 */
class Entity extends \Core\JsonController {

    static $routes = [
        'list' => 'list',
        'object/$' => 'object'
    ];

    function get() {
        $this->message = 'get!';
    }

    function getObject($id = null) {
        $this->object = [
            'id' => $id,
            'message' => 'test object'
        ];
    }

    function getList($page = 1) {
        $this->page = $page;
        $this->data = [];
    }

}