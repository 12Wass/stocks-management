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

/* navbar.html.twig */
class __TwigTemplate_8be90f2be9a17e20c76ecaefd405740c4d82d6c86c96e2dc91930d5df768b236 extends Template
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
        echo "<nav class=\"navbar navbar-expand-lg navbar-absolute navbar-transparent\">
    <div class=\"container-fluid\">
        <div class=\"navbar-wrapper\">
            <div class=\"navbar-toggle d-inline\">
                <button type=\"button\" class=\"navbar-toggler\">
                    <span class=\"navbar-toggler-bar bar1\"></span>
                    <span class=\"navbar-toggler-bar bar2\"></span>
                    <span class=\"navbar-toggler-bar bar3\"></span>
                </button>
            </div>
            <a class=\"navbar-brand\" href=\"javascript:void(0)\">";
        // line 11
        echo twig_escape_filter($this->env, ($context["enterprise"] ?? null), "html", null, true);
        echo "</a>
        </div>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navigation\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-bar navbar-kebab\"></span>
            <span class=\"navbar-toggler-bar navbar-kebab\"></span>
            <span class=\"navbar-toggler-bar navbar-kebab\"></span>
        </button>

        <div class=\"collapse navbar-collapse\" id=\"navigation\">
            <ul class=\"navbar-nav ml-auto\">
                <li class=\"dropdown nav-item\">
                    <a href=\"javascript:void(0)\" class=\"dropdown-toggle nav-link\" data-toggle=\"dropdown\">
                        <div class=\"notification d-none d-lg-block d-xl-block\"></div>
                        <i class=\"tim-icons icon-sound-wave\"></i>
                        <p class=\"d-lg-none\">
                            Notifications
                        </p>
                    </a>
                    <ul class=\"dropdown-menu dropdown-menu-right dropdown-navbar\">
                        <li class=\"nav-link\"><a href=\"#\" class=\"nav-item dropdown-item\">STOCK : Plus de MBP 13 pouces</a></li>
                        <li class=\"nav-link\"><a href=\"javascript:void(0)\" class=\"nav-item dropdown-item\">STOCK : Surplus de XXX</a></li>
                    </ul>
                </li>

                <!-- Profil -->

                <li class=\"dropdown nav-item\">
                    <a href=\"#\" class=\"dropdown-toggle nav-link\" data-toggle=\"dropdown\">
                        <div class=\"photo\">
                            <img src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/anime3.png"), "html", null, true);
        echo "\" alt=\"Profile Photo\">
                        </div>
                        <b class=\"caret d-none d-lg-block d-xl-block\"></b>
                        <p class=\"d-lg-none\">
                            Log out
                        </p>
                    </a>
                    <ul class=\"dropdown-menu dropdown-navbar\">
                        <li class=\"nav-link\"><p class=\"nav-item dropdown-item\">";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 48), "username", [], "any", false, false, false, 48), "html", null, true);
        echo "</p></li>
                        <li class=\"dropdown-divider\"></li>
                        <li class=\"nav-link\"><a href=\"javascript:void(0)\" class=\"nav-item dropdown-item\">Paramètres</a></li>
                        <li class=\"nav-link\"><a href=\"";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\" class=\"nav-item dropdown-item\">Déconnexion</a></li>
                    </ul>
                </li>
                <li class=\"separator d-lg-none\"></li>
            </ul>
        </div>
    </div>
</nav>";
    }

    public function getTemplateName()
    {
        return "navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 51,  92 => 48,  81 => 40,  49 => 11,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "navbar.html.twig", "/homepages/34/d711344799/htdocs/eiffage/templates/navbar.html.twig");
    }
}
