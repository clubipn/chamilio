<?php

/* default/layout/layout_1_col.tpl */
class __TwigTemplate_f850c10c14f8b06f66864717c20110f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("default/layout/main.tpl");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
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

    // line 23
    public function block_content($context, array $blocks = array())
    {
        // line 24
        echo "            ";
        if ((!(null === (isset($context["content"]) ? $context["content"] : null)))) {
            // line 25
            echo "                <section id=\"main_content\">
                ";
            // line 26
            echo (isset($context["content"]) ? $context["content"] : null);
            echo "
                </section>
            ";
        }
        // line 29
        echo "        ";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
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
    ";
        // line 14
        echo "    ";
        if ((isset($context["plugin_content_top"]) ? $context["plugin_content_top"] : null)) {
            // line 15
            echo "        <div id=\"plugin_content_top\" class=\"span12\">
            ";
            // line 16
            echo (isset($context["plugin_content_top"]) ? $context["plugin_content_top"] : null);
            echo "
        </div>
    ";
        }
        // line 19
        echo "
    <div class=\"span12\">
        ";
        // line 21
        $this->env->loadTemplate("default/layout/page_body.tpl")->display($context);
        // line 22
        echo "
        ";
        // line 23
        $this->displayBlock('content', $context, $blocks);
        // line 30
        echo "        &nbsp;
    </div>

    ";
        // line 34
        echo "    ";
        if ((isset($context["plugin_content_bottom"]) ? $context["plugin_content_bottom"] : null)) {
            // line 35
            echo "        <div id=\"plugin_content_bottom\" class=\"span12\">
            ";
            // line 36
            echo (isset($context["plugin_content_bottom"]) ? $context["plugin_content_bottom"] : null);
            echo "
        </div>
    ";
        }
        // line 39
        echo "
    ";
        // line 41
        echo "    ";
        if ((isset($context["plugin_main_bottom"]) ? $context["plugin_main_bottom"] : null)) {
            // line 42
            echo "        <div id=\"plugin_main_bottom\" class=\"span12\">
            ";
            // line 43
            echo (isset($context["plugin_main_bottom"]) ? $context["plugin_main_bottom"] : null);
            echo "
        </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "default/layout/layout_1_col.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 43,  113 => 42,  110 => 41,  107 => 39,  101 => 36,  98 => 35,  95 => 34,  90 => 30,  88 => 23,  85 => 22,  83 => 21,  79 => 19,  73 => 16,  70 => 15,  67 => 14,  64 => 12,  58 => 9,  55 => 8,  52 => 7,  49 => 5,  46 => 4,  42 => 29,  36 => 26,  33 => 25,  30 => 24,  27 => 23,  693 => 542,  686 => 538,  671 => 526,  659 => 517,  647 => 508,  637 => 501,  619 => 486,  608 => 478,  602 => 475,  590 => 466,  583 => 462,  575 => 457,  509 => 394,  485 => 373,  475 => 366,  468 => 362,  461 => 358,  453 => 353,  449 => 352,  446 => 351,  419 => 328,  417 => 327,  411 => 324,  407 => 323,  401 => 320,  397 => 319,  391 => 316,  387 => 315,  380 => 311,  376 => 310,  335 => 272,  332 => 271,  326 => 267,  324 => 266,  219 => 164,  210 => 158,  204 => 155,  186 => 140,  182 => 139,  178 => 138,  174 => 137,  138 => 104,  134 => 103,  130 => 102,  126 => 101,  122 => 100,  118 => 99,  115 => 98,  106 => 92,  102 => 90,  100 => 89,  29 => 21,  7 => 1,);
    }
}
