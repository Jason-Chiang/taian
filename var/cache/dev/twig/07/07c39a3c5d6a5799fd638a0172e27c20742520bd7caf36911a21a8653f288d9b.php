<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_e192152444df0176bc8335f06c11901b8429c65d56206745daaddcb3fa30e56c extends Twig_Template
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
        $__internal_82a50281deeba599f4fdadae7ef93b6be9103712fed668579319df761a81dee5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82a50281deeba599f4fdadae7ef93b6be9103712fed668579319df761a81dee5->enter($__internal_82a50281deeba599f4fdadae7ef93b6be9103712fed668579319df761a81dee5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_1524f5f2ab3d7d9ecdfca5d0da0734b8f8f77f65716ea2367f4aec4a66abfd8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1524f5f2ab3d7d9ecdfca5d0da0734b8f8f77f65716ea2367f4aec4a66abfd8b->enter($__internal_1524f5f2ab3d7d9ecdfca5d0da0734b8f8f77f65716ea2367f4aec4a66abfd8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_82a50281deeba599f4fdadae7ef93b6be9103712fed668579319df761a81dee5->leave($__internal_82a50281deeba599f4fdadae7ef93b6be9103712fed668579319df761a81dee5_prof);

        
        $__internal_1524f5f2ab3d7d9ecdfca5d0da0734b8f8f77f65716ea2367f4aec4a66abfd8b->leave($__internal_1524f5f2ab3d7d9ecdfca5d0da0734b8f8f77f65716ea2367f4aec4a66abfd8b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "WebProfilerBundle:Profiler:header.html.twig", "/home/steve/taian/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
