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
        $__internal_389198f453244bfb95da244cf10241cf09ab7353d6029bf270dd01883202edf9 = $this->env->getExtension("native_profiler");
        $__internal_389198f453244bfb95da244cf10241cf09ab7353d6029bf270dd01883202edf9->enter($__internal_389198f453244bfb95da244cf10241cf09ab7353d6029bf270dd01883202edf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EvenementBundle:Default:Agenda.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_389198f453244bfb95da244cf10241cf09ab7353d6029bf270dd01883202edf9->leave($__internal_389198f453244bfb95da244cf10241cf09ab7353d6029bf270dd01883202edf9_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_161e99af5e1ec9dd8abd8f2d65d4b60161a14d1936d1d65a53e850a8ca2ca7e3 = $this->env->getExtension("native_profiler");
        $__internal_161e99af5e1ec9dd8abd8f2d65d4b60161a14d1936d1d65a53e850a8ca2ca7e3->enter($__internal_161e99af5e1ec9dd8abd8f2d65d4b60161a14d1936d1d65a53e850a8ca2ca7e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/fullcalendar/fullcalendar.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/fullcalendar/fullcalendar.print.css"), "html", null, true);
        echo "\" media=\"print\">
    <style>

    </style>
";
        
        $__internal_161e99af5e1ec9dd8abd8f2d65d4b60161a14d1936d1d65a53e850a8ca2ca7e3->leave($__internal_161e99af5e1ec9dd8abd8f2d65d4b60161a14d1936d1d65a53e850a8ca2ca7e3_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_970f1fa47ef52594dd06ca9cb1eac36a003f9e08264f92cb30eb3a67f18f6d89 = $this->env->getExtension("native_profiler");
        $__internal_970f1fa47ef52594dd06ca9cb1eac36a003f9e08264f92cb30eb3a67f18f6d89->enter($__internal_970f1fa47ef52594dd06ca9cb1eac36a003f9e08264f92cb30eb3a67f18f6d89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 10
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
                                <button id=\"add-new-event\" type=\"button\" class=\"btn btn-primary btn-flat\">Add</button>
                            </div><!-- /btn-group -->
                        </div><!-- /input-group -->
                    </div>
                </div>
            </div><!-- /.col -->
            <div class=\"col-md-9\">
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
                    <h4 class=\"modal-title\" id=\"myModalLabel\">Modal title</h4>
                </div>
                <div class=\"modal-body\">
                    <p id=\"details\"></p>
                    <button class=\"btn btn-primary\" id=\"modalModifier\" data-dismiss=\"modal\">Modifier</button>

                    <button class=\"btn btn-primary\" id=\"supprimerModal\" data-dismiss=\"modal\">Supprimer</button>
                </div>

                <div class=\"modal-footer\">

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
                    <button class=\"btn btn-primary\" id=\"addDelimiteur\" data-dismiss=\"modal\">Nouveau Délimiteur</button>

                    <button class=\"btn btn-primary\" id=\"supprimerDelimiteur\" data-dismiss=\"modal\">Fermer</button>
                </div>

                <div class=\"modal-footer\">

                </div>
            </div>
        </div>
    </div>

";
        
        $__internal_970f1fa47ef52594dd06ca9cb1eac36a003f9e08264f92cb30eb3a67f18f6d89->leave($__internal_970f1fa47ef52594dd06ca9cb1eac36a003f9e08264f92cb30eb3a67f18f6d89_prof);

    }

    // line 131
    public function block_rdvForm($context, array $blocks = array())
    {
        $__internal_f4f633f7e2f4bb08eec2772d26c8c68808c1b6d30884052bac6bd0f8bee6bb37 = $this->env->getExtension("native_profiler");
        $__internal_f4f633f7e2f4bb08eec2772d26c8c68808c1b6d30884052bac6bd0f8bee6bb37->enter($__internal_f4f633f7e2f4bb08eec2772d26c8c68808c1b6d30884052bac6bd0f8bee6bb37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "rdvForm"));

        // line 132
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
        // line 147
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("id" => "addRdv")));
        echo "
                <div class=\"row\">
                    <div class='col-sm-6 col-md-offset-3 form-group'>
                        <label>Type de Rendez-Vous</label>
                        ";
        // line 151
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "rdvType", array()), 'widget', array("attr" => array("class" => "form-control input-sm")));
        echo "
                        <label>Patient</label>
                        ";
        // line 153
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "patient", array()), 'widget', array("attr" => array("class" => "form-control input-sm")));
        echo "
                        <label>Date et Heure de Debut</label>
                        ";
        // line 155
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateDebut", array()), 'widget', array("attr" => array("class" => "form-control input-sm")));
        echo "


                        <label>Heure de Fin</label>
                        ";
        // line 159
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateFin", array()), 'widget', array("attr" => array("class" => "form-control input-sm")));
        echo "


                        <label>Titre</label>
                        ";
        // line 163
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre", array()), 'widget', array("attr" => array("class" => "form-control input-sm")));
        echo "

                        <label>Description</label>
                        ";
        // line 166
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget', array("attr" => array("class" => "form-control input-sm")));
        echo "<br/>


                        <button type=\"submit\" id=\"btnSubmit\" class=\"btn btn-primary\">Ajouter</button>
                        <button type=\"button\" id=\"close\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>

                    </div>
                </div>


                ";
        // line 176
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                ";
        // line 177
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["editForm"]) ? $context["editForm"] : $this->getContext($context, "editForm")), 'form_start', array("attr" => array("id" => "editRdv")));
        echo "
                <div class=\"row\">
                    <div class='col-sm-6 col-md-offset-3 form-group'>


                        <label>Titre</label>
                        ";
        // line 183
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["editForm"]) ? $context["editForm"] : $this->getContext($context, "editForm")), "titre", array()), 'widget', array("attr" => array("class" => "form-control input-sm")));
        echo "

                        <label>Description</label>
                        ";
        // line 186
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["editForm"]) ? $context["editForm"] : $this->getContext($context, "editForm")), "description", array()), 'widget', array("attr" => array("class" => "form-control input-sm")));
        echo "<br/>


                        <button type=\"submit\" id=\"btnModif\" class=\"btn btn-warning\">Modifier</button>
                        <button type=\"button\" id=\"close\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>

                    </div>
                </div>


                ";
        // line 196
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["editForm"]) ? $context["editForm"] : $this->getContext($context, "editForm")), 'form_end');
        echo "
            </div>

            <div class=\"tab-pane\" id=\"tab2\"><br>
                <h4 class=\"semi-bold\">Step 2 - <span class=\"light\">Account Information</span></h4>

            </div>
        </div>
    </div>



