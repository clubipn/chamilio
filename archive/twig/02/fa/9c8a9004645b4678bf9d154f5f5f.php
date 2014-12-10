<?php

/* default/agenda/month.tpl */
class __TwigTemplate_02fa9c8a9004645b4678bf9d154f5f5f extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<script>
function checkLength( o, n, min, max ) {
    if ( o.val().length > max || o.val().length < min ) {
        o.addClass( \"ui-state-error\" );
        /*updateTips( \"Length of \" + n + \" must be between \" +
            min + \" and \" + max + \".\" );*/
        return false;
    } else {
        return true;
    }
}
function clean_user_select() {
    //Cleans the selected attr
    \$(\"#users_to_send_id\").val('').trigger(\"chosen:updated\");
    /*\$('#users_to_send_id')
        .find('option')
        .removeAttr('selected')
        .end();*/
}

var region_value = '";
        // line 21
        echo (isset($context["region_value"]) ? $context["region_value"] : null);
        echo "';
\$(document).ready(function() {
\tvar date = new Date();
\tvar d = date.getDate();
\tvar m = date.getMonth()+1;
\tvar y = date.getFullYear();

\t\$(\"#dialog-form\").dialog({
\t\tautoOpen: false,
\t\tmodal\t: false,
\t\twidth\t: 580,
\t\theight\t: 480,
        zIndex: 20000 // added because of qtip2
   \t});

    \$(\"#simple-dialog-form\").dialog({
\t\tautoOpen: false,
\t\tmodal\t: false,
\t\twidth\t: 580,
\t\theight\t: 480,
        zIndex: 20000 // added because of qtip2
   \t});

\tvar title = \$( \"#title\" ),
\tcontent = \$( \"#content\" ),
\tallFields = \$( [] ).add( title ).add( content ), tips = \$(\".validateTips\");

\t\$('#users_to_send_id').bind('change', function() {

\t    var selected_counts = \$(\"#users_to_send_id option:selected\").size();

\t    //alert(selected_counts);
       /* if (selected_counts >= 1 && \$(\"#users_to_send_id option[value='everyone']\").attr('selected') == 'selected') {
            clean_user_select();

            \$('#users_to_send_id option').eq(0).attr('selected', 'selected');
            //deleting the everyone
            \$(\"#users_to_send_id\").trigger(\"liszt:updated\");
            deleted_items = true;

        }*/
        //\$(\"#users_to_send_id\").trigger(\"chosen:updated\");
     /*
\t    if (selected_counts >= 1) {
\t        \$('#users_to_send_id option').eq(0).removeAttr('selected');


\t    }

\t   */
\t    //clean_user_select();
\t    //\$(\"#users_to_send_id\").trigger(\"liszt:updated\");
\t    //alert(\$(\"#users_to_send_id option[value='everyone']\").attr('selected'));
\t    if (\$(\"#users_to_send_id option[value='everyone']\").attr('selected') == 'selected') {
            //clean_user_select();
            //\$('#users_to_send_id option').eq(0).attr('selected', 'selected');
            //\$(\"#users_to_send_id\").trigger(\"liszt:updated\");
        }
    });

    \$.datepicker.setDefaults( \$.datepicker.regional[region_value] );

\tvar calendar = \$('#calendar').fullCalendar({
\t\theader: {
\t\t\tleft: 'today prev,next',
\t\t\tcenter: 'title',
\t\t\tright: 'month,agendaWeek,agendaDay, test'
\t\t},
        ";
        // line 89
        if (((isset($context["use_google_calendar"]) ? $context["use_google_calendar"] : null) == 1)) {
            // line 90
            echo "            eventSources: [
                // if you want to add more just add URL in this array
                '";
            // line 92
            echo (isset($context["google_calendar_url"]) ? $context["google_calendar_url"] : null);
            echo "',
                {
                    className: 'gcal-event' // an option!
                }
            ],
        ";
        }
        // line 98
        echo "
        defaultView:    '";
        // line 99
        echo (isset($context["default_view"]) ? $context["default_view"] : null);
        echo "',
\t\tbuttonText: \t";
        // line 100
        echo (isset($context["button_text"]) ? $context["button_text"] : null);
        echo ",
\t\tmonthNames: \t";
        // line 101
        echo (isset($context["month_names"]) ? $context["month_names"] : null);
        echo ",
\t\tmonthNamesShort:";
        // line 102
        echo (isset($context["month_names_short"]) ? $context["month_names_short"] : null);
        echo ",
\t\tdayNames: \t\t";
        // line 103
        echo (isset($context["day_names"]) ? $context["day_names"] : null);
        echo ",
\t\tdayNamesShort: \t";
        // line 104
        echo (isset($context["day_names_short"]) ? $context["day_names_short"] : null);
        echo ",
        firstHour: 8,
        firstDay: 1,
\t\tselectable\t: true,
\t\tselectHelper: true,

        viewDisplay: function(view) {
            /* When changing the view update the qtips */
            var api = \$('.qtip').qtip('api'); // Access the API of the first tooltip on the page
            if (api) {
                api.destroy();
                //api.render();
            }
        },
\t\t// Add event
\t\tselect: function(start, end, allDay, jsEvent, view) {
\t\t\t//Removing UTC stuff
            var start_date = \$.datepicker.formatDate(\"yy-mm-dd\", start) + \" \" + start.toTimeString().substr(0, 8);
            var end_date  = \$.datepicker.formatDate(\"yy-mm-dd\", end) + \" \" + end.toTimeString().substr(0, 8);

\t\t\t\$('#visible_to_input').show();
\t\t\t\$('#add_as_announcement_div').show();
\t\t\t\$('#visible_to_read_only').hide();

\t\t\t// Cleans the selected attr
\t\t    clean_user_select();

            //Sets the 1st item selected by default
            //\$('#users_to_send_id option').eq(0).attr('selected', 'selected');

\t\t\t// Update chz-select
\t\t\t//\$(\"#users_to_send_id\").trigger(\"chosen:updated\");

\t\t\tif (";
        // line 137
        echo (isset($context["can_add_events"]) ? $context["can_add_events"] : null);
        echo " == 1) {
\t\t\t\tvar url = '";
        // line 138
        echo (isset($context["web_agenda_ajax_url"]) ? $context["web_agenda_ajax_url"] : null);
        echo "&a=add_event&start='+start_date+'&end='+end_date+'&all_day='+allDay+'&view='+view.name;
                var start_date_value = \$.datepicker.formatDate('";
        // line 139
        echo (isset($context["js_format_date"]) ? $context["js_format_date"] : null);
        echo "', start);
                var end_date_value  = \$.datepicker.formatDate('";
        // line 140
        echo (isset($context["js_format_date"]) ? $context["js_format_date"] : null);
        echo "', end);

\t\t\t\t\$('#start_date').html(start_date_value + \" \" +  start.toTimeString().substr(0, 8));

\t\t\t\tif (view.name != 'month') {
\t\t\t\t\t\$('#start_date').html(start_date_value + \" \" +  start.toTimeString().substr(0, 8));
\t\t\t\t\tif (start.toDateString() == end.toDateString()) {
\t\t\t\t\t\t\$('#end_date').html(' - '+end.toTimeString().substr(0, 8));
\t\t\t\t\t} else {
\t\t\t\t\t\t\$('#end_date').html(' - '+start_date_value+\" \" + end.toTimeString().substr(0, 8));
\t\t\t\t\t}
\t\t\t\t} else {
\t\t\t\t\t\$('#start_date').html(start_date_value);
\t\t\t\t\t\$('#end_date').html(' ');
\t\t\t\t}
\t\t\t\t\$('#color_calendar').html('";
        // line 155
        echo (isset($context["type_label"]) ? $context["type_label"] : null);
        echo "');
\t\t\t\t\$('#color_calendar').removeClass('group_event');
\t\t\t\t\$('#color_calendar').addClass('label_tag');
\t\t\t\t\$('#color_calendar').addClass('";
        // line 158
        echo (isset($context["type_event_class"]) ? $context["type_event_class"] : null);
        echo "');

\t\t\t\tallFields.removeClass(\"ui-state-error\");
\t\t\t\t\$(\"#dialog-form\").dialog(\"open\");
\t\t\t\t\$(\"#dialog-form\").dialog({
\t\t\t\t\tbuttons: {
\t\t\t\t\t\t'";
        // line 164
        echo get_lang("Add");
        echo "' : function() {
\t\t\t\t\t\t\tvar bValid = true;
\t\t\t\t\t\t\tbValid = bValid && checkLength(title, \"title\", 1, 255);
\t\t\t\t\t\t\t//bValid = bValid && checkLength( content, \"content\", 1, 255 );

\t\t\t\t\t\t\tvar params = \$(\"#add_event_form\").serialize();
\t\t\t\t\t\t\t\$.ajax({
\t\t\t\t\t\t\t\turl: url+'&'+params,
\t\t\t\t\t\t\t\tsuccess:function(data) {
\t\t\t\t\t\t\t\t\tvar user = \$('#users_to_send_id').val();
                                    if (user) {
                                        if (user.length > 1) {
                                            user = 0;
                                        } else {
                                            user = user[0];
                                        }
                                        var user_length = String(user).length;
                                        if (String(user).substring(0,1) == 'G') {
                                            var user_id = String(user).substring(6,user_length);
                                            var user_id = \"G:\"+user_id;
                                        } else {
                                            var user_id = String(user).substring(5,user_length);
                                        }
                                        var temp = \"&user_id=\"+user_id;
                                        var position =String(window.location).indexOf(\"&user\");
                                        var url_length = String(window.location).length;
                                        var url = String(window.location).substring(0, position)+temp;

                                        /*if (position > 0) {
                                            window.location.replace(url);
                                        } else {
                                            url = String(window.location)+temp;
                                            window.location.replace(url);
                                        }*/
                                    } else {
                                \t   /* calendar.fullCalendar(\"refetchEvents\");
\t\t\t\t\t\t\t\t\t    calendar.fullCalendar(\"rerenderEvents\");*/
                                    }

                                    calendar.fullCalendar(\"refetchEvents\");
                                    calendar.fullCalendar(\"rerenderEvents\");

\t\t\t\t\t\t\t\t\t\$(\"#dialog-form\").dialog(\"close\");
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t});
\t\t\t\t\t\t}
\t\t\t\t\t},
\t\t\t\t\tclose: function() {
\t\t\t\t\t\t\$(\"#title\").attr('value', '');
\t\t\t\t\t\t\$(\"#content\").attr('value', '');
\t\t\t\t\t}
\t\t\t\t});

\t            // Don't follow the link.
\t            return false;

\t\t\t\tcalendar.fullCalendar('unselect');
                //Reload events
                calendar.fullCalendar(\"refetchEvents\");
                calendar.fullCalendar(\"rerenderEvents\");
\t\t\t}
\t\t},
\t\teventRender: function(event, element) {
            if (event.attachment) {
                element.qtip({
                    hide: {
                        delay: 2000
                    },
\t\t            content: event.attachment,
\t\t            position: { at:'top right' , my:'bottom right'},
\t\t        }).removeData('qtip'); // this is an special hack to add multiple qtip in the same target
            }
\t\t\tif (event.description) {
\t\t\t\telement.qtip({
                    hide: {
                        delay: 2000
                    },
\t\t            content: event.description,
\t\t            position: { at:'top left' , my:'bottom left'}
\t\t        });
\t\t\t}
\t    },
\t\teventClick: function(calEvent, jsEvent, view) {
            //var start_date \t= Math.round(calEvent.start.getTime() / 1000);
            var start_date = \$.datepicker.formatDate(\"yy-mm-dd\", calEvent.start) + \" \" + calEvent.start.toTimeString().substr(0, 8);

            if (calEvent.allDay == 1) {
                var end_date \t= '';
            } else {
                var end_date \t= '';
                if (calEvent.end && calEvent.end != '') {
                    //var end_date \t= Math.round(calEvent.end.getTime() / 1000);
                    var end_date  = \$.datepicker.formatDate(\"yy-mm-dd\", calEvent.end) + \" \" + calEvent.end.toTimeString().substr(0, 8);
                }
            }

\t\t\t// Edit event.
\t\t\tif (calEvent.editable) {

\t\t\t\t\$('#visible_to_input').hide();
                \$('#add_as_announcement_div').hide();

                ";
        // line 266
        if (((isset($context["type"]) ? $context["type"] : null) != "admin")) {
            // line 267
            echo "                    \$('#visible_to_read_only').show();
                console.log(calEvent.sent_to);
                    \$(\"#visible_to_read_only_users\").html(calEvent.sent_to);
\t\t\t\t";
        }
        // line 271
        echo "
                \$('#color_calendar').html('";
        // line 272
        echo (isset($context["type_label"]) ? $context["type_label"] : null);
        echo "');
                \$('#color_calendar').addClass('label_tag');
                \$('#color_calendar').removeClass('course_event');
                \$('#color_calendar').removeClass('personal_event');
                \$('#color_calendar').removeClass('group_event');
                \$('#color_calendar').addClass(calEvent.type+'_event');

                my_start_month = calEvent.start.getMonth() +1;

                \$('#start_date').html(calEvent.start.getDate() +\"/\"+ my_start_month +\"/\"+calEvent.start.getFullYear());

                if (end_date != '') {
                    my_end_month = calEvent.end.getMonth() +1;
                    \$('#end_date').html(' '+calEvent.end.getDate() +\"/\"+ my_end_month +\"/\"+calEvent.end.getFullYear());
                }

                if (\$(\"#title\").parent().find('#title_edit').length == 0) {
                    \$(\"#title\").parent().append('<div id=\"title_edit\"></div>');
                }

                \$(\"#title_edit\").html(calEvent.title);

                if (\$(\"#content\").parent().find('#content_edit').length == 0) {
                    \$(\"#content\").parent().append('<div id=\"content_edit\"></div>');
                }

                \$(\"#content_edit\").html(calEvent.description);

                \$(\"#title_edit\").show();
                \$(\"#content_edit\").show();

                \$(\"#title\").hide();
                \$(\"#content\").hide();

\t\t\t\tallFields.removeClass( \"ui-state-error\" );

\t\t\t\t\$(\"#dialog-form\").dialog(\"open\");

\t\t\t\tvar url = '";
        // line 310
        echo (isset($context["web_agenda_ajax_url"]) ? $context["web_agenda_ajax_url"] : null);
        echo "&a=edit_event&id='+calEvent.id+'&start='+start_date+'&end='+end_date+'&all_day='+calEvent.allDay+'&view='+view.name;
\t\t\t\tvar delete_url = '";
        // line 311
        echo (isset($context["web_agenda_ajax_url"]) ? $context["web_agenda_ajax_url"] : null);
        echo "&a=delete_event&id='+calEvent.id;

\t\t\t\t\$(\"#dialog-form\").dialog({
\t\t\t\t\tbuttons: {
                        '";
        // line 315
        echo get_lang("ExportiCalConfidential");
        echo "' : function() {
                            url =  \"";
        // line 316
        echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web_main");
        echo "calendar/ical_export.php?id=\" + calEvent.id+'&course_id='+calEvent.course_id+\"&class=confidential\";
                            window.location.href = url;
\t\t\t\t\t\t},
\t\t\t\t\t\t'";
        // line 319
        echo get_lang("ExportiCalPrivate");
        echo "': function() {
                            url =  \"";
        // line 320
        echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web_main");
        echo "calendar/ical_export.php?id=\" + calEvent.id+'&course_id='+calEvent.course_id+\"&class=private\";
                            window.location.href = url;
\t\t\t\t\t\t},
                        '";
        // line 323
        echo get_lang("ExportiCalPublic");
        echo "': function() {
                            url =  \"";
        // line 324
        echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web_main");
        echo "calendar/ical_export.php?id=\" + calEvent.id+'&course_id='+calEvent.course_id+\"&class=public\";
                            window.location.href = url;
\t\t\t\t\t\t},
                        ";
        // line 327
        if (((isset($context["type"]) ? $context["type"] : null) == "not_available")) {
            // line 328
            echo "\t\t\t\t\t\t'";
            echo get_lang("Edit");
            echo "' : function() {
\t\t\t\t\t\t\tvar bValid = true;
\t\t\t\t\t\t\tbValid = bValid && checkLength( title, \"title\", 1, 255 );

\t\t\t\t\t\t\tvar params = \$(\"#add_event_form\").serialize();
\t\t\t\t\t\t\t\$.ajax({
\t\t\t\t\t\t\t\turl: url+'&'+params,
\t\t\t\t\t\t\t\tsuccess:function() {
\t\t\t\t\t\t\t\t\tcalEvent.title \t\t\t= \$(\"#title\").val();
\t\t\t\t\t\t\t\t\tcalEvent.start \t\t\t= calEvent.start;
\t\t\t\t\t\t\t\t\tcalEvent.end \t\t\t= calEvent.end;
\t\t\t\t\t\t\t\t\tcalEvent.allDay         = calEvent.allDay;
\t\t\t\t\t\t\t\t\tcalEvent.description \t= \$(\"#content\").val();

\t\t\t\t\t\t\t\t\tcalendar.fullCalendar('updateEvent',
                                        calEvent,
                                        true // make the event \"stick\"
\t\t\t\t\t\t\t\t\t);
\t\t\t\t\t\t\t\t\t\$(\"#dialog-form\").dialog(\"close\");
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t});
\t\t\t\t\t\t},
                        ";
        }
        // line 351
        echo "
                        '";
        // line 352
        echo get_lang("Edit");
        echo "' : function() {
                            url =  \"";
        // line 353
        echo $this->getAttribute((isset($context["_p"]) ? $context["_p"] : null), "web_main");
        echo "calendar/agenda.php?action=edit&type=fromjs&id=\" + calEvent.id+'&course_id='+calEvent.course_id+\"\";
                            window.location.href = url;
                            \$(\"#dialog-form\").dialog( \"close\" );
                        },

\t\t\t\t\t\t'";
        // line 358
        echo get_lang("Delete");
        echo "': function() {

                            if (calEvent.parent_event_id || calEvent.has_children != '' ) {
                                var newDiv = \$(document.createElement('div'));
                                //newDiv.html('";
        // line 362
        echo get_lang("");
        echo "');

                                newDiv.dialog({
                                    modal: true,
                                    title: \"";
        // line 366
        echo get_lang("Confirmation");
        echo "\"
                                });

                                var buttons = newDiv.dialog(\"option\", \"buttons\");

                                if (calEvent.has_children == '0') {
                                    \$.extend(buttons, {
                                        '";
        // line 373
        echo get_lang("DeleteThisItem");
        echo "' : function() {
                                            \$.ajax({
                                                url: delete_url,
                                                success:function() {
                                                    calendar.fullCalendar('removeEvents',
                                                            calEvent
                                                    );
                                                    calendar.fullCalendar(\"refetchEvents\");
                                                    calendar.fullCalendar(\"rerenderEvents\");
                                                    \$(\"#dialog-form\").dialog( \"close\" );
                                                    newDiv.dialog( \"close\" );
                                                }
                                            });
                                        }
                                    });
                                    newDiv.dialog(\"option\", \"buttons\", buttons);
                                }

                                var buttons = newDiv.dialog(\"option\", \"buttons\");

                                \$.extend(buttons, {
                                    '";
        // line 394
        echo get_lang("DeleteAllItems");
        echo "' : function() {
                                        \$.ajax({
                                            url: delete_url+'&delete_all_events=1',
                                            success:function() {
                                                calendar.fullCalendar('removeEvents',
                                                        calEvent
                                                );
                                                calendar.fullCalendar(\"refetchEvents\");
                                                calendar.fullCalendar(\"rerenderEvents\");
                                                \$(\"#dialog-form\").dialog( \"close\" );
                                                newDiv.dialog( \"close\" );
                                            }
                                        });
                                    }
                                });
                                newDiv.dialog(\"option\", \"buttons\", buttons);

                                return true;
                            }

\t\t\t\t\t\t\t\$.ajax({
\t\t\t\t\t\t\t\turl: delete_url,
\t\t\t\t\t\t\t\tsuccess:function() {
\t\t\t\t\t\t\t\t\tcalendar.fullCalendar('removeEvents',
\t\t\t\t\t\t\t\t\t\tcalEvent
\t\t\t\t\t\t\t\t\t);
\t\t\t\t\t\t\t\t\tcalendar.fullCalendar(\"refetchEvents\");
\t\t\t\t\t\t\t\t\tcalendar.fullCalendar(\"rerenderEvents\");
\t\t\t\t\t\t\t\t\t\$(\"#dialog-form\").dialog( \"close\" );
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t});
\t\t\t\t\t\t}
\t\t\t\t\t},
\t\t\t\t\tclose: function() {
                        \$(\"#title_edit\").hide();
                        \$(\"#content_edit\").hide();

                        \$(\"#title\").show();
                        \$(\"#content\").show();

\t\t\t\t\t\t\$(\"#title_edit\").html('');
\t\t\t\t\t\t\$(\"#content_edit\").html('');

                        \$(\"#title\").attr('value', '');
                        \$(\"#content\").attr('value', '');
\t\t\t\t\t}
\t\t\t\t});
\t\t\t} else {
\t\t\t    //Simple form
                my_start_month = calEvent.start.getMonth() +1;
                \$('#simple_start_date').html(calEvent.start.getDate() +\"/\"+ my_start_month +\"/\"+calEvent.start.getFullYear());

                if (end_date != '') {
                    my_end_month = calEvent.end.getMonth() +1;
                    \$('#simple_start_date').html(calEvent.start.getDate() +\"/\"+ my_start_month +\"/\"+calEvent.start.getFullYear() +\" - \"+calEvent.start.toLocaleTimeString());
                    \$('#simple_end_date').html(' '+calEvent.end.getDate() +\"/\"+ my_end_month +\"/\"+calEvent.end.getFullYear() +\" - \"+calEvent.end.toLocaleTimeString());
                }

                \$(\"#simple_title\").html(calEvent.title);
                \$(\"#simple_content\").html(calEvent.description);
                \$(\"#simple-dialog-form\").dialog(\"open\");
                \$(\"#simple-dialog-form\").dialog({
\t\t\t\t\tbuttons: {
\t\t\t\t\t\t'";
        // line 457
        echo get_lang("ExportiCalConfidential");
        echo "' : function() {
                            url =  \"ical_export.php?id=\" + calEvent.id+'&course_id='+calEvent.course_id+\"&class=confidential\";
                            window.location.href = url;

\t\t\t\t\t\t},
\t\t\t\t\t\t'";
        // line 462
        echo get_lang("ExportiCalPrivate");
        echo "': function() {
                            url =  \"ical_export.php?id=\" + calEvent.id+'&course_id='+calEvent.course_id+\"&class=private\";
                            window.location.href = url;
\t\t\t\t\t\t},
                        '";
        // line 466
        echo get_lang("ExportiCalPublic");
        echo "': function() {
                            url =  \"ical_export.php?id=\" + calEvent.id+'&course_id='+calEvent.course_id+\"&class=public\";
                            window.location.href = url;
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t});
            }
\t\t},
\t\teditable: true,
\t\tevents: \"";
        // line 475
        echo (isset($context["web_agenda_ajax_url"]) ? $context["web_agenda_ajax_url"] : null);
        echo "&a=get_events\",
\t\teventDrop: function(event, day_delta, minute_delta, all_day, revert_func) {
\t\t\t\$.ajax({
\t\t\t\turl: '";
        // line 478
        echo (isset($context["web_agenda_ajax_url"]) ? $context["web_agenda_ajax_url"] : null);
        echo "',
\t\t\t\tdata: {
\t\t\t\t\ta:'move_event', id: event.id, day_delta: day_delta, minute_delta: minute_delta
\t\t\t\t}
\t\t\t});
\t\t},
        eventResize: function(event, day_delta, minute_delta, revert_func) {
            \$.ajax({
\t\t\t\turl: '";
        // line 486
        echo (isset($context["web_agenda_ajax_url"]) ? $context["web_agenda_ajax_url"] : null);
        echo "',
\t\t\t\tdata: {
\t\t\t\t\ta:'resize_event', id: event.id, day_delta: day_delta, minute_delta: minute_delta
\t\t\t\t}
\t\t\t});
        },
\t\taxisFormat: 'HH(:mm)',
\t\ttimeFormat: 'HH:mm{ - HH:mm}',
\t\tloading: function(bool) {
\t\t\tif (bool) \$('#loading').show();
\t\t\telse \$('#loading').hide();
\t\t}
\t});
});
</script>
";
        // line 501
        echo (isset($context["actions_div"]) ? $context["actions_div"] : null);
        echo "

<div id=\"simple-dialog-form\" style=\"display:none;\">
    <div style=\"width:500px\">
        <form name=\"form-simple\" class=\"form-vertical\">
            <div class=\"control-group\">
                <label class=\"control-label\">
                    <b>";
        // line 508
        echo get_lang("Date");
        echo "</b>
                </label>
                <div class=\"controls\">
                    <span id=\"simple_start_date\"></span>
                    <span id=\"simple_end_date\"></span>
                </div>
            </div>
            <div class=\"control-group\">
                <label class=\"control-label\">
                    <b>";
        // line 517
        echo get_lang("Title");
        echo "</b>
                </label>
                <div class=\"controls\">
                    <div id=\"simple_title\"></div>
                </div>
            </div>

            <div class=\"control-group\">
                <label class=\"control-label\">
                    <b>";
        // line 526
        echo get_lang("Description");
        echo "</b>
                </label>
                <div class=\"controls\">
                    <div id=\"simple_content\"></div>
                </div>
            </div>
        </form>
    </div>
</div>

<div id=\"dialog-form\" style=\"display:none;\">
\t<div style=\"width:500px\">
        ";
        // line 538
        echo (isset($context["form_add"]) ? $context["form_add"] : null);
        echo "
\t</div>
</div>
<div id=\"loading\" style=\"margin-left:150px;position:absolute;display:none\">
    ";
        // line 542
        echo get_lang("Loading");
        echo "...
</div>
<div id=\"calendar\"></div>
";
    }

    public function getTemplateName()
    {
        return "default/agenda/month.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  693 => 542,  686 => 538,  671 => 526,  659 => 517,  647 => 508,  637 => 501,  619 => 486,  608 => 478,  602 => 475,  590 => 466,  583 => 462,  575 => 457,  509 => 394,  485 => 373,  475 => 366,  468 => 362,  461 => 358,  453 => 353,  449 => 352,  446 => 351,  419 => 328,  417 => 327,  411 => 324,  407 => 323,  401 => 320,  397 => 319,  391 => 316,  387 => 315,  380 => 311,  376 => 310,  335 => 272,  332 => 271,  326 => 267,  324 => 266,  219 => 164,  210 => 158,  204 => 155,  186 => 140,  182 => 139,  178 => 138,  174 => 137,  138 => 104,  134 => 103,  130 => 102,  126 => 101,  122 => 100,  118 => 99,  115 => 98,  106 => 92,  102 => 90,  100 => 89,  29 => 21,  7 => 1,);
    }
}
