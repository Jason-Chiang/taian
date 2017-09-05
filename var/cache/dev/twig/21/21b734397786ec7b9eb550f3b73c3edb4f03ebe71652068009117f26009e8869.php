<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_f1a6480a60ba1f1b21ab6fac48cf0b44901d9229adc7a14b3edf378c9a5322b5 extends Twig_Template
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
        $__internal_1ef561ec52491a26ac66d2f333cc78111ddcc3c4440d815d69f81af2a2d8166e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ef561ec52491a26ac66d2f333cc78111ddcc3c4440d815d69f81af2a2d8166e->enter($__internal_1ef561ec52491a26ac66d2f333cc78111ddcc3c4440d815d69f81af2a2d8166e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_c1bde86e7abff44dc10492427355038d22563e7e9688334d6bcc5126274e3e13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1bde86e7abff44dc10492427355038d22563e7e9688334d6bcc5126274e3e13->enter($__internal_c1bde86e7abff44dc10492427355038d22563e7e9688334d6bcc5126274e3e13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_1ef561ec52491a26ac66d2f333cc78111ddcc3c4440d815d69f81af2a2d8166e->leave($__internal_1ef561ec52491a26ac66d2f333cc78111ddcc3c4440d815d69f81af2a2d8166e_prof);

        
        $__internal_c1bde86e7abff44dc10492427355038d22563e7e9688334d6bcc5126274e3e13->leave($__internal_c1bde86e7abff44dc10492427355038d22563e7e9688334d6bcc5126274e3e13_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "/home/steve/taian/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
