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

/* slider.html.twig */
class __TwigTemplate_c6a3ae8c3cde622a107747f8863e7632 extends Template
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
            'script' => [$this, 'block_script'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('css', $context, $blocks);
        // line 5
        echo "<header class=\"slider\">
    <p>";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["obj"] ?? null), "page", [], "any", false, false, false, 6)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[($context["id"] ?? null)] ?? null) : null), "content", [], "any", false, false, false, 6)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[5] ?? null) : null), "title", [], "any", false, false, false, 6), "html", null, true);
        echo "</p>
</header>
<div class=\"swiper mySwiper\">
    <div class=\"swiper-wrapper\" >
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (($__internal_compile_2 = twig_get_attribute($this->env, $this->source, (($__internal_compile_3 = twig_get_attribute($this->env, $this->source, ($context["obj"] ?? null), "page", [], "any", false, false, false, 10)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[($context["id"] ?? null)] ?? null) : null), "content", [], "any", false, false, false, 10)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[5] ?? null) : null), "content", [], "any", false, false, false, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["slide"]) {
            // line 11
            echo "            <div class=\"swiper-slide\"><img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slide"], "url", [], "any", false, false, false, 11), "html", null, true);
            echo "\" height=\"300\" width=\"500\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slide"], "alt", [], "any", false, false, false, 11), "html", null, true);
            echo "\"/></div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slide'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "        
    </div>
    <div class=\"swiper-pagination\"></div>
    <div class=\"swiper-button-next\"></div>
    <div class=\"swiper-button-prev\"></div>
</div>
";
        // line 19
        $this->displayBlock('script', $context, $blocks);
    }

    // line 1
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["pathCss"] ?? null), "html", null, true);
        echo "/page/slider.css\"/>
";
    }

    // line 19
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "    <script src=\"../script/slider.js\"></script>
    <script src=\"../script/swiper-bundle.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "slider.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 20,  91 => 19,  85 => 3,  82 => 2,  78 => 1,  74 => 19,  66 => 13,  55 => 11,  51 => 10,  44 => 6,  41 => 5,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block css %}
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css\"/>
    <link rel=\"stylesheet\" href=\"{{pathCss}}/page/slider.css\"/>
{% endblock %}
<header class=\"slider\">
    <p>{{obj.page[id].content[5].title}}</p>
</header>
<div class=\"swiper mySwiper\">
    <div class=\"swiper-wrapper\" >
        {% for slide in obj.page[id].content[5].content %}
            <div class=\"swiper-slide\"><img src=\"{{slide.url}}\" height=\"300\" width=\"500\" alt=\"{{slide.alt}}\"/></div>
        {% endfor %}
        
    </div>
    <div class=\"swiper-pagination\"></div>
    <div class=\"swiper-button-next\"></div>
    <div class=\"swiper-button-prev\"></div>
</div>
{% block script %}
    <script src=\"../script/slider.js\"></script>
    <script src=\"../script/swiper-bundle.js\"></script>
{% endblock %}", "slider.html.twig", "C:\\xampp\\htdocs\\SiteSTAD\\app\\templates\\slider.html.twig");
    }
}
