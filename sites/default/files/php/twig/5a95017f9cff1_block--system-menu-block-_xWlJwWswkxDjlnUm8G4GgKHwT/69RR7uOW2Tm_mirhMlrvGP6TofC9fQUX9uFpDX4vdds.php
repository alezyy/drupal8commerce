<?php

/* themes/bootstrap/templates/block/block--system-menu-block--main.html.twig */
class __TwigTemplate_d18ac1ee3d3ff35a68b17191a73c2d250298170e4d3fad7ab3c2cabbecd98629 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_72d3391418302f22e0dd20032f8384f823c965bc2e82e202c7487f97afa0cba2 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_72d3391418302f22e0dd20032f8384f823c965bc2e82e202c7487f97afa0cba2->enter($__internal_72d3391418302f22e0dd20032f8384f823c965bc2e82e202c7487f97afa0cba2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/bootstrap/templates/block/block--system-menu-block--main.html.twig"));

        $tags = array("set" => 36, "if" => 39, "block" => 44);
        $filters = array("clean_id" => 36, "without" => 37);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if', 'block'),
                array('clean_id', 'without'),
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

        // line 36
        $context["heading_id"] = ($this->getAttribute(($context["attributes"] ?? null), "id", array()) . \Drupal\Component\Utility\Html::getId("-menu"));
        // line 37
        echo "<nav role=\"navigation\" aria-labelledby=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["heading_id"] ?? null), "html", null, true));
        echo "\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_without($this->getAttribute(($context["attributes"] ?? null), "removeClass", array(0 => "clearfix"), "method"), "role", "aria-labelledby"), "html", null, true));
        echo ">
  ";
        // line 39
        echo "  ";
        if ( !$this->getAttribute(($context["configuration"] ?? null), "label_display", array())) {
            // line 40
            echo "    ";
            $context["title_attributes"] = $this->getAttribute(($context["title_attributes"] ?? null), "addClass", array(0 => "sr-only"), "method");
            // line 41
            echo "  ";
        }
        // line 42
        echo "  <h2";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["title_attributes"] ?? null), "setAttribute", array(0 => "id", 1 => ($context["heading_id"] ?? null)), "method"), "html", null, true));
        echo ">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["configuration"] ?? null), "label", array()), "html", null, true));
        echo "</h2>

  ";
        // line 44
        $this->displayBlock('content', $context, $blocks);
        // line 47
        echo "</nav>
";
        
        $__internal_72d3391418302f22e0dd20032f8384f823c965bc2e82e202c7487f97afa0cba2->leave($__internal_72d3391418302f22e0dd20032f8384f823c965bc2e82e202c7487f97afa0cba2_prof);

    }

    // line 44
    public function block_content($context, array $blocks = array())
    {
        $__internal_1e65d5200863c1458513861995f2ee6ec51ec00074c26a980b9f71f198a88c36 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e65d5200863c1458513861995f2ee6ec51ec00074c26a980b9f71f198a88c36->enter($__internal_1e65d5200863c1458513861995f2ee6ec51ec00074c26a980b9f71f198a88c36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 45
        echo "    ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true));
        echo "
  ";
        
        $__internal_1e65d5200863c1458513861995f2ee6ec51ec00074c26a980b9f71f198a88c36->leave($__internal_1e65d5200863c1458513861995f2ee6ec51ec00074c26a980b9f71f198a88c36_prof);

    }

    public function getTemplateName()
    {
        return "themes/bootstrap/templates/block/block--system-menu-block--main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 45,  83 => 44,  75 => 47,  73 => 44,  65 => 42,  62 => 41,  59 => 40,  56 => 39,  49 => 37,  47 => 36,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/bootstrap/templates/block/block--system-menu-block--main.html.twig", "/Users/franceneralezy/PhpstormProjects/drupal-8.4.4-commerce/themes/bootstrap/templates/block/block--system-menu-block--main.html.twig");
    }
}
