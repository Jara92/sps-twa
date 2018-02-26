<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_ec6bff7741b18b15a86dc7d343f10e9f94613581b5b56ec66786388d00e0c8f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
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
        $__internal_640a428e8e00e2da522e68bc0fbe2bfafdd19cd718092cab823c221ded1143e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_640a428e8e00e2da522e68bc0fbe2bfafdd19cd718092cab823c221ded1143e1->enter($__internal_640a428e8e00e2da522e68bc0fbe2bfafdd19cd718092cab823c221ded1143e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_1cd0b43e2f9d5f82ed840d95ee7e765b653f7da6d52515762b95bae3f7346c3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cd0b43e2f9d5f82ed840d95ee7e765b653f7da6d52515762b95bae3f7346c3e->enter($__internal_1cd0b43e2f9d5f82ed840d95ee7e765b653f7da6d52515762b95bae3f7346c3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_640a428e8e00e2da522e68bc0fbe2bfafdd19cd718092cab823c221ded1143e1->leave($__internal_640a428e8e00e2da522e68bc0fbe2bfafdd19cd718092cab823c221ded1143e1_prof);

        
        $__internal_1cd0b43e2f9d5f82ed840d95ee7e765b653f7da6d52515762b95bae3f7346c3e->leave($__internal_1cd0b43e2f9d5f82ed840d95ee7e765b653f7da6d52515762b95bae3f7346c3e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e174ba550d491156a492126379a0869bdfd70a17f4ff2bee219a6d268304380f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e174ba550d491156a492126379a0869bdfd70a17f4ff2bee219a6d268304380f->enter($__internal_e174ba550d491156a492126379a0869bdfd70a17f4ff2bee219a6d268304380f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_52b2a430c598da525cce44c3232ed52e7d7f50448373c271d4f28d0a9778ed26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52b2a430c598da525cce44c3232ed52e7d7f50448373c271d4f28d0a9778ed26->enter($__internal_52b2a430c598da525cce44c3232ed52e7d7f50448373c271d4f28d0a9778ed26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_52b2a430c598da525cce44c3232ed52e7d7f50448373c271d4f28d0a9778ed26->leave($__internal_52b2a430c598da525cce44c3232ed52e7d7f50448373c271d4f28d0a9778ed26_prof);

        
        $__internal_e174ba550d491156a492126379a0869bdfd70a17f4ff2bee219a6d268304380f->leave($__internal_e174ba550d491156a492126379a0869bdfd70a17f4ff2bee219a6d268304380f_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_57f5f321a6c8f2f355d1a6467d006d1f514ca5ecbdc3c04c1fb652201bbb5973 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57f5f321a6c8f2f355d1a6467d006d1f514ca5ecbdc3c04c1fb652201bbb5973->enter($__internal_57f5f321a6c8f2f355d1a6467d006d1f514ca5ecbdc3c04c1fb652201bbb5973_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7b7df15b70a5287dd9664b6d7ad04feb860f2d9d4c135aca9ce0f999f4fd7fbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b7df15b70a5287dd9664b6d7ad04feb860f2d9d4c135aca9ce0f999f4fd7fbc->enter($__internal_7b7df15b70a5287dd9664b6d7ad04feb860f2d9d4c135aca9ce0f999f4fd7fbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7b7df15b70a5287dd9664b6d7ad04feb860f2d9d4c135aca9ce0f999f4fd7fbc->leave($__internal_7b7df15b70a5287dd9664b6d7ad04feb860f2d9d4c135aca9ce0f999f4fd7fbc_prof);

        
        $__internal_57f5f321a6c8f2f355d1a6467d006d1f514ca5ecbdc3c04c1fb652201bbb5973->leave($__internal_57f5f321a6c8f2f355d1a6467d006d1f514ca5ecbdc3c04c1fb652201bbb5973_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_54bf13429477dee8945a4dd0f2bdb893aeff77e7d9c43c6e6063ccd98376b351 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54bf13429477dee8945a4dd0f2bdb893aeff77e7d9c43c6e6063ccd98376b351->enter($__internal_54bf13429477dee8945a4dd0f2bdb893aeff77e7d9c43c6e6063ccd98376b351_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0b5eb7259e062fa364408a8e37c7a5bf245d2cff503f1ca769e28c2e4553b496 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b5eb7259e062fa364408a8e37c7a5bf245d2cff503f1ca769e28c2e4553b496->enter($__internal_0b5eb7259e062fa364408a8e37c7a5bf245d2cff503f1ca769e28c2e4553b496_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_0b5eb7259e062fa364408a8e37c7a5bf245d2cff503f1ca769e28c2e4553b496->leave($__internal_0b5eb7259e062fa364408a8e37c7a5bf245d2cff503f1ca769e28c2e4553b496_prof);

        
        $__internal_54bf13429477dee8945a4dd0f2bdb893aeff77e7d9c43c6e6063ccd98376b351->leave($__internal_54bf13429477dee8945a4dd0f2bdb893aeff77e7d9c43c6e6063ccd98376b351_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
", "@Twig/Exception/exception_full.html.twig", "C:\\xampp\\htdocs\\shop\\sps-twa\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
