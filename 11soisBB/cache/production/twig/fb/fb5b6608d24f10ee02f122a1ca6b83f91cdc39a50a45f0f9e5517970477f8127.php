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

/* @stevotvr_flair/event/memberlist_view_content_append.html */
class __TwigTemplate_3059abcbea96c70293c79b9fbcb71091f5672be6b72568da80af9f4e3caf3b38 extends \Twig\Template
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
        if (($context["flair"] ?? null)) {
            // line 2
            echo "\t<div class=\"panel bg2\">
\t\t<div class=\"inner\">
\t\t\t<h3>";
            // line 4
            echo ($context["FLAIR_TITLE"] ?? null);
            echo "</h3>
\t\t\t";
            // line 5
            $this->loadTemplate("@stevotvr_flair/flair_items.html", "@stevotvr_flair/event/memberlist_view_content_append.html", 5)->display($context);
            // line 6
            echo "\t\t</div>
\t</div>
";
        }
    }

    public function getTemplateName()
    {
        return "@stevotvr_flair/event/memberlist_view_content_append.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 6,  40 => 5,  36 => 4,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@stevotvr_flair/event/memberlist_view_content_append.html", "");
    }
}
