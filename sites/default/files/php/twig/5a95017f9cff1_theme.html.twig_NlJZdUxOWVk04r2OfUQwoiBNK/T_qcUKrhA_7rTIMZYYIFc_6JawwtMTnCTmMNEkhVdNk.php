<?php

/* @webprofiler/Collector/theme.html.twig */
class __TwigTemplate_a6265342166ce0770ac04efa73301eecc8572c6a313fb2c14f64e2163055f6e5 extends Twig_Template
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
        $__internal_2f2206a436ee4df3fe9a141c94dc0e8c7818d9308e097d0b80f5720203919963 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f2206a436ee4df3fe9a141c94dc0e8c7818d9308e097d0b80f5720203919963->enter($__internal_2f2206a436ee4df3fe9a141c94dc0e8c7818d9308e097d0b80f5720203919963_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@webprofiler/Collector/theme.html.twig"));

        $tags = array("block" => 1, "set" => 2);
        $filters = array("raw" => 3, "format" => 6, "t" => 8, "default" => 47);
        $functions = array("idelink" => 3, "abbr" => 3, "url" => 8);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('block', 'set'),
                array('raw', 'format', 't', 'default'),
                array('idelink', 'abbr', 'url')
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
        // line 51
        echo "
";
        // line 52
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_2f2206a436ee4df3fe9a141c94dc0e8c7818d9308e097d0b80f5720203919963->leave($__internal_2f2206a436ee4df3fe9a141c94dc0e8c7818d9308e097d0b80f5720203919963_prof);

    }

    // line 1
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_153b2eeb6cac4dc0a056e8c97b9b527cdd2969c179755c6ee1502b52b26b7b93 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_153b2eeb6cac4dc0a056e8c97b9b527cdd2969c179755c6ee1502b52b26b7b93->enter($__internal_153b2eeb6cac4dc0a056e8c97b9b527cdd2969c179755c6ee1502b52b26b7b93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 2
        echo "    ";
        ob_start();
        // line 3
        echo "    <a href=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\webprofiler\Twig\Extension\ProfilerExtension')->getIdeLink($this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "themeNegotiator", array()), "class", array()), "file", array()), $this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "themeNegotiator", array()), "class", array()), "line", array()))));
        echo "\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\webprofiler\Twig\Extension\ProfilerExtension')->getAbbr($this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "themeNegotiator", array()), "class", array()), "class", array()))));
        echo "
        ::";
        // line 4
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "themeNegotiator", array()), "class", array()), "method", array()), "html", null, true));
        echo "</a>
    ";
        $context["negotiator"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 6
        echo "    ";
        $context["time"] = (($this->getAttribute(($context["collector"] ?? null), "templatecount", array())) ? (sprintf("%0.0f ms", $this->getAttribute(($context["collector"] ?? null), "time", array()))) : ("n/a"));
        // line 7
        echo "    ";
        ob_start();
        // line 8
        echo "    <a href=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("webprofiler.dashboard", array("profile" => ($context["token"] ?? null)), array("fragment" => "theme")), "html", null, true));
        echo "\" title=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Theme")));
        echo "\">
        <img width=\"20\" height=\"28\" alt=\"";
        // line 9
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Theme")));
        echo "\"
             src=\"data:image/png;base64,";
        // line 10
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["collector"] ?? null), "icon", array()), "html", null, true));
        echo "\"/>
        <span class=\"sf-toolbar-info-piece-additional sf-toolbar-status\">";
        // line 11
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? null), "activeTheme", array()), "name", array()), "html", null, true));
        echo "</span>
    </a>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 14
        echo "    ";
        ob_start();
        // line 15
        echo "
    <div class=\"sf-toolbar-info-piece\">
        <b>";
        // line 17
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Name")));
        echo "</b>
        <span>";
        // line 18
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? null), "activeTheme", array()), "name", array()), "html", null, true));
        echo "</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>";
        // line 21
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Engine")));
        echo "</b>
        <span>";
        // line 22
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? null), "activeTheme", array()), "engine", array()), "html", null, true));
        echo "</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>";
        // line 25
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Negotiator")));
        echo "</b>
        <span>";
        // line 26
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["negotiator"] ?? null), "html", null, true));
        echo "</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>";
        // line 29
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Render Time")));
        echo "</b>
        <span>";
        // line 30
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["time"] ?? null), "html", null, true));
        echo "</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>";
        // line 33
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Template Calls")));
        echo "</b>
        <span>";
        // line 34
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["collector"] ?? null), "templatecount", array()), "html", null, true));
        echo "</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>";
        // line 37
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Block Calls")));
        echo "</b>
        <span>";
        // line 38
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["collector"] ?? null), "blockcount", array()), "html", null, true));
        echo "</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>";
        // line 41
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Macro Calls")));
        echo "</b>
        <span>";
        // line 42
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["collector"] ?? null), "macrocount", array()), "html", null, true));
        echo "</span>
    </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 45
        echo "
    <div class=\"sf-toolbar-block\">
        <div class=\"sf-toolbar-icon\">";
        // line 47
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ((array_key_exists("icon", $context)) ? (_twig_default_filter(($context["icon"] ?? null), "")) : ("")), "html", null, true));
        echo "</div>
        <div class=\"sf-toolbar-info\">";
        // line 48
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ((array_key_exists("text", $context)) ? (_twig_default_filter(($context["text"] ?? null), "")) : ("")), "html", null, true));
        echo "</div>
    </div>
