<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base.html.twig */
class __TwigTemplate_499be80c0614f187e2016b4fac429870 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'header' => [$this, 'block_header'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 8
        echo "</head>
<body>
    ";
        // line 10
        $this->displayBlock('header', $context, $blocks);
        // line 13
        echo "    <h1>Hello world !</h1>
</body>
";
    }

    // line 4
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta charset=\"UTF-8\">
    ";
    }

    // line 10
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "        ";
        $this->loadTemplate("header.html.twig", "base.html.twig", 11)->display($context);
        // line 12
        echo "    ";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  75 => 12,  72 => 11,  68 => 10,  62 => 5,  58 => 4,  52 => 13,  50 => 10,  46 => 8,  44 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    {% block head %}
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta charset=\"UTF-8\">
    {% endblock %}
</head>
<body>
    {% block header %}
        {% include 'header.html.twig' %}
    {% endblock %}
    <h1>Hello world !</h1>
</body>
", "base.html.twig", "C:\\xampp\\htdocs\\SimpleWebSTAD\\app\\templates\\base.html.twig");
    }
}
