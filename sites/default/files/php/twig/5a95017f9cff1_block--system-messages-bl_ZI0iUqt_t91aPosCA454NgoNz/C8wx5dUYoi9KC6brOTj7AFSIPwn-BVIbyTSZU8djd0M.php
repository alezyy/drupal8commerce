<?php

/* core/themes/stable/templates/block/block--system-messages-block.html.twig */
class __TwigTemplate_ca96e97f2d8d7a94dd6da6aa1d6428d3efca0f5287eeb42ac885329a45d3377b extends Twig_Template
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
        $__internal_b0fc972772d48de42d7ad1658b8e81a49b482f7fff3001622b87500771ce0ffd = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0fc972772d48de42d7ad1658b8e81a49b482f7fff3001622b87500771ce0ffd->enter($__internal_b0fc972772d48de42d7ad1658b8e81a49b482f7fff3001622b87500771ce0ffd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/stable/templates/block/block--system-messages-block.html.twig"));

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

        // line 13
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true));
        echo "
";
        
        $__internal_b0fc972772d48de42d7ad1658b8e81a49b482f7fff3001622b87500771ce0ffd->leave($__internal_b0fc972772d48de42d7ad1658b8e81a49b482f7fff3001622b87500771ce0ffd_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/stable/templates/block/block--system-messages-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 13,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "core/themes/stable/templates/block/block--system-messages-block.html.twig", "/Users/franceneralezy/PhpstormProjects/drupal-8.4.4-commerce/core/themes/stable/templates/block/block--system-messages-block.html.twig");
    }
}
