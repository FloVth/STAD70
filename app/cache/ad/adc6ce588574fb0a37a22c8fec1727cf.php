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

/* footer/footerMenu.html.twig */
class __TwigTemplate_39ea52cdf73f9284f457a4f88bf4681e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'footerMenu' => [$this, 'block_footerMenu'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "
";
        // line 2
        $this->displayBlock('footerMenu', $context, $blocks);
    }

    public function block_footerMenu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "    <div class=\"footerMenu\">
        ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["obj"] ?? null), "page", [], "any", false, false, false, 4));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 5
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "url", [], "any", false, false, false, 5), "html", null, true);
            echo "\"><p>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "title", [], "any", false, false, false, 5), "html", null, true);
            echo "</p></a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "            <a href=\"/mentions-legales\"><p>mentions légales</p></a>
    </div> 
";
    }

    public function getTemplateName()
    {
        return "footer/footerMenu.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 7,  55 => 5,  51 => 4,  48 => 3,  41 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% block footerMenu %}
    <div class=\"footerMenu\">
        {% for page in obj.page %}
            <a href=\"{{page.url}}\"><p>{{page.title}}</p></a>
        {% endfor %}
            <a href=\"/mentions-legales\"><p>mentions légales</p></a>
    </div> 
{% endblock footerMenu %}", "footer/footerMenu.html.twig", "C:\\xampp\\htdocs\\SiteSTAD\\app\\templates\\footer\\footerMenu.html.twig");
    }
}
