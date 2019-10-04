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

/* manage.html */
class __TwigTemplate_b57e451b503f11e637dcf64341b608e22e3e7f3a214c4664f645b0dd20d32516 extends \Twig\Template
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
        $this->loadTemplate("overall_header.html", "manage.html", 1)->display($context);
        // line 2
        echo "
";
        // line 3
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
        $this->getEnvironment()->get_assets_bag()->add_stylesheet($asset);        // line 4
        echo "
<a id=\"maincontent\"></a>

";
        // line 7
        if ((($context["S_ADD_CAT"] ?? null) || ($context["S_EDIT_CAT"] ?? null))) {
            // line 8
            echo "
\t<a href=\"";
            // line 9
            echo ($context["U_BACK"] ?? null);
            echo "\" style=\"float: ";
            echo ($context["S_CONTENT_FLOW_END"] ?? null);
            echo ";\">&laquo; ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BACK");
            echo "</a>

\t";
            // line 11
            if (($context["S_ERROR"] ?? null)) {
                // line 12
                echo "\t\t<div class=\"errorbox\">
\t\t\t<h3>";
                // line 13
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("WARNING");
                echo "</h3>
\t\t\t<p>";
                // line 14
                echo ($context["ERROR_MSG"] ?? null);
                echo "</p>
\t\t</div>
\t";
            }
            // line 17
            echo "
\t";
            // line 18
            if (($context["S_ADD_CAT"] ?? null)) {
                // line 19
                echo "\t\t<h1>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_FLAIR_ADD_CAT");
                echo "</h1>
\t";
            } else {
                // line 21
                echo "\t\t<h1>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_FLAIR_EDIT_CAT");
                echo " :: ";
                echo ($context["FLAIR_NAME"] ?? null);
                echo "</h1>
\t";
            }
            // line 23
            echo "
\t<form id=\"add_edit_cat\" method=\"post\" action=\"";
            // line 24
            echo ($context["U_ACTION"] ?? null);
            echo "\">
\t\t<fieldset>
\t\t\t<legend>";
            // line 26
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_FLAIR_CAT_DETAILS");
            echo "</legend>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"cat_name\">";
            // line 28
            echo ($this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_FLAIR_FORM_CAT_NAME") . $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON"));
            echo "</label></dt>
\t\t\t\t<dd><input class=\"text medium\" type=\"text\" id=\"cat_name\" name=\"cat_name\" value=\"";
            // line 29
            echo ($context["CAT_NAME"] ?? null);
            echo "\" maxlength=\"50\" /></dd>
\t\t\t</dl>
\t\t</fieldset>
\t\t";
            // line 32
            $this->loadTemplate("@stevotvr_flair/display_options.html", "manage.html", 32)->display($context);
            // line 33
            echo "\t\t<fieldset class=\"submit-buttons\">
\t\t\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"";
            // line 34
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBMIT");
            echo "\" />&nbsp;
\t\t\t<input class=\"button2\" type=\"reset\" id=\"reset\" name=\"reset\" value=\"";
            // line 35
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RESET");
            echo "\" />
\t\t\t";
            // line 36
            echo ($context["S_FORM_TOKEN"] ?? null);
            echo "
\t\t</fieldset>
\t</form>

";
        } elseif (        // line 40
($context["S_DELETE_CAT"] ?? null)) {
            // line 41
            echo "
\t<a href=\"";
            // line 42
            echo ($context["U_BACK"] ?? null);
            echo "\" style=\"float: ";
            echo ($context["S_CONTENT_FLOW_END"] ?? null);
            echo ";\">&laquo; ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BACK");
            echo "</a>

\t";
            // line 44
            if (($context["S_ERROR"] ?? null)) {
                // line 45
                echo "\t\t<div class=\"errorbox\">
\t\t\t<h3>";
                // line 46
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("WARNING");
                echo "</h3>
\t\t\t<p>";
                // line 47
                echo ($context["ERROR_MSG"] ?? null);
                echo "</p>
\t\t</div>
\t";
            }
            // line 50
            echo "
\t<h1>";
            // line 51
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_FLAIR_DELETE_CAT");
            echo "</h1>

\t<form id=\"delete_cat\" method=\"post\" action=\"";
            // line 53
            echo ($context["U_ACTION"] ?? null);
            echo "\">
\t\t<fieldset>
\t\t\t<legend>";
            // line 55
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_FLAIR_DELETE_CAT");
            echo "</legend>
\t\t\t<dl>
\t\t\t\t<dt><label>";
            // line 57
            echo ($this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_FLAIR_FORM_CAT_NAME") . $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON"));
            echo "</label></dt>
\t\t\t\t<dd><strong>";
            // line 58
            echo ($context["CAT_NAME"] ?? null);
            echo "</strong></dd>
