<?php

/* ::layout.html.twig */
class __TwigTemplate_cfc5e65702ea7faf71f7e401f7a2fa82a92eb1b87fbafad44b37e9024fff278f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'content' => array($this, 'block_content'),
            'patient' => array($this, 'block_patient'),
            'rdvForm' => array($this, 'block_rdvForm'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ee3c7e6b940d4a0ca363c2c0f7e7abf7700f7b87e2a2eb799bc2fe894f871c78 = $this->env->getExtension("native_profiler");
        $__internal_ee3c7e6b940d4a0ca363c2c0f7e7abf7700f7b87e2a2eb799bc2fe894f871c78->enter($__internal_ee3c7e6b940d4a0ca363c2c0f7e7abf7700f7b87e2a2eb799bc2fe894f871c78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>AdminLTE 2 | Fixed Layout</title>
    ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "    <!-- Tell the browser to be responsive to screen width -->
    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
    <!-- Bootstrap 3.3.5 -->
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bootstrap/css/bootstrap.css"), "html", null, true);
        echo "\">
    <!-- Font Awesome -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css\">
    <!-- Ionicons -->
    <link rel=\"stylesheet\" href=\"https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css\">
    <!-- Theme style -->
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/AdminLTE.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/MyStyle.css"), "html", null, true);
        echo "\">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/skins/_all-skins.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Datetimepicker/jquery.datetimepicker.css"), "html", null, true);
        echo "\">
    <!-- DataTables -->
    <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/datatables/dataTables.bootstrap.css"), "html", null, true);
        echo "\">
    <!-- Bootstrap Color Picker -->
    <link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/colorpicker/bootstrap-colorpicker.min.css"), "html", null, true);
        echo "\">
    <!--Growl-->
    <link rel=\"stylesheet\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/growl/jquery.growl.css"), "html", null, true);
        echo "\">
    <!--jqueryConfirm-->
    <link rel=\"stylesheet\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("jqueryConfirm/dist/jquery-confirm.min.css"), "html", null, true);
        echo "\">
    <!-- bootstrap time picker -->
    <link href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/timepicker/bootstrap-timepicker.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <!-- bootstrap clock picker -->
    <link href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/boostrap-clockpicker/bootstrap-clockpicker.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"
          type=\"text/css\" media=\"screen\"/>
    <!--Select-->
    <link href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/select2/select2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\"/>
    <link href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/iCheck/all.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <!--Tooltipster-->
    <link href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("tooltipster-master/css/tooltipster.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>


    <!-- jQuery 2.1.4 -->
    <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/jQuery/jQuery-2.1.4.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"
            integrity=\"sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS\"
            crossorigin=\"anonymous\"></script>
    <!-- SlimScroll -->
    <script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/slimScroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\"></script>
    <!-- FastClick -->
    <script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/fastclick/fastclick.min.js"), "html", null, true);
        echo "\"></script>
    <!-- AdminLTE App -->
    <script src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/app.min.js"), "html", null, true);
        echo "\"></script>
    <!-- AdminLTE for demo purposes -->
    <script src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/demo.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/iCheck/icheck.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/bootstrap-datetimepicker/src/js/bootstrap-datetimepicker.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/bootstrap-datetimepicker/src/js/transition.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/bootstrap-datetimepicker/src/js/collapse.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/boostrap-form-wizard/jquery.bootstrap.wizard.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Datetimepicker/jquery.datetimepicker.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("JSCalander/lib/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"https://code.jquery.com/ui/1.11.4/jquery-ui.min.js\"></script>
    <!-- DataTables -->
    <script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/datatables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/datatables/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <!-- bootstrap color picker -->
    <script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/colorpicker/bootstrap-colorpicker.min.js"), "html", null, true);
        echo "\"></script>
    <!--JsRouting-->
    <script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 81
        echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
    <!--Growl-->
    <script src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/growl/jquery.growl.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!--jqueryConfirm-->
    <script src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("jqueryConfirm/dist/jquery-confirm.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- bootstrap time picker -->
    <script src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/timepicker/bootstrap-timepicker.min.js"), "html", null, true);
        echo "\"></script>
    <!-- bootstrap clock picker -->
    <script src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/boostrap-clockpicker/bootstrap-clockpicker.min.js"), "html", null, true);
        echo "\"
            type=\"text/javascript\"></script>
    <!--Select-->
    <script src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/select2/select2.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/iCheck/icheck.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/iCheck/icheck.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!--Tooltipster-->
    <script src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("tooltipster-master/js/jquery.tooltipster.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/developr/developr.tooltip.js"), "html", null, true);
        echo "\"></script>


    <script>

        \$(function(){

            \$('#my-task-list').popover({
                html: true,
                content: function () {
                    return \$('#notification-list').html();
                }
            });
        });
    </script>

    <![endif]-->
    ";
        // line 114
        $this->displayBlock('javascripts', $context, $blocks);
        // line 116
        echo "</head>
<body class=\"hold-transition skin-blue fixed sidebar-mini\">
<!-- Site wrapper -->
<div class=\"wrapper\">

    <header class=\"main-header\">
        <!-- Logo -->
        <a href=\"../../index2.html\" class=\"logo\">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class=\"logo-mini\"><b>A</b>LT</span>
            <!-- logo for regular state and mobile devices -->
            <span class=\"logo-lg\"><b>Admin</b>LTE</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class=\"navbar navbar-static-top\" role=\"navigation\">
            <!-- Sidebar toggle button-->
            <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </a>
            <div class=\"navbar-custom-menu\">
                <ul class=\"nav navbar-nav\">
                    <!-- Messages: style can be found in dropdown.less-->
                    <li class=\"dropdown messages-menu\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                            <i class=\"fa fa-envelope-o\"></i>
                            <span class=\"label label-success\">4</span>
                        </a>
                        <ul class=\"dropdown-menu\">
                            <li class=\"header\">You have 4 messages</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class=\"menu\">
                                    <li><!-- start message -->
                                        <a href=\"#\">
                                            <div class=\"pull-left\">
                                                <img src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/img/user2-160x160.jpg"), "html", null, true);
        echo "\"
                                                     class=\"img-circle\" alt=\"User Image\">
                                            </div>
                                            <h4>
                                                Support Team
                                                <small><i class=\"fa fa-clock-o\"></i> 5 mins</small>
                                            </h4>
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li><!-- end message -->
                                </ul>
                            </li>
                            <li class=\"footer\"><a href=\"#\">See All Messages</a></li>
                        </ul>
                    </li>
                    <!-- Notifications: style can be found in dropdown.less -->
                    <li class=\"dropdown notifications-menu\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                            <i class=\"fa fa-bell-o\"></i>
                            <span class=\"label label-warning\">10</span>
                        </a>
                        <ul class=\"dropdown-menu\">
                            <li class=\"header\">You have 10 notifications</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class=\"menu\">
                                    <li>
                                        <a href=\"#\">
                                            <i class=\"fa fa-users text-aqua\"></i> 5 new members joined today
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"footer\"><a href=\"#\">View all</a></li>
                        </ul>
                    </li>
                    <!-- Tasks: style can be found in dropdown.less -->
                    <li class=\"dropdown tasks-menu\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                            <i class=\"fa fa-flag-o\"></i>
                            <span class=\"label label-danger\">9</span>
                        </a>
                        <ul class=\"dropdown-menu\">
                            <li class=\"header\">You have 9 tasks</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class=\"menu\">
                                    <li><!-- Task item -->
                                        <a href=\"#\">
                                            <h3>
                                                Design some buttons
                                                <small class=\"pull-right\">20%</small>
                                            </h3>
                                            <div class=\"progress xs\">
                                                <div class=\"progress-bar progress-bar-aqua\" style=\"width: 20%\"
                                                     role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\"
                                                     aria-valuemax=\"100\">
                                                    <span class=\"sr-only\">20% Complete</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li><!-- end task item -->
                                </ul>
                            </li>
                            <li class=\"footer\">
                                <a href=\"#\">View all tasks</a>
                            </li>
                        </ul>
                    </li>
                    <!-- User Account: style can be found in dropdown.less -->
                    <li class=\"dropdown user user-menu\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                            <img src=\"";
        // line 226
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"user-image\" alt=\"User Image\">
                            <span class=\"hidden-xs\">Adnane</span>
                        </a>
                        <ul class=\"dropdown-menu\">
                            <!-- User image -->
                            <li class=\"user-header\">
                                <img src=\"";
        // line 232
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"img-circle\"
                                     alt=\"User Image\">
                                <p>
                                    Adnane - Web Developer
                                    <small>Member since Nov. 2012</small>
                                </p>
                            </li>
                            <!-- Menu Body -->
                            <li class=\"user-body\">
                                <div class=\"col-xs-4 text-center\">
                                    <a href=\"#\">Followers</a>
                                </div>
                                <div class=\"col-xs-4 text-center\">
                                    <a href=\"#\">Sales</a>
                                </div>
                                <div class=\"col-xs-4 text-center\">
                                    <a href=\"#\">Friends</a>
                                </div>
                            </li>
                            <!-- Menu Footer-->
                            <li class=\"user-footer\">
                                <div class=\"pull-left\">
                                    <a href=\"#\" class=\"btn btn-default btn-flat\">Profile</a>
                                </div>
                                <div class=\"pull-right\">
                                    <a href=\"#\" class=\"btn btn-default btn-flat\">Sign out</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- Control Sidebar Toggle Button -->
                    <li>
                        <a href=\"#\" data-toggle=\"control-sidebar\"><i class=\"fa fa-gears\"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- =============================================== -->

    <!-- Left side column. contains the sidebar -->
    <aside class=\"main-sidebar\">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class=\"sidebar\">
            <!-- Sidebar user panel -->
            <div class=\"user-panel\">
                <div class=\"pull-left image\">
                    <img src=\"";
        // line 279
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\">
                </div>
                <div class=\"pull-left info\">
                    <p>Adnane</p>
                    <a href=\"#\"><i class=\"fa fa-circle text-success\"></i> Online</a>
                </div>
            </div>
            <!-- search form -->
            <form action=\"#\" method=\"get\" class=\"sidebar-form\">
                <div class=\"input-group\">
                    <input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"Search...\">
              <span class=\"input-group-btn\">
                <button type=\"submit\" name=\"search\" id=\"search-btn\" class=\"btn btn-flat\"><i class=\"fa fa-search\"></i>
                </button>
              </span>
                </div>
            </form>
            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class=\"sidebar-menu\">
                <li class=\"header\">MAIN NAVIGATION</li>
                <li class=\"treeview\">
                    <a href=\"";
        // line 301
        echo $this->env->getExtension('routing')->getPath("dashboord_test");
        echo "\">
                        <i class=\"fa fa-dashboard\"></i> <span>Acueil</span>
                    </a>


                <li>
                    <a href=\"";
        // line 307
        echo $this->env->getExtension('routing')->getPath("allRdvs");
        echo "\">
                        <i class=\"fa fa-calendar\"></i> <span>Calendar</span>
                        <small class=\"label pull-right bg-red\">3</small>
                    </a>
                </li>
                <li>
                    <a href=\"";
        // line 313
        echo $this->env->getExtension('routing')->getPath("rdvtype_new");
        echo "\">
                        <i class=\"fa fa-tasks\"></i> <span>Types Rendez-Vous</span>
                    </a>
                </li>
                <li>
                    <a href=\"";
        // line 318
        echo $this->env->getExtension('routing')->getPath("configuration_edit", array("id" => 1));
        echo "\">
                        <i class=\"fa fa-cog\"></i> <span>Configuration</span>
                    </a>
                </li>
                <li>
                    <a href=\"";
        // line 323
        echo $this->env->getExtension('routing')->getPath("patient_new");
        echo "\">
                        <i class=\"\"></i> <span>Patient</span>
                    </a>
                </li>

            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- =============================================== -->

    <!-- Content Wrapper. Contains page content -->
    <div class=\"content-wrapper\">


        <!-- Main content -->
        <section class=\"content\">

            ";
        // line 342
        $this->displayBlock('content', $context, $blocks);
        // line 351
        echo "
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->

    <footer class=\"main-footer\">

    </footer>

    <!-- Control Sidebar -->
    <aside class=\"control-sidebar \">
        <!-- Create the tabs -->
        ";
        // line 362
        $this->displayBlock('rdvForm', $context, $blocks);
        // line 365
        echo "

    </aside><!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class=\"control-sidebar-bg\"></div>
</div><!-- ./wrapper -->

<script type=\"text/javascript\">
    \$(function () {
        \$('#rdv_dateDebut,#rdv_dateFin').datetimepicker({});
    });
</script>

</body>
</html>
";
        
        $__internal_ee3c7e6b940d4a0ca363c2c0f7e7abf7700f7b87e2a2eb799bc2fe894f871c78->leave($__internal_ee3c7e6b940d4a0ca363c2c0f7e7abf7700f7b87e2a2eb799bc2fe894f871c78_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0709749e2c85874c22af000c11fb2dd8d63b79e7cb1c30863ee856cc5b0968c7 = $this->env->getExtension("native_profiler");
        $__internal_0709749e2c85874c22af000c11fb2dd8d63b79e7cb1c30863ee856cc5b0968c7->enter($__internal_0709749e2c85874c22af000c11fb2dd8d63b79e7cb1c30863ee856cc5b0968c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "
        <style>

        </style>
    ";
        
        $__internal_0709749e2c85874c22af000c11fb2dd8d63b79e7cb1c30863ee856cc5b0968c7->leave($__internal_0709749e2c85874c22af000c11fb2dd8d63b79e7cb1c30863ee856cc5b0968c7_prof);

    }

    // line 114
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_906c5821612c7d4f59b6156043dc3ab9f08278e52f4fd05a14d33a6353166ffc = $this->env->getExtension("native_profiler");
        $__internal_906c5821612c7d4f59b6156043dc3ab9f08278e52f4fd05a14d33a6353166ffc->enter($__internal_906c5821612c7d4f59b6156043dc3ab9f08278e52f4fd05a14d33a6353166ffc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 115
        echo "    ";
        
        $__internal_906c5821612c7d4f59b6156043dc3ab9f08278e52f4fd05a14d33a6353166ffc->leave($__internal_906c5821612c7d4f59b6156043dc3ab9f08278e52f4fd05a14d33a6353166ffc_prof);

    }

    // line 342
    public function block_content($context, array $blocks = array())
    {
        $__internal_38c0a4807ff39b7679152b76147a0b82ad12572e737785d3fe56de75ba61d1de = $this->env->getExtension("native_profiler");
        $__internal_38c0a4807ff39b7679152b76147a0b82ad12572e737785d3fe56de75ba61d1de->enter($__internal_38c0a4807ff39b7679152b76147a0b82ad12572e737785d3fe56de75ba61d1de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 343
        echo "
                ";
        // line 344
        $this->displayBlock('patient', $context, $blocks);
        // line 349
        echo "
            ";
        
        $__internal_38c0a4807ff39b7679152b76147a0b82ad12572e737785d3fe56de75ba61d1de->leave($__internal_38c0a4807ff39b7679152b76147a0b82ad12572e737785d3fe56de75ba61d1de_prof);

    }

    // line 344
    public function block_patient($context, array $blocks = array())
    {
        $__internal_7b7dbc61b5f15c6640e7a17fb2f82b97585dff79a545585c16fe8f3d38e44916 = $this->env->getExtension("native_profiler");
        $__internal_7b7dbc61b5f15c6640e7a17fb2f82b97585dff79a545585c16fe8f3d38e44916->enter($__internal_7b7dbc61b5f15c6640e7a17fb2f82b97585dff79a545585c16fe8f3d38e44916_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "patient"));

        // line 345
        echo "


                ";
        
        $__internal_7b7dbc61b5f15c6640e7a17fb2f82b97585dff79a545585c16fe8f3d38e44916->leave($__internal_7b7dbc61b5f15c6640e7a17fb2f82b97585dff79a545585c16fe8f3d38e44916_prof);

    }

    // line 362
    public function block_rdvForm($context, array $blocks = array())
    {
        $__internal_b24838fd4e81e806ca5d2fb1c6689e1a6a64c4cbd0b559eb30505df1b89e4c3b = $this->env->getExtension("native_profiler");
        $__internal_b24838fd4e81e806ca5d2fb1c6689e1a6a64c4cbd0b559eb30505df1b89e4c3b->enter($__internal_b24838fd4e81e806ca5d2fb1c6689e1a6a64c4cbd0b559eb30505df1b89e4c3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "rdvForm"));

        // line 363
        echo "
        ";
        
        $__internal_b24838fd4e81e806ca5d2fb1c6689e1a6a64c4cbd0b559eb30505df1b89e4c3b->leave($__internal_b24838fd4e81e806ca5d2fb1c6689e1a6a64c4cbd0b559eb30505df1b89e4c3b_prof);

    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  631 => 363,  625 => 362,  615 => 345,  609 => 344,  601 => 349,  599 => 344,  596 => 343,  590 => 342,  583 => 115,  577 => 114,  566 => 8,  560 => 7,  537 => 365,  535 => 362,  522 => 351,  520 => 342,  498 => 323,  490 => 318,  482 => 313,  473 => 307,  464 => 301,  439 => 279,  389 => 232,  380 => 226,  305 => 154,  265 => 116,  263 => 114,  243 => 97,  239 => 96,  234 => 94,  230 => 93,  226 => 92,  220 => 89,  215 => 87,  210 => 85,  205 => 83,  200 => 81,  196 => 80,  191 => 78,  186 => 76,  182 => 75,  176 => 72,  172 => 71,  168 => 70,  163 => 68,  159 => 67,  155 => 66,  150 => 64,  146 => 63,  141 => 61,  136 => 59,  131 => 57,  122 => 51,  117 => 49,  110 => 45,  105 => 43,  101 => 42,  95 => 39,  90 => 37,  85 => 35,  80 => 33,  75 => 31,  70 => 29,  65 => 27,  61 => 26,  55 => 23,  51 => 22,  42 => 16,  37 => 13,  35 => 7,  27 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <title>AdminLTE 2 | Fixed Layout</title>*/
/*     {% block stylesheets %}*/
/* */
/*         <style>*/
/* */
/*         </style>*/
/*     {% endblock %}*/
/*     <!-- Tell the browser to be responsive to screen width -->*/
/*     <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">*/
/*     <!-- Bootstrap 3.3.5 -->*/
/*     <link rel="stylesheet" href="{{ asset("bootstrap/css/bootstrap.css") }}">*/
/*     <!-- Font Awesome -->*/
/*     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">*/
/*     <!-- Ionicons -->*/
/*     <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">*/
/*     <!-- Theme style -->*/
/*     <link rel="stylesheet" href="{{ asset("assets/css/AdminLTE.css") }}">*/
/*     <link rel="stylesheet" href="{{ asset("assets/css/MyStyle.css") }}">*/
/*     <!-- AdminLTE Skins. Choose a skin from the css/skins*/
/*          folder instead of downloading all of them to reduce the load. -->*/
/*     <link rel="stylesheet" href="{{ asset("assets/css/skins/_all-skins.min.css") }}">*/
/*     <link rel="stylesheet" href="{{ asset("Datetimepicker/jquery.datetimepicker.css") }}">*/
/*     <!-- DataTables -->*/
/*     <link rel="stylesheet" href="{{ asset('plugins/datatables/dataTables.bootstrap.css') }}">*/
/*     <!-- Bootstrap Color Picker -->*/
/*     <link rel="stylesheet" href="{{ asset("plugins/colorpicker/bootstrap-colorpicker.min.css") }}">*/
/*     <!--Growl-->*/
/*     <link rel="stylesheet" href="{{ asset('plugins/growl/jquery.growl.css') }}">*/
/*     <!--jqueryConfirm-->*/
/*     <link rel="stylesheet" href="{{ asset('jqueryConfirm/dist/jquery-confirm.min.css') }}">*/
/*     <!-- bootstrap time picker -->*/
/*     <link href="{{ asset('plugins/timepicker/bootstrap-timepicker.css') }}" rel="stylesheet" type="text/css"/>*/
/*     <!-- bootstrap clock picker -->*/
/*     <link href="{{ asset('plugins/boostrap-clockpicker/bootstrap-clockpicker.min.css') }}" rel="stylesheet"*/
/*           type="text/css" media="screen"/>*/
/*     <!--Select-->*/
/*     <link href="{{ asset('plugins/select2/select2.css') }}" rel="stylesheet" type="text/css" media="screen"/>*/
/*     <link href="{{ asset('plugins/iCheck/all.css') }}" rel="stylesheet" type="text/css"/>*/
/*     <!--Tooltipster-->*/
/*     <link href="{{ asset('tooltipster-master/css/tooltipster.css') }}" rel="stylesheet" type="text/css"/>*/
/* */
/* */
/*     <!-- jQuery 2.1.4 -->*/
/*     <script src="{{ asset("plugins/jQuery/jQuery-2.1.4.min.js") }}"></script>*/
/*     <!-- Bootstrap 3.3.5 -->*/
/*     <script src="{{ asset("bootstrap/js/bootstrap.min.js") }}"></script>*/
/*     <!-- Latest compiled and minified JavaScript -->*/
/*     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"*/
/*             integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"*/
/*             crossorigin="anonymous"></script>*/
/*     <!-- SlimScroll -->*/
/*     <script src="{{ asset("plugins/slimScroll/jquery.slimscroll.min.js") }}"></script>*/
/*     <!-- FastClick -->*/
/*     <script src="{{ asset("plugins/fastclick/fastclick.min.js") }}"></script>*/
/*     <!-- AdminLTE App -->*/
/*     <script src="{{ asset("assets/js/app.min.js") }}"></script>*/
/*     <!-- AdminLTE for demo purposes -->*/
/*     <script src="{{ asset("assets/js/demo.js") }}"></script>*/
/*     <script src="{{ asset("plugins/iCheck/icheck.min.js") }}"></script>*/
/*     <script type="text/javascript"*/
/*             src="{{ asset('plugins/bootstrap-datetimepicker/src/js/bootstrap-datetimepicker.js') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset('plugins/bootstrap-datetimepicker/src/js/transition.js') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset('plugins/bootstrap-datetimepicker/src/js/collapse.js') }}"></script>*/
/*     <script type="text/javascript"*/
/*             src="{{ asset('plugins/boostrap-form-wizard/jquery.bootstrap.wizard.min.js') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset('Datetimepicker/jquery.datetimepicker.js') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset('JSCalander/lib/moment.min.js') }}"></script>*/
/*     <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>*/
/*     <!-- DataTables -->*/
/*     <script src="{{ asset("plugins/datatables/jquery.dataTables.min.js") }}"></script>*/
/*     <script src="{{ asset("plugins/datatables/dataTables.bootstrap.min.js") }}"></script>*/
/*     <!-- bootstrap color picker -->*/
/*     <script src="{{ asset("plugins/colorpicker/bootstrap-colorpicker.min.js") }}"></script>*/
/*     <!--JsRouting-->*/
/*     <script src="{{ asset('bundles/fosjsrouting/js/router.js') }}"></script>*/
/*     <script src="{{ path('fos_js_routing_js', {'callback': 'fos.Router.setData'}) }}"></script>*/
/*     <!--Growl-->*/
/*     <script src="{{ asset('plugins/growl/jquery.growl.js') }}" type="text/javascript"></script>*/
/*     <!--jqueryConfirm-->*/
/*     <script src="{{ asset('jqueryConfirm/dist/jquery-confirm.min.js') }}" type="text/javascript"></script>*/
/*     <!-- bootstrap time picker -->*/
/*     <script src="{{ asset("plugins/timepicker/bootstrap-timepicker.min.js") }}"></script>*/
/*     <!-- bootstrap clock picker -->*/
/*     <script src="{{ asset('plugins/boostrap-clockpicker/bootstrap-clockpicker.min.js') }}"*/
/*             type="text/javascript"></script>*/
/*     <!--Select-->*/
/*     <script src="{{ asset('plugins/select2/select2.min.js') }}" type="text/javascript"></script>*/
/*     <script src="{{ asset('plugins/iCheck/icheck.min.js') }}" type="text/javascript"></script>*/
/*     <script src="{{ asset('plugins/iCheck/icheck.js') }}" type="text/javascript"></script>*/
/*     <!--Tooltipster-->*/
/*     <script src="{{ asset('tooltipster-master/js/jquery.tooltipster.min.js') }}" type="text/javascript"></script>*/
/*     <script src="{{ asset('plugins/developr/developr.tooltip.js') }}"></script>*/
/* */
/* */
/*     <script>*/
/* */
/*         $(function(){*/
/* */
/*             $('#my-task-list').popover({*/
/*                 html: true,*/
/*                 content: function () {*/
/*                     return $('#notification-list').html();*/
/*                 }*/
/*             });*/
/*         });*/
/*     </script>*/
/* */
/*     <![endif]-->*/
/*     {% block javascripts %}*/
/*     {% endblock %}*/
/* </head>*/
/* <body class="hold-transition skin-blue fixed sidebar-mini">*/
/* <!-- Site wrapper -->*/
/* <div class="wrapper">*/
/* */
/*     <header class="main-header">*/
/*         <!-- Logo -->*/
/*         <a href="../../index2.html" class="logo">*/
/*             <!-- mini logo for sidebar mini 50x50 pixels -->*/
/*             <span class="logo-mini"><b>A</b>LT</span>*/
/*             <!-- logo for regular state and mobile devices -->*/
/*             <span class="logo-lg"><b>Admin</b>LTE</span>*/
/*         </a>*/
/*         <!-- Header Navbar: style can be found in header.less -->*/
/*         <nav class="navbar navbar-static-top" role="navigation">*/
/*             <!-- Sidebar toggle button-->*/
/*             <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">*/
/*                 <span class="sr-only">Toggle navigation</span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*             </a>*/
/*             <div class="navbar-custom-menu">*/
/*                 <ul class="nav navbar-nav">*/
/*                     <!-- Messages: style can be found in dropdown.less-->*/
/*                     <li class="dropdown messages-menu">*/
/*                         <a href="#" class="dropdown-toggle" data-toggle="dropdown">*/
/*                             <i class="fa fa-envelope-o"></i>*/
/*                             <span class="label label-success">4</span>*/
/*                         </a>*/
/*                         <ul class="dropdown-menu">*/
/*                             <li class="header">You have 4 messages</li>*/
/*                             <li>*/
/*                                 <!-- inner menu: contains the actual data -->*/
/*                                 <ul class="menu">*/
/*                                     <li><!-- start message -->*/
/*                                         <a href="#">*/
/*                                             <div class="pull-left">*/
/*                                                 <img src="{{ asset("assets/img/user2-160x160.jpg") }}"*/
/*                                                      class="img-circle" alt="User Image">*/
/*                                             </div>*/
/*                                             <h4>*/
/*                                                 Support Team*/
/*                                                 <small><i class="fa fa-clock-o"></i> 5 mins</small>*/
/*                                             </h4>*/
/*                                             <p>Why not buy a new awesome theme?</p>*/
/*                                         </a>*/
/*                                     </li><!-- end message -->*/
/*                                 </ul>*/
/*                             </li>*/
/*                             <li class="footer"><a href="#">See All Messages</a></li>*/
/*                         </ul>*/
/*                     </li>*/
/*                     <!-- Notifications: style can be found in dropdown.less -->*/
/*                     <li class="dropdown notifications-menu">*/
/*                         <a href="#" class="dropdown-toggle" data-toggle="dropdown">*/
/*                             <i class="fa fa-bell-o"></i>*/
/*                             <span class="label label-warning">10</span>*/
/*                         </a>*/
/*                         <ul class="dropdown-menu">*/
/*                             <li class="header">You have 10 notifications</li>*/
/*                             <li>*/
/*                                 <!-- inner menu: contains the actual data -->*/
/*                                 <ul class="menu">*/
/*                                     <li>*/
/*                                         <a href="#">*/
/*                                             <i class="fa fa-users text-aqua"></i> 5 new members joined today*/
/*                                         </a>*/
/*                                     </li>*/
/*                                 </ul>*/
/*                             </li>*/
/*                             <li class="footer"><a href="#">View all</a></li>*/
/*                         </ul>*/
/*                     </li>*/
/*                     <!-- Tasks: style can be found in dropdown.less -->*/
/*                     <li class="dropdown tasks-menu">*/
/*                         <a href="#" class="dropdown-toggle" data-toggle="dropdown">*/
/*                             <i class="fa fa-flag-o"></i>*/
/*                             <span class="label label-danger">9</span>*/
/*                         </a>*/
/*                         <ul class="dropdown-menu">*/
/*                             <li class="header">You have 9 tasks</li>*/
/*                             <li>*/
/*                                 <!-- inner menu: contains the actual data -->*/
/*                                 <ul class="menu">*/
/*                                     <li><!-- Task item -->*/
/*                                         <a href="#">*/
/*                                             <h3>*/
/*                                                 Design some buttons*/
/*                                                 <small class="pull-right">20%</small>*/
/*                                             </h3>*/
/*                                             <div class="progress xs">*/
/*                                                 <div class="progress-bar progress-bar-aqua" style="width: 20%"*/
/*                                                      role="progressbar" aria-valuenow="20" aria-valuemin="0"*/
/*                                                      aria-valuemax="100">*/
/*                                                     <span class="sr-only">20% Complete</span>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                         </a>*/
/*                                     </li><!-- end task item -->*/
/*                                 </ul>*/
/*                             </li>*/
/*                             <li class="footer">*/
/*                                 <a href="#">View all tasks</a>*/
/*                             </li>*/
/*                         </ul>*/
/*                     </li>*/
/*                     <!-- User Account: style can be found in dropdown.less -->*/
/*                     <li class="dropdown user user-menu">*/
/*                         <a href="#" class="dropdown-toggle" data-toggle="dropdown">*/
/*                             <img src="{{ asset("assets/img/user2-160x160.jpg") }}" class="user-image" alt="User Image">*/
/*                             <span class="hidden-xs">Adnane</span>*/
/*                         </a>*/
/*                         <ul class="dropdown-menu">*/
/*                             <!-- User image -->*/
/*                             <li class="user-header">*/
/*                                 <img src="{{ asset("assets/img/user2-160x160.jpg") }}" class="img-circle"*/
/*                                      alt="User Image">*/
/*                                 <p>*/
/*                                     Adnane - Web Developer*/
/*                                     <small>Member since Nov. 2012</small>*/
/*                                 </p>*/
/*                             </li>*/
/*                             <!-- Menu Body -->*/
/*                             <li class="user-body">*/
/*                                 <div class="col-xs-4 text-center">*/
/*                                     <a href="#">Followers</a>*/
/*                                 </div>*/
/*                                 <div class="col-xs-4 text-center">*/
/*                                     <a href="#">Sales</a>*/
/*                                 </div>*/
/*                                 <div class="col-xs-4 text-center">*/
/*                                     <a href="#">Friends</a>*/
/*                                 </div>*/
/*                             </li>*/
/*                             <!-- Menu Footer-->*/
/*                             <li class="user-footer">*/
/*                                 <div class="pull-left">*/
/*                                     <a href="#" class="btn btn-default btn-flat">Profile</a>*/
/*                                 </div>*/
/*                                 <div class="pull-right">*/
/*                                     <a href="#" class="btn btn-default btn-flat">Sign out</a>*/
/*                                 </div>*/
/*                             </li>*/
/*                         </ul>*/
/*                     </li>*/
/*                     <!-- Control Sidebar Toggle Button -->*/
/*                     <li>*/
/*                         <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>*/
/*                     </li>*/
/*                 </ul>*/
/*             </div>*/
/*         </nav>*/
/*     </header>*/
/*     <!-- =============================================== -->*/
/* */
/*     <!-- Left side column. contains the sidebar -->*/
/*     <aside class="main-sidebar">*/
/*         <!-- sidebar: style can be found in sidebar.less -->*/
/*         <section class="sidebar">*/
/*             <!-- Sidebar user panel -->*/
/*             <div class="user-panel">*/
/*                 <div class="pull-left image">*/
/*                     <img src="{{ asset("assets/img/user2-160x160.jpg") }}" class="img-circle" alt="User Image">*/
/*                 </div>*/
/*                 <div class="pull-left info">*/
/*                     <p>Adnane</p>*/
/*                     <a href="#"><i class="fa fa-circle text-success"></i> Online</a>*/
/*                 </div>*/
/*             </div>*/
/*             <!-- search form -->*/
/*             <form action="#" method="get" class="sidebar-form">*/
/*                 <div class="input-group">*/
/*                     <input type="text" name="q" class="form-control" placeholder="Search...">*/
/*               <span class="input-group-btn">*/
/*                 <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>*/
/*                 </button>*/
/*               </span>*/
/*                 </div>*/
/*             </form>*/
/*             <!-- /.search form -->*/
/*             <!-- sidebar menu: : style can be found in sidebar.less -->*/
/*             <ul class="sidebar-menu">*/
/*                 <li class="header">MAIN NAVIGATION</li>*/
/*                 <li class="treeview">*/
/*                     <a href="{{ path('dashboord_test') }}">*/
/*                         <i class="fa fa-dashboard"></i> <span>Acueil</span>*/
/*                     </a>*/
/* */
/* */
/*                 <li>*/
/*                     <a href="{{ path('allRdvs') }}">*/
/*                         <i class="fa fa-calendar"></i> <span>Calendar</span>*/
/*                         <small class="label pull-right bg-red">3</small>*/
/*                     </a>*/
/*                 </li>*/
/*                 <li>*/
/*                     <a href="{{ path('rdvtype_new') }}">*/
/*                         <i class="fa fa-tasks"></i> <span>Types Rendez-Vous</span>*/
/*                     </a>*/
/*                 </li>*/
/*                 <li>*/
/*                     <a href="{{ path('configuration_edit', { 'id': 1 }) }}">*/
/*                         <i class="fa fa-cog"></i> <span>Configuration</span>*/
/*                     </a>*/
/*                 </li>*/
/*                 <li>*/
/*                     <a href="{{ path('patient_new') }}">*/
/*                         <i class=""></i> <span>Patient</span>*/
/*                     </a>*/
/*                 </li>*/
/* */
/*             </ul>*/
/*         </section>*/
/*         <!-- /.sidebar -->*/
/*     </aside>*/
/* */
/*     <!-- =============================================== -->*/
/* */
/*     <!-- Content Wrapper. Contains page content -->*/
/*     <div class="content-wrapper">*/
/* */
/* */
/*         <!-- Main content -->*/
/*         <section class="content">*/
/* */
/*             {% block content %}*/
/* */
/*                 {% block patient %}*/
/* */
/* */
/* */
/*                 {% endblock  %}*/
/* */
/*             {% endblock content %}*/
/* */
/*         </section><!-- /.content -->*/
/*     </div><!-- /.content-wrapper -->*/
/* */
/*     <footer class="main-footer">*/
/* */
/*     </footer>*/
/* */
/*     <!-- Control Sidebar -->*/
/*     <aside class="control-sidebar ">*/
/*         <!-- Create the tabs -->*/
/*         {% block rdvForm %}*/
/* */
/*         {% endblock rdvForm %}*/
/* */
/* */
/*     </aside><!-- /.control-sidebar -->*/
/*     <!-- Add the sidebar's background. This div must be placed*/
/*          immediately after the control sidebar -->*/
/*     <div class="control-sidebar-bg"></div>*/
/* </div><!-- ./wrapper -->*/
/* */
/* <script type="text/javascript">*/
/*     $(function () {*/
/*         $('#rdv_dateDebut,#rdv_dateFin').datetimepicker({});*/
/*     });*/
/* </script>*/
/* */
/* </body>*/
/* </html>*/
/* */
