<?php

/* core/themes/stable/templates/admin/system-modules-uninstall.html.twig */
class __TwigTemplate_ac9f9c5adf5071d5be97a6ce074621f7846e6ec3f662e32262689f68e9982799 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2d5e290accb2079665333fd005064d40286259dab7c61c905f606f4056cb69f1 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d5e290accb2079665333fd005064d40286259dab7c61c905f606f4056cb69f1->enter($__internal_2d5e290accb2079665333fd005064d40286259dab7c61c905f606f4056cb69f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/stable/templates/admin/system-modules-uninstall.html.twig"));

        $tags = array("for" => 33, "set" => 34, "if" => 44, "trans" => 46);
        $filters = array("t" => 27, "safe_join" => 57, "without" => 73);
        $functions = array("cycle" => 34);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('for', 'set', 'if', 'trans'),
                array('t', 'safe_join', 'without'),
                array('cycle')
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 22
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["form"] ?? null), "filters", array()), "html", null, true));
        echo "

<table class=\"responsive-enabled\" data-striping=\"1\">
  <thead>
    <tr>
      <th>";
        // line 27
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Uninstall")));
        echo "</th>
      <th>";
        // line 28
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Name")));
        echo "</th>
      <th>";
        // line 29
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Description")));
        echo "</th>
    </tr>
  </thead>
  <tbody>
    ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["modules"] ?? null));
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 34
            echo "      ";
            $context["zebra"] = twig_cycle(array(0 => "odd", 1 => "even"), $this->getAttribute($context["loop"], "index0", array()));
            // line 35
            echo "<tr";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["module"], "attributes", array()), "addClass", array(0 => ($context["zebra"] ?? null)), "method"), "html", null, true));
            echo ">
        <td align=\"center\">";
            // line 37
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["module"], "checkbox", array()), "html", null, true));
            // line 38
            echo "</td>
        <td>
          <label for=\"";
            // line 40
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["module"], "checkbox_id", array()), "html", null, true));
            echo "\" class=\"module-name table-filter-text-source\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["module"], "name", array()), "html", null, true));
            echo "</label>
        </td>
        <td class=\"description\">
          <span class=\"text module-description\">";
            // line 43
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["module"], "description", array()), "html", null, true));
            echo "</span>
          ";
            // line 44
            if (($this->getAttribute($context["module"], "reasons_count", array()) > 0)) {
                // line 45
                echo "            <div class=\"admin-requirements\">";
                // line 46
                echo \Drupal::translation()->formatPlural(abs($this->getAttribute(                // line 48
$context["module"], "reasons_count", array())), "The following reason prevents @module.module_name from being uninstalled:", "The following reasons prevent @module.module_name from being uninstalled:", array("@module.module_name" => $this->getAttribute(                // line 47
$context["module"], "module_name", array()), "@module.module_name" => $this->getAttribute(                // line 49
$context["module"], "module_name", array()), ));
                // line 51
                echo "              <div class=\"item-list\">
                <ul>";
                // line 53
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["module"], "validation_reasons", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["reason"]) {
                    // line 54
                    echo "<li>";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["reason"], "html", null, true));
                    echo "</li>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reason'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 56
                if ($this->getAttribute($context["module"], "required_by", array())) {
                    // line 57
                    echo "<li>";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Required by: @module-list", array("@module-list" => $this->env->getExtension('Drupal\Core\Template\TwigExtension')->safeJoin($this->env, $this->getAttribute($context["module"], "required_by", array()), ", ")))));
                    echo "</li>";
                }
                // line 59
                echo "</ul>
              </div>
            </div>
          ";
            }
            // line 63
            echo "        </td>
      </tr>
    ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 66
            echo "      <tr class=\"odd\">
        <td colspan=\"3\" class=\"empty message\">";
            // line 67
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("No modules are available to uninstall.")));
            echo "</td>
      </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "  </tbody>
</table>

";
        // line 73
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_without(($context["form"] ?? null), "filters", "modules", "uninstall"), "html", null, true));
        echo "
";
        
        $__internal_2d5e290accb2079665333fd005064d40286259dab7c61c905f606f4056cb69f1->leave($__internal_2d5e290accb2079665333fd005064d40286259dab7c61c905f606f4056cb69f1_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/stable/templates/admin/system-modules-uninstall.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 73,  177 => 70,  168 => 67,  165 => 66,  150 => 63,  144 => 59,  139 => 57,  137 => 56,  129 => 54,  125 => 53,  122 => 51,  120 => 49,  119 => 47,  118 => 48,  117 => 46,  115 => 45,  113 => 44,  109 => 43,  101 => 40,  97 => 38,  95 => 37,  90 => 35,  87 => 34,  69 => 33,  62 => 29,  58 => 28,  54 => 27,  46 => 22,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "core/themes/stable/templates/admin/system-modules-uninstall.html.twig", "/Users/franceneralezy/PhpstormProjects/drupal-8.4.4-commerce/core/themes/stable/templates/admin/system-modules-uninstall.html.twig");
    }
}
