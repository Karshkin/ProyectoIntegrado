<?php

/* PIGBundle:Clientes:all.html.twig */
class __TwigTemplate_ca531e8aebc2fdadd633b988486482e567fc53f985639a00b2e2c114f9d4de5d extends Twig_Template
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
        $__internal_5a34eea3f226b86a03ac0eca89b0ed1e37b3c766dc7734674c8ebb7d0a264f25 = $this->env->getExtension("native_profiler");
        $__internal_5a34eea3f226b86a03ac0eca89b0ed1e37b3c766dc7734674c8ebb7d0a264f25->enter($__internal_5a34eea3f226b86a03ac0eca89b0ed1e37b3c766dc7734674c8ebb7d0a264f25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PIGBundle:Clientes:all.html.twig"));

        // line 1
        echo "<table>

  <tr>
    <td>CIF</td>
    <td>Domicilio Fiscal</td>
    <td>CP</td>
    <td>Municipio</td>
    <td>Provincia</td>
    <td>Nº Cuenta bancaria</td>
    <td>Persona de contacto</td>
    <td>Teléfono de contacto</td>
    <td>Teléfono móvil de contacto</td>
    <td>Razón social</td>
  </tr>
  
  ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clientes"]) ? $context["clientes"] : $this->getContext($context, "clientes")));
        foreach ($context['_seq'] as $context["_key"] => $context["cliente"]) {
            // line 17
            echo "    <tr>
      <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "cIF", array()), "html", null, true);
            echo "</td>
      <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "domicilioFiscal", array()), "html", null, true);
            echo "</td>
      <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "cP", array()), "html", null, true);
            echo "</td>
      <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "municipio", array()), "html", null, true);
            echo "</td>
      <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "provincia", array()), "html", null, true);
            echo "</td>
      <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "noCuentaBancaria", array()), "html", null, true);
            echo "</td>
      <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "personaContacto", array()), "html", null, true);
            echo "</td>
      <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "telefonoContacto", array()), "html", null, true);
            echo "</td>
      <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "telefonoMovilContacto", array()), "html", null, true);
            echo "</td>
      <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "razonSocial", array()), "html", null, true);
            echo "</td>
    </tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cliente'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "</table>
";
        
        $__internal_5a34eea3f226b86a03ac0eca89b0ed1e37b3c766dc7734674c8ebb7d0a264f25->leave($__internal_5a34eea3f226b86a03ac0eca89b0ed1e37b3c766dc7734674c8ebb7d0a264f25_prof);

    }

    public function getTemplateName()
    {
        return "PIGBundle:Clientes:all.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 30,  82 => 27,  78 => 26,  74 => 25,  70 => 24,  66 => 23,  62 => 22,  58 => 21,  54 => 20,  50 => 19,  46 => 18,  43 => 17,  39 => 16,  22 => 1,);
    }
}
/* <table>*/
/* */
/*   <tr>*/
/*     <td>CIF</td>*/
/*     <td>Domicilio Fiscal</td>*/
/*     <td>CP</td>*/
/*     <td>Municipio</td>*/
/*     <td>Provincia</td>*/
/*     <td>Nº Cuenta bancaria</td>*/
/*     <td>Persona de contacto</td>*/
/*     <td>Teléfono de contacto</td>*/
/*     <td>Teléfono móvil de contacto</td>*/
/*     <td>Razón social</td>*/
/*   </tr>*/
/*   */
/*   {% for cliente in clientes %}*/
/*     <tr>*/
/*       <td>{{ cliente.cIF }}</td>*/
/*       <td>{{ cliente.domicilioFiscal }}</td>*/
/*       <td>{{ cliente.cP }}</td>*/
/*       <td>{{ cliente.municipio }}</td>*/
/*       <td>{{ cliente.provincia }}</td>*/
/*       <td>{{ cliente.noCuentaBancaria }}</td>*/
/*       <td>{{ cliente.personaContacto }}</td>*/
/*       <td>{{ cliente.telefonoContacto }}</td>*/
/*       <td>{{ cliente.telefonoMovilContacto }}</td>*/
/*       <td>{{ cliente.razonSocial }}</td>*/
/*     </tr>*/
/*   {% endfor %}*/
/* </table>*/
/* */
