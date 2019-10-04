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

/* @vse_lightbox/event/overall_footer_after.html */
class __TwigTemplate_8701d4591ca4fb58e4e4c8c2a3c47a75ed349af1fa12e9655418243ece2dd901 extends \Twig\Template
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
        if (((($context["S_LIGHTBOX_ALL_IMAGES"] ?? null) || ($context["LIGHTBOX_RESIZE_WIDTH"] ?? null)) || ($context["LIGHTBOX_RESIZE_HEIGHT"] ?? null))) {
            // line 2
            echo "\t";
            $asset_file = "@vse_lightbox/js/resizer.js";
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
            echo "\t";
            // line 4
            echo "\t";
            if ( !$this->getAttribute(($context["definition"] ?? null), "INCLUDED_LIGHTBOXJS", [])) {
                // line 5
                echo "\t\t";
                $asset_file = "@vse_lightbox/lightbox/css/lightbox.min.css";
                $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper(), $this->getEnvironment()->get_filesystem());
                if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
                    $asset_path = $asset->get_path();                    $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
                    if (!file_exists($local_file)) {
                        $local_file = $this->getEnvironment()->findTemplate($asset_path);
                        $asset->set_path($local_file, true);
                    }
                }
                
                if ($asset->is_relative()) {
                    $asset->add_assets_version('13');
                }
                $this->getEnvironment()->get_assets_bag()->add_stylesheet($asset);                // line 6
                echo "\t\t";
                $asset_file = "@vse_lightbox/lightbox/js/lightbox.min.js";
                $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper(), $this->getEnvironment()->get_filesystem());
                if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
                    $asset_path = $asset->get_path();                    $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
                    if (!file_exists($local_file)) {
                        $local_file = $this->getEnvironment()->findTemplate($asset_path);
                        $asset->set_path($local_file, true);
                    }
                }
                
                if ($asset->is_relative()) {
                    $asset->add_assets_version('13');
                }
                $this->getEnvironment()->get_assets_bag()->add_script($asset);                // line 7
                echo "\t\t";
                $value = true;
                $context['definition']->set('INCLUDED_LIGHTBOXJS', $value);
                // line 8
                echo "\t";
            }
            // line 9
            echo "\t<script>
\t\tvar vseLightbox = {};
\t\tvseLightbox.resizeHeight = ";
            // line 11
            echo ($context["LIGHTBOX_RESIZE_HEIGHT"] ?? null);
            echo ";
\t\tvseLightbox.resizeWidth = ";
            // line 12
            echo ($context["LIGHTBOX_RESIZE_WIDTH"] ?? null);
            echo ";
\t\tvseLightbox.lightboxGal = ";
            // line 13
            echo ($context["S_LIGHTBOX_GALLERY"] ?? null);
            echo ";
\t\tvseLightbox.lightboxSig = ";
            // line 14
            echo ($context["S_LIGHTBOX_SIGNATURES"] ?? null);
            echo ";
\t\tvseLightbox.imageTitles = ";
            // line 15
            echo ($context["S_LIGHTBOX_IMG_TITLES"] ?? null);
            echo ";
\t\tvseLightbox.lightboxAll = ";
            // line 16
            echo ($context["S_LIGHTBOX_ALL_IMAGES"] ?? null);
            echo ";
\t\tvseLightbox.downloadFile = 'download/file.";
            // line 17
            echo twig_escape_filter($this->env, ($context["PHP_EXTENSION"] ?? null), "js");
            echo "';
\t</script>
";
        }
    }

    public function getTemplateName()
    {
        return "@vse_lightbox/event/overall_footer_after.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 17,  113 => 16,  109 => 15,  105 => 14,  101 => 13,  97 => 12,  93 => 11,  89 => 9,  86 => 8,  82 => 7,  67 => 6,  52 => 5,  49 => 4,  47 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@vse_lightbox/event/overall_footer_after.html", "");
    }
}
