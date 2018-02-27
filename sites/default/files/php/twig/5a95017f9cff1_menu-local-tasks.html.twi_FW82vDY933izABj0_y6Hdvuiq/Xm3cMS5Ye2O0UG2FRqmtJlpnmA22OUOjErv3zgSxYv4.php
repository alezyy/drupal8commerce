<?php

/* themes/bootstrap/templates/menu/menu-local-tasks.html.twig */
class __TwigTemplate_7e67f16dcf456cb2136823bf8e8ad4cdd24aaa753cbb3a000ebed7696d152bd2 extends Twig_Template
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
        $__internal_458b2b33de91b2cbef5275f9ffc7bc5028af0c152eca6a5765163669e743e44e = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_458b2b33de91b2cbef5275f9ffc7bc5028af0c152eca6a5765163669e743e44e->enter($__internal_458b2b33de91b2cbef5275f9ffc7bc5028af0c152eca6a5765163669e743e44e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/bootstrap/templates/menu/menu-local-tasks.html.twig"));

        $tags = array("if" => 18);
        $filters = array("t" => 19);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array('t'),
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

        // line 18
        if (($context["primary"] ?? null)) {
            // line 19
            echo "  <h2 class=\"visually-hidden\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Primary tabs")));
            echo "</h2>
  <ul class=\"tabs--primary nav nav-tabs\">";
            // line 20
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["primary"] ?? null), "html", null, true));
            echo "</ul>
";
        }
        // line 22
        if (($context["secondary"] ?? null)) {
            // line 23
            echo "  <h2 class=\"visually-hidden\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Secondary tabs")));
            echo "</h2>
  <ul class=\"tabs--secondary pagination pagination-sm\">";
            // line 24
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["secondary"] ?? null), "html", null, true));
            echo "</ul>
";
        }
        
        $__internal_458b2b33de91b2cbef5275f9ffc7bc5028af0c152eca6a5765163669e743e44e->leave($__internal_458b2b33de91b2cbef5275f9ffc7bc5028af0c152eca6a5765163669e743e44e_prof);

    }

    public function getTemplateName()
    {
        return "themes/bootstrap/templates/menu/menu-local-tasks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 24,  60 => 23,  58 => 22,  53 => 20,  48 => 19,  46 => 18,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/bootstrap/templates/menu/menu-local-tasks.html.twig", "/Users/franceneralezy/PhpstormProjects/drupal-8.4.4-commerce/themes/bootstrap/templates/menu/menu-local-tasks.html.twig");
    }
}
