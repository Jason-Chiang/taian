<?php

/* :Booking:new.html.twig */
class __TwigTemplate_f5e49c80be176fb374767567c30bdd85d0cd06c80dfbe86b17541d0a2ef4e9d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e70e02cb784922728bd061236d53fac101adcde3f554d215926faff3a0c69c34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e70e02cb784922728bd061236d53fac101adcde3f554d215926faff3a0c69c34->enter($__internal_e70e02cb784922728bd061236d53fac101adcde3f554d215926faff3a0c69c34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Booking:new.html.twig"));

        $__internal_d07c84b96b8e6c66c87a95216eec564708fc52e40c882250f6a02d70b525ab42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d07c84b96b8e6c66c87a95216eec564708fc52e40c882250f6a02d70b525ab42->enter($__internal_d07c84b96b8e6c66c87a95216eec564708fc52e40c882250f6a02d70b525ab42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Booking:new.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
";
        // line 2
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_e70e02cb784922728bd061236d53fac101adcde3f554d215926faff3a0c69c34->leave($__internal_e70e02cb784922728bd061236d53fac101adcde3f554d215926faff3a0c69c34_prof);

        
        $__internal_d07c84b96b8e6c66c87a95216eec564708fc52e40c882250f6a02d70b525ab42->leave($__internal_d07c84b96b8e6c66c87a95216eec564708fc52e40c882250f6a02d70b525ab42_prof);

    }

    public function getTemplateName()
    {
        return ":Booking:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 3,  29 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ form_start(form) }}
{{ form_widget(form) }}
{{ form_end(form) }}
", ":Booking:new.html.twig", "/home/steve/taian/app/Resources/views/Booking/new.html.twig");
    }
}
