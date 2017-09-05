<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_10e4c47a58862a54dc0f55ba04e47e52c92e7b9364837f4f7828f013617f87a8 extends Twig_Template
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
        $__internal_0d64c54679f10d05c61933d22e7a9571a31a278805fe2b70e002e09d73e6810c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d64c54679f10d05c61933d22e7a9571a31a278805fe2b70e002e09d73e6810c->enter($__internal_0d64c54679f10d05c61933d22e7a9571a31a278805fe2b70e002e09d73e6810c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_312ace23d100b6baa87cf894fdecb25d876248f16ecca4b4bff8a90fab0af447 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_312ace23d100b6baa87cf894fdecb25d876248f16ecca4b4bff8a90fab0af447->enter($__internal_312ace23d100b6baa87cf894fdecb25d876248f16ecca4b4bff8a90fab0af447_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_0d64c54679f10d05c61933d22e7a9571a31a278805fe2b70e002e09d73e6810c->leave($__internal_0d64c54679f10d05c61933d22e7a9571a31a278805fe2b70e002e09d73e6810c_prof);

        
        $__internal_312ace23d100b6baa87cf894fdecb25d876248f16ecca4b4bff8a90fab0af447->leave($__internal_312ace23d100b6baa87cf894fdecb25d876248f16ecca4b4bff8a90fab0af447_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/home/steve/taian/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
