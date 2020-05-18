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

/* themes/contrib/fortytwo_admin/templates/layout/page--admin--config.html.twig */
class __TwigTemplate_258c218c4d190b8c117cd0109a46e689b089c60874a23508e5eadbf0b89ca20c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 54];
        $filters = ["escape" => 51];
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
        // line 48
        echo "
<div class=\"outer-wrapper\">
  <header>
    ";
        // line 51
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
        echo "
  </header>

  ";
        // line 54
        if ($this->getAttribute(($context["page"] ?? null), "navigation", [])) {
            // line 55
            echo "    <div class=\"navigation\">
      ";
            // line 56
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "navigation", [])), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 59
        echo "
  <div class=\"wrapper\">
    ";
        // line 61
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "breadcrumb", [])), "html", null, true);
        echo "

    <section class=\"content column admin-config-page\">
      ";
        // line 64
        if (($context["messages"] ?? null)) {
            // line 65
            echo "        <div class=\"messages\">
          ";
            // line 66
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["messages"] ?? null)), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 69
        echo "      ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "help", [])), "html", null, true);
        echo "

      ";
        // line 71
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", [])) {
            // line 72
            echo "        <div class=\"highlighted\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
            echo "</div>
      ";
        }
        // line 74
        echo "
      <a id=\"main-content\" tabindex=\"-1\"></a>

      ";
        // line 77
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
    </section>

    ";
        // line 80
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 81
            echo "      <aside class=\"column sidebar first\">
        ";
            // line 82
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
            echo "
      </aside>  <!-- End first aside. -->
    ";
        }
        // line 85
        echo "
    ";
        // line 86
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
            // line 87
            echo "      <aside class=\"column sidebar second\">
        ";
            // line 88
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
            echo "
      </aside> <!-- End second aside. -->
    ";
        }
        // line 91
        echo "
  </div>

  ";
        // line 94
        if (($this->getAttribute(($context["page"] ?? null), "footer", []) || ($context["theme_credit"] ?? null))) {
            // line 95
            echo "    <footer>
      ";
            // line 96
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer", [])), "html", null, true);
            echo "
      ";
            // line 97
            if (($context["theme_credit"] ?? null)) {
                // line 98
                echo "        <div class = \"theme-credit\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["theme_credit"] ?? null)), "html", null, true);
                echo "</div>
      ";
            }
            // line 100
            echo "    </footer>
  ";
        }
        // line 102
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "themes/contrib/fortytwo_admin/templates/layout/page--admin--config.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 102,  170 => 100,  164 => 98,  162 => 97,  158 => 96,  155 => 95,  153 => 94,  148 => 91,  142 => 88,  139 => 87,  137 => 86,  134 => 85,  128 => 82,  125 => 81,  123 => 80,  117 => 77,  112 => 74,  106 => 72,  104 => 71,  98 => 69,  92 => 66,  89 => 65,  87 => 64,  81 => 61,  77 => 59,  71 => 56,  68 => 55,  66 => 54,  60 => 51,  55 => 48,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/fortytwo_admin/templates/layout/page--admin--config.html.twig", "/app/web/themes/contrib/fortytwo_admin/templates/layout/page--admin--config.html.twig");
    }
}
