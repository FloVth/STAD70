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

/* base.html.twig */
class __TwigTemplate_66d574a4614050f373c43d7987993bae extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'CSS' => [$this, 'block_CSS'],
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
            'mentionsLegales' => [$this, 'block_mentionsLegales'],
            'footer' => [$this, 'block_footer'],
            'footerMenu' => [$this, 'block_footerMenu'],
            'script' => [$this, 'block_script'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        ";
        // line 4
        $context["pathCss"] = "style";
        // line 5
        echo "        ";
        $context["pathIcon"] = "media";
        // line 6
        echo "        ";
        $this->displayBlock('head', $context, $blocks);
        // line 45
        echo "        ";
        $this->displayBlock('CSS', $context, $blocks);
        // line 65
        echo "    </head>
    <body>
        ";
        // line 67
        $this->displayBlock('header', $context, $blocks);
        // line 70
        echo "        ";
        if ((($context["id"] ?? null) != 4)) {
            // line 71
            echo "            <div id='background'>
                <div id=\"background-image\" style=\"background-image: url(";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["obj"] ?? null), "page", [], "any", false, false, false, 72)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[($context["id"] ?? null)] ?? null) : null), "content", [], "any", false, false, false, 72)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null), "img", [], "any", false, false, false, 72), "url", [], "any", false, false, false, 72), "html", null, true);
            echo ")\"></div>
            </div>
            ";
            // line 74
            $this->loadTemplate("container/components/textLanding.html.twig", "base.html.twig", 74)->display($context);
            // line 75
            echo "            ";
            $this->displayBlock('body', $context, $blocks);
            // line 78
            echo "        ";
        } else {
            // line 79
            echo "            <div id='backgroundMentions'>
                <div id='background-image-mentions'></div>
            </div>
            ";
            // line 82
            $this->displayBlock('mentionsLegales', $context, $blocks);
            // line 85
            echo "        ";
        }
        // line 86
        echo "        ";
        $this->displayBlock('footer', $context, $blocks);
        // line 92
        echo "        ";
        $this->displayBlock('script', $context, $blocks);
        // line 107
        echo "    </body>
