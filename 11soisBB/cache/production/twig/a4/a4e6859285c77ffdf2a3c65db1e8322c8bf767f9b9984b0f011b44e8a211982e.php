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

/* @kinerity_bestanswer/event/memberlist_view_user_statistics_after.html */
class __TwigTemplate_9c166a9d372d15ac883cf2b4cdbf92bb21d70adea7568f8837d69010de8116f8 extends \Twig\Template
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
        if (($context["ANSWERS"] ?? null)) {
            // line 2
            $asset_file = "@kinerity_bestanswer/jxtools.js";
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
            echo "
<div id=\"list_inner_hidden_container_1\" jxdom-closest=\"div.column2\" jxdom-find=\"dd:nth-of-type(";
            // line 4
            if (($context["S_WARNINGS"] ?? null)) {
                echo "4";
            } else {
                echo "3";
            }
            echo ")\" jxdom-action=\"after\" >
<dt>";
            // line 5
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOTAL_ANSWERS");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</dt>
<dd>";
            // line 6
            echo ($context["ANSWERS"] ?? null);
            echo "</dd>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "@kinerity_bestanswer/event/memberlist_view_user_statistics_after.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 6,  57 => 5,  49 => 4,  46 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@kinerity_bestanswer/event/memberlist_view_user_statistics_after.html", "");
    }
}
