<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_709fc01ea65c8dae28063afe5ddc6b0c12138e3c5034bdad03b841846d646344 extends Twig_Template
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
        $__internal_e0d15aa13c361b966a7e15c7d7021bfc0b62a50a51d05ab0a5973eb8351d4005 = $this->env->getExtension("native_profiler");
        $__internal_e0d15aa13c361b966a7e15c7d7021bfc0b62a50a51d05ab0a5973eb8351d4005->enter($__internal_e0d15aa13c361b966a7e15c7d7021bfc0b62a50a51d05ab0a5973eb8351d4005_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e0d15aa13c361b966a7e15c7d7021bfc0b62a50a51d05ab0a5973eb8351d4005->leave($__internal_e0d15aa13c361b966a7e15c7d7021bfc0b62a50a51d05ab0a5973eb8351d4005_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8aedcbdf0d2819b22206c5f709a92b7b68db42872fa7c55b10213155353be3e1 = $this->env->getExtension("native_profiler");
        $__internal_8aedcbdf0d2819b22206c5f709a92b7b68db42872fa7c55b10213155353be3e1->enter($__internal_8aedcbdf0d2819b22206c5f709a92b7b68db42872fa7c55b10213155353be3e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_8aedcbdf0d2819b22206c5f709a92b7b68db42872fa7c55b10213155353be3e1->leave($__internal_8aedcbdf0d2819b22206c5f709a92b7b68db42872fa7c55b10213155353be3e1_prof);

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
