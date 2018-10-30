<?php

/* users/new.phtml */
class __TwigTemplate_7906e642fe17d00100062ec353c8bc0aee0710700fdb91c8e86c10caeafedc5c extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layouts/admin.phtml", "users/new.phtml", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layouts/admin.phtml";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<h3>Novo usuario</h3>
<form action=\"/admin/users/new\" method=\"post\" accept-charset=\"utf-8\">
\t<input type=\"text\" name=\"email\">
\t<input type=\"password\" name=\"password\">
\t<input type=\"submit\" value=\"Salvar\">
</form>

";
    }

    public function getTemplateName()
    {
        return "users/new.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "users/new.phtml", "D:\\Desenvolvimento\\Web\\www\\cursos\\criando-cms\\projeto\\templates\\users\\new.phtml");
    }
}
