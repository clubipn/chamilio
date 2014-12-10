<?php

/* default/layout/login_form.tpl */
class __TwigTemplate_906cf291db2fa330333727001110c8d2 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if ((isset($context["login_form"]) ? $context["login_form"] : null)) {
            // line 2
            echo "
    <div id=\"login_block\" class=\"well sidebar-nav\">
        ";
            // line 4
            echo (isset($context["login_language_form"]) ? $context["login_language_form"] : null);
            echo "

        ";
            // line 6
            if ((!(null === (isset($context["plugin_login_top"]) ? $context["plugin_login_top"] : null)))) {
                // line 7
                echo "            <div id=\"plugin_login_top\">
                ";
                // line 8
                echo (isset($context["plugin_login_top"]) ? $context["plugin_login_top"] : null);
                echo "
            </div>
        ";
            }
            // line 11
            echo "
        ";
            // line 12
            echo (isset($context["login_failed"]) ? $context["login_failed"] : null);
            echo "

        ";
            // line 14
            echo (isset($context["login_form"]) ? $context["login_form"] : null);
            echo "

        ";
            // line 16
            echo (isset($context["login_options"]) ? $context["login_options"] : null);
            echo "

        ";
            // line 18
            if ((!(null === (isset($context["plugin_login_bottom"]) ? $context["plugin_login_bottom"] : null)))) {
                // line 19
                echo "            <div id=\"plugin_login_bottom\">
                ";
                // line 20
                echo (isset($context["plugin_login_bottom"]) ? $context["plugin_login_bottom"] : null);
                echo "
            </div>
        ";
            }
            // line 23
            echo "    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "default/layout/login_form.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  13 => 4,  83 => 58,  9 => 2,  126 => 59,  118 => 54,  108 => 51,  94 => 43,  88 => 60,  65 => 30,  61 => 29,  236 => 83,  217 => 77,  204 => 74,  198 => 73,  192 => 72,  187 => 70,  176 => 66,  170 => 63,  165 => 62,  143 => 53,  137 => 52,  132 => 50,  122 => 45,  102 => 48,  90 => 38,  84 => 40,  79 => 35,  76 => 54,  74 => 33,  59 => 28,  42 => 16,  39 => 19,  33 => 16,  21 => 7,  17 => 6,  12 => 4,  445 => 374,  316 => 247,  304 => 238,  271 => 208,  128 => 68,  124 => 67,  120 => 66,  116 => 44,  53 => 27,  38 => 13,  23 => 8,  19 => 6,  15 => 5,  182 => 87,  173 => 81,  166 => 78,  158 => 58,  153 => 70,  151 => 69,  145 => 65,  139 => 62,  136 => 61,  133 => 60,  127 => 56,  121 => 52,  115 => 49,  112 => 53,  109 => 42,  99 => 41,  96 => 39,  93 => 39,  87 => 36,  80 => 30,  77 => 36,  71 => 25,  67 => 24,  64 => 35,  51 => 15,  45 => 15,  32 => 12,  18 => 6,  14 => 5,  10 => 2,  7 => 1,  73 => 35,  70 => 19,  60 => 13,  58 => 23,  55 => 26,  50 => 23,  47 => 18,  44 => 6,  41 => 14,  30 => 11,  27 => 10,  25 => 12,  22 => 5,  20 => 7,  311 => 145,  305 => 142,  302 => 141,  299 => 140,  294 => 136,  288 => 133,  285 => 132,  282 => 131,  279 => 129,  276 => 128,  273 => 126,  265 => 121,  260 => 118,  257 => 117,  254 => 115,  248 => 112,  245 => 111,  242 => 110,  239 => 108,  233 => 105,  230 => 104,  228 => 103,  225 => 80,  219 => 99,  216 => 98,  213 => 97,  210 => 75,  208 => 94,  202 => 92,  199 => 90,  191 => 85,  186 => 82,  183 => 81,  180 => 68,  174 => 76,  171 => 80,  168 => 79,  163 => 61,  157 => 67,  154 => 66,  152 => 65,  149 => 54,  147 => 63,  141 => 60,  135 => 57,  129 => 60,  123 => 51,  117 => 48,  111 => 45,  105 => 50,  98 => 53,  92 => 35,  85 => 31,  78 => 27,  75 => 25,  72 => 24,  69 => 23,  66 => 47,  63 => 14,  57 => 27,  54 => 16,  52 => 20,  49 => 19,  46 => 12,  40 => 10,  37 => 14,  34 => 1,  31 => 15,  29 => 11,  26 => 10,);
    }
}
