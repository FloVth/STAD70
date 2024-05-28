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

/* twoContainer.html.twig */
class __TwigTemplate_39d11d991f73af118244a1294d435c14 extends Template
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
        echo "<style>
.twoContainer{
    background-image:url(";
        // line 6
        echo twig_escape_filter($this->env, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "content", [], "any", false, false, false, 6)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null), "html", null, true);
        echo ");
}
</style>
<div class=\"twoContainer\">
    <div class=\"left\">
        <div class=\"contain\">
            <div class=\"text\">
                <p class=\"title\">";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "content", [], "any", false, false, false, 13)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[1] ?? null) : null), "title", [], "any", false, false, false, 13), "html", null, true);
        echo "</p>
                <p class=\"subtitle\">";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_2 = twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "content", [], "any", false, false, false, 14)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[1] ?? null) : null), "subtitle", [], "any", false, false, false, 14), "html", null, true);
        echo "</p>
                <p>";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_3 = twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "content", [], "any", false, false, false, 15)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[1] ?? null) : null), "text", [], "any", false, false, false, 15), "html", null, true);
        echo "</p>
            </div>
        </div>
    </div>
    <div class=\"right\">
        <div class=\"contain\">
            <div class=\"text\">
                <p class=\"title\">";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_4 = twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "content", [], "any", false, false, false, 22)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[2] ?? null) : null), "title", [], "any", false, false, false, 22), "html", null, true);
        echo "</p>
                <p class=\"subtitle\">";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_5 = twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "content", [], "any", false, false, false, 23)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[2] ?? null) : null), "subtitle", [], "any", false, false, false, 23), "html", null, true);
        echo "</p>
                <p>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_6 = twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "content", [], "any", false, false, false, 24)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[2] ?? null) : null), "text", [], "any", false, false, false, 24), "html", null, true);
        echo "</p>
            </div>
        </div>
    </div>
</div>";
    }

    // line 1
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, ($context["pathCss"] ?? null), "html", null, true);
        echo "/page/twoContainer.css\" type=\"text/css\">
";
    }

    public function getTemplateName()
    {
        return "twoContainer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 2,  89 => 1,  80 => 24,  76 => 23,  72 => 22,  62 => 15,  58 => 14,  54 => 13,  44 => 6,  40 => 4,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block css %}
    <link rel=\"stylesheet\" href=\"{{pathCss}}/page/twoContainer.css\" type=\"text/css\">
{% endblock %}
<style>
.twoContainer{
    background-image:url({{element.content[0]}});
}
</style>
<div class=\"twoContainer\">
    <div class=\"left\">
        <div class=\"contain\">
            <div class=\"text\">
                <p class=\"title\">{{element.content[1].title}}</p>
                <p class=\"subtitle\">{{element.content[1].subtitle}}</p>
                <p>{{element.content[1].text}}</p>
            </div>
        </div>
    </div>
    <div class=\"right\">
        <div class=\"contain\">
            <div class=\"text\">
                <p class=\"title\">{{element.content[2].title}}</p>
                <p class=\"subtitle\">{{element.content[2].subtitle}}</p>
                <p>{{element.content[2].text}}</p>
            </div>
        </div>
    </div>
</div>", "twoContainer.html.twig", "C:\\xampp\\htdocs\\SiteSTAD\\app\\templates\\twoContainer.html.twig");
    }
}
