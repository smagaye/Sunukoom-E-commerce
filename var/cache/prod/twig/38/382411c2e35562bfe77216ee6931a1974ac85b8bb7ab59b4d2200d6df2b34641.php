<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @PrestaShop/Admin/Module/Includes/card_notification_configure.html.twig */
class __TwigTemplate_325945b67ae83204cedc0f8a3d6c30e3d2d8a7ec330a6e6badbd5dcb7bdded39 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 25
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Module/Includes/card_manage_installed.html.twig", "@PrestaShop/Admin/Module/Includes/card_notification_configure.html.twig", 25);
        $this->blocks = [
            'addon_description' => [$this, 'block_addon_description'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "@PrestaShop/Admin/Module/Includes/card_manage_installed.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 30
    public function block_addon_description($context, array $blocks = [])
    {
        // line 31
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? null), "attributes", []), "warning", []), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Module/Includes/card_notification_configure.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 31,  39 => 30,  22 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Module/Includes/card_notification_configure.html.twig", "C:\\wamp64\\www\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Module\\Includes\\card_notification_configure.html.twig");
    }
}
