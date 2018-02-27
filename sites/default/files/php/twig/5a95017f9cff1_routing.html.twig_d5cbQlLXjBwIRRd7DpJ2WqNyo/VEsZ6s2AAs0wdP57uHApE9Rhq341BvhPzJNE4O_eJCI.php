<?php

/* @webprofiler/Collector/routing.html.twig */
class __TwigTemplate_ba5dc26b6f3ff2198e2955eb9f5f17acf8d0b9b7cab4cb3fd7dc3672f4093db1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c2a4dba86b1571fd41469b404bd34dade8c51e2a633553958650ae0cf0ee4df5 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2a4dba86b1571fd41469b404bd34dade8c51e2a633553958650ae0cf0ee4df5->enter($__internal_c2a4dba86b1571fd41469b404bd34dade8c51e2a633553958650ae0cf0ee4df5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@webprofiler/Collector/routing.html.twig"));

        $tags = array("block" => 1, "set" => 2);
        $filters = array("t" => 3, "default" => 19);
        $functions = array("url" => 3);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('block', 'set'),
                array('t', 'default'),
                array('url')
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

        // line 1
        $this->displayBlock('toolbar', $context, $blocks);
        // line 23
        echo "
";
        // line 24
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_c2a4dba86b1571fd41469b404bd34dade8c51e2a633553958650ae0cf0ee4df5->leave($__internal_c2a4dba86b1571fd41469b404bd34dade8c51e2a633553958650ae0cf0ee4df5_prof);

    }

    // line 1
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_84757b950ef7d88372586a3b0adcae6af8606f7b14ab0d53d6f036e69bb632f8 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_84757b950ef7d88372586a3b0adcae6af8606f7b14ab0d53d6f036e69bb632f8->enter($__internal_84757b950ef7d88372586a3b0adcae6af8606f7b14ab0d53d6f036e69bb632f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 2
        echo "    ";
        ob_start();
        // line 3
        echo "    <a href=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("webprofiler.dashboard", array("profile" => ($context["token"] ?? null)), array("fragment" => "routing")), "html", null, true));
        echo "\" title=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Routing")));
        echo "\">
        <img width=\"20\" height=\"28\" alt=\"";
        // line 4
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Routing")));
        echo "\"
             src=\"data:image/png;base64,";
        // line 5
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["collector"] ?? null), "icon", array()), "html", null, true));
        echo "\">
        <span class=\"sf-toolbar-info-piece-additional sf-toolbar-status\">";
        // line 6
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["collector"] ?? null), "getRoutesCount", array()), "html", null, true));
        echo "</span>
    </a>

    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 10
        echo "
    ";
        // line 11
        ob_start();
        // line 12
        echo "    <div class=\"sf-toolbar-info-piece\">
        <b>";
        // line 13
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Routes")));
        echo "</b>
        <span>";
        // line 14
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["collector"] ?? null), "getRoutesCount", array()), "html", null, true));
        echo "</span>
    </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 17
        echo "
    <div class=\"sf-toolbar-block\">
        <div class=\"sf-toolbar-icon\">";
        // line 19
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ((array_key_exists("icon", $context)) ? (_twig_default_filter(($context["icon"] ?? null), "")) : ("")), "html", null, true));
        echo "</div>
        <div class=\"sf-toolbar-info\">";
        // line 20
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ((array_key_exists("text", $context)) ? (_twig_default_filter(($context["text"] ?? null), "")) : ("")), "html", null, true));
        echo "</div>
    </div>
";
        
        $__internal_84757b950ef7d88372586a3b0adcae6af8606f7b14ab0d53d6f036e69bb632f8->leave($__internal_84757b950ef7d88372586a3b0adcae6af8606f7b14ab0d53d6f036e69bb632f8_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bd719c6a61cd88a55866baac75c915dfbb749835fe7530c236fbfa2e39312a69 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd719c6a61cd88a55866baac75c915dfbb749835fe7530c236fbfa2e39312a69->enter($__internal_bd719c6a61cd88a55866baac75c915dfbb749835fe7530c236fbfa2e39312a69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <script id=\"routing\" type=\"text/template\">
        <h2 class=\"panel__title\">";
        // line 26
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Routing")));
        echo "</h2>
        <div class=\"panel__container\">
            <table class=\"table--duo\">
                <thead>
                <tr>
                    <th>";
        // line 31
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("name")));
        echo "</th>
                    <th>";
        // line 32
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("path")));
        echo "</th>
                </tr>
                </thead>
                <tbody>
                <% _.each( data.routing, function( item ){ %>
                    <tr>
                        <td>
                            <%- item.name %>
                        </td>
                        <td>
                            <%- item.path %>
                        </td>
                    </tr>
                <% }); %>
                </tbody>
            </table>
        </div>
    </script>
";
        
        $__internal_bd719c6a61cd88a55866baac75c915dfbb749835fe7530c236fbfa2e39312a69->leave($__internal_bd719c6a61cd88a55866baac75c915dfbb749835fe7530c236fbfa2e39312a69_prof);

    }

    public function getTemplateName()
    {
        return "@webprofiler/Collector/routing.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  148 => 32,  144 => 31,  136 => 26,  133 => 25,  127 => 24,  117 => 20,  113 => 19,  109 => 17,  103 => 14,  99 => 13,  96 => 12,  94 => 11,  91 => 10,  84 => 6,  80 => 5,  76 => 4,  69 => 3,  66 => 2,  60 => 1,  53 => 24,  50 => 23,  48 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@webprofiler/Collector/routing.html.twig", "/Users/franceneralezy/PhpstormProjects/drupal-8.4.4-commerce/modules/devel/webprofiler/templates/Collector/routing.html.twig");
    }
}
