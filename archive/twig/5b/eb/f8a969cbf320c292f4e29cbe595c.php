<?php

/* default/create_course/add_course.tpl */
class __TwigTemplate_5bebf8a969cbf320c292f4e29cbe595c extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo (isset($context["just_created_link"]) ? $context["just_created_link"] : null);
        echo "
<h3>";
        // line 2
        echo get_lang("JustCreated");
        echo " ";
        echo (isset($context["course_title"]) ? $context["course_title"] : null);
        echo "</h3>
<hr />
<h3>";
        // line 4
        echo get_lang("ThingsToDo");
        echo "</h3>
<br />

<div id=\"course_thing_to_do\" class=\"row\">
    <div class=\"span3\">
        <div class=\"thumbnail\">
            <img src=\"";
        // line 10
        echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web_img");
        echo "icons/64/info.png\"/>
            <div class=\"caption\">
                <a href=\"";
        // line 12
        echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web_main");
        echo "course_description/?cidReq=";
        echo (isset($context["course_id"]) ? $context["course_id"] : null);
        echo "\" class=\"btn\">
                    ";
        // line 13
        echo get_lang("AddCourseDescription");
        echo "
                </a>
            </div>
        </div>
    </div>
    <div class=\"span3\">
        <div class=\"thumbnail\">
            <img src=\"";
        // line 20
        echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web_img");
        echo "icons/64/folder_document.png\"/>
            <div class=\"caption\">
                <a href=\"";
        // line 22
        echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web_main");
        echo "document/document.php?cidReq=";
        echo (isset($context["course_id"]) ? $context["course_id"] : null);
        echo "\" class=\"btn\">
                    ";
        // line 23
        echo get_lang("UploadADocument");
        echo "
                </a>    
            </div>
        </div>
    </div>
    <div class=\"span3\">
        <div class=\"thumbnail\">
            <img src=\"";
        // line 30
        echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web_img");
        echo "icons/64/forum.png\"/>
            <div class=\"caption\">
                <a href=\"";
        // line 32
        echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web_main");
        echo "forum/index.php?cidReq=";
        echo (isset($context["course_id"]) ? $context["course_id"] : null);
        echo "\" class=\"btn\">
                    ";
        // line 33
        echo get_lang("AddForum");
        echo "
                </a>
            </div>
        </div>
    </div>
    ";
        // line 38
        if (((api_get_setting("allow_user_course_subscription_by_course_admin") == "true") || ($this->getAttribute((isset($context["_u"]) ? $context["_u"] : null), "is_admin") == 1))) {
            // line 39
            echo "    <div class=\"span3\">
        <div class=\"thumbnail\">
        <img src=\"";
            // line 41
            echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web_img");
            echo "icons/64/user.png\"/>
            <div class=\"caption\">
            <a href=\"";
            // line 43
            echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web_main");
            echo "user/subscribe_user.php?cidReq=";
            echo (isset($context["course_id"]) ? $context["course_id"] : null);
            echo "\" class=\"btn\">
                ";
            // line 44
            echo get_lang("SubscribeUserToCourse");
            echo "
            </a>    
            </div>
        </div>
    </div>
    ";
        }
        // line 50
        echo "        

</div>
    
<div class=\"clear\"></div>";
    }

    public function getTemplateName()
    {
        return "default/create_course/add_course.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 50,  105 => 44,  99 => 43,  94 => 41,  90 => 39,  88 => 38,  80 => 33,  74 => 32,  69 => 30,  59 => 23,  53 => 22,  48 => 20,  38 => 13,  32 => 12,  27 => 10,  18 => 4,  11 => 2,  7 => 1,);
    }
}
