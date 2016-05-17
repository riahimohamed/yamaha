<?php

/* nav.html.twig */
class __TwigTemplate_8359d7917c0ca8023355750d3be2ff87 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<nav class=\"navbar navbar-fixed-top\">
    <div class=\"container-fluid\">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class=\"navheader\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("gestion_yamaha_homepage");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/logo.bmp"), "html", null, true);
        echo "\" width=\"60\" height=\"55\"></a>
            </div>

        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
            <ul class=\"nav navbar-nav frt-menu\">
                <li class=\"active-menu\"><a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("employer");
        echo "\">Employeur <span class=\"sr-only\">(current)</span></a></li>
                <li><a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("produit");
        echo "\">Produit</a></li>
                <li><a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("stock");
        echo "\">Stock</a></li>
                <li><a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("commande");
        echo "\">Commande</a></li>
            </ul>

            <ul class=\"nav navbar-nav cnx navbar-right\">
                <li><a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("gestion_yamaha_homepage");
        echo "\">Déconnexion</a></li>
            </ul>

            <ul class=\"nav navbar-nav cnx navbar-right\">
                <li><a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("register");
        echo "\">Inscription</a></li>
            </ul>

        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>";
    }

    public function getTemplateName()
    {
        return "nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 31,  64 => 27,  57 => 23,  53 => 22,  49 => 21,  45 => 20,  32 => 12,  19 => 1,);
    }
}