\t\t\t</dl>
\t\t\t";
            // line 60
            if (($context["S_HAS_FLAIR"] ?? null)) {
                // line 61
                echo "\t\t\t\t<dl>
\t\t\t\t\t<dt><label for=\"delete_action\">";
                // line 62
                echo ($this->env->getExtension('phpbb\template\twig\extension')->lang("ACTION") . $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON"));
                echo "</label></dt>
\t\t\t\t\t<dd><label><input type=\"radio\" class=\"radio\" id=\"delete_action\" name=\"action_flair\" value=\"delete\" checked=\"checked\" /> ";
                // line 63
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_FLAIR_FORM_DELETE_ALL_FLAIR");
                echo "</label></dd>
\t\t\t\t\t<dd>
\t\t\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"action_flair\" value=\"move\" /> ";
                // line 65
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_FLAIR_FORM_MOVE_FLAIR_TO");
                echo "</label>
\t\t\t\t\t\t<select name=\"flair_to_cat\">
\t\t\t\t\t\t\t<option value=\"0\">";
                // line 67
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FLAIR_UNCATEGORIZED");
                echo "</option>
\t\t\t\t\t\t\t";
                // line 68
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["cats"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
                    // line 69
                    echo "\t\t\t\t\t\t\t\t<option value=\"";
                    echo $this->getAttribute($context["cat"], "CAT_ID", []);
                    echo "\">";
                    echo $this->getAttribute($context["cat"], "CAT_NAME", []);
                    echo "</option>
\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 71
                echo "\t\t\t\t\t\t</select>
\t\t\t\t\t</dd>
\t\t\t\t</dl>
\t\t\t";
            }
            // line 75
            echo "\t\t\t<p class=\"quick\">
\t\t\t\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"";
            // line 76
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBMIT");
            echo "\" />
\t\t\t</p>
\t\t\t";
            // line 78
            echo ($context["S_FORM_TOKEN"] ?? null);
            echo "
\t\t</fieldset>
\t</form>

";
        } elseif ((        // line 82
($context["S_ADD_FLAIR"] ?? null) || ($context["S_EDIT_FLAIR"] ?? null))) {
            // line 83
            echo "
\t";
            // line 84
            $asset_file = "@stevotvr_flair/edit_flair.js";
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
            $this->getEnvironment()->get_assets_bag()->add_script($asset);            // line 85
            echo "
\t<a href=\"";
            // line 86
            echo ($context["U_BACK"] ?? null);
            echo "\" style=\"float: ";
            echo ($context["S_CONTENT_FLOW_END"] ?? null);
            echo ";\">&laquo; ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BACK");
            echo "</a>

\t";
            // line 88
            if (($context["S_ERROR"] ?? null)) {
                // line 89
                echo "\t\t<div class=\"errorbox\">
\t\t\t<h3>";
                // line 90
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("WARNING");
                echo "</h3>
\t\t\t<p>";
                // line 91
                echo ($context["ERROR_MSG"] ?? null);
                echo "</p>
\t\t</div>
\t";
            }
            // line 94
            echo "
\t";
            // line 95
            if (($context["S_ADD_FLAIR"] ?? null)) {
                // line 96
                echo "\t\t<h1>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_FLAIR_ADD");
                echo "</h1>
\t";
            } else {
                // line 98
                echo "\t\t<h1>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_FLAIR_EDIT");
                echo " :: ";
                echo ($context["FLAIR_NAME"] ?? null);
                echo "</h1>
\t";
            }
            // line 100
            echo "
\t<form id=\"add_edit_flair\" method=\"post\" action=\"";
            // line 101
            echo ($context["U_ACTION"] ?? null);
            echo "\">
\t\t<fieldset>
\t\t\t<legend>";
            // line 103
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_FLAIR_DETAILS");
            echo "</legend>
\t\t\t";
            // line 104
            if (($context["cats"] ?? null)) {
                // line 105
                echo "\t\t\t\t<dl>
\t\t\t\t\t<dt><label for=\"flair_category\">";
                // line 106
                echo ($this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_FLAIR_FORM_CAT") . $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON"));
                echo "</label></dt>
\t\t\t\t\t<dd>
\t\t\t\t\t\t<select name=\"flair_category\">
\t\t\t\t\t\t\t<option value=\"0\">";
                // line 109
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FLAIR_UNCATEGORIZED");
                echo "</option>
\t\t\t\t\t\t\t";
                // line 110
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["cats"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
                    // line 111
                    echo "\t\t\t\t\t\t\t\t<option value=\"";
                    echo $this->getAttribute($context["cat"], "CAT_ID", []);
                    echo "\"";
                    if ($this->getAttribute($context["cat"], "S_SELECTED", [])) {
                        echo " selected=\"selected\"";
                    }
                    echo ">";
                    echo $this->getAttribute($context["cat"], "CAT_NAME", []);
                    echo "</option>
\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 113
                echo "\t\t\t\t\t\t</select>
\t\t\t\t\t</dd>
\t\t\t\t</dl>
\t\t\t";
            }
            // line 117
            echo "\t\t\t<dl>
\t\t\t\t<dt><label for=\"flair_name\">";
            // line 118
            echo ($this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_FLAIR_FORM_NAME") . $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON"));
            echo "</label></dt>
\t\t\t\t<dd><input class=\"text medium\" type=\"text\" id=\"flair_name\" name=\"flair_name\" value=\"";
            // line 119
            echo ($context["FLAIR_NAME"] ?? null);
            echo "\" maxlength=\"255\" /></dd>
\t\t\t</dl>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"flair_desc\">";
            // line 122
            echo ($this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_FLAIR_FORM_DESC") . $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON"));
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_FLAIR_DESC_EXPLAIN");
            echo "</span></dt>
\t\t\t\t<dd><textarea id=\"flair_desc\" name=\"flair_desc\" rows=\"5\" cols=\"45\" data-bbcode=\"true\">";
            // line 123
            echo ($context["FLAIR_DESC"] ?? null);
            echo "</textarea></dd>
