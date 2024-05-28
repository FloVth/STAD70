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

/* about.html.twig */
class __TwigTemplate_51086fcae250c753e4ec90269f08d1ba extends Template
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
        echo "<div class=\"about\">
    <div class='logo'>
        <img src=\"";
        // line 6
        echo twig_escape_filter($this->env, ($context["pathIcone"] ?? null), "html", null, true);
        echo "/../logoStadBody.svg\" width=\"420\" height=\"460\" alt=\"logo Stad\"/>

    </div>
    <div class=\"information\">
        <div class=\"contain\">
            <div class=\"borderWhite\"></div>
            <div class=\"text\">
                <div class='title'>
                    <h1>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["obj"] ?? null), "page", [], "any", false, false, false, 14)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[($context["id"] ?? null)] ?? null) : null), "content", [], "any", false, false, false, 14)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[1] ?? null) : null), "content", [], "any", false, false, false, 14), "title", [], "any", false, false, false, 14), "html", null, true);
        echo " <span class=\"subtitle\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_2 = twig_get_attribute($this->env, $this->source, (($__internal_compile_3 = twig_get_attribute($this->env, $this->source, ($context["obj"] ?? null), "page", [], "any", false, false, false, 14)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[($context["id"] ?? null)] ?? null) : null), "content", [], "any", false, false, false, 14)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[1] ?? null) : null), "content", [], "any", false, false, false, 14), "secondTitle", [], "any", false, false, false, 14), "html", null, true);
        echo "<span class=\"degrade\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_4 = twig_get_attribute($this->env, $this->source, (($__internal_compile_5 = twig_get_attribute($this->env, $this->source, ($context["obj"] ?? null), "page", [], "any", false, false, false, 14)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[($context["id"] ?? null)] ?? null) : null), "content", [], "any", false, false, false, 14)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[1] ?? null) : null), "content", [], "any", false, false, false, 14), "secondTitleGradient", [], "any", false, false, false, 14), "html", null, true);
        echo "&nbsp;";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_6 = twig_get_attribute($this->env, $this->source, (($__internal_compile_7 = twig_get_attribute($this->env, $this->source, ($context["obj"] ?? null), "page", [], "any", false, false, false, 14)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[($context["id"] ?? null)] ?? null) : null), "content", [], "any", false, false, false, 14)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[1] ?? null) : null), "content", [], "any", false, false, false, 14), "secondTitleGradient2", [], "any", false, false, false, 14), "html", null, true);
        echo "</span></span></h1>
                </div>
                <p class=\"height\">";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_8 = twig_get_attribute($this->env, $this->source, (($__internal_compile_9 = twig_get_attribute($this->env, $this->source, ($context["obj"] ?? null), "page", [], "any", false, false, false, 16)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[($context["id"] ?? null)] ?? null) : null), "content", [], "any", false, false, false, 16)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[1] ?? null) : null), "content", [], "any", false, false, false, 16), "tertiaryTitle", [], "any", false, false, false, 16), "html", null, true);
        echo "</p>
                <p class=\"address\">";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_10 = twig_get_attribute($this->env, $this->source, (($__internal_compile_11 = twig_get_attribute($this->env, $this->source, ($context["obj"] ?? null), "page", [], "any", false, false, false, 17)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11[($context["id"] ?? null)] ?? null) : null), "content", [], "any", false, false, false, 17)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10[1] ?? null) : null), "content", [], "any", false, false, false, 17), "subtitle", [], "any", false, false, false, 17), "html", null, true);
        echo "<p>
                <p>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_12 = twig_get_attribute($this->env, $this->source, (($__internal_compile_13 = twig_get_attribute($this->env, $this->source, ($context["obj"] ?? null), "page", [], "any", false, false, false, 18)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13[($context["id"] ?? null)] ?? null) : null), "content", [], "any", false, false, false, 18)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12[1] ?? null) : null), "content", [], "any", false, false, false, 18), "text", [], "any", false, false, false, 18), "html", null, true);
        echo "</p>
                <p>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_14 = twig_get_attribute($this->env, $this->source, (($__internal_compile_15 = twig_get_attribute($this->env, $this->source, ($context["obj"] ?? null), "page", [], "any", false, false, false, 19)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15[($context["id"] ?? null)] ?? null) : null), "content", [], "any", false, false, false, 19)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14[1] ?? null) : null), "content", [], "any", false, false, false, 19), "secondText", [], "any", false, false, false, 19), "html", null, true);
        echo "</p>
            </div>
        </div>
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
        echo "/accueil/about.css\" type=\"text/css\"/>
";
    }

    public function getTemplateName()
    {
        return "about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 2,  88 => 1,  78 => 19,  74 => 18,  70 => 17,  66 => 16,  55 => 14,  44 => 6,  40 => 4,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block css %}
    <link rel=\"stylesheet\" href=\"{{pathCss}}/accueil/about.css\" type=\"text/css\"/>
{% endblock %}
<div class=\"about\">
    <div class='logo'>
        <img src=\"{{pathIcone}}/../logoStadBody.svg\" width=\"420\" height=\"460\" alt=\"logo Stad\"/>

    </div>
    <div class=\"information\">
        <div class=\"contain\">
            <div class=\"borderWhite\"></div>
            <div class=\"text\">
                <div class='title'>
                    <h1>{{obj.page[id].content[1].content.title}} <span class=\"subtitle\">{{obj.page[id].content[1].content.secondTitle}}<span class=\"degrade\">{{obj.page[id].content[1].content.secondTitleGradient}}&nbsp;{{obj.page[id].content[1].content.secondTitleGradient2}}</span></span></h1>
                </div>
                <p class=\"height\">{{obj.page[id].content[1].content.tertiaryTitle}}</p>
                <p class=\"address\">{{obj.page[id].content[1].content.subtitle}}<p>
                <p>{{obj.page[id].content[1].content.text}}</p>
                <p>{{obj.page[id].content[1].content.secondText}}</p>
            </div>
        </div>
    </div>
</div>
", "about.html.twig", "C:\\xampp\\htdocs\\SiteSTAD\\app\\templates\\about.html.twig");
    }
}
