<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_7bdd6c03d2e6c95a3f4992e1e21d19d752cdd4841604f9f7baad16498269b077 extends Twig_Template
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
        $__internal_2000f234db6f134c074feede71e42c2bf42048588d129ecdce8253c61881c2b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2000f234db6f134c074feede71e42c2bf42048588d129ecdce8253c61881c2b0->enter($__internal_2000f234db6f134c074feede71e42c2bf42048588d129ecdce8253c61881c2b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_012b8582c0b3905811a2b90a72bd25e5451aee21d79ac1ae6e1536e099045b9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_012b8582c0b3905811a2b90a72bd25e5451aee21d79ac1ae6e1536e099045b9f->enter($__internal_012b8582c0b3905811a2b90a72bd25e5451aee21d79ac1ae6e1536e099045b9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_2000f234db6f134c074feede71e42c2bf42048588d129ecdce8253c61881c2b0->leave($__internal_2000f234db6f134c074feede71e42c2bf42048588d129ecdce8253c61881c2b0_prof);

        
        $__internal_012b8582c0b3905811a2b90a72bd25e5451aee21d79ac1ae6e1536e099045b9f->leave($__internal_012b8582c0b3905811a2b90a72bd25e5451aee21d79ac1ae6e1536e099045b9f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/home/steve/taian/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
