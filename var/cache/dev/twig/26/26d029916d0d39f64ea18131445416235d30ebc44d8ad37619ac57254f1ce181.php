<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_c1c4e823814a431c625cdb5871e373863203d0e1cd43a2fd82ddf09d06530400 extends Twig_Template
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
        $__internal_b7fda501b710fdd55201f1be5a5f1bfc6792175122e32703e3c958b12841a3b8 = $this->env->getExtension("native_profiler");
        $__internal_b7fda501b710fdd55201f1be5a5f1bfc6792175122e32703e3c958b12841a3b8->enter($__internal_b7fda501b710fdd55201f1be5a5f1bfc6792175122e32703e3c958b12841a3b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b7fda501b710fdd55201f1be5a5f1bfc6792175122e32703e3c958b12841a3b8->leave($__internal_b7fda501b710fdd55201f1be5a5f1bfc6792175122e32703e3c958b12841a3b8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_969971ce89b452973567c7241793be7ac3c0de98379c4ba6082d37d1a5352d7e = $this->env->getExtension("native_profiler");
        $__internal_969971ce89b452973567c7241793be7ac3c0de98379c4ba6082d37d1a5352d7e->enter($__internal_969971ce89b452973567c7241793be7ac3c0de98379c4ba6082d37d1a5352d7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_969971ce89b452973567c7241793be7ac3c0de98379c4ba6082d37d1a5352d7e->leave($__internal_969971ce89b452973567c7241793be7ac3c0de98379c4ba6082d37d1a5352d7e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_64f1cd72df7000c90a1dd2a2839566492284742597538e56a6020b473b51983b = $this->env->getExtension("native_profiler");
        $__internal_64f1cd72df7000c90a1dd2a2839566492284742597538e56a6020b473b51983b->enter($__internal_64f1cd72df7000c90a1dd2a2839566492284742597538e56a6020b473b51983b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_64f1cd72df7000c90a1dd2a2839566492284742597538e56a6020b473b51983b->leave($__internal_64f1cd72df7000c90a1dd2a2839566492284742597538e56a6020b473b51983b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_0eff0054baa658fbbd200b8a197ed58e6d4c723d76a99a4fcf4b8a514455cfdb = $this->env->getExtension("native_profiler");
        $__internal_0eff0054baa658fbbd200b8a197ed58e6d4c723d76a99a4fcf4b8a514455cfdb->enter($__internal_0eff0054baa658fbbd200b8a197ed58e6d4c723d76a99a4fcf4b8a514455cfdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_0eff0054baa658fbbd200b8a197ed58e6d4c723d76a99a4fcf4b8a514455cfdb->leave($__internal_0eff0054baa658fbbd200b8a197ed58e6d4c723d76a99a4fcf4b8a514455cfdb_prof);

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
