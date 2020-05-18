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

/* @organisms/grid/grid.twig */
class __TwigTemplate_cb88bda59d134ff078dc8e1585e904a4a17529f36accb6be5d70385cebbeba05 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'grid_content' => [$this, 'block_grid_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 1, "if" => 3, "include" => 16, "block" => 22, "for" => 23];
        $filters = ["default" => 1, "merge" => 8, "escape" => 21];
        $functions = ["bem" => 21];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'include', 'block', 'for'],
                ['default', 'merge', 'escape'],
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
        // line 1
        $context["grid_base_class"] = (((isset($context["grid_base_class"]) || array_key_exists("grid_base_class", $context))) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["grid_base_class"] ?? null)), "grid")) : ("grid"));
        // line 2
        echo "
";
        // line 3
        if ( !($context["grid_modifiers"] ?? null)) {
            // line 4
            echo "  ";
            $context["grid_modifiers"] = [];
        }
        // line 6
        echo "
";
        // line 7
        if (($context["page_layout_modifier"] ?? null)) {
            // line 8
            echo "  ";
            $context["grid_modifiers"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["grid_modifiers"] ?? null)), [0 => ($context["page_layout_modifier"] ?? null)]);
        }
        // line 10
        echo "
";
        // line 11
        if (($context["grid_type"] ?? null)) {
            // line 12
            echo "  ";
            $context["grid_modifiers"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["grid_modifiers"] ?? null)), [0 => ($context["grid_type"] ?? null)]);
        }
        // line 14
        echo "
";
        // line 15
        if (($context["grid_label"] ?? null)) {
            // line 16
            echo "  ";
            $this->loadTemplate("@atoms/text/headings/_heading.twig", "@organisms/grid/grid.twig", 16)->display(twig_array_merge($context, ["heading_level" => 2, "heading" =>             // line 18
($context["grid_label"] ?? null)]));
        }
        // line 21
        echo "<div ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\emulsify_twig\BemTwigExtension')->bem($context, $this->sandbox->ensureToStringAllowed(($context["grid_base_class"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["grid_modifiers"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["grid_blockname"] ?? null))), "html", null, true);
        echo ">
  ";
        // line 22
        $this->displayBlock('grid_content', $context, $blocks);
        // line 27
        echo "</div>
";
    }

    // line 22
    public function block_grid_content($context, array $blocks = [])
    {
        // line 23
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 24
            echo "      ";
            $this->loadTemplate("@organisms/grid/_grid-examples.twig", "@organisms/grid/grid.twig", 24)->display($context);
            // line 25
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "  ";
    }

    public function getTemplateName()
    {
        return "@organisms/grid/grid.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 26,  131 => 25,  128 => 24,  110 => 23,  107 => 22,  102 => 27,  100 => 22,  95 => 21,  92 => 18,  90 => 16,  88 => 15,  85 => 14,  81 => 12,  79 => 11,  76 => 10,  72 => 8,  70 => 7,  67 => 6,  63 => 4,  61 => 3,  58 => 2,  56 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@organisms/grid/grid.twig", "/app/web/themes/custom/dreamer_theme/components/03-organisms/grid/grid.twig");
    }
}
