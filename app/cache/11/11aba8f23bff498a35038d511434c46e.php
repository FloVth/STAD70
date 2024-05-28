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

/* container/components/twoContainer.html.twig */
class __TwigTemplate_5dd2e1e0b1f073a0bdbaf216b4da2e53 extends Template
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
        echo "<div class=\"twoContainer\" style=\"background-image: url(";
        echo twig_escape_filter($this->env, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, (($__internal_compile_2 = twig_get_attribute($this->env, $this->source, ($context["obj"] ?? null), "page", [], "any", false, false, false, 1)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[($context["id"] ?? null)] ?? null) : null), "content", [], "any", false, false, false, 1)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[2] ?? null) : null), "content", [], "any", false, false, false, 1)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null), "html", null, true);
        echo ")\">
    <div class=\"left\">
        <div class=\"contain\">
            <div class=\"text\">
                <p class=\"title\">";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_3 = twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "content", [], "any", false, false, false, 5)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[1] ?? null) : null), "title", [], "any", false, false, false, 5), "html", null, true);
        echo "</p>
                <p class=\"subtitle\">";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_4 = twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "content", [], "any", false, false, false, 6)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[1] ?? null) : null), "subtitle", [], "any", false, false, false, 6), "html", null, true);
        echo "</p>
                <p>";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_5 = twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "content", [], "any", false, false, false, 7)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[1] ?? null) : null), "text", [], "any", false, false, false, 7), "html", null, true);
        echo "</p>
            </div>
        </div>
    </div>
    <div class=\"right\">
        <div class=\"contain\">
            <div class=\"text\">
                <p class=\"title\">";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_6 = twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "content", [], "any", false, false, false, 14)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[2] ?? null) : null), "title", [], "any", false, false, false, 14), "html", null, true);
        echo "</p>
                <p class=\"subtitle\">";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_7 = twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "content", [], "any", false, false, false, 15)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[2] ?? null) : null), "subtitle", [], "any", false, false, false, 15), "html", null, true);
        echo "</p>
                <p>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_8 = twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "content", [], "any", false, false, false, 16)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[2] ?? null) : null), "text", [], "any", false, false, false, 16), "html", null, true);
        echo "</p>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "container/components/twoContainer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 16,  67 => 15,  63 => 14,  53 => 7,  49 => 6,  45 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"twoContainer\" style=\"background-image: url({{obj.page[id].content[2].content[0]}})\">
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
</div>", "container/components/twoContainer.html.twig", "C:\\xampp\\htdocs\\SiteSTAD\\app\\templates\\container\\components\\twoContainer.html.twig");
    }
}
