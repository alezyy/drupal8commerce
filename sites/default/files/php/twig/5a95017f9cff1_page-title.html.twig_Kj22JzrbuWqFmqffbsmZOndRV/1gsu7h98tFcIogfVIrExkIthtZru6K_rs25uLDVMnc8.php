<?php

/* core/themes/classy/templates/content/page-title.html.twig */
class __TwigTemplate_13b86f2f82af26e43762e99878b5f045e66cc8e0a2c06778692a8f360baef8c3 extends Twig_Template
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
        $__internal_bc38efb4c187d4df4ec4d79f95b0a0a7f046876f143f9893032e92645c2c003d = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc38efb4c187d4df4ec4d79f95b0a0a7f046876f143f9893032e92645c2c003d->enter($__internal_bc38efb4c187d4df4ec4d79f95b0a0a7f046876f143f9893032e92645c2c003d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/classy/templates/content/page-title.html.twig"));

        $tags = array("if" => 16);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
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

        // line 15
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
        echo "
";
        // line 16
        if (($context["title"] ?? null)) {
            // line 17
            echo "  <h1";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["title_attributes"] ?? null), "addClass", array(0 => "page-title"), "method"), "html", null, true));
            echo ">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
            echo "</h1>
";
        }
        // line 19
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
        echo "
";
        
        $__internal_bc38efb4c187d4df4ec4d79f95b0a0a7f046876f143f9893032e92645c2c003d->leave($__internal_bc38efb4c187d4df4ec4d79f95b0a0a7f046876f143f9893032e92645c2c003d_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/content/page-title.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 19,  52 => 17,  50 => 16,  46 => 15,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "core/themes/classy/templates/content/page-title.html.twig", "/Users/franceneralezy/PhpstormProjects/drupal-8.4.4-commerce/core/themes/classy/templates/content/page-title.html.twig");
    }
}
