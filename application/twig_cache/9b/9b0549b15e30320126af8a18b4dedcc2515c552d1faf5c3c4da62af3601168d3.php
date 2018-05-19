<?php

/* prueba1.twig */
class __TwigTemplate_d2a9e11f5c8c7c91a831054de53c11136aa9784d74b307078c35493195c6935d extends Twig_Template
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
        $context["menu"] = array(0 => "FESTIVAL", 1 => "TALENTO SABRINSKY", 2 => "CINE AL AIRE", 3 => "BICINEMA", 4 => "SABRINSKY BLOGS", 5 => "QUIENES SOMOS");
        // line 2
        echo "<!DOCTYPE html>
<html lang=\"es\">

<head>
    <title>Sabrinsky Festival</title>
    <meta name=\"keywords\" content=\"Sabrinsky\">
    <meta name=\"description\" content=\"Sabrinsky\">

    <meta charset=\"utf-8\" />
    <link type=\"text/plain\" rel=\"author\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/humans/humans.txt\" />
    <meta name=\"google-site-verification\" content=\"\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\" />
    <meta name=\"viewport\" content=\"width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0\" />
    <link rel=\"manifest\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/js/manifest.json\">
    <meta name=\"mobile-web-app-capable\" content=\"no\">

    <!--____________________________________________________________Css____________________________________________________________-->
    <link rel=\"icon\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/images/favicon.ico\" type=\"image/x-icon\" />
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/css/core.min.css\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/css/carrousel.css\" type=\"text/css\" />
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:800\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets\\css\\jquery.fullPage.css\" />

    <!--______________________________________________________End Css__________________________________________________________-->
</head>

