<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_48bea09ebd00fb56f2a8703429db06968d6a07e8f872d1042d9213fcdeca6e03 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_1bb8ca7264400b1b1f48982a57fe5e4ab753a2eed8bc8f15ac0038ecf79323c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bb8ca7264400b1b1f48982a57fe5e4ab753a2eed8bc8f15ac0038ecf79323c2->enter($__internal_1bb8ca7264400b1b1f48982a57fe5e4ab753a2eed8bc8f15ac0038ecf79323c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_620bec7e89d06a8c38acbfcaec361bf0c22b60f406217ca0de9649e2796d4930 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_620bec7e89d06a8c38acbfcaec361bf0c22b60f406217ca0de9649e2796d4930->enter($__internal_620bec7e89d06a8c38acbfcaec361bf0c22b60f406217ca0de9649e2796d4930_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1bb8ca7264400b1b1f48982a57fe5e4ab753a2eed8bc8f15ac0038ecf79323c2->leave($__internal_1bb8ca7264400b1b1f48982a57fe5e4ab753a2eed8bc8f15ac0038ecf79323c2_prof);

        
        $__internal_620bec7e89d06a8c38acbfcaec361bf0c22b60f406217ca0de9649e2796d4930->leave($__internal_620bec7e89d06a8c38acbfcaec361bf0c22b60f406217ca0de9649e2796d4930_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_dd031c558845313a1aa8a6b9b812a827f46fdf80ffefca87328b740b5baf9ef6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd031c558845313a1aa8a6b9b812a827f46fdf80ffefca87328b740b5baf9ef6->enter($__internal_dd031c558845313a1aa8a6b9b812a827f46fdf80ffefca87328b740b5baf9ef6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_82b29f20abdd610d735295d13da5ffc7b76b776a5500a961745554e09140473a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82b29f20abdd610d735295d13da5ffc7b76b776a5500a961745554e09140473a->enter($__internal_82b29f20abdd610d735295d13da5ffc7b76b776a5500a961745554e09140473a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_82b29f20abdd610d735295d13da5ffc7b76b776a5500a961745554e09140473a->leave($__internal_82b29f20abdd610d735295d13da5ffc7b76b776a5500a961745554e09140473a_prof);

        
        $__internal_dd031c558845313a1aa8a6b9b812a827f46fdf80ffefca87328b740b5baf9ef6->leave($__internal_dd031c558845313a1aa8a6b9b812a827f46fdf80ffefca87328b740b5baf9ef6_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_57530d84817f3c8815d058e3016ad6016b0c29331768cc279f102e192c97b4f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57530d84817f3c8815d058e3016ad6016b0c29331768cc279f102e192c97b4f1->enter($__internal_57530d84817f3c8815d058e3016ad6016b0c29331768cc279f102e192c97b4f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_48a9b54e7823ea30ef6139ef70e0e992cd59597b06048f7b47ff71468b433635 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48a9b54e7823ea30ef6139ef70e0e992cd59597b06048f7b47ff71468b433635->enter($__internal_48a9b54e7823ea30ef6139ef70e0e992cd59597b06048f7b47ff71468b433635_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_48a9b54e7823ea30ef6139ef70e0e992cd59597b06048f7b47ff71468b433635->leave($__internal_48a9b54e7823ea30ef6139ef70e0e992cd59597b06048f7b47ff71468b433635_prof);

        
        $__internal_57530d84817f3c8815d058e3016ad6016b0c29331768cc279f102e192c97b4f1->leave($__internal_57530d84817f3c8815d058e3016ad6016b0c29331768cc279f102e192c97b4f1_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0a418b3035f3fd4fc13c5e56b6f32a1c3e044c8c1fc3d21cd29b651e227b8fbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a418b3035f3fd4fc13c5e56b6f32a1c3e044c8c1fc3d21cd29b651e227b8fbc->enter($__internal_0a418b3035f3fd4fc13c5e56b6f32a1c3e044c8c1fc3d21cd29b651e227b8fbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ced88015e1e0244f18d16853a95980bd633fa55ff6677d7ff276bc7be058e043 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ced88015e1e0244f18d16853a95980bd633fa55ff6677d7ff276bc7be058e043->enter($__internal_ced88015e1e0244f18d16853a95980bd633fa55ff6677d7ff276bc7be058e043_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_ced88015e1e0244f18d16853a95980bd633fa55ff6677d7ff276bc7be058e043->leave($__internal_ced88015e1e0244f18d16853a95980bd633fa55ff6677d7ff276bc7be058e043_prof);

        
        $__internal_0a418b3035f3fd4fc13c5e56b6f32a1c3e044c8c1fc3d21cd29b651e227b8fbc->leave($__internal_0a418b3035f3fd4fc13c5e56b6f32a1c3e044c8c1fc3d21cd29b651e227b8fbc_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/evaluation/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
