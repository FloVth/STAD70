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

/* container/components/slider.html.twig */
class __TwigTemplate_ff780a79b3a22551e8f834d7f7954fb6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'script' => [$this, 'block_script'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<header class=\"slider\">
    <p>";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["obj"] ?? null), "page", [], "any", false, false, false, 2)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[($context["id"] ?? null)] ?? null) : null), "content", [], "any", false, false, false, 2)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[5] ?? null) : null), "title", [], "any", false, false, false, 2), "html", null, true);
        echo "</p>
</header>
<div class=\"swiper mySwiper\">
    <div class=\"swiper-wrapper\" >
        ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (($__internal_compile_2 = twig_get_attribute($this->env, $this->source, (($__internal_compile_3 = twig_get_attribute($this->env, $this->source, ($context["obj"] ?? null), "page", [], "any", false, false, false, 6)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[($context["id"] ?? null)] ?? null) : null), "content", [], "any", false, false, false, 6)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[5] ?? null) : null), "content", [], "any", false, false, false, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["slide"]) {
            // line 7
            echo "            <div class=\"swiper-slide\"><img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slide"], "url", [], "any", false, false, false, 7), "html", null, true);
            echo "\" height=\"300\" width=\"500\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slide"], "alt", [], "any", false, false, false, 7), "html", null, true);
            echo "\"></div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slide'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "        
    </div>
    <div class=\"swiper-pagination\"></div>
    <div class=\"swiper-button-next\"></div>
    <div class=\"swiper-button-prev\"></div>
</div>
";
        // line 15
        $this->displayBlock('script', $context, $blocks);
    }

    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "    
";
    }

    public function getTemplateName()
    {
        return "container/components/slider.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 16,  71 => 15,  63 => 9,  52 => 7,  48 => 6,  41 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header class=\"slider\">
    <p>{{obj.page[id].content[5].title}}</p>
</header>
<div class=\"swiper mySwiper\">
    <div class=\"swiper-wrapper\" >
        {% for slide in obj.page[id].content[5].content %}
            <div class=\"swiper-slide\"><img src=\"{{slide.url}}\" height=\"300\" width=\"500\" alt=\"{{slide.alt}}\"></div>
        {% endfor %}
        
    </div>
    <div class=\"swiper-pagination\"></div>
    <div class=\"swiper-button-next\"></div>
    <div class=\"swiper-button-prev\"></div>
</div>
{% block script %}
    
{% endblock %}", "container/components/slider.html.twig", "C:\\xampp\\htdocs\\SiteSTAD\\app\\templates\\container\\components\\slider.html.twig");
    }
}
