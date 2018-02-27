<?php

/* @webprofiler/Collector/http.html.twig */
class __TwigTemplate_c30c2c4114aa16279b46465fd792c34ac1f72c9e35925f27c38482c049692898 extends Twig_Template
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
        $__internal_d657166ceebf74b577f5102411a13d736f584345a3f2b810d5ed5e20b6f852b1 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_d657166ceebf74b577f5102411a13d736f584345a3f2b810d5ed5e20b6f852b1->enter($__internal_d657166ceebf74b577f5102411a13d736f584345a3f2b810d5ed5e20b6f852b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@webprofiler/Collector/http.html.twig"));

        $tags = array("block" => 1, "set" => 2);
        $filters = array("t" => 3, "default" => 21);
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
        // line 25
        echo "
";
        // line 26
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_d657166ceebf74b577f5102411a13d736f584345a3f2b810d5ed5e20b6f852b1->leave($__internal_d657166ceebf74b577f5102411a13d736f584345a3f2b810d5ed5e20b6f852b1_prof);

    }

    // line 1
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_96e82cc16b7bfd97f4ee4eed63e1c011956755e700f640669f77e6d45d01e214 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_96e82cc16b7bfd97f4ee4eed63e1c011956755e700f640669f77e6d45d01e214->enter($__internal_96e82cc16b7bfd97f4ee4eed63e1c011956755e700f640669f77e6d45d01e214_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 2
        echo "    ";
        ob_start();
        // line 3
        echo "    <a href=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("webprofiler.dashboard", array("profile" => ($context["token"] ?? null)), array("fragment" => "http")), "html", null, true));
        echo "\" title=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Http")));
        echo "\">
        <img width=\"20\" height=\"28\" alt=\"";
        // line 4
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Http")));
        echo "\"
             src=\"data:image/png;base64,";
        // line 5
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["collector"] ?? null), "icon", array()), "html", null, true));
        echo "\"/>
        <span class=\"sf-toolbar-info-piece-additional sf-toolbar-status\">";
        // line 6
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["collector"] ?? null), "completedRequestsCount", array()), "html", null, true));
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
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Completed")));
        echo "</b>
        <span>";
        // line 12
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["collector"] ?? null), "completedRequestsCount", array()), "html", null, true));
        echo "</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
      <b>";
        // line 15
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Failed")));
        echo "</b>
      <span>";
        // line 16
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["collector"] ?? null), "failedRequestsCount", array()), "html", null, true));
        echo "</span>
    </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 19
        echo "
    <div class=\"sf-toolbar-block\">
        <div class=\"sf-toolbar-icon\">";
        // line 21
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ((array_key_exists("icon", $context)) ? (_twig_default_filter(($context["icon"] ?? null), "")) : ("")), "html", null, true));
        echo "</div>
        <div class=\"sf-toolbar-info\">";
        // line 22
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ((array_key_exists("text", $context)) ? (_twig_default_filter(($context["text"] ?? null), "")) : ("")), "html", null, true));
        echo "</div>
    </div>
";
        
        $__internal_96e82cc16b7bfd97f4ee4eed63e1c011956755e700f640669f77e6d45d01e214->leave($__internal_96e82cc16b7bfd97f4ee4eed63e1c011956755e700f640669f77e6d45d01e214_prof);

    }

    // line 26
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a328ab0d88b052c2d0573551a928cef5fe78c0fffff74d357e5842da130378c0 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_a328ab0d88b052c2d0573551a928cef5fe78c0fffff74d357e5842da130378c0->enter($__internal_a328ab0d88b052c2d0573551a928cef5fe78c0fffff74d357e5842da130378c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 27
        echo "    <script id=\"http\" type=\"text/template\">
        <h2 class=\"panel__title\">";
        // line 28
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Http")));
        echo "</h2>

        <% if( data.completed.length != 0 || data.failed.length != 0){ %>
        <% _.each( data.completed, function( item ) { %>
        <div class=\"panel__container\">
            <div class=\"panel__expand-header\">
                <ul class=\"list--inline\">
                    <li>
                        <b>";
        // line 36
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Host")));
        echo "</b>: <%- item.request.uri.host %>
                    </li>
                    <li>
                        <b>";
        // line 39
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Path")));
        echo "</b>: <%- item.request.uri.path %>
                    </li>
                    <li>
                        <b>";
        // line 42
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Status")));
        echo "</b>: <%- item.response.status %> <%- item.response.phrase %>
                    </li>
                </ul>
                <div class=\"button--flat l-right js--panel-toggle\">";
        // line 45
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Info")));
        echo "</div>
            </div>

            <div class=\"panel__expand-content\">
                <table class=\"table--duo\">
                    <% _.each( item.request, function( message, key ) { %>

                    <% if(key == 'stats') { key = 'stats (time in milliseconds and data in bytes)' } %>

                    <tr>
                        <th><%- key %></th>
                        <td><%= Drupal.webprofiler.helpers.frm(message) %></td>
                    </tr>
                    <% }); %>
                </table>
                <table class=\"table--duo\">
                    <% _.each( item.response, function( header, key ) { %>
                    <tr>
                        <th><%- key %></th>
                        <td><%= Drupal.webprofiler.helpers.frm(header) %></td>
                    </tr>
                    <% }); %>
                </table>
            </div>
        </div>
        <% }); %>
        <% } else { %>
        <div class=\"panel__container\">
            <p>";
        // line 73
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("No external http calls")));
        echo "</p>
        </div>
        <% } %>
    </script>
";
        
        $__internal_a328ab0d88b052c2d0573551a928cef5fe78c0fffff74d357e5842da130378c0->leave($__internal_a328ab0d88b052c2d0573551a928cef5fe78c0fffff74d357e5842da130378c0_prof);

    }

    public function getTemplateName()
    {
        return "@webprofiler/Collector/http.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  203 => 73,  172 => 45,  166 => 42,  160 => 39,  154 => 36,  143 => 28,  140 => 27,  134 => 26,  124 => 22,  120 => 21,  116 => 19,  110 => 16,  106 => 15,  100 => 12,  96 => 11,  93 => 10,  90 => 9,  84 => 6,  80 => 5,  76 => 4,  69 => 3,  66 => 2,  60 => 1,  53 => 26,  50 => 25,  48 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@webprofiler/Collector/http.html.twig", "/Users/franceneralezy/PhpstormProjects/drupal-8.4.4-commerce/modules/devel/webprofiler/templates/Collector/http.html.twig");
    }
}
