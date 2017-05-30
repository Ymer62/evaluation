<?php

/* post/index.html.twig */
class __TwigTemplate_4a5648482859209feace1ec6ecb350d85c9695f9a71ca98e11f56e0d97fc36eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "post/index.html.twig", 1);
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
        $__internal_6310c21dab1c87d4fd54783e5a91b0a9ff492b557e8814e19a73b45b9af4506e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6310c21dab1c87d4fd54783e5a91b0a9ff492b557e8814e19a73b45b9af4506e->enter($__internal_6310c21dab1c87d4fd54783e5a91b0a9ff492b557e8814e19a73b45b9af4506e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "post/index.html.twig"));

        $__internal_41b46e503472edb63876cc0ca7a4afc2c6797ac4966a80a5385681e9523d93dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41b46e503472edb63876cc0ca7a4afc2c6797ac4966a80a5385681e9523d93dd->enter($__internal_41b46e503472edb63876cc0ca7a4afc2c6797ac4966a80a5385681e9523d93dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "post/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6310c21dab1c87d4fd54783e5a91b0a9ff492b557e8814e19a73b45b9af4506e->leave($__internal_6310c21dab1c87d4fd54783e5a91b0a9ff492b557e8814e19a73b45b9af4506e_prof);

        
        $__internal_41b46e503472edb63876cc0ca7a4afc2c6797ac4966a80a5385681e9523d93dd->leave($__internal_41b46e503472edb63876cc0ca7a4afc2c6797ac4966a80a5385681e9523d93dd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_074885aa256d9d45d596a7c272ec1bf5af33ca2f9cce9520063b2142958a8fbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_074885aa256d9d45d596a7c272ec1bf5af33ca2f9cce9520063b2142958a8fbf->enter($__internal_074885aa256d9d45d596a7c272ec1bf5af33ca2f9cce9520063b2142958a8fbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_71a9aa25f7bcce173064ccf2070e73204b23bab315a01cfd882f0a7cc552354b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71a9aa25f7bcce173064ccf2070e73204b23bab315a01cfd882f0a7cc552354b->enter($__internal_71a9aa25f7bcce173064ccf2070e73204b23bab315a01cfd882f0a7cc552354b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container\">
  <div class=\"row\">

    <div class=\"alert alert-info col-md-12\">
    <h1> Mes Articles : </h1>

    <div class=\"ArticleBrouillon\">
    <a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_new");
        echo "\"><input type=\"button\" value=\"Creer un article\"></a>
    
  </div> <!--ArticleBrouillon -->

</div> <!-- alert-info -->

    ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new Twig_Error_Runtime('Variable "posts" does not exist.', 17, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 18
            echo "    <div class=\"well col-md-12 article\">
      <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "id", array()))), "html", null, true);
            echo "\"><input type=\"button\" value=\"Modifier\"></a>
      <input type=\"submit\" value=\"Supprimer\">



        <h2 class=\"col-md-12\">";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "title", array()), "html", null, true);
            echo "</h2>
        <img src=\"";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "img", array()), "html", null, true);
            echo "\" alt=\"\" />
        <p class=\"col-md-12\">";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "text", array()), "html", null, true);
            echo "</p>
    </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "

    </div><!--Row-->

</div><!--Container -->
";
        
        $__internal_71a9aa25f7bcce173064ccf2070e73204b23bab315a01cfd882f0a7cc552354b->leave($__internal_71a9aa25f7bcce173064ccf2070e73204b23bab315a01cfd882f0a7cc552354b_prof);

        
        $__internal_074885aa256d9d45d596a7c272ec1bf5af33ca2f9cce9520063b2142958a8fbf->leave($__internal_074885aa256d9d45d596a7c272ec1bf5af33ca2f9cce9520063b2142958a8fbf_prof);

    }

    public function getTemplateName()
    {
        return "post/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 29,  90 => 26,  86 => 25,  82 => 24,  74 => 19,  71 => 18,  67 => 17,  58 => 11,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
<div class=\"container\">
  <div class=\"row\">

    <div class=\"alert alert-info col-md-12\">
    <h1> Mes Articles : </h1>

    <div class=\"ArticleBrouillon\">
    <a href=\"{{ path('post_new') }}\"><input type=\"button\" value=\"Creer un article\"></a>
    
  </div> <!--ArticleBrouillon -->

</div> <!-- alert-info -->

    {% for post in posts %}
    <div class=\"well col-md-12 article\">
      <a href=\"{{ path('post_edit', { 'id': post.id }) }}\"><input type=\"button\" value=\"Modifier\"></a>
      <input type=\"submit\" value=\"Supprimer\">



        <h2 class=\"col-md-12\">{{ post.title }}</h2>
        <img src=\"{{ post.img }}\" alt=\"\" />
        <p class=\"col-md-12\">{{ post.text }}</p>
    </div>
      {% endfor %}


    </div><!--Row-->

</div><!--Container -->
{% endblock %}
", "post/index.html.twig", "/var/www/html/evaluation/app/Resources/views/post/index.html.twig");
    }
}
