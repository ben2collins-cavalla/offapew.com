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

/* themes/contrib/offapew_theme/templates/_includes/global/footer.html.twig */
class __TwigTemplate_59cd0122f716a8b4a6fe760741e99cfc18701ac017554ccf5d1b5266ab8cb76f extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 10];
        $filters = ["escape" => 7];
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
        echo "<footer class=\"page-footer\">
    <div class=\"footer-menus navbar-dark bg-dark\">
     <div class=\"container\">
       <div class=\"row\">
         <div class=\"col-md-4 col-sm-12 left_side\">
           <address class=\"grey-text text-lighten-4\">
            <h1>";
        // line 7
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["address_organization_name"] ?? null)), "html", null, true);
        echo "</h1>
            <address>
              <ul class=\"mb-0\">
                ";
        // line 10
        if (($context["address_street"] ?? null)) {
            // line 11
            echo "                <li>";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["address_street"] ?? null)), "html", null, true);
            echo "</li>
                ";
        }
        // line 13
        echo "
                ";
        // line 14
        if (($context["address_city_state_zipcode"] ?? null)) {
            // line 15
            echo "                <li>";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["address_city_state_zipcode"] ?? null)), "html", null, true);
            echo "</li>
                ";
        }
        // line 17
        echo "              </ul>
            </address>
            <div>
              <ul class=\"mb-0\">
                ";
        // line 21
        if (($context["address_phone"] ?? null)) {
            // line 22
            echo "                <li>";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["address_phone"] ?? null)), "html", null, true);
            echo "</li>
                ";
        }
        // line 24
        echo "
                ";
        // line 25
        if (($context["address_email"] ?? null)) {
            // line 26
            echo "                <li>";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["address_email"] ?? null)), "html", null, true);
            echo "</li>
                ";
        }
        // line 28
        echo "              </ul>
           </div>
         </div>
         <div class=\"col-md-8 col-sm-12 right_side\">
         <div class=\"col-md-4 col-sm-12 float-left\">
           ";
        // line 33
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_first", [])), "html", null, true);
        echo "
         </div>
         <div class=\"col-md-4 col-sm-12 float-left\">
           ";
        // line 36
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_second", [])), "html", null, true);
        echo "
         </div>
         <div class=\"col-md-4 col-sm-12 float-left\">
          <div class=\" col-12 social-links\">

            <a href=\"";
        // line 41
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook_link"] ?? null)), "html", null, true);
        echo "\" class=\"fa fa-facebook\" target=\"_blank\"></a>

            ";
        // line 43
        if (($context["twitter_link"] ?? null)) {
            // line 44
            echo "            <a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter_link"] ?? null)), "html", null, true);
            echo "\" class=\"fa fa-twitter\" target=\"_blank\"></a>
            ";
        }
        // line 46
        echo "
            ";
        // line 47
        if (($context["instagram_link"] ?? null)) {
            // line 48
            echo "            <a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["instagram_link"] ?? null)), "html", null, true);
            echo "\" class=\"fa fa-instagram\" target=\"_blank\"></a>
            ";
        }
        // line 50
        echo "
            ";
        // line 51
        if (($context["linkedin_link"] ?? null)) {
            // line 52
            echo "            <a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin_link"] ?? null)), "html", null, true);
            echo "\" class=\"fa fa-linkedin\" target=\"_blank\"></a>
            ";
        }
        // line 54
        echo "
            ";
        // line 55
        if (($context["youtube_link"] ?? null)) {
            // line 56
            echo "            <a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["youtube_link"] ?? null)), "html", null, true);
            echo "\" class=\"fa fa-youtube\" target=\"_blank\"></a>
            ";
        }
        // line 58
        echo "
          </div>
        </div>
       </div>
     </div>
    </div>
    </div>
     <div class=\"footer-copyright \">
       <div class=\"container\">
       <div class=\"copyright float-left\"> ©2015 Copyright&nbsp;";
        // line 67
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["address_organization_name"] ?? null)), "html", null, true);
        echo ".</div>
       <aside class=\"float-right legal\"> ";
        // line 68
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_third", [])), "html", null, true);
        echo "</aside>
       </div>
     </div>
   </footer>";
    }

    public function getTemplateName()
    {
        return "themes/contrib/offapew_theme/templates/_includes/global/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 68,  191 => 67,  180 => 58,  174 => 56,  172 => 55,  169 => 54,  163 => 52,  161 => 51,  158 => 50,  152 => 48,  150 => 47,  147 => 46,  141 => 44,  139 => 43,  134 => 41,  126 => 36,  120 => 33,  113 => 28,  107 => 26,  105 => 25,  102 => 24,  96 => 22,  94 => 21,  88 => 17,  82 => 15,  80 => 14,  77 => 13,  71 => 11,  69 => 10,  63 => 7,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<footer class=\"page-footer\">
    <div class=\"footer-menus navbar-dark bg-dark\">
     <div class=\"container\">
       <div class=\"row\">
         <div class=\"col-md-4 col-sm-12 left_side\">
           <address class=\"grey-text text-lighten-4\">
            <h1>{{ address_organization_name }}</h1>
            <address>
              <ul class=\"mb-0\">
                {% if address_street %}
                <li>{{ address_street }}</li>
                {% endif %}

                {% if address_city_state_zipcode %}
                <li>{{ address_city_state_zipcode }}</li>
                {% endif %}
              </ul>
            </address>
            <div>
              <ul class=\"mb-0\">
                {% if address_phone %}
                <li>{{ address_phone }}</li>
                {% endif %}

                {% if address_email %}
                <li>{{ address_email }}</li>
                {% endif %}
              </ul>
           </div>
         </div>
         <div class=\"col-md-8 col-sm-12 right_side\">
         <div class=\"col-md-4 col-sm-12 float-left\">
           {{ page.footer_first}}
         </div>
         <div class=\"col-md-4 col-sm-12 float-left\">
           {{ page.footer_second}}
         </div>
         <div class=\"col-md-4 col-sm-12 float-left\">
          <div class=\" col-12 social-links\">

            <a href=\"{{ facebook_link }}\" class=\"fa fa-facebook\" target=\"_blank\"></a>

            {% if twitter_link %}
            <a href=\"{{ twitter_link }}\" class=\"fa fa-twitter\" target=\"_blank\"></a>
            {% endif %}

            {% if instagram_link %}
            <a href=\"{{ instagram_link }}\" class=\"fa fa-instagram\" target=\"_blank\"></a>
            {% endif %}

            {% if linkedin_link %}
            <a href=\"{{ linkedin_link }}\" class=\"fa fa-linkedin\" target=\"_blank\"></a>
            {% endif %}

            {% if youtube_link %}
            <a href=\"{{ youtube_link }}\" class=\"fa fa-youtube\" target=\"_blank\"></a>
            {% endif %}

          </div>
        </div>
       </div>
     </div>
    </div>
    </div>
     <div class=\"footer-copyright \">
       <div class=\"container\">
       <div class=\"copyright float-left\"> ©2015 Copyright&nbsp;{{ address_organization_name }}.</div>
       <aside class=\"float-right legal\"> {{ page.footer_third}}</aside>
       </div>
     </div>
   </footer>", "themes/contrib/offapew_theme/templates/_includes/global/footer.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/offapew.com/themes/contrib/offapew_theme/templates/_includes/global/footer.html.twig");
    }
}
