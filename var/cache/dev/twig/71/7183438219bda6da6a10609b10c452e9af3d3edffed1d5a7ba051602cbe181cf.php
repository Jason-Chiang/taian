<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_49f889cfc5bd0c8f0a6ba4d1f92fda1fdef1ef0e54bb6f261feb69bc3d02fee1 extends Twig_Template
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
        $__internal_dd323093128a3ce57b9fdcfaea7af0c74c1cc036e777dfe96fb937d7097b7c8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd323093128a3ce57b9fdcfaea7af0c74c1cc036e777dfe96fb937d7097b7c8d->enter($__internal_dd323093128a3ce57b9fdcfaea7af0c74c1cc036e777dfe96fb937d7097b7c8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_1796ad7f3514ef3cb4f64a1ba065df2d96acfb56a097b91620a3598c524f1481 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1796ad7f3514ef3cb4f64a1ba065df2d96acfb56a097b91620a3598c524f1481->enter($__internal_1796ad7f3514ef3cb4f64a1ba065df2d96acfb56a097b91620a3598c524f1481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_dd323093128a3ce57b9fdcfaea7af0c74c1cc036e777dfe96fb937d7097b7c8d->leave($__internal_dd323093128a3ce57b9fdcfaea7af0c74c1cc036e777dfe96fb937d7097b7c8d_prof);

        
        $__internal_1796ad7f3514ef3cb4f64a1ba065df2d96acfb56a097b91620a3598c524f1481->leave($__internal_1796ad7f3514ef3cb4f64a1ba065df2d96acfb56a097b91620a3598c524f1481_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/home/steve/taian/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
