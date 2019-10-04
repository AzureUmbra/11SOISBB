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

/* externallinkinnewwindow_body.html */
class __TwigTemplate_08a9d77d0755e16bb56985fc684cbb5dd664a352d93daf4507468bbcb2dab615 extends \Twig\Template
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
        $this->loadTemplate("overall_header.html", "externallinkinnewwindow_body.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<h1>";
        // line 3
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_EXTLINKNEWWIN_TITLE");
        echo "</h1>

<form id=\"acp_board\" method=\"post\" action=\"";
        // line 5
        echo ($context["U_ACTION"] ?? null);
        echo "\">
\t<fieldset>
\t\t<legend>";
        // line 7
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SETTINGS");
        echo "</legend>
\t\t<dl>
\t\t\t<dt><label for=\"martin_extlinknewwin_enable_ucp1\">";
        // line 9
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_EXTLINKNEWWIN_UCP");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_EXTLINKNEWWIN_UCP_EXPLAIN");
        echo "</span></dt>
\t\t\t<dd><label><input type=\"radio\" name=\"martin_extlinknewwin_enable_ucp\" id=\"martin_extlinknewwin_enable_ucp1\" value=\"1\" class=\"radio\"";
        // line 10
        if ((($context["MARTIN_EXTLINKNEWWIN_UCP"] ?? null) == 1)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
        echo "</label>
\t\t\t\t<label><input type=\"radio\" name=\"martin_extlinknewwin_enable_ucp\" id=\"martin_extlinknewwin_enable_ucp2\" value=\"0\" class=\"radio\"";
        // line 11
        if ((($context["MARTIN_EXTLINKNEWWIN_UCP"] ?? null) == 0)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
        echo "</label></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"martin_extlinknewwin_enable_user1\">";
        // line 14
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_EXTLINKNEWWIN_USER");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_EXTLINKNEWWIN_USER_EXPLAIN");
        echo "</span></dt>
\t\t\t<dd><label><input type=\"radio\" name=\"martin_extlinknewwin_enable_user\" id=\"martin_extlinknewwin_enable_user1\" value=\"1\" class=\"radio\"";
        // line 15
        if ((($context["MARTIN_EXTLINKNEWWIN_USER"] ?? null) == 1)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
        echo "</label>
\t\t\t\t<label><input type=\"radio\" name=\"martin_extlinknewwin_enable_user\" id=\"martin_extlinknewwin_enable_user2\" value=\"0\" class=\"radio\"";
        // line 16
        if ((($context["MARTIN_EXTLINKNEWWIN_USER"] ?? null) == 0)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
        echo "</label></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"martin_extlinknewwin_enable_guests1\">";
        // line 19
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_EXTLINKNEWWIN_GUESTS");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_EXTLINKNEWWIN_GUESTS_EXPLAIN");
        echo "</span></dt>
\t\t\t<dd><label><input type=\"radio\" name=\"martin_extlinknewwin_enable_guests\" id=\"martin_extlinknewwin_enable_guests1\" value=\"1\" class=\"radio\"";
        // line 20
        if ((($context["MARTIN_EXTLINKNEWWIN_GUESTS"] ?? null) == 1)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
        echo "</label>
\t\t\t\t<label><input type=\"radio\" name=\"martin_extlinknewwin_enable_guests\" id=\"martin_extlinknewwin_enable_guests2\" value=\"0\" class=\"radio\"";
        // line 21
        if ((($context["MARTIN_EXTLINKNEWWIN_GUESTS"] ?? null) == 0)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
        echo "</label></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"martin_extlinknewwin_enable_bots1\">";
        // line 24
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_EXTLINKNEWWIN_BOTS");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_EXTLINKNEWWIN_BOTS_EXPLAIN");
        echo "</span></dt>
\t\t\t<dd><label><input type=\"radio\" name=\"martin_extlinknewwin_enable_bots\" id=\"martin_extlinknewwin_enable_bots1\" value=\"1\" class=\"radio\"";
        // line 25
        if ((($context["MARTIN_EXTLINKNEWWIN_BOTS"] ?? null) == 1)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
        echo "</label>
\t\t\t\t<label><input type=\"radio\" name=\"martin_extlinknewwin_enable_bots\" id=\"martin_extlinknewwin_enable_bots2\" value=\"0\" class=\"radio\"";
        // line 26
        if ((($context["MARTIN_EXTLINKNEWWIN_BOTS"] ?? null) == 0)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
        echo "</label></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"martin_extlinknewwin_add_ref1\">";
        // line 29
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_EXTLINKNEWWIN_ADDREF");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_EXTLINKNEWWIN_ADDREF_EXPLAIN");
        echo "</span></dt>
\t\t\t<dd><label><input type=\"radio\" name=\"martin_extlinknewwin_add_ref\" id=\"martin_extlinknewwin_add_ref1\" value=\"1\" class=\"radio\"";
        // line 30
        if ((($context["MARTIN_EXTLINKNEWWIN_ADDREF"] ?? null) == 1)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
        echo "</label>
\t\t\t\t<label><input type=\"radio\" name=\"martin_extlinknewwin_add_ref\" id=\"martin_extlinknewwin_add_ref2\" value=\"0\" class=\"radio\"";
        // line 31
        if ((($context["MARTIN_EXTLINKNEWWIN_ADDREF"] ?? null) == 0)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
        echo "</label></dd>
\t\t</dl>
\t</fieldset>

\t<fieldset class=\"submit-buttons\">
\t\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"";
        // line 36
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBMIT");
        echo "\" />&nbsp;
\t\t<input class=\"button2\" type=\"reset\" id=\"reset\" name=\"reset\" value=\"";
        // line 37
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RESET");
        echo "\" />
\t\t";
        // line 38
        echo ($context["S_FORM_TOKEN"] ?? null);
        echo "
\t</fieldset>
</form>

";
        // line 42
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "externallinkinnewwindow_body.html", 42)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "externallinkinnewwindow_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 42,  195 => 38,  191 => 37,  187 => 36,  175 => 31,  167 => 30,  160 => 29,  150 => 26,  142 => 25,  135 => 24,  125 => 21,  117 => 20,  110 => 19,  100 => 16,  92 => 15,  85 => 14,  75 => 11,  67 => 10,  60 => 9,  55 => 7,  50 => 5,  45 => 3,  42 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "externallinkinnewwindow_body.html", "");
    }
}
