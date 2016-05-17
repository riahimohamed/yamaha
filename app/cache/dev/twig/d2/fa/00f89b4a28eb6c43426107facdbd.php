<?php

/* GestionYamahaBundle:Stock:show.html.twig */
class __TwigTemplate_d2fa00f89b4a28eb6c43426107facdbd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "<div class=\"col-sm-10 col-sm-offset-1 aff\">

    <h1>Stock</h1>

    <table class=\"table table-bordered\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Quantité</th>
                <td>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "quantity"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Modele</th>
                <td>
                    ";
        // line 22
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "modele") == 1)) {
            // line 23
            echo "                        bobine cuivre
                    ";
        } elseif (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "modele") == 2)) {
            // line 25
            echo "                        bobine laiton
                    ";
        } elseif (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "modele") == 3)) {
            // line 27
            echo "                        etain
                    ";
        } elseif (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "modele") == 4)) {
            // line 29
            echo "                        feuille de tole laiton
                    ";
        } elseif (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "modele") == 5)) {
            // line 31
            echo "                        feuille de tole acier
                    ";
        } elseif (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "modele") == 6)) {
            // line 33
            echo "                        etain en baguette
                    ";
        }
        // line 35
        echo "                </td>
            </tr>
            <tr>
                <th>Nombre de modeles</th>
                <td>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nbrModele"), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul class=\"nav navbar-nav record_actions\">
        <li>
            <a href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("stock");
        echo "\">
                Reteurn a la liste
            </a>
        </li>
        <li>
            <a href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("stock_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\">
                Modifier
            </a>
        </li>
        <li>
            <form action=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("stock_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\" method=\"post\">
                <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
                ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'widget');
        echo "
                <button type=\"submit\" class=\"btn btn-warning\">Supprimer</button>
            </form>
        </li>
    </ul>

    </div>
";
    }

    public function getTemplateName()
    {
        return "GestionYamahaBundle:Stock:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 58,  114 => 56,  106 => 51,  98 => 46,  88 => 39,  82 => 35,  78 => 33,  74 => 31,  70 => 29,  66 => 27,  62 => 25,  58 => 23,  56 => 22,  48 => 17,  41 => 13,  31 => 5,  28 => 3,);
    }
}
