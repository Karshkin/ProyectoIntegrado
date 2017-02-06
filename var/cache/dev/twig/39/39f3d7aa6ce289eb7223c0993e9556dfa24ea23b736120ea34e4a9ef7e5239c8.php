<?php

/* PIGBundle:Trabajadoras:all.html.twig */
class __TwigTemplate_c66c87df6a0d9ac6b71e7fc1fc0fc5884853f2777814012d2ea0e304b1251c92 extends Twig_Template
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
        $__internal_096842990ba87394f8327b067dee383696dc477fd329c95fa39678902905e3ce = $this->env->getExtension("native_profiler");
        $__internal_096842990ba87394f8327b067dee383696dc477fd329c95fa39678902905e3ce->enter($__internal_096842990ba87394f8327b067dee383696dc477fd329c95fa39678902905e3ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PIGBundle:Trabajadoras:all.html.twig"));

        // line 1
        echo "<a href=\"/\"><img src=\"http://3.bp.blogspot.com/-h0LmXnazAQI/Tee5QD2FFQI/AAAAAAAAAAk/D3NutduIps8/s760/logo.jpg\"></img></a>
<h2>Bienvenido a la zona de las trabajadoras</h2><br>

<table>

  <tr>
    <td>Nombre</td>
    <td>Apellidos</td>
    <td>Direccion</td>
    <td>Fecha de alta</td>
    <td>Puesto</td>
    <td>Nº Cuenta bancaria</td>
    <td>Nº Seguridad Social</td>
    <td>DNI</td>
    <td>Fecha de nacimiento</td>
    <td>Teléfono</td>
    <td>Estado</td>
  </tr>

  ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["trabajadoras"]) ? $context["trabajadoras"] : $this->getContext($context, "trabajadoras")));
        foreach ($context['_seq'] as $context["_key"] => $context["trabajadora"]) {
            // line 21
            echo "    <tr>
      <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["trabajadora"], "nombre", array()), "html", null, true);
            echo "</td>
      <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["trabajadora"], "apellidos", array()), "html", null, true);
            echo "</td>
      <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["trabajadora"], "direccion", array()), "html", null, true);
            echo "</td>
      <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["trabajadora"], "fechaAlta", array()), "date", array()), "html", null, true);
            echo "</td>
      <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["trabajadora"], "puesto", array()), "html", null, true);
            echo "</td>
      <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["trabajadora"], "noCuentaBanco", array()), "html", null, true);
            echo "</td>
      <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["trabajadora"], "noSeguridadSocial", array()), "html", null, true);
            echo "</td>
      <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["trabajadora"], "dNI", array()), "html", null, true);
            echo "</td>
      <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["trabajadora"], "fechaNac", array()), "date", array()), "html", null, true);
            echo "</td>
      <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["trabajadora"], "telefono", array()), "html", null, true);
            echo "</td>
      <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["trabajadora"], "estado", array()), "html", null, true);
            echo "</td>
    </tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trabajadora'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "</table>


<br><a href=\"/trabajadoras\">Volver a trabajadoras</a>
";
        
        $__internal_096842990ba87394f8327b067dee383696dc477fd329c95fa39678902905e3ce->leave($__internal_096842990ba87394f8327b067dee383696dc477fd329c95fa39678902905e3ce_prof);

    }

    public function getTemplateName()
    {
        return "PIGBundle:Trabajadoras:all.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 35,  90 => 32,  86 => 31,  82 => 30,  78 => 29,  74 => 28,  70 => 27,  66 => 26,  62 => 25,  58 => 24,  54 => 23,  50 => 22,  47 => 21,  43 => 20,  22 => 1,);
    }
}
/* <a href="/"><img src="http://3.bp.blogspot.com/-h0LmXnazAQI/Tee5QD2FFQI/AAAAAAAAAAk/D3NutduIps8/s760/logo.jpg"></img></a>*/
/* <h2>Bienvenido a la zona de las trabajadoras</h2><br>*/
/* */
/* <table>*/
/* */
/*   <tr>*/
/*     <td>Nombre</td>*/
/*     <td>Apellidos</td>*/
/*     <td>Direccion</td>*/
/*     <td>Fecha de alta</td>*/
/*     <td>Puesto</td>*/
/*     <td>Nº Cuenta bancaria</td>*/
/*     <td>Nº Seguridad Social</td>*/
/*     <td>DNI</td>*/
/*     <td>Fecha de nacimiento</td>*/
/*     <td>Teléfono</td>*/
/*     <td>Estado</td>*/
/*   </tr>*/
/* */
/*   {% for trabajadora in trabajadoras %}*/
/*     <tr>*/
/*       <td>{{ trabajadora.nombre }}</td>*/
/*       <td>{{ trabajadora.apellidos }}</td>*/
/*       <td>{{ trabajadora.direccion }}</td>*/
/*       <td>{{ trabajadora.fechaAlta.date }}</td>*/
/*       <td>{{ trabajadora.puesto }}</td>*/
/*       <td>{{ trabajadora.noCuentaBanco }}</td>*/
/*       <td>{{ trabajadora.noSeguridadSocial }}</td>*/
/*       <td>{{ trabajadora.dNI }}</td>*/
/*       <td>{{ trabajadora.fechaNac.date }}</td>*/
/*       <td>{{ trabajadora.telefono }}</td>*/
/*       <td>{{ trabajadora.estado }}</td>*/
/*     </tr>*/
/*   {% endfor %}*/
/* </table>*/
/* */
/* */
/* <br><a href="/trabajadoras">Volver a trabajadoras</a>*/
/* */
