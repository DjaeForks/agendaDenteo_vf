<?php

/* ::/base.html.twig */
class __TwigTemplate_5f7c7ab9b517ed7e8d33eb0400d7b4326621808bb1b64440c182404ba8adfa2f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2bd3d218382be83d4b063e196f724f7429634c3c0299f02831075033aec96d1b = $this->env->getExtension("native_profiler");
        $__internal_2bd3d218382be83d4b063e196f724f7429634c3c0299f02831075033aec96d1b->enter($__internal_2bd3d218382be83d4b063e196f724f7429634c3c0299f02831075033aec96d1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::/base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\"/>
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 8
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <!-- Font Awesome -->
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css\">
        <!-- Ionicons -->
        <link rel=\"stylesheet\" href=\"https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css\">
        <!-- Theme style -->
        <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/AdminLTE.min.css"), "html", null, true);
        echo "\">
        <!-- iCheck -->
        <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/iCheck/square/blue.css"), "html", null, true);
        echo "\">
        <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/bootstrap-datepicker/css/datepicker3.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
    <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\">
    </head>
    <body>
        ";
        // line 23
        $this->displayBlock('body', $context, $blocks);
        // line 24
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 26
        echo "
        <!-- jQuery 2.1.4 -->
        <script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/jQuery/jQuery-2.1.4.min.js"), "html", null, true);
        echo "\"></script>
        <!-- Bootstrap 3.3.5 -->
        <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <!-- iCheck -->
        <script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/iCheck/icheck.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
        <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
        <script>
            \$(function () {
                \$('input').iCheck({
                    checkboxClass: 'icheckbox_square-blue',
                    radioClass: 'iradio_square-blue',
                    increaseArea: '20%' // optional
                });
            });
        </script>
    </body>
</html>
";
        
        $__internal_2bd3d218382be83d4b063e196f724f7429634c3c0299f02831075033aec96d1b->leave($__internal_2bd3d218382be83d4b063e196f724f7429634c3c0299f02831075033aec96d1b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_017c3092a57242d2ea99e3514a63b4d91384ec60144cd19af9ca0a2a887e53ac = $this->env->getExtension("native_profiler");
        $__internal_017c3092a57242d2ea99e3514a63b4d91384ec60144cd19af9ca0a2a887e53ac->enter($__internal_017c3092a57242d2ea99e3514a63b4d91384ec60144cd19af9ca0a2a887e53ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_017c3092a57242d2ea99e3514a63b4d91384ec60144cd19af9ca0a2a887e53ac->leave($__internal_017c3092a57242d2ea99e3514a63b4d91384ec60144cd19af9ca0a2a887e53ac_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_06643bfb6e92dc66a4dd603a9bf22074b1531ecd8e361b73aca1931251d4c4de = $this->env->getExtension("native_profiler");
        $__internal_06643bfb6e92dc66a4dd603a9bf22074b1531ecd8e361b73aca1931251d4c4de->enter($__internal_06643bfb6e92dc66a4dd603a9bf22074b1531ecd8e361b73aca1931251d4c4de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "    ";
        
        $__internal_06643bfb6e92dc66a4dd603a9bf22074b1531ecd8e361b73aca1931251d4c4de->leave($__internal_06643bfb6e92dc66a4dd603a9bf22074b1531ecd8e361b73aca1931251d4c4de_prof);

    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        $__internal_02075a20423ebc2bf88e706337000507b2f0e6516f942fba6c600d1aa17a8d94 = $this->env->getExtension("native_profiler");
        $__internal_02075a20423ebc2bf88e706337000507b2f0e6516f942fba6c600d1aa17a8d94->enter($__internal_02075a20423ebc2bf88e706337000507b2f0e6516f942fba6c600d1aa17a8d94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_02075a20423ebc2bf88e706337000507b2f0e6516f942fba6c600d1aa17a8d94->leave($__internal_02075a20423ebc2bf88e706337000507b2f0e6516f942fba6c600d1aa17a8d94_prof);

    }

    // line 24
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3d67ab57b6f519cf851d39d4d430eb3e94c11081c1cd1a294fedf6f8d494e771 = $this->env->getExtension("native_profiler");
        $__internal_3d67ab57b6f519cf851d39d4d430eb3e94c11081c1cd1a294fedf6f8d494e771->enter($__internal_3d67ab57b6f519cf851d39d4d430eb3e94c11081c1cd1a294fedf6f8d494e771_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 25
        echo "        ";
        
        $__internal_3d67ab57b6f519cf851d39d4d430eb3e94c11081c1cd1a294fedf6f8d494e771->leave($__internal_3d67ab57b6f519cf851d39d4d430eb3e94c11081c1cd1a294fedf6f8d494e771_prof);

    }

    public function getTemplateName()
    {
        return "::/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 25,  149 => 24,  138 => 23,  131 => 7,  125 => 6,  113 => 5,  91 => 32,  86 => 30,  81 => 28,  77 => 26,  74 => 24,  72 => 23,  66 => 20,  62 => 19,  58 => 18,  53 => 16,  44 => 10,  38 => 8,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <meta charset="UTF-8"/>*/
/*     <title>{% block title %}Welcome!{% endblock %}</title>*/
/*     {% block stylesheets %}*/
/*     {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/* */
/*         <link rel="stylesheet" href="{{ asset("bootstrap/css/bootstrap.min.css") }}">*/
/*         <!-- Font Awesome -->*/
/*         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">*/
/*         <!-- Ionicons -->*/
/*         <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">*/
/*         <!-- Theme style -->*/
/*         <link rel="stylesheet" href="{{ asset("assets/css/AdminLTE.min.css") }}">*/
/*         <!-- iCheck -->*/
/*         <link rel="stylesheet" href="{{ asset("plugins/iCheck/square/blue.css") }}">*/
/*         <link href="{{asset('plugins/bootstrap-datepicker/css/datepicker3.css')}}" rel="stylesheet"/>*/
/*     <link href="{{ asset('plugins/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css') }}" rel="stylesheet" type="text/css" media="screen">*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}*/
/*         {% endblock %}*/
/* */
/*         <!-- jQuery 2.1.4 -->*/
/*         <script src="{{ asset("plugins/jQuery/jQuery-2.1.4.min.js") }}"></script>*/
/*         <!-- Bootstrap 3.3.5 -->*/
/*         <script src="{{ asset("bootstrap/js/bootstrap.min.js") }}"></script>*/
/*         <!-- iCheck -->*/
/*         <script src="{{ asset("plugins/iCheck/icheck.min.js") }}"></script>*/
/*         <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>*/
/*         <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>*/
/*         <script>*/
/*             $(function () {*/
/*                 $('input').iCheck({*/
/*                     checkboxClass: 'icheckbox_square-blue',*/
/*                     radioClass: 'iradio_square-blue',*/
/*                     increaseArea: '20%' // optional*/
/*                 });*/
/*             });*/
/*         </script>*/
/*     </body>*/
/* </html>*/
/* */
