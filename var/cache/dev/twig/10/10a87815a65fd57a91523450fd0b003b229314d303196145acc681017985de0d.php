<?php

/* PIGBundle:Default:index.html.twig */
class __TwigTemplate_a9cfacc8b4264587a43c14e5e92544d0842d11fb5dd5e9d7e67402c36233d2b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "PIGBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e2e36525367bffa4866902009bdfc1d001e97d0252677f2cc5214733928b5486 = $this->env->getExtension("native_profiler");
        $__internal_e2e36525367bffa4866902009bdfc1d001e97d0252677f2cc5214733928b5486->enter($__internal_e2e36525367bffa4866902009bdfc1d001e97d0252677f2cc5214733928b5486_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PIGBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e2e36525367bffa4866902009bdfc1d001e97d0252677f2cc5214733928b5486->leave($__internal_e2e36525367bffa4866902009bdfc1d001e97d0252677f2cc5214733928b5486_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_38b015770633f933fe50b6c4df4dfd0e324cf3d435c76ca57072ebff54953fad = $this->env->getExtension("native_profiler");
        $__internal_38b015770633f933fe50b6c4df4dfd0e324cf3d435c76ca57072ebff54953fad->enter($__internal_38b015770633f933fe50b6c4df4dfd0e324cf3d435c76ca57072ebff54953fad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "PIG";
        
        $__internal_38b015770633f933fe50b6c4df4dfd0e324cf3d435c76ca57072ebff54953fad->leave($__internal_38b015770633f933fe50b6c4df4dfd0e324cf3d435c76ca57072ebff54953fad_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_3eae8f3e3c9bb28805b952d36b18ee37efd113aaee63ec438d87bc1eea7e2655 = $this->env->getExtension("native_profiler");
        $__internal_3eae8f3e3c9bb28805b952d36b18ee37efd113aaee63ec438d87bc1eea7e2655->enter($__internal_3eae8f3e3c9bb28805b952d36b18ee37efd113aaee63ec438d87bc1eea7e2655_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<!-- Portfolio Grid Section -->

";
        
        $__internal_3eae8f3e3c9bb28805b952d36b18ee37efd113aaee63ec438d87bc1eea7e2655->leave($__internal_3eae8f3e3c9bb28805b952d36b18ee37efd113aaee63ec438d87bc1eea7e2655_prof);

    }

    public function getTemplateName()
    {
        return "PIGBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 5,  47 => 4,  35 => 2,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* {% block title %}PIG{% endblock %}*/
/* */
/* {% block body %}*/
/* <!-- Portfolio Grid Section -->*/
/* */
/* {% endblock %}*/
/* */
