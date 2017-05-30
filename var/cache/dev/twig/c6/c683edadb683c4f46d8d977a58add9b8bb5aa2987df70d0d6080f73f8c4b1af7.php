<?php

/* post/edit.html.twig */
class __TwigTemplate_2345ef5d272cc8f2797d0f8095ad5e0e210964162edebe57489fca01b137d730 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "post/edit.html.twig", 1);
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
        $__internal_802385d7345035e0f64f04b182cf0064821e2bc3227e749c21ae270c76cf1c6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_802385d7345035e0f64f04b182cf0064821e2bc3227e749c21ae270c76cf1c6c->enter($__internal_802385d7345035e0f64f04b182cf0064821e2bc3227e749c21ae270c76cf1c6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "post/edit.html.twig"));

        $__internal_af5d9eb92b185bb4e08dae6ba93fae23a4f79e35e72b504b98789f3cfd33850f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af5d9eb92b185bb4e08dae6ba93fae23a4f79e35e72b504b98789f3cfd33850f->enter($__internal_af5d9eb92b185bb4e08dae6ba93fae23a4f79e35e72b504b98789f3cfd33850f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "post/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_802385d7345035e0f64f04b182cf0064821e2bc3227e749c21ae270c76cf1c6c->leave($__internal_802385d7345035e0f64f04b182cf0064821e2bc3227e749c21ae270c76cf1c6c_prof);

        
        $__internal_af5d9eb92b185bb4e08dae6ba93fae23a4f79e35e72b504b98789f3cfd33850f->leave($__internal_af5d9eb92b185bb4e08dae6ba93fae23a4f79e35e72b504b98789f3cfd33850f_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_04dd948be3748229032c96980ae61d3b04bb579fa60904aa2cfeda35fd97e679 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04dd948be3748229032c96980ae61d3b04bb579fa60904aa2cfeda35fd97e679->enter($__internal_04dd948be3748229032c96980ae61d3b04bb579fa60904aa2cfeda35fd97e679_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_61cad907f11ed07b3a5c29b47114289a33f9bb6663c30a99b62973d1c2e44ea3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61cad907f11ed07b3a5c29b47114289a33f9bb6663c30a99b62973d1c2e44ea3->enter($__internal_61cad907f11ed07b3a5c29b47114289a33f9bb6663c30a99b62973d1c2e44ea3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "  <div class=\"container\">
    <div class=\"row\">

      <div class=\"alert alert-info\">
        <h1>Modifier un Article</h1>
      </div>

      <div class=\"well\">

        ";
        // line 14
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 14, $this->getSourceContext()); })()), 'form_start');
        echo "
        ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 15, $this->getSourceContext()); })()), 'widget');
        echo "
        <input type=\"submit\" value=\"Valider\"/>
        ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 17, $this->getSourceContext()); })()), 'form_end');
        echo "

        <a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_index");
        echo "\"><input type=\"button\" value=\"Retour\"></a>
      </div>


    </div><!--row-->
  </div><!--container-->

";
        
        $__internal_61cad907f11ed07b3a5c29b47114289a33f9bb6663c30a99b62973d1c2e44ea3->leave($__internal_61cad907f11ed07b3a5c29b47114289a33f9bb6663c30a99b62973d1c2e44ea3_prof);

        
        $__internal_04dd948be3748229032c96980ae61d3b04bb579fa60904aa2cfeda35fd97e679->leave($__internal_04dd948be3748229032c96980ae61d3b04bb579fa60904aa2cfeda35fd97e679_prof);

    }

    public function getTemplateName()
    {
        return "post/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 19,  69 => 17,  64 => 15,  60 => 14,  49 => 5,  40 => 4,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}


{% block body %}
  <div class=\"container\">
    <div class=\"row\">

      <div class=\"alert alert-info\">
        <h1>Modifier un Article</h1>
      </div>

      <div class=\"well\">

        {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Valider\"/>
        {{ form_end(edit_form) }}

        <a href=\"{{ path('post_index') }}\"><input type=\"button\" value=\"Retour\"></a>
      </div>


    </div><!--row-->
  </div><!--container-->

{% endblock %}
", "post/edit.html.twig", "/var/www/html/evaluation/app/Resources/views/post/edit.html.twig");
    }
}
