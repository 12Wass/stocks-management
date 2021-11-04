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

/* product/show.html.twig */
class __TwigTemplate_7629757104c0d3362ce9de061d2f0405f9da9899bdf65fce23eb03c1e516e3df extends Template
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
        $this->parent = $this->loadTemplate("dashboard.html.twig", "product/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Product";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<div class=\"content\">
    <h1 class=\"text-center title\">Gestion des produits</h1>
    <div class=\"row\">
        <div class=\"col-lg-8 ml-auto mr-auto\">
            <div class=\"row\">
                <h1>Product</h1>

                <table class=\"table\">
                    <tbody>
                        <tr>
                            <th>Id</th>
                            <td>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 17), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Name</th>
                            <td>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 21), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Barcode</th>
                            <td>";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "barcode", [], "any", false, false, false, 25), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Provider</th>
                            <td>";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "provider", [], "any", false, false, false, 29), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Stock</th>
                            <td>";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "stock", [], "any", false, false, false, 33), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Entries</th>
                            <td>";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "entries", [], "any", false, false, false, 37), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Exits</th>
                            <td>";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "exits", [], "any", false, false, false, 41), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Min_alert</th>
                            <td>";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "minAlert", [], "any", false, false, false, 45), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Max_alert</th>
                            <td>";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "maxAlert", [], "any", false, false, false, 49), "html", null, true);
        echo "</td>
                        </tr>
                    </tbody>
                </table>

                <a href=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_index");
        echo "\">back to list</a>

                <a href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_edit", ["id" => twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 56)]), "html", null, true);
        echo "\">edit</a>

                ";
        // line 58
        echo twig_include($this->env, $context, "product/_delete_form.html.twig");
        echo "
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "product/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 58,  140 => 56,  135 => 54,  127 => 49,  120 => 45,  113 => 41,  106 => 37,  99 => 33,  92 => 29,  85 => 25,  78 => 21,  71 => 17,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "product/show.html.twig", "/homepages/34/d711344799/htdocs/eiffage/templates/product/show.html.twig");
    }
}
