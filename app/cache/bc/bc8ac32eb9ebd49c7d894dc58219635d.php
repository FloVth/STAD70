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

/* footerMenu.html.twig */
class __TwigTemplate_5969812b2d415ee85d32eec32f5a3bd7 extends Template
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
        echo "<div class=\"footerMenu\">
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["obj"] ?? null), "page", [], "any", false, false, false, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 6
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "url", [], "any", false, false, false, 6), "html", null, true);
            echo "\"><p>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "title", [], "any", false, false, false, 6), "html", null, true);
            echo "</p></a>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        <a href=\"/\"><p>mentions légales</p></a>
</div> ";
    }

    // line 1
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " 
   <link rel=\"stylesheet\" href=\"";
        // line 2
        echo twig_escape_filter($this->env, ($context["pathCss"] ?? null), "html", null, true);
        echo "/general/footerMenu.css\" type=\"text/css\">
";
    }

    public function getTemplateName()
    {
        return "footerMenu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 2,  63 => 1,  58 => 8,  47 => 6,  43 => 5,  40 => 4,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block css %} 
   <link rel=\"stylesheet\" href=\"{{pathCss}}/general/footerMenu.css\" type=\"text/css\">
{% endblock %}
<div class=\"footerMenu\">
    {% for page in obj.page %}
        <a href=\"{{page.url}}\"><p>{{page.title}}</p></a>
    {% endfor %}
        <a href=\"/\"><p>mentions légales</p></a>
</div> ", "footerMenu.html.twig", "C:\\xampp\\htdocs\\SiteSTAD\\app\\templates\\footerMenu.html.twig");
    }
}
