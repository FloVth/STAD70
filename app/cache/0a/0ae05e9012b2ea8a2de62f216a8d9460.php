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

/* ./form/succes.html.twig */
class __TwigTemplate_e349d08bd686732460906db3ef26837a extends Template
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
        echo "<head>
    <link rel=\"stylesheet\" href=\"";
        // line 2
        echo twig_escape_filter($this->env, ($context["pathCss"] ?? null), "html", null, true);
        echo "/form/formResponse.css\" type=\"text/css\">
</head>
<div class=\"success\">
    <div class=\"backgroundGradient\">
        <div class=\"icon\">
            <svg class=\"success\" viewBox=\"0 0 24.97 19.11\" >
                <style type=\"text/css\">
                    .success .st0{fill:none;stroke:#009640;stroke-width:4;stroke-miterlimit:10;}
                </style>
                <polyline class=\"st0\" points=\"1.42,9 8.7,16.28 23.56,1.41 \"/>
            </svg>
        </div>
        <div class=\"text\">
            <p>Votre message a été envoyé avec succès !</p>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "./form/succes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<head>
    <link rel=\"stylesheet\" href=\"{{pathCss}}/form/formResponse.css\" type=\"text/css\">
</head>
<div class=\"success\">
    <div class=\"backgroundGradient\">
        <div class=\"icon\">
            <svg class=\"success\" viewBox=\"0 0 24.97 19.11\" >
                <style type=\"text/css\">
                    .success .st0{fill:none;stroke:#009640;stroke-width:4;stroke-miterlimit:10;}
                </style>
                <polyline class=\"st0\" points=\"1.42,9 8.7,16.28 23.56,1.41 \"/>
            </svg>
        </div>
        <div class=\"text\">
            <p>Votre message a été envoyé avec succès !</p>
        </div>
    </div>
</div>", "./form/succes.html.twig", "C:\\xampp\\htdocs\\SiteSTAD\\app\\templates\\form\\succes.html.twig");
    }
}
