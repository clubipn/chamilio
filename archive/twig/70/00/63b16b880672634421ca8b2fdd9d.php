<?php

/* default/layout/menu.tpl */
class __TwigTemplate_700063b16b880672634421ca8b2fdd9d extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"navbar subnav\">
    <div class=\"navbar-inner\">
        <div class=\"container\">
            <a data-toggle=\"collapse\" data-target=\".nav-collapse\" class=\"btn btn-navbar\">
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </a>
            <a class=\"brand\" href=\"";
        // line 9
        echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web");
        echo "\">";
        echo (isset($context["portal_name"]) ? $context["portal_name"] : null);
        echo "</a>
            <div class=\"nav-collapse\">
                <ul class=\"nav\">
                    ";
        // line 12
        echo (isset($context["menu"]) ? $context["menu"] : null);
        echo "
                </ul>

                ";
        // line 15
        if (($this->getAttribute((isset($context["_u"]) ? $context["_u"] : null), "logged") == 1)) {
            // line 16
            echo "                <ul class=\"nav pull-right\">

                    ";
            // line 18
            if ((!(null === (isset($context["user_notifications"]) ? $context["user_notifications"] : null)))) {
                // line 19
                echo "                    <li class=\"notification-marker\">
                        <a href=\"";
                // line 20
                echo (isset($context["message_url"]) ? $context["message_url"] : null);
                echo "\">";
                echo (isset($context["user_notifications"]) ? $context["user_notifications"] : null);
                echo "</a>
                    </li>
                    ";
            }
            // line 23
            echo "
                    <li class=\"dropdown\">

                        ";
            // line 26
            if (($this->getAttribute((isset($context["_u"]) ? $context["_u"] : null), "status") != 6)) {
                // line 27
                echo "
                        <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                            <img src=\"";
                // line 29
                echo $this->getAttribute((isset($context["_u"]) ? $context["_u"] : null), "avatar_small");
                echo "\"/>
                            ";
                // line 30
                echo $this->getAttribute((isset($context["_u"]) ? $context["_u"] : null), "complete_name");
                echo "
                            <b class=\"caret\"></b>
                        </a>
                        <ul class=\"dropdown-menu\">
                            <li>
                                ";
                // line 35
                echo (isset($context["profile_link"]) ? $context["profile_link"] : null);
                echo "
                                ";
                // line 36
                echo (isset($context["message_link"]) ? $context["message_link"] : null);
                echo "
                            </li>
                        </ul>
                        ";
            }
            // line 40
            echo "
                    <li>
                        <a id=\"logout_button\" class=\"logout\" title=\"";
            // line 42
            echo get_lang("Logout");
            echo "\" href=\"";
            echo (isset($context["logout_link"]) ? $context["logout_link"] : null);
            echo "\" >
                            <img src=\"";
            // line 43
            echo Template::get_icon_path("exit.png", 22);
            echo "\">
                        </a>
                    </li>
                </ul>
                ";
        } else {
            // line 48
            echo "
                    ";
            // line 50
            echo "                    ";
            if ((((isset($context["course_code"]) ? $context["course_code"] : null) != "") && (null === (isset($context["hide_login_link"]) ? $context["hide_login_link"] : null)))) {
                // line 51
                echo "                        <ul class=\"nav pull-right\">
                            <li class=\"dropdown\" style=\"color:white;\">
                                <a href='";
                // line 53
                echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web");
                echo "main/auth/gotocourse.php?firstpage=";
                echo (isset($context["course_code"]) ? $context["course_code"] : null);
                echo "'>
                                    ";
                // line 54
                echo get_lang("LoginEnter");
                echo "
                                </a>
                            </li>
                        </ul>
                    ";
            }
            // line 59
            echo "                ";
        }
        // line 60
        echo "            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "default/layout/menu.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 59,  118 => 54,  108 => 51,  94 => 43,  88 => 42,  65 => 30,  61 => 29,  236 => 83,  217 => 77,  204 => 74,  198 => 73,  192 => 72,  187 => 70,  176 => 66,  170 => 63,  165 => 62,  143 => 53,  137 => 52,  132 => 50,  122 => 45,  102 => 48,  90 => 38,  84 => 40,  79 => 35,  76 => 34,  74 => 33,  59 => 28,  42 => 20,  39 => 19,  33 => 16,  21 => 7,  17 => 9,  12 => 3,  445 => 374,  316 => 247,  304 => 238,  271 => 208,  128 => 68,  124 => 67,  120 => 66,  116 => 44,  53 => 27,  38 => 13,  23 => 7,  19 => 6,  15 => 5,  182 => 87,  173 => 81,  166 => 78,  158 => 58,  153 => 70,  151 => 69,  145 => 65,  139 => 62,  136 => 61,  133 => 60,  127 => 56,  121 => 52,  115 => 49,  112 => 53,  109 => 42,  99 => 41,  96 => 39,  93 => 39,  87 => 36,  80 => 30,  77 => 36,  71 => 25,  67 => 24,  64 => 35,  51 => 15,  45 => 15,  32 => 10,  18 => 4,  14 => 3,  10 => 2,  7 => 1,  73 => 35,  70 => 19,  60 => 13,  58 => 12,  55 => 26,  50 => 23,  47 => 26,  44 => 6,  41 => 14,  30 => 11,  27 => 10,  25 => 12,  22 => 5,  20 => 1,  311 => 145,  305 => 142,  302 => 141,  299 => 140,  294 => 136,  288 => 133,  285 => 132,  282 => 131,  279 => 129,  276 => 128,  273 => 126,  265 => 121,  260 => 118,  257 => 117,  254 => 115,  248 => 112,  245 => 111,  242 => 110,  239 => 108,  233 => 105,  230 => 104,  228 => 103,  225 => 80,  219 => 99,  216 => 98,  213 => 97,  210 => 75,  208 => 94,  202 => 92,  199 => 90,  191 => 85,  186 => 82,  183 => 81,  180 => 68,  174 => 76,  171 => 80,  168 => 79,  163 => 61,  157 => 67,  154 => 66,  152 => 65,  149 => 54,  147 => 63,  141 => 60,  135 => 57,  129 => 60,  123 => 51,  117 => 48,  111 => 45,  105 => 50,  98 => 53,  92 => 35,  85 => 31,  78 => 27,  75 => 25,  72 => 24,  69 => 23,  66 => 30,  63 => 14,  57 => 27,  54 => 16,  52 => 15,  49 => 16,  46 => 12,  40 => 10,  37 => 18,  34 => 1,  31 => 15,  29 => 11,  26 => 3,);
    }
}
