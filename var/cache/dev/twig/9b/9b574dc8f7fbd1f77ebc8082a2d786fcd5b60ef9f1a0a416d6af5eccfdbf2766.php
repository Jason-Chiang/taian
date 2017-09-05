<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_82cd0419bff6d1104bd8c0c350a5f8b25a9af252914652d41a16da61ea8c5eed extends Twig_Template
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
        $__internal_bdfe1b7735dac5b68c899078359856ab1c543fe1ec30720ef91b439f68cd2e64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdfe1b7735dac5b68c899078359856ab1c543fe1ec30720ef91b439f68cd2e64->enter($__internal_bdfe1b7735dac5b68c899078359856ab1c543fe1ec30720ef91b439f68cd2e64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_4d2fcd3ae282366217f0f51e4951decb1c5b0ae13adfc291695f75958a821869 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d2fcd3ae282366217f0f51e4951decb1c5b0ae13adfc291695f75958a821869->enter($__internal_4d2fcd3ae282366217f0f51e4951decb1c5b0ae13adfc291695f75958a821869_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_bdfe1b7735dac5b68c899078359856ab1c543fe1ec30720ef91b439f68cd2e64->leave($__internal_bdfe1b7735dac5b68c899078359856ab1c543fe1ec30720ef91b439f68cd2e64_prof);

        
        $__internal_4d2fcd3ae282366217f0f51e4951decb1c5b0ae13adfc291695f75958a821869->leave($__internal_4d2fcd3ae282366217f0f51e4951decb1c5b0ae13adfc291695f75958a821869_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/home/steve/taian/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
