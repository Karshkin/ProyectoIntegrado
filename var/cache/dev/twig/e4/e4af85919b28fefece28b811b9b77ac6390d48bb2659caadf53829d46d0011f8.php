<?php

/* ::base.html.twig */
class __TwigTemplate_fa5002065e0007a202b6f2282bb5206694dd378c02a85ee1b16219d3193cfbeb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f3b72e3be97135fce80ae8eb71de427de93c091cf8cf2f0b70161e7190cb46e7 = $this->env->getExtension("native_profiler");
        $__internal_f3b72e3be97135fce80ae8eb71de427de93c091cf8cf2f0b70161e7190cb46e7->enter($__internal_f3b72e3be97135fce80ae8eb71de427de93c091cf8cf2f0b70161e7190cb46e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        // line 14
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link href=\"https://fonts.googleapis.com/css?family=Montserrat:400,700\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic\" rel=\"stylesheet\" type=\"text/css\">

    </head>
    <body id=\"page-top\" class=\"index\">

    <!-- Navigation -->
    <nav id=\"mainNav\" class=\"navbar navbar-default navbar-fixed-top navbar-custom\">
        <div class=\"container\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header page-scroll\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                    <span class=\"sr-only\">Toggle navigation</span> Menu <i class=\"fa fa-bars\"></i>
                </button>
                <a class=\"navbar-brand\" href=\"#page-top\">Start Bootstrap</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav navbar-right\">
                    <li class=\"hidden\">
                        <a href=\"#page-top\"></a>
                    </li>
                    <li class=\"page-scroll\">
                        <a href=\"#portfolio\">Portfolio</a>
                    </li>
                    <li class=\"page-scroll\">
                        <a href=\"#about\">About</a>
                    </li>
                    <li class=\"page-scroll\">
                        <a href=\"#contact\">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <img class=\"img-responsive\" src=\"img/profile.png\" alt=\"\">
                    <div class=\"intro-text\">
                        <span class=\"name\">Start Bootstrap</span>
                        <hr class=\"star-light\">
                        <span class=\"skills\">Web Developer - Graphic Artist - User Experience Designer</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    





        ";
        // line 75
        $this->displayBlock('body', $context, $blocks);
        // line 76
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 87
        echo "    </body>
</html>
";
        
        $__internal_f3b72e3be97135fce80ae8eb71de427de93c091cf8cf2f0b70161e7190cb46e7->leave($__internal_f3b72e3be97135fce80ae8eb71de427de93c091cf8cf2f0b70161e7190cb46e7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a8e748158c158190096d88b18174d721d6416e100711c824da1a040da02b5d83 = $this->env->getExtension("native_profiler");
        $__internal_a8e748158c158190096d88b18174d721d6416e100711c824da1a040da02b5d83->enter($__internal_a8e748158c158190096d88b18174d721d6416e100711c824da1a040da02b5d83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_a8e748158c158190096d88b18174d721d6416e100711c824da1a040da02b5d83->leave($__internal_a8e748158c158190096d88b18174d721d6416e100711c824da1a040da02b5d83_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7e150af4c657c3ef4610a70e8039bf0bc2402cab7922b9bc85fddaffe55b1e35 = $this->env->getExtension("native_profiler");
        $__internal_7e150af4c657c3ef4610a70e8039bf0bc2402cab7922b9bc85fddaffe55b1e35->enter($__internal_7e150af4c657c3ef4610a70e8039bf0bc2402cab7922b9bc85fddaffe55b1e35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/freelancer.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>


        ";
        
        $__internal_7e150af4c657c3ef4610a70e8039bf0bc2402cab7922b9bc85fddaffe55b1e35->leave($__internal_7e150af4c657c3ef4610a70e8039bf0bc2402cab7922b9bc85fddaffe55b1e35_prof);

    }

    // line 75
    public function block_body($context, array $blocks = array())
    {
        $__internal_6efe4a04e363bc92446097061c836d260833767a5489598767768d5c85425dce = $this->env->getExtension("native_profiler");
        $__internal_6efe4a04e363bc92446097061c836d260833767a5489598767768d5c85425dce->enter($__internal_6efe4a04e363bc92446097061c836d260833767a5489598767768d5c85425dce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6efe4a04e363bc92446097061c836d260833767a5489598767768d5c85425dce->leave($__internal_6efe4a04e363bc92446097061c836d260833767a5489598767768d5c85425dce_prof);

    }

    // line 76
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_de00c287349ac6bf92f1c83b5e0475a3ddfa5a21832f21b66045d969573ab3a2 = $this->env->getExtension("native_profiler");
        $__internal_de00c287349ac6bf92f1c83b5e0475a3ddfa5a21832f21b66045d969573ab3a2->enter($__internal_de00c287349ac6bf92f1c83b5e0475a3ddfa5a21832f21b66045d969573ab3a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 77
        echo "        <!-- jQuery -->
            <script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"/></script>
            <script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"/></script>
            <script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jqBootstrapValidation.js"), "html", null, true);
        echo "\"/></script>
            <script src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/contact_me.js"), "html", null, true);
        echo "\"/></script>
            <script src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/freelancer.min.js"), "html", null, true);
        echo "\"/></script>

              <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js\"></script>

        ";
        
        $__internal_de00c287349ac6bf92f1c83b5e0475a3ddfa5a21832f21b66045d969573ab3a2->leave($__internal_de00c287349ac6bf92f1c83b5e0475a3ddfa5a21832f21b66045d969573ab3a2_prof);

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
        return array (  195 => 82,  191 => 81,  187 => 80,  183 => 79,  179 => 78,  176 => 77,  170 => 76,  159 => 75,  148 => 10,  144 => 9,  140 => 8,  135 => 7,  129 => 6,  117 => 5,  108 => 87,  105 => 76,  103 => 75,  38 => 14,  36 => 6,  32 => 5,  26 => 1,);
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
/*         <link href="{{ asset('css/freelancer.min.css') }}" rel="stylesheet" />*/
/*         <link href="{{ asset('vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css"/>*/
/* */
/* */
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*         <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">*/
/*         <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">*/
/* */
/*     </head>*/
/*     <body id="page-top" class="index">*/
/* */
/*     <!-- Navigation -->*/
/*     <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">*/
/*         <div class="container">*/
/*             <!-- Brand and toggle get grouped for better mobile display -->*/
/*             <div class="navbar-header page-scroll">*/
/*                 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">*/
/*                     <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>*/
/*                 </button>*/
/*                 <a class="navbar-brand" href="#page-top">Start Bootstrap</a>*/
/*             </div>*/
/* */
/*             <!-- Collect the nav links, forms, and other content for toggling -->*/
/*             <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/*                 <ul class="nav navbar-nav navbar-right">*/
/*                     <li class="hidden">*/
/*                         <a href="#page-top"></a>*/
/*                     </li>*/
/*                     <li class="page-scroll">*/
/*                         <a href="#portfolio">Portfolio</a>*/
/*                     </li>*/
/*                     <li class="page-scroll">*/
/*                         <a href="#about">About</a>*/
/*                     </li>*/
/*                     <li class="page-scroll">*/
/*                         <a href="#contact">Contact</a>*/
/*                     </li>*/
/*                 </ul>*/
/*             </div>*/
/*             <!-- /.navbar-collapse -->*/
/*         </div>*/
/*         <!-- /.container-fluid -->*/
/*     </nav>*/
/* */
/*     <!-- Header -->*/
/*     <header>*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-lg-12">*/
/*                     <img class="img-responsive" src="img/profile.png" alt="">*/
/*                     <div class="intro-text">*/
/*                         <span class="name">Start Bootstrap</span>*/
/*                         <hr class="star-light">*/
/*                         <span class="skills">Web Developer - Graphic Artist - User Experience Designer</span>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </header>*/
/*     */
/* */
/* */
/* */
/* */
/* */
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}*/
/*         <!-- jQuery -->*/
/*             <script src="{{ asset('vendor/jquery/jquery.min.js') }}"/></script>*/
/*             <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"/></script>*/
/*             <script src="{{ asset('js/jqBootstrapValidation.js') }}"/></script>*/
/*             <script src="{{ asset('js/contact_me.js') }}"/></script>*/
/*             <script src="{{ asset('js/freelancer.min.js') }}"/></script>*/
/* */
/*               <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>*/
/* */
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