\t\t\t\t<dd>
\t\t\t\t\t<label><input type=\"checkbox\" class=\"radio\" name=\"parse_bbcode\"";
            // line 125
            if (($context["S_PARSE_BBCODE_CHECKED"] ?? null)) {
                echo " checked=\"checked\"<";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PARSE_BBCODE");
            echo "</label>
\t\t\t\t\t<label><input type=\"checkbox\" class=\"radio\" name=\"parse_smilies\"<";
            // line 126
            if (($context["S_PARSE_SMILIES_CHECKED"] ?? null)) {
                echo " checked=\"checked\"<";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PARSE_SMILIES");
            echo "</label>
\t\t\t\t\t<label><input type=\"checkbox\" class=\"radio\" name=\"parse_magic_url\"<";
            // line 127
            if (($context["S_PARSE_MAGIC_URL_CHECKED"] ?? null)) {
                echo " checked=\"checked\"<";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PARSE_URLS");
            echo "</label>
\t\t\t\t</dd>
\t\t\t</dl>
\t\t</fieldset>
\t\t<fieldset>
\t\t\t<legend>";
            // line 132
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_FLAIR_APPEARANCE");
            echo "</legend>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"flair_type\">";
            // line 134
            echo ($this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_FLAIR_TYPE") . $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON"));
            echo "</label></dt>
\t\t\t\t<dd>
\t\t\t\t\t<select name=\"flair_type\" id=\"flair_type\">
\t\t\t\t\t\t<option value=\"0\"";
            // line 137
            if ((($context["FLAIR_TYPE"] ?? null) == 0)) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_FLAIR_TYPE_FA");
            echo "</option>
\t\t\t\t\t\t<option value=\"1\"";
            // line 138
            if ((($context["FLAIR_TYPE"] ?? null) == 1)) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_FLAIR_TYPE_IMG");
            echo "</option>
\t\t\t\t\t</select>
\t\t\t\t</dd>
\t\t\t</dl>
\t\t\t<dl>
\t\t\t\t<dt><label>";
            // line 143
            echo ($this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_FLAIR_FORM_PREVIEW") . $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON"));
            echo "</label></dt>
\t\t\t\t<dd id=\"flair_preview\">
\t\t\t\t\t";
            // line 145
            if ((($context["FLAIR_TYPE"] ?? null) == 0)) {
                // line 146
                echo "\t\t\t\t\t\t<span class=\"flair-icon fa-stack fa-2x flair-lg\">
\t\t\t\t\t\t\t";
                // line 147
                if (($context["FLAIR_COLOR"] ?? null)) {
                    // line 148
                    echo "\t\t\t\t\t\t\t\t<i class=\"fa fa-square fa-stack-2x\" style=\"color: #";
                    echo ($context["FLAIR_COLOR"] ?? null);
                    echo "\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t";
                    // line 149
                    if (($context["FLAIR_ICON"] ?? null)) {
                        // line 150
                        echo "\t\t\t\t\t\t\t\t\t<i class=\"fa ";
                        echo ($context["FLAIR_ICON"] ?? null);
                        echo " fa-stack-1x\"";
                        if (($context["FLAIR_ICON_COLOR"] ?? null)) {
                            echo " style=\"color: #";
                            echo ($context["FLAIR_ICON_COLOR"] ?? null);
                            echo "\"";
                        }
                        echo " aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t";
                    }
                    // line 152
                    echo "\t\t\t\t\t\t\t";
                } elseif (($context["FLAIR_ICON"] ?? null)) {
                    // line 153
                    echo "\t\t\t\t\t\t\t\t<i class=\"fa ";
                    echo ($context["FLAIR_ICON"] ?? null);
                    echo " fa-stack-2x\"";
                    if (($context["FLAIR_ICON_COLOR"] ?? null)) {
                        echo " style=\"color: #";
                        echo ($context["FLAIR_ICON_COLOR"] ?? null);
                        echo "\"";
                    }
                    echo " aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t";
                }
                // line 155
                echo "\t\t\t\t\t\t</span>
\t\t\t\t\t\t<span class=\"flair-icon fa-stack\">
\t\t\t\t\t\t\t";
                // line 157
                if (($context["FLAIR_COLOR"] ?? null)) {
                    // line 158
                    echo "\t\t\t\t\t\t\t\t<i class=\"fa fa-square fa-stack-2x\" style=\"color: #";
                    echo ($context["FLAIR_COLOR"] ?? null);
                    echo "\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t";
                    // line 159
                    if (($context["FLAIR_ICON"] ?? null)) {
                        // line 160
                        echo "\t\t\t\t\t\t\t\t\t<i class=\"fa ";
                        echo ($context["FLAIR_ICON"] ?? null);
                        echo " fa-stack-1x\"";
                        if (($context["FLAIR_ICON_COLOR"] ?? null)) {
                            echo " style=\"color: #";
                            echo ($context["FLAIR_ICON_COLOR"] ?? null);
                            echo "\"";
                        }
                        echo " aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t";
                    }
                    // line 162
                    echo "\t\t\t\t\t\t\t";
                } elseif (($context["FLAIR_ICON"] ?? null)) {
                    // line 163
                    echo "\t\t\t\t\t\t\t\t<i class=\"fa ";
                    echo ($context["FLAIR_ICON"] ?? null);
                    echo " fa-stack-2x\"";
                    if (($context["FLAIR_ICON_COLOR"] ?? null)) {
                        echo " style=\"color: #";
                        echo ($context["FLAIR_ICON_COLOR"] ?? null);
                        echo "\"";
                    }
                    echo " aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t";
                }
                // line 165
                echo "\t\t\t\t\t\t</span>
\t\t\t\t\t\t";
                // line 166
                if (($context["FLAIR_FONT_COLOR"] ?? null)) {
                    // line 167
                    echo "\t\t\t\t\t\t\t<span class=\"flair-icon fa-stack fa-2x flair-lg\">
\t\t\t\t\t\t\t\t";
                    // line 168
                    if (($context["FLAIR_COLOR"] ?? null)) {
                        // line 169
                        echo "\t\t\t\t\t\t\t\t\t<i class=\"fa fa-square fa-stack-2x\" style=\"color: #";
                        echo ($context["FLAIR_COLOR"] ?? null);
                        echo "\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t";
                        // line 170
                        if (($context["FLAIR_ICON"] ?? null)) {
                            // line 171
                            echo "\t\t\t\t\t\t\t\t\t\t<i class=\"fa ";
                            echo ($context["FLAIR_ICON"] ?? null);
                            echo " fa-stack-1x\"";
                            if (($context["FLAIR_ICON_COLOR"] ?? null)) {
                                echo " style=\"color: #";
                                echo ($context["FLAIR_ICON_COLOR"] ?? null);
                                echo "\"";
                            }
                            echo " aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 173
                        echo "\t\t\t\t\t\t\t\t";
                    } elseif (($context["FLAIR_ICON"] ?? null)) {
                        // line 174
                        echo "\t\t\t\t\t\t\t\t\t<i class=\"fa ";
                        echo ($context["FLAIR_ICON"] ?? null);
                        echo " fa-stack-2x\"";
                        if (($context["FLAIR_ICON_COLOR"] ?? null)) {
                            echo " style=\"color: #";
                            echo ($context["FLAIR_ICON_COLOR"] ?? null);
                            echo "\"";
                        }
                        echo " aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t";
                    }
                    // line 176
                    echo "\t\t\t\t\t\t\t\t\t<b class=\"flair-count\" style=\"color: #";
                    echo ($context["FLAIR_FONT_COLOR"] ?? null);
                    echo "\" aria-hidden=\"true\">2</b>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<span class=\"flair-icon fa-stack\">
\t\t\t\t\t\t\t\t";
                    // line 179
                    if (($context["FLAIR_COLOR"] ?? null)) {
                        // line 180
                        echo "\t\t\t\t\t\t\t\t\t<i class=\"fa fa-square fa-stack-2x\" style=\"color: #";
                        echo ($context["FLAIR_COLOR"] ?? null);
                        echo "\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t";
                        // line 181
                        if (($context["FLAIR_ICON"] ?? null)) {
                            // line 182
                            echo "\t\t\t\t\t\t\t\t\t\t<i class=\"fa ";
                            echo ($context["FLAIR_ICON"] ?? null);
                            echo " fa-stack-1x\"";
                            if (($context["FLAIR_ICON_COLOR"] ?? null)) {
                                echo " style=\"color: #";
                                echo ($context["FLAIR_ICON_COLOR"] ?? null);
                                echo "\"";
                            }
                            echo " aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 184
                        echo "\t\t\t\t\t\t\t\t";
                    } elseif (($context["FLAIR_ICON"] ?? null)) {
                        // line 185
                        echo "\t\t\t\t\t\t\t\t\t<i class=\"fa ";
                        echo ($context["FLAIR_ICON"] ?? null);
                        echo " fa-stack-2x\"";
                        if (($context["FLAIR_ICON_COLOR"] ?? null)) {
                            echo " style=\"color: #";
                            echo ($context["FLAIR_ICON_COLOR"] ?? null);
                            echo "\"";
                        }
                        echo " aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t";
                    }
                    // line 187
                    echo "\t\t\t\t\t\t\t\t\t<b class=\"flair-count\" style=\"color: #";
                    echo ($context["FLAIR_FONT_COLOR"] ?? null);
                    echo "\" aria-hidden=\"true\">2</b>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t";
                }
                // line 190
                echo "\t\t\t\t\t";
            } else {
                // line 191
                echo "\t\t\t\t\t\t<span class=\"flair-icon flair_lg\">
\t\t\t\t\t\t\t<img src=\"";
                // line 192
                echo (($context["FLAIR_IMG_PATH"] ?? null) . ($context["FLAIR_IMG_X2"] ?? null));
                echo "\" height=\"44\" aria-hidden=\"true\" />
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<span class=\"flair-icon\">
\t\t\t\t\t\t\t<img src=\"";
                // line 195
                echo (($context["FLAIR_IMG_PATH"] ?? null) . ($context["FLAIR_IMG"] ?? null));
                echo "\" height=\"22\" aria-hidden=\"true\" />
\t\t\t\t\t\t</span>
\t\t\t\t\t\t";
                // line 197
                if (($context["FLAIR_FONT_COLOR"] ?? null)) {
                    // line 198
                    echo "\t\t\t\t\t\t\t<span class=\"flair-icon flair-lg\">
\t\t\t\t\t\t\t\t<b class=\"flair-count\" style=\"color: #";
                    // line 199
                    echo ($context["FLAIR_FONT_COLOR"] ?? null);
                    echo "\" aria-hidden=\"true\">2</b>
\t\t\t\t\t\t\t\t<img src=\"";
                    // line 200
                    echo (($context["FLAIR_IMG_PATH"] ?? null) . ($context["FLAIR_IMG_X2"] ?? null));
                    echo "\" height=\"44\" aria-hidden=\"true\" />
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<span class=\"flair-icon\">
\t\t\t\t\t\t\t\t<b class=\"flair-count\" style=\"color: #";
                    // line 203
                    echo ($context["FLAIR_FONT_COLOR"] ?? null);
                    echo "\" aria-hidden=\"true\">2</b>
\t\t\t\t\t\t\t\t<img src=\"";
                    // line 204
                    echo (($context["FLAIR_IMG_PATH"] ?? null) . ($context["FLAIR_IMG"] ?? null));
                    echo "\" height=\"22\" aria-hidden=\"true\" />
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t";
                }
                // line 207
                echo "\t\t\t\t\t";
            }
            // line 208
            echo "\t\t\t\t</dd>
\t\t\t</dl>
\t\t\t<dl class=\"type_fa\">
\t\t\t\t<dt><label for=\"flair_color\">";
            // line 211
            echo ($this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_FLAIR_FORM_COLOR") . $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON"));
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_FLAIR_COLOR_EXPLAIN");
            echo "</span></dt>
\t\t\t\t<dd>
\t\t\t\t\t<input type=\"text\" id=\"flair_color\" name=\"flair_color\" value=\"";
            // line 213
            echo ($context["FLAIR_COLOR"] ?? null);
            echo "\" size=\"6\" maxlength=\"6\" />
\t\t\t\t\t&nbsp;&nbsp;<span>[ <a href=\"#\" id=\"color_palette_toggle1\">";
            // line 214
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLOUR_SWATCH");
            echo "</a> ]</span>
\t\t\t\t\t<div id=\"color_palette_placeholder\" class=\"color_palette_placeholder\" data-orientation=\"h\" data-height=\"12\" data-width=\"15\" data-target=\"#flair_color\"></div>
\t\t\t\t</dd>
\t\t\t</dl>
\t\t\t<dl class=\"type_fa\">
\t\t\t\t<dt><label for=\"flair_icon\">";
            // line 219
            echo ($this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_FLAIR_FORM_ICON") . $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON"));
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_FLAIR_ICON_EXPLAIN");
            echo "</span></dt>
\t\t\t\t<dd><input class=\"text medium\" type=\"text\" id=\"flair_icon\" name=\"flair_icon\" value=\"";
            // line 220
            echo ($context["FLAIR_ICON"] ?? null);
            echo "\" maxlength=\"50\" /></dd>
\t\t\t</dl>
\t\t\t<dl class=\"type_fa\">
\t\t\t\t<dt><label for=\"flair_icon_color\">";
            // line 223
            echo ($this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_FLAIR_FORM_ICON_COLOR") . $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON"));
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_FLAIR_ICON_COLOR_EXPLAIN");
            echo "</span></dt>
\t\t\t\t<dd>
\t\t\t\t\t<input type=\"text\" id=\"flair_icon_color\" name=\"flair_icon_color\" value=\"";
            // line 225
            echo ($context["FLAIR_ICON_COLOR"] ?? null);
            echo "\" size=\"6\" maxlength=\"6\" />
\t\t\t\t\t&nbsp;&nbsp;<span>[ <a href=\"#\" id=\"color_palette_toggle2\">";
            // line 226
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLOUR_SWATCH");
            echo "</a> ]</span>
\t\t\t\t\t<div id=\"color_palette_placeholder2\" class=\"color_palette_placeholder\" data-orientation=\"h\" data-height=\"12\" data-width=\"15\" data-target=\"#flair_icon_color\"></div>
\t\t\t\t</dd>
\t\t\t</dl>
\t\t\t<dl class=\"type_img\">
\t\t\t\t<dt>
\t\t\t\t\t<label for=\"flair_img\">";
            // line 232
            echo ($this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_FLAIR_FORM_IMG") . $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON"));
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_FLAIR_IMG_EXPLAIN");
            echo "</span>
\t\t\t\t</dt>
\t\t\t\t<dd>
\t\t\t\t\t";
            // line 235
            if (($context["imgs"] ?? null)) {
                // line 236
                echo "\t\t\t\t\t\t<select id=\"flair_img\" name=\"flair_img\">
\t\t\t\t\t\t\t<option></option>
\t\t\t\t\t\t\t";
                // line 238
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["imgs"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
                    // line 239
                    echo "\t\t\t\t\t\t\t\t<option ";
                    if ($this->getAttribute($context["img"], "S_SELECTED", [])) {
                        echo " selected=\"selected\"";
                    }
                    echo ">";
                    echo $this->getAttribute($context["img"], "IMG_NAME", []);
                    echo "</option>
\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 241
                echo "\t\t\t\t\t\t</select>
\t\t\t\t\t";
            } else {
                // line 243
                echo "\t\t\t\t\t\t";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_FLAIR_NO_IMGS");
                echo "
\t\t\t\t\t";
            }
            // line 245
            echo "\t\t\t\t</dd>
\t\t\t</dl>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"flair_font_color\">";
            // line 248
            echo ($this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_FLAIR_FORM_FONT_COLOR") . $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON"));
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_FLAIR_FONT_COLOR_EXPLAIN");
            echo "</span></dt>
\t\t\t\t<dd>
\t\t\t\t\t<input type=\"text\" id=\"flair_font_color\" name=\"flair_font_color\" value=\"";
            // line 250
            echo ($context["FLAIR_FONT_COLOR"] ?? null);
            echo "\" size=\"6\" maxlength=\"6\" />
\t\t\t\t\t&nbsp;&nbsp;<span>[ <a href=\"#\" id=\"color_palette_toggle3\">";
            // line 251
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLOUR_SWATCH");
            echo "</a> ]</span>
\t\t\t\t\t<div id=\"color_palette_placeholder3\" class=\"color_palette_placeholder\" data-orientation=\"h\" data-height=\"12\" data-width=\"15\" data-target=\"#flair_font_color\"></div>
\t\t\t\t</dd>
\t\t\t</dl>
\t\t</fieldset>
\t\t<fieldset>
\t\t\t<legend>";
            // line 257
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_FLAIR_FORM_GROUPS");
            echo "</legend>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"flair_groups\">";
            // line 259
            echo ($this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_FLAIR_FORM_GROUPS") . $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON"));
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_FLAIR_GROUPS_EXPLAIN");
            echo "</span></dt>
\t\t\t\t<dd>
\t\t\t\t\t<select name=\"flair_groups[]\" id=\"flair_groups\" multiple=\"multiple\" size=\"10\">
\t\t\t\t\t\t";
            // line 262
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["group"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["g"]) {
                // line 263
                echo "\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["g"], "GROUP_ID", []);
                echo "\"";
                if ($this->getAttribute($context["g"], "S_SELECTED", [])) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo $this->getAttribute($context["g"], "GROUP_NAME", []);
                echo "</option>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['g'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 265
            echo "\t\t\t\t\t</select>
\t\t\t\t</dd>
\t\t\t</dl>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"flair_groups_auto\">";
            // line 269
            echo ($this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_FLAIR_FORM_GROUPS_AUTO") . $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON"));
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_FLAIR_GROUPS_AUTO_EXPLAIN");
            echo "</span></dt>
\t\t\t\t<dd><label><input type=\"radio\" id=\"flair_groups_auto\" name=\"flair_groups_auto\" value=\"1\"";
            // line 270
            if (($context["FLAIR_GROUPS_AUTO"] ?? null)) {
                echo " checked=\"checked\"";
            }
            echo " class=\"radio\" /> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
            echo "</label><label><input type=\"radio\" name=\"flair_groups_auto\" value=\"0\"";
            if ( !($context["FLAIR_GROUPS_AUTO"] ?? null)) {
                echo " checked=\"checked\"";
            }
            echo " class=\"radio\" /> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
            echo "</label></dd>
\t\t\t</dl>
\t\t</fieldset>
\t\t<fieldset>
\t\t\t<legend>";
            // line 274
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_FLAIR_AUTO_ASSIGN");
            echo "</legend>
\t\t\t";
            // line 275
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["trigger"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
                // line 276
                echo "\t\t\t\t<dl>
\t\t\t\t\t<dt><label for=\"flair_trigger_";
                // line 277
                echo $this->getAttribute($context["t"], "TRIG_KEY", []);
                echo "\">";
                echo ($this->getAttribute($context["t"], "TRIG_NAME", []) . $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON"));
                echo "</label>";
                if ($this->getAttribute($context["t"], "TRIG_EXPLAIN", [])) {
                    echo "<br /><span>";
                    echo $this->getAttribute($context["t"], "TRIG_EXPLAIN", []);
                    echo "</span>";
                }
                echo "</dt>
\t\t\t\t\t<dd><input type=\"number\" id=\"flair_trigger_";
                // line 278
                echo $this->getAttribute($context["t"], "TRIG_KEY", []);
                echo "\" name=\"flair_triggers[";
                echo $this->getAttribute($context["t"], "TRIG_KEY", []);
                echo "]\" value=\"";
                echo $this->getAttribute($context["t"], "TRIG_VALUE", []);
                echo "\" min=\"0\" max=\"16777215\" /></dd>
\t\t\t\t</dl>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 281
            echo "\t\t</fieldset>
\t\t<fieldset class=\"submit-buttons\">
\t\t\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"";
            // line 283
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBMIT");
            echo "\" />&nbsp;
\t\t\t<input class=\"button2\" type=\"reset\" id=\"reset\" name=\"reset\" value=\"";
            // line 284
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RESET");
            echo "\" />
\t\t\t";
            // line 285
            echo ($context["S_FORM_TOKEN"] ?? null);
            echo "
\t\t</fieldset>
\t</form>
\t<script type=\"text/javascript\">
\t\tvar flair = {
\t\t\timgPath:\t'";
            // line 290
            echo twig_escape_filter($this->env, ($context["FLAIR_IMG_PATH"] ?? null), "js");
            echo "'
\t\t};
\t</script>

";
        } else {
            // line 295
            echo "
\t";
            // line 296
            if ( !($context["S_IN_CAT"] ?? null)) {
                // line 297
                echo "\t\t<h1>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_FLAIR_MANAGE_CATS");
                echo "</h1>

\t\t<p>";
                // line 299
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_FLAIR_MANAGE_CATS_EXPLAIN");
                echo "</p>

\t\t<table class=\"table1 zebra-table responsive\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>";
                // line 304
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_FLAIR_NAME");
                echo "</th>
\t\t\t\t\t<th style=\"width: 10%\">";
                // line 305
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_FLAIR_DISPLAY_ON");
                echo "</th>
\t\t\t\t\t<th style=\"width: 10%\">";
                // line 306
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACTION");
                echo "</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t";
                // line 310
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["cats"] ?? null));
                $context['_iterated'] = false;
                foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                    // line 311
                    echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td><strong>";
                    // line 312
                    if ($this->getAttribute($context["c"], "U_FLAIR", [])) {
                        echo "<a href=\"";
                        echo $this->getAttribute($context["c"], "U_FLAIR", []);
                        echo "\">";
                    }
                    echo $this->getAttribute($context["c"], "CAT_NAME", []);
                    if ($this->getAttribute($context["c"], "U_FLAIR", [])) {
                        echo "</a>";
                    }
                    echo "</strong></td>
\t\t\t\t\t\t<td>";
                    // line 313
                    echo $this->getAttribute($context["c"], "DISPLAY_ON", []);
                    echo "</td>
\t\t\t\t\t\t<td class=\"actions\">
\t\t\t\t\t\t\t<span class=\"up-disabled\" style=\"display:none;\">";
                    // line 315
                    echo ($context["ICON_MOVE_UP_DISABLED"] ?? null);
                    echo "</span>
\t\t\t\t\t\t\t<span class=\"up\"><a href=\"";
                    // line 316
                    echo $this->getAttribute($context["c"], "U_MOVE_UP", []);
                    echo "\" data-ajax=\"row_up\">";
                    echo ($context["ICON_MOVE_UP"] ?? null);
                    echo "</a></span>
\t\t\t\t\t\t\t<span class=\"down-disabled\" style=\"display:none;\">";
                    // line 317
                    echo ($context["ICON_MOVE_DOWN_DISABLED"] ?? null);
                    echo "</span>
\t\t\t\t\t\t\t<span class=\"down\"><a href=\"";
                    // line 318
                    echo $this->getAttribute($context["c"], "U_MOVE_DOWN", []);
                    echo "\" data-ajax=\"row_down\">";
                    echo ($context["ICON_MOVE_DOWN"] ?? null);
                    echo "</a></span>
\t\t\t\t\t\t\t<a href=\"";
                    // line 319
                    echo $this->getAttribute($context["c"], "U_EDIT", []);
                    echo "\">";
                    echo ($context["ICON_EDIT"] ?? null);
                    echo "</a>
\t\t\t\t\t\t\t<a href=\"";
                    // line 320
                    echo $this->getAttribute($context["c"], "U_DELETE", []);
                    echo "\">";
                    echo ($context["ICON_DELETE"] ?? null);
                    echo "</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t";
                    $context['_iterated'] = true;
                }
                if (!$context['_iterated']) {
                    // line 324
                    echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td colspan=\"3\" style=\"text-align: center;\">";
                    // line 325
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_FLAIR_CATS_EMPTY");
                    echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 328
                echo "\t\t\t</tbody>
\t\t</table>

\t\t<form id=\"flair_add\" method=\"post\" action=\"";
                // line 331
                echo ($context["U_ADD_CAT"] ?? null);
                echo "\">
\t\t\t<fieldset class=\"quick\">
\t\t\t\t<input class=\"button2\" type=\"submit\" name=\"addcat\" value=\"";
                // line 333
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_FLAIR_ADD_CAT");
                echo "\" />
\t\t\t</fieldset>
\t\t</form>
\t";
            } else {
                // line 337
                echo "\t\t<a href=\"";
                echo ($context["U_ACTION"] ?? null);
                echo "\" style=\"float: ";
                echo ($context["S_CONTENT_FLOW_END"] ?? null);
                echo ";\">&laquo; ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BACK");
                echo "</a>
