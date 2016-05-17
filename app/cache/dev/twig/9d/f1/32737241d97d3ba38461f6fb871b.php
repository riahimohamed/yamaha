<?php

/* GestionYamahaBundle:Stock:index.html.twig */
class __TwigTemplate_9df132737241d97d3ba38461f6fb871b extends Twig_Template
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
        echo "Stock";
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
            <h2 class=\"text-head\">Gestion Stock</h2>

            <div class=\"search-id pull-right\">
                ";
        // line 19
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("GestionYamahaBundle:Stock:recherche"), array());
        // line 20
        echo "            </div>

            <div class=\"gest-work\">
                <table class=\"table table-hover table-striped\">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Quantité</th>
                        <th>Modele</th>
                        <th>Nombre de modeles</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 34
        if ((twig_length_filter($this->env, (isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities"))) != 0)) {
            // line 35
            echo "                        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 36
                echo "                            <tr>
                                <td><a href=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("stock_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
                echo "</a></td>
                                <td>";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "quantity"), "html", null, true);
                echo "</td>
                                <td>
                                    ";
                // line 40
                if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "modele") == 1)) {
                    // line 41
                    echo "                                        bobine cuivre
                                    ";
                } elseif (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "modele") == 2)) {
                    // line 43
                    echo "                                        bobine laiton
                                    ";
                } elseif (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "modele") == 3)) {
                    // line 45
                    echo "                                        etain
                                    ";
                } elseif (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "modele") == 4)) {
                    // line 47
                    echo "                                        feuille de tole laiton
                                    ";
                } elseif (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "modele") == 5)) {
                    // line 49
                    echo "                                        feuille de tole acier
                                    ";
                } elseif (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "modele") == 6)) {
                    // line 51
                    echo "                                        etain en baguette
                                    ";
                }
                // line 53
                echo "                                </td>
                                <td>";
                // line 54
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nbrModele"), "html", null, true);
                echo "</td>
                                <td><a href=\"";
                // line 55
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("stock_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
                echo "\"><i class=\"glyphicon glyphicon-eye-open\"></i></a></td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "                    ";
        } else {
            // line 59
            echo "                        <td colspan=\"100%\"><h4 class=\"text-info text-center\">Aucun Stock</h4></td>
                    ";
        }
        // line 61
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
                        <h4 class=\"modal-title\" id=\"myModalLabel\">Ajoutez Employeur</h4>
                    </div>
                    <div class=\"modal-body\">

                        ";
        // line 76
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("GestionYamahaBundle:Stock:create"));
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
                        <h4 class=\"modal-title\" id=\"myModalLabel2\">Modifier Stock</h4>
                    </div>
                    <div class=\"modal-body\">

                        <form class=\"form-horizontal\" action=\"#\" method=\"post\" role=\"form\">
                            <div class=\"form-group\">
                                <input type=\"text\" class=\"form-control\" placeholder=\"Nom\" value=\"Amin\">
                            </div>
                            <div class=\"form-group\">
                                <input type=\"text\" class=\"form-control\" placeholder=\"Prénom\" value=\"Ben Ali\">
                            </div>
                            <div class=\"form-group\">
                                <input type=\"text\" class=\"form-control\" placeholder=\"CIN\" value=\"0895821\">
                            </div>
                            <div class=\"form-group\">
                                <input type=\"date\" class=\"form-control\" placeholder=\"date d'embauche\" value=\"28/05/2014\">
                            </div>
                            <div class=\"form-group\">
                                <input type=\"date\" class=\"form-control\" placeholder=\"Fin contrat\" value=\"01/01/2016\">
                            </div>
                            <div class=\"form-group\">
                                <input type=\"number\" class=\"form-control\" placeholder=\"Salair\" value=\"1050\">
                            </div>
                            <div class=\"form-group\">
                                <input type=\"text\" class=\"form-control\" placeholder=\"Grade\" value=\"ingénieur\">
                            </div>

                            <div class=\"pull-right\">
                                <button type=\"submit\" class=\"btn btn-primary\">Modifier</button>
                            </div>
                            <br>
                            <br>
                        </form>

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
        return "GestionYamahaBundle:Stock:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 76,  142 => 61,  138 => 59,  135 => 58,  126 => 55,  122 => 54,  119 => 53,  115 => 51,  111 => 49,  107 => 47,  103 => 45,  99 => 43,  95 => 41,  93 => 40,  88 => 38,  82 => 37,  79 => 36,  74 => 35,  72 => 34,  56 => 20,  54 => 19,  38 => 5,  35 => 4,  29 => 2,);
    }
}
