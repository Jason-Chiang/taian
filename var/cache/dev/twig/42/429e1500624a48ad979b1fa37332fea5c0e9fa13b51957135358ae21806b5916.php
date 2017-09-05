<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_0eede5f2ed1179af79f21428a78c007998315ce9389fb4d49040d133d0aef682 extends Twig_Template
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
        $__internal_9147d3e5e6a6c216edf1a0bef4c48adcfc029b4530ccd8eec0383093290c7c82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9147d3e5e6a6c216edf1a0bef4c48adcfc029b4530ccd8eec0383093290c7c82->enter($__internal_9147d3e5e6a6c216edf1a0bef4c48adcfc029b4530ccd8eec0383093290c7c82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_5d2919a3c4ea65816c124824fe85592db3ca9c23f7cee3ab9c03cf4a1038cb25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d2919a3c4ea65816c124824fe85592db3ca9c23f7cee3ab9c03cf4a1038cb25->enter($__internal_5d2919a3c4ea65816c124824fe85592db3ca9c23f7cee3ab9c03cf4a1038cb25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_9147d3e5e6a6c216edf1a0bef4c48adcfc029b4530ccd8eec0383093290c7c82->leave($__internal_9147d3e5e6a6c216edf1a0bef4c48adcfc029b4530ccd8eec0383093290c7c82_prof);

        
        $__internal_5d2919a3c4ea65816c124824fe85592db3ca9c23f7cee3ab9c03cf4a1038cb25->leave($__internal_5d2919a3c4ea65816c124824fe85592db3ca9c23f7cee3ab9c03cf4a1038cb25_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/home/steve/taian/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
