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
class __TwigTemplate_bd5686fda34f4c15124db4603f14a1bab159e262902d18056cce83e693fd4bb9 extends \Twig\Template
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
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 3
            echo "  ";
            if ((twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 3) == ($context["category_id"] ?? null))) {
                // line 4
                echo "  <div class=\"\">
    ";
                // line 5
                if (twig_get_attribute($this->env, $this->source, $context["category"], "thumb", [], "any", false, false, false, 5)) {
                    // line 6
                    echo "    <div class=\"\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "thumb", [], "any", false, false, false, 6);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 6);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 6);
                    echo "\" class=\"img-thumbnail\" style=\"margin: 0.1rem\" />
    
    </div>
    <a href=\"";
                    // line 9
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 9);
                    echo "\" class=\"\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 9);
                    echo "</a> 
    ";
                }
                // line 11
                echo "    ";
                if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 11)) {
                    // line 12
                    echo "  ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 12));
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 13
                        echo "  ";
                        if ((twig_get_attribute($this->env, $this->source, $context["child"], "category_id", [], "any", false, false, false, 13) == ($context["child_id"] ?? null))) {
                            // line 14
                            echo "  <a href=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 14);
                            echo "\" class=\">&nbsp;&nbsp;&nbsp;- ";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 14);
                            echo "</a> 
  ";
                        } else {
                            // line 15
                            echo " 
  <a href=\"";
                            // line 16
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 16);
                            echo "\" class=\">&nbsp;&nbsp;&nbsp;- ";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 16);
                            echo "</a>
  ";
                        }
                        // line 18
                        echo "  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 19
                    echo "  ";
                }
                // line 20
                echo "  </div>
  
  
  ";
            } else {
                // line 23
                echo " <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 23);
                echo "\" class=\"\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 23);
                echo "</a>
  ";
            }
            // line 25
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
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
        return array (  128 => 26,  122 => 25,  114 => 23,  108 => 20,  105 => 19,  99 => 18,  92 => 16,  89 => 15,  81 => 14,  78 => 13,  73 => 12,  70 => 11,  63 => 9,  52 => 6,  50 => 5,  47 => 4,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/category_rand.twig", "");
    }
}
