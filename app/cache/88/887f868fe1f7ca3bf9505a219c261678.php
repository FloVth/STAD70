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

/* welcome.html.twig */
class __TwigTemplate_f8bd1c0150538eb4628bd75fa2b09a68 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'html' => [$this, 'block_html'],
            'head' => [$this, 'block_head'],
            'CSS' => [$this, 'block_CSS'],
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
            'test' => [$this, 'block_test'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('html', $context, $blocks);
    }

    public function block_html($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "<!DOCTYPE html>
    <html lang=\"fr\">
    <head>
        <title>TEST</title>
        ";
        // line 6
        $this->displayBlock('head', $context, $blocks);
        // line 8
        echo "        ";
        $this->displayBlock('CSS', $context, $blocks);
        // line 10
        echo "    </head>
    <body>
        ";
        // line 12
        $this->displayBlock('header', $context, $blocks);
        // line 14
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 16
        echo "        ";
        $this->displayBlock('test', $context, $blocks);
        // line 20
        echo "    </body>
";
    }

    // line 6
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "        ";
    }

    // line 8
    public function block_CSS($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "        ";
    }

    // line 12
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "        ";
    }

    // line 14
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "        ";
    }

    // line 16
    public function block_test($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "            ";
        $this->loadTemplate("welcome.html.twig", "welcome.html.twig", 17, "196109666")->display($context);
        // line 19
        echo "        ";
    }

    public function getTemplateName()
    {
        return "welcome.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  117 => 19,  114 => 17,  110 => 16,  106 => 15,  102 => 14,  98 => 13,  94 => 12,  90 => 9,  86 => 8,  82 => 7,  78 => 6,  73 => 20,  70 => 16,  67 => 14,  65 => 12,  61 => 10,  58 => 8,  56 => 6,  50 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block html %}
<!DOCTYPE html>
    <html lang=\"fr\">
    <head>
        <title>TEST</title>
        {% block head %}
        {% endblock %}
        {% block CSS %}
        {% endblock %}
    </head>
    <body>
        {% block header %}
        {% endblock %}
        {% block body %}
        {% endblock %}
        {% block test %}
            {% embed 'footer/footer.html.twig' %}
            {% endembed %}
        {% endblock %}
    </body>
{% endblock html %}
", "welcome.html.twig", "C:\\xampp\\htdocs\\SiteSTAD\\app\\templates\\welcome.html.twig");
    }
}


/* welcome.html.twig */
class __TwigTemplate_f8bd1c0150538eb4628bd75fa2b09a68___196109666 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 17
        return "footer/footer.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("footer/footer.html.twig", "welcome.html.twig", 17);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "welcome.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 17,  117 => 19,  114 => 17,  110 => 16,  106 => 15,  102 => 14,  98 => 13,  94 => 12,  90 => 9,  86 => 8,  82 => 7,  78 => 6,  73 => 20,  70 => 16,  67 => 14,  65 => 12,  61 => 10,  58 => 8,  56 => 6,  50 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block html %}
<!DOCTYPE html>
    <html lang=\"fr\">
    <head>
        <title>TEST</title>
        {% block head %}
        {% endblock %}
        {% block CSS %}
        {% endblock %}
    </head>
    <body>
        {% block header %}
        {% endblock %}
        {% block body %}
        {% endblock %}
        {% block test %}
            {% embed 'footer/footer.html.twig' %}
            {% endembed %}
        {% endblock %}
    </body>
{% endblock html %}
", "welcome.html.twig", "C:\\xampp\\htdocs\\SiteSTAD\\app\\templates\\welcome.html.twig");
    }
}
