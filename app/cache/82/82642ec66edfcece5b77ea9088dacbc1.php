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

/* container/components/contactUs.html.twig */
class __TwigTemplate_61d5cb7bfbbef4bb2ff61c8ab5e3ec58 extends Template
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
        echo "<div class=\"contactUs\">
    <div class=\"contain\">
        <div class=\"text\">
            <header class=\"title\">vous avez un projet de décoration ?</header>
            <p><span class=\"stad\">stad</span> est le professionel que vous recherchez.</p>
        </div>
        <div class=\"button\">
            <a href=\"/#contact\">
                <svg viewBox=\"0 0 36.26 28.31\">
                    <path class=\"st0\" d=\"M15.81,8.81l-0.72-3l9.8,4.99l11.36-5.79H14.9l-0.86-3.57c-0.24-1.01-1.26-1.64-2.27-1.39L1.45,2.53
                        C0.43,2.77-0.19,3.79,0.05,4.8l5.29,22.06c0.24,1.01,1.26,1.64,2.27,1.4l10.33-2.48c1.01-0.24,1.64-1.26,1.39-2.27l-0.66-2.75h17.58
                        V7.94L24.9,13.76L15.81,8.81z M12.68,25.94l-0.31,0.07c-0.53,0.13-1.07-0.2-1.2-0.73s0.2-1.07,0.73-1.2L12.22,24
                        c0.53-0.13,1.07,0.2,1.2,0.73C13.54,25.27,13.21,25.81,12.68,25.94z M6.3,24.14L1.77,5.23l10.95-2.62l4.53,18.91L6.3,24.14z\"/>
                    </svg>
                <p>contactez - nous</p>
            </a>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "container/components/contactUs.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"contactUs\">
    <div class=\"contain\">
        <div class=\"text\">
            <header class=\"title\">vous avez un projet de décoration ?</header>
            <p><span class=\"stad\">stad</span> est le professionel que vous recherchez.</p>
        </div>
        <div class=\"button\">
            <a href=\"/#contact\">
                <svg viewBox=\"0 0 36.26 28.31\">
                    <path class=\"st0\" d=\"M15.81,8.81l-0.72-3l9.8,4.99l11.36-5.79H14.9l-0.86-3.57c-0.24-1.01-1.26-1.64-2.27-1.39L1.45,2.53
                        C0.43,2.77-0.19,3.79,0.05,4.8l5.29,22.06c0.24,1.01,1.26,1.64,2.27,1.4l10.33-2.48c1.01-0.24,1.64-1.26,1.39-2.27l-0.66-2.75h17.58
                        V7.94L24.9,13.76L15.81,8.81z M12.68,25.94l-0.31,0.07c-0.53,0.13-1.07-0.2-1.2-0.73s0.2-1.07,0.73-1.2L12.22,24
                        c0.53-0.13,1.07,0.2,1.2,0.73C13.54,25.27,13.21,25.81,12.68,25.94z M6.3,24.14L1.77,5.23l10.95-2.62l4.53,18.91L6.3,24.14z\"/>
                    </svg>
                <p>contactez - nous</p>
            </a>
        </div>
    </div>
</div>", "container/components/contactUs.html.twig", "C:\\xampp\\htdocs\\SiteSTAD\\app\\templates\\container\\components\\contactUs.html.twig");
    }
}
