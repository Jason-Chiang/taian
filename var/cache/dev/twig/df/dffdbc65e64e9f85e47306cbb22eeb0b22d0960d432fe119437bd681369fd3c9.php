<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_a5eb598a7faa332091e7de57f16f6886d8437dc6da5b68e2a09e71036805189c extends Twig_Template
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
        $__internal_0a7f1cfa047c80957ac7895303024343a71f04a07c6c5f04934bd1bd09c41291 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a7f1cfa047c80957ac7895303024343a71f04a07c6c5f04934bd1bd09c41291->enter($__internal_0a7f1cfa047c80957ac7895303024343a71f04a07c6c5f04934bd1bd09c41291_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_70cdcbe87f3516034396c79e808219251ec2a36a68a6ae63a6f896b0cfea02cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70cdcbe87f3516034396c79e808219251ec2a36a68a6ae63a6f896b0cfea02cd->enter($__internal_70cdcbe87f3516034396c79e808219251ec2a36a68a6ae63a6f896b0cfea02cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_0a7f1cfa047c80957ac7895303024343a71f04a07c6c5f04934bd1bd09c41291->leave($__internal_0a7f1cfa047c80957ac7895303024343a71f04a07c6c5f04934bd1bd09c41291_prof);

        
        $__internal_70cdcbe87f3516034396c79e808219251ec2a36a68a6ae63a6f896b0cfea02cd->leave($__internal_70cdcbe87f3516034396c79e808219251ec2a36a68a6ae63a6f896b0cfea02cd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/home/steve/taian/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