</html>";
    }

    // line 6
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
            <meta charset=\"UTF-8\">
            <meta name=\"copyright\" content=\"Activ'Communication\">
            <meta name=\"author\" content=\"Activ'Communication, contact@activcom.net\">
            <meta name=\"language\" content=\"FR\">
            <meta name=\"owner\" content=\"STAD\">
            <meta name=\"robots\" content=\"index, follow\">
            <meta name=\"url\" content=\"https://STAD70.com\">
            <meta name=\"identifier-URL\" content=\"https://STAD70.com\">
            <meta name=\"description\" content=\"STAD70 - Votre partenaire en peinture et décoration depuis 1997 en Haute-Saône. Depuis 1997, STAD70 s'est imposée comme une référence incontournable dans le domaine de la peinture et de la décoration en Haute-Saône. Forte de plus de deux décennies d'expérience, notre entreprise a su allier expertise, créativité et passion pour offrir à ses clients des solutions de décoration exceptionnelles, qu'il s'agisse de projets résidentiels ou commerciaux.\">
            <meta property=\"og:site_name\" content=\"STAD\">
            <meta property=\"og:title\" content=\"STAD\">
            <meta property=\"og:description\" content=\"STAD70 - Votre partenaire en peinture et décoration depuis 1997 en Haute-Saône. Depuis 1997, STAD70 s'est imposée comme une référence incontournable dans le domaine de la peinture et de la décoration en Haute-Saône. Forte de plus de deux décennies d'expérience, notre entreprise a su allier expertise, créativité et passion pour offrir à ses clients des solutions de décoration exceptionnelles, qu'il s'agisse de projets résidentiels ou commerciaux.\">
            <meta property=\"og:url\" content=\"https://STAD70.com\">
            <meta property=\"og:image\" content=\"";
        // line 21
        echo twig_escape_filter($this->env, ($context["domain"] ?? null), "html", null, true);
        echo "/media/stad-og.jpg\"> 
            <meta property=\"og:image:type\" content=\".jpg\">
            <meta property=\"og:image:width\" content=\"2502\">
            <meta property=\"og:image:height\" content=\"1125\">
            <meta property=\"og:site_name\" content=\"STAD\">
            <meta property=\"og:locale\" content=\"fr_FR\">
            <meta property=\"og:phone_number\" content=\"06 80 30 60 45\">
            <meta property=\"og:latitude\" content=\"47.63685\">
            <meta property=\"og:longitude\" content=\"6.101861\">
            <meta property=\"og:postal-code\" content=\"70000\">
            <meta property=\"og:locality\" content=\"Vaivre et Montoille\">
            <meta property=\"og:street-address\" content=\"5 Impasse du Crotos\">
            <meta property=\"og:region\" content=\"Haute Saône\">
            <meta property=\"og:country-name\" content=\"FRANCE\">
            <meta name=\"twitter:card\" content=\"summary_large_image\">
            <meta property=\"twitter:domain\" content=\"https://STAD70.com\">
            <link rel=\"icon\" type=\"image/x-icon\" href=\"../media/logoStadOnglet.svg\">
            <link rel=\"stylesheet\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, ($context["pathCss"] ?? null), "html", null, true);
        echo "/general/base.css\">
            <link rel=\"stylesheet\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, ($context["pathCss"] ?? null), "html", null, true);
        echo "/reset.css\">
            <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
            <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
            <link href=\"https://fonts.googleapis.com/css2?family=Merriweather+Sans&family=Barlow+Condensed:wght@700&family=Oswald:wght@200;400;500&family=Roboto:wght@100;300;400;700&display=swap\" rel=\"stylesheet\">
            <title>STAD | ";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_2 = twig_get_attribute($this->env, $this->source, ($context["obj"] ?? null), "page", [], "any", false, false, false, 43)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[($context["id"] ?? null)] ?? null) : null), "title", [], "any", false, false, false, 43), "html", null, true);
        echo "</title>
        ";
    }

    // line 45
    public function block_CSS($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 46
        echo "            ";
        if ((($context["id"] ?? null) == 4)) {
            // line 47
            echo "                <link rel=\"stylesheet\" href='";
            echo twig_escape_filter($this->env, ($context["pathCss"] ?? null), "html", null, true);
            echo "/page/mentionsLegales.css'>
            ";
        }
        // line 49
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (($__internal_compile_3 = twig_get_attribute($this->env, $this->source, ($context["obj"] ?? null), "page", [], "any", false, false, false, 49)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[($context["id"] ?? null)] ?? null) : null), "content", [], "any", false, false, false, 49));
        foreach ($context['_seq'] as $context["_key"] => $context["component"]) {
            // line 50
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, $context["component"], "type", [], "any", false, false, false, 50) == "slider")) {
                // line 51
                echo "                    <link rel='stylesheet' href='";
                echo twig_escape_filter($this->env, ($context["pathCss"] ?? null), "html", null, true);
                echo "/page/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["component"], "type", [], "any", false, false, false, 51), "html", null, true);
                echo ".css' >
                    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css\">
                ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 53
$context["component"], "type", [], "any", false, false, false, 53) == "twoContentsMap")) {
                // line 54
                echo "                    <link rel='stylesheet' href='";
                echo twig_escape_filter($this->env, ($context["pathCss"] ?? null), "html", null, true);
                echo "/page/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["component"], "type", [], "any", false, false, false, 54), "html", null, true);
                echo ".css' >
                    <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.3.1/dist/leaflet.css\" integrity=\"sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ==\" crossorigin=\"\" >
                ";
            } else {
                // line 57
                echo "                    <link rel='stylesheet' href='";
                echo twig_escape_filter($this->env, ($context["pathCss"] ?? null), "html", null, true);
                echo "/page/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["component"], "type", [], "any", false, false, false, 57), "html", null, true);
                echo ".css' >
                ";
            }
            // line 59
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['component'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, ($context["pathCss"] ?? null), "html", null, true);
        echo "/general/contain.css\">
            <link rel=\"stylesheet\" href=\"";
        // line 61
        echo twig_escape_filter($this->env, ($context["pathCss"] ?? null), "html", null, true);
        echo "/general/footer.css\">
            <link rel=\"stylesheet\" href=\"";
        // line 62
        echo twig_escape_filter($this->env, ($context["pathCss"] ?? null), "html", null, true);
        echo "/general/header.css\">
            <link rel=\"stylesheet\" href=\"";
        // line 63
        echo twig_escape_filter($this->env, ($context["pathCss"] ?? null), "html", null, true);
        echo "/general/footerMenu.css\">
        ";
    }

    // line 67
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 68
        echo "            ";
        $this->loadTemplate("header/header.html.twig", "base.html.twig", 68)->display($context);
        // line 69
        echo "        ";
    }

    // line 75
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 76
        echo "                ";
        $this->loadTemplate("container/contain.html.twig", "base.html.twig", 76)->display($context);
        // line 77
        echo "            ";
    }

    // line 82
    public function block_mentionsLegales($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 83
        echo "                ";
        $this->loadTemplate("container/components/mentionsLegales.html.twig", "base.html.twig", 83)->display($context);
        // line 84
        echo "            ";
    }

    // line 86
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 87
        echo "            ";
        $this->displayBlock('footerMenu', $context, $blocks);
        // line 90
        echo "            ";
        $this->loadTemplate("footer/footer.html.twig", "base.html.twig", 90)->display($context);
        // line 91
        echo "        ";
    }

    // line 87
    public function block_footerMenu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 88
        echo "                ";
        $this->loadTemplate("footer/footerMenu.html.twig", "base.html.twig", 88)->display($context);
        // line 89
        echo "            ";
    }

    // line 92
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 93
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (($__internal_compile_4 = twig_get_attribute($this->env, $this->source, ($context["obj"] ?? null), "page", [], "any", false, false, false, 93)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[($context["id"] ?? null)] ?? null) : null), "content", [], "any", false, false, false, 93));
        foreach ($context['_seq'] as $context["_key"] => $context["component"]) {
            // line 94
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["component"], "type", [], "any", false, false, false, 94) == "slider")) {
                // line 95
                echo "                        <script src=\"script/swiper-bundle.js\"></script>
                        <script src=\"script/slider.js\"></script>
                    ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 97
$context["component"], "type", [], "any", false, false, false, 97) == "form")) {
                // line 98
                echo "                        <script src=\"/script/validate.js\"></script>
                        <script src=\"/script/form.js\"></script>
                    ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 100
$context["component"], "type", [], "any", false, false, false, 100) == "twoContentsMap")) {
                // line 101
                echo "                        <script src=\"https://unpkg.com/leaflet@1.3.1/dist/leaflet.js\" integrity=\"sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw==\" crossorigin=\"\"></script>
                        <script src=\"/script/map.js\"></script>
                    ";
            }
            // line 104
            echo "                    <script src=\"script/burgerMenu.js\"></script>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['component'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "        ";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  331 => 106,  324 => 104,  319 => 101,  317 => 100,  313 => 98,  311 => 97,  307 => 95,  304 => 94,  299 => 93,  295 => 92,  291 => 89,  288 => 88,  284 => 87,  280 => 91,  277 => 90,  274 => 87,  270 => 86,  266 => 84,  263 => 83,  259 => 82,  255 => 77,  252 => 76,  248 => 75,  244 => 69,  241 => 68,  237 => 67,  231 => 63,  227 => 62,  223 => 61,  218 => 60,  212 => 59,  204 => 57,  195 => 54,  193 => 53,  185 => 51,  182 => 50,  177 => 49,  171 => 47,  168 => 46,  164 => 45,  158 => 43,  151 => 39,  147 => 38,  127 => 21,  111 => 7,  107 => 6,  102 => 107,  99 => 92,  96 => 86,  93 => 85,  91 => 82,  86 => 79,  83 => 78,  80 => 75,  78 => 74,  73 => 72,  70 => 71,  67 => 70,  65 => 67,  61 => 65,  58 => 45,  55 => 6,  52 => 5,  50 => 4,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        {% set pathCss = \"style\" %}
        {% set pathIcon = \"media\" %}
        {% block head %}
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
            <meta charset=\"UTF-8\">
            <meta name=\"copyright\" content=\"Activ'Communication\">
            <meta name=\"author\" content=\"Activ'Communication, contact@activcom.net\">
            <meta name=\"language\" content=\"FR\">
            <meta name=\"owner\" content=\"STAD\">
            <meta name=\"robots\" content=\"index, follow\">
            <meta name=\"url\" content=\"https://STAD70.com\">
            <meta name=\"identifier-URL\" content=\"https://STAD70.com\">
            <meta name=\"description\" content=\"STAD70 - Votre partenaire en peinture et décoration depuis 1997 en Haute-Saône. Depuis 1997, STAD70 s'est imposée comme une référence incontournable dans le domaine de la peinture et de la décoration en Haute-Saône. Forte de plus de deux décennies d'expérience, notre entreprise a su allier expertise, créativité et passion pour offrir à ses clients des solutions de décoration exceptionnelles, qu'il s'agisse de projets résidentiels ou commerciaux.\">
            <meta property=\"og:site_name\" content=\"STAD\">
            <meta property=\"og:title\" content=\"STAD\">
            <meta property=\"og:description\" content=\"STAD70 - Votre partenaire en peinture et décoration depuis 1997 en Haute-Saône. Depuis 1997, STAD70 s'est imposée comme une référence incontournable dans le domaine de la peinture et de la décoration en Haute-Saône. Forte de plus de deux décennies d'expérience, notre entreprise a su allier expertise, créativité et passion pour offrir à ses clients des solutions de décoration exceptionnelles, qu'il s'agisse de projets résidentiels ou commerciaux.\">
            <meta property=\"og:url\" content=\"https://STAD70.com\">
            <meta property=\"og:image\" content=\"{{domain}}/media/stad-og.jpg\"> 
            <meta property=\"og:image:type\" content=\".jpg\">
            <meta property=\"og:image:width\" content=\"2502\">
            <meta property=\"og:image:height\" content=\"1125\">
            <meta property=\"og:site_name\" content=\"STAD\">
            <meta property=\"og:locale\" content=\"fr_FR\">
            <meta property=\"og:phone_number\" content=\"06 80 30 60 45\">
            <meta property=\"og:latitude\" content=\"47.63685\">
            <meta property=\"og:longitude\" content=\"6.101861\">
            <meta property=\"og:postal-code\" content=\"70000\">
            <meta property=\"og:locality\" content=\"Vaivre et Montoille\">
            <meta property=\"og:street-address\" content=\"5 Impasse du Crotos\">
            <meta property=\"og:region\" content=\"Haute Saône\">
            <meta property=\"og:country-name\" content=\"FRANCE\">
            <meta name=\"twitter:card\" content=\"summary_large_image\">
            <meta property=\"twitter:domain\" content=\"https://STAD70.com\">
            <link rel=\"icon\" type=\"image/x-icon\" href=\"../media/logoStadOnglet.svg\">
            <link rel=\"stylesheet\" href=\"{{pathCss}}/general/base.css\">
            <link rel=\"stylesheet\" href=\"{{pathCss}}/reset.css\">
            <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
            <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
            <link href=\"https://fonts.googleapis.com/css2?family=Merriweather+Sans&family=Barlow+Condensed:wght@700&family=Oswald:wght@200;400;500&family=Roboto:wght@100;300;400;700&display=swap\" rel=\"stylesheet\">
            <title>STAD | {{obj.page[id].title}}</title>
        {% endblock %}
        {% block CSS %}
            {% if id == 4 %}
                <link rel=\"stylesheet\" href='{{pathCss}}/page/mentionsLegales.css'>
            {% endif %}
            {% for component in obj.page[id].content %}
                {% if component.type == \"slider\" %}
                    <link rel='stylesheet' href='{{pathCss}}/page/{{component.type}}.css' >
                    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css\">
                {% elseif component.type == \"twoContentsMap\" %}
                    <link rel='stylesheet' href='{{pathCss}}/page/{{component.type}}.css' >
                    <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.3.1/dist/leaflet.css\" integrity=\"sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ==\" crossorigin=\"\" >
                {% else %}
                    <link rel='stylesheet' href='{{pathCss}}/page/{{component.type}}.css' >
                {% endif %}
            {% endfor %}
            <link rel=\"stylesheet\" href=\"{{pathCss}}/general/contain.css\">
            <link rel=\"stylesheet\" href=\"{{pathCss}}/general/footer.css\">
            <link rel=\"stylesheet\" href=\"{{pathCss}}/general/header.css\">
            <link rel=\"stylesheet\" href=\"{{pathCss}}/general/footerMenu.css\">
        {% endblock CSS %}
    </head>
    <body>
        {% block header %}
            {% include 'header/header.html.twig' %}
        {% endblock %}
        {% if id!=4 %}
            <div id='background'>
                <div id=\"background-image\" style=\"background-image: url({{obj.page[id].content[0].img.url}})\"></div>
            </div>
            {% include 'container/components/textLanding.html.twig' %}
            {% block body %}
                {% include 'container/contain.html.twig' %}
            {% endblock %}
        {% else %}
            <div id='backgroundMentions'>
                <div id='background-image-mentions'></div>
            </div>
            {% block mentionsLegales %}
                {% include 'container/components/mentionsLegales.html.twig' %}
            {% endblock %}
        {% endif %}
        {% block footer %}
            {% block footerMenu %}
                {% include 'footer/footerMenu.html.twig' %}
            {% endblock %}
            {% include 'footer/footer.html.twig' %}
        {% endblock %}
        {% block script %}
            {% for component in obj.page[id].content %}
                    {% if component.type == \"slider\" %}
                        <script src=\"script/swiper-bundle.js\"></script>
                        <script src=\"script/slider.js\"></script>
                    {% elseif component.type == \"form\" %}
                        <script src=\"/script/validate.js\"></script>
                        <script src=\"/script/form.js\"></script>
                    {% elseif component.type == \"twoContentsMap\" %}
                        <script src=\"https://unpkg.com/leaflet@1.3.1/dist/leaflet.js\" integrity=\"sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw==\" crossorigin=\"\"></script>
                        <script src=\"/script/map.js\"></script>
                    {% endif %}
                    <script src=\"script/burgerMenu.js\"></script>
                {% endfor %}
        {% endblock %}
    </body>
</html>", "base.html.twig", "C:\\xampp\\htdocs\\SiteSTAD\\app\\templates\\base.html.twig");
    }
}
