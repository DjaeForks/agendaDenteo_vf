<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_476c4df80bff62486f7689401de4587a8efa21851f561cf6d17323683e74b301 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1a8b76426e1e872fca8b6c06ab96e3bed339a66ff9dc027ad43ba35fcc9e01a6 = $this->env->getExtension("native_profiler");
        $__internal_1a8b76426e1e872fca8b6c06ab96e3bed339a66ff9dc027ad43ba35fcc9e01a6->enter($__internal_1a8b76426e1e872fca8b6c06ab96e3bed339a66ff9dc027ad43ba35fcc9e01a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_1a8b76426e1e872fca8b6c06ab96e3bed339a66ff9dc027ad43ba35fcc9e01a6->leave($__internal_1a8b76426e1e872fca8b6c06ab96e3bed339a66ff9dc027ad43ba35fcc9e01a6_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <div id="header">*/
/*     <div class="container">*/
/*         <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>*/
/* */
/*         <div class="search">*/
/*             <form method="get" action="https://symfony.com/search" target="_blank">*/
/*                 <div class="form-row">*/
/*                     <input name="q" id="search-id" type="search" placeholder="search on symfony.com">*/
/*                     <button type="submit" class="btn">Search</button>*/
/*                 </div>*/
/*            </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
