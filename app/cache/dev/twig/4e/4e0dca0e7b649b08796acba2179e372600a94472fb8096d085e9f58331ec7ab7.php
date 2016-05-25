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
        $__internal_9928d77be026e0d601e1d6696c0005f1ca126fdcfa0a861b40f78bc8844adaab = $this->env->getExtension("native_profiler");
        $__internal_9928d77be026e0d601e1d6696c0005f1ca126fdcfa0a861b40f78bc8844adaab->enter($__internal_9928d77be026e0d601e1d6696c0005f1ca126fdcfa0a861b40f78bc8844adaab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9928d77be026e0d601e1d6696c0005f1ca126fdcfa0a861b40f78bc8844adaab->leave($__internal_9928d77be026e0d601e1d6696c0005f1ca126fdcfa0a861b40f78bc8844adaab_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ea2736c2049d0eb96cff43786c9f9836fbdef94549821135c05a8c8bac661741 = $this->env->getExtension("native_profiler");
        $__internal_ea2736c2049d0eb96cff43786c9f9836fbdef94549821135c05a8c8bac661741->enter($__internal_ea2736c2049d0eb96cff43786c9f9836fbdef94549821135c05a8c8bac661741_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ea2736c2049d0eb96cff43786c9f9836fbdef94549821135c05a8c8bac661741->leave($__internal_ea2736c2049d0eb96cff43786c9f9836fbdef94549821135c05a8c8bac661741_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d97cf0bc981f25e84895712da4e3d81ec63800ac1d48dcabd1990a08b0418237 = $this->env->getExtension("native_profiler");
        $__internal_d97cf0bc981f25e84895712da4e3d81ec63800ac1d48dcabd1990a08b0418237->enter($__internal_d97cf0bc981f25e84895712da4e3d81ec63800ac1d48dcabd1990a08b0418237_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d97cf0bc981f25e84895712da4e3d81ec63800ac1d48dcabd1990a08b0418237->leave($__internal_d97cf0bc981f25e84895712da4e3d81ec63800ac1d48dcabd1990a08b0418237_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_3e075c8a2ffdb94c9cca677d091a709259c977b343e24c67f659e919736b3eff = $this->env->getExtension("native_profiler");
        $__internal_3e075c8a2ffdb94c9cca677d091a709259c977b343e24c67f659e919736b3eff->enter($__internal_3e075c8a2ffdb94c9cca677d091a709259c977b343e24c67f659e919736b3eff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_3e075c8a2ffdb94c9cca677d091a709259c977b343e24c67f659e919736b3eff->leave($__internal_3e075c8a2ffdb94c9cca677d091a709259c977b343e24c67f659e919736b3eff_prof);

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
