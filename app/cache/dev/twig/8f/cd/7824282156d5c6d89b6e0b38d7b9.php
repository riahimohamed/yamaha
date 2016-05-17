<?php

/* GestionYamahaBundle:Employer:index.html.twig */
class __TwigTemplate_8fcd7824282156d5c6d89b6e0b38d7b9 extends Twig_Template
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
        echo "Employer";
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
            <h2 class=\"text-head\">Gestion Employeur</h2>

            <div class=\"search-id pull-right\">
                ";
        // line 19
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("GestionYamahaBundle:Employer:recherche"), array());
        // line 20
        echo "            </div>

            <div class=\"gest-work\">
                <table class=\"table table-hover table-striped\">
                    <thead>
                    <tr>
                        <th>id</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>CIN</th>
                        <th>date d'embauche</th>
                        <th>Fin contrat</th>
                        <th>Salair</th>
                        <th>grade</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 38
        if ((twig_length_filter($this->env, (isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities"))) != 0)) {
            // line 39
            echo "                    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 40
                echo "                        <tr>
                            <td>";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
                echo "</td>
                            <td>";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nom"), "html", null, true);
                echo "</td>
                            <td>";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "prenom"), "html", null, true);
                echo "</td>
                            <td>";
                // line 44
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cin"), "html", null, true);
                echo "</td>
                            <td>";
                // line 45
                if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "embauche")) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "embauche"), "Y-m-d"), "html", null, true);
                }
                echo "</td>
                            <td>";
                // line 46
                if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "finContrat")) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "finContrat"), "Y-m-d"), "html", null, true);
                }
                echo "</td>
                            <td>";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "salair"), "html", null, true);
                echo " dt</td>
                            <td>
                                ";
                // line 49
                if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "grade") == 1)) {
                    // line 50
                    echo "                                    Ingénieur
                                ";
                } elseif (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "grade") == 2)) {
                    // line 52
                    echo "                                    Technicien
                                ";
                } elseif (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "grade") == 3)) {
                    // line 54
                    echo "                                    Ouvrier

                                ";
                }
                // line 57
                echo "                            </td>
                            <td><a href=\"";
                // line 58
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("employer_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
                echo "\"><i class=\"glyphicon glyphicon-eye-open\"></i></a></td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "                    ";
        } else {
            // line 62
            echo "                        <td colspan=\"100%\"><h4 class=\"text-info text-center\">Aucun Emploiyeur</h4></td>
                    ";
        }
        // line 64
        echo "                    </tbody>
                </table>
            </div>
            ";
        // line 67
        echo twig_escape_filter($this->env, ((array_key_exists("searche", $context)) ? (_twig_default_filter((isset($context["searche"]) ? $context["searche"] : $this->getContext($context, "searche")))) : ("")), "html", null, true);
        echo "
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
        // line 80
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("GestionYamahaBundle:Employer:create"));
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

    <!--<h1>Employer list</h1>

    <table class=\"records_list\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Cin</th>
                <th>Embauche</th>
                <th>Fincontrat</th>
                <th>Salair</th>
                <th>Grade</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 179
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 180
            echo "            <tr>
                <td><a href=\"";
            // line 181
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("employer_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "</a></td>
                <td>";
            // line 182
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nom"), "html", null, true);
            echo "</td>
                <td>";
            // line 183
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "prenom"), "html", null, true);
            echo "</td>
                <td>";
            // line 184
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cin"), "html", null, true);
            echo "</td>
                <td>";
            // line 185
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "embauche")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "embauche"), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 186
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "finContrat")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "finContrat"), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 187
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "salair"), "html", null, true);
            echo "</td>
                <td>";
            // line 188
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "grade"), "html", null, true);
            echo "</td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 192
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("employer_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 195
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("employer_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">edit</a>
                    </li>
                </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 201
        echo "        </tbody>
    </table>

        <ul>
        <li>
            <a href=\"";
        // line 206
        echo $this->env->getExtension('routing')->getPath("employer_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>-->
    ";
    }

    public function getTemplateName()
    {
        return "GestionYamahaBundle:Employer:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  349 => 206,  342 => 201,  330 => 195,  324 => 192,  317 => 188,  313 => 187,  307 => 186,  301 => 185,  297 => 184,  293 => 183,  289 => 182,  283 => 181,  280 => 180,  276 => 179,  174 => 80,  158 => 67,  153 => 64,  149 => 62,  146 => 61,  137 => 58,  134 => 57,  129 => 54,  125 => 52,  121 => 50,  119 => 49,  114 => 47,  108 => 46,  102 => 45,  98 => 44,  94 => 43,  90 => 42,  86 => 41,  83 => 40,  78 => 39,  76 => 38,  56 => 20,  54 => 19,  38 => 5,  35 => 4,  29 => 2,);
    }
}
