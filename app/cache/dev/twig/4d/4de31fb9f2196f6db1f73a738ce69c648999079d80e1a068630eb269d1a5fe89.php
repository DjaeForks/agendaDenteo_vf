<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_8b897b2a051abe6b6f77acca93ce94cfb7a8dae11ea82c54989a2d4d5a009c8c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::login_base.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'login' => array($this, 'block_login'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::login_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5b90a88951d149d858ce7a43b3a37c1a34d6af78fa24f7e7c518fc7bca09d593 = $this->env->getExtension("native_profiler");
        $__internal_5b90a88951d149d858ce7a43b3a37c1a34d6af78fa24f7e7c518fc7bca09d593->enter($__internal_5b90a88951d149d858ce7a43b3a37c1a34d6af78fa24f7e7c518fc7bca09d593_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b90a88951d149d858ce7a43b3a37c1a34d6af78fa24f7e7c518fc7bca09d593->leave($__internal_5b90a88951d149d858ce7a43b3a37c1a34d6af78fa24f7e7c518fc7bca09d593_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9b8a60fb23c8b97f5a59bf16711ba37912a28c4008ec16590df7caf1e17b7dad = $this->env->getExtension("native_profiler");
        $__internal_9b8a60fb23c8b97f5a59bf16711ba37912a28c4008ec16590df7caf1e17b7dad->enter($__internal_9b8a60fb23c8b97f5a59bf16711ba37912a28c4008ec16590df7caf1e17b7dad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_9b8a60fb23c8b97f5a59bf16711ba37912a28c4008ec16590df7caf1e17b7dad->leave($__internal_9b8a60fb23c8b97f5a59bf16711ba37912a28c4008ec16590df7caf1e17b7dad_prof);

    }

    // line 15
    public function block_login($context, array $blocks = array())
    {
        $__internal_b7cd26c6263a27c2af6922f7c3d0e9162515e8a15bc24e8cfb5b7e761cf155b4 = $this->env->getExtension("native_profiler");
        $__internal_b7cd26c6263a27c2af6922f7c3d0e9162515e8a15bc24e8cfb5b7e761cf155b4->enter($__internal_b7cd26c6263a27c2af6922f7c3d0e9162515e8a15bc24e8cfb5b7e761cf155b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "login"));

        // line 16
        echo "
    ";
        // line 60
        echo "


    <div class=\"login-wrapper \">
        <!-- START Login Background Pic Wrapper-->
        <div class=\"bg-pic\">
            <!-- START Background Pic-->
            <img src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assetsE/img/demo/5.jpg"), "html", null, true);
        echo "\" data-src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assetsE/img/demo/5.jpg"), "html", null, true);
        echo "\" data-src-retina=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/img/demo/5.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"lazy\">
            <!-- END Background Pic-->
            <!-- START Background Caption-->
            <div class=\"bg-caption pull-bottom sm-pull-bottom text-white p-l-20 m-b-20\">
                <div class=\"col-lg-2\">
                    <img src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assetsE/img/demo/logo_denteo.png"), "html", null, true);
        echo "\" style=\"height: 263px; width: 200px;margin-left: 16px;\" data-src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/img/demo/logo_denteo.png"), "html", null, true);
        echo "\" data-src-retina=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/img/demo/logo_denteo.png"), "html", null, true);
        echo "\" alt=\"\" class=\"\">
                </div>
                </br>
                <h2 class=\"semi-bold text-white\" style=\"margin-left: 37px;\">
                    DENTEO vous offre une meilleure gestion pour votre cabinet dentaire</h2>
            </div>
            <!-- END Background Caption-->
        </div>
        <!-- END Login Background Pic Wrapper-->
        <!-- START Login Right Container-->
        <div class=\"login-container bg-white\">
            <div class=\"p-l-50 m-l-20 p-r-50 m-r-20 p-t-50 m-t-30 sm-p-l-15 sm-p-r-15 sm-p-t-40\">
                <img src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assetsE/img/demo/logo_denteo.png"), "html", null, true);
        echo "\" alt=\"logo\" data-src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assetsE/img/demo/logo_denteo.png"), "html", null, true);
        echo "\" data-src-retina=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/img/demo/logo_denteo.png"), "html", null, true);
        echo "\" width=\"350\" height=\"109\">
                <p class=\"p-t-35\">Se connecter à Votre application</p>
                ";
        // line 86
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 87
            echo "                    <div style=\"color: red\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
                ";
        }
        // line 89
        echo "                <!-- START Login Form -->
                <form id=\"form-login\" class=\"p-t-15\" role=\"form\"  action=\"";
        // line 90
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">

                    <!-- START Form Control-->
                    <div class=\"form-group form-group-default input-group\">
                        <label>Nom d'utilisateur</label>
                        <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 95
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" class=\"form-control\" placeholder=\"Email\" required=\"required\" />
                        <span  class=\"input-group-addon\"><i class=\"fa fa-user\"></i></span>
                    </div>
                    <!-- END Form Control-->
                    <!-- START Form Control-->
                    <div class=\"form-group form-group-default input-group\">
                        <label>Mot de passe</label>
                        <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" class=\"form-control\" placeholder=\"Password\" />
                        <span class=\"input-group-addon\"><i class=\"fa fa-unlock-alt\"></i></span>
                    </div>
                    <!-- START Form Control-->
                    <div class=\"row\">
                        <div class=\"col-md-6 no-padding\">
                            <div class=\"checkbox check-warning\">
                                <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\">
                                <label for=\"remember_me\">Se souvenir de moi.</label>
                            </div>
                        </div>
                    </div>
                    <input type=\"hidden\" name=\"_csrf_token\" class=\"\" value=\"";
        // line 114
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
                    <!-- END Form Control-->
                    <button type=\"submit\"  id=\"_submit\" name=\"_submit\" value=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" class=\"btn btn-primary btn-cons m-t-10\" >Se Connecter</button>

                </form>
                <!--END Login Form-->
              ";
        // line 125
        echo "
                <a href=\"";
        // line 126
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_request");
        echo "\">Mot de passe oublié</a><br>
                <a href=\"";
        // line 127
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" class=\"text-center\">S'inscrire</a>

            </div>
        </div>
        <!-- END Login Right Container-->
    </div>

