<?php

/* _tools/navigation.twig */
class __TwigTemplate_96829f16ca951f83ea0523f693aef0c3d1f8391884fba0b61dfc05fb411d8b14 extends Twig_Template
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
    }

    // line 1
    public function macro_principal_nav(...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    <section class=\"small-12 medium-8 large-12 columns header__navigation\" style=\"position: relative;margin-top: -75px;float:left;\">
        <article class=\"medium-4 large-2 columns\">

        </article>
        <article class=\"small-12 medium-8 large-10 columns\">
            <nav class=\"\" >
                <ul style=\"list-style:none;\">
                    <li style=\"float:left; padding: 1em 1.3333em; border: 1px groove #DBA901;\" >
                        <a href=\"index.php/Front/principal\" id=\"botonProgreso\" class=\"boton-activo\">
                            <span >
                                ";
            // line 12
            echo lang("FESTIVAL");
            echo "
                            </span>
                            <!--CONVOCATORIA-->
                            <!--CORTOMETRAJES(FORMULARIOS)-->
                            <!--TEASER(FORMULARIOS)-->
                            <!--PARTICIPACIONES-->
                            <!--CORTOMETRAJES-->
                            <!--TEASER-->
                            <!---->
                        </a>
                    </li>
                    <li style=\"float:left; padding: 1em 1.3333em; border: 1px groove #DBA901;\" >
                        <a href=\"index.php/Front/principal\" id=\"botonProgreso\" class=\"boton-activo\">
                            <span >
                                
                                ";
            // line 27
            echo lang("TALENTO SABRINSKY");
            echo "
                            </span>
                        </a>
                    </li>
                    <li style=\"float:left; padding: 1em 1.3333em; border: 1px groove #DBA901;\" >
                        <a href=\"index.php/Front/principal\" id=\"botonProgreso\" class=\"boton-activo\">
                            <span >
                                
                                ";
            // line 35
            echo lang("CINE AL AIRE");
            echo "
                            </span>
                        </a>
                    </li>
                    <li style=\"float:left; padding: 1em 1.3333em; border: 1px groove #DBA901;\" >
                        <a href=\"index.php/Front/principal\" id=\"botonProgreso\" class=\"boton-activo\">
                            <span >
                                
                                ";
            // line 43
            echo lang("BICINEMA");
            echo "
                            </span>
                        </a>
                    </li>
                    <li style=\"float:left; padding: 1em 1.3333em; border: 1px groove #DBA901;\" >
                        <a href=\"index.php/Front/principal\" id=\"botonProgreso\" class=\"boton-activo\">
                            <span >
                                ";
            // line 50
            echo lang("SABRINSKY BLOGS");
            echo "
                            </span>
                        </a>
                    </li>
                    <li style=\"float:left; padding: 1em 1.3333em; border: 1px groove #DBA901;\" >
                        <a href=\"index.php/Front/principal\" id=\"botonProgreso\" class=\"boton-activo\">
                            <span >
                                ";
            // line 57
            echo lang("QUIENES SOMOS");
            echo "
                            </span>
                            <!--MISION Y VISION-->
                        </a>
                    </li>
                </ul>
            </nav>
        </article>
</section>    
    ";

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "_tools/navigation.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 57,  98 => 50,  88 => 43,  77 => 35,  66 => 27,  48 => 12,  36 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro principal_nav()%}
    <section class=\"small-12 medium-8 large-12 columns header__navigation\" style=\"position: relative;margin-top: -75px;float:left;\">
        <article class=\"medium-4 large-2 columns\">

        </article>
        <article class=\"small-12 medium-8 large-10 columns\">
            <nav class=\"\" >
                <ul style=\"list-style:none;\">
                    <li style=\"float:left; padding: 1em 1.3333em; border: 1px groove #DBA901;\" >
                        <a href=\"index.php/Front/principal\" id=\"botonProgreso\" class=\"boton-activo\">
                            <span >
                                {{lang(\"FESTIVAL\")}}
                            </span>
                            <!--CONVOCATORIA-->
                            <!--CORTOMETRAJES(FORMULARIOS)-->
                            <!--TEASER(FORMULARIOS)-->
                            <!--PARTICIPACIONES-->
                            <!--CORTOMETRAJES-->
                            <!--TEASER-->
                            <!---->
                        </a>
                    </li>
                    <li style=\"float:left; padding: 1em 1.3333em; border: 1px groove #DBA901;\" >
                        <a href=\"index.php/Front/principal\" id=\"botonProgreso\" class=\"boton-activo\">
                            <span >
                                
                                {{lang(\"TALENTO SABRINSKY\")}}
                            </span>
                        </a>
                    </li>
                    <li style=\"float:left; padding: 1em 1.3333em; border: 1px groove #DBA901;\" >
                        <a href=\"index.php/Front/principal\" id=\"botonProgreso\" class=\"boton-activo\">
                            <span >
                                
                                {{lang(\"CINE AL AIRE\")}}
                            </span>
                        </a>
                    </li>
                    <li style=\"float:left; padding: 1em 1.3333em; border: 1px groove #DBA901;\" >
                        <a href=\"index.php/Front/principal\" id=\"botonProgreso\" class=\"boton-activo\">
                            <span >
                                
                                {{lang(\"BICINEMA\")}}
                            </span>
                        </a>
                    </li>
                    <li style=\"float:left; padding: 1em 1.3333em; border: 1px groove #DBA901;\" >
                        <a href=\"index.php/Front/principal\" id=\"botonProgreso\" class=\"boton-activo\">
                            <span >
                                {{lang(\"SABRINSKY BLOGS\")}}
                            </span>
                        </a>
                    </li>
                    <li style=\"float:left; padding: 1em 1.3333em; border: 1px groove #DBA901;\" >
                        <a href=\"index.php/Front/principal\" id=\"botonProgreso\" class=\"boton-activo\">
                            <span >
                                {{lang(\"QUIENES SOMOS\")}}
                            </span>
                            <!--MISION Y VISION-->
                        </a>
                    </li>
                </ul>
            </nav>
        </article>
</section>    
    {% endmacro%}", "_tools/navigation.twig", "C:\\xampp\\htdocs\\SabrinskyFest\\application\\views\\_tools\\navigation.twig");
    }
}
