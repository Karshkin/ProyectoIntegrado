<?php

/* PIGBundle:Clientes:nuevoCliente.html.twig */
class __TwigTemplate_09c2742be73d6aebfa2fdc49b7fd44322c35d8c145a8f0fd15b5520cf676ab11 extends Twig_Template
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
        $__internal_85de7dce855110bc42c122da5552e5865d57a295dae68502037e838541ae0600 = $this->env->getExtension("native_profiler");
        $__internal_85de7dce855110bc42c122da5552e5865d57a295dae68502037e838541ae0600->enter($__internal_85de7dce855110bc42c122da5552e5865d57a295dae68502037e838541ae0600_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PIGBundle:Clientes:nuevoCliente.html.twig"));

        // line 1
        echo "<a href=\"/\"><img src=\"http://3.bp.blogspot.com/-h0LmXnazAQI/Tee5QD2FFQI/AAAAAAAAAAk/D3NutduIps8/s760/logo.jpg\"></img></a><br><br><br>
";
        // line 2
        $this->displayBlock('contenido', $context, $blocks);
        // line 11
        echo "
<br><a href=\"/clientes\">Volver a clientes</a><br>
";
        
        $__internal_85de7dce855110bc42c122da5552e5865d57a295dae68502037e838541ae0600->leave($__internal_85de7dce855110bc42c122da5552e5865d57a295dae68502037e838541ae0600_prof);

    }

    // line 2
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_1d291d1f86bd4befbdb8b963dee9a666177c478bf1620b7ccc37810b086f7cf4 = $this->env->getExtension("native_profiler");
        $__internal_1d291d1f86bd4befbdb8b963dee9a666177c478bf1620b7ccc37810b086f7cf4->enter($__internal_1d291d1f86bd4befbdb8b963dee9a666177c478bf1620b7ccc37810b086f7cf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 3
        echo "
<h1>Nuevo cliente</h1>

\t\t<div id=\"contenedorForm\">
\t\t\t";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formClientes"]) ? $context["formClientes"] : $this->getContext($context, "formClientes")), 'form');
        echo "
\t\t</div>

";
        
        $__internal_1d291d1f86bd4befbdb8b963dee9a666177c478bf1620b7ccc37810b086f7cf4->leave($__internal_1d291d1f86bd4befbdb8b963dee9a666177c478bf1620b7ccc37810b086f7cf4_prof);

    }

    public function getTemplateName()
    {
        return "PIGBundle:Clientes:nuevoCliente.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  49 => 7,  43 => 3,  37 => 2,  28 => 11,  26 => 2,  23 => 1,);
    }
}
/* <a href="/"><img src="http://3.bp.blogspot.com/-h0LmXnazAQI/Tee5QD2FFQI/AAAAAAAAAAk/D3NutduIps8/s760/logo.jpg"></img></a><br><br><br>*/
/* {% block contenido %}*/
/* */
/* <h1>Nuevo cliente</h1>*/
/* */
/* 		<div id="contenedorForm">*/
/* 			{{form(formClientes)}}*/
/* 		</div>*/
/* */
/* {% endblock %}*/
/* */
/* <br><a href="/clientes">Volver a clientes</a><br>*/
/* */
