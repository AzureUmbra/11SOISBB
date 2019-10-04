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

/* @alfredoramos_markdown/markdown_status.html */
class __TwigTemplate_f0762e2de8af81ce7b816f2b993c77af67196ce663ceb385158149e09c237e26 extends \Twig\Template
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
        echo "<div class=\"markdown-status\">
\t";
        // line 2
        if ((twig_length_filter($this->env, ($context["smiley"] ?? null)) > 0)) {
            echo "<hr />";
        }
        // line 3
        echo "\t";
        echo ($context["MARKDOWN_STATUS"] ?? null);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "@alfredoramos_markdown/markdown_status.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 3,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@alfredoramos_markdown/markdown_status.html", "");
    }
}
