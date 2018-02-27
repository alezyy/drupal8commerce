<?php

/* themes/bootstrap/templates/system/page.html.twig */
class __TwigTemplate_b4dc9352cffb2ec7d6ab95902673e423b4afc8e5de39477bd30d2c72ec08934f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'navbar' => array($this, 'block_navbar'),
            'main' => array($this, 'block_main'),
            'header' => array($this, 'block_header'),
            'sidebar_first' => array($this, 'block_sidebar_first'),
            'highlighted' => array($this, 'block_highlighted'),
            'help' => array($this, 'block_help'),
            'content' => array($this, 'block_content'),
            'sidebar_second' => array($this, 'block_sidebar_second'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f768867448218f09ff1ea8c22ff727f61afc7939ba907c263b087dfdaeabffef = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_f768867448218f09ff1ea8c22ff727f61afc7939ba907c263b087dfdaeabffef->enter($__internal_f768867448218f09ff1ea8c22ff727f61afc7939ba907c263b087dfdaeabffef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/bootstrap/templates/system/page.html.twig"));

        $tags = array("set" => 54, "if" => 56, "block" => 57);
        $filters = array("clean_class" => 62, "t" => 74);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if', 'block'),
                array('clean_class', 't'),
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

        // line 54
        $context["container"] = (($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", array()), "fluid_container", array())) ? ("container-fluid") : ("container"));
        // line 56
        if (($this->getAttribute(($context["page"] ?? null), "navigation", array()) || $this->getAttribute(($context["page"] ?? null), "navigation_collapsible", array()))) {
            // line 57
            echo "  ";
            $this->displayBlock('navbar', $context, $blocks);
        }
        // line 94
        echo "
";
        // line 96
        $this->displayBlock('main', $context, $blocks);
        // line 161
        echo "
";
        // line 162
        if ($this->getAttribute(($context["page"] ?? null), "footer", array())) {
            // line 163
            echo "  ";
            $this->displayBlock('footer', $context, $blocks);
        }
        
        $__internal_f768867448218f09ff1ea8c22ff727f61afc7939ba907c263b087dfdaeabffef->leave($__internal_f768867448218f09ff1ea8c22ff727f61afc7939ba907c263b087dfdaeabffef_prof);

    }

    // line 57
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_8f7b5e9bf41e7a837b1d70b1727f217fb91cc5cd7033f1b749624e47aad06c94 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f7b5e9bf41e7a837b1d70b1727f217fb91cc5cd7033f1b749624e47aad06c94->enter($__internal_8f7b5e9bf41e7a837b1d70b1727f217fb91cc5cd7033f1b749624e47aad06c94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        // line 58
        echo "    ";
        // line 59
        $context["navbar_classes"] = array(0 => "navbar", 1 => (($this->getAttribute($this->getAttribute(        // line 61
($context["theme"] ?? null), "settings", array()), "navbar_inverse", array())) ? ("navbar-inverse") : ("navbar-default")), 2 => (($this->getAttribute($this->getAttribute(        // line 62
($context["theme"] ?? null), "settings", array()), "navbar_position", array())) ? (("navbar-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", array()), "navbar_position", array())))) : (($context["container"] ?? null))));
        // line 65
        echo "    <header";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["navbar_attributes"] ?? null), "addClass", array(0 => ($context["navbar_classes"] ?? null)), "method"), "html", null, true));
        echo " id=\"navbar\" role=\"banner\">
      ";
        // line 66
        if ( !$this->getAttribute(($context["navbar_attributes"] ?? null), "hasClass", array(0 => ($context["container"] ?? null)), "method")) {
            // line 67
            echo "        <div class=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true));
            echo "\">
      ";
        }
        // line 69
        echo "      <div class=\"navbar-header\">
        ";
        // line 70
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "navigation", array()), "html", null, true));
        echo "
        ";
        // line 72
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "navigation_collapsible", array())) {
            // line 73
            echo "          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\">
            <span class=\"sr-only\">";
            // line 74
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Toggle navigation")));
            echo "</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
        ";
        }
        // line 80
        echo "      </div>

      ";
        // line 83
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "navigation_collapsible", array())) {
            // line 84
            echo "        <div id=\"navbar-collapse\" class=\"navbar-collapse collapse\">
          ";
            // line 85
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "navigation_collapsible", array()), "html", null, true));
            echo "
        </div>
      ";
        }
        // line 88
        echo "      ";
        if ( !$this->getAttribute(($context["navbar_attributes"] ?? null), "hasClass", array(0 => ($context["container"] ?? null)), "method")) {
            // line 89
            echo "        </div>
      ";
        }
        // line 91
        echo "    </header>
  ";
        
        $__internal_8f7b5e9bf41e7a837b1d70b1727f217fb91cc5cd7033f1b749624e47aad06c94->leave($__internal_8f7b5e9bf41e7a837b1d70b1727f217fb91cc5cd7033f1b749624e47aad06c94_prof);

    }

    // line 96
    public function block_main($context, array $blocks = array())
    {
        $__internal_38d27538b3c56e1090a340dbf400888ce5d366fccbe34388b8405710ac986e6f = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_38d27538b3c56e1090a340dbf400888ce5d366fccbe34388b8405710ac986e6f->enter($__internal_38d27538b3c56e1090a340dbf400888ce5d366fccbe34388b8405710ac986e6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 97
        echo "  <div role=\"main\" class=\"main-container ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true));
        echo " js-quickedit-main-content\">
    <div class=\"row\">

      ";
        // line 101
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "header", array())) {
            // line 102
            echo "        ";
            $this->displayBlock('header', $context, $blocks);
            // line 107
            echo "      ";
        }
        // line 108
        echo "
      ";
        // line 110
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", array())) {
            // line 111
            echo "        ";
            $this->displayBlock('sidebar_first', $context, $blocks);
            // line 116
            echo "      ";
        }
        // line 117
        echo "
      ";
        // line 119
        echo "      ";
        // line 120
        $context["content_classes"] = array(0 => ((($this->getAttribute(        // line 121
($context["page"] ?? null), "sidebar_first", array()) && $this->getAttribute(($context["page"] ?? null), "sidebar_second", array()))) ? ("col-sm-6") : ("")), 1 => ((($this->getAttribute(        // line 122
($context["page"] ?? null), "sidebar_first", array()) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_second", array())))) ? ("col-sm-9") : ("")), 2 => ((($this->getAttribute(        // line 123
($context["page"] ?? null), "sidebar_second", array()) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_first", array())))) ? ("col-sm-9") : ("")), 3 => (((twig_test_empty($this->getAttribute(        // line 124
($context["page"] ?? null), "sidebar_first", array())) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_second", array())))) ? ("col-sm-12") : ("")));
        // line 127
        echo "      <section";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content_attributes"] ?? null), "addClass", array(0 => ($context["content_classes"] ?? null)), "method"), "html", null, true));
        echo ">

        ";
        // line 130
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", array())) {
            // line 131
            echo "          ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 134
            echo "        ";
        }
        // line 135
        echo "
        ";
        // line 137
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "help", array())) {
            // line 138
            echo "          ";
            $this->displayBlock('help', $context, $blocks);
            // line 141
            echo "        ";
        }
        // line 142
        echo "
        ";
        // line 144
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 148
        echo "      </section>

      ";
        // line 151
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", array())) {
            // line 152
            echo "        ";
            $this->displayBlock('sidebar_second', $context, $blocks);
            // line 157
            echo "      ";
        }
        // line 158
        echo "    </div>
  </div>
