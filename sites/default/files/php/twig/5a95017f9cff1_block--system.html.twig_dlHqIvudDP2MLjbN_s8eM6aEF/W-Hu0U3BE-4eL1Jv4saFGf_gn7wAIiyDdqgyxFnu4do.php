<?php

/* themes/bootstrap/templates/block/block--system.html.twig */
class __TwigTemplate_de8241ed9d1aed095485212e5dd12015219a210b09bb9c6153a8a213cefa1666 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 9
        $this->parent = $this->loadTemplate("block--bare.html.twig", "themes/bootstrap/templates/block/block--system.html.twig", 9);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "block--bare.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_08a472d59e44f07ab17d5a278a3d05700b5061b587f98cb50125a7d452a98dfb = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_08a472d59e44f07ab17d5a278a3d05700b5061b587f98cb50125a7d452a98dfb->enter($__internal_08a472d59e44f07ab17d5a278a3d05700b5061b587f98cb50125a7d452a98dfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/bootstrap/templates/block/block--system.html.twig"));

        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
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

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_08a472d59e44f07ab17d5a278a3d05700b5061b587f98cb50125a7d452a98dfb->leave($__internal_08a472d59e44f07ab17d5a278a3d05700b5061b587f98cb50125a7d452a98dfb_prof);

    }

    public function getTemplateName()
    {
        return "themes/bootstrap/templates/block/block--system.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 9,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/bootstrap/templates/block/block--system.html.twig", "/Users/franceneralezy/PhpstormProjects/drupal-8.4.4-commerce/themes/bootstrap/templates/block/block--system.html.twig");
    }
}
