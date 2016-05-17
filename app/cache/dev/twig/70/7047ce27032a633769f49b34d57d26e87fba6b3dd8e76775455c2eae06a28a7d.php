<?php

/* EventBundle:Default:event.html.twig */
class __TwigTemplate_c3ef3d5460832331d6187cc9425a7a916b02b8b2786f6e6d6c8cbbe00ca40173 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "EventBundle:Default:event.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_27ac569893a0461ca37c75a9818a4b6f63c9342c4775df5145a8f4fd9b66a37a = $this->env->getExtension("native_profiler");
        $__internal_27ac569893a0461ca37c75a9818a4b6f63c9342c4775df5145a8f4fd9b66a37a->enter($__internal_27ac569893a0461ca37c75a9818a4b6f63c9342c4775df5145a8f4fd9b66a37a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EventBundle:Default:event.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27ac569893a0461ca37c75a9818a4b6f63c9342c4775df5145a8f4fd9b66a37a->leave($__internal_27ac569893a0461ca37c75a9818a4b6f63c9342c4775df5145a8f4fd9b66a37a_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_accc6db72180b97e02612ee906b3f0d63138ee6fb781e789b4bf827e3b7ada67 = $this->env->getExtension("native_profiler");
        $__internal_accc6db72180b97e02612ee906b3f0d63138ee6fb781e789b4bf827e3b7ada67->enter($__internal_accc6db72180b97e02612ee906b3f0d63138ee6fb781e789b4bf827e3b7ada67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
        <h1>
            Calendar
            <small>Add Events</small>
        </h1>
        <ol class=\"breadcrumb\">
            <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i> Home</a></li>
            <li><a href=\"#\">Layout</a></li>
            <li class=\"active\">Fixed</li>
        </ol>
    </section>
";
        
        $__internal_accc6db72180b97e02612ee906b3f0d63138ee6fb781e789b4bf827e3b7ada67->leave($__internal_accc6db72180b97e02612ee906b3f0d63138ee6fb781e789b4bf827e3b7ada67_prof);

    }

    public function getTemplateName()
    {
        return "EventBundle:Default:event.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends '::layout.html.twig' %}*/
/* {% block content %}*/
/*     <!-- Content Header (Page header) -->*/
/*     <section class="content-header">*/
/*         <h1>*/
/*             Calendar*/
/*             <small>Add Events</small>*/
/*         </h1>*/
/*         <ol class="breadcrumb">*/
/*             <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>*/
/*             <li><a href="#">Layout</a></li>*/
/*             <li class="active">Fixed</li>*/
/*         </ol>*/
/*     </section>*/
/* {% endblock %}*/
