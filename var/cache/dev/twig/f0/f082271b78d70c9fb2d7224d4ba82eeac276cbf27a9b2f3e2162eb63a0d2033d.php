<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_7bd1324238e1df204d6b0345fe9e81454faeb67de5c7b7e72e5a7ab1034fa190 extends Twig_Template
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
        $__internal_d5f2de41148cf88bb0d2f3bb165108e00e633ab24e024fee26505b633f1f9060 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5f2de41148cf88bb0d2f3bb165108e00e633ab24e024fee26505b633f1f9060->enter($__internal_d5f2de41148cf88bb0d2f3bb165108e00e633ab24e024fee26505b633f1f9060_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_3318c244d48355ec63d55178541583341118fb8962d29b067327c57b3fb303c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3318c244d48355ec63d55178541583341118fb8962d29b067327c57b3fb303c2->enter($__internal_3318c244d48355ec63d55178541583341118fb8962d29b067327c57b3fb303c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_d5f2de41148cf88bb0d2f3bb165108e00e633ab24e024fee26505b633f1f9060->leave($__internal_d5f2de41148cf88bb0d2f3bb165108e00e633ab24e024fee26505b633f1f9060_prof);

        
        $__internal_3318c244d48355ec63d55178541583341118fb8962d29b067327c57b3fb303c2->leave($__internal_3318c244d48355ec63d55178541583341118fb8962d29b067327c57b3fb303c2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/home/steve/taian/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
