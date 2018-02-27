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
        $__internal_ff3ca4f72d14a48d80316dc48a82c10440d06048324eca8ea05801d670529fd9 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff3ca4f72d14a48d80316dc48a82c10440d06048324eca8ea05801d670529fd9->enter($__internal_ff3ca4f72d14a48d80316dc48a82c10440d06048324eca8ea05801d670529fd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/bootstrap/templates/system/page.html.twig"));

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
        
        $__internal_ff3ca4f72d14a48d80316dc48a82c10440d06048324eca8ea05801d670529fd9->leave($__internal_ff3ca4f72d14a48d80316dc48a82c10440d06048324eca8ea05801d670529fd9_prof);

    }

    // line 57
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_ea0e52af796379661173544aa4c3022dfd7406bc75dadba8d40b5296dd9100d2 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea0e52af796379661173544aa4c3022dfd7406bc75dadba8d40b5296dd9100d2->enter($__internal_ea0e52af796379661173544aa4c3022dfd7406bc75dadba8d40b5296dd9100d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

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
        
        $__internal_ea0e52af796379661173544aa4c3022dfd7406bc75dadba8d40b5296dd9100d2->leave($__internal_ea0e52af796379661173544aa4c3022dfd7406bc75dadba8d40b5296dd9100d2_prof);

    }

    // line 96
    public function block_main($context, array $blocks = array())
    {
        $__internal_8e43dcff67cb0f60b36018c6b03d7933a2bee4a1d3be1bac84407463d9c90c99 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e43dcff67cb0f60b36018c6b03d7933a2bee4a1d3be1bac84407463d9c90c99->enter($__internal_8e43dcff67cb0f60b36018c6b03d7933a2bee4a1d3be1bac84407463d9c90c99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        
        $__internal_8e43dcff67cb0f60b36018c6b03d7933a2bee4a1d3be1bac84407463d9c90c99->leave($__internal_8e43dcff67cb0f60b36018c6b03d7933a2bee4a1d3be1bac84407463d9c90c99_prof);

    }

    // line 102
    public function block_header($context, array $blocks = array())
    {
        $__internal_ba3a1f1f82d326d9d78ee34ac76c38ec408eb86559ba3c69167f314dec7b99c5 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba3a1f1f82d326d9d78ee34ac76c38ec408eb86559ba3c69167f314dec7b99c5->enter($__internal_ba3a1f1f82d326d9d78ee34ac76c38ec408eb86559ba3c69167f314dec7b99c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 103
        echo "          <div class=\"col-sm-12\" role=\"heading\">
            ";
        // line 104
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header", array()), "html", null, true));
        echo "
          </div>
        ";
        
        $__internal_ba3a1f1f82d326d9d78ee34ac76c38ec408eb86559ba3c69167f314dec7b99c5->leave($__internal_ba3a1f1f82d326d9d78ee34ac76c38ec408eb86559ba3c69167f314dec7b99c5_prof);

    }

    // line 111
    public function block_sidebar_first($context, array $blocks = array())
    {
        $__internal_71f781ce2e69055a42e3be9565fc66704761c63436db74bdaf8da026665732ec = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_71f781ce2e69055a42e3be9565fc66704761c63436db74bdaf8da026665732ec->enter($__internal_71f781ce2e69055a42e3be9565fc66704761c63436db74bdaf8da026665732ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar_first"));

        // line 112
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 113
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_first", array()), "html", null, true));
        echo "
          </aside>
        ";
        
        $__internal_71f781ce2e69055a42e3be9565fc66704761c63436db74bdaf8da026665732ec->leave($__internal_71f781ce2e69055a42e3be9565fc66704761c63436db74bdaf8da026665732ec_prof);

    }

    // line 131
    public function block_highlighted($context, array $blocks = array())
    {
        $__internal_1ad02ace1e58a60b598477de54f9a1dc1f20dd41368e678d0f44bf1c491d89ce = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ad02ace1e58a60b598477de54f9a1dc1f20dd41368e678d0f44bf1c491d89ce->enter($__internal_1ad02ace1e58a60b598477de54f9a1dc1f20dd41368e678d0f44bf1c491d89ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "highlighted"));

        // line 132
        echo "            <div class=\"highlighted\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "highlighted", array()), "html", null, true));
        echo "</div>
          ";
        
        $__internal_1ad02ace1e58a60b598477de54f9a1dc1f20dd41368e678d0f44bf1c491d89ce->leave($__internal_1ad02ace1e58a60b598477de54f9a1dc1f20dd41368e678d0f44bf1c491d89ce_prof);

    }

    // line 138
    public function block_help($context, array $blocks = array())
    {
        $__internal_68fad001fe2d861683fab73925d1e1f59ebd52fb796fe2ee0caf66e724762eec = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_68fad001fe2d861683fab73925d1e1f59ebd52fb796fe2ee0caf66e724762eec->enter($__internal_68fad001fe2d861683fab73925d1e1f59ebd52fb796fe2ee0caf66e724762eec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "help"));

        // line 139
        echo "            ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "help", array()), "html", null, true));
        echo "
          ";
        
        $__internal_68fad001fe2d861683fab73925d1e1f59ebd52fb796fe2ee0caf66e724762eec->leave($__internal_68fad001fe2d861683fab73925d1e1f59ebd52fb796fe2ee0caf66e724762eec_prof);

    }

    // line 144
    public function block_content($context, array $blocks = array())
    {
        $__internal_0c3f292b082efffe6bbfcebf02aee96ec8573791c2e488e4653d6788e0845587 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c3f292b082efffe6bbfcebf02aee96ec8573791c2e488e4653d6788e0845587->enter($__internal_0c3f292b082efffe6bbfcebf02aee96ec8573791c2e488e4653d6788e0845587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 145
        echo "          <a id=\"main-content\"></a>
          ";
        // line 146
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
        echo "
        ";
        
        $__internal_0c3f292b082efffe6bbfcebf02aee96ec8573791c2e488e4653d6788e0845587->leave($__internal_0c3f292b082efffe6bbfcebf02aee96ec8573791c2e488e4653d6788e0845587_prof);

    }

    // line 152
    public function block_sidebar_second($context, array $blocks = array())
    {
        $__internal_5f7d0d9d16f08b21bc18d19267b351e754e221d075d80f6c083497b8887905ee = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f7d0d9d16f08b21bc18d19267b351e754e221d075d80f6c083497b8887905ee->enter($__internal_5f7d0d9d16f08b21bc18d19267b351e754e221d075d80f6c083497b8887905ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar_second"));

        // line 153
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 154
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_second", array()), "html", null, true));
        echo "
          </aside>
        ";
        
        $__internal_5f7d0d9d16f08b21bc18d19267b351e754e221d075d80f6c083497b8887905ee->leave($__internal_5f7d0d9d16f08b21bc18d19267b351e754e221d075d80f6c083497b8887905ee_prof);

    }

    // line 163
    public function block_footer($context, array $blocks = array())
    {
        $__internal_31d91014489abd9dde8785f0899710c5a1744152e16e735e38afaa0aa299053a = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_31d91014489abd9dde8785f0899710c5a1744152e16e735e38afaa0aa299053a->enter($__internal_31d91014489abd9dde8785f0899710c5a1744152e16e735e38afaa0aa299053a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

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
        
        $__internal_31d91014489abd9dde8785f0899710c5a1744152e16e735e38afaa0aa299053a->leave($__internal_31d91014489abd9dde8785f0899710c5a1744152e16e735e38afaa0aa299053a_prof);

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
