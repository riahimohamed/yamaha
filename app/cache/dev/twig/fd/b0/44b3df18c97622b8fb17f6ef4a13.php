<?php

/* GestionYamahaBundle:Produit:recherche.html.twig */
class __TwigTemplate_fdb044b3df18c97622b8fb17f6ef4a13 extends Twig_Template
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
        echo "<form action=\"";
        echo $this->env->getExtension('routing')->getPath("recherche_produit");
        echo "\" method=\"post\" class=\"navbar-form navbar-left\" role=\"search\">
    <div class=\"form-group\">
        ";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "recherche"), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Recherche par matricule")));
        echo "
    </div>
    <button type=\"submit\" class=\"btn\"><span class=\"glyphicon glyphicon-search\"></span></button>
</form>";
    }

    public function getTemplateName()
    {
        return "GestionYamahaBundle:Produit:recherche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 3,  19 => 1,);
    }
}
