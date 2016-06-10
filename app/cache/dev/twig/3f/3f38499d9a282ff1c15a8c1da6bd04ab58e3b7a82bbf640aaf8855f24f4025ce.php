<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_e3d107f5f6dd8a59eb215dd83184867b869febe184d158e355f3a6f8730b2ca3 extends Twig_Template
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
        $__internal_924955f6a900872265025f5a4bfbe61f809a7f5c16ab25e2f4898959a165de22 = $this->env->getExtension("native_profiler");
        $__internal_924955f6a900872265025f5a4bfbe61f809a7f5c16ab25e2f4898959a165de22->enter($__internal_924955f6a900872265025f5a4bfbe61f809a7f5c16ab25e2f4898959a165de22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_924955f6a900872265025f5a4bfbe61f809a7f5c16ab25e2f4898959a165de22->leave($__internal_924955f6a900872265025f5a4bfbe61f809a7f5c16ab25e2f4898959a165de22_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_193f3a1986b691e4ca7625d8afd481c64f0eae0bd79468efdfd022d801598355 = $this->env->getExtension("native_profiler");
        $__internal_193f3a1986b691e4ca7625d8afd481c64f0eae0bd79468efdfd022d801598355->enter($__internal_193f3a1986b691e4ca7625d8afd481c64f0eae0bd79468efdfd022d801598355_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_193f3a1986b691e4ca7625d8afd481c64f0eae0bd79468efdfd022d801598355->leave($__internal_193f3a1986b691e4ca7625d8afd481c64f0eae0bd79468efdfd022d801598355_prof);

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
