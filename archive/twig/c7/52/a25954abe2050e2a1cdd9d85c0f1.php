<?php

/* default/layout/head.tpl */
class __TwigTemplate_c752a25954abe2050e2a1cdd9d85c0f1 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<meta charset=\"";
        echo (isset($context["system_charset"]) ? $context["system_charset"] : null);
        echo "\" />
<link href=\"http://www.chamilo.org/documentation.php\" rel=\"help\" />
<link href=\"http://www.chamilo.org/team.php\" rel=\"author\" />
<link href=\"http://www.chamilo.org\" rel=\"copyright\" />
";
        // line 5
        echo (isset($context["prefetch"]) ? $context["prefetch"] : null);
        echo "
";
        // line 6
        echo (isset($context["favico"]) ? $context["favico"] : null);
        echo "
";
        // line 7
        echo (isset($context["browser_specific_head"]) ? $context["browser_specific_head"] : null);
        echo "
<link rel=\"apple-touch-icon\" href=\"";
        // line 8
        echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web");
        echo "apple-touch-icon.png\" />
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\" />
<meta name=\"Generator\" content=\"";
        // line 10
        echo $this->getAttribute((isset($context["_s"]) ? $context["_s"] : null), "software_name");
        echo " ";
        echo twig_slice($this->env, $this->getAttribute((isset($context["_s"]) ? $context["_s"] : null), "system_version"), 0, 1);
        echo "\" />
";
        // line 13
        echo "<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<title>";
        // line 14
        echo (isset($context["title_string"]) ? $context["title_string"] : null);
        echo "</title>
";
        // line 15
        echo (isset($context["css_file_to_string"]) ? $context["css_file_to_string"] : null);
        echo "
";
        // line 16
        echo (isset($context["css_style_print"]) ? $context["css_style_print"] : null);
        echo "
";
        // line 17
        echo (isset($context["js_file_to_string"]) ? $context["js_file_to_string"] : null);
        echo "
";
        // line 18
        echo (isset($context["extra_headers"]) ? $context["extra_headers"] : null);
        echo "
<script>
//<![CDATA[
// This is a patch for the \"__flash__removeCallback\" bug, see FS#4378.
";
        // line 35
        echo "
if ((navigator.userAgent.toLowerCase().indexOf('msie') != -1 ) && ( navigator.userAgent.toLowerCase().indexOf('opera') == -1 )) {
    window.attachEvent( 'onunload', function() {
        window['__flash__removeCallback'] = function ( instance, name ) {
            try {
                if ( instance ) {
                    instance[name] = null ;
                }
            } catch ( flashEx ) {
            }
        } ;
    });
}
";
        echo "
//]]>

