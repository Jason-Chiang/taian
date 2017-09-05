<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_db96a8f091279c025410fc40de6a9ebe10f0cab5df6dd010de7682ede22fae32 extends Twig_Template
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
        $__internal_df0cfeee7b2c550b609f7561cfe9955adc3fa5061ff6737786f83ba88cb3f47d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df0cfeee7b2c550b609f7561cfe9955adc3fa5061ff6737786f83ba88cb3f47d->enter($__internal_df0cfeee7b2c550b609f7561cfe9955adc3fa5061ff6737786f83ba88cb3f47d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_dd9b99c0121d333461e65b8ce1b4d32e0e0906232d8aaffaf9faf59c4102b25d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd9b99c0121d333461e65b8ce1b4d32e0e0906232d8aaffaf9faf59c4102b25d->enter($__internal_dd9b99c0121d333461e65b8ce1b4d32e0e0906232d8aaffaf9faf59c4102b25d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_df0cfeee7b2c550b609f7561cfe9955adc3fa5061ff6737786f83ba88cb3f47d->leave($__internal_df0cfeee7b2c550b609f7561cfe9955adc3fa5061ff6737786f83ba88cb3f47d_prof);

        
        $__internal_dd9b99c0121d333461e65b8ce1b4d32e0e0906232d8aaffaf9faf59c4102b25d->leave($__internal_dd9b99c0121d333461e65b8ce1b4d32e0e0906232d8aaffaf9faf59c4102b25d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/home/steve/taian/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
