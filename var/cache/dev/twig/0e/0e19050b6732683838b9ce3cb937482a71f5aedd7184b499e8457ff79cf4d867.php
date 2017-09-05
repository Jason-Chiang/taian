<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_c352e9b5b618c13030da505b3d63e62cb3f4e57797bba69a31fe166b5ce917eb extends Twig_Template
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
        $__internal_6f896062781553086defbefc9383b39de482d1a6fdedd109f795e76a2e1fee8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f896062781553086defbefc9383b39de482d1a6fdedd109f795e76a2e1fee8a->enter($__internal_6f896062781553086defbefc9383b39de482d1a6fdedd109f795e76a2e1fee8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_77a699b465aabfb5cd2bd3ef7a8325d4159e370bedda2ac7552611bb118b18dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77a699b465aabfb5cd2bd3ef7a8325d4159e370bedda2ac7552611bb118b18dc->enter($__internal_77a699b465aabfb5cd2bd3ef7a8325d4159e370bedda2ac7552611bb118b18dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_6f896062781553086defbefc9383b39de482d1a6fdedd109f795e76a2e1fee8a->leave($__internal_6f896062781553086defbefc9383b39de482d1a6fdedd109f795e76a2e1fee8a_prof);

        
        $__internal_77a699b465aabfb5cd2bd3ef7a8325d4159e370bedda2ac7552611bb118b18dc->leave($__internal_77a699b465aabfb5cd2bd3ef7a8325d4159e370bedda2ac7552611bb118b18dc_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.atom.twig", "/home/steve/taian/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