function setCheckbox(value, table_id) {
    checkboxes = \$(\"#\"+table_id+\" input:checkbox\");
    \$.each(checkboxes, function(index, checkbox) {
         checkbox.checked = value;
        if (value) {
            \$(checkbox).parentsUntil(\"tr\").parent().addClass(\"row_selected\");
        } else {
            \$(checkbox).parentsUntil(\"tr\").parent().removeClass(\"row_selected\");
        }
    });
    return false;
}

function action_click(element, table_id) {
    d = \$(\"#\"+table_id);
    if (!confirm('";
        // line 53
        echo get_lang("ConfirmYourChoice");
        echo "')) {
        return false;
    } else {
        var action =\$(element).attr(\"data-action\");
        \$('#'+table_id+' input[name=\"action\"] ').attr(\"value\", action);
        d.submit();
        return false;
    }
}

/* Global chat variables */
var ajax_url        = '";
        // line 64
        echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web_ajax");
        echo "chat.ajax.php';
var online_button   = '";
        // line 65
        echo (isset($context["online_button"]) ? $context["online_button"] : null);
        echo "';
var offline_button  = '";
        // line 66
        echo (isset($context["offline_button"]) ? $context["offline_button"] : null);
        echo "';
var connect_lang    = '";
        // line 67
        echo get_lang("ChatConnected");
        echo "';
var disconnect_lang = '";
        // line 68
        echo get_lang("ChatDisconnected");
        echo "';

function get_url_params(q, attribute) {
    var vars;
    var hash;
    if (q != undefined) {
        q = q.split('&');
        for(var i = 0; i < q.length; i++){
            hash = q[i].split('=');
            if (hash[0] == attribute) {
                return hash[1];
            }
        }
    }
}

function check_brand() {
    if (\$('.subnav').length) {
        if (\$(window).width() >= 969) {
            \$('.subnav .brand').hide();
        } else {
            \$('.subnav .brand').show();
        }
    }
}

\$(window).resize(function() {
    check_brand();
});

\$(document).scroll(function() {

    // Top bar scroll effect
    if (\$('body').width() > 959) {
        if (\$('.subnav').length) {
            if (!\$('.subnav').attr('data-top')) {
                // If already fixed, then do nothing
                if (\$('.subnav').hasClass('subnav-fixed')) return;
                // Remember top position
                var offset = \$('.subnav').offset();
                \$('.subnav').attr('data-top', offset.top);
            }

            if (\$('.subnav').attr('data-top') - \$('.subnav').outerHeight() <= \$(this).scrollTop()) {
                \$('.subnav').addClass('subnav-fixed');
            } else {
                \$('.subnav').removeClass('subnav-fixed');
            }
            //\$('.subnav .brand').show();
        }
    } else {
        //\$('.subnav .brand').hide();
    }

    //Exercise warning fixed at the top
    var fixed =  \$(\"#exercise_clock_warning\");
    if (fixed.length) {
        if (!fixed.attr('data-top')) {
            // If already fixed, then do nothing
            if (fixed.hasClass('subnav-fixed')) return;
            // Remember top position
            var offset = fixed.offset();
            fixed.attr('data-top', offset.top);
            fixed.css('width', '100%');
        }

        if (fixed.attr('data-top') - fixed.outerHeight() <= \$(this).scrollTop()) {
            fixed.addClass('subnav-fixed');
            fixed.css('width', '100%');
        } else {
            fixed.removeClass('subnav-fixed');
            fixed.css('width', '200px');
        }
    }

    // Admin -> Settings toolbar.
    if (\$('body').width() > 959) {
        if (\$('.new_actions').length) {
            if (!\$('.new_actions').attr('data-top')) {
                // If already fixed, then do nothing
                if (\$('.new_actions').hasClass('new_actions-fixed')) return;
                // Remember top position
                var offset = \$('.new_actions').offset();

                var more_top = 0;
                if (\$('.subnav').hasClass('new_actions-fixed')) {
                    more_top = 50;
                }
                \$('.new_actions').attr('data-top', offset.top + more_top);
            }

            if (\$('.new_actions').attr('data-top') - \$('.new_actions').outerHeight() <= \$(this).scrollTop()) {
                \$('.new_actions').addClass('new_actions-fixed');
            } else {
                \$('.new_actions').removeClass('new_actions-fixed');
            }
        }
    }

    // Bottom actions.
    if (\$('.bottom_actions').length) {
        if (!\$('.bottom_actions').attr('data-top')) {
            // If already fixed, then do nothing
            if (\$('.bottom_actions').hasClass('bottom_actions_fixed')) return;

            // Remember top position
            var offset = \$('.bottom_actions').offset();
            \$('.bottom_actions').attr('data-top', offset.top);
        }

        if (\$('.bottom_actions').attr('data-top') > \$('body').outerHeight()) {
            if ( (\$('.bottom_actions').attr('data-top') - \$('body').outerHeight() - \$('.bottom_actions').outerHeight()) >= \$(this).scrollTop()) {
                \$('.bottom_actions').addClass('bottom_actions_fixed');
                \$('.bottom_actions').css(\"width\", \"100%\");
            } else {
                \$('.bottom_actions').css(\"width\", \"\");
                \$('.bottom_actions').removeClass('bottom_actions_fixed');
            }
        } else {
            if ( (\$('.bottom_actions').attr('data-top') -  \$('.bottom_actions').outerHeight()) <= \$(this).scrollTop()) {
                \$('.bottom_actions').addClass('bottom_actions_fixed');
                \$('.bottom_actions').css(\"width\", \"100%\");
            } else {
                \$('.bottom_actions').removeClass('bottom_actions_fixed');
                \$('.bottom_actions').css(\"width\", \"\");
            }
        }
    }
});

function showConfirmationPopup(obj, urlParam)
{
    if (urlParam) {
        url = urlParam
    } else {
        url = obj.href;
    }

    var dialog  = \$(\"#dialog\");
    if (\$(\"#dialog\").length == 0) {
        dialog  = \$('<div id=\"dialog\" style=\"display:none\">";
        // line 208
        echo get_lang("ConfirmYourChoice");
        echo " </div>').appendTo('body');
    }

    var width_value = 350;
    var height_value = 150;
    var resizable_value = true;

    var new_param = get_url_params(url, 'width');
    if (new_param) {
        width_value = new_param;
    }

    var new_param = get_url_params(url, 'height')
    if (new_param) {
        height_value = new_param;
    }

    var new_param = get_url_params(url, 'resizable');
    if (new_param) {
        resizable_value = new_param;
    }

    // Show dialog
    dialog.dialog({
        modal       : true,
        width       : width_value,
        height      : height_value,
        resizable   : resizable_value,
        buttons: [
            {
                text: '";
        // line 238
        echo get_lang("Yes");
        echo "',
                click: function() {
                    window.location = url;
                },
                icons:{
                    primary:'ui-icon-locked'
                }
            },
            {
                text: '";
        // line 247
        echo get_lang("No");
        echo "',
                click: function() { \$(this).dialog(\"close\"); },
                icons:{
                    primary:'ui-icon-locked'
                }
            }
        ]
    });
    // prevent the browser to follow the link
    return false;
}

\$(function() {

    check_brand();

    // Removes the yellow input in Chrome
    if (navigator.userAgent.toLowerCase().indexOf(\"chrome\") >= 0) {
        \$(window).load(function(){
            \$('input:-webkit-autofill').each(function(){
                var text = \$(this).val();
                var name = \$(this).attr('name');
                \$(this).after(this.outerHTML).remove();
                //var has_string = \$(name).find(\":contains('[')\");
                \$('input[name=' + name + ']').val(text);
            });
        });
    }

    // Fixes buttons to the new btn class.
    if (!\$('#button').hasClass('btn')) {
        \$(\"button\").addClass('btn');
    }

    // Dropdown effect.
    \$('.dropdown-toggle').dropdown();

    // Responsive effect.
    \$(\".collapse\").collapse();

    \$(\".accordion_jquery\").accordion({
        autoHeight: false,
        active: false, // all items closed by default
        collapsible: true,
        header: \".accordion-heading\"
    });

    // Global popup
    \$('.ajax').on('click', function() {
        var url     = this.href;
        var dialog  = \$(\"#dialog\");
        if (\$(\"#dialog\").length == 0) {
            dialog  = \$('<div id=\"dialog\" style=\"display:none\"></div>').appendTo('body');
        }

        var width_value = 580;
        var height_value = 450;
        var resizable_value = true;

        var new_param = get_url_params(url, 'width');
        if (new_param) {
            width_value = new_param;
        }

        var new_param = get_url_params(url, 'height')
        if (new_param) {
            height_value = new_param;
        }

        var new_param = get_url_params(url, 'resizable');
        if (new_param) {
            resizable_value = new_param;
        }

        // load remote content
        dialog.load(
            url,
            {},
            function(responseText, textStatus, XMLHttpRequest) {
                dialog.dialog({
                    modal       : true,
                    width       : width_value,
                    height      : height_value,
                    resizable   : resizable_value
                });
            }
        );
        // prevent the browser to follow the link
        return false;
    });

    // Global confirmation
    \$('.popup-confirmation').on('click', function() {
        showConfirmationPopup(this);
        return false;
    });

    // old jquery.menu.js
    \$('#navigation a').stop().animate({
        'marginLeft':'50px'
    },1000);

    \$('#navigation > li').hover(
        function () {
            \$('a',\$(this)).stop().animate({
                'marginLeft':'1px'
            },200);
        },
        function () {
            \$('a',\$(this)).stop().animate({
                'marginLeft':'50px'
            },200);
        }
    );
    /*
    \$(\".td_actions\").hide();

    \$(\".td_actions\").parent('tr').mouseover(function() {
       \$(\".td_actions\").show();
    });

    \$(\".td_actions\").parent('tr').mouseout(function() {
        \$(\".td_actions\").hide();
    });*/
});
</script>
";
        // line 374
        echo (isset($context["header_extra_content"]) ? $context["header_extra_content"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "default/layout/head.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  445 => 374,  316 => 247,  304 => 238,  271 => 208,  128 => 68,  124 => 67,  120 => 66,  116 => 65,  53 => 17,  38 => 13,  23 => 7,  19 => 6,  15 => 5,  182 => 87,  173 => 81,  166 => 78,  158 => 73,  153 => 70,  151 => 69,  145 => 65,  139 => 62,  136 => 61,  133 => 60,  127 => 56,  121 => 52,  115 => 49,  112 => 64,  109 => 47,  99 => 41,  96 => 40,  93 => 39,  87 => 36,  80 => 30,  77 => 29,  71 => 25,  67 => 24,  64 => 35,  51 => 15,  45 => 15,  32 => 10,  18 => 4,  14 => 3,  10 => 2,  7 => 1,  73 => 20,  70 => 19,  60 => 13,  58 => 12,  55 => 16,  50 => 8,  47 => 13,  44 => 6,  41 => 14,  30 => 11,  27 => 8,  25 => 5,  22 => 5,  20 => 1,  311 => 145,  305 => 142,  302 => 141,  299 => 140,  294 => 136,  288 => 133,  285 => 132,  282 => 131,  279 => 129,  276 => 128,  273 => 126,  265 => 121,  260 => 118,  257 => 117,  254 => 115,  248 => 112,  245 => 111,  242 => 110,  239 => 108,  233 => 105,  230 => 104,  228 => 103,  225 => 102,  219 => 99,  216 => 98,  213 => 97,  210 => 95,  208 => 94,  202 => 92,  199 => 90,  191 => 85,  186 => 82,  183 => 81,  180 => 79,  174 => 76,  171 => 80,  168 => 79,  163 => 70,  157 => 67,  154 => 66,  152 => 65,  149 => 64,  147 => 63,  141 => 60,  135 => 57,  129 => 54,  123 => 51,  117 => 48,  111 => 45,  105 => 44,  98 => 53,  92 => 35,  85 => 31,  78 => 27,  75 => 25,  72 => 24,  69 => 23,  66 => 22,  63 => 14,  57 => 18,  54 => 16,  52 => 15,  49 => 16,  46 => 12,  40 => 10,  37 => 2,  34 => 1,  31 => 5,  29 => 8,  26 => 3,);
    }
}
