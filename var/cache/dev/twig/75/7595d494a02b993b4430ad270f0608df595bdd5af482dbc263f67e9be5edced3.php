<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_f8a085d3248c7cf81c6c531274aec8bc4ce20ec96fb65c293ffdb48c4fb60497 extends Twig_Template
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
        $__internal_95385f5ea2a5897011ec23df80c3a6299e45e563f35f2296a58cd5ec83a95bc1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95385f5ea2a5897011ec23df80c3a6299e45e563f35f2296a58cd5ec83a95bc1->enter($__internal_95385f5ea2a5897011ec23df80c3a6299e45e563f35f2296a58cd5ec83a95bc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_01cd6a3464e0209f551f4db130d891834d06d3c322760d5fd4a460cf8585e082 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01cd6a3464e0209f551f4db130d891834d06d3c322760d5fd4a460cf8585e082->enter($__internal_01cd6a3464e0209f551f4db130d891834d06d3c322760d5fd4a460cf8585e082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_95385f5ea2a5897011ec23df80c3a6299e45e563f35f2296a58cd5ec83a95bc1->leave($__internal_95385f5ea2a5897011ec23df80c3a6299e45e563f35f2296a58cd5ec83a95bc1_prof);

        
        $__internal_01cd6a3464e0209f551f4db130d891834d06d3c322760d5fd4a460cf8585e082->leave($__internal_01cd6a3464e0209f551f4db130d891834d06d3c322760d5fd4a460cf8585e082_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/home/steve/taian/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
