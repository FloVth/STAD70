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

/* container/components/about.html.twig */
class __TwigTemplate_93949aaecae35a617cce4b1d0ac0d9d3 extends Template
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
        echo "<div class=\"about\">
    <div class='logo'>
        <img src=\"media/logoStadBody.svg\" width=\"420\" height=\"460\" alt=\"logo Stad\">
    </div>
    <div class=\"information\">
        <div class=\"contain\">
            <div class=\"borderWhite\"></div>
            <div class=\"text\">
                <div class='title'>
                    <h1>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["obj"] ?? null), "page", [], "any", false, false, false, 10)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[($context["id"] ?? null)] ?? null) : null), "content", [], "any", false, false, false, 10)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[1] ?? null) : null), "content", [], "any", false, false, false, 10), "title", [], "any", false, false, false, 10), "html", null, true);
        echo " <span class=\"subtitle\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_2 = twig_get_attribute($this->env, $this->source, (($__internal_compile_3 = twig_get_attribute($this->env, $this->source, ($context["obj"] ?? null), "page", [], "any", false, false, false, 10)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[($context["id"] ?? null)] ?? null) : null), "content", [], "any", false, false, false, 10)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[1] ?? null) : null), "content", [], "any", false, false, false, 10), "secondTitle", [], "any", false, false, false, 10), "html", null, true);
        echo "<span class=\"degrade\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_4 = twig_get_attribute($this->env, $this->source, (($__internal_compile_5 = twig_get_attribute($this->env, $this->source, ($context["obj"] ?? null), "page", [], "any", false, false, false, 10)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[($context["id"] ?? null)] ?? null) : null), "content", [], "any", false, false, false, 10)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[1] ?? null) : null), "content", [], "any", false, false, false, 10), "secondTitleGradient", [], "any", false, false, false, 10), "html", null, true);
        echo "&nbsp;";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_6 = twig_get_attribute($this->env, $this->source, (($__internal_compile_7 = twig_get_attribute($this->env, $this->source, ($context["obj"] ?? null), "page", [], "any", false, false, false, 10)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[($context["id"] ?? null)] ?? null) : null), "content", [], "any", false, false, false, 10)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[1] ?? null) : null), "content", [], "any", false, false, false, 10), "secondTitleGradient2", [], "any", false, false, false, 10), "html", null, true);
        echo "</span></span></h1>
                </div>
                <p class=\"height\">";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_8 = twig_get_attribute($this->env, $this->source, (($__internal_compile_9 = twig_get_attribute($this->env, $this->source, ($context["obj"] ?? null), "page", [], "any", false, false, false, 12)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[($context["id"] ?? null)] ?? null) : null), "content", [], "any", false, false, false, 12)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[1] ?? null) : null), "content", [], "any", false, false, false, 12), "tertiaryTitle", [], "any", false, false, false, 12), "html", null, true);
        echo "</p>
                <p class=\"address\">";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_10 = twig_get_attribute($this->env, $this->source, (($__internal_compile_11 = twig_get_attribute($this->env, $this->source, ($context["obj"] ?? null), "page", [], "any", false, false, false, 13)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11[($context["id"] ?? null)] ?? null) : null), "content", [], "any", false, false, false, 13)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10[1] ?? null) : null), "content", [], "any", false, false, false, 13), "subtitle", [], "any", false, false, false, 13), "html", null, true);
        echo "<p>
                <p>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_12 = twig_get_attribute($this->env, $this->source, (($__internal_compile_13 = twig_get_attribute($this->env, $this->source, ($context["obj"] ?? null), "page", [], "any", false, false, false, 14)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13[($context["id"] ?? null)] ?? null) : null), "content", [], "any", false, false, false, 14)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12[1] ?? null) : null), "content", [], "any", false, false, false, 14), "text", [], "any", false, false, false, 14), "html", null, true);
        echo "</p>
                <p>";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_14 = twig_get_attribute($this->env, $this->source, (($__internal_compile_15 = twig_get_attribute($this->env, $this->source, ($context["obj"] ?? null), "page", [], "any", false, false, false, 15)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15[($context["id"] ?? null)] ?? null) : null), "content", [], "any", false, false, false, 15)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14[1] ?? null) : null), "content", [], "any", false, false, false, 15), "secondText", [], "any", false, false, false, 15), "html", null, true);
        echo "</p>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "container/components/about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 15,  67 => 14,  63 => 13,  59 => 12,  48 => 10,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"about\">
    <div class='logo'>
        <img src=\"media/logoStadBody.svg\" width=\"420\" height=\"460\" alt=\"logo Stad\">
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
", "container/components/about.html.twig", "C:\\xampp\\htdocs\\SiteSTAD\\app\\templates\\container\\components\\about.html.twig");
    }
}
