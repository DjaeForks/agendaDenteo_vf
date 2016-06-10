<?php

/* EvenementBundle:configuration:new.html.twig */
class __TwigTemplate_e6fb0784a21febaccc2f175c31df49aeb4fd30e0760c32b1a32cda65c7aa10ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "EvenementBundle:configuration:new.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_67fad5f4db7cd301253d6dedef1a7db79411228092ff1641edc50bcbe99efc35 = $this->env->getExtension("native_profiler");
        $__internal_67fad5f4db7cd301253d6dedef1a7db79411228092ff1641edc50bcbe99efc35->enter($__internal_67fad5f4db7cd301253d6dedef1a7db79411228092ff1641edc50bcbe99efc35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EvenementBundle:configuration:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_67fad5f4db7cd301253d6dedef1a7db79411228092ff1641edc50bcbe99efc35->leave($__internal_67fad5f4db7cd301253d6dedef1a7db79411228092ff1641edc50bcbe99efc35_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ba83f0289d5bd747f57676b3f70a2d9b22e874ee0cde1096ddf7a14b47b2b402 = $this->env->getExtension("native_profiler");
        $__internal_ba83f0289d5bd747f57676b3f70a2d9b22e874ee0cde1096ddf7a14b47b2b402->enter($__internal_ba83f0289d5bd747f57676b3f70a2d9b22e874ee0cde1096ddf7a14b47b2b402_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    <!-- Bootstrap 3.3.5 -->
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <!-- Font Awesome -->
    <link rel=\"stylesheet\"
          href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"), "html", null, true);
        echo "\">
    <!-- Ionicons -->
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"), "html", null, true);
        echo "\">
    <!-- daterange picker -->
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/daterangepicker/daterangepicker-bs3.css"), "html", null, true);
        echo "\">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/iCheck/all.css"), "html", null, true);
        echo "\">
    <!-- Select2 -->
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/select2/select2.min.css"), "html", null, true);
        echo "\">
    <!-- Theme style -->
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dist/css/AdminLTE.min.css"), "html", null, true);
        echo "\">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dist/css/skins/_all-skins.min.css"), "html", null, true);
        echo "\">



    <style>
        .daysCalendar{
           display:inline-block;
            width: 780px !important;
        }

    </style>
";
        
        $__internal_ba83f0289d5bd747f57676b3f70a2d9b22e874ee0cde1096ddf7a14b47b2b402->leave($__internal_ba83f0289d5bd747f57676b3f70a2d9b22e874ee0cde1096ddf7a14b47b2b402_prof);

    }

    // line 33
    public function block_content($context, array $blocks = array())
    {
        $__internal_dd8485d128099ec88144d13a886037042f85bac4f78127adc9637d8b71d2aa32 = $this->env->getExtension("native_profiler");
        $__internal_dd8485d128099ec88144d13a886037042f85bac4f78127adc9637d8b71d2aa32->enter($__internal_dd8485d128099ec88144d13a886037042f85bac4f78127adc9637d8b71d2aa32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 34
        echo "
    <div style=\"background-color: white;\" class=\"col-md-12\">
        <div class=\"grid simple\">
            <div class=\"grid-title \">
                <h4><strong>Configuration</strong> <span class=\"semi-bold\">Generale</span></h4>
            </div>
            </br>
            </br>
            ";
        // line 42
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

            <div class=\"form-group\">
                <label class=\"form-group\">Jours a Masquer :</label>
                <div class=\"input-group\">
                    ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "daysSelected", array()), 'widget', array("attr" => array("class" => "daysCalendar select2")));
        echo "

                </div>
            </div><!-- /.form-group -->

            <div class=\"row form-row\">
                <div class=\"col-md-3\">
                    <label class=\"form-label\">Heure de Debut : </label>
                    <div class=\"input-group transparent clockpicker \">
                        ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateDeb", array()), 'widget', array("attr" => array("class" => "form-control dateDeb")));
        echo "
                        <span class=\"input-group-addon \">
                       <i class=\"fa fa-clock-o\"></i>
                      </span>
                    </div>
                </div>
                <div class=\"col-md-3\">
                    <label class=\"form-label\">Heure de Fin : </label>
                    <div class=\"input-group transparent clockpicker \">
                        ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateFin", array()), 'widget', array("attr" => array("class" => "form-control dateDeb")));
        echo "
                        <span class=\"input-group-addon \">
                       <i class=\"fa fa-clock-o\"></i>
                      </span>
                    </div>
                </div>
                <div class=\"col-md-3\">
                    <label class=\"form-label\">Céneaux de : </label>
                    ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "creneau", array()), 'widget', array("attr" => array("class" => "form-control creneau select2 ")));
        echo "
                </div>
            </div>
            </br>
            <div class=\"row form-row\">
                <div class=\"col-md-3\">
                    <label>Jours de debut de Semaine : </label>
                    <div class=\"input-group transparent clockpicker \">
                        ";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstDay", array()), 'widget', array("attr" => array("class" => "form-control firstDay select2")));
        echo "
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <label>Langue du Calendrier : </label>
                    <div class=\"input-group transparent clockpicker \">
                        ";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lang", array()), 'widget', array("attr" => array("class" => "form-control langCalendar select2")));
        echo "
                    </div>
                </div>
                <div class=\"col-md-3\">
                    <label class=\"form-label\">Numeroter les semaines : </label>
                    <div class=\"checkbox check-success \t\">
                        ";
        // line 93
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "weeksNumber", array()), 'widget', array("attr" => array("class" => "weeksay flat-red")));
        echo "
                        <label for=\"checkbox2\">Oui </label>
                    </div>
                </div>
            </div>


            <input class=\"btn btn-info  pull-right\" type=\"submit\" value=\"Configure\"/>
            ";
        // line 101
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
        </div>

    </div>

