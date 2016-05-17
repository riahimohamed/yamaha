<?php

/* GestionYamahaBundle:Employer:show.html.twig */
class __TwigTemplate_2dd20482afd92150def0e2138750a7da extends Twig_Template
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
    <h1>Employer</h1>

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
                <th>Nom</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nom"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prenom</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "prenom"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Cin</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cin"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>date d'embauche</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "embauche"), "Y-m-d"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Fin contrat</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "finContrat"), "Y-m-d"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Salair</th>
                <td>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "salair"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Grade</th>
                <td>
                    ";
        // line 41
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "grade") == 1)) {
            // line 42
            echo "                        Ingénieur
                    ";
        } elseif (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "grade") == 2)) {
            // line 44
            echo "                        Technicien
                    ";
        } elseif (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "grade") == 3)) {
            // line 46
            echo "                        Ouvrier

                    ";
        }
        // line 49
        echo "                </td>
            </tr>
        </tbody>
    </table>

    <ul class=\"nav navbar-nav record_actions\">
        <li>
            <a href=\"";
        // line 56
        echo $this->env->getExtension('routing')->getPath("employer");
        echo "\">
                Reteurn a la liste
            </a>
        </li>
        <li>
            <a href=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("employer_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\">
                Modifier
            </a>
        </li>
        <li>
            <form action=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("employer_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\" method=\"post\">
                <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
                ";
        // line 68
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
        return "GestionYamahaBundle:Employer:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 68,  130 => 66,  122 => 61,  114 => 56,  105 => 49,  100 => 46,  96 => 44,  92 => 42,  90 => 41,  82 => 36,  75 => 32,  68 => 28,  61 => 24,  54 => 20,  47 => 16,  40 => 12,  31 => 5,  28 => 3,);
    }
}
