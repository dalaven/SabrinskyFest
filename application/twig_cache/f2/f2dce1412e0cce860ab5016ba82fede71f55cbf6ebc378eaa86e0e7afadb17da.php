<?php

/* principal.twig */
class __TwigTemplate_4796ee77794c218d2fa390f3624d1ba9da0aa50be17175251286d65c416d0def extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"es\">
    <head>
        <title>Sabrinsky Festival</title>
        <meta name=\"keywords\" content=\"Sabrinsky\">
        <meta name=\"description\" content=\"Sabrinsky\">

        <meta charset=\"utf-8\" />
        <link type=\"text/plain\" rel=\"author\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/humans/humans.txt\" />
        <meta name=\"google-site-verification\" content=\"\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\" />
        <meta name=\"viewport\" content=\"width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0\" />
        <link rel=\"manifest\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/js/manifest.json\">
        <meta name=\"mobile-web-app-capable\" content=\"no\">

        <!--____________________________________________________________Css____________________________________________________________-->
        <link rel=\"icon\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/images/favicon.ico\" type=\"image/x-icon\" />
        <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/css/core.min.css\" type=\"text/css\" />
        <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/css/carrousel.css\" type=\"text/css\" />
        <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:800\" rel=\"stylesheet\">
        <!--______________________________________________________End Css__________________________________________________________-->
    </head>
    <body style=\"background-image: url(";
        // line 23
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/images/Fondo.jpg);\">
        ";
        // line 24
        $context["nav"] = $this->loadTemplate("_tools/navigation.twig", "principal.twig", 24);
        echo "  
        ";
        // line 25
        $context["ui"] = $this->loadTemplate("_tools/UIelement.twig", "principal.twig", 25);
        echo "  

        <section style=\"background-image: url(";
        // line 27
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/images/Fondo.jpg);width: 100%;display: block;background-position: center;background-size: cover;background-repeat: no-repeat;margin-top: 0;height: auto;overflow: hidden;border-bottom:3px double #DBA901\">
            <section class=\"small-12 medium-4 large-2 columns header__logotipo\" style=\"text-align:center;\">
                <a href=\"";
        // line 29
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "\">
                    <img src=\"";
        // line 30
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/images/icono.png\" title=\"\" style=\"max-height:30vh;margin: 1rem 0\"/>
                    <img src=\"";
        // line 31
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/images/logotipo.png\" title=\"\" style=\"height:30vh;left:30%;top:2%;position:absolute\"/> 
                </a>
            </section>
            <section class=\"small-12 medium-8 large-10 columns header__languaje\" style=\"top:0\">
                <article style=\"float:right\">
                    <span style=\"color:white\">";
        // line 36
        echo lang("IDIOMA");
        echo "</span>
                    <a href=\"\">
                        <img src=\"";
        // line 38
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/images/circulo.png\" title=\"\" style=\"height:2rem\"/>
                    </a>
                    <a href=\"\">
                        <img src=\"";
        // line 41
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/images/circulo.png\" title=\"\" style=\"height:2rem\"/>
                    </a>
                    <a href=\"\">
                        <img src=\"";
        // line 44
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/images/circulo.png\" title=\"\" style=\"height:2rem\"/>
                    </a>

                </article>

            </section>

        </section>

        ";
        // line 53
        echo $context["nav"]->macro_principal_nav();
        echo "
        ";
        // line 54
        echo $context["ui"]->macro_section();
        echo "
    </body>";
    }

    public function getTemplateName()
    {
        return "principal.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 54,  125 => 53,  113 => 44,  107 => 41,  101 => 38,  96 => 36,  88 => 31,  84 => 30,  80 => 29,  75 => 27,  70 => 25,  66 => 24,  62 => 23,  55 => 19,  51 => 18,  47 => 17,  40 => 13,  33 => 9,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"es\">
    <head>
        <title>Sabrinsky Festival</title>
        <meta name=\"keywords\" content=\"Sabrinsky\">
        <meta name=\"description\" content=\"Sabrinsky\">

        <meta charset=\"utf-8\" />
        <link type=\"text/plain\" rel=\"author\" href=\"{{base_url()}}assets/humans/humans.txt\" />
        <meta name=\"google-site-verification\" content=\"\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\" />
        <meta name=\"viewport\" content=\"width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0\" />
        <link rel=\"manifest\" href=\"{{base_url()}}assets/js/manifest.json\">
        <meta name=\"mobile-web-app-capable\" content=\"no\">

        <!--____________________________________________________________Css____________________________________________________________-->
        <link rel=\"icon\" href=\"{{base_url()}}assets/images/favicon.ico\" type=\"image/x-icon\" />
        <link rel=\"stylesheet\" href=\"{{base_url()}}assets/css/core.min.css\" type=\"text/css\" />
        <link rel=\"stylesheet\" href=\"{{base_url()}}assets/css/carrousel.css\" type=\"text/css\" />
        <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:800\" rel=\"stylesheet\">
        <!--______________________________________________________End Css__________________________________________________________-->
    </head>
    <body style=\"background-image: url({{base_url()}}assets/images/Fondo.jpg);\">
        {% import '_tools/navigation.twig' as nav %}  
        {% import '_tools/UIelement.twig' as ui %}  

        <section style=\"background-image: url({{base_url()}}assets/images/Fondo.jpg);width: 100%;display: block;background-position: center;background-size: cover;background-repeat: no-repeat;margin-top: 0;height: auto;overflow: hidden;border-bottom:3px double #DBA901\">
            <section class=\"small-12 medium-4 large-2 columns header__logotipo\" style=\"text-align:center;\">
                <a href=\"{{base_url()}}\">
                    <img src=\"{{base_url()}}assets/images/icono.png\" title=\"\" style=\"max-height:30vh;margin: 1rem 0\"/>
                    <img src=\"{{base_url()}}assets/images/logotipo.png\" title=\"\" style=\"height:30vh;left:30%;top:2%;position:absolute\"/> 
                </a>
            </section>
            <section class=\"small-12 medium-8 large-10 columns header__languaje\" style=\"top:0\">
                <article style=\"float:right\">
                    <span style=\"color:white\">{{lang(\"IDIOMA\")}}</span>
                    <a href=\"\">
                        <img src=\"{{base_url()}}assets/images/circulo.png\" title=\"\" style=\"height:2rem\"/>
                    </a>
                    <a href=\"\">
                        <img src=\"{{base_url()}}assets/images/circulo.png\" title=\"\" style=\"height:2rem\"/>
                    </a>
                    <a href=\"\">
                        <img src=\"{{base_url()}}assets/images/circulo.png\" title=\"\" style=\"height:2rem\"/>
                    </a>

                </article>

            </section>

        </section>

        {{ nav.principal_nav()}}
        {{ ui.section()}}
    </body>", "principal.twig", "C:\\xampp\\htdocs\\SabrinskyFest\\application\\views\\principal.twig");
    }
}
