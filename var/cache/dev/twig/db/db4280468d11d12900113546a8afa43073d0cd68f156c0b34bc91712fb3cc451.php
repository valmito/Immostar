<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* bien_c/AfficherBien.html.twig */
class __TwigTemplate_a0e50e3f3c967a0e0e79d36b1fc1d6a48a2ef140bf5bb9a3b87336f4ae25de3c extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "Fond.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bien_c/AfficherBien.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bien_c/AfficherBien.html.twig"));

        $this->parent = $this->loadTemplate("Fond.html.twig", "bien_c/AfficherBien.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <center>
        <div class=\"container\">
            <h3>Liste des articles</h3><br/>
            <table class=\"table table-striped table-hover\">
                <tr>
                    <th>Nombre de chambre</th>
                    <th>Nombre de pièce</th>
                    <th>Superficie</th>
                    <th>Prix</th>
                    <th>Chauffage</th>
                    <th>Année</th>
                    <th>Localisation</th>
                    <th>Etat</th>
                    <th>Modifier</th>
                    <th>Supprimer</th>
                </tr>
                ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["result"]) || array_key_exists("result", $context) ? $context["result"] : (function () { throw new RuntimeError('Variable "result" does not exist.', 20, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["unArticle"]) {
            // line 21
            echo "                    <tr>
                        <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["unArticle"], "nbChambre", [], "any", false, false, false, 22), "html", null, true);
            echo "</td>
                        <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["unArticle"], "nbPiece", [], "any", false, false, false, 23), "html", null, true);
            echo "</td>
                        <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["unArticle"], "superficie", [], "any", false, false, false, 24), "html", null, true);
            echo " m</td>
                        <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["unArticle"], "prix", [], "any", false, false, false, 25), "html", null, true);
            echo " €</td>
                        <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["unArticle"], "chauffage", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
                        <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["unArticle"], "annee", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                        <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["unArticle"], "localisation", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                        <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["unArticle"], "etat", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
                        <td><a href=\"/article/update/";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["unArticle"], "id", [], "any", false, false, false, 30), "html", null, true);
            echo "\" class=\"btn btn-outline-primary\">MODIFIER</a></td>
                        <td><a href=\"/article/verif/supprimer/";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["unArticle"], "id", [], "any", false, false, false, 31), "html", null, true);
            echo "\" class=\"btn btn-outline-danger\">SUPPRIMER</a></td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unArticle'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "            </table><br/>

        </div>
    </center>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "bien_c/AfficherBien.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 34,  129 => 31,  125 => 30,  121 => 29,  117 => 28,  113 => 27,  109 => 26,  105 => 25,  101 => 24,  97 => 23,  93 => 22,  90 => 21,  86 => 20,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"Fond.html.twig\" %}

{% block body %}
    <center>
        <div class=\"container\">
            <h3>Liste des articles</h3><br/>
            <table class=\"table table-striped table-hover\">
                <tr>
                    <th>Nombre de chambre</th>
                    <th>Nombre de pièce</th>
                    <th>Superficie</th>
                    <th>Prix</th>
                    <th>Chauffage</th>
                    <th>Année</th>
                    <th>Localisation</th>
                    <th>Etat</th>
                    <th>Modifier</th>
                    <th>Supprimer</th>
                </tr>
                {% for unArticle in result %}
                    <tr>
                        <td>{{ unArticle.nbChambre }}</td>
                        <td>{{ unArticle.nbPiece }}</td>
                        <td>{{ unArticle.superficie }} m</td>
                        <td>{{ unArticle.prix }} €</td>
                        <td>{{ unArticle.chauffage }}</td>
                        <td>{{ unArticle.annee }}</td>
                        <td>{{ unArticle.localisation }}</td>
                        <td>{{ unArticle.etat }}</td>
                        <td><a href=\"/article/update/{{ unArticle.id }}\" class=\"btn btn-outline-primary\">MODIFIER</a></td>
                        <td><a href=\"/article/verif/supprimer/{{ unArticle.id }}\" class=\"btn btn-outline-danger\">SUPPRIMER</a></td>
                    </tr>
                {% endfor %}
            </table><br/>

        </div>
    </center>

{% endblock %}
", "bien_c/AfficherBien.html.twig", "/var/www/html/Immostar/templates/bien_c/AfficherBien.html.twig");
    }
}
