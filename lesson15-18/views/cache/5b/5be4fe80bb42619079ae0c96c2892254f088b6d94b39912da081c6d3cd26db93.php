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

/* houtai.html */
class __TwigTemplate_d2a98273d3fe0ab99f18e50f43ff1ecd9a71333f1841b2ff8fa30fe53ff6c5ca extends Template
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
    <header>
        <a href=\"index.php?method=add\" target=\"_blank\">添加</a>
    </header>

    <table border=\"1\">
       <thead>
           <th>id</th>
           <th>标题</th>
           <th>内容</th>
       </thead>
       <tbody>
           ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
            // line 21
            echo "           <tr>
               <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["v"], "id", [], "any", false, false, false, 22), "html", null, true);
            echo "</td>
               <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["v"], "title", [], "any", false, false, false, 23), "html", null, true);
            echo "</td>
               <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["v"], "content", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
               <td><a href=\"index.php?method=edit&id=";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["v"], "id", [], "any", false, false, false, 25), "html", null, true);
            echo "\">编辑</a></td>
               <td><a href=\"javascript:;\" class=\"delete\" data-id=\"";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["v"], "id", [], "any", false, false, false, 26), "html", null, true);
            echo "\">删除</a></td>
           </tr>
           ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "       </tbody>
    </table>
    <script>

        let url = 'index.php?method=delete'
        let deletes = document.querySelectorAll('.delete')
        for(let i=0; i< deletes.length; i++){
            deletes[i].onclick = function(){
            if(confirm('是否真的删除')){
                
                let id = this.dataset.id
                
                let formData = new FormData();
                formData.append('id', id);
               
                fetch(url,{
                    body:formData,
                    method:'POST',
                    
                }).then(res=>res.json())
                .then(data=>{
                    if(data.code==0){
                        alert('删除成功');
                        window.location.href = 'index.php?method=houtai';
                    }else{
                        alert(data.msg)
                    }
                    console.log(data)
                })
            }
        }}
\t\t
    </script>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "houtai.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 29,  81 => 26,  77 => 25,  73 => 24,  69 => 23,  65 => 22,  62 => 21,  58 => 20,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "houtai.html", "G:\\myself\\phptutorial\\lesson15\\views\\templates\\houtai.html");
    }
}
