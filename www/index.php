<?php
/**
 * Http entry point
 */

require_once __DIR__ . '/../init.php';

try {
    \Core\Router::dispatchHttp();
} catch (Exception $e) {
    if (cfg()->debug && !($e instanceof \Core\PageNotFoundException)) {
        $error = $e->getMessage();
        $trace = $e->getTraceAsString();
        require CORE . '/resources/error.phtml';
    } else {
        $error = new \Core\ErrorController($e->getMessage(), $e->getCode(), cfg()->error_view);
        $error->serve();
    }
}
