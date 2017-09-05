<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_be768d4edac6128286c420dff7b0da228da474385e41a39503d35d19885821e8 extends Twig_Template
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
        $__internal_13441842ce1c6c085920a35229a0caf39215e84baae7bed4f3d2d1465fcdd927 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13441842ce1c6c085920a35229a0caf39215e84baae7bed4f3d2d1465fcdd927->enter($__internal_13441842ce1c6c085920a35229a0caf39215e84baae7bed4f3d2d1465fcdd927_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_dcddf855cd5f74b1247d38c3837d42c1fb554096499a09b216656a79bad8108f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcddf855cd5f74b1247d38c3837d42c1fb554096499a09b216656a79bad8108f->enter($__internal_dcddf855cd5f74b1247d38c3837d42c1fb554096499a09b216656a79bad8108f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_13441842ce1c6c085920a35229a0caf39215e84baae7bed4f3d2d1465fcdd927->leave($__internal_13441842ce1c6c085920a35229a0caf39215e84baae7bed4f3d2d1465fcdd927_prof);

        
        $__internal_dcddf855cd5f74b1247d38c3837d42c1fb554096499a09b216656a79bad8108f->leave($__internal_dcddf855cd5f74b1247d38c3837d42c1fb554096499a09b216656a79bad8108f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "/home/steve/taian/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
