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

/* bien_c/AjouterBien.html.twig */
class __TwigTemplate_e25b59e45f83028f81f4971badf1c460f5382d2ea6a9883ac0464085b9d0c00c extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bien_c/AjouterBien.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bien_c/AjouterBien.html.twig"));

        $this->parent = $this->loadTemplate("Fond.html.twig", "bien_c/AjouterBien.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Formulaire Ajouter Bien
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<center>
<div class=\"well\">
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), 'form_start', ["attr" => ["class" => "form-horizontal"]]);
        echo "
";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), 'errors');
        echo "
<h3><center>Formulaire Ajouter Bien</center></h3>
<div class=\"well\">
";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), 'form_start', ["attr" => ["class" => "form-horizontal"]]);
        echo "
";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), 'errors');
        echo "
<div class=\"form-group\">
";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "nbChambre", [], "any", false, false, false, 18), 'label', ["label_attr" => ["class" => "col-sm-3 control-label"]]);
        echo "
";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "nbChambre", [], "any", false, false, false, 20), 'errors');
        echo "
";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "nbChambre", [], "any", false, false, false, 21), 'widget');
        echo "
<div class=\"form-group\">
";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "nbPiece", [], "any", false, false, false, 24), 'label', ["label_attr" => ["class" => "col-sm-3 control-label"]]);
        echo "
";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "nbPiece", [], "any", false, false, false, 26), 'errors');
        echo "
";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "nbPiece", [], "any", false, false, false, 27), 'widget');
        echo "
<div class=\"form-group\">
";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "superficie", [], "any", false, false, false, 30), 'label', ["label_attr" => ["class" => "col-sm-3 control-label"]]);
        echo "
";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "superficie", [], "any", false, false, false, 32), 'errors');
        echo "
";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "superficie", [], "any", false, false, false, 33), 'widget');
        echo "
<div class=\"form-group\">
";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "prix", [], "any", false, false, false, 36), 'label', ["label_attr" => ["class" => "col-sm-3 control-label"]]);
        echo "
";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "prix", [], "any", false, false, false, 38), 'errors');
        echo "
";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "prix", [], "any", false, false, false, 39), 'widget');
        echo "
<div class=\"form-group\">
";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "chauffage", [], "any", false, false, false, 42), 'label', ["label_attr" => ["class" => "col-sm-3 control-label"]]);
        echo "
";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "chauffage", [], "any", false, false, false, 44), 'errors');
        echo "
";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "chauffage", [], "any", false, false, false, 45), 'widget');
        echo "
<div class=\"form-group\">
";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "annee", [], "any", false, false, false, 48), 'label', ["label_attr" => ["class" => "col-sm-3 control-label"]]);
        echo "
";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "annee", [], "any", false, false, false, 50), 'errors');
        echo "
";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "annee", [], "any", false, false, false, 51), 'widget');
        echo "
<div class=\"form-group\">
";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "localisation", [], "any", false, false, false, 54), 'label', ["label_attr" => ["class" => "col-sm-3 control-label"]]);
        echo "
";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "localisation", [], "any", false, false, false, 56), 'errors');
        echo "
";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "localisation", [], "any", false, false, false, 57), 'widget');
        echo "
<div class=\"form-group\">
";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "etat", [], "any", false, false, false, 60), 'label', ["label_attr" => ["class" => "col-sm-3 control-label"]]);
        echo "
";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "etat", [], "any", false, false, false, 62), 'errors');
        echo "
";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "etat", [], "any", false, false, false, 63), 'widget');
        echo "
<div class=\"form-group\">
";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "id_type", [], "any", false, false, false, 66), 'label', ["label_attr" => ["class" => "col-sm-3 control-label"]]);
        echo "
";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "id_type", [], "any", false, false, false, 68), 'errors');
        echo "
";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "id_type", [], "any", false, false, false, 69), 'widget');
        echo "
</div>

";
        // line 73
        echo "<div class=\"row\">
<div class=\"container\">
<label class=\"col-md-4 control-label\"></label>
<div class=\"col-md-4\">
";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "valider", [], "any", false, false, false, 77), 'widget', ["attr" => ["class" => "btn btn-success"]]);
        echo "
";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "annuler", [], "any", false, false, false, 78), 'widget', ["attr" => ["class" => "btn btn-success"]]);
        echo "
</div>
</div>
</div>
</div>
";
        // line 83
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 83, $this->source); })()), "session", [], "any", false, false, false, 83), "flashBag", [], "any", false, false, false, 83), "has", [0 => "success"], "method", false, false, false, 83)) {
            // line 84
            echo "<div class=\"alert alert-success\">
";
            // line 85
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 85, $this->source); })()), "session", [], "any", false, false, false, 85), "flashBag", [], "any", false, false, false, 85), "get", [0 => "success"], "method", false, false, false, 85));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 86
                echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            echo "</div>
