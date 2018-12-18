<?php

namespace Ctl;

/**
 * Sample controller
 */
class Main extends \Core\Controller {

    protected $view = 'sample/main';
    public $title;
    public $text;

    function get() {
        $this->title = 'Sample page';
        $this->text = 'Hello world';
    }

}