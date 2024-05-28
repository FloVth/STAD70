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

/* header/header.html.twig */
class __TwigTemplate_54c712a3576f729d6b126541ea0c3874 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'header' => [$this, 'block_header'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('header', $context, $blocks);
    }

    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    <header class='headerPage'>
        <div class=\"logo\">
            <img src=\"./media/LogoStadHeader.svg\" width=\"300\" height=\"102\" alt=\"Logo Stad\">
        </div>
        <div class='top'>
            <div class='info'>
                <address>
                    <svg viewBox=\"0 0 15.18 21.68\">
                        <path class=\"st0\" d=\"M7.59,10.3c-1.5,0-2.71-1.21-2.71-2.71s1.21-2.71,2.71-2.71c1.5,0,2.71,1.21,2.71,2.71S9.09,10.3,7.59,10.3
                            M7.59,0C3.4,0,0,3.4,0,7.59c0,5.69,7.59,14.09,7.59,14.09s7.59-8.4,7.59-14.09C15.18,3.4,11.78,0,7.59,0\"/>
                    </svg>
                    <p>";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["obj"] ?? null), "general", [], "any", false, false, false, 13), "header", [], "any", false, false, false, 13), "localisation", [], "any", false, false, false, 13), "html", null, true);
        echo "</p>
                    <div class=\"border\">
                    </div>
                    <svg viewBox=\"0 0 19.51 19.51\">
                        <path d=\"M13.01,9.76h2.17c0-2.99-2.43-5.42-5.42-5.42V6.5C11.55,6.5,13.01,7.96,13.01,9.76 M17.35,9.76h2.17
                            C19.51,4.34,15.14,0,9.76,0v2.17C13.94,2.17,17.35,5.56,17.35,9.76 M18.43,13.55c-1.36,0-2.66-0.22-3.87-0.62
                            c-0.38-0.12-0.8-0.03-1.11,0.27l-2.38,2.38C8,14.03,5.49,11.51,3.92,8.44l2.39-2.38c0.3-0.3,0.39-0.73,0.27-1.11
                            c-0.4-1.21-0.62-2.52-0.62-3.87C5.96,0.48,5.48,0,4.88,0H1.08C0.49,0,0,0.48,0,1.08c0,10.18,8.25,18.43,18.43,18.43
                            c0.6,0,1.08-0.49,1.08-1.08v-3.79C19.51,14.04,19.03,13.55,18.43,13.55\"/>
                    </svg>
                    <p>";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["obj"] ?? null), "general", [], "any", false, false, false, 23), "header", [], "any", false, false, false, 23), "phone", [], "any", false, false, false, 23), "html", null, true);
        echo "
                </address>
                <div class=\"socialNetworks\">
                    <ul>
                        <li>
                            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["obj"] ?? null), "general", [], "any", false, false, false, 28), "header", [], "any", false, false, false, 28), "facebook", [], "any", false, false, false, 28), "html", null, true);
        echo "\" target=\"_blank\">
                                <svg viewBox=\"0 0 22.94 22.86\">
                                    <path class=\"st0\" d=\"M11.46,0C5.15,0-0.01,5.15-0.01,11.5c0,5.74,4.2,10.5,9.69,11.36v-8.03H6.76V11.5h2.92V8.96
                                        c0-2.88,1.71-4.46,4.34-4.46c1.25,0,2.56,0.22,2.56,0.22v2.83h-1.45c-1.42,0-1.87,0.88-1.87,1.79v2.16h3.19l-0.52,3.33h-2.67v8.03
                                        c5.59-0.88,9.7-5.71,9.69-11.36C22.94,5.15,17.78,0,11.46,0z\"/>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href=\"";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["obj"] ?? null), "general", [], "any", false, false, false, 37), "header", [], "any", false, false, false, 37), "x", [], "any", false, false, false, 37), "html", null, true);
        echo "\" target=\"_blank\">
                                <svg viewBox=\"0 0 22.94 22.86\" >
                                    <g>
                                        <path class=\"st0\" d=\"M11.47-0.03C5.14-0.03,0.01,5.1,0.01,11.43s5.13,11.46,11.46,11.46s11.46-5.13,11.46-11.46
                                            S17.8-0.03,11.47-0.03z M14.34,18.07l-3.9-5.21l-4.83,5.21H4.38l5.51-5.95L4.41,4.79h4.22l3.59,4.8l4.44-4.8h1.24l-5.13,5.54
                                            l5.79,7.74H14.34z\"/>
                                    </g>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href=\"";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["obj"] ?? null), "general", [], "any", false, false, false, 48), "header", [], "any", false, false, false, 48), "linkedin", [], "any", false, false, false, 48), "html", null, true);
        echo "\" target=\"_blank\">
                                <svg viewBox=\"0 0 22.94 22.86\">
                                    <path class=\"st0\" d=\"M11.47,0C5.16,0,0.04,5.12,0.04,11.43c0,6.31,5.12,11.43,11.43,11.43c6.31,0,11.43-5.12,11.43-11.43
                                        C22.9,5.12,17.78,0,11.47,0z M7.9,17.86H5.04v-10H7.9V17.86z M6.47,7.15c-0.79,0-1.43-0.64-1.43-1.43c0-0.79,0.64-1.43,1.43-1.43
                                        c0.79,0,1.43,0.64,1.43,1.43C7.9,6.51,7.26,7.15,6.47,7.15z M17.9,17.86h-2.86v-5.71c0-0.94-0.52-1.43-1.43-1.43
                                        c-0.93,0-1.43,0.5-1.43,1.43v5.71H9.33v-10h2.86v1.43c0.16-0.7,0.51-1.43,2.5-1.43c2.84,0,3.21,2.14,3.21,5V17.86z\"/>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href=\"";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["obj"] ?? null), "general", [], "any", false, false, false, 58), "header", [], "any", false, false, false, 58), "instagram", [], "any", false, false, false, 58), "html", null, true);
        echo "\" target=\"_blank\">
                                <svg viewBox=\"0 0 22.94 22.86\">
                                    <g transform=\"translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)\">
                                        <path class=\"st0\" d=\"M5.03,2.36c0-0.13-0.11-0.24-0.24-0.24S4.56,2.23,4.56,2.36s0.11,0.24,0.24,0.24
                                            C4.92,2.59,5.03,2.49,5.03,2.36z\"/>
                                        <path class=\"st0\" d=\"M3.58,2.49c-0.6,0-1.08,0.48-1.08,1.08c0,0.15,0.03,0.29,0.08,0.42c0.05,0.13,0.13,0.25,0.23,0.34
                                            c0.2,0.2,0.47,0.32,0.76,0.32s0.57-0.12,0.76-0.32c0.1-0.1,0.18-0.21,0.23-0.34c0.05-0.13,0.08-0.27,0.08-0.42
                                            C4.66,2.97,4.18,2.49,3.58,2.49z\"/>
                                        <path class=\"st0\" d=\"M3.58-0.51c-2.25,0-4.08,1.83-4.08,4.08s1.83,4.08,4.08,4.08s4.08-1.83,4.08-4.08S5.83-0.51,3.58-0.51z
                                            M5.85,4.5c0,0.74-0.6,1.34-1.34,1.34H2.65c-0.74,0-1.34-0.6-1.34-1.34V2.64c0-0.28,0.08-0.53,0.23-0.75
                                            C1.79,1.54,2.19,1.3,2.65,1.3h1.86c0.46,0,0.87,0.23,1.11,0.59c0.14,0.21,0.23,0.47,0.23,0.75V4.5z\"/>
                                    </g>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class=\"nav\">
            <ul>
                ";
        // line 79
        $context["idHeader"] = 0;
        // line 80
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["obj"] ?? null), "page", [], "any", false, false, false, 80));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 81
            echo "                    ";
            if ((($context["idHeader"] ?? null) == ($context["id"] ?? null))) {
                // line 82
                echo "                    <li><a class=\"selected\" href=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["link"], "url", [], "any", false, false, false, 82), "html", null, true);
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["link"], "title", [], "any", false, false, false, 82), "html", null, true);
                echo "</a></li>
                    ";
            } else {
                // line 84
                echo "                    <li><a href=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["link"], "url", [], "any", false, false, false, 84), "html", null, true);
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["link"], "title", [], "any", false, false, false, 84), "html", null, true);
                echo "</a></li>
                    ";
            }
            // line 86
            echo "                    ";
            $context["idHeader"] = (($context["idHeader"] ?? null) + 1);
            // line 87
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "            </ul>            
        </div>
        <div class=\"responsive\">
            <div class=\"burger\">
                <svg viewBox=\"0 0 35.19 23.46\" >
                    <path class=\"st0\" d=\"M0,0h35.19v3.91H0V0 M0,9.77h35.19v3.91H0V9.77 M0,19.55h35.19v3.91H0V19.55z\"/>
                </svg>
            </div>
            <div class=\"cross displayNone\">
                <svg viewBox=\"0 0 24 24\">
                    <path d=\"M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z\" />
                </svg>
            </div>
        </div>
        
    </header>
    <div class=\"menuResponsive\">
        <ul class=\"navigation\">
            ";
        // line 106
        $context["idHeader"] = 0;
        // line 107
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["obj"] ?? null), "page", [], "any", false, false, false, 107));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 108
            echo "                    ";
            if ((($context["idHeader"] ?? null) == ($context["id"] ?? null))) {
                // line 109
                echo "                    <li><a class=\"selected\" href=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["link"], "url", [], "any", false, false, false, 109), "html", null, true);
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["link"], "title", [], "any", false, false, false, 109), "html", null, true);
                echo "</a></li>
                    ";
            } else {
                // line 111
                echo "                    <li><a href=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["link"], "url", [], "any", false, false, false, 111), "html", null, true);
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["link"], "title", [], "any", false, false, false, 111), "html", null, true);
                echo "</a></li>
                    ";
            }
            // line 113
            echo "                    ";
            $context["idHeader"] = (($context["idHeader"] ?? null) + 1);
            // line 114
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " 
        </ul>
        <ul class=\"social\">
            <li>
                <a href=\"";
        // line 118
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["obj"] ?? null), "general", [], "any", false, false, false, 118), "header", [], "any", false, false, false, 118), "facebook", [], "any", false, false, false, 118), "html", null, true);
        echo "\" target=\"_blank\">
                    <svg viewBox=\"0 0 22.94 22.86\">
                        <path class=\"st0\" d=\"M11.46,0C5.15,0-0.01,5.15-0.01,11.5c0,5.74,4.2,10.5,9.69,11.36v-8.03H6.76V11.5h2.92V8.96
                            c0-2.88,1.71-4.46,4.34-4.46c1.25,0,2.56,0.22,2.56,0.22v2.83h-1.45c-1.42,0-1.87,0.88-1.87,1.79v2.16h3.19l-0.52,3.33h-2.67v8.03
                            c5.59-0.88,9.7-5.71,9.69-11.36C22.94,5.15,17.78,0,11.46,0z\"/>
                    </svg>
                </a>
            </li>
            <li>
                <a href=\"";
        // line 127
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["obj"] ?? null), "general", [], "any", false, false, false, 127), "header", [], "any", false, false, false, 127), "x", [], "any", false, false, false, 127), "html", null, true);
        echo "\" target=\"_blank\">
                    <svg viewBox=\"0 0 22.94 22.86\" >
                        <g>
                            <path class=\"st0\" d=\"M11.47-0.03C5.14-0.03,0.01,5.1,0.01,11.43s5.13,11.46,11.46,11.46s11.46-5.13,11.46-11.46
                                S17.8-0.03,11.47-0.03z M14.34,18.07l-3.9-5.21l-4.83,5.21H4.38l5.51-5.95L4.41,4.79h4.22l3.59,4.8l4.44-4.8h1.24l-5.13,5.54
                                l5.79,7.74H14.34z\"/>
                        </g>
                    </svg>
                </a>
            </li>
            <li>
                <a href=\"";
        // line 138
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["obj"] ?? null), "general", [], "any", false, false, false, 138), "header", [], "any", false, false, false, 138), "linkedin", [], "any", false, false, false, 138), "html", null, true);
        echo "\" target=\"_blank\">
                    <svg viewBox=\"0 0 22.94 22.86\">
                        <path class=\"st0\" d=\"M11.47,0C5.16,0,0.04,5.12,0.04,11.43c0,6.31,5.12,11.43,11.43,11.43c6.31,0,11.43-5.12,11.43-11.43
                            C22.9,5.12,17.78,0,11.47,0z M7.9,17.86H5.04v-10H7.9V17.86z M6.47,7.15c-0.79,0-1.43-0.64-1.43-1.43c0-0.79,0.64-1.43,1.43-1.43
                            c0.79,0,1.43,0.64,1.43,1.43C7.9,6.51,7.26,7.15,6.47,7.15z M17.9,17.86h-2.86v-5.71c0-0.94-0.52-1.43-1.43-1.43
                            c-0.93,0-1.43,0.5-1.43,1.43v5.71H9.33v-10h2.86v1.43c0.16-0.7,0.51-1.43,2.5-1.43c2.84,0,3.21,2.14,3.21,5V17.86z\"/>
                    </svg>
                </a>
            </li>
            <li>
                <a href=\"";
        // line 148
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["obj"] ?? null), "general", [], "any", false, false, false, 148), "header", [], "any", false, false, false, 148), "instagram", [], "any", false, false, false, 148), "html", null, true);
        echo "\" target=\"_blank\">
                    <svg viewBox=\"0 0 22.94 22.86\">
                        <g transform=\"translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)\">
                            <path class=\"st0\" d=\"M5.03,2.36c0-0.13-0.11-0.24-0.24-0.24S4.56,2.23,4.56,2.36s0.11,0.24,0.24,0.24
                                C4.92,2.59,5.03,2.49,5.03,2.36z\"/>
                            <path class=\"st0\" d=\"M3.58,2.49c-0.6,0-1.08,0.48-1.08,1.08c0,0.15,0.03,0.29,0.08,0.42c0.05,0.13,0.13,0.25,0.23,0.34
                                c0.2,0.2,0.47,0.32,0.76,0.32s0.57-0.12,0.76-0.32c0.1-0.1,0.18-0.21,0.23-0.34c0.05-0.13,0.08-0.27,0.08-0.42
                                C4.66,2.97,4.18,2.49,3.58,2.49z\"/>
                            <path class=\"st0\" d=\"M3.58-0.51c-2.25,0-4.08,1.83-4.08,4.08s1.83,4.08,4.08,4.08s4.08-1.83,4.08-4.08S5.83-0.51,3.58-0.51z
                                    M5.85,4.5c0,0.74-0.6,1.34-1.34,1.34H2.65c-0.74,0-1.34-0.6-1.34-1.34V2.64c0-0.28,0.08-0.53,0.23-0.75
                                C1.79,1.54,2.19,1.3,2.65,1.3h1.86c0.46,0,0.87,0.23,1.11,0.59c0.14,0.21,0.23,0.47,0.23,0.75V4.5z\"/>
                        </g>
                    </svg>
                </a>
            </li>
        </ul>
    </div>
