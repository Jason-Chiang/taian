<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_b529b70bb1497083403274d9289b7646756918884809b6248f80c2a2f548ed3b extends Twig_Template
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
        $__internal_9fb690bc2b1ab03627bcadf2d54f5068984575d7d41a6f3c1da8f112d2ffed68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fb690bc2b1ab03627bcadf2d54f5068984575d7d41a6f3c1da8f112d2ffed68->enter($__internal_9fb690bc2b1ab03627bcadf2d54f5068984575d7d41a6f3c1da8f112d2ffed68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_f041767960d8fe108cbaaf4cb0ecb46b9a031894ba488e8bd5e99d48fde09cfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f041767960d8fe108cbaaf4cb0ecb46b9a031894ba488e8bd5e99d48fde09cfc->enter($__internal_f041767960d8fe108cbaaf4cb0ecb46b9a031894ba488e8bd5e99d48fde09cfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_9fb690bc2b1ab03627bcadf2d54f5068984575d7d41a6f3c1da8f112d2ffed68->leave($__internal_9fb690bc2b1ab03627bcadf2d54f5068984575d7d41a6f3c1da8f112d2ffed68_prof);

        
        $__internal_f041767960d8fe108cbaaf4cb0ecb46b9a031894ba488e8bd5e99d48fde09cfc->leave($__internal_f041767960d8fe108cbaaf4cb0ecb46b9a031894ba488e8bd5e99d48fde09cfc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/home/steve/taian/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
