<?php
namespace App;


class Twig{
    private $template;

    public function __construct($template_name)
    {
        $loader = new \Twig\Loader\FilesystemLoader('../app/templates');
        $twig = new \Twig\Environment($loader, [
            'cache' => '../app/cache',
            'debug' => true,
        ]);
        $twig->addExtension(new \Twig\Extension\DebugExtension());

        $this->template = $twig->load($template_name);
    }

    public function render($arr=[]){
        echo $this->template->render($arr);
    }
}
