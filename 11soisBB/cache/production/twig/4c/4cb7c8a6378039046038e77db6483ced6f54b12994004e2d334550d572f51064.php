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

/* @phpbb_topicprefixes/event/posting_editor_subject_before.html */
class __TwigTemplate_bc3c9f4f612ea56afbdfb27dbbabe4b4f6552c1e17b611de0f17892c7e9c8ab6 extends \Twig\Template
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
        if (((($context["PREFIXES"] ?? null) && ($context["S_NEW_MESSAGE"] ?? null)) &&  !($context["S_PRIVMSGS"] ?? null))) {
            // line 2
            echo "\t";
            $asset_file = "@phpbb_topicprefixes/js/topic_prefixes.js";
            $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper(), $this->getEnvironment()->get_filesystem());
            if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
                $asset_path = $asset->get_path();                $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
                if (!file_exists($local_file)) {
                    $local_file = $this->getEnvironment()->findTemplate($asset_path);
                    $asset->set_path($local_file, true);
                }
            }
            
            if ($asset->is_relative()) {
                $asset->add_assets_version('13');
            }
            $this->getEnvironment()->get_assets_bag()->add_script($asset);            // line 3
            echo "\t<dl style=\"clear: left;\">
\t\t<dt><label for=\"topic_prefix\">";
            // line 4
            echo ($this->env->getExtension('phpbb\template\twig\extension')->lang("TOPIC_PREFIX") . $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON"));
            echo "</label></dt>
\t\t<dd>
\t\t\t<select name=\"topic_prefix\" id=\"topic_prefix\">
\t\t\t\t<option value=\"\">-----</option>
\t\t\t\t";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["PREFIXES"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["prefix"]) {
                // line 9
                echo "\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["prefix"], "prefix_id", []);
                echo "\"";
                if ((($context["SELECTED_PREFIX"] ?? null) == $this->getAttribute($context["prefix"], "prefix_tag", []))) {
                    echo " selected";
                }
                echo ">";
                echo $this->getAttribute($context["prefix"], "prefix_tag", []);
                echo "</option>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prefix'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "\t\t\t</select>
\t\t</dd>
\t</dl>
";
        }
    }

    public function getTemplateName()
    {
        return "@phpbb_topicprefixes/event/posting_editor_subject_before.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 11,  61 => 9,  57 => 8,  50 => 4,  47 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@phpbb_topicprefixes/event/posting_editor_subject_before.html", "");
    }
}
