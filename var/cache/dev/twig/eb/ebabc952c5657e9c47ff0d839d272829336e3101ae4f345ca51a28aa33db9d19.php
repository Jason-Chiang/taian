<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_cfb0c6de20a6c98f077100620dd04cb7354e50e169ae4e9d496222a63fe64c07 extends Twig_Template
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
        $__internal_a5831cf2ac6bb66a0b6dab1ec1be567ec01e0636d61fef7b5edc941914477322 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5831cf2ac6bb66a0b6dab1ec1be567ec01e0636d61fef7b5edc941914477322->enter($__internal_a5831cf2ac6bb66a0b6dab1ec1be567ec01e0636d61fef7b5edc941914477322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_41560740597324dfe8b934002944b3180d0a0ae2a64a44a734f13e4b10fe2183 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41560740597324dfe8b934002944b3180d0a0ae2a64a44a734f13e4b10fe2183->enter($__internal_41560740597324dfe8b934002944b3180d0a0ae2a64a44a734f13e4b10fe2183_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_a5831cf2ac6bb66a0b6dab1ec1be567ec01e0636d61fef7b5edc941914477322->leave($__internal_a5831cf2ac6bb66a0b6dab1ec1be567ec01e0636d61fef7b5edc941914477322_prof);

        
        $__internal_41560740597324dfe8b934002944b3180d0a0ae2a64a44a734f13e4b10fe2183->leave($__internal_41560740597324dfe8b934002944b3180d0a0ae2a64a44a734f13e4b10fe2183_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/home/steve/taian/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
