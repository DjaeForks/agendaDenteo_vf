<?php

/* EvenementBundle:rdvtype:new.html.twig */
class __TwigTemplate_cec7f1782d2d324cf15eea26c00350dcf8beadb94019ba13d0fdc6fb5a4da09d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "EvenementBundle:rdvtype:new.html.twig", 1);
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
        $__internal_522cf1708f485468194c8d12afd68da6cd946b8bc76b06d5b1795e5a3a1596be = $this->env->getExtension("native_profiler");
        $__internal_522cf1708f485468194c8d12afd68da6cd946b8bc76b06d5b1795e5a3a1596be->enter($__internal_522cf1708f485468194c8d12afd68da6cd946b8bc76b06d5b1795e5a3a1596be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EvenementBundle:rdvtype:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_522cf1708f485468194c8d12afd68da6cd946b8bc76b06d5b1795e5a3a1596be->leave($__internal_522cf1708f485468194c8d12afd68da6cd946b8bc76b06d5b1795e5a3a1596be_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_abf8214b1f82a33ff002aca520620c94cf7c32faf42c6755ae7cd389ace09892 = $this->env->getExtension("native_profiler");
        $__internal_abf8214b1f82a33ff002aca520620c94cf7c32faf42c6755ae7cd389ace09892->enter($__internal_abf8214b1f82a33ff002aca520620c94cf7c32faf42c6755ae7cd389ace09892_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "
    <style>
        #loading {

            margin-left: auto;
            margin-right: 2%;
            width: 15%;
            text-align: center;
        }
    </style>
";
        
        $__internal_abf8214b1f82a33ff002aca520620c94cf7c32faf42c6755ae7cd389ace09892->leave($__internal_abf8214b1f82a33ff002aca520620c94cf7c32faf42c6755ae7cd389ace09892_prof);

    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        $__internal_96096819f063ade3788db000b2e495dd810e3b18d55bb48e5bf2e06e2a442af4 = $this->env->getExtension("native_profiler");
        $__internal_96096819f063ade3788db000b2e495dd810e3b18d55bb48e5bf2e06e2a442af4->enter($__internal_96096819f063ade3788db000b2e495dd810e3b18d55bb48e5bf2e06e2a442af4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 15
        echo "


    <div class=\"row -align-center\">

        <div class=\"col-md-11  -align-center\">
            <div class=\"box\">
                <div style=\"background-color: #28f0ea;\" class=\"box-header with-border border-color\">
                    <h3 class=\"box-title -align-center\">Formulaire d'Ajout :</h3>
                </div>
                ";
        // line 25
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
                <div class=\"box-body\">
                    <div class=\"form-group\">
                        <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">Titre :</label>
                        <div class=\"col-sm-4\">
                            ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre", array()), 'widget', array("attr" => array("class" => "form-control titre1")));
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\">Duree :</label>
                        <div class=\"col-sm-2\">
                            ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "duree", array()), 'widget', array("attr" => array("class" => "form-control select2 duree1")));
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\">Couleur :</label>
                        <div class=\"col-sm-4\">
                            ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "couleur", array()), 'widget', array("attr" => array("class" => "form-control my-colorpicker5 couleur1")));
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\">Description :</label>
                        <div class=\"col-sm-4\">
                            ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget', array("attr" => array("class" => "form-control description1")));
        echo "
                        </div>
                    </div>

                    <input id=\"addBtn\" type=\"submit\" class=\"btn btn-info btn-cons pull-right\" value=\"Ajouter\"/>
                </div>
                ";
        // line 57
        echo "                ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
    </div>


    <div class=\"box\">
        <div id=\"loading\">
            <span>  <img id=\"imgLoading\" src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("icones/chargement.gif"), "html", null, true);
        echo "\" width=\"25%\" height=\"25%\"/></span>
            <!--    <span class=\"lite-text-shadow\" >Chargement du calendrier</span> -->
        </div>
        <div class=\"box-body\">
            <table id=\"example2\" class=\"table table-bordered  -align-center table-hover\">
                <thead style=\"background-color: #28f0ea;\">
                <tr>
                    <th>Titre</th>
                    <th>Duree (min)</th>
                    <th>Couleur</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rdvTypes"]) ? $context["rdvTypes"] : $this->getContext($context, "rdvTypes")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 81
            echo "                    <tr id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
            echo "\">
                        <td style=\"color: ";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "couleur", array()), "html", null, true);
            echo ";\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "titre", array()), "html", null, true);
            echo "</td>


                        <td>";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "duree", array()), "html", null, true);
            echo "</td>
                        <td>
                            <label class=\"tag label\"
                                   style=\"background-color: ";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "couleur", array()), "html", null, true);
            echo "; display : inline-block ; width:170px;\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "couleur", array()), "html", null, true);
            echo "</label>
                        </td>
                        <td>";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "description", array()), "html", null, true);
            echo "</td>

                        <td style=\"text-align: center ;\">
                            <a title=\"Supprimer\" id=\"delete_";
            // line 93
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
            echo "\"
                               data-toggle=\"tooltip\" data-placement=\"top\" class=\"glyphicon glyphicon-trash delete\"></a>
                            <a data-toggle=\"tooltip\" data-placement=\"top\" id=\"";
            // line 95
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
            echo "\" title=\"modifier\"
                               class=\"glyphicon glyphicon-pencil edit\"></a>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "                </tbody>
                <tfoot>
                </tfoot>
            </table>
        </div>
    </div>




