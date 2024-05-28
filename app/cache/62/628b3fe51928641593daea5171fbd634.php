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

/* container/components/twoContents.html.twig */
class __TwigTemplate_ef7c7ada584460bd0b376084f1f92f35 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "content", [], "any", false, false, false, 1), "position", [], "any", false, false, false, 1) % 2) == 1)) {
            // line 2
            echo "    <div class=\"twoContents reverse\">
";
        } else {
            // line 4
            echo "    <div class=\"twoContents\">
";
        }
        // line 6
        echo "        <div class=\"img\">
            <img src=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "content", [], "any", false, false, false, 7), "img", [], "any", false, false, false, 7), "url", [], "any", false, false, false, 7), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "content", [], "any", false, false, false, 7), "img", [], "any", false, false, false, 7), "alt", [], "any", false, false, false, 7), "html", null, true);
        echo "\" height=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "content", [], "any", false, false, false, 7), "img", [], "any", false, false, false, 7), "height", [], "any", false, false, false, 7), "html", null, true);
        echo "\" width=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "content", [], "any", false, false, false, 7), "img", [], "any", false, false, false, 7), "width", [], "any", false, false, false, 7), "html", null, true);
        echo "\">
        </div>
        <div class=\"text\">
            <p class=\"title\">";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "content", [], "any", false, false, false, 10), "text", [], "any", false, false, false, 10), "title", [], "any", false, false, false, 10), "html", null, true);
        echo "</p>
            <p class=\"subtitle\">";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "content", [], "any", false, false, false, 11), "text", [], "any", false, false, false, 11), "subtitle", [], "any", false, false, false, 11), "html", null, true);
        echo "</p>
            <p>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "content", [], "any", false, false, false, 12), "text", [], "any", false, false, false, 12), "text", [], "any", false, false, false, 12), "html", null, true);
        echo "</p>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "container/components/twoContents.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 12,  66 => 11,  62 => 10,  50 => 7,  47 => 6,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if element.content.position % 2 == 1 %}
    <div class=\"twoContents reverse\">
{% else %}
    <div class=\"twoContents\">
{% endif %}
        <div class=\"img\">
            <img src=\"{{element.content.img.url}}\" alt=\"{{element.content.img.alt}}\" height=\"{{element.content.img.height}}\" width=\"{{element.content.img.width}}\">
        </div>
        <div class=\"text\">
            <p class=\"title\">{{element.content.text.title}}</p>
            <p class=\"subtitle\">{{element.content.text.subtitle}}</p>
            <p>{{element.content.text.text}}</p>
        </div>
    </div>
", "container/components/twoContents.html.twig", "C:\\xampp\\htdocs\\SiteSTAD\\app\\templates\\container\\components\\twoContents.html.twig");
    }
}
