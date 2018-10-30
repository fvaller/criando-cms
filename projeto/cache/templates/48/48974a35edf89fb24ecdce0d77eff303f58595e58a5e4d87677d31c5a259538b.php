<?php

/* pages/edit.phtml */
class __TwigTemplate_6baba04a471efc5068a69afedb8d1cac0bc0c8c95cecdaff6d50966b13634edb extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layouts/admin.phtml", "pages/edit.phtml", 1);
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
        echo "<h3>Editar usuario: ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "title", array()), "html", null, true);
        echo "</h3>
<form class=\"form\" action=\"/admin/pages/edit/";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "id", array()), "html", null, true);
        echo "\" method=\"post\" accept-charset=\"utf-8\">\t
\t<p><input type=\"text\" name=\"title\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "title", array()), "html", null, true);
        echo "\"></p>
\t<p><textarea name=\"body\">";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "body", array()), "html", null, true);
        echo "</textarea></p>\t
\t<input type=\"submit\" value=\"Salvar\" >
</form>
";
    }

    public function getTemplateName()
    {
        return "pages/edit.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 7,  44 => 6,  40 => 5,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layouts/admin.phtml\" %}

{% block content %}
<h3>Editar usuario: {{ page.title }}</h3>
<form class=\"form\" action=\"/admin/pages/edit/{{ page.id }}\" method=\"post\" accept-charset=\"utf-8\">\t
\t<p><input type=\"text\" name=\"title\" value=\"{{ page.title }}\"></p>
\t<p><textarea name=\"body\">{{ page.body }}</textarea></p>\t
\t<input type=\"submit\" value=\"Salvar\" >
</form>
{% endblock %}", "pages/edit.phtml", "D:\\Desenvolvimento\\Web\\www\\cursos\\criando-cms\\projeto\\templates\\pages\\edit.phtml");
    }
}