";
        }
        // line 90
        echo "
";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), 'rest');
        echo "
";
        // line 93
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), 'form_end');
        echo "
</div>";
        // line 95
        echo "</center>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "bien_c/AjouterBien.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  281 => 95,  277 => 93,  273 => 91,  270 => 90,  266 => 88,  258 => 86,  254 => 85,  251 => 84,  249 => 83,  241 => 78,  237 => 77,  231 => 73,  225 => 69,  221 => 68,  217 => 66,  212 => 63,  208 => 62,  204 => 60,  199 => 57,  195 => 56,  191 => 54,  186 => 51,  182 => 50,  178 => 48,  173 => 45,  169 => 44,  165 => 42,  160 => 39,  156 => 38,  152 => 36,  147 => 33,  143 => 32,  139 => 30,  134 => 27,  130 => 26,  126 => 24,  121 => 21,  117 => 20,  113 => 18,  108 => 15,  104 => 13,  98 => 10,  94 => 8,  90 => 6,  80 => 5,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"Fond.html.twig\" %}
{% block title %}
Formulaire Ajouter Bien
{% endblock %}
{% block body %}
<center>
<div class=\"well\">
{{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}
{# Les erreurs générales du formulaire. #}
{{ form_errors(form) }}
<h3><center>Formulaire Ajouter Bien</center></h3>
<div class=\"well\">
{{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}
{# Les erreurs générales du formulaire. #}
{{ form_errors(form) }}
<div class=\"form-group\">
{# Génération du label. #}
{{ form_label(form.nbChambre,\"\",{'label_attr': {'class': 'col-sm-3 control-label'}}) }}
{# Affichage des erreurs pour ce champ précis. #}
{{ form_errors(form.nbChambre) }}
{{ form_widget(form.nbChambre) }}
<div class=\"form-group\">
{# Génération du label. #}
{{ form_label(form.nbPiece, \"\", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}
{# Affichage des erreurs pour ce champ précis. #}
{{ form_errors(form.nbPiece) }}
{{ form_widget(form.nbPiece) }}
<div class=\"form-group\">
{# Génération du label. #}
{{ form_label(form.superficie, \"\", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}
{# Affichage des erreurs pour ce champ précis. #}
{{ form_errors(form.superficie) }}
{{ form_widget(form.superficie) }}
<div class=\"form-group\">
{# Génération du label. #}
{{ form_label(form.prix, \"\", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}
{# Affichage des erreurs pour ce champ précis. #}
{{ form_errors(form.prix) }}
{{ form_widget(form.prix) }}
<div class=\"form-group\">
{# Génération du label. #}
{{ form_label(form.chauffage, \"\", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}
{# Affichage des erreurs pour ce champ précis. #}
{{ form_errors(form.chauffage) }}
{{ form_widget(form.chauffage) }}
<div class=\"form-group\">
{# Génération du label. #}
{{ form_label(form.annee, \"\", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}
{# Affichage des erreurs pour ce champ précis. #}
{{ form_errors(form.annee) }}
{{ form_widget(form.annee) }}
<div class=\"form-group\">
{# Génération du label. #}
{{ form_label(form.localisation, \"\", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}
{# Affichage des erreurs pour ce champ précis. #}
{{ form_errors(form.localisation) }}
{{ form_widget(form.localisation) }}
<div class=\"form-group\">
{# Génération du label. #}
{{ form_label(form.etat, \"\", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}
{# Affichage des erreurs pour ce champ précis. #}
{{ form_errors(form.etat) }}
{{ form_widget(form.etat) }}
<div class=\"form-group\">
{# Génération du label. #}
{{ form_label(form.id_type, \"\", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}
{# Affichage des erreurs pour ce champ précis. #}
{{ form_errors(form.id_type) }}
{{ form_widget(form.id_type) }}
</div>

{# Pour le bouton, pas de label ni d'erreur, on affiche juste le widget #}
<div class=\"row\">
<div class=\"container\">
<label class=\"col-md-4 control-label\"></label>
<div class=\"col-md-4\">
{{ form_widget(form.valider, {'attr': {'class': 'btn btn-success'}}) }}
{{ form_widget(form.annuler, {'attr': {'class': 'btn btn-success'}}) }}
</div>
</div>
</div>
</div>
{% if app.session.flashBag.has('success') %}
<div class=\"alert alert-success\">
{% for msg in app.session.flashBag.get('success') %}
{{ msg }}
{% endfor %}
</div>
{% endif %}

{{ form_rest(form) }}
{# Fermeture de la balise <form> du formulaire HTML #}
{{ form_end(form) }}
</div>{# empty Twig template #}
</center>
{% endblock %}
{#{% extends '../Bas.html'%}}#}", "bien_c/AjouterBien.html.twig", "/var/www/html/Immostar/templates/bien_c/AjouterBien.html.twig");
    }
}
