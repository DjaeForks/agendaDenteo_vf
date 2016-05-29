<?php

/* EvenementBundle:Default:Agenda.html.twig */
class __TwigTemplate_b55232a60146c13cd1b8f44278dc07d7cec8352d6d32893872c07762f07f5c28 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "EvenementBundle:Default:Agenda.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
            'rdvForm' => array($this, 'block_rdvForm'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8f7ed433f88aeda5bd8221daa0036aa494d87809538100f66dd76dd9828e62d8 = $this->env->getExtension("native_profiler");
        $__internal_8f7ed433f88aeda5bd8221daa0036aa494d87809538100f66dd76dd9828e62d8->enter($__internal_8f7ed433f88aeda5bd8221daa0036aa494d87809538100f66dd76dd9828e62d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EvenementBundle:Default:Agenda.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f7ed433f88aeda5bd8221daa0036aa494d87809538100f66dd76dd9828e62d8->leave($__internal_8f7ed433f88aeda5bd8221daa0036aa494d87809538100f66dd76dd9828e62d8_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c4b25288afe7d42cd3ac44a9006a167bc2f27ca023ac997e3e93191137500ba3 = $this->env->getExtension("native_profiler");
        $__internal_c4b25288afe7d42cd3ac44a9006a167bc2f27ca023ac997e3e93191137500ba3->enter($__internal_c4b25288afe7d42cd3ac44a9006a167bc2f27ca023ac997e3e93191137500ba3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/fullcalendar/fullcalendar.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/fullcalendar/fullcalendar.print.css"), "html", null, true);
        echo "\" media=\"print\">
    <style>
        #loading {

            position: fixed;
            top: 55px;
            left: 0;
            right: 0;
            margin-left: 45%;
            margin-right: auto;
            width: 15%;

            text-align: center;
            z-index: 3;

        }

        .modal {
            text-align: center;
            padding: 0 !important;

        }

        .modal:before {
            content: '';
            display: inline-block;
            height: 100%;
            vertical-align: middle;
            margin-right: -4px; /* Adjusts for spacing */
            background-color: green;

        }

        .modal-dialog {
            display: inline-block;
            text-align: left;
            vertical-align: middle;
            background-color: #444444;

        }



        .modal-title {
            color: black;
            font-family: \"Brush Script MT\";
            font-size: 30px;
  }

        .modal-header {
            background-color: #3c8dbc;
        }
    </style>
";
        
        $__internal_c4b25288afe7d42cd3ac44a9006a167bc2f27ca023ac997e3e93191137500ba3->leave($__internal_c4b25288afe7d42cd3ac44a9006a167bc2f27ca023ac997e3e93191137500ba3_prof);

    }

    // line 58
    public function block_content($context, array $blocks = array())
    {
        $__internal_77bfb74f30452d28d47954a18bf044b16ee61217d953dabbd9da33cda9c5f5b7 = $this->env->getExtension("native_profiler");
        $__internal_77bfb74f30452d28d47954a18bf044b16ee61217d953dabbd9da33cda9c5f5b7->enter($__internal_77bfb74f30452d28d47954a18bf044b16ee61217d953dabbd9da33cda9c5f5b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 59
        echo "
    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
        <h1>
            Calendar
            <small>Add Events</small>
        </h1>
        <ol class=\"breadcrumb\">
            <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i> Home</a></li>
            <li><a href=\"#\">Calendar</a></li>
            <li class=\"active\">Add</li>
        </ol>
        <!-- Main content -->
    </section>
    <section class=\"content\">
        <div class=\"row\">
            <div class=\"col-md-3\">
                <div class=\"box box-solid\">
                    <div class=\"box-header with-border\">
                        <h4 class=\"box-title\">Les types Rdvs</h4>
                    </div>
                    <div class=\"box-body\">
                        <!-- the events -->
                        <div id=\"external-events\">

                            <div class=\"checkbox\">
                                <label for=\"drop-remove\">
                                    <input type=\"checkbox\" id=\"drop-remove\">
                                    remove after drop
                                </label>
                            </div>
                        </div>
                    </div><!-- /.box-body -->
                </div><!-- /. box -->
                <div class=\"box box-solid\">
                    <div class=\"box-header with-border\">
                        <h3 class=\"box-title\">Proposer un type de Rdv</h3>
                    </div>
                    <div class=\"box-body\">
                        <div class=\"btn-group\" style=\"width: 100%; margin-bottom: 10px;\">
                            <!--<button type=\"button\" id=\"color-chooser-btn\" class=\"btn btn-info btn-block dropdown-toggle\" data-toggle=\"dropdown\">Color <span class=\"caret\"></span></button>-->
                            <ul class=\"fc-color-picker\" id=\"color-chooser\">
                                <li><a class=\"text-aqua\" href=\"#\"><i class=\"fa fa-square\"></i></a></li>
                                <li><a class=\"text-blue\" href=\"#\"><i class=\"fa fa-square\"></i></a></li>
                                <li><a class=\"text-light-blue\" href=\"#\"><i class=\"fa fa-square\"></i></a></li>
                                <li><a class=\"text-teal\" href=\"#\"><i class=\"fa fa-square\"></i></a></li>
                                <li><a class=\"text-yellow\" href=\"#\"><i class=\"fa fa-square\"></i></a></li>
                                <li><a class=\"text-orange\" href=\"#\"><i class=\"fa fa-square\"></i></a></li>
                                <li><a class=\"text-green\" href=\"#\"><i class=\"fa fa-square\"></i></a></li>
                                <li><a class=\"text-lime\" href=\"#\"><i class=\"fa fa-square\"></i></a></li>
                                <li><a class=\"text-red\" href=\"#\"><i class=\"fa fa-square\"></i></a></li>
                                <li><a class=\"text-purple\" href=\"#\"><i class=\"fa fa-square\"></i></a></li>
                                <li><a class=\"text-fuchsia\" href=\"#\"><i class=\"fa fa-square\"></i></a></li>
                                <li><a class=\"text-muted\" href=\"#\"><i class=\"fa fa-square\"></i></a></li>
                                <li><a class=\"text-navy\" href=\"#\"><i class=\"fa fa-square\"></i></a></li>
                            </ul>
                        </div><!-- /btn-group -->
                        <div class=\"input-group\">
                            <input id=\"new-event\" type=\"text\" class=\"form-control\" placeholder=\"Event Title\">
                            <div class=\"input-group-btn\">
                                <button id=\"add-new-event\" type=\"button\" title='koko'
                                        class=\"toooltip btn btn-primary btn-flat\">Add
                                </button>
                            </div><!-- /btn-group -->
                        </div><!-- /input-group -->
                    </div>
                </div>
            </div><!-- /.col -->
            <div class=\"col-md-9\">
                <div id=\"loading\" class=\" \">
                    <span>   <img src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("icons/hamid.gif"), "html", null, true);
        echo "\" width=\"25%\" height=\"25%\"/> </span>
                    <!--    <span class=\"lite-text-shadow\" >Chargement du calendrier</span> -->
                </div>
                <div class=\"box box-primary\">

                    <div class=\"box-body no-padding\">
                        <!-- THE CALENDAR -->
                        <div id=\"calendar\">

                        </div>
                    </div><!-- /.box-body -->
                </div><!-- /. box -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->
    <!-- Control Sidebar -->

    <div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" data-toggle=\"modal\" aria-labelledby=\"myModalLabel\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span
                                aria-hidden=\"true\">&times;</span></button>
                    <h4 class=\"modal-title\" id=\"myModalLabel\">Infos Rendez-vous</h4>
                </div>
                <div class=\"modal-body\">
                    <p id=\"details\"></p>

                </div>

                <div class=\"modal-footer\">
                    <button class=\"btn btn-success\" id=\"modalModifier\" data-dismiss=\"modal\">Modifier</button>
                    <button  class=\"btn btn-danger\" id=\"supprimerModal\" data-dismiss=\"modal\">Supprimer</button>
                    <button type=\"button\" class=\"btn btn-default pull-left\" data-dismiss=\"modal\">Fermer</button>
                </div>
            </div>
        </div>
    </div>

    <div class=\"modal fade\" id=\"modalDelimiteur\" tabindex=\"-1\" role=\"dialog\" data-toggle=\"modal\"
         aria-labelledby=\"myModalLabel\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">

                <div class=\"modal-body\">
                    <p id=\"detailsD\"></p>
                    <form>
                        <input type=\"text\" placeholder=\"Titre\" class=\"form-control input-sm\"><br/>
                        <input type=\"text\" placeholder=\"Couleur\" class=\"form-control input-sm\"><br/>
                        <button type=\"submit\" class=\"btn btn-primary\" id=\"addDelimiteur\" data-dismiss=\"modal\">Nouveau
                            Délimiteur
                        </button>
                        <button class=\"btn btn-primary\" id=\"supprimerDelimiteur\" data-dismiss=\"modal\">Fermer</button>
                    </form>
                </div>

                <div class=\"modal-footer\">

                </div>
            </div>
        </div>
    </div>

";
        
        $__internal_77bfb74f30452d28d47954a18bf044b16ee61217d953dabbd9da33cda9c5f5b7->leave($__internal_77bfb74f30452d28d47954a18bf044b16ee61217d953dabbd9da33cda9c5f5b7_prof);

    }

    // line 193
    public function block_rdvForm($context, array $blocks = array())
    {
        $__internal_7b32e4ddf0c8239bad1ed1585b0f0b50e70972d183239c4ef400f0a0fe838015 = $this->env->getExtension("native_profiler");
        $__internal_7b32e4ddf0c8239bad1ed1585b0f0b50e70972d183239c4ef400f0a0fe838015->enter($__internal_7b32e4ddf0c8239bad1ed1585b0f0b50e70972d183239c4ef400f0a0fe838015_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "rdvForm"));

        // line 194
        echo "
    <div id=\"rootwizard\" class=\"col-md-12\">
        <div class=\"form-wizard-steps\">
            <ul class=\"wizard-steps\">
                <li class=\"\" data-target=\"#step1\"><a href=\"#tab1\" data-toggle=\"tab\"> <span class=\"step\">1</span>
                        <span class=\"title\">Basic information</span> </a></li>
                <li data-target=\"#step2\" class=\"\"><a href=\"#tab2\" data-toggle=\"tab\"> <span class=\"step\">2</span>
                        <span class=\"title\">Account information</span> </a></li>

            </ul>
            <div class=\"clearfix\"></div>
        </div>
        <div class=\"tab-content transparent\">
            <div class=\"tab-pane\" id=\"tab1\"><br>
                <h4 class=\"semi-bold\">Step 1 - <span class=\"light\">Basic Information</span></h4>
                ";
        // line 209
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("id" => "addRdv")));
        echo "
                <div class=\"row\">
                    <div class='col-sm-6 col-md-offset-3 form-group'>
                        <label>Type de Rendez-Vous</label>
                        <select id=\"mySelect\" class=\"form-control input-sm\" name=\"rdvTtpee\">
                            <option vlaue=\"#\">--SELECT--</option>
                            ";
        // line 215
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rdvTypes"]) ? $context["rdvTypes"] : $this->getContext($context, "rdvTypes")));
        foreach ($context['_seq'] as $context["_key"] => $context["rdv"]) {
            // line 216
            echo "                                <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["rdv"], "id", array()), "html", null, true);
            echo "\" data-duree=\"";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["rdv"], "duree", array()), "H:i"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["rdv"], "titre", array()), "html", null, true);
            echo "
                                    (";
            // line 217
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["rdv"], "duree", array()), "H:i"), "html", null, true);
            echo ")
                                </option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rdv'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 220
        echo "                        </select>

                        <label>Patient</label>
                        ";
        // line 223
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "patient", array()), 'widget', array("attr" => array("class" => "form-control input-sm")));
        echo "
                        <label>Date et Heure de Debut</label>
                        ";
        // line 225
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateDebut", array()), 'widget', array("attr" => array("class" => "form-control input-sm")));
        echo "


                        <label>Heure de Fin</label>
                        ";
        // line 229
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateFin", array()), 'widget', array("attr" => array("class" => "form-control input-sm")));
        echo "


                        <label>Titre</label>
                        ";
        // line 233
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre", array()), 'widget', array("attr" => array("class" => "form-control input-sm")));
        echo "

                        <label>Description</label>
                        ";
        // line 236
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget', array("attr" => array("class" => "form-control input-sm")));
        echo "<br/>

                        <input type=\"text\" id=\"startMinutes\" value=\"\" hidden/>


                        <button type=\"submit\" id=\"btnSubmit\" class=\"btn btn-primary\">Ajouter</button>
                        <button type=\"button\" id=\"close\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>

                    </div>
                </div>


                ";
        // line 248
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

                ";
        // line 250
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["editForm"]) ? $context["editForm"] : $this->getContext($context, "editForm")), 'form_start', array("attr" => array("id" => "editRdv")));
        echo "
                <div class=\"row\">
                    <div class='col-sm-6 col-md-offset-3 form-group'>


                        <label>Titre</label>
                        ";
        // line 256
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["editForm"]) ? $context["editForm"] : $this->getContext($context, "editForm")), "titre", array()), 'widget', array("attr" => array("class" => "form-control input-sm")));
        echo "

                        <label>Description</label>
                        ";
        // line 259
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["editForm"]) ? $context["editForm"] : $this->getContext($context, "editForm")), "description", array()), 'widget', array("attr" => array("class" => "form-control input-sm")));
        echo "<br/>

                        <label>Patient</label>
                        ";
        // line 262
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["editForm"]) ? $context["editForm"] : $this->getContext($context, "editForm")), "patient", array()), 'widget', array("attr" => array("class" => "form-control input-sm")));
        echo "


                        <button type=\"submit\" id=\"btnModif\" class=\"btn btn-warning\">Modifier</button>
                        <button type=\"button\" id=\"close\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>

                    </div>
                </div>


                ";
        // line 272
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["editForm"]) ? $context["editForm"] : $this->getContext($context, "editForm")), 'form_end');
        echo "
            </div>

            <div class=\"tab-pane\" id=\"tab2\"><br>
                <h4 class=\"semi-bold\">Step 2 - <span class=\"light\">Account Information</span></h4>

            </div>
        </div>
    </div>



