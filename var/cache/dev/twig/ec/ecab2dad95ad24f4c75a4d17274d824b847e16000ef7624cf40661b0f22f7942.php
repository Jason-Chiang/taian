<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_77931d0b87f3290bf2ce9e448d723dc00ab7fe900db14d27638c61aaefc9a165 extends Twig_Template
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
        $__internal_71414162595b4ef7c7150d3707853275792d043a479e9bed7f35f2e0cc11d054 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71414162595b4ef7c7150d3707853275792d043a479e9bed7f35f2e0cc11d054->enter($__internal_71414162595b4ef7c7150d3707853275792d043a479e9bed7f35f2e0cc11d054_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_6ab158bee6dc3e99793b67a2e8b97401949db8e05ec8685386975fe686572364 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ab158bee6dc3e99793b67a2e8b97401949db8e05ec8685386975fe686572364->enter($__internal_6ab158bee6dc3e99793b67a2e8b97401949db8e05ec8685386975fe686572364_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_71414162595b4ef7c7150d3707853275792d043a479e9bed7f35f2e0cc11d054->leave($__internal_71414162595b4ef7c7150d3707853275792d043a479e9bed7f35f2e0cc11d054_prof);

        
        $__internal_6ab158bee6dc3e99793b67a2e8b97401949db8e05ec8685386975fe686572364->leave($__internal_6ab158bee6dc3e99793b67a2e8b97401949db8e05ec8685386975fe686572364_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/home/steve/taian/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
