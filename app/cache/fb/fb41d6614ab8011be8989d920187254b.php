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

/* twoContentsMap.html.twig */
class __TwigTemplate_1cba699caa9d4c36cb548776b975ded2 extends Template
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
        echo "<div class=\"twoContentsMap\">
    <div class=\"titre\">
        <header>";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["obj"] ?? null), "page", [], "any", false, false, false, 7)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[($context["id"] ?? null)] ?? null) : null), "content", [], "any", false, false, false, 7)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[6] ?? null) : null), "title", [], "any", false, false, false, 7), "html", null, true);
        echo "</header>
    </div>
    <div class=\"twoContents\">
        
        <div id=\"map\">

        </div>
        <div class=\"text\">
            <p class=\"title\">";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_2 = twig_get_attribute($this->env, $this->source, (($__internal_compile_3 = twig_get_attribute($this->env, $this->source, ($context["obj"] ?? null), "page", [], "any", false, false, false, 15)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[($context["id"] ?? null)] ?? null) : null), "content", [], "any", false, false, false, 15)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[6] ?? null) : null), "content", [], "any", false, false, false, 15), "text", [], "any", false, false, false, 15), "title", [], "any", false, false, false, 15), "html", null, true);
        echo "</p>
            <p>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_4 = twig_get_attribute($this->env, $this->source, (($__internal_compile_5 = twig_get_attribute($this->env, $this->source, ($context["obj"] ?? null), "page", [], "any", false, false, false, 16)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[($context["id"] ?? null)] ?? null) : null), "content", [], "any", false, false, false, 16)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[6] ?? null) : null), "content", [], "any", false, false, false, 16), "text", [], "any", false, false, false, 16), "text", [], "any", false, false, false, 16), "html", null, true);
        echo "</p>
            <p class=\"secondText\">";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_6 = twig_get_attribute($this->env, $this->source, (($__internal_compile_7 = twig_get_attribute($this->env, $this->source, ($context["obj"] ?? null), "page", [], "any", false, false, false, 17)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[($context["id"] ?? null)] ?? null) : null), "content", [], "any", false, false, false, 17)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[6] ?? null) : null), "content", [], "any", false, false, false, 17), "text", [], "any", false, false, false, 17), "text2", [], "any", false, false, false, 17), "html", null, true);
        echo "</p>
            <div class=\"phoneNumber\">
                <svg viewBox=\"0 0 20.87 38.37\">
                    <path class=\"st0\" d=\"M18.15,0.03L2.75,0C1.24,0,0.01,1.22,0.01,2.73l-0.06,32.88c0,1.51,1.22,2.74,2.73,2.74l15.39,0.03
                        c1.51,0,2.74-1.22,2.74-2.73l0.06-32.88C20.88,1.26,19.66,0.03,18.15,0.03z M10.61,36.81l-0.46,0c-0.8,0-1.44-0.65-1.44-1.44
                        c0-0.8,0.65-1.44,1.44-1.44l0.46,0c0.8,0,1.44,0.65,1.44,1.44C12.05,36.17,11.41,36.81,10.61,36.81z M18.55,32.14L2.23,32.11
                        L2.28,3.92L18.6,3.95L18.55,32.14z\"/>
                </svg>
                <p class=\"phone\">";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_8 = twig_get_attribute($this->env, $this->source, (($__internal_compile_9 = twig_get_attribute($this->env, $this->source, ($context["obj"] ?? null), "page", [], "any", false, false, false, 25)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[($context["id"] ?? null)] ?? null) : null), "content", [], "any", false, false, false, 25)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[6] ?? null) : null), "content", [], "any", false, false, false, 25), "text", [], "any", false, false, false, 25), "phone", [], "any", false, false, false, 25), "html", null, true);
        echo "</p>
            </div>
        </div>
    </div>
</div>
";
        // line 30
        $this->displayBlock('script', $context, $blocks);
    }

    // line 1
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, ($context["pathCss"] ?? null), "html", null, true);
        echo "/page/twoContentsMap.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.3.1/dist/leaflet.css\" integrity=\"sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ==\" crossorigin=\"\" />
";
    }

    // line 30
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        echo "    <script src=\"https://unpkg.com/leaflet@1.3.1/dist/leaflet.js\" integrity=\"sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw==\" crossorigin=\"\"></script>
    <script src=\"/script/map.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "twoContentsMap.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 31,  99 => 30,  91 => 2,  87 => 1,  83 => 30,  75 => 25,  64 => 17,  60 => 16,  56 => 15,  45 => 7,  41 => 5,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block css %}
    <link rel=\"stylesheet\" href=\"{{pathCss}}/page/twoContentsMap.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.3.1/dist/leaflet.css\" integrity=\"sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ==\" crossorigin=\"\" />
{% endblock %}
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
</div>
{% block script %}
    <script src=\"https://unpkg.com/leaflet@1.3.1/dist/leaflet.js\" integrity=\"sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw==\" crossorigin=\"\"></script>
    <script src=\"/script/map.js\"></script>
{% endblock %}", "twoContentsMap.html.twig", "C:\\xampp\\htdocs\\SiteSTAD\\app\\templates\\twoContentsMap.html.twig");
    }
}
