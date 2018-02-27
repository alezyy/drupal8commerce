<?php

/* @webprofiler/Collector/state.html.twig */
class __TwigTemplate_06d35212ae596445f74d8b0bf0492a50a1535648f5f7aec713fc7acc2637d600 extends Twig_Template
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
        $__internal_04e2f40a003cf1cd7de7eb391f84d17e68fee796f54947d22ef960976e5184ad = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_04e2f40a003cf1cd7de7eb391f84d17e68fee796f54947d22ef960976e5184ad->enter($__internal_04e2f40a003cf1cd7de7eb391f84d17e68fee796f54947d22ef960976e5184ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@webprofiler/Collector/state.html.twig"));

        $tags = array("block" => 1, "set" => 2);
        $filters = array("t" => 3, "default" => 17);
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
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_04e2f40a003cf1cd7de7eb391f84d17e68fee796f54947d22ef960976e5184ad->leave($__internal_04e2f40a003cf1cd7de7eb391f84d17e68fee796f54947d22ef960976e5184ad_prof);

    }

    // line 1
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_611ebb6e0739890886edd3c7bec368236efd214c6bdb2e6856f6b5b3bbcc9306 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_611ebb6e0739890886edd3c7bec368236efd214c6bdb2e6856f6b5b3bbcc9306->enter($__internal_611ebb6e0739890886edd3c7bec368236efd214c6bdb2e6856f6b5b3bbcc9306_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 2
        echo "    ";
        ob_start();
        // line 3
        echo "    <a href=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("webprofiler.dashboard", array("profile" => ($context["token"] ?? null)), array("fragment" => "state")), "html", null, true));
        echo "\" title=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("State")));
        echo "\">
        <img width=\"20\" height=\"28\" alt=\"";
        // line 4
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("State")));
        echo "\"
             src=\"data:image/png;base64,";
        // line 5
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["collector"] ?? null), "icon", array()), "html", null, true));
        echo "\"/>
        <span class=\"sf-toolbar-info-piece-additional sf-toolbar-status\">";
        // line 6
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["collector"] ?? null), "getStateKeysCount", array()), "html", null, true));
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
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("State get")));
        echo "</b>
        <span>";
        // line 12
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["collector"] ?? null), "getStateKeysCount", array()), "html", null, true));
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
        
        $__internal_611ebb6e0739890886edd3c7bec368236efd214c6bdb2e6856f6b5b3bbcc9306->leave($__internal_611ebb6e0739890886edd3c7bec368236efd214c6bdb2e6856f6b5b3bbcc9306_prof);

    }

    // line 22
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a5b12dc04bc56e2e51c87dfd191dd1e460e04eed78d843723e1bf73b22b6b344 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5b12dc04bc56e2e51c87dfd191dd1e460e04eed78d843723e1bf73b22b6b344->enter($__internal_a5b12dc04bc56e2e51c87dfd191dd1e460e04eed78d843723e1bf73b22b6b344_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 23
        echo "    <script id=\"state\" type=\"text/template\">
        <h2 class=\"panel__title\">";
        // line 24
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("State")));
        echo "</h2>
        <div class=\"panel__container\">
            <table>
                <% _.each( data.state_get, function( item, key ){ %>
                <tr>
                    <th><%- key %></th>
                    <td><%= Drupal.webprofiler.helpers.frm(item) %></td>
                </tr>
                <% }); %>
            </table>
        </div>
    </script>
";
        
        $__internal_a5b12dc04bc56e2e51c87dfd191dd1e460e04eed78d843723e1bf73b22b6b344->leave($__internal_a5b12dc04bc56e2e51c87dfd191dd1e460e04eed78d843723e1bf73b22b6b344_prof);

    }

    public function getTemplateName()
    {
        return "@webprofiler/Collector/state.html.twig";
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
        return new Twig_Source("", "@webprofiler/Collector/state.html.twig", "/Users/franceneralezy/PhpstormProjects/drupal-8.4.4-commerce/modules/devel/webprofiler/templates/Collector/state.html.twig");
    }
}
