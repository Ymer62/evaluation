<?php

/* post/new.html.twig */
class __TwigTemplate_66bfeae436244e4bd88fb564b853d3e661fbe298f6dae6566c940c2b067f5624 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "post/new.html.twig", 1);
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
        $__internal_a9720ddc2f8fbf72a930ed065d875ad0d349fe9439a58b2e369ebc2307ee9d45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9720ddc2f8fbf72a930ed065d875ad0d349fe9439a58b2e369ebc2307ee9d45->enter($__internal_a9720ddc2f8fbf72a930ed065d875ad0d349fe9439a58b2e369ebc2307ee9d45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "post/new.html.twig"));

        $__internal_554627e2f7c5c7ac24c57b08e93552df76a608ac4a56ae41761a7278798f7fdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_554627e2f7c5c7ac24c57b08e93552df76a608ac4a56ae41761a7278798f7fdd->enter($__internal_554627e2f7c5c7ac24c57b08e93552df76a608ac4a56ae41761a7278798f7fdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "post/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a9720ddc2f8fbf72a930ed065d875ad0d349fe9439a58b2e369ebc2307ee9d45->leave($__internal_a9720ddc2f8fbf72a930ed065d875ad0d349fe9439a58b2e369ebc2307ee9d45_prof);

        
        $__internal_554627e2f7c5c7ac24c57b08e93552df76a608ac4a56ae41761a7278798f7fdd->leave($__internal_554627e2f7c5c7ac24c57b08e93552df76a608ac4a56ae41761a7278798f7fdd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_34a7b4b280bdbd664c0247e8c49ed4a6eebfd5e011fd15865655b93a83ebf948 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34a7b4b280bdbd664c0247e8c49ed4a6eebfd5e011fd15865655b93a83ebf948->enter($__internal_34a7b4b280bdbd664c0247e8c49ed4a6eebfd5e011fd15865655b93a83ebf948_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7ecfd75fb3e38067dc650dbc8c07d5446847c887c153242c65206cca0f921e53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ecfd75fb3e38067dc650dbc8c07d5446847c887c153242c65206cca0f921e53->enter($__internal_7ecfd75fb3e38067dc650dbc8c07d5446847c887c153242c65206cca0f921e53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container\">
  <div class=\"row\">


<div class=\"alert alert-info\">
  <h1>Creer un article</h1>

</div>

    <div class=\"well\">
    ";
        // line 14
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 14, $this->getSourceContext()); })()), 'form_start');
        echo "
        ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 15, $this->getSourceContext()); })()), 'widget');
        echo "
        <input  type=\"submit\" value=\"Creer un article\" />
    ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 17, $this->getSourceContext()); })()), 'form_end');
        echo "

    


            <a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_index");
        echo "\">  <input type=\"submit\" value=\"Retour\" /></a>

        </div><!--well -->
      </div> <!--row-->

    </div> <!--container -->
";
        
        $__internal_7ecfd75fb3e38067dc650dbc8c07d5446847c887c153242c65206cca0f921e53->leave($__internal_7ecfd75fb3e38067dc650dbc8c07d5446847c887c153242c65206cca0f921e53_prof);

        
        $__internal_34a7b4b280bdbd664c0247e8c49ed4a6eebfd5e011fd15865655b93a83ebf948->leave($__internal_34a7b4b280bdbd664c0247e8c49ed4a6eebfd5e011fd15865655b93a83ebf948_prof);

    }

    public function getTemplateName()
    {
        return "post/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 22,  70 => 17,  65 => 15,  61 => 14,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
<div class=\"container\">
  <div class=\"row\">


<div class=\"alert alert-info\">
  <h1>Creer un article</h1>

</div>

    <div class=\"well\">
    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input  type=\"submit\" value=\"Creer un article\" />
    {{ form_end(form) }}

    


            <a href=\"{{ path('post_index') }}\">  <input type=\"submit\" value=\"Retour\" /></a>

        </div><!--well -->
      </div> <!--row-->

    </div> <!--container -->
{% endblock %}
", "post/new.html.twig", "/var/www/html/evaluation/app/Resources/views/post/new.html.twig");
    }
}
