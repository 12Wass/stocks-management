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

/* product/_es-form.html.twig */
class __TwigTemplate_85f40437d7ac7671ab301844e1925c872981919b9dc4e770f4901decefd5cb26 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
<div class=\"row\">
    <div class=\"col-md-4\">
        ";
        // line 4
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "barcode", [], "any", false, false, false, 4), 'row');
        echo "
    </div>
        ";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "id", [], "any", false, false, false, 6), 'row');
        echo "
    <div class=\"col-md-4\">
        <label for=\"es_quantity\">Quantité</label>
        <input type=\"number\" id=\"es_quantity\" name=\"es[quantity]\" required=\"required\" class=\"form-control\" min=\"0\">
    </div>
    <div id=\"searchResults\"></div>
    <div class=\"col-md-12\">
        <div class=\"form-check form-check-radio form-check-inline\" id=\"es_flow_type\">
            <label class=\"form-check-label\" for=\"es_flow_type_entry\">
                <input class=\"form-check-input\" type=\"radio\" name=\"es[flow_type]\" id=\"es_flow_type_entry\" value=\"entry\"> Entrée
                <span class=\"form-check-sign\"></span>
            </label>
        </div>
        <div class=\"form-check form-check-radio form-check-inline\">
            <label class=\"form-check-label\" for=\"es_flow_type_exit\">
                <input class=\"form-check-input\" type=\"radio\" name=\"es[flow_type]\" id=\"es_flow_type_exit\" value=\"exit\"> Sortie
                <span class=\"form-check-sign\"></span>
            </label>
        </div>
    </div>
</div>

    <button class=\"btn\" id=\"es_button_send\" disabled>";
        // line 28
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter(($context["button_label"] ?? null), "Sauvegarder")) : ("Sauvegarder")), "html", null, true);
        echo "</button>
";
        // line 29
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
";
    }

    public function getTemplateName()
    {
        return "product/_es-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 29,  73 => 28,  48 => 6,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "product/_es-form.html.twig", "/homepages/34/d711344799/htdocs/eiffage/templates/product/_es-form.html.twig");
    }
}
