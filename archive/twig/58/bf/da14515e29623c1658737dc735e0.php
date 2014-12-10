<?php

/* default/layout/hot_courses.tpl */
class __TwigTemplate_58bfda14515e29623c1658737dc735e0 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if (((!(null === (isset($context["hot_courses"]) ? $context["hot_courses"] : null))) && (!twig_test_empty((isset($context["hot_courses"]) ? $context["hot_courses"] : null))))) {
            // line 2
            echo "
<script>
\$(document).ready( function() {
    \$('.star-rating li a').live('click', function(event) {
        var id = \$(this).parents('ul').attr('id');
        \$('#vote_label2_' + id).html(\"";
            // line 7
            echo get_lang("Loading");
            echo "\");
        \$.ajax({
            url: \$(this).attr('data-link'),
            success: function(data) {
                \$(\"#rating_wrapper_\"+id).html(data);
                if (data == 'added') {
                    //\$('#vote_label2_' + id).html(\"";
            // line 13
            echo get_lang("Saved");
            echo "\");
                }
                if (data == 'updated') {
                    //\$('#vote_label2_' + id).html(\"";
            // line 16
            echo get_lang("Saved");
            echo "\");
                }
            }
        });
    });

});
</script>

    <section id=\"hot_courses\">
        <div class=\"row\">
            <div class=\"span9\">
                ";
            // line 28
            if ($this->getAttribute((isset($context["_u"]) ? $context["_u"] : null), "is_admin")) {
                // line 29
                echo "                <span class=\"pull-right\">
                    <a title=\"";
                // line 30
                echo get_lang("Hide");
                echo "\" alt=\"";
                echo get_lang("Hide");
                echo "\" href=\"";
                echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web_main");
                echo "admin/settings.php?search_field=show_hot_courses&submit_button=&_qf__search_settings=&category=search_setting\">
                        <img src=\"";
                // line 31
                echo Template::get_icon_path("visible.png", 32);
                echo "\">
                    </a>
                </span>
                ";
            }
            // line 35
            echo "                ";
            echo Display::page_subheader_and_translate("HottestCourses");
            echo "
            </div>            
                
            ";
            // line 38
            $this->env->loadTemplate("default/layout/hot_course_item.tpl")->display($context);
            // line 39
            echo "        </div>
    </section>
";
        }
    }

    public function getTemplateName()
    {
        return "default/layout/hot_courses.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 29,  16 => 7,  35 => 16,  13 => 4,  83 => 58,  9 => 2,  126 => 59,  118 => 54,  108 => 51,  94 => 43,  88 => 60,  65 => 30,  61 => 29,  236 => 83,  217 => 77,  204 => 74,  198 => 73,  192 => 72,  187 => 70,  176 => 66,  170 => 63,  165 => 62,  143 => 53,  137 => 52,  132 => 50,  122 => 45,  102 => 48,  90 => 38,  84 => 40,  79 => 35,  76 => 54,  74 => 33,  59 => 31,  42 => 16,  39 => 19,  33 => 16,  21 => 9,  17 => 6,  12 => 4,  445 => 374,  316 => 247,  304 => 238,  271 => 208,  128 => 68,  124 => 67,  120 => 66,  116 => 44,  53 => 27,  38 => 13,  23 => 8,  19 => 6,  15 => 5,  182 => 87,  173 => 81,  166 => 78,  158 => 58,  153 => 70,  151 => 69,  145 => 65,  139 => 62,  136 => 61,  133 => 60,  127 => 56,  121 => 52,  115 => 49,  112 => 53,  109 => 42,  99 => 41,  96 => 39,  93 => 39,  87 => 36,  80 => 30,  77 => 36,  71 => 25,  67 => 24,  64 => 35,  51 => 30,  45 => 15,  32 => 14,  18 => 7,  14 => 5,  10 => 2,  7 => 1,  73 => 38,  70 => 19,  60 => 13,  58 => 23,  55 => 26,  50 => 23,  47 => 18,  44 => 6,  41 => 14,  30 => 11,  27 => 10,  25 => 13,  22 => 5,  20 => 7,  311 => 145,  305 => 142,  302 => 141,  299 => 140,  294 => 136,  288 => 133,  285 => 132,  282 => 131,  279 => 129,  276 => 128,  273 => 126,  265 => 121,  260 => 118,  257 => 117,  254 => 115,  248 => 112,  245 => 111,  242 => 110,  239 => 108,  233 => 105,  230 => 104,  228 => 103,  225 => 80,  219 => 99,  216 => 98,  213 => 97,  210 => 75,  208 => 94,  202 => 92,  199 => 90,  191 => 85,  186 => 82,  183 => 81,  180 => 68,  174 => 76,  171 => 80,  168 => 79,  163 => 61,  157 => 67,  154 => 66,  152 => 65,  149 => 54,  147 => 63,  141 => 60,  135 => 57,  129 => 60,  123 => 51,  117 => 48,  111 => 45,  105 => 50,  98 => 53,  92 => 35,  85 => 31,  78 => 27,  75 => 39,  72 => 24,  69 => 23,  66 => 35,  63 => 14,  57 => 27,  54 => 16,  52 => 20,  49 => 19,  46 => 28,  40 => 18,  37 => 14,  34 => 1,  31 => 16,  29 => 11,  26 => 11,);
    }
}
