<?php

/* :default:new.html.twig */
class __TwigTemplate_6fb5d380999fab7fa2754b8f15687d1d25b8f2e95ea3e7aa7dfa82ae15c2bcc0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:new.html.twig", 1);
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
        $__internal_cc0d90bac77126b41f56a6e9f3a8d1339ae7c3c42a6b6db82c3eeab5b4151d2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc0d90bac77126b41f56a6e9f3a8d1339ae7c3c42a6b6db82c3eeab5b4151d2e->enter($__internal_cc0d90bac77126b41f56a6e9f3a8d1339ae7c3c42a6b6db82c3eeab5b4151d2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:new.html.twig"));

        $__internal_77b4b1bac4f144588b6ea8ab920e16f1dc164b12e7e7561835e57d1485395195 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77b4b1bac4f144588b6ea8ab920e16f1dc164b12e7e7561835e57d1485395195->enter($__internal_77b4b1bac4f144588b6ea8ab920e16f1dc164b12e7e7561835e57d1485395195_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc0d90bac77126b41f56a6e9f3a8d1339ae7c3c42a6b6db82c3eeab5b4151d2e->leave($__internal_cc0d90bac77126b41f56a6e9f3a8d1339ae7c3c42a6b6db82c3eeab5b4151d2e_prof);

        
        $__internal_77b4b1bac4f144588b6ea8ab920e16f1dc164b12e7e7561835e57d1485395195->leave($__internal_77b4b1bac4f144588b6ea8ab920e16f1dc164b12e7e7561835e57d1485395195_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_bf4311f40154742204a1cfb63255c234e06b9fc3671c68df7ee57b5652b6bb39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf4311f40154742204a1cfb63255c234e06b9fc3671c68df7ee57b5652b6bb39->enter($__internal_bf4311f40154742204a1cfb63255c234e06b9fc3671c68df7ee57b5652b6bb39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_46bf441df374e98132bf2404812cfd553a40f6d732e6eafab01a368eff085b22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46bf441df374e98132bf2404812cfd553a40f6d732e6eafab01a368eff085b22->enter($__internal_46bf441df374e98132bf2404812cfd553a40f6d732e6eafab01a368eff085b22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tBooking Order!
";
        
        $__internal_46bf441df374e98132bf2404812cfd553a40f6d732e6eafab01a368eff085b22->leave($__internal_46bf441df374e98132bf2404812cfd553a40f6d732e6eafab01a368eff085b22_prof);

        
        $__internal_bf4311f40154742204a1cfb63255c234e06b9fc3671c68df7ee57b5652b6bb39->leave($__internal_bf4311f40154742204a1cfb63255c234e06b9fc3671c68df7ee57b5652b6bb39_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_c90e818dd1fe0fda92e7d7209660aa40df81157b55568e8ec1de71ea5d0a253a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c90e818dd1fe0fda92e7d7209660aa40df81157b55568e8ec1de71ea5d0a253a->enter($__internal_c90e818dd1fe0fda92e7d7209660aa40df81157b55568e8ec1de71ea5d0a253a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_17a00392ebd2386cbdaec9268df56460ef6fd22a75598092fb8c48340f547200 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17a00392ebd2386cbdaec9268df56460ef6fd22a75598092fb8c48340f547200->enter($__internal_17a00392ebd2386cbdaec9268df56460ef6fd22a75598092fb8c48340f547200_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "\t";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
\t";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
\t";
        // line 10
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_17a00392ebd2386cbdaec9268df56460ef6fd22a75598092fb8c48340f547200->leave($__internal_17a00392ebd2386cbdaec9268df56460ef6fd22a75598092fb8c48340f547200_prof);

        
        $__internal_c90e818dd1fe0fda92e7d7209660aa40df81157b55568e8ec1de71ea5d0a253a->leave($__internal_c90e818dd1fe0fda92e7d7209660aa40df81157b55568e8ec1de71ea5d0a253a_prof);

    }

    public function getTemplateName()
    {
        return ":default:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 10,  75 => 9,  70 => 8,  61 => 7,  50 => 4,  41 => 3,  11 => 1,);
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

{% block title %}
\tBooking Order!
{% endblock %}

{% block body %}
\t{{ form_start(form) }}
\t{{ form_widget(form) }}
\t{{ form_end(form) }}
{% endblock %}
", ":default:new.html.twig", "/home/steve/taian/app/Resources/views/default/new.html.twig");
    }
}
