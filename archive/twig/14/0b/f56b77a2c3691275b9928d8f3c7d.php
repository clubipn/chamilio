<?php

/* default/layout/main_header.tpl */
class __TwigTemplate_140bf56b77a2c3691275b9928d8f3c7d extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<!--[if lt IE 7]> <html lang=\"";
        // line 2
        echo (isset($context["document_language"]) ? $context["document_language"] : null);
        echo "\" class=\"no-js lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>    <html lang=\"";
        // line 3
        echo (isset($context["document_language"]) ? $context["document_language"] : null);
        echo "\" class=\"no-js lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>    <html lang=\"";
        // line 4
        echo (isset($context["document_language"]) ? $context["document_language"] : null);
        echo "\" class=\"no-js lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!--><html lang=\"";
        // line 5
        echo (isset($context["document_language"]) ? $context["document_language"] : null);
        echo "\" class=\"no-js\"> <!--<![endif]-->
<head>
";
        // line 7
        $this->env->loadTemplate("default/layout/head.tpl")->display($context);
        // line 8
        echo "</head>
<body dir=\"";
        // line 9
        echo (isset($context["text_direction"]) ? $context["text_direction"] : null);
        echo "\" class=\"";
        echo (isset($context["section_name"]) ? $context["section_name"] : null);
        echo " ";
        echo (isset($context["login_class"]) ? $context["login_class"] : null);
        echo "\">
<noscript>";
        // line 10
        echo get_lang("NoJavascript");
        echo "</noscript>

";
        // line 12
        if (((isset($context["show_header"]) ? $context["show_header"] : null) == true)) {
            // line 13
            echo "    <div class=\"skip\">
        <ul>
            <li><a href=\"#menu\">";
            // line 15
            echo get_lang("WCAGGoMenu");
            echo "</a></li>
            <li><a href=\"#content\" accesskey=\"2\">";
            // line 16
            echo get_lang("WCAGGoContent");
            echo "</a></li>
        </ul>
    </div>

    <div id=\"wrapper\">
    <div id=\"page\" class=\"page-section\"> <!-- page section -->
        ";
            // line 23
            echo "        <ul id=\"navigation\" class=\"notification-panel\">
            ";
            // line 24
            echo (isset($context["help_content"]) ? $context["help_content"] : null);
            echo "
            ";
            // line 25
            echo (isset($context["bug_notification_link"]) ? $context["bug_notification_link"] : null);
            echo "
        </ul>

        ";
            // line 29
            echo "        ";
            $this->env->loadTemplate("default/layout/topbar.tpl")->display($context);
            // line 30
            echo "
        <div id=\"main\" class=\"container\">
          <header>
            <div class=\"row\">
                <div id=\"header_left\" class=\"span4\">
                    ";
            // line 36
            echo "                    ";
            echo (isset($context["logo"]) ? $context["logo"] : null);
            echo "

                    ";
            // line 39
            echo "                    ";
            if ((!(null === (isset($context["plugin_header_left"]) ? $context["plugin_header_left"] : null)))) {
                // line 40
                echo "                        <div id=\"plugin_header_left\">
                            ";
                // line 41
                echo (isset($context["plugin_header_left"]) ? $context["plugin_header_left"] : null);
                echo "
                        </div>
                    ";
            }
            // line 44
            echo "                </div>
                <div id=\"header_center\" class=\"span3\">
                    ";
            // line 47
            echo "                    ";
            if ((!(null === (isset($context["plugin_header_center"]) ? $context["plugin_header_center"] : null)))) {
                // line 48
                echo "                        <div id=\"plugin_header_center\">
                            ";
                // line 49
                echo (isset($context["plugin_header_center"]) ? $context["plugin_header_center"] : null);
                echo "
                        </div>
                    ";
            }
            // line 52
            echo "                    &nbsp;
                </div>
                <div id=\"header_right\" class=\"span5\">
                    <ul id=\"notifications\" class=\"nav nav-pills pull-right\">
                        ";
            // line 56
            echo (isset($context["notification_menu"]) ? $context["notification_menu"] : null);
            echo "
                    </ul>

                    ";
            // line 60
            echo "                    ";
            if ((!(null === (isset($context["plugin_header_right"]) ? $context["plugin_header_right"] : null)))) {
                // line 61
                echo "                        <div id=\"plugin_header_right\">
                            ";
                // line 62
                echo (isset($context["plugin_header_right"]) ? $context["plugin_header_right"] : null);
                echo "
                        </div>
                    ";
            }
            // line 65
            echo "                    &nbsp;
                </div>
            </div>

            ";
            // line 69
            if ((isset($context["plugin_header_main"]) ? $context["plugin_header_main"] : null)) {
                // line 70
                echo "                <div class=\"row\">
                    <div class=\"span12\">
                        <div id=\"plugin_header_main\">
                            ";
                // line 73
                echo (isset($context["plugin_header_main"]) ? $context["plugin_header_main"] : null);
                echo "
                        </div>
                    </div>
                </div>
            ";
            }
            // line 78
            echo "            ";
            // line 79
            echo "            ";
            $this->env->loadTemplate("default/layout/menu.tpl")->display($context);
            // line 80
            echo "            ";
            // line 81
            echo "            ";
            echo (isset($context["breadcrumb"]) ? $context["breadcrumb"] : null);
            echo "
        </header>

        <div id=\"top_main_content\" class=\"row\">

        ";
            // line 87
            echo "        ";
            $this->env->loadTemplate("default/layout/course_navigation.tpl")->display($context);
        }
    }

    public function getTemplateName()
    {
        return "default/layout/main_header.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 87,  173 => 81,  166 => 78,  158 => 73,  153 => 70,  151 => 69,  145 => 65,  139 => 62,  136 => 61,  133 => 60,  127 => 56,  121 => 52,  115 => 49,  112 => 48,  109 => 47,  99 => 41,  96 => 40,  93 => 39,  87 => 36,  80 => 30,  77 => 29,  71 => 25,  67 => 24,  64 => 23,  51 => 15,  45 => 12,  32 => 9,  18 => 4,  14 => 3,  10 => 2,  7 => 1,  73 => 20,  70 => 19,  60 => 13,  58 => 12,  55 => 16,  50 => 8,  47 => 13,  44 => 6,  41 => 5,  30 => 11,  27 => 7,  25 => 5,  22 => 5,  20 => 1,  311 => 145,  305 => 142,  302 => 141,  299 => 140,  294 => 136,  288 => 133,  285 => 132,  282 => 131,  279 => 129,  276 => 128,  273 => 126,  265 => 121,  260 => 118,  257 => 117,  254 => 115,  248 => 112,  245 => 111,  242 => 110,  239 => 108,  233 => 105,  230 => 104,  228 => 103,  225 => 102,  219 => 99,  216 => 98,  213 => 97,  210 => 95,  208 => 94,  202 => 92,  199 => 90,  191 => 85,  186 => 82,  183 => 81,  180 => 79,  174 => 76,  171 => 80,  168 => 79,  163 => 70,  157 => 67,  154 => 66,  152 => 65,  149 => 64,  147 => 63,  141 => 60,  135 => 57,  129 => 54,  123 => 51,  117 => 48,  111 => 45,  105 => 44,  98 => 38,  92 => 35,  85 => 31,  78 => 27,  75 => 25,  72 => 24,  69 => 23,  66 => 22,  63 => 14,  57 => 17,  54 => 16,  52 => 15,  49 => 14,  46 => 12,  40 => 10,  37 => 2,  34 => 1,  31 => 5,  29 => 8,  26 => 3,);
    }
}
