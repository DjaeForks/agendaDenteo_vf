<?php

/* ::layout.html.twig */
class __TwigTemplate_5658027c339ac29811cd7833d43249c55697fc36bf9da41231be3f6ab8e3e5c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'content' => array($this, 'block_content'),
            'rdvForm' => array($this, 'block_rdvForm'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ddb9569010d4b8debeae9cac7f952fd59dab6ccef4fbbb6ad3786a8680ca7430 = $this->env->getExtension("native_profiler");
        $__internal_ddb9569010d4b8debeae9cac7f952fd59dab6ccef4fbbb6ad3786a8680ca7430->enter($__internal_ddb9569010d4b8debeae9cac7f952fd59dab6ccef4fbbb6ad3786a8680ca7430_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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


    <![endif]-->
    ";
        // line 101
        $this->displayBlock('javascripts', $context, $blocks);
        // line 103
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
        // line 141
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
        // line 213
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"user-image\" alt=\"User Image\">
                            <span class=\"hidden-xs\">Adnane</span>
                        </a>
                        <ul class=\"dropdown-menu\">
                            <!-- User image -->
                            <li class=\"user-header\">
                                <img src=\"";
        // line 219
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
        // line 267
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
                    <a href=\"#\">
                        <i class=\"fa fa-dashboard\"></i> <span>Dashboard</span> <i
                                class=\"fa fa-angle-left pull-right\"></i>
                    </a>
                    <ul class=\"treeview-menu\">
                        <li><a href=\"../../index.html\"><i class=\"fa fa-circle-o\"></i> Dashboard v1</a></li>
                    </ul>

                <li>
                    <a href=\"";
        // line 298
        echo $this->env->getExtension('routing')->getPath("allRdvs");
        echo "\">
                        <i class=\"fa fa-calendar\"></i> <span>Calendar</span>
                        <small class=\"label pull-right bg-red\">3</small>
                    </a>
                </li>
                <li>
                    <a href=\"";
        // line 304
        echo $this->env->getExtension('routing')->getPath("rdvtype_new");
        echo "\">
                        <i class=\"fa fa-tasks\"></i> <span>Types Rendez-Vous</span>
                    </a>
                </li>
                <li>
                    <a href=\"";
        // line 309
        echo $this->env->getExtension('routing')->getPath("configuration_edit", array("id" => 1));
        echo "\">
                        <i class=\"fa fa-cog\"></i> <span>Configuration</span>
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
        // line 328
        $this->displayBlock('content', $context, $blocks);
        // line 330
        echo "
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->

    <footer class=\"main-footer\">

    </footer>

    <!-- Control Sidebar -->
    <aside class=\"control-sidebar \">
        <!-- Create the tabs -->
        ";
        // line 341
        $this->displayBlock('rdvForm', $context, $blocks);
        // line 344
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
        
        $__internal_ddb9569010d4b8debeae9cac7f952fd59dab6ccef4fbbb6ad3786a8680ca7430->leave($__internal_ddb9569010d4b8debeae9cac7f952fd59dab6ccef4fbbb6ad3786a8680ca7430_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_809ca863246c2985e8b6af885b015f411371e398dec3eb03a95dce596a7cae28 = $this->env->getExtension("native_profiler");
        $__internal_809ca863246c2985e8b6af885b015f411371e398dec3eb03a95dce596a7cae28->enter($__internal_809ca863246c2985e8b6af885b015f411371e398dec3eb03a95dce596a7cae28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "
        <style>

        </style>
    ";
        
        $__internal_809ca863246c2985e8b6af885b015f411371e398dec3eb03a95dce596a7cae28->leave($__internal_809ca863246c2985e8b6af885b015f411371e398dec3eb03a95dce596a7cae28_prof);

    }

    // line 101
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bf12ff456df17b31d775ab447561130dccd2026b6172e38d30676b73ba8d04cd = $this->env->getExtension("native_profiler");
        $__internal_bf12ff456df17b31d775ab447561130dccd2026b6172e38d30676b73ba8d04cd->enter($__internal_bf12ff456df17b31d775ab447561130dccd2026b6172e38d30676b73ba8d04cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 102
        echo "    ";
        
        $__internal_bf12ff456df17b31d775ab447561130dccd2026b6172e38d30676b73ba8d04cd->leave($__internal_bf12ff456df17b31d775ab447561130dccd2026b6172e38d30676b73ba8d04cd_prof);

    }

    // line 328
    public function block_content($context, array $blocks = array())
    {
        $__internal_6438a0780ccbd8c7d668b7bb7a4e533dbf10026dc8283b38ec9004bd1ede269c = $this->env->getExtension("native_profiler");
        $__internal_6438a0780ccbd8c7d668b7bb7a4e533dbf10026dc8283b38ec9004bd1ede269c->enter($__internal_6438a0780ccbd8c7d668b7bb7a4e533dbf10026dc8283b38ec9004bd1ede269c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 329
        echo "            ";
        
        $__internal_6438a0780ccbd8c7d668b7bb7a4e533dbf10026dc8283b38ec9004bd1ede269c->leave($__internal_6438a0780ccbd8c7d668b7bb7a4e533dbf10026dc8283b38ec9004bd1ede269c_prof);

    }

    // line 341
    public function block_rdvForm($context, array $blocks = array())
    {
        $__internal_b8adc0c3189da4faac1980b4aaef95371c5c6e3afa91588feacb40a87bc7924f = $this->env->getExtension("native_profiler");
        $__internal_b8adc0c3189da4faac1980b4aaef95371c5c6e3afa91588feacb40a87bc7924f->enter($__internal_b8adc0c3189da4faac1980b4aaef95371c5c6e3afa91588feacb40a87bc7924f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "rdvForm"));

        // line 342
        echo "
        ";
        
        $__internal_b8adc0c3189da4faac1980b4aaef95371c5c6e3afa91588feacb40a87bc7924f->leave($__internal_b8adc0c3189da4faac1980b4aaef95371c5c6e3afa91588feacb40a87bc7924f_prof);

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
        return array (  588 => 342,  582 => 341,  575 => 329,  569 => 328,  562 => 102,  556 => 101,  545 => 8,  539 => 7,  516 => 344,  514 => 341,  501 => 330,  499 => 328,  477 => 309,  469 => 304,  460 => 298,  426 => 267,  375 => 219,  366 => 213,  291 => 141,  251 => 103,  249 => 101,  242 => 97,  238 => 96,  233 => 94,  229 => 93,  225 => 92,  219 => 89,  214 => 87,  209 => 85,  204 => 83,  199 => 81,  195 => 80,  190 => 78,  185 => 76,  181 => 75,  175 => 72,  171 => 71,  167 => 70,  162 => 68,  158 => 67,  154 => 66,  149 => 64,  145 => 63,  140 => 61,  135 => 59,  130 => 57,  121 => 51,  116 => 49,  109 => 45,  104 => 43,  100 => 42,  94 => 39,  89 => 37,  84 => 35,  79 => 33,  74 => 31,  69 => 29,  64 => 27,  60 => 26,  54 => 23,  50 => 22,  41 => 16,  36 => 13,  34 => 7,  26 => 1,);
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
/* */
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
/*                     <a href="#">*/
/*                         <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i*/
/*                                 class="fa fa-angle-left pull-right"></i>*/
/*                     </a>*/
/*                     <ul class="treeview-menu">*/
/*                         <li><a href="../../index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>*/
/*                     </ul>*/
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
