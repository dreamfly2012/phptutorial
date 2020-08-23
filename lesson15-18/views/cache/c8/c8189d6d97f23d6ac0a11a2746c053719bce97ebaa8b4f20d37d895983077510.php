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

/* add.html */
class __TwigTemplate_d575c3eefe834de8e51f88dc9809e62551bcec95b67262c91fed53cd517e4726 extends Template
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
    <form action=\"index.php?method=doadd\" method=\"POST\">
        <p>
        <label for=\"title\">标题</label>
        <input name=\"title\" type=\"text\">
        </p>
        <p>
        <label for=\"content\">内容</label>
        <textarea name=\"content\"></textarea>
        </p>
        <button type='submit'>提交</button>
    </form>
</body>
</html>

";
    }

    public function getTemplateName()
    {
        return "add.html";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "add.html", "G:\\myself\\phptutorial\\lesson15\\views\\templates\\add.html");
    }
}
