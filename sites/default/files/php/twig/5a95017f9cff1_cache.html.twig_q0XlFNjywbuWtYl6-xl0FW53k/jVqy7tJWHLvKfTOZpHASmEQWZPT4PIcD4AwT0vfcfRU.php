<?php

/* @webprofiler/Collector/cache.html.twig */
class __TwigTemplate_ddc02431ed63096ea8a62d753b61eb3a02c353d01fb605a83f1ab98e27bbd48c extends Twig_Template
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
        $__internal_6615c00148c8bc6f689cf76d50aa085350d30fcf5ca5188f60a443f739a4ae37 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_6615c00148c8bc6f689cf76d50aa085350d30fcf5ca5188f60a443f739a4ae37->enter($__internal_6615c00148c8bc6f689cf76d50aa085350d30fcf5ca5188f60a443f739a4ae37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@webprofiler/Collector/cache.html.twig"));

        $tags = array("block" => 1, "set" => 2, "for" => 12);
        $filters = array("t" => 3, "default" => 21);
        $functions = array("url" => 3);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('block', 'set', 'for'),
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
        
        $__internal_6615c00148c8bc6f689cf76d50aa085350d30fcf5ca5188f60a443f739a4ae37->leave($__internal_6615c00148c8bc6f689cf76d50aa085350d30fcf5ca5188f60a443f739a4ae37_prof);

    }

    // line 1
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_85f79ec15b1b44a72d521af48996f62cbf3dd54a859e8896d1620059a4e68d83 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_85f79ec15b1b44a72d521af48996f62cbf3dd54a859e8896d1620059a4e68d83->enter($__internal_85f79ec15b1b44a72d521af48996f62cbf3dd54a859e8896d1620059a4e68d83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 2
        echo "    ";
        ob_start();
        // line 3
        echo "    <a href=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("webprofiler.dashboard", array("profile" => ($context["token"] ?? null)), array("fragment" => "cache")), "html", null, true));
        echo "\" title=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Cache")));
        echo "\">
        <img width=\"20\" height=\"28\" alt=\"";
        // line 4
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Cache")));
        echo "\"
             src=\"data:image/png;base64,";
        // line 5
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["collector"] ?? null), "icon", array()), "html", null, true));
        echo "\"/>
        <span class=\"sf-toolbar-info-piece-additional sf-toolbar-status\">";
        // line 6
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["collector"] ?? null), "getCacheHitsCount", array()), "html", null, true));
        echo "
            / ";
        // line 7
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["collector"] ?? null), "getCacheMissesCount", array()), "html", null, true));
        echo "</span>
    </a>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 10
        echo "    ";
        ob_start();
        // line 11
        echo "
    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["collector"] ?? null), "getCacheHits", array()));
        foreach ($context['_seq'] as $context["bin"] => $context["cids"]) {
            // line 13
            echo "        <div class=\"sf-toolbar-info-piece\">
            <b>";
            // line 14
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["bin"], "html", null, true));
            echo "</b>
            <span>";
            // line 15
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["cids"], "html", null, true));
            echo "</span>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['bin'], $context['cids'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "    ";
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
        
        $__internal_85f79ec15b1b44a72d521af48996f62cbf3dd54a859e8896d1620059a4e68d83->leave($__internal_85f79ec15b1b44a72d521af48996f62cbf3dd54a859e8896d1620059a4e68d83_prof);

    }

    // line 26
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9a2cc6a851aff24ab4065cb41cf566c229cdb9c415030da8f45cce1d86286e84 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a2cc6a851aff24ab4065cb41cf566c229cdb9c415030da8f45cce1d86286e84->enter($__internal_9a2cc6a851aff24ab4065cb41cf566c229cdb9c415030da8f45cce1d86286e84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 27
        echo "    <script id=\"cache\" type=\"text/template\">
        <h2 class=\"panel__title\">";
        // line 28
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Cache")));
        echo "</h2>
        <% if( data.cache.length != 0){ %>
        <% _.each( data.cache, function( item, key ){ %>
        <div class=\"panel__container\">

            <ul class=\"list--inline\">
                <li><b>Bin</b> <%= key %></li>
            </ul>

            <table class=\"table--trio\">
                <thead>
                <tr>
                    <th>";
        // line 40
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("ID")));
        echo "</th>
                    <th>";
        // line 41
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("hit")));
        echo "</th>
                    <th>";
        // line 42
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("miss")));
        echo "</th>
                </tr>
                </thead>
                <tbody>
                <% _.each( item, function( value, key ){ %>
                <tr>
                    <td><%= key %></td>
                    <td><%= value['bin_cids_hit'] %></td>
                    <td><%= value['bin_cids_miss'] %></td>
                </tr>
                <% }); %>
                </tbody>
            </table>
        </div>
        <% }); %>
        <% } else { %>
        <div class=\"panel__container\">
            <p>";
        // line 59
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("No results")));
        echo "</p>
        </div>
        <% } %>
    </script>
";
        
        $__internal_9a2cc6a851aff24ab4065cb41cf566c229cdb9c415030da8f45cce1d86286e84->leave($__internal_9a2cc6a851aff24ab4065cb41cf566c229cdb9c415030da8f45cce1d86286e84_prof);

    }

    public function getTemplateName()
    {
        return "@webprofiler/Collector/cache.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  193 => 59,  173 => 42,  169 => 41,  165 => 40,  150 => 28,  147 => 27,  141 => 26,  131 => 22,  127 => 21,  123 => 19,  120 => 18,  111 => 15,  107 => 14,  104 => 13,  100 => 12,  97 => 11,  94 => 10,  88 => 7,  84 => 6,  80 => 5,  76 => 4,  69 => 3,  66 => 2,  60 => 1,  53 => 26,  50 => 25,  48 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@webprofiler/Collector/cache.html.twig", "/Users/franceneralezy/PhpstormProjects/drupal-8.4.4-commerce/modules/devel/webprofiler/templates/Collector/cache.html.twig");
    }
}
