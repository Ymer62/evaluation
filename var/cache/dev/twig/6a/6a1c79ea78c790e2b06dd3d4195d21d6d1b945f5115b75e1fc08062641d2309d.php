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
        $__internal_9b28bf2fe05f18fb4bb1f6d01610848994ead36a28600c985306d8f7bcf9c6fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b28bf2fe05f18fb4bb1f6d01610848994ead36a28600c985306d8f7bcf9c6fb->enter($__internal_9b28bf2fe05f18fb4bb1f6d01610848994ead36a28600c985306d8f7bcf9c6fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "post/new.html.twig"));

        $__internal_0876170bb4ea2523b1ce6c8feea707e813520f15b36f7a94b416e6d9710895ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0876170bb4ea2523b1ce6c8feea707e813520f15b36f7a94b416e6d9710895ef->enter($__internal_0876170bb4ea2523b1ce6c8feea707e813520f15b36f7a94b416e6d9710895ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "post/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b28bf2fe05f18fb4bb1f6d01610848994ead36a28600c985306d8f7bcf9c6fb->leave($__internal_9b28bf2fe05f18fb4bb1f6d01610848994ead36a28600c985306d8f7bcf9c6fb_prof);

        
        $__internal_0876170bb4ea2523b1ce6c8feea707e813520f15b36f7a94b416e6d9710895ef->leave($__internal_0876170bb4ea2523b1ce6c8feea707e813520f15b36f7a94b416e6d9710895ef_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_602cd28a8988c24eeba069a459afd05a946bf13688e740fc472c270a3f0e78c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_602cd28a8988c24eeba069a459afd05a946bf13688e740fc472c270a3f0e78c0->enter($__internal_602cd28a8988c24eeba069a459afd05a946bf13688e740fc472c270a3f0e78c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2e60f9a2f0131f2e57e3bf9710df170cedd83e9ca2d5bae8fc405c058bce2bc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e60f9a2f0131f2e57e3bf9710df170cedd83e9ca2d5bae8fc405c058bce2bc5->enter($__internal_2e60f9a2f0131f2e57e3bf9710df170cedd83e9ca2d5bae8fc405c058bce2bc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Créer un Nouvel article</h1>

    <form method=\"post\">
        </label for=\"text\">Description</label>
        <input id=\"text\" name=\"text\" type=\"text\" />
        </label for=\"img\">Image</label>
        <input id=\"img\" name=\"img\" type=\"file\" />
        <button id=\"valider\" name=\"valider\" type=\"submit\" />Valider</button>
    </form>

    <ul>
        <li>
            <a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_index");
        echo "\">Retour à la page d'administration</a>
        </li>
    </ul>
";
        
        $__internal_2e60f9a2f0131f2e57e3bf9710df170cedd83e9ca2d5bae8fc405c058bce2bc5->leave($__internal_2e60f9a2f0131f2e57e3bf9710df170cedd83e9ca2d5bae8fc405c058bce2bc5_prof);

        
        $__internal_602cd28a8988c24eeba069a459afd05a946bf13688e740fc472c270a3f0e78c0->leave($__internal_602cd28a8988c24eeba069a459afd05a946bf13688e740fc472c270a3f0e78c0_prof);

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
        return array (  63 => 16,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Créer un Nouvel article</h1>

    <form method=\"post\">
        </label for=\"text\">Description</label>
        <input id=\"text\" name=\"text\" type=\"text\" />
        </label for=\"img\">Image</label>
        <input id=\"img\" name=\"img\" type=\"file\" />
        <button id=\"valider\" name=\"valider\" type=\"submit\" />Valider</button>
    </form>

    <ul>
        <li>
            <a href=\"{{ path('post_index') }}\">Retour à la page d'administration</a>
        </li>
    </ul>
{% endblock %}

  
", "post/new.html.twig", "/var/www/html/evaluation/app/Resources/views/post/new.html.twig");
    }
}
