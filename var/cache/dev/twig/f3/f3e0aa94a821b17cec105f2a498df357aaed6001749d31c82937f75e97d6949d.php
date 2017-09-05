<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_7c7f53e99ff4c27eadeeb4d14b459dae8a6be88504c50a7dc6b59e634c16df19 extends Twig_Template
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
        $__internal_ec48ef748cfea6ce216887a8053b5a2d0492af4534b08129d7a87f9053bc951b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec48ef748cfea6ce216887a8053b5a2d0492af4534b08129d7a87f9053bc951b->enter($__internal_ec48ef748cfea6ce216887a8053b5a2d0492af4534b08129d7a87f9053bc951b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_6cb9f57f73f182fdcaaae65995a5049a7778c21898042949a02052caa7beab2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cb9f57f73f182fdcaaae65995a5049a7778c21898042949a02052caa7beab2c->enter($__internal_6cb9f57f73f182fdcaaae65995a5049a7778c21898042949a02052caa7beab2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_ec48ef748cfea6ce216887a8053b5a2d0492af4534b08129d7a87f9053bc951b->leave($__internal_ec48ef748cfea6ce216887a8053b5a2d0492af4534b08129d7a87f9053bc951b_prof);

        
        $__internal_6cb9f57f73f182fdcaaae65995a5049a7778c21898042949a02052caa7beab2c->leave($__internal_6cb9f57f73f182fdcaaae65995a5049a7778c21898042949a02052caa7beab2c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/home/steve/taian/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
