<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* ucp_header.html */
class __TwigTemplate_8e1842e82c0e07a186905c9b3d4c64541afdbb150b5a9bca18642d34f38ad2a8 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $location = "overall_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_header.html", "ucp_header.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<h2 class=\"ucp-title\">";
        // line 3
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("UCP");
        echo "</h2>

<div id=\"tabs\" class=\"tabs\">
\t<ul>
\t\t";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "t_block1", []));
        foreach ($context['_seq'] as $context["_key"] => $context["t_block1"]) {
            // line 8
            echo "\t\t<li class=\"tab";
            if ($this->getAttribute($context["t_block1"], "S_SELECTED", [])) {
                echo " activetab";
            }
            echo "\"><a href=\"";
            echo $this->getAttribute($context["t_block1"], "U_TITLE", []);
            echo "\">";
            echo $this->getAttribute($context["t_block1"], "L_TITLE", []);
            echo "</a></li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t_block1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "\t</ul>
</div>

";
        // line 13
        if (($context["S_COMPOSE_PM"] ?? null)) {
            // line 14
            echo "<form id=\"postform\" method=\"post\" action=\"";
            echo ($context["S_POST_ACTION"] ?? null);
            echo "\"";
            echo ($context["S_FORM_ENCTYPE"] ?? null);
            echo ">
";
        }
        // line 16
        echo "
<div class=\"panel bg3\">
\t<div class=\"inner\">

\t<div style=\"width: 100%;\">

\t<div id=\"cp-menu\" class=\"cp-menu\">
\t\t<div id=\"navigation\" class=\"navigation\" role=\"navigation\">
\t\t
\t\t<div class=\"tng-cp-menu-header\">";
        // line 25
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("OPTIONS");
        echo "</div>
\t\t
\t\t";
        // line 27
        if (($context["S_PRIVMSGS"] ?? null)) {
            // line 28
            echo "\t\t\t<ul>
\t\t\t\t";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "t_block2", []));
            foreach ($context['_seq'] as $context["_key"] => $context["t_block2"]) {
                // line 30
                echo "\t\t\t\t\t";
                if ((($context["S_PRIVMSGS"] ?? null) &&  !$this->getAttribute($context["t_block2"], "S_LAST_ROW", []))) {
                    // line 31
                    echo "\t\t\t\t\t
\t\t\t\t\t";
                    // line 32
                    if ($this->getAttribute($context["t_block2"], "S_SELECTED", [])) {
                        // line 33
                        echo "\t\t\t\t\t\t<li id=\"active-subsection\" class=\"active-subsection\"><a href=\"";
                        echo $this->getAttribute($context["t_block2"], "U_TITLE", []);
                        echo "\"><span>";
                        echo $this->getAttribute($context["t_block2"], "L_TITLE", []);
                        echo "</span></a></li>
\t\t\t\t\t";
                    } else {
                        // line 35
                        echo "\t\t\t\t\t\t<li><a href=\"";
                        echo $this->getAttribute($context["t_block2"], "U_TITLE", []);
                        echo "\"><span>";
                        echo $this->getAttribute($context["t_block2"], "L_TITLE", []);
                        echo "</span></a></li>
\t\t\t\t\t\t";
                    }
                    // line 37
                    echo "\t\t\t\t\t
\t\t\t\t\t";
                }
                // line 39
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t_block2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "\t\t\t</ul>

\t\t\t<hr />
\t\t\t";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "folder", []));
            foreach ($context['_seq'] as $context["_key"] => $context["folder"]) {
                // line 44
                echo "\t\t\t\t";
                if ($this->getAttribute($context["folder"], "S_FIRST_ROW", [])) {
                    echo "<ul>";
                }
                // line 45
                echo "\t\t\t\t";
                if ($this->getAttribute($context["folder"], "S_CUR_FOLDER", [])) {
                    // line 46
                    echo "\t\t\t\t\t<li id=\"active-subsection\" class=\"active-subsection\"><a href=\"";
                    echo $this->getAttribute($context["folder"], "U_FOLDER", []);
                    echo "\">";
                    if (($this->getAttribute($context["folder"], "UNREAD_MESSAGES", []) > 0)) {
                        echo "<strong>";
                        echo $this->getAttribute($context["folder"], "FOLDER_NAME", []);
                        echo " (";
                        echo $this->getAttribute($context["folder"], "UNREAD_MESSAGES", []);
                        echo ")</strong>";
                    } else {
                        echo $this->getAttribute($context["folder"], "FOLDER_NAME", []);
                    }
                    echo "</a></li>
\t\t\t\t";
                } else {
                    // line 48
                    echo "\t\t\t\t\t<li><a href=\"";
                    echo $this->getAttribute($context["folder"], "U_FOLDER", []);
                    echo "\"><span>";
                    if (($this->getAttribute($context["folder"], "UNREAD_MESSAGES", []) > 0)) {
                        echo "<strong>";
                        echo $this->getAttribute($context["folder"], "FOLDER_NAME", []);
                        echo " (";
                        echo $this->getAttribute($context["folder"], "UNREAD_MESSAGES", []);
                        echo ")</strong>";
                    } else {
                        echo $this->getAttribute($context["folder"], "FOLDER_NAME", []);
                    }
                    echo "</span></a></li>
\t\t\t\t";
                }
                // line 50
                echo "\t\t\t\t";
                if ($this->getAttribute($context["folder"], "S_LAST_ROW", [])) {
                    echo "</ul>";
                }
                // line 51
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['folder'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "\t\t\t<hr />
\t\t";
        }
        // line 54
        echo "
\t\t\t<ul>
\t\t";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "t_block2", []));
        foreach ($context['_seq'] as $context["_key"] => $context["t_block2"]) {
            // line 57
            echo "\t\t\t";
            if (((($context["S_PRIVMSGS"] ?? null) && $this->getAttribute($context["t_block2"], "S_LAST_ROW", [])) ||  !($context["S_PRIVMSGS"] ?? null))) {
                // line 58
                echo "\t\t\t\t";
                if ($this->getAttribute($context["t_block2"], "S_SELECTED", [])) {
                    // line 59
                    echo "\t\t\t\t\t<li id=\"active-subsection\" class=\"active-subsection\"><a href=\"";
                    echo $this->getAttribute($context["t_block2"], "U_TITLE", []);
                    echo "\"><span>";
                    echo $this->getAttribute($context["t_block2"], "L_TITLE", []);
                    echo "</span></a></li>
\t\t\t\t";
                } else {
                    // line 61
                    echo "\t\t\t\t\t<li><a href=\"";
                    echo $this->getAttribute($context["t_block2"], "U_TITLE", []);
                    echo "\"><span>";
                    echo $this->getAttribute($context["t_block2"], "L_TITLE", []);
                    echo "</span></a></li>
\t\t\t\t";
                }
                // line 63
                echo "\t\t\t";
            }
            // line 64
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t_block2'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "\t\t\t</ul>
\t\t</div>

\t\t";
        // line 68
        if ((twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "friends_online", [])) || twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "friends_offline", [])))) {
            // line 69
            echo "\t\t<div class=\"cp-mini\">
\t\t\t<div class=\"inner\">

\t\t\t<dl class=\"mini\">
\t\t\t\t<dt>";
            // line 73
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FRIENDS");
            echo "</dt>

\t\t\t\t";
            // line 75
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "friends_online", []));
            foreach ($context['_seq'] as $context["_key"] => $context["friends_online"]) {
                // line 76
                echo "\t\t\t\t\t<dd class=\"friend-online\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FRIENDS_ONLINE");
                echo "\">";
                echo $this->getAttribute($context["friends_online"], "USERNAME_FULL", []);
                echo " ";
                if (($context["S_SHOW_PM_BOX"] ?? null)) {
                    echo " <input type=\"submit\" name=\"add_to[";
                    echo $this->getAttribute($context["friends_online"], "USER_ID", []);
                    echo "]\" value=\"";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ADD");
                    echo "\" class=\"button2\" />";
                }
                if (($this->getAttribute($context["friends_online"], "S_LAST_ROW", []) && twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "friends_offline", [])))) {
                    echo "<hr />";
                }
                echo "</dd>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['friends_online'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            echo "
