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

/* twoContents.html.twig */
class __TwigTemplate_886a819d7f2c01cce6d1fe945394059e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'css' => [$this, 'block_css'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('css', $context, $blocks);
        // line 4
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "content", [], "any", false, false, false, 4), "text", [], "any", false, false, false, 4), "subtitle", [], "any", false, false, false, 4) == "")) {
            // line 5
            echo "<style>
    .twoContents .subtitle{
        display:none;
    }
    .twoContentsReverse .subtitle{
        display: none;
    }
</style>
";
        }
        // line 14
        echo "
";
        // line 15
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "content", [], "any", false, false, false, 15), "position", [], "any", false, false, false, 15) % 2) == 1)) {
            // line 16
            echo "    <div class=\"twoContents reverse\">
";
        } else {
            // line 18
            echo "    <div class=\"twoContents\">
";
        }
        // line 20
        echo "        <div class=\"img\">
            <img src=\"";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "content", [], "any", false, false, false, 21), "img", [], "any", false, false, false, 21), "url", [], "any", false, false, false, 21), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "content", [], "any", false, false, false, 21), "img", [], "any", false, false, false, 21), "alt", [], "any", false, false, false, 21), "html", null, true);
        echo "\" height=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "content", [], "any", false, false, false, 21), "img", [], "any", false, false, false, 21), "height", [], "any", false, false, false, 21), "html", null, true);
        echo "\" width=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "content", [], "any", false, false, false, 21), "img", [], "any", false, false, false, 21), "width", [], "any", false, false, false, 21), "html", null, true);
        echo "\"/>
        </div>
        <div class=\"text\">
            <p class=\"title\">";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "content", [], "any", false, false, false, 24), "text", [], "any", false, false, false, 24), "title", [], "any", false, false, false, 24), "html", null, true);
        echo "</p>
            <p class=\"subtitle\">";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "content", [], "any", false, false, false, 25), "text", [], "any", false, false, false, 25), "subtitle", [], "any", false, false, false, 25), "html", null, true);
        echo "</p>
            <p>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "content", [], "any", false, false, false, 26), "text", [], "any", false, false, false, 26), "text", [], "any", false, false, false, 26), "html", null, true);
        echo "</p>
        </div>
    </div>
";
    }

    // line 1
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, ($context["pathCss"] ?? null), "html", null, true);
        echo "/page/twoContents.css\" type=\"text/css\">
";
    }

    public function getTemplateName()
    {
        return "twoContents.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 2,  97 => 1,  89 => 26,  85 => 25,  81 => 24,  69 => 21,  66 => 20,  62 => 18,  58 => 16,  56 => 15,  53 => 14,  42 => 5,  40 => 4,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block css %}
    <link rel=\"stylesheet\" href=\"{{pathCss}}/page/twoContents.css\" type=\"text/css\">
{% endblock %}
{% if element.content.text.subtitle == \"\" %}
<style>
    .twoContents .subtitle{
        display:none;
    }
    .twoContentsReverse .subtitle{
        display: none;
    }
</style>
{% endif %}

{% if element.content.position % 2 == 1 %}
    <div class=\"twoContents reverse\">
{% else %}
    <div class=\"twoContents\">
{% endif %}
        <div class=\"img\">
            <img src=\"{{element.content.img.url}}\" alt=\"{{element.content.img.alt}}\" height=\"{{element.content.img.height}}\" width=\"{{element.content.img.width}}\"/>
        </div>
        <div class=\"text\">
            <p class=\"title\">{{element.content.text.title}}</p>
            <p class=\"subtitle\">{{element.content.text.subtitle}}</p>
            <p>{{element.content.text.text}}</p>
        </div>
    </div>
", "twoContents.html.twig", "C:\\xampp\\htdocs\\SiteSTAD\\app\\templates\\twoContents.html.twig");
    }
}
