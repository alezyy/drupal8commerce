<?php

/* themes/bootstrap/templates/menu/menu-local-task.html.twig */
class __TwigTemplate_9f45e31c2d01e22becb08f73da4c8880965bdc783f2cd42b4f15e4be1f2147df extends Twig_Template
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
        $__internal_a55df72b911eda4e434921bfec4c9a4eb78b070b4d0826cbf842ae93dff13e10 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_a55df72b911eda4e434921bfec4c9a4eb78b070b4d0826cbf842ae93dff13e10->enter($__internal_a55df72b911eda4e434921bfec4c9a4eb78b070b4d0826cbf842ae93dff13e10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/bootstrap/templates/menu/menu-local-task.html.twig"));

        $tags = array("set" => 19);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set'),
                array(),
                array()
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

        // line 19
        $context["classes"] = array(0 => ((        // line 20
($context["is_active"] ?? null)) ? ("active") : ("")));
        // line 22
        echo "<li";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
        echo ">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["link"] ?? null), "html", null, true));
        echo "</li>
";
        
        $__internal_a55df72b911eda4e434921bfec4c9a4eb78b070b4d0826cbf842ae93dff13e10->leave($__internal_a55df72b911eda4e434921bfec4c9a4eb78b070b4d0826cbf842ae93dff13e10_prof);

    }

    public function getTemplateName()
    {
        return "themes/bootstrap/templates/menu/menu-local-task.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 22,  47 => 20,  46 => 19,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/bootstrap/templates/menu/menu-local-task.html.twig", "/Users/franceneralezy/PhpstormProjects/drupal-8.4.4-commerce/themes/bootstrap/templates/menu/menu-local-task.html.twig");
    }
}
