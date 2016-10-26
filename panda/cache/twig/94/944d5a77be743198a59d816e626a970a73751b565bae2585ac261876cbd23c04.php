<?php

/* index.html */
class __TwigTemplate_22a5fa359fd029eeaa54cb3116d66a2d4bb8b1b37a918c30790e4b1c445f6959 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "index.html", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "<meta charset=\"UTF-8\">
<title>熊猫PHP - 首页</title>
\t<div class=\"menu\" style=\"margin:0 auto;text-align:center;margin-top:40px;font-size:20px\">
\t\t<h1>";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "</h1>
\t\t<h3>";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["data"]) ? $context["data"] : null), "html", null, true);
        echo "</h3>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 7,  36 => 6,  31 => 3,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.html\" %}
{% block content %}
<meta charset=\"UTF-8\">
<title>熊猫PHP - 首页</title>
\t<div class=\"menu\" style=\"margin:0 auto;text-align:center;margin-top:40px;font-size:20px\">
\t\t<h1>{{title}}</h1>
\t\t<h3>{{data}}</h3>
\t</div>
{% endblock %}", "index.html", "/Library/WebServer/Documents/panda/app/views/index.html");
    }
}
