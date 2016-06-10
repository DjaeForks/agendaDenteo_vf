<?php

/* ::login_base.html.twig */
class __TwigTemplate_1660d5669ff3f4da735d8877c35dfab39fd72545288645de21717506491e91b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'login' => array($this, 'block_login'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_81295eb2287efd801ca348365dec6a5408e130e5020c83e3d0d533d390036c1b = $this->env->getExtension("native_profiler");
        $__internal_81295eb2287efd801ca348365dec6a5408e130e5020c83e3d0d533d390036c1b->enter($__internal_81295eb2287efd801ca348365dec6a5408e130e5020c83e3d0d533d390036c1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::login_base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta http-equiv=\"content-type\" content=\"text/html;charset=UTF-8\" />
    <meta charset=\"utf-8\" />
    <title>Login</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\" />
    <link rel=\"apple-touch-icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("pages/ico/60.png"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("pages/ico/76.png"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon\" sizes=\"120x120\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("pages/ico/120.png"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon\" sizes=\"152x152\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("pages/ico/152.png"), "html", null, true);
        echo "\">
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("pages/favicon.ico"), "html", null, true);
        echo "\" />
    <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
    <meta name=\"apple-touch-fullscreen\" content=\"yes\">
    <meta name=\"apple-mobile-web-app-status-bar-style\" content=\"default\">
    <meta content=\"\" name=\"description\" />
    <meta content=\"\" name=\"author\" />
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assetsE/plugins/pace/pace-theme-flash.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assetsE/plugins/boostrapv3/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assetsE/plugins/font-awesome/css/font-awesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assetsE/plugins/jquery-scrollbar/jquery.scrollbar.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\" />
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assetsE/plugins/bootstrap-select2/select2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\" />
    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assetsE/plugins/switchery/css/switchery.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\" />
    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assetsE/css/pages-icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link class=\"main-stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("pages/css/pages.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <!--[if lte IE 9]>
    <link href=\"pages/css/ie9.css\" rel=\"stylesheet\" type=\"text/css\" />
    <![endif]-->
    <script type=\"text/javascript\">
        window.onload = function()
        {
            // fix for windows 8
            if (navigator.appVersion.indexOf(\"Windows NT 6.2\") != -1)
                document.head.innerHTML += '<link rel=\"stylesheet\" type=\"text/css\" href=\"pages/css/windows.chrome.fix.css\" />'
        }
    </script>
</head>
<body class=\"fixed-header   \">
<!-- START PAGE-CONTAINER -->

";
        // line 41
        $this->displayBlock('login', $context, $blocks);
        // line 103
        echo "     
<!-- END PAGE CONTAINER -->
<!-- BEGIN VENDOR JS -->
<script src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assetsE/plugins/pace/pace.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assetsE/plugins/jquery/jquery-1.11.1.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assetsE/plugins/modernizr.custom.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assetsE/plugins/jquery-ui/jquery-ui.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assetsE/plugins/boostrapv3/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assetsE/plugins/jquery/jquery-easy.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assetsE/plugins/jquery-unveil/jquery.unveil.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assetsE/plugins/jquery-bez/jquery.bez.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assetsE/plugins/jquery-ios-list/jquery.ioslist.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assetsE/plugins/jquery-actual/jquery.actual.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assetsE/plugins/jquery-scrollbar/jquery.scrollbar.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assetsE/plugins/bootstrap-select2/select2.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assetsE/plugins/classie/classie.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assetsE/plugins/switchery/js/switchery.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assetsE/plugins/jquery-validation/js/jquery.validate.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<!-- END VENDOR JS -->
<!-- BEGIN CORE TEMPLATE JS -->
<script src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("pages/js/pages.min.js"), "html", null, true);
        echo "\"></script>
<!-- END CORE TEMPLATE JS -->
<!-- BEGIN PAGE LEVEL JS -->
<script src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assetsE/js/scripts.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<!-- END PAGE LEVEL JS -->
</body>
</html>
";
        
        $__internal_81295eb2287efd801ca348365dec6a5408e130e5020c83e3d0d533d390036c1b->leave($__internal_81295eb2287efd801ca348365dec6a5408e130e5020c83e3d0d533d390036c1b_prof);

    }

    // line 41
    public function block_login($context, array $blocks = array())
    {
        $__internal_a9811442b4466b563d4dbe371b35ab925a46b19278bafe773b48fce2b58a198a = $this->env->getExtension("native_profiler");
        $__internal_a9811442b4466b563d4dbe371b35ab925a46b19278bafe773b48fce2b58a198a->enter($__internal_a9811442b4466b563d4dbe371b35ab925a46b19278bafe773b48fce2b58a198a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "login"));

        // line 42
        echo "     ";
        // line 102
        echo "    ";
        
        $__internal_a9811442b4466b563d4dbe371b35ab925a46b19278bafe773b48fce2b58a198a->leave($__internal_a9811442b4466b563d4dbe371b35ab925a46b19278bafe773b48fce2b58a198a_prof);

    }

    public function getTemplateName()
    {
        return "::login_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 102,  197 => 42,  191 => 41,  179 => 126,  173 => 123,  167 => 120,  163 => 119,  159 => 118,  155 => 117,  151 => 116,  147 => 115,  143 => 114,  139 => 113,  135 => 112,  131 => 111,  127 => 110,  123 => 109,  119 => 108,  115 => 107,  111 => 106,  106 => 103,  104 => 41,  85 => 25,  81 => 24,  77 => 23,  73 => 22,  69 => 21,  65 => 20,  61 => 19,  57 => 18,  48 => 12,  44 => 11,  40 => 10,  36 => 9,  32 => 8,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <meta http-equiv="content-type" content="text/html;charset=UTF-8" />*/
/*     <meta charset="utf-8" />*/
/*     <title>Login</title>*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />*/
/*     <link rel="apple-touch-icon" href="{{asset('pages/ico/60.png')}}">*/
/*     <link rel="apple-touch-icon" sizes="76x76" href="{{asset('pages/ico/76.png')}}">*/
/*     <link rel="apple-touch-icon" sizes="120x120" href="{{asset('pages/ico/120.png')}}">*/
/*     <link rel="apple-touch-icon" sizes="152x152" href="{{asset('pages/ico/152.png')}}">*/
/*     <link rel="icon" type="image/x-icon" href="{{asset('pages/favicon.ico')}}" />*/
/*     <meta name="apple-mobile-web-app-capable" content="yes">*/
/*     <meta name="apple-touch-fullscreen" content="yes">*/
/*     <meta name="apple-mobile-web-app-status-bar-style" content="default">*/
/*     <meta content="" name="description" />*/
/*     <meta content="" name="author" />*/
/*     <link href="{{asset('assetsE/plugins/pace/pace-theme-flash.css')}}" rel="stylesheet" type="text/css" />*/
/*     <link href="{{asset('assetsE/plugins/boostrapv3/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />*/
/*     <link href="{{asset('assetsE/plugins/font-awesome/css/font-awesome.css')}}" rel="stylesheet" type="text/css" />*/
/*     <link href="{{asset('assetsE/plugins/jquery-scrollbar/jquery.scrollbar.css')}}" rel="stylesheet" type="text/css" media="screen" />*/
/*     <link href="{{asset('assetsE/plugins/bootstrap-select2/select2.css')}}" rel="stylesheet" type="text/css" media="screen" />*/
/*     <link href="{{asset('assetsE/plugins/switchery/css/switchery.min.css')}}" rel="stylesheet" type="text/css" media="screen" />*/
/*     <link href="{{asset('assetsE/css/pages-icons.css')}}" rel="stylesheet" type="text/css">*/
/*     <link class="main-stylesheet" href="{{asset('pages/css/pages.css')}}" rel="stylesheet" type="text/css" />*/
/*     <!--[if lte IE 9]>*/
/*     <link href="pages/css/ie9.css" rel="stylesheet" type="text/css" />*/
/*     <![endif]-->*/
/*     <script type="text/javascript">*/
/*         window.onload = function()*/
/*         {*/
/*             // fix for windows 8*/
/*             if (navigator.appVersion.indexOf("Windows NT 6.2") != -1)*/
/*                 document.head.innerHTML += '<link rel="stylesheet" type="text/css" href="pages/css/windows.chrome.fix.css" />'*/
/*         }*/
/*     </script>*/
/* </head>*/
/* <body class="fixed-header   ">*/
/* <!-- START PAGE-CONTAINER -->*/
/* */
/* {% block login %}*/
/*      {# <div class="login-wrapper ">*/
/*     <!-- START Login Background Pic Wrapper-->*/
/*     <div class="bg-pic">*/
/*         <!-- START Background Pic-->*/
/*         <img src="{{asset('assetsE/img/demo/BG.jpg')}}" data-src="{{asset('assetsE/img/demo/BG.jpg')}}" data-src-retina="{{asset('assets/img/demo/BG.jpg')}}" alt="" class="lazy">*/
/*         <!-- END Background Pic-->*/
/*         <!-- START Background Caption-->*/
/*         <div class="bg-caption pull-bottom sm-pull-bottom text-white p-l-20 m-b-20">*/
/*             <div class="col-lg-2">*/
/*                 <img src="{{asset('assetsE/img/demo/logoCarre.png')}}" style="height: 263px; width: 200px;margin-left: 16px;" data-src="{{asset('assets/img/demo/logoCarre.png')}}" data-src-retina="{{asset('assets/img/demo/logoCarre.png')}}" alt="" class="lazy">*/
/*             </div>*/
/*             </br>*/
/*             <h2 class="semi-bold text-white" style="margin-left: 37px;">*/
/*                 E-Compta vous offre une meilleure gestion des clients de votre fiduciaire</h2>*/
/*         </div>*/
/*         <!-- END Background Caption-->*/
/*     </div>*/
/*     <!-- END Login Background Pic Wrapper-->*/
/*     <!-- START Login Right Container-->*/
/*     <div class="login-container bg-white">*/
/*         <div class="p-l-50 m-l-20 p-r-50 m-r-20 p-t-50 m-t-30 sm-p-l-15 sm-p-r-15 sm-p-t-40">*/
/*             <img src="{{asset('assetsE/img/demo/logo.png')}}" alt="logo" data-src="{{asset('assetsE/img/demo/logo.png')}}" data-src-retina="{{asset('assets/img/demo/logo_2x.png')}}" width="350" height="109">*/
/*             <p class="p-t-35">Se connecter à Votre application</p>*/
/*             {% if error %}*/
/*                 <div style="color: red">{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/*             {% endif %}*/
/*             <!-- START Login Form -->*/
/*             <form id="form-login" class="p-t-15" role="form"  action="{{ path("fos_user_security_check") }}" method="post">*/
/* */
/*                 <!-- START Form Control-->*/
/*                 <div class="form-group form-group-default input-group">*/
/*                     <label>Nom d'utilisateur</label>*/
/*                     <input type="text" class="form-control" id="username" name="_username" value="{{ last_username }}" required>*/
/*                     <span class="input-group-addon"><i class="fa fa-user"></i></span>*/
/*                 </div>*/
/*                 <!-- END Form Control-->*/
/*                 <!-- START Form Control-->*/
/*                 <div class="form-group form-group-default input-group">*/
/*                     <label>Mot de passe</label>*/
/*                     <input type="password" class="form-control" name="_password" id="password" required>*/
/*                     <span class="input-group-addon"><i class="fa fa-unlock-alt"></i></span>*/
/*                 </div>*/
/*                 <!-- START Form Control-->*/
/*                 <div class="row">*/
/*                     <div class="col-md-6 no-padding">*/
/*                         <div class="checkbox check-warning">*/
/*                             <input type="checkbox" id="remember_me" name="_remember_me" value="on">*/
/*                             <label for="remember_me">Se souvenir de moi.</label>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <input type="hidden" name="_csrf_token" class="" value="{{ csrf_token }}" />*/
/*                 <!-- END Form Control-->*/
/*                 <button class="btn btn-warning btn-cons m-t-10" type="submit"  id="_submit" name="_submit" value="{{ 'security.login.submit'|trans({}, 'FOSUserBundle') }}">Connexion</button>*/
/*             </form>*/
/*             <!--END Login Form-->*/
/*         </div>*/
/*     </div>*/
/*     <!-- END Login Right Container-->*/
/* </div>#}*/
/*     {% endblock login %}*/
/*      */
/* <!-- END PAGE CONTAINER -->*/
/* <!-- BEGIN VENDOR JS -->*/
/* <script src="{{asset('assetsE/plugins/pace/pace.min.js')}}" type="text/javascript"></script>*/
/* <script src="{{asset('assetsE/plugins/jquery/jquery-1.11.1.min.js')}}" type="text/javascript"></script>*/
/* <script src="{{asset('assetsE/plugins/modernizr.custom.js')}}" type="text/javascript"></script>*/
/* <script src="{{asset('assetsE/plugins/jquery-ui/jquery-ui.min.js')}}" type="text/javascript"></script>*/
/* <script src="{{asset('assetsE/plugins/boostrapv3/js/bootstrap.min.js')}}" type="text/javascript"></script>*/
/* <script src="{{asset('assetsE/plugins/jquery/jquery-easy.js')}}" type="text/javascript"></script>*/
/* <script src="{{asset('assetsE/plugins/jquery-unveil/jquery.unveil.min.js')}}" type="text/javascript"></script>*/
/* <script src="{{asset('assetsE/plugins/jquery-bez/jquery.bez.min.js')}}"></script>*/
/* <script src="{{asset('assetsE/plugins/jquery-ios-list/jquery.ioslist.min.js')}}" type="text/javascript"></script>*/
/* <script src="{{asset('assetsE/plugins/jquery-actual/jquery.actual.min.js')}}"></script>*/
/* <script src="{{asset('assetsE/plugins/jquery-scrollbar/jquery.scrollbar.min.js')}}"></script>*/
/* <script type="text/javascript" src="{{asset('assetsE/plugins/bootstrap-select2/select2.min.js')}}"></script>*/
/* <script type="text/javascript" src="{{asset('assetsE/plugins/classie/classie.js')}}"></script>*/
/* <script src="{{asset('assetsE/plugins/switchery/js/switchery.min.js')}}" type="text/javascript"></script>*/
/* <script src="{{asset('assetsE/plugins/jquery-validation/js/jquery.validate.min.js')}}" type="text/javascript"></script>*/
/* <!-- END VENDOR JS -->*/
/* <!-- BEGIN CORE TEMPLATE JS -->*/
/* <script src="{{asset('pages/js/pages.min.js')}}"></script>*/
/* <!-- END CORE TEMPLATE JS -->*/
/* <!-- BEGIN PAGE LEVEL JS -->*/
/* <script src="{{asset('assetsE/js/scripts.js')}}" type="text/javascript"></script>*/
/* <!-- END PAGE LEVEL JS -->*/
/* </body>*/
/* </html>*/
/* */
