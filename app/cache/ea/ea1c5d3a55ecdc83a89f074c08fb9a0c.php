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

/* footer.html.twig */
class __TwigTemplate_a377f0f46b57614e05ae957c8b2f4a34 extends Template
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
        echo "<footer>   
    <div class=\"data\">
        <p class=\"ActivCom\">
            CONCEPTION ET HEBERGEMENT:&ensp;Activ'Communication
        </p>
        <p class=\"Adress-ActivCom\">
            148 Avenue Pasteur&ensp;-&ensp;70000 Echenoz-la-Méline &ensp;-&ensp;tél. 0384686746&ensp;-&ensp;mail:&ensp;contact@activcom.net&ensp;-&ensp;©2011-2021-Activ'Communication
        </p>
    </div>
    <div class=\"ActivCom-logo\">
        <a href=\"https://activcom.net/\" target=\"_blank\"><img src=\"../media/LogoActivCom.svg\" height=\"60\" width=\"150\" alt=\"Logo activ com\"></a>
    </div>
</footer>";
    }

    // line 1
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, ($context["pathCss"] ?? null), "html", null, true);
        echo "/general/footer.css\" type=\"text/css\">
";
    }

    public function getTemplateName()
    {
        return "footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  60 => 2,  56 => 1,  40 => 4,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block css %}
    <link rel=\"stylesheet\" href=\"{{pathCss}}/general/footer.css\" type=\"text/css\">
{% endblock %}
<footer>   
    <div class=\"data\">
        <p class=\"ActivCom\">
            CONCEPTION ET HEBERGEMENT:&ensp;Activ'Communication
        </p>
        <p class=\"Adress-ActivCom\">
            148 Avenue Pasteur&ensp;-&ensp;70000 Echenoz-la-Méline &ensp;-&ensp;tél. 0384686746&ensp;-&ensp;mail:&ensp;contact@activcom.net&ensp;-&ensp;©2011-2021-Activ'Communication
        </p>
    </div>
    <div class=\"ActivCom-logo\">
        <a href=\"https://activcom.net/\" target=\"_blank\"><img src=\"../media/LogoActivCom.svg\" height=\"60\" width=\"150\" alt=\"Logo activ com\"></a>
    </div>
</footer>", "footer.html.twig", "C:\\xampp\\htdocs\\SiteSTAD\\app\\templates\\footer.html.twig");
    }
}
