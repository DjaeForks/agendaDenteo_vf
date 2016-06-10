<?php

/* EvenementBundle:Default:Agenda.html.twig */
class __TwigTemplate_3ee7b03fbd4edd9dcb76d6cc4985151b985ab1d3cfca988fc50776f4230303d1 extends Twig_Template
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
        $__internal_52a1761b11ecc273e4a6552caa0d9afb0a8eaf110cd1337e9820513c3f6b406b = $this->env->getExtension("native_profiler");
        $__internal_52a1761b11ecc273e4a6552caa0d9afb0a8eaf110cd1337e9820513c3f6b406b->enter($__internal_52a1761b11ecc273e4a6552caa0d9afb0a8eaf110cd1337e9820513c3f6b406b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EvenementBundle:Default:Agenda.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_52a1761b11ecc273e4a6552caa0d9afb0a8eaf110cd1337e9820513c3f6b406b->leave($__internal_52a1761b11ecc273e4a6552caa0d9afb0a8eaf110cd1337e9820513c3f6b406b_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a0c155cbb816ae18b40bc8fe7dbd309fc8a1ebd175b0d7873cd53d97fa93b814 = $this->env->getExtension("native_profiler");
        $__internal_a0c155cbb816ae18b40bc8fe7dbd309fc8a1ebd175b0d7873cd53d97fa93b814->enter($__internal_a0c155cbb816ae18b40bc8fe7dbd309fc8a1ebd175b0d7873cd53d97fa93b814_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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

        #details {
            color: black;
            font-family: \"Rockwell\";
            font-size: 16px;
        }

        .titreEvent {
            color: #3c8dbc;
            font-family: 'Lucida Bright';
            font-size: 18px;
        }

        .modal-header {
            background-color: #3c8dbc;
        }

    </style>
";
        
        $__internal_a0c155cbb816ae18b40bc8fe7dbd309fc8a1ebd175b0d7873cd53d97fa93b814->leave($__internal_a0c155cbb816ae18b40bc8fe7dbd309fc8a1ebd175b0d7873cd53d97fa93b814_prof);

    }

    // line 69
    public function block_content($context, array $blocks = array())
    {
        $__internal_1c19e4f7e06ef64333ae6c83d8c1320510eb9cf8f6ca9bb6506479f7b152f9f1 = $this->env->getExtension("native_profiler");
        $__internal_1c19e4f7e06ef64333ae6c83d8c1320510eb9cf8f6ca9bb6506479f7b152f9f1->enter($__internal_1c19e4f7e06ef64333ae6c83d8c1320510eb9cf8f6ca9bb6506479f7b152f9f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 70
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
            ";
        // line 138
        echo "            <div class=\"col-md-12\">
                <div id=\"loading\" class=\" \">
                    <span>   <img src=\"";
        // line 140
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

    ";
        // line 158
        echo "    <div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" data-toggle=\"modal\" aria-labelledby=\"myModalLabel\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span
                                aria-hidden=\"true\">&times;</span></button>
                    <h4 class=\"modal-title\" id=\"myModalLabel\"></h4>
                </div>
                <div class=\"modal-body\">
                    <h4 id=\"details\"></h4>
                </div>

                <div class=\"modal-footer\">
                    <button class=\"btn btn-success\" id=\"modalModifier\" data-dismiss=\"modal\">Modifier</button>
                    <button class=\"btn btn-danger\" id=\"supprimerModal\" data-dismiss=\"modal\">Supprimer</button>
                    <button type=\"button\" class=\"btn btn-default pull-left\" data-dismiss=\"modal\">Fermer</button>
                </div>
            </div>
        </div>
    </div>

    ";
        // line 180
        echo "    <div class=\"modal fade\" id=\"myModalAncienDate\" tabindex=\"-1\" role=\"dialog\" data-toggle=\"modal\"
         aria-labelledby=\"myModalLabel\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div id=\"ancienneDateHeader\" class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span
                                aria-hidden=\"true\">&times;</span></button>
                    <h4 class=\"modal-title\" id=\"myModalLabel\">Attention</h4>
                </div>
                <div class=\"modal-body\">
                    <h4 style=\"font-family:'myModalAncienDate';\">Attention la demande d'ajout de l'info concerne une
                        date <strong>passée</strong></h4>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-warning pull-right\" data-dismiss=\"modal\">Fermer</button>
                </div>
            </div>
        </div>
    </div>

    ";
        // line 201
        echo "    <div class=\"modal fade\" id=\"modalDelimiteur\" tabindex=\"-1\" role=\"dialog\" data-toggle=\"modal\"
         aria-labelledby=\"myModalLabel\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span
                                aria-hidden=\"true\">&times;</span></button>
                    <h4 class=\"modal-title\" id=\"myModalLabel\">Nouveau Delimiteur</h4>
                </div>
                <div class=\"modal-body\">
                    <p id=\"detailsD\"></p>
                    <div class=\"box box-primary\">
                        <div class=\"box-body\">
                            <div class=\"row\">
                                <div class=\"col-xs-2\">
                                    <h5>Date Debut </h5>
                                </div>
                                <div class=\"col-xs-4\">
                                    <input id=\"dateDebDel\" type=\"text\" contenteditable=\"false\" class=\"form-control\">
                                </div>
                                <div class=\"col-xs-2\">
                                    <h5>Date Fin </h5>
                                </div>
                                <div class=\"col-xs-4\">
                                    <input id=\"dateFinDel\" type=\"text\" contenteditable=\"false\" class=\"form-control\">
                                </div>
                            </div>
                            </br>
                            <div class=\"row\">
                                <div class=\"col-xs-1\">
                                    <h5>Titre </h5>
                                </div>
                                <div class=\"col-xs-5\">
                                    <input id=\"titreDel\" type=\"text\" contenteditable=\"false\" class=\"form-control\">
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-xs-1\">
                                    <h5>Description </h5>
                                </div>
                                <div class=\"col-xs-5\">
                                    <texterea id=\"description\" editable=\"false\" class=\"form-control\"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"submit\" class=\"btn btn-info\" id=\"addDelimiteur\" data-dismiss=\"modal\">Ajouter</button>
                    <button class=\"btn btn-default pull-left\" id=\"supprimerDelimiteur\" data-dismiss=\"modal\">Fermer
                    </button>
                </div>
            </div>
        </div>
    </div>

";
        
        $__internal_1c19e4f7e06ef64333ae6c83d8c1320510eb9cf8f6ca9bb6506479f7b152f9f1->leave($__internal_1c19e4f7e06ef64333ae6c83d8c1320510eb9cf8f6ca9bb6506479f7b152f9f1_prof);

    }

    // line 258
    public function block_rdvForm($context, array $blocks = array())
    {
        $__internal_e10b71a1e2f2c6d661937c7e5ef52c85bde878562d0baca83d6a8c5d21a076c4 = $this->env->getExtension("native_profiler");
        $__internal_e10b71a1e2f2c6d661937c7e5ef52c85bde878562d0baca83d6a8c5d21a076c4->enter($__internal_e10b71a1e2f2c6d661937c7e5ef52c85bde878562d0baca83d6a8c5d21a076c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "rdvForm"));

        // line 259
        echo "
    <div id=\"rootwizard\" class=\"col-md-12\">

        <div class=\"tab-content transparent\">
            <h3>Ajout Rendez-vous </h3>
            <hr>
            ";
        // line 265
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("id" => "addRdv")));
        echo "
            <div class=\"row\">
                <div class='col-sm-6 col-md-offset-3 form-group'>
                    <label>Type de Rendez-Vous</label>
                    <select id=\"mySelect\" class=\"form-control input-sm\" name=\"rdvTtpee\">
                        <option vlaue=\"#\">--SELECT--</option>
                        ";
        // line 271
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rdvTypes"]) ? $context["rdvTypes"] : $this->getContext($context, "rdvTypes")));
        foreach ($context['_seq'] as $context["_key"] => $context["rdv"]) {
            // line 272
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["rdv"], "id", array()), "html", null, true);
            echo "\" data-duree=\"";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["rdv"], "duree", array()), "H:i"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["rdv"], "titre", array()), "html", null, true);
            echo "
                                (";
            // line 273
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["rdv"], "duree", array()), "H:i"), "html", null, true);
            echo ")
                            </option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rdv'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 276
        echo "                    </select>

                    <label>Patient</label>
                    ";
        // line 279
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "patient", array()), 'widget', array("attr" => array("class" => "form-control input-sm")));
        echo "
                    <label>Date et Heure de Debut</label>
                    ";
        // line 281
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateDebut", array()), 'widget', array("attr" => array("class" => "form-control input-sm")));
        echo "


                    <label>Heure de Fin</label>
                    ";
        // line 285
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateFin", array()), 'widget', array("attr" => array("class" => "form-control input-sm")));
        echo "


                    <label>Titre</label>
                    ";
        // line 289
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre", array()), 'widget', array("attr" => array("class" => "form-control input-sm")));
        echo "

                    <label>Description</label>
                    ";
        // line 292
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget', array("attr" => array("class" => "form-control input-sm")));
        echo "<br/>

                    <input type=\"text\" id=\"startMinutes\" value=\"\" hidden/>

                </div>
            </div>

        </div>

        <hr>
        <h4>Périodicite</h4>
        <hr>

        <label>Multiple</label>
        <select name=\"jours\" class=\"form-control select2\" multiple=\"multiple\" data-placeholder=\"Jours\"
                style=\"width: 100%;\">
            <option value=\"1\">Lundi</option>
            <option value=\"2\">Mardi</option>
            <option value=\"3\">Mercredi</option>
            <option value=\"4\">Jeudi</option>
            <option value=\"5\">Vendredi</option>
            <option value=\"6\">Samedi</option>
            <option value=\"7\">Dimanche</option>
        </select>
        <hr>
        <input type=\"text\" name=\"occurence\" class=\"form-control\" placeholder=\"Nombre d'occurences\">
        <br>
        <button type=\"submit\" id=\"btnSubmit\" class=\"btn btn-primary\">Ajouter</button>
        <button type=\"button\" id=\"close\" class=\"btn btn-default\" data-dismiss=\"modal\">Fermer</button>

        <div id=\"bas\"></div>
        ";
        // line 324
        echo "
        ";
        // line 325
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>




