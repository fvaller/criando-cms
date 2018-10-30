<?php

/* users/index.phtml */
class __TwigTemplate_01baa9bad61182e9fa506e46c0b73920e1e0c26ab9efd4ed227882c597bcfc4a extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layouts/admin.phtml", "users/index.phtml", 1);
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
        echo "<table class=\"table\">
\t<thead>
\t\t<tr>
\t\t\t<th>ID</th>
\t\t\t<th>Email</th>
\t\t\t<th>Senha</th>
\t\t\t<th colspan=\"2\">Action</th>
\t\t</tr>
\t</thead>
\t<tbody>

\t\t";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 16
            echo "\t\t<tr>
\t\t\t<td>";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", array()), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", array()), "html", null, true);
            echo "</td>\t\t\t
\t\t\t<td>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "password", array()), "html", null, true);
            echo "</td>\t\t\t
\t\t\t<td><a href=\"/admin/users/";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", array()), "html", null, true);
            echo "\">Ver</a></td>\t\t\t
\t\t\t<td><a href=\"/admin/users/edit/";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", array()), "html", null, true);
            echo "\">Editar</a></td>
\t\t\t<td>
\t\t\t\t<form action=\"/admin/users/delete/";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", array()), "html", null, true);
            echo "\" method=\"post\">
\t\t\t\t\t<input type=\"submit\" value=\"Deletar\" />
\t\t\t\t</form>
\t\t\t</td>
\t\t</tr>
\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 29
            echo "\t\t<tr>
\t\t\t<td colspan=\"4\">Sem registros</td>
\t\t</tr>\t\t
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "\t</tbody>
</table>
<hr>
<a href=\"/admin/users/new\">Novo Usuario</a>

";
    }

    public function getTemplateName()
    {
        return "users/index.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 33,  88 => 29,  77 => 23,  72 => 21,  68 => 20,  64 => 19,  60 => 18,  56 => 17,  53 => 16,  48 => 15,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layouts/admin.phtml\" %}

{% block content %}
<table class=\"table\">
\t<thead>
\t\t<tr>
\t\t\t<th>ID</th>
\t\t\t<th>Email</th>
\t\t\t<th>Senha</th>
\t\t\t<th colspan=\"2\">Action</th>
\t\t</tr>
\t</thead>
\t<tbody>

\t\t{% for user in users %}
\t\t<tr>
\t\t\t<td>{{ user.id }}</td>
\t\t\t<td>{{ user.email }}</td>\t\t\t
\t\t\t<td>{{ user.password }}</td>\t\t\t
\t\t\t<td><a href=\"/admin/users/{{ user.id }}\">Ver</a></td>\t\t\t
\t\t\t<td><a href=\"/admin/users/edit/{{ user.id }}\">Editar</a></td>
\t\t\t<td>
\t\t\t\t<form action=\"/admin/users/delete/{{ user.id }}\" method=\"post\">
\t\t\t\t\t<input type=\"submit\" value=\"Deletar\" />
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
<hr>
<a href=\"/admin/users/new\">Novo Usuario</a>

{% endblock %}", "users/index.phtml", "D:\\Desenvolvimento\\Web\\www\\cursos\\criando-cms\\projeto\\templates\\users\\index.phtml");
    }
}
