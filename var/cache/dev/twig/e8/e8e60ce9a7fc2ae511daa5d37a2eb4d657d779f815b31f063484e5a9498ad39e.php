<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_1f324c2f050b6b71f7aebeb2ae6b48bf7edd157995be06f6afeaf49723a6eacd extends Twig_Template
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
        $__internal_300419b4af863fa0f1f794a79f6d09d6d208a5280cfa9cd31f41a320c6bcc93e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_300419b4af863fa0f1f794a79f6d09d6d208a5280cfa9cd31f41a320c6bcc93e->enter($__internal_300419b4af863fa0f1f794a79f6d09d6d208a5280cfa9cd31f41a320c6bcc93e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_4247fc6a73b69953af10ccb2d14202b222d60ad897c0ba3cab415e3fb282efe9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4247fc6a73b69953af10ccb2d14202b222d60ad897c0ba3cab415e3fb282efe9->enter($__internal_4247fc6a73b69953af10ccb2d14202b222d60ad897c0ba3cab415e3fb282efe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_300419b4af863fa0f1f794a79f6d09d6d208a5280cfa9cd31f41a320c6bcc93e->leave($__internal_300419b4af863fa0f1f794a79f6d09d6d208a5280cfa9cd31f41a320c6bcc93e_prof);

        
        $__internal_4247fc6a73b69953af10ccb2d14202b222d60ad897c0ba3cab415e3fb282efe9->leave($__internal_4247fc6a73b69953af10ccb2d14202b222d60ad897c0ba3cab415e3fb282efe9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/home/steve/taian/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
