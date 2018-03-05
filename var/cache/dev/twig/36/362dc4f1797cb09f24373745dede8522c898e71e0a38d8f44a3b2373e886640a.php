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
        $__internal_9ce7c84710632dd1b026d6c4cdfc1118fc5c8de8ef6f1bc75b80184bb575b686 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ce7c84710632dd1b026d6c4cdfc1118fc5c8de8ef6f1bc75b80184bb575b686->enter($__internal_9ce7c84710632dd1b026d6c4cdfc1118fc5c8de8ef6f1bc75b80184bb575b686_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_ddf2aedac1eedd4f77f4c630400a4670b92fe00d3f4fd276b5578083f2c2a9e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddf2aedac1eedd4f77f4c630400a4670b92fe00d3f4fd276b5578083f2c2a9e5->enter($__internal_ddf2aedac1eedd4f77f4c630400a4670b92fe00d3f4fd276b5578083f2c2a9e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ce7c84710632dd1b026d6c4cdfc1118fc5c8de8ef6f1bc75b80184bb575b686->leave($__internal_9ce7c84710632dd1b026d6c4cdfc1118fc5c8de8ef6f1bc75b80184bb575b686_prof);

        
        $__internal_ddf2aedac1eedd4f77f4c630400a4670b92fe00d3f4fd276b5578083f2c2a9e5->leave($__internal_ddf2aedac1eedd4f77f4c630400a4670b92fe00d3f4fd276b5578083f2c2a9e5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f30afee17f20cc4a06043104fb5a8c4d916c5a1336c93af2af3c1929096805b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f30afee17f20cc4a06043104fb5a8c4d916c5a1336c93af2af3c1929096805b9->enter($__internal_f30afee17f20cc4a06043104fb5a8c4d916c5a1336c93af2af3c1929096805b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a06ceb31d57019c876c1d8c938d39527b7cdc9511e37cdf184e372cf22583a39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a06ceb31d57019c876c1d8c938d39527b7cdc9511e37cdf184e372cf22583a39->enter($__internal_a06ceb31d57019c876c1d8c938d39527b7cdc9511e37cdf184e372cf22583a39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_a06ceb31d57019c876c1d8c938d39527b7cdc9511e37cdf184e372cf22583a39->leave($__internal_a06ceb31d57019c876c1d8c938d39527b7cdc9511e37cdf184e372cf22583a39_prof);

        
        $__internal_f30afee17f20cc4a06043104fb5a8c4d916c5a1336c93af2af3c1929096805b9->leave($__internal_f30afee17f20cc4a06043104fb5a8c4d916c5a1336c93af2af3c1929096805b9_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_8e86ced7922de481af1ca32686d93a86f3ea2edd33c2b105213a8c5783386491 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e86ced7922de481af1ca32686d93a86f3ea2edd33c2b105213a8c5783386491->enter($__internal_8e86ced7922de481af1ca32686d93a86f3ea2edd33c2b105213a8c5783386491_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f859b10c84fe7fef367eb67bed405eb96828dcdc668432b729cad68fe3b2907d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f859b10c84fe7fef367eb67bed405eb96828dcdc668432b729cad68fe3b2907d->enter($__internal_f859b10c84fe7fef367eb67bed405eb96828dcdc668432b729cad68fe3b2907d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f859b10c84fe7fef367eb67bed405eb96828dcdc668432b729cad68fe3b2907d->leave($__internal_f859b10c84fe7fef367eb67bed405eb96828dcdc668432b729cad68fe3b2907d_prof);

        
        $__internal_8e86ced7922de481af1ca32686d93a86f3ea2edd33c2b105213a8c5783386491->leave($__internal_8e86ced7922de481af1ca32686d93a86f3ea2edd33c2b105213a8c5783386491_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_f30e9b8a91949927b0c7d0b018ea3a8a864519786f281fc8ed9362e5c18590eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f30e9b8a91949927b0c7d0b018ea3a8a864519786f281fc8ed9362e5c18590eb->enter($__internal_f30e9b8a91949927b0c7d0b018ea3a8a864519786f281fc8ed9362e5c18590eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cf5bce32d4c3a0d30abcde3d96234f5d875c065a206902db3d9621c3a597a2d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf5bce32d4c3a0d30abcde3d96234f5d875c065a206902db3d9621c3a597a2d7->enter($__internal_cf5bce32d4c3a0d30abcde3d96234f5d875c065a206902db3d9621c3a597a2d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_cf5bce32d4c3a0d30abcde3d96234f5d875c065a206902db3d9621c3a597a2d7->leave($__internal_cf5bce32d4c3a0d30abcde3d96234f5d875c065a206902db3d9621c3a597a2d7_prof);

        
        $__internal_f30e9b8a91949927b0c7d0b018ea3a8a864519786f281fc8ed9362e5c18590eb->leave($__internal_f30e9b8a91949927b0c7d0b018ea3a8a864519786f281fc8ed9362e5c18590eb_prof);

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
