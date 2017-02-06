<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_1b77c5398c56f878b4c3c8c369f51ddeb0e1fd0232d109a264a6490af590069b extends Twig_Template
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
        $__internal_197c39c51495dd631d08bf85833e018b8fde9e848423a8f47a49b7ed07e0f114 = $this->env->getExtension("native_profiler");
        $__internal_197c39c51495dd631d08bf85833e018b8fde9e848423a8f47a49b7ed07e0f114->enter($__internal_197c39c51495dd631d08bf85833e018b8fde9e848423a8f47a49b7ed07e0f114_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_197c39c51495dd631d08bf85833e018b8fde9e848423a8f47a49b7ed07e0f114->leave($__internal_197c39c51495dd631d08bf85833e018b8fde9e848423a8f47a49b7ed07e0f114_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_fe1a2add802d137163aad7ea37a269c377e11a727d8ac5257086d052c74e912b = $this->env->getExtension("native_profiler");
        $__internal_fe1a2add802d137163aad7ea37a269c377e11a727d8ac5257086d052c74e912b->enter($__internal_fe1a2add802d137163aad7ea37a269c377e11a727d8ac5257086d052c74e912b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_fe1a2add802d137163aad7ea37a269c377e11a727d8ac5257086d052c74e912b->leave($__internal_fe1a2add802d137163aad7ea37a269c377e11a727d8ac5257086d052c74e912b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_968755b9cc61321df5b1357562679d4e418b38addba75e5f94c11ad0ab79a6c7 = $this->env->getExtension("native_profiler");
        $__internal_968755b9cc61321df5b1357562679d4e418b38addba75e5f94c11ad0ab79a6c7->enter($__internal_968755b9cc61321df5b1357562679d4e418b38addba75e5f94c11ad0ab79a6c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_968755b9cc61321df5b1357562679d4e418b38addba75e5f94c11ad0ab79a6c7->leave($__internal_968755b9cc61321df5b1357562679d4e418b38addba75e5f94c11ad0ab79a6c7_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ef68e662774e588fb641d9af46659bc1e6dd2841499223cf87084d3d7d951f5f = $this->env->getExtension("native_profiler");
        $__internal_ef68e662774e588fb641d9af46659bc1e6dd2841499223cf87084d3d7d951f5f->enter($__internal_ef68e662774e588fb641d9af46659bc1e6dd2841499223cf87084d3d7d951f5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ef68e662774e588fb641d9af46659bc1e6dd2841499223cf87084d3d7d951f5f->leave($__internal_ef68e662774e588fb641d9af46659bc1e6dd2841499223cf87084d3d7d951f5f_prof);

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
