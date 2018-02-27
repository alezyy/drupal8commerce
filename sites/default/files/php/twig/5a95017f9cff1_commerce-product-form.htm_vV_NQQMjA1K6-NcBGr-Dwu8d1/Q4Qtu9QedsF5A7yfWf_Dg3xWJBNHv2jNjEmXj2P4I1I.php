<?php

/* modules/contrib/commerce/modules/product/templates/commerce-product-form.html.twig */
class __TwigTemplate_7bd54b416f2ce5d33eeadfd9b89c184d08934bd1d93507e0bd5bdccc799e5bd9 extends Twig_Template
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
        $__internal_25b485c4df79217d580640bc538a18aaab91f8cbbcc450ebcd18f5d6ce2e1426 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_25b485c4df79217d580640bc538a18aaab91f8cbbcc450ebcd18f5d6ce2e1426->enter($__internal_25b485c4df79217d580640bc538a18aaab91f8cbbcc450ebcd18f5d6ce2e1426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modules/contrib/commerce/modules/product/templates/commerce-product-form.html.twig"));

        $tags = array();
        $filters = array("without" => 14);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
                array('without'),
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

        // line 12
        echo "<div class=\"layout-product-form clearfix\">
  <div class=\"layout-region layout-region-product-main\">
    ";
        // line 14
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_without(($context["form"] ?? null), "advanced", "footer", "actions"), "html", null, true));
        echo "
  </div>
  <div class=\"layout-region layout-region-product-secondary\">
    ";
        // line 17
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["form"] ?? null), "advanced", array()), "html", null, true));
        echo "
  </div>
  <div class=\"layout-region layout-region-product-footer\">
    <div class=\"layout-region-product-footer__content\">
      ";
        // line 21
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["form"] ?? null), "footer", array()), "html", null, true));
        echo "
      ";
        // line 22
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["form"] ?? null), "actions", array()), "html", null, true));
        echo "
    </div>
  </div>
</div>
";
        
        $__internal_25b485c4df79217d580640bc538a18aaab91f8cbbcc450ebcd18f5d6ce2e1426->leave($__internal_25b485c4df79217d580640bc538a18aaab91f8cbbcc450ebcd18f5d6ce2e1426_prof);

    }

    public function getTemplateName()
    {
        return "modules/contrib/commerce/modules/product/templates/commerce-product-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 22,  63 => 21,  56 => 17,  50 => 14,  46 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/contrib/commerce/modules/product/templates/commerce-product-form.html.twig", "/Users/franceneralezy/PhpstormProjects/drupal-8.4.4-commerce/modules/contrib/commerce/modules/product/templates/commerce-product-form.html.twig");
    }
}
