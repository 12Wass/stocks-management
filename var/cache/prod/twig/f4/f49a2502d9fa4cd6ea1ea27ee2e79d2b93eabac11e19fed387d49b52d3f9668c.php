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

/* home/data/index.html.twig */
class __TwigTemplate_aba1864c32e77b2a7556567a7c8164e4fd41a020c3d6a3d77b38ca22c8a6cbe6 extends Template
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
        $this->parent = $this->loadTemplate("dashboard.html.twig", "home/data/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Data Management";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div class=\"content\">
    <h1 class=\"text-center\">Data Management : ";
        // line 12
        echo twig_escape_filter($this->env, ($context["enterprise"] ?? null), "html", null, true);
        echo "</h1>
    <div class=\"row\">
        <div class=\"col-lg-8 ml-auto mr-auto\">
            <div class=\"row\">
                <div class=\"col-md-4\">
                    <button class=\"btn btn-primary btn-block\" onclick=\"location.href='";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_index");
        echo "'\">Utilisateurs</button>
                </div>
                <div class=\"col-md-4\">
                    <button class=\"btn btn-primary btn-block\" onclick=\"location.href='";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("provider_index");
        echo "'\">Fournisseurs</button>
                </div>
                <div class=\"col-md-4\">
                    <button class=\"btn btn-primary btn-block\" onclick=\"location.href=''\">Flux</button>
                </div>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "home/data/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 20,  74 => 17,  66 => 12,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home/data/index.html.twig", "/homepages/34/d711344799/htdocs/eiffage/templates/home/data/index.html.twig");
    }
}
