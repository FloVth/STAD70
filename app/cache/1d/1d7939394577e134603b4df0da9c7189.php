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

/* contain.html.twig */
class __TwigTemplate_066af7ab59389e05a3e447586405d162 extends Template
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
        echo "<div class=\"containerBorderRadius\">
    <div class=\"borderRadius\">
            <span class=\"scroll-icon\">
                <span class=\"scroll-icon__dot\"></span>
            </span>
    </div>
</div>
<main>

";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["obj"] ?? null), "page", [], "any", false, false, false, 13)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[($context["id"] ?? null)] ?? null) : null), "content", [], "any", false, false, false, 13));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
            // line 14
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, $context["element"], "type", [], "any", false, false, false, 14) == "about")) {
                // line 15
                echo "        ";
                $this->loadTemplate("about.html.twig", "contain.html.twig", 15)->display($context);
                // line 16
                echo "    ";
            } elseif ((twig_get_attribute($this->env, $this->source, $context["element"], "type", [], "any", false, false, false, 16) == "twoContent")) {
                // line 17
                echo "        ";
                $this->loadTemplate("twoContents.html.twig", "contain.html.twig", 17)->display(twig_array_merge($context, ["element" => $context["element"]]));
                // line 18
                echo "    ";
            } elseif ((twig_get_attribute($this->env, $this->source, $context["element"], "type", [], "any", false, false, false, 18) == "menu")) {
                // line 19
                echo "        ";
                $this->loadTemplate("menu.html.twig", "contain.html.twig", 19)->display($context);
                // line 20
                echo "    ";
            } elseif ((twig_get_attribute($this->env, $this->source, $context["element"], "type", [], "any", false, false, false, 20) == "slider")) {
                // line 21
                echo "        ";
                $this->loadTemplate("slider.html.twig", "contain.html.twig", 21)->display($context);
                // line 22
                echo "    ";
            } elseif ((twig_get_attribute($this->env, $this->source, $context["element"], "type", [], "any", false, false, false, 22) == "twoContentMap")) {
                // line 23
                echo "        ";
                $this->loadTemplate("twoContentsMap.html.twig", "contain.html.twig", 23)->display($context);
                // line 24
                echo "    ";
            } elseif ((twig_get_attribute($this->env, $this->source, $context["element"], "type", [], "any", false, false, false, 24) == "form")) {
                // line 25
                echo "        ";
                $this->loadTemplate("contact.html.twig", "contain.html.twig", 25)->display($context);
                // line 26
                echo "    ";
            } elseif ((twig_get_attribute($this->env, $this->source, $context["element"], "type", [], "any", false, false, false, 26) == "twoContainer")) {
                // line 27
                echo "        ";
                $this->loadTemplate("twoContainer.html.twig", "contain.html.twig", 27)->display($context);
                // line 28
                echo "    ";
            } elseif ((twig_get_attribute($this->env, $this->source, $context["element"], "type", [], "any", false, false, false, 28) == "contactUs")) {
                // line 29
                echo "        ";
                $this->loadTemplate("contactUs.html.twig", "contain.html.twig", 29)->display($context);
                // line 30
                echo "    ";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "</main>";
    }

    // line 1
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, ($context["pathCss"] ?? null), "html", null, true);
        echo "/general/contain.css\" type=\"text/css\">
";
    }

    public function getTemplateName()
    {
        return "contain.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 2,  135 => 1,  131 => 32,  116 => 30,  113 => 29,  110 => 28,  107 => 27,  104 => 26,  101 => 25,  98 => 24,  95 => 23,  92 => 22,  89 => 21,  86 => 20,  83 => 19,  80 => 18,  77 => 17,  74 => 16,  71 => 15,  68 => 14,  51 => 13,  40 => 4,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block css %}
    <link rel=\"stylesheet\" href=\"{{pathCss}}/general/contain.css\" type=\"text/css\">
{% endblock %}
<div class=\"containerBorderRadius\">
    <div class=\"borderRadius\">
            <span class=\"scroll-icon\">
                <span class=\"scroll-icon__dot\"></span>
            </span>
    </div>
</div>
<main>

{% for element in obj.page[id].content %}
    {% if element.type == \"about\" %}
        {% include 'about.html.twig' %}
    {% elseif element.type == \"twoContent\" %}
        {% include 'twoContents.html.twig' with {'element' : element} %}
    {% elseif element.type == \"menu\"%}
        {% include 'menu.html.twig'%}
    {% elseif element.type == \"slider\"%}
        {% include 'slider.html.twig' %}
    {% elseif element.type == \"twoContentMap\"%}
        {% include 'twoContentsMap.html.twig' %}
    {% elseif element.type == \"form\" %}
        {% include 'contact.html.twig'%}
    {% elseif element.type == \"twoContainer\" %}
        {% include 'twoContainer.html.twig' %}
    {% elseif element.type == \"contactUs\" %}
        {% include 'contactUs.html.twig' %}
    {% endif %}
{% endfor %}
</main>", "contain.html.twig", "C:\\xampp\\htdocs\\SiteSTAD\\app\\templates\\contain.html.twig");
    }
}