";
        
        $__internal_38d27538b3c56e1090a340dbf400888ce5d366fccbe34388b8405710ac986e6f->leave($__internal_38d27538b3c56e1090a340dbf400888ce5d366fccbe34388b8405710ac986e6f_prof);

    }

    // line 102
    public function block_header($context, array $blocks = array())
    {
        $__internal_826e5401fdeac416b23579271b1f8cc4b673bd633a58a5704f6c875775f1cc0b = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_826e5401fdeac416b23579271b1f8cc4b673bd633a58a5704f6c875775f1cc0b->enter($__internal_826e5401fdeac416b23579271b1f8cc4b673bd633a58a5704f6c875775f1cc0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 103
        echo "          <div class=\"col-sm-12\" role=\"heading\">
            ";
        // line 104
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header", array()), "html", null, true));
        echo "
          </div>
        ";
        
        $__internal_826e5401fdeac416b23579271b1f8cc4b673bd633a58a5704f6c875775f1cc0b->leave($__internal_826e5401fdeac416b23579271b1f8cc4b673bd633a58a5704f6c875775f1cc0b_prof);

    }

    // line 111
    public function block_sidebar_first($context, array $blocks = array())
    {
        $__internal_9e99bbaf52bd4ff459c5538baf773cccccf67fb9eb704d4f3ddc5a1d3d2a522e = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e99bbaf52bd4ff459c5538baf773cccccf67fb9eb704d4f3ddc5a1d3d2a522e->enter($__internal_9e99bbaf52bd4ff459c5538baf773cccccf67fb9eb704d4f3ddc5a1d3d2a522e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar_first"));

        // line 112
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 113
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_first", array()), "html", null, true));
        echo "
          </aside>
        ";
        
        $__internal_9e99bbaf52bd4ff459c5538baf773cccccf67fb9eb704d4f3ddc5a1d3d2a522e->leave($__internal_9e99bbaf52bd4ff459c5538baf773cccccf67fb9eb704d4f3ddc5a1d3d2a522e_prof);

    }

    // line 131
    public function block_highlighted($context, array $blocks = array())
    {
        $__internal_1fa31ac2be65318f05923538e434954066c7660952b3a9a22c63cea91b31a12b = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fa31ac2be65318f05923538e434954066c7660952b3a9a22c63cea91b31a12b->enter($__internal_1fa31ac2be65318f05923538e434954066c7660952b3a9a22c63cea91b31a12b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "highlighted"));

        // line 132
        echo "            <div class=\"highlighted\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "highlighted", array()), "html", null, true));
        echo "</div>
          ";
        
        $__internal_1fa31ac2be65318f05923538e434954066c7660952b3a9a22c63cea91b31a12b->leave($__internal_1fa31ac2be65318f05923538e434954066c7660952b3a9a22c63cea91b31a12b_prof);

    }

    // line 138
    public function block_help($context, array $blocks = array())
    {
        $__internal_7d9515f0f7f44d150dce1422b6ded7fb98c195adc7f50a21d2377400e02697c1 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d9515f0f7f44d150dce1422b6ded7fb98c195adc7f50a21d2377400e02697c1->enter($__internal_7d9515f0f7f44d150dce1422b6ded7fb98c195adc7f50a21d2377400e02697c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "help"));

        // line 139
        echo "            ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "help", array()), "html", null, true));
        echo "
          ";
        
        $__internal_7d9515f0f7f44d150dce1422b6ded7fb98c195adc7f50a21d2377400e02697c1->leave($__internal_7d9515f0f7f44d150dce1422b6ded7fb98c195adc7f50a21d2377400e02697c1_prof);

    }

    // line 144
    public function block_content($context, array $blocks = array())
    {
        $__internal_8affd94ca06a44259cf69c61786730152bd3d97e0d2c8fa8f90483ccc16afcc1 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_8affd94ca06a44259cf69c61786730152bd3d97e0d2c8fa8f90483ccc16afcc1->enter($__internal_8affd94ca06a44259cf69c61786730152bd3d97e0d2c8fa8f90483ccc16afcc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 145
        echo "          <a id=\"main-content\"></a>
          ";
        // line 146
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
        echo "
        ";
        
        $__internal_8affd94ca06a44259cf69c61786730152bd3d97e0d2c8fa8f90483ccc16afcc1->leave($__internal_8affd94ca06a44259cf69c61786730152bd3d97e0d2c8fa8f90483ccc16afcc1_prof);

    }

    // line 152
    public function block_sidebar_second($context, array $blocks = array())
    {
        $__internal_be015fa45c54d8695da68b7cb05dc672b52dcd1e3542893efa64771642eadff7 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_be015fa45c54d8695da68b7cb05dc672b52dcd1e3542893efa64771642eadff7->enter($__internal_be015fa45c54d8695da68b7cb05dc672b52dcd1e3542893efa64771642eadff7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar_second"));

        // line 153
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 154
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_second", array()), "html", null, true));
        echo "
          </aside>
        ";
        
        $__internal_be015fa45c54d8695da68b7cb05dc672b52dcd1e3542893efa64771642eadff7->leave($__internal_be015fa45c54d8695da68b7cb05dc672b52dcd1e3542893efa64771642eadff7_prof);

    }

    // line 163
    public function block_footer($context, array $blocks = array())
    {
        $__internal_e180bd33e13cda0018116456ac0c629189e455b34756ff8a477a719d6ec60921 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_e180bd33e13cda0018116456ac0c629189e455b34756ff8a477a719d6ec60921->enter($__internal_e180bd33e13cda0018116456ac0c629189e455b34756ff8a477a719d6ec60921_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 164
        echo "    <footer class=\"footer ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true));
        echo "\" role=\"contentinfo\">
      ";
        // line 165
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer", array()), "html", null, true));
        echo "
    </footer>
  ";
        
        $__internal_e180bd33e13cda0018116456ac0c629189e455b34756ff8a477a719d6ec60921->leave($__internal_e180bd33e13cda0018116456ac0c629189e455b34756ff8a477a719d6ec60921_prof);

    }

    public function getTemplateName()
    {
        return "themes/bootstrap/templates/system/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  378 => 165,  373 => 164,  367 => 163,  357 => 154,  354 => 153,  348 => 152,  339 => 146,  336 => 145,  330 => 144,  320 => 139,  314 => 138,  304 => 132,  298 => 131,  288 => 113,  285 => 112,  279 => 111,  269 => 104,  266 => 103,  260 => 102,  251 => 158,  248 => 157,  245 => 152,  242 => 151,  238 => 148,  235 => 144,  232 => 142,  229 => 141,  226 => 138,  223 => 137,  220 => 135,  217 => 134,  214 => 131,  211 => 130,  205 => 127,  203 => 124,  202 => 123,  201 => 122,  200 => 121,  199 => 120,  197 => 119,  194 => 117,  191 => 116,  188 => 111,  185 => 110,  182 => 108,  179 => 107,  176 => 102,  173 => 101,  166 => 97,  160 => 96,  152 => 91,  148 => 89,  145 => 88,  139 => 85,  136 => 84,  133 => 83,  129 => 80,  120 => 74,  117 => 73,  114 => 72,  110 => 70,  107 => 69,  101 => 67,  99 => 66,  94 => 65,  92 => 62,  91 => 61,  90 => 59,  88 => 58,  82 => 57,  73 => 163,  71 => 162,  68 => 161,  66 => 96,  63 => 94,  59 => 57,  57 => 56,  55 => 54,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/bootstrap/templates/system/page.html.twig", "/Users/franceneralezy/PhpstormProjects/drupal-8.4.4-commerce/themes/bootstrap/templates/system/page.html.twig");
    }
}
