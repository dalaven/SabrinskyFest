<?php

/* _tools/navigation.twig */
class __TwigTemplate_b9de9ed42343f30f3ae55b16fd8f02b28de75e38f2c9d1eb16487c6e829fbdf1 extends Twig_Template
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
    public function macro_principal_nav($__menu__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "menu" => $__menu__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    <section class=\"small-12 medium-12 large-12 columns header__navigation\" style=\"position: relative;margin-top: -15px;float:left; z-index: 100;padding:0\" style=\"background-image: url(";
            echo twig_escape_filter($this->env, base_url(), "html", null, true);
            echo "assets/images/Fondo.jpg);\" >
            <nav>
                <ul style=\"list-style:none;\" id=\"myMenu\" >
                    ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["menu"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 6
                echo "                        <li style=\"float:left; padding: 1em 1.3333em; border: 1px groove #DBA901;background-image: url(";
                echo twig_escape_filter($this->env, base_url(), "html", null, true);
                echo "assets/images/Fondo.jpg);\" data-menuanchor=\"";
                echo lang($context["item"]);
                echo "\" >
                        <a href=\"#";
                // line 7
                echo lang($context["item"]);
                echo "\" id=\"botonProgreso\" class=\"boton-activo\" >
                            <span >
                                ";
                // line 9
                echo lang($context["item"]);
                echo "
                            </span>
                        </a>
                    </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "                    
                </ul>
            </nav>
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
        return array (  71 => 14,  60 => 9,  55 => 7,  48 => 6,  44 => 5,  37 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro principal_nav(menu)%}
    <section class=\"small-12 medium-12 large-12 columns header__navigation\" style=\"position: relative;margin-top: -15px;float:left; z-index: 100;padding:0\" style=\"background-image: url({{base_url()}}assets/images/Fondo.jpg);\" >
            <nav>
                <ul style=\"list-style:none;\" id=\"myMenu\" >
                    {% for item in menu %}
                        <li style=\"float:left; padding: 1em 1.3333em; border: 1px groove #DBA901;background-image: url({{base_url()}}assets/images/Fondo.jpg);\" data-menuanchor=\"{{lang(item)}}\" >
                        <a href=\"#{{lang(item)}}\" id=\"botonProgreso\" class=\"boton-activo\" >
                            <span >
                                {{lang(item)}}
                            </span>
                        </a>
                    </li>
                    {% endfor%}
                    
                </ul>
            </nav>
</section>    
    {% endmacro%}", "_tools/navigation.twig", "C:\\xampp\\htdocs\\SabrinskyFest\\application\\views\\_tools\\navigation.twig");
    }
}
