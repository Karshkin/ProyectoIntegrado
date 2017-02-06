<?php

/* PIGBundle:Default:index.html.twig */
class __TwigTemplate_93767be4a3b743381a7cf4d35ba3a6170ecf3ddd7a5466d9cf756f97e1eb9803 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "PIGBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e6cfd146f83011b560376e222f900119db14246f9d3200379d1b573e05afaba6 = $this->env->getExtension("native_profiler");
        $__internal_e6cfd146f83011b560376e222f900119db14246f9d3200379d1b573e05afaba6->enter($__internal_e6cfd146f83011b560376e222f900119db14246f9d3200379d1b573e05afaba6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PIGBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e6cfd146f83011b560376e222f900119db14246f9d3200379d1b573e05afaba6->leave($__internal_e6cfd146f83011b560376e222f900119db14246f9d3200379d1b573e05afaba6_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_d561d3dafd89faf6eb97014675a6d7212229bb6aaad17751e6911c907a4ff482 = $this->env->getExtension("native_profiler");
        $__internal_d561d3dafd89faf6eb97014675a6d7212229bb6aaad17751e6911c907a4ff482->enter($__internal_d561d3dafd89faf6eb97014675a6d7212229bb6aaad17751e6911c907a4ff482_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "PIG";
        
        $__internal_d561d3dafd89faf6eb97014675a6d7212229bb6aaad17751e6911c907a4ff482->leave($__internal_d561d3dafd89faf6eb97014675a6d7212229bb6aaad17751e6911c907a4ff482_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f85cbc58b573110b9312701c75158a579a04b4141a2543b1b0ee49201befea4e = $this->env->getExtension("native_profiler");
        $__internal_f85cbc58b573110b9312701c75158a579a04b4141a2543b1b0ee49201befea4e->enter($__internal_f85cbc58b573110b9312701c75158a579a04b4141a2543b1b0ee49201befea4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
  ";
        
        $__internal_f85cbc58b573110b9312701c75158a579a04b4141a2543b1b0ee49201befea4e->leave($__internal_f85cbc58b573110b9312701c75158a579a04b4141a2543b1b0ee49201befea4e_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_fae9e175b17b06fa773a242d83952bc1289f453c0cf3f2dedbe75b982071014a = $this->env->getExtension("native_profiler");
        $__internal_fae9e175b17b06fa773a242d83952bc1289f453c0cf3f2dedbe75b982071014a->enter($__internal_fae9e175b17b06fa773a242d83952bc1289f453c0cf3f2dedbe75b982071014a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "
";
        
        $__internal_fae9e175b17b06fa773a242d83952bc1289f453c0cf3f2dedbe75b982071014a->leave($__internal_fae9e175b17b06fa773a242d83952bc1289f453c0cf3f2dedbe75b982071014a_prof);

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
        return array (  70 => 9,  64 => 8,  54 => 4,  48 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* {% block title %}PIG{% endblock %}*/
/*   {% block stylesheets %}*/
/*     <link rel="stylesheet" href="{{ asset('css/style.css') }}">*/
/*   {% endblock %}*/
/* */
/* */
/* {% block body %}*/
/* */
/* {% endblock %}*/
/* */
