<?php

/* post/show.html.twig */
class __TwigTemplate_cd106ccf83e6871f3d43a29d8677d289c2bd671be83f852591e0b242eb4c7ae7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "post/show.html.twig", 1);
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
        $__internal_f26d16b53b5fd18435a113f344e3a6984e5cb494550adfe5616df1cf12732182 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f26d16b53b5fd18435a113f344e3a6984e5cb494550adfe5616df1cf12732182->enter($__internal_f26d16b53b5fd18435a113f344e3a6984e5cb494550adfe5616df1cf12732182_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "post/show.html.twig"));

        $__internal_325e1122e57abef8d0ddd3cc12c9b055863c3c9c82125d569d64c22377f22cb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_325e1122e57abef8d0ddd3cc12c9b055863c3c9c82125d569d64c22377f22cb1->enter($__internal_325e1122e57abef8d0ddd3cc12c9b055863c3c9c82125d569d64c22377f22cb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "post/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f26d16b53b5fd18435a113f344e3a6984e5cb494550adfe5616df1cf12732182->leave($__internal_f26d16b53b5fd18435a113f344e3a6984e5cb494550adfe5616df1cf12732182_prof);

        
        $__internal_325e1122e57abef8d0ddd3cc12c9b055863c3c9c82125d569d64c22377f22cb1->leave($__internal_325e1122e57abef8d0ddd3cc12c9b055863c3c9c82125d569d64c22377f22cb1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ed8a3b7f129cd5eceb97c62877dafb94a87efab9c0f74171fc1bb6164018ab5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed8a3b7f129cd5eceb97c62877dafb94a87efab9c0f74171fc1bb6164018ab5f->enter($__internal_ed8a3b7f129cd5eceb97c62877dafb94a87efab9c0f74171fc1bb6164018ab5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d59a3c98b84e48ee03ea457607fcb645aaaa90b6a0122edccf834bb1ece54b37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d59a3c98b84e48ee03ea457607fcb645aaaa90b6a0122edccf834bb1ece54b37->enter($__internal_d59a3c98b84e48ee03ea457607fcb645aaaa90b6a0122edccf834bb1ece54b37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container\">
<div class=\"row\">

  <div class=\"well col-md-12\">
    <h2>";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 8, $this->getSourceContext()); })()), "title", array()), "html", null, true);
        echo "</h2>

    <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 10, $this->getSourceContext()); })()), "img", array()), "html", null, true);
        echo "\" alt=\"\" />

    <p>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 12, $this->getSourceContext()); })()), "text", array()), "html", null, true);
        echo "
    </p>

    <a class=\"col-md-12\" href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_index");
        echo "\"><input type=\"submit\" value=\"Retour\"> </a>

    <a class=\"col-md-12\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 17, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "\"> <input type=\"submit\" value=\"Modifier\"></a>


    ";
        // line 20
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 20, $this->getSourceContext()); })()), 'form_start');
        echo "
    <input type=\"submit\" value=\"Supprimer\">
    ";
        // line 22
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 22, $this->getSourceContext()); })()), 'form_end');
        echo "

</div>
</div>

</div>



";
        
        $__internal_d59a3c98b84e48ee03ea457607fcb645aaaa90b6a0122edccf834bb1ece54b37->leave($__internal_d59a3c98b84e48ee03ea457607fcb645aaaa90b6a0122edccf834bb1ece54b37_prof);

        
        $__internal_ed8a3b7f129cd5eceb97c62877dafb94a87efab9c0f74171fc1bb6164018ab5f->leave($__internal_ed8a3b7f129cd5eceb97c62877dafb94a87efab9c0f74171fc1bb6164018ab5f_prof);

    }

    public function getTemplateName()
    {
        return "post/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 22,  82 => 20,  76 => 17,  71 => 15,  65 => 12,  60 => 10,  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
<div class=\"container\">
<div class=\"row\">

  <div class=\"well col-md-12\">
    <h2>{{ post.title }}</h2>

    <img src=\"{{ post.img }}\" alt=\"\" />

    <p>{{ post.text }}
    </p>

    <a class=\"col-md-12\" href=\"{{ path('post_index') }}\"><input type=\"submit\" value=\"Retour\"> </a>

    <a class=\"col-md-12\" href=\"{{ path('post_edit', { 'id': post.id }) }}\"> <input type=\"submit\" value=\"Modifier\"></a>


    {{ form_start(delete_form) }}
    <input type=\"submit\" value=\"Supprimer\">
    {{ form_end(delete_form) }}

</div>
</div>

</div>



{% endblock %}
", "post/show.html.twig", "/var/www/html/evaluation/app/Resources/views/post/show.html.twig");
    }
}