";
    }

    public function getTemplateName()
    {
        return "header/header.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  276 => 148,  263 => 138,  249 => 127,  237 => 118,  226 => 114,  223 => 113,  215 => 111,  207 => 109,  204 => 108,  199 => 107,  197 => 106,  177 => 88,  171 => 87,  168 => 86,  160 => 84,  152 => 82,  149 => 81,  144 => 80,  142 => 79,  118 => 58,  105 => 48,  91 => 37,  79 => 28,  71 => 23,  58 => 13,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block header %}
    <header class='headerPage'>
        <div class=\"logo\">
            <img src=\"./media/LogoStadHeader.svg\" width=\"300\" height=\"102\" alt=\"Logo Stad\">
        </div>
        <div class='top'>
            <div class='info'>
                <address>
                    <svg viewBox=\"0 0 15.18 21.68\">
                        <path class=\"st0\" d=\"M7.59,10.3c-1.5,0-2.71-1.21-2.71-2.71s1.21-2.71,2.71-2.71c1.5,0,2.71,1.21,2.71,2.71S9.09,10.3,7.59,10.3
                            M7.59,0C3.4,0,0,3.4,0,7.59c0,5.69,7.59,14.09,7.59,14.09s7.59-8.4,7.59-14.09C15.18,3.4,11.78,0,7.59,0\"/>
                    </svg>
                    <p>{{obj.general.header.localisation}}</p>
                    <div class=\"border\">
                    </div>
                    <svg viewBox=\"0 0 19.51 19.51\">
                        <path d=\"M13.01,9.76h2.17c0-2.99-2.43-5.42-5.42-5.42V6.5C11.55,6.5,13.01,7.96,13.01,9.76 M17.35,9.76h2.17
                            C19.51,4.34,15.14,0,9.76,0v2.17C13.94,2.17,17.35,5.56,17.35,9.76 M18.43,13.55c-1.36,0-2.66-0.22-3.87-0.62
                            c-0.38-0.12-0.8-0.03-1.11,0.27l-2.38,2.38C8,14.03,5.49,11.51,3.92,8.44l2.39-2.38c0.3-0.3,0.39-0.73,0.27-1.11
                            c-0.4-1.21-0.62-2.52-0.62-3.87C5.96,0.48,5.48,0,4.88,0H1.08C0.49,0,0,0.48,0,1.08c0,10.18,8.25,18.43,18.43,18.43
                            c0.6,0,1.08-0.49,1.08-1.08v-3.79C19.51,14.04,19.03,13.55,18.43,13.55\"/>
                    </svg>
                    <p>{{obj.general.header.phone}}
                </address>
                <div class=\"socialNetworks\">
                    <ul>
                        <li>
                            <a href=\"{{obj.general.header.facebook}}\" target=\"_blank\">
                                <svg viewBox=\"0 0 22.94 22.86\">
                                    <path class=\"st0\" d=\"M11.46,0C5.15,0-0.01,5.15-0.01,11.5c0,5.74,4.2,10.5,9.69,11.36v-8.03H6.76V11.5h2.92V8.96
                                        c0-2.88,1.71-4.46,4.34-4.46c1.25,0,2.56,0.22,2.56,0.22v2.83h-1.45c-1.42,0-1.87,0.88-1.87,1.79v2.16h3.19l-0.52,3.33h-2.67v8.03
                                        c5.59-0.88,9.7-5.71,9.69-11.36C22.94,5.15,17.78,0,11.46,0z\"/>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href=\"{{obj.general.header.x}}\" target=\"_blank\">
                                <svg viewBox=\"0 0 22.94 22.86\" >
                                    <g>
                                        <path class=\"st0\" d=\"M11.47-0.03C5.14-0.03,0.01,5.1,0.01,11.43s5.13,11.46,11.46,11.46s11.46-5.13,11.46-11.46
                                            S17.8-0.03,11.47-0.03z M14.34,18.07l-3.9-5.21l-4.83,5.21H4.38l5.51-5.95L4.41,4.79h4.22l3.59,4.8l4.44-4.8h1.24l-5.13,5.54
                                            l5.79,7.74H14.34z\"/>
                                    </g>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href=\"{{obj.general.header.linkedin}}\" target=\"_blank\">
                                <svg viewBox=\"0 0 22.94 22.86\">
                                    <path class=\"st0\" d=\"M11.47,0C5.16,0,0.04,5.12,0.04,11.43c0,6.31,5.12,11.43,11.43,11.43c6.31,0,11.43-5.12,11.43-11.43
                                        C22.9,5.12,17.78,0,11.47,0z M7.9,17.86H5.04v-10H7.9V17.86z M6.47,7.15c-0.79,0-1.43-0.64-1.43-1.43c0-0.79,0.64-1.43,1.43-1.43
                                        c0.79,0,1.43,0.64,1.43,1.43C7.9,6.51,7.26,7.15,6.47,7.15z M17.9,17.86h-2.86v-5.71c0-0.94-0.52-1.43-1.43-1.43
                                        c-0.93,0-1.43,0.5-1.43,1.43v5.71H9.33v-10h2.86v1.43c0.16-0.7,0.51-1.43,2.5-1.43c2.84,0,3.21,2.14,3.21,5V17.86z\"/>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href=\"{{obj.general.header.instagram}}\" target=\"_blank\">
                                <svg viewBox=\"0 0 22.94 22.86\">
                                    <g transform=\"translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)\">
                                        <path class=\"st0\" d=\"M5.03,2.36c0-0.13-0.11-0.24-0.24-0.24S4.56,2.23,4.56,2.36s0.11,0.24,0.24,0.24
                                            C4.92,2.59,5.03,2.49,5.03,2.36z\"/>
                                        <path class=\"st0\" d=\"M3.58,2.49c-0.6,0-1.08,0.48-1.08,1.08c0,0.15,0.03,0.29,0.08,0.42c0.05,0.13,0.13,0.25,0.23,0.34
                                            c0.2,0.2,0.47,0.32,0.76,0.32s0.57-0.12,0.76-0.32c0.1-0.1,0.18-0.21,0.23-0.34c0.05-0.13,0.08-0.27,0.08-0.42
                                            C4.66,2.97,4.18,2.49,3.58,2.49z\"/>
                                        <path class=\"st0\" d=\"M3.58-0.51c-2.25,0-4.08,1.83-4.08,4.08s1.83,4.08,4.08,4.08s4.08-1.83,4.08-4.08S5.83-0.51,3.58-0.51z
                                            M5.85,4.5c0,0.74-0.6,1.34-1.34,1.34H2.65c-0.74,0-1.34-0.6-1.34-1.34V2.64c0-0.28,0.08-0.53,0.23-0.75
                                            C1.79,1.54,2.19,1.3,2.65,1.3h1.86c0.46,0,0.87,0.23,1.11,0.59c0.14,0.21,0.23,0.47,0.23,0.75V4.5z\"/>
                                    </g>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class=\"nav\">
            <ul>
                {% set idHeader = 0 %}
                {% for link in obj.page %}
                    {% if idHeader == id %}
                    <li><a class=\"selected\" href={{link.url}}>{{link.title}}</a></li>
                    {% else %}
                    <li><a href={{link.url}}>{{link.title}}</a></li>
                    {% endif %}
                    {% set idHeader = idHeader + 1 %}
                {% endfor %}
            </ul>            
        </div>
        <div class=\"responsive\">
            <div class=\"burger\">
                <svg viewBox=\"0 0 35.19 23.46\" >
                    <path class=\"st0\" d=\"M0,0h35.19v3.91H0V0 M0,9.77h35.19v3.91H0V9.77 M0,19.55h35.19v3.91H0V19.55z\"/>
                </svg>
            </div>
            <div class=\"cross displayNone\">
                <svg viewBox=\"0 0 24 24\">
                    <path d=\"M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z\" />
                </svg>
            </div>
        </div>
        
    </header>
    <div class=\"menuResponsive\">
        <ul class=\"navigation\">
            {% set idHeader = 0 %}
                {% for link in obj.page %}
                    {% if idHeader == id %}
                    <li><a class=\"selected\" href={{link.url}}>{{link.title}}</a></li>
                    {% else %}
                    <li><a href={{link.url}}>{{link.title}}</a></li>
                    {% endif %}
                    {% set idHeader = idHeader + 1 %}
                {% endfor %} 
        </ul>
        <ul class=\"social\">
            <li>
                <a href=\"{{obj.general.header.facebook}}\" target=\"_blank\">
                    <svg viewBox=\"0 0 22.94 22.86\">
                        <path class=\"st0\" d=\"M11.46,0C5.15,0-0.01,5.15-0.01,11.5c0,5.74,4.2,10.5,9.69,11.36v-8.03H6.76V11.5h2.92V8.96
                            c0-2.88,1.71-4.46,4.34-4.46c1.25,0,2.56,0.22,2.56,0.22v2.83h-1.45c-1.42,0-1.87,0.88-1.87,1.79v2.16h3.19l-0.52,3.33h-2.67v8.03
                            c5.59-0.88,9.7-5.71,9.69-11.36C22.94,5.15,17.78,0,11.46,0z\"/>
                    </svg>
                </a>
            </li>
            <li>
                <a href=\"{{obj.general.header.x}}\" target=\"_blank\">
                    <svg viewBox=\"0 0 22.94 22.86\" >
                        <g>
                            <path class=\"st0\" d=\"M11.47-0.03C5.14-0.03,0.01,5.1,0.01,11.43s5.13,11.46,11.46,11.46s11.46-5.13,11.46-11.46
                                S17.8-0.03,11.47-0.03z M14.34,18.07l-3.9-5.21l-4.83,5.21H4.38l5.51-5.95L4.41,4.79h4.22l3.59,4.8l4.44-4.8h1.24l-5.13,5.54
                                l5.79,7.74H14.34z\"/>
                        </g>
                    </svg>
                </a>
            </li>
            <li>
                <a href=\"{{obj.general.header.linkedin}}\" target=\"_blank\">
                    <svg viewBox=\"0 0 22.94 22.86\">
                        <path class=\"st0\" d=\"M11.47,0C5.16,0,0.04,5.12,0.04,11.43c0,6.31,5.12,11.43,11.43,11.43c6.31,0,11.43-5.12,11.43-11.43
                            C22.9,5.12,17.78,0,11.47,0z M7.9,17.86H5.04v-10H7.9V17.86z M6.47,7.15c-0.79,0-1.43-0.64-1.43-1.43c0-0.79,0.64-1.43,1.43-1.43
                            c0.79,0,1.43,0.64,1.43,1.43C7.9,6.51,7.26,7.15,6.47,7.15z M17.9,17.86h-2.86v-5.71c0-0.94-0.52-1.43-1.43-1.43
                            c-0.93,0-1.43,0.5-1.43,1.43v5.71H9.33v-10h2.86v1.43c0.16-0.7,0.51-1.43,2.5-1.43c2.84,0,3.21,2.14,3.21,5V17.86z\"/>
                    </svg>
                </a>
            </li>
            <li>
                <a href=\"{{obj.general.header.instagram}}\" target=\"_blank\">
                    <svg viewBox=\"0 0 22.94 22.86\">
                        <g transform=\"translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)\">
                            <path class=\"st0\" d=\"M5.03,2.36c0-0.13-0.11-0.24-0.24-0.24S4.56,2.23,4.56,2.36s0.11,0.24,0.24,0.24
                                C4.92,2.59,5.03,2.49,5.03,2.36z\"/>
                            <path class=\"st0\" d=\"M3.58,2.49c-0.6,0-1.08,0.48-1.08,1.08c0,0.15,0.03,0.29,0.08,0.42c0.05,0.13,0.13,0.25,0.23,0.34
                                c0.2,0.2,0.47,0.32,0.76,0.32s0.57-0.12,0.76-0.32c0.1-0.1,0.18-0.21,0.23-0.34c0.05-0.13,0.08-0.27,0.08-0.42
                                C4.66,2.97,4.18,2.49,3.58,2.49z\"/>
                            <path class=\"st0\" d=\"M3.58-0.51c-2.25,0-4.08,1.83-4.08,4.08s1.83,4.08,4.08,4.08s4.08-1.83,4.08-4.08S5.83-0.51,3.58-0.51z
                                    M5.85,4.5c0,0.74-0.6,1.34-1.34,1.34H2.65c-0.74,0-1.34-0.6-1.34-1.34V2.64c0-0.28,0.08-0.53,0.23-0.75
                                C1.79,1.54,2.19,1.3,2.65,1.3h1.86c0.46,0,0.87,0.23,1.11,0.59c0.14,0.21,0.23,0.47,0.23,0.75V4.5z\"/>
                        </g>
                    </svg>
                </a>
            </li>
        </ul>
    </div>
{% endblock header %}", "header/header.html.twig", "C:\\xampp\\htdocs\\SiteSTAD\\app\\templates\\header\\header.html.twig");
    }
}
