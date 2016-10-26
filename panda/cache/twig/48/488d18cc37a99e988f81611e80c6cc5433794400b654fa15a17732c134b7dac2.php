<?php

/* layout.html */
class __TwigTemplate_a957acfeb7dd3b410939a207ed7ecb75eb6a251b4e9ea9e98a41c8777f0e93a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html>
<body>
\t<header style=\"margin:0 auto;text-align:center;margin-top:40px;font-size:20px\">header</header>
\t<content>
\t\t";
        // line 5
        $this->displayBlock('content', $context, $blocks);
        // line 8
        echo "\t</content>
\t<footer style=\"margin:0 auto;text-align:center;margin-top:40px;font-size:20px\">footer</footer>
</body>
</html>";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
\t\t";
    }

    public function getTemplateName()
    {
        return "layout.html";
    }

    public function getDebugInfo()
    {
        return array (  38 => 6,  35 => 5,  28 => 8,  26 => 5,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html>
<body>
\t<header style=\"margin:0 auto;text-align:center;margin-top:40px;font-size:20px\">header</header>
\t<content>
\t\t{% block content %}

\t\t{% endblock %}
\t</content>
\t<footer style=\"margin:0 auto;text-align:center;margin-top:40px;font-size:20px\">footer</footer>
</body>
</html>", "layout.html", "/Library/WebServer/Documents/panda/app/views/layout.html");
    }
}
