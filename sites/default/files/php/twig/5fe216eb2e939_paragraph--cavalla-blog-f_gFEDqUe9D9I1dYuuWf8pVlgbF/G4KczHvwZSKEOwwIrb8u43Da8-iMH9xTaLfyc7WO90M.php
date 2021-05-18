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

/* modules/contrib/cavalla/modules/cavalla_widgets/modules/cavalla_blog_feeds/templates/paragraph--cavalla-blog-feeds.html.twig */
class __TwigTemplate_9de8cf12efbf91ce66cc5c165c55ab9fe63c8177ec7f9c377dd24b7e784b2865 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 3];
        $filters = ["escape" => 4];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
        echo "<!-- jumbotron-->
<div class=\"container my-5 blog_feeds\">
  ";
        // line 3
        if (twig_in_filter(true, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_cavalla_blog_feeds_header", []), 0, [], "array"))) {
            // line 4
            echo "  <h1>";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_cavalla_blog_feeds_header", [])), "html", null, true);
            echo "</h1>
  ";
        }
        // line 6
        echo "
  ";
        // line 7
        if (twig_in_filter(true, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_cavalla_blog_feeds_subtext", []), 0, [], "array"))) {
            // line 8
            echo "  <p>";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_cavalla_blog_feeds_subtext", [])), "html", null, true);
            echo "</p>
  ";
        }
        // line 10
        echo "
  ";
        // line 11
        if ((($context["display_options"] ?? null) == "Jumbotron and List")) {
            // line 12
            echo "  <section class=\"row jumbotron_list\">
    <section class=\"";
            // line 13
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["col_width"] ?? null)), "html", null, true);
            echo "\">
      ";
            // line 14
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["jumbotron_blog_feeds_main_feed"] ?? null)), "html", null, true);
            echo "
    </section>
    ";
            // line 16
            if (($context["blog_row_visible"] ?? null)) {
                // line 17
                echo "    <section class=\"col-lg-4\">
        ";
                // line 18
                if ((($context["link_option"] ?? null) == "Custom Link")) {
                    // line 19
                    echo "       <div class=\"category_link category_link d-none d-md-none d-lg-block mb-3\">
          <a href=\"";
                    // line 20
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_cavalla_blog_link", []), 0, [], "array"), "#url", [], "array")), "html", null, true);
                    echo "\">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_cavalla_blog_link", []), 0, [], "array"), "#title", [], "array")), "html", null, true);
                    echo "</a>
      </div>
      ";
                }
                // line 23
                echo "
      ";
                // line 24
                if ((($context["link_option"] ?? null) == "Default Taxonomy List")) {
                    // line 25
                    echo "      <div class=\"category_link category_link d-none d-md-none d-lg-block mb-3\">
          <a href=\"";
                    // line 26
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_cavalla_blog_feed_taxonomy", []), 0, [], "array"), "#url", [], "array")), "html", null, true);
                    echo "\"> View More ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_cavalla_blog_feed_taxonomy", []), 0, [], "array"), "#title", [], "array")), "html", null, true);
                    echo " Post</a>
      </div>
      ";
                }
                // line 29
                echo "
      <div class=\"blog_feeds_wrapper\">
        ";
                // line 31
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["jumbotron_blog_feeds"] ?? null)), "html", null, true);
                echo "
      </div>

      ";
                // line 34
                if ((($context["link_option"] ?? null) == "Custom Link")) {
                    // line 35
                    echo "       <div class=\"category_link d-lg-none\">
          <a href=\"";
                    // line 36
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_cavalla_blog_link", []), 0, [], "array"), "#url", [], "array")), "html", null, true);
                    echo "\">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_cavalla_blog_link", []), 0, [], "array"), "#title", [], "array")), "html", null, true);
                    echo "</a>
      </div>
      ";
                }
                // line 39
                echo "
      ";
                // line 40
                if ((($context["link_option"] ?? null) == "Default Taxonomy List")) {
                    // line 41
                    echo "      <div class=\"category_link d-lg-none\">
          <a href=\"";
                    // line 42
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_cavalla_blog_feed_taxonomy", []), 0, [], "array"), "#url", [], "array")), "html", null, true);
                    echo "\">View More ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_cavalla_blog_feed_taxonomy", []), 0, [], "array"), "#title", [], "array")), "html", null, true);
                    echo " Post</a>
      </div>
      ";
                }
                // line 45
                echo "
    </section>
    ";
            }
            // line 48
            echo "  </section>
  ";
        }
        // line 50
        echo "
  ";
        // line 51
        if ((($context["display_options"] ?? null) == "Cards")) {
            // line 52
            echo "  <div class=\"card-grpup card_display\">
    ";
            // line 53
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["cards_blog_feeds"] ?? null)), "html", null, true);
            echo "
    ";
            // line 54
            if ((($context["link_option"] ?? null) == "Custom Link")) {
                // line 55
                echo "     <div class=\"category_link\">
        <a href=\"";
                // line 56
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_cavalla_blog_link", []), 0, [], "array"), "#url", [], "array")), "html", null, true);
                echo "\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_cavalla_blog_link", []), 0, [], "array"), "#title", [], "array")), "html", null, true);
                echo "</a>
    </div>
    ";
            }
            // line 59
            echo "
    ";
            // line 60
            if ((($context["link_option"] ?? null) == "Default Taxonomy List")) {
                // line 61
                echo "     <div class=\"category_link\">
        <a href=\"";
                // line 62
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_cavalla_blog_feed_taxonomy", []), 0, [], "array"), "#url", [], "array")), "html", null, true);
                echo "\"> View More  ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_cavalla_blog_feed_taxonomy", []), 0, [], "array"), "#title", [], "array")), "html", null, true);
                echo " Post</a>
    </div>
    ";
            }
            // line 65
            echo "
  </div>
  ";
        }
        // line 68
        echo "  <!--Cards-->
