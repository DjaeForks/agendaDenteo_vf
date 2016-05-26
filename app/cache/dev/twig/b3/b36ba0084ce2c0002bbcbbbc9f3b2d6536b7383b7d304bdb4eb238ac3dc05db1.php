<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_50928cdb6fb0be5b6181d40f80485890010cd4cf8b046366f85a0f6cc85ba0fc extends Twig_Template
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
        $__internal_8f0a711bcb550957136a833c82b98690da8d99c1dcb516383e3e30ac86eec081 = $this->env->getExtension("native_profiler");
        $__internal_8f0a711bcb550957136a833c82b98690da8d99c1dcb516383e3e30ac86eec081->enter($__internal_8f0a711bcb550957136a833c82b98690da8d99c1dcb516383e3e30ac86eec081_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f0a711bcb550957136a833c82b98690da8d99c1dcb516383e3e30ac86eec081->leave($__internal_8f0a711bcb550957136a833c82b98690da8d99c1dcb516383e3e30ac86eec081_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3b0d3c160e09e413f9e05a8c2f85ab440bf5c48e43f7d3454e3218cbff78328a = $this->env->getExtension("native_profiler");
        $__internal_3b0d3c160e09e413f9e05a8c2f85ab440bf5c48e43f7d3454e3218cbff78328a->enter($__internal_3b0d3c160e09e413f9e05a8c2f85ab440bf5c48e43f7d3454e3218cbff78328a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3b0d3c160e09e413f9e05a8c2f85ab440bf5c48e43f7d3454e3218cbff78328a->leave($__internal_3b0d3c160e09e413f9e05a8c2f85ab440bf5c48e43f7d3454e3218cbff78328a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b7b6111d204f71450d5590a510ae3a47079d44d8f1ae186681b495fd091833f7 = $this->env->getExtension("native_profiler");
        $__internal_b7b6111d204f71450d5590a510ae3a47079d44d8f1ae186681b495fd091833f7->enter($__internal_b7b6111d204f71450d5590a510ae3a47079d44d8f1ae186681b495fd091833f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b7b6111d204f71450d5590a510ae3a47079d44d8f1ae186681b495fd091833f7->leave($__internal_b7b6111d204f71450d5590a510ae3a47079d44d8f1ae186681b495fd091833f7_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e6ca77e05120381673c6f81c8e55942481cb62d41e213f2f220cbe6e74d82eb8 = $this->env->getExtension("native_profiler");
        $__internal_e6ca77e05120381673c6f81c8e55942481cb62d41e213f2f220cbe6e74d82eb8->enter($__internal_e6ca77e05120381673c6f81c8e55942481cb62d41e213f2f220cbe6e74d82eb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e6ca77e05120381673c6f81c8e55942481cb62d41e213f2f220cbe6e74d82eb8->leave($__internal_e6ca77e05120381673c6f81c8e55942481cb62d41e213f2f220cbe6e74d82eb8_prof);

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
