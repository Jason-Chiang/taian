<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_b532bf82f443e935ff71d72e5c51f9ba3a947fded3241fee47c81a9a4a2d024f extends Twig_Template
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
        $__internal_6561b9b49e4f3b2b33a3b780dd42bdca23fc76bec763ea8478f02b8d6a8cd32a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6561b9b49e4f3b2b33a3b780dd42bdca23fc76bec763ea8478f02b8d6a8cd32a->enter($__internal_6561b9b49e4f3b2b33a3b780dd42bdca23fc76bec763ea8478f02b8d6a8cd32a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_4a56b9fb020822b228e9cc1281ba9a7378da20091cd84b57cd322d024ee2980e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a56b9fb020822b228e9cc1281ba9a7378da20091cd84b57cd322d024ee2980e->enter($__internal_4a56b9fb020822b228e9cc1281ba9a7378da20091cd84b57cd322d024ee2980e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_6561b9b49e4f3b2b33a3b780dd42bdca23fc76bec763ea8478f02b8d6a8cd32a->leave($__internal_6561b9b49e4f3b2b33a3b780dd42bdca23fc76bec763ea8478f02b8d6a8cd32a_prof);

        
        $__internal_4a56b9fb020822b228e9cc1281ba9a7378da20091cd84b57cd322d024ee2980e->leave($__internal_4a56b9fb020822b228e9cc1281ba9a7378da20091cd84b57cd322d024ee2980e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/home/steve/taian/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
