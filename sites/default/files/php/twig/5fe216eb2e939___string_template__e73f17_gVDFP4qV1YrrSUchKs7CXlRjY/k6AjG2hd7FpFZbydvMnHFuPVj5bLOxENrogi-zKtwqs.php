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

/* __string_template__e73f176459b9c41a8e5d112a00ecc636b4480565f5c5a41e0d760bf47f29e09c */
class __TwigTemplate_a15e2001d0bcf4e422441bc723864ae2aa0d5b6828beaf2cafc4367b188c84f2 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["escape" => 2];
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
        echo "<div class=\"media my-3\">
  <img src=\"";
        // line 2
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_cavalla_blog_image"] ?? null)), "html", null, true);
        echo "\" class=\"mr-3 align-self-center\" alt=\"Post about\" width=\"64\" height=\"64\"/>
  <div class=\"media-body\">
  <p class=\"mb-0\"><small>";
        // line 4
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["created"] ?? null)), "html", null, true);
        echo "</small> </p>
    <h5 class=\"mt-0\">";
        // line 5
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
        echo "</h5>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__e73f176459b9c41a8e5d112a00ecc636b4480565f5c5a41e0d760bf47f29e09c";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 5,  63 => 4,  58 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{# inline_template_start #}<div class=\"media my-3\">
  <img src=\"{{ field_cavalla_blog_image }}\" class=\"mr-3 align-self-center\" alt=\"Post about\" width=\"64\" height=\"64\"/>
  <div class=\"media-body\">
  <p class=\"mb-0\"><small>{{ created }}</small> </p>
    <h5 class=\"mt-0\">{{ title }}</h5>
  </div>
</div>", "__string_template__e73f176459b9c41a8e5d112a00ecc636b4480565f5c5a41e0d760bf47f29e09c", "");
    }
}
