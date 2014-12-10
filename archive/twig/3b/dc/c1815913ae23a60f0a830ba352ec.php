<?php

/* default/layout/course_navigation.tpl */
class __TwigTemplate_3bdcc1815913ae23a60f0a830ba352ec extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        if (((isset($context["show_header"]) ? $context["show_header"] : null) == true)) {
            // line 3
            echo "
    ";
            // line 4
            if ((!(null === (isset($context["show_course_shortcut"]) ? $context["show_course_shortcut"] : null)))) {
                // line 5
                echo "        <div class=\"span12\">
            ";
                // line 6
                echo (isset($context["show_course_shortcut"]) ? $context["show_course_shortcut"] : null);
                echo "
        </div>
    ";
            }
            // line 9
            echo "
    ";
            // line 10
            if ((!(null === (isset($context["show_course_navigation_menu"]) ? $context["show_course_navigation_menu"] : null)))) {
                echo "    
        <script>                    
            \$(document).ready( function() {
                if (readCookie('menu_state') == 0) {
                    swap_menu();
                }
            });                    
            function createCookie(name, value, days) {
                if (days) {
                    var date = new Date();
                    date.setTime(date.getTime()+(days*24*60*60*1000));
                    var expires = \"; expires=\"+date.toGMTString();
                }
                else var expires = \"\";
                document.cookie = name+\"=\"+value+expires+\"; path=/\";
            }
            function readCookie(name) {
                var nameEQ = name + \"=\";
                var ca = document.cookie.split(';');
                for (var i = 0; i < ca.length; i++)
                {
                    var c = ca[i];
                    while (c.charAt(0)==' ') c = c.substring(1,c.length);
                    if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
                }
                return null;
            }
            function swap_menu() {
                toolnavlist_el = document.getElementById('toolnav');
                center_el = document.getElementById('center');
                swap_menu_link_el = document.getElementById('swap_menu_link');

                if (toolnavlist_el.style.display == 'none') {
                    toolnavlist_el.style.display = '';
                    if (center_el) {
                        center_el.style.margin = '0 190px 0 0';
                    }
                    swap_menu_link_el.innerHTML = '";
                // line 47
                echo get_lang("Hide");
                echo "';
                    createCookie('menu_state',1,10);
                } else {
                    toolnavlist_el.style.display = 'none';
                    if (center_el) {
                        center_el.style.margin = '0 0 0 0';
                    }
                    swap_menu_link_el.innerHTML = '";
                // line 54
                echo get_lang("Show");
                echo "';
                    createCookie('menu_state',0,10);
                }
            }
            document.write('<div class=\"span12 pull-right\"> <a class=\"btn\" href=\"javascript: void(0);\" id=\"swap_menu_link\" onclick=\"javascript: swap_menu();\">";
                // line 58
                echo get_lang("Hide");
                echo "<\\/a></div>');                    
            </script>                    
    ";
                // line 60
                echo (isset($context["show_course_navigation_menu"]) ? $context["show_course_navigation_menu"] : null);
                echo "
    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "default/layout/course_navigation.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 58,  9 => 3,  126 => 59,  118 => 54,  108 => 51,  94 => 43,  88 => 60,  65 => 30,  61 => 29,  236 => 83,  217 => 77,  204 => 74,  198 => 73,  192 => 72,  187 => 70,  176 => 66,  170 => 63,  165 => 62,  143 => 53,  137 => 52,  132 => 50,  122 => 45,  102 => 48,  90 => 38,  84 => 40,  79 => 35,  76 => 54,  74 => 33,  59 => 28,  42 => 20,  39 => 19,  33 => 16,  21 => 7,  17 => 6,  12 => 4,  445 => 374,  316 => 247,  304 => 238,  271 => 208,  128 => 68,  124 => 67,  120 => 66,  116 => 44,  53 => 27,  38 => 13,  23 => 9,  19 => 6,  15 => 5,  182 => 87,  173 => 81,  166 => 78,  158 => 58,  153 => 70,  151 => 69,  145 => 65,  139 => 62,  136 => 61,  133 => 60,  127 => 56,  121 => 52,  115 => 49,  112 => 53,  109 => 42,  99 => 41,  96 => 39,  93 => 39,  87 => 36,  80 => 30,  77 => 36,  71 => 25,  67 => 24,  64 => 35,  51 => 15,  45 => 15,  32 => 10,  18 => 4,  14 => 5,  10 => 2,  7 => 2,  73 => 35,  70 => 19,  60 => 13,  58 => 12,  55 => 26,  50 => 23,  47 => 26,  44 => 6,  41 => 14,  30 => 11,  27 => 10,  25 => 12,  22 => 5,  20 => 1,  311 => 145,  305 => 142,  302 => 141,  299 => 140,  294 => 136,  288 => 133,  285 => 132,  282 => 131,  279 => 129,  276 => 128,  273 => 126,  265 => 121,  260 => 118,  257 => 117,  254 => 115,  248 => 112,  245 => 111,  242 => 110,  239 => 108,  233 => 105,  230 => 104,  228 => 103,  225 => 80,  219 => 99,  216 => 98,  213 => 97,  210 => 75,  208 => 94,  202 => 92,  199 => 90,  191 => 85,  186 => 82,  183 => 81,  180 => 68,  174 => 76,  171 => 80,  168 => 79,  163 => 61,  157 => 67,  154 => 66,  152 => 65,  149 => 54,  147 => 63,  141 => 60,  135 => 57,  129 => 60,  123 => 51,  117 => 48,  111 => 45,  105 => 50,  98 => 53,  92 => 35,  85 => 31,  78 => 27,  75 => 25,  72 => 24,  69 => 23,  66 => 47,  63 => 14,  57 => 27,  54 => 16,  52 => 15,  49 => 16,  46 => 12,  40 => 10,  37 => 18,  34 => 1,  31 => 15,  29 => 11,  26 => 10,);
    }
}
