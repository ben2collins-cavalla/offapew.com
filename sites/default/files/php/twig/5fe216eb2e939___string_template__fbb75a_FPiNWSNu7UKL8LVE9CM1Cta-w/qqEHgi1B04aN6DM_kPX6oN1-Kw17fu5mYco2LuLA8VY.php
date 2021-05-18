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

/* __string_template__fbb75afcdbed9a484fe14a0fae13358bff0ac0a9b1c7bd57603a81fbd71db067 */
class __TwigTemplate_d5ed797e1eff0194509aa9880fc1308fada1e9049e29941c892e8d7f7382ad1b extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["escape" => 3];
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
        echo "<div class=\"col\">
<div class=\"card mb-3\">
    <img src=\"";
        // line 3
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_cavalla_blog_image"] ?? null)), "html", null, true);
        echo " \" class=\"card-img-top\" alt=\"Image Related to ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_1"] ?? null)), "html", null, true);
        echo "\">
        <div class=\"card-body\">
          <p class=\"card-text mb-0\"><small class=\"text-muted\">";
        // line 5
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["created"] ?? null)), "html", null, true);
        echo "</small></p>
          <h5 class=\"card-title mb-0\">";
        // line 6
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
        echo "</h5>
          <p class=\"card-text\">";
        // line 7
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_user_first_name"] ?? null)), "html", null, true);
        echo " ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_user_last_name"] ?? null)), "html", null, true);
        echo "</p>
        </div>
      </div>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__fbb75afcdbed9a484fe14a0fae13358bff0ac0a9b1c7bd57603a81fbd71db067";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 7,  70 => 6,  66 => 5,  59 => 3,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{# inline_template_start #}<div class=\"col\">
<div class=\"card mb-3\">
    <img src=\"{{ field_cavalla_blog_image }} \" class=\"card-img-top\" alt=\"Image Related to {{ title_1 }}\">
        <div class=\"card-body\">
          <p class=\"card-text mb-0\"><small class=\"text-muted\">{{ created }}</small></p>
          <h5 class=\"card-title mb-0\">{{ title }}</h5>
          <p class=\"card-text\">{{ field_user_first_name }} {{ field_user_last_name }}</p>
        </div>
      </div>
</div>", "__string_template__fbb75afcdbed9a484fe14a0fae13358bff0ac0a9b1c7bd57603a81fbd71db067", "");
    }
}
