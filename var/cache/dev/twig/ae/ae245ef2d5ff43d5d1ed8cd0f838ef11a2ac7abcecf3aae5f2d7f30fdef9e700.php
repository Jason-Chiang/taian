<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_b7079b2b0352f85d4017863b0e64a9c35565045ecc8c1c1c25feaea16bdfedef extends Twig_Template
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
        $__internal_8d2cde3b52aaeac704f4ab7f592a16533cb0e6128c625b93a52809e1e5dabcc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d2cde3b52aaeac704f4ab7f592a16533cb0e6128c625b93a52809e1e5dabcc5->enter($__internal_8d2cde3b52aaeac704f4ab7f592a16533cb0e6128c625b93a52809e1e5dabcc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_61e391dfe53669908641a17c31a22c35b0c1d68b302290f5bdfb6ac80975ce5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61e391dfe53669908641a17c31a22c35b0c1d68b302290f5bdfb6ac80975ce5d->enter($__internal_61e391dfe53669908641a17c31a22c35b0c1d68b302290f5bdfb6ac80975ce5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_8d2cde3b52aaeac704f4ab7f592a16533cb0e6128c625b93a52809e1e5dabcc5->leave($__internal_8d2cde3b52aaeac704f4ab7f592a16533cb0e6128c625b93a52809e1e5dabcc5_prof);

        
        $__internal_61e391dfe53669908641a17c31a22c35b0c1d68b302290f5bdfb6ac80975ce5d->leave($__internal_61e391dfe53669908641a17c31a22c35b0c1d68b302290f5bdfb6ac80975ce5d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/home/steve/taian/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
