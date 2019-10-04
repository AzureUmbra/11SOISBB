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

/* @vse_lightbox/event/overall_footer_body_after.html */
class __TwigTemplate_f88328a9fe783fd76f990603f04a439e69df9dce52978ce32900862ee651f15f extends \Twig\Template
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
        echo "<script>
\tlightbox.option({
\t\t'albumLabel': '";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("LIGHTBOX_GALLERY_LABEL"), "js");
        echo "'
\t});
</script>
";
    }

    public function getTemplateName()
    {
        return "@vse_lightbox/event/overall_footer_body_after.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@vse_lightbox/event/overall_footer_body_after.html", "");
    }
}
