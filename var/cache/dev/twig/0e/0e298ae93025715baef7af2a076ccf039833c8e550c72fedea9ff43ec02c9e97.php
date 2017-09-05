<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_8f426ea82f1e723e582df0d7af16e1b04204f317343c3bcb85134c200ca927fd extends Twig_Template
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
        $__internal_3775c909838edd882201d5f8742f463841d5eed0c05694c2ed82f740b531baf5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3775c909838edd882201d5f8742f463841d5eed0c05694c2ed82f740b531baf5->enter($__internal_3775c909838edd882201d5f8742f463841d5eed0c05694c2ed82f740b531baf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_6fc6decc03c60eca9c30e694f78b175440afdae35b1e374633991d6bb3926316 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fc6decc03c60eca9c30e694f78b175440afdae35b1e374633991d6bb3926316->enter($__internal_6fc6decc03c60eca9c30e694f78b175440afdae35b1e374633991d6bb3926316_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_3775c909838edd882201d5f8742f463841d5eed0c05694c2ed82f740b531baf5->leave($__internal_3775c909838edd882201d5f8742f463841d5eed0c05694c2ed82f740b531baf5_prof);

        
        $__internal_6fc6decc03c60eca9c30e694f78b175440afdae35b1e374633991d6bb3926316->leave($__internal_6fc6decc03c60eca9c30e694f78b175440afdae35b1e374633991d6bb3926316_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/home/steve/taian/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
