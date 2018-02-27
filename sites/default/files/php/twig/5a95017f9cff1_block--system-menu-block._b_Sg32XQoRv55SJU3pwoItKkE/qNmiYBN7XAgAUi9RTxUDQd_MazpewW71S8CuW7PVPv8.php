<?php

/* core/modules/system/templates/block--system-menu-block.html.twig */
class __TwigTemplate_749b878e3643633fa38c2af337e75fa5b430c3b3598d85f7e8c8a86fa40e4b40 extends Twig_Template
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
        $__internal_fcc7e0f494b99a17e0940541be004756f1c76310e58a006fc7f76fd01f25ec60 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcc7e0f494b99a17e0940541be004756f1c76310e58a006fc7f76fd01f25ec60->enter($__internal_fcc7e0f494b99a17e0940541be004756f1c76310e58a006fc7f76fd01f25ec60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/modules/system/templates/block--system-menu-block.html.twig"));

        $tags = array("set" => 36, "if" => 39, "block" => 47);
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
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_without(($context["attributes"] ?? null), "role", "aria-labelledby"), "html", null, true));
        echo ">
  ";
        // line 39
        echo "  ";
        if ( !$this->getAttribute(($context["configuration"] ?? null), "label_display", array())) {
            // line 40
            echo "    ";
            $context["title_attributes"] = $this->getAttribute(($context["title_attributes"] ?? null), "addClass", array(0 => "visually-hidden"), "method");
            // line 41
            echo "  ";
        }
        // line 42
        echo "  ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
        echo "
  <h2";
        // line 43
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["title_attributes"] ?? null), "setAttribute", array(0 => "id", 1 => ($context["heading_id"] ?? null)), "method"), "html", null, true));
        echo ">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["configuration"] ?? null), "label", array()), "html", null, true));
        echo "</h2>
  ";
        // line 44
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
        echo "

  ";
        // line 47
        echo "  ";
        $this->displayBlock('content', $context, $blocks);
        // line 50
        echo "</nav>
";
        
        $__internal_fcc7e0f494b99a17e0940541be004756f1c76310e58a006fc7f76fd01f25ec60->leave($__internal_fcc7e0f494b99a17e0940541be004756f1c76310e58a006fc7f76fd01f25ec60_prof);

    }

    // line 47
    public function block_content($context, array $blocks = array())
    {
        $__internal_d590115de48fdb841ed18863e29e4526d61fde29d0ae81aa6bd401179c65137f = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_d590115de48fdb841ed18863e29e4526d61fde29d0ae81aa6bd401179c65137f->enter($__internal_d590115de48fdb841ed18863e29e4526d61fde29d0ae81aa6bd401179c65137f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 48
        echo "    ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true));
        echo "
  ";
        
        $__internal_d590115de48fdb841ed18863e29e4526d61fde29d0ae81aa6bd401179c65137f->leave($__internal_d590115de48fdb841ed18863e29e4526d61fde29d0ae81aa6bd401179c65137f_prof);

    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/block--system-menu-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 48,  92 => 47,  84 => 50,  81 => 47,  76 => 44,  70 => 43,  65 => 42,  62 => 41,  59 => 40,  56 => 39,  49 => 37,  47 => 36,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "core/modules/system/templates/block--system-menu-block.html.twig", "/Users/franceneralezy/PhpstormProjects/drupal-8.4.4-commerce/core/modules/system/templates/block--system-menu-block.html.twig");
    }
}
