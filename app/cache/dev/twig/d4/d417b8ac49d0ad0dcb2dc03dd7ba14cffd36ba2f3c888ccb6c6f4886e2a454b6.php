<?php

/* ::/base.html.twig */
class __TwigTemplate_0063f7b151278390a18d33b04607202efcf786473b8b8fc03a7b37fbde28d296 extends Twig_Template
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
        $__internal_c698c889a0dc4ca3a6be170dd3a96268fefa0417cdf32a147ed85880adc0c6ad = $this->env->getExtension("native_profiler");
        $__internal_c698c889a0dc4ca3a6be170dd3a96268fefa0417cdf32a147ed85880adc0c6ad->enter($__internal_c698c889a0dc4ca3a6be170dd3a96268fefa0417cdf32a147ed85880adc0c6ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::/base.html.twig"));

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
        
        $__internal_c698c889a0dc4ca3a6be170dd3a96268fefa0417cdf32a147ed85880adc0c6ad->leave($__internal_c698c889a0dc4ca3a6be170dd3a96268fefa0417cdf32a147ed85880adc0c6ad_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_77b0c9ed172f99be9719aba4eba8a9f821a80f5c8e789c9531770b8b0a2685d9 = $this->env->getExtension("native_profiler");
        $__internal_77b0c9ed172f99be9719aba4eba8a9f821a80f5c8e789c9531770b8b0a2685d9->enter($__internal_77b0c9ed172f99be9719aba4eba8a9f821a80f5c8e789c9531770b8b0a2685d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_77b0c9ed172f99be9719aba4eba8a9f821a80f5c8e789c9531770b8b0a2685d9->leave($__internal_77b0c9ed172f99be9719aba4eba8a9f821a80f5c8e789c9531770b8b0a2685d9_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_948a131d01a77895075959d63ba0853fdead4e7d011819f1348b32fb40bcb252 = $this->env->getExtension("native_profiler");
        $__internal_948a131d01a77895075959d63ba0853fdead4e7d011819f1348b32fb40bcb252->enter($__internal_948a131d01a77895075959d63ba0853fdead4e7d011819f1348b32fb40bcb252_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "    ";
        
        $__internal_948a131d01a77895075959d63ba0853fdead4e7d011819f1348b32fb40bcb252->leave($__internal_948a131d01a77895075959d63ba0853fdead4e7d011819f1348b32fb40bcb252_prof);

    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        $__internal_5988126949df75fa6462e3d3d836c970667c0c5e39f28aa7035fd8804d01756b = $this->env->getExtension("native_profiler");
        $__internal_5988126949df75fa6462e3d3d836c970667c0c5e39f28aa7035fd8804d01756b->enter($__internal_5988126949df75fa6462e3d3d836c970667c0c5e39f28aa7035fd8804d01756b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5988126949df75fa6462e3d3d836c970667c0c5e39f28aa7035fd8804d01756b->leave($__internal_5988126949df75fa6462e3d3d836c970667c0c5e39f28aa7035fd8804d01756b_prof);

    }

    // line 24
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_562c9e29e96196c054961b535af0ce078fcbac1c888bf6fbabe89437c159af79 = $this->env->getExtension("native_profiler");
        $__internal_562c9e29e96196c054961b535af0ce078fcbac1c888bf6fbabe89437c159af79->enter($__internal_562c9e29e96196c054961b535af0ce078fcbac1c888bf6fbabe89437c159af79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 25
        echo "        ";
        
        $__internal_562c9e29e96196c054961b535af0ce078fcbac1c888bf6fbabe89437c159af79->leave($__internal_562c9e29e96196c054961b535af0ce078fcbac1c888bf6fbabe89437c159af79_prof);

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
