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

/* container/contain.html.twig */
class __TwigTemplate_e73fe4756739a5997987e6d91bf2cc46 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('body', $context, $blocks);
    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    <div class=\"containerBorderRadius\">
        <div class=\"borderRadius\">
                <span class=\"scroll-icon\">
                    <span class=\"scroll-icon__dot\"></span>
                </span>
        </div>
    </div>
    <main>

    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["obj"] ?? null), "page", [], "any", false, false, false, 11)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[($context["id"] ?? null)] ?? null) : null), "content", [], "any", false, false, false, 11));
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
            // line 12
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, $context["element"], "type", [], "any", false, false, false, 12) == "about")) {
                // line 13
                echo "            ";
                $this->loadTemplate("container/components/about.html.twig", "container/contain.html.twig", 13)->display($context);
                // line 14
                echo "        ";
            } elseif ((twig_get_attribute($this->env, $this->source, $context["element"], "type", [], "any", false, false, false, 14) == "twoContent")) {
                // line 15
                echo "            ";
                $this->loadTemplate("container/components/twoContents.html.twig", "container/contain.html.twig", 15)->display($context);
                // line 16
                echo "        ";
            } elseif ((twig_get_attribute($this->env, $this->source, $context["element"], "type", [], "any", false, false, false, 16) == "menu")) {
                // line 17
                echo "            ";
                $this->loadTemplate("container/components/menu.html.twig", "container/contain.html.twig", 17)->display($context);
                // line 18
                echo "        ";
            } elseif ((twig_get_attribute($this->env, $this->source, $context["element"], "type", [], "any", false, false, false, 18) == "slider")) {
                // line 19
                echo "            ";
                $this->loadTemplate("container/components/slider.html.twig", "container/contain.html.twig", 19)->display($context);
                // line 20
                echo "        ";
            } elseif ((twig_get_attribute($this->env, $this->source, $context["element"], "type", [], "any", false, false, false, 20) == "twoContentsMap")) {
                // line 21
                echo "            ";
                $this->loadTemplate("container/components/twoContentsMap.html.twig", "container/contain.html.twig", 21)->display($context);
                // line 22
                echo "        ";
            } elseif ((twig_get_attribute($this->env, $this->source, $context["element"], "type", [], "any", false, false, false, 22) == "form")) {
                // line 23
                echo "            ";
                $this->loadTemplate("container/components/contact.html.twig", "container/contain.html.twig", 23)->display($context);
                // line 24
                echo "        ";
            } elseif ((twig_get_attribute($this->env, $this->source, $context["element"], "type", [], "any", false, false, false, 24) == "twoContainer")) {
                // line 25
                echo "            ";
                $this->loadTemplate("container/components/twoContainer.html.twig", "container/contain.html.twig", 25)->display($context);
                // line 26
                echo "        ";
            } elseif ((twig_get_attribute($this->env, $this->source, $context["element"], "type", [], "any", false, false, false, 26) == "contactUs")) {
                // line 27
                echo "            ";
                $this->loadTemplate("container/components/contactUs.html.twig", "container/contain.html.twig", 27)->display($context);
                // line 28
                echo "        ";
            }
            // line 29
            echo "    ";
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
        // line 30
        echo "    </main>
";
    }

    public function getTemplateName()
    {
        return "container/contain.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  138 => 30,  124 => 29,  121 => 28,  118 => 27,  115 => 26,  112 => 25,  109 => 24,  106 => 23,  103 => 22,  100 => 21,  97 => 20,  94 => 19,  91 => 18,  88 => 17,  85 => 16,  82 => 15,  79 => 14,  76 => 13,  73 => 12,  56 => 11,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block body %}
    <div class=\"containerBorderRadius\">
        <div class=\"borderRadius\">
                <span class=\"scroll-icon\">
                    <span class=\"scroll-icon__dot\"></span>
                </span>
        </div>
    </div>
    <main>

    {% for element in obj.page[id].content %}
        {% if element.type == \"about\"%}
            {% include 'container/components/about.html.twig' %}
        {% elseif element.type == \"twoContent\" %}
            {% include 'container/components/twoContents.html.twig'%}
        {% elseif element.type == \"menu\"%}
            {% include 'container/components/menu.html.twig' %}
        {% elseif element.type == \"slider\"%}
            {% include 'container/components/slider.html.twig' %}
        {% elseif element.type == \"twoContentsMap\"%}
            {% include 'container/components/twoContentsMap.html.twig' %}
        {% elseif element.type == \"form\" %}
            {% include 'container/components/contact.html.twig' %}
        {% elseif element.type == \"twoContainer\"  %}
            {% include 'container/components/twoContainer.html.twig' %}
        {% elseif element.type == \"contactUs\" %}
            {% include 'container/components/contactUs.html.twig' %}
        {% endif %}
    {% endfor %}
    </main>
{% endblock body %}", "container/contain.html.twig", "C:\\xampp\\htdocs\\SiteSTAD\\app\\templates\\container\\contain.html.twig");
    }
}
