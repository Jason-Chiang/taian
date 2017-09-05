<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_123c1368c230210e9985dd9a7cb56acb8c41c91aa0e185e1efe75a869175a3c2 extends Twig_Template
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
        $__internal_b559ac039f96721aee2281ec4aa4677af0007e9f9493c9981dbc0dd009c2c353 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b559ac039f96721aee2281ec4aa4677af0007e9f9493c9981dbc0dd009c2c353->enter($__internal_b559ac039f96721aee2281ec4aa4677af0007e9f9493c9981dbc0dd009c2c353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_1a6a1bba04dbeebf7fe2cf5c8b1055c5961eff131db08ecf4d44402d107b06db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a6a1bba04dbeebf7fe2cf5c8b1055c5961eff131db08ecf4d44402d107b06db->enter($__internal_1a6a1bba04dbeebf7fe2cf5c8b1055c5961eff131db08ecf4d44402d107b06db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_b559ac039f96721aee2281ec4aa4677af0007e9f9493c9981dbc0dd009c2c353->leave($__internal_b559ac039f96721aee2281ec4aa4677af0007e9f9493c9981dbc0dd009c2c353_prof);

        
        $__internal_1a6a1bba04dbeebf7fe2cf5c8b1055c5961eff131db08ecf4d44402d107b06db->leave($__internal_1a6a1bba04dbeebf7fe2cf5c8b1055c5961eff131db08ecf4d44402d107b06db_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/home/steve/taian/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
