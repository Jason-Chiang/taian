<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_3021d445aded9274d5f452d2249935d6bdca517b32e09d75523eeaf83cae6ad1 extends Twig_Template
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
        $__internal_e32b2214f04d79948dffd51a4f0cee15109c85169347d7bc1692d13c3f3ad14a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e32b2214f04d79948dffd51a4f0cee15109c85169347d7bc1692d13c3f3ad14a->enter($__internal_e32b2214f04d79948dffd51a4f0cee15109c85169347d7bc1692d13c3f3ad14a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_d5a4efbacebc8f60cb2d3af316a6e120babc5e3746d52cab2478f4883887b38f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5a4efbacebc8f60cb2d3af316a6e120babc5e3746d52cab2478f4883887b38f->enter($__internal_d5a4efbacebc8f60cb2d3af316a6e120babc5e3746d52cab2478f4883887b38f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_e32b2214f04d79948dffd51a4f0cee15109c85169347d7bc1692d13c3f3ad14a->leave($__internal_e32b2214f04d79948dffd51a4f0cee15109c85169347d7bc1692d13c3f3ad14a_prof);

        
        $__internal_d5a4efbacebc8f60cb2d3af316a6e120babc5e3746d52cab2478f4883887b38f->leave($__internal_d5a4efbacebc8f60cb2d3af316a6e120babc5e3746d52cab2478f4883887b38f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/home/steve/taian/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
