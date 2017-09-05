<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_2d5aab0913fa4ad79cc41587eb89c4518628a2673adc5e9d768c1ecd42b8cc9b extends Twig_Template
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
        $__internal_3150c0526722f692ad8caac49efe45850d5dd90914ffc5888531a91eb8a3e24f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3150c0526722f692ad8caac49efe45850d5dd90914ffc5888531a91eb8a3e24f->enter($__internal_3150c0526722f692ad8caac49efe45850d5dd90914ffc5888531a91eb8a3e24f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_8dfc935635a89d0af3900fa5648d06033e37a59f393be7d102ffe09b7572b046 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dfc935635a89d0af3900fa5648d06033e37a59f393be7d102ffe09b7572b046->enter($__internal_8dfc935635a89d0af3900fa5648d06033e37a59f393be7d102ffe09b7572b046_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper {
    min-height: auto;
}
";
        
        $__internal_3150c0526722f692ad8caac49efe45850d5dd90914ffc5888531a91eb8a3e24f->leave($__internal_3150c0526722f692ad8caac49efe45850d5dd90914ffc5888531a91eb8a3e24f_prof);

        
        $__internal_8dfc935635a89d0af3900fa5648d06033e37a59f393be7d102ffe09b7572b046->leave($__internal_8dfc935635a89d0af3900fa5648d06033e37a59f393be7d102ffe09b7572b046_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
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
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper {
    min-height: auto;
}
", "WebProfilerBundle:Collector:exception.css.twig", "/home/steve/taian/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.css.twig");
    }
}