";
        
        $__internal_7b32e4ddf0c8239bad1ed1585b0f0b50e70972d183239c4ef400f0a0fe838015->leave($__internal_7b32e4ddf0c8239bad1ed1585b0f0b50e70972d183239c4ef400f0a0fe838015_prof);

    }

    // line 286
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5bb68ebda12f9e0a716d5cb48a070f372be5587b6cfbbf33d7eac85a87f926d7 = $this->env->getExtension("native_profiler");
        $__internal_5bb68ebda12f9e0a716d5cb48a070f372be5587b6cfbbf33d7eac85a87f926d7->enter($__internal_5bb68ebda12f9e0a716d5cb48a070f372be5587b6cfbbf33d7eac85a87f926d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 287
        echo "    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js\"></script>
    <script src=\"";
        // line 288
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/fullcalendar/fullcalendar.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 289
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("JSCalander/lang/lang-all.js"), "html", null, true);
        echo "\"></script>
    <!-- date-range-picker -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js\"></script>
    <script src=\"";
        // line 292
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\"></script>
    <!-- bootstrap color picker -->
    <script src=\"";
        // line 294
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/colorpicker/bootstrap-colorpicker.min.js"), "html", null, true);
        echo "\"></script>
    <!-- bootstrap time picker -->
    <script src=\"";
        // line 296
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/timepicker/bootstrap-timepicker.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 297
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/fullcalendar/lib/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(function () {

            \$('#btnSubmit').click(function () {
                \$('form').submit(function () {
                    \$.ajax({
                        type: 'GET',
                        url: 'http://localhost/denteo2/web/app_dev.php/all',
                        success: function (data) {
                            \$('#calendar').fullCalendar('refrechEvents');
                        }
                    })
                })
            })


            \$('#close').click(function () {
                sidebar.removeClass('control-sidebar-open');
            })

            // Convertir un String en format time
            function durationAsMomentObject(durationAsString) {
                var regExp1 = /^([0-9]|0[0-9]|1[0-9]|2[0-3]):([0-9]|[0-5][0-9])\$/;
                var regExp2 = /^([0-9]|0[0-9]|1[0-9]|2[0-3]):([0-9]|[0-5][0-9]):([0-9]|[0-5][0-9])\$/;
                var durationArray = durationAsString.split(':');
                if (regExp1.test(durationAsString)) {
                    return moment.duration({
                        hours: durationArray[0],
                        minutes: durationArray[1]
                    });
                } else if (regExp2.test(durationAsString)) {
                    return moment.duration({
                        hours: durationArray[0],
                        minutes: durationArray[1],
                        seconds: durationArray[2]
                    });
                } else {
                    throw 'format de durée invalide  choisir entre: HH:MM:SS, HH:MM : ' + durationAsString;
                }
            }

            function updateRdvDuration(event) {
                var duree = durationAsMomentObject(\$('#mySelect option:selected').attr('data-duree'));
                var start = durationAsMomentObject(\$('#startMinutes').text());
                start.add(duree);
                var a = \$('#rdv_dateDebut').val().split(' ');
                \$('#rdv_dateFin').val(a[0] + ' ' + start.hours() + ':' + start.minutes());
            }

            \$('#mySelect').change(function () {
                updateRdvDuration();
            })

            var selectComplete = function (start, end, jsEvent, view) {
                var now = moment();
                var temp = moment(end);
                start = moment(start).format('DD-MM-YYYY HH:mm');
                var startH = moment(start).format('HH:mm');
                end = moment(end).format('DD-MM-YYYY HH:mm');
                var endH = moment(end).format('HH:mm');
                var duration = moment.duration(temp.subtract(start));
                var warningMsg = (now.isAfter(end) && !now.isSame(end)) ? '<strong><span>Attention Vous Avez séléctionné une ancienne date</span></strong>' : '';
                if (!sidebar.hasClass('control-sidebar-open')
                        && !\$('body').hasClass('control-sidebar-open')) {
                    \$('#modalDelimiteur').modal().show();
                }
                \$('#detailsD').html('L\\'intervalle que vous avez choisi est: ' + '<br/>' +
                        'Du: ' + start + '<br/>' +
                        'A: ' + end + '<br/>');
                \$('#addDelimiteur').click(function () {

                    \$.ajax({
                        type: 'get',
                        //url: Routing.generate('addDel', {start: start, end: end}),
                        url: 'http://localhost/denteo2/web/app_dev.php/addDel' + '/' + start + '/' + end,
                        success: function (data) {
                            \$('#calendar').fullCalendar('removeEvents');
                            // \$('#calendar').fullCalendar('refetchEvents');
                            location.reload();
                        }
                    })
                })
            }


            //*******************************************************
            function ini_events(ele) {
                ele.each(function () {

                    // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
                    // it doesn't need to have a start or end
                    var eventObject = {
                        title: \$.trim(\$(this).text()), // use the element's text as the event title

                    };

                    // store the Event Object in the DOM element so we can get to it later
                    \$(this).data('eventObject', eventObject);

                    // make the event draggable using jQuery UI
                    \$(this).draggable({
                        zIndex: 1070,
                        revert: true, // will cause the event to go back to its
                        revertDuration: 0  //  original position after the drag
                    });

                });
            }

            //Sauvgarder les dates anciennes
            var saveOldDragInfo = function (event, jsEvent, ui, view) {
                event.oldStart = event.start;
                event.oldEnd = event.End;
            }

            function calendarSlotDuration() {
                var slot = calendarOptions.slotDuration.split(':');
                return moment.duration({
                    seconds: slot[2],
                    minutes: slot[1],
                    hours: slot[0]
                });
            }

            var deplacerRdvAndMemo = function (event, delta, revertFunc, jsEvent, ui, view) {

                \$.confirm({
                    title: 'Confirmation',
                    theme: 'black',
                    confirmButton: 'Deplacer',
                    cancelButton: 'Annuler',
                    content: 'Vous voulez vraiment deplacer ce Rendez-vous ?',
                    confirm: function () {
                        var now = moment();
                        var start = moment(event.start).format('DD-MM-YYYY');
                        var startH = moment(event.start).format('HH:mm');
                        var end = moment(event.end).format('DD-MM-YYYY');
                        var endH = moment(event.end).format('HH:mm');
                        event.oldStart = null;
                        event.oldEnd = null;

                        \$.ajax({
                            type: 'get',
                            url: Routing.generate('drop', {
                                id: event.id,
                                start: start,
                                startH: startH,
                                end: end,
                                endH: endH
                            }),
                            success: function (data) {
                                \$.growl({title: \"Success\", message: \"Votre Rdv a été Déplacer avec success!\"});
                                \$('#calendar').fullCalendar('refrechEvents');
                            }
                        })
                    },
                    cancel: function () {
                        revertFunc();
                    }
                });


            }

            var calendarLoadingEvent = function (isLoading, view) {
                if (isLoading) {
                    console.log('is loading...');
                    \$('#loading').show();
                    timedFunction = window.setInterval(function () {
                        var newText = '  <span >   <img src=\"";
        // line 467
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("icons/hamid.gif"), "html", null, true);
        echo "\" width=\"25%\" height=\"25%\" /> </span> ';
                        \$('#loading span').replaceWith(newText);
                    }, 400)
                } else {
                    console.log('finish loading');
                    \$('#loading').hide();
                    window.clearInterval(timedFunction);

                }
            }


            //Get the object
            var _this = this;
            //Update options
            var o = \$.AdminLTE.options.controlSidebarOptions;
            //Get the sidebar
            var sidebar = \$(o.selector);


            var date = new Date();
            var d = date.getDate(),
                    m = date.getMonth(),
                    y = date.getFullYear();

            \$('#calendar').fullCalendar({
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay'
                },
                buttonText: {
                    today: 'today',
                    week: 'week',
                    day: 'day'
                },
                //theme: true ,
                //isRTL: true ,
                //weekends: false,
                defaultView: 'agendaWeek',
                events: '";
        // line 507
        echo $this->env->getExtension('routing')->getPath("load_events");
        echo "',
                editable: true,
                axisFormat: 'HH:mm',
                lazyFetching: true,
                //le premier jour de la semaine
                firstDay: ";
        // line 512
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["myConfiguration"]) ? $context["myConfiguration"] : $this->getContext($context, "myConfiguration")), "firstDay", array()), "html", null, true);
        echo ",
                //les jours du calendrier

                hiddenDays: [
                    ";
        // line 516
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["myConfiguration"]) ? $context["myConfiguration"] : $this->getContext($context, "myConfiguration")), "daysSelected", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 517
            echo "                    ";
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo (($this->getAttribute($context["loop"], "last", array())) ? ("") : (","));
            echo "
                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 519
        echo "
                ],

                //weekNumbers:";
        // line 522
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["myConfiguration"]) ? $context["myConfiguration"] : $this->getContext($context, "myConfiguration")), "weeksNumber", array()), "html", null, true);
        echo " ,
                //minTime: '";
        // line 523
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["myConfiguration"]) ? $context["myConfiguration"] : $this->getContext($context, "myConfiguration")), "dateDeb", array()), "h:i"), "html", null, true);
        echo "',
                minTime: '08:00',
                // maxTime: '";
        // line 525
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["myConfiguration"]) ? $context["myConfiguration"] : $this->getContext($context, "myConfiguration")), "dateFin", array()), "h:i"), "html", null, true);
        echo "',
                maxTime: '18:00',
                slotDuration: '00:";
        // line 527
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["myConfiguration"]) ? $context["myConfiguration"] : $this->getContext($context, "myConfiguration")), "creneau", array()), "html", null, true);
        echo ":00',
                droppable: true, // this allows things to be dropped onto the calendar !!!
                //aspectRatio: 2,
                ";
        // line 530
        if ($this->getAttribute((isset($context["myConfiguration"]) ? $context["myConfiguration"] : $this->getContext($context, "myConfiguration")), "weeksNumber", array())) {
            // line 531
            echo "                weekNumbers: true,
                ";
        } else {
            // line 533
            echo "                weekNumbers: false,
                ";
        }
        // line 535
        echo "                eventTextColor: 'black',
                //eventBackgroundColor: '#00c0ef',
                ";
        // line 537
        if (($this->getAttribute((isset($context["myConfiguration"]) ? $context["myConfiguration"] : $this->getContext($context, "myConfiguration")), "lang", array()) == "anglais")) {
            // line 538
            echo "                lang: 'en',
                ";
        } elseif (($this->getAttribute(        // line 539
(isset($context["myConfiguration"]) ? $context["myConfiguration"] : $this->getContext($context, "myConfiguration")), "lang", array()) == "francais")) {
            // line 540
            echo "                lang: 'fr',
                ";
        } else {
            // line 542
            echo "                lang: 'ar',
                ";
        }
        // line 544
        echo "                columnFormat: 'dddd D/M',
                weekNumberTitle: 'week N°',
                dayClick: function (date, jsEvent, view) {

                    \$('#startMinutes').text(date.format('h:mm'));
                    \$('#rdv_dateDebut').val(date.format('YYYY-MM-DD h:mm'));
                    if (!sidebar.hasClass('control-sidebar-open')
                            && !\$('body').hasClass('control-sidebar-open')) {
                        sidebar.addClass('control-sidebar-open');
                        \$('#editRdv').hide();
                        \$('#addRdv').show();
                    } else {

                    }
                },

                eventClick: function (calEvent, jsEvent, view) {
                    \$('#myModal').modal().show();
                    \$('#details').html('Titre :' + calEvent.title + '<br/>' + 'Date de Debut: ' + moment(calEvent.start).format('DD-MM-YYYY h:mm') + '<br/> Heure de Fin: ' + moment(calEvent.end).format('DD-MM-YYYY h:mm'));

                    \$('#supprimerModal').click(function () {
                        \$.confirm({
                            title: 'Confirmation',
                            theme: 'black',
                            confirmButton: 'Supprimer',
                            cancelButton: 'Annuler',
                            content: 'Vous voulez vraiment Supprimer ce Rendez-vous ?',
                            confirm: function () {
                                \$.ajax({
                                    type: 'get',
                                    url: 'http://localhost/denteo2/web/app_dev.php/deleted' + '/' + calEvent.id,
                                    success: function (data) {
                                        \$('#calendar').fullCalendar('removeEvents', calEvent.id);
                                        \$.growl({title: \"Success\", message: \"Votre Rdv a été bien Supprimer \"});
                                        \$('#calendar').fullCalendar('refrechEvents');
                                    }
                                })
                            }
                        });
                    })

                    \$('#modalModifier').click(function () {
                        if (!sidebar.hasClass('control-sidebar-open')
                                && !\$('body').hasClass('control-sidebar-open')) {
                            //Open the sidebar

                            sidebar.addClass('control-sidebar-open');

                            \$('#editRdv').show();
                            \$('#addRdv').hide();

                            \$('#rdv_dateDebut').val(moment(calEvent.start).format('DD-MM-YYYY h:mm'));
                            \$('#rdv_dateFin').val(moment(calEvent.end).format('DD-MM-YYYY h:mm'));
                            \$('#rdv_titre').val(calEvent.title);
                            \$('#btnModif').click(function () {
                                \$.ajax({
                                    type: 'get',
                                    url: 'http://localhost/taskPerson/web/app_dev.php/select' + '/' + calEvent.id,
                                    success: function (data) {
                                        \$('#calendar').fullCalendar('refrech');
                                    }
                                })
                            })

                        } else {

                        }
                        \$('#btnModif').click(function () {
                            \$.ajax({
                                type: 'get',
                                url: 'http://localhost/taskPerson/web/app_dev.php/rdv_modif',
                                success: function (data) {
                                    \$('#calendar').fullCalendar('refrech');
                                }
                            })
                        })

                    })
                },
                eventDrop: deplacerRdvAndMemo,
                eventDragStop: saveOldDragInfo,
                loading: calendarLoadingEvent,
                eventReceive: function (event) {

                },
                eventMouseover: function (event, jsEvent, view) {
                    console.log(event.titre);
                    console.log(event.id);
                    console.log(event.description);
                    console.log(event.dateFin);

                },
                eventRender: function (event, element) {
                    element.tooltipster({
                        contentAsHTML: true,
                        animation: 'fade',
                        delay: 200,
                        content: \$('<strong>Titre :   </strong>' + event.title + '</br><strong>Description :   </strong>' + event.description + '</br><strong>Type : ------</strong></br><strong>Date Debut : </strong>' + event.start.format('DD-MM-YYYY h:mm') + '</br><strong>Date Fin :   </strong>' + event.end.format('DD-MM-YYYY h:mm') + '')
                    })

                },
                drop: function (date, allDay) {
                },
                eventOverlap: false,
                select: selectComplete,
                selectable: true,
                selectHelper: true,
                eventResize: function (event, delta, revertFunc, jsEvent, ui, view) {

                    \$.confirm({
                        title: 'Confirmation',
                        theme: 'black',
                        confirmButton: 'Modifier',
                        cancelButton: 'Annuler',
                        content: 'Vous voulez vraiment modifier la durre de ce Rendez-vous ?',
                        confirm: function () {
                            var now = moment();
                            var end = moment(event.end).format('DD-MM-YYYY');
                            var endH = moment(event.end).format('HH:mm');
                            \$.ajax({
                                type: 'get',
                                //url: Routing.generate('resize_rdv', {id: event.id, end: end ,endH: endH}),
                                url: 'http://localhost/denteo2/web/app_dev.php/resize/' + event.id + '/' + end + '/' + endH,
                                success: function (data) {
                                    \$.growl({title: \"Success\", message: \"la duree est bien Modifier \"});
                                }
                            })
                        },
                        cancel: function () {
                            revertFunc();
                        }
                    });


                }
            });

            /* ADDING EVENTS */
            var currColor = \"#3c8dbc\"; //Red by default
            //Color chooser button
            var colorChooser = \$(\"#color-chooser-btn\");
            \$(\"#color-chooser > li > a\").click(function (e) {
                e.preventDefault();
                //Save color
                currColor = \$(this).css(\"color\");
                //Add color effect to button
                \$('#add-new-event').css({\"background-color\": currColor, \"border-color\": currColor});
            });
            \$(\"#add-new-event\").click(function (e) {
                e.preventDefault();
                //Get value and make sure it is not null
                var val = \$(\"#new-event\").val();
                if (val.length == 0) {
                    return;
                }

                //Create events
                var event = \$(\"<div />\");
                event.css({
                    \"background-color\": currColor,
                    \"border-color\": currColor,
                    \"color\": \"#fff\"
                }).addClass(\"external-event\");
                event.html(val);
                \$('#external-events').prepend(event);

                //Add draggable funtionality
                ini_events(event);
                var moment = event.getDate();
                alert(moment.format());

                //Remove event from text input
                \$(\"#new-event\").val(\"\");
            });


        });

    </script>

";
        
        $__internal_5bb68ebda12f9e0a716d5cb48a070f372be5587b6cfbbf33d7eac85a87f926d7->leave($__internal_5bb68ebda12f9e0a716d5cb48a070f372be5587b6cfbbf33d7eac85a87f926d7_prof);

    }

    public function getTemplateName()
    {
        return "EvenementBundle:Default:Agenda.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  769 => 544,  765 => 542,  761 => 540,  759 => 539,  756 => 538,  754 => 537,  750 => 535,  746 => 533,  742 => 531,  740 => 530,  734 => 527,  729 => 525,  724 => 523,  720 => 522,  715 => 519,  697 => 517,  680 => 516,  673 => 512,  665 => 507,  622 => 467,  449 => 297,  445 => 296,  440 => 294,  435 => 292,  429 => 289,  425 => 288,  422 => 287,  416 => 286,  396 => 272,  383 => 262,  377 => 259,  371 => 256,  362 => 250,  357 => 248,  342 => 236,  336 => 233,  329 => 229,  322 => 225,  317 => 223,  312 => 220,  303 => 217,  294 => 216,  290 => 215,  281 => 209,  264 => 194,  258 => 193,  187 => 129,  115 => 59,  109 => 58,  48 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}
/* {% extends '::layout.html.twig' %}*/
/* {% block stylesheets %}*/
/*     <link rel="stylesheet" href="{{ asset("plugins/fullcalendar/fullcalendar.min.css") }}">*/
/*     <link rel="stylesheet" href="{{ asset("plugins/fullcalendar/fullcalendar.print.css") }}" media="print">*/
/*     <style>*/
/*         #loading {*/
/* */
/*             position: fixed;*/
/*             top: 55px;*/
/*             left: 0;*/
/*             right: 0;*/
/*             margin-left: 45%;*/
/*             margin-right: auto;*/
/*             width: 15%;*/
/* */
/*             text-align: center;*/
/*             z-index: 3;*/
/* */
/*         }*/
/* */
/*         .modal {*/
/*             text-align: center;*/
/*             padding: 0 !important;*/
/* */
/*         }*/
/* */
/*         .modal:before {*/
/*             content: '';*/
/*             display: inline-block;*/
/*             height: 100%;*/
/*             vertical-align: middle;*/
/*             margin-right: -4px; /* Adjusts for spacing *//* */
/*             background-color: green;*/
/* */
/*         }*/
/* */
/*         .modal-dialog {*/
/*             display: inline-block;*/
/*             text-align: left;*/
/*             vertical-align: middle;*/
/*             background-color: #444444;*/
/* */
/*         }*/
/* */
/* */
/* */
/*         .modal-title {*/
/*             color: black;*/
/*             font-family: "Brush Script MT";*/
/*             font-size: 30px;*/
/*   }*/
/* */
/*         .modal-header {*/
/*             background-color: #3c8dbc;*/
/*         }*/
/*     </style>*/
/* {% endblock %}*/
/* {% block content %}*/
/* */
/*     <!-- Content Header (Page header) -->*/
/*     <section class="content-header">*/
/*         <h1>*/
/*             Calendar*/
/*             <small>Add Events</small>*/
/*         </h1>*/
/*         <ol class="breadcrumb">*/
/*             <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>*/
/*             <li><a href="#">Calendar</a></li>*/
/*             <li class="active">Add</li>*/
/*         </ol>*/
/*         <!-- Main content -->*/
/*     </section>*/
/*     <section class="content">*/
/*         <div class="row">*/
/*             <div class="col-md-3">*/
/*                 <div class="box box-solid">*/
/*                     <div class="box-header with-border">*/
/*                         <h4 class="box-title">Les types Rdvs</h4>*/
/*                     </div>*/
/*                     <div class="box-body">*/
/*                         <!-- the events -->*/
/*                         <div id="external-events">*/
/* */
/*                             <div class="checkbox">*/
/*                                 <label for="drop-remove">*/
/*                                     <input type="checkbox" id="drop-remove">*/
/*                                     remove after drop*/
/*                                 </label>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div><!-- /.box-body -->*/
/*                 </div><!-- /. box -->*/
/*                 <div class="box box-solid">*/
/*                     <div class="box-header with-border">*/
/*                         <h3 class="box-title">Proposer un type de Rdv</h3>*/
/*                     </div>*/
/*                     <div class="box-body">*/
/*                         <div class="btn-group" style="width: 100%; margin-bottom: 10px;">*/
/*                             <!--<button type="button" id="color-chooser-btn" class="btn btn-info btn-block dropdown-toggle" data-toggle="dropdown">Color <span class="caret"></span></button>-->*/
/*                             <ul class="fc-color-picker" id="color-chooser">*/
/*                                 <li><a class="text-aqua" href="#"><i class="fa fa-square"></i></a></li>*/
/*                                 <li><a class="text-blue" href="#"><i class="fa fa-square"></i></a></li>*/
/*                                 <li><a class="text-light-blue" href="#"><i class="fa fa-square"></i></a></li>*/
/*                                 <li><a class="text-teal" href="#"><i class="fa fa-square"></i></a></li>*/
/*                                 <li><a class="text-yellow" href="#"><i class="fa fa-square"></i></a></li>*/
/*                                 <li><a class="text-orange" href="#"><i class="fa fa-square"></i></a></li>*/
/*                                 <li><a class="text-green" href="#"><i class="fa fa-square"></i></a></li>*/
/*                                 <li><a class="text-lime" href="#"><i class="fa fa-square"></i></a></li>*/
/*                                 <li><a class="text-red" href="#"><i class="fa fa-square"></i></a></li>*/
/*                                 <li><a class="text-purple" href="#"><i class="fa fa-square"></i></a></li>*/
/*                                 <li><a class="text-fuchsia" href="#"><i class="fa fa-square"></i></a></li>*/
/*                                 <li><a class="text-muted" href="#"><i class="fa fa-square"></i></a></li>*/
/*                                 <li><a class="text-navy" href="#"><i class="fa fa-square"></i></a></li>*/
/*                             </ul>*/
/*                         </div><!-- /btn-group -->*/
/*                         <div class="input-group">*/
/*                             <input id="new-event" type="text" class="form-control" placeholder="Event Title">*/
/*                             <div class="input-group-btn">*/
/*                                 <button id="add-new-event" type="button" title='koko'*/
/*                                         class="toooltip btn btn-primary btn-flat">Add*/
/*                                 </button>*/
/*                             </div><!-- /btn-group -->*/
/*                         </div><!-- /input-group -->*/
/*                     </div>*/
/*                 </div>*/
/*             </div><!-- /.col -->*/
/*             <div class="col-md-9">*/
/*                 <div id="loading" class=" ">*/
/*                     <span>   <img src="{{ asset('icons/hamid.gif') }}" width="25%" height="25%"/> </span>*/
/*                     <!--    <span class="lite-text-shadow" >Chargement du calendrier</span> -->*/
/*                 </div>*/
/*                 <div class="box box-primary">*/
/* */
/*                     <div class="box-body no-padding">*/
/*                         <!-- THE CALENDAR -->*/
/*                         <div id="calendar">*/
/* */
/*                         </div>*/
/*                     </div><!-- /.box-body -->*/
/*                 </div><!-- /. box -->*/
/*             </div><!-- /.col -->*/
/*         </div><!-- /.row -->*/
/*     </section><!-- /.content -->*/
/*     <!-- Control Sidebar -->*/
/* */
/*     <div class="modal fade" id="myModal" tabindex="-1" role="dialog" data-toggle="modal" aria-labelledby="myModalLabel">*/
/*         <div class="modal-dialog" role="document">*/
/*             <div class="modal-content">*/
/*                 <div class="modal-header">*/
/*                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span*/
/*                                 aria-hidden="true">&times;</span></button>*/
/*                     <h4 class="modal-title" id="myModalLabel">Infos Rendez-vous</h4>*/
/*                 </div>*/
/*                 <div class="modal-body">*/
/*                     <p id="details"></p>*/
/* */
/*                 </div>*/
/* */
/*                 <div class="modal-footer">*/
/*                     <button class="btn btn-success" id="modalModifier" data-dismiss="modal">Modifier</button>*/
/*                     <button  class="btn btn-danger" id="supprimerModal" data-dismiss="modal">Supprimer</button>*/
/*                     <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Fermer</button>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="modal fade" id="modalDelimiteur" tabindex="-1" role="dialog" data-toggle="modal"*/
/*          aria-labelledby="myModalLabel">*/
/*         <div class="modal-dialog" role="document">*/
/*             <div class="modal-content">*/
/* */
/*                 <div class="modal-body">*/
/*                     <p id="detailsD"></p>*/
/*                     <form>*/
/*                         <input type="text" placeholder="Titre" class="form-control input-sm"><br/>*/
/*                         <input type="text" placeholder="Couleur" class="form-control input-sm"><br/>*/
/*                         <button type="submit" class="btn btn-primary" id="addDelimiteur" data-dismiss="modal">Nouveau*/
/*                             Délimiteur*/
/*                         </button>*/
/*                         <button class="btn btn-primary" id="supprimerDelimiteur" data-dismiss="modal">Fermer</button>*/
/*                     </form>*/
/*                 </div>*/
/* */
/*                 <div class="modal-footer">*/
/* */
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock content %}*/
/* {% block rdvForm %}*/
/* */
/*     <div id="rootwizard" class="col-md-12">*/
/*         <div class="form-wizard-steps">*/
/*             <ul class="wizard-steps">*/
/*                 <li class="" data-target="#step1"><a href="#tab1" data-toggle="tab"> <span class="step">1</span>*/
/*                         <span class="title">Basic information</span> </a></li>*/
/*                 <li data-target="#step2" class=""><a href="#tab2" data-toggle="tab"> <span class="step">2</span>*/
/*                         <span class="title">Account information</span> </a></li>*/
/* */
/*             </ul>*/
/*             <div class="clearfix"></div>*/
/*         </div>*/
/*         <div class="tab-content transparent">*/
/*             <div class="tab-pane" id="tab1"><br>*/
/*                 <h4 class="semi-bold">Step 1 - <span class="light">Basic Information</span></h4>*/
/*                 {{ form_start(form,{'attr': {'id':'addRdv'} }) }}*/
/*                 <div class="row">*/
/*                     <div class='col-sm-6 col-md-offset-3 form-group'>*/
/*                         <label>Type de Rendez-Vous</label>*/
/*                         <select id="mySelect" class="form-control input-sm" name="rdvTtpee">*/
/*                             <option vlaue="#">--SELECT--</option>*/
/*                             {% for rdv in rdvTypes %}*/
/*                                 <option value="{{ rdv.id }}" data-duree="{{ rdv.duree|date('H:i') }}">{{ rdv.titre }}*/
/*                                     ({{ rdv.duree|date('H:i') }})*/
/*                                 </option>*/
/*                             {% endfor %}*/
/*                         </select>*/
/* */
/*                         <label>Patient</label>*/
/*                         {{ form_widget(form.patient,{'attr': {'class':'form-control input-sm'} }) }}*/
/*                         <label>Date et Heure de Debut</label>*/
/*                         {{ form_widget(form.dateDebut,{'attr': {'class':'form-control input-sm'} }) }}*/
/* */
/* */
/*                         <label>Heure de Fin</label>*/
/*                         {{ form_widget(form.dateFin,{'attr': {'class':'form-control input-sm'} }) }}*/
/* */
/* */
/*                         <label>Titre</label>*/
/*                         {{ form_widget(form.titre,{'attr': {'class':'form-control input-sm'} }) }}*/
/* */
/*                         <label>Description</label>*/
/*                         {{ form_widget(form.description,{'attr': {'class':'form-control input-sm'} }) }}<br/>*/
/* */
/*                         <input type="text" id="startMinutes" value="" hidden/>*/
/* */
/* */
/*                         <button type="submit" id="btnSubmit" class="btn btn-primary">Ajouter</button>*/
/*                         <button type="button" id="close" class="btn btn-default" data-dismiss="modal">Close</button>*/
/* */
/*                     </div>*/
/*                 </div>*/
/* */
/* */
/*                 {{ form_end(form) }}*/
/* */
/*                 {{ form_start(editForm,{'attr': {'id':'editRdv'} }) }}*/
/*                 <div class="row">*/
/*                     <div class='col-sm-6 col-md-offset-3 form-group'>*/
/* */
/* */
/*                         <label>Titre</label>*/
/*                         {{ form_widget(editForm.titre,{'attr': {'class':'form-control input-sm'} }) }}*/
/* */
/*                         <label>Description</label>*/
/*                         {{ form_widget(editForm.description,{'attr': {'class':'form-control input-sm'} }) }}<br/>*/
/* */
/*                         <label>Patient</label>*/
/*                         {{ form_widget(editForm.patient,{'attr': {'class':'form-control input-sm' } }) }}*/
/* */
/* */
/*                         <button type="submit" id="btnModif" class="btn btn-warning">Modifier</button>*/
/*                         <button type="button" id="close" class="btn btn-default" data-dismiss="modal">Close</button>*/
/* */
/*                     </div>*/
/*                 </div>*/
/* */
/* */
/*                 {{ form_end(editForm) }}*/
/*             </div>*/
/* */
/*             <div class="tab-pane" id="tab2"><br>*/
/*                 <h4 class="semi-bold">Step 2 - <span class="light">Account Information</span></h4>*/
/* */
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/* */
/* */
/* {% endblock rdvForm %}*/
/* */
/* {% block javascripts %}*/
/*     <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>*/
/*     <script src="{{ asset("plugins/fullcalendar/fullcalendar.min.js") }}"></script>*/
/*     <script src="{{ asset("JSCalander/lang/lang-all.js") }}"></script>*/
/*     <!-- date-range-picker -->*/
/*     <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>*/
/*     <script src="{{ asset("plugins/daterangepicker/daterangepicker.js") }}"></script>*/
/*     <!-- bootstrap color picker -->*/
/*     <script src="{{ asset("plugins/colorpicker/bootstrap-colorpicker.min.js") }}"></script>*/
/*     <!-- bootstrap time picker -->*/
/*     <script src="{{ asset("plugins/timepicker/bootstrap-timepicker.min.js") }}"></script>*/
/*     <script src="{{ asset("plugins/fullcalendar/lib/moment.min.js") }}"></script>*/
/*     <script>*/
/*         $(function () {*/
/* */
/*             $('#btnSubmit').click(function () {*/
/*                 $('form').submit(function () {*/
/*                     $.ajax({*/
/*                         type: 'GET',*/
/*                         url: 'http://localhost/denteo2/web/app_dev.php/all',*/
/*                         success: function (data) {*/
/*                             $('#calendar').fullCalendar('refrechEvents');*/
/*                         }*/
/*                     })*/
/*                 })*/
/*             })*/
/* */
/* */
/*             $('#close').click(function () {*/
/*                 sidebar.removeClass('control-sidebar-open');*/
/*             })*/
/* */
/*             // Convertir un String en format time*/
/*             function durationAsMomentObject(durationAsString) {*/
/*                 var regExp1 = /^([0-9]|0[0-9]|1[0-9]|2[0-3]):([0-9]|[0-5][0-9])$/;*/
/*                 var regExp2 = /^([0-9]|0[0-9]|1[0-9]|2[0-3]):([0-9]|[0-5][0-9]):([0-9]|[0-5][0-9])$/;*/
/*                 var durationArray = durationAsString.split(':');*/
/*                 if (regExp1.test(durationAsString)) {*/
/*                     return moment.duration({*/
/*                         hours: durationArray[0],*/
/*                         minutes: durationArray[1]*/
/*                     });*/
/*                 } else if (regExp2.test(durationAsString)) {*/
/*                     return moment.duration({*/
/*                         hours: durationArray[0],*/
/*                         minutes: durationArray[1],*/
/*                         seconds: durationArray[2]*/
/*                     });*/
/*                 } else {*/
/*                     throw 'format de durée invalide  choisir entre: HH:MM:SS, HH:MM : ' + durationAsString;*/
/*                 }*/
/*             }*/
/* */
/*             function updateRdvDuration(event) {*/
/*                 var duree = durationAsMomentObject($('#mySelect option:selected').attr('data-duree'));*/
/*                 var start = durationAsMomentObject($('#startMinutes').text());*/
/*                 start.add(duree);*/
/*                 var a = $('#rdv_dateDebut').val().split(' ');*/
/*                 $('#rdv_dateFin').val(a[0] + ' ' + start.hours() + ':' + start.minutes());*/
/*             }*/
/* */
/*             $('#mySelect').change(function () {*/
/*                 updateRdvDuration();*/
/*             })*/
/* */
/*             var selectComplete = function (start, end, jsEvent, view) {*/
/*                 var now = moment();*/
/*                 var temp = moment(end);*/
/*                 start = moment(start).format('DD-MM-YYYY HH:mm');*/
/*                 var startH = moment(start).format('HH:mm');*/
/*                 end = moment(end).format('DD-MM-YYYY HH:mm');*/
/*                 var endH = moment(end).format('HH:mm');*/
/*                 var duration = moment.duration(temp.subtract(start));*/
/*                 var warningMsg = (now.isAfter(end) && !now.isSame(end)) ? '<strong><span>Attention Vous Avez séléctionné une ancienne date</span></strong>' : '';*/
/*                 if (!sidebar.hasClass('control-sidebar-open')*/
/*                         && !$('body').hasClass('control-sidebar-open')) {*/
/*                     $('#modalDelimiteur').modal().show();*/
/*                 }*/
/*                 $('#detailsD').html('L\'intervalle que vous avez choisi est: ' + '<br/>' +*/
/*                         'Du: ' + start + '<br/>' +*/
/*                         'A: ' + end + '<br/>');*/
/*                 $('#addDelimiteur').click(function () {*/
/* */
/*                     $.ajax({*/
/*                         type: 'get',*/
/*                         //url: Routing.generate('addDel', {start: start, end: end}),*/
/*                         url: 'http://localhost/denteo2/web/app_dev.php/addDel' + '/' + start + '/' + end,*/
/*                         success: function (data) {*/
/*                             $('#calendar').fullCalendar('removeEvents');*/
/*                             // $('#calendar').fullCalendar('refetchEvents');*/
/*                             location.reload();*/
/*                         }*/
/*                     })*/
/*                 })*/
/*             }*/
/* */
/* */
/*             //********************************************************/
/*             function ini_events(ele) {*/
/*                 ele.each(function () {*/
/* */
/*                     // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)*/
/*                     // it doesn't need to have a start or end*/
/*                     var eventObject = {*/
/*                         title: $.trim($(this).text()), // use the element's text as the event title*/
/* */
/*                     };*/
/* */
/*                     // store the Event Object in the DOM element so we can get to it later*/
/*                     $(this).data('eventObject', eventObject);*/
/* */
/*                     // make the event draggable using jQuery UI*/
/*                     $(this).draggable({*/
/*                         zIndex: 1070,*/
/*                         revert: true, // will cause the event to go back to its*/
/*                         revertDuration: 0  //  original position after the drag*/
/*                     });*/
/* */
/*                 });*/
/*             }*/
/* */
/*             //Sauvgarder les dates anciennes*/
/*             var saveOldDragInfo = function (event, jsEvent, ui, view) {*/
/*                 event.oldStart = event.start;*/
/*                 event.oldEnd = event.End;*/
/*             }*/
/* */
/*             function calendarSlotDuration() {*/
/*                 var slot = calendarOptions.slotDuration.split(':');*/
/*                 return moment.duration({*/
/*                     seconds: slot[2],*/
/*                     minutes: slot[1],*/
/*                     hours: slot[0]*/
/*                 });*/
/*             }*/
/* */
/*             var deplacerRdvAndMemo = function (event, delta, revertFunc, jsEvent, ui, view) {*/
/* */
/*                 $.confirm({*/
/*                     title: 'Confirmation',*/
/*                     theme: 'black',*/
/*                     confirmButton: 'Deplacer',*/
/*                     cancelButton: 'Annuler',*/
/*                     content: 'Vous voulez vraiment deplacer ce Rendez-vous ?',*/
/*                     confirm: function () {*/
/*                         var now = moment();*/
/*                         var start = moment(event.start).format('DD-MM-YYYY');*/
/*                         var startH = moment(event.start).format('HH:mm');*/
/*                         var end = moment(event.end).format('DD-MM-YYYY');*/
/*                         var endH = moment(event.end).format('HH:mm');*/
/*                         event.oldStart = null;*/
/*                         event.oldEnd = null;*/
/* */
/*                         $.ajax({*/
/*                             type: 'get',*/
/*                             url: Routing.generate('drop', {*/
/*                                 id: event.id,*/
/*                                 start: start,*/
/*                                 startH: startH,*/
/*                                 end: end,*/
/*                                 endH: endH*/
/*                             }),*/
/*                             success: function (data) {*/
/*                                 $.growl({title: "Success", message: "Votre Rdv a été Déplacer avec success!"});*/
/*                                 $('#calendar').fullCalendar('refrechEvents');*/
/*                             }*/
/*                         })*/
/*                     },*/
/*                     cancel: function () {*/
/*                         revertFunc();*/
/*                     }*/
/*                 });*/
/* */
/* */
/*             }*/
/* */
/*             var calendarLoadingEvent = function (isLoading, view) {*/
/*                 if (isLoading) {*/
/*                     console.log('is loading...');*/
/*                     $('#loading').show();*/
/*                     timedFunction = window.setInterval(function () {*/
/*                         var newText = '  <span >   <img src="{{ asset('icons/hamid.gif') }}" width="25%" height="25%" /> </span> ';*/
/*                         $('#loading span').replaceWith(newText);*/
/*                     }, 400)*/
/*                 } else {*/
/*                     console.log('finish loading');*/
/*                     $('#loading').hide();*/
/*                     window.clearInterval(timedFunction);*/
/* */
/*                 }*/
/*             }*/
/* */
/* */
/*             //Get the object*/
/*             var _this = this;*/
/*             //Update options*/
/*             var o = $.AdminLTE.options.controlSidebarOptions;*/
/*             //Get the sidebar*/
/*             var sidebar = $(o.selector);*/
/* */
/* */
/*             var date = new Date();*/
/*             var d = date.getDate(),*/
/*                     m = date.getMonth(),*/
/*                     y = date.getFullYear();*/
/* */
/*             $('#calendar').fullCalendar({*/
/*                 header: {*/
/*                     left: 'prev,next today',*/
/*                     center: 'title',*/
/*                     right: 'month,agendaWeek,agendaDay'*/
/*                 },*/
/*                 buttonText: {*/
/*                     today: 'today',*/
/*                     week: 'week',*/
/*                     day: 'day'*/
/*                 },*/
/*                 //theme: true ,*/
/*                 //isRTL: true ,*/
/*                 //weekends: false,*/
/*                 defaultView: 'agendaWeek',*/
/*                 events: '{{ path('load_events') }}',*/
/*                 editable: true,*/
/*                 axisFormat: 'HH:mm',*/
/*                 lazyFetching: true,*/
/*                 //le premier jour de la semaine*/
/*                 firstDay: {{ myConfiguration.firstDay }},*/
/*                 //les jours du calendrier*/
/* */
/*                 hiddenDays: [*/
/*                     {% for item in myConfiguration.daysSelected %}*/
/*                     {{ item }}{{ loop.last ? '' : ',' }}*/
/*                     {% endfor %}*/
/* */
/*                 ],*/
/* */
/*                 //weekNumbers:{{ myConfiguration.weeksNumber }} ,*/
/*                 //minTime: '{{ myConfiguration.dateDeb|date('h:i') }}',*/
/*                 minTime: '08:00',*/
/*                 // maxTime: '{{ myConfiguration.dateFin|date('h:i') }}',*/
/*                 maxTime: '18:00',*/
/*                 slotDuration: '00:{{ myConfiguration.creneau }}:00',*/
/*                 droppable: true, // this allows things to be dropped onto the calendar !!!*/
/*                 //aspectRatio: 2,*/
/*                 {% if(myConfiguration.weeksNumber) %}*/
/*                 weekNumbers: true,*/
/*                 {% else %}*/
/*                 weekNumbers: false,*/
/*                 {% endif %}*/
/*                 eventTextColor: 'black',*/
/*                 //eventBackgroundColor: '#00c0ef',*/
/*                 {% if myConfiguration.lang == 'anglais' %}*/
/*                 lang: 'en',*/
/*                 {% elseif myConfiguration.lang == 'francais' %}*/
/*                 lang: 'fr',*/
/*                 {% else %}*/
/*                 lang: 'ar',*/
/*                 {% endif %}*/
/*                 columnFormat: 'dddd D/M',*/
/*                 weekNumberTitle: 'week N°',*/
/*                 dayClick: function (date, jsEvent, view) {*/
/* */
/*                     $('#startMinutes').text(date.format('h:mm'));*/
/*                     $('#rdv_dateDebut').val(date.format('YYYY-MM-DD h:mm'));*/
/*                     if (!sidebar.hasClass('control-sidebar-open')*/
/*                             && !$('body').hasClass('control-sidebar-open')) {*/
/*                         sidebar.addClass('control-sidebar-open');*/
/*                         $('#editRdv').hide();*/
/*                         $('#addRdv').show();*/
/*                     } else {*/
/* */
/*                     }*/
/*                 },*/
/* */
/*                 eventClick: function (calEvent, jsEvent, view) {*/
/*                     $('#myModal').modal().show();*/
/*                     $('#details').html('Titre :' + calEvent.title + '<br/>' + 'Date de Debut: ' + moment(calEvent.start).format('DD-MM-YYYY h:mm') + '<br/> Heure de Fin: ' + moment(calEvent.end).format('DD-MM-YYYY h:mm'));*/
/* */
/*                     $('#supprimerModal').click(function () {*/
/*                         $.confirm({*/
/*                             title: 'Confirmation',*/
/*                             theme: 'black',*/
/*                             confirmButton: 'Supprimer',*/
/*                             cancelButton: 'Annuler',*/
/*                             content: 'Vous voulez vraiment Supprimer ce Rendez-vous ?',*/
/*                             confirm: function () {*/
/*                                 $.ajax({*/
/*                                     type: 'get',*/
/*                                     url: 'http://localhost/denteo2/web/app_dev.php/deleted' + '/' + calEvent.id,*/
/*                                     success: function (data) {*/
/*                                         $('#calendar').fullCalendar('removeEvents', calEvent.id);*/
/*                                         $.growl({title: "Success", message: "Votre Rdv a été bien Supprimer "});*/
/*                                         $('#calendar').fullCalendar('refrechEvents');*/
/*                                     }*/
/*                                 })*/
/*                             }*/
/*                         });*/
/*                     })*/
/* */
/*                     $('#modalModifier').click(function () {*/
/*                         if (!sidebar.hasClass('control-sidebar-open')*/
/*                                 && !$('body').hasClass('control-sidebar-open')) {*/
/*                             //Open the sidebar*/
/* */
/*                             sidebar.addClass('control-sidebar-open');*/
/* */
/*                             $('#editRdv').show();*/
/*                             $('#addRdv').hide();*/
/* */
/*                             $('#rdv_dateDebut').val(moment(calEvent.start).format('DD-MM-YYYY h:mm'));*/
/*                             $('#rdv_dateFin').val(moment(calEvent.end).format('DD-MM-YYYY h:mm'));*/
/*                             $('#rdv_titre').val(calEvent.title);*/
/*                             $('#btnModif').click(function () {*/
/*                                 $.ajax({*/
/*                                     type: 'get',*/
/*                                     url: 'http://localhost/taskPerson/web/app_dev.php/select' + '/' + calEvent.id,*/
/*                                     success: function (data) {*/
/*                                         $('#calendar').fullCalendar('refrech');*/
/*                                     }*/
/*                                 })*/
/*                             })*/
/* */
/*                         } else {*/
/* */
/*                         }*/
/*                         $('#btnModif').click(function () {*/
/*                             $.ajax({*/
/*                                 type: 'get',*/
/*                                 url: 'http://localhost/taskPerson/web/app_dev.php/rdv_modif',*/
/*                                 success: function (data) {*/
/*                                     $('#calendar').fullCalendar('refrech');*/
/*                                 }*/
/*                             })*/
/*                         })*/
/* */
/*                     })*/
/*                 },*/
/*                 eventDrop: deplacerRdvAndMemo,*/
/*                 eventDragStop: saveOldDragInfo,*/
/*                 loading: calendarLoadingEvent,*/
/*                 eventReceive: function (event) {*/
/* */
/*                 },*/
/*                 eventMouseover: function (event, jsEvent, view) {*/
/*                     console.log(event.titre);*/
/*                     console.log(event.id);*/
/*                     console.log(event.description);*/
/*                     console.log(event.dateFin);*/
/* */
/*                 },*/
/*                 eventRender: function (event, element) {*/
/*                     element.tooltipster({*/
/*                         contentAsHTML: true,*/
/*                         animation: 'fade',*/
/*                         delay: 200,*/
/*                         content: $('<strong>Titre :   </strong>' + event.title + '</br><strong>Description :   </strong>' + event.description + '</br><strong>Type : ------</strong></br><strong>Date Debut : </strong>' + event.start.format('DD-MM-YYYY h:mm') + '</br><strong>Date Fin :   </strong>' + event.end.format('DD-MM-YYYY h:mm') + '')*/
/*                     })*/
/* */
/*                 },*/
/*                 drop: function (date, allDay) {*/
/*                 },*/
/*                 eventOverlap: false,*/
/*                 select: selectComplete,*/
/*                 selectable: true,*/
/*                 selectHelper: true,*/
/*                 eventResize: function (event, delta, revertFunc, jsEvent, ui, view) {*/
/* */
/*                     $.confirm({*/
/*                         title: 'Confirmation',*/
/*                         theme: 'black',*/
/*                         confirmButton: 'Modifier',*/
/*                         cancelButton: 'Annuler',*/
/*                         content: 'Vous voulez vraiment modifier la durre de ce Rendez-vous ?',*/
/*                         confirm: function () {*/
/*                             var now = moment();*/
/*                             var end = moment(event.end).format('DD-MM-YYYY');*/
/*                             var endH = moment(event.end).format('HH:mm');*/
/*                             $.ajax({*/
/*                                 type: 'get',*/
/*                                 //url: Routing.generate('resize_rdv', {id: event.id, end: end ,endH: endH}),*/
/*                                 url: 'http://localhost/denteo2/web/app_dev.php/resize/' + event.id + '/' + end + '/' + endH,*/
/*                                 success: function (data) {*/
/*                                     $.growl({title: "Success", message: "la duree est bien Modifier "});*/
/*                                 }*/
/*                             })*/
/*                         },*/
/*                         cancel: function () {*/
/*                             revertFunc();*/
/*                         }*/
/*                     });*/
/* */
/* */
/*                 }*/
/*             });*/
/* */
/*             /* ADDING EVENTS *//* */
/*             var currColor = "#3c8dbc"; //Red by default*/
/*             //Color chooser button*/
/*             var colorChooser = $("#color-chooser-btn");*/
/*             $("#color-chooser > li > a").click(function (e) {*/
/*                 e.preventDefault();*/
/*                 //Save color*/
/*                 currColor = $(this).css("color");*/
/*                 //Add color effect to button*/
/*                 $('#add-new-event').css({"background-color": currColor, "border-color": currColor});*/
/*             });*/
/*             $("#add-new-event").click(function (e) {*/
/*                 e.preventDefault();*/
/*                 //Get value and make sure it is not null*/
/*                 var val = $("#new-event").val();*/
/*                 if (val.length == 0) {*/
/*                     return;*/
/*                 }*/
/* */
/*                 //Create events*/
/*                 var event = $("<div />");*/
/*                 event.css({*/
/*                     "background-color": currColor,*/
/*                     "border-color": currColor,*/
/*                     "color": "#fff"*/
/*                 }).addClass("external-event");*/
/*                 event.html(val);*/
/*                 $('#external-events').prepend(event);*/
/* */
/*                 //Add draggable funtionality*/
/*                 ini_events(event);*/
/*                 var moment = event.getDate();*/
/*                 alert(moment.format());*/
/* */
/*                 //Remove event from text input*/
/*                 $("#new-event").val("");*/
/*             });*/
/* */
/* */
/*         });*/
/* */
/*     </script>*/
/* */
/* {% endblock %}*/
/* */
/* */
