<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_fed992288f616eb5bde9c4d6d742b3982c493da8c408af60a0978c028e0e5c42 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_397e7558c24944525e5aebf0cef7b4cf0b057aff23375060bf50729e72765754 = $this->env->getExtension("native_profiler");
        $__internal_397e7558c24944525e5aebf0cef7b4cf0b057aff23375060bf50729e72765754->enter($__internal_397e7558c24944525e5aebf0cef7b4cf0b057aff23375060bf50729e72765754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_397e7558c24944525e5aebf0cef7b4cf0b057aff23375060bf50729e72765754->leave($__internal_397e7558c24944525e5aebf0cef7b4cf0b057aff23375060bf50729e72765754_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_facba17a9d0aea537f21109c435ca8a38fb2aec33df165cd8cb5a7f9e9b3eec7 = $this->env->getExtension("native_profiler");
        $__internal_facba17a9d0aea537f21109c435ca8a38fb2aec33df165cd8cb5a7f9e9b3eec7->enter($__internal_facba17a9d0aea537f21109c435ca8a38fb2aec33df165cd8cb5a7f9e9b3eec7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_facba17a9d0aea537f21109c435ca8a38fb2aec33df165cd8cb5a7f9e9b3eec7->leave($__internal_facba17a9d0aea537f21109c435ca8a38fb2aec33df165cd8cb5a7f9e9b3eec7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c41788b210ef29ec4c2d2e7231a6456fdcfa14b2e283887a6a7056b2232af682 = $this->env->getExtension("native_profiler");
        $__internal_c41788b210ef29ec4c2d2e7231a6456fdcfa14b2e283887a6a7056b2232af682->enter($__internal_c41788b210ef29ec4c2d2e7231a6456fdcfa14b2e283887a6a7056b2232af682_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c41788b210ef29ec4c2d2e7231a6456fdcfa14b2e283887a6a7056b2232af682->leave($__internal_c41788b210ef29ec4c2d2e7231a6456fdcfa14b2e283887a6a7056b2232af682_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4bb861a0e8ffca50ce0929493f9d807341d7092f452876fca3bfb88204be7bb7 = $this->env->getExtension("native_profiler");
        $__internal_4bb861a0e8ffca50ce0929493f9d807341d7092f452876fca3bfb88204be7bb7->enter($__internal_4bb861a0e8ffca50ce0929493f9d807341d7092f452876fca3bfb88204be7bb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_4bb861a0e8ffca50ce0929493f9d807341d7092f452876fca3bfb88204be7bb7->leave($__internal_4bb861a0e8ffca50ce0929493f9d807341d7092f452876fca3bfb88204be7bb7_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