";
        
        $__internal_f4f633f7e2f4bb08eec2772d26c8c68808c1b6d30884052bac6bd0f8bee6bb37->leave($__internal_f4f633f7e2f4bb08eec2772d26c8c68808c1b6d30884052bac6bd0f8bee6bb37_prof);

    }

    // line 210
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b04effcfb1b07c75fbce9484648ae6333941e82fd81240f0f122b47df023f9fb = $this->env->getExtension("native_profiler");
        $__internal_b04effcfb1b07c75fbce9484648ae6333941e82fd81240f0f122b47df023f9fb->enter($__internal_b04effcfb1b07c75fbce9484648ae6333941e82fd81240f0f122b47df023f9fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 211
        echo "    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js\"></script>
    <script src=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/fullcalendar/fullcalendar.min.js"), "html", null, true);
        echo "\"></script>
    <!-- date-range-picker -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js\"></script>
    <script src=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\"></script>
    <!-- bootstrap color picker -->
    <script src=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/colorpicker/bootstrap-colorpicker.min.js"), "html", null, true);
        echo "\"></script>
    <!-- bootstrap time picker -->
    <script src=\"";
        // line 219
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/timepicker/bootstrap-timepicker.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 220
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/fullcalendar/lib/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(function () {
            \$('#btnSubmit').click(function () {
                \$('form').submit(function () {
                    \$.ajax({
                        type: 'GET',
                        url: 'http://localhost/taskPerson/web/app_dev.php/all',
                        success: function (data) {
                            \$('#calendar').fullCalendar('refrechEvents');
                        }
                    })
                })

            })


            \$('#close').click(function () {
                sidebar.removeClass('control-sidebar-open');
            })


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


            var selectComplete = function (start, end, jsEvent, view) {
                var now = moment();
                var temp = moment(end);
                start = moment(start).format('DD-MM-YYYY HH:mm');
                var startH = moment(start).format('HH:mm');
                end = moment(end).format('DD-MM-YYYY HH:mm');
                var endH = moment(end).format('HH:mm');
                var duration = moment.duration(temp.subtract(start));
                var warningMsg = (now.isAfter(end) && !now.isSame(end)) ? '<strong><span>Attention Vous Avez séléctionné une ancienne date</span></strong>' : '';
                \$('#modalDelimiteur').modal().show();
                \$('#detailsD').html('L\\'intervalle que vous avez choisi est: ' + '<br/>' +
                        'Du: ' + moment(start).format('DD-MM-YYYY h:mm') + 'br/' +
                        'A: ' + moment(end).format('DD-MM-YYYY h:mm') + '<br/>');
                \$('#addDelimiteur').click(function () {
                    \$.ajax({
                        type: 'get',
                        url: 'http://localhost/taskPerson/web/app_dev.php/addDel' + '/' + start + '/' + startH + '/' + end + '/' + endH,
                        success: function (data) {
                            \$('#calendar').fullCalendar('refrechEvents');
                        }
                    })
                })

            }

            var deplacerRdvAndMemo = function (event, delta, revertFunc, jsEvent, ui, view) {

                var now = moment();
                var start = moment(event.start).format('DD-MM-YYYY');
                var startH = moment(event.start).format('HH:mm');
                var end = moment(event.end).format('DD-MM-YYYY');
                var endH = moment(event.end).format('HH:mm');
                event.oldStart = null;
                event.oldEnd = null;

                \$.ajax({
                    type: 'get',
                    url: 'http://localhost/denteo2/web/app_dev.php/drop' + '/' + event.id + '/' + start + '/' + startH + '/' + end + '/' + endH,
                    success: function (data) {
                       //\$.growl.notice({ message: \"Votre Rdv a été Deplacer\" });
                        \$.growl({ title: \"Success\", message: \"Votre Rdv a été Déplacer avec success!\" });
                        \$('#calendar').fullCalendar('refrechEvents');
                    }
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
                    right: 'agendaWeek,agendaDay'
                },
                buttonText: {
                    today: 'today',
                    week: 'week',
                    day: 'day'
                },
                defaultView: 'agendaWeek',
                events: '";
        // line 354
        echo $this->env->getExtension('routing')->getPath("load_events");
        echo "',
                editable: true,
                axisFormat: 'HH:mm',
                lazyFetching: true,
                minTime: '08:00',
                maxTime: '19:00',
                droppable: true, // this allows things to be dropped onto the calendar !!!

                dayClick: function (date, jsEvent, view) {

                    \$('#m_rdv_dateDebut').val(date.format('YYYY-MM-DD h:mm'));
                    if (!sidebar.hasClass('control-sidebar-open')
                            && !\$('body').hasClass('control-sidebar-open')) {
                        //Open the sidebar
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
                        \$.ajax({
                            type: 'get',
                            url: 'http://localhost/denteo2/web/app_dev.php/deleted' + '/' + calEvent.id,
                            // url: Routing.generate('deleteRdv', {id: calEvent.id}),
                            success: function (data) {
                                //supprimer le rdv du calendrier
                                \$('#calendar').fullCalendar('removeEvents', calEvent.id);
                                \$.growl.notice({message: \"Suppression Avec Succes :)\"});
                                \$('#calendar').fullCalendar('refrechEvents');

                            }
                        })
                    })
                    \$('#modalModifier').click(function () {
                        if (!sidebar.hasClass('control-sidebar-open')
                                && !\$('body').hasClass('control-sidebar-open')) {
                            //Open the sidebar

                            sidebar.addClass('control-sidebar-open');

                            \$('#editRdv').show();
                            \$('#addRdv').hide();

                            \$('#m_rdv_dateDebut').val(moment(calEvent.start).format('DD-MM-YYYY h:mm'));
                            \$('#m_rdv_dateFin').val(moment(calEvent.end).format('DD-MM-YYYY h:mm'));
                            \$('#m_rdv_titre').val(calEvent.title);
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
                eventReceive: function (event) {

                },
                eventMouseover: function (event, jsEvent, view) {
                },
                eventRender: function (event, element) {
                },
                drop: function (date, allDay) {
                },
                selectable: true,
                selectHelper: true,
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
        
        $__internal_b04effcfb1b07c75fbce9484648ae6333941e82fd81240f0f122b47df023f9fb->leave($__internal_b04effcfb1b07c75fbce9484648ae6333941e82fd81240f0f122b47df023f9fb_prof);

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
        return array (  484 => 354,  347 => 220,  343 => 219,  338 => 217,  333 => 215,  327 => 212,  324 => 211,  318 => 210,  298 => 196,  285 => 186,  279 => 183,  270 => 177,  266 => 176,  253 => 166,  247 => 163,  240 => 159,  233 => 155,  228 => 153,  223 => 151,  216 => 147,  199 => 132,  193 => 131,  66 => 10,  60 => 9,  48 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}
/* {% extends '::layout.html.twig' %}*/
/* {% block stylesheets %}*/
/*     <link rel="stylesheet" href="{{ asset("plugins/fullcalendar/fullcalendar.min.css") }}">*/
/*     <link rel="stylesheet" href="{{ asset("plugins/fullcalendar/fullcalendar.print.css") }}" media="print">*/
/*     <style>*/
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
/*                                 <button id="add-new-event" type="button" class="btn btn-primary btn-flat">Add</button>*/
/*                             </div><!-- /btn-group -->*/
/*                         </div><!-- /input-group -->*/
/*                     </div>*/
/*                 </div>*/
/*             </div><!-- /.col -->*/
/*             <div class="col-md-9">*/
/*                 <div class="box box-primary">*/
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
/*                     <h4 class="modal-title" id="myModalLabel">Modal title</h4>*/
/*                 </div>*/
/*                 <div class="modal-body">*/
/*                     <p id="details"></p>*/
/*                     <button class="btn btn-primary" id="modalModifier" data-dismiss="modal">Modifier</button>*/
/* */
/*                     <button class="btn btn-primary" id="supprimerModal" data-dismiss="modal">Supprimer</button>*/
/*                 </div>*/
/* */
/*                 <div class="modal-footer">*/
/* */
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <div class="modal fade" id="modalDelimiteur" tabindex="-1" role="dialog" data-toggle="modal"*/
/*          aria-labelledby="myModalLabel">*/
/*         <div class="modal-dialog" role="document">*/
/*             <div class="modal-content">*/
/* */
/*                 <div class="modal-body">*/
/*                     <p id="detailsD"></p>*/
/*                     <button class="btn btn-primary" id="addDelimiteur" data-dismiss="modal">Nouveau Délimiteur</button>*/
/* */
/*                     <button class="btn btn-primary" id="supprimerDelimiteur" data-dismiss="modal">Fermer</button>*/
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
/*                         {{ form_widget(form.rdvType,{'attr': {'class':'form-control input-sm'} }) }}*/
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
/* */
/*                         <button type="submit" id="btnSubmit" class="btn btn-primary">Ajouter</button>*/
/*                         <button type="button" id="close" class="btn btn-default" data-dismiss="modal">Close</button>*/
/* */
/*                     </div>*/
/*                 </div>*/
/* */
/* */
/*                 {{ form_end(form) }}*/
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
/*             $('#btnSubmit').click(function () {*/
/*                 $('form').submit(function () {*/
/*                     $.ajax({*/
/*                         type: 'GET',*/
/*                         url: 'http://localhost/taskPerson/web/app_dev.php/all',*/
/*                         success: function (data) {*/
/*                             $('#calendar').fullCalendar('refrechEvents');*/
/*                         }*/
/*                     })*/
/*                 })*/
/* */
/*             })*/
/* */
/* */
/*             $('#close').click(function () {*/
/*                 sidebar.removeClass('control-sidebar-open');*/
/*             })*/
/* */
/* */
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
/*                 $('#modalDelimiteur').modal().show();*/
/*                 $('#detailsD').html('L\'intervalle que vous avez choisi est: ' + '<br/>' +*/
/*                         'Du: ' + moment(start).format('DD-MM-YYYY h:mm') + 'br/' +*/
/*                         'A: ' + moment(end).format('DD-MM-YYYY h:mm') + '<br/>');*/
/*                 $('#addDelimiteur').click(function () {*/
/*                     $.ajax({*/
/*                         type: 'get',*/
/*                         url: 'http://localhost/taskPerson/web/app_dev.php/addDel' + '/' + start + '/' + startH + '/' + end + '/' + endH,*/
/*                         success: function (data) {*/
/*                             $('#calendar').fullCalendar('refrechEvents');*/
/*                         }*/
/*                     })*/
/*                 })*/
/* */
/*             }*/
/* */
/*             var deplacerRdvAndMemo = function (event, delta, revertFunc, jsEvent, ui, view) {*/
/* */
/*                 var now = moment();*/
/*                 var start = moment(event.start).format('DD-MM-YYYY');*/
/*                 var startH = moment(event.start).format('HH:mm');*/
/*                 var end = moment(event.end).format('DD-MM-YYYY');*/
/*                 var endH = moment(event.end).format('HH:mm');*/
/*                 event.oldStart = null;*/
/*                 event.oldEnd = null;*/
/* */
/*                 $.ajax({*/
/*                     type: 'get',*/
/*                     url: 'http://localhost/denteo2/web/app_dev.php/drop' + '/' + event.id + '/' + start + '/' + startH + '/' + end + '/' + endH,*/
/*                     success: function (data) {*/
/*                        //$.growl.notice({ message: "Votre Rdv a été Deplacer" });*/
/*                         $.growl({ title: "Success", message: "Votre Rdv a été Déplacer avec success!" });*/
/*                         $('#calendar').fullCalendar('refrechEvents');*/
/*                     }*/
/*                 })*/
/* */
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
/*                     right: 'agendaWeek,agendaDay'*/
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
/*                 minTime: '08:00',*/
/*                 maxTime: '19:00',*/
/*                 droppable: true, // this allows things to be dropped onto the calendar !!!*/
/* */
/*                 dayClick: function (date, jsEvent, view) {*/
/* */
/*                     $('#m_rdv_dateDebut').val(date.format('YYYY-MM-DD h:mm'));*/
/*                     if (!sidebar.hasClass('control-sidebar-open')*/
/*                             && !$('body').hasClass('control-sidebar-open')) {*/
/*                         //Open the sidebar*/
/*                         sidebar.addClass('control-sidebar-open');*/
/*                         $('#editRdv').hide();*/
/*                         $('#addRdv').show();*/
/*                     } else {*/
/* */
/*                     }*/
/* */
/* */
/*                 },*/
/* */
/*                 eventClick: function (calEvent, jsEvent, view) {*/
/*                     $('#myModal').modal().show();*/
/*                     $('#details').html('Titre :' + calEvent.title + '<br/>' + 'Date de Debut: ' + moment(calEvent.start).format('DD-MM-YYYY h:mm') + '<br/> Heure de Fin: ' + moment(calEvent.end).format('DD-MM-YYYY h:mm'));*/
/*                     $('#supprimerModal').click(function () {*/
/*                         $.ajax({*/
/*                             type: 'get',*/
/*                             url: 'http://localhost/denteo2/web/app_dev.php/deleted' + '/' + calEvent.id,*/
/*                             // url: Routing.generate('deleteRdv', {id: calEvent.id}),*/
/*                             success: function (data) {*/
/*                                 //supprimer le rdv du calendrier*/
/*                                 $('#calendar').fullCalendar('removeEvents', calEvent.id);*/
/*                                 $.growl.notice({message: "Suppression Avec Succes :)"});*/
/*                                 $('#calendar').fullCalendar('refrechEvents');*/
/* */
/*                             }*/
/*                         })*/
/*                     })*/
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
/*                             $('#m_rdv_dateDebut').val(moment(calEvent.start).format('DD-MM-YYYY h:mm'));*/
/*                             $('#m_rdv_dateFin').val(moment(calEvent.end).format('DD-MM-YYYY h:mm'));*/
/*                             $('#m_rdv_titre').val(calEvent.title);*/
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
/*                 eventReceive: function (event) {*/
/* */
/*                 },*/
/*                 eventMouseover: function (event, jsEvent, view) {*/
/*                 },*/
/*                 eventRender: function (event, element) {*/
/*                 },*/
/*                 drop: function (date, allDay) {*/
/*                 },*/
/*                 selectable: true,*/
/*                 selectHelper: true,*/
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
/*         });*/
/* */
/*     </script>*/
/* */
/* {% endblock %}*/
/* */
/* */
