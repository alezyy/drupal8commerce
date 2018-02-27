<?php

/* @webprofiler/Collector/translations.html.twig */
class __TwigTemplate_3060ed77e39cd3a4750a2a89a2704aa94969b8f7491b8ad7c3da8a67e2645ffc extends Twig_Template
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
        $__internal_e0d1d7c68f20bf514e5509856802a18b8a10ef57db619b67a6cb3251c564c81d = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0d1d7c68f20bf514e5509856802a18b8a10ef57db619b67a6cb3251c564c81d->enter($__internal_e0d1d7c68f20bf514e5509856802a18b8a10ef57db619b67a6cb3251c564c81d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@webprofiler/Collector/translations.html.twig"));

        $tags = array("block" => 1, "set" => 2);
        $filters = array("t" => 4, "default" => 22);
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
        // line 26
        echo "
";
        // line 27
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_e0d1d7c68f20bf514e5509856802a18b8a10ef57db619b67a6cb3251c564c81d->leave($__internal_e0d1d7c68f20bf514e5509856802a18b8a10ef57db619b67a6cb3251c564c81d_prof);

    }

    // line 1
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_52133a72b739d4727d4827bbd3200896be33e91e74ce1c9a949ff2d969340565 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_52133a72b739d4727d4827bbd3200896be33e91e74ce1c9a949ff2d969340565->enter($__internal_52133a72b739d4727d4827bbd3200896be33e91e74ce1c9a949ff2d969340565_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 2
        echo "    ";
        ob_start();
        // line 3
        echo "    <a href=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("webprofiler.dashboard", array("profile" => ($context["token"] ?? null)), array("fragment" => "translations")), "html", null, true));
        echo "\"
       title=\"";
        // line 4
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Translations")));
        echo "\">
        <img height=\"28\" alt=\"";
        // line 5
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Translations")));
        echo "\"
             src=\"data:image/png;base64,";
        // line 6
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["collector"] ?? null), "icon", array()), "html", null, true));
        echo "\"/>
        <span class=\"sf-toolbar-status\">";
        // line 7
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["collector"] ?? null), "untranslatedCount", array()), "html", null, true));
        echo "</span>
    </a>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 10
        echo "    ";
        ob_start();
        // line 11
        echo "    <div class=\"sf-toolbar-info-piece\">
        <b>";
        // line 12
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Translated")));
        echo "</b>
        <span>";
        // line 13
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["collector"] ?? null), "translatedCount", array()), "html", null, true));
        echo "</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>";
        // line 16
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Untranslated")));
        echo "</b>
        <span>";
        // line 17
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["collector"] ?? null), "untranslatedCount", array()), "html", null, true));
        echo "</span>
    </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 20
        echo "
    <div class=\"sf-toolbar-block\">
        <div class=\"sf-toolbar-icon\">";
        // line 22
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ((array_key_exists("icon", $context)) ? (_twig_default_filter(($context["icon"] ?? null), "")) : ("")), "html", null, true));
        echo "</div>
        <div class=\"sf-toolbar-info\">";
        // line 23
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ((array_key_exists("text", $context)) ? (_twig_default_filter(($context["text"] ?? null), "")) : ("")), "html", null, true));
        echo "</div>
    </div>
";
        
        $__internal_52133a72b739d4727d4827bbd3200896be33e91e74ce1c9a949ff2d969340565->leave($__internal_52133a72b739d4727d4827bbd3200896be33e91e74ce1c9a949ff2d969340565_prof);

    }

    // line 27
    public function block_panel($context, array $blocks = array())
    {
        $__internal_dd03beb4b8e1fa98311f1cca49d936972e7ed5fb578c593903ad3a70091d26d0 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd03beb4b8e1fa98311f1cca49d936972e7ed5fb578c593903ad3a70091d26d0->enter($__internal_dd03beb4b8e1fa98311f1cca49d936972e7ed5fb578c593903ad3a70091d26d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 28
        echo "    <script id=\"translations\" type=\"text/template\">
        <h2 class=\"panel__title\">";
        // line 29
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Translations")));
        echo "</h2>
        <div class=\"tabs\">
            <input class=\"tabs__radio\" type=\"radio\" id=\"translated\" name=\"tabs\" checked/>
            <input class=\"tabs__radio\" type=\"radio\" id=\"untranslated\" name=\"tabs\"/>
            <ul class=\"tabs__tabs list--inline\">
                <li><label class=\"tabs__label\" for=\"translated\">";
        // line 34
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Translated")));
        echo "</label></li>
                <li><label class=\"tabs__label\" for=\"untranslated\">";
        // line 35
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Unranslated")));
        echo "</label></li>
            </ul>

            <div class=\"tabs__panels\">
                <div class=\"tabs__panel\">
                    <div class=\"panel__container\">
                        <table class=\"table--duo\">
                            <thead>
                            <tr>
                                <th>";
        // line 44
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Original")));
        echo "</th>
                                <th>";
        // line 45
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Tanslation")));
        echo "</th>
                                <th>";
        // line 46
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Action")));
        echo "</th>
                            </tr>
                            </thead>
                            <tbody>
                            <% _.each( data.translations.translated, function( value, key ){ %>
                            <tr>
                                <td><%= key %></td>
                                <td><%= value %></td>
                                <td><a href=\"<%- data.user_interface_translations_path %>?string=<%- key%>\" target=\"_blank\" class=\"h--word-intact\">";
        // line 54
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Edit")));
        echo "</a></td>
                            </tr>
                            <% }); %>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class=\"tabs__panel\">
                    <div class=\"panel__container\">
                        <table class=\"table--duo\">
                            <thead>
                            <tr>
                                <th>";
        // line 67
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Original")));
        echo "</th>
                                <th>";
        // line 68
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Action")));
        echo "</th>
                            </tr>
                            </thead>
                            <tbody>
                            <% _.each( data.translations.untranslated, function( value, key ){ %>
                            <tr>
                                <td><%= key %></td>
                                <td><a href=\"<%- data.user_interface_translations_path %>?string=<%- key%>\" target=\"_blank\" class=\"h--word-intact\">";
        // line 75
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Edit")));
        echo "</a></td>
                            </tr>
                            <% }); %>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </script>
";
        
        $__internal_dd03beb4b8e1fa98311f1cca49d936972e7ed5fb578c593903ad3a70091d26d0->leave($__internal_dd03beb4b8e1fa98311f1cca49d936972e7ed5fb578c593903ad3a70091d26d0_prof);

    }

    public function getTemplateName()
    {
        return "@webprofiler/Collector/translations.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  218 => 75,  208 => 68,  204 => 67,  188 => 54,  177 => 46,  173 => 45,  169 => 44,  157 => 35,  153 => 34,  145 => 29,  142 => 28,  136 => 27,  126 => 23,  122 => 22,  118 => 20,  112 => 17,  108 => 16,  102 => 13,  98 => 12,  95 => 11,  92 => 10,  86 => 7,  82 => 6,  78 => 5,  74 => 4,  69 => 3,  66 => 2,  60 => 1,  53 => 27,  50 => 26,  48 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@webprofiler/Collector/translations.html.twig", "/Users/franceneralezy/PhpstormProjects/drupal-8.4.4-commerce/modules/devel/webprofiler/templates/Collector/translations.html.twig");
    }
}
