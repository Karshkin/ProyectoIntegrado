<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_57111de3277002fba5eefad40ef63390e3db89286e9ef970c900b2e13d45eb1e extends Twig_Template
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
        $__internal_e0b07f5882c3bcf83695ab2d5753d739e5bda18ff4dd5b80022c54fab9c2d213 = $this->env->getExtension("native_profiler");
        $__internal_e0b07f5882c3bcf83695ab2d5753d739e5bda18ff4dd5b80022c54fab9c2d213->enter($__internal_e0b07f5882c3bcf83695ab2d5753d739e5bda18ff4dd5b80022c54fab9c2d213_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e0b07f5882c3bcf83695ab2d5753d739e5bda18ff4dd5b80022c54fab9c2d213->leave($__internal_e0b07f5882c3bcf83695ab2d5753d739e5bda18ff4dd5b80022c54fab9c2d213_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_35b5068101216b6fcfc754564cb85e26485e5fe853dfe1f7e2563aef7f1ee0e9 = $this->env->getExtension("native_profiler");
        $__internal_35b5068101216b6fcfc754564cb85e26485e5fe853dfe1f7e2563aef7f1ee0e9->enter($__internal_35b5068101216b6fcfc754564cb85e26485e5fe853dfe1f7e2563aef7f1ee0e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_35b5068101216b6fcfc754564cb85e26485e5fe853dfe1f7e2563aef7f1ee0e9->leave($__internal_35b5068101216b6fcfc754564cb85e26485e5fe853dfe1f7e2563aef7f1ee0e9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2f536c88b9e1da8973c8b82f77a6d05d8495ccc4353f665e61e17d58b8b2db78 = $this->env->getExtension("native_profiler");
        $__internal_2f536c88b9e1da8973c8b82f77a6d05d8495ccc4353f665e61e17d58b8b2db78->enter($__internal_2f536c88b9e1da8973c8b82f77a6d05d8495ccc4353f665e61e17d58b8b2db78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2f536c88b9e1da8973c8b82f77a6d05d8495ccc4353f665e61e17d58b8b2db78->leave($__internal_2f536c88b9e1da8973c8b82f77a6d05d8495ccc4353f665e61e17d58b8b2db78_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_36ea3631c2b88dc676a98a1f1517a0555f7c50f32b8689c597a49c4a63992efa = $this->env->getExtension("native_profiler");
        $__internal_36ea3631c2b88dc676a98a1f1517a0555f7c50f32b8689c597a49c4a63992efa->enter($__internal_36ea3631c2b88dc676a98a1f1517a0555f7c50f32b8689c597a49c4a63992efa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_36ea3631c2b88dc676a98a1f1517a0555f7c50f32b8689c597a49c4a63992efa->leave($__internal_36ea3631c2b88dc676a98a1f1517a0555f7c50f32b8689c597a49c4a63992efa_prof);

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
