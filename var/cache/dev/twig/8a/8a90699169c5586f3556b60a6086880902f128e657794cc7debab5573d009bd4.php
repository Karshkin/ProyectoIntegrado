<?php

/* base.html.twig */
class __TwigTemplate_635b4855df0e211bd9071182b592c7306c78a17cf9b6bd013f035f772ddcfa4a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'table' => array($this, 'block_table'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_27186256d69fc75056cd9a703c51cd48a474f278a87af92bf769007e49da848b = $this->env->getExtension("native_profiler");
        $__internal_27186256d69fc75056cd9a703c51cd48a474f278a87af92bf769007e49da848b->enter($__internal_27186256d69fc75056cd9a703c51cd48a474f278a87af92bf769007e49da848b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 13
        echo "        ";
        $this->displayBlock('table', $context, $blocks);
        // line 14
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 15
        echo "    </body>
</html>
";
        
        $__internal_27186256d69fc75056cd9a703c51cd48a474f278a87af92bf769007e49da848b->leave($__internal_27186256d69fc75056cd9a703c51cd48a474f278a87af92bf769007e49da848b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_df555d620602ee5880a23afcb6315f2eb878e5dc98901b723087bc66da836793 = $this->env->getExtension("native_profiler");
        $__internal_df555d620602ee5880a23afcb6315f2eb878e5dc98901b723087bc66da836793->enter($__internal_df555d620602ee5880a23afcb6315f2eb878e5dc98901b723087bc66da836793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_df555d620602ee5880a23afcb6315f2eb878e5dc98901b723087bc66da836793->leave($__internal_df555d620602ee5880a23afcb6315f2eb878e5dc98901b723087bc66da836793_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cb52d402d1fe8ccb006f99a83d1d6e3d22df34dc59bf16b554e68c122b7d7dc1 = $this->env->getExtension("native_profiler");
        $__internal_cb52d402d1fe8ccb006f99a83d1d6e3d22df34dc59bf16b554e68c122b7d7dc1->enter($__internal_cb52d402d1fe8ccb006f99a83d1d6e3d22df34dc59bf16b554e68c122b7d7dc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/estilos.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        ";
        
        $__internal_cb52d402d1fe8ccb006f99a83d1d6e3d22df34dc59bf16b554e68c122b7d7dc1->leave($__internal_cb52d402d1fe8ccb006f99a83d1d6e3d22df34dc59bf16b554e68c122b7d7dc1_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_2fbf173fbaf3a154704e470aeb4f672495cc4fae111a8a60a41ea0dae2efa4a0 = $this->env->getExtension("native_profiler");
        $__internal_2fbf173fbaf3a154704e470aeb4f672495cc4fae111a8a60a41ea0dae2efa4a0->enter($__internal_2fbf173fbaf3a154704e470aeb4f672495cc4fae111a8a60a41ea0dae2efa4a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2fbf173fbaf3a154704e470aeb4f672495cc4fae111a8a60a41ea0dae2efa4a0->leave($__internal_2fbf173fbaf3a154704e470aeb4f672495cc4fae111a8a60a41ea0dae2efa4a0_prof);

    }

    // line 13
    public function block_table($context, array $blocks = array())
    {
        $__internal_cf4edf191134296329226dae35261337f5cf6a3f031ec8256e0f99c3e8007229 = $this->env->getExtension("native_profiler");
        $__internal_cf4edf191134296329226dae35261337f5cf6a3f031ec8256e0f99c3e8007229->enter($__internal_cf4edf191134296329226dae35261337f5cf6a3f031ec8256e0f99c3e8007229_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table"));

        
        $__internal_cf4edf191134296329226dae35261337f5cf6a3f031ec8256e0f99c3e8007229->leave($__internal_cf4edf191134296329226dae35261337f5cf6a3f031ec8256e0f99c3e8007229_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cd48f33d57f94b4346815d1635b7d17fed0db74abafdb57e596713cf90962744 = $this->env->getExtension("native_profiler");
        $__internal_cd48f33d57f94b4346815d1635b7d17fed0db74abafdb57e596713cf90962744->enter($__internal_cd48f33d57f94b4346815d1635b7d17fed0db74abafdb57e596713cf90962744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_cd48f33d57f94b4346815d1635b7d17fed0db74abafdb57e596713cf90962744->leave($__internal_cd48f33d57f94b4346815d1635b7d17fed0db74abafdb57e596713cf90962744_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 14,  102 => 13,  91 => 12,  81 => 7,  75 => 6,  63 => 5,  54 => 15,  51 => 14,  48 => 13,  46 => 12,  39 => 9,  37 => 6,  33 => 5,  27 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*         <link href="{{ asset('css/estilos.css') }}" rel="stylesheet" />*/
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block table %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
