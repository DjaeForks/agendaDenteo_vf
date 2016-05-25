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
        $__internal_24aea6145e68d69b918286f46e2500a209d231867fe7eda46a22f57b6d0d3f8f = $this->env->getExtension("native_profiler");
        $__internal_24aea6145e68d69b918286f46e2500a209d231867fe7eda46a22f57b6d0d3f8f->enter($__internal_24aea6145e68d69b918286f46e2500a209d231867fe7eda46a22f57b6d0d3f8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24aea6145e68d69b918286f46e2500a209d231867fe7eda46a22f57b6d0d3f8f->leave($__internal_24aea6145e68d69b918286f46e2500a209d231867fe7eda46a22f57b6d0d3f8f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fdcf6e69f0f87a94079e96c3fad4c690ffb522c4200927498d4c56cb72072680 = $this->env->getExtension("native_profiler");
        $__internal_fdcf6e69f0f87a94079e96c3fad4c690ffb522c4200927498d4c56cb72072680->enter($__internal_fdcf6e69f0f87a94079e96c3fad4c690ffb522c4200927498d4c56cb72072680_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_fdcf6e69f0f87a94079e96c3fad4c690ffb522c4200927498d4c56cb72072680->leave($__internal_fdcf6e69f0f87a94079e96c3fad4c690ffb522c4200927498d4c56cb72072680_prof);

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
