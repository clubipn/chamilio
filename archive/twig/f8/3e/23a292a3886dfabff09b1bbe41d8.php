<?php

/* default/admin/settings_index.tpl */
class __TwigTemplate_f83e23a292a3886dfabff09b1bbe41d8 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<script>
\$(document).ready(function() {
    \$.ajax({
        url:'";
        // line 4
        echo (isset($context["web_admin_ajax_url"]) ? $context["web_admin_ajax_url"] : null);
        echo "?a=version',
        success:function(version){
            \$(\".admin-block-version\").html(version);
        }
    });
});
</script>

<div id=\"settings\">
    <div class=\"row\">
    ";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["blocks"]) ? $context["blocks"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["block_item"]) {
            // line 15
            echo "        <div id=\"tabs-";
            echo $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index");
            echo "\" class=\"span6\">
            <div class=\"well_border ";
            // line 16
            echo $this->getAttribute((isset($context["block_item"]) ? $context["block_item"] : null), "class");
            echo "\">
                <h4>";
            // line 17
            echo $this->getAttribute((isset($context["block_item"]) ? $context["block_item"] : null), "icon");
            echo " ";
            echo $this->getAttribute((isset($context["block_item"]) ? $context["block_item"] : null), "label");
            echo "</h4>
                <div style=\"list-style-type:none\">
                    ";
            // line 19
            echo $this->getAttribute((isset($context["block_item"]) ? $context["block_item"] : null), "search_form");
            echo "
                </div>
                ";
            // line 21
            if ((!(null === $this->getAttribute((isset($context["block_item"]) ? $context["block_item"] : null), "items")))) {
                // line 22
                echo "                    <ul>
    \t\t    \t";
                // line 23
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["block_item"]) ? $context["block_item"] : null), "items"));
                foreach ($context['_seq'] as $context["_key"] => $context["url"]) {
                    // line 24
                    echo "    \t\t    \t\t<li>
                            <a href=\"";
                    // line 25
                    echo $this->getAttribute((isset($context["url"]) ? $context["url"] : null), "url");
                    echo "\">
                                ";
                    // line 26
                    echo $this->getAttribute((isset($context["url"]) ? $context["url"] : null), "label");
                    echo "
                            </a>
                        </li>
    \t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['url'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 30
                echo "                    </ul>
                ";
            }
            // line 32
            echo "
                ";
            // line 33
            if ((!(null === $this->getAttribute((isset($context["block_item"]) ? $context["block_item"] : null), "extra")))) {
                // line 34
                echo "                    <div>
                    ";
                // line 35
                echo $this->getAttribute((isset($context["block_item"]) ? $context["block_item"] : null), "extra");
                echo "
                    </div>
                ";
            }
            // line 38
            echo "            </div>
        </div>
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block_item'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 41
        echo "    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "default/admin/settings_index.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 41,  107 => 38,  101 => 35,  98 => 34,  96 => 33,  93 => 32,  89 => 30,  79 => 26,  75 => 25,  72 => 24,  68 => 23,  65 => 22,  63 => 21,  58 => 19,  51 => 17,  47 => 16,  42 => 15,  25 => 14,  12 => 4,  7 => 1,);
    }
}
