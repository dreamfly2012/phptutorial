<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* edit.html */
class __TwigTemplate_973167ba494f5f81fe3a6cd80b11944786d5ba32d4385a789fabef7712a94edb extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Document</title>
</head>
<body>
    <form action=\"index.php?method=doedit\" method=\"POST\">
        <p>
        <label for=\"title\">标题</label>
        <input name=\"title\" type=\"text\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "title", [], "any", false, false, false, 12), "html", null, true);
        echo "\">
        </p>
        <p>
        <label for=\"content\">内容</label>
        <textarea name=\"content\">";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "content", [], "any", false, false, false, 16), "html", null, true);
        echo "</textarea>
        </p>
        <input type=\"hidden\" name=\"id\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "id", [], "any", false, false, false, 18), "html", null, true);
        echo "\"/>
        <button type='submit'>提交</button>
    </form>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "edit.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 18,  57 => 16,  50 => 12,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "edit.html", "G:\\myself\\phptutorial\\lesson15\\views\\templates\\edit.html");
    }
}
