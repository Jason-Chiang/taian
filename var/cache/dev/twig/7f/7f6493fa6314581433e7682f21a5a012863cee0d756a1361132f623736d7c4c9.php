<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_865b261147461edbb07e6cb537b9f434304fa99ffba59684ea518efff1f0cafe extends Twig_Template
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
        $__internal_954ab52cf6e1e2193b57a55630eb85deb3cfb7edbe7a10c2c3d7387fd8a54b44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_954ab52cf6e1e2193b57a55630eb85deb3cfb7edbe7a10c2c3d7387fd8a54b44->enter($__internal_954ab52cf6e1e2193b57a55630eb85deb3cfb7edbe7a10c2c3d7387fd8a54b44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_b2757f3b0ab39ccc42e297ef04752e3ffd69cceadab62e0b0cf6b9dfa6638d91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2757f3b0ab39ccc42e297ef04752e3ffd69cceadab62e0b0cf6b9dfa6638d91->enter($__internal_b2757f3b0ab39ccc42e297ef04752e3ffd69cceadab62e0b0cf6b9dfa6638d91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_954ab52cf6e1e2193b57a55630eb85deb3cfb7edbe7a10c2c3d7387fd8a54b44->leave($__internal_954ab52cf6e1e2193b57a55630eb85deb3cfb7edbe7a10c2c3d7387fd8a54b44_prof);

        
        $__internal_b2757f3b0ab39ccc42e297ef04752e3ffd69cceadab62e0b0cf6b9dfa6638d91->leave($__internal_b2757f3b0ab39ccc42e297ef04752e3ffd69cceadab62e0b0cf6b9dfa6638d91_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/home/steve/taian/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
