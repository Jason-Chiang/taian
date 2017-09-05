<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_178608283fe9338841dfdf3da8fc08795c522f6f5f5d45edc76927e9ad50aa86 extends Twig_Template
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
        $__internal_b3ebebd551274c018589c835115ff2a7acdfbc63258d049746f69ad0187fa089 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3ebebd551274c018589c835115ff2a7acdfbc63258d049746f69ad0187fa089->enter($__internal_b3ebebd551274c018589c835115ff2a7acdfbc63258d049746f69ad0187fa089_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_649c1c2fb7d82dad14238f37706e9c93198adcb7b278b5df8a4185f9cc0a7c4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_649c1c2fb7d82dad14238f37706e9c93198adcb7b278b5df8a4185f9cc0a7c4b->enter($__internal_649c1c2fb7d82dad14238f37706e9c93198adcb7b278b5df8a4185f9cc0a7c4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_b3ebebd551274c018589c835115ff2a7acdfbc63258d049746f69ad0187fa089->leave($__internal_b3ebebd551274c018589c835115ff2a7acdfbc63258d049746f69ad0187fa089_prof);

        
        $__internal_649c1c2fb7d82dad14238f37706e9c93198adcb7b278b5df8a4185f9cc0a7c4b->leave($__internal_649c1c2fb7d82dad14238f37706e9c93198adcb7b278b5df8a4185f9cc0a7c4b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/home/steve/taian/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
