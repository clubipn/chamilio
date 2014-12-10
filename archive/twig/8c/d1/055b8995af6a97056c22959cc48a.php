<?php

/* default/layout/layout_2_col.tpl */
class __TwigTemplate_8cd1055b8995af6a97056c22959cc48a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("default/layout/main.tpl");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "default/layout/main.tpl";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "\t";
        // line 5
        echo "
    ";
        // line 7
        echo "    ";
        if ((isset($context["plugin_main_top"]) ? $context["plugin_main_top"] : null)) {
            // line 8
            echo "        <div id=\"plugin_main_top\" class=\"span12\">
            ";
            // line 9
            echo (isset($context["plugin_main_top"]) ? $context["plugin_main_top"] : null);
            echo "
        </div>
    ";
        }
        // line 12
        echo "
\t";
        // line 14
        echo "\t<div class=\"span3 menu-column\">
        ";
        // line 15
        if ((isset($context["plugin_menu_top"]) ? $context["plugin_menu_top"] : null)) {
            // line 16
            echo "            <div id=\"plugin_menu_top\">
                ";
            // line 17
            echo (isset($context["plugin_menu_top"]) ? $context["plugin_menu_top"] : null);
            echo "
            </div>
        ";
        }
        // line 20
        echo "
\t    ";
        // line 22
        echo "\t\t";
        if (($this->getAttribute((isset($context["_u"]) ? $context["_u"] : null), "logged") == 0)) {
            // line 23
            echo "\t\t\t";
            $this->env->loadTemplate("default/layout/login_form.tpl")->display($context);
            // line 24
            echo "\t\t";
        }
        // line 25
        echo "        <div class=\"block_user_info\">
\t\t";
        // line 27
        echo "        ";
        echo (isset($context["user_image_block"]) ? $context["user_image_block"] : null);
        echo "
        

        ";
        // line 31
        echo "\t\t";
        echo (isset($context["profile_block"]) ? $context["profile_block"] : null);
        echo "
        </div>
        <div class=\"block_tools_info\">
        ";
        // line 35
        echo "\t\t";
        echo (isset($context["course_block"]) ? $context["course_block"] : null);
        echo "

        ";
        // line 38
        echo "\t\t";
        echo (isset($context["teacher_block"]) ? $context["teacher_block"] : null);
        echo "
        </div>
        <div class=\"user_notification\">
\t\t";
        // line 42
        echo "\t\t";
        echo (isset($context["notice_block"]) ? $context["notice_block"] : null);
        echo "

        ";
        // line 45
        echo "\t\t";
        echo (isset($context["help_block"]) ? $context["help_block"] : null);
        echo "

\t\t";
        // line 48
        echo "\t\t";
        echo (isset($context["navigation_course_links"]) ? $context["navigation_course_links"] : null);
        echo "

\t\t";
        // line 51
        echo "\t\t";
        echo (isset($context["reservation_block"]) ? $context["reservation_block"] : null);
        echo "

\t\t";
        // line 54
        echo "\t\t";
        echo (isset($context["search_block"]) ? $context["search_block"] : null);
        echo "
        </div>
\t\t";
        // line 57
        echo "\t\t";
        echo (isset($context["classes_block"]) ? $context["classes_block"] : null);
        echo "

\t\t";
        // line 60
        echo "\t\t";
        echo (isset($context["skills_block"]) ? $context["skills_block"] : null);
        echo "
        
\t\t";
        // line 63
        echo "        ";
        // line 64
        echo "
        ";
        // line 65
        if ((isset($context["plugin_menu_bottom"]) ? $context["plugin_menu_bottom"] : null)) {
            // line 66
            echo "            <div id=\"plugin_menu_bottom\">
                ";
            // line 67
            echo (isset($context["plugin_menu_bottom"]) ? $context["plugin_menu_bottom"] : null);
            echo "
            </div>
        ";
        }
        // line 70
        echo "\t</div>

\t<div class=\"span9 content-column\">
        ";
        // line 74
        echo "        ";
        if ((isset($context["plugin_content_top"]) ? $context["plugin_content_top"] : null)) {
            // line 75
            echo "            <div id=\"plugin_content_top\">
                ";
            // line 76
            echo (isset($context["plugin_content_top"]) ? $context["plugin_content_top"] : null);
            echo "
            </div>
        ";
        }
        // line 79
        echo "
