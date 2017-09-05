<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_6c7f357561db18db2d2a952bead8ae65cb40fd32df9c7ed51b193a06f167426a extends Twig_Template
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
        $__internal_420523ebfb1725a66a0ad07fb99033c9fd1e2d5c6eb9a6c99fb2fd49af868110 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_420523ebfb1725a66a0ad07fb99033c9fd1e2d5c6eb9a6c99fb2fd49af868110->enter($__internal_420523ebfb1725a66a0ad07fb99033c9fd1e2d5c6eb9a6c99fb2fd49af868110_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_135ccd95c6b5fc9e9f114c1ade1d09e2cdd42ccc98cd0ba448d1fd24ea98ee72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_135ccd95c6b5fc9e9f114c1ade1d09e2cdd42ccc98cd0ba448d1fd24ea98ee72->enter($__internal_135ccd95c6b5fc9e9f114c1ade1d09e2cdd42ccc98cd0ba448d1fd24ea98ee72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_420523ebfb1725a66a0ad07fb99033c9fd1e2d5c6eb9a6c99fb2fd49af868110->leave($__internal_420523ebfb1725a66a0ad07fb99033c9fd1e2d5c6eb9a6c99fb2fd49af868110_prof);

        
        $__internal_135ccd95c6b5fc9e9f114c1ade1d09e2cdd42ccc98cd0ba448d1fd24ea98ee72->leave($__internal_135ccd95c6b5fc9e9f114c1ade1d09e2cdd42ccc98cd0ba448d1fd24ea98ee72_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/home/steve/taian/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
