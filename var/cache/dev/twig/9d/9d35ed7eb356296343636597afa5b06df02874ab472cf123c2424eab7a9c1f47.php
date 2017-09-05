<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_5da579eba9c2fce74b7cc2cb5a7c52fadbf2464846ad930cb7de12ac84241ea4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_57c68a71da62fe07dfc03d2cf63d83b9f7afdb4481c2c060198d5555d7c0fe44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57c68a71da62fe07dfc03d2cf63d83b9f7afdb4481c2c060198d5555d7c0fe44->enter($__internal_57c68a71da62fe07dfc03d2cf63d83b9f7afdb4481c2c060198d5555d7c0fe44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_caaf4826746289feb6e1e63e51df679e32b10b5629eceb226ce3979136015abc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_caaf4826746289feb6e1e63e51df679e32b10b5629eceb226ce3979136015abc->enter($__internal_caaf4826746289feb6e1e63e51df679e32b10b5629eceb226ce3979136015abc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57c68a71da62fe07dfc03d2cf63d83b9f7afdb4481c2c060198d5555d7c0fe44->leave($__internal_57c68a71da62fe07dfc03d2cf63d83b9f7afdb4481c2c060198d5555d7c0fe44_prof);

        
        $__internal_caaf4826746289feb6e1e63e51df679e32b10b5629eceb226ce3979136015abc->leave($__internal_caaf4826746289feb6e1e63e51df679e32b10b5629eceb226ce3979136015abc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_38f1dcd30d72acc44e7e33998e1d1da7faa2041a19f615393c0588e36f680275 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38f1dcd30d72acc44e7e33998e1d1da7faa2041a19f615393c0588e36f680275->enter($__internal_38f1dcd30d72acc44e7e33998e1d1da7faa2041a19f615393c0588e36f680275_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1691fdc2b7744a11388881d53fafcc5de624b152dd546c767e48a06e101c351d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1691fdc2b7744a11388881d53fafcc5de624b152dd546c767e48a06e101c351d->enter($__internal_1691fdc2b7744a11388881d53fafcc5de624b152dd546c767e48a06e101c351d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_1691fdc2b7744a11388881d53fafcc5de624b152dd546c767e48a06e101c351d->leave($__internal_1691fdc2b7744a11388881d53fafcc5de624b152dd546c767e48a06e101c351d_prof);

        
        $__internal_38f1dcd30d72acc44e7e33998e1d1da7faa2041a19f615393c0588e36f680275->leave($__internal_38f1dcd30d72acc44e7e33998e1d1da7faa2041a19f615393c0588e36f680275_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_7095a8a9c056e6d3bfd2346576c1af93ce0304399b5ad695724cdfd3c6cee959 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7095a8a9c056e6d3bfd2346576c1af93ce0304399b5ad695724cdfd3c6cee959->enter($__internal_7095a8a9c056e6d3bfd2346576c1af93ce0304399b5ad695724cdfd3c6cee959_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_dcceed38a3d0ab59d75f68238e988c7810c2461b399bf2011a3dcf42530f5a6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcceed38a3d0ab59d75f68238e988c7810c2461b399bf2011a3dcf42530f5a6b->enter($__internal_dcceed38a3d0ab59d75f68238e988c7810c2461b399bf2011a3dcf42530f5a6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_dcceed38a3d0ab59d75f68238e988c7810c2461b399bf2011a3dcf42530f5a6b->leave($__internal_dcceed38a3d0ab59d75f68238e988c7810c2461b399bf2011a3dcf42530f5a6b_prof);

        
        $__internal_7095a8a9c056e6d3bfd2346576c1af93ce0304399b5ad695724cdfd3c6cee959->leave($__internal_7095a8a9c056e6d3bfd2346576c1af93ce0304399b5ad695724cdfd3c6cee959_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_50fff4e334b8242f4b29426f7a6b4b1776f1a4a090c3078f4b612e5e4bf0e028 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50fff4e334b8242f4b29426f7a6b4b1776f1a4a090c3078f4b612e5e4bf0e028->enter($__internal_50fff4e334b8242f4b29426f7a6b4b1776f1a4a090c3078f4b612e5e4bf0e028_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0346b575a29ccdd7713b26dd3d0736ffe62fc6a5d34f2f86eaaaa6d919186375 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0346b575a29ccdd7713b26dd3d0736ffe62fc6a5d34f2f86eaaaa6d919186375->enter($__internal_0346b575a29ccdd7713b26dd3d0736ffe62fc6a5d34f2f86eaaaa6d919186375_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_0346b575a29ccdd7713b26dd3d0736ffe62fc6a5d34f2f86eaaaa6d919186375->leave($__internal_0346b575a29ccdd7713b26dd3d0736ffe62fc6a5d34f2f86eaaaa6d919186375_prof);

        
        $__internal_50fff4e334b8242f4b29426f7a6b4b1776f1a4a090c3078f4b612e5e4bf0e028->leave($__internal_50fff4e334b8242f4b29426f7a6b4b1776f1a4a090c3078f4b612e5e4bf0e028_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/home/steve/taian/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
