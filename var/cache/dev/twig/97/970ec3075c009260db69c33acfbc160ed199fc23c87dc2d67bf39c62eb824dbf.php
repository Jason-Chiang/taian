<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_b38b3cb074ae6432c33b2a338e4e4ec6a9a098906f5c1a4a4c8416a75dc568cb extends Twig_Template
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
        $__internal_3d1c1384174d14976c5710501bccddcad3fb1a8aad6d3086aa60543440d541bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d1c1384174d14976c5710501bccddcad3fb1a8aad6d3086aa60543440d541bb->enter($__internal_3d1c1384174d14976c5710501bccddcad3fb1a8aad6d3086aa60543440d541bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_df1c0812570d73f80137ea18285251773fb530484dcc9477d9752057cd898ba7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df1c0812570d73f80137ea18285251773fb530484dcc9477d9752057cd898ba7->enter($__internal_df1c0812570d73f80137ea18285251773fb530484dcc9477d9752057cd898ba7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_3d1c1384174d14976c5710501bccddcad3fb1a8aad6d3086aa60543440d541bb->leave($__internal_3d1c1384174d14976c5710501bccddcad3fb1a8aad6d3086aa60543440d541bb_prof);

        
        $__internal_df1c0812570d73f80137ea18285251773fb530484dcc9477d9752057cd898ba7->leave($__internal_df1c0812570d73f80137ea18285251773fb530484dcc9477d9752057cd898ba7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/home/steve/taian/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
