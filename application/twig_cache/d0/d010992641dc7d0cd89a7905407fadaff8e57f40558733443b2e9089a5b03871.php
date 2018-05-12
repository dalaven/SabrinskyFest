<?php

/* _tools/UIelement.twig */
class __TwigTemplate_b3e39b2d1c0b7bcc6db92ade6e6d5155d8a24634b39a6d80224fd78a7fa84eda extends Twig_Template
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
        // line 49
        echo "
";
    }

    // line 1
    public function macro_section($__data__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "data" => $__data__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "<section class=\"small-12 medium-8 large-12 columns\">
    <div class=\"row__inner\">
                    <div class=\"tile\"> 
                <div class=\"tile__media\"> 
                    <img class=\"tile__img\" src=\"";
            // line 6
            echo twig_escape_filter($this->env, base_url(), "html", null, true);
            echo "assets/images/Sabrinsky.png\" alt=\"\"  /> 
                </div> 
                <div class=\"tile__details\"> 
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.  
                        Maecenas dictum erat eros. Vestibulum aliquam convallis 
                        lobortis. Nam accumsan finibus placerat. Nam vestibulum ligula eu mollis mollis. Nunc ultrices consequat neque, nec pulvinar sapien tincidunt nec. Vivamus lobortis enim eget pulvinar dapibus. Morbi tincidunt turpis eu tortor finibus, at tristique leo faucibus. In in commodo elit, ut tristique eros. Etiam cursus nec sem sit amet vestibulum. Morbi a cursus purus, vel pulvinar dolor.</p> 
                    <p> 
 
                        Quisque ut mattis tellus. Nulla lobortis, ipsum id scelerisque vulputate, nulla orci scelerisque eros, quis consequat sapien ante gravida nibh. Duis pulvinar blandit metus quis suscipit. Vestibulum ullamcorper molestie urna, scelerisque sollicitudin erat gravida iaculis. Proin eu venenatis nulla. Quisque sit amet tortor porttitor, dapibus risus cursus, fermentum leo. Vestibulum feugiat fringilla bibendum. Aenean eu lacinia eros. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aliquam vehicula non mi eget fringilla. Phasellus et posuere ligula. Quisque vitae scelerisque dui. Mauris malesuada, est sit amet viverra egestas, elit massa sagittis magna, non mollis ex neque eu quam. Donec imperdiet semper leo, eget feugiat velit. Maecenas fringilla sodales eros. Sed blandit fermentum erat, eget varius turpis mollis in. 
                    </p>  
                    <div class=\"tile__title\"> 
                        Top Gear 
                    </div> 
                </div> 
            </div>

        <div class=\"tile\">
            <div class=\"tile__media\">
                <img class=\"tile__img\" src=\"https://s3-us-west-2.amazonaws.com/s.cdpn.io/70390/show-14.jpg\" alt=\"\"  />
            </div>
            <div class=\"tile__details\">
                <div class=\"tile__title\">
                    Top Gear
                </div>
            </div>
        </div>

        <div class=\"tile\">
            <div class=\"tile__media\">
                <img class=\"tile__img\" src=\"https://s3-us-west-2.amazonaws.com/s.cdpn.io/70390/show-15.jpg\" alt=\"\"  />
            </div>
            <div class=\"tile__details\">
                <div class=\"tile__title\">
                    Top Gear
                </div>
            </div>
        </div>

    </div>

</section>

";

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 50
    public function macro_section_test(...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 51
            echo "<style>
    @import url('https://fonts.googleapis.com/css?family=Lobster+Two');

    *{
        box-sizing: border-box;
    }

    .box{
        overflow: hidden;
    }
    .cover{
        width: 100%;
        height: 100%;
        background: rgba(0,0,0,0.45);
        position: relative;
        -webkit-transition: all 0.4s cubic-bezier(.99,.99,0,.61);
        padding: 1em;
        color: #fff;
        overflow: hidden;
        text-shadow: 1px 1px 0px #000;
    }
    .cover .title{
        font-size: 16pt;
        font-style: italic;
    }
    .box .cover .intro{
        line-height: 1.2em;
        height: 4.8em;
        width: 100%;
        position: relative;
        font-size: 10pt;
        overflow: hidden;
    }
    .cover .btn{
        padding: 0.5em 1em;
        margin: 0.5em;
        background: #0099cc;
        float: right;
        border-radius: 0.25em;
    }
    .btn a{
        color: #fff;
        text-decoration: none;
    }
    .cover .date{
        position: absolute;
        bottom: 1em;
        right: 1em;
        font-size: 10pt;
    }
    .box:hover .bottom{
        -webkit-transition: all 0.4s cubic-bezier(.99,.99,0,.61);
        bottom: 0px;
    }
    .box:hover .bottom-left{
        -webkit-transition: all 0.4s cubic-bezier(.99,.99,0,.61);
        bottom: 0px;
        left: 0px;
    }
    .box:hover .bottom-right{
        -webkit-transition: all 0.4s cubic-bezier(.99,.99,0,.61);
        bottom: 0px;
        right: 0px;
    }
    .bottom{
        bottom: -200px;
    }
    .bottom-left{
        bottom: -200px;
        left: -250px;
    }
    .bottom-right{
        bottom: -200px;
        right: -250px;
    }
    /* Ordering */
    .left{order:1;}
    .right{order:2;}
    .top{order:3;}
    .bottom{order:4;}
    .top-left{order:5;}
    .top-right{order:6;}
    .bottom-left{order:7;}
    .bottom-right{order:8;}


</style>
<section class=\"small-12 medium-8 large-12 columns\" style=\"padding-left:0;padding-right:0\">
    <article class=\"small-4 medium-4 large-4 columns box\" style=\"background: url('";
            // line 139
            echo twig_escape_filter($this->env, base_url(), "html", null, true);
            echo "assets/images/Sabrinsky.png');background-repeat: no-repeat;
        background-size: 100% 100%;\">
        <div class=\"cover bottom-left\">
            <h2 class=\"title\">Example Post Title</h2>
            <p class=\"intro\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium quis enim nam dolorem recusandae ducimus laudantium iure sint similique reiciendis quaerat dolorum cum aliquid officiis repudiandae in qui itaque maiores!</p>
            <div class=\"btn\"><a href=\"#\">Read more...</a></div>
            <p class=\"date\">10/19/2013</p>
        </div>
    </article>
    <article class=\"small-4 medium-4 large-4 columns box\" style=\"background: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/70390/show-14.jpg');background-repeat: no-repeat;
        background-size: 100% 100%;\">
        <div class=\"cover bottom\">
            <h2 class=\"title\">Example Post Title</h2>
            <p class=\"intro\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium quis enim nam dolorem recusandae ducimus laudantium iure sint similique reiciendis quaerat dolorum cum aliquid officiis repudiandae in qui itaque maiores!</p>
            <div class=\"btn\"><a href=\"#\">Read more...</a></div>
            <p class=\"date\">10/19/2013</p>
        </div>
    </article>
    <article class=\"small-4 medium-4 large-4 columns box\" style=\"background: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/70390/show-15.jpg');background-repeat: no-repeat;
        background-size: 100% 100%;\">
        <div class=\"cover bottom-right\">
            <h2 class=\"title\">Example Post Title</h2>
            <p class=\"intro\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium quis enim nam dolorem recusandae ducimus laudantium iure sint similique reiciendis quaerat dolorum cum aliquid officiis repudiandae in qui itaque maiores!</p>
            <div class=\"btn\"><a href=\"#\">Read more...</a></div>
            <p class=\"date\">10/19/2013</p>
        </div>
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
        return "_tools/UIelement.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 139,  109 => 51,  98 => 50,  46 => 6,  40 => 2,  28 => 1,  23 => 49,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro section(data)%}
<section class=\"small-12 medium-8 large-12 columns\">
    <div class=\"row__inner\">
                    <div class=\"tile\"> 
                <div class=\"tile__media\"> 
                    <img class=\"tile__img\" src=\"{{base_url()}}assets/images/Sabrinsky.png\" alt=\"\"  /> 
                </div> 
                <div class=\"tile__details\"> 
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.  
                        Maecenas dictum erat eros. Vestibulum aliquam convallis 
                        lobortis. Nam accumsan finibus placerat. Nam vestibulum ligula eu mollis mollis. Nunc ultrices consequat neque, nec pulvinar sapien tincidunt nec. Vivamus lobortis enim eget pulvinar dapibus. Morbi tincidunt turpis eu tortor finibus, at tristique leo faucibus. In in commodo elit, ut tristique eros. Etiam cursus nec sem sit amet vestibulum. Morbi a cursus purus, vel pulvinar dolor.</p> 
                    <p> 
 
                        Quisque ut mattis tellus. Nulla lobortis, ipsum id scelerisque vulputate, nulla orci scelerisque eros, quis consequat sapien ante gravida nibh. Duis pulvinar blandit metus quis suscipit. Vestibulum ullamcorper molestie urna, scelerisque sollicitudin erat gravida iaculis. Proin eu venenatis nulla. Quisque sit amet tortor porttitor, dapibus risus cursus, fermentum leo. Vestibulum feugiat fringilla bibendum. Aenean eu lacinia eros. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aliquam vehicula non mi eget fringilla. Phasellus et posuere ligula. Quisque vitae scelerisque dui. Mauris malesuada, est sit amet viverra egestas, elit massa sagittis magna, non mollis ex neque eu quam. Donec imperdiet semper leo, eget feugiat velit. Maecenas fringilla sodales eros. Sed blandit fermentum erat, eget varius turpis mollis in. 
                    </p>  
                    <div class=\"tile__title\"> 
                        Top Gear 
                    </div> 
                </div> 
            </div>

        <div class=\"tile\">
            <div class=\"tile__media\">
                <img class=\"tile__img\" src=\"https://s3-us-west-2.amazonaws.com/s.cdpn.io/70390/show-14.jpg\" alt=\"\"  />
            </div>
            <div class=\"tile__details\">
                <div class=\"tile__title\">
                    Top Gear
                </div>
            </div>
        </div>

        <div class=\"tile\">
            <div class=\"tile__media\">
                <img class=\"tile__img\" src=\"https://s3-us-west-2.amazonaws.com/s.cdpn.io/70390/show-15.jpg\" alt=\"\"  />
            </div>
            <div class=\"tile__details\">
                <div class=\"tile__title\">
                    Top Gear
                </div>
            </div>
        </div>

    </div>

</section>

{% endmacro%}

{% macro section_test()%}
<style>
    @import url('https://fonts.googleapis.com/css?family=Lobster+Two');

    *{
        box-sizing: border-box;
    }

    .box{
        overflow: hidden;
    }
    .cover{
        width: 100%;
        height: 100%;
        background: rgba(0,0,0,0.45);
        position: relative;
        -webkit-transition: all 0.4s cubic-bezier(.99,.99,0,.61);
        padding: 1em;
        color: #fff;
        overflow: hidden;
        text-shadow: 1px 1px 0px #000;
    }
    .cover .title{
        font-size: 16pt;
        font-style: italic;
    }
    .box .cover .intro{
        line-height: 1.2em;
        height: 4.8em;
        width: 100%;
        position: relative;
        font-size: 10pt;
        overflow: hidden;
    }
    .cover .btn{
        padding: 0.5em 1em;
        margin: 0.5em;
        background: #0099cc;
        float: right;
        border-radius: 0.25em;
    }
    .btn a{
        color: #fff;
        text-decoration: none;
    }
    .cover .date{
        position: absolute;
        bottom: 1em;
        right: 1em;
        font-size: 10pt;
    }
    .box:hover .bottom{
        -webkit-transition: all 0.4s cubic-bezier(.99,.99,0,.61);
        bottom: 0px;
    }
    .box:hover .bottom-left{
        -webkit-transition: all 0.4s cubic-bezier(.99,.99,0,.61);
        bottom: 0px;
        left: 0px;
    }
    .box:hover .bottom-right{
        -webkit-transition: all 0.4s cubic-bezier(.99,.99,0,.61);
        bottom: 0px;
        right: 0px;
    }
    .bottom{
        bottom: -200px;
    }
    .bottom-left{
        bottom: -200px;
        left: -250px;
    }
    .bottom-right{
        bottom: -200px;
        right: -250px;
    }
    /* Ordering */
    .left{order:1;}
    .right{order:2;}
    .top{order:3;}
    .bottom{order:4;}
    .top-left{order:5;}
    .top-right{order:6;}
    .bottom-left{order:7;}
    .bottom-right{order:8;}


</style>
<section class=\"small-12 medium-8 large-12 columns\" style=\"padding-left:0;padding-right:0\">
    <article class=\"small-4 medium-4 large-4 columns box\" style=\"background: url('{{base_url()}}assets/images/Sabrinsky.png');background-repeat: no-repeat;
        background-size: 100% 100%;\">
        <div class=\"cover bottom-left\">
            <h2 class=\"title\">Example Post Title</h2>
            <p class=\"intro\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium quis enim nam dolorem recusandae ducimus laudantium iure sint similique reiciendis quaerat dolorum cum aliquid officiis repudiandae in qui itaque maiores!</p>
            <div class=\"btn\"><a href=\"#\">Read more...</a></div>
            <p class=\"date\">10/19/2013</p>
        </div>
    </article>
    <article class=\"small-4 medium-4 large-4 columns box\" style=\"background: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/70390/show-14.jpg');background-repeat: no-repeat;
        background-size: 100% 100%;\">
        <div class=\"cover bottom\">
            <h2 class=\"title\">Example Post Title</h2>
            <p class=\"intro\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium quis enim nam dolorem recusandae ducimus laudantium iure sint similique reiciendis quaerat dolorum cum aliquid officiis repudiandae in qui itaque maiores!</p>
            <div class=\"btn\"><a href=\"#\">Read more...</a></div>
            <p class=\"date\">10/19/2013</p>
        </div>
    </article>
    <article class=\"small-4 medium-4 large-4 columns box\" style=\"background: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/70390/show-15.jpg');background-repeat: no-repeat;
        background-size: 100% 100%;\">
        <div class=\"cover bottom-right\">
            <h2 class=\"title\">Example Post Title</h2>
            <p class=\"intro\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium quis enim nam dolorem recusandae ducimus laudantium iure sint similique reiciendis quaerat dolorum cum aliquid officiis repudiandae in qui itaque maiores!</p>
            <div class=\"btn\"><a href=\"#\">Read more...</a></div>
            <p class=\"date\">10/19/2013</p>
        </div>
    </article>


</section>
{% endmacro%}
", "_tools/UIelement.twig", "C:\\xampp\\htdocs\\SabrinskyFest\\application\\views\\_tools\\UIelement.twig");
    }
}
