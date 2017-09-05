<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_0767a4189c063293bc5755e132854fc8ae89cdc6af981072779dd9d255663588 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d41b31a800be1fe858d181e4b5235db3e749d1f150beca3231a1b88e1a32c281 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d41b31a800be1fe858d181e4b5235db3e749d1f150beca3231a1b88e1a32c281->enter($__internal_d41b31a800be1fe858d181e4b5235db3e749d1f150beca3231a1b88e1a32c281_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_5a210ea79774f1fcdf55d5251a83009c4303186b1a5d56c642877e17909b1e3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a210ea79774f1fcdf55d5251a83009c4303186b1a5d56c642877e17909b1e3b->enter($__internal_5a210ea79774f1fcdf55d5251a83009c4303186b1a5d56c642877e17909b1e3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d41b31a800be1fe858d181e4b5235db3e749d1f150beca3231a1b88e1a32c281->leave($__internal_d41b31a800be1fe858d181e4b5235db3e749d1f150beca3231a1b88e1a32c281_prof);

        
        $__internal_5a210ea79774f1fcdf55d5251a83009c4303186b1a5d56c642877e17909b1e3b->leave($__internal_5a210ea79774f1fcdf55d5251a83009c4303186b1a5d56c642877e17909b1e3b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ec6f23d8b0d4b742c7d0f115a1bf0319d28b0da640443f6d44b9d6b8f1a79a5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec6f23d8b0d4b742c7d0f115a1bf0319d28b0da640443f6d44b9d6b8f1a79a5f->enter($__internal_ec6f23d8b0d4b742c7d0f115a1bf0319d28b0da640443f6d44b9d6b8f1a79a5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_51a4247be5f43ad5650f05eec2a3418a4df1ad793277891c8f32d6db5adf87e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51a4247be5f43ad5650f05eec2a3418a4df1ad793277891c8f32d6db5adf87e9->enter($__internal_51a4247be5f43ad5650f05eec2a3418a4df1ad793277891c8f32d6db5adf87e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_51a4247be5f43ad5650f05eec2a3418a4df1ad793277891c8f32d6db5adf87e9->leave($__internal_51a4247be5f43ad5650f05eec2a3418a4df1ad793277891c8f32d6db5adf87e9_prof);

        
        $__internal_ec6f23d8b0d4b742c7d0f115a1bf0319d28b0da640443f6d44b9d6b8f1a79a5f->leave($__internal_ec6f23d8b0d4b742c7d0f115a1bf0319d28b0da640443f6d44b9d6b8f1a79a5f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "WebProfilerBundle:Collector:ajax.html.twig", "/home/steve/taian/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
