<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_2697a0a61a2dc96ac053fe80eb82e27923f19f0161161d0fa5f2aa5303e900bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_15836970aaad79475e53d7d7a6c610159deaabab8f6ef50b25cbdf8aa3953f06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15836970aaad79475e53d7d7a6c610159deaabab8f6ef50b25cbdf8aa3953f06->enter($__internal_15836970aaad79475e53d7d7a6c610159deaabab8f6ef50b25cbdf8aa3953f06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_c96aa9510d5d2549540c2f82280f1dad0219162f7f22f15cc36af5baae6a4135 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c96aa9510d5d2549540c2f82280f1dad0219162f7f22f15cc36af5baae6a4135->enter($__internal_c96aa9510d5d2549540c2f82280f1dad0219162f7f22f15cc36af5baae6a4135_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_15836970aaad79475e53d7d7a6c610159deaabab8f6ef50b25cbdf8aa3953f06->leave($__internal_15836970aaad79475e53d7d7a6c610159deaabab8f6ef50b25cbdf8aa3953f06_prof);

        
        $__internal_c96aa9510d5d2549540c2f82280f1dad0219162f7f22f15cc36af5baae6a4135->leave($__internal_c96aa9510d5d2549540c2f82280f1dad0219162f7f22f15cc36af5baae6a4135_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e8a1a9de8e2eec264aa38484bf96a0c8108d137dac26e41555bbfe3eee6f954c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8a1a9de8e2eec264aa38484bf96a0c8108d137dac26e41555bbfe3eee6f954c->enter($__internal_e8a1a9de8e2eec264aa38484bf96a0c8108d137dac26e41555bbfe3eee6f954c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_219a0e851bbf2a077677f8eae53d139fb6ab744b998d84bd74522cb96a0bbe1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_219a0e851bbf2a077677f8eae53d139fb6ab744b998d84bd74522cb96a0bbe1b->enter($__internal_219a0e851bbf2a077677f8eae53d139fb6ab744b998d84bd74522cb96a0bbe1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_219a0e851bbf2a077677f8eae53d139fb6ab744b998d84bd74522cb96a0bbe1b->leave($__internal_219a0e851bbf2a077677f8eae53d139fb6ab744b998d84bd74522cb96a0bbe1b_prof);

        
        $__internal_e8a1a9de8e2eec264aa38484bf96a0c8108d137dac26e41555bbfe3eee6f954c->leave($__internal_e8a1a9de8e2eec264aa38484bf96a0c8108d137dac26e41555bbfe3eee6f954c_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_dba94ffd198fb17e885a50beb013faf9f48a7682fb2aa7e6d5bd16ac098be98c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dba94ffd198fb17e885a50beb013faf9f48a7682fb2aa7e6d5bd16ac098be98c->enter($__internal_dba94ffd198fb17e885a50beb013faf9f48a7682fb2aa7e6d5bd16ac098be98c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_7c7d5021d74ab04bd2fd24c33e51c3ce508a6827671d3666fd3839d4f92f1ef8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c7d5021d74ab04bd2fd24c33e51c3ce508a6827671d3666fd3839d4f92f1ef8->enter($__internal_7c7d5021d74ab04bd2fd24c33e51c3ce508a6827671d3666fd3839d4f92f1ef8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_7c7d5021d74ab04bd2fd24c33e51c3ce508a6827671d3666fd3839d4f92f1ef8->leave($__internal_7c7d5021d74ab04bd2fd24c33e51c3ce508a6827671d3666fd3839d4f92f1ef8_prof);

        
        $__internal_dba94ffd198fb17e885a50beb013faf9f48a7682fb2aa7e6d5bd16ac098be98c->leave($__internal_dba94ffd198fb17e885a50beb013faf9f48a7682fb2aa7e6d5bd16ac098be98c_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c9f30d9b74a3ee7452c87406db909f0fc07dbac28d2135d720a90d23246879ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9f30d9b74a3ee7452c87406db909f0fc07dbac28d2135d720a90d23246879ae->enter($__internal_c9f30d9b74a3ee7452c87406db909f0fc07dbac28d2135d720a90d23246879ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_23b6331fffa28b01841c7db7f32a73e281d7d48d58b9baea59f593181b450b2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23b6331fffa28b01841c7db7f32a73e281d7d48d58b9baea59f593181b450b2c->enter($__internal_23b6331fffa28b01841c7db7f32a73e281d7d48d58b9baea59f593181b450b2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_23b6331fffa28b01841c7db7f32a73e281d7d48d58b9baea59f593181b450b2c->leave($__internal_23b6331fffa28b01841c7db7f32a73e281d7d48d58b9baea59f593181b450b2c_prof);

        
        $__internal_c9f30d9b74a3ee7452c87406db909f0fc07dbac28d2135d720a90d23246879ae->leave($__internal_c9f30d9b74a3ee7452c87406db909f0fc07dbac28d2135d720a90d23246879ae_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\xampp\\htdocs\\Eshop\\sps-twa\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
