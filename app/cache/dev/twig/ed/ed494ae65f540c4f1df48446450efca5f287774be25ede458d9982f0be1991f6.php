<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_4184a3f46f2eafd39bc77726345513dcd30d4d0aaa44b0fbc0a250045acb7d0c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b87acb22716697634eaae205e8f5dd4e81a1678538c8a22b37e8de17079b21cb = $this->env->getExtension("native_profiler");
        $__internal_b87acb22716697634eaae205e8f5dd4e81a1678538c8a22b37e8de17079b21cb->enter($__internal_b87acb22716697634eaae205e8f5dd4e81a1678538c8a22b37e8de17079b21cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        // line 2
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "<div class=\"register-box\">
    <div class=\"register-logo\">
        <a href=\"#\"><b>Person</b>Task</a>
    </div>
    <div class=\"register-box-body\">
        <p class=\"login-box-msg\">Register a new membership</p>
        ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('routing')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "
            <div class=\"form-group has-feedback\">
                ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Full name")));
        echo "
                <span class=\"glyphicon glyphicon-user form-control-feedback\"></span>
            </div>
            <div class=\"form-group has-feedback\">
                ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Email")));
        echo "
                <span class=\"glyphicon glyphicon-envelope form-control-feedback\"></span>
            </div>
            <div class=\"form-group has-feedback\">
                ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Password")));
        echo "
                <span class=\"glyphicon glyphicon-lock form-control-feedback\"></span>
            </div>
            <div class=\"form-group has-feedback\">
                ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Retype password")));
        echo "
                <span class=\"glyphicon glyphicon-log-in form-control-feedback\"></span>
            </div>
            <div class=\"row\">
                <div class=\"col-xs-8\">
                    <div class=\"checkbox icheck\">
                        <label>
                            <input type=\"checkbox\"> I agree to the <a href=\"#\">terms</a>
                        </label>
                    </div>
                </div><!-- /.col -->
                <div class=\"col-xs-4\">
                    <button type=\"submit\" class=\"btn btn-primary btn-block btn-flat\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\">Register</button>
                </div><!-- /.col -->
            </div>
        ";
        // line 45
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

        <div class=\"social-auth-links text-center\">
            <p>- OR -</p>
            <a href=\"#\" class=\"btn btn-block btn-social btn-facebook btn-flat\"><i class=\"fa fa-facebook\"></i> Sign up using Facebook</a>
            <a href=\"#\" class=\"btn btn-block btn-social btn-google btn-flat\"><i class=\"fa fa-google-plus\"></i> Sign up using Google+</a>
        </div>

        <a href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\" class=\"text-center\">I already have a membership</a>
    </div>
    </div>

";
        
        $__internal_b87acb22716697634eaae205e8f5dd4e81a1678538c8a22b37e8de17079b21cb->leave($__internal_b87acb22716697634eaae205e8f5dd4e81a1678538c8a22b37e8de17079b21cb_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c729020e5cfd4084caa855afe0a5d2c9eaab9f6a3ce9c24635b86f6898a8f180 = $this->env->getExtension("native_profiler");
        $__internal_c729020e5cfd4084caa855afe0a5d2c9eaab9f6a3ce9c24635b86f6898a8f180->enter($__internal_c729020e5cfd4084caa855afe0a5d2c9eaab9f6a3ce9c24635b86f6898a8f180_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "
    <style>
        .register-box{
            margin-top: 10px;
        }
    </style>
";
        
        $__internal_c729020e5cfd4084caa855afe0a5d2c9eaab9f6a3ce9c24635b86f6898a8f180->leave($__internal_c729020e5cfd4084caa855afe0a5d2c9eaab9f6a3ce9c24635b86f6898a8f180_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 3,  103 => 2,  91 => 53,  80 => 45,  74 => 42,  59 => 30,  52 => 26,  45 => 22,  38 => 18,  33 => 16,  25 => 10,  23 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block stylesheets %}*/
/* */
/*     <style>*/
/*         .register-box{*/
/*             margin-top: 10px;*/
/*         }*/
/*     </style>*/
/* {% endblock stylesheets %}*/
/* <div class="register-box">*/
/*     <div class="register-logo">*/
/*         <a href="#"><b>Person</b>Task</a>*/
/*     </div>*/
/*     <div class="register-box-body">*/
/*         <p class="login-box-msg">Register a new membership</p>*/
/*         {{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}*/
/*             <div class="form-group has-feedback">*/
/*                 {{ form_widget(form.username, { 'attr': {'class': 'form-control','placeholder':"Full name"} }) }}*/
/*                 <span class="glyphicon glyphicon-user form-control-feedback"></span>*/
/*             </div>*/
/*             <div class="form-group has-feedback">*/
/*                 {{ form_widget(form.email, { 'attr': {'class': 'form-control','placeholder':"Email"} }) }}*/
/*                 <span class="glyphicon glyphicon-envelope form-control-feedback"></span>*/
/*             </div>*/
/*             <div class="form-group has-feedback">*/
/*                 {{ form_widget(form.plainPassword.first, { 'attr': {'class': 'form-control','placeholder':"Password"} }) }}*/
/*                 <span class="glyphicon glyphicon-lock form-control-feedback"></span>*/
/*             </div>*/
/*             <div class="form-group has-feedback">*/
/*                 {{ form_widget(form.plainPassword.second, { 'attr': {'class': 'form-control','placeholder':"Retype password"} }) }}*/
/*                 <span class="glyphicon glyphicon-log-in form-control-feedback"></span>*/
/*             </div>*/
/*             <div class="row">*/
/*                 <div class="col-xs-8">*/
/*                     <div class="checkbox icheck">*/
/*                         <label>*/
/*                             <input type="checkbox"> I agree to the <a href="#">terms</a>*/
/*                         </label>*/
/*                     </div>*/
/*                 </div><!-- /.col -->*/
/*                 <div class="col-xs-4">*/
/*                     <button type="submit" class="btn btn-primary btn-block btn-flat" value="{{ 'registration.submit'|trans }}">Register</button>*/
/*                 </div><!-- /.col -->*/
/*             </div>*/
/*         {{ form_end(form) }}*/
/* */
/*         <div class="social-auth-links text-center">*/
/*             <p>- OR -</p>*/
/*             <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign up using Facebook</a>*/
/*             <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign up using Google+</a>*/
/*         </div>*/
/* */
/*         <a href="{{ path('fos_user_security_login') }}" class="text-center">I already have a membership</a>*/
/*     </div>*/
/*     </div>*/
/* */
/* */
