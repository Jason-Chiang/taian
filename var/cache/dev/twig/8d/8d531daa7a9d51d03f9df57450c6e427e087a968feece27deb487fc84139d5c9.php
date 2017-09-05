<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_42a61b9a9345420f9240031de1aca8eb682a819bd2869f7245d36673df600a4d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_a90329bcf2bb584d11a8c5466cf624bc92d079957be1245a884bb773ee6ff385 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a90329bcf2bb584d11a8c5466cf624bc92d079957be1245a884bb773ee6ff385->enter($__internal_a90329bcf2bb584d11a8c5466cf624bc92d079957be1245a884bb773ee6ff385_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_9819b996ab80ab4e46c09d2f35f34360c798d0809aa0cbc984981be3d613fa86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9819b996ab80ab4e46c09d2f35f34360c798d0809aa0cbc984981be3d613fa86->enter($__internal_9819b996ab80ab4e46c09d2f35f34360c798d0809aa0cbc984981be3d613fa86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a90329bcf2bb584d11a8c5466cf624bc92d079957be1245a884bb773ee6ff385->leave($__internal_a90329bcf2bb584d11a8c5466cf624bc92d079957be1245a884bb773ee6ff385_prof);

        
        $__internal_9819b996ab80ab4e46c09d2f35f34360c798d0809aa0cbc984981be3d613fa86->leave($__internal_9819b996ab80ab4e46c09d2f35f34360c798d0809aa0cbc984981be3d613fa86_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7068f12c49fb1df40f09d40eece9c6dd592b2c8523d0f66927951799a2dba8ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7068f12c49fb1df40f09d40eece9c6dd592b2c8523d0f66927951799a2dba8ea->enter($__internal_7068f12c49fb1df40f09d40eece9c6dd592b2c8523d0f66927951799a2dba8ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d0d6db3fad76a0292fc5f50c5f01e5fd3df3ec588b27c0ebf4ab67887daca201 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0d6db3fad76a0292fc5f50c5f01e5fd3df3ec588b27c0ebf4ab67887daca201->enter($__internal_d0d6db3fad76a0292fc5f50c5f01e5fd3df3ec588b27c0ebf4ab67887daca201_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d0d6db3fad76a0292fc5f50c5f01e5fd3df3ec588b27c0ebf4ab67887daca201->leave($__internal_d0d6db3fad76a0292fc5f50c5f01e5fd3df3ec588b27c0ebf4ab67887daca201_prof);

        
        $__internal_7068f12c49fb1df40f09d40eece9c6dd592b2c8523d0f66927951799a2dba8ea->leave($__internal_7068f12c49fb1df40f09d40eece9c6dd592b2c8523d0f66927951799a2dba8ea_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d2bd27a5de86c8362a3d3f51a92e5cc669d5ccb1ecdbf8dbd18c127bd4e9299c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2bd27a5de86c8362a3d3f51a92e5cc669d5ccb1ecdbf8dbd18c127bd4e9299c->enter($__internal_d2bd27a5de86c8362a3d3f51a92e5cc669d5ccb1ecdbf8dbd18c127bd4e9299c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6cdb9739ff66397eff4f9faf374da0703635bfa9c3183bd90360924781d31a0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cdb9739ff66397eff4f9faf374da0703635bfa9c3183bd90360924781d31a0c->enter($__internal_6cdb9739ff66397eff4f9faf374da0703635bfa9c3183bd90360924781d31a0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6cdb9739ff66397eff4f9faf374da0703635bfa9c3183bd90360924781d31a0c->leave($__internal_6cdb9739ff66397eff4f9faf374da0703635bfa9c3183bd90360924781d31a0c_prof);

        
        $__internal_d2bd27a5de86c8362a3d3f51a92e5cc669d5ccb1ecdbf8dbd18c127bd4e9299c->leave($__internal_d2bd27a5de86c8362a3d3f51a92e5cc669d5ccb1ecdbf8dbd18c127bd4e9299c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c37574496535620551a1959fb0921f48d40d8b6c30a7ba42256ab710c16ce2bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c37574496535620551a1959fb0921f48d40d8b6c30a7ba42256ab710c16ce2bc->enter($__internal_c37574496535620551a1959fb0921f48d40d8b6c30a7ba42256ab710c16ce2bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_96d5343f8c7ef2c064fe8ca2e6583154ce78e3627f7dc1127cc99bb6e16d7a24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96d5343f8c7ef2c064fe8ca2e6583154ce78e3627f7dc1127cc99bb6e16d7a24->enter($__internal_96d5343f8c7ef2c064fe8ca2e6583154ce78e3627f7dc1127cc99bb6e16d7a24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_96d5343f8c7ef2c064fe8ca2e6583154ce78e3627f7dc1127cc99bb6e16d7a24->leave($__internal_96d5343f8c7ef2c064fe8ca2e6583154ce78e3627f7dc1127cc99bb6e16d7a24_prof);

        
        $__internal_c37574496535620551a1959fb0921f48d40d8b6c30a7ba42256ab710c16ce2bc->leave($__internal_c37574496535620551a1959fb0921f48d40d8b6c30a7ba42256ab710c16ce2bc_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/home/steve/taian/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
