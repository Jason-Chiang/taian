<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_5ecdd82839833f3fabfc01a1e4b029367b742fe78ffc3d7dadf3a84f99c032c1 extends Twig_Template
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
        $__internal_392e73a7fea8cd60a2cbface97658090cf4c8cc2e56c28ec8055a3e90b3243e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_392e73a7fea8cd60a2cbface97658090cf4c8cc2e56c28ec8055a3e90b3243e5->enter($__internal_392e73a7fea8cd60a2cbface97658090cf4c8cc2e56c28ec8055a3e90b3243e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_d18b3a37710dbb725251e34f5ec17eea290dbdbec18cf369a51426be5d31a8ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d18b3a37710dbb725251e34f5ec17eea290dbdbec18cf369a51426be5d31a8ed->enter($__internal_d18b3a37710dbb725251e34f5ec17eea290dbdbec18cf369a51426be5d31a8ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_392e73a7fea8cd60a2cbface97658090cf4c8cc2e56c28ec8055a3e90b3243e5->leave($__internal_392e73a7fea8cd60a2cbface97658090cf4c8cc2e56c28ec8055a3e90b3243e5_prof);

        
        $__internal_d18b3a37710dbb725251e34f5ec17eea290dbdbec18cf369a51426be5d31a8ed->leave($__internal_d18b3a37710dbb725251e34f5ec17eea290dbdbec18cf369a51426be5d31a8ed_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/home/steve/taian/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
