<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_753b07a369b7deb60eacd2974d6061d68b8834c54952849f12ade71f08dbb54c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_f47a3f4b1b791f5b996712581993c65264710cc99fd1db64789b59684ec6fcc7 = $this->env->getExtension("native_profiler");
        $__internal_f47a3f4b1b791f5b996712581993c65264710cc99fd1db64789b59684ec6fcc7->enter($__internal_f47a3f4b1b791f5b996712581993c65264710cc99fd1db64789b59684ec6fcc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f47a3f4b1b791f5b996712581993c65264710cc99fd1db64789b59684ec6fcc7->leave($__internal_f47a3f4b1b791f5b996712581993c65264710cc99fd1db64789b59684ec6fcc7_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_603f091772f93913d5c7ccc8b1b3207d4da20c6584d1521d5a380f4cec92e749 = $this->env->getExtension("native_profiler");
        $__internal_603f091772f93913d5c7ccc8b1b3207d4da20c6584d1521d5a380f4cec92e749->enter($__internal_603f091772f93913d5c7ccc8b1b3207d4da20c6584d1521d5a380f4cec92e749_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_603f091772f93913d5c7ccc8b1b3207d4da20c6584d1521d5a380f4cec92e749->leave($__internal_603f091772f93913d5c7ccc8b1b3207d4da20c6584d1521d5a380f4cec92e749_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>*/
/*     {% if targetUrl %}*/
/*     <p><a href="{{ targetUrl }}">{{ 'registration.back'|trans }}</a></p>*/
/*     {% endif %}*/
/* {% endblock fos_user_content %}*/
/* */
