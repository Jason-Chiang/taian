<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_b0984198a15356865c57d29001b12a7b19bfeaf2078f2346a02f2e1a3b45ddc9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_74fa7a95e845973190bf8d15b3cbe219a5f7ac5587d94f35270870efb5f6e65a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74fa7a95e845973190bf8d15b3cbe219a5f7ac5587d94f35270870efb5f6e65a->enter($__internal_74fa7a95e845973190bf8d15b3cbe219a5f7ac5587d94f35270870efb5f6e65a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_90a6efbbdaec7b5724c45df02a6966c0d228e415071761f08d7d959564fc2b99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90a6efbbdaec7b5724c45df02a6966c0d228e415071761f08d7d959564fc2b99->enter($__internal_90a6efbbdaec7b5724c45df02a6966c0d228e415071761f08d7d959564fc2b99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_74fa7a95e845973190bf8d15b3cbe219a5f7ac5587d94f35270870efb5f6e65a->leave($__internal_74fa7a95e845973190bf8d15b3cbe219a5f7ac5587d94f35270870efb5f6e65a_prof);

        
        $__internal_90a6efbbdaec7b5724c45df02a6966c0d228e415071761f08d7d959564fc2b99->leave($__internal_90a6efbbdaec7b5724c45df02a6966c0d228e415071761f08d7d959564fc2b99_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_da81be038908084fad3590cecff70a936aad7e5432dedc6cd35ad7feff35d2d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da81be038908084fad3590cecff70a936aad7e5432dedc6cd35ad7feff35d2d7->enter($__internal_da81be038908084fad3590cecff70a936aad7e5432dedc6cd35ad7feff35d2d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5229bd461ec182e3a33f00f3dfb9443e35c5e82411aa4d6ba753d806deb2cc6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5229bd461ec182e3a33f00f3dfb9443e35c5e82411aa4d6ba753d806deb2cc6a->enter($__internal_5229bd461ec182e3a33f00f3dfb9443e35c5e82411aa4d6ba753d806deb2cc6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_5229bd461ec182e3a33f00f3dfb9443e35c5e82411aa4d6ba753d806deb2cc6a->leave($__internal_5229bd461ec182e3a33f00f3dfb9443e35c5e82411aa4d6ba753d806deb2cc6a_prof);

        
        $__internal_da81be038908084fad3590cecff70a936aad7e5432dedc6cd35ad7feff35d2d7->leave($__internal_da81be038908084fad3590cecff70a936aad7e5432dedc6cd35ad7feff35d2d7_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_409aeb1dce612da6f45e166aeeb49bd87235c27966bc5be4fe198da6bae8cfa1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_409aeb1dce612da6f45e166aeeb49bd87235c27966bc5be4fe198da6bae8cfa1->enter($__internal_409aeb1dce612da6f45e166aeeb49bd87235c27966bc5be4fe198da6bae8cfa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d417fb9ba3fef313f95b2eeb078ba3d32426bd5bfd5fd28a15ee27b5c217acaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d417fb9ba3fef313f95b2eeb078ba3d32426bd5bfd5fd28a15ee27b5c217acaf->enter($__internal_d417fb9ba3fef313f95b2eeb078ba3d32426bd5bfd5fd28a15ee27b5c217acaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_d417fb9ba3fef313f95b2eeb078ba3d32426bd5bfd5fd28a15ee27b5c217acaf->leave($__internal_d417fb9ba3fef313f95b2eeb078ba3d32426bd5bfd5fd28a15ee27b5c217acaf_prof);

        
        $__internal_409aeb1dce612da6f45e166aeeb49bd87235c27966bc5be4fe198da6bae8cfa1->leave($__internal_409aeb1dce612da6f45e166aeeb49bd87235c27966bc5be4fe198da6bae8cfa1_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c174694cdcb58b8330906579f3d5e6761b5161127e22c0b8d42ff62972b4c717 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c174694cdcb58b8330906579f3d5e6761b5161127e22c0b8d42ff62972b4c717->enter($__internal_c174694cdcb58b8330906579f3d5e6761b5161127e22c0b8d42ff62972b4c717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5dfafc641b17256b43d3e921fdd629bc89655e5b6c0eecd0c472a9bd069fd2f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dfafc641b17256b43d3e921fdd629bc89655e5b6c0eecd0c472a9bd069fd2f9->enter($__internal_5dfafc641b17256b43d3e921fdd629bc89655e5b6c0eecd0c472a9bd069fd2f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_5dfafc641b17256b43d3e921fdd629bc89655e5b6c0eecd0c472a9bd069fd2f9->leave($__internal_5dfafc641b17256b43d3e921fdd629bc89655e5b6c0eecd0c472a9bd069fd2f9_prof);

        
        $__internal_c174694cdcb58b8330906579f3d5e6761b5161127e22c0b8d42ff62972b4c717->leave($__internal_c174694cdcb58b8330906579f3d5e6761b5161127e22c0b8d42ff62972b4c717_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "/home/steve/taian/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
