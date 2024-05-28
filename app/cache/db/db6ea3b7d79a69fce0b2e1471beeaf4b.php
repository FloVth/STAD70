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

/* footer/footer.html.twig */
class __TwigTemplate_a0ce8e93fba4a023dba18e106b6ee72b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "
";
        // line 2
        $this->displayBlock('footer', $context, $blocks);
        // line 16
        echo " ";
    }

    // line 2
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "    <footer>   
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
    </footer>
";
    }

    public function getTemplateName()
    {
        return "footer/footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  51 => 3,  47 => 2,  43 => 16,  41 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% block footer %}
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
    </footer>
{% endblock footer %} ", "footer/footer.html.twig", "C:\\xampp\\htdocs\\SiteSTAD\\app\\templates\\footer\\footer.html.twig");
    }
}
