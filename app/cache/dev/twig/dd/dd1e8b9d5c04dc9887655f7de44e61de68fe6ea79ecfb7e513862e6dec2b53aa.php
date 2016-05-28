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
        $__internal_bcf04b6f682f02801dcc23864930b9b25f538a926fd18fe873a5a634805628e7 = $this->env->getExtension("native_profiler");
        $__internal_bcf04b6f682f02801dcc23864930b9b25f538a926fd18fe873a5a634805628e7->enter($__internal_bcf04b6f682f02801dcc23864930b9b25f538a926fd18fe873a5a634805628e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EvenementBundle:Default:Agenda.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bcf04b6f682f02801dcc23864930b9b25f538a926fd18fe873a5a634805628e7->leave($__internal_bcf04b6f682f02801dcc23864930b9b25f538a926fd18fe873a5a634805628e7_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a3b99ab74925485ab2fa9d5ec3a393e4047de8737fd6e263ee9fdf0819f7cf40 = $this->env->getExtension("native_profiler");
        $__internal_a3b99ab74925485ab2fa9d5ec3a393e4047de8737fd6e263ee9fdf0819f7cf40->enter($__internal_a3b99ab74925485ab2fa9d5ec3a393e4047de8737fd6e263ee9fdf0819f7cf40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
    </style>
";
        
        $__internal_a3b99ab74925485ab2fa9d5ec3a393e4047de8737fd6e263ee9fdf0819f7cf40->leave($__internal_a3b99ab74925485ab2fa9d5ec3a393e4047de8737fd6e263ee9fdf0819f7cf40_prof);

    }

    // line 22
    public function block_content($context, array $blocks = array())
    {
        $__internal_ca3ff6a34450a495ee1a073c07da22c8d9a7d9bf7211a3c0b1aa96988c5f2d90 = $this->env->getExtension("native_profiler");
        $__internal_ca3ff6a34450a495ee1a073c07da22c8d9a7d9bf7211a3c0b1aa96988c5f2d90->enter($__internal_ca3ff6a34450a495ee1a073c07da22c8d9a7d9bf7211a3c0b1aa96988c5f2d90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 23
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
        // line 93
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
        
        $__internal_ca3ff6a34450a495ee1a073c07da22c8d9a7d9bf7211a3c0b1aa96988c5f2d90->leave($__internal_ca3ff6a34450a495ee1a073c07da22c8d9a7d9bf7211a3c0b1aa96988c5f2d90_prof);

    }

    // line 150
    public function block_rdvForm($context, array $blocks = array())
    {
        $__internal_f0e0878e0d1cdbc530019a2944e3a5e76b63ee348a4bd8501887ef07efe52000 = $this->env->getExtension("native_profiler");
        $__internal_f0e0878e0d1cdbc530019a2944e3a5e76b63ee348a4bd8501887ef07efe52000->enter($__internal_f0e0878e0d1cdbc530019a2944e3a5e76b63ee348a4bd8501887ef07efe52000_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "rdvForm"));

        // line 151
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
        // line 166
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("id" => "addRdv")));
        echo "
                <div class=\"row\">
                    <div class='col-sm-6 col-md-offset-3 form-group'>
                        <label>Type de Rendez-Vous</label>
                        ";
        // line 170
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "rdvType", array()), 'widget', array("attr" => array("class" => "form-control input-sm")));
        echo "
                        <label>Patient</label>
                        ";
        // line 172
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "patient", array()), 'widget', array("attr" => array("class" => "form-control input-sm")));
        echo "
                        <label>Date et Heure de Debut</label>
                        ";
        // line 174
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateDebut", array()), 'widget', array("attr" => array("class" => "form-control input-sm")));
        echo "


                        <label>Heure de Fin</label>
                        ";
        // line 178
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateFin", array()), 'widget', array("attr" => array("class" => "form-control input-sm")));
        echo "


                        <label>Titre</label>
                        ";
        // line 182
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre", array()), 'widget', array("attr" => array("class" => "form-control input-sm")));
        echo "

                        <label>Description</label>
                        ";
        // line 185
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget', array("attr" => array("class" => "form-control input-sm")));
        echo "<br/>


                        <button type=\"submit\" id=\"btnSubmit\" class=\"btn btn-primary\">Ajouter</button>
                        <button type=\"button\" id=\"close\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>

                    </div>
                </div>


                ";
        // line 195
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                ";
        // line 196
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["editForm"]) ? $context["editForm"] : $this->getContext($context, "editForm")), 'form_start', array("attr" => array("id" => "editRdv")));
        echo "
                <div class=\"row\">
                    <div class='col-sm-6 col-md-offset-3 form-group'>


                        <label>Titre</label>
                        ";
        // line 202
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["editForm"]) ? $context["editForm"] : $this->getContext($context, "editForm")), "titre", array()), 'widget', array("attr" => array("class" => "form-control input-sm")));
        echo "

                        <label>Description</label>
                        ";
        // line 205
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["editForm"]) ? $context["editForm"] : $this->getContext($context, "editForm")), "description", array()), 'widget', array("attr" => array("class" => "form-control input-sm")));
        echo "<br/>


                        <button type=\"submit\" id=\"btnModif\" class=\"btn btn-warning\">Modifier</button>
                        <button type=\"button\" id=\"close\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>

                    </div>
                </div>


                ";
        // line 215
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["editForm"]) ? $context["editForm"] : $this->getContext($context, "editForm")), 'form_end');
        echo "
            </div>

            <div class=\"tab-pane\" id=\"tab2\"><br>
                <h4 class=\"semi-bold\">Step 2 - <span class=\"light\">Account Information</span></h4>

            </div>
        </div>
    </div>