\t\t\t\t";
            // line 79
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "friends_offline", []));
            foreach ($context['_seq'] as $context["_key"] => $context["friends_offline"]) {
                // line 80
                echo "\t\t\t\t\t<dd class=\"friend-offline\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FRIENDS_OFFLINE");
                echo "\">";
                echo $this->getAttribute($context["friends_offline"], "USERNAME_FULL", []);
                echo " ";
                if (($context["S_SHOW_PM_BOX"] ?? null)) {
                    echo "<input type=\"submit\" name=\"add_to[";
                    echo $this->getAttribute($context["friends_offline"], "USER_ID", []);
                    echo "]\" value=\"";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ADD");
                    echo "\" class=\"button2\" />";
                }
                echo "</dd>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['friends_offline'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 82
            echo "\t\t\t</dl>

\t\t\t</div>
\t\t</div>
\t\t";
        }
        // line 87
        echo "
\t\t";
        // line 88
        if (($context["S_SHOW_COLOUR_LEGEND"] ?? null)) {
            // line 89
            echo "\t\t<div class=\"cp-mini\">
\t\t\t<div class=\"inner\">

\t\t\t<dl class=\"mini\">
\t\t\t\t<dt>";
            // line 93
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MESSAGE_COLOURS");
            echo "</dt>
\t\t\t\t";
            // line 94
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "pm_colour_info", []));
            foreach ($context['_seq'] as $context["_key"] => $context["pm_colour_info"]) {
                // line 95
                echo "\t\t\t\t\t<dd class=\"pm-legend";
                if ($this->getAttribute($context["pm_colour_info"], "CLASS", [])) {
                    echo " ";
                    echo $this->getAttribute($context["pm_colour_info"], "CLASS", []);
                }
                echo "\">";
                if ($this->getAttribute($context["pm_colour_info"], "IMG", [])) {
                    echo $this->getAttribute($context["pm_colour_info"], "IMG", []);
                    echo " ";
                }
                echo $this->getAttribute($context["pm_colour_info"], "LANG", []);
                echo "</dd>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pm_colour_info'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 97
            echo "\t\t\t</dl>

\t\t\t</div>
\t\t</div>
\t\t";
        }
        // line 102
        echo "
\t</div>

\t<div id=\"cp-main\" class=\"cp-main ucp-main panel-container\">
";
    }

    public function getTemplateName()
    {
        return "ucp_header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  369 => 102,  362 => 97,  344 => 95,  340 => 94,  336 => 93,  330 => 89,  328 => 88,  325 => 87,  318 => 82,  299 => 80,  295 => 79,  292 => 78,  270 => 76,  266 => 75,  261 => 73,  255 => 69,  253 => 68,  248 => 65,  242 => 64,  239 => 63,  231 => 61,  223 => 59,  220 => 58,  217 => 57,  213 => 56,  209 => 54,  205 => 52,  199 => 51,  194 => 50,  178 => 48,  162 => 46,  159 => 45,  154 => 44,  150 => 43,  145 => 40,  139 => 39,  135 => 37,  127 => 35,  119 => 33,  117 => 32,  114 => 31,  111 => 30,  107 => 29,  104 => 28,  102 => 27,  97 => 25,  86 => 16,  78 => 14,  76 => 13,  71 => 10,  56 => 8,  52 => 7,  45 => 3,  42 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "ucp_header.html", "");
    }
}
