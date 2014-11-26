<?php

/* partials/base.html.twig */
class __TwigTemplate_9364b21451e250f2edc183f03d21198007f029ee6e37fa96bbf9f02787867b31 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'header' => array($this, 'block_header'),
            'header_extra' => array($this, 'block_header_extra'),
            'header_navigation' => array($this, 'block_header_navigation'),
            'showcase' => array($this, 'block_showcase'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'pagination' => array($this, 'block_pagination'),
            'footer' => array($this, 'block_footer'),
            'bottom' => array($this, 'block_bottom'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 48
        echo "
</head>
<body id=\"top\" class=\"";
        // line 50
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "body_classes", array());
        echo "\">
    <div id=\"sb-site\">
        ";
        // line 52
        $this->displayBlock('header', $context, $blocks);
        // line 68
        echo "
        ";
        // line 69
        $this->displayBlock('showcase', $context, $blocks);
        // line 70
        echo "
        ";
        // line 71
        $this->displayBlock('body', $context, $blocks);
        // line 77
        echo "
        ";
        // line 78
        $this->displayBlock('footer', $context, $blocks);
        // line 86
        echo "    </div>
    <div class=\"sb-slidebar sb-left sb-width-thin\">
        <div id=\"panel\">
        ";
        // line 89
        $this->env->loadTemplate("partials/navigation.html.twig")->display($context);
        // line 90
        echo "        </div>
    </div>
    ";
        // line 92
        $this->displayBlock('bottom', $context, $blocks);
        // line 107
        echo "</body>
</html>
";
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        // line 5
        echo "    <meta charset=\"utf-8\" />
    <title>";
        // line 6
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array())) {
            echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array());
            echo " | ";
        }
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array());
        echo "</title>
    ";
        // line 7
        $this->env->loadTemplate("partials/metadata.html.twig")->display($context);
        // line 8
        echo "    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 9
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/images/favicon.png\" />

    ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 34
        echo "
    ";
        // line 35
        $this->displayBlock('javascripts', $context, $blocks);
    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 12
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css-compiled/nucleus.css", 1 => 102), "method");
        // line 13
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css-compiled/template.css", 1 => 101), "method");
        // line 14
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/custom.css", 1 => 100), "method");
        // line 15
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/font-awesome.min.css", 1 => 100), "method");
        // line 16
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/slidebars.min.css"), "method");
        // line 17
        echo "
        ";
        // line 18
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "lightbox", array())) {
            // line 19
            echo "            ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/featherlight.min.css"), "method");
            // line 20
            echo "        ";
        }
        // line 21
        echo "
        ";
        // line 22
        if ((($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getBrowser", array()) == "msie") && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) == 10))) {
            // line 23
            echo "            ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/nucleus-ie10.css"), "method");
            // line 24
            echo "        ";
        }
        // line 25
        echo "
        ";
        // line 26
        if (((($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getBrowser", array()) == "msie") && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) >= 8)) && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) <= 9))) {
            // line 27
            echo "            ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/nucleus-ie9.css"), "method");
            // line 28
            echo "            ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/pure-0.5.0/grids-min.css"), "method");
            // line 29
            echo "            ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://js/html5shiv-printshiv.min.js"), "method");
            // line 30
            echo "        ";
        }
        // line 31
        echo "
        ";
        // line 32
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "
    ";
    }

    // line 35
    public function block_javascripts($context, array $blocks = array())
    {
        // line 36
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/jquery-2.1.1.min.js", 1 => 101), "method");
        // line 37
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/modernizr.custom.71422.js", 1 => 100), "method");
        // line 38
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/nova-theme.js"), "method");
        // line 39
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/slidebars.min.js"), "method");
        // line 40
        echo "
        ";
        // line 41
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "lightbox", array())) {
            // line 42
            echo "            ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/featherlight.min.js"), "method");
            // line 43
            echo "        ";
        }
        // line 44
        echo "
        ";
        // line 45
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(), "method");
        echo "
    ";
    }

    // line 52
    public function block_header($context, array $blocks = array())
    {
        // line 53
        echo "        <header id=\"header\">

                <div id=\"logo\">
                    <h3><a href=\"";
        // line 56
        echo ((((isset($context["base_url"]) ? $context["base_url"] : null) == "")) ? ("/") : ((isset($context["base_url"]) ? $context["base_url"] : null)));
        echo "\">";
        echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "site", array()), "title", array());
        echo "</a></h3>
                </div>
                <div id=\"navbar\">
                    ";
        // line 59
        $this->displayBlock('header_extra', $context, $blocks);
        // line 60
        echo "                    ";
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 63
        echo "                    <span class=\"panel-activation sb-toggle-left navbar-left menu-btn fa fa-bars\"></span>
                </div>

        </header>
        ";
    }

    // line 59
    public function block_header_extra($context, array $blocks = array())
    {
    }

    // line 60
    public function block_header_navigation($context, array $blocks = array())
    {
        // line 61
        echo "                    ";
        $this->env->loadTemplate("partials/navigation.html.twig")->display($context);
        // line 62
        echo "                    ";
    }

    // line 69
    public function block_showcase($context, array $blocks = array())
    {
    }

    // line 71
    public function block_body($context, array $blocks = array())
    {
        // line 72
        echo "        <section id=\"body\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">
            ";
        // line 73
        $this->displayBlock('content', $context, $blocks);
        // line 74
        echo "            ";
        $this->displayBlock('pagination', $context, $blocks);
        // line 75
        echo "        </section>
        ";
    }

    // line 73
    public function block_content($context, array $blocks = array())
    {
    }

    // line 74
    public function block_pagination($context, array $blocks = array())
    {
    }

    // line 78
    public function block_footer($context, array $blocks = array())
    {
        // line 79
        echo "        <footer id=\"footer\">
            <div class=\"totop\">
                <span><a href=\"#\" id=\"toTop\"><i class=\"fa fa-arrow-up\"></i></a></span>
            </div>
            <p><a href=\"http://getgrav.org\">Grav</a> was <i class=\"fa fa-code\"></i> with <i class=\"fa fa-heart\"></i> by <a href=\"http://www.rockettheme.com\">RocketTheme</a>.</p>
        </footer>
        ";
    }

    // line 92
    public function block_bottom($context, array $blocks = array())
    {
        // line 93
        echo "    <script>
    \$(function () {
        \$(document).ready(function() {
          \$.slidebars({
            hideControlClasses: true,
            scrollLock: true
          });
        });
        ";
        // line 101
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "lightbox", array())) {
            // line 102
            echo "        \$('a[rel=\"lightbox\"]').featherlight();
        ";
        }
        // line 104
        echo "    });
    </script>
    ";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  326 => 104,  322 => 102,  320 => 101,  310 => 93,  307 => 92,  297 => 79,  294 => 78,  289 => 74,  284 => 73,  279 => 75,  276 => 74,  274 => 73,  269 => 72,  266 => 71,  261 => 69,  257 => 62,  254 => 61,  251 => 60,  246 => 59,  238 => 63,  235 => 60,  233 => 59,  225 => 56,  220 => 53,  217 => 52,  211 => 45,  208 => 44,  205 => 43,  202 => 42,  200 => 41,  197 => 40,  194 => 39,  191 => 38,  188 => 37,  185 => 36,  182 => 35,  176 => 32,  173 => 31,  170 => 30,  167 => 29,  164 => 28,  161 => 27,  159 => 26,  156 => 25,  153 => 24,  150 => 23,  148 => 22,  145 => 21,  142 => 20,  139 => 19,  137 => 18,  134 => 17,  131 => 16,  128 => 15,  125 => 14,  122 => 13,  119 => 12,  116 => 11,  112 => 35,  109 => 34,  107 => 11,  102 => 9,  99 => 8,  97 => 7,  89 => 6,  86 => 5,  83 => 4,  77 => 107,  75 => 92,  71 => 90,  69 => 89,  64 => 86,  62 => 78,  59 => 77,  57 => 71,  54 => 70,  52 => 69,  49 => 68,  47 => 52,  42 => 50,  38 => 48,  36 => 4,  31 => 1,);
    }
}
