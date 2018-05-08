<?php

/* first_page.twig */
class __TwigTemplate_4a435d0614173477da21a26ec3b9450cd8de99412b27ad6d3923afe49e1cf612 extends Twig_Template
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
    </head>
    <body style=\"background-image: url(assets/images/Fondo.jpg);\"> 
        <section class=\"layaout__front\">
            <section class=\"row\">
                <article class=\"small-12 medium-12 large-12 columns layaut__front-bg\" style=\"text-align:center\">
                    <span class=\"bg\"></span>
                    <img src=\"assets/images/sabrinsky.png\" alt=\"sabrinsky\" style=\"height:100vh;\">
                </article>    
            </section>
        </section>
        <script type=\"text/javascript\" src=\"assets/js/core.min.js\"></script>
    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "first_page.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 19,  51 => 18,  47 => 17,  40 => 13,  33 => 9,  23 => 1,);
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
    </head>
    <body style=\"background-image: url(assets/images/Fondo.jpg);\"> 
        <section class=\"layaout__front\">
            <section class=\"row\">
                <article class=\"small-12 medium-12 large-12 columns layaut__front-bg\" style=\"text-align:center\">
                    <span class=\"bg\"></span>
                    <img src=\"assets/images/sabrinsky.png\" alt=\"sabrinsky\" style=\"height:100vh;\">
                </article>    
            </section>
        </section>
        <script type=\"text/javascript\" src=\"assets/js/core.min.js\"></script>
    </body>
</html>
", "first_page.twig", "C:\\xampp\\htdocs\\SabrinskyFest\\application\\views\\first_page.twig");
    }
}
