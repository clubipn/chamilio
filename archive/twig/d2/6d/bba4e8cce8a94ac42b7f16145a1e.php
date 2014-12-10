<?php

/* default/layout/footer.tpl */
class __TwigTemplate_d26dbba4e8cce8a94ac42b7f16145a1e extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<footer> <!-- start of #footer section -->
    <div class=\"container\">
        <div class=\"row\">
            <div id=\"footer_left\" class=\"span4\">
                ";
        // line 5
        if ((!(null === (isset($context["session_teachers"]) ? $context["session_teachers"] : null)))) {
            // line 6
            echo "                    <div id=\"session_teachers\">
                        ";
            // line 7
            echo (isset($context["session_teachers"]) ? $context["session_teachers"] : null);
            echo "
                    </div>
                ";
        }
        // line 10
        echo "
                ";
        // line 11
        if ((!(null === (isset($context["teachers"]) ? $context["teachers"] : null)))) {
            // line 12
            echo "                    <div id=\"teachers\">
                        ";
            // line 13
            echo (isset($context["teachers"]) ? $context["teachers"] : null);
            echo "
                    </div>
                ";
        }
        // line 16
        echo "
                ";
        // line 18
        echo "                ";
        if ((!(null === (isset($context["plugin_footer_left"]) ? $context["plugin_footer_left"] : null)))) {
            // line 19
            echo "                    <div id=\"plugin_footer_left\">
                        ";
            // line 20
            echo (isset($context["plugin_footer_left"]) ? $context["plugin_footer_left"] : null);
            echo "
                    </div>
                ";
        }
        // line 23
        echo "                 &nbsp;
            </div>

            <div id=\"footer_center\" class=\"span4\">
                ";
        // line 28
        echo "                ";
        if ((!(null === (isset($context["plugin_footer_center"]) ? $context["plugin_footer_center"] : null)))) {
            // line 29
            echo "                    <div id=\"plugin_footer_center\">
                        ";
            // line 30
            echo (isset($context["plugin_footer_center"]) ? $context["plugin_footer_center"] : null);
            echo "
                    </div>
                ";
        }
        // line 33
        echo "                 &nbsp;
            </div>

            <div id=\"footer_right\" class=\"span4\">
                ";
        // line 37
        if ((!(null === (isset($context["administrator_name"]) ? $context["administrator_name"] : null)))) {
            // line 38
            echo "                    <div id=\"admin_name\">
                        ";
            // line 39
            echo (isset($context["administrator_name"]) ? $context["administrator_name"] : null);
            echo "
                    </div>
                ";
        }
        // line 42
        echo "
                <div id=\"software_name\">
                    ";
        // line 44
        echo get_lang("Platform");
        echo " <a href=\"";
        echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web");
        echo "\" target=\"_blank\">";
        echo $this->getAttribute((isset($context["_s"]) ? $context["_s"] : null), "software_name");
        echo " ";
        echo $this->getAttribute((isset($context["_s"]) ? $context["_s"] : null), "system_version");
        echo "</a>
                    &copy; ";
        // line 45
        echo twig_date_format_filter($this->env, "now", "Y");
        echo "
                </div>
                ";
        // line 48
        echo "                ";
        if ((!(null === (isset($context["plugin_footer_right"]) ? $context["plugin_footer_right"] : null)))) {
            // line 49
            echo "                    <div id=\"plugin_footer_right\">
                        ";
            // line 50
            echo (isset($context["plugin_footer_right"]) ? $context["plugin_footer_right"] : null);
            echo "
                    </div>
                ";
        }
        // line 53
        echo "                &nbsp;
            </div><!-- end of #footer_right -->
        </div><!-- end of #row -->
    </div><!-- end of #container -->
</footer>

";
        // line 60
        echo (isset($context["footer_extra_content"]) ? $context["footer_extra_content"] : null);
        echo "

";
        // line 144
        echo "
<script>

\$(\"form\").on(\"click\", ' .advanced_parameters', function() {
    var id = \$(this).attr('id') + '_options';
    var button = \$(this);
    \$(\"#\"+id).toggle(function() {
        button.toggleClass('active');
    });
});


