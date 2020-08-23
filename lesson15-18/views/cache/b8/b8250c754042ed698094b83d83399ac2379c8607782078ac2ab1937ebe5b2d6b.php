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

/* index.html */
class __TwigTemplate_3887a63c4e49f6d168eb6b22a65f72024296475ca4b64688e4217b0edf0eca8f extends Template
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
        echo "﻿<!DOCTYPE html>
<html lang=\"en\">
<head>
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\" />
<meta http-equiv=\"content-type\" content=\"text/html;charset=utf-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
<title>txt</title>

<link rel=\"stylesheet\" type=\"text/css\" href=\"css/style.css\">

<script type=\"text/javascript\" src=\"js/jquery.min.js\"></script>
<script type=\"text/javascript\" src=\"js/vector.js\"></script>

</head>
<body>

<div id=\"container\">
\t<div id=\"output\">
\t\t<div class=\"containerT\">
\t\t\t<h1>用户登录</h1>
\t\t\t<form class=\"form\" id=\"entry_form\">
\t\t\t\t<input type=\"text\" placeholder=\"用户名\" id=\"entry_name\">
\t\t\t\t<input type=\"password\" placeholder=\"密码\" id=\"entry_password\">
\t\t\t\t<button type=\"button\" id=\"entry_btn\">登录</button>
\t\t\t\t<div id=\"prompt\" class=\"prompt\"></div>
\t\t\t</form>
\t\t</div>
\t</div>
</div>

<script type=\"text/javascript\">
    \$(function(){
        Victor(\"container\", \"output\");   //登录背景函数
\t\t\$(\"#entry_name\").focus();
\t\tlet url = 'index.php?method=login'
\t\tdocument.querySelector('#entry_btn').onclick = function(){
\t\t\tlet name = document.querySelector('#entry_name').value
\t\t\tlet password = document.querySelector('#entry_password').value
\t\t\t
\t\t\tlet formData = new FormData();
\t\t\tformData.append('name', name);
\t\t\tformData.append('password',password)
\t\t\tfetch(url,{
\t\t\t\tbody:formData,
\t\t\t\tmethod:'POST',
\t\t\t\t
\t\t\t}).then(res=>res.json())
\t\t\t.then(data=>{
\t\t\t\tif(data.code==0){
\t\t\t\t\twindow.location.href = 'index.php?method=houtai';
\t\t\t\t}else{
\t\t\t\t\talert(data.msg)
\t\t\t\t}
\t\t\t\tconsole.log(data)
\t\t\t})
\t\t}

\t});
</script>
<div style=\"text-align:center;\">
</div>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "index.html", "G:\\myself\\phptutorial\\lesson15\\views\\templates\\index.html");
    }
}
