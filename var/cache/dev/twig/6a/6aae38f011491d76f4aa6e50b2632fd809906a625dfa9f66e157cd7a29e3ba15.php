<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_2446647a07a9cf480662901eb43f919267b53491ae50eb7e9f9775f9ff4adcad extends Twig_Template
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
        $__internal_985023b1055fcfcd256ab3730c048f87020258706f9d49c353154427336e8ce0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_985023b1055fcfcd256ab3730c048f87020258706f9d49c353154427336e8ce0->enter($__internal_985023b1055fcfcd256ab3730c048f87020258706f9d49c353154427336e8ce0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_543e73a9ebd6eb9082fadd9356ac3fe70e9fca06dbf0b9c2a4cacbf31ba038c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_543e73a9ebd6eb9082fadd9356ac3fe70e9fca06dbf0b9c2a4cacbf31ba038c1->enter($__internal_543e73a9ebd6eb9082fadd9356ac3fe70e9fca06dbf0b9c2a4cacbf31ba038c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_985023b1055fcfcd256ab3730c048f87020258706f9d49c353154427336e8ce0->leave($__internal_985023b1055fcfcd256ab3730c048f87020258706f9d49c353154427336e8ce0_prof);

        
        $__internal_543e73a9ebd6eb9082fadd9356ac3fe70e9fca06dbf0b9c2a4cacbf31ba038c1->leave($__internal_543e73a9ebd6eb9082fadd9356ac3fe70e9fca06dbf0b9c2a4cacbf31ba038c1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/home/steve/taian/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
