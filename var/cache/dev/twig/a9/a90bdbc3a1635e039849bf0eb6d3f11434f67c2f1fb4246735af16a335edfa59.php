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
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_950b217fddad45f762ab65e9de20b7f79957055e64f8aea9ff8ce884f1f16fa6 = $this->env->getExtension("native_profiler");
        $__internal_950b217fddad45f762ab65e9de20b7f79957055e64f8aea9ff8ce884f1f16fa6->enter($__internal_950b217fddad45f762ab65e9de20b7f79957055e64f8aea9ff8ce884f1f16fa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PIGBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_950b217fddad45f762ab65e9de20b7f79957055e64f8aea9ff8ce884f1f16fa6->leave($__internal_950b217fddad45f762ab65e9de20b7f79957055e64f8aea9ff8ce884f1f16fa6_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_a665211957bdc4aeedb7f877c0efc40572dd1f2f6f615889ba5c745351a47c47 = $this->env->getExtension("native_profiler");
        $__internal_a665211957bdc4aeedb7f877c0efc40572dd1f2f6f615889ba5c745351a47c47->enter($__internal_a665211957bdc4aeedb7f877c0efc40572dd1f2f6f615889ba5c745351a47c47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "PIG";
        
        $__internal_a665211957bdc4aeedb7f877c0efc40572dd1f2f6f615889ba5c745351a47c47->leave($__internal_a665211957bdc4aeedb7f877c0efc40572dd1f2f6f615889ba5c745351a47c47_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_9fcc270cc175da567a81bd9bd1250239926ffa28cad5c981c36bbad4b7b651cd = $this->env->getExtension("native_profiler");
        $__internal_9fcc270cc175da567a81bd9bd1250239926ffa28cad5c981c36bbad4b7b651cd->enter($__internal_9fcc270cc175da567a81bd9bd1250239926ffa28cad5c981c36bbad4b7b651cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<!-- Portfolio Grid Section -->
<section id=\"portfolio\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12 text-center\">
                <h2>Portfolio</h2>
                <hr class=\"star-primary\">
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-sm-4 portfolio-item\">
                <a href=\"#portfolioModal1\" class=\"portfolio-link\" data-toggle=\"modal\">
                    <div class=\"caption\">
                        <div class=\"caption-content\">
                            <i class=\"fa fa-search-plus fa-3x\"></i>
                        </div>
                    </div>
                    <img src=\"img/portfolio/cabin.png\" class=\"img-responsive\" alt=\"\">
                </a>
            </div>
            <div class=\"col-sm-4 portfolio-item\">
                <a href=\"#portfolioModal2\" class=\"portfolio-link\" data-toggle=\"modal\">
                    <div class=\"caption\">
                        <div class=\"caption-content\">
                            <i class=\"fa fa-search-plus fa-3x\"></i>
                        </div>
                    </div>
                    <img src=\"img/portfolio/cake.png\" class=\"img-responsive\" alt=\"\">
                </a>
            </div>
            <div class=\"col-sm-4 portfolio-item\">
                <a href=\"#portfolioModal3\" class=\"portfolio-link\" data-toggle=\"modal\">
                    <div class=\"caption\">
                        <div class=\"caption-content\">
                            <i class=\"fa fa-search-plus fa-3x\"></i>
                        </div>
                    </div>
                    <img src=\"img/portfolio/circus.png\" class=\"img-responsive\" alt=\"\">
                </a>
            </div>
            <div class=\"col-sm-4 portfolio-item\">
                <a href=\"#portfolioModal4\" class=\"portfolio-link\" data-toggle=\"modal\">
                    <div class=\"caption\">
                        <div class=\"caption-content\">
                            <i class=\"fa fa-search-plus fa-3x\"></i>
                        </div>
                    </div>
                    <img src=\"img/portfolio/game.png\" class=\"img-responsive\" alt=\"\">
                </a>
            </div>
            <div class=\"col-sm-4 portfolio-item\">
                <a href=\"#portfolioModal5\" class=\"portfolio-link\" data-toggle=\"modal\">
                    <div class=\"caption\">
                        <div class=\"caption-content\">
                            <i class=\"fa fa-search-plus fa-3x\"></i>
                        </div>
                    </div>
                    <img src=\"img/portfolio/safe.png\" class=\"img-responsive\" alt=\"\">
                </a>
            </div>
            <div class=\"col-sm-4 portfolio-item\">
                <a href=\"#portfolioModal6\" class=\"portfolio-link\" data-toggle=\"modal\">
                    <div class=\"caption\">
                        <div class=\"caption-content\">
                            <i class=\"fa fa-search-plus fa-3x\"></i>
                        </div>
                    </div>
                    <img src=\"img/portfolio/submarine.png\" class=\"img-responsive\" alt=\"\">
                </a>
            </div>
        </div>
    </div>
</section>
";
        
        $__internal_9fcc270cc175da567a81bd9bd1250239926ffa28cad5c981c36bbad4b7b651cd->leave($__internal_9fcc270cc175da567a81bd9bd1250239926ffa28cad5c981c36bbad4b7b651cd_prof);

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
/* <section id="portfolio">*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-lg-12 text-center">*/
/*                 <h2>Portfolio</h2>*/
/*                 <hr class="star-primary">*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-sm-4 portfolio-item">*/
/*                 <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">*/
/*                     <div class="caption">*/
/*                         <div class="caption-content">*/
/*                             <i class="fa fa-search-plus fa-3x"></i>*/
/*                         </div>*/
/*                     </div>*/
/*                     <img src="img/portfolio/cabin.png" class="img-responsive" alt="">*/
/*                 </a>*/
/*             </div>*/
/*             <div class="col-sm-4 portfolio-item">*/
/*                 <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">*/
/*                     <div class="caption">*/
/*                         <div class="caption-content">*/
/*                             <i class="fa fa-search-plus fa-3x"></i>*/
/*                         </div>*/
/*                     </div>*/
/*                     <img src="img/portfolio/cake.png" class="img-responsive" alt="">*/
/*                 </a>*/
/*             </div>*/
/*             <div class="col-sm-4 portfolio-item">*/
/*                 <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">*/
/*                     <div class="caption">*/
/*                         <div class="caption-content">*/
/*                             <i class="fa fa-search-plus fa-3x"></i>*/
/*                         </div>*/
/*                     </div>*/
/*                     <img src="img/portfolio/circus.png" class="img-responsive" alt="">*/
/*                 </a>*/
/*             </div>*/
/*             <div class="col-sm-4 portfolio-item">*/
/*                 <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">*/
/*                     <div class="caption">*/
/*                         <div class="caption-content">*/
/*                             <i class="fa fa-search-plus fa-3x"></i>*/
/*                         </div>*/
/*                     </div>*/
/*                     <img src="img/portfolio/game.png" class="img-responsive" alt="">*/
/*                 </a>*/
/*             </div>*/
/*             <div class="col-sm-4 portfolio-item">*/
/*                 <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">*/
/*                     <div class="caption">*/
/*                         <div class="caption-content">*/
/*                             <i class="fa fa-search-plus fa-3x"></i>*/
/*                         </div>*/
/*                     </div>*/
/*                     <img src="img/portfolio/safe.png" class="img-responsive" alt="">*/
/*                 </a>*/
/*             </div>*/
/*             <div class="col-sm-4 portfolio-item">*/
/*                 <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">*/
/*                     <div class="caption">*/
/*                         <div class="caption-content">*/
/*                             <i class="fa fa-search-plus fa-3x"></i>*/
/*                         </div>*/
/*                     </div>*/
/*                     <img src="img/portfolio/submarine.png" class="img-responsive" alt="">*/
/*                 </a>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </section>*/
/* {% endblock %}*/
/* */
