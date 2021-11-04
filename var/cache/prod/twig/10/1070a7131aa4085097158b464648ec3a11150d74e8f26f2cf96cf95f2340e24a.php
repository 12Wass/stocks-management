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

/* word/index.html.twig */
class __TwigTemplate_56437bcf3c62a50ae77c072033b6aa45fa7ade21556fe6a99d89b914a3b153d7 extends Template
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
        return "dashboard.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("dashboard.html.twig", "word/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Générer des étiquettes";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<div class=\"content\">
    <div class=\"row\">
        <div class=\"col-lg-6\">
            <div class=\"col-md-6\">
                <label for=\"product_select\">Libellé</label>
                <select class=\"form-control\" name=\"product_select\" id=\"product_select\">
                    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 13
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 13), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 13), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "                </select>
            </div>
            <div class=\"col-md-4\">
                <label for=\"quantity\">Quantité</label>
                <input type=\"number\" class=\"form-control\" placeholder=\"Quantité\" name=\"quantity\" id=\"quantity\" min=\"0\">
            </div>
            <div class=\"col-md-2\">
                <button type=\"button\" class=\"btn\" onclick=\"addToTable()\">Ajouter</button>
            </div>
            <div class=\"col-md-2\">
                <button type=\"button\" class=\"btn\" onclick=\"generateLabels()\">Générer</button>
            </div>
        </div>
        <div class=\"col-lg-6\">
            <table class=\"table\" id=\"productsTable\">
                <thead>
                <tr>
                    <th>Nom</th>
                    <th>Quantité</th>
                </tr>
                </thead>
                <tbody id=\"productsTableBody\"></tbody>
            </table>
        </div>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "word/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 15,  70 => 13,  66 => 12,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "word/index.html.twig", "/homepages/34/d711344799/htdocs/eiffage/templates/word/index.html.twig");
    }
}
