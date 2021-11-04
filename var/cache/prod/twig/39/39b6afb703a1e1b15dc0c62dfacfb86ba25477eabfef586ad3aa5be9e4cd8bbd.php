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

/* product/index.html.twig */
class __TwigTemplate_1f48ad4682e61a27eaef17be8a6435f17b56312190a26864297ce70d30527ce8 extends Template
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
        $this->parent = $this->loadTemplate("dashboard.html.twig", "product/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Gestion des produits";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <div class=\"content\">
        <h1 class=\"text-center title\">Gestion des produits</h1>
        <div class=\"row\">
            <div class=\"col-lg-12 ml-auto mr-auto\">
                <div class=\"row\">
                    <table class=\"table\">
                        <thead>
                        <tr>
                            <th class=\"text-center\">#</th>
                            <th>Nom</th>
                            <th>Code barre</th>
                            <th>EAN13</th>
                            <th>Fournisseur</th>
                            <th>Stock</th>
                            <th>Entrées</th>
                            <th>Sorties</th>
                            <th>Alerte</th>
                            <th>Min. Alerts</th>
                            <th>Max. Alerts</th>
                            ";
        // line 25
        if ((0 !== twig_compare(($context["actions"] ?? null), false))) {
            // line 26
            echo "                            <th class=\"text-center\">Actions</th>
                            ";
        }
        // line 28
        echo "                        </tr>
                        </thead>
                        <tbody>
                            ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 32
            echo "                        <tr>
                            <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
                            <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
                            <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "barcode", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
                            <td><img src=\"data:image/png;base64,";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "ean13", [], "any", false, false, false, 36), "html", null, true);
            echo "\" /></td>
                            <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "provider", [], "any", false, false, false, 37), "name", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
                            <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
                            <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "entries", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
                            <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "exits", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
                            ";
            // line 41
            if ((-1 === twig_compare(twig_get_attribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 41), twig_get_attribute($this->env, $this->source, $context["product"], "minAlert", [], "any", false, false, false, 41)))) {
                // line 42
                echo "                            <td class=\"alert-warning text-center\">PAS ASSEZ DE STOCK</td>
                                ";
            } elseif ((1 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 43
$context["product"], "stock", [], "any", false, false, false, 43), twig_get_attribute($this->env, $this->source, $context["product"], "maxAlert", [], "any", false, false, false, 43)))) {
                // line 44
                echo "                            <td class=\"alert-danger text-center\">TROP DE STOCK</td>
                                ";
            } else {
                // line 46
                echo "                            <td class=\"alert-success text-center\">BON</td>
                                ";
            }
            // line 48
            echo "                            <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "minAlert", [], "any", false, false, false, 48), "html", null, true);
            echo "</td>
                            <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "maxAlert", [], "any", false, false, false, 49), "html", null, true);
            echo "</td>
                            ";
            // line 50
            if ((0 !== twig_compare(($context["actions"] ?? null), false))) {
                // line 51
                echo "                            <td class=\"td-actions text-center\">
                                <button type=\"button\" onclick=\"location.href='";
                // line 52
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_show", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 52)]), "html", null, true);
                echo "'\" rel=\"tooltip\" class=\"btn btn-info btn-sm btn-round btn-icon\">
                                    <i class=\"tim-icons icon-zoom-split\"></i>
                                </button>
                                <button type=\"button\" onclick=\"location.href='";
                // line 55
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 55)]), "html", null, true);
                echo "'\" rel=\"tooltip\" class=\"btn btn-success btn-sm btn-round btn-icon\">
                                    <i class=\"tim-icons icon-settings\"></i>
                                </button>
                                <button type=\"button\" onclick=\"location.href='";
                // line 58
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 58)]), "html", null, true);
                echo "'\" rel=\"tooltip\" class=\"btn btn-danger btn-sm btn-round btn-icon\">
                                    <i class=\"tim-icons icon-simple-remove\"></i>
                                </button>
                            </td>
                            ";
            }
            // line 63
            echo "                        </tr>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 65
            echo "                            <tr>
                                <td colspan=\"10\">Aucun produit répertorié en base de données.</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "                        </tbody>
                    </table>

                    <a href=\"";
        // line 72
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_new");
        echo "\">Ajouter un produit</a>

                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "product/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 72,  194 => 69,  185 => 65,  179 => 63,  171 => 58,  165 => 55,  159 => 52,  156 => 51,  154 => 50,  150 => 49,  145 => 48,  141 => 46,  137 => 44,  135 => 43,  132 => 42,  130 => 41,  126 => 40,  122 => 39,  118 => 38,  114 => 37,  110 => 36,  106 => 35,  102 => 34,  98 => 33,  95 => 32,  90 => 31,  85 => 28,  81 => 26,  79 => 25,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "product/index.html.twig", "/homepages/34/d711344799/htdocs/eiffage/templates/product/index.html.twig");
    }
}
