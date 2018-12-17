<?php

namespace Template;

use Core\TemplateInterface;

/**
 * Twig template implementation
 */
class TwigEngine implements TemplateInterface {

    /**
     * @var \Twig_Environment Our twig
     */
    protected $twig;

    /**
     * Implement twig rendering
     *
     * @param string $path
     * @param array $parameters
     * @return string
     * @throws \Twig_Error_Loader
     * @throws \Twig_Error_Runtime
     * @throws \Twig_Error_Syntax
     */
    public function run(string $path, array $parameters) : string {
        if (!$this->twig) {
            $loader = new \Twig_Loader_Filesystem(ROOT . '/templates');
            $this->twig = new \Twig_Environment($loader);
        }
        $template = $this->twig->load("{$path}.twig");
        return $template->render($parameters);
    }

}