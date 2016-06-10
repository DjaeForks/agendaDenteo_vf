<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_f8e7aa376ef6f6754a8dec65037a84017291402bb0d5f0f443c005d84746b86b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2ee81fec251a783ee325929ffcf398d5842c95c948878eb2c923861ccf2d89f4 = $this->env->getExtension("native_profiler");
        $__internal_2ee81fec251a783ee325929ffcf398d5842c95c948878eb2c923861ccf2d89f4->enter($__internal_2ee81fec251a783ee325929ffcf398d5842c95c948878eb2c923861ccf2d89f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ee81fec251a783ee325929ffcf398d5842c95c948878eb2c923861ccf2d89f4->leave($__internal_2ee81fec251a783ee325929ffcf398d5842c95c948878eb2c923861ccf2d89f4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4857cab7be1f330706d03de5b9fdfea02e639046214285c66150724f65973ab7 = $this->env->getExtension("native_profiler");
        $__internal_4857cab7be1f330706d03de5b9fdfea02e639046214285c66150724f65973ab7->enter($__internal_4857cab7be1f330706d03de5b9fdfea02e639046214285c66150724f65973ab7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4857cab7be1f330706d03de5b9fdfea02e639046214285c66150724f65973ab7->leave($__internal_4857cab7be1f330706d03de5b9fdfea02e639046214285c66150724f65973ab7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ff10bda58b4e4643f95bc7158ba2c9c9ae567787ce04226370969ed40424acd4 = $this->env->getExtension("native_profiler");
        $__internal_ff10bda58b4e4643f95bc7158ba2c9c9ae567787ce04226370969ed40424acd4->enter($__internal_ff10bda58b4e4643f95bc7158ba2c9c9ae567787ce04226370969ed40424acd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ff10bda58b4e4643f95bc7158ba2c9c9ae567787ce04226370969ed40424acd4->leave($__internal_ff10bda58b4e4643f95bc7158ba2c9c9ae567787ce04226370969ed40424acd4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0d529c2f5416a16d7315bd687d3dfa40a9367751d4557744f271fa1810cc1466 = $this->env->getExtension("native_profiler");
        $__internal_0d529c2f5416a16d7315bd687d3dfa40a9367751d4557744f271fa1810cc1466->enter($__internal_0d529c2f5416a16d7315bd687d3dfa40a9367751d4557744f271fa1810cc1466_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0d529c2f5416a16d7315bd687d3dfa40a9367751d4557744f271fa1810cc1466->leave($__internal_0d529c2f5416a16d7315bd687d3dfa40a9367751d4557744f271fa1810cc1466_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
