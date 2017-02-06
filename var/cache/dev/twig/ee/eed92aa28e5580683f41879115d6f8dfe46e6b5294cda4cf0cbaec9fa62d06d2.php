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
        $__internal_ca90fc12b8d3d4c91c7013babe27ddc38fb9b6dca9c89195b82a7a071ca206f5 = $this->env->getExtension("native_profiler");
        $__internal_ca90fc12b8d3d4c91c7013babe27ddc38fb9b6dca9c89195b82a7a071ca206f5->enter($__internal_ca90fc12b8d3d4c91c7013babe27ddc38fb9b6dca9c89195b82a7a071ca206f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PIGBundle:Clientes:nuevoCliente.html.twig"));

        // line 1
        $this->displayBlock('contenido', $context, $blocks);
        
        $__internal_ca90fc12b8d3d4c91c7013babe27ddc38fb9b6dca9c89195b82a7a071ca206f5->leave($__internal_ca90fc12b8d3d4c91c7013babe27ddc38fb9b6dca9c89195b82a7a071ca206f5_prof);

    }

    public function block_contenido($context, array $blocks = array())
    {
        $__internal_cc936a74ec5d28dd8212dcd161a8ffa2135c20ee9ceccabe0cdc2eb96208379f = $this->env->getExtension("native_profiler");
        $__internal_cc936a74ec5d28dd8212dcd161a8ffa2135c20ee9ceccabe0cdc2eb96208379f->enter($__internal_cc936a74ec5d28dd8212dcd161a8ffa2135c20ee9ceccabe0cdc2eb96208379f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 2
        echo "
<h1>Nuevo cliente</h1>

\t\t<div id=\"contenedorForm\">
\t\t\t";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formClientes"]) ? $context["formClientes"] : $this->getContext($context, "formClientes")), 'form');
        echo "
\t\t</div>
    
";
        
        $__internal_cc936a74ec5d28dd8212dcd161a8ffa2135c20ee9ceccabe0cdc2eb96208379f->leave($__internal_cc936a74ec5d28dd8212dcd161a8ffa2135c20ee9ceccabe0cdc2eb96208379f_prof);

    }

    public function getTemplateName()
    {
        return "PIGBundle:Clientes:nuevoCliente.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  41 => 6,  35 => 2,  23 => 1,);
    }
}
/* {% block contenido %}*/
/* */
/* <h1>Nuevo cliente</h1>*/
/* */
/* 		<div id="contenedorForm">*/
/* 			{{form(formClientes)}}*/
/* 		</div>*/
/*     */
/* {% endblock %}*/
/* */
