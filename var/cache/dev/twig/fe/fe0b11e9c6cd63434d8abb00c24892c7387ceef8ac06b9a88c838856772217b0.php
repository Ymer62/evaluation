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
        $__internal_d3b939d4309ba585c2e2be5a4d1b3637d3e56a089269a4da9f2817e7c2f0da29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3b939d4309ba585c2e2be5a4d1b3637d3e56a089269a4da9f2817e7c2f0da29->enter($__internal_d3b939d4309ba585c2e2be5a4d1b3637d3e56a089269a4da9f2817e7c2f0da29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "post/index.html.twig"));

        $__internal_5154f46404066d5a2ee85038df47219b022d6354bcb3b002ad6f684cf48959af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5154f46404066d5a2ee85038df47219b022d6354bcb3b002ad6f684cf48959af->enter($__internal_5154f46404066d5a2ee85038df47219b022d6354bcb3b002ad6f684cf48959af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "post/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d3b939d4309ba585c2e2be5a4d1b3637d3e56a089269a4da9f2817e7c2f0da29->leave($__internal_d3b939d4309ba585c2e2be5a4d1b3637d3e56a089269a4da9f2817e7c2f0da29_prof);

        
        $__internal_5154f46404066d5a2ee85038df47219b022d6354bcb3b002ad6f684cf48959af->leave($__internal_5154f46404066d5a2ee85038df47219b022d6354bcb3b002ad6f684cf48959af_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_66a5aa6fd0fe19882433beaf7dd042b01b679cf92861d6d0a423c0d9ae4d5b0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66a5aa6fd0fe19882433beaf7dd042b01b679cf92861d6d0a423c0d9ae4d5b0d->enter($__internal_66a5aa6fd0fe19882433beaf7dd042b01b679cf92861d6d0a423c0d9ae4d5b0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1fe154afef400128a862c0fddd40afcba13ddcf5960a96474bd1819a137de6a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fe154afef400128a862c0fddd40afcba13ddcf5960a96474bd1819a137de6a6->enter($__internal_1fe154afef400128a862c0fddd40afcba13ddcf5960a96474bd1819a137de6a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "  <h1>Project Blog</h1>

  <a href=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_new");
        echo "\">Créer un nouveau post</a>

  ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new Twig_Error_Runtime('Variable "posts" does not exist.', 8, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 9
            echo "  <div class=\"posts\">
    <img src=\"";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "img", array()), "html", null, true);
            echo "\" alt=\"\" />
    <p>
      ";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "text", array()), "html", null, true);
            echo "
    </p>
    <span>Modifié le : ";
            // line 14
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "modified", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "</span>
    <span>Créé le : ";
            // line 15
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "created", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "</span>
    <ul>
      <li>
        <form name=\"form\" method=\"post\" action=\"/post/";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "id", array()), "html", null, true);
            echo "\">
          <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
          <input type=\"submit\" value=\"Supprimer\">
          <input type=\"hidden\" id=\"form__token\" name=\"form[_token]\" value=\"HeubiGfVccFj51yvZSIvczCZvYxGtBOAbNp-11ZUMG0\" />
        </form>
      </li>
      <li>
        <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "id", array()))), "html", null, true);
            echo "\">Editer</a>
      </li>
    </ul>
  </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_1fe154afef400128a862c0fddd40afcba13ddcf5960a96474bd1819a137de6a6->leave($__internal_1fe154afef400128a862c0fddd40afcba13ddcf5960a96474bd1819a137de6a6_prof);

        
        $__internal_66a5aa6fd0fe19882433beaf7dd042b01b679cf92861d6d0a423c0d9ae4d5b0d->leave($__internal_66a5aa6fd0fe19882433beaf7dd042b01b679cf92861d6d0a423c0d9ae4d5b0d_prof);

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
        return array (  95 => 25,  85 => 18,  79 => 15,  75 => 14,  70 => 12,  65 => 10,  62 => 9,  58 => 8,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
  <h1>Project Blog</h1>

  <a href=\"{{ path('post_new') }}\">Créer un nouveau post</a>

  {% for post in posts %}
  <div class=\"posts\">
    <img src=\"{{ post.img }}\" alt=\"\" />
    <p>
      {{ post.text }}
    </p>
    <span>Modifié le : {{ post.modified|date('Y-m-d H:i:s') }}</span>
    <span>Créé le : {{ post.created|date('Y-m-d H:i:s') }}</span>
    <ul>
      <li>
        <form name=\"form\" method=\"post\" action=\"/post/{{ post.id }}\">
          <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
          <input type=\"submit\" value=\"Supprimer\">
          <input type=\"hidden\" id=\"form__token\" name=\"form[_token]\" value=\"HeubiGfVccFj51yvZSIvczCZvYxGtBOAbNp-11ZUMG0\" />
        </form>
      </li>
      <li>
        <a href=\"{{ path('post_edit', { 'id': post.id }) }}\">Editer</a>
      </li>
    </ul>
  </div>
  {% endfor %}
{% endblock %}
", "post/index.html.twig", "/var/www/html/evaluation/app/Resources/views/post/index.html.twig");
    }
}