";
        
        $__internal_b7cd26c6263a27c2af6922f7c3d0e9162515e8a15bc24e8cfb5b7e761cf155b4->leave($__internal_b7cd26c6263a27c2af6922f7c3d0e9162515e8a15bc24e8cfb5b7e761cf155b4_prof);

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
        return array (  176 => 127,  172 => 126,  169 => 125,  162 => 116,  157 => 114,  135 => 95,  127 => 90,  124 => 89,  118 => 87,  116 => 86,  107 => 84,  88 => 72,  76 => 67,  67 => 60,  64 => 16,  58 => 15,  46 => 6,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends "::login_base.html.twig" %}*/
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
/* {% block login %}*/
/* */
/*     {#    <div class="login-box">*/
/*             <div class="login-logo">*/
/*                 <a href="#"><b>Person</b>Task</a>*/
/*             </div><!-- /.login-logo -->*/
/*             <div class="login-box-body">*/
/*                 <p class="login-box-msg">Sign in to start your session</p>*/
/*                 <form action="{{ path("fos_user_security_check") }}" method="post">*/
/*                     <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/*                     <div class="form-group has-feedback">*/
/*                         <input type="text" id="username" name="_username" value="{{ last_username }}" class="form-control" placeholder="Email" required="required" />*/
/*                         <span class="glyphicon glyphicon-envelope form-control-feedback"></span>*/
/*                     </div>*/
/*                     <div class="form-group has-feedback">*/
/*                         <input type="password" id="password" name="_password" required="required" class="form-control" placeholder="Password" />*/
/*                         <span class="glyphicon glyphicon-lock form-control-feedback"></span>*/
/*                     </div>*/
/*                     <div class="row">*/
/*                         <div class="col-xs-8">*/
/*                             <div class="checkbox icheck">*/
/*                                 <label>*/
/*                                     <input type="checkbox" id="remember_me" name="_remember_me" value="on" /> Remember Me*/
/*                                 </label>*/
/*                             </div>*/
/*                         </div><!-- /.col -->*/
/*                         <div class="col-xs-4">*/
/*                             <button type="submit"  id="_submit" name="_submit" value="{{ 'security.login.submit'|trans }}" class="btn btn-primary btn-block btn-flat">Sign In</button>*/
/*                         </div><!-- /.col -->*/
/*                     </div>*/
/*                 </form>*/
/*     */
/*                 <div class="social-auth-links text-center">*/
/*                     <p>- OR -</p>*/
/*                     <a href="https://www.facebook.com" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using Facebook</a>*/
/*                     <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using Google+</a>*/
/*                 </div><!-- /.social-auth-links -->*/
/*     */
/*                 <a href="{{ path("fos_user_resetting_request") }}">I forgot my password</a><br>*/
/*                 <a href="{{ path('fos_user_registration_register') }}" class="text-center">Register a new membership</a>*/
/*     */
/*             </div><!-- /.login-box-body -->*/
/*         </div><!-- /.login-box -->*/
/*     */
/*     #}*/
/* */
/* */
/* */
/*     <div class="login-wrapper ">*/
/*         <!-- START Login Background Pic Wrapper-->*/
/*         <div class="bg-pic">*/
/*             <!-- START Background Pic-->*/
/*             <img src="{{asset('assetsE/img/demo/5.jpg')}}" data-src="{{asset('assetsE/img/demo/5.jpg')}}" data-src-retina="{{asset('assets/img/demo/5.jpg')}}" alt="" class="lazy">*/
/*             <!-- END Background Pic-->*/
/*             <!-- START Background Caption-->*/
/*             <div class="bg-caption pull-bottom sm-pull-bottom text-white p-l-20 m-b-20">*/
/*                 <div class="col-lg-2">*/
/*                     <img src="{{asset('assetsE/img/demo/logo_denteo.png')}}" style="height: 263px; width: 200px;margin-left: 16px;" data-src="{{asset('assets/img/demo/logo_denteo.png')}}" data-src-retina="{{asset('assets/img/demo/logo_denteo.png')}}" alt="" class="">*/
/*                 </div>*/
/*                 </br>*/
/*                 <h2 class="semi-bold text-white" style="margin-left: 37px;">*/
/*                     DENTEO vous offre une meilleure gestion pour votre cabinet dentaire</h2>*/
/*             </div>*/
/*             <!-- END Background Caption-->*/
/*         </div>*/
/*         <!-- END Login Background Pic Wrapper-->*/
/*         <!-- START Login Right Container-->*/
/*         <div class="login-container bg-white">*/
/*             <div class="p-l-50 m-l-20 p-r-50 m-r-20 p-t-50 m-t-30 sm-p-l-15 sm-p-r-15 sm-p-t-40">*/
/*                 <img src="{{asset('assetsE/img/demo/logo_denteo.png')}}" alt="logo" data-src="{{asset('assetsE/img/demo/logo_denteo.png')}}" data-src-retina="{{asset('assets/img/demo/logo_denteo.png')}}" width="350" height="109">*/
/*                 <p class="p-t-35">Se connecter à Votre application</p>*/
/*                 {% if error %}*/
/*                     <div style="color: red">{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/*                 {% endif %}*/
/*                 <!-- START Login Form -->*/
/*                 <form id="form-login" class="p-t-15" role="form"  action="{{ path("fos_user_security_check") }}" method="post">*/
/* */
/*                     <!-- START Form Control-->*/
/*                     <div class="form-group form-group-default input-group">*/
/*                         <label>Nom d'utilisateur</label>*/
/*                         <input type="text" id="username" name="_username" value="{{ last_username }}" class="form-control" placeholder="Email" required="required" />*/
/*                         <span  class="input-group-addon"><i class="fa fa-user"></i></span>*/
/*                     </div>*/
/*                     <!-- END Form Control-->*/
/*                     <!-- START Form Control-->*/
/*                     <div class="form-group form-group-default input-group">*/
/*                         <label>Mot de passe</label>*/
/*                         <input type="password" id="password" name="_password" required="required" class="form-control" placeholder="Password" />*/
/*                         <span class="input-group-addon"><i class="fa fa-unlock-alt"></i></span>*/
/*                     </div>*/
/*                     <!-- START Form Control-->*/
/*                     <div class="row">*/
/*                         <div class="col-md-6 no-padding">*/
/*                             <div class="checkbox check-warning">*/
/*                                 <input type="checkbox" id="remember_me" name="_remember_me" value="on">*/
/*                                 <label for="remember_me">Se souvenir de moi.</label>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <input type="hidden" name="_csrf_token" class="" value="{{ csrf_token }}" />*/
/*                     <!-- END Form Control-->*/
/*                     <button type="submit"  id="_submit" name="_submit" value="{{ 'security.login.submit'|trans }}" class="btn btn-primary btn-cons m-t-10" >Se Connecter</button>*/
/* */
/*                 </form>*/
/*                 <!--END Login Form-->*/
/*               {# <div class="social-auth-links text-center">*/
/*                     <p>- OR -</p>*/
/*                     <a href="https://www.facebook.com" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using Facebook</a>*/
/*                     <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using Google+</a>*/
/*                 </div><!-- /.social-auth-links -->#}*/
/* */
/*                 <a href="{{ path("fos_user_resetting_request") }}">Mot de passe oublié</a><br>*/
/*                 <a href="{{ path('fos_user_registration_register') }}" class="text-center">S'inscrire</a>*/
/* */
/*             </div>*/
/*         </div>*/
/*         <!-- END Login Right Container-->*/
/*     </div>*/
/* */
/* {% endblock login %}*/
/* */
/* */
/* */
/* */
/* */
