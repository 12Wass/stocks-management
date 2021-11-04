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

/* provider/index.html.twig */
class __TwigTemplate_5ce3dd7f7febcff4d18f54e03ae9c0e289b585abc6e7bd27d52ed08835a4f4cf extends Template
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
        $this->parent = $this->loadTemplate("dashboard.html.twig", "provider/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Gestion des fournisseurs";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<div class=\"content\">
    <h1 class=\"text-center title\">Gestion des fournisseurs</h1>
    <div class=\"row\">
        <div class=\"col-lg-12 ml-auto mr-auto\">
            <div class=\"row\">
                <table class=\"table\">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nom</th>
                            <th>Date de création</th>
                            <th class=\"text-center\">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["providers"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["provider"]) {
            // line 22
            echo "                        <tr>
                            <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["provider"], "id", [], "any", false, false, false, 23), "html", null, true);
            echo "</td>
                            <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["provider"], "name", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
                            <td>";
            // line 25
            ((twig_get_attribute($this->env, $this->source, $context["provider"], "datetime", [], "any", false, false, false, 25)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["provider"], "datetime", [], "any", false, false, false, 25), "d/m/Y H:i:s"), "html", null, true))) : (print ("")));
            echo "</td>
                            <td class=\"td-actions text-center\">
                                <button type=\"button\" onclick=\"location.href='";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("provider_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["provider"], "id", [], "any", false, false, false, 27)]), "html", null, true);
            echo "'\" rel=\"tooltip\" class=\"btn btn-success btn-sm btn-round btn-icon\">
                                    <i class=\"tim-icons icon-settings\"></i>
                                </button>
                                <button type=\"button\" onclick=\"location.href='";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("provider_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["provider"], "id", [], "any", false, false, false, 30)]), "html", null, true);
            echo "'\" rel=\"tooltip\" class=\"btn btn-danger btn-sm btn-round btn-icon\">
                                    <i class=\"tim-icons icon-simple-remove\"></i>
                                </button>
                            </td>
                        </tr>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 36
            echo "                        <tr>
                            <td colspan=\"4\">Pas de fournisseurs trouvés</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['provider'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "                    </tbody>
                </table>
                <a href=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("provider_new");
        echo "\">Ajouter un nouveau fournisseur</a>

            </div>
        </div>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "provider/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 42,  122 => 40,  113 => 36,  102 => 30,  96 => 27,  91 => 25,  87 => 24,  83 => 23,  80 => 22,  75 => 21,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "provider/index.html.twig", "/homepages/34/d711344799/htdocs/eiffage/templates/provider/index.html.twig");
    }
}
