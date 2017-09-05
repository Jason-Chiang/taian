<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_21984f4a8951b17bfd332ebd59ed066e1af0d89e2d7acf65441fd3cb190371ae extends Twig_Template
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
        $__internal_7dd02e3b98f24eb5dbb9203fe57de70e4f6280a5bea5fe7f2b9984c0e5837a55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7dd02e3b98f24eb5dbb9203fe57de70e4f6280a5bea5fe7f2b9984c0e5837a55->enter($__internal_7dd02e3b98f24eb5dbb9203fe57de70e4f6280a5bea5fe7f2b9984c0e5837a55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_66dfdd1c564689635a260991517f665aeb6f53976b80daa4476bc5b8e6b4836d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66dfdd1c564689635a260991517f665aeb6f53976b80daa4476bc5b8e6b4836d->enter($__internal_66dfdd1c564689635a260991517f665aeb6f53976b80daa4476bc5b8e6b4836d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_7dd02e3b98f24eb5dbb9203fe57de70e4f6280a5bea5fe7f2b9984c0e5837a55->leave($__internal_7dd02e3b98f24eb5dbb9203fe57de70e4f6280a5bea5fe7f2b9984c0e5837a55_prof);

        
        $__internal_66dfdd1c564689635a260991517f665aeb6f53976b80daa4476bc5b8e6b4836d->leave($__internal_66dfdd1c564689635a260991517f665aeb6f53976b80daa4476bc5b8e6b4836d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/home/steve/taian/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
