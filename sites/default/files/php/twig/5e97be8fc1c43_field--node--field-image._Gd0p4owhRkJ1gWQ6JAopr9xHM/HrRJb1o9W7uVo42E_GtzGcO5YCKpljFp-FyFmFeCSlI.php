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

/* themes/showcase_lite/templates/field--node--field-image.html.twig */
class __TwigTemplate_34f6ea1c0a40e6359fcd6550b915017ea3e3a8af6c61090fd0485db9990ec17f extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 41, "if" => 55, "for" => 76];
        $filters = ["clean_class" => 43, "escape" => 54, "length" => 74];
        $functions = ["attach_library" => 54];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['clean_class', 'escape', 'length'],
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

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "themes/showcase_lite/templates/field--node--field-image.html.twig"));

        // line 41
        $context["classes"] = [0 => "field", 1 => ("field--name-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 43
($context["field_name"] ?? null)))), 2 => ("field--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 44
($context["field_type"] ?? null)))), 3 => ("field--label-" . $this->sandbox->ensureToStringAllowed(        // line 45
($context["label_display"] ?? null)))];
        // line 49
        $context["title_classes"] = [0 => "field__label", 1 => (((        // line 51
($context["label_display"] ?? null) == "visually_hidden")) ? ("visually-hidden") : (""))];
        // line 54
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("showcase_lite/node-images"), "html", null, true);
        echo "
";
        // line 55
        if ((($context["view_mode"] ?? null) == "full")) {
            // line 56
            echo "  ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("showcase_lite/magnific-popup-field-image-init"), "html", null, true);
            echo "
";
        }
        // line 58
        if (($context["label_hidden"] ?? null)) {
            // line 59
            echo "  ";
            if (($context["multiple"] ?? null)) {
                // line 60
                echo "    <div";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null), 1 => "field__items"], "method")), "html", null, true);
                echo ">
      <div class=\"images-container clearfix\">
        <div class=\"image-preview clearfix\">
          <div class=\"image-wrapper clearfix\">
            <div";
                // line 64
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["items"] ?? null), 0, [], "array"), "attributes", []), "addClass", [0 => "field__item"], "method")), "html", null, true);
                echo ">
              ";
                // line 65
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["items"] ?? null), 0, [], "array"), "content", [])), "html", null, true);
                echo "
            </div>
          </div>
          ";
                // line 68
                if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["items"] ?? null), 0, [], "array"), "content", []), "#item", [], "array"), "title", []) && (($context["view_mode"] ?? null) == "full"))) {
                    // line 69
                    echo "            <div class=\"image-caption clearfix\">
              <h4>";
                    // line 70
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["items"] ?? null), 0, [], "array"), "content", []), "#item", [], "array"), "title", [])), "html", null, true);
                    echo "</h4>
            </div>
          ";
                }
                // line 73
                echo "        </div>
        ";
                // line 74
                if (((twig_length_filter($this->env, ($context["items"] ?? null)) > 1) && (($context["view_mode"] ?? null) == "full"))) {
                    // line 75
                    echo "          <div class=\"image-listing-items clearfix\">
            ";
                    // line 76
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 77
                        echo "              ";
                        if (($this->getAttribute(($context["items"] ?? null), 0, [], "array") != $context["item"])) {
                            // line 78
                            echo "                <div class=\"image-listing-item\">
                  <div";
                            // line 79
                            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["item"], "attributes", []), "addClass", [0 => "field__item"], "method")), "html", null, true);
                            echo ">";
                            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "content", [])), "html", null, true);
                            echo "</div>
                </div>
              ";
                        }
                        // line 82
                        echo "            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 83
                    echo "          </div>
        ";
                }
                // line 85
                echo "      </div>
    </div>
  ";
            } else {
                // line 88
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 89
                    echo "      <div class=\"images-container clearfix\">
        <div class=\"image-preview clearfix\">
          <div class=\"image-wrapper clearfix\">
            <div";
                    // line 92
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null), 1 => "field__item"], "method")), "html", null, true);
                    echo ">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "content", [])), "html", null, true);
                    echo "</div>
          </div>
          ";
                    // line 94
                    if (($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "content", []), "#item", [], "array"), "title", []) && (($context["view_mode"] ?? null) == "full"))) {
                        // line 95
                        echo "            <div class=\"image-caption clearfix\">
              <h4>";
                        // line 96
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "content", []), "#item", [], "array"), "title", [])), "html", null, true);
                        echo "</h4>
            </div>
          ";
                    }
                    // line 99
                    echo "        </div>
      </div>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 102
                echo "  ";
            }
        } else {
            // line 104
            echo "  <div";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
            echo ">
    <div";
            // line 105
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["title_attributes"] ?? null), "addClass", [0 => ($context["title_classes"] ?? null)], "method")), "html", null, true);
            echo ">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
            echo "</div>
    ";
            // line 106
            if (($context["multiple"] ?? null)) {
                // line 107
                echo "      <div";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null), 1 => "field__items"], "method")), "html", null, true);
                echo ">
        <div class=\"images-container clearfix\">
          <div class=\"image-preview clearfix\">
            <div class=\"image-wrapper clearfix\">
              <div";
                // line 111
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["items"] ?? null), 0, [], "array"), "attributes", []), "addClass", [0 => "field__item"], "method")), "html", null, true);
                echo ">
                ";
                // line 112
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["items"] ?? null), 0, [], "array"), "content", [])), "html", null, true);
                echo "
              </div>
            </div>
            ";
                // line 115
                if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["items"] ?? null), 0, [], "array"), "content", []), "#item", [], "array"), "title", []) && (($context["view_mode"] ?? null) == "full"))) {
                    // line 116
                    echo "              <div class=\"image-caption clearfix\">
                <h4>";
                    // line 117
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["items"] ?? null), 0, [], "array"), "content", []), "#item", [], "array"), "title", [])), "html", null, true);
                    echo "</h4>
              </div>
            ";
                }
                // line 120
                echo "          </div>
          ";
                // line 121
                if (((twig_length_filter($this->env, ($context["items"] ?? null)) > 1) && (($context["view_mode"] ?? null) == "full"))) {
                    // line 122
                    echo "            <div class=\"image-listing-items clearfix\">
              ";
                    // line 123
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 124
                        echo "                ";
                        if (($this->getAttribute(($context["items"] ?? null), 0, [], "array") != $context["item"])) {
                            // line 125
                            echo "                  <div class=\"image-listing-item\">
                    <div";
                            // line 126
                            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["item"], "attributes", []), "addClass", [0 => "field__item"], "method")), "html", null, true);
                            echo ">";
                            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "content", [])), "html", null, true);
                            echo "</div>
                  </div>
                ";
                        }
                        // line 129
                        echo "              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 130
                    echo "            </div>
          ";
                }
                // line 132
                echo "        </div>
      </div>
    ";
            } else {
                // line 135
                echo "      ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 136
                    echo "        <div class=\"images-container clearfix\">
          <div class=\"image-preview clearfix\">
            <div class=\"image-wrapper clearfix\">
              <div";
                    // line 139
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null), 1 => "field__item"], "method")), "html", null, true);
                    echo ">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "content", [])), "html", null, true);
                    echo "</div>
            </div>
            ";
                    // line 141
                    if (($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "content", []), "#item", [], "array"), "title", []) && (($context["view_mode"] ?? null) == "full"))) {
                        // line 142
                        echo "              <div class=\"image-caption clearfix\">
                <h4>";
                        // line 143
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "content", []), "#item", [], "array"), "title", [])), "html", null, true);
                        echo "</h4>
              </div>
            ";
                    }
                    // line 146
                    echo "          </div>
        </div>
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 149
                echo "    ";
            }
            // line 150
            echo "  </div>
