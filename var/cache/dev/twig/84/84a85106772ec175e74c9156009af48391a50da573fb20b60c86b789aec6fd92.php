<?php

/* ::base.html.twig */
class __TwigTemplate_ba1397d65372d5b343b2a92304b15996bc9b1346b59a31bd1f9ab8d981fc8309 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'menubar' => array($this, 'block_menubar'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9ae20d0d7534449331ed67375f843937db76595dae73ebd93037780fd304284d = $this->env->getExtension("native_profiler");
        $__internal_9ae20d0d7534449331ed67375f843937db76595dae73ebd93037780fd304284d->enter($__internal_9ae20d0d7534449331ed67375f843937db76595dae73ebd93037780fd304284d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link href=\"https://fonts.googleapis.com/css?family=Montserrat:400,700\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic\" rel=\"stylesheet\" type=\"text/css\">

    </head>
    <body>

        <div id=\"wrapper\">

            <!-- Navigation -->
            <nav class=\"navbar navbar-default navbar-static-top\" role=\"navigation\" style=\"margin-bottom: 0\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"index.html\">SB Admin v2.0</a>

                </div>
                <!-- /.navbar-header -->



                <ul class=\"nav navbar-top-links navbar-right\">
                    <li class=\"dropdown\">
                        <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                            <i class=\"fa fa-envelope fa-fw\"></i> <i class=\"fa fa-caret-down\"></i>
                        </a>
                        <ul class=\"dropdown-menu dropdown-messages\">
                            <li>
                                <a href=\"#\">
                                    <div>
                                        <strong>John Smith</strong>
                                        <span class=\"pull-right text-muted\">
                                            <em>Yesterday</em>
                                        </span>
                                    </div>
                                    <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                                </a>
                            </li>
                            <li class=\"divider\"></li>
                            <li>
                                <a href=\"#\">
                                    <div>
                                        <strong>John Smith</strong>
                                        <span class=\"pull-right text-muted\">
                                            <em>Yesterday</em>
                                        </span>
                                    </div>
                                    <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                                </a>
                            </li>
                            <li class=\"divider\"></li>
                            <li>
                                <a href=\"#\">
                                    <div>
                                        <strong>John Smith</strong>
                                        <span class=\"pull-right text-muted\">
                                            <em>Yesterday</em>
                                        </span>
                                    </div>
                                    <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                                </a>
                            </li>
                            <li class=\"divider\"></li>
                            <li>
                                <a class=\"text-center\" href=\"#\">
                                    <strong>Read All Messages</strong>
                                    <i class=\"fa fa-angle-right\"></i>
                                </a>
                            </li>
                        </ul>
                        <!-- /.dropdown-messages -->
                    </li>
                    <!-- /.dropdown -->
                    <li class=\"dropdown\">
                        <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                            <i class=\"fa fa-tasks fa-fw\"></i> <i class=\"fa fa-caret-down\"></i>
                        </a>
                        <ul class=\"dropdown-menu dropdown-tasks\">
                            <li>
                                <a href=\"#\">
                                    <div>
                                        <p>
                                            <strong>Task 1</strong>
                                            <span class=\"pull-right text-muted\">40% Complete</span>
                                        </p>
                                        <div class=\"progress progress-striped active\">
                                            <div class=\"progress-bar progress-bar-success\" role=\"progressbar\" aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 40%\">
                                                <span class=\"sr-only\">40% Complete (success)</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"divider\"></li>
                            <li>
                                <a href=\"#\">
                                    <div>
                                        <p>
                                            <strong>Task 2</strong>
                                            <span class=\"pull-right text-muted\">20% Complete</span>
                                        </p>
                                        <div class=\"progress progress-striped active\">
                                            <div class=\"progress-bar progress-bar-info\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 20%\">
                                                <span class=\"sr-only\">20% Complete</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"divider\"></li>
                            <li>
                                <a href=\"#\">
                                    <div>
                                        <p>
                                            <strong>Task 3</strong>
                                            <span class=\"pull-right text-muted\">60% Complete</span>
                                        </p>
                                        <div class=\"progress progress-striped active\">
                                            <div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 60%\">
                                                <span class=\"sr-only\">60% Complete (warning)</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"divider\"></li>
                            <li>
                                <a href=\"#\">
                                    <div>
                                        <p>
                                            <strong>Task 4</strong>
                                            <span class=\"pull-right text-muted\">80% Complete</span>
                                        </p>
                                        <div class=\"progress progress-striped active\">
                                            <div class=\"progress-bar progress-bar-danger\" role=\"progressbar\" aria-valuenow=\"80\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 80%\">
                                                <span class=\"sr-only\">80% Complete (danger)</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class=\"divider\"></li>
                            <li>
                                <a class=\"text-center\" href=\"#\">
                                    <strong>See All Tasks</strong>
                                    <i class=\"fa fa-angle-right\"></i>
                                </a>
                            </li>
                        </ul>
                        <!-- /.dropdown-tasks -->
                    </li>
                    <!-- /.dropdown -->
                    <li class=\"dropdown\">
                        <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                            <i class=\"fa fa-bell fa-fw\"></i> <i class=\"fa fa-caret-down\"></i>
                        </a>
                        <ul class=\"dropdown-menu dropdown-alerts\">
                            <li>
                                <a href=\"#\">
                                    <div>
                                        <i class=\"fa fa-comment fa-fw\"></i> New Comment
                                        <span class=\"pull-right text-muted small\">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class=\"divider\"></li>
                            <li>
                                <a href=\"#\">
                                    <div>
                                        <i class=\"fa fa-twitter fa-fw\"></i> 3 New Followers
                                        <span class=\"pull-right text-muted small\">12 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class=\"divider\"></li>
                            <li>
                                <a href=\"#\">
                                    <div>
                                        <i class=\"fa fa-envelope fa-fw\"></i> Message Sent
                                        <span class=\"pull-right text-muted small\">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class=\"divider\"></li>
                            <li>
                                <a href=\"#\">
                                    <div>
                                        <i class=\"fa fa-tasks fa-fw\"></i> New Task
                                        <span class=\"pull-right text-muted small\">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class=\"divider\"></li>
                            <li>
                                <a href=\"#\">
                                    <div>
                                        <i class=\"fa fa-upload fa-fw\"></i> Server Rebooted
                                        <span class=\"pull-right text-muted small\">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class=\"divider\"></li>
                            <li>
                                <a class=\"text-center\" href=\"#\">
                                    <strong>See All Alerts</strong>
                                    <i class=\"fa fa-angle-right\"></i>
                                </a>
                            </li>
                        </ul>
                        <!-- /.dropdown-alerts -->
                    </li>
                    <!-- /.dropdown -->
                    <li class=\"dropdown\">
                        <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                            <i class=\"fa fa-user fa-fw\"></i> <i class=\"fa fa-caret-down\"></i>
                        </a>
                        <ul class=\"dropdown-menu dropdown-user\">
                            <li><a href=\"#\"><i class=\"fa fa-user fa-fw\"></i> User Profile</a>
                            </li>
                            <li><a href=\"#\"><i class=\"fa fa-gear fa-fw\"></i> Settings</a>
                            </li>
                            <li class=\"divider\"></li>
                            <li><a href=\"login.html\"><i class=\"fa fa-sign-out fa-fw\"></i> Logout</a>
                            </li>
                        </ul>


                        <!-- /.dropdown-user -->
                    </li>

                    <!-- /.dropdown -->
                </ul>

                <ul class=\"nav nav-tabs nav-justified\">
                    <li><a href=\"clientes.html\">Clientes</a><span class=\"sr-only\">current</span></li>
                    <li><a href=\"servicios.html\">Servicios</a></li>
                    <li><a href=\"empleadas.html\" class=\"active\">Empleadas</a><span class=\"sr-only\">current</span></li>
                </ul>


                <!-- /.navbar-top-links -->



                <div class=\"navbar-default sidebar\" role=\"navigation\">
                    <div class=\"sidebar-nav navbar-collapse\">
                        <ul class=\"nav\" id=\"side-menu\">
                          ";
        // line 267
        $this->displayBlock('menubar', $context, $blocks);
        // line 268
        echo "                        </ul>
                    </div>
                    <!-- /.sidebar-collapse -->
                </div>
                <!-- /.navbar-static-side -->
            </nav>

            <div id=\"page-wrapper\">
                ";
        // line 276
        $this->displayBlock('body', $context, $blocks);
        // line 277
        echo "                <!-- /.row -->
            </div>
            <!-- /#page-wrapper -->

        </div>







        ";
        // line 289
        $this->displayBlock('javascripts', $context, $blocks);
        // line 302
        echo "    </body>
</html>
";
        
        $__internal_9ae20d0d7534449331ed67375f843937db76595dae73ebd93037780fd304284d->leave($__internal_9ae20d0d7534449331ed67375f843937db76595dae73ebd93037780fd304284d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9c400ecff1342122a013683744d7a88c1fcc905c62dc5f08c3aef36c4b38a14a = $this->env->getExtension("native_profiler");
        $__internal_9c400ecff1342122a013683744d7a88c1fcc905c62dc5f08c3aef36c4b38a14a->enter($__internal_9c400ecff1342122a013683744d7a88c1fcc905c62dc5f08c3aef36c4b38a14a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_9c400ecff1342122a013683744d7a88c1fcc905c62dc5f08c3aef36c4b38a14a->leave($__internal_9c400ecff1342122a013683744d7a88c1fcc905c62dc5f08c3aef36c4b38a14a_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fc9b5480dfb4c19efef6e2e32cb351c122bb80c054b8860eb68253cc803f1973 = $this->env->getExtension("native_profiler");
        $__internal_fc9b5480dfb4c19efef6e2e32cb351c122bb80c054b8860eb68253cc803f1973->enter($__internal_fc9b5480dfb4c19efef6e2e32cb351c122bb80c054b8860eb68253cc803f1973_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/estilos.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/metisMenu/metisMenu.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dist/css/sb-admin-2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/morrisjs/morris.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>


        ";
        
        $__internal_fc9b5480dfb4c19efef6e2e32cb351c122bb80c054b8860eb68253cc803f1973->leave($__internal_fc9b5480dfb4c19efef6e2e32cb351c122bb80c054b8860eb68253cc803f1973_prof);

    }

    // line 267
    public function block_menubar($context, array $blocks = array())
    {
        $__internal_dc03992c7f214e70cf65f884e53c20ab9fccd73f9ad9227a314bc4d88e939595 = $this->env->getExtension("native_profiler");
        $__internal_dc03992c7f214e70cf65f884e53c20ab9fccd73f9ad9227a314bc4d88e939595->enter($__internal_dc03992c7f214e70cf65f884e53c20ab9fccd73f9ad9227a314bc4d88e939595_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menubar"));

        
        $__internal_dc03992c7f214e70cf65f884e53c20ab9fccd73f9ad9227a314bc4d88e939595->leave($__internal_dc03992c7f214e70cf65f884e53c20ab9fccd73f9ad9227a314bc4d88e939595_prof);

    }

    // line 276
    public function block_body($context, array $blocks = array())
    {
        $__internal_e68cdc8997f7a046883526e8a1aa2f4a240b14d09a5ca0bf5c6e95704d8497fc = $this->env->getExtension("native_profiler");
        $__internal_e68cdc8997f7a046883526e8a1aa2f4a240b14d09a5ca0bf5c6e95704d8497fc->enter($__internal_e68cdc8997f7a046883526e8a1aa2f4a240b14d09a5ca0bf5c6e95704d8497fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e68cdc8997f7a046883526e8a1aa2f4a240b14d09a5ca0bf5c6e95704d8497fc->leave($__internal_e68cdc8997f7a046883526e8a1aa2f4a240b14d09a5ca0bf5c6e95704d8497fc_prof);

    }

    // line 289
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_88b391dbd25c3d2ea0d95c943eb8743dc023a3f2fa0c5f19c497db5c2d63c1bc = $this->env->getExtension("native_profiler");
        $__internal_88b391dbd25c3d2ea0d95c943eb8743dc023a3f2fa0c5f19c497db5c2d63c1bc->enter($__internal_88b391dbd25c3d2ea0d95c943eb8743dc023a3f2fa0c5f19c497db5c2d63c1bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 290
        echo "        <!-- jQuery -->
            <script src=\"";
        // line 291
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"/></script>
            <script src=\"";
        // line 292
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"/></script>
            <script src=\"";
        // line 293
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/metisMenu/metisMenu.min.js"), "html", null, true);
        echo "\"/></script>
            <script src=\"";
        // line 294
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/raphael/raphael.min.js"), "html", null, true);
        echo "\"/></script>
            <script src=\"";
        // line 295
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/morrisjs/morris.min.js"), "html", null, true);
        echo "\"/></script>
            <script src=\"";
        // line 296
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("data/morris-data.js"), "html", null, true);
        echo "\"/></script>
            <script src=\"";
        // line 297
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("dist/js/sb-admin-2.js"), "html", null, true);
        echo "\"/></script>

              <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js\"></script>

        ";
        
        $__internal_88b391dbd25c3d2ea0d95c943eb8743dc023a3f2fa0c5f19c497db5c2d63c1bc->leave($__internal_88b391dbd25c3d2ea0d95c943eb8743dc023a3f2fa0c5f19c497db5c2d63c1bc_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  438 => 297,  434 => 296,  430 => 295,  426 => 294,  422 => 293,  418 => 292,  414 => 291,  411 => 290,  405 => 289,  394 => 276,  383 => 267,  372 => 12,  368 => 11,  364 => 10,  360 => 9,  356 => 8,  351 => 7,  345 => 6,  333 => 5,  324 => 302,  322 => 289,  308 => 277,  306 => 276,  296 => 268,  294 => 267,  39 => 16,  37 => 6,  33 => 5,  27 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*         <link href="{{ asset('css/estilos.css') }}" rel="stylesheet" />*/
/*         <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />*/
/*         <link href="{{ asset('vendor/metisMenu/metisMenu.min.css') }}" rel="stylesheet" />*/
/*         <link href="{{ asset('dist/css/sb-admin-2.css') }}" rel="stylesheet" />*/
/*         <link href="{{ asset('vendor/morrisjs/morris.css') }}" rel="stylesheet" />*/
/*         <link href="{{ asset('vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css"/>*/
/* */
/* */
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*         <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">*/
/*         <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">*/
/* */
/*     </head>*/
/*     <body>*/
/* */
/*         <div id="wrapper">*/
/* */
/*             <!-- Navigation -->*/
/*             <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">*/
/*                 <div class="navbar-header">*/
/*                     <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">*/
/*                         <span class="sr-only">Toggle navigation</span>*/
/*                         <span class="icon-bar"></span>*/
/*                         <span class="icon-bar"></span>*/
/*                         <span class="icon-bar"></span>*/
/*                     </button>*/
/*                     <a class="navbar-brand" href="index.html">SB Admin v2.0</a>*/
/* */
/*                 </div>*/
/*                 <!-- /.navbar-header -->*/
/* */
/* */
/* */
/*                 <ul class="nav navbar-top-links navbar-right">*/
/*                     <li class="dropdown">*/
/*                         <a class="dropdown-toggle" data-toggle="dropdown" href="#">*/
/*                             <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>*/
/*                         </a>*/
/*                         <ul class="dropdown-menu dropdown-messages">*/
/*                             <li>*/
/*                                 <a href="#">*/
/*                                     <div>*/
/*                                         <strong>John Smith</strong>*/
/*                                         <span class="pull-right text-muted">*/
/*                                             <em>Yesterday</em>*/
/*                                         </span>*/
/*                                     </div>*/
/*                                     <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>*/
/*                                 </a>*/
/*                             </li>*/
/*                             <li class="divider"></li>*/
/*                             <li>*/
/*                                 <a href="#">*/
/*                                     <div>*/
/*                                         <strong>John Smith</strong>*/
/*                                         <span class="pull-right text-muted">*/
/*                                             <em>Yesterday</em>*/
/*                                         </span>*/
/*                                     </div>*/
/*                                     <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>*/
/*                                 </a>*/
/*                             </li>*/
/*                             <li class="divider"></li>*/
/*                             <li>*/
/*                                 <a href="#">*/
/*                                     <div>*/
/*                                         <strong>John Smith</strong>*/
/*                                         <span class="pull-right text-muted">*/
/*                                             <em>Yesterday</em>*/
/*                                         </span>*/
/*                                     </div>*/
/*                                     <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>*/
/*                                 </a>*/
/*                             </li>*/
/*                             <li class="divider"></li>*/
/*                             <li>*/
/*                                 <a class="text-center" href="#">*/
/*                                     <strong>Read All Messages</strong>*/
/*                                     <i class="fa fa-angle-right"></i>*/
/*                                 </a>*/
/*                             </li>*/
/*                         </ul>*/
/*                         <!-- /.dropdown-messages -->*/
/*                     </li>*/
/*                     <!-- /.dropdown -->*/
/*                     <li class="dropdown">*/
/*                         <a class="dropdown-toggle" data-toggle="dropdown" href="#">*/
/*                             <i class="fa fa-tasks fa-fw"></i> <i class="fa fa-caret-down"></i>*/
/*                         </a>*/
/*                         <ul class="dropdown-menu dropdown-tasks">*/
/*                             <li>*/
/*                                 <a href="#">*/
/*                                     <div>*/
/*                                         <p>*/
/*                                             <strong>Task 1</strong>*/
/*                                             <span class="pull-right text-muted">40% Complete</span>*/
/*                                         </p>*/
/*                                         <div class="progress progress-striped active">*/
/*                                             <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">*/
/*                                                 <span class="sr-only">40% Complete (success)</span>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </a>*/
/*                             </li>*/
/*                             <li class="divider"></li>*/
/*                             <li>*/
/*                                 <a href="#">*/
/*                                     <div>*/
/*                                         <p>*/
/*                                             <strong>Task 2</strong>*/
/*                                             <span class="pull-right text-muted">20% Complete</span>*/
/*                                         </p>*/
/*                                         <div class="progress progress-striped active">*/
/*                                             <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">*/
/*                                                 <span class="sr-only">20% Complete</span>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </a>*/
/*                             </li>*/
/*                             <li class="divider"></li>*/
/*                             <li>*/
/*                                 <a href="#">*/
/*                                     <div>*/
/*                                         <p>*/
/*                                             <strong>Task 3</strong>*/
/*                                             <span class="pull-right text-muted">60% Complete</span>*/
/*                                         </p>*/
/*                                         <div class="progress progress-striped active">*/
/*                                             <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">*/
/*                                                 <span class="sr-only">60% Complete (warning)</span>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </a>*/
/*                             </li>*/
/*                             <li class="divider"></li>*/
/*                             <li>*/
/*                                 <a href="#">*/
/*                                     <div>*/
/*                                         <p>*/
/*                                             <strong>Task 4</strong>*/
/*                                             <span class="pull-right text-muted">80% Complete</span>*/
/*                                         </p>*/
/*                                         <div class="progress progress-striped active">*/
/*                                             <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">*/
/*                                                 <span class="sr-only">80% Complete (danger)</span>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </a>*/
/*                             </li>*/
/*                             <li class="divider"></li>*/
/*                             <li>*/
/*                                 <a class="text-center" href="#">*/
/*                                     <strong>See All Tasks</strong>*/
/*                                     <i class="fa fa-angle-right"></i>*/
/*                                 </a>*/
/*                             </li>*/
/*                         </ul>*/
/*                         <!-- /.dropdown-tasks -->*/
/*                     </li>*/
/*                     <!-- /.dropdown -->*/
/*                     <li class="dropdown">*/
/*                         <a class="dropdown-toggle" data-toggle="dropdown" href="#">*/
/*                             <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>*/
/*                         </a>*/
/*                         <ul class="dropdown-menu dropdown-alerts">*/
/*                             <li>*/
/*                                 <a href="#">*/
/*                                     <div>*/
/*                                         <i class="fa fa-comment fa-fw"></i> New Comment*/
/*                                         <span class="pull-right text-muted small">4 minutes ago</span>*/
/*                                     </div>*/
/*                                 </a>*/
/*                             </li>*/
/*                             <li class="divider"></li>*/
/*                             <li>*/
/*                                 <a href="#">*/
/*                                     <div>*/
/*                                         <i class="fa fa-twitter fa-fw"></i> 3 New Followers*/
/*                                         <span class="pull-right text-muted small">12 minutes ago</span>*/
/*                                     </div>*/
/*                                 </a>*/
/*                             </li>*/
/*                             <li class="divider"></li>*/
/*                             <li>*/
/*                                 <a href="#">*/
/*                                     <div>*/
/*                                         <i class="fa fa-envelope fa-fw"></i> Message Sent*/
/*                                         <span class="pull-right text-muted small">4 minutes ago</span>*/
/*                                     </div>*/
/*                                 </a>*/
/*                             </li>*/
/*                             <li class="divider"></li>*/
/*                             <li>*/
/*                                 <a href="#">*/
/*                                     <div>*/
/*                                         <i class="fa fa-tasks fa-fw"></i> New Task*/
/*                                         <span class="pull-right text-muted small">4 minutes ago</span>*/
/*                                     </div>*/
/*                                 </a>*/
/*                             </li>*/
/*                             <li class="divider"></li>*/
/*                             <li>*/
/*                                 <a href="#">*/
/*                                     <div>*/
/*                                         <i class="fa fa-upload fa-fw"></i> Server Rebooted*/
/*                                         <span class="pull-right text-muted small">4 minutes ago</span>*/
/*                                     </div>*/
/*                                 </a>*/
/*                             </li>*/
/*                             <li class="divider"></li>*/
/*                             <li>*/
/*                                 <a class="text-center" href="#">*/
/*                                     <strong>See All Alerts</strong>*/
/*                                     <i class="fa fa-angle-right"></i>*/
/*                                 </a>*/
/*                             </li>*/
/*                         </ul>*/
/*                         <!-- /.dropdown-alerts -->*/
/*                     </li>*/
/*                     <!-- /.dropdown -->*/
/*                     <li class="dropdown">*/
/*                         <a class="dropdown-toggle" data-toggle="dropdown" href="#">*/
/*                             <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>*/
/*                         </a>*/
/*                         <ul class="dropdown-menu dropdown-user">*/
/*                             <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>*/
/*                             </li>*/
/*                             <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>*/
/*                             </li>*/
/*                             <li class="divider"></li>*/
/*                             <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>*/
/*                             </li>*/
/*                         </ul>*/
/* */
/* */
/*                         <!-- /.dropdown-user -->*/
/*                     </li>*/
/* */
/*                     <!-- /.dropdown -->*/
/*                 </ul>*/
/* */
/*                 <ul class="nav nav-tabs nav-justified">*/
/*                     <li><a href="clientes.html">Clientes</a><span class="sr-only">current</span></li>*/
/*                     <li><a href="servicios.html">Servicios</a></li>*/
/*                     <li><a href="empleadas.html" class="active">Empleadas</a><span class="sr-only">current</span></li>*/
/*                 </ul>*/
/* */
/* */
/*                 <!-- /.navbar-top-links -->*/
/* */
/* */
/* */
/*                 <div class="navbar-default sidebar" role="navigation">*/
/*                     <div class="sidebar-nav navbar-collapse">*/
/*                         <ul class="nav" id="side-menu">*/
/*                           {% block menubar %}{% endblock %}*/
/*                         </ul>*/
/*                     </div>*/
/*                     <!-- /.sidebar-collapse -->*/
/*                 </div>*/
/*                 <!-- /.navbar-static-side -->*/
/*             </nav>*/
/* */
/*             <div id="page-wrapper">*/
/*                 {% block body%}{% endblock %}*/
/*                 <!-- /.row -->*/
/*             </div>*/
/*             <!-- /#page-wrapper -->*/
/* */
/*         </div>*/
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/*         {% block javascripts %}*/
/*         <!-- jQuery -->*/
/*             <script src="{{ asset('vendor/jquery/jquery.min.js') }}"/></script>*/
/*             <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"/></script>*/
/*             <script src="{{ asset('vendor/metisMenu/metisMenu.min.js') }}"/></script>*/
/*             <script src="{{ asset('vendor/raphael/raphael.min.js') }}"/></script>*/
/*             <script src="{{ asset('vendor/morrisjs/morris.min.js') }}"/></script>*/
/*             <script src="{{ asset('data/morris-data.js') }}"/></script>*/
/*             <script src="{{ asset('dist/js/sb-admin-2.js') }}"/></script>*/
/* */
/*               <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>*/
/* */
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
