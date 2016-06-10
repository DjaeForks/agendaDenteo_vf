<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_f11a02d4181db1663cc39fc08ad75e1096cf8d15c951a8a69ef1a3bee7e1a961 extends Twig_Template
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
        $__internal_c349e7ef56e57b4c4ac855ad071d7c4917b3636f6c0316043282c884d1f6c225 = $this->env->getExtension("native_profiler");
        $__internal_c349e7ef56e57b4c4ac855ad071d7c4917b3636f6c0316043282c884d1f6c225->enter($__internal_c349e7ef56e57b4c4ac855ad071d7c4917b3636f6c0316043282c884d1f6c225_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c349e7ef56e57b4c4ac855ad071d7c4917b3636f6c0316043282c884d1f6c225->leave($__internal_c349e7ef56e57b4c4ac855ad071d7c4917b3636f6c0316043282c884d1f6c225_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_44a4e09af754117e0febf594a6634c810111f27c09c715cc5e26d61c0941d069 = $this->env->getExtension("native_profiler");
        $__internal_44a4e09af754117e0febf594a6634c810111f27c09c715cc5e26d61c0941d069->enter($__internal_44a4e09af754117e0febf594a6634c810111f27c09c715cc5e26d61c0941d069_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_44a4e09af754117e0febf594a6634c810111f27c09c715cc5e26d61c0941d069->leave($__internal_44a4e09af754117e0febf594a6634c810111f27c09c715cc5e26d61c0941d069_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_eb46d6b595fad5adf84aac9eb45fe5a71b8ebfed7edacda7ba0174c0610d6d12 = $this->env->getExtension("native_profiler");
        $__internal_eb46d6b595fad5adf84aac9eb45fe5a71b8ebfed7edacda7ba0174c0610d6d12->enter($__internal_eb46d6b595fad5adf84aac9eb45fe5a71b8ebfed7edacda7ba0174c0610d6d12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_eb46d6b595fad5adf84aac9eb45fe5a71b8ebfed7edacda7ba0174c0610d6d12->leave($__internal_eb46d6b595fad5adf84aac9eb45fe5a71b8ebfed7edacda7ba0174c0610d6d12_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9a0efa6346c07d11071bd9cd168a2135ad25d694fdd1143fbc63a9619b40d594 = $this->env->getExtension("native_profiler");
        $__internal_9a0efa6346c07d11071bd9cd168a2135ad25d694fdd1143fbc63a9619b40d594->enter($__internal_9a0efa6346c07d11071bd9cd168a2135ad25d694fdd1143fbc63a9619b40d594_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_9a0efa6346c07d11071bd9cd168a2135ad25d694fdd1143fbc63a9619b40d594->leave($__internal_9a0efa6346c07d11071bd9cd168a2135ad25d694fdd1143fbc63a9619b40d594_prof);

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
