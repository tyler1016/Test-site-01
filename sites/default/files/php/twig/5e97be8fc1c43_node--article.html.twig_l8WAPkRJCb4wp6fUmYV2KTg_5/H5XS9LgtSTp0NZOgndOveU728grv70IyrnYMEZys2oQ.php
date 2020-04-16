<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/showcase_lite/templates/node--article.html.twig */
class __TwigTemplate_66886003b57285cb553ec13b8cce40313c98cb912cbce71a1652dae37c9af27f extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'meta_area' => [$this, 'block_meta_area'],
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 11, "trans" => 30];
        $filters = ["escape" => 10, "format_date" => 28, "without" => 67];
        $functions = ["attach_library" => 47];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'trans'],
                ['escape', 'format_date', 'without'],
                ['attach_library']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doGetParent(array $context)
    {
        // line 8
        return "node.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "themes/showcase_lite/templates/node--article.html.twig"));

        $this->parent = $this->loadTemplate("node.html.twig", "themes/showcase_lite/templates/node--article.html.twig", 8);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    // line 9
    public function block_meta_area($context, array $blocks = [])
    {
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "meta_area"));

        // line 10
        echo "  ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null)), "html", null, true);
        echo "
  ";
        // line 11
        if ( !($context["page"] ?? null)) {
            // line 12
            echo "    <h2";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["title_attributes"] ?? null), "addClass", [0 => "node__title"], "method")), "html", null, true);
            echo ">
      <a href=\"";
            // line 13
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null)), "html", null, true);
            echo "\" rel=\"bookmark\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
            echo "</a>
    </h2>
  ";
        }
        // line 16
        echo "  ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null)), "html", null, true);
        echo "
  ";
        // line 17
        if (($context["display_submitted"] ?? null)) {
            // line 18
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_picture"] ?? null)), "html", null, true);
            echo "
  ";
        }
        // line 20
        echo "  ";
        if (((($context["display_submitted"] ?? null) || $this->getAttribute(($context["node"] ?? null), "comment", [])) || ((($context["view_mode"] ?? null) == "full") && $this->getAttribute(($context["mt_setting"] ?? null), "reading_time", [])))) {
            // line 21
            echo "    <div class=\"node__meta\">
       <ul class=\"inline-list\">
          ";
            // line 23
            if ((($context["display_submitted"] ?? null) || ($this->getAttribute(($context["node"] ?? null), "comment", []) && (($context["comment_count"] ?? null) > 0)))) {
                // line 24
                echo "            <li class=\"inline-list__item\">
              ";
                // line 25
                if (($context["display_submitted"] ?? null)) {
                    // line 26
                    echo "                <span";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["author_attributes"] ?? null), "addClass", [0 => "node__submitted-info"], "method")), "html", null, true);
                    echo ">
                  <span class=\"node__submitted-date\">
                    ";
                    // line 28
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFilter('format_date')->getCallable(), [$this->sandbox->ensureToStringAllowed($this->getAttribute(($context["node"] ?? null), "createdtime", [])), "custom", "F d, Y"]), "html", null, true);
                    echo "
                  </span>
                  ";
                    // line 30
                    echo t("<span class=\"node__submitted-info-text\">By</span> @author_name", array("@author_name" => ($context["author_name"] ?? null), ));
                    // line 31
                    echo "                </span>
                ";
                    // line 32
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["metadata"] ?? null)), "html", null, true);
                    echo "
              ";
                }
                // line 34
                echo "              ";
                if (($this->getAttribute(($context["node"] ?? null), "comment", []) && (($context["comment_count"] ?? null) > 0))) {
                    // line 35
                    echo "                <span class=\"comments-count__counter text--colored\">
                  ";
                    // line 36
                    echo \Drupal::translation()->formatPlural(abs(                    // line 38
($context["comment_count"] ?? null)), "1 comment", "@comment_count comments", array("@comment_count" =>                     // line 39
($context["comment_count"] ?? null), ));
                    // line 41
                    echo "                </span>
              ";
                }
                // line 43
                echo "            </li>
          ";
            }
            // line 45
            echo "        ";
            if (((($context["view_mode"] ?? null) == "full") && $this->getAttribute(($context["mt_setting"] ?? null), "reading_time", []))) {
                // line 46
                echo "          <li class=\"inline-list__item\">
            ";
                // line 47
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("showcase_lite/reading-time"), "html", null, true);
                echo "
            <span class=\"reading-time\">
              <span class=\"text--dark\">";
                // line 49
                echo t("Time to read", array());
                echo "</span>
              ";
                // line 50
                if ((($context["minutes"] ?? null) < 1)) {
                    // line 51
                    echo "                ";
                    echo t("less than 1 minute", array());
                    // line 52
                    echo "              ";
                } elseif ((($context["minutes"] ?? null) < 2)) {
                    // line 53
                    echo "                ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["minutes"] ?? null)), "html", null, true);
                    echo " ";
                    echo t("minute", array());
                    // line 54
                    echo "              ";
                } else {
                    // line 55
                    echo "                ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["minutes"] ?? null)), "html", null, true);
                    echo " ";
                    echo t("minutes", array());
                    // line 56
                    echo "              ";
                }
                // line 57
                echo "            </span>
          </li>
        ";
            }
            // line 60
            echo "      </ul>
    </div>
  ";
        }
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    // line 64
    public function block_content($context, array $blocks = [])
    {
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 65
        echo "  ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("showcase_lite/node-article"), "html", null, true);
        echo "
  <div class=\"node__main-content-section\">
    ";
        // line 67
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "comment"), "html", null, true);
        echo "
  </div>
  ";
        // line 69
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "comment", [])), "html", null, true);
        echo "
";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "themes/showcase_lite/templates/node--article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 69,  229 => 67,  223 => 65,  217 => 64,  207 => 60,  202 => 57,  199 => 56,  194 => 55,  191 => 54,  186 => 53,  183 => 52,  180 => 51,  178 => 50,  174 => 49,  169 => 47,  166 => 46,  163 => 45,  159 => 43,  155 => 41,  153 => 39,  152 => 38,  151 => 36,  148 => 35,  145 => 34,  140 => 32,  137 => 31,  135 => 30,  130 => 28,  124 => 26,  122 => 25,  119 => 24,  117 => 23,  113 => 21,  110 => 20,  104 => 18,  102 => 17,  97 => 16,  89 => 13,  84 => 12,  82 => 11,  77 => 10,  71 => 9,  55 => 8,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/showcase_lite/templates/node--article.html.twig", "/Users/michaelfromma/Sites/devdesktop/drupal-8.8.1/themes/showcase_lite/templates/node--article.html.twig");
    }
}
