<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_190fc1e024ff033f630558cb6439664e44a9d23e72cd4cad5c53de1e142c533a extends Twig_Template
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
        $__internal_18f7e511962e19648ea040e9e1f504baff1c8f3707445a60918f0011f73e4ec4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18f7e511962e19648ea040e9e1f504baff1c8f3707445a60918f0011f73e4ec4->enter($__internal_18f7e511962e19648ea040e9e1f504baff1c8f3707445a60918f0011f73e4ec4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_7f31423afb3099c7ca488b1403e4541fb041f111799b06b5be11fe8353491062 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f31423afb3099c7ca488b1403e4541fb041f111799b06b5be11fe8353491062->enter($__internal_7f31423afb3099c7ca488b1403e4541fb041f111799b06b5be11fe8353491062_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_18f7e511962e19648ea040e9e1f504baff1c8f3707445a60918f0011f73e4ec4->leave($__internal_18f7e511962e19648ea040e9e1f504baff1c8f3707445a60918f0011f73e4ec4_prof);

        
        $__internal_7f31423afb3099c7ca488b1403e4541fb041f111799b06b5be11fe8353491062->leave($__internal_7f31423afb3099c7ca488b1403e4541fb041f111799b06b5be11fe8353491062_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/home/steve/taian/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
