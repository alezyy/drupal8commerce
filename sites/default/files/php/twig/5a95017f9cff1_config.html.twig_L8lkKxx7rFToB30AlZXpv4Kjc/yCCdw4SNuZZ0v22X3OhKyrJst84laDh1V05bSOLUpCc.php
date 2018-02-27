<?php

/* @webprofiler/Collector/config.html.twig */
class __TwigTemplate_5d4885b854b6fbd8455a6891737d46c43cb4f1e2bccf96f6461339edac2ec553 extends Twig_Template
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
        $__internal_d69df51e3c5ba6a592027846f1a5b8c6d08c0b7ade37038307bc78cedf4b4a92 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_d69df51e3c5ba6a592027846f1a5b8c6d08c0b7ade37038307bc78cedf4b4a92->enter($__internal_d69df51e3c5ba6a592027846f1a5b8c6d08c0b7ade37038307bc78cedf4b4a92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@webprofiler/Collector/config.html.twig"));

        $tags = array("block" => 1, "set" => 2);
        $filters = array("t" => 3, "length" => 6, "default" => 17);
        $functions = array("url" => 3);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('block', 'set'),
                array('t', 'length', 'default'),
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
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_d69df51e3c5ba6a592027846f1a5b8c6d08c0b7ade37038307bc78cedf4b4a92->leave($__internal_d69df51e3c5ba6a592027846f1a5b8c6d08c0b7ade37038307bc78cedf4b4a92_prof);

    }

    // line 1
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_be31f57bc837d2c230c5ae2139bbe39588113abaefe9c08d3515e8b83e1451ef = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_be31f57bc837d2c230c5ae2139bbe39588113abaefe9c08d3515e8b83e1451ef->enter($__internal_be31f57bc837d2c230c5ae2139bbe39588113abaefe9c08d3515e8b83e1451ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 2
        echo "    ";
        ob_start();
        // line 3
        echo "    <a href=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("webprofiler.dashboard", array("profile" => ($context["token"] ?? null)), array("fragment" => "config")), "html", null, true));
        echo "\" title=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Config")));
        echo "\">
        <img width=\"20\" height=\"28\" alt=\"";
        // line 4
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Config")));
        echo "\"
             src=\"data:image/png;base64,";
        // line 5
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["collector"] ?? null), "icon", array()), "html", null, true));
        echo "\"/>
        <span class=\"sf-toolbar-info-piece-additional sf-toolbar-status\">";
        // line 6
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? null), "getConfigNames", array())), "html", null, true));
        echo "</span>
    </a>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 9
        echo "    ";
        ob_start();
        // line 10
        echo "    <div class=\"sf-toolbar-info-piece\">
        <b>";
        // line 11
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Config get")));
        echo "</b>
        <span>";
        // line 12
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? null), "getConfigNames", array())), "html", null, true));
        echo "</span>
    </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 15
        echo "
    <div class=\"sf-toolbar-block\">
        <div class=\"sf-toolbar-icon\">";
        // line 17
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ((array_key_exists("icon", $context)) ? (_twig_default_filter(($context["icon"] ?? null), "")) : ("")), "html", null, true));
        echo "</div>
        <div class=\"sf-toolbar-info\">";
        // line 18
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ((array_key_exists("text", $context)) ? (_twig_default_filter(($context["text"] ?? null), "")) : ("")), "html", null, true));
        echo "</div>
    </div>
";
        
        $__internal_be31f57bc837d2c230c5ae2139bbe39588113abaefe9c08d3515e8b83e1451ef->leave($__internal_be31f57bc837d2c230c5ae2139bbe39588113abaefe9c08d3515e8b83e1451ef_prof);

    }

    // line 22
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3cd048b232cda0719c3425a155fa74389685a534d63689bfcfd399ba47c7b320 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cd048b232cda0719c3425a155fa74389685a534d63689bfcfd399ba47c7b320->enter($__internal_3cd048b232cda0719c3425a155fa74389685a534d63689bfcfd399ba47c7b320_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 23
        echo "    <script id=\"config\" type=\"text/template\">
        <h2 class=\"panel__title\">";
        // line 24
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Configuration")));
        echo "</h2>
        <div class=\"panel__container\">
            <table>
                <% _.each( data.config_names, function( item, key ){ %>
                <tr>
                    <th><%- key %></th>
                    <td><%= Drupal.webprofiler.helpers.frm(item) %></td>
                </tr>
                <% }); %>
            </table>

        </div>
    </script>
";
        
        $__internal_3cd048b232cda0719c3425a155fa74389685a534d63689bfcfd399ba47c7b320->leave($__internal_3cd048b232cda0719c3425a155fa74389685a534d63689bfcfd399ba47c7b320_prof);

    }

    public function getTemplateName()
    {
        return "@webprofiler/Collector/config.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  133 => 24,  130 => 23,  124 => 22,  114 => 18,  110 => 17,  106 => 15,  100 => 12,  96 => 11,  93 => 10,  90 => 9,  84 => 6,  80 => 5,  76 => 4,  69 => 3,  66 => 2,  60 => 1,  53 => 22,  50 => 21,  48 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@webprofiler/Collector/config.html.twig", "/Users/franceneralezy/PhpstormProjects/drupal-8.4.4-commerce/modules/devel/webprofiler/templates/Collector/config.html.twig");
    }
}
