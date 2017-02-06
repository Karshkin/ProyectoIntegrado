<?php

/* PIGBundle:Trabajadoras:nuevaTrabajadora.html.twig */
class __TwigTemplate_29ae72fe696cc8e6af5e11b8f4b9ba7fa3fe976ba9931e39fe2e95372981edd6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'contenido' => array($this, 'block_contenido'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a4527dd51558738288268b8432a109e74d2fd49ae80c6a142ae8d3a35366d6f9 = $this->env->getExtension("native_profiler");
        $__internal_a4527dd51558738288268b8432a109e74d2fd49ae80c6a142ae8d3a35366d6f9->enter($__internal_a4527dd51558738288268b8432a109e74d2fd49ae80c6a142ae8d3a35366d6f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PIGBundle:Trabajadoras:nuevaTrabajadora.html.twig"));

        // line 1
        echo "<a href=\"/\"><img src=\"http://3.bp.blogspot.com/-h0LmXnazAQI/Tee5QD2FFQI/AAAAAAAAAAk/D3NutduIps8/s760/logo.jpg\"></img></a>
<h2>Bienvenido a la zona de las trabajadoras</h2>

";
        // line 4
        $this->displayBlock('contenido', $context, $blocks);
        // line 13
        echo "
<br><a href=\"/trabajadoras\">Volver a trabajadoras</a>
";
        
        $__internal_a4527dd51558738288268b8432a109e74d2fd49ae80c6a142ae8d3a35366d6f9->leave($__internal_a4527dd51558738288268b8432a109e74d2fd49ae80c6a142ae8d3a35366d6f9_prof);

    }

    // line 4
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_092b7f2948d723273bb803231a178356ef0da9d10949b33fcd7d4b23c98c8832 = $this->env->getExtension("native_profiler");
        $__internal_092b7f2948d723273bb803231a178356ef0da9d10949b33fcd7d4b23c98c8832->enter($__internal_092b7f2948d723273bb803231a178356ef0da9d10949b33fcd7d4b23c98c8832_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 5
        echo "
<h1>Nueva trabajadora</h1>

\t\t<div id=\"contenedorForm\">
\t\t\t";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formTrabajadoras"]) ? $context["formTrabajadoras"] : $this->getContext($context, "formTrabajadoras")), 'form');
        echo "
\t\t</div>

";
        
        $__internal_092b7f2948d723273bb803231a178356ef0da9d10949b33fcd7d4b23c98c8832->leave($__internal_092b7f2948d723273bb803231a178356ef0da9d10949b33fcd7d4b23c98c8832_prof);

    }

    public function getTemplateName()
    {
        return "PIGBundle:Trabajadoras:nuevaTrabajadora.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  51 => 9,  45 => 5,  39 => 4,  30 => 13,  28 => 4,  23 => 1,);
    }
}
/* <a href="/"><img src="http://3.bp.blogspot.com/-h0LmXnazAQI/Tee5QD2FFQI/AAAAAAAAAAk/D3NutduIps8/s760/logo.jpg"></img></a>*/
/* <h2>Bienvenido a la zona de las trabajadoras</h2>*/
/* */
/* {% block contenido %}*/
/* */
/* <h1>Nueva trabajadora</h1>*/
/* */
/* 		<div id="contenedorForm">*/
/* 			{{form(formTrabajadoras)}}*/
/* 		</div>*/
/* */
/* {% endblock %}*/
/* */
/* <br><a href="/trabajadoras">Volver a trabajadoras</a>*/
/* */