/* Makes row highlighting possible */
\$(document).ready( function() {
    /**
     * Advanced options
     * Usage
     * <a id=\"link\" href=\"url\">Advanced</a>
     * <div id=\"link_options\">
     *     hidden content :)
     * </div>
     * */
    \$(\".advanced_options\").on(\"click\", function(event) {
        event.preventDefault();
        var id = \$(this).attr('id') + '_options';
        var button = \$(this);
        \$(\"#\"+id).toggle(function() {
            button.toggleClass('active');
        });
    });

    /**
     * <a class=\"advanced_options_open\" href=\"http://\" rel=\"div_id\">Open</a>
     * <a class=\"advanced_options_close\" href=\"http://\" rel=\"div_id\">Close</a>
     * <div id=\"div_id\">Div content</div>
     * */
    \$(\".advanced_options_open\").on(\"click\", function(event) {
        event.preventDefault();
        var id = \$(this).attr('rel');
        \$(\"#\"+id).show();
    });

    \$(\".advanced_options_close\").on(\"click\", function(event) {
        event.preventDefault();
        var id = \$(this).attr('rel');
        \$(\"#\"+id).hide();
    });

    // Chosen select
    \$(\".chzn-select\").chosen({
        disable_search_threshold: 10
    });

    \$(\".jp-jplayer audio\").addClass('skip');

    // Mediaelement
    jQuery('video:not(.skip), audio:not(.skip)').mediaelementplayer(/* Options */);

    // Table highlight.
    \$(\"form .data_table input:checkbox\").click(function() {
        if (\$(this).is(\":checked\")) {
            \$(this).parentsUntil(\"tr\").parent().addClass(\"row_selected\");

        } else {
            \$(this).parentsUntil(\"tr\").parent().removeClass(\"row_selected\");
        }
    });

    /* For non HTML5 browsers */
    if (\$(\"#formLogin\".length > 1)) {
        \$(\"input[name=login]\").focus();
    }

    /* For IOS users */
    \$('.autocapitalize_off').attr('autocapitalize', 'off');

    //Tool tip (in exercises)
    var tip_options = {
        placement : 'right'
    }
    \$('.boot-tooltip').tooltip(tip_options);
});
";
        echo "

</script>

";
        // line 148
        echo (isset($context["execution_stats"]) ? $context["execution_stats"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "default/layout/footer.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 148,  119 => 53,  113 => 50,  110 => 49,  107 => 48,  82 => 39,  62 => 29,  24 => 10,  11 => 3,  48 => 29,  16 => 7,  35 => 16,  13 => 5,  83 => 58,  9 => 2,  126 => 59,  118 => 54,  108 => 51,  94 => 43,  88 => 42,  65 => 30,  61 => 29,  236 => 83,  217 => 77,  204 => 74,  198 => 73,  192 => 72,  187 => 70,  176 => 66,  170 => 63,  165 => 62,  143 => 53,  137 => 52,  132 => 144,  122 => 45,  102 => 45,  90 => 38,  84 => 40,  79 => 38,  76 => 54,  74 => 33,  59 => 28,  42 => 16,  39 => 19,  33 => 16,  21 => 9,  17 => 6,  12 => 4,  445 => 374,  316 => 247,  304 => 238,  271 => 208,  128 => 68,  124 => 67,  120 => 66,  116 => 44,  53 => 23,  38 => 16,  23 => 8,  19 => 6,  15 => 6,  182 => 87,  173 => 81,  166 => 78,  158 => 58,  153 => 70,  151 => 69,  145 => 65,  139 => 62,  136 => 61,  133 => 60,  127 => 60,  121 => 52,  115 => 49,  112 => 53,  109 => 42,  99 => 41,  96 => 39,  93 => 39,  87 => 36,  80 => 30,  77 => 37,  71 => 33,  67 => 24,  64 => 35,  51 => 30,  45 => 15,  32 => 13,  18 => 7,  14 => 5,  10 => 2,  7 => 1,  73 => 38,  70 => 19,  60 => 13,  58 => 23,  55 => 26,  50 => 23,  47 => 20,  44 => 19,  41 => 18,  30 => 11,  27 => 11,  25 => 13,  22 => 5,  20 => 7,  311 => 145,  305 => 142,  302 => 141,  299 => 140,  294 => 136,  288 => 133,  285 => 132,  282 => 131,  279 => 129,  276 => 128,  273 => 126,  265 => 121,  260 => 118,  257 => 117,  254 => 115,  248 => 112,  245 => 111,  242 => 110,  239 => 108,  233 => 105,  230 => 104,  228 => 103,  225 => 80,  219 => 99,  216 => 98,  213 => 97,  210 => 75,  208 => 94,  202 => 92,  199 => 90,  191 => 85,  186 => 82,  183 => 81,  180 => 68,  174 => 76,  171 => 80,  168 => 79,  163 => 61,  157 => 67,  154 => 66,  152 => 65,  149 => 54,  147 => 63,  141 => 60,  135 => 57,  129 => 60,  123 => 51,  117 => 48,  111 => 45,  105 => 50,  98 => 53,  92 => 44,  85 => 31,  78 => 27,  75 => 39,  72 => 24,  69 => 23,  66 => 35,  63 => 14,  57 => 27,  54 => 16,  52 => 20,  49 => 19,  46 => 28,  40 => 18,  37 => 14,  34 => 1,  31 => 16,  29 => 12,  26 => 11,);
    }
}
