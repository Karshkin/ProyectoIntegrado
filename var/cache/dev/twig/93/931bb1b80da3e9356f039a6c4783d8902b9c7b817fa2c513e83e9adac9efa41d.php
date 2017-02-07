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
        $__internal_003a37ac63022f07dad1809e7b0042fb58039c9feb4f6bf56bda2544f7e8c247 = $this->env->getExtension("native_profiler");
        $__internal_003a37ac63022f07dad1809e7b0042fb58039c9feb4f6bf56bda2544f7e8c247->enter($__internal_003a37ac63022f07dad1809e7b0042fb58039c9feb4f6bf56bda2544f7e8c247_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_003a37ac63022f07dad1809e7b0042fb58039c9feb4f6bf56bda2544f7e8c247->leave($__internal_003a37ac63022f07dad1809e7b0042fb58039c9feb4f6bf56bda2544f7e8c247_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c661dff4c44b71d783f0130d5c33d9d93899f8e75220902b53eaf119ceb818db = $this->env->getExtension("native_profiler");
        $__internal_c661dff4c44b71d783f0130d5c33d9d93899f8e75220902b53eaf119ceb818db->enter($__internal_c661dff4c44b71d783f0130d5c33d9d93899f8e75220902b53eaf119ceb818db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c661dff4c44b71d783f0130d5c33d9d93899f8e75220902b53eaf119ceb818db->leave($__internal_c661dff4c44b71d783f0130d5c33d9d93899f8e75220902b53eaf119ceb818db_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c28e91ea49e30b14d55fa080366e65cbcd7f646462501ad7127c57c72f9dcebd = $this->env->getExtension("native_profiler");
        $__internal_c28e91ea49e30b14d55fa080366e65cbcd7f646462501ad7127c57c72f9dcebd->enter($__internal_c28e91ea49e30b14d55fa080366e65cbcd7f646462501ad7127c57c72f9dcebd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c28e91ea49e30b14d55fa080366e65cbcd7f646462501ad7127c57c72f9dcebd->leave($__internal_c28e91ea49e30b14d55fa080366e65cbcd7f646462501ad7127c57c72f9dcebd_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7d80cebfbbd9b9c811178ef0df6c29c251781b7804cdd3d25c3f34e87e246710 = $this->env->getExtension("native_profiler");
        $__internal_7d80cebfbbd9b9c811178ef0df6c29c251781b7804cdd3d25c3f34e87e246710->enter($__internal_7d80cebfbbd9b9c811178ef0df6c29c251781b7804cdd3d25c3f34e87e246710_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7d80cebfbbd9b9c811178ef0df6c29c251781b7804cdd3d25c3f34e87e246710->leave($__internal_7d80cebfbbd9b9c811178ef0df6c29c251781b7804cdd3d25c3f34e87e246710_prof);

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
