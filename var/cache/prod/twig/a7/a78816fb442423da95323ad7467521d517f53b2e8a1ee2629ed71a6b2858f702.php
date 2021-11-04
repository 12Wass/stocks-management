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

/* sidebar.html.twig */
class __TwigTemplate_6c7f85b335b590d28a01ab8150222252b817de59aa36f1e39d74f2080ecd250c extends Template
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
        echo "<div class=\"sidebar\" data-color=\"\">
    <div class=\"sidebar-wrapper\">
        <div class=\"logo\">
            <a href=\"javascript:void(0)\" class=\"simple-text logo-mini\">
                STCK
            </a>
            <a href=\"javascript:void(0)\" class=\"simple-text logo-normal\">
                MENU
            </a>
        </div>
        <ul class=\"nav\">
            <li>
                <a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">
                    <i class=\"tim-icons icon-chart-pie-36\"></i>
                    <p>Dashboard</p>
                </a>
            </li>

            ";
        // line 19
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 20
            echo "            <li>
                <a href=\"";
            // line 21
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_es");
            echo "\">
                    <i class=\"tim-icons icon-atom\"></i>
                    <p>Entrées / Sorties de matériel</p>
                </a>
            </li>
            ";
        }
        // line 27
        echo "
            <li>
                <a href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("data_management");
        echo "\">
                    <i class=\"tim-icons icon-single-02\"></i>
                    <p>Gestion des données</p>
                </a>
            </li>
            <li>
                <a href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_index");
        echo "\">
                    <i class=\"tim-icons icon-puzzle-10\"></i>
                    <p>Stock</p>
                </a>
            </li>
            <li>
                <a href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("flux");
        echo "\">
                    <i class=\"tim-icons icon-align-center\"></i>
                    <p>Flux</p>
                </a>
            </li>
            <li>
                <a href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("label_index");
        echo "\">
                    <i class=\"tim-icons icon-scissors\"></i>
                    <p>Etiquettes</p>
                </a>
            </li>
        </ul>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 47,  96 => 41,  87 => 35,  78 => 29,  74 => 27,  65 => 21,  62 => 20,  60 => 19,  51 => 13,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "sidebar.html.twig", "/homepages/34/d711344799/htdocs/eiffage/templates/sidebar.html.twig");
    }
}
