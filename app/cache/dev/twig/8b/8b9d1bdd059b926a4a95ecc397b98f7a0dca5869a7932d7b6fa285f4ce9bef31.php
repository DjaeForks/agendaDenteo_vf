<?php

/* base.html.twig */
class __TwigTemplate_110bbf46ae058982a09bfdcae2cf2226386ae5538315ca5f6e603abf54eadf27 extends Twig_Template
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
        $__internal_a1ee76d877d0db91658cfa86cf472472771ea5bb943ef5e3c9233c133babe560 = $this->env->getExtension("native_profiler");
        $__internal_a1ee76d877d0db91658cfa86cf472472771ea5bb943ef5e3c9233c133babe560->enter($__internal_a1ee76d877d0db91658cfa86cf472472771ea5bb943ef5e3c9233c133babe560_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
    </head>
    <body>
        ";
        // line 21
        $this->displayBlock('body', $context, $blocks);
        // line 22
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 24
        echo "
        <!-- jQuery 2.1.4 -->
        <script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/jQuery/jQuery-2.1.4.min.js"), "html", null, true);
        echo "\"></script>
        <!-- Bootstrap 3.3.5 -->
        <script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <!-- iCheck -->
        <script src=\"";
        // line 30
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
        
        $__internal_a1ee76d877d0db91658cfa86cf472472771ea5bb943ef5e3c9233c133babe560->leave($__internal_a1ee76d877d0db91658cfa86cf472472771ea5bb943ef5e3c9233c133babe560_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_aa593633a50e45f20ae31be953b30d3a6f73843e982230916f286537cc18abb0 = $this->env->getExtension("native_profiler");
        $__internal_aa593633a50e45f20ae31be953b30d3a6f73843e982230916f286537cc18abb0->enter($__internal_aa593633a50e45f20ae31be953b30d3a6f73843e982230916f286537cc18abb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_aa593633a50e45f20ae31be953b30d3a6f73843e982230916f286537cc18abb0->leave($__internal_aa593633a50e45f20ae31be953b30d3a6f73843e982230916f286537cc18abb0_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_62ca72f0c992207ec4ea9a5ee9d3f86362c6e68737cbd6a3aafecac6fb1b38cd = $this->env->getExtension("native_profiler");
        $__internal_62ca72f0c992207ec4ea9a5ee9d3f86362c6e68737cbd6a3aafecac6fb1b38cd->enter($__internal_62ca72f0c992207ec4ea9a5ee9d3f86362c6e68737cbd6a3aafecac6fb1b38cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "    ";
        
        $__internal_62ca72f0c992207ec4ea9a5ee9d3f86362c6e68737cbd6a3aafecac6fb1b38cd->leave($__internal_62ca72f0c992207ec4ea9a5ee9d3f86362c6e68737cbd6a3aafecac6fb1b38cd_prof);

    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        $__internal_919aa42e2a9596e3ff2b2839eafd702bd73a86aaf3ff61471ff3e2f4d8bd21e3 = $this->env->getExtension("native_profiler");
        $__internal_919aa42e2a9596e3ff2b2839eafd702bd73a86aaf3ff61471ff3e2f4d8bd21e3->enter($__internal_919aa42e2a9596e3ff2b2839eafd702bd73a86aaf3ff61471ff3e2f4d8bd21e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_919aa42e2a9596e3ff2b2839eafd702bd73a86aaf3ff61471ff3e2f4d8bd21e3->leave($__internal_919aa42e2a9596e3ff2b2839eafd702bd73a86aaf3ff61471ff3e2f4d8bd21e3_prof);

    }

    // line 22
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c8dc6f3a1fe4ea0839616b4f828bcda0c65f9ca30068f3d942e57d1755cb79f2 = $this->env->getExtension("native_profiler");
        $__internal_c8dc6f3a1fe4ea0839616b4f828bcda0c65f9ca30068f3d942e57d1755cb79f2->enter($__internal_c8dc6f3a1fe4ea0839616b4f828bcda0c65f9ca30068f3d942e57d1755cb79f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 23
        echo "        ";
        
        $__internal_c8dc6f3a1fe4ea0839616b4f828bcda0c65f9ca30068f3d942e57d1755cb79f2->leave($__internal_c8dc6f3a1fe4ea0839616b4f828bcda0c65f9ca30068f3d942e57d1755cb79f2_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 23,  141 => 22,  130 => 21,  123 => 7,  117 => 6,  105 => 5,  83 => 30,  78 => 28,  73 => 26,  69 => 24,  66 => 22,  64 => 21,  58 => 18,  53 => 16,  44 => 10,  38 => 8,  36 => 6,  32 => 5,  26 => 1,);
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
