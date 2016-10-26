<?php

/* index.html */
class __TwigTemplate_dbee205a224bdd250c04b3695c40392acb1d7ee0eed1c91b26a00275908564b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<meta charset=\"UTF-8\">
<title>熊猫PHP - 首页</title>
<header>
\t<div class=\"menu\" style=\"margin:0 auto;text-align:center;margin-top:40px;font-size:20px\">
\t\t<h1><?php echo \$title;?></h1>
\t\t<h3><?php echo \$data;?></h3>
\t</div>
</header>";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "index.html", "/Library/WebServer/Documents/panda/app/views/index.html");
    }
}
