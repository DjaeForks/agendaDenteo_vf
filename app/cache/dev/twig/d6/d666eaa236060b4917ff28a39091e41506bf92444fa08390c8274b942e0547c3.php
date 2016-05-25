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
        $__internal_bb15aa77c9b4dd2adebde318dba66419b5fb21368dceec34f5bba84f55ce0697 = $this->env->getExtension("native_profiler");
        $__internal_bb15aa77c9b4dd2adebde318dba66419b5fb21368dceec34f5bba84f55ce0697->enter($__internal_bb15aa77c9b4dd2adebde318dba66419b5fb21368dceec34f5bba84f55ce0697_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
        // line 9
        echo "    <!-- Tell the browser to be responsive to screen width -->
    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
    <!-- Bootstrap 3.3.5 -->
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bootstrap/css/bootstrap.css"), "html", null, true);
        echo "\">
    <!-- Font Awesome -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css\">
    <!-- Ionicons -->
    <link rel=\"stylesheet\" href=\"https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css\">
    <!-- Theme style -->
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/AdminLTE.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/MyStyle.css"), "html", null, true);
        echo "\">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/skins/_all-skins.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Datetimepicker/jquery.datetimepicker.css"), "html", null, true);
        echo "\">
    <!-- DataTables -->
    <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/datatables/dataTables.bootstrap.css"), "html", null, true);
        echo "\">
    <!-- Bootstrap Color Picker -->
    <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/colorpicker/bootstrap-colorpicker.min.css"), "html", null, true);
        echo "\">
    <!--Growl-->
    <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/growl/jquery.growl.css"), "html", null, true);
        echo "\">
    <!--jqueryConfirm-->
    <link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("jqueryConfirm/dist/jquery-confirm.min.css"), "html", null, true);
        echo "\">

    <!-- jQuery 2.1.4 -->
    <script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/jQuery/jQuery-2.1.4.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"
            integrity=\"sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS\"
            crossorigin=\"anonymous\"></script>
    <!-- SlimScroll -->
    <script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/slimScroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\"></script>
    <!-- FastClick -->
    <script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/fastclick/fastclick.min.js"), "html", null, true);
        echo "\"></script>
    <!-- AdminLTE App -->
    <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/app.min.js"), "html", null, true);
        echo "\"></script>
    <!-- AdminLTE for demo purposes -->
    <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/demo.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/iCheck/icheck.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\"
            src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/bootstrap-datetimepicker/src/js/bootstrap-datetimepicker.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/bootstrap-datetimepicker/src/js/transition.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/bootstrap-datetimepicker/src/js/collapse.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/boostrap-form-wizard/jquery.bootstrap.wizard.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Datetimepicker/jquery.datetimepicker.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("JSCalander/lib/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"https://code.jquery.com/ui/1.11.4/jquery-ui.min.js\"></script>
    <!-- DataTables -->
    <script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/datatables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/datatables/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <!-- bootstrap color picker -->
    <script src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/colorpicker/bootstrap-colorpicker.min.js"), "html", null, true);
        echo "\"></script>
    <!--JsRouting-->
    <script src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 65
        echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
    <!--Growl-->
    <script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("plugins/growl/jquery.growl.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!--jqueryConfirm-->

    <script src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("jqueryConfirm/dist/jquery-confirm.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>





    <![endif]-->
    ";
        // line 77
        $this->displayBlock('javascripts', $context, $blocks);
        // line 79
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
        // line 117
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
        // line 189
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"user-image\" alt=\"User Image\">
                            <span class=\"hidden-xs\">Adnane</span>
                        </a>
                        <ul class=\"dropdown-menu\">
                            <!-- User image -->
                            <li class=\"user-header\">
                                <img src=\"";
        // line 195
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
        // line 243
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
        // line 274
        echo $this->env->getExtension('routing')->getPath("allRdvs");
        echo "\">
                        <i class=\"fa fa-calendar\"></i> <span>Calendar</span>
                        <small class=\"label pull-right bg-red\">3</small>
                    </a>
                </li>
                <li>
                    <a href=\"";
        // line 280
        echo $this->env->getExtension('routing')->getPath("rdvtype_new");
        echo "\">
                        <i class=\"fa fa-tasks\"></i> <span>Types Rendez-Vous</span>
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
        // line 299
        $this->displayBlock('content', $context, $blocks);
        // line 301
        echo "
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->

    <footer class=\"main-footer\">

    </footer>

    <!-- Control Sidebar -->
    <aside class=\"control-sidebar \">
        <!-- Create the tabs -->
        ";
        // line 312
        $this->displayBlock('rdvForm', $context, $blocks);
        // line 315
        echo "

    </aside><!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class=\"control-sidebar-bg\"></div>
</div><!-- ./wrapper -->

<script type=\"text/javascript\">
    \$(function () {
        \$('#m_rdv_dateDebut,#m_rdv_dateFin').datetimepicker({});
    });
</script>

</body>
</html>
";
        
        $__internal_bb15aa77c9b4dd2adebde318dba66419b5fb21368dceec34f5bba84f55ce0697->leave($__internal_bb15aa77c9b4dd2adebde318dba66419b5fb21368dceec34f5bba84f55ce0697_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2aa4b7623290be5d2acf5fcded9edb05527adcb57219e6737744140831f31c7c = $this->env->getExtension("native_profiler");
        $__internal_2aa4b7623290be5d2acf5fcded9edb05527adcb57219e6737744140831f31c7c->enter($__internal_2aa4b7623290be5d2acf5fcded9edb05527adcb57219e6737744140831f31c7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "    ";
        
        $__internal_2aa4b7623290be5d2acf5fcded9edb05527adcb57219e6737744140831f31c7c->leave($__internal_2aa4b7623290be5d2acf5fcded9edb05527adcb57219e6737744140831f31c7c_prof);

    }

    // line 77
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a9e192905e5db8b0a0684e0c05b588118c7b71c2e6216391cb15c79408aeb7db = $this->env->getExtension("native_profiler");
        $__internal_a9e192905e5db8b0a0684e0c05b588118c7b71c2e6216391cb15c79408aeb7db->enter($__internal_a9e192905e5db8b0a0684e0c05b588118c7b71c2e6216391cb15c79408aeb7db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 78
        echo "    ";
        
        $__internal_a9e192905e5db8b0a0684e0c05b588118c7b71c2e6216391cb15c79408aeb7db->leave($__internal_a9e192905e5db8b0a0684e0c05b588118c7b71c2e6216391cb15c79408aeb7db_prof);

    }

    // line 299
    public function block_content($context, array $blocks = array())
    {
        $__internal_e19cd442f7d123dcdc641352fdb8bb5c6efb384c3bcfabc6640a02c0417bc46a = $this->env->getExtension("native_profiler");
        $__internal_e19cd442f7d123dcdc641352fdb8bb5c6efb384c3bcfabc6640a02c0417bc46a->enter($__internal_e19cd442f7d123dcdc641352fdb8bb5c6efb384c3bcfabc6640a02c0417bc46a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 300
        echo "            ";
        
        $__internal_e19cd442f7d123dcdc641352fdb8bb5c6efb384c3bcfabc6640a02c0417bc46a->leave($__internal_e19cd442f7d123dcdc641352fdb8bb5c6efb384c3bcfabc6640a02c0417bc46a_prof);

    }

    // line 312
    public function block_rdvForm($context, array $blocks = array())
    {
        $__internal_35197b60783bcceaa629ed94f1d15ad591c61111f80a1df6f324104e6b5b27de = $this->env->getExtension("native_profiler");
        $__internal_35197b60783bcceaa629ed94f1d15ad591c61111f80a1df6f324104e6b5b27de->enter($__internal_35197b60783bcceaa629ed94f1d15ad591c61111f80a1df6f324104e6b5b27de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "rdvForm"));

        // line 313
        echo "
        ";
        
        $__internal_35197b60783bcceaa629ed94f1d15ad591c61111f80a1df6f324104e6b5b27de->leave($__internal_35197b60783bcceaa629ed94f1d15ad591c61111f80a1df6f324104e6b5b27de_prof);

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
        return array (  520 => 313,  514 => 312,  507 => 300,  501 => 299,  494 => 78,  488 => 77,  481 => 8,  475 => 7,  452 => 315,  450 => 312,  437 => 301,  435 => 299,  413 => 280,  404 => 274,  370 => 243,  319 => 195,  310 => 189,  235 => 117,  195 => 79,  193 => 77,  183 => 70,  177 => 67,  172 => 65,  168 => 64,  163 => 62,  158 => 60,  154 => 59,  148 => 56,  144 => 55,  140 => 54,  136 => 53,  132 => 52,  128 => 51,  123 => 49,  119 => 48,  114 => 46,  109 => 44,  104 => 42,  95 => 36,  90 => 34,  84 => 31,  79 => 29,  74 => 27,  69 => 25,  64 => 23,  60 => 22,  54 => 19,  50 => 18,  41 => 12,  36 => 9,  34 => 7,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <title>AdminLTE 2 | Fixed Layout</title>*/
/*     {% block stylesheets %}*/
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
/*     <script type="text/javascript" src="{{ asset('plugins/boostrap-form-wizard/jquery.bootstrap.wizard.min.js') }}"></script>*/
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
/* */
/*     <script src="{{ asset('jqueryConfirm/dist/jquery-confirm.min.js') }}" type="text/javascript"></script>*/
/* */
/* */
/* */
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
/*         $('#m_rdv_dateDebut,#m_rdv_dateFin').datetimepicker({});*/
/*     });*/
/* </script>*/
/* */
/* </body>*/
/* </html>*/
/* */
