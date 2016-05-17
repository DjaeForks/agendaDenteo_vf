<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c9cac9861e32c3b754799a3984c07410a3961c12e9a4c98d222c14900ffe0628 extends Twig_Template
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
        $__internal_29d85a07a468f505151468783d6d95ea4a96d4eae44f83b793a756660886933f = $this->env->getExtension("native_profiler");
        $__internal_29d85a07a468f505151468783d6d95ea4a96d4eae44f83b793a756660886933f->enter($__internal_29d85a07a468f505151468783d6d95ea4a96d4eae44f83b793a756660886933f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_29d85a07a468f505151468783d6d95ea4a96d4eae44f83b793a756660886933f->leave($__internal_29d85a07a468f505151468783d6d95ea4a96d4eae44f83b793a756660886933f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4339c214bfab78809bbaf66b933560fcfd6bdd27edca99ec89473da725ae8cd5 = $this->env->getExtension("native_profiler");
        $__internal_4339c214bfab78809bbaf66b933560fcfd6bdd27edca99ec89473da725ae8cd5->enter($__internal_4339c214bfab78809bbaf66b933560fcfd6bdd27edca99ec89473da725ae8cd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4339c214bfab78809bbaf66b933560fcfd6bdd27edca99ec89473da725ae8cd5->leave($__internal_4339c214bfab78809bbaf66b933560fcfd6bdd27edca99ec89473da725ae8cd5_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f62fc6f25fe90da9b5bd319fe51e3f1f45cdc4f30d3c7f9e0ca493870073e983 = $this->env->getExtension("native_profiler");
        $__internal_f62fc6f25fe90da9b5bd319fe51e3f1f45cdc4f30d3c7f9e0ca493870073e983->enter($__internal_f62fc6f25fe90da9b5bd319fe51e3f1f45cdc4f30d3c7f9e0ca493870073e983_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f62fc6f25fe90da9b5bd319fe51e3f1f45cdc4f30d3c7f9e0ca493870073e983->leave($__internal_f62fc6f25fe90da9b5bd319fe51e3f1f45cdc4f30d3c7f9e0ca493870073e983_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_10d4ecf5c3fc3dadc511aab0d490b8319af411c60cd97307c75aeacf791bf87a = $this->env->getExtension("native_profiler");
        $__internal_10d4ecf5c3fc3dadc511aab0d490b8319af411c60cd97307c75aeacf791bf87a->enter($__internal_10d4ecf5c3fc3dadc511aab0d490b8319af411c60cd97307c75aeacf791bf87a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_10d4ecf5c3fc3dadc511aab0d490b8319af411c60cd97307c75aeacf791bf87a->leave($__internal_10d4ecf5c3fc3dadc511aab0d490b8319af411c60cd97307c75aeacf791bf87a_prof);

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
