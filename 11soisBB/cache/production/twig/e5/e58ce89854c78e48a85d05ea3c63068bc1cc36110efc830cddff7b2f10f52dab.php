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

/* acp_ext_details.html */
class __TwigTemplate_e2285b74182b7f78fe2af7574fd8cae3c203550f3f182e8208affa1602cf5191 extends \Twig\Template
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
        $this->loadTemplate("overall_header.html", "acp_ext_details.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<a id=\"maincontent\"></a>

\t<a href=\"";
        // line 5
        echo ($context["U_BACK"] ?? null);
        echo "\" style=\"float: ";
        echo ($context["S_CONTENT_FLOW_END"] ?? null);
        echo ";\">&laquo; ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BACK");
        echo "</a>

\t<h1>";
        // line 7
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("EXTENSIONS_ADMIN");
        echo "</h1>

\t";
        // line 9
        if (($context["S_VERSIONCHECK"] ?? null)) {
            // line 10
            echo "\t\t";
            if (($context["S_VERSIONCHECK_FAIL"] ?? null)) {
                // line 11
                echo "\t\t<div class=\"errorbox notice\">
\t\t\t<p>";
                // line 12
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VERSIONCHECK_FAIL");
                echo "</p>
\t\t\t<p>";
                // line 13
                echo ($context["VERSIONCHECK_FAIL_REASON"] ?? null);
                echo "</p>
\t\t\t<p><a href=\"";
                // line 14
                echo ($context["U_VERSIONCHECK_FORCE"] ?? null);
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VERSIONCHECK_FORCE_UPDATE");
                echo "</a></p>
\t\t</div>
\t\t";
            } else {
                // line 17
                echo "\t\t<div class=\"";
                if (($context["S_UP_TO_DATE"] ?? null)) {
                    echo "successbox";
                } else {
                    echo "errorbox";
                }
                echo "\">
\t\t\t<p>";
                // line 18
                echo ($context["UP_TO_DATE_MSG"] ?? null);
                echo " - <a href=\"";
                echo ($context["U_VERSIONCHECK_FORCE"] ?? null);
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VERSIONCHECK_FORCE_UPDATE");
                echo "</a></p>
\t\t</div>
\t\t";
            }
            // line 21
            echo "\t";
        }
        // line 22
        // line 23
        echo "
\t<fieldset>
\t\t<legend>";
        // line 25
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("EXT_DETAILS");
        echo "</legend>
\t\t";
        // line 26
        if (($context["META_DISPLAY_NAME"] ?? null)) {
            // line 27
            echo "\t\t<dl>
\t\t\t<dt><label>";
            // line 28
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DISPLAY_NAME");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label></dt>
\t\t\t<dd><strong id=\"meta_display_name\">";
            // line 29
            echo ($context["META_DISPLAY_NAME"] ?? null);
            echo "</strong></dd>
\t\t</dl>
\t\t";
        }
        // line 32
        echo "\t\t<dl>
\t\t\t<dt><label>";
        // line 33
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CLEAN_NAME");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label></dt>
\t\t\t<dd><strong id=\"meta_name\">";
        // line 34
        echo ($context["META_NAME"] ?? null);
        echo "</strong></dd>
\t\t</dl>
\t\t";
        // line 36
        if (($context["META_DESCRIPTION"] ?? null)) {
            // line 37
            echo "\t\t<dl>
\t\t\t<dt><label>";
            // line 38
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DESCRIPTION");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label></dt>
\t\t\t<dd><span id=\"meta_description\">";
            // line 39
            echo ($context["META_DESCRIPTION"] ?? null);
            echo "</span></dd>
\t\t</dl>
\t\t";
        }
        // line 42
        echo "\t\t<dl>
\t\t\t<dt><label>";
        // line 43
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VERSION");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label></dt>
\t\t\t<dd><span id=\"meta_version\">";
        // line 44
        echo ($context["META_VERSION"] ?? null);
        echo "</span></dd>
\t\t</dl>
\t\t";
        // line 46
        if (($context["META_HOMEPAGE"] ?? null)) {
            // line 47
            echo "\t\t<dl>
\t\t\t<dt><label>";
            // line 48
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("HOMEPAGE");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label></dt>
\t\t\t<dd><strong id=\"meta_homepage\"><a href=\"";
            // line 49
            echo ($context["META_HOMEPAGE"] ?? null);
            echo "\">";
            echo ($context["META_HOMEPAGE"] ?? null);
            echo "</a></strong></dd>
\t\t</dl>
\t\t";
        }
        // line 52
        echo "\t\t";
        if (($context["META_TIME"] ?? null)) {
            // line 53
            echo "\t\t<dl>
\t\t\t<dt><label>";
            // line 54
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TIME");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label></dt>
\t\t\t<dd><span id=\"meta_time\">";
            // line 55
            echo ($context["META_TIME"] ?? null);
            echo "</span></dd>
\t\t</dl>
\t\t";
        }
        // line 58
        echo "\t\t<dl>
