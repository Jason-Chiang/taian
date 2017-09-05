<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_7b7180a4f8704077706aab9ce482b5b71ce9aaf0a7a691890d1ec7afc570801c extends Twig_Template
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
        $__internal_b376cd0fa42a6bc5ab36cf57d3ced0d7042b8871f1e8c931143af64b111273a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b376cd0fa42a6bc5ab36cf57d3ced0d7042b8871f1e8c931143af64b111273a8->enter($__internal_b376cd0fa42a6bc5ab36cf57d3ced0d7042b8871f1e8c931143af64b111273a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_c531031deae9c480064ce2184ae266085495ce95cc7b04f052480b30c858a64c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c531031deae9c480064ce2184ae266085495ce95cc7b04f052480b30c858a64c->enter($__internal_c531031deae9c480064ce2184ae266085495ce95cc7b04f052480b30c858a64c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_b376cd0fa42a6bc5ab36cf57d3ced0d7042b8871f1e8c931143af64b111273a8->leave($__internal_b376cd0fa42a6bc5ab36cf57d3ced0d7042b8871f1e8c931143af64b111273a8_prof);

        
        $__internal_c531031deae9c480064ce2184ae266085495ce95cc7b04f052480b30c858a64c->leave($__internal_c531031deae9c480064ce2184ae266085495ce95cc7b04f052480b30c858a64c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.atom.twig", "/home/steve/taian/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