";
        
        $__internal_96096819f063ade3788db000b2e495dd810e3b18d55bb48e5bf2e06e2a442af4->leave($__internal_96096819f063ade3788db000b2e495dd810e3b18d55bb48e5bf2e06e2a442af4_prof);

    }

    // line 112
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ab74fedd76b496142665166de2317a2f13259b6c765a7d625ed00bb9624f8bb7 = $this->env->getExtension("native_profiler");
        $__internal_ab74fedd76b496142665166de2317a2f13259b6c765a7d625ed00bb9624f8bb7->enter($__internal_ab74fedd76b496142665166de2317a2f13259b6c765a7d625ed00bb9624f8bb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 113
        echo "
    <script>


        \$(function () {

            \$('#loading').hide();


            \$('.delete').on('click', function () {

                \$.confirm({
                    theme: 'black'
                });
            });
            /*
             \$('.delete').on('click', function () {
             var id = \$(this).attr('id').replace('delete_', '');
             console.log('id : ' + id);
             confirm('Vous voulez vraiment supprimer ??');
             \$.ajax({
             type: 'GET',
             url: 'http://localhost/denteo2/web/app_dev.php/rdvType/delete/' + id,
             //url: Routing.generate('rdvtype_delete', { id: idd }),
             beforeSend: function () {
             /!*
             \$('#imgLoading').attr('src', \"";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("icones/chargement.gif"), "html", null, true);
        echo "\");
             *!/
             \$('#imgLoading').show();
             },
             success: function (data) {
             \$('tr#' + id).remove();
             //\$.growl.notice({ message: \"Suppression Avec Succes :)\" });
             \$.growl({ title: \"Success\", message: \"Votre Rdv a été bien Supprimer\" });
             \$('#loading').hide();

             }
             });


             });*/


            \$('#example2').DataTable({
                \"paging\": true,
                \"lengthChange\": true,
                \"searching\": true,
                \"ordering\": true,
                \"info\": true,
                \"autoWidth\": true,
                \"infoEmpty\": \"Aucun Type Trouver :)\"
            });

            \$(\".my-colorpicker5\").colorpicker();

            \$(\"#modifier\").click(function () {

                \$(\"#newRdv\").modal().show();

            });

            \$('.edit').on('click', function () {
                var id = \$(this).attr('id');
                var tr = \$('tr#' + id);
                var titre = tr.find('td:nth(0)');
                var duree = tr.find('td:nth(1)');
                var couleur = tr.find('td:nth(2)');
                var description = tr.find('td:nth(3)');

                \$('.titre1').val(titre.text());
                \$('.duree1').val(duree.text());
                \$('.couleur1').val(couleur.text());
                \$('.description1').val(description.text());
            });


        });

    </script>
";
        
        $__internal_ab74fedd76b496142665166de2317a2f13259b6c765a7d625ed00bb9624f8bb7->leave($__internal_ab74fedd76b496142665166de2317a2f13259b6c765a7d625ed00bb9624f8bb7_prof);

    }

    public function getTemplateName()
    {
        return "EvenementBundle:rdvtype:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  254 => 139,  226 => 113,  220 => 112,  203 => 100,  192 => 95,  187 => 93,  181 => 90,  174 => 88,  168 => 85,  160 => 82,  155 => 81,  151 => 80,  133 => 65,  121 => 57,  112 => 48,  103 => 42,  94 => 36,  85 => 30,  77 => 25,  65 => 15,  59 => 14,  42 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends '::layout.html.twig' %}*/
/* {% block stylesheets %}*/
/* */
/*     <style>*/
/*         #loading {*/
/* */
/*             margin-left: auto;*/
/*             margin-right: 2%;*/
/*             width: 15%;*/
/*             text-align: center;*/
/*         }*/
/*     </style>*/
/* {% endblock %}*/
/* {% block content %}*/
/* */
/* */
/* */
/*     <div class="row -align-center">*/
/* */
/*         <div class="col-md-11  -align-center">*/
/*             <div class="box">*/
/*                 <div style="background-color: #28f0ea;" class="box-header with-border border-color">*/
/*                     <h3 class="box-title -align-center">Formulaire d'Ajout :</h3>*/
/*                 </div>*/
/*                 {{ form_start(form , { 'attr': {'class': 'form-horizontal'} }) }}*/
/*                 <div class="box-body">*/
/*                     <div class="form-group">*/
/*                         <label for="inputEmail3" class="col-sm-2 control-label">Titre :</label>*/
/*                         <div class="col-sm-4">*/
/*                             {{ form_widget(form.titre, { 'attr': {'class': 'form-control titre1'} }) }}*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         <label class="col-sm-2 control-label">Duree :</label>*/
/*                         <div class="col-sm-2">*/
/*                             {{ form_widget(form.duree, { 'attr': {'class': 'form-control select2 duree1'} }) }}*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         <label class="col-sm-2 control-label">Couleur :</label>*/
/*                         <div class="col-sm-4">*/
/*                             {{ form_widget(form.couleur, { 'attr': {'class': 'form-control my-colorpicker5 couleur1'} }) }}*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         <label class="col-sm-2 control-label">Description :</label>*/
/*                         <div class="col-sm-4">*/
/*                             {{ form_widget(form.description, { 'attr': {'class': 'form-control description1'} }) }}*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <input id="addBtn" type="submit" class="btn btn-info btn-cons pull-right" value="Ajouter"/>*/
/*                 </div>*/
/*                 {#<div class="box-footer">*/
/* */
/*                 </div>#}*/
/*                 {{ form_end(form) }}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/* */
/*     <div class="box">*/
/*         <div id="loading">*/
/*             <span>  <img id="imgLoading" src="{{ asset('icones/chargement.gif') }}" width="25%" height="25%"/></span>*/
/*             <!--    <span class="lite-text-shadow" >Chargement du calendrier</span> -->*/
/*         </div>*/
/*         <div class="box-body">*/
/*             <table id="example2" class="table table-bordered  -align-center table-hover">*/
/*                 <thead style="background-color: #28f0ea;">*/
/*                 <tr>*/
/*                     <th>Titre</th>*/
/*                     <th>Duree (min)</th>*/
/*                     <th>Couleur</th>*/
/*                     <th>Description</th>*/
/*                     <th>Actions</th>*/
/*                 </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                 {% for item in rdvTypes %}*/
/*                     <tr id="{{ item.id }}">*/
/*                         <td style="color: {{ item.couleur }};">{{ item.titre }}</td>*/
/* */
/* */
/*                         <td>{{ item.duree }}</td>*/
/*                         <td>*/
/*                             <label class="tag label"*/
/*                                    style="background-color: {{ item.couleur }}; display : inline-block ; width:170px;">{{ item.couleur }}</label>*/
/*                         </td>*/
/*                         <td>{{ item.description }}</td>*/
/* */
/*                         <td style="text-align: center ;">*/
/*                             <a title="Supprimer" id="delete_{{ item.id }}"*/
/*                                data-toggle="tooltip" data-placement="top" class="glyphicon glyphicon-trash delete"></a>*/
/*                             <a data-toggle="tooltip" data-placement="top" id="{{ item.id }}" title="modifier"*/
/*                                class="glyphicon glyphicon-pencil edit"></a>*/
/*                         </td>*/
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
/* */
/* {% endblock content %}*/
/* */
/* {% block javascripts %}*/
/* */
/*     <script>*/
/* */
/* */
/*         $(function () {*/
/* */
/*             $('#loading').hide();*/
/* */
/* */
/*             $('.delete').on('click', function () {*/
/* */
/*                 $.confirm({*/
/*                     theme: 'black'*/
/*                 });*/
/*             });*/
/*             /**/
/*              $('.delete').on('click', function () {*/
/*              var id = $(this).attr('id').replace('delete_', '');*/
/*              console.log('id : ' + id);*/
/*              confirm('Vous voulez vraiment supprimer ??');*/
/*              $.ajax({*/
/*              type: 'GET',*/
/*              url: 'http://localhost/denteo2/web/app_dev.php/rdvType/delete/' + id,*/
/*              //url: Routing.generate('rdvtype_delete', { id: idd }),*/
/*              beforeSend: function () {*/
/*              /!**/
/*              $('#imgLoading').attr('src', "{{ asset('icones/chargement.gif') }}");*/
/*              *!/*/
/*              $('#imgLoading').show();*/
/*              },*/
/*              success: function (data) {*/
/*              $('tr#' + id).remove();*/
/*              //$.growl.notice({ message: "Suppression Avec Succes :)" });*/
/*              $.growl({ title: "Success", message: "Votre Rdv a été bien Supprimer" });*/
/*              $('#loading').hide();*/
/* */
/*              }*/
/*              });*/
/* */
/* */
/*              });*//* */
/* */
/* */
/*             $('#example2').DataTable({*/
/*                 "paging": true,*/
/*                 "lengthChange": true,*/
/*                 "searching": true,*/
/*                 "ordering": true,*/
/*                 "info": true,*/
/*                 "autoWidth": true,*/
/*                 "infoEmpty": "Aucun Type Trouver :)"*/
/*             });*/
/* */
/*             $(".my-colorpicker5").colorpicker();*/
/* */
/*             $("#modifier").click(function () {*/
/* */
/*                 $("#newRdv").modal().show();*/
/* */
/*             });*/
/* */
/*             $('.edit').on('click', function () {*/
/*                 var id = $(this).attr('id');*/
/*                 var tr = $('tr#' + id);*/
/*                 var titre = tr.find('td:nth(0)');*/
/*                 var duree = tr.find('td:nth(1)');*/
/*                 var couleur = tr.find('td:nth(2)');*/
/*                 var description = tr.find('td:nth(3)');*/
/* */
/*                 $('.titre1').val(titre.text());*/
/*                 $('.duree1').val(duree.text());*/
/*                 $('.couleur1').val(couleur.text());*/
/*                 $('.description1').val(description.text());*/
/*             });*/
/* */
/* */
/*         });*/
/* */
/*     </script>*/
/* {% endblock %}*/
/* */
/* */
