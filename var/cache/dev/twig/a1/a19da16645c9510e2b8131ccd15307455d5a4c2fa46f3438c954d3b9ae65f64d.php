<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_0f1511fedc51b58b8baf951e120aa7b3ae0a04678ab01ced38de912bcacc2542 extends Twig_Template
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
        $__internal_e4dcb96db531a5d858098b39e3116696e89b5ddc3c268fe293a1ef8211294135 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4dcb96db531a5d858098b39e3116696e89b5ddc3c268fe293a1ef8211294135->enter($__internal_e4dcb96db531a5d858098b39e3116696e89b5ddc3c268fe293a1ef8211294135_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_fe613444a01c7983a3ef9a31af38f8ac1628ed6921ec914c2457b6fd5892f666 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe613444a01c7983a3ef9a31af38f8ac1628ed6921ec914c2457b6fd5892f666->enter($__internal_fe613444a01c7983a3ef9a31af38f8ac1628ed6921ec914c2457b6fd5892f666_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_e4dcb96db531a5d858098b39e3116696e89b5ddc3c268fe293a1ef8211294135->leave($__internal_e4dcb96db531a5d858098b39e3116696e89b5ddc3c268fe293a1ef8211294135_prof);

        
        $__internal_fe613444a01c7983a3ef9a31af38f8ac1628ed6921ec914c2457b6fd5892f666->leave($__internal_fe613444a01c7983a3ef9a31af38f8ac1628ed6921ec914c2457b6fd5892f666_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/home/steve/taian/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
