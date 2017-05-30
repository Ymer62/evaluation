<?php

/* BlogBundle:Default:index.html.twig */
class __TwigTemplate_b66c5ca2434a145f70b89cf393ed04da395bf73635b489da4a3dbab31f22a64b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "BlogBundle:Default:index.html.twig", 1);
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
        $__internal_93269f7da2051efda57a8c309f5cecd5c36b0383ebb50ce7cd627b60ec832dba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93269f7da2051efda57a8c309f5cecd5c36b0383ebb50ce7cd627b60ec832dba->enter($__internal_93269f7da2051efda57a8c309f5cecd5c36b0383ebb50ce7cd627b60ec832dba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Default:index.html.twig"));

        $__internal_a6a6b778cec686198d4800c226500f358e6242af196821a9926c2e887cc779f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6a6b778cec686198d4800c226500f358e6242af196821a9926c2e887cc779f7->enter($__internal_a6a6b778cec686198d4800c226500f358e6242af196821a9926c2e887cc779f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93269f7da2051efda57a8c309f5cecd5c36b0383ebb50ce7cd627b60ec832dba->leave($__internal_93269f7da2051efda57a8c309f5cecd5c36b0383ebb50ce7cd627b60ec832dba_prof);

        
        $__internal_a6a6b778cec686198d4800c226500f358e6242af196821a9926c2e887cc779f7->leave($__internal_a6a6b778cec686198d4800c226500f358e6242af196821a9926c2e887cc779f7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d3dde7e729cfc8a88049bafa74687fbc119223fc7da6460712a9f66d8c94ea72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3dde7e729cfc8a88049bafa74687fbc119223fc7da6460712a9f66d8c94ea72->enter($__internal_d3dde7e729cfc8a88049bafa74687fbc119223fc7da6460712a9f66d8c94ea72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5b766e11fc2aa92ef97b897dd8e7efb9f8068097fe62b1f8a6fd51320b69152c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b766e11fc2aa92ef97b897dd8e7efb9f8068097fe62b1f8a6fd51320b69152c->enter($__internal_5b766e11fc2aa92ef97b897dd8e7efb9f8068097fe62b1f8a6fd51320b69152c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Post</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td></td>
            </tr>
            <tr>
                <th>Userid</th>
                <td></td>
            </tr>
            <tr>
                <th>Img</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 18, $this->getSourceContext()); })()), "img", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Text</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 22, $this->getSourceContext()); })()), "text", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Modified</th>
                <td>";
        // line 26
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 26, $this->getSourceContext()); })()), "modified", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 26, $this->getSourceContext()); })()), "modified", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Created</th>
                <td>";
        // line 30
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 30, $this->getSourceContext()); })()), "created", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 30, $this->getSourceContext()); })()), "created", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 40, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 43, $this->getSourceContext()); })()), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 45
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 45, $this->getSourceContext()); })()), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_5b766e11fc2aa92ef97b897dd8e7efb9f8068097fe62b1f8a6fd51320b69152c->leave($__internal_5b766e11fc2aa92ef97b897dd8e7efb9f8068097fe62b1f8a6fd51320b69152c_prof);

        
        $__internal_d3dde7e729cfc8a88049bafa74687fbc119223fc7da6460712a9f66d8c94ea72->leave($__internal_d3dde7e729cfc8a88049bafa74687fbc119223fc7da6460712a9f66d8c94ea72_prof);

    }

    public function getTemplateName()
    {
        return "BlogBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 45,  112 => 43,  106 => 40,  100 => 37,  88 => 30,  79 => 26,  72 => 22,  65 => 18,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Post</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td></td>
            </tr>
            <tr>
                <th>Userid</th>
                <td></td>
            </tr>
            <tr>
                <th>Img</th>
                <td>{{ post.img }}</td>
            </tr>
            <tr>
                <th>Text</th>
                <td>{{ post.text }}</td>
            </tr>
            <tr>
                <th>Modified</th>
                <td>{% if post.modified %}{{ post.modified|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Created</th>
                <td>{% if post.created %}{{ post.created|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('post_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('post_edit', { 'id': post.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "BlogBundle:Default:index.html.twig", "/var/www/html/evaluation/src/BlogBundle/Resources/views/Default/index.html.twig");
    }
}
