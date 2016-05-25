<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_fef8729ac73d5ab2439ae14058d79337a0648bcee40ef774e335ae4e9d7c77e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a15c929372bd8de8d0adfff2d2fbb5927d3f9cca88f2e0064c7004d5dddc9036 = $this->env->getExtension("native_profiler");
        $__internal_a15c929372bd8de8d0adfff2d2fbb5927d3f9cca88f2e0064c7004d5dddc9036->enter($__internal_a15c929372bd8de8d0adfff2d2fbb5927d3f9cca88f2e0064c7004d5dddc9036_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a15c929372bd8de8d0adfff2d2fbb5927d3f9cca88f2e0064c7004d5dddc9036->leave($__internal_a15c929372bd8de8d0adfff2d2fbb5927d3f9cca88f2e0064c7004d5dddc9036_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_913af8bffcb8641a3ec4fc37111dfdea9e0dab2f28d5c227acb8410723a882a8 = $this->env->getExtension("native_profiler");
        $__internal_913af8bffcb8641a3ec4fc37111dfdea9e0dab2f28d5c227acb8410723a882a8->enter($__internal_913af8bffcb8641a3ec4fc37111dfdea9e0dab2f28d5c227acb8410723a882a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "
    <style>
        body{
            background-image: url(\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/img/boxed-bg2.png"), "html", null, true);
        echo "\")!important;
        }

    </style>
";
        
        $__internal_913af8bffcb8641a3ec4fc37111dfdea9e0dab2f28d5c227acb8410723a882a8->leave($__internal_913af8bffcb8641a3ec4fc37111dfdea9e0dab2f28d5c227acb8410723a882a8_prof);

    }

    // line 15
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e3cfcaa429c71953516ee4ca48fa2aa2e2e5c6b42272a17108cb0da361928a9e = $this->env->getExtension("native_profiler");
        $__internal_e3cfcaa429c71953516ee4ca48fa2aa2e2e5c6b42272a17108cb0da361928a9e->enter($__internal_e3cfcaa429c71953516ee4ca48fa2aa2e2e5c6b42272a17108cb0da361928a9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 16
        echo "
<div class=\"login-box\">
    <div class=\"login-logo\">
        <a href=\"#\"><b>Person</b>Task</a>
    </div><!-- /.login-logo -->
    <div class=\"login-box-body\">
        <p class=\"login-box-msg\">Sign in to start your session</p>
        <form action=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
            <div class=\"form-group has-feedback\">
                <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" class=\"form-control\" placeholder=\"Email\" required=\"required\" />
                <span class=\"glyphicon glyphicon-envelope form-control-feedback\"></span>
            </div>
            <div class=\"form-group has-feedback\">
                <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" class=\"form-control\" placeholder=\"Password\" />
                <span class=\"glyphicon glyphicon-lock form-control-feedback\"></span>
            </div>
            <div class=\"row\">
                <div class=\"col-xs-8\">
                    <div class=\"checkbox icheck\">
                        <label>
                            <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" /> Remember Me
                        </label>
                    </div>
                </div><!-- /.col -->
                <div class=\"col-xs-4\">
                    <button type=\"submit\"  id=\"_submit\" name=\"_submit\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" class=\"btn btn-primary btn-block btn-flat\">Sign In</button>
                </div><!-- /.col -->
            </div>
        </form>

        <div class=\"social-auth-links text-center\">
            <p>- OR -</p>
            <a href=\"https://www.facebook.com\" class=\"btn btn-block btn-social btn-facebook btn-flat\"><i class=\"fa fa-facebook\"></i> Sign in using Facebook</a>
            <a href=\"#\" class=\"btn btn-block btn-social btn-google btn-flat\"><i class=\"fa fa-google-plus\"></i> Sign in using Google+</a>
        </div><!-- /.social-auth-links -->

        <a href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_request");
        echo "\">I forgot my password</a><br>
        <a href=\"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" class=\"text-center\">Register a new membership</a>

    </div><!-- /.login-box-body -->
</div><!-- /.login-box -->


";
        
        $__internal_e3cfcaa429c71953516ee4ca48fa2aa2e2e5c6b42272a17108cb0da361928a9e->leave($__internal_e3cfcaa429c71953516ee4ca48fa2aa2e2e5c6b42272a17108cb0da361928a9e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 54,  115 => 53,  101 => 42,  82 => 26,  77 => 24,  73 => 23,  64 => 16,  58 => 15,  46 => 6,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* {% block stylesheets %}*/
/* */
/*     <style>*/
/*         body{*/
/*             background-image: url("{{ asset("assets/img/boxed-bg2.png") }}")!important;*/
/*         }*/
/* */
/*     </style>*/
/* {% endblock stylesheets %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* */
/* {% block fos_user_content %}*/
/* */
/* <div class="login-box">*/
/*     <div class="login-logo">*/
/*         <a href="#"><b>Person</b>Task</a>*/
/*     </div><!-- /.login-logo -->*/
/*     <div class="login-box-body">*/
/*         <p class="login-box-msg">Sign in to start your session</p>*/
/*         <form action="{{ path("fos_user_security_check") }}" method="post">*/
/*             <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/*             <div class="form-group has-feedback">*/
/*                 <input type="text" id="username" name="_username" value="{{ last_username }}" class="form-control" placeholder="Email" required="required" />*/
/*                 <span class="glyphicon glyphicon-envelope form-control-feedback"></span>*/
/*             </div>*/
/*             <div class="form-group has-feedback">*/
/*                 <input type="password" id="password" name="_password" required="required" class="form-control" placeholder="Password" />*/
/*                 <span class="glyphicon glyphicon-lock form-control-feedback"></span>*/
/*             </div>*/
/*             <div class="row">*/
/*                 <div class="col-xs-8">*/
/*                     <div class="checkbox icheck">*/
/*                         <label>*/
/*                             <input type="checkbox" id="remember_me" name="_remember_me" value="on" /> Remember Me*/
/*                         </label>*/
/*                     </div>*/
/*                 </div><!-- /.col -->*/
/*                 <div class="col-xs-4">*/
/*                     <button type="submit"  id="_submit" name="_submit" value="{{ 'security.login.submit'|trans }}" class="btn btn-primary btn-block btn-flat">Sign In</button>*/
/*                 </div><!-- /.col -->*/
/*             </div>*/
/*         </form>*/
/* */
/*         <div class="social-auth-links text-center">*/
/*             <p>- OR -</p>*/
/*             <a href="https://www.facebook.com" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using Facebook</a>*/
/*             <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using Google+</a>*/
/*         </div><!-- /.social-auth-links -->*/
/* */
/*         <a href="{{ path("fos_user_resetting_request") }}">I forgot my password</a><br>*/
/*         <a href="{{ path('fos_user_registration_register') }}" class="text-center">Register a new membership</a>*/
/* */
/*     </div><!-- /.login-box-body -->*/
/* </div><!-- /.login-box -->*/
/* */
/* */
/* {% endblock fos_user_content %}*/
/* */
/* */
/* */
/* */
/* */
