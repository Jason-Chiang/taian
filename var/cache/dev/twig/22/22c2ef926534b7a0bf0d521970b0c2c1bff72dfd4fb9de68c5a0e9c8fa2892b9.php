<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_c0fc1d0d27e75a46adee4db2ae1b80d2d1133efb1aa43ae0a770ed2607f3ac43 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_603933eca1ef3609117ed654e33d55d6d785062d243f06064e31629af9a53a25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_603933eca1ef3609117ed654e33d55d6d785062d243f06064e31629af9a53a25->enter($__internal_603933eca1ef3609117ed654e33d55d6d785062d243f06064e31629af9a53a25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_81f5d4e4a17e9775ce0b647722772d255e0b6a75c077e8e1cdff220733d98307 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81f5d4e4a17e9775ce0b647722772d255e0b6a75c077e8e1cdff220733d98307->enter($__internal_81f5d4e4a17e9775ce0b647722772d255e0b6a75c077e8e1cdff220733d98307_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_603933eca1ef3609117ed654e33d55d6d785062d243f06064e31629af9a53a25->leave($__internal_603933eca1ef3609117ed654e33d55d6d785062d243f06064e31629af9a53a25_prof);

        
        $__internal_81f5d4e4a17e9775ce0b647722772d255e0b6a75c077e8e1cdff220733d98307->leave($__internal_81f5d4e4a17e9775ce0b647722772d255e0b6a75c077e8e1cdff220733d98307_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_9010f5e7ccc0f8020ebb3fd2eb4ce3748459e24ecf19534c6ebaea241770915d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9010f5e7ccc0f8020ebb3fd2eb4ce3748459e24ecf19534c6ebaea241770915d->enter($__internal_9010f5e7ccc0f8020ebb3fd2eb4ce3748459e24ecf19534c6ebaea241770915d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0058349f009bdee2335e71311c4f5479c5371c29cd38f8966cd6ced7d46b6bfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0058349f009bdee2335e71311c4f5479c5371c29cd38f8966cd6ced7d46b6bfe->enter($__internal_0058349f009bdee2335e71311c4f5479c5371c29cd38f8966cd6ced7d46b6bfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_0058349f009bdee2335e71311c4f5479c5371c29cd38f8966cd6ced7d46b6bfe->leave($__internal_0058349f009bdee2335e71311c4f5479c5371c29cd38f8966cd6ced7d46b6bfe_prof);

        
        $__internal_9010f5e7ccc0f8020ebb3fd2eb4ce3748459e24ecf19534c6ebaea241770915d->leave($__internal_9010f5e7ccc0f8020ebb3fd2eb4ce3748459e24ecf19534c6ebaea241770915d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/home/steve/taian/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
