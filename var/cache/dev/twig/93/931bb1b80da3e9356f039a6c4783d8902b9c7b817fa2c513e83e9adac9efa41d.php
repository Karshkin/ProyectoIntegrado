<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_a8a23cdf4912d629c57b86307de8e8fecaf3c067542367253973abe80e30e0d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_64b8e3e673f4d65ea871372130c4adc747d1c5ec278f77c41667fad06922d3ba = $this->env->getExtension("native_profiler");
        $__internal_64b8e3e673f4d65ea871372130c4adc747d1c5ec278f77c41667fad06922d3ba->enter($__internal_64b8e3e673f4d65ea871372130c4adc747d1c5ec278f77c41667fad06922d3ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_64b8e3e673f4d65ea871372130c4adc747d1c5ec278f77c41667fad06922d3ba->leave($__internal_64b8e3e673f4d65ea871372130c4adc747d1c5ec278f77c41667fad06922d3ba_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0ee546f64fd5c85f86b40618b77cf55ce999f02c85aad46fc4d9f788fd28b6e4 = $this->env->getExtension("native_profiler");
        $__internal_0ee546f64fd5c85f86b40618b77cf55ce999f02c85aad46fc4d9f788fd28b6e4->enter($__internal_0ee546f64fd5c85f86b40618b77cf55ce999f02c85aad46fc4d9f788fd28b6e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0ee546f64fd5c85f86b40618b77cf55ce999f02c85aad46fc4d9f788fd28b6e4->leave($__internal_0ee546f64fd5c85f86b40618b77cf55ce999f02c85aad46fc4d9f788fd28b6e4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c71ef0347a1243a94993ac2aaacbc7173340446cd971f75e079a39312ddd3581 = $this->env->getExtension("native_profiler");
        $__internal_c71ef0347a1243a94993ac2aaacbc7173340446cd971f75e079a39312ddd3581->enter($__internal_c71ef0347a1243a94993ac2aaacbc7173340446cd971f75e079a39312ddd3581_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c71ef0347a1243a94993ac2aaacbc7173340446cd971f75e079a39312ddd3581->leave($__internal_c71ef0347a1243a94993ac2aaacbc7173340446cd971f75e079a39312ddd3581_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_01d8d1eb3210ea1bc91a19f64fe80ab3cc2d614d52c55e638052ea2a221dd898 = $this->env->getExtension("native_profiler");
        $__internal_01d8d1eb3210ea1bc91a19f64fe80ab3cc2d614d52c55e638052ea2a221dd898->enter($__internal_01d8d1eb3210ea1bc91a19f64fe80ab3cc2d614d52c55e638052ea2a221dd898_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_01d8d1eb3210ea1bc91a19f64fe80ab3cc2d614d52c55e638052ea2a221dd898->leave($__internal_01d8d1eb3210ea1bc91a19f64fe80ab3cc2d614d52c55e638052ea2a221dd898_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