\t\t\t<dt><label>";
        // line 59
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LICENSE");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label></dt>
\t\t\t<dd><span id=\"meta_license\">";
        // line 60
        echo ($context["META_LICENSE"] ?? null);
        echo "</span></dd>
\t\t</dl>
\t</fieldset>

\t";
        // line 64
        if ((($context["S_VERSIONCHECK"] ?? null) &&  !($context["S_UP_TO_DATE"] ?? null))) {
            // line 65
            echo "\t<fieldset>
\t\t<legend>";
            // line 66
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LATEST_VERSION");
            echo "</legend>
\t\t";
            // line 67
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "updates_available", []));
            foreach ($context['_seq'] as $context["_key"] => $context["updates_available"]) {
                // line 68
                echo "\t\t<fieldset>
\t\t\t<dl>
\t\t\t\t<dt><label>";
                // line 70
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VERSION");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</label></dt>
\t\t\t\t<dd><strong>";
                // line 71
                echo $this->getAttribute($context["updates_available"], "current", []);
                echo "</strong></dd>
\t\t\t</dl>
\t\t\t";
                // line 73
                if ($this->getAttribute($context["updates_available"], "download", [])) {
                    // line 74
                    echo "\t\t\t<dl>
\t\t\t\t<dt><label>";
                    // line 75
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DOWNLOAD_LATEST");
                    echo "</label></dt>
\t\t\t\t<dd><strong><a href=\"";
                    // line 76
                    echo $this->getAttribute($context["updates_available"], "download", []);
                    echo "\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DOWNLOAD");
                    echo " ";
                    echo ($context["META_NAME"] ?? null);
                    echo " ";
                    echo ($context["LATEST_VERSION"] ?? null);
                    echo "</a></strong></dd>
\t\t\t</dl>
\t\t\t";
                }
                // line 79
                echo "\t\t\t";
                if ($this->getAttribute($context["updates_available"], "announcement", [])) {
                    // line 80
                    echo "\t\t\t<dl>
\t\t\t\t<dt><label>";
                    // line 81
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ANNOUNCEMENT_TOPIC");
                    echo "</label></dt>
\t\t\t\t<dd><strong><a href=\"";
                    // line 82
                    echo $this->getAttribute($context["updates_available"], "announcement", []);
                    echo "\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RELEASE_ANNOUNCEMENT");
                    echo "</a></strong></dd>
\t\t\t</dl>
\t\t\t";
                }
                // line 85
                echo "\t\t</fieldset>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['updates_available'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            echo "\t</fieldset>
\t";
        }
        // line 89
        echo "
\t";
        // line 90
        if ((($context["META_REQUIRE_PHPBB"] ?? null) || ($context["META_REQUIRE_PHP"] ?? null))) {
            // line 91
            echo "\t<fieldset>
\t\t<legend>";
            // line 92
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REQUIREMENTS");
            echo "</legend>
\t\t";
            // line 93
            if (($context["META_REQUIRE_PHPBB"] ?? null)) {
                // line 94
                echo "\t\t<dl";
                if (($context["META_REQUIRE_PHPBB_FAIL"] ?? null)) {
                    echo " class=\"requirements_not_met\"";
                }
                echo ">
\t\t\t<dt><label>";
                // line 95
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PHPBB_VERSION");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</label></dt>
\t\t\t<dd><span id=\"require_phpbb\">";
                // line 96
                echo ($context["META_REQUIRE_PHPBB"] ?? null);
                echo "</span></dd>
\t\t</dl>
\t\t";
            }
            // line 99
            echo "\t\t";
            if (($context["META_REQUIRE_PHP"] ?? null)) {
                // line 100
                echo "\t\t<dl";
                if (($context["META_REQUIRE_PHP_FAIL"] ?? null)) {
                    echo " class=\"requirements_not_met\"";
                }
                echo ">
\t\t\t<dt><label>";
                // line 101
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PHP_VERSION");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</label></dt>
\t\t\t<dd><span id=\"require_php\">";
                // line 102
                echo ($context["META_REQUIRE_PHP"] ?? null);
                echo "</span></dd>
\t\t</dl>
\t\t";
            }
            // line 105
            echo "\t</fieldset>
\t";
        }
        // line 107
        echo "
