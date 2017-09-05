<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_567b7d7db015dfb9c77e6df249b1dc64603f98115badbbd94027e3f9dbbb0bbc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ab681983686a0dbf0ca25cf91fb963cd21262a39ac2120e1523db5d15273acdb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab681983686a0dbf0ca25cf91fb963cd21262a39ac2120e1523db5d15273acdb->enter($__internal_ab681983686a0dbf0ca25cf91fb963cd21262a39ac2120e1523db5d15273acdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_ed729aea3ae814bc52ad70a2055cdaecaa777a78177990c35f076d9b11116638 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed729aea3ae814bc52ad70a2055cdaecaa777a78177990c35f076d9b11116638->enter($__internal_ed729aea3ae814bc52ad70a2055cdaecaa777a78177990c35f076d9b11116638_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab681983686a0dbf0ca25cf91fb963cd21262a39ac2120e1523db5d15273acdb->leave($__internal_ab681983686a0dbf0ca25cf91fb963cd21262a39ac2120e1523db5d15273acdb_prof);

        
        $__internal_ed729aea3ae814bc52ad70a2055cdaecaa777a78177990c35f076d9b11116638->leave($__internal_ed729aea3ae814bc52ad70a2055cdaecaa777a78177990c35f076d9b11116638_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_291d511ad72ef32629ecc016e4b775e1dbeba27ed757e6864d94ac2710da0e4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_291d511ad72ef32629ecc016e4b775e1dbeba27ed757e6864d94ac2710da0e4c->enter($__internal_291d511ad72ef32629ecc016e4b775e1dbeba27ed757e6864d94ac2710da0e4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_cd528be777bbec5b063dc15323042963b4f9289b2e016063a3fb6b3513279e93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd528be777bbec5b063dc15323042963b4f9289b2e016063a3fb6b3513279e93->enter($__internal_cd528be777bbec5b063dc15323042963b4f9289b2e016063a3fb6b3513279e93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_cd528be777bbec5b063dc15323042963b4f9289b2e016063a3fb6b3513279e93->leave($__internal_cd528be777bbec5b063dc15323042963b4f9289b2e016063a3fb6b3513279e93_prof);

        
        $__internal_291d511ad72ef32629ecc016e4b775e1dbeba27ed757e6864d94ac2710da0e4c->leave($__internal_291d511ad72ef32629ecc016e4b775e1dbeba27ed757e6864d94ac2710da0e4c_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f618f1cdf08fbe88e31082d15c3be9bffc4bdbc84b3bf506312d48f757ad5496 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f618f1cdf08fbe88e31082d15c3be9bffc4bdbc84b3bf506312d48f757ad5496->enter($__internal_f618f1cdf08fbe88e31082d15c3be9bffc4bdbc84b3bf506312d48f757ad5496_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_82d8624f10f8f72953279bc8a8c13473086b09a1276c0582410b3f84ff51c979 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82d8624f10f8f72953279bc8a8c13473086b09a1276c0582410b3f84ff51c979->enter($__internal_82d8624f10f8f72953279bc8a8c13473086b09a1276c0582410b3f84ff51c979_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_82d8624f10f8f72953279bc8a8c13473086b09a1276c0582410b3f84ff51c979->leave($__internal_82d8624f10f8f72953279bc8a8c13473086b09a1276c0582410b3f84ff51c979_prof);

        
        $__internal_f618f1cdf08fbe88e31082d15c3be9bffc4bdbc84b3bf506312d48f757ad5496->leave($__internal_f618f1cdf08fbe88e31082d15c3be9bffc4bdbc84b3bf506312d48f757ad5496_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
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

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/home/steve/taian/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