\t\t";
        // line 81
        echo "        ";
        if ((isset($context["home_page_block"]) ? $context["home_page_block"] : null)) {
            // line 82
            echo "            <section id=\"homepage\">
                <div class=\"row\">
                    <div class=\"span9\">
                    ";
            // line 85
            echo (isset($context["home_page_block"]) ? $context["home_page_block"] : null);
            echo "
                    </div>
                </div>
            </section>
        ";
        }
        // line 90
        echo "
\t\t";
        // line 92
        echo "\t\t";
        echo (isset($context["sniff_notification"]) ? $context["sniff_notification"] : null);
        echo "

        ";
        // line 94
        $this->env->loadTemplate("default/layout/page_body.tpl")->display($context);
        // line 95
        echo "
        ";
        // line 97
        echo "        ";
        if ((isset($context["welcome_to_course_block"]) ? $context["welcome_to_course_block"] : null)) {
            // line 98
            echo "            <section id=\"welcome_to_course\">
            ";
            // line 99
            echo (isset($context["welcome_to_course_block"]) ? $context["welcome_to_course_block"] : null);
            echo "
            </section>
        ";
        }
        // line 102
        echo "
        ";
        // line 103
        if ((!(null === (isset($context["content"]) ? $context["content"] : null)))) {
            // line 104
            echo "            <section id=\"main_content\">
                ";
            // line 105
            echo (isset($context["content"]) ? $context["content"] : null);
            echo "
            </section>
        ";
        }
        // line 108
        echo "
\t\t";
        // line 110
        echo "        ";
        if ((isset($context["announcements_block"]) ? $context["announcements_block"] : null)) {
            // line 111
            echo "            <section id=\"announcements\">
            ";
            // line 112
            echo (isset($context["announcements_block"]) ? $context["announcements_block"] : null);
            echo "
            </section>
        ";
        }
        // line 115
        echo "
        ";
        // line 117
        echo "        ";
        if ((isset($context["course_category_block"]) ? $context["course_category_block"] : null)) {
            // line 118
            echo "            <section id=\"course_category\">
                <div class=\"row\">
                    <div class=\"span9\">
                    ";
            // line 121
            echo (isset($context["course_category_block"]) ? $context["course_category_block"] : null);
            echo "
                    </div>
                </div>
            </section>
        ";
        }
        // line 126
        echo "
\t\t";
        // line 128
        echo "\t\t";
        $this->env->loadTemplate("default/layout/hot_courses.tpl")->display($context);
        // line 129
        echo "
        ";
        // line 131
        echo "        ";
        if ((isset($context["plugin_content_bottom"]) ? $context["plugin_content_bottom"] : null)) {
            // line 132
            echo "            <div id=\"plugin_content_bottom\">
                ";
            // line 133
            echo (isset($context["plugin_content_bottom"]) ? $context["plugin_content_bottom"] : null);
            echo "
            </div>
        ";
        }
        // line 136
        echo "        &nbsp;
\t</div>

    ";
        // line 140
        echo "    ";
        if ((isset($context["plugin_main_bottom"]) ? $context["plugin_main_bottom"] : null)) {
            // line 141
            echo "        <div id=\"plugin_main_bottom\" class=\"span12\">
            ";
            // line 142
            echo (isset($context["plugin_main_bottom"]) ? $context["plugin_main_bottom"] : null);
            echo "
        </div>
    ";
        }
        // line 145
        echo "
";
    }

    public function getTemplateName()
    {
        return "default/layout/layout_2_col.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  311 => 145,  305 => 142,  302 => 141,  299 => 140,  294 => 136,  288 => 133,  285 => 132,  282 => 131,  279 => 129,  276 => 128,  273 => 126,  265 => 121,  260 => 118,  257 => 117,  254 => 115,  248 => 112,  245 => 111,  242 => 110,  239 => 108,  233 => 105,  230 => 104,  228 => 103,  225 => 102,  219 => 99,  216 => 98,  213 => 97,  210 => 95,  208 => 94,  202 => 92,  199 => 90,  191 => 85,  186 => 82,  183 => 81,  180 => 79,  174 => 76,  171 => 75,  168 => 74,  163 => 70,  157 => 67,  154 => 66,  152 => 65,  149 => 64,  147 => 63,  141 => 60,  135 => 57,  129 => 54,  123 => 51,  117 => 48,  111 => 45,  105 => 42,  98 => 38,  92 => 35,  85 => 31,  78 => 27,  75 => 25,  72 => 24,  69 => 23,  66 => 22,  63 => 20,  57 => 17,  54 => 16,  52 => 15,  49 => 14,  46 => 12,  40 => 9,  37 => 8,  34 => 7,  31 => 5,  29 => 4,  26 => 3,);
    }
}
