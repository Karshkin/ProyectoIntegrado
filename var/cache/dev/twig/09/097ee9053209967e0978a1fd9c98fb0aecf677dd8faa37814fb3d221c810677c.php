<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_8446e1e44fd2081f8d90f97b100664a16a71fd97cd4887410be399b148b86e8c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_16dc0e514ca403a6cf8f3016dd653a4f2aad0b0d7215b9aca1b5ffcb7f549f55 = $this->env->getExtension("native_profiler");
        $__internal_16dc0e514ca403a6cf8f3016dd653a4f2aad0b0d7215b9aca1b5ffcb7f549f55->enter($__internal_16dc0e514ca403a6cf8f3016dd653a4f2aad0b0d7215b9aca1b5ffcb7f549f55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_16dc0e514ca403a6cf8f3016dd653a4f2aad0b0d7215b9aca1b5ffcb7f549f55->leave($__internal_16dc0e514ca403a6cf8f3016dd653a4f2aad0b0d7215b9aca1b5ffcb7f549f55_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <div id="header">*/
/*     <div class="container">*/
/*         <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>*/
/* */
/*         <div class="search">*/
/*             <form method="get" action="https://symfony.com/search" target="_blank">*/
/*                 <div class="form-row">*/
/*                     <input name="q" id="search-id" type="search" placeholder="search on symfony.com">*/
/*                     <button type="submit" class="btn">Search</button>*/
/*                 </div>*/
/*            </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
