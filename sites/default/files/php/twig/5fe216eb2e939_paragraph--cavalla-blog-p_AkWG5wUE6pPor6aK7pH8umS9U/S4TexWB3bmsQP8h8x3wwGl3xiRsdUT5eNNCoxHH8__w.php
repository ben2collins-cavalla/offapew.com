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

/* modules/contrib/cavalla/modules/cavalla_content_types/cavalla_blog/templates/paragraph--cavalla-blog-popular-post.html.twig */
class __TwigTemplate_6f2021b8a4806b510beda341dad7a9c36fa42af2420162df99c2a2faa2ddd712 extends \Twig\Template
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
        echo "<section class=\"list-group my-2\" aria-label=\"Popular Post\">
    <h2>Popular Post</h2>
    ";
        // line 3
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_cavalla_blog_popular_post", [])), "html", null, true);
        echo "
</section>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/cavalla/modules/cavalla_content_types/cavalla_blog/templates/paragraph--cavalla-blog-popular-post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 3,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"list-group my-2\" aria-label=\"Popular Post\">
    <h2>Popular Post</h2>
    {{ content.field_cavalla_blog_popular_post }}
</section>
", "modules/contrib/cavalla/modules/cavalla_content_types/cavalla_blog/templates/paragraph--cavalla-blog-popular-post.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/offapew.com/modules/contrib/cavalla/modules/cavalla_content_types/cavalla_blog/templates/paragraph--cavalla-blog-popular-post.html.twig");
    }
}
