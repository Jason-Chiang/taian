<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_23ee7bea81d02ab4b823e8f27b48b77d71b38d16b207fc7822174392cdc1d2d8 extends Twig_Template
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
        $__internal_8ffb4c774a2f41d037a08fdabf3adb0ea9c57d048b1de5638807dda221d6d198 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ffb4c774a2f41d037a08fdabf3adb0ea9c57d048b1de5638807dda221d6d198->enter($__internal_8ffb4c774a2f41d037a08fdabf3adb0ea9c57d048b1de5638807dda221d6d198_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_66aa2d5aaf5b8786780efea8a0507570512def2635b32ba20a6bd38dab35ddc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66aa2d5aaf5b8786780efea8a0507570512def2635b32ba20a6bd38dab35ddc8->enter($__internal_66aa2d5aaf5b8786780efea8a0507570512def2635b32ba20a6bd38dab35ddc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_8ffb4c774a2f41d037a08fdabf3adb0ea9c57d048b1de5638807dda221d6d198->leave($__internal_8ffb4c774a2f41d037a08fdabf3adb0ea9c57d048b1de5638807dda221d6d198_prof);

        
        $__internal_66aa2d5aaf5b8786780efea8a0507570512def2635b32ba20a6bd38dab35ddc8->leave($__internal_66aa2d5aaf5b8786780efea8a0507570512def2635b32ba20a6bd38dab35ddc8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/home/steve/taian/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