\t";
            }
            // line 339
            echo "
\t<h1>";
            // line 340
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_FLAIR_MANAGE");
            echo " :: ";
            echo ($context["CAT_NAME"] ?? null);
            echo "</h1>

\t<p>";
            // line 342
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_FLAIR_MANAGE_EXPLAIN");
            echo "</p>

\t<table class=\"table1 zebra-table responsive\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th style=\"width: 23px\">&nbsp;</th>
\t\t\t\t<th>";
            // line 348
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_FLAIR_NAME");
            echo "</th>
\t\t\t\t<th style=\"width: 10%\">";
            // line 349
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACTION");
            echo "</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t";
            // line 353
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["flair"] ?? null));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
                // line 354
                echo "\t\t\t\t<tr>
\t\t\t\t\t<td style=\"text-align: center\">
\t\t\t\t\t\t";
                // line 356
                if (($this->getAttribute($context["f"], "FLAIR_TYPE", []) == 0)) {
                    // line 357
                    echo "\t\t\t\t\t\t\t<span class=\"flair-icon fa-stack\">
\t\t\t\t\t\t\t\t";
                    // line 358
                    if ($this->getAttribute($context["f"], "FLAIR_COLOR", [])) {
                        // line 359
                        echo "\t\t\t\t\t\t\t\t\t<i class=\"fa fa-square fa-stack-2x\" style=\"color: #";
                        echo $this->getAttribute($context["f"], "FLAIR_COLOR", []);
                        echo "\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t";
                        // line 360
                        if ($this->getAttribute($context["f"], "FLAIR_ICON", [])) {
                            // line 361
                            echo "\t\t\t\t\t\t\t\t\t\t<i class=\"fa ";
                            echo $this->getAttribute($context["f"], "FLAIR_ICON", []);
                            echo " fa-stack-1x\"";
                            if ($this->getAttribute($context["f"], "FLAIR_ICON_COLOR", [])) {
                                echo " style=\"color: #";
                                echo $this->getAttribute($context["f"], "FLAIR_ICON_COLOR", []);
                                echo "\"";
                            }
                            echo " aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 363
                        echo "\t\t\t\t\t\t\t\t";
                    } elseif ($this->getAttribute($context["f"], "FLAIR_ICON", [])) {
                        // line 364
                        echo "\t\t\t\t\t\t\t\t\t<i class=\"fa ";
                        echo $this->getAttribute($context["f"], "FLAIR_ICON", []);
                        echo " fa-stack-2x\"";
                        if ($this->getAttribute($context["f"], "FLAIR_ICON_COLOR", [])) {
                            echo " style=\"color: #";
                            echo $this->getAttribute($context["f"], "FLAIR_ICON_COLOR", []);
                            echo "\"";
                        }
                        echo " aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t";
                    }
                    // line 366
                    echo "\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t";
                } else {
                    // line 368
                    echo "\t\t\t\t\t\t\t<span class=\"flair-icon\">
\t\t\t\t\t\t\t\t<img src=\"";
                    // line 369
                    echo $this->getAttribute($context["f"], "FLAIR_IMG", []);
                    echo "\" height=\"22\" aria-hidden=\"true\" />
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t";
                }
                // line 372
                echo "\t\t\t\t\t</td>
\t\t\t\t\t<td><strong><a href=\"";
                // line 373
                echo $this->getAttribute($context["f"], "U_EDIT", []);
                echo "\">";
                echo $this->getAttribute($context["f"], "FLAIR_NAME", []);
                echo "</a></strong></td>
\t\t\t\t\t<td class=\"actions\">
\t\t\t\t\t\t<span class=\"up-disabled\" style=\"display:none;\">";
                // line 375
                echo ($context["ICON_MOVE_UP_DISABLED"] ?? null);
                echo "</span>
\t\t\t\t\t\t<span class=\"up\"><a href=\"";
                // line 376
                echo $this->getAttribute($context["f"], "U_MOVE_UP", []);
                echo "\" data-ajax=\"row_up\">";
                echo ($context["ICON_MOVE_UP"] ?? null);
                echo "</a></span>
\t\t\t\t\t\t<span class=\"down-disabled\" style=\"display:none;\">";
                // line 377
                echo ($context["ICON_MOVE_DOWN_DISABLED"] ?? null);
                echo "</span>
\t\t\t\t\t\t<span class=\"down\"><a href=\"";
                // line 378
                echo $this->getAttribute($context["f"], "U_MOVE_DOWN", []);
                echo "\" data-ajax=\"row_down\">";
                echo ($context["ICON_MOVE_DOWN"] ?? null);
                echo "</a></span>
\t\t\t\t\t\t<a href=\"";
                // line 379
                echo $this->getAttribute($context["f"], "U_EDIT", []);
                echo "\">";
                echo ($context["ICON_EDIT"] ?? null);
                echo "</a>
\t\t\t\t\t\t<a href=\"";
                // line 380
                echo $this->getAttribute($context["f"], "U_DELETE", []);
                echo "\" data-ajax=\"row_delete\">";
                echo ($context["ICON_DELETE"] ?? null);
                echo "</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 384
                echo "\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"3\" style=\"text-align: center;\">";
                // line 385
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_FLAIR_EMPTY");
                echo "</td>
\t\t\t\t</tr>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 388
            echo "\t\t</tbody>
\t</table>

\t<form id=\"flair_add\" method=\"post\" action=\"";
            // line 391
            echo ($context["U_ADD_FLAIR"] ?? null);
            echo "\">
\t\t<fieldset class=\"quick\">
\t\t\t<input class=\"button2\" type=\"submit\" name=\"addflair\" value=\"";
            // line 393
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_FLAIR_ADD");
            echo "\" />
\t\t</fieldset>
\t</form>

";
        }
        // line 398
        echo "
