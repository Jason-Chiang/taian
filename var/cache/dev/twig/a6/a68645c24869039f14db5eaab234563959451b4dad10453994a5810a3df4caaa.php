<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_e5ea341fd93021e1cb8faaed45d42e861f05936ac9456db638c8116102076508 extends Twig_Template
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
        $__internal_f7d3441f32626517f2be178c478e73706de9e7d7abe8ce5105c8a8ac72688e4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7d3441f32626517f2be178c478e73706de9e7d7abe8ce5105c8a8ac72688e4a->enter($__internal_f7d3441f32626517f2be178c478e73706de9e7d7abe8ce5105c8a8ac72688e4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_cbfdb6aab505ae776df3bb46d7d2ae46b165797a15975af4d91a5f3d0993ec13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbfdb6aab505ae776df3bb46d7d2ae46b165797a15975af4d91a5f3d0993ec13->enter($__internal_cbfdb6aab505ae776df3bb46d7d2ae46b165797a15975af4d91a5f3d0993ec13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_f7d3441f32626517f2be178c478e73706de9e7d7abe8ce5105c8a8ac72688e4a->leave($__internal_f7d3441f32626517f2be178c478e73706de9e7d7abe8ce5105c8a8ac72688e4a_prof);

        
        $__internal_cbfdb6aab505ae776df3bb46d7d2ae46b165797a15975af4d91a5f3d0993ec13->leave($__internal_cbfdb6aab505ae776df3bb46d7d2ae46b165797a15975af4d91a5f3d0993ec13_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/home/steve/taian/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