<body>
    ";
        // line 29
        $context["nav"] = $this->loadTemplate("_tools/navigation.twig", "prueba1.twig", 29);
        // line 30
        echo "    ";
        $context["ui"] = $this->loadTemplate("_tools/UIelement.twig", "prueba1.twig", 30);
        echo " 
    
    <section style=\"background-image: url(";
        // line 32
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/images/Fondo.jpg);width: 100%;display: block;background-position: center;background-size: cover;background-repeat: no-repeat;margin-top: 0;height: auto;overflow: hidden;border-bottom:3px double #DBA901;z-index:2;position:relative\" id=\"header\">
        <section class=\"small-12 medium-4 large-2 columns header__logotipo\" style=\"text-align:center;\">
            <a href=\"";
        // line 34
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "\">
                    <img src=\"";
        // line 35
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/images/icono.png\" title=\"\" style=\"max-height:30vh;margin: 1rem 0\"/>
                    <img src=\"";
        // line 36
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/images/logotipo.png\" title=\"\" style=\"height:30vh;left:30%;top:2%;position:absolute\"/> 
                </a>
        </section>
        <section class=\"small-12 medium-8 large-10 columns header__languaje\" style=\"top:0\">
            <article style=\"float:right\">
                <span style=\"color:white\">";
        // line 41
        echo lang("IDIOMA");
        echo "</span>
                <a href=\"\">|
                        <img src=\"";
        // line 43
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/images/site/language/flag_spain.png\" title=\"\" style=\"height:2rem\"/>
                    </a>
                <a href=\"\">
                        <img src=\"";
        // line 46
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/images/site/language/flag_usa.png\" title=\"\" style=\"height:2rem\"/>
                    </a>
                <a href=\"\">
                        <img src=\"";
        // line 49
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets/images/site/language/flag_portugal.png\" title=\"\" style=\"height:2rem\"/>
                    </a>

            </article>

        </section>

    </section>
    ";
        // line 57
        echo $context["nav"]->macro_principal_nav(($context["menu"] ?? null));
        echo "

    <div id=\"fullpage\">
        ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["menu"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 61
            echo "            <div class=\"section\" style=\"background-image: url(";
            echo twig_escape_filter($this->env, base_url(), "html", null, true);
            echo "assets/images/Fondo.jpg);\">
                ";
            // line 62
            echo lang($context["item"]);
            echo "
                ";
            // line 63
            echo $context["ui"]->macro_section();
            echo "
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "    </div>
</body>
<script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>

<!-- This following line is optional. Only necessary if you use the option css3:false and you want to use other easing effects rather than \"linear\", \"swing\" or \"easeInOutCubic\". -->
<script src=\"";
        // line 71
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets\\js\\jquery.easings.min.js\"></script>


<!-- This following line is only necessary in the case of using the option `scrollOverflow:true` -->

<script type=\"text/javascript\" src=\"";
        // line 76
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets\\js\\scrolloverflow.min.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 77
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "assets\\js\\jquery.fullPage.js\"></script>
<script>
    \$(document).ready(function() {
        \$('#fullpage').fullpage({
            anchors: [";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["menu"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            echo "'";
            echo lang($context["item"]);
            echo "',";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "],
            menu: '#myMenu',
            paddingTop: '60px',

        });

    });

</script>
";
    }

    public function getTemplateName()
    {
        return "prueba1.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 81,  176 => 77,  172 => 76,  164 => 71,  157 => 66,  148 => 63,  144 => 62,  139 => 61,  135 => 60,  129 => 57,  118 => 49,  112 => 46,  106 => 43,  101 => 41,  93 => 36,  89 => 35,  85 => 34,  80 => 32,  74 => 30,  72 => 29,  63 => 23,  58 => 21,  54 => 20,  50 => 19,  43 => 15,  36 => 11,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set menu=['FESTIVAL','TALENTO SABRINSKY','CINE AL AIRE','BICINEMA','SABRINSKY BLOGS','QUIENES SOMOS'] %}
<!DOCTYPE html>
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
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{base_url()}}assets\\css\\jquery.fullPage.css\" />

    <!--______________________________________________________End Css__________________________________________________________-->
</head>

<body>
    {% import '_tools/navigation.twig' as nav %}
    {% import '_tools/UIelement.twig' as ui %} 
    
    <section style=\"background-image: url({{base_url()}}assets/images/Fondo.jpg);width: 100%;display: block;background-position: center;background-size: cover;background-repeat: no-repeat;margin-top: 0;height: auto;overflow: hidden;border-bottom:3px double #DBA901;z-index:2;position:relative\" id=\"header\">
        <section class=\"small-12 medium-4 large-2 columns header__logotipo\" style=\"text-align:center;\">
            <a href=\"{{base_url()}}\">
                    <img src=\"{{base_url()}}assets/images/icono.png\" title=\"\" style=\"max-height:30vh;margin: 1rem 0\"/>
                    <img src=\"{{base_url()}}assets/images/logotipo.png\" title=\"\" style=\"height:30vh;left:30%;top:2%;position:absolute\"/> 
                </a>
        </section>
        <section class=\"small-12 medium-8 large-10 columns header__languaje\" style=\"top:0\">
            <article style=\"float:right\">
                <span style=\"color:white\">{{lang(\"IDIOMA\")}}</span>
                <a href=\"\">|
                        <img src=\"{{base_url()}}assets/images/site/language/flag_spain.png\" title=\"\" style=\"height:2rem\"/>
                    </a>
                <a href=\"\">
                        <img src=\"{{base_url()}}assets/images/site/language/flag_usa.png\" title=\"\" style=\"height:2rem\"/>
                    </a>
                <a href=\"\">
                        <img src=\"{{base_url()}}assets/images/site/language/flag_portugal.png\" title=\"\" style=\"height:2rem\"/>
                    </a>

            </article>

        </section>

    </section>
    {{ nav.principal_nav(menu)}}

    <div id=\"fullpage\">
        {% for item in menu %}
            <div class=\"section\" style=\"background-image: url({{base_url()}}assets/images/Fondo.jpg);\">
                {{lang(item)}}
                {{ ui.section()}}
            </div>
            {% endfor%}
    </div>
</body>
<script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>

<!-- This following line is optional. Only necessary if you use the option css3:false and you want to use other easing effects rather than \"linear\", \"swing\" or \"easeInOutCubic\". -->
<script src=\"{{base_url()}}assets\\js\\jquery.easings.min.js\"></script>


<!-- This following line is only necessary in the case of using the option `scrollOverflow:true` -->

<script type=\"text/javascript\" src=\"{{base_url()}}assets\\js\\scrolloverflow.min.js\"></script>
<script type=\"text/javascript\" src=\"{{base_url()}}assets\\js\\jquery.fullPage.js\"></script>
<script>
    \$(document).ready(function() {
        \$('#fullpage').fullpage({
            anchors: [{% for item in menu %}'{{lang(item)}}',{% endfor%}],
            menu: '#myMenu',
            paddingTop: '60px',

        });

    });

</script>
", "prueba1.twig", "C:\\xampp\\htdocs\\SabrinskyFest\\application\\views\\prueba1.twig");
    }
}
