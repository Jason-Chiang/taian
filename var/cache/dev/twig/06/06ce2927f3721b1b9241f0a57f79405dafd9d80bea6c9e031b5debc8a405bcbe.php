<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_f2c3b18ef74b1145de9ae2153fd23888c698e088667c15599d9df1191cd647c4 extends Twig_Template
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
        $__internal_3423009058350cdb55a688de915eb2ba311b1165a4a23fad5f757cbf33cd8948 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3423009058350cdb55a688de915eb2ba311b1165a4a23fad5f757cbf33cd8948->enter($__internal_3423009058350cdb55a688de915eb2ba311b1165a4a23fad5f757cbf33cd8948_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_ca3eaf36a98bf3f7881e8c9174d5ae70d15540c0e5258e265e80ee049e3528c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca3eaf36a98bf3f7881e8c9174d5ae70d15540c0e5258e265e80ee049e3528c5->enter($__internal_ca3eaf36a98bf3f7881e8c9174d5ae70d15540c0e5258e265e80ee049e3528c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_3423009058350cdb55a688de915eb2ba311b1165a4a23fad5f757cbf33cd8948->leave($__internal_3423009058350cdb55a688de915eb2ba311b1165a4a23fad5f757cbf33cd8948_prof);

        
        $__internal_ca3eaf36a98bf3f7881e8c9174d5ae70d15540c0e5258e265e80ee049e3528c5->leave($__internal_ca3eaf36a98bf3f7881e8c9174d5ae70d15540c0e5258e265e80ee049e3528c5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/home/steve/taian/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
