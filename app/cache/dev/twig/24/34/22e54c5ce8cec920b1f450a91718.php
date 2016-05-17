<?php

/* GestionYamahaBundle:Produit:show.html.twig */
class __TwigTemplate_243422e54c5ce8cec920b1f450a91718 extends Twig_Template
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
        // line 4
        echo "
    <div class=\"col-sm-10 col-sm-offset-1 aff\">
        <h1>Produit</h1>

        <table class=\"table table-bordered\">
            <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Reference</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "reference"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Type de produit</th>
                <td>
                    ";
        // line 21
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "type") == 1)) {
            // line 22
            echo "                        Faisceaux radiateurs
                    ";
        } elseif (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "type") == 2)) {
            // line 24
            echo "                        radiateur complet
                    ";
        }
        // line 26
        echo "                </td>
            </tr>
            <tr>
                <th>Nomber de piéces</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nbPiece"), "html", null, true);
        echo "</td>
            </tr>
            </tbody>
        </table>

        <ul class=\"nav navbar-nav record_actions\">
            <li>
                <a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("produit");
        echo "\">
                    Reteurn a la liste
                </a>
            </li>
            <li>
                <a href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("produit_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\">
                    Modifier
                </a>
            </li>
            <li>
                <form action=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("produit_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\" method=\"post\">
                    <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
                    ";
        // line 49
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
        return "GestionYamahaBundle:Produit:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 49,  98 => 47,  90 => 42,  82 => 37,  72 => 30,  66 => 26,  62 => 24,  58 => 22,  56 => 21,  48 => 16,  41 => 12,  31 => 4,  28 => 3,);
    }
}