";
        
        $__internal_f0e0878e0d1cdbc530019a2944e3a5e76b63ee348a4bd8501887ef07efe52000->leave($__internal_f0e0878e0d1cdbc530019a2944e3a5e76b63ee348a4bd8501887ef07efe52000_prof);

    }

    // line 229
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_521fd1b8a9be0545da0704e11c3e5efb4bee6608a5589a84363719da45cd151c = $this->env->getExtension("native_profiler");
        $__internal_521fd1b8a9be0545da0704e11c3e5efb4bee6608a5589a84363719da45cd151c->enter($__internal_521fd1b8a9be0545da0704e11c3e5efb4bee6608a5589a84363719da45cd151c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 230
        echo "    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js\"></script>
    <script src=\"";
        // line 231
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/fullcalendar/fullcalendar.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 232
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("JSCalander/lang/lang-all.js"), "html", null, true);
        echo "\"></script>
    <!-- date-range-picker -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js\"></script>
    <script src=\"";
        // line 235
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\"></script>
    <!-- bootstrap color picker -->
    <script src=\"";
        // line 237
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/colorpicker/bootstrap-colorpicker.min.js"), "html", null, true);
        echo "\"></script>
    <!-- bootstrap time picker -->
    <script src=\"";
        // line 239
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/timepicker/bootstrap-timepicker.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 240
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/fullcalendar/lib/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(function () {
            /* \$('#btnSubmit').click(function () {
             \$('form').submit(function () {
             \$.ajax({
             type: 'GET',
             url: 'http://localhost/taskPerson/web/app_dev.php/all',
             success: function (data) {
             \$('#calendar').fullCalendar('refrechEvents');
             }
             })
             })

             })*/


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
                            url: 'http://localhost/denteo2/web/app_dev.php/drop' + '/' + event.id + '/' + start + '/' + startH + '/' + end + '/' + endH,
                            success: function (data) {
                                //\$.growl.notice({ message: \"Votre Rdv a été Deplacer\" });
                                \$.growl({title: \"Success\", message: \"Votre Rdv a été Déplacer avec success!\"});
                                \$('#calendar').fullCalendar('refrechEvents');
                            }
                        })
                    },
                    cancel: function(){
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
        // line 366
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
                    right: 'agendaWeek,agendaDay'
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
        // line 406
        echo $this->env->getExtension('routing')->getPath("load_events");
        echo "',
                editable: true,
                axisFormat: 'HH:mm',
                lazyFetching: true,
                firstDay: ";
        // line 410
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["myConfiguration"]) ? $context["myConfiguration"] : $this->getContext($context, "myConfiguration")), "firstDay", array()), "html", null, true);
        echo ",

                //weekNumbers:";
        // line 412
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["myConfiguration"]) ? $context["myConfiguration"] : $this->getContext($context, "myConfiguration")), "weeksNumber", array()), "html", null, true);
        echo " ,
                minTime: '";
        // line 413
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["myConfiguration"]) ? $context["myConfiguration"] : $this->getContext($context, "myConfiguration")), "dateDeb", array()), "h:i"), "html", null, true);
        echo "',
                // maxTime: '";
        // line 414
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["myConfiguration"]) ? $context["myConfiguration"] : $this->getContext($context, "myConfiguration")), "dateFin", array()), "h:i"), "html", null, true);
        echo "',
                maxTime: '18:00',
                slotDuration: '00:";
        // line 416
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["myConfiguration"]) ? $context["myConfiguration"] : $this->getContext($context, "myConfiguration")), "creneau", array()), "html", null, true);
        echo ":00',
                droppable: true, // this allows things to be dropped onto the calendar !!!
                //aspectRatio: 2,
                ";
        // line 419
        if ($this->getAttribute((isset($context["myConfiguration"]) ? $context["myConfiguration"] : $this->getContext($context, "myConfiguration")), "weeksNumber", array())) {
            // line 420
            echo "                weekNumbers: true,
                ";
        } else {
            // line 422
            echo "                weekNumbers: false,
                ";
        }
        // line 424
        echo "                eventTextColor: 'black',
                eventBackgroundColor: '#00c0ef',
                ";
        // line 426
        if (($this->getAttribute((isset($context["myConfiguration"]) ? $context["myConfiguration"] : $this->getContext($context, "myConfiguration")), "lang", array()) == "anglais")) {
            // line 427
            echo "                lang: 'en',
                ";
        } elseif (($this->getAttribute(        // line 428
(isset($context["myConfiguration"]) ? $context["myConfiguration"] : $this->getContext($context, "myConfiguration")), "lang", array()) == "francais")) {
            // line 429
            echo "                lang: 'fr',
                ";
        } else {
            // line 431
            echo "                lang: 'ar',
                ";
        }
        // line 433
        echo "                columnFormat: 'dddd D/M',
                weekNumberTitle: 'week N°',
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
                                    // url: Routing.generate('deleteRdv', {id: calEvent.id}),
                                    success: function (data) {
                                        //supprimer le rdv du calendrier
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
                        content: \$('<strong>Titre :   </strong>'+event.title+'</br><strong>Description :   </strong>'+event.description+'</br><strong>Type : ------</strong></br><strong>Date Debut : </strong>'+event.start.format('DD-MM-YYYY h:mm')+'</br><strong>Date Fin :   </strong>'+event.end.format('DD-MM-YYYY h:mm')+'')
                    })

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
        
        $__internal_521fd1b8a9be0545da0704e11c3e5efb4bee6608a5589a84363719da45cd151c->leave($__internal_521fd1b8a9be0545da0704e11c3e5efb4bee6608a5589a84363719da45cd151c_prof);

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
        return array (  605 => 433,  601 => 431,  597 => 429,  595 => 428,  592 => 427,  590 => 426,  586 => 424,  582 => 422,  578 => 420,  576 => 419,  570 => 416,  565 => 414,  561 => 413,  557 => 412,  552 => 410,  545 => 406,  502 => 366,  373 => 240,  369 => 239,  364 => 237,  359 => 235,  353 => 232,  349 => 231,  346 => 230,  340 => 229,  320 => 215,  307 => 205,  301 => 202,  292 => 196,  288 => 195,  275 => 185,  269 => 182,  262 => 178,  255 => 174,  250 => 172,  245 => 170,  238 => 166,  221 => 151,  215 => 150,  151 => 93,  79 => 23,  73 => 22,  48 => 4,  43 => 3,  37 => 2,  11 => 1,);
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
/*             /* $('#btnSubmit').click(function () {*/
/*              $('form').submit(function () {*/
/*              $.ajax({*/
/*              type: 'GET',*/
/*              url: 'http://localhost/taskPerson/web/app_dev.php/all',*/
/*              success: function (data) {*/
/*              $('#calendar').fullCalendar('refrechEvents');*/
/*              }*/
/*              })*/
/*              })*/
/* */
/*              })*//* */
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
/*                             url: 'http://localhost/denteo2/web/app_dev.php/drop' + '/' + event.id + '/' + start + '/' + startH + '/' + end + '/' + endH,*/
/*                             success: function (data) {*/
/*                                 //$.growl.notice({ message: "Votre Rdv a été Deplacer" });*/
/*                                 $.growl({title: "Success", message: "Votre Rdv a été Déplacer avec success!"});*/
/*                                 $('#calendar').fullCalendar('refrechEvents');*/
/*                             }*/
/*                         })*/
/*                     },*/
/*                     cancel: function(){*/
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
/*                     right: 'agendaWeek,agendaDay'*/
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
/*                 firstDay: {{ myConfiguration.firstDay }},*/
/* */
/*                 //weekNumbers:{{ myConfiguration.weeksNumber }} ,*/
/*                 minTime: '{{ myConfiguration.dateDeb|date('h:i') }}',*/
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
/*                 eventBackgroundColor: '#00c0ef',*/
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
/*                                     // url: Routing.generate('deleteRdv', {id: calEvent.id}),*/
/*                                     success: function (data) {*/
/*                                         //supprimer le rdv du calendrier*/
/*                                         $('#calendar').fullCalendar('removeEvents', calEvent.id);*/
/*                                         $.growl({title: "Success", message: "Votre Rdv a été bien Supprimer "});*/
/*                                         $('#calendar').fullCalendar('refrechEvents');*/
/*                                     }*/
/*                                 })*/
/*                             }*/
/*                         });*/
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
/*                         content: $('<strong>Titre :   </strong>'+event.title+'</br><strong>Description :   </strong>'+event.description+'</br><strong>Type : ------</strong></br><strong>Date Debut : </strong>'+event.start.format('DD-MM-YYYY h:mm')+'</br><strong>Date Fin :   </strong>'+event.end.format('DD-MM-YYYY h:mm')+'')*/
/*                     })*/
/* */
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
/* */
/* */
/*         });*/
/* */
/*     </script>*/
/* */
/* {% endblock %}*/
/* */
/* */
