<?php

/* GestionYamahaBundle:Commande:show.html.twig */
class __TwigTemplate_90f13a221c192d7c4e02a08f73240946 extends Twig_Template
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

        <h1>Commande</h1>

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
                    <th>Modele</th>
                    <td>
                        ";
        // line 18
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "modele") == 1)) {
            // line 19
            echo "                            bobine cuivre
                        ";
        } elseif (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "modele") == 2)) {
            // line 21
            echo "                            bobine laiton
                        ";
        } elseif (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "modele") == 3)) {
            // line 23
            echo "                            etain
                        ";
        } elseif (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "modele") == 4)) {
            // line 25
            echo "                            feuille de tole laiton
                        ";
        } elseif (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "modele") == 5)) {
            // line 27
            echo "                            feuille de tole acier
                        ";
        } elseif (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "modele") == 6)) {
            // line 29
            echo "                            etain en baguette
                        ";
        }
        // line 31
        echo "                    </td>
                </tr>
                <tr>
                    <th>Date</th>
                    <td>";
        // line 35
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "date"), "Y-m-d"), "html", null, true);
        echo "</td>
                </tr>
            </tbody>
        </table>

        <ul class=\"nav navbar-nav record_actions\">
            <li>
                <a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("commande");
        echo "\">
                    Reteurn a la liste
                </a>
            </li>
            <li>
                <a href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("commande_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\">
                    Modifier
                </a>
            </li>
            <li>
                <form action=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("commande_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\" method=\"post\">
                    <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
                    ";
        // line 54
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
        return "GestionYamahaBundle:Commande:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 54,  107 => 52,  99 => 47,  91 => 42,  81 => 35,  75 => 31,  71 => 29,  67 => 27,  63 => 25,  59 => 23,  55 => 21,  51 => 19,  49 => 18,  41 => 13,  31 => 5,  28 => 3,);
    }
}
