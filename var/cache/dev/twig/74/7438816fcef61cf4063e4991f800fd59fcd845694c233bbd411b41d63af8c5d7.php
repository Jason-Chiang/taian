<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_a13187f3e11630685a3fb0a324a86a31bcb0116fd93b4bf197df023fc46e0d0b extends Twig_Template
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
        $__internal_fae065527c6b69c84c16d51b49a3bf10c986a8511d6aa8b0e28d1465170034b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fae065527c6b69c84c16d51b49a3bf10c986a8511d6aa8b0e28d1465170034b6->enter($__internal_fae065527c6b69c84c16d51b49a3bf10c986a8511d6aa8b0e28d1465170034b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_b0ddd9e76a367d184e83f601216841e699b59eb5ce222371b196cb1d98901678 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0ddd9e76a367d184e83f601216841e699b59eb5ce222371b196cb1d98901678->enter($__internal_b0ddd9e76a367d184e83f601216841e699b59eb5ce222371b196cb1d98901678_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_fae065527c6b69c84c16d51b49a3bf10c986a8511d6aa8b0e28d1465170034b6->leave($__internal_fae065527c6b69c84c16d51b49a3bf10c986a8511d6aa8b0e28d1465170034b6_prof);

        
        $__internal_b0ddd9e76a367d184e83f601216841e699b59eb5ce222371b196cb1d98901678->leave($__internal_b0ddd9e76a367d184e83f601216841e699b59eb5ce222371b196cb1d98901678_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/home/steve/taian/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
