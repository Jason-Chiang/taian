<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_4ea153802fb2f63a31717ba5258b8d711f4762fd6eead3836a041a72cbe60a99 extends Twig_Template
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
        $__internal_a161cff82a8749083d0a71df2fbe43dd0608090aa64d8c785dab297724e1ce09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a161cff82a8749083d0a71df2fbe43dd0608090aa64d8c785dab297724e1ce09->enter($__internal_a161cff82a8749083d0a71df2fbe43dd0608090aa64d8c785dab297724e1ce09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_c2f235f4bea19ead7db72da1c2ce1345cf7ad3cbd85cfa4f4a2d5379a373cae1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2f235f4bea19ead7db72da1c2ce1345cf7ad3cbd85cfa4f4a2d5379a373cae1->enter($__internal_c2f235f4bea19ead7db72da1c2ce1345cf7ad3cbd85cfa4f4a2d5379a373cae1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_a161cff82a8749083d0a71df2fbe43dd0608090aa64d8c785dab297724e1ce09->leave($__internal_a161cff82a8749083d0a71df2fbe43dd0608090aa64d8c785dab297724e1ce09_prof);

        
        $__internal_c2f235f4bea19ead7db72da1c2ce1345cf7ad3cbd85cfa4f4a2d5379a373cae1->leave($__internal_c2f235f4bea19ead7db72da1c2ce1345cf7ad3cbd85cfa4f4a2d5379a373cae1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/home/steve/taian/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
