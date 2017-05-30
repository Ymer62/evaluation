<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_ea1eba626b721d5f2f2b54b1e4a553c84fdc8f20c6305b61e40a9951a6d8df25 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8cdf9511d095624bf892e92740ee3c98fd66720582ca5291e3e4d50779571661 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cdf9511d095624bf892e92740ee3c98fd66720582ca5291e3e4d50779571661->enter($__internal_8cdf9511d095624bf892e92740ee3c98fd66720582ca5291e3e4d50779571661_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_660c297e1f2e910cb9a2bf2533ceb246e620d347068289b9050b36cb6e37005c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_660c297e1f2e910cb9a2bf2533ceb246e620d347068289b9050b36cb6e37005c->enter($__internal_660c297e1f2e910cb9a2bf2533ceb246e620d347068289b9050b36cb6e37005c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8cdf9511d095624bf892e92740ee3c98fd66720582ca5291e3e4d50779571661->leave($__internal_8cdf9511d095624bf892e92740ee3c98fd66720582ca5291e3e4d50779571661_prof);

        
        $__internal_660c297e1f2e910cb9a2bf2533ceb246e620d347068289b9050b36cb6e37005c->leave($__internal_660c297e1f2e910cb9a2bf2533ceb246e620d347068289b9050b36cb6e37005c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b231220bec5f7eb925ec866fc2641220da35d567464d85ad729d74903ad3c895 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b231220bec5f7eb925ec866fc2641220da35d567464d85ad729d74903ad3c895->enter($__internal_b231220bec5f7eb925ec866fc2641220da35d567464d85ad729d74903ad3c895_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_af47cb1ed81fa2180bdfa6597d1b9ed2e5840440cdfd931d017ee6716ce790a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af47cb1ed81fa2180bdfa6597d1b9ed2e5840440cdfd931d017ee6716ce790a7->enter($__internal_af47cb1ed81fa2180bdfa6597d1b9ed2e5840440cdfd931d017ee6716ce790a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_af47cb1ed81fa2180bdfa6597d1b9ed2e5840440cdfd931d017ee6716ce790a7->leave($__internal_af47cb1ed81fa2180bdfa6597d1b9ed2e5840440cdfd931d017ee6716ce790a7_prof);

        
        $__internal_b231220bec5f7eb925ec866fc2641220da35d567464d85ad729d74903ad3c895->leave($__internal_b231220bec5f7eb925ec866fc2641220da35d567464d85ad729d74903ad3c895_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4baf1bd0f4c04013af742a9be53492b985d812f964be41e42eee9c1367ef43b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4baf1bd0f4c04013af742a9be53492b985d812f964be41e42eee9c1367ef43b6->enter($__internal_4baf1bd0f4c04013af742a9be53492b985d812f964be41e42eee9c1367ef43b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_fcd032fb48b67f875f86775a8029ddd89b23da6bee9764be0f73f00426e575ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcd032fb48b67f875f86775a8029ddd89b23da6bee9764be0f73f00426e575ce->enter($__internal_fcd032fb48b67f875f86775a8029ddd89b23da6bee9764be0f73f00426e575ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_fcd032fb48b67f875f86775a8029ddd89b23da6bee9764be0f73f00426e575ce->leave($__internal_fcd032fb48b67f875f86775a8029ddd89b23da6bee9764be0f73f00426e575ce_prof);

        
        $__internal_4baf1bd0f4c04013af742a9be53492b985d812f964be41e42eee9c1367ef43b6->leave($__internal_4baf1bd0f4c04013af742a9be53492b985d812f964be41e42eee9c1367ef43b6_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_02abbdf59d4990c0f5c021e07fb7cd48557bcd8716e415faa054a351283d2fa0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02abbdf59d4990c0f5c021e07fb7cd48557bcd8716e415faa054a351283d2fa0->enter($__internal_02abbdf59d4990c0f5c021e07fb7cd48557bcd8716e415faa054a351283d2fa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_86146f3cd81ecf138a27f34fe9d0260208c5e6da703e7d2e0ca60880c2d39b85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86146f3cd81ecf138a27f34fe9d0260208c5e6da703e7d2e0ca60880c2d39b85->enter($__internal_86146f3cd81ecf138a27f34fe9d0260208c5e6da703e7d2e0ca60880c2d39b85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_86146f3cd81ecf138a27f34fe9d0260208c5e6da703e7d2e0ca60880c2d39b85->leave($__internal_86146f3cd81ecf138a27f34fe9d0260208c5e6da703e7d2e0ca60880c2d39b85_prof);

        
        $__internal_02abbdf59d4990c0f5c021e07fb7cd48557bcd8716e415faa054a351283d2fa0->leave($__internal_02abbdf59d4990c0f5c021e07fb7cd48557bcd8716e415faa054a351283d2fa0_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/evaluation/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
