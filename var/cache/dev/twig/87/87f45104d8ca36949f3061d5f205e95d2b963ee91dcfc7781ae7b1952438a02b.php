<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_609eecbc11491e04369e28c9615d951d6665b92eb736f2b51d703f259c43712c extends Twig_Template
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
        $__internal_9e15b1d5ee2405ec443578d0cfd3b1625674c51f432c027fe9eb468d5589a070 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e15b1d5ee2405ec443578d0cfd3b1625674c51f432c027fe9eb468d5589a070->enter($__internal_9e15b1d5ee2405ec443578d0cfd3b1625674c51f432c027fe9eb468d5589a070_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_ee31018f447c1da983b80ae2348bb97852a237f4f363a096f28fd76eb299cc00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee31018f447c1da983b80ae2348bb97852a237f4f363a096f28fd76eb299cc00->enter($__internal_ee31018f447c1da983b80ae2348bb97852a237f4f363a096f28fd76eb299cc00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_9e15b1d5ee2405ec443578d0cfd3b1625674c51f432c027fe9eb468d5589a070->leave($__internal_9e15b1d5ee2405ec443578d0cfd3b1625674c51f432c027fe9eb468d5589a070_prof);

        
        $__internal_ee31018f447c1da983b80ae2348bb97852a237f4f363a096f28fd76eb299cc00->leave($__internal_ee31018f447c1da983b80ae2348bb97852a237f4f363a096f28fd76eb299cc00_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/home/steve/taian/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
