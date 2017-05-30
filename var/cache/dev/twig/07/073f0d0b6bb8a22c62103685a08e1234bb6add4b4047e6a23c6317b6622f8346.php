<?php

/* base.html.twig */
class __TwigTemplate_12a9784906875215e0dff72fbea6a70a80828e4aa3365ff25286dac4ee04c2cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_670e9fbe128d0094bc6836d9cede067d2fe3f60ca7bf062fcb8009c303a9de25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_670e9fbe128d0094bc6836d9cede067d2fe3f60ca7bf062fcb8009c303a9de25->enter($__internal_670e9fbe128d0094bc6836d9cede067d2fe3f60ca7bf062fcb8009c303a9de25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_0d3f1b4ec2ca303ded3551f34ec8f942dbb7c1f9f2ccb84e1141dae38c7414d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d3f1b4ec2ca303ded3551f34ec8f942dbb7c1f9f2ccb84e1141dae38c7414d7->enter($__internal_0d3f1b4ec2ca303ded3551f34ec8f942dbb7c1f9f2ccb84e1141dae38c7414d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 8
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" href=\"path/to/font-awesome/css/font-awesome.min.css\">
    </head>
    <body>

        ";
        // line 14
        $this->displayBlock('body', $context, $blocks);
        // line 15
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 16
        echo "
    </body>
    
    <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/jquery/dist/jquery.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/bootstrap/dist/js/bootstrap.js"), "html", null, true);
        echo "\"></script>

</html>
";
        
        $__internal_670e9fbe128d0094bc6836d9cede067d2fe3f60ca7bf062fcb8009c303a9de25->leave($__internal_670e9fbe128d0094bc6836d9cede067d2fe3f60ca7bf062fcb8009c303a9de25_prof);

        
        $__internal_0d3f1b4ec2ca303ded3551f34ec8f942dbb7c1f9f2ccb84e1141dae38c7414d7->leave($__internal_0d3f1b4ec2ca303ded3551f34ec8f942dbb7c1f9f2ccb84e1141dae38c7414d7_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_8eca210e3dfb46f6273451f5308a45ab18f4256461bd336b51edc86a92708732 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8eca210e3dfb46f6273451f5308a45ab18f4256461bd336b51edc86a92708732->enter($__internal_8eca210e3dfb46f6273451f5308a45ab18f4256461bd336b51edc86a92708732_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_de6b61f61b04e28507cf988418b5c1bf2c55e9cc923828dd6833e78033c8db61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de6b61f61b04e28507cf988418b5c1bf2c55e9cc923828dd6833e78033c8db61->enter($__internal_de6b61f61b04e28507cf988418b5c1bf2c55e9cc923828dd6833e78033c8db61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_de6b61f61b04e28507cf988418b5c1bf2c55e9cc923828dd6833e78033c8db61->leave($__internal_de6b61f61b04e28507cf988418b5c1bf2c55e9cc923828dd6833e78033c8db61_prof);

        
        $__internal_8eca210e3dfb46f6273451f5308a45ab18f4256461bd336b51edc86a92708732->leave($__internal_8eca210e3dfb46f6273451f5308a45ab18f4256461bd336b51edc86a92708732_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_aa290c2628b2ca99ae42c23016427ccc5e1f85943571ba0cd9c1dfb584f1d1e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa290c2628b2ca99ae42c23016427ccc5e1f85943571ba0cd9c1dfb584f1d1e9->enter($__internal_aa290c2628b2ca99ae42c23016427ccc5e1f85943571ba0cd9c1dfb584f1d1e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_d71ff779062bb8671541691d0a1b8dd384a937efcdb2c25f24f8bb1eaaea60e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d71ff779062bb8671541691d0a1b8dd384a937efcdb2c25f24f8bb1eaaea60e3->enter($__internal_d71ff779062bb8671541691d0a1b8dd384a937efcdb2c25f24f8bb1eaaea60e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d71ff779062bb8671541691d0a1b8dd384a937efcdb2c25f24f8bb1eaaea60e3->leave($__internal_d71ff779062bb8671541691d0a1b8dd384a937efcdb2c25f24f8bb1eaaea60e3_prof);

        
        $__internal_aa290c2628b2ca99ae42c23016427ccc5e1f85943571ba0cd9c1dfb584f1d1e9->leave($__internal_aa290c2628b2ca99ae42c23016427ccc5e1f85943571ba0cd9c1dfb584f1d1e9_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_38d196c9c2ab26e0493b86c121c5504bf7c8fde7c60e87158fa3f2515ae3d9f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38d196c9c2ab26e0493b86c121c5504bf7c8fde7c60e87158fa3f2515ae3d9f5->enter($__internal_38d196c9c2ab26e0493b86c121c5504bf7c8fde7c60e87158fa3f2515ae3d9f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f93e7a1726f84c3b68437012fbd58bd45197781da99444ea725feceb2edfa240 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f93e7a1726f84c3b68437012fbd58bd45197781da99444ea725feceb2edfa240->enter($__internal_f93e7a1726f84c3b68437012fbd58bd45197781da99444ea725feceb2edfa240_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f93e7a1726f84c3b68437012fbd58bd45197781da99444ea725feceb2edfa240->leave($__internal_f93e7a1726f84c3b68437012fbd58bd45197781da99444ea725feceb2edfa240_prof);

        
        $__internal_38d196c9c2ab26e0493b86c121c5504bf7c8fde7c60e87158fa3f2515ae3d9f5->leave($__internal_38d196c9c2ab26e0493b86c121c5504bf7c8fde7c60e87158fa3f2515ae3d9f5_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_402c20cb8e088d8ea5ecbc543a1b6c51e1e376262877968be26082125999bb34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_402c20cb8e088d8ea5ecbc543a1b6c51e1e376262877968be26082125999bb34->enter($__internal_402c20cb8e088d8ea5ecbc543a1b6c51e1e376262877968be26082125999bb34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_2c5e9ebe736484b689949ea7303c9be8b9aa4c6131560585f5423b8556de3ee2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c5e9ebe736484b689949ea7303c9be8b9aa4c6131560585f5423b8556de3ee2->enter($__internal_2c5e9ebe736484b689949ea7303c9be8b9aa4c6131560585f5423b8556de3ee2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_2c5e9ebe736484b689949ea7303c9be8b9aa4c6131560585f5423b8556de3ee2->leave($__internal_2c5e9ebe736484b689949ea7303c9be8b9aa4c6131560585f5423b8556de3ee2_prof);

        
        $__internal_402c20cb8e088d8ea5ecbc543a1b6c51e1e376262877968be26082125999bb34->leave($__internal_402c20cb8e088d8ea5ecbc543a1b6c51e1e376262877968be26082125999bb34_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 15,  118 => 14,  101 => 7,  83 => 6,  69 => 20,  65 => 19,  60 => 16,  57 => 15,  55 => 14,  47 => 9,  42 => 8,  40 => 7,  36 => 6,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
        <link rel=\"stylesheet\" href=\"{{ asset('assets/vendor/bootstrap/dist/css/bootstrap.min.css') }}\"/>
        <link rel=\"stylesheet\" href=\"path/to/font-awesome/css/font-awesome.min.css\">
    </head>
    <body>

        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}

    </body>
    
    <script src=\"{{ asset('assets/vendor/jquery/dist/jquery.js') }}\"></script>
  <script src=\"{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.js') }}\"></script>

</html>
", "base.html.twig", "/var/www/html/evaluation/app/Resources/views/base.html.twig");
    }
}
