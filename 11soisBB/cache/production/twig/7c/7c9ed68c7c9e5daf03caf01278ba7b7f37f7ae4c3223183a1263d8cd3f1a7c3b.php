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

/* @alfredoramos_markdown/posting_editor_option.html */
class __TwigTemplate_9da125471f17d94480a5d3eae776ad756a30c7a00846e10e83e86e3d9b3174d1 extends \Twig\Template
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
        echo "<div>
\t<label for=\"disable_markdown\">
\t\t<input type=\"checkbox\" name=\"disable_markdown\" id=\"disable_markdown\"";
        // line 3
        echo ($context["S_MARKDOWN_CHECKED"] ?? null);
        echo " />
\t\t";
        // line 4
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DISABLE_MARKDOWN");
        echo "
\t</label>
</div>
";
    }

    public function getTemplateName()
    {
        return "@alfredoramos_markdown/posting_editor_option.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 4,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@alfredoramos_markdown/posting_editor_option.html", "");
    }
}
