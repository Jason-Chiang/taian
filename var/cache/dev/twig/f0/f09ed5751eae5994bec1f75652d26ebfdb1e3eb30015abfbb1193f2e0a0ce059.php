<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_d804e45b38cfaf921ab4dc769375dbc3bf06776b9d91e816d8bccb82e8d272d2 extends Twig_Template
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
        $__internal_fae57ca1727a3a3ac15c31bebfde7560bbfbf966e61f3e654b55d401a75d2c45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fae57ca1727a3a3ac15c31bebfde7560bbfbf966e61f3e654b55d401a75d2c45->enter($__internal_fae57ca1727a3a3ac15c31bebfde7560bbfbf966e61f3e654b55d401a75d2c45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_4bbf66e95816bd727ee625c348e1871efdf6706daa57febe20e18d2a7878cf2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bbf66e95816bd727ee625c348e1871efdf6706daa57febe20e18d2a7878cf2a->enter($__internal_4bbf66e95816bd727ee625c348e1871efdf6706daa57febe20e18d2a7878cf2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_fae57ca1727a3a3ac15c31bebfde7560bbfbf966e61f3e654b55d401a75d2c45->leave($__internal_fae57ca1727a3a3ac15c31bebfde7560bbfbf966e61f3e654b55d401a75d2c45_prof);

        
        $__internal_4bbf66e95816bd727ee625c348e1871efdf6706daa57febe20e18d2a7878cf2a->leave($__internal_4bbf66e95816bd727ee625c348e1871efdf6706daa57febe20e18d2a7878cf2a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/home/steve/taian/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
