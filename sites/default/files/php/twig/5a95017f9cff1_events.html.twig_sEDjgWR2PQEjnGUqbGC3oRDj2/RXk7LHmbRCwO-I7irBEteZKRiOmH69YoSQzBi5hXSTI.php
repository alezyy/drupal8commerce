<?php

/* @webprofiler/Collector/events.html.twig */
class __TwigTemplate_aee68346e15de8db7b4c7c038b6110a8afd494e75164c7dde46c6c629b62bb6f extends Twig_Template
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
        $__internal_97b7cd8089658df117989b7018c93aefa8360b1215fd0a209b66d04dbf686291 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_97b7cd8089658df117989b7018c93aefa8360b1215fd0a209b66d04dbf686291->enter($__internal_97b7cd8089658df117989b7018c93aefa8360b1215fd0a209b66d04dbf686291_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@webprofiler/Collector/events.html.twig"));

        $tags = array("block" => 1, "set" => 2);
        $filters = array("t" => 3, "default" => 23);
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
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_97b7cd8089658df117989b7018c93aefa8360b1215fd0a209b66d04dbf686291->leave($__internal_97b7cd8089658df117989b7018c93aefa8360b1215fd0a209b66d04dbf686291_prof);

    }

    // line 1
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f7c46c7881bbdab9c4cdf3fbc13fa44b85aa870b4549b6c3f0d2ef8447bf7df5 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7c46c7881bbdab9c4cdf3fbc13fa44b85aa870b4549b6c3f0d2ef8447bf7df5->enter($__internal_f7c46c7881bbdab9c4cdf3fbc13fa44b85aa870b4549b6c3f0d2ef8447bf7df5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 2
        echo "    ";
        ob_start();
        // line 3
        echo "        <a href=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("webprofiler.dashboard", array("profile" => ($context["token"] ?? null)), array("fragment" => "events")), "html", null, true));
        echo "\" title=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Events")));
        echo "\">
            <img width=\"20\" height=\"28\" alt=\"";
        // line 4
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Events")));
        echo "\"
                 src=\"data:image/png;base64,";
        // line 5
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["collector"] ?? null), "icon", array()), "html", null, true));
        echo "\">
            <span class=\"sf-toolbar-info-piece-additional sf-toolbar-status\">";
        // line 6
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["collector"] ?? null), "getCalledListenersCount", array()), "html", null, true));
        echo "</span>
        </a>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 9
        echo "
    ";
        // line 10
        ob_start();
        // line 11
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>";
        // line 12
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Called")));
        echo "</b>
            <span>";
        // line 13
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["collector"] ?? null), "getCalledListenersCount", array()), "html", null, true));
        echo "</span>
        </div>

        <div class=\"sf-toolbar-info-piece\">
            <b>";
        // line 17
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Not called")));
        echo "</b>
            <span>";
        // line 18
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["collector"] ?? null), "getNotCalledListenersCount", array()), "html", null, true));
        echo "</span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 21
        echo "
    <div class=\"sf-toolbar-block\">
        <div class=\"sf-toolbar-icon\">";
        // line 23
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ((array_key_exists("icon", $context)) ? (_twig_default_filter(($context["icon"] ?? null), "")) : ("")), "html", null, true));
        echo "</div>
        <div class=\"sf-toolbar-info\">";
        // line 24
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ((array_key_exists("text", $context)) ? (_twig_default_filter(($context["text"] ?? null), "")) : ("")), "html", null, true));
        echo "</div>
    </div>
";
        
        $__internal_f7c46c7881bbdab9c4cdf3fbc13fa44b85aa870b4549b6c3f0d2ef8447bf7df5->leave($__internal_f7c46c7881bbdab9c4cdf3fbc13fa44b85aa870b4549b6c3f0d2ef8447bf7df5_prof);

    }

    // line 28
    public function block_panel($context, array $blocks = array())
    {
        $__internal_057e3423ba9b1ffecdf9f75dc4ca2f9b6c27084107c1d6fe75464df2c5f2d558 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_057e3423ba9b1ffecdf9f75dc4ca2f9b6c27084107c1d6fe75464df2c5f2d558->enter($__internal_057e3423ba9b1ffecdf9f75dc4ca2f9b6c27084107c1d6fe75464df2c5f2d558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 29
        echo "    <script id=\"events\" type=\"text/template\">

        <h2 class=\"panel__title\">";
        // line 31
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Events")));
        echo "</h2>
        <div class=\"panel__container\">

            <table class=\"table--duo\">
                <thead>
                <th>";
        // line 36
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Called listeners")));
        echo "</th>
                <th>";
        // line 37
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Class")));
        echo "</th>
                <th>";
        // line 38
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Priority")));
        echo "</th>
                </thead>
                <tbody>
                <% _.each( data.called_listeners, function( events, event_name ){ %>
                    <% _.each( events, function( priority, priority_value ){ %>
                        <% _.each( priority, function( listener ){ %>
                            <tr>
                                <td><%= event_name %></td>
                                <% if( listener.clazz ) { %>
                                    <td><%= Drupal.webprofiler.helpers.classLink(listener.clazz) %></td>
                                <% } else { %>
                                    <td><%= listener.service[0] %>::<%= listener.service[1] %></td>
                                <% } %>
                                <td><%= priority_value %></td>
                            </tr>
                        <% }); %>
                    <% }); %>
                <% }); %>
                </tbody>
            </table>

            <table class=\"table--duo\">
                <thead>
                <th>";
        // line 61
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Not called listeners")));
        echo "</th>
                <th>";
        // line 62
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Service")));
        echo "</th>
                <th>";
        // line 63
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Priority")));
        echo "</th>
                </thead>
                <tbody>
                <% _.each( data.not_called_listeners, function( events, event_name ){ %>
                <% _.each( events, function( priority, priority_value ){ %>
                <% _.each( priority, function( listener ){ %>
                <tr>
                    <td><%= event_name %></td>
                    <td><%= listener.service[0] %>::<%= listener.service[1] %></td>
                    <td><%= priority_value %></td>
                </tr>
                <% }); %>
                <% }); %>
                <% }); %>
                </tbody>
            </table>
        </div>

    </script>
";
        
        $__internal_057e3423ba9b1ffecdf9f75dc4ca2f9b6c27084107c1d6fe75464df2c5f2d558->leave($__internal_057e3423ba9b1ffecdf9f75dc4ca2f9b6c27084107c1d6fe75464df2c5f2d558_prof);

    }

    public function getTemplateName()
    {
        return "@webprofiler/Collector/events.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  197 => 63,  193 => 62,  189 => 61,  163 => 38,  159 => 37,  155 => 36,  147 => 31,  143 => 29,  137 => 28,  127 => 24,  123 => 23,  119 => 21,  113 => 18,  109 => 17,  102 => 13,  98 => 12,  95 => 11,  93 => 10,  90 => 9,  84 => 6,  80 => 5,  76 => 4,  69 => 3,  66 => 2,  60 => 1,  53 => 28,  50 => 27,  48 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@webprofiler/Collector/events.html.twig", "/Users/franceneralezy/PhpstormProjects/drupal-8.4.4-commerce/modules/devel/webprofiler/templates/Collector/events.html.twig");
    }
}
