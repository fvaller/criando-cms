<?php

/* layouts/admin.phtml */
class __TwigTemplate_090f50e5178dcfbfc40b27253e90cee67be07559a7ef3a261a4a7765ff38100b extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"pt-br\">
<head>
\t<meta charset=\"utf-8\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<title>ADMIN - Curso CMS PHP - School Of Net</title>
\t<link rel=\"stylesheet\" href=\"https://unpkg.com/chota@latest\">
</head>
<body>
\t<div class=\"container\">

\t\t<nav class=\"nav\">
\t\t\t<div class=\"nav-left\">
\t\t\t\t<a class=\"brand\" href=\"#\">ADMIN CMS</a>
\t\t\t\t<div class=\"tabs\">
\t\t\t\t\t<a href=\"/admin/pages\">Paginas</a>
\t\t\t\t\t<a href=\"/admin/users\">Usuarios</a>\t\t\t\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"nav-right\">
\t\t\t\t
\t\t\t</div>
\t\t</nav>
\t\t
\t\t<hr>

\t\t<div class=\"row\">
\t\t\t<div class=\"col\">";
        // line 29
        $this->displayBlock('content', $context, $blocks);
        echo "</div>
\t\t</div>
\t</div> <!-- container -->\t\t
</body>
</html>";
    }

    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "layouts/admin.phtml";
    }

    public function getDebugInfo()
    {
        return array (  54 => 29,  24 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"pt-br\">
<head>
\t<meta charset=\"utf-8\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<title>ADMIN - Curso CMS PHP - School Of Net</title>
\t<link rel=\"stylesheet\" href=\"https://unpkg.com/chota@latest\">
</head>
<body>
\t<div class=\"container\">

\t\t<nav class=\"nav\">
\t\t\t<div class=\"nav-left\">
\t\t\t\t<a class=\"brand\" href=\"#\">ADMIN CMS</a>
\t\t\t\t<div class=\"tabs\">
\t\t\t\t\t<a href=\"/admin/pages\">Paginas</a>
\t\t\t\t\t<a href=\"/admin/users\">Usuarios</a>\t\t\t\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"nav-right\">
\t\t\t\t
\t\t\t</div>
\t\t</nav>
\t\t
\t\t<hr>

\t\t<div class=\"row\">
\t\t\t<div class=\"col\">{% block content %}{% endblock %}</div>
\t\t</div>
\t</div> <!-- container -->\t\t
</body>
</html>", "layouts/admin.phtml", "D:\\Desenvolvimento\\Web\\www\\cursos\\criando-cms\\projeto\\templates\\layouts\\admin.phtml");
    }
}
