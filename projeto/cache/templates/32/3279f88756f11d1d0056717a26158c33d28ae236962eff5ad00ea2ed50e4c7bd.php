<?php

/* pages/index.phtml */
class __TwigTemplate_6804a217cec686539d612d868d8f9e57c70804593b75937d4101ef4d08140250 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layouts/admin.phtml", "pages/index.phtml", 1);
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
        echo "<h3>Paginas</h3>
<a href=\"/admin/pages/new\" class=\"button\">Nova Pagina</a>
<hr>
<table class=\"table\">
\t<thead>
\t\t<tr>
\t\t\t<th>ID</th>
\t\t\t<th>Title</th>
\t\t\t<th colspan=\"2\">Action</th>
\t\t</tr>
\t</thead>
\t<tbody>

\t\t";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pages"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 18
            echo "\t\t<tr>
\t\t\t<td>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "id", array()), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "title", array()), "html", null, true);
            echo "</td>\t\t\t
\t\t\t<td><a href=\"/admin/pages/";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "id", array()), "html", null, true);
            echo "\" class=\"button primary\">Ver</a></td>\t\t\t
\t\t\t<td><a href=\"/admin/pages/edit/";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "id", array()), "html", null, true);
            echo "\" class=\"button secondary\">Editar</a></td>
\t\t\t<td>
\t\t\t\t<form action=\"/admin/pages/delete/";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "id", array()), "html", null, true);
            echo "\" method=\"post\">
\t\t\t\t\t<input type=\"submit\" value=\"Deletar\" class=\"button error\" />
\t\t\t\t</form>
\t\t\t</td>
\t\t</tr>
\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 30
            echo "\t\t<tr>
\t\t\t<td colspan=\"4\">Sem registros</td>
\t\t</tr>\t\t
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "\t</tbody>
</table>

";
    }

    public function getTemplateName()
    {
        return "pages/index.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 34,  86 => 30,  75 => 24,  70 => 22,  66 => 21,  62 => 20,  58 => 19,  55 => 18,  50 => 17,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layouts/admin.phtml\" %}

{% block content %}
<h3>Paginas</h3>
<a href=\"/admin/pages/new\" class=\"button\">Nova Pagina</a>
<hr>
<table class=\"table\">
\t<thead>
\t\t<tr>
\t\t\t<th>ID</th>
\t\t\t<th>Title</th>
\t\t\t<th colspan=\"2\">Action</th>
\t\t</tr>
\t</thead>
\t<tbody>

\t\t{% for page in pages %}
\t\t<tr>
\t\t\t<td>{{ page.id }}</td>
\t\t\t<td>{{ page.title }}</td>\t\t\t
\t\t\t<td><a href=\"/admin/pages/{{ page.id }}\" class=\"button primary\">Ver</a></td>\t\t\t
\t\t\t<td><a href=\"/admin/pages/edit/{{ page.id }}\" class=\"button secondary\">Editar</a></td>
\t\t\t<td>
\t\t\t\t<form action=\"/admin/pages/delete/{{ page.id }}\" method=\"post\">
\t\t\t\t\t<input type=\"submit\" value=\"Deletar\" class=\"button error\" />
\t\t\t\t</form>
\t\t\t</td>
\t\t</tr>
\t\t{% else %}
\t\t<tr>
\t\t\t<td colspan=\"4\">Sem registros</td>
\t\t</tr>\t\t
\t\t{% endfor %}
\t</tbody>
</table>

{% endblock %}", "pages/index.phtml", "D:\\Desenvolvimento\\Web\\www\\cursos\\criando-cms\\projeto\\templates\\pages\\index.phtml");
    }
}
