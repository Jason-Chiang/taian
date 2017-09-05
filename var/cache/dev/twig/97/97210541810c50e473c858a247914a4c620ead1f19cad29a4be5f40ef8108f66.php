<?php

/* base.html.twig */
class __TwigTemplate_531348a6a8761dc431b8bb1bcc8af4b02a0418c3b055d1c631d0a1e3cea1a692 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'sidebar' => array($this, 'block_sidebar'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_efe35e068993562dd32f5b43df036999d74a54557bfc103597a444369ce219f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efe35e068993562dd32f5b43df036999d74a54557bfc103597a444369ce219f8->enter($__internal_efe35e068993562dd32f5b43df036999d74a54557bfc103597a444369ce219f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_2e60974dfe29f9e06b0e43707ae2bf572274726ecd6e095c04688543ac4d56f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e60974dfe29f9e06b0e43707ae2bf572274726ecd6e095c04688543ac4d56f1->enter($__internal_2e60974dfe29f9e06b0e43707ae2bf572274726ecd6e095c04688543ac4d56f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
\t";
        // line 10
        $this->displayBlock('sidebar', $context, $blocks);
        // line 16
        echo "
        ";
        // line 17
        $this->displayBlock('body', $context, $blocks);
        // line 18
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 19
        echo "    </body>
</html>
";
        
        $__internal_efe35e068993562dd32f5b43df036999d74a54557bfc103597a444369ce219f8->leave($__internal_efe35e068993562dd32f5b43df036999d74a54557bfc103597a444369ce219f8_prof);

        
        $__internal_2e60974dfe29f9e06b0e43707ae2bf572274726ecd6e095c04688543ac4d56f1->leave($__internal_2e60974dfe29f9e06b0e43707ae2bf572274726ecd6e095c04688543ac4d56f1_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_69eeca9c3964fa844f374ba915773b957c4231f4604acd52830c157dde5ddb9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69eeca9c3964fa844f374ba915773b957c4231f4604acd52830c157dde5ddb9b->enter($__internal_69eeca9c3964fa844f374ba915773b957c4231f4604acd52830c157dde5ddb9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3e24724910b92f0182bcd5b426008f4948ed10f0a1a4ddcce227da32c81ce789 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e24724910b92f0182bcd5b426008f4948ed10f0a1a4ddcce227da32c81ce789->enter($__internal_3e24724910b92f0182bcd5b426008f4948ed10f0a1a4ddcce227da32c81ce789_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_3e24724910b92f0182bcd5b426008f4948ed10f0a1a4ddcce227da32c81ce789->leave($__internal_3e24724910b92f0182bcd5b426008f4948ed10f0a1a4ddcce227da32c81ce789_prof);

        
        $__internal_69eeca9c3964fa844f374ba915773b957c4231f4604acd52830c157dde5ddb9b->leave($__internal_69eeca9c3964fa844f374ba915773b957c4231f4604acd52830c157dde5ddb9b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2509b954b98d0f15ba50d8e93bc5898ba64f93c13236513a15a8448f7c0782f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2509b954b98d0f15ba50d8e93bc5898ba64f93c13236513a15a8448f7c0782f1->enter($__internal_2509b954b98d0f15ba50d8e93bc5898ba64f93c13236513a15a8448f7c0782f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_3e46663ed4784330964eac021b881e48600ddd7a0db668c15224f8e6a15ab54e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e46663ed4784330964eac021b881e48600ddd7a0db668c15224f8e6a15ab54e->enter($__internal_3e46663ed4784330964eac021b881e48600ddd7a0db668c15224f8e6a15ab54e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_3e46663ed4784330964eac021b881e48600ddd7a0db668c15224f8e6a15ab54e->leave($__internal_3e46663ed4784330964eac021b881e48600ddd7a0db668c15224f8e6a15ab54e_prof);

        
        $__internal_2509b954b98d0f15ba50d8e93bc5898ba64f93c13236513a15a8448f7c0782f1->leave($__internal_2509b954b98d0f15ba50d8e93bc5898ba64f93c13236513a15a8448f7c0782f1_prof);

    }

    // line 10
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_8cb406ec3c834f6c77d3dbffbfdca2162de01519db243695f229b6e15b751a3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cb406ec3c834f6c77d3dbffbfdca2162de01519db243695f229b6e15b751a3d->enter($__internal_8cb406ec3c834f6c77d3dbffbfdca2162de01519db243695f229b6e15b751a3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_08b9e415fa4d42c9c12bb3428a1ba9ffde33979352826b643bc360bf3d4c3fce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08b9e415fa4d42c9c12bb3428a1ba9ffde33979352826b643bc360bf3d4c3fce->enter($__internal_08b9e415fa4d42c9c12bb3428a1ba9ffde33979352826b643bc360bf3d4c3fce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 11
        echo "\t  <ul>
\t\t<li><a href=\"/\">Home</a></li>
\t\t<li><a href=\"/BookOrder\">BookOrder</a></li>
\t  </ul>
\t";
        
        $__internal_08b9e415fa4d42c9c12bb3428a1ba9ffde33979352826b643bc360bf3d4c3fce->leave($__internal_08b9e415fa4d42c9c12bb3428a1ba9ffde33979352826b643bc360bf3d4c3fce_prof);

        
        $__internal_8cb406ec3c834f6c77d3dbffbfdca2162de01519db243695f229b6e15b751a3d->leave($__internal_8cb406ec3c834f6c77d3dbffbfdca2162de01519db243695f229b6e15b751a3d_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_cdd732e9a4d293ab8b98c76dbf9b1a2db74188ad5f138a0162661a0f8e7c932f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdd732e9a4d293ab8b98c76dbf9b1a2db74188ad5f138a0162661a0f8e7c932f->enter($__internal_cdd732e9a4d293ab8b98c76dbf9b1a2db74188ad5f138a0162661a0f8e7c932f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_53125d29e4c6e5c6662250b0368ac57ad62a40fada100c4682843ff42a56bc69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53125d29e4c6e5c6662250b0368ac57ad62a40fada100c4682843ff42a56bc69->enter($__internal_53125d29e4c6e5c6662250b0368ac57ad62a40fada100c4682843ff42a56bc69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_53125d29e4c6e5c6662250b0368ac57ad62a40fada100c4682843ff42a56bc69->leave($__internal_53125d29e4c6e5c6662250b0368ac57ad62a40fada100c4682843ff42a56bc69_prof);

        
        $__internal_cdd732e9a4d293ab8b98c76dbf9b1a2db74188ad5f138a0162661a0f8e7c932f->leave($__internal_cdd732e9a4d293ab8b98c76dbf9b1a2db74188ad5f138a0162661a0f8e7c932f_prof);

    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ce694294e751b0bfd44f6567e70442dcd07874bea1c8fdbcc16b6211d441d27e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce694294e751b0bfd44f6567e70442dcd07874bea1c8fdbcc16b6211d441d27e->enter($__internal_ce694294e751b0bfd44f6567e70442dcd07874bea1c8fdbcc16b6211d441d27e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_d64c782e00a820142c13505ec62e3fe445a190b7d8a3ca3f9ee4b7588014935f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d64c782e00a820142c13505ec62e3fe445a190b7d8a3ca3f9ee4b7588014935f->enter($__internal_d64c782e00a820142c13505ec62e3fe445a190b7d8a3ca3f9ee4b7588014935f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d64c782e00a820142c13505ec62e3fe445a190b7d8a3ca3f9ee4b7588014935f->leave($__internal_d64c782e00a820142c13505ec62e3fe445a190b7d8a3ca3f9ee4b7588014935f_prof);

        
        $__internal_ce694294e751b0bfd44f6567e70442dcd07874bea1c8fdbcc16b6211d441d27e->leave($__internal_ce694294e751b0bfd44f6567e70442dcd07874bea1c8fdbcc16b6211d441d27e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 18,  129 => 17,  115 => 11,  106 => 10,  89 => 6,  71 => 5,  59 => 19,  56 => 18,  54 => 17,  51 => 16,  49 => 10,  42 => 7,  40 => 6,  36 => 5,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
\t{% block sidebar %}
\t  <ul>
\t\t<li><a href=\"/\">Home</a></li>
\t\t<li><a href=\"/BookOrder\">BookOrder</a></li>
\t  </ul>
\t{% endblock %}

        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/steve/taian/app/Resources/views/base.html.twig");
    }
}