";
        // line 399
        $this->loadTemplate("overall_footer.html", "manage.html", 399)->display($context);
    }

    public function getTemplateName()
    {
        return "manage.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1240 => 399,  1237 => 398,  1229 => 393,  1224 => 391,  1219 => 388,  1210 => 385,  1207 => 384,  1196 => 380,  1190 => 379,  1184 => 378,  1180 => 377,  1174 => 376,  1170 => 375,  1163 => 373,  1160 => 372,  1154 => 369,  1151 => 368,  1147 => 366,  1135 => 364,  1132 => 363,  1120 => 361,  1118 => 360,  1113 => 359,  1111 => 358,  1108 => 357,  1106 => 356,  1102 => 354,  1097 => 353,  1090 => 349,  1086 => 348,  1077 => 342,  1070 => 340,  1067 => 339,  1057 => 337,  1050 => 333,  1045 => 331,  1040 => 328,  1031 => 325,  1028 => 324,  1017 => 320,  1011 => 319,  1005 => 318,  1001 => 317,  995 => 316,  991 => 315,  986 => 313,  974 => 312,  971 => 311,  966 => 310,  959 => 306,  955 => 305,  951 => 304,  943 => 299,  937 => 297,  935 => 296,  932 => 295,  924 => 290,  916 => 285,  912 => 284,  908 => 283,  904 => 281,  891 => 278,  879 => 277,  876 => 276,  872 => 275,  868 => 274,  851 => 270,  845 => 269,  839 => 265,  824 => 263,  820 => 262,  812 => 259,  807 => 257,  798 => 251,  794 => 250,  787 => 248,  782 => 245,  776 => 243,  772 => 241,  759 => 239,  755 => 238,  751 => 236,  749 => 235,  741 => 232,  732 => 226,  728 => 225,  721 => 223,  715 => 220,  709 => 219,  701 => 214,  697 => 213,  690 => 211,  685 => 208,  682 => 207,  676 => 204,  672 => 203,  666 => 200,  662 => 199,  659 => 198,  657 => 197,  652 => 195,  646 => 192,  643 => 191,  640 => 190,  633 => 187,  621 => 185,  618 => 184,  606 => 182,  604 => 181,  599 => 180,  597 => 179,  590 => 176,  578 => 174,  575 => 173,  563 => 171,  561 => 170,  556 => 169,  554 => 168,  551 => 167,  549 => 166,  546 => 165,  534 => 163,  531 => 162,  519 => 160,  517 => 159,  512 => 158,  510 => 157,  506 => 155,  494 => 153,  491 => 152,  479 => 150,  477 => 149,  472 => 148,  470 => 147,  467 => 146,  465 => 145,  460 => 143,  448 => 138,  440 => 137,  434 => 134,  429 => 132,  417 => 127,  409 => 126,  401 => 125,  396 => 123,  390 => 122,  384 => 119,  380 => 118,  377 => 117,  371 => 113,  356 => 111,  352 => 110,  348 => 109,  342 => 106,  339 => 105,  337 => 104,  333 => 103,  328 => 101,  325 => 100,  317 => 98,  311 => 96,  309 => 95,  306 => 94,  300 => 91,  296 => 90,  293 => 89,  291 => 88,  282 => 86,  279 => 85,  265 => 84,  262 => 83,  260 => 82,  253 => 78,  248 => 76,  245 => 75,  239 => 71,  228 => 69,  224 => 68,  220 => 67,  215 => 65,  210 => 63,  206 => 62,  203 => 61,  201 => 60,  196 => 58,  192 => 57,  187 => 55,  182 => 53,  177 => 51,  174 => 50,  168 => 47,  164 => 46,  161 => 45,  159 => 44,  150 => 42,  147 => 41,  145 => 40,  138 => 36,  134 => 35,  130 => 34,  127 => 33,  125 => 32,  119 => 29,  115 => 28,  110 => 26,  105 => 24,  102 => 23,  94 => 21,  88 => 19,  86 => 18,  83 => 17,  77 => 14,  73 => 13,  70 => 12,  68 => 11,  59 => 9,  56 => 8,  54 => 7,  49 => 4,  35 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "manage.html", "");
    }
}
