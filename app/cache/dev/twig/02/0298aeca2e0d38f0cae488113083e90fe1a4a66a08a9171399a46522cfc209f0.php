<?php

/* PatientBundle:patient:new.html.twig */
class __TwigTemplate_ef1824cc5f6be60d467d99c222b98a2418e9577cc662bba75d0b39827c2ee715 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "PatientBundle:patient:new.html.twig", 1);
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
        $__internal_b4ead0d4fc6c254eeb7192a200dea30479553eab2eaf988cd7ad1f470e402baf = $this->env->getExtension("native_profiler");
        $__internal_b4ead0d4fc6c254eeb7192a200dea30479553eab2eaf988cd7ad1f470e402baf->enter($__internal_b4ead0d4fc6c254eeb7192a200dea30479553eab2eaf988cd7ad1f470e402baf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PatientBundle:patient:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b4ead0d4fc6c254eeb7192a200dea30479553eab2eaf988cd7ad1f470e402baf->leave($__internal_b4ead0d4fc6c254eeb7192a200dea30479553eab2eaf988cd7ad1f470e402baf_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7ca1d6b9e192433e432c2b763925b648a144a716e206deb3c53120ca0282f981 = $this->env->getExtension("native_profiler");
        $__internal_7ca1d6b9e192433e432c2b763925b648a144a716e206deb3c53120ca0282f981->enter($__internal_7ca1d6b9e192433e432c2b763925b648a144a716e206deb3c53120ca0282f981_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    <!-- Bootstrap 3.3.5 -->
   ";
        // line 23
        echo "
    <!-- DataTables -->
    <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/datatables/dataTables.bootstrap.css"), "html", null, true);
        echo "\">
";
        
        $__internal_7ca1d6b9e192433e432c2b763925b648a144a716e206deb3c53120ca0282f981->leave($__internal_7ca1d6b9e192433e432c2b763925b648a144a716e206deb3c53120ca0282f981_prof);

    }

    // line 28
    public function block_content($context, array $blocks = array())
    {
        $__internal_bd05e981c4862d7da5968d44faeabf51d9a7684544728c98d1c35ed0f738dd19 = $this->env->getExtension("native_profiler");
        $__internal_bd05e981c4862d7da5968d44faeabf51d9a7684544728c98d1c35ed0f738dd19->enter($__internal_bd05e981c4862d7da5968d44faeabf51d9a7684544728c98d1c35ed0f738dd19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 29
        echo "    ";
        // line 36
        echo "
    ";
        // line 94
        echo "    <div class=\"row -align-center\">

        <div class=\"col-md-11 -align-center\">
            <div class=\"box\">
                <div style=\"background-color: #28f0ea;\" class=\"box-header with-border border-color\">
                    <h3 class=\"box-title -align-center\">Formulaire d'Ajout :</h3>
                </div>
                ";
        // line 101
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
                <div class=\"box-body\">
                    <div class=\"form-group\">
                        <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">nom :</label>
                        <div class=\"col-sm-4\">
                            ";
        // line 106
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array("class" => "form-control titre1")));
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\">prenom :</label>
                        <div class=\"col-sm-2\">
                            ";
        // line 112
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'widget', array("attr" => array("class" => "form-control  duree1")));
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\">date :</label>
                        <div class=\"col-sm-4\">
                            ";
        // line 118
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateNaissance", array()), 'widget', array("attr" => array("class" => "form-control my-colorpicker5 couleur1")));
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\">telMobile :</label>
                        <div class=\"col-sm-4\">
                            ";
        // line 124
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telMobile", array()), 'widget', array("attr" => array("class" => "form-control description1")));
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\">telFixe :</label>
                        <div class=\"col-sm-4\">
                            ";
        // line 130
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telFix", array()), 'widget', array("attr" => array("class" => "form-control description1")));
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\">Email :</label>
                        <div class=\"col-sm-4\">
                            ";
        // line 136
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control description1")));
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\">Adresse :</label>
                        <div class=\"col-sm-4\">
                            ";
        // line 142
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'widget', array("attr" => array("class" => "form-control description1")));
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\">Adresse :</label>
                        <div class=\"col-sm-4\">
                            ";
        // line 148
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'widget', array("attr" => array("class" => "form-control btn btn-info file")));
        echo "
                        </div>
                    </div>
                    <div style=\"margin-top: -300px; margin-right: 60px; width: 150px; height: 150px ;\"
                         class=\"pull-right  image\">
                        <img style=\" width:inherit; width: 150px; height: 150px ;\" id=\"myImage\"
                             src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\">
                    </div>
                    <input id=\"addBtn\" title=\"koko\"
                           type=\"submit\" class=\"btn btn-info btn-cons pull-right\" value=\"Ajouter\"/>
                </div>
                ";
        // line 161
        echo "                ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
    </div>

    <div class=\"box\">
        <div class=\"box-body\">
            <table  class=\"table table-bordered  koko -align-center table-hover\">
                <thead style=\"background-color: #28f0ea;\">
                <tr>
                    <th>Nom & Prenom</th>
                    <th> tel (min)</th>
                    <th>Email</th>
                    <th>Adresse</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 179
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["patients"]) ? $context["patients"] : $this->getContext($context, "patients")));
        foreach ($context['_seq'] as $context["_key"] => $context["patient"]) {
            // line 180
            echo "                    <tr></tr>
                    <td>
                        <img style=\" width:inherit; width: 50px; height: 50px ;\" id=\"\" src=\"";
            // line 182
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/img/user2-160x160.jpg"), "html", null, true);
            echo "\" class=\"img-circle\" alt=\"User Image\">
                        ";
            // line 183
            echo twig_escape_filter($this->env, $this->getAttribute($context["patient"], "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["patient"], "prenom", array()), "html", null, true);
            echo "</td>
                    <td> ";
            // line 184
            echo twig_escape_filter($this->env, $this->getAttribute($context["patient"], "telMobile", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 185
            echo twig_escape_filter($this->env, $this->getAttribute($context["patient"], "email", array()), "html", null, true);
            echo " </td>
                    <td>";
            // line 186
            echo twig_escape_filter($this->env, $this->getAttribute($context["patient"], "adresse", array()), "html", null, true);
            echo "</td>
                    <td>
                        <a  class=\"glyphicon glyphicon-trash delete\"
                           data-toggle=\"tooltip\"  title=\"Supprimer\"
                        ></a>
                        <a   title=\"modifier\"
                             class=\"glyphicon glyphicon-pencil edit\"></a>
                    </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['patient'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 196
        echo "                </tbody>
                <tfoot>
                </tfoot>
            </table>
        </div>
    </div>



";
        
        $__internal_bd05e981c4862d7da5968d44faeabf51d9a7684544728c98d1c35ed0f738dd19->leave($__internal_bd05e981c4862d7da5968d44faeabf51d9a7684544728c98d1c35ed0f738dd19_prof);

    }

    // line 209
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_62618c1f2e61e4a8b54f0762a70ac8345f6d3ef23adea973809f040610aa6332 = $this->env->getExtension("native_profiler");
        $__internal_62618c1f2e61e4a8b54f0762a70ac8345f6d3ef23adea973809f040610aa6332->enter($__internal_62618c1f2e61e4a8b54f0762a70ac8345f6d3ef23adea973809f040610aa6332_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 210
        echo "    <!-- DataTables -->
    <script src=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/datatables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/datatables/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script>

        \$(function () {

            \$('.koko').DataTable({
                \"paging\": true,
                \"lengthChange\": true,
                \"searching\": true,
                \"ordering\": true,
                \"info\": true,
                \"autoWidth\": true,
                \"infoEmpty\": \"Aucun Type Trouver :)\"
            });


            \$('#patient_file').change(function () {

                console.log(\$('#patient_file').val());
                \$('#myImage').attr('src', '";
        // line 231
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("uploads/2601768a567550e18d2e9c5a85906babca31ec4e.jpeg"), "html", null, true);
        echo "');
            });


        });


    </script>
";
        
        $__internal_62618c1f2e61e4a8b54f0762a70ac8345f6d3ef23adea973809f040610aa6332->leave($__internal_62618c1f2e61e4a8b54f0762a70ac8345f6d3ef23adea973809f040610aa6332_prof);

    }

    public function getTemplateName()
    {
        return "PatientBundle:patient:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  281 => 231,  259 => 212,  255 => 211,  252 => 210,  246 => 209,  230 => 196,  214 => 186,  210 => 185,  206 => 184,  200 => 183,  196 => 182,  192 => 180,  188 => 179,  166 => 161,  158 => 154,  149 => 148,  140 => 142,  131 => 136,  122 => 130,  113 => 124,  104 => 118,  95 => 112,  86 => 106,  78 => 101,  69 => 94,  66 => 36,  64 => 29,  58 => 28,  49 => 25,  45 => 23,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '::layout.html.twig' %}*/
/* */
/* {% block stylesheets %}*/
/*     <!-- Bootstrap 3.3.5 -->*/
/*    {# <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">*/
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
/* #}*/
/* */
/*     <!-- DataTables -->*/
/*     <link rel="stylesheet" href="{{ asset('plugins/datatables/dataTables.bootstrap.css') }}">*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/*     {#*/
/*         <div id="imgPatient" style="width: 150px ; height: 150px;">*/
/*         </div>*/
/*         #}{#{{ form_start(form) }}*/
/*             {{ form_widget(form) }}*/
/*             <input type="submit" value="Create" />*/
/*         {{ form_end(form) }}#}*/
/* */
/*     {#*/
/*         <div style="background-color: white;" class="col-md-12">*/
/*             <div class="">*/
/*                 <div class=" ">*/
/*                     <h4><strong>Ajout</strong> <span class="semi-bold">Patient</span></h4>*/
/*                 </div>*/
/*                 </br>*/
/*                 </br>*/
/*                 {{ form_start(form) }}*/
/* */
/*                 <div class="row form-row">*/
/*                     <div class="col-md-3">*/
/*                         <label class="form-label">Nom : </label>*/
/*                         <div class="input-group transparent clockpicker ">*/
/*                             {{ form_widget(form.nom, { 'attr': {'class': 'form-control nom'} }) }}*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="col-md-3">*/
/*                         <label class="form-label">Prenom : </label>*/
/*                         <div class="input-group transparent clockpicker ">*/
/*                             {{ form_widget(form.prenom, { 'attr': {'class': 'form-control prenom'} }) }}*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="col-md-3">*/
/*                         <label class="form-label">Date de Naissance : </label>*/
/*                         {{ form_widget(form.dateNaissance, { 'attr': {'class': 'form-control dateNaissance  '} }) }}*/
/*                     </div>*/
/*                 </div>*/
/*                 </br>*/
/*                 <div class="row form-row">*/
/*                     <div class="col-md-3">*/
/*                         <label>Tel Mobile  : </label>*/
/*                         <div class="input-group transparent  ">*/
/*                             {{ form_widget(form.telMobile, { 'attr': {'class': 'form-control firstDay telMobile'} }) }}*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="col-md-4">*/
/*                         <label>Tel Fixe  : </label>*/
/*                         <div class="input-group transparent  ">*/
/*                             {{ form_widget(form.telFix, { 'attr': {'class': 'form-control langCalendar telFixe'} }) }}*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="col-md-3">*/
/*                         <label class="form-label">Email  : </label>*/
/*                         <div class="input-group transparent">*/
/*                             {{ form_widget(form.email, { 'attr': {'class': 'email'} }) }}*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/* */
/* */
/*                 <input class="btn btn-info  pull-right" type="submit" value="Configure"/>*/
/*                 {{ form_end(form) }}*/
/*             </div>*/
/* */
/*         </div>*/
/*     #}*/
/*     <div class="row -align-center">*/
/* */
/*         <div class="col-md-11 -align-center">*/
/*             <div class="box">*/
/*                 <div style="background-color: #28f0ea;" class="box-header with-border border-color">*/
/*                     <h3 class="box-title -align-center">Formulaire d'Ajout :</h3>*/
/*                 </div>*/
/*                 {{ form_start(form , { 'attr': {'class': 'form-horizontal'} }) }}*/
/*                 <div class="box-body">*/
/*                     <div class="form-group">*/
/*                         <label for="inputEmail3" class="col-sm-2 control-label">nom :</label>*/
/*                         <div class="col-sm-4">*/
/*                             {{ form_widget(form.nom, { 'attr': {'class': 'form-control titre1'} }) }}*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         <label class="col-sm-2 control-label">prenom :</label>*/
/*                         <div class="col-sm-2">*/
/*                             {{ form_widget(form.prenom, { 'attr': {'class': 'form-control  duree1'} }) }}*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         <label class="col-sm-2 control-label">date :</label>*/
/*                         <div class="col-sm-4">*/
/*                             {{ form_widget(form.dateNaissance, { 'attr': {'class': 'form-control my-colorpicker5 couleur1'} }) }}*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         <label class="col-sm-2 control-label">telMobile :</label>*/
/*                         <div class="col-sm-4">*/
/*                             {{ form_widget(form.telMobile, { 'attr': {'class': 'form-control description1'} }) }}*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         <label class="col-sm-2 control-label">telFixe :</label>*/
/*                         <div class="col-sm-4">*/
/*                             {{ form_widget(form.telFix, { 'attr': {'class': 'form-control description1'} }) }}*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         <label class="col-sm-2 control-label">Email :</label>*/
/*                         <div class="col-sm-4">*/
/*                             {{ form_widget(form.email, { 'attr': {'class': 'form-control description1'} }) }}*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         <label class="col-sm-2 control-label">Adresse :</label>*/
/*                         <div class="col-sm-4">*/
/*                             {{ form_widget(form.adresse, { 'attr': {'class': 'form-control description1'} }) }}*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         <label class="col-sm-2 control-label">Adresse :</label>*/
/*                         <div class="col-sm-4">*/
/*                             {{ form_widget(form.file, { 'attr': {'class': 'form-control btn btn-info file'} }) }}*/
/*                         </div>*/
/*                     </div>*/
/*                     <div style="margin-top: -300px; margin-right: 60px; width: 150px; height: 150px ;"*/
/*                          class="pull-right  image">*/
/*                         <img style=" width:inherit; width: 150px; height: 150px ;" id="myImage"*/
/*                              src="{{ asset("assets/img/user2-160x160.jpg") }}" class="img-circle" alt="User Image">*/
/*                     </div>*/
/*                     <input id="addBtn" title="koko"*/
/*                            type="submit" class="btn btn-info btn-cons pull-right" value="Ajouter"/>*/
/*                 </div>*/
/*                 {#<div class="box-footer">*/
/*                 </div>#}*/
/*                 {{ form_end(form) }}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="box">*/
/*         <div class="box-body">*/
/*             <table  class="table table-bordered  koko -align-center table-hover">*/
/*                 <thead style="background-color: #28f0ea;">*/
/*                 <tr>*/
/*                     <th>Nom & Prenom</th>*/
/*                     <th> tel (min)</th>*/
/*                     <th>Email</th>*/
/*                     <th>Adresse</th>*/
/*                     <th>Actions</th>*/
/*                 </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                 {% for patient in patients %}*/
/*                     <tr></tr>*/
/*                     <td>*/
/*                         <img style=" width:inherit; width: 50px; height: 50px ;" id="" src="{{ asset("assets/img/user2-160x160.jpg") }}" class="img-circle" alt="User Image">*/
/*                         {{ patient.nom }} {{ patient.prenom }}</td>*/
/*                     <td> {{ patient.telMobile }}</td>*/
/*                     <td>{{ patient.email }} </td>*/
/*                     <td>{{ patient.adresse }}</td>*/
/*                     <td>*/
/*                         <a  class="glyphicon glyphicon-trash delete"*/
/*                            data-toggle="tooltip"  title="Supprimer"*/
/*                         ></a>*/
/*                         <a   title="modifier"*/
/*                              class="glyphicon glyphicon-pencil edit"></a>*/
/*                     </td>*/
/*                     </tr>*/
/*                 {% endfor %}*/
/*                 </tbody>*/
/*                 <tfoot>*/
/*                 </tfoot>*/
/*             </table>*/
/*         </div>*/
/*     </div>*/
/* */
/* */
/* */
/* {% endblock %}*/
/* */
/* */
/* */
/* {% block javascripts %}*/
/*     <!-- DataTables -->*/
/*     <script src="{{ asset("plugins/datatables/jquery.dataTables.min.js") }}"></script>*/
/*     <script src="{{ asset("plugins/datatables/dataTables.bootstrap.min.js") }}"></script>*/
/*     <script>*/
/* */
/*         $(function () {*/
/* */
/*             $('.koko').DataTable({*/
/*                 "paging": true,*/
/*                 "lengthChange": true,*/
/*                 "searching": true,*/
/*                 "ordering": true,*/
/*                 "info": true,*/
/*                 "autoWidth": true,*/
/*                 "infoEmpty": "Aucun Type Trouver :)"*/
/*             });*/
/* */
/* */
/*             $('#patient_file').change(function () {*/
/* */
/*                 console.log($('#patient_file').val());*/
/*                 $('#myImage').attr('src', '{{ asset("uploads/2601768a567550e18d2e9c5a85906babca31ec4e.jpeg") }}');*/
/*             });*/
/* */
/* */
/*         });*/
/* */
/* */
/*     </script>*/
/* {% endblock %}*/
/* */
