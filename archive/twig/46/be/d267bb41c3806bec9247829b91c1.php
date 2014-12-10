<?php

/* default/layout/topbar.tpl */
class __TwigTemplate_46bed267bb41c3806bec9247829b91c1 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!-- Topbar -->
";
        // line 2
        if (((isset($context["show_toolbar"]) ? $context["show_toolbar"] : null) == 1)) {
            // line 3
            echo "    <div id=\"topbar\" class=\"navbar navbar-fixed-top\">
        <div class=\"navbar-inner\">
            <div class=\"container\">              
                <a class=\"brand\" href=\"";
            // line 6
            echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web");
            echo "\">
                    ";
            // line 7
            echo api_get_setting("siteName");
            echo "
                </a>

                ";
            // line 10
            if ($this->getAttribute((isset($context["_u"]) ? $context["_u"] : null), "logged")) {
                // line 11
                echo "                    <div class=\"nav-collapse\">                        
                        <ul class=\"nav\">
                            <li class=\"active\"><a href=\"";
                // line 13
                echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web");
                echo "user_portal.php\"> ";
                echo get_lang("MyCourses");
                echo "</a></li>
                            ";
                // line 23
                echo "                            <li class=\"dropdown\">
                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">";
                // line 24
                echo get_lang("Tracking");
                echo "<b class=\"caret\"></b></a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"";
                // line 26
                echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web_main");
                echo "mySpace/\">";
                echo get_lang("CoursesReporting");
                echo "</a></li>
                                    <li><a href=\"";
                // line 27
                echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web_main");
                echo "mySpace/index.php?view=admin\">";
                echo get_lang("AdminReports");
                echo "</a></li>
                                    <li><a href=\"";
                // line 28
                echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web_main");
                echo "tracking/exams.php\">";
                echo get_lang("ExamsReporting");
                echo "</a></li>
                                    <li class=\"divider\"></li>
                                    <li><a href=\"";
                // line 30
                echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web_main");
                echo "dashboard/\">";
                echo get_lang("Dashboard");
                echo "</a></li>
                                </ul>
                            </li>
                            ";
                // line 33
                if (($this->getAttribute((isset($context["_u"]) ? $context["_u"] : null), "is_admin") == 1)) {
                    // line 34
                    echo "                            <li class=\"dropdown\">
                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">";
                    // line 35
                    echo get_lang("Administration");
                    echo "<b class=\"caret\"></b></a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"";
                    // line 37
                    echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web_main");
                    echo "admin/\">";
                    echo get_lang("Home");
                    echo "</a></li>
                                    <li><a href=\"";
                    // line 38
                    echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web_main");
                    echo "admin/user_list.php\">";
                    echo get_lang("UserList");
                    echo "</a></li>
                                    <li><a href=\"";
                    // line 39
                    echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web_main");
                    echo "admin/course_list.php\">";
                    echo get_lang("CourseList");
                    echo "</a></li>
                                    <li><a href=\"";
                    // line 40
                    echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web_main");
                    echo "admin/session_list.php\">";
                    echo get_lang("SessionList");
                    echo "</a></li>
                                    <li class=\"divider\"></li>
                                    <li><a href=\"";
                    // line 42
                    echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web_main");
                    echo "admin/settings.php\">";
                    echo get_lang("Settings");
                    echo "</a></li>
                                    <li class=\"divider\"></li>
                                    <li><a href=\"";
                    // line 44
                    echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web_main");
                    echo "admin/settings.php?category=Plugins\">";
                    echo get_lang("Plugins");
                    echo "</a></li>
                                    <li><a href=\"";
                    // line 45
                    echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web_main");
                    echo "admin/settings.php?category=Regions\">";
                    echo get_lang("Regions");
                    echo "</a></li>
                                </ul>
                            </li>

                            <li class=\"dropdown\">
                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">";
                    // line 50
                    echo get_lang("Add");
                    echo "<b class=\"caret\"></b></a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"";
                    // line 52
                    echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web_main");
                    echo "admin/user_add.php\">";
                    echo get_lang("User");
                    echo "</a></li>
                                    <li><a href=\"";
                    // line 53
                    echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web_main");
                    echo "admin/course_add.php\">";
                    echo get_lang("Course");
                    echo "</a></li>
                                    <li><a href=\"";
                    // line 54
                    echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web_main");
                    echo "admin/session_add.php\">";
                    echo get_lang("Session");
                    echo "</a></li>
                                </ul>
                            </li>
                            ";
                }
                // line 58
                echo "                        </ul>
                

                        ";
                // line 61
                if (($this->getAttribute((isset($context["_u"]) ? $context["_u"] : null), "is_admin") == 1)) {
                    // line 62
                    echo "                        <form class=\"navbar-search pull-left\" action=\"";
                    echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web_main");
                    echo "admin/user_list.php\" method=\"get\">
                            <input type=\"text\" class=\"search-query span2\" placeholder=\"";
                    // line 63
                    echo get_lang("SearchUsers");
                    echo "\" name=\"keyword\">
                        </form>
                        ";
                }
                // line 66
                echo "                
                        <ul class=\"nav pull-right\">
                            <li><a href=\"";
                // line 68
                echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web_main");
                echo "social/home.php\"><img src=\"";
                echo $this->getAttribute((isset($context["_u"]) ? $context["_u"] : null), "avatar_small");
                echo "\"/></a></li>
                            <li class=\"dropdown\">
                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\"  href=\"#\">";
                // line 70
                echo $this->getAttribute((isset($context["_u"]) ? $context["_u"] : null), "complete_name");
                echo "<b class=\"caret\"></b></a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"";
                // line 72
                echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web_main");
                echo "social/home.php\">";
                echo get_lang("Profile");
                echo "</a></li>
                                    <li><a href=\"";
                // line 73
                echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web_main");
                echo "calendar/agenda_js.php?type=personal\">";
                echo get_lang("MyAgenda");
                echo "</a></li>
                                    <li><a href=\"";
                // line 74
                echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web_main");
                echo "messages/inbox.php\">";
                echo get_lang("Inbox");
                echo "</a></li>
                                    <li><a href=\"";
                // line 75
                echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web_main");
                echo "auth/my_progress.php\">";
                echo get_lang("MyReporting");
                echo "</a></li>
                                    <!--<li class=\"divider\"></li>
                                    <li><a href=\"";
                // line 77
                echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web_main");
                echo "social/invitations.php\">";
                echo get_lang("PendingInvitations");
                echo "</a></li> -->
                                </ul>
                            </li>
                            <li><a href=\"";
                // line 80
                echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web");
                echo "index.php?logout=logout&uid=";
                echo $this->getAttribute((isset($context["_u"]) ? $context["_u"] : null), "user_id");
                echo "\">";
                echo get_lang("Logout");
                echo "</a></li>
                        </ul>
                    </div> <!-- /nav collapse -->
                ";
            }
            // line 83
            echo "                 
            </div> <!-- /container-fluid-->
        </div><!-- /navbar-inner -->
    </div><!-- /topbar -->
    <div id=\"topbar_push\"></div>
";
        }
    }

    public function getTemplateName()
    {
        return "default/layout/topbar.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 83,  217 => 77,  204 => 74,  198 => 73,  192 => 72,  187 => 70,  176 => 66,  170 => 63,  165 => 62,  143 => 53,  137 => 52,  132 => 50,  122 => 45,  102 => 40,  90 => 38,  84 => 37,  79 => 35,  76 => 34,  74 => 33,  59 => 28,  42 => 24,  39 => 23,  33 => 13,  21 => 7,  17 => 6,  12 => 3,  445 => 374,  316 => 247,  304 => 238,  271 => 208,  128 => 68,  124 => 67,  120 => 66,  116 => 44,  53 => 27,  38 => 13,  23 => 7,  19 => 6,  15 => 5,  182 => 87,  173 => 81,  166 => 78,  158 => 58,  153 => 70,  151 => 69,  145 => 65,  139 => 62,  136 => 61,  133 => 60,  127 => 56,  121 => 52,  115 => 49,  112 => 64,  109 => 42,  99 => 41,  96 => 39,  93 => 39,  87 => 36,  80 => 30,  77 => 29,  71 => 25,  67 => 24,  64 => 35,  51 => 15,  45 => 15,  32 => 10,  18 => 4,  14 => 3,  10 => 2,  7 => 1,  73 => 20,  70 => 19,  60 => 13,  58 => 12,  55 => 16,  50 => 8,  47 => 26,  44 => 6,  41 => 14,  30 => 11,  27 => 10,  25 => 5,  22 => 5,  20 => 1,  311 => 145,  305 => 142,  302 => 141,  299 => 140,  294 => 136,  288 => 133,  285 => 132,  282 => 131,  279 => 129,  276 => 128,  273 => 126,  265 => 121,  260 => 118,  257 => 117,  254 => 115,  248 => 112,  245 => 111,  242 => 110,  239 => 108,  233 => 105,  230 => 104,  228 => 103,  225 => 80,  219 => 99,  216 => 98,  213 => 97,  210 => 75,  208 => 94,  202 => 92,  199 => 90,  191 => 85,  186 => 82,  183 => 81,  180 => 68,  174 => 76,  171 => 80,  168 => 79,  163 => 61,  157 => 67,  154 => 66,  152 => 65,  149 => 54,  147 => 63,  141 => 60,  135 => 57,  129 => 54,  123 => 51,  117 => 48,  111 => 45,  105 => 44,  98 => 53,  92 => 35,  85 => 31,  78 => 27,  75 => 25,  72 => 24,  69 => 23,  66 => 30,  63 => 14,  57 => 18,  54 => 16,  52 => 15,  49 => 16,  46 => 12,  40 => 10,  37 => 2,  34 => 1,  31 => 5,  29 => 11,  26 => 3,);
    }
}