";
        
        $__internal_dd8485d128099ec88144d13a886037042f85bac4f78127adc9637d8b71d2aa32->leave($__internal_dd8485d128099ec88144d13a886037042f85bac4f78127adc9637d8b71d2aa32_prof);

    }

    // line 108
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0df8ecc8dfb73b1cffe5131e87f1f264cfe6911d9ac041c2c2eded563592aba2 = $this->env->getExtension("native_profiler");
        $__internal_0df8ecc8dfb73b1cffe5131e87f1f264cfe6911d9ac041c2c2eded563592aba2->enter($__internal_0df8ecc8dfb73b1cffe5131e87f1f264cfe6911d9ac041c2c2eded563592aba2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 109
        echo "
    <!-- Bootstrap 3.3.5 -->
    <script src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Select2 -->
    <script src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/select2/select2.full.min.js"), "html", null, true);
        echo "\"></script>
    <!-- InputMask -->
    <script src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/input-mask/jquery.inputmask.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/input-mask/jquery.inputmask.date.extensions.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/input-mask/jquery.inputmask.extensions.js"), "html", null, true);
        echo "\"></script>
    <!-- SlimScroll 1.3.0 -->
    <script src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/slimScroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\"></script>
    <!-- iCheck 1.0.1 -->
    <script src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/iCheck/icheck.min.js"), "html", null, true);
        echo "\"></script>
    <!-- FastClick -->
    <script src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/fastclick/fastclick.min.js"), "html", null, true);
        echo "\"></script>
    <!-- AdminLTE App -->
    <script src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dist/js/app.min.js"), "html", null, true);
        echo "\"></script>
    <!-- AdminLTE for demo purposes -->
    <script src=\"../../dist/js/demo.js\"></script>
    <script>

        \$(function () {

            //Flat red color scheme for iCheck
            \$('.flat-red').iCheck({
                checkboxClass: 'icheckbox_flat-orange'
            });
            //Initialize Select2 Elements
            \$(\".select2\").select2();

            //Time pickers
            \$('.clockpicker ').clockpicker({
                autoclose: true
            });


        });


    </script>

";
        
        $__internal_0df8ecc8dfb73b1cffe5131e87f1f264cfe6911d9ac041c2c2eded563592aba2->leave($__internal_0df8ecc8dfb73b1cffe5131e87f1f264cfe6911d9ac041c2c2eded563592aba2_prof);

    }

    public function getTemplateName()
    {
        return "EvenementBundle:configuration:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  261 => 125,  256 => 123,  251 => 121,  246 => 119,  241 => 117,  237 => 116,  233 => 115,  228 => 113,  223 => 111,  219 => 109,  213 => 108,  200 => 101,  189 => 93,  180 => 87,  171 => 81,  160 => 73,  149 => 65,  137 => 56,  125 => 47,  117 => 42,  107 => 34,  101 => 33,  82 => 21,  76 => 18,  71 => 16,  66 => 14,  61 => 12,  56 => 10,  51 => 8,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '::layout.html.twig' %}*/
/* */
/* {% block stylesheets %}*/
/*     <!-- Bootstrap 3.3.5 -->*/
/*     <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">*/
/*     <!-- Font Awesome -->*/
/*     <link rel="stylesheet"*/
/*           href="{{ asset('https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css') }}">*/
/*     <!-- Ionicons -->*/
/*     <link rel="stylesheet" href="{{ asset('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css') }}">*/
/*     <!-- daterange picker -->*/
/*     <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker-bs3.css') }}">*/
/*     <!-- iCheck for checkboxes and radio inputs -->*/
/*     <link rel="stylesheet" href="{{ asset('plugins/iCheck/all.css') }}">*/
/*     <!-- Select2 -->*/
/*     <link rel="stylesheet" href="{{ asset('plugins/select2/select2.min.css') }}">*/
/*     <!-- Theme style -->*/
/*     <link rel="stylesheet" href="{{ asset('dist/css/AdminLTE.min.css') }}">*/
/*     <!-- AdminLTE Skins. Choose a skin from the css/skins*/
/*          folder instead of downloading all of them to reduce the load. -->*/
/*     <link rel="stylesheet" href="{{ asset('dist/css/skins/_all-skins.min.css') }}">*/
/* */
/* */
/* */
/*     <style>*/
/*         .daysCalendar{*/
/*            display:inline-block;*/
/*             width: 780px !important;*/
/*         }*/
/* */
/*     </style>*/
/* {% endblock %}*/
/* {% block content %}*/
/* */
/*     <div style="background-color: white;" class="col-md-12">*/
/*         <div class="grid simple">*/
/*             <div class="grid-title ">*/
/*                 <h4><strong>Configuration</strong> <span class="semi-bold">Generale</span></h4>*/
/*             </div>*/
/*             </br>*/
/*             </br>*/
/*             {{ form_start(form) }}*/
/* */
/*             <div class="form-group">*/
/*                 <label class="form-group">Jours a Masquer :</label>*/
/*                 <div class="input-group">*/
/*                     {{ form_widget(form.daysSelected, { 'attr': {'class': 'daysCalendar select2'} }) }}*/
/* */
/*                 </div>*/
/*             </div><!-- /.form-group -->*/
/* */
/*             <div class="row form-row">*/
/*                 <div class="col-md-3">*/
/*                     <label class="form-label">Heure de Debut : </label>*/
/*                     <div class="input-group transparent clockpicker ">*/
/*                         {{ form_widget(form.dateDeb, { 'attr': {'class': 'form-control dateDeb'} }) }}*/
/*                         <span class="input-group-addon ">*/
/*                        <i class="fa fa-clock-o"></i>*/
/*                       </span>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="col-md-3">*/
/*                     <label class="form-label">Heure de Fin : </label>*/
/*                     <div class="input-group transparent clockpicker ">*/
/*                         {{ form_widget(form.dateFin, { 'attr': {'class': 'form-control dateDeb'} }) }}*/
/*                         <span class="input-group-addon ">*/
/*                        <i class="fa fa-clock-o"></i>*/
/*                       </span>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="col-md-3">*/
/*                     <label class="form-label">Céneaux de : </label>*/
/*                     {{ form_widget(form.creneau, { 'attr': {'class': 'form-control creneau select2 '} }) }}*/
/*                 </div>*/
/*             </div>*/
/*             </br>*/
/*             <div class="row form-row">*/
/*                 <div class="col-md-3">*/
/*                     <label>Jours de debut de Semaine : </label>*/
/*                     <div class="input-group transparent clockpicker ">*/
/*                         {{ form_widget(form.firstDay, { 'attr': {'class': 'form-control firstDay select2'} }) }}*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="col-md-4">*/
/*                     <label>Langue du Calendrier : </label>*/
/*                     <div class="input-group transparent clockpicker ">*/
/*                         {{ form_widget(form.lang, { 'attr': {'class': 'form-control langCalendar select2'} }) }}*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="col-md-3">*/
/*                     <label class="form-label">Numeroter les semaines : </label>*/
/*                     <div class="checkbox check-success 	">*/
/*                         {{ form_widget(form.weeksNumber, { 'attr': {'class': 'weeksay flat-red'} }) }}*/
/*                         <label for="checkbox2">Oui </label>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/* */
/* */
/*             <input class="btn btn-info  pull-right" type="submit" value="Configure"/>*/
/*             {{ form_end(form) }}*/
/*         </div>*/
/* */
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/* */
/*     <!-- Bootstrap 3.3.5 -->*/
/*     <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>*/
/*     <!-- Select2 -->*/
/*     <script src="{{ asset('plugins/select2/select2.full.min.js') }}"></script>*/
/*     <!-- InputMask -->*/
/*     <script src="{{ asset('plugins/input-mask/jquery.inputmask.js') }}"></script>*/
/*     <script src="{{ asset('plugins/input-mask/jquery.inputmask.date.extensions.js') }}"></script>*/
/*     <script src="{{ asset('plugins/input-mask/jquery.inputmask.extensions.js') }}"></script>*/
/*     <!-- SlimScroll 1.3.0 -->*/
/*     <script src="{{ asset('plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>*/
/*     <!-- iCheck 1.0.1 -->*/
/*     <script src="{{ asset('plugins/iCheck/icheck.min.js') }}"></script>*/
/*     <!-- FastClick -->*/
/*     <script src="{{ asset('plugins/fastclick/fastclick.min.js') }}"></script>*/
/*     <!-- AdminLTE App -->*/
/*     <script src="{{ asset('dist/js/app.min.js') }}"></script>*/
/*     <!-- AdminLTE for demo purposes -->*/
/*     <script src="../../dist/js/demo.js"></script>*/
/*     <script>*/
/* */
/*         $(function () {*/
/* */
/*             //Flat red color scheme for iCheck*/
/*             $('.flat-red').iCheck({*/
/*                 checkboxClass: 'icheckbox_flat-orange'*/
/*             });*/
/*             //Initialize Select2 Elements*/
/*             $(".select2").select2();*/
/* */
/*             //Time pickers*/
/*             $('.clockpicker ').clockpicker({*/
/*                 autoclose: true*/
/*             });*/
/* */
/* */
/*         });*/
/* */
/* */
/*     </script>*/
/* */
/* {% endblock %}*/