";
        
        $__internal_e10b71a1e2f2c6d661937c7e5ef52c85bde878562d0baca83d6a8c5d21a076c4->leave($__internal_e10b71a1e2f2c6d661937c7e5ef52c85bde878562d0baca83d6a8c5d21a076c4_prof);

    }

    // line 333
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_85ceacd72c7ae2888671e17aa6c79aa348179d1bea624b86357e9af90584ad36 = $this->env->getExtension("native_profiler");
        $__internal_85ceacd72c7ae2888671e17aa6c79aa348179d1bea624b86357e9af90584ad36->enter($__internal_85ceacd72c7ae2888671e17aa6c79aa348179d1bea624b86357e9af90584ad36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 334
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/fullcalendar/fullcalendar.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 335
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("JSCalander/lang/lang-all.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 336
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 337
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/colorpicker/bootstrap-colorpicker.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 338
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/timepicker/bootstrap-timepicker.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 339
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/fullcalendar/lib/moment.min.js"), "html", null, true);
        echo "\"></script>



    <script>
        \$(function () {

            \$(\".select2\").select2();

            \$('#couleurDel').colorpicker();
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

            //fixer la date fin du rdv selon le rdvType choisi
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

                var slot = moment.duration();
                console.log(slot);
                start = moment(start).format('DD-MM-YYYY HH:mm');
                var startH = moment(start).format('HH:mm');
                end = moment(end).format('DD-MM-YYYY HH:mm');
                var endH = moment(end).format('HH:mm');
                if (!sidebar.hasClass('control-sidebar-open')
                        && !\$('body').hasClass('control-sidebar-open')) {
                    \$('#modalDelimiteur').modal().show();
                }
                \$('#dateDebDel').val(start);
                \$('#dateFinDel').val(end);
                \$('#addDelimiteur').click(function () {

                    \$.ajax({
                        type: 'get',
                        //url: Routing.generate('addDel', {start: start, end: end}),
                        url: 'http://localhost/denteo2/web/app_dev.php/addDel' + '/' + start + '/' + end,
                        success: function (data) {
                            \$('#calendar').fullCalendar('removeEvents');
                            //\$('#calendar').fullCalendar('refetchEvents');
                            location.reload();
                        }
                    })
                })
            }

            /* function ini_events(ele) {
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
             }*/

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
                    confirmButton: 'Déplacer',
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
        // line 513
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


            var addRdv = function (date, jsEvent, view) {

                var now = moment();
                console.log(now);
                if (now.isAfter(date) && !now.isSame(date)) {
                    console.log('vous avez selectionner une ancienne date ');
                    \$('#modalDelimiteur').modal().hide();
                    \$('#myModalAncienDate').modal().show();
                }

                else {
                    \$('#startMinutes').text(date.format('h:mm'));
                    \$('#rdv_dateDebut').val(date.format('YYYY-MM-DD h:mm'));
                    if (!sidebar.hasClass('control-sidebar-open')
                            && !\$('body').hasClass('control-sidebar-open')) {
                        sidebar.addClass('control-sidebar-open');
                        \$('#editRdv').hide();
                        \$('#addRdv').show();
                    }
                }
            }

            var datailsEvent = function (calEvent, jsEvent, view) {
                \$('#myModal').modal().show();

                if (calEvent.className == 'Rdv') {
                    \$('#myModalLabel').text('Infos Rendez-Vous ');
                    \$('#details').html('<strong class=\"titreEvent\">Titre Rdv :</strong>' + calEvent.title + '<br/>' + '<strong class=\"titreEvent\">Date de Debut: </strong>' + moment(calEvent.start).format('DD-MM-YYYY h:mm') + '<br/><strong class=\"titreEvent\"> Heure de Fin:</strong> ' + moment(calEvent.end).format('DD-MM-YYYY h:mm') + '<br/> <strong class=\"titreEvent\">Description Rdv : </strong>' + calEvent.description);
                }
                if (calEvent.className == 'Delimiteur') {
                    \$('#myModalLabel').text('Infos Délimiteur ');
                    \$('#details').html('<strong class=\"titreEvent\"> Titre Délimiteur :</strong>' + calEvent.title + '<br/>' + '<strong class=\"titreEvent\">Date de Debut:</strong> ' + moment(calEvent.start).format('DD-MM-YYYY h:mm') + '<br/> <strong class=\"titreEvent\">Heure de Fin:</strong> ' + moment(calEvent.end).format('DD-MM-YYYY h:mm') + '<br/><strong class=\"titreEvent\"> Description Délimiteur :</strong> ' + calEvent.description);
                }

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
                defaultView: 'agendaWeek',
                events: '";
        // line 645
        echo $this->env->getExtension('routing')->getPath("load_events");
        echo "',
                editable: true,
                axisFormat: 'HH:mm',
                lazyFetching: true,
                //le premier jour de la semaine
                firstDay: ";
        // line 650
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["myConfiguration"]) ? $context["myConfiguration"] : $this->getContext($context, "myConfiguration")), "firstDay", array()), "html", null, true);
        echo ",
                //les jours du calendrier

                hiddenDays: [
                    ";
        // line 654
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
            // line 655
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
        // line 657
        echo "
                ],

                //weekNumbers:";
        // line 660
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["myConfiguration"]) ? $context["myConfiguration"] : $this->getContext($context, "myConfiguration")), "weeksNumber", array()), "html", null, true);
        echo " ,
                //minTime: '";
        // line 661
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["myConfiguration"]) ? $context["myConfiguration"] : $this->getContext($context, "myConfiguration")), "dateDeb", array()), "h:i"), "html", null, true);
        echo "',
                minTime: '08:00',
                // maxTime: '";
        // line 663
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["myConfiguration"]) ? $context["myConfiguration"] : $this->getContext($context, "myConfiguration")), "dateFin", array()), "h:i"), "html", null, true);
        echo "',
                maxTime: '18:00',
                slotDuration: '00:";
        // line 665
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["myConfiguration"]) ? $context["myConfiguration"] : $this->getContext($context, "myConfiguration")), "creneau", array()), "html", null, true);
        echo ":00',
                droppable: true, // this allows things to be dropped onto the calendar !!!
                //aspectRatio: 2,
                ";
        // line 668
        if ($this->getAttribute((isset($context["myConfiguration"]) ? $context["myConfiguration"] : $this->getContext($context, "myConfiguration")), "weeksNumber", array())) {
            // line 669
            echo "                weekNumbers: true,
                ";
        } else {
            // line 671
            echo "                weekNumbers: false,
                ";
        }
        // line 673
        echo "                eventTextColor: 'black',
                //eventBackgroundColor: '#00c0ef',
                ";
        // line 675
        if (($this->getAttribute((isset($context["myConfiguration"]) ? $context["myConfiguration"] : $this->getContext($context, "myConfiguration")), "lang", array()) == "anglais")) {
            // line 676
            echo "                lang: 'en',
                ";
        } elseif (($this->getAttribute(        // line 677
(isset($context["myConfiguration"]) ? $context["myConfiguration"] : $this->getContext($context, "myConfiguration")), "lang", array()) == "francais")) {
            // line 678
            echo "                lang: 'fr',
                ";
        } else {
            // line 680
            echo "                lang: 'ar',
                ";
        }
        // line 682
        echo "                columnFormat: 'dddd D/M',
                weekNumberTitle: 'week N°',
                dayClick: addRdv,
                eventClick: datailsEvent,
                eventDrop: deplacerRdvAndMemo,
                eventDragStop: saveOldDragInfo,
                loading: calendarLoadingEvent,
                eventRender: function (event, element) {

                    if (event.className == 'Rdv') {

                        element.tooltipster({
                            contentAsHTML: true,
                            animation: 'fade',
                            delay: 200,
                            content: \$('<strong>Titre Rdv:   </strong>' + event.title + '</br><strong>Description :   </strong>' + event.description + '</br><strong>Type : ------</strong></br><strong>Date Debut : </strong>' + event.start.format('DD-MM-YYYY h:mm') + '</br><strong>Date Fin :   </strong>' + event.end.format('DD-MM-YYYY h:mm') + '')
                        })

                    }
                    else {
                        element.tooltipster({
                            contentAsHTML: true,
                            animation: 'fade',
                            delay: 200,
                            content: \$('<strong>Titre Délimiteur:   </strong>' + event.title + '</br><strong>Description :   </strong>' + event.description + '</br><strong>Date Debut : </strong>' + event.start.format('DD-MM-YYYY h:mm') + '</br><strong>Date Fin :   </strong>' + event.end.format('DD-MM-YYYY h:mm') + '')
                        })
                    }


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
        
        $__internal_85ceacd72c7ae2888671e17aa6c79aa348179d1bea624b86357e9af90584ad36->leave($__internal_85ceacd72c7ae2888671e17aa6c79aa348179d1bea624b86357e9af90584ad36_prof);

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
        return array (  845 => 682,  841 => 680,  837 => 678,  835 => 677,  832 => 676,  830 => 675,  826 => 673,  822 => 671,  818 => 669,  816 => 668,  810 => 665,  805 => 663,  800 => 661,  796 => 660,  791 => 657,  773 => 655,  756 => 654,  749 => 650,  741 => 645,  606 => 513,  429 => 339,  425 => 338,  421 => 337,  417 => 336,  413 => 335,  408 => 334,  402 => 333,  388 => 325,  385 => 324,  351 => 292,  345 => 289,  338 => 285,  331 => 281,  326 => 279,  321 => 276,  312 => 273,  303 => 272,  299 => 271,  290 => 265,  282 => 259,  276 => 258,  213 => 201,  191 => 180,  168 => 158,  148 => 140,  144 => 138,  126 => 70,  120 => 69,  48 => 4,  43 => 3,  37 => 2,  11 => 1,);
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
/*         .modal-title {*/
/*             color: black;*/
/*             font-family: "Brush Script MT";*/
/*             font-size: 30px;*/
/*         }*/
/* */
/*         #details {*/
/*             color: black;*/
/*             font-family: "Rockwell";*/
/*             font-size: 16px;*/
/*         }*/
/* */
/*         .titreEvent {*/
/*             color: #3c8dbc;*/
/*             font-family: 'Lucida Bright';*/
/*             font-size: 18px;*/
/*         }*/
/* */
/*         .modal-header {*/
/*             background-color: #3c8dbc;*/
/*         }*/
/* */
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
/*             {#<div class="col-md-3">*/
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
/*             </div><!-- /.col -->#}*/
/*             <div class="col-md-12">*/
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
/*     {# modal event  click#}*/
/*     <div class="modal fade" id="myModal" tabindex="-1" role="dialog" data-toggle="modal" aria-labelledby="myModalLabel">*/
/*         <div class="modal-dialog" role="document">*/
/*             <div class="modal-content">*/
/*                 <div class="modal-header">*/
/*                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span*/
/*                                 aria-hidden="true">&times;</span></button>*/
/*                     <h4 class="modal-title" id="myModalLabel"></h4>*/
/*                 </div>*/
/*                 <div class="modal-body">*/
/*                     <h4 id="details"></h4>*/
/*                 </div>*/
/* */
/*                 <div class="modal-footer">*/
/*                     <button class="btn btn-success" id="modalModifier" data-dismiss="modal">Modifier</button>*/
/*                     <button class="btn btn-danger" id="supprimerModal" data-dismiss="modal">Supprimer</button>*/
/*                     <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Fermer</button>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     {# modal day click (ancienne date #}*/
/*     <div class="modal fade" id="myModalAncienDate" tabindex="-1" role="dialog" data-toggle="modal"*/
/*          aria-labelledby="myModalLabel">*/
/*         <div class="modal-dialog" role="document">*/
/*             <div class="modal-content">*/
/*                 <div id="ancienneDateHeader" class="modal-header">*/
/*                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span*/
/*                                 aria-hidden="true">&times;</span></button>*/
/*                     <h4 class="modal-title" id="myModalLabel">Attention</h4>*/
/*                 </div>*/
/*                 <div class="modal-body">*/
/*                     <h4 style="font-family:'myModalAncienDate';">Attention la demande d'ajout de l'info concerne une*/
/*                         date <strong>passée</strong></h4>*/
/*                 </div>*/
/*                 <div class="modal-footer">*/
/*                     <button type="button" class="btn btn-warning pull-right" data-dismiss="modal">Fermer</button>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     {# modal delimiteur#}*/
/*     <div class="modal fade" id="modalDelimiteur" tabindex="-1" role="dialog" data-toggle="modal"*/
/*          aria-labelledby="myModalLabel">*/
/*         <div class="modal-dialog" role="document">*/
/*             <div class="modal-content">*/
/*                 <div class="modal-header">*/
/*                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span*/
/*                                 aria-hidden="true">&times;</span></button>*/
/*                     <h4 class="modal-title" id="myModalLabel">Nouveau Delimiteur</h4>*/
/*                 </div>*/
/*                 <div class="modal-body">*/
/*                     <p id="detailsD"></p>*/
/*                     <div class="box box-primary">*/
/*                         <div class="box-body">*/
/*                             <div class="row">*/
/*                                 <div class="col-xs-2">*/
/*                                     <h5>Date Debut </h5>*/
/*                                 </div>*/
/*                                 <div class="col-xs-4">*/
/*                                     <input id="dateDebDel" type="text" contenteditable="false" class="form-control">*/
/*                                 </div>*/
/*                                 <div class="col-xs-2">*/
/*                                     <h5>Date Fin </h5>*/
/*                                 </div>*/
/*                                 <div class="col-xs-4">*/
/*                                     <input id="dateFinDel" type="text" contenteditable="false" class="form-control">*/
/*                                 </div>*/
/*                             </div>*/
/*                             </br>*/
/*                             <div class="row">*/
/*                                 <div class="col-xs-1">*/
/*                                     <h5>Titre </h5>*/
/*                                 </div>*/
/*                                 <div class="col-xs-5">*/
/*                                     <input id="titreDel" type="text" contenteditable="false" class="form-control">*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="row">*/
/*                                 <div class="col-xs-1">*/
/*                                     <h5>Description </h5>*/
/*                                 </div>*/
/*                                 <div class="col-xs-5">*/
/*                                     <texterea id="description" editable="false" class="form-control"/>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="modal-footer">*/
/*                     <button type="submit" class="btn btn-info" id="addDelimiteur" data-dismiss="modal">Ajouter</button>*/
/*                     <button class="btn btn-default pull-left" id="supprimerDelimiteur" data-dismiss="modal">Fermer*/
/*                     </button>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock content %}*/
/* {% block rdvForm %}*/
/* */
/*     <div id="rootwizard" class="col-md-12">*/
/* */
/*         <div class="tab-content transparent">*/
/*             <h3>Ajout Rendez-vous </h3>*/
/*             <hr>*/
/*             {{ form_start(form,{'attr': {'id':'addRdv'} }) }}*/
/*             <div class="row">*/
/*                 <div class='col-sm-6 col-md-offset-3 form-group'>*/
/*                     <label>Type de Rendez-Vous</label>*/
/*                     <select id="mySelect" class="form-control input-sm" name="rdvTtpee">*/
/*                         <option vlaue="#">--SELECT--</option>*/
/*                         {% for rdv in rdvTypes %}*/
/*                             <option value="{{ rdv.id }}" data-duree="{{ rdv.duree|date('H:i') }}">{{ rdv.titre }}*/
/*                                 ({{ rdv.duree|date('H:i') }})*/
/*                             </option>*/
/*                         {% endfor %}*/
/*                     </select>*/
/* */
/*                     <label>Patient</label>*/
/*                     {{ form_widget(form.patient,{'attr': {'class':'form-control input-sm'} }) }}*/
/*                     <label>Date et Heure de Debut</label>*/
/*                     {{ form_widget(form.dateDebut,{'attr': {'class':'form-control input-sm'} }) }}*/
/* */
/* */
/*                     <label>Heure de Fin</label>*/
/*                     {{ form_widget(form.dateFin,{'attr': {'class':'form-control input-sm'} }) }}*/
/* */
/* */
/*                     <label>Titre</label>*/
/*                     {{ form_widget(form.titre,{'attr': {'class':'form-control input-sm'} }) }}*/
/* */
/*                     <label>Description</label>*/
/*                     {{ form_widget(form.description,{'attr': {'class':'form-control input-sm'} }) }}<br/>*/
/* */
/*                     <input type="text" id="startMinutes" value="" hidden/>*/
/* */
/*                 </div>*/
/*             </div>*/
/* */
/*         </div>*/
/* */
/*         <hr>*/
/*         <h4>Périodicite</h4>*/
/*         <hr>*/
/* */
/*         <label>Multiple</label>*/
/*         <select name="jours" class="form-control select2" multiple="multiple" data-placeholder="Jours"*/
/*                 style="width: 100%;">*/
/*             <option value="1">Lundi</option>*/
/*             <option value="2">Mardi</option>*/
/*             <option value="3">Mercredi</option>*/
/*             <option value="4">Jeudi</option>*/
/*             <option value="5">Vendredi</option>*/
/*             <option value="6">Samedi</option>*/
/*             <option value="7">Dimanche</option>*/
/*         </select>*/
/*         <hr>*/
/*         <input type="text" name="occurence" class="form-control" placeholder="Nombre d'occurences">*/
/*         <br>*/
/*         <button type="submit" id="btnSubmit" class="btn btn-primary">Ajouter</button>*/
/*         <button type="button" id="close" class="btn btn-default" data-dismiss="modal">Fermer</button>*/
/* */
/*         <div id="bas"></div>*/
/*         {# </form>#}*/
/* */
/*         {{ form_end(form) }}*/
/*     </div>*/
/* */
/* */
/* */
/* */
/* {% endblock rdvForm %}*/
/* */
/* {% block javascripts %}*/
/*     <script src="{{ asset("plugins/fullcalendar/fullcalendar.min.js") }}"></script>*/
/*     <script src="{{ asset("JSCalander/lang/lang-all.js") }}"></script>*/
/*     <script src="{{ asset("plugins/daterangepicker/daterangepicker.js") }}"></script>*/
/*     <script src="{{ asset("plugins/colorpicker/bootstrap-colorpicker.min.js") }}"></script>*/
/*     <script src="{{ asset("plugins/timepicker/bootstrap-timepicker.min.js") }}"></script>*/
/*     <script src="{{ asset("plugins/fullcalendar/lib/moment.min.js") }}"></script>*/
/* */
/* */
/* */
/*     <script>*/
/*         $(function () {*/
/* */
/*             $(".select2").select2();*/
/* */
/*             $('#couleurDel').colorpicker();*/
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
/*             //fixer la date fin du rdv selon le rdvType choisi*/
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
/* */
/*             var selectComplete = function (start, end, jsEvent, view) {*/
/* */
/*                 var slot = moment.duration();*/
/*                 console.log(slot);*/
/*                 start = moment(start).format('DD-MM-YYYY HH:mm');*/
/*                 var startH = moment(start).format('HH:mm');*/
/*                 end = moment(end).format('DD-MM-YYYY HH:mm');*/
/*                 var endH = moment(end).format('HH:mm');*/
/*                 if (!sidebar.hasClass('control-sidebar-open')*/
/*                         && !$('body').hasClass('control-sidebar-open')) {*/
/*                     $('#modalDelimiteur').modal().show();*/
/*                 }*/
/*                 $('#dateDebDel').val(start);*/
/*                 $('#dateFinDel').val(end);*/
/*                 $('#addDelimiteur').click(function () {*/
/* */
/*                     $.ajax({*/
/*                         type: 'get',*/
/*                         //url: Routing.generate('addDel', {start: start, end: end}),*/
/*                         url: 'http://localhost/denteo2/web/app_dev.php/addDel' + '/' + start + '/' + end,*/
/*                         success: function (data) {*/
/*                             $('#calendar').fullCalendar('removeEvents');*/
/*                             //$('#calendar').fullCalendar('refetchEvents');*/
/*                             location.reload();*/
/*                         }*/
/*                     })*/
/*                 })*/
/*             }*/
/* */
/*             /* function ini_events(ele) {*/
/*              ele.each(function () {*/
/* */
/*              // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)*/
/*              // it doesn't need to have a start or end*/
/*              var eventObject = {*/
/*              title: $.trim($(this).text()), // use the element's text as the event title*/
/* */
/*              };*/
/* */
/*              // store the Event Object in the DOM element so we can get to it later*/
/*              $(this).data('eventObject', eventObject);*/
/* */
/*              // make the event draggable using jQuery UI*/
/*              $(this).draggable({*/
/*              zIndex: 1070,*/
/*              revert: true, // will cause the event to go back to its*/
/*              revertDuration: 0  //  original position after the drag*/
/*              });*/
/* */
/*              });*/
/*              }*//* */
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
/*                     confirmButton: 'Déplacer',*/
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
/*             var addRdv = function (date, jsEvent, view) {*/
/* */
/*                 var now = moment();*/
/*                 console.log(now);*/
/*                 if (now.isAfter(date) && !now.isSame(date)) {*/
/*                     console.log('vous avez selectionner une ancienne date ');*/
/*                     $('#modalDelimiteur').modal().hide();*/
/*                     $('#myModalAncienDate').modal().show();*/
/*                 }*/
/* */
/*                 else {*/
/*                     $('#startMinutes').text(date.format('h:mm'));*/
/*                     $('#rdv_dateDebut').val(date.format('YYYY-MM-DD h:mm'));*/
/*                     if (!sidebar.hasClass('control-sidebar-open')*/
/*                             && !$('body').hasClass('control-sidebar-open')) {*/
/*                         sidebar.addClass('control-sidebar-open');*/
/*                         $('#editRdv').hide();*/
/*                         $('#addRdv').show();*/
/*                     }*/
/*                 }*/
/*             }*/
/* */
/*             var datailsEvent = function (calEvent, jsEvent, view) {*/
/*                 $('#myModal').modal().show();*/
/* */
/*                 if (calEvent.className == 'Rdv') {*/
/*                     $('#myModalLabel').text('Infos Rendez-Vous ');*/
/*                     $('#details').html('<strong class="titreEvent">Titre Rdv :</strong>' + calEvent.title + '<br/>' + '<strong class="titreEvent">Date de Debut: </strong>' + moment(calEvent.start).format('DD-MM-YYYY h:mm') + '<br/><strong class="titreEvent"> Heure de Fin:</strong> ' + moment(calEvent.end).format('DD-MM-YYYY h:mm') + '<br/> <strong class="titreEvent">Description Rdv : </strong>' + calEvent.description);*/
/*                 }*/
/*                 if (calEvent.className == 'Delimiteur') {*/
/*                     $('#myModalLabel').text('Infos Délimiteur ');*/
/*                     $('#details').html('<strong class="titreEvent"> Titre Délimiteur :</strong>' + calEvent.title + '<br/>' + '<strong class="titreEvent">Date de Debut:</strong> ' + moment(calEvent.start).format('DD-MM-YYYY h:mm') + '<br/> <strong class="titreEvent">Heure de Fin:</strong> ' + moment(calEvent.end).format('DD-MM-YYYY h:mm') + '<br/><strong class="titreEvent"> Description Délimiteur :</strong> ' + calEvent.description);*/
/*                 }*/
/* */
/*                 $('#supprimerModal').click(function () {*/
/*                     $.confirm({*/
/*                         title: 'Confirmation',*/
/*                         theme: 'black',*/
/*                         confirmButton: 'Supprimer',*/
/*                         cancelButton: 'Annuler',*/
/*                         content: 'Vous voulez vraiment Supprimer ce Rendez-vous ?',*/
/*                         confirm: function () {*/
/*                             $.ajax({*/
/*                                 type: 'get',*/
/*                                 url: 'http://localhost/denteo2/web/app_dev.php/deleted' + '/' + calEvent.id,*/
/*                                 success: function (data) {*/
/*                                     $('#calendar').fullCalendar('removeEvents', calEvent.id);*/
/*                                     $.growl({title: "Success", message: "Votre Rdv a été bien Supprimer "});*/
/*                                     $('#calendar').fullCalendar('refrechEvents');*/
/*                                 }*/
/*                             })*/
/*                         }*/
/*                     });*/
/*                 })*/
/* */
/*                 $('#modalModifier').click(function () {*/
/*                     if (!sidebar.hasClass('control-sidebar-open')*/
/*                             && !$('body').hasClass('control-sidebar-open')) {*/
/*                         //Open the sidebar*/
/* */
/*                         sidebar.addClass('control-sidebar-open');*/
/* */
/*                         $('#editRdv').show();*/
/*                         $('#addRdv').hide();*/
/* */
/*                         $('#rdv_dateDebut').val(moment(calEvent.start).format('DD-MM-YYYY h:mm'));*/
/*                         $('#rdv_dateFin').val(moment(calEvent.end).format('DD-MM-YYYY h:mm'));*/
/*                         $('#rdv_titre').val(calEvent.title);*/
/*                         $('#btnModif').click(function () {*/
/*                             $.ajax({*/
/*                                 type: 'get',*/
/*                                 url: 'http://localhost/taskPerson/web/app_dev.php/select' + '/' + calEvent.id,*/
/*                                 success: function (data) {*/
/*                                     $('#calendar').fullCalendar('refrech');*/
/*                                 }*/
/*                             })*/
/*                         })*/
/* */
/*                     } else {*/
/* */
/*                     }*/
/*                     $('#btnModif').click(function () {*/
/*                         $.ajax({*/
/*                             type: 'get',*/
/*                             url: 'http://localhost/taskPerson/web/app_dev.php/rdv_modif',*/
/*                             success: function (data) {*/
/*                                 $('#calendar').fullCalendar('refrech');*/
/*                             }*/
/*                         })*/
/*                     })*/
/* */
/*                 })*/
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
/*                 dayClick: addRdv,*/
/*                 eventClick: datailsEvent,*/
/*                 eventDrop: deplacerRdvAndMemo,*/
/*                 eventDragStop: saveOldDragInfo,*/
/*                 loading: calendarLoadingEvent,*/
/*                 eventRender: function (event, element) {*/
/* */
/*                     if (event.className == 'Rdv') {*/
/* */
/*                         element.tooltipster({*/
/*                             contentAsHTML: true,*/
/*                             animation: 'fade',*/
/*                             delay: 200,*/
/*                             content: $('<strong>Titre Rdv:   </strong>' + event.title + '</br><strong>Description :   </strong>' + event.description + '</br><strong>Type : ------</strong></br><strong>Date Debut : </strong>' + event.start.format('DD-MM-YYYY h:mm') + '</br><strong>Date Fin :   </strong>' + event.end.format('DD-MM-YYYY h:mm') + '')*/
/*                         })*/
/* */
/*                     }*/
/*                     else {*/
/*                         element.tooltipster({*/
/*                             contentAsHTML: true,*/
/*                             animation: 'fade',*/
/*                             delay: 200,*/
/*                             content: $('<strong>Titre Délimiteur:   </strong>' + event.title + '</br><strong>Description :   </strong>' + event.description + '</br><strong>Date Debut : </strong>' + event.start.format('DD-MM-YYYY h:mm') + '</br><strong>Date Fin :   </strong>' + event.end.format('DD-MM-YYYY h:mm') + '')*/
/*                         })*/
/*                     }*/
/* */
/* */
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