";
        }
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "themes/showcase_lite/templates/field--node--field-image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  315 => 150,  312 => 149,  304 => 146,  298 => 143,  295 => 142,  293 => 141,  286 => 139,  281 => 136,  276 => 135,  271 => 132,  267 => 130,  261 => 129,  253 => 126,  250 => 125,  247 => 124,  243 => 123,  240 => 122,  238 => 121,  235 => 120,  229 => 117,  226 => 116,  224 => 115,  218 => 112,  214 => 111,  206 => 107,  204 => 106,  198 => 105,  193 => 104,  189 => 102,  181 => 99,  175 => 96,  172 => 95,  170 => 94,  163 => 92,  158 => 89,  153 => 88,  148 => 85,  144 => 83,  138 => 82,  130 => 79,  127 => 78,  124 => 77,  120 => 76,  117 => 75,  115 => 74,  112 => 73,  106 => 70,  103 => 69,  101 => 68,  95 => 65,  91 => 64,  83 => 60,  80 => 59,  78 => 58,  72 => 56,  70 => 55,  66 => 54,  64 => 51,  63 => 49,  61 => 45,  60 => 44,  59 => 43,  58 => 41,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/showcase_lite/templates/field--node--field-image.html.twig", "/Users/michaelfromma/Sites/devdesktop/drupal-8.8.1/themes/showcase_lite/templates/field--node--field-image.html.twig");
    }
}
