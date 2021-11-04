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

/* product/edit.html.twig */
class __TwigTemplate_1d9e4d76e059dc3ed59748d437bdb94516bead519e83fed129cc56fe26380756 extends Template
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
        $this->parent = $this->loadTemplate("dashboard.html.twig", "product/edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Modifier un produit";
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
                <h1>Modification d'un produit</h1>

                ";
        // line 13
        echo twig_include($this->env, $context, "product/_form.html.twig", ["button_label" => "Mettre à jour"]);
        echo "
                <div class=\"col-md-3\">
                    ";
        // line 15
        echo twig_include($this->env, $context, "product/_delete_form.html.twig");
        echo "
                </div>
                <div class=\"col-md-12\">
                    <a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_index");
        echo "\">retour à la liste</a>
                </div>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "product/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 18,  72 => 15,  67 => 13,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "product/edit.html.twig", "/homepages/34/d711344799/htdocs/eiffage/templates/product/edit.html.twig");
    }
}
