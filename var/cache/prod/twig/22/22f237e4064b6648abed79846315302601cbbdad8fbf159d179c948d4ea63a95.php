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

/* user/index.html.twig */
class __TwigTemplate_af98eb0d424890801229ddacb905b4cf809bc939052d4c034d62850757efbd47 extends Template
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
        $this->parent = $this->loadTemplate("dashboard.html.twig", "user/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Utilisateurs";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <div class=\"content\">
        <h1 class=\"text-center\">Gestion des utilisateurs</h1>
            <div class=\"row\">
                <div class=\"col-lg-8 ml-auto mr-auto\">
                    <div class=\"row\">
                        <table class=\"table\">
                            <thead>
                                <tr>
                                    <th class=\"text-center\">#</th>
                                    <th>Username</th>
                                    <th>Roles</th>
                                    ";
        // line 17
        if ((0 !== twig_compare(($context["actions"] ?? null), false))) {
            // line 18
            echo "                                    <th class=\"text-center\">Actions</th>
                                    ";
        }
        // line 20
        echo "                                </tr>
                            </thead>
                            <tbody>
                            ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 24
            echo "                                <tr>
                                    <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
                                    <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
                                    <td>";
            // line 27
            ((twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 27)) ? (print (twig_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 27)), "html", null, true))) : (print ("")));
            echo "</td>
                                    ";
            // line 28
            if ((0 !== twig_compare(($context["actions"] ?? null), false))) {
                // line 29
                echo "                                    <td class=\"td-actions text-center\">
                                        <button type=\"button\" onclick=\"location.href='";
                // line 30
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 30)]), "html", null, true);
                echo "'\" rel=\"tooltip\" class=\"btn btn-success btn-sm btn-round btn-icon\">
                                            <i class=\"tim-icons icon-settings\"></i>
                                        </button>
                                        <button type=\"button\" onclick=\"location.href='";
                // line 33
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 33)]), "html", null, true);
                echo "'\" rel=\"tooltip\" class=\"btn btn-danger btn-sm btn-round btn-icon\">
                                            <i class=\"tim-icons icon-simple-remove\"></i>
                                        </button>
                                    </td>
                                    ";
            }
            // line 38
            echo "                                </tr>
                            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 40
            echo "                                <tr>
                                    <td colspan=\"5\">Aucun utilisateur répertorié en base de données.</td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "                            </tbody>
                        </table>

                        <a href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register", ["user_management" => true]);
        echo "\">Ajouter un utilisateur</a>
                    </div>
                </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "user/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 47,  136 => 44,  127 => 40,  121 => 38,  113 => 33,  107 => 30,  104 => 29,  102 => 28,  98 => 27,  94 => 26,  90 => 25,  87 => 24,  82 => 23,  77 => 20,  73 => 18,  71 => 17,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "user/index.html.twig", "/homepages/34/d711344799/htdocs/eiffage/templates/user/index.html.twig");
    }
}