\t<fieldset>
\t\t<legend>";
        // line 109
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("AUTHOR_INFORMATION");
        echo "</legend>
\t\t";
        // line 110
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "meta_authors", []));
        foreach ($context['_seq'] as $context["_key"] => $context["meta_authors"]) {
            // line 111
            echo "\t\t<fieldset>
\t\t\t<dl>
\t\t\t\t<dt><label>";
            // line 113
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("AUTHOR_NAME");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label></dt>
\t\t\t\t<dd><strong>";
            // line 114
            echo $this->getAttribute($context["meta_authors"], "AUTHOR_NAME", []);
            echo "</strong></dd>
\t\t\t</dl>
\t\t\t";
            // line 116
            if ($this->getAttribute($context["meta_authors"], "AUTHOR_EMAIL", [])) {
                // line 117
                echo "\t\t\t<dl>
\t\t\t\t<dt><label>";
                // line 118
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("AUTHOR_EMAIL");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</label></dt>
\t\t\t\t<dd><strong><a href=\"mailto:";
                // line 119
                echo $this->getAttribute($context["meta_authors"], "AUTHOR_EMAIL", []);
                echo "\">";
                echo $this->getAttribute($context["meta_authors"], "AUTHOR_EMAIL", []);
                echo "</a></strong></dd>
\t\t\t</dl>
\t\t\t";
            }
            // line 122
            echo "\t\t\t";
            if ($this->getAttribute($context["meta_authors"], "AUTHOR_HOMEPAGE", [])) {
                // line 123
                echo "\t\t\t<dl>
\t\t\t\t<dt><label>";
                // line 124
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("AUTHOR_HOMEPAGE");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</label></dt>
\t\t\t\t<dd><strong><a href=\"";
                // line 125
                echo $this->getAttribute($context["meta_authors"], "AUTHOR_HOMEPAGE", []);
                echo "\">";
                echo $this->getAttribute($context["meta_authors"], "AUTHOR_HOMEPAGE", []);
                echo "</a></strong></dd>
\t\t\t</dl>
\t\t\t";
            }
            // line 128
            echo "\t\t\t";
            if ($this->getAttribute($context["meta_authors"], "AUTHOR_ROLE", [])) {
                // line 129
                echo "\t\t\t<dl>
\t\t\t\t<dt><label>";
                // line 130
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("AUTHOR_ROLE");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</label></dt>
\t\t\t\t<dd><strong>";
                // line 131
                echo $this->getAttribute($context["meta_authors"], "AUTHOR_ROLE", []);
                echo "</strong></dd>
\t\t\t</dl>
\t\t\t";
            }
            // line 134
            echo "\t\t</fieldset>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['meta_authors'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 136
        echo "\t</fieldset>

\t";
        // line 138
        // line 139
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "acp_ext_details.html", 139)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "acp_ext_details.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  450 => 139,  449 => 138,  445 => 136,  438 => 134,  432 => 131,  427 => 130,  424 => 129,  421 => 128,  413 => 125,  408 => 124,  405 => 123,  402 => 122,  394 => 119,  389 => 118,  386 => 117,  384 => 116,  379 => 114,  374 => 113,  370 => 111,  366 => 110,  362 => 109,  358 => 107,  354 => 105,  348 => 102,  343 => 101,  336 => 100,  333 => 99,  327 => 96,  322 => 95,  315 => 94,  313 => 93,  309 => 92,  306 => 91,  304 => 90,  301 => 89,  297 => 87,  290 => 85,  282 => 82,  278 => 81,  275 => 80,  272 => 79,  260 => 76,  256 => 75,  253 => 74,  251 => 73,  246 => 71,  241 => 70,  237 => 68,  233 => 67,  229 => 66,  226 => 65,  224 => 64,  217 => 60,  212 => 59,  209 => 58,  203 => 55,  198 => 54,  195 => 53,  192 => 52,  184 => 49,  179 => 48,  176 => 47,  174 => 46,  169 => 44,  164 => 43,  161 => 42,  155 => 39,  150 => 38,  147 => 37,  145 => 36,  140 => 34,  135 => 33,  132 => 32,  126 => 29,  121 => 28,  118 => 27,  116 => 26,  112 => 25,  108 => 23,  107 => 22,  104 => 21,  94 => 18,  85 => 17,  77 => 14,  73 => 13,  69 => 12,  66 => 11,  63 => 10,  61 => 9,  56 => 7,  47 => 5,  42 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "acp_ext_details.html", "");
    }
}
