<?php

/* GestionYamahaBundle:Produit:index.html.twig */
class __TwigTemplate_b3c10dcc3d24d3bf5569b9028bc33f30 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Produit";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "
    <section class=\"worker\">

        <div class=\"col-sm-2 menu-left\">
            <ul class=\"nav navbar-nav\">
                <li><a href=\"#\" data-toggle=\"modal\" data-target=\"#add\"><i class=\"glyphicon glyphicon-plus\"></i> Ajouter</a></li>
            </ul>
            <div class=\"border-right\"></div>
        </div>

        <div class=\"col-sm-10 content\">
            <h2 class=\"text-head\">Gestion Produit</h2>

            <div class=\"search-id pull-right\">
                ";
        // line 19
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("GestionYamahaBundle:Produit:recherche"), array());
        // line 20
        echo "            </div>

            <div class=\"gest-work\">
                <table class=\"table table-hover table-striped\">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Reference</th>
                        <th>Type de produit</th>
                        <th>Nomber de piéces</th>
                        <th>Prix</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 35
        if ((twig_length_filter($this->env, (isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities"))) != 0)) {
            // line 36
            echo "
                        ";
            // line 37
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 38
                echo "
                            <tr id=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
                echo "\">
                                <td>";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
                echo "</td>
                                <td>";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "reference"), "html", null, true);
                echo "</td>
                                <td>
                                    ";
                // line 43
                if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "type") == 1)) {
                    // line 44
                    echo "                                        Faisceaux radiateurs
                                    ";
                } elseif (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "type") == 2)) {
                    // line 46
                    echo "                                        radiateur complet
                                    ";
                }
                // line 48
                echo "                                </td>
                                <td>";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nbPiece"), "html", null, true);
                echo "</td>
                                <td>";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "prix"), "html", null, true);
                echo " dt</td>
                                <td><a href=\"";
                // line 51
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("produit_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
                echo "\"><i class=\"glyphicon glyphicon-eye-open\"></i></a></td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "                    ";
        } else {
            // line 55
            echo "                        <td colspan=\"100%\"><h4 class=\"text-info text-center\">Aucun Produit</h4></td>
                    ";
        }
        // line 57
        echo "                    </tbody>
                </table>
            </div>
        </div>

        <!-- Modal -->
        <div class=\"modal fade\" id=\"add\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
            <div class=\"modal-dialog\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                        <h4 class=\"modal-title\" id=\"myModalLabel\">Ajoutez Produit</h4>
                    </div>
                    <div class=\"modal-body\">

                        ";
        // line 72
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("GestionYamahaBundle:Produit:create"));
        echo "

                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class=\"modal fade\" id=\"edit\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
            <div class=\"modal-dialog\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                        <h4 class=\"modal-title\" id=\"myModalLabel2\">Modifier Employeur</h4>
                    </div>
                    <div class=\"modal-body\">

                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class=\"modal fade\" id=\"del\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
            <div class=\"modal-dialog\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                        <h4 class=\"alert alert-danger modal-title\" id=\"myModalLabel3\">Supprimer Employeur</h4>
                    </div>
                    <div class=\"modal-body\">

                        <form class=\"form-horizontal\" action=\"#\" method=\"post\" role=\"form\">

                            <div>
                                <h4 class=\"text-danger\">voulez vous supprimer l'employeur <strong>Nom : Amin ben Ali</strong></h4>
                            </div>

                            <div class=\"pull-right\">
                                <button type=\"submit\" class=\"btn btn-danger\">Supprimer</button>
                            </div>
                            <br>
                            <br>
                        </form>

                    </div>
                </div>
            </div>
        </div>

    </section>

";
    }

    public function getTemplateName()
    {
        return "GestionYamahaBundle:Produit:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 72,  135 => 57,  131 => 55,  128 => 54,  119 => 51,  115 => 50,  111 => 49,  108 => 48,  104 => 46,  100 => 44,  98 => 43,  93 => 41,  89 => 40,  85 => 39,  82 => 38,  78 => 37,  75 => 36,  73 => 35,  56 => 20,  54 => 19,  38 => 5,  35 => 4,  29 => 2,);
    }
}
