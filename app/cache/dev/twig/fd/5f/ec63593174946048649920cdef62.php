<?php

/* GestionYamahaBundle:Default:index.html.twig */
class __TwigTemplate_fd5fec63593174946048649920cdef62 extends Twig_Template
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Employeur";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
    <section class=\"worker\">

        <div class=\"col-sm-2 menu-left\">
            <ul class=\"nav navbar-nav\">
                <li><a href=\"#\" data-toggle=\"modal\" data-target=\"#add\"><i class=\"glyphicon glyphicon-plus\"></i> Ajouter</a></li>
                <li><a href=\"#\"><i class=\"glyphicon glyphicon-screenshot\"></i> Afficher</a></li>
                <li><a href=\"#\" data-toggle=\"modal\" data-target=\"#edit\"><i class=\"glyphicon glyphicon-edit\"></i> Modifier</a></li>
                <li><a href=\"#\" data-toggle=\"modal\" data-target=\"#del\"><i class=\"glyphicon glyphicon-remove\"></i> Supprimer</a></li>
            </ul>
        </div>

        <div class=\"col-sm-10 content\">
            <h2 class=\"text-head\">Gestion Employeur</h2>

            <div class=\"search-id pull-right\">
                <form class=\"navbar-form navbar-left\" role=\"search\">
                    <div class=\"form-group\">
                        <input type=\"text\" class=\"form-control\" placeholder=\"Recherche employeur\">
                    </div>
                    <button type=\"submit\" class=\"btn\"><span class=\"glyphicon glyphicon-search\"></span></button>
                </form>
            </div>

            <div class=\"gest-work\">
                <table class=\"table table-hover table-striped\">
                    <thead>
                    <tr>
                        <th></th>
                        <th>id</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>CIN</th>
                        <th>date d'embauche</th>
                        <th>Fin contrat</th>
                        <th>Salair</th>
                        <th>grade</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><input type=\"radio\"></td>
                        <td>1</td>
                        <td>Amin</td>
                        <td>Ben Ali</td>
                        <td>0895821</td>
                        <td>28/05/2014</td>
                        <td>01/01/2016</td>
                        <td>1050 dt</td>
                        <td>ingénieur</td>
                    </tr>
                    <tr>
                        <td><input type=\"radio\"></td>
                        <td>1</td>
                        <td>Marwen</td>
                        <td>Ayari</td>
                        <td>0895111</td>
                        <td>28/05/2014</td>
                        <td>01/01/2016</td>
                        <td>1050 dt</td>
                        <td>ingénieur</td>
                    </tr>
                    <tr>
                        <td><input type=\"radio\"></td>
                        <td>1</td>
                        <td>Hatem</td>
                        <td>Milled</td>
                        <td>0895228</td>
                        <td>28/05/2014</td>
                        <td>01/01/2016</td>
                        <td>650 dt</td>
                        <td>technicien</td>
                    </tr>
                    <tr>
                        <td><input type=\"radio\"></td>
                        <td>1</td>
                        <td>Sami</td>
                        <td>Abess</td>
                        <td>0895899</td>
                        <td>28/05/2014</td>
                        <td>01/01/2016</td>
                        <td>650 dt</td>
                        <td>technicien</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <nav>
                <ul class=\"pagination\">

                    <li><a href=\"#\">1</a></li>
                    <li class=\"active\"><a href=\"#\">2</a></li>
                    <li><a href=\"#\">3</a></li>
                    <li><a href=\"#\">4</a></li>
                    <li><a href=\"#\">5</a></li>
                </ul>
            </nav>
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

                        <form class=\"form-horizontal\" action=\"#\" method=\"post\" role=\"form\">
                            <div class=\"form-group\">
                                <input type=\"text\" class=\"form-control\" placeholder=\"Nom\">
                            </div>
                            <div class=\"form-group\">
                                <input type=\"text\" class=\"form-control\" placeholder=\"Prénom\">
                            </div>
                            <div class=\"form-group\">
                                <input type=\"text\" class=\"form-control\" placeholder=\"CIN\">
                            </div>
                            <div class=\"form-group\">
                                <input type=\"date\" class=\"form-control\" placeholder=\"date d'embauche\">
                            </div>
                            <div class=\"form-group\">
                                <input type=\"date\" class=\"form-control\" placeholder=\"Fin contrat\">
                            </div>
                            <div class=\"form-group\">
                                <input type=\"number\" class=\"form-control\" placeholder=\"Salair\">
                            </div>
                            <div class=\"form-group\">
                                <input type=\"text\" class=\"form-control\" placeholder=\"Grade\">
                            </div>

                            <div class=\"pull-right\">
                                <button type=\"submit\" class=\"btn btn-primary\">Enregistrer</button>
                            </div>
                            <br>
                            <br>
                        </form>

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

";
    }

    public function getTemplateName()
    {
        return "GestionYamahaBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 6,  35 => 5,  29 => 3,);
    }
}
