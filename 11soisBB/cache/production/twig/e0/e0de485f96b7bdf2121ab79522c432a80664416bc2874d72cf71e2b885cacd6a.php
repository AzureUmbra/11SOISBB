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

/* ucp_flair.html */
class __TwigTemplate_cbd34a200cf2a15e0f5cec9a8bee7fd495052de3a7a1de52e0ff19dd4d1a03ae extends \Twig\Template
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
        $this->loadTemplate("ucp_header.html", "ucp_flair.html", 1)->display($context);
        // line 2
        echo "
<h2>";
        // line 3
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("UCP_FLAIR");
        echo "</h2>

";
        // line 5
        $asset_file = "@stevotvr_flair/flair.css";
        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper(), $this->getEnvironment()->get_filesystem());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            }
        }
        
        if ($asset->is_relative()) {
            $asset->add_assets_version('13');
        }
        $this->getEnvironment()->get_assets_bag()->add_stylesheet($asset);        // line 6
        echo "
<form id=\"user_flair\" method=\"post\" action=\"";
        // line 7
        echo ($context["U_ACTION"] ?? null);
        echo "\" data-ajax=\"true\" data-refresh=\"true\">

\t<div class=\"panel\">
\t\t<div class=\"inner\">

\t\t\t<div class=\"postbody\">

\t\t\t<div class=\"content\">
\t\t\t\t";
        // line 15
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("UCP_FLAIR_EXPLAIN");
        echo "
\t\t\t</div>

\t\t\t</div>

\t\t</div>
\t</div>
\t<div class=\"panel\">
\t\t<div class=\"inner\">
\t\t\t<fieldset>
\t\t\t\t<h3>";
        // line 25
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("UCP_USER_FLAIR");
        echo "</h3>
\t\t\t\t<div class=\"flair\">
\t\t\t\t";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["user_flair"] ?? null));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 28
            echo "\t\t\t\t\t";
            if ($this->getAttribute($context["c"], "CAT_NAME", [])) {
                echo "<h4>";
                echo $this->getAttribute($context["c"], "CAT_NAME", []);
                echo "</h4>";
            }
            // line 29
            echo "
\t\t\t\t\t";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["c"], "items", []));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 31
                echo "\t\t\t\t\t<table class=\"flair-tile\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th rowspan=\"2\">
\t\t\t\t\t\t\t\t";
                // line 34
                $this->loadTemplate("@stevotvr_flair/flair_item.html", "ucp_flair.html", 34)->display(twig_array_merge($context, $context["item"]));
                // line 35
                echo "\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<h5 title=\"";
                // line 37
                echo $this->getAttribute($context["item"], "FLAIR_NAME", []);
                echo "\">";
                echo $this->getAttribute($context["item"], "FLAIR_NAME_SHORT", []);
                echo "</h5>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"flair-buttons\">
\t\t\t\t\t\t\t";
                // line 42
                if ($this->getAttribute($context["item"], "FLAIR_FAV", [])) {
                    // line 43
                    echo "\t\t\t\t\t\t\t\t<input type=\"submit\" name=\"unfav_flair[";
                    echo $this->getAttribute($context["item"], "FLAIR_ID", []);
                    echo "]\" value=\"&#xf005;\" class=\"button1 flair-fav\" title=\"";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("UCP_FLAIR_UNFAV", $this->getAttribute($context["item"], "FLAIR_NAME", []));
                    echo "\" />
\t\t\t\t\t\t\t";
                } else {
                    // line 45
                    echo "\t\t\t\t\t\t\t\t<input type=\"submit\" name=\"fav_flair[";
                    echo $this->getAttribute($context["item"], "FLAIR_ID", []);
                    echo "]\" value=\"&#xf006;\" class=\"button1 flair-fav\" title=\"";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("UCP_FLAIR_FAV", $this->getAttribute($context["item"], "FLAIR_NAME", []));
                    echo "\" />
\t\t\t\t\t\t\t";
                }
                // line 47
                echo "\t\t\t\t\t\t\t\t";
                if ($this->getAttribute($context["item"], "S_IS_FREE", [])) {
                    echo "<input type=\"submit\" name=\"remove_flair[";
                    echo $this->getAttribute($context["item"], "FLAIR_ID", []);
                    echo "]\" value=\"&times;\" class=\"button1 flair-remove\" title=\"";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("UCP_FLAIR_REMOVE", $this->getAttribute($context["item"], "FLAIR_NAME", []));
                    echo "\" />";
                }
                // line 48
                echo "\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</table>
