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

/* provider/edit.html.twig */
class __TwigTemplate_c90d2b8c4b9a70a75066b7d472aeefe848b904c2f656cfd949c40debef3019a1 extends Template
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
        $this->parent = $this->loadTemplate("dashboard.html.twig", "provider/edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Modifier un fournisseur";
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
                <h1>Modification d'un fournisseur</h1>

                ";
        // line 12
        echo twig_include($this->env, $context, "provider/_form.html.twig", ["button_label" => "Mettre à jour"]);
        echo "
                <div class=\"col-md-3\">
                    ";
        // line 14
        echo twig_include($this->env, $context, "provider/_delete_form.html.twig");
        echo "
                </div>
                <div class=\"col-md-12\">
                        <a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("provider_index");
        echo "\">back to list</a>

            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "provider/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 17,  71 => 14,  66 => 12,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "provider/edit.html.twig", "/homepages/34/d711344799/htdocs/eiffage/templates/provider/edit.html.twig");
    }
}
