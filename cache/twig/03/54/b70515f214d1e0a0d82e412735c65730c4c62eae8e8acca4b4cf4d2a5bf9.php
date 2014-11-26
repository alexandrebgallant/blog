<?php

/* pagination.html.twig */
class __TwigTemplate_0354b70515f214d1e0a0d82e412735c65730c4c62eae8e8acca4b4cf4d2a5bf9 extends Twig_Template
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
        // line 1
        if ((twig_length_filter($this->env, (isset($context["pagination"]) ? $context["pagination"] : null)) > 1)) {
            // line 2
            echo "
<ul class=\"pagination\">
    ";
            // line 4
            if ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "hasPrev", array())) {
                // line 5
                echo "        <li><a href=\"";
                echo (isset($context["base_url"]) ? $context["base_url"] : null);
                echo $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "params", array());
                echo $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "prevUrl", array());
                echo "\">&laquo;</a></li>
    ";
            } else {
                // line 7
                echo "        <li><span>&laquo;</span></li>
    ";
            }
            // line 9
            echo "
    ";
            // line 10
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["paginate"]) {
                // line 11
                echo "
        ";
                // line 12
                if ($this->getAttribute($context["paginate"], "isCurrent", array())) {
                    // line 13
                    echo "            <li><span>";
                    echo $this->getAttribute($context["paginate"], "number", array());
                    echo "</span></li>
        ";
                } else {
                    // line 15
                    echo "            <li><a href=\"";
                    echo (isset($context["base_url"]) ? $context["base_url"] : null);
                    echo $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "params", array());
                    echo $this->getAttribute($context["paginate"], "url", array());
                    echo "\">";
                    echo $this->getAttribute($context["paginate"], "number", array());
                    echo "</a></li>
        ";
                }
                // line 17
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['paginate'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "    ";
            if ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "hasNext", array())) {
                // line 20
                echo "        <li><a href=\"";
                echo (isset($context["base_url"]) ? $context["base_url"] : null);
                echo $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "params", array());
                echo $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "nextUrl", array());
                echo "\">&raquo;</a></li>
    ";
            } else {
                // line 22
                echo "        <li><span>&raquo;</span></li>
    ";
            }
            // line 24
            echo "</ul>

";
        }
    }

    public function getTemplateName()
    {
        return "pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 24,  85 => 22,  77 => 20,  74 => 19,  67 => 17,  57 => 15,  51 => 13,  49 => 12,  46 => 11,  42 => 10,  39 => 9,  35 => 7,  27 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }
}