</div>";
    }

    public function getTemplateName()
    {
        return "modules/contrib/cavalla/modules/cavalla_widgets/modules/cavalla_blog_feeds/templates/paragraph--cavalla-blog-feeds.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 68,  218 => 65,  210 => 62,  207 => 61,  205 => 60,  202 => 59,  194 => 56,  191 => 55,  189 => 54,  185 => 53,  182 => 52,  180 => 51,  177 => 50,  173 => 48,  168 => 45,  160 => 42,  157 => 41,  155 => 40,  152 => 39,  144 => 36,  141 => 35,  139 => 34,  133 => 31,  129 => 29,  121 => 26,  118 => 25,  116 => 24,  113 => 23,  105 => 20,  102 => 19,  100 => 18,  97 => 17,  95 => 16,  90 => 14,  86 => 13,  83 => 12,  81 => 11,  78 => 10,  72 => 8,  70 => 7,  67 => 6,  61 => 4,  59 => 3,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!-- jumbotron-->
<div class=\"container my-5 blog_feeds\">
  {% if true in content.field_cavalla_blog_feeds_header[0] %}
  <h1>{{ content.field_cavalla_blog_feeds_header }}</h1>
  {% endif %}

  {% if true in content.field_cavalla_blog_feeds_subtext[0] %}
  <p>{{ content.field_cavalla_blog_feeds_subtext }}</p>
  {% endif %}

  {% if display_options =='Jumbotron and List' %}
  <section class=\"row jumbotron_list\">
    <section class=\"{{ col_width }}\">
      {{ jumbotron_blog_feeds_main_feed }}
    </section>
    {% if blog_row_visible %}
    <section class=\"col-lg-4\">
        {% if link_option == 'Custom Link' %}
       <div class=\"category_link category_link d-none d-md-none d-lg-block mb-3\">
          <a href=\"{{ content.field_cavalla_blog_link[0]['#url'] }}\">{{ content.field_cavalla_blog_link[0]['#title'] }}</a>
      </div>
      {% endif %}

      {% if link_option == 'Default Taxonomy List' %}
      <div class=\"category_link category_link d-none d-md-none d-lg-block mb-3\">
          <a href=\"{{ content.field_cavalla_blog_feed_taxonomy[0]['#url'] }}\"> View More {{ content.field_cavalla_blog_feed_taxonomy[0]['#title'] }} Post</a>
      </div>
      {% endif %}

      <div class=\"blog_feeds_wrapper\">
        {{ jumbotron_blog_feeds }}
      </div>

      {% if link_option == 'Custom Link' %}
       <div class=\"category_link d-lg-none\">
          <a href=\"{{ content.field_cavalla_blog_link[0]['#url'] }}\">{{ content.field_cavalla_blog_link[0]['#title'] }}</a>
      </div>
      {% endif %}

      {% if link_option == 'Default Taxonomy List' %}
      <div class=\"category_link d-lg-none\">
          <a href=\"{{ content.field_cavalla_blog_feed_taxonomy[0]['#url'] }}\">View More {{ content.field_cavalla_blog_feed_taxonomy[0]['#title'] }} Post</a>
      </div>
      {% endif %}

    </section>
    {% endif %}
  </section>
  {% endif %}

  {% if display_options =='Cards' %}
  <div class=\"card-grpup card_display\">
    {{ cards_blog_feeds }}
    {% if link_option == 'Custom Link' %}
     <div class=\"category_link\">
        <a href=\"{{ content.field_cavalla_blog_link[0]['#url'] }}\">{{ content.field_cavalla_blog_link[0]['#title'] }}</a>
    </div>
    {% endif %}

    {% if link_option == 'Default Taxonomy List' %}
     <div class=\"category_link\">
        <a href=\"{{ content.field_cavalla_blog_feed_taxonomy[0]['#url'] }}\"> View More  {{ content.field_cavalla_blog_feed_taxonomy[0]['#title'] }} Post</a>
    </div>
    {% endif %}

  </div>
  {% endif %}
  <!--Cards-->
</div>", "modules/contrib/cavalla/modules/cavalla_widgets/modules/cavalla_blog_feeds/templates/paragraph--cavalla-blog-feeds.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/offapew.com/modules/contrib/cavalla/modules/cavalla_widgets/modules/cavalla_blog_feeds/templates/paragraph--cavalla-blog-feeds.html.twig");
    }
}
