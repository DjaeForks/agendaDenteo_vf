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
        $__internal_8ab321073b2990ccdd33f134fb60892b1aa56b3d4856ab8f20002f43fa2035e5 = $this->env->getExtension("native_profiler");
        $__internal_8ab321073b2990ccdd33f134fb60892b1aa56b3d4856ab8f20002f43fa2035e5->enter($__internal_8ab321073b2990ccdd33f134fb60892b1aa56b3d4856ab8f20002f43fa2035e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ab321073b2990ccdd33f134fb60892b1aa56b3d4856ab8f20002f43fa2035e5->leave($__internal_8ab321073b2990ccdd33f134fb60892b1aa56b3d4856ab8f20002f43fa2035e5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_da64e975df5dd8fe02ee3d73bc70cb2edc67cffd25454d461f2cea97e37fae26 = $this->env->getExtension("native_profiler");
        $__internal_da64e975df5dd8fe02ee3d73bc70cb2edc67cffd25454d461f2cea97e37fae26->enter($__internal_da64e975df5dd8fe02ee3d73bc70cb2edc67cffd25454d461f2cea97e37fae26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_da64e975df5dd8fe02ee3d73bc70cb2edc67cffd25454d461f2cea97e37fae26->leave($__internal_da64e975df5dd8fe02ee3d73bc70cb2edc67cffd25454d461f2cea97e37fae26_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_49c6d579668f0eeb26d74317ac5b56f83cf60d422b1c5ba11ea93ee6c7ff5c95 = $this->env->getExtension("native_profiler");
        $__internal_49c6d579668f0eeb26d74317ac5b56f83cf60d422b1c5ba11ea93ee6c7ff5c95->enter($__internal_49c6d579668f0eeb26d74317ac5b56f83cf60d422b1c5ba11ea93ee6c7ff5c95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_49c6d579668f0eeb26d74317ac5b56f83cf60d422b1c5ba11ea93ee6c7ff5c95->leave($__internal_49c6d579668f0eeb26d74317ac5b56f83cf60d422b1c5ba11ea93ee6c7ff5c95_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9cdefac8346cba09d7e75175c86b858ec622ff6e0bdaebff10127e58d2d5c8cc = $this->env->getExtension("native_profiler");
        $__internal_9cdefac8346cba09d7e75175c86b858ec622ff6e0bdaebff10127e58d2d5c8cc->enter($__internal_9cdefac8346cba09d7e75175c86b858ec622ff6e0bdaebff10127e58d2d5c8cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9cdefac8346cba09d7e75175c86b858ec622ff6e0bdaebff10127e58d2d5c8cc->leave($__internal_9cdefac8346cba09d7e75175c86b858ec622ff6e0bdaebff10127e58d2d5c8cc_prof);

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
