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

/* @molecules/pager/pager.twig */
class __TwigTemplate_2ea88f0958a07eeefc7c66532d1cc436333e9130923c144e941f20aee14e5cb7 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 32, "if" => 34, "for" => 52];
        $filters = ["escape" => 35, "t" => 36, "without" => 41, "default" => 43];
        $functions = ["bem" => 35];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['escape', 't', 'without', 'default'],
                ['bem']
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
        // line 32
        $context["pager__base_class"] = "pager";
        // line 33
        echo "
";
        // line 34
        if (($context["items"] ?? null)) {
            // line 35
            echo "  <nav ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\emulsify_twig\BemTwigExtension')->bem($context, $this->sandbox->ensureToStringAllowed(($context["pager__base_class"] ?? null))), "html", null, true);
            echo " role=\"navigation\" aria-labelledby=\"pagination-heading";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pager__uid"] ?? null)), "html", null, true);
            echo "\">
    <h4 id=\"pagination-heading";
            // line 36
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pager__uid"] ?? null)), "html", null, true);
            echo "\" ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\emulsify_twig\BemTwigExtension')->bem($context, "visually-hidden"), "html", null, true);
            echo ">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Pagination"));
            echo "</h4>
    <ul ";
            // line 37
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\emulsify_twig\BemTwigExtension')->bem($context, "items", [], $this->sandbox->ensureToStringAllowed(($context["pager__base_class"] ?? null)), [0 => "js-pager__items"]), "html", null, true);
            echo ">
      ";
            // line 39
            echo "      ";
            if ($this->getAttribute(($context["items"] ?? null), "previous", [])) {
                // line 40
                echo "        <li ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\emulsify_twig\BemTwigExtension')->bem($context, "item", [0 => "prev"], $this->sandbox->ensureToStringAllowed(($context["pager__base_class"] ?? null))), "html", null, true);
                echo ">
          <a ";
                // line 41
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\emulsify_twig\BemTwigExtension')->bem($context, "link", [0 => "prev"], $this->sandbox->ensureToStringAllowed(($context["pager__base_class"] ?? null))), "html", null, true);
                echo " href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["items"] ?? null), "previous", []), "href", [])), "html", null, true);
                echo "\" title=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Go to previous page"));
                echo "\" rel=\"prev\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["items"] ?? null), "previous", []), "attributes", [])), "href", "title", "rel"), "html", null, true);
                echo ">
            <span ";
                // line 42
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\emulsify_twig\BemTwigExtension')->bem($context, "visually-hidden"), "html", null, true);
                echo ">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Previous page"));
                echo "</span>
            <span aria-hidden=\"true\">";
                // line 43
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($this->getAttribute($this->getAttribute(($context["items"] ?? null), "previous", [], "any", false, true), "text", [], "any", true, true)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["items"] ?? null), "previous", [], "any", false, true), "text", [])), t("‹ Previous"))) : (t("‹ Previous"))), "html", null, true);
                echo "</span>
          </a>
        </li>
      ";
            }
            // line 47
            echo "      ";
            // line 48
            echo "      ";
            if ($this->getAttribute(($context["ellipses"] ?? null), "previous", [])) {
                // line 49
                echo "        <li ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\emulsify_twig\BemTwigExtension')->bem($context, "item", [0 => "ellipsis"], $this->sandbox->ensureToStringAllowed(($context["pager__base_class"] ?? null))), "html", null, true);
                echo " role=\"presentation\">&hellip;</li>
      ";
            }
            // line 51
            echo "      ";
            // line 52
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["items"] ?? null), "pages", []));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 53
                echo "        ";
                $context["current_class"] = (((($context["current"] ?? null) == $context["key"])) ? (" is-active") : (""));
                // line 54
                echo "        <li ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\emulsify_twig\BemTwigExtension')->bem($context, "item", [], $this->sandbox->ensureToStringAllowed(($context["pager__base_class"] ?? null)), [0 => ($context["current_class"] ?? null)]), "html", null, true);
                echo ">
          ";
                // line 55
                $context["title"] = (((($context["current"] ?? null) == $context["key"])) ? (t("Current page")) : (t("Go to page @key", ["@key" => $context["key"]])));
                // line 56
                echo "          <a ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\emulsify_twig\BemTwigExtension')->bem($context, "link", [], $this->sandbox->ensureToStringAllowed(($context["pager__base_class"] ?? null)), [0 => ($context["current_class"] ?? null)]), "html", null, true);
                echo " href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "href", [])), "html", null, true);
                echo "\" title=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
                echo "\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "attributes", [])), "href", "title"), "html", null, true);
                echo ">
            <span ";
                // line 57
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\emulsify_twig\BemTwigExtension')->bem($context, "visually-hidden"), "html", null, true);
                echo ">
              ";
                // line 58
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["current"] ?? null) == $context["key"])) ? (t("Current page")) : (t("Page "))));
                echo "
            </span>";
                // line 60
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["key"]), "html", null, true);
                // line 61
                echo "</a>
        </li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "      ";
            // line 65
            echo "      ";
            if ($this->getAttribute(($context["ellipses"] ?? null), "next", [])) {
                // line 66
                echo "        <li ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\emulsify_twig\BemTwigExtension')->bem($context, "item", [0 => "ellipsis"], $this->sandbox->ensureToStringAllowed(($context["pager__base_class"] ?? null))), "html", null, true);
                echo " role=\"presentation\">&hellip;</li>
      ";
            }
            // line 68
            echo "      ";
            // line 69
            echo "      ";
            if ($this->getAttribute(($context["items"] ?? null), "next", [])) {
                // line 70
                echo "        <li ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\emulsify_twig\BemTwigExtension')->bem($context, "item", [0 => "next"], $this->sandbox->ensureToStringAllowed(($context["pager__base_class"] ?? null))), "html", null, true);
                echo ">
          <a ";
                // line 71
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\emulsify_twig\BemTwigExtension')->bem($context, "link", [0 => "next"], $this->sandbox->ensureToStringAllowed(($context["pager__base_class"] ?? null))), "html", null, true);
                echo " href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["items"] ?? null), "next", []), "href", [])), "html", null, true);
                echo "\" title=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Go to next page"));
                echo "\" rel=\"next\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["items"] ?? null), "next", []), "attributes", [])), "href", "title", "rel"), "html", null, true);
                echo ">
            <span ";
                // line 72
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\emulsify_twig\BemTwigExtension')->bem($context, "visually-hidden"), "html", null, true);
                echo ">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Next page"));
                echo "</span>
            <span aria-hidden=\"true\">";
                // line 73
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($this->getAttribute($this->getAttribute(($context["items"] ?? null), "next", [], "any", false, true), "text", [], "any", true, true)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["items"] ?? null), "next", [], "any", false, true), "text", [])), t("Next ›"))) : (t("Next ›"))), "html", null, true);
                echo "</span>
          </a>
        </li>
      ";
            }
            // line 77
            echo "    </ul>
  </nav>
";
        }
    }

    public function getTemplateName()
    {
        return "@molecules/pager/pager.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 77,  206 => 73,  200 => 72,  190 => 71,  185 => 70,  182 => 69,  180 => 68,  174 => 66,  171 => 65,  169 => 64,  161 => 61,  159 => 60,  155 => 58,  151 => 57,  140 => 56,  138 => 55,  133 => 54,  130 => 53,  125 => 52,  123 => 51,  117 => 49,  114 => 48,  112 => 47,  105 => 43,  99 => 42,  89 => 41,  84 => 40,  81 => 39,  77 => 37,  69 => 36,  62 => 35,  60 => 34,  57 => 33,  55 => 32,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@molecules/pager/pager.twig", "/app/web/themes/custom/dreamer_theme/components/02-molecules/pager/pager.twig");
    }
}
