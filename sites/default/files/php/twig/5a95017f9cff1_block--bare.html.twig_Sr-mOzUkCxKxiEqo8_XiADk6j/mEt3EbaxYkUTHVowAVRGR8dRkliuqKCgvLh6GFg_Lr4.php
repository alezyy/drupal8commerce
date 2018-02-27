<?php

/* block--bare.html.twig */
class __TwigTemplate_3ced684f54e2ebf87442efdb289ccaf635856a70f79d7839e9f9c7d33d6148f3 extends Twig_Template
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
        $__internal_b0a7535613072a00b4463cb8dd11e2a283d49fd842250a9040ba124ea03cf599 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0a7535613072a00b4463cb8dd11e2a283d49fd842250a9040ba124ea03cf599->enter($__internal_b0a7535613072a00b4463cb8dd11e2a283d49fd842250a9040ba124ea03cf599_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "block--bare.html.twig"));

        $tags = array("block" => 48);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('block'),
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

        // line 48
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_b0a7535613072a00b4463cb8dd11e2a283d49fd842250a9040ba124ea03cf599->leave($__internal_b0a7535613072a00b4463cb8dd11e2a283d49fd842250a9040ba124ea03cf599_prof);

    }

    public function block_content($context, array $blocks = array())
    {
        $__internal_0b38f0f322a17eae8890a5ea03f600f84ecf439e5b9e1465277bda86a0a24d97 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b38f0f322a17eae8890a5ea03f600f84ecf439e5b9e1465277bda86a0a24d97->enter($__internal_0b38f0f322a17eae8890a5ea03f600f84ecf439e5b9e1465277bda86a0a24d97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 49
        echo "  ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true));
        echo "
";
        
        $__internal_0b38f0f322a17eae8890a5ea03f600f84ecf439e5b9e1465277bda86a0a24d97->leave($__internal_0b38f0f322a17eae8890a5ea03f600f84ecf439e5b9e1465277bda86a0a24d97_prof);

    }

    public function getTemplateName()
    {
        return "block--bare.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  59 => 49,  47 => 48,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "block--bare.html.twig", "themes/bootstrap/templates/block/block--bare.html.twig");
    }
}
