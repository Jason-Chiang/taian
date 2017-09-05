<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_b75f0d9fb24339fc996e6d3d3a1697ffcba1e4cf729a6a8494ac6e7aba93abae extends Twig_Template
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
        $__internal_6094f26dcb819373d2dda16dfd9f566157261f39cb0dc872b26ba38669532f75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6094f26dcb819373d2dda16dfd9f566157261f39cb0dc872b26ba38669532f75->enter($__internal_6094f26dcb819373d2dda16dfd9f566157261f39cb0dc872b26ba38669532f75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_ea0bb159241e80af3c42ecf4c58c8e4318380401c1a4149bb3d411e9490b2048 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea0bb159241e80af3c42ecf4c58c8e4318380401c1a4149bb3d411e9490b2048->enter($__internal_ea0bb159241e80af3c42ecf4c58c8e4318380401c1a4149bb3d411e9490b2048_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_6094f26dcb819373d2dda16dfd9f566157261f39cb0dc872b26ba38669532f75->leave($__internal_6094f26dcb819373d2dda16dfd9f566157261f39cb0dc872b26ba38669532f75_prof);

        
        $__internal_ea0bb159241e80af3c42ecf4c58c8e4318380401c1a4149bb3d411e9490b2048->leave($__internal_ea0bb159241e80af3c42ecf4c58c8e4318380401c1a4149bb3d411e9490b2048_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/home/steve/taian/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
