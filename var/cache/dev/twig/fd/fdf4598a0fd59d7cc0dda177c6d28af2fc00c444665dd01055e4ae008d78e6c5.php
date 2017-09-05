<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_e63ab71bc5140bf4e65ded5f1b892b37eaf890dc4963102251c5e62895a8974d extends Twig_Template
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
        $__internal_557a9c77ba6bdfbcebf363cbd89547425603c6290ef9df408573cb9aee046426 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_557a9c77ba6bdfbcebf363cbd89547425603c6290ef9df408573cb9aee046426->enter($__internal_557a9c77ba6bdfbcebf363cbd89547425603c6290ef9df408573cb9aee046426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_7762500f32a86eb86fc89c25578fd00c8931efbfb19496959a76eed25f1f3a30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7762500f32a86eb86fc89c25578fd00c8931efbfb19496959a76eed25f1f3a30->enter($__internal_7762500f32a86eb86fc89c25578fd00c8931efbfb19496959a76eed25f1f3a30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_557a9c77ba6bdfbcebf363cbd89547425603c6290ef9df408573cb9aee046426->leave($__internal_557a9c77ba6bdfbcebf363cbd89547425603c6290ef9df408573cb9aee046426_prof);

        
        $__internal_7762500f32a86eb86fc89c25578fd00c8931efbfb19496959a76eed25f1f3a30->leave($__internal_7762500f32a86eb86fc89c25578fd00c8931efbfb19496959a76eed25f1f3a30_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/home/steve/taian/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
