<?php

/* user/index.html.twig */
class __TwigTemplate_f530d04aff1bcd832670c8c582fb52e5d45af47e15477c1c67dee2a377727e03 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dc326d4059c18ca3ff3dab3a0e293f5235c45c2ae4c7aaa8bf602e1eab169b61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc326d4059c18ca3ff3dab3a0e293f5235c45c2ae4c7aaa8bf602e1eab169b61->enter($__internal_dc326d4059c18ca3ff3dab3a0e293f5235c45c2ae4c7aaa8bf602e1eab169b61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $__internal_6196a693b99313e8679186b2d402288cfb0a35766d5f44ecb881a727ce6e6e1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6196a693b99313e8679186b2d402288cfb0a35766d5f44ecb881a727ce6e6e1c->enter($__internal_6196a693b99313e8679186b2d402288cfb0a35766d5f44ecb881a727ce6e6e1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc326d4059c18ca3ff3dab3a0e293f5235c45c2ae4c7aaa8bf602e1eab169b61->leave($__internal_dc326d4059c18ca3ff3dab3a0e293f5235c45c2ae4c7aaa8bf602e1eab169b61_prof);

        
        $__internal_6196a693b99313e8679186b2d402288cfb0a35766d5f44ecb881a727ce6e6e1c->leave($__internal_6196a693b99313e8679186b2d402288cfb0a35766d5f44ecb881a727ce6e6e1c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f994863902a3d3625c39da666840b37ec14fdbf9cda144494312524949b2a81d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f994863902a3d3625c39da666840b37ec14fdbf9cda144494312524949b2a81d->enter($__internal_f994863902a3d3625c39da666840b37ec14fdbf9cda144494312524949b2a81d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c7ebfaa9c12a653419ea71ab24df03e6877e992454010dff653e623e0b53ce21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7ebfaa9c12a653419ea71ab24df03e6877e992454010dff653e623e0b53ce21->enter($__internal_c7ebfaa9c12a653419ea71ab24df03e6877e992454010dff653e623e0b53ce21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Users list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Password</th>
                <th>Email</th>
                <th>Avatar</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new Twig_Error_Runtime('Variable "users" does not exist.', 18, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 19
            echo "            <tr>
                <td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "password", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "email", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "avatar", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_new");
        echo "\">Create a new user</a>
        </li>
    </ul>
";
        
        $__internal_c7ebfaa9c12a653419ea71ab24df03e6877e992454010dff653e623e0b53ce21->leave($__internal_c7ebfaa9c12a653419ea71ab24df03e6877e992454010dff653e623e0b53ce21_prof);

        
        $__internal_f994863902a3d3625c39da666840b37ec14fdbf9cda144494312524949b2a81d->leave($__internal_f994863902a3d3625c39da666840b37ec14fdbf9cda144494312524949b2a81d_prof);

    }

    public function getTemplateName()
    {
        return "user/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 42,  115 => 37,  103 => 31,  97 => 28,  90 => 24,  86 => 23,  82 => 22,  78 => 21,  72 => 20,  69 => 19,  65 => 18,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Users list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Password</th>
                <th>Email</th>
                <th>Avatar</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for user in users %}
            <tr>
                <td><a href=\"{{ path('user_show', { 'id': user.id }) }}\">{{ user.id }}</a></td>
                <td>{{ user.name }}</td>
                <td>{{ user.password }}</td>
                <td>{{ user.email }}</td>
                <td>{{ user.avatar }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('user_show', { 'id': user.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('user_edit', { 'id': user.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('user_new') }}\">Create a new user</a>
        </li>
    </ul>
{% endblock %}
", "user/index.html.twig", "/var/www/html/evaluation/app/Resources/views/user/index.html.twig");
    }
}
