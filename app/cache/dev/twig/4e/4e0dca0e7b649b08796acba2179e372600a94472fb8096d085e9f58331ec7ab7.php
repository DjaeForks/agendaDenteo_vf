<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_615b2b2b0ed449a801ea9f1c448b569f56d7611b678044cfab66b859a1ae3952 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c14fb40cb15f8217201f959b53593c61de3e6b048e87b17088685fd6bfe09354 = $this->env->getExtension("native_profiler");
        $__internal_c14fb40cb15f8217201f959b53593c61de3e6b048e87b17088685fd6bfe09354->enter($__internal_c14fb40cb15f8217201f959b53593c61de3e6b048e87b17088685fd6bfe09354_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c14fb40cb15f8217201f959b53593c61de3e6b048e87b17088685fd6bfe09354->leave($__internal_c14fb40cb15f8217201f959b53593c61de3e6b048e87b17088685fd6bfe09354_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_dfe7d781b6dcf1da85d79d2084c448f1f1fcb9aa331a4609b0aea0fe1b9a3d26 = $this->env->getExtension("native_profiler");
        $__internal_dfe7d781b6dcf1da85d79d2084c448f1f1fcb9aa331a4609b0aea0fe1b9a3d26->enter($__internal_dfe7d781b6dcf1da85d79d2084c448f1f1fcb9aa331a4609b0aea0fe1b9a3d26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_dfe7d781b6dcf1da85d79d2084c448f1f1fcb9aa331a4609b0aea0fe1b9a3d26->leave($__internal_dfe7d781b6dcf1da85d79d2084c448f1f1fcb9aa331a4609b0aea0fe1b9a3d26_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f90a2a18b17dcc73665d69766585d8555b50b72a491d2f2c895dce28efa5cd4c = $this->env->getExtension("native_profiler");
        $__internal_f90a2a18b17dcc73665d69766585d8555b50b72a491d2f2c895dce28efa5cd4c->enter($__internal_f90a2a18b17dcc73665d69766585d8555b50b72a491d2f2c895dce28efa5cd4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f90a2a18b17dcc73665d69766585d8555b50b72a491d2f2c895dce28efa5cd4c->leave($__internal_f90a2a18b17dcc73665d69766585d8555b50b72a491d2f2c895dce28efa5cd4c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_1d15ec240c7b6f4804a3794c982b17b369d62ab1ad9e2a52eaecf5b82c753d63 = $this->env->getExtension("native_profiler");
        $__internal_1d15ec240c7b6f4804a3794c982b17b369d62ab1ad9e2a52eaecf5b82c753d63->enter($__internal_1d15ec240c7b6f4804a3794c982b17b369d62ab1ad9e2a52eaecf5b82c753d63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_1d15ec240c7b6f4804a3794c982b17b369d62ab1ad9e2a52eaecf5b82c753d63->leave($__internal_1d15ec240c7b6f4804a3794c982b17b369d62ab1ad9e2a52eaecf5b82c753d63_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
