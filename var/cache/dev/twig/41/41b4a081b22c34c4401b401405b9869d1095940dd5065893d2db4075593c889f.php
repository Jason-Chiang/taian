<?php

/* :BookOrder:index.html.twig */
class __TwigTemplate_ab1dfb17ee9c650983f659b2d24484a538da894cb230ad8f38b06691e873cafd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":BookOrder:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_870309552a81939e58d80fb482e2db692e026caaf32b15ef9060a17c9698d0e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_870309552a81939e58d80fb482e2db692e026caaf32b15ef9060a17c9698d0e3->enter($__internal_870309552a81939e58d80fb482e2db692e026caaf32b15ef9060a17c9698d0e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":BookOrder:index.html.twig"));

        $__internal_f02e5052bdcf5bbc6899593b4dc5cc0faf016166c51284afc435adb2dc3a56f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f02e5052bdcf5bbc6899593b4dc5cc0faf016166c51284afc435adb2dc3a56f3->enter($__internal_f02e5052bdcf5bbc6899593b4dc5cc0faf016166c51284afc435adb2dc3a56f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":BookOrder:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_870309552a81939e58d80fb482e2db692e026caaf32b15ef9060a17c9698d0e3->leave($__internal_870309552a81939e58d80fb482e2db692e026caaf32b15ef9060a17c9698d0e3_prof);

        
        $__internal_f02e5052bdcf5bbc6899593b4dc5cc0faf016166c51284afc435adb2dc3a56f3->leave($__internal_f02e5052bdcf5bbc6899593b4dc5cc0faf016166c51284afc435adb2dc3a56f3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d36873a5ae05f70791b6b867dbc2166af0ff87c5a9f42bc701af6c7a683baf3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d36873a5ae05f70791b6b867dbc2166af0ff87c5a9f42bc701af6c7a683baf3f->enter($__internal_d36873a5ae05f70791b6b867dbc2166af0ff87c5a9f42bc701af6c7a683baf3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7166132593dc737e97c03b8c09d9c000b055b44b0c7674bc8b305ebf0ec9c438 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7166132593dc737e97c03b8c09d9c000b055b44b0c7674bc8b305ebf0ec9c438->enter($__internal_7166132593dc737e97c03b8c09d9c000b055b44b0c7674bc8b305ebf0ec9c438_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Taian ";
        
        $__internal_7166132593dc737e97c03b8c09d9c000b055b44b0c7674bc8b305ebf0ec9c438->leave($__internal_7166132593dc737e97c03b8c09d9c000b055b44b0c7674bc8b305ebf0ec9c438_prof);

        
        $__internal_d36873a5ae05f70791b6b867dbc2166af0ff87c5a9f42bc701af6c7a683baf3f->leave($__internal_d36873a5ae05f70791b6b867dbc2166af0ff87c5a9f42bc701af6c7a683baf3f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3dc5ddb6089e9c25a6dd252692e47397c52791ded69e1f9d0a4b1192957d7a24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3dc5ddb6089e9c25a6dd252692e47397c52791ded69e1f9d0a4b1192957d7a24->enter($__internal_3dc5ddb6089e9c25a6dd252692e47397c52791ded69e1f9d0a4b1192957d7a24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b0f469ee79e8ece1de1f7796ed60da3d93cd3f92b1e027b81be27a8aa08c2bee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0f469ee79e8ece1de1f7796ed60da3d93cd3f92b1e027b81be27a8aa08c2bee->enter($__internal_b0f469ee79e8ece1de1f7796ed60da3d93cd3f92b1e027b81be27a8aa08c2bee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h2>";
        echo twig_escape_filter($this->env, ($context["number"] ?? $this->getContext($context, "number")), "html", null, true);
        echo "</h2>
";
        
        $__internal_b0f469ee79e8ece1de1f7796ed60da3d93cd3f92b1e027b81be27a8aa08c2bee->leave($__internal_b0f469ee79e8ece1de1f7796ed60da3d93cd3f92b1e027b81be27a8aa08c2bee_prof);

        
        $__internal_3dc5ddb6089e9c25a6dd252692e47397c52791ded69e1f9d0a4b1192957d7a24->leave($__internal_3dc5ddb6089e9c25a6dd252692e47397c52791ded69e1f9d0a4b1192957d7a24_prof);

    }

    public function getTemplateName()
    {
        return ":BookOrder:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %} Taian {% endblock %}

{% block body %}
<h2>{{ number }}</h2>
{% endblock%}
", ":BookOrder:index.html.twig", "/home/steve/taian/app/Resources/views/BookOrder/index.html.twig");
    }
}
