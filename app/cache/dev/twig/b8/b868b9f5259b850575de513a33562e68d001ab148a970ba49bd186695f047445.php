<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_a1b1faded908c8cec04126bbb81150819b9fb4ad448c6191af6c6f594843b598 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_248e9d3f8f52182cce7b62e8b73a8f7a69d67ca2645cd5f9863f5576f8f248c6 = $this->env->getExtension("native_profiler");
        $__internal_248e9d3f8f52182cce7b62e8b73a8f7a69d67ca2645cd5f9863f5576f8f248c6->enter($__internal_248e9d3f8f52182cce7b62e8b73a8f7a69d67ca2645cd5f9863f5576f8f248c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_248e9d3f8f52182cce7b62e8b73a8f7a69d67ca2645cd5f9863f5576f8f248c6->leave($__internal_248e9d3f8f52182cce7b62e8b73a8f7a69d67ca2645cd5f9863f5576f8f248c6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ed17e16ab8fbd45cc053204f8973abf2f4854beb8e155cd012254efedf05bd48 = $this->env->getExtension("native_profiler");
        $__internal_ed17e16ab8fbd45cc053204f8973abf2f4854beb8e155cd012254efedf05bd48->enter($__internal_ed17e16ab8fbd45cc053204f8973abf2f4854beb8e155cd012254efedf05bd48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_ed17e16ab8fbd45cc053204f8973abf2f4854beb8e155cd012254efedf05bd48->leave($__internal_ed17e16ab8fbd45cc053204f8973abf2f4854beb8e155cd012254efedf05bd48_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