";
        
        $__internal_153b2eeb6cac4dc0a056e8c97b9b527cdd2969c179755c6ee1502b52b26b7b93->leave($__internal_153b2eeb6cac4dc0a056e8c97b9b527cdd2969c179755c6ee1502b52b26b7b93_prof);

    }

    // line 52
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2380f60b535f3897e027328d237d72d78dc8c1a1e5e41a6101b7bee9b7e32f00 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_2380f60b535f3897e027328d237d72d78dc8c1a1e5e41a6101b7bee9b7e32f00->enter($__internal_2380f60b535f3897e027328d237d72d78dc8c1a1e5e41a6101b7bee9b7e32f00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 53
        echo "    <script id=\"theme\" type=\"text/template\">
        <h2 class=\"panel__title\">";
        // line 54
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Theme")));
        echo "</h2>
        <div class=\"panel__container\">
            <table class=\"table--fixed\">
                <tr>
                    <th>";
        // line 58
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Name")));
        echo "</th>
                    <td><%- data.activeTheme.name %> (<a href=\"/admin/appearance/settings/bartik\">";
        // line 59
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Edit")));
        echo ")</a>
                    </td>
                </tr>
                <tr>
                    <th>";
        // line 63
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Engine")));
        echo "</th>
                    <td><%- data.activeTheme.engine %></td>
                </tr>
                <tr>
                    <th>";
        // line 67
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Base theme")));
        echo "</th>
                    <td><%- data.activeTheme.extension.base_theme %></td>
                </tr>
                <tr>
                    <th>";
        // line 71
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Regions")));
        echo "</th>
                    <td><%= Drupal.webprofiler.helpers.frm(data.activeTheme.regions) %></td>
                </tr>
                <tr>
                    <th>";
        // line 75
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Libraries")));
        echo "</th>
                    <td><%= Drupal.webprofiler.helpers.frm(data.activeTheme.libraries) %></td>
                </tr>
                <tr>
                    <th>";
        // line 79
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Style sheets removed")));
        echo "</th>
                    <td><%= Drupal.webprofiler.helpers.frm(data.activeTheme.styleSheetsRemove) %></td>
                </tr>
                <tr>
                    <th>";
        // line 83
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Path")));
        echo "</th>
                    <td><%- data.activeTheme.path %></td>
                </tr>
                <tr>
                    <th>";
        // line 87
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Negotiator")));
        echo "</th>
                    <td><%= Drupal.webprofiler.helpers.classLink(data.negotiator.class) %></td>
                </tr>
            </table>
        </div>

        <div class=\"panel__container\">
            <ul class=\"list--inline\">
                <li><b>";
        // line 95
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Twig statistics")));
        echo "</b></li>
            </ul>

            <table class=\"table--fixed\">
                <tr>
                    <th>";
        // line 100
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Total Render Time")));
        echo "</th>
                    <td><%- Drupal.webprofiler.helpers.printTime(data.twig.render_time) %></td>
                </tr>
                <tr>
                    <th>";
        // line 104
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Template Calls")));
        echo "</th>
                    <td><%- data.twig.template_count %></td>
                </tr>
                <tr>
                    <th>";
        // line 108
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Block Calls")));
        echo "</th>
                    <td><%- data.twig.block_count %></td>
                </tr>
                <tr>
                    <th>";
        // line 112
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Macro Calls")));
        echo "</th>
                    <td><%- data.twig.macro_count %></td>
                </tr>
            </table>
        </div>

        <div class=\"panel__container\">
            <ul class=\"list--inline\">
                <li><b>";
        // line 120
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Twig rendered templates")));
        echo "</b></li>
            </ul>

            <table class=\"table--fixed\">
                <thead>
                <tr>
                    <th>";
        // line 126
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("template")));
        echo "</th>
                    <th>";
        // line 127
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("count")));
        echo "</th>
                </tr>
                </thead>
                <% _.each( data.twig.templates, function( item, key ){ %>
                <tr>
                    <th><%- key %></th>
                    <td><%- item %></td>
                </tr>
                <% }); %>
            </table>
        </div>

        <div class=\"panel__container\">
            <ul class=\"list--inline\">
                <li><b>";
        // line 141
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Twig callgraph")));
        echo "</b></li>
            </ul>

            <%= data.twig.callgraph %>
        </div>
    </script>
";
        
        $__internal_2380f60b535f3897e027328d237d72d78dc8c1a1e5e41a6101b7bee9b7e32f00->leave($__internal_2380f60b535f3897e027328d237d72d78dc8c1a1e5e41a6101b7bee9b7e32f00_prof);

    }

    public function getTemplateName()
    {
        return "@webprofiler/Collector/theme.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  353 => 141,  336 => 127,  332 => 126,  323 => 120,  312 => 112,  305 => 108,  298 => 104,  291 => 100,  283 => 95,  272 => 87,  265 => 83,  258 => 79,  251 => 75,  244 => 71,  237 => 67,  230 => 63,  223 => 59,  219 => 58,  212 => 54,  209 => 53,  203 => 52,  193 => 48,  189 => 47,  185 => 45,  179 => 42,  175 => 41,  169 => 38,  165 => 37,  159 => 34,  155 => 33,  149 => 30,  145 => 29,  139 => 26,  135 => 25,  129 => 22,  125 => 21,  119 => 18,  115 => 17,  111 => 15,  108 => 14,  102 => 11,  98 => 10,  94 => 9,  87 => 8,  84 => 7,  81 => 6,  76 => 4,  69 => 3,  66 => 2,  60 => 1,  53 => 52,  50 => 51,  48 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@webprofiler/Collector/theme.html.twig", "/Users/franceneralezy/PhpstormProjects/drupal-8.4.4-commerce/modules/devel/webprofiler/templates/Collector/theme.html.twig");
    }
}
