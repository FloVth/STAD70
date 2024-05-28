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

/* container/components/twoContentsMap.html.twig */
class __TwigTemplate_d6d764e7bb9d09e47bb06c98eb3edfde extends Template
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
        echo "
<div class=\"twoContentsMap\">
    <div class=\"titre\">
        <header>";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["obj"] ?? null), "page", [], "any", false, false, false, 4)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[($context["id"] ?? null)] ?? null) : null), "content", [], "any", false, false, false, 4)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[6] ?? null) : null), "title", [], "any", false, false, false, 4), "html", null, true);
        echo "</header>
    </div>
    <div class=\"twoContents\">
        
        <div id=\"map\">

        </div>
        <div class=\"text\">
            <p class=\"title\">";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_2 = twig_get_attribute($this->env, $this->source, (($__internal_compile_3 = twig_get_attribute($this->env, $this->source, ($context["obj"] ?? null), "page", [], "any", false, false, false, 12)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[($context["id"] ?? null)] ?? null) : null), "content", [], "any", false, false, false, 12)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[6] ?? null) : null), "content", [], "any", false, false, false, 12), "text", [], "any", false, false, false, 12), "title", [], "any", false, false, false, 12), "html", null, true);
        echo "</p>
            <p>";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_4 = twig_get_attribute($this->env, $this->source, (($__internal_compile_5 = twig_get_attribute($this->env, $this->source, ($context["obj"] ?? null), "page", [], "any", false, false, false, 13)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[($context["id"] ?? null)] ?? null) : null), "content", [], "any", false, false, false, 13)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[6] ?? null) : null), "content", [], "any", false, false, false, 13), "text", [], "any", false, false, false, 13), "text", [], "any", false, false, false, 13), "html", null, true);
        echo "</p>
            <p class=\"secondText\">";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_6 = twig_get_attribute($this->env, $this->source, (($__internal_compile_7 = twig_get_attribute($this->env, $this->source, ($context["obj"] ?? null), "page", [], "any", false, false, false, 14)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[($context["id"] ?? null)] ?? null) : null), "content", [], "any", false, false, false, 14)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[6] ?? null) : null), "content", [], "any", false, false, false, 14), "text", [], "any", false, false, false, 14), "text2", [], "any", false, false, false, 14), "html", null, true);
        echo "</p>
            <div class=\"phoneNumber\">
                <svg viewBox=\"0 0 20.87 38.37\">
                    <path class=\"st0\" d=\"M18.15,0.03L2.75,0C1.24,0,0.01,1.22,0.01,2.73l-0.06,32.88c0,1.51,1.22,2.74,2.73,2.74l15.39,0.03
                        c1.51,0,2.74-1.22,2.74-2.73l0.06-32.88C20.88,1.26,19.66,0.03,18.15,0.03z M10.61,36.81l-0.46,0c-0.8,0-1.44-0.65-1.44-1.44
                        c0-0.8,0.65-1.44,1.44-1.44l0.46,0c0.8,0,1.44,0.65,1.44,1.44C12.05,36.17,11.41,36.81,10.61,36.81z M18.55,32.14L2.23,32.11
                        L2.28,3.92L18.6,3.95L18.55,32.14z\"/>
                </svg>
                <p class=\"phone\">";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_8 = twig_get_attribute($this->env, $this->source, (($__internal_compile_9 = twig_get_attribute($this->env, $this->source, ($context["obj"] ?? null), "page", [], "any", false, false, false, 22)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[($context["id"] ?? null)] ?? null) : null), "content", [], "any", false, false, false, 22)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[6] ?? null) : null), "content", [], "any", false, false, false, 22), "text", [], "any", false, false, false, 22), "phone", [], "any", false, false, false, 22), "html", null, true);
        echo "</p>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "container/components/twoContentsMap.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 22,  61 => 14,  57 => 13,  53 => 12,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<div class=\"twoContentsMap\">
    <div class=\"titre\">
        <header>{{obj.page[id].content[6].title}}</header>
    </div>
    <div class=\"twoContents\">
        
        <div id=\"map\">

        </div>
        <div class=\"text\">
            <p class=\"title\">{{obj.page[id].content[6].content.text.title}}</p>
            <p>{{obj.page[id].content[6].content.text.text}}</p>
            <p class=\"secondText\">{{obj.page[id].content[6].content.text.text2}}</p>
            <div class=\"phoneNumber\">
                <svg viewBox=\"0 0 20.87 38.37\">
                    <path class=\"st0\" d=\"M18.15,0.03L2.75,0C1.24,0,0.01,1.22,0.01,2.73l-0.06,32.88c0,1.51,1.22,2.74,2.73,2.74l15.39,0.03
                        c1.51,0,2.74-1.22,2.74-2.73l0.06-32.88C20.88,1.26,19.66,0.03,18.15,0.03z M10.61,36.81l-0.46,0c-0.8,0-1.44-0.65-1.44-1.44
                        c0-0.8,0.65-1.44,1.44-1.44l0.46,0c0.8,0,1.44,0.65,1.44,1.44C12.05,36.17,11.41,36.81,10.61,36.81z M18.55,32.14L2.23,32.11
                        L2.28,3.92L18.6,3.95L18.55,32.14z\"/>
                </svg>
                <p class=\"phone\">{{obj.page[id].content[6].content.text.phone}}</p>
            </div>
        </div>
    </div>
</div>", "container/components/twoContentsMap.html.twig", "C:\\xampp\\htdocs\\SiteSTAD\\app\\templates\\container\\components\\twoContentsMap.html.twig");
    }
}