\t\t\t\t\t";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            if ( !$this->getAttribute($context["loop"], "last", [])) {
                echo "<hr>";
            }
            // line 52
            echo "\t\t\t\t";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 53
            echo "\t\t\t\t\t<p>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("UCP_FLAIR_NO_FLAIR");
            echo "</p>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "\t\t\t\t</div>
\t\t\t</fieldset>
\t\t</div>
\t</div>
\t<div class=\"panel\">
\t\t<div class=\"inner\">
\t\t\t<fieldset>
\t\t\t\t<h3>";
        // line 62
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("UCP_FLAIR_AVAILABLE");
        echo "</h3>
\t\t\t\t<div class=\"flair\">
\t\t\t\t";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["available_flair"] ?? null));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 65
            echo "\t\t\t\t\t<h4>";
            echo $this->getAttribute($context["c"], "CAT_NAME", []);
            echo "</h4>

\t\t\t\t\t";
            // line 67
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["c"], "items", []));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 68
                echo "\t\t\t\t\t<table class=\"flair-tile\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th rowspan=\"2\">
\t\t\t\t\t\t\t\t";
                // line 71
                $this->loadTemplate("@stevotvr_flair/flair_item.html", "ucp_flair.html", 71)->display(twig_array_merge($context, $context["item"]));
                // line 72
                echo "\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<h5 title=\"";
                // line 74
                echo $this->getAttribute($context["item"], "FLAIR_NAME", []);
                echo "\">";
                echo $this->getAttribute($context["item"], "FLAIR_NAME_SHORT", []);
                echo "</h5>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"flair-buttons\">
\t\t\t\t\t\t\t\t<input type=\"submit\" name=\"add_flair[";
                // line 79
                echo $this->getAttribute($context["item"], "FLAIR_ID", []);
                echo "]\" value=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("UCP_FLAIR_ADD_BUTTON");
                echo "\" class=\"button2\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("UCP_FLAIR_ADD", $this->getAttribute($context["item"], "FLAIR_NAME", []));
                echo "\" />
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</table>
\t\t\t\t\t";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            if ( !$this->getAttribute($context["loop"], "last", [])) {
                echo "<hr>";
            }
            // line 84
            echo "\t\t\t\t";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 85
            echo "\t\t\t\t\t<p>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("UCP_FLAIR_NO_AVAILABLE");
            echo "</p>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "\t\t\t\t</div>
\t\t\t</fieldset>
\t\t</div>
\t</div>

\t";
        // line 92
        echo ($context["S_FORM_TOKEN"] ?? null);
        echo "
</form>

";
        // line 95
        $this->loadTemplate("ucp_footer.html", "ucp_flair.html", 95)->display($context);
    }

    public function getTemplateName()
    {
        return "ucp_flair.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  360 => 95,  354 => 92,  347 => 87,  338 => 85,  325 => 84,  321 => 83,  298 => 79,  288 => 74,  284 => 72,  282 => 71,  277 => 68,  260 => 67,  254 => 65,  236 => 64,  231 => 62,  222 => 55,  213 => 53,  200 => 52,  196 => 51,  179 => 48,  170 => 47,  162 => 45,  154 => 43,  152 => 42,  142 => 37,  138 => 35,  136 => 34,  131 => 31,  114 => 30,  111 => 29,  104 => 28,  86 => 27,  81 => 25,  68 => 15,  57 => 7,  54 => 6,  40 => 5,  35 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "ucp_flair.html", "");
    }
}
