<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* default/template/extension/module/category_rand.twig */
class __TwigTemplate_52bc902e7ede64807192f6b1b0479f6f494172da48e59fb9e0769c34833db36d extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"list-group\">
  ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["category"]) {
            // line 3
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 3) == ($context["category_id"] ?? null))) {
                // line 4
                echo "    ";
                if ((($context["key"] % 4) == 0)) {
                    // line 5
                    echo "      <div class=\"row\">
    ";
                }
                // line 6
                echo "  
      <div class=\"col-md-3\">
        
        <div class=\"\">
          ";
                // line 10
                if (twig_get_attribute($this->env, $this->source, $context["category"], "thumb", [], "any", false, false, false, 10)) {
                    // line 11
                    echo "            <img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "thumb", [], "any", false, false, false, 11);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 11);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 11);
                    echo "\" class=\"img-thumbnail\" style=\"margin: 0.1rem\" />
          ";
                }
                // line 13
                echo "        </div>
        <b><a style=\"border: none;\" href=\"";
                // line 14
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 14);
                echo "\" class=\"\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 14);
                echo "</a></b>
        <ul style=\"padding: 0.5rem\">
        ";
                // line 16
                if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 16)) {
                    // line 17
                    echo "          ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 17));
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 18
                        echo "            <li><a style=\"border: none;\" href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 18);
                        echo "\" class=\"\">";
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 18);
                        echo "</a></li>       
          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 20
                    echo "        ";
                }
                // line 21
                echo "        </ul>
      </div>

    ";
                // line 24
                if (((($context["key"] + 1) % 4) == 0)) {
                    // line 25
                    echo "      </div>
    ";
                }
                // line 26
                echo "   
    ";
            } else {
                // line 27
                echo " <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 27);
                echo "\" class=\"list-group-item\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 27);
                echo "</a>
    ";
            }
            // line 29
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/category_rand.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 30,  126 => 29,  118 => 27,  114 => 26,  110 => 25,  108 => 24,  103 => 21,  100 => 20,  89 => 18,  84 => 17,  82 => 16,  75 => 14,  72 => 13,  62 => 11,  60 => 10,  54 => 6,  50 => 5,  47 => 4,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/category_rand.twig", "");
    }
}
