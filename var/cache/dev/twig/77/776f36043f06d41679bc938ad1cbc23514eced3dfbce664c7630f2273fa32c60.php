<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_4d679d65d7c9606bd53e9526204bfe95d99cf6850372b81600c4c10e616d373a extends Twig_Template
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
        $__internal_5f7c9119ab0635174ccddc7659b90db9dc4260213cd2a98491c90b481a94810d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f7c9119ab0635174ccddc7659b90db9dc4260213cd2a98491c90b481a94810d->enter($__internal_5f7c9119ab0635174ccddc7659b90db9dc4260213cd2a98491c90b481a94810d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_3f4ad543eba6fb94461b6f609b348c36b444fa635f2e9f53418bd7a055c75353 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f4ad543eba6fb94461b6f609b348c36b444fa635f2e9f53418bd7a055c75353->enter($__internal_3f4ad543eba6fb94461b6f609b348c36b444fa635f2e9f53418bd7a055c75353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_5f7c9119ab0635174ccddc7659b90db9dc4260213cd2a98491c90b481a94810d->leave($__internal_5f7c9119ab0635174ccddc7659b90db9dc4260213cd2a98491c90b481a94810d_prof);

        
        $__internal_3f4ad543eba6fb94461b6f609b348c36b444fa635f2e9f53418bd7a055c75353->leave($__internal_3f4ad543eba6fb94461b6f609b348c36b444fa635f2e9f53418bd7a055c75353_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/home/steve/taian/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
