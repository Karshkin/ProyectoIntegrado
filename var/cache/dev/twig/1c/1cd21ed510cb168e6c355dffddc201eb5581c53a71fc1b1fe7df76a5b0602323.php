<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_9a57c693cb7620e45a839206437dc0e755d4932768c8553c01b617ecd3cba97c extends Twig_Template
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
        $__internal_da1d67d05ebd27baeb026ca69d478bb13293a7403cdbe56f34c29540dd6dc946 = $this->env->getExtension("native_profiler");
        $__internal_da1d67d05ebd27baeb026ca69d478bb13293a7403cdbe56f34c29540dd6dc946->enter($__internal_da1d67d05ebd27baeb026ca69d478bb13293a7403cdbe56f34c29540dd6dc946_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da1d67d05ebd27baeb026ca69d478bb13293a7403cdbe56f34c29540dd6dc946->leave($__internal_da1d67d05ebd27baeb026ca69d478bb13293a7403cdbe56f34c29540dd6dc946_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0fd6c513db1f5bcade9d68070f5635eba65c7517a543d3ab04c51970c6d97500 = $this->env->getExtension("native_profiler");
        $__internal_0fd6c513db1f5bcade9d68070f5635eba65c7517a543d3ab04c51970c6d97500->enter($__internal_0fd6c513db1f5bcade9d68070f5635eba65c7517a543d3ab04c51970c6d97500_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_0fd6c513db1f5bcade9d68070f5635eba65c7517a543d3ab04c51970c6d97500->leave($__internal_0fd6c513db1f5bcade9d68070f5635eba65c7517a543d3ab04c51970c6d97500_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b0b10b4a49709515ef21d6ae7bf87ca32eea3de6995aff88a6c56cfcf000101d = $this->env->getExtension("native_profiler");
        $__internal_b0b10b4a49709515ef21d6ae7bf87ca32eea3de6995aff88a6c56cfcf000101d->enter($__internal_b0b10b4a49709515ef21d6ae7bf87ca32eea3de6995aff88a6c56cfcf000101d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b0b10b4a49709515ef21d6ae7bf87ca32eea3de6995aff88a6c56cfcf000101d->leave($__internal_b0b10b4a49709515ef21d6ae7bf87ca32eea3de6995aff88a6c56cfcf000101d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_949592e62a99211716d5ed043c5e704d85946b9873fcb1d71a68b4034e20de52 = $this->env->getExtension("native_profiler");
        $__internal_949592e62a99211716d5ed043c5e704d85946b9873fcb1d71a68b4034e20de52->enter($__internal_949592e62a99211716d5ed043c5e704d85946b9873fcb1d71a68b4034e20de52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_949592e62a99211716d5ed043c5e704d85946b9873fcb1d71a68b4034e20de52->leave($__internal_949592e62a99211716d5ed043c5e704d85946b9873fcb1d71a68b4034e20de52_prof);

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
