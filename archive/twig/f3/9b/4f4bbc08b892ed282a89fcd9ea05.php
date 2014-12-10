<?php

/* default/layout/main.tpl */
class __TwigTemplate_f39b4f4bbc08b892ed282a89fcd9ea05 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('header', $context, $blocks);
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('body', $context, $blocks);
        // line 10
        echo "
";
        // line 11
        $this->displayBlock('footer', $context, $blocks);
    }

    // line 1
    public function block_header($context, array $blocks = array())
    {
        // line 2
        $this->env->loadTemplate("default/layout/main_header.tpl")->display($context);
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "\t";
        if (((isset($context["show_sniff"]) ? $context["show_sniff"] : null) == 1)) {
            // line 7
            echo "\t \t";
            $this->env->loadTemplate("default/layout/sniff.tpl")->display($context);
            // line 8
            echo "\t";
        }
    }

    // line 11
    public function block_footer($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        // line 13
        echo "    ";
        if (((isset($context["show_footer"]) ? $context["show_footer"] : null) == true)) {
            // line 14
            echo "        </div> <!-- end of #row\" -->
        </div> <!-- end of #main\" -->
        <div class=\"push\"></div>
        
    ";
        }
        // line 19
        echo "
    ";
        // line 20
        $this->env->loadTemplate("default/layout/main_footer.tpl")->display($context);
    }

    public function getTemplateName()
    {
        return "default/layout/main.tpl";
    }

    public function getDebugInfo()
    {
        return array (  73 => 20,  70 => 19,  60 => 13,  58 => 12,  55 => 11,  50 => 8,  47 => 7,  44 => 6,  41 => 5,  30 => 11,  27 => 10,  25 => 5,  22 => 4,  20 => 1,  311 => 145,  305 => 142,  302 => 141,  299 => 140,  294 => 136,  288 => 133,  285 => 132,  282 => 131,  279 => 129,  276 => 128,  273 => 126,  265 => 121,  260 => 118,  257 => 117,  254 => 115,  248 => 112,  245 => 111,  242 => 110,  239 => 108,  233 => 105,  230 => 104,  228 => 103,  225 => 102,  219 => 99,  216 => 98,  213 => 97,  210 => 95,  208 => 94,  202 => 92,  199 => 90,  191 => 85,  186 => 82,  183 => 81,  180 => 79,  174 => 76,  171 => 75,  168 => 74,  163 => 70,  157 => 67,  154 => 66,  152 => 65,  149 => 64,  147 => 63,  141 => 60,  135 => 57,  129 => 54,  123 => 51,  117 => 48,  111 => 45,  105 => 42,  98 => 38,  92 => 35,  85 => 31,  78 => 27,  75 => 25,  72 => 24,  69 => 23,  66 => 22,  63 => 14,  57 => 17,  54 => 16,  52 => 15,  49 => 14,  46 => 12,  40 => 9,  37 => 2,  34 => 1,  31 => 5,  29 => 4,  26 => 3,);
    }
}
