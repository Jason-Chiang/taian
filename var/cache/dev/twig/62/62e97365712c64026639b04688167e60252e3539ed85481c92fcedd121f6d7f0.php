<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_aefe61d9ac58e61b4dcb0298175f28eb518c40a7d1c90125ae296f3594b6ce9f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3a0e043b796cebe4da9d6891bc1e1aff563d936d89e785c4d490b066b7ca3ff5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a0e043b796cebe4da9d6891bc1e1aff563d936d89e785c4d490b066b7ca3ff5->enter($__internal_3a0e043b796cebe4da9d6891bc1e1aff563d936d89e785c4d490b066b7ca3ff5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_a102343bb63e4d533bed752d675a19cb53385b0c873983118d9be1113a5fb7d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a102343bb63e4d533bed752d675a19cb53385b0c873983118d9be1113a5fb7d1->enter($__internal_a102343bb63e4d533bed752d675a19cb53385b0c873983118d9be1113a5fb7d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a0e043b796cebe4da9d6891bc1e1aff563d936d89e785c4d490b066b7ca3ff5->leave($__internal_3a0e043b796cebe4da9d6891bc1e1aff563d936d89e785c4d490b066b7ca3ff5_prof);

        
        $__internal_a102343bb63e4d533bed752d675a19cb53385b0c873983118d9be1113a5fb7d1->leave($__internal_a102343bb63e4d533bed752d675a19cb53385b0c873983118d9be1113a5fb7d1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9b153f61c87045d13f4b2cc42e23612d7258491cacb4996b5ce22d78ca535b87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b153f61c87045d13f4b2cc42e23612d7258491cacb4996b5ce22d78ca535b87->enter($__internal_9b153f61c87045d13f4b2cc42e23612d7258491cacb4996b5ce22d78ca535b87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_26ad7b4ce039c957e3317cebcecbe9587d7362c4bd7c421a2b36fc39e8d6643d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26ad7b4ce039c957e3317cebcecbe9587d7362c4bd7c421a2b36fc39e8d6643d->enter($__internal_26ad7b4ce039c957e3317cebcecbe9587d7362c4bd7c421a2b36fc39e8d6643d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_26ad7b4ce039c957e3317cebcecbe9587d7362c4bd7c421a2b36fc39e8d6643d->leave($__internal_26ad7b4ce039c957e3317cebcecbe9587d7362c4bd7c421a2b36fc39e8d6643d_prof);

        
        $__internal_9b153f61c87045d13f4b2cc42e23612d7258491cacb4996b5ce22d78ca535b87->leave($__internal_9b153f61c87045d13f4b2cc42e23612d7258491cacb4996b5ce22d78ca535b87_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_9702ec306293deb4b56a78f3a731d356af6fc6e35abd178338ceab784782abe8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9702ec306293deb4b56a78f3a731d356af6fc6e35abd178338ceab784782abe8->enter($__internal_9702ec306293deb4b56a78f3a731d356af6fc6e35abd178338ceab784782abe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4f095a8dd5b7a9db0b979529de29985ba197e9299fd55f89444f7b0d808f3c3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f095a8dd5b7a9db0b979529de29985ba197e9299fd55f89444f7b0d808f3c3c->enter($__internal_4f095a8dd5b7a9db0b979529de29985ba197e9299fd55f89444f7b0d808f3c3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_4f095a8dd5b7a9db0b979529de29985ba197e9299fd55f89444f7b0d808f3c3c->leave($__internal_4f095a8dd5b7a9db0b979529de29985ba197e9299fd55f89444f7b0d808f3c3c_prof);

        
        $__internal_9702ec306293deb4b56a78f3a731d356af6fc6e35abd178338ceab784782abe8->leave($__internal_9702ec306293deb4b56a78f3a731d356af6fc6e35abd178338ceab784782abe8_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/home/steve/taian/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
