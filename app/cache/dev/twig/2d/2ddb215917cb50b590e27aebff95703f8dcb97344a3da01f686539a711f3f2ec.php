<?php

/* EvenementBundle:Default:Agenda.html.twig */
class __TwigTemplate_187dc06a5371a4801d69077bf17e54f2a1bc2933060ddaa31723f78d765541c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "EvenementBundle:Default:Agenda.html.twig", 1);
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
        $__internal_b04bef93d2dad1d196f492dba47a3cbf8279a0005c903cfd38d5bef059739f1d = $this->env->getExtension("native_profiler");
        $__internal_b04bef93d2dad1d196f492dba47a3cbf8279a0005c903cfd38d5bef059739f1d->enter($__internal_b04bef93d2dad1d196f492dba47a3cbf8279a0005c903cfd38d5bef059739f1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EvenementBundle:Default:Agenda.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b04bef93d2dad1d196f492dba47a3cbf8279a0005c903cfd38d5bef059739f1d->leave($__internal_b04bef93d2dad1d196f492dba47a3cbf8279a0005c903cfd38d5bef059739f1d_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_81b44a0a7e3c98b3fca0d37098eb7c8c960d904ba5bb64dbb00cb60c5231a6f0 = $this->env->getExtension("native_profiler");
        $__internal_81b44a0a7e3c98b3fca0d37098eb7c8c960d904ba5bb64dbb00cb60c5231a6f0->enter($__internal_81b44a0a7e3c98b3fca0d37098eb7c8c960d904ba5bb64dbb00cb60c5231a6f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/fullcalendar/fullcalendar.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/fullcalendar/fullcalendar.print.css"), "html", null, true);
        echo "\" media=\"print\">
";
        
        $__internal_81b44a0a7e3c98b3fca0d37098eb7c8c960d904ba5bb64dbb00cb60c5231a6f0->leave($__internal_81b44a0a7e3c98b3fca0d37098eb7c8c960d904ba5bb64dbb00cb60c5231a6f0_prof);

    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        $__internal_f6e01f168451adba34d3cc0938c1ea395cea6c6d32c4610f3d2e5d139131ab4d = $this->env->getExtension("native_profiler");
        $__internal_f6e01f168451adba34d3cc0938c1ea395cea6c6d32c4610f3d2e5d139131ab4d->enter($__internal_f6e01f168451adba34d3cc0938c1ea395cea6c6d32c4610f3d2e5d139131ab4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 7
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
                        <h4 class=\"box-title\">Draggable Events</h4>
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
                        <h3 class=\"box-title\">Create Event</h3>
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

    <div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" data-toggle=\"modal\" aria-labelledby=\"myModalLabel\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span
                                aria-hidden=\"true\">&times;</span></button>
                    <h4 class=\"modal-title\" id=\"myModalLabel\">Modal title</h4>
                </div>
                <div class=\"modal-body\">

                    ";
        // line 96
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                    


                    ";
        // line 100
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                </div>

                <div class=\"modal-footer\">

                </div>
            </div>
        </div>
    </div>

";
        
        $__internal_f6e01f168451adba34d3cc0938c1ea395cea6c6d32c4610f3d2e5d139131ab4d->leave($__internal_f6e01f168451adba34d3cc0938c1ea395cea6c6d32c4610f3d2e5d139131ab4d_prof);

    }

    // line 112
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_92f9708c34fdf0558693b41f9d80af9cd0d0b305b6d1af5fe6a95510ac9dc87c = $this->env->getExtension("native_profiler");
        $__internal_92f9708c34fdf0558693b41f9d80af9cd0d0b305b6d1af5fe6a95510ac9dc87c->enter($__internal_92f9708c34fdf0558693b41f9d80af9cd0d0b305b6d1af5fe6a95510ac9dc87c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 113
        echo "    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js\"></script>
    <script src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/fullcalendar/fullcalendar.min.js"), "html", null, true);
        echo "\"></script>
    <!-- date-range-picker -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js\"></script>
    <script src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\"></script>
    <!-- bootstrap color picker -->
    <script src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/colorpicker/bootstrap-colorpicker.min.js"), "html", null, true);
        echo "\"></script>
    <!-- bootstrap time picker -->
    <script src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/timepicker/bootstrap-timepicker.min.js"), "html", null, true);
        echo "\"></script>

    <script>
        \$(function () {

            /* initialize the external events
             -----------------------------------------------------------------*/


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

            var deplacerRdvAndMemo = function (event, delta, revertFunc, jsEvent, ui, view) {

                var now = moment();
                var start = event.start.format('DD-MM-YYYY');
                var startH = event.start.format('HH:mm');
                var endH = (event.end != null) ? event.end.format('HH:mm') : null;
                var oldStart = event.oldStart.format('DD-MM-YYYY');
                var oldStartH = event.oldStart.format('HH:mm');
                var oldEndH = (event.end != null) ? event.oldEnd.format('HH:mm') : null;
                event.oldStart = null;
                event.oldEnd = null;
                if (event.className.toString() === 'memo') { // memo

                    if (event.start.hasTime()) {
                        \$.modal.alert('Un message doit toujours être placer dans la ligne des messages');
                        revertFunc();
                    } else {
                        var msg = 'Voulez-vous vraiment déplacer cet info ?';
                        if (now.isAfter(event.start) && !now.isSame(event.start)) {
                            msg = 'Voulez-vous vraiment déplacer cet info vers une ancienne date ?'
                        }
                        \$.modal.confirm(
                                msg,
                                function () {
                                    \$.ajax({
                                        type: 'get',
                                        url: Routing.generate('agenda_memo_drop', {id: event.id, start1: start, startH: startH}),
                                        success: function (data) {
                                            notify('Message déplacé!', 'Date de déplacement :' + start, {groupSimilar: false});
                                            if (event.periodique)
                                                \$('#calendar').fullCalendar('refetchEvents');
                                        }
                                    });
                                },
                                function ()
                                {
                                    revertFunc();
                                }
                        );
                    }

                } else { // rdv
                    if (!event.start.hasTime()) {
                        \$.modal.alert('Cette case est réservée pour les infos seulement');
                        revertFunc();
                    } else {
                        \$.modal.confirm(
                                'Voulez-vous vraiment déplacer ce rendez-vous du <strong>' + oldStart + '</strong> de <strong>' + oldStartH + '</strong> à <strong>' + oldEndH + '</strong> vers le <strong>' + start + '</strong> de <strong>' + startH + '</strong> à <strong>' + endH + '</strong>',
                                function () {
                                    \$.ajax({
                                        type: 'get',
                                        url: Routing.generate('drop', {id: event.id, start: start, startH: startH, endH: endH}),
                                        success: function (data) {
                                            notify('Rendez-Vous déplacé!', 'Date de dépalcement :' + start + '<br>' + 'Heure début: ' + startH + '<br>' + 'Heure fin: ' + endH, {groupSimilar: false});
                                            if (event.periodique)
                                                \$('#calendar').fullCalendar('refetchEvents');
                                        }
                                    });
                                },
                                function () {
                                    revertFunc();
                                }
                        );
                        \$('.modal-buttons>button.button.blue-gradient.glossy.mid-margin-left').text('Comfirmer');
                    }

                }
            }

            // ini_events(\$('#external-events div.external-event'));

            /* initialize the calendar
             -----------------------------------------------------------------*/
            //Date for the calendar events (dummy data)
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
                    month: 'month',
                    week: 'week',
                    day: 'day'
                },
                //Random default events
                events: [
                    ";
        // line 245
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entitys"]) ? $context["entitys"] : $this->getContext($context, "entitys")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 246
            echo "                    {
                        id: ";
            // line 247
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo ",
                        title: '";
            // line 248
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "titre", array()), "html", null, true);
            echo "',


                        start: new Date('";
            // line 251
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateDebut", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "'),
                        end: new Date('";
            // line 252
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateFin", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "'),

                    }";
            // line 254
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 256
        echo "                ],
                editable: true,
                droppable: true, // this allows things to be dropped onto the calendar !!!
                dayClick: function (date, jsEvent, view) {


                   // \$('#myModal').modal().show();
                    //\$('#task_dateDebut').val(date.format('DD-MM-YYYY h:mm'));


                },

                eventClick: function (event,date, jsEvent, view) {

                },
                eventDrop: function( event, delta){
                    \$.ajax({
                        type: 'POST',
                        url: Routing.generate('edit_task', {id: event.id}),
                        success: function (data) {
                            console.log(data.etat);
                            \$('#calendar').fullCalendar('getView', event);
                        }
                    });
                },
                eventMouseover: function( event, jsEvent, view ) {
                    \$this.popover({html:true,title:event.title,placement:'top',container:'body'}).popover('show');
                },
                eventRender: function (event, element) {
                    element.popover({
                        title: event.name,
                        placement: 'right',

                    });
                },
                drop: function (date, allDay) { // this function is called when something is dropped

                    // retrieve the dropped element's stored Event Object
                    var originalEventObject = \$(this).data('eventObject');

                    // we need to copy it, so that multiple events don't have a reference to the same object
                    var copiedEventObject = \$.extend({}, originalEventObject);

                    // assign it the date that was reported
                    copiedEventObject.start = date;
                    copiedEventObject.allDay = allDay;
                    copiedEventObject.backgroundColor = \$(this).css(\"background-color\");
                    copiedEventObject.borderColor = \$(this).css(\"border-color\");
                    \$.ajax({
                        url: Routing.generate('annulation', {id: copiedEventObject}), // on donne l'URL du fichier de traitement
                        type: \"POST\", // la requête est de type POST
                        data: \"phraseusuelle=\" + phraseusuelle + \"&entete=\" + entete + \"&myEntete=\" + myEntete + \"&myAlert=\" + myAlert + \"&clientAlert=\" + clientAlert + \"&report=\" + report, // et on envoie nos données

                        success: function (data) {
                            \$('#calendar').fullCalendar('removeEvents', eventId);
                        }
                    });
                    // render the event on the calendar
                    // the last `true` argument determines if the event \"sticks\" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
                    \$('#calendar').fullCalendar('renderEvent', copiedEventObject, true);


                    // is the \"remove after drop\" checkbox checked?
                    if (\$('#drop-remove').is(':checked')) {
                        // if so, remove the element from the \"Draggable Events\" list
                        \$(this).remove();
                    }

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
        
        $__internal_92f9708c34fdf0558693b41f9d80af9cd0d0b305b6d1af5fe6a95510ac9dc87c->leave($__internal_92f9708c34fdf0558693b41f9d80af9cd0d0b305b6d1af5fe6a95510ac9dc87c_prof);

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
        return array (  385 => 256,  369 => 254,  364 => 252,  360 => 251,  354 => 248,  350 => 247,  347 => 246,  330 => 245,  203 => 121,  198 => 119,  193 => 117,  187 => 114,  184 => 113,  178 => 112,  160 => 100,  153 => 96,  62 => 7,  56 => 6,  47 => 4,  42 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends '::layout.html.twig' %}*/
/* {% block stylesheets %}*/
/*     <link rel="stylesheet" href="{{ asset("plugins/fullcalendar/fullcalendar.min.css") }}">*/
/*     <link rel="stylesheet" href="{{ asset("plugins/fullcalendar/fullcalendar.print.css") }}" media="print">*/
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
/*                         <h4 class="box-title">Draggable Events</h4>*/
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
/*                         <h3 class="box-title">Create Event</h3>*/
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
/* */
/*                     {{ form_start(form) }}*/
/*                     */
/* */
/* */
/*                     {{ form_end(form) }}*/
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
/* */
/*     <script>*/
/*         $(function () {*/
/* */
/*             /* initialize the external events*/
/*              -----------------------------------------------------------------*//* */
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
/*             var deplacerRdvAndMemo = function (event, delta, revertFunc, jsEvent, ui, view) {*/
/* */
/*                 var now = moment();*/
/*                 var start = event.start.format('DD-MM-YYYY');*/
/*                 var startH = event.start.format('HH:mm');*/
/*                 var endH = (event.end != null) ? event.end.format('HH:mm') : null;*/
/*                 var oldStart = event.oldStart.format('DD-MM-YYYY');*/
/*                 var oldStartH = event.oldStart.format('HH:mm');*/
/*                 var oldEndH = (event.end != null) ? event.oldEnd.format('HH:mm') : null;*/
/*                 event.oldStart = null;*/
/*                 event.oldEnd = null;*/
/*                 if (event.className.toString() === 'memo') { // memo*/
/* */
/*                     if (event.start.hasTime()) {*/
/*                         $.modal.alert('Un message doit toujours être placer dans la ligne des messages');*/
/*                         revertFunc();*/
/*                     } else {*/
/*                         var msg = 'Voulez-vous vraiment déplacer cet info ?';*/
/*                         if (now.isAfter(event.start) && !now.isSame(event.start)) {*/
/*                             msg = 'Voulez-vous vraiment déplacer cet info vers une ancienne date ?'*/
/*                         }*/
/*                         $.modal.confirm(*/
/*                                 msg,*/
/*                                 function () {*/
/*                                     $.ajax({*/
/*                                         type: 'get',*/
/*                                         url: Routing.generate('agenda_memo_drop', {id: event.id, start1: start, startH: startH}),*/
/*                                         success: function (data) {*/
/*                                             notify('Message déplacé!', 'Date de déplacement :' + start, {groupSimilar: false});*/
/*                                             if (event.periodique)*/
/*                                                 $('#calendar').fullCalendar('refetchEvents');*/
/*                                         }*/
/*                                     });*/
/*                                 },*/
/*                                 function ()*/
/*                                 {*/
/*                                     revertFunc();*/
/*                                 }*/
/*                         );*/
/*                     }*/
/* */
/*                 } else { // rdv*/
/*                     if (!event.start.hasTime()) {*/
/*                         $.modal.alert('Cette case est réservée pour les infos seulement');*/
/*                         revertFunc();*/
/*                     } else {*/
/*                         $.modal.confirm(*/
/*                                 'Voulez-vous vraiment déplacer ce rendez-vous du <strong>' + oldStart + '</strong> de <strong>' + oldStartH + '</strong> à <strong>' + oldEndH + '</strong> vers le <strong>' + start + '</strong> de <strong>' + startH + '</strong> à <strong>' + endH + '</strong>',*/
/*                                 function () {*/
/*                                     $.ajax({*/
/*                                         type: 'get',*/
/*                                         url: Routing.generate('drop', {id: event.id, start: start, startH: startH, endH: endH}),*/
/*                                         success: function (data) {*/
/*                                             notify('Rendez-Vous déplacé!', 'Date de dépalcement :' + start + '<br>' + 'Heure début: ' + startH + '<br>' + 'Heure fin: ' + endH, {groupSimilar: false});*/
/*                                             if (event.periodique)*/
/*                                                 $('#calendar').fullCalendar('refetchEvents');*/
/*                                         }*/
/*                                     });*/
/*                                 },*/
/*                                 function () {*/
/*                                     revertFunc();*/
/*                                 }*/
/*                         );*/
/*                         $('.modal-buttons>button.button.blue-gradient.glossy.mid-margin-left').text('Comfirmer');*/
/*                     }*/
/* */
/*                 }*/
/*             }*/
/* */
/*             // ini_events($('#external-events div.external-event'));*/
/* */
/*             /* initialize the calendar*/
/*              -----------------------------------------------------------------*//* */
/*             //Date for the calendar events (dummy data)*/
/*             var date = new Date();*/
/*             var d = date.getDate(),*/
/*                     m = date.getMonth(),*/
/*                     y = date.getFullYear();*/
/*             $('#calendar').fullCalendar({*/
/*                 header: {*/
/*                     left: 'prev,next today',*/
/*                     center: 'title',*/
/*                     right: 'month,agendaWeek,agendaDay'*/
/*                 },*/
/*                 buttonText: {*/
/*                     today: 'today',*/
/*                     month: 'month',*/
/*                     week: 'week',*/
/*                     day: 'day'*/
/*                 },*/
/*                 //Random default events*/
/*                 events: [*/
/*                     {% for entity in entitys %}*/
/*                     {*/
/*                         id: {{ entity.id }},*/
/*                         title: '{{ entity.titre }}',*/
/* */
/* */
/*                         start: new Date('{{ entity.dateDebut|date('Y-m-d H:i:s') }}'),*/
/*                         end: new Date('{{ entity.dateFin|date('Y-m-d H:i:s') }}'),*/
/* */
/*                     }{{ loop.last ? '' : ',' }}*/
/*                     {% endfor %}*/
/*                 ],*/
/*                 editable: true,*/
/*                 droppable: true, // this allows things to be dropped onto the calendar !!!*/
/*                 dayClick: function (date, jsEvent, view) {*/
/* */
/* */
/*                    // $('#myModal').modal().show();*/
/*                     //$('#task_dateDebut').val(date.format('DD-MM-YYYY h:mm'));*/
/* */
/* */
/*                 },*/
/* */
/*                 eventClick: function (event,date, jsEvent, view) {*/
/* */
/*                 },*/
/*                 eventDrop: function( event, delta){*/
/*                     $.ajax({*/
/*                         type: 'POST',*/
/*                         url: Routing.generate('edit_task', {id: event.id}),*/
/*                         success: function (data) {*/
/*                             console.log(data.etat);*/
/*                             $('#calendar').fullCalendar('getView', event);*/
/*                         }*/
/*                     });*/
/*                 },*/
/*                 eventMouseover: function( event, jsEvent, view ) {*/
/*                     $this.popover({html:true,title:event.title,placement:'top',container:'body'}).popover('show');*/
/*                 },*/
/*                 eventRender: function (event, element) {*/
/*                     element.popover({*/
/*                         title: event.name,*/
/*                         placement: 'right',*/
/* */
/*                     });*/
/*                 },*/
/*                 drop: function (date, allDay) { // this function is called when something is dropped*/
/* */
/*                     // retrieve the dropped element's stored Event Object*/
/*                     var originalEventObject = $(this).data('eventObject');*/
/* */
/*                     // we need to copy it, so that multiple events don't have a reference to the same object*/
/*                     var copiedEventObject = $.extend({}, originalEventObject);*/
/* */
/*                     // assign it the date that was reported*/
/*                     copiedEventObject.start = date;*/
/*                     copiedEventObject.allDay = allDay;*/
/*                     copiedEventObject.backgroundColor = $(this).css("background-color");*/
/*                     copiedEventObject.borderColor = $(this).css("border-color");*/
/*                     $.ajax({*/
/*                         url: Routing.generate('annulation', {id: copiedEventObject}), // on donne l'URL du fichier de traitement*/
/*                         type: "POST", // la requête est de type POST*/
/*                         data: "phraseusuelle=" + phraseusuelle + "&entete=" + entete + "&myEntete=" + myEntete + "&myAlert=" + myAlert + "&clientAlert=" + clientAlert + "&report=" + report, // et on envoie nos données*/
/* */
/*                         success: function (data) {*/
/*                             $('#calendar').fullCalendar('removeEvents', eventId);*/
/*                         }*/
/*                     });*/
/*                     // render the event on the calendar*/
/*                     // the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)*/
/*                     $('#calendar').fullCalendar('renderEvent', copiedEventObject, true);*/
/* */
/* */
/*                     // is the "remove after drop" checkbox checked?*/
/*                     if ($('#drop-remove').is(':checked')) {*/
/*                         // if so, remove the element from the "Draggable Events" list*/
/*                         $(this).remove();*/
/*                     }*/
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
/*         });*/
/*     </script>*/
/* */
/* {% endblock %}*/
/* */
/* */
