<?php

/* modules/devel/webprofiler/templates/Profiler/webprofiler_loader.html.twig */
class __TwigTemplate_85879885f8d73c3ddee4f60177d6012556e5d14206e6551a0dae906ff44435f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_883ceca443bc541cd321ccfb7f7e9554a25041c1c8557f8c31f48fb30641c083 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_883ceca443bc541cd321ccfb7f7e9554a25041c1c8557f8c31f48fb30641c083->enter($__internal_883ceca443bc541cd321ccfb7f7e9554a25041c1c8557f8c31f48fb30641c083_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modules/devel/webprofiler/templates/Profiler/webprofiler_loader.html.twig"));

        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
                array(),
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

        // line 1
        echo "<div id=\"webprofiler";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["token"] ?? null), "html", null, true));
        echo "\" class=\"sf-toolbar\" style=\"display: none\"></div>

<script>
    Webprofiler = (function () {
        \"use strict\";

        var key = 'webprofiler/profiler/',

                getPreference = function (name) {
                    if (!window.localStorage) {
                        return null;
                    }

                    return localStorage.getItem(key + name);
                },

                setPreference = function (name, value) {
                    if (!window.localStorage) {
                        return null;
                    }

                    localStorage.setItem(key + name, value);
                    return true;
                },

                load = function () {
                    ajax('";
        // line 27
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["profiler_url"] ?? null), "html", null, true));
        echo "', function (result) {
                        var toolbar = document.getElementById('webprofiler";
        // line 28
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["token"] ?? null), "html", null, true));
        echo "');
                        toolbar.innerHTML = result;
                        toolbar.style.display = 'block';

                        if (getPreference('toolbar/displayState') == 'none') {
                            document.getElementById('sfToolbarMainContent-";
        // line 33
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["token"] ?? null), "html", null, true));
        echo "').style.display = 'none';
                            document.getElementById('sfToolbarClearer-";
        // line 34
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["token"] ?? null), "html", null, true));
        echo "').style.display = 'none';
                            document.getElementById('sfMiniToolbar-";
        // line 35
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["token"] ?? null), "html", null, true));
        echo "').style.display = 'block';
                        } else {
                            document.getElementById('sfToolbarMainContent-";
        // line 37
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["token"] ?? null), "html", null, true));
        echo "').style.display = 'block';
                            document.getElementById('sfToolbarClearer-";
        // line 38
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["token"] ?? null), "html", null, true));
        echo "').style.display = 'block';
                            document.getElementById('sfMiniToolbar-";
        // line 39
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["token"] ?? null), "html", null, true));
        echo "').style.display = 'none';
                        }

                        var arr = toolbar.getElementsByTagName('script');
                        for (var n = 0; n < arr.length; n++) {
                            eval(arr[n].innerHTML);
                        }
                    });
                },

                ajax = function (url, callback, data) {
                    try {
                        var x = new (XMLHttpRequest || ActiveXObject)('MSXML2.XMLHTTP.3.0');
                        x.open(data ? 'POST' : 'GET', url, 1);
                        x.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                        x.setRequestHeader('Content-type', 'application/json');
                        x.onreadystatechange = function () {
                            x.readyState > 3 && x.status === 200 && callback && callback(x.responseText, x);
                        };
                        x.send(data);
                    } catch (e) {
                        window.console && console.log(e);
                    }
                };

        return {
            getPreference: getPreference,
            setPreference: setPreference,
            load: load,
            ajax: ajax
        }
    })();

    Webprofiler.load();
</script>
";
        
        $__internal_883ceca443bc541cd321ccfb7f7e9554a25041c1c8557f8c31f48fb30641c083->leave($__internal_883ceca443bc541cd321ccfb7f7e9554a25041c1c8557f8c31f48fb30641c083_prof);

    }

    public function getTemplateName()
    {
        return "modules/devel/webprofiler/templates/Profiler/webprofiler_loader.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 39,  105 => 38,  101 => 37,  96 => 35,  92 => 34,  88 => 33,  80 => 28,  76 => 27,  46 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/devel/webprofiler/templates/Profiler/webprofiler_loader.html.twig", "/Users/franceneralezy/PhpstormProjects/drupal-8.4.4-commerce/modules/devel/webprofiler/templates/Profiler/webprofiler_loader.html.twig");
    }
}
