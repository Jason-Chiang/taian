<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_1d4032952a98515490480f044e958b5ed16073611be1457542c56e0bd887a924 extends Twig_Template
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
        $__internal_4c00354211c9cf696701a4efdaf1414456700a1ff2031a36cff075cc491f8372 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c00354211c9cf696701a4efdaf1414456700a1ff2031a36cff075cc491f8372->enter($__internal_4c00354211c9cf696701a4efdaf1414456700a1ff2031a36cff075cc491f8372_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_c1809f81073598c1aee15b1e1133019175d6a0d65e57c8fb909a30a5e528b5d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1809f81073598c1aee15b1e1133019175d6a0d65e57c8fb909a30a5e528b5d9->enter($__internal_c1809f81073598c1aee15b1e1133019175d6a0d65e57c8fb909a30a5e528b5d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_4c00354211c9cf696701a4efdaf1414456700a1ff2031a36cff075cc491f8372->leave($__internal_4c00354211c9cf696701a4efdaf1414456700a1ff2031a36cff075cc491f8372_prof);

        
        $__internal_c1809f81073598c1aee15b1e1133019175d6a0d65e57c8fb909a30a5e528b5d9->leave($__internal_c1809f81073598c1aee15b1e1133019175d6a0d65e57c8fb909a30a5e528b5d9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/home/steve/taian/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
