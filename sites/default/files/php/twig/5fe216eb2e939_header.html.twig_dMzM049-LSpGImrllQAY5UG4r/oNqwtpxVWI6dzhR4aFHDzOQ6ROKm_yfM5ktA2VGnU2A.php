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

/* themes/contrib/offapew_theme/templates/_includes/global/header.html.twig */
class __TwigTemplate_d4fe2f4121bde4daf334cc749b7e8b3e79836110ce28a283a83f3f834abffd9a extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["escape" => 4];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<header id=\"header\" class=\"header\" role=\"banner\" aria-label=\"Site header\">
    <nav class=\"secondary-nav nav\">
      <div class=\"container\">
       ";
        // line 4
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "cart", [])), "html", null, true);
        echo "
        ";
        // line 5
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "secondary_menu", [])), "html", null, true);
        echo "
      </div>
    </nav>
  <nav class=\"primary-nav  nav container\">
      <a class=\"navbar-brand\" href=\"#\"><img src=\"";
        // line 9
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["logo"] ?? null)), "html", null, true);
        echo "\" width=\"150\" height=\"84\" alt=\"logo\" /></a>
      <div id=\"showMenu\">
        <button  class=\"menu navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarToggleExternalContent\" aria-controls=\"navbarToggleExternalContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"navbar-toggler-icon\"></span>
          <span class=\"navbar-toggler-icon\"></span>
          <span class=\"navbar-toggler-icon\"></span>
        </button>
      </div>
      ";
        // line 17
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "primary_menu", [])), "html", null, true);
        echo "
  </nav>
  <div class=\"menu-wrap\">
      <div class=\"icon-list\">
      ";
        // line 21
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "primary_menu", [])), "html", null, true);
        echo "
      <div>
\t</div>
</header>

";
    }

    public function getTemplateName()
    {
        return "themes/contrib/offapew_theme/templates/_includes/global/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  82 => 17,  71 => 9,  64 => 5,  60 => 4,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<header id=\"header\" class=\"header\" role=\"banner\" aria-label=\"Site header\">
    <nav class=\"secondary-nav nav\">
      <div class=\"container\">
       {{ page.cart }}
        {{ page.secondary_menu }}
      </div>
    </nav>
  <nav class=\"primary-nav  nav container\">
      <a class=\"navbar-brand\" href=\"#\"><img src=\"{{ logo }}\" width=\"150\" height=\"84\" alt=\"logo\" /></a>
      <div id=\"showMenu\">
        <button  class=\"menu navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarToggleExternalContent\" aria-controls=\"navbarToggleExternalContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"navbar-toggler-icon\"></span>
          <span class=\"navbar-toggler-icon\"></span>
          <span class=\"navbar-toggler-icon\"></span>
        </button>
      </div>
      {{ page.primary_menu }}
  </nav>
  <div class=\"menu-wrap\">
      <div class=\"icon-list\">
      {{ page.primary_menu }}
      <div>
\t</div>
</header>

", "themes/contrib/offapew_theme/templates/_includes/global/header.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/offapew.com/themes/contrib/offapew_theme/templates/_includes/global/header.html.twig");
    }
}
