<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_5fa6101b130b1e5769328c45e165e62a40c830ba5f80516c2c94045714583d0b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_16f0eb55fe21bef18d3e92f5240bbbe3a884d17f2fec36c94feda914a55a4858 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16f0eb55fe21bef18d3e92f5240bbbe3a884d17f2fec36c94feda914a55a4858->enter($__internal_16f0eb55fe21bef18d3e92f5240bbbe3a884d17f2fec36c94feda914a55a4858_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_cabf17bfa72119847fad5e461c49667c6cccbb835e36ec9d64e899b7c2886c68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cabf17bfa72119847fad5e461c49667c6cccbb835e36ec9d64e899b7c2886c68->enter($__internal_cabf17bfa72119847fad5e461c49667c6cccbb835e36ec9d64e899b7c2886c68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_16f0eb55fe21bef18d3e92f5240bbbe3a884d17f2fec36c94feda914a55a4858->leave($__internal_16f0eb55fe21bef18d3e92f5240bbbe3a884d17f2fec36c94feda914a55a4858_prof);

        
        $__internal_cabf17bfa72119847fad5e461c49667c6cccbb835e36ec9d64e899b7c2886c68->leave($__internal_cabf17bfa72119847fad5e461c49667c6cccbb835e36ec9d64e899b7c2886c68_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c82dbf8573120cc841da05269957d369023fbed89a907ca773590315bb9f7f84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c82dbf8573120cc841da05269957d369023fbed89a907ca773590315bb9f7f84->enter($__internal_c82dbf8573120cc841da05269957d369023fbed89a907ca773590315bb9f7f84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_823fc338ec79e178f7299b357204c36e24a36d343805dd38521362177620f88b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_823fc338ec79e178f7299b357204c36e24a36d343805dd38521362177620f88b->enter($__internal_823fc338ec79e178f7299b357204c36e24a36d343805dd38521362177620f88b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_823fc338ec79e178f7299b357204c36e24a36d343805dd38521362177620f88b->leave($__internal_823fc338ec79e178f7299b357204c36e24a36d343805dd38521362177620f88b_prof);

        
        $__internal_c82dbf8573120cc841da05269957d369023fbed89a907ca773590315bb9f7f84->leave($__internal_c82dbf8573120cc841da05269957d369023fbed89a907ca773590315bb9f7f84_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_cc4736e4bddadde962987c1a557d3ff01ebaf309c33823e44307d81150b4e81f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc4736e4bddadde962987c1a557d3ff01ebaf309c33823e44307d81150b4e81f->enter($__internal_cc4736e4bddadde962987c1a557d3ff01ebaf309c33823e44307d81150b4e81f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ddc9d856068b0a26a189dbfb2712dd1a9386de595e6863f90e47d629036db748 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddc9d856068b0a26a189dbfb2712dd1a9386de595e6863f90e47d629036db748->enter($__internal_ddc9d856068b0a26a189dbfb2712dd1a9386de595e6863f90e47d629036db748_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_ddc9d856068b0a26a189dbfb2712dd1a9386de595e6863f90e47d629036db748->leave($__internal_ddc9d856068b0a26a189dbfb2712dd1a9386de595e6863f90e47d629036db748_prof);

        
        $__internal_cc4736e4bddadde962987c1a557d3ff01ebaf309c33823e44307d81150b4e81f->leave($__internal_cc4736e4bddadde962987c1a557d3ff01ebaf309c33823e44307d81150b4e81f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/home/steve/taian/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
