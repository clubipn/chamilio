<?php

/* add_facebook_login_button/template.tpl */
class __TwigTemplate_8ca2b5197c16b6ef6d38f673a9010629 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if ($this->getAttribute((isset($context["add_facebook_login_button"]) ? $context["add_facebook_login_button"] : null), "show_message")) {
            // line 2
            echo "    <div class=\"well\">
        <a href=\"";
            // line 3
            echo $this->getAttribute((isset($context["add_facebook_login_button"]) ? $context["add_facebook_login_button"] : null), "facebook_href_link");
            echo "\">
            <img src=\"";
            // line 4
            echo $this->getAttribute((isset($context["add_facebook_login_button"]) ? $context["add_facebook_login_button"] : null), "facebook_button_url");
            echo "\"/>
        </a>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "add_facebook_login_button/template.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  16 => 4,  12 => 3,  9 => 2,  7 => 1,);
    }
}
