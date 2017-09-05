<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_c490f00b111fd34cb2a3bed8a633252f181aad89d737a6882654960cdcc2ffdc extends Twig_Template
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
        $__internal_317351754bce23b6373f8b14ad89069c198c54cde9d28f61df2943333d293018 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_317351754bce23b6373f8b14ad89069c198c54cde9d28f61df2943333d293018->enter($__internal_317351754bce23b6373f8b14ad89069c198c54cde9d28f61df2943333d293018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_e9e0dbb690102353347ecd164234b985a627e604251458d3f5c385030aa0adf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9e0dbb690102353347ecd164234b985a627e604251458d3f5c385030aa0adf1->enter($__internal_e9e0dbb690102353347ecd164234b985a627e604251458d3f5c385030aa0adf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_317351754bce23b6373f8b14ad89069c198c54cde9d28f61df2943333d293018->leave($__internal_317351754bce23b6373f8b14ad89069c198c54cde9d28f61df2943333d293018_prof);

        
        $__internal_e9e0dbb690102353347ecd164234b985a627e604251458d3f5c385030aa0adf1->leave($__internal_e9e0dbb690102353347ecd164234b985a627e604251458d3f5c385030aa0adf1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/home/steve/taian/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
