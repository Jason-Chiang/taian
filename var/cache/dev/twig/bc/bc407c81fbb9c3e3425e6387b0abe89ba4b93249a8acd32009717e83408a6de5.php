<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_6ae02bcd67415f50eba71211ad7691c8f60cb3edb55f5e49f93c3aca598661ad extends Twig_Template
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
        $__internal_af03f5478c4c1d075579f78d99f81166cd9e162c05308ce43455e260a5526d86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af03f5478c4c1d075579f78d99f81166cd9e162c05308ce43455e260a5526d86->enter($__internal_af03f5478c4c1d075579f78d99f81166cd9e162c05308ce43455e260a5526d86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_2f2c71112d7cd3844c2263989245a63595bf4a0fda0e8af9ab6766fd17b6f8c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f2c71112d7cd3844c2263989245a63595bf4a0fda0e8af9ab6766fd17b6f8c8->enter($__internal_2f2c71112d7cd3844c2263989245a63595bf4a0fda0e8af9ab6766fd17b6f8c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_af03f5478c4c1d075579f78d99f81166cd9e162c05308ce43455e260a5526d86->leave($__internal_af03f5478c4c1d075579f78d99f81166cd9e162c05308ce43455e260a5526d86_prof);

        
        $__internal_2f2c71112d7cd3844c2263989245a63595bf4a0fda0e8af9ab6766fd17b6f8c8->leave($__internal_2f2c71112d7cd3844c2263989245a63595bf4a0fda0e8af9ab6766fd17b6f8c8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/home/steve/taian/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
