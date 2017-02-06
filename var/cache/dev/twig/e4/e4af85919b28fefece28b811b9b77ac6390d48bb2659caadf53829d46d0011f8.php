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
        $__internal_20d17aa48c20a36414cec59063c93a71e46a01f5d4e721a08d54876f5efa9398 = $this->env->getExtension("native_profiler");
        $__internal_20d17aa48c20a36414cec59063c93a71e46a01f5d4e721a08d54876f5efa9398->enter($__internal_20d17aa48c20a36414cec59063c93a71e46a01f5d4e721a08d54876f5efa9398_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        // line 9
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
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
        ";
        // line 45
        $this->displayBlock('body', $context, $blocks);
        // line 46
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 47
        echo "    </body>
</html>
";
        
        $__internal_20d17aa48c20a36414cec59063c93a71e46a01f5d4e721a08d54876f5efa9398->leave($__internal_20d17aa48c20a36414cec59063c93a71e46a01f5d4e721a08d54876f5efa9398_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_74a609478e1c3e7298214cd3e59b45f25bcb7838237306db8ce3f682ecfd8371 = $this->env->getExtension("native_profiler");
        $__internal_74a609478e1c3e7298214cd3e59b45f25bcb7838237306db8ce3f682ecfd8371->enter($__internal_74a609478e1c3e7298214cd3e59b45f25bcb7838237306db8ce3f682ecfd8371_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_74a609478e1c3e7298214cd3e59b45f25bcb7838237306db8ce3f682ecfd8371->leave($__internal_74a609478e1c3e7298214cd3e59b45f25bcb7838237306db8ce3f682ecfd8371_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1dce6d48d418fa41dda72bb973efe0c2660e110a16539d256a2492114a430501 = $this->env->getExtension("native_profiler");
        $__internal_1dce6d48d418fa41dda72bb973efe0c2660e110a16539d256a2492114a430501->enter($__internal_1dce6d48d418fa41dda72bb973efe0c2660e110a16539d256a2492114a430501_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/estilos.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        ";
        
        $__internal_1dce6d48d418fa41dda72bb973efe0c2660e110a16539d256a2492114a430501->leave($__internal_1dce6d48d418fa41dda72bb973efe0c2660e110a16539d256a2492114a430501_prof);

    }

    // line 45
    public function block_body($context, array $blocks = array())
    {
        $__internal_cd7ffda5eeaeb6549f894fb4d682a6db3360f9c242bac0410e12229516dafd27 = $this->env->getExtension("native_profiler");
        $__internal_cd7ffda5eeaeb6549f894fb4d682a6db3360f9c242bac0410e12229516dafd27->enter($__internal_cd7ffda5eeaeb6549f894fb4d682a6db3360f9c242bac0410e12229516dafd27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_cd7ffda5eeaeb6549f894fb4d682a6db3360f9c242bac0410e12229516dafd27->leave($__internal_cd7ffda5eeaeb6549f894fb4d682a6db3360f9c242bac0410e12229516dafd27_prof);

    }

    // line 46
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4589cd06afae1e5f365e6abce878242bf742eb0c10f35d463fc57c8fc1269248 = $this->env->getExtension("native_profiler");
        $__internal_4589cd06afae1e5f365e6abce878242bf742eb0c10f35d463fc57c8fc1269248->enter($__internal_4589cd06afae1e5f365e6abce878242bf742eb0c10f35d463fc57c8fc1269248_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_4589cd06afae1e5f365e6abce878242bf742eb0c10f35d463fc57c8fc1269248->leave($__internal_4589cd06afae1e5f365e6abce878242bf742eb0c10f35d463fc57c8fc1269248_prof);

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
        return array (  131 => 46,  120 => 45,  110 => 7,  104 => 6,  92 => 5,  83 => 47,  80 => 46,  78 => 45,  38 => 9,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*         <link href="{{ asset('css/estilos.css') }}" rel="stylesheet" />*/
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
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
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
