<?php

/* user/new.html.twig */
class __TwigTemplate_a4076a563e371ccb2212c37d0701ce7d2d3d0f96b7fd028c5d4990630631a7ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/new.html.twig", 1);
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
        $__internal_8857f44232a95c4724b6af46ecc15a5e9636113424fe71c4d4f167a39400db20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8857f44232a95c4724b6af46ecc15a5e9636113424fe71c4d4f167a39400db20->enter($__internal_8857f44232a95c4724b6af46ecc15a5e9636113424fe71c4d4f167a39400db20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/new.html.twig"));

        $__internal_50336c4354a7396e444e4b6e0e998649c9d036c76850f96e8a171924af9d2944 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50336c4354a7396e444e4b6e0e998649c9d036c76850f96e8a171924af9d2944->enter($__internal_50336c4354a7396e444e4b6e0e998649c9d036c76850f96e8a171924af9d2944_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8857f44232a95c4724b6af46ecc15a5e9636113424fe71c4d4f167a39400db20->leave($__internal_8857f44232a95c4724b6af46ecc15a5e9636113424fe71c4d4f167a39400db20_prof);

        
        $__internal_50336c4354a7396e444e4b6e0e998649c9d036c76850f96e8a171924af9d2944->leave($__internal_50336c4354a7396e444e4b6e0e998649c9d036c76850f96e8a171924af9d2944_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7a49611c4cb5ea167e19cc5e5f20d4393ba796b953ac66115123b748ebb2d1a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a49611c4cb5ea167e19cc5e5f20d4393ba796b953ac66115123b748ebb2d1a2->enter($__internal_7a49611c4cb5ea167e19cc5e5f20d4393ba796b953ac66115123b748ebb2d1a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b11949f4702046a510ea34532a3aefcbf56ff24308cbb0d390eedf18bbdb0b5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b11949f4702046a510ea34532a3aefcbf56ff24308cbb0d390eedf18bbdb0b5e->enter($__internal_b11949f4702046a510ea34532a3aefcbf56ff24308cbb0d390eedf18bbdb0b5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>User creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 7, $this->getSourceContext()); })()), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_b11949f4702046a510ea34532a3aefcbf56ff24308cbb0d390eedf18bbdb0b5e->leave($__internal_b11949f4702046a510ea34532a3aefcbf56ff24308cbb0d390eedf18bbdb0b5e_prof);

        
        $__internal_7a49611c4cb5ea167e19cc5e5f20d4393ba796b953ac66115123b748ebb2d1a2->leave($__internal_7a49611c4cb5ea167e19cc5e5f20d4393ba796b953ac66115123b748ebb2d1a2_prof);

    }

    public function getTemplateName()
    {
        return "user/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>User creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('user_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "user/new.html.twig", "/var/www/html/evaluation/app/Resources/views/user/new.html.twig");
    }
}
