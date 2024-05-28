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

/* container/components/contact.html.twig */
class __TwigTemplate_a4078c4a6fe39000335cb88a0bef9c08 extends Template
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
        echo "<div class=\"formulaire\" id=\"contact\" >
    <header>envoyez nous un message</header>
    <div class=\"contain\">
        <form method=\"post\">
            <div class=\"labels\">
                <div class=\"rightContent\">
                    <p>informations :</p>
                    <div class=\"text has-gradient\">
                        <input type=\"text\" id=\"prenom\" name=\"prenom\" placeholder=\"Prenom\">
                        ";
        // line 13
        echo "                        <div class=\"icon\">
                            <svg viewBox=\"0 0 24.39 14.63\">
                                <g>
                                    <circle class=\"st0\" cx=\"7.32\" cy=\"3.66\" r=\"3.66\"/>
                                    <path class=\"st0\" d=\"M14.63,14.63H0v-1.22c0-2.44,4.88-3.77,7.32-3.77s7.32,1.33,7.32,3.77V14.63z\"/>
                                    <rect x=\"14.63\" y=\"4.88\" class=\"st0\" width=\"8.54\" height=\"1.22\"/>
                                    <path class=\"st0\" d=\"M23.87,14.63h-2.96v-0.15h0.15c0.24,0,0.41-0.03,0.51-0.08c0.1-0.06,0.17-0.13,0.21-0.23
                                        c0.04-0.1,0.05-0.32,0.05-0.68v-2.91c0-0.26-0.01-0.42-0.04-0.49s-0.07-0.12-0.14-0.17c-0.07-0.05-0.15-0.07-0.23-0.07
                                        c-0.14,0-0.31,0.04-0.51,0.13l-0.08-0.15l2.07-0.94h0.14v4.6c0,0.35,0.01,0.57,0.05,0.66c0.03,0.1,0.09,0.17,0.19,0.23
                                        c0.1,0.06,0.25,0.09,0.46,0.09h0.13V14.63z\"/>
                                    <polygon class=\"st0\" points=\"24.39,3.66 23.78,3.66 14.63,3.66 14.63,2.44 24.39,2.44 \t\"/>
                                    <rect x=\"14.63\" class=\"st0\" width=\"9.75\" height=\"1.22\"/>
                                </g>
                            </svg>
                        </div>
                    </div>
                    <div class=\"text has-gradient\">
                        <input type=\"text\" id=\"nom\" name=\"nom\" placeholder=\"Nom\">
                        ";
        // line 34
        echo "                        <div class=\"icon\">
                            <svg viewBox=\"0 0 24.39 14.63\">
                                <g>
                                    <circle class=\"st0\" cx=\"7.32\" cy=\"3.66\" r=\"3.66\"/>
                                    <path class=\"st0\" d=\"M14.63,14.63H0v-1.22c0-2.44,4.88-3.77,7.32-3.77s7.32,1.33,7.32,3.77V14.63z\"/>
                                    <rect x=\"14.63\" y=\"4.88\" class=\"st0\" width=\"8.54\" height=\"1.22\"/>
                                    <path class=\"st0\" d=\"M23.79,14.63h-3.31v-0.09c1.01-1.21,1.63-2.02,1.85-2.44c0.22-0.42,0.33-0.82,0.33-1.22
                                        c0-0.29-0.09-0.53-0.27-0.72c-0.18-0.19-0.4-0.29-0.66-0.29c-0.43,0-0.76,0.21-0.99,0.64l-0.15-0.05c0.15-0.53,0.38-0.92,0.68-1.18
                                        c0.3-0.25,0.65-0.38,1.05-0.38c0.28,0,0.55,0.07,0.78,0.2c0.24,0.13,0.42,0.31,0.55,0.55c0.13,0.23,0.2,0.45,0.2,0.65
                                        c0,0.37-0.1,0.74-0.31,1.12c-0.28,0.51-0.89,1.23-1.83,2.14h1.21c0.3,0,0.49-0.01,0.58-0.04c0.09-0.03,0.16-0.07,0.22-0.13
                                        c0.06-0.06,0.13-0.18,0.23-0.38h0.15L23.79,14.63z\"/>
                                    <polygon class=\"st0\" points=\"24.39,3.66 23.78,3.66 14.63,3.66 14.63,2.44 24.39,2.44 \t\"/>
                                    <rect x=\"14.63\" class=\"st0\" width=\"9.75\" height=\"1.22\"/>
                                </g>
                            </svg>
                        </div>
                    </div>
                    <div class=\"text has-gradient\">
                        <input type=\"text\" id=\"societe\" name=\"societe\" placeholder=\"Société ( facultatif )\">
                        ";
        // line 56
        echo "                        <div class=\"icon societe\">
                            <svg viewBox=\"0 0 22.63 21.5\">
                                <path class=\"st0\" d=\"M9.05,0h4.53c1.25,0,2.26,1.01,2.26,2.26v2.26h4.53c1.25,0,2.26,1.01,2.26,2.26v12.45
                                    c0,1.25-1.01,2.26-2.26,2.26H2.26C1.01,21.5,0,20.48,0,19.23V6.79c0-1.26,1.01-2.26,2.26-2.26h4.53V2.26C6.79,1.01,7.8,0,9.05,0
                                    M13.58,4.53V2.26H9.05v2.26H13.58z\"/>
                            </svg>
                        </div>
                    </div>
                    <div class=\"text has-gradient\">
                        <input type=\"text\" id=\"phone\" name=\"phone\" placeholder=\"Numéro de Téléphone\">
                        ";
        // line 69
        echo "                        <div class=\"icon phone\">
                        <svg viewBox=\"0 0 20.87 38.37\">
                            <path class=\"st0\" d=\"M18.15,0.03L2.75,0C1.24,0,0.01,1.22,0.01,2.73l-0.06,32.88c0,1.51,1.22,2.74,2.73,2.74l15.39,0.03
                                c1.51,0,2.74-1.22,2.74-2.73l0.06-32.88C20.88,1.26,19.66,0.03,18.15,0.03z M10.61,36.81l-0.46,0c-0.8,0-1.44-0.65-1.44-1.44
                                c0-0.8,0.65-1.44,1.44-1.44l0.46,0c0.8,0,1.44,0.65,1.44,1.44C12.05,36.17,11.41,36.81,10.61,36.81z M18.55,32.14L2.23,32.11
                                L2.28,3.92L18.6,3.95L18.55,32.14z\"/>
                        </svg>

                        </div>
                    </div>
                    <div class=\"text has-gradient\">
                        <input type=\"text\" id=\"email\" name=\"email\" placeholder=\"E-mail\">
                        ";
        // line 84
        echo "                        <div class=\"icon email\">
                            <svg viewBox=\"0 0 20 20\">
                                <path class=\"st0\" d=\"M10,13c0.81,0,1.5-0.3,2.11-0.89C12.7,11.5,13,10.81,13,10s-0.3-1.5-0.89-2.11C11.5,7.3,10.81,7,10,7
                                        S8.5,7.3,7.89,7.89C7.3,8.5,7,9.19,7,10s0.3,1.5,0.89,2.11C8.5,12.7,9.19,13,10,13 M10,0c2.75,0,5.1,1,7.05,2.95S20,7.25,20,10v1.45
                                        c0,1-0.35,1.85-1,2.55c-0.7,0.67-1.5,1-2.5,1c-1.2,0-2.19-0.5-2.94-1.5c-1,1-2.18,1.5-3.56,1.5c-1.37,0-2.55-0.5-3.54-1.46
                                        C5.5,12.55,5,11.38,5,10c0-1.37,0.5-2.55,1.46-3.54C7.45,5.5,8.63,5,10,5c1.38,0,2.55,0.5,3.54,1.46C14.5,7.45,15,8.63,15,10v1.45
                                        c0,0.41,0.16,0.77,0.46,1.08c0.3,0.31,0.65,0.47,1.04,0.47c0.42,0,0.77-0.16,1.07-0.47c0.3-0.31,0.43-0.67,0.43-1.08V10
                                        c0-2.19-0.77-4.07-2.35-5.65S12.19,2,10,2S5.93,2.77,4.35,4.35S2,7.81,2,10s0.77,4.07,2.35,5.65S7.81,18,10,18h5v2h-5
                                        c-2.75,0-5.1-1-7.05-2.95S0,12.75,0,10s1-5.1,2.95-7.05S7.25,0,10,0z\"/>
                            </svg>                        
                        </div>
                    </div>
                </div>
                <div class=\"leftContent\">
                    <p>sujet du message :</p>
                    <div class=\"sujet gradient\">
                        <input type=\"text\" id=\"sujet\" name=\"sujet\" placeholder=\"Précisez le sujet du message\">
                    </div>
                    <p>message :</p>
                    <div class=\"msg gradient\">
                        <textarea id=\"message\" name=\"message\" cols=\"40\" rows=\"11\"></textarea>
                        <input type=\"hidden\" id=\"msg\" name=\"msg\" >
                    </div>
                </div>
            </div>
            <div class=\"buttons\">
                <div class=\"checkData\">
                    <input type=\"checkbox\" name=\"check\" id=\"check\">
                    <label for=\"check\" >En soumettant ce formulaire, j'accepte que les informations saisies soient exploitées dans le cadre de ma demande et de la relation qui en découlerait.</label>
                </div>
            
                <div class=\"send\">
                    <svg viewBox=\"0 0 30.47 16.5\" >
                        <path class=\"st0\" d=\"M27.93,0h-16.5c-1.4,0-2.54,1.14-2.54,2.54v11.43c0,1.41,1.14,2.54,2.54,2.54h16.5c1.41,0,2.54-1.13,2.54-2.54
                            V2.54C30.47,1.14,29.34,0,27.93,0 M27.93,13.96h-16.5V4.66l8.25,4.23l8.25-4.23V13.96 M19.68,6.74l-8.25-4.2h16.5L19.68,6.74
                            M6.35,13.96c0,0.22,0.04,0.42,0.06,0.63H1.27C0.57,14.6,0,14.03,0,13.33s0.57-1.27,1.27-1.27h5.08V13.96 M3.81,1.9h2.6
                            C6.39,2.12,6.35,2.32,6.35,2.54v1.9H3.81c-0.7,0-1.27-0.57-1.27-1.27S3.11,1.9,3.81,1.9 M1.27,8.25c0-0.7,0.57-1.27,1.27-1.27h3.81
                            v2.54H2.54C1.84,9.52,1.27,8.95,1.27,8.25z\"/>
                    </svg>
                    <p>Envoyer mon message</p>
                </div>
            </div>
            <div class=\"success\">
                <div class=\"backgroundGradient\">
                    <div class=\"icon\">
                        <svg viewBox=\"0 0 24 24\" >

                            <path class=\"st0\" d=\"M13,19c0-0.34,0.04-0.67,0.09-1H4V8l8,5l8-5v5.09c0.72,0.12,1.39,0.37,2,0.72V6c0-1.1-0.9-2-2-2H4
                                C2.9,4,2,4.9,2,6v12c0,1.1,0.9,2,2,2h9.09C13.04,19.67,13,19.34,13,19 M20,6l-8,5L4,6H20\"/>
                            <polyline class=\"st1\" points=\"17.75,22.16 15,19.16 16.16,18 17.75,19.59 21.34,16 22.5,17.41 17.75,22.16 \"/>
                        </svg>
                    </div>
                    <div class=\"text\">
                        <p>Votre message a été envoyé avec succès !</p>
                    </div>
                </div>
            </div>
            <div class=\"notSend\">
                <div class=\"backgroundGradient\">
                    <div class=\"icon\">
                        <svg viewBox=\"0 0 24 24\">
                            <path class=\"st0\" d=\"M13.09,18H4V8l8,5l8-5v5.09c0.72,0.12,1.39,0.37,2,0.72V6c0-1.1-0.9-2-2-2H4C2.9,4,2,4.9,2,6v12
                                c0,1.1,0.9,2,2,2h9.09C13.04,19.67,13,19.34,13,19S13.04,18.33,13.09,18 M20,6l-8,5L4,6H20\"/>
                            <polygon class=\"st1\" points=\"20.41,19 22.54,21.12 21.12,22.54 19,20.41 16.88,22.54 15.47,21.12 17.59,19 15.47,16.88 16.88,15.47 
                                19,17.59 21.12,15.47 22.54,16.88 \"/>
                        </svg>
                    </div>
                    <div class=\"text\">
                        <p>Votre message n'a pas pu être envoyer.</p>
                        <p>Veuillez réessayer plus tard ! </p>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "container/components/contact.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  115 => 84,  101 => 69,  89 => 56,  68 => 34,  48 => 13,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"formulaire\" id=\"contact\" >
    <header>envoyez nous un message</header>
    <div class=\"contain\">
        <form method=\"post\">
            <div class=\"labels\">
                <div class=\"rightContent\">
                    <p>informations :</p>
                    <div class=\"text has-gradient\">
                        <input type=\"text\" id=\"prenom\" name=\"prenom\" placeholder=\"Prenom\">
                        {# <div class=\"border\">
                            <div class=\"borderPink\"></div>
                        </div> #}
                        <div class=\"icon\">
                            <svg viewBox=\"0 0 24.39 14.63\">
                                <g>
                                    <circle class=\"st0\" cx=\"7.32\" cy=\"3.66\" r=\"3.66\"/>
                                    <path class=\"st0\" d=\"M14.63,14.63H0v-1.22c0-2.44,4.88-3.77,7.32-3.77s7.32,1.33,7.32,3.77V14.63z\"/>
                                    <rect x=\"14.63\" y=\"4.88\" class=\"st0\" width=\"8.54\" height=\"1.22\"/>
                                    <path class=\"st0\" d=\"M23.87,14.63h-2.96v-0.15h0.15c0.24,0,0.41-0.03,0.51-0.08c0.1-0.06,0.17-0.13,0.21-0.23
                                        c0.04-0.1,0.05-0.32,0.05-0.68v-2.91c0-0.26-0.01-0.42-0.04-0.49s-0.07-0.12-0.14-0.17c-0.07-0.05-0.15-0.07-0.23-0.07
                                        c-0.14,0-0.31,0.04-0.51,0.13l-0.08-0.15l2.07-0.94h0.14v4.6c0,0.35,0.01,0.57,0.05,0.66c0.03,0.1,0.09,0.17,0.19,0.23
                                        c0.1,0.06,0.25,0.09,0.46,0.09h0.13V14.63z\"/>
                                    <polygon class=\"st0\" points=\"24.39,3.66 23.78,3.66 14.63,3.66 14.63,2.44 24.39,2.44 \t\"/>
                                    <rect x=\"14.63\" class=\"st0\" width=\"9.75\" height=\"1.22\"/>
                                </g>
                            </svg>
                        </div>
                    </div>
                    <div class=\"text has-gradient\">
                        <input type=\"text\" id=\"nom\" name=\"nom\" placeholder=\"Nom\">
                        {# <div class=\"border\">
                            <div class=\"borderPink\"></div>
                        </div> #}
                        <div class=\"icon\">
                            <svg viewBox=\"0 0 24.39 14.63\">
                                <g>
                                    <circle class=\"st0\" cx=\"7.32\" cy=\"3.66\" r=\"3.66\"/>
                                    <path class=\"st0\" d=\"M14.63,14.63H0v-1.22c0-2.44,4.88-3.77,7.32-3.77s7.32,1.33,7.32,3.77V14.63z\"/>
                                    <rect x=\"14.63\" y=\"4.88\" class=\"st0\" width=\"8.54\" height=\"1.22\"/>
                                    <path class=\"st0\" d=\"M23.79,14.63h-3.31v-0.09c1.01-1.21,1.63-2.02,1.85-2.44c0.22-0.42,0.33-0.82,0.33-1.22
                                        c0-0.29-0.09-0.53-0.27-0.72c-0.18-0.19-0.4-0.29-0.66-0.29c-0.43,0-0.76,0.21-0.99,0.64l-0.15-0.05c0.15-0.53,0.38-0.92,0.68-1.18
                                        c0.3-0.25,0.65-0.38,1.05-0.38c0.28,0,0.55,0.07,0.78,0.2c0.24,0.13,0.42,0.31,0.55,0.55c0.13,0.23,0.2,0.45,0.2,0.65
                                        c0,0.37-0.1,0.74-0.31,1.12c-0.28,0.51-0.89,1.23-1.83,2.14h1.21c0.3,0,0.49-0.01,0.58-0.04c0.09-0.03,0.16-0.07,0.22-0.13
                                        c0.06-0.06,0.13-0.18,0.23-0.38h0.15L23.79,14.63z\"/>
                                    <polygon class=\"st0\" points=\"24.39,3.66 23.78,3.66 14.63,3.66 14.63,2.44 24.39,2.44 \t\"/>
                                    <rect x=\"14.63\" class=\"st0\" width=\"9.75\" height=\"1.22\"/>
                                </g>
                            </svg>
                        </div>
                    </div>
                    <div class=\"text has-gradient\">
                        <input type=\"text\" id=\"societe\" name=\"societe\" placeholder=\"Société ( facultatif )\">
                        {# <div class=\"border\">
                            <div class=\"borderPink\"></div>
                        </div> #}
                        <div class=\"icon societe\">
                            <svg viewBox=\"0 0 22.63 21.5\">
                                <path class=\"st0\" d=\"M9.05,0h4.53c1.25,0,2.26,1.01,2.26,2.26v2.26h4.53c1.25,0,2.26,1.01,2.26,2.26v12.45
                                    c0,1.25-1.01,2.26-2.26,2.26H2.26C1.01,21.5,0,20.48,0,19.23V6.79c0-1.26,1.01-2.26,2.26-2.26h4.53V2.26C6.79,1.01,7.8,0,9.05,0
                                    M13.58,4.53V2.26H9.05v2.26H13.58z\"/>
                            </svg>
                        </div>
                    </div>
                    <div class=\"text has-gradient\">
                        <input type=\"text\" id=\"phone\" name=\"phone\" placeholder=\"Numéro de Téléphone\">
                        {# <div class=\"border\">
                            <div class=\"borderPink\"></div>
                        </div> #}
                        <div class=\"icon phone\">
                        <svg viewBox=\"0 0 20.87 38.37\">
                            <path class=\"st0\" d=\"M18.15,0.03L2.75,0C1.24,0,0.01,1.22,0.01,2.73l-0.06,32.88c0,1.51,1.22,2.74,2.73,2.74l15.39,0.03
                                c1.51,0,2.74-1.22,2.74-2.73l0.06-32.88C20.88,1.26,19.66,0.03,18.15,0.03z M10.61,36.81l-0.46,0c-0.8,0-1.44-0.65-1.44-1.44
                                c0-0.8,0.65-1.44,1.44-1.44l0.46,0c0.8,0,1.44,0.65,1.44,1.44C12.05,36.17,11.41,36.81,10.61,36.81z M18.55,32.14L2.23,32.11
                                L2.28,3.92L18.6,3.95L18.55,32.14z\"/>
                        </svg>

                        </div>
                    </div>
                    <div class=\"text has-gradient\">
                        <input type=\"text\" id=\"email\" name=\"email\" placeholder=\"E-mail\">
                        {# <div class=\"border\">
                            <div class=\"borderPink\"></div>
                        </div> #}
                        <div class=\"icon email\">
                            <svg viewBox=\"0 0 20 20\">
                                <path class=\"st0\" d=\"M10,13c0.81,0,1.5-0.3,2.11-0.89C12.7,11.5,13,10.81,13,10s-0.3-1.5-0.89-2.11C11.5,7.3,10.81,7,10,7
                                        S8.5,7.3,7.89,7.89C7.3,8.5,7,9.19,7,10s0.3,1.5,0.89,2.11C8.5,12.7,9.19,13,10,13 M10,0c2.75,0,5.1,1,7.05,2.95S20,7.25,20,10v1.45
                                        c0,1-0.35,1.85-1,2.55c-0.7,0.67-1.5,1-2.5,1c-1.2,0-2.19-0.5-2.94-1.5c-1,1-2.18,1.5-3.56,1.5c-1.37,0-2.55-0.5-3.54-1.46
                                        C5.5,12.55,5,11.38,5,10c0-1.37,0.5-2.55,1.46-3.54C7.45,5.5,8.63,5,10,5c1.38,0,2.55,0.5,3.54,1.46C14.5,7.45,15,8.63,15,10v1.45
                                        c0,0.41,0.16,0.77,0.46,1.08c0.3,0.31,0.65,0.47,1.04,0.47c0.42,0,0.77-0.16,1.07-0.47c0.3-0.31,0.43-0.67,0.43-1.08V10
                                        c0-2.19-0.77-4.07-2.35-5.65S12.19,2,10,2S5.93,2.77,4.35,4.35S2,7.81,2,10s0.77,4.07,2.35,5.65S7.81,18,10,18h5v2h-5
                                        c-2.75,0-5.1-1-7.05-2.95S0,12.75,0,10s1-5.1,2.95-7.05S7.25,0,10,0z\"/>
                            </svg>                        
                        </div>
                    </div>
                </div>
                <div class=\"leftContent\">
                    <p>sujet du message :</p>
                    <div class=\"sujet gradient\">
                        <input type=\"text\" id=\"sujet\" name=\"sujet\" placeholder=\"Précisez le sujet du message\">
                    </div>
                    <p>message :</p>
                    <div class=\"msg gradient\">
                        <textarea id=\"message\" name=\"message\" cols=\"40\" rows=\"11\"></textarea>
                        <input type=\"hidden\" id=\"msg\" name=\"msg\" >
                    </div>
                </div>
            </div>
            <div class=\"buttons\">
                <div class=\"checkData\">
                    <input type=\"checkbox\" name=\"check\" id=\"check\">
                    <label for=\"check\" >En soumettant ce formulaire, j'accepte que les informations saisies soient exploitées dans le cadre de ma demande et de la relation qui en découlerait.</label>
                </div>
            
                <div class=\"send\">
                    <svg viewBox=\"0 0 30.47 16.5\" >
                        <path class=\"st0\" d=\"M27.93,0h-16.5c-1.4,0-2.54,1.14-2.54,2.54v11.43c0,1.41,1.14,2.54,2.54,2.54h16.5c1.41,0,2.54-1.13,2.54-2.54
                            V2.54C30.47,1.14,29.34,0,27.93,0 M27.93,13.96h-16.5V4.66l8.25,4.23l8.25-4.23V13.96 M19.68,6.74l-8.25-4.2h16.5L19.68,6.74
                            M6.35,13.96c0,0.22,0.04,0.42,0.06,0.63H1.27C0.57,14.6,0,14.03,0,13.33s0.57-1.27,1.27-1.27h5.08V13.96 M3.81,1.9h2.6
                            C6.39,2.12,6.35,2.32,6.35,2.54v1.9H3.81c-0.7,0-1.27-0.57-1.27-1.27S3.11,1.9,3.81,1.9 M1.27,8.25c0-0.7,0.57-1.27,1.27-1.27h3.81
                            v2.54H2.54C1.84,9.52,1.27,8.95,1.27,8.25z\"/>
                    </svg>
                    <p>Envoyer mon message</p>
                </div>
            </div>
            <div class=\"success\">
                <div class=\"backgroundGradient\">
                    <div class=\"icon\">
                        <svg viewBox=\"0 0 24 24\" >

                            <path class=\"st0\" d=\"M13,19c0-0.34,0.04-0.67,0.09-1H4V8l8,5l8-5v5.09c0.72,0.12,1.39,0.37,2,0.72V6c0-1.1-0.9-2-2-2H4
                                C2.9,4,2,4.9,2,6v12c0,1.1,0.9,2,2,2h9.09C13.04,19.67,13,19.34,13,19 M20,6l-8,5L4,6H20\"/>
                            <polyline class=\"st1\" points=\"17.75,22.16 15,19.16 16.16,18 17.75,19.59 21.34,16 22.5,17.41 17.75,22.16 \"/>
                        </svg>
                    </div>
                    <div class=\"text\">
                        <p>Votre message a été envoyé avec succès !</p>
                    </div>
                </div>
            </div>
            <div class=\"notSend\">
                <div class=\"backgroundGradient\">
                    <div class=\"icon\">
                        <svg viewBox=\"0 0 24 24\">
                            <path class=\"st0\" d=\"M13.09,18H4V8l8,5l8-5v5.09c0.72,0.12,1.39,0.37,2,0.72V6c0-1.1-0.9-2-2-2H4C2.9,4,2,4.9,2,6v12
                                c0,1.1,0.9,2,2,2h9.09C13.04,19.67,13,19.34,13,19S13.04,18.33,13.09,18 M20,6l-8,5L4,6H20\"/>
                            <polygon class=\"st1\" points=\"20.41,19 22.54,21.12 21.12,22.54 19,20.41 16.88,22.54 15.47,21.12 17.59,19 15.47,16.88 16.88,15.47 
                                19,17.59 21.12,15.47 22.54,16.88 \"/>
                        </svg>
                    </div>
                    <div class=\"text\">
                        <p>Votre message n'a pas pu être envoyer.</p>
                        <p>Veuillez réessayer plus tard ! </p>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
", "container/components/contact.html.twig", "C:\\xampp\\htdocs\\SiteSTAD\\app\\templates\\container\\components\\contact.html.twig");
    }
}
