<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_5807e0763a27d7462c6d33bf1de95ed8ddc3e7f3309045cc4cf0bf3bc4b15bcd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2b09940c9c13a228bcb33e4797ced268dc1a5293e505a7ab1d714e11ff51080c = $this->env->getExtension("native_profiler");
        $__internal_2b09940c9c13a228bcb33e4797ced268dc1a5293e505a7ab1d714e11ff51080c->enter($__internal_2b09940c9c13a228bcb33e4797ced268dc1a5293e505a7ab1d714e11ff51080c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b09940c9c13a228bcb33e4797ced268dc1a5293e505a7ab1d714e11ff51080c->leave($__internal_2b09940c9c13a228bcb33e4797ced268dc1a5293e505a7ab1d714e11ff51080c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d9f11d2dfdbf36ba82fa2796d43c7d3c79eca7373061e74752c3d8a04a9320cc = $this->env->getExtension("native_profiler");
        $__internal_d9f11d2dfdbf36ba82fa2796d43c7d3c79eca7373061e74752c3d8a04a9320cc->enter($__internal_d9f11d2dfdbf36ba82fa2796d43c7d3c79eca7373061e74752c3d8a04a9320cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_d9f11d2dfdbf36ba82fa2796d43c7d3c79eca7373061e74752c3d8a04a9320cc->leave($__internal_d9f11d2dfdbf36ba82fa2796d43c7d3c79eca7373061e74752c3d8a04a9320cc_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_271a6906d95306316198a54158efe6c361597f2196bb512d27bad3509dede61a = $this->env->getExtension("native_profiler");
        $__internal_271a6906d95306316198a54158efe6c361597f2196bb512d27bad3509dede61a->enter($__internal_271a6906d95306316198a54158efe6c361597f2196bb512d27bad3509dede61a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_271a6906d95306316198a54158efe6c361597f2196bb512d27bad3509dede61a->leave($__internal_271a6906d95306316198a54158efe6c361597f2196bb512d27bad3509dede61a_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8183a49ba2108c9ef37f3d22c9143273e74cf664907c4638fb0bdf5fdb6e4347 = $this->env->getExtension("native_profiler");
        $__internal_8183a49ba2108c9ef37f3d22c9143273e74cf664907c4638fb0bdf5fdb6e4347->enter($__internal_8183a49ba2108c9ef37f3d22c9143273e74cf664907c4638fb0bdf5fdb6e4347_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_8183a49ba2108c9ef37f3d22c9143273e74cf664907c4638fb0bdf5fdb6e4347->leave($__internal_8183a49ba2108c9ef37f3d22c9143273e74cf664907c4638fb0bdf5fdb6e4347_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
