<?php

/* @webprofiler/Collector/mail.html.twig */
class __TwigTemplate_d69db1a83e27b157d4da93a74f52bfdc07fcdba10705b3504857cc3dfe6b87d7 extends Twig_Template
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
        $__internal_5f3f07cd24bb467a3a8001fd9153ae7db78ce27bc0bc792342a6d15e79eb8dd1 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f3f07cd24bb467a3a8001fd9153ae7db78ce27bc0bc792342a6d15e79eb8dd1->enter($__internal_5f3f07cd24bb467a3a8001fd9153ae7db78ce27bc0bc792342a6d15e79eb8dd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@webprofiler/Collector/mail.html.twig"));

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
        
        $__internal_5f3f07cd24bb467a3a8001fd9153ae7db78ce27bc0bc792342a6d15e79eb8dd1->leave($__internal_5f3f07cd24bb467a3a8001fd9153ae7db78ce27bc0bc792342a6d15e79eb8dd1_prof);

    }

    // line 1
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2bfbeed50fd6c05e97e3a3ba7ddb56e5277cfd6ca2618247f8aa532bd1878bda = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bfbeed50fd6c05e97e3a3ba7ddb56e5277cfd6ca2618247f8aa532bd1878bda->enter($__internal_2bfbeed50fd6c05e97e3a3ba7ddb56e5277cfd6ca2618247f8aa532bd1878bda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 2
        echo "    ";
        ob_start();
        // line 3
        echo "    <a href=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("webprofiler.dashboard", array("profile" => ($context["token"] ?? null)), array("fragment" => "mail")), "html", null, true));
        echo "\" title=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Mail")));
        echo "\">
        <img height=\"28\" alt=\"";
        // line 4
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Mail")));
        echo "\"
             src=\"data:image/png;base64,";
        // line 5
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["collector"] ?? null), "icon", array()), "html", null, true));
        echo "\"/>
        <span class=\"sf-toolbar-status\">";
        // line 6
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["collector"] ?? null), "mailsent", array()), "html", null, true));
        echo "</span>
    </a>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 9
        echo "    ";
        ob_start();
        // line 10
        echo "    <div class=\"sf-toolbar-info-piece\">
        <b>Mail sent</b>
        <span>";
        // line 12
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["collector"] ?? null), "mailsent", array()), "html", null, true));
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
        
        $__internal_2bfbeed50fd6c05e97e3a3ba7ddb56e5277cfd6ca2618247f8aa532bd1878bda->leave($__internal_2bfbeed50fd6c05e97e3a3ba7ddb56e5277cfd6ca2618247f8aa532bd1878bda_prof);

    }

    // line 22
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2ea4428778bb3edbcc2e5e1692c770daf3c20f6c039cde8d926bbfa200c4d39e = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ea4428778bb3edbcc2e5e1692c770daf3c20f6c039cde8d926bbfa200c4d39e->enter($__internal_2ea4428778bb3edbcc2e5e1692c770daf3c20f6c039cde8d926bbfa200c4d39e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 23
        echo "    <script id=\"mail\" type=\"text/template\">
        <h2 class=\"panel__title\">";
        // line 24
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Mail dashboard")));
        echo "</h2>

        <% if( data.mail.length != 0){ %>
        <% _.each( data.mail, function( item ) { %>
        <div class=\"panel__container\">
            <div class=\"panel__expand-header\">
                <ul class=\"list--inline\">
                    <li>
                        <b>";
        // line 32
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Plugin")));
        echo "</b>: <%= Drupal.webprofiler.helpers.classLink(item.method) %>
                    </li>
                    <li>
                        <b>";
        // line 35
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("ID")));
        echo "</b>: <%- item.message.id %>
                    </li>
                    <li>
                        <b>";
        // line 38
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("To")));
        echo "</b>: <%- item.message.to %>
                    </li>
                    <li>
                        <b>";
        // line 41
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Subject")));
        echo "</b>: <%- item.message.subject %>
                    </li>
                </ul>
                <div class=\"button--flat l-right js--panel-toggle\">";
        // line 44
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Info")));
        echo "</div>
            </div>

            <div class=\"panel__expand-content\">
                <table class=\"table--duo\">
                <% _.each( item.message, function( message, key ) { %>
                <% if( key != 'params' && key != 'headers' ){ %>
                <tr>
                    <th><%- key %></th>
                    <td><%- message %></td>
                </tr>
                <% } %>
                <% }); %>
                </table>
                <table class=\"table--duo\">
                    <% _.each( item.message.headers, function( header, key ) { %>
                    <tr>
                        <th><%- key %></th>
                        <td><%- header %></td>
                    </tr>
                    <% }); %>
                </table>
            </div>

        </div>
        <% }); %>
        <% } else { %>
        <div class=\"panel__container\">
            <p>";
        // line 72
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("No mail sent")));
        echo "</p>
        </div>
        <% } %>
    </script>
";
        
        $__internal_2ea4428778bb3edbcc2e5e1692c770daf3c20f6c039cde8d926bbfa200c4d39e->leave($__internal_2ea4428778bb3edbcc2e5e1692c770daf3c20f6c039cde8d926bbfa200c4d39e_prof);

    }

    public function getTemplateName()
    {
        return "@webprofiler/Collector/mail.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  196 => 72,  165 => 44,  159 => 41,  153 => 38,  147 => 35,  141 => 32,  130 => 24,  127 => 23,  121 => 22,  111 => 18,  107 => 17,  103 => 15,  97 => 12,  93 => 10,  90 => 9,  84 => 6,  80 => 5,  76 => 4,  69 => 3,  66 => 2,  60 => 1,  53 => 22,  50 => 21,  48 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@webprofiler/Collector/mail.html.twig", "/Users/franceneralezy/PhpstormProjects/drupal-8.4.4-commerce/modules/devel/webprofiler/templates/Collector/mail.html.twig");
    }
}
