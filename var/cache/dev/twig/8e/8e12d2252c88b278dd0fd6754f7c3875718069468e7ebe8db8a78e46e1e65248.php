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
        $__internal_8007b0025f0f13c05191f6c4f8bb2db293d465891f9f88068e53a6aca67052a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8007b0025f0f13c05191f6c4f8bb2db293d465891f9f88068e53a6aca67052a2->enter($__internal_8007b0025f0f13c05191f6c4f8bb2db293d465891f9f88068e53a6aca67052a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_63c4ac0b6cfec3f62103c0a8eaaa7c57e4d436068467f8cfd7734fb3ca227e6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63c4ac0b6cfec3f62103c0a8eaaa7c57e4d436068467f8cfd7734fb3ca227e6c->enter($__internal_63c4ac0b6cfec3f62103c0a8eaaa7c57e4d436068467f8cfd7734fb3ca227e6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8007b0025f0f13c05191f6c4f8bb2db293d465891f9f88068e53a6aca67052a2->leave($__internal_8007b0025f0f13c05191f6c4f8bb2db293d465891f9f88068e53a6aca67052a2_prof);

        
        $__internal_63c4ac0b6cfec3f62103c0a8eaaa7c57e4d436068467f8cfd7734fb3ca227e6c->leave($__internal_63c4ac0b6cfec3f62103c0a8eaaa7c57e4d436068467f8cfd7734fb3ca227e6c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_11e814615aecd998b6b018dc6c6ce6c87a105a39c8e963d626c3307f4d31dfda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11e814615aecd998b6b018dc6c6ce6c87a105a39c8e963d626c3307f4d31dfda->enter($__internal_11e814615aecd998b6b018dc6c6ce6c87a105a39c8e963d626c3307f4d31dfda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c88c3df1b2da98db2264976a62e70a15cdc8d845b9fc5732d6f3c853a4b63e73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c88c3df1b2da98db2264976a62e70a15cdc8d845b9fc5732d6f3c853a4b63e73->enter($__internal_c88c3df1b2da98db2264976a62e70a15cdc8d845b9fc5732d6f3c853a4b63e73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_c88c3df1b2da98db2264976a62e70a15cdc8d845b9fc5732d6f3c853a4b63e73->leave($__internal_c88c3df1b2da98db2264976a62e70a15cdc8d845b9fc5732d6f3c853a4b63e73_prof);

        
        $__internal_11e814615aecd998b6b018dc6c6ce6c87a105a39c8e963d626c3307f4d31dfda->leave($__internal_11e814615aecd998b6b018dc6c6ce6c87a105a39c8e963d626c3307f4d31dfda_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2eb44968d819a5138d6fd80c93f26b6a9a13d7b3d99fe290a3b409d265dbdf5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2eb44968d819a5138d6fd80c93f26b6a9a13d7b3d99fe290a3b409d265dbdf5e->enter($__internal_2eb44968d819a5138d6fd80c93f26b6a9a13d7b3d99fe290a3b409d265dbdf5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_2cf805057c3f9b7c59d38748ea276b796598f3f23d98c2ea94eb8d304b55809a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cf805057c3f9b7c59d38748ea276b796598f3f23d98c2ea94eb8d304b55809a->enter($__internal_2cf805057c3f9b7c59d38748ea276b796598f3f23d98c2ea94eb8d304b55809a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_2cf805057c3f9b7c59d38748ea276b796598f3f23d98c2ea94eb8d304b55809a->leave($__internal_2cf805057c3f9b7c59d38748ea276b796598f3f23d98c2ea94eb8d304b55809a_prof);

        
        $__internal_2eb44968d819a5138d6fd80c93f26b6a9a13d7b3d99fe290a3b409d265dbdf5e->leave($__internal_2eb44968d819a5138d6fd80c93f26b6a9a13d7b3d99fe290a3b409d265dbdf5e_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f7c7acd686c52431859e4263583f11aecd929f39afcd5de947f321c70135bc07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7c7acd686c52431859e4263583f11aecd929f39afcd5de947f321c70135bc07->enter($__internal_f7c7acd686c52431859e4263583f11aecd929f39afcd5de947f321c70135bc07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ade9412f02f30d64e6f5be5b96c662fd1f540256407b0d629ea63927dca6c4be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ade9412f02f30d64e6f5be5b96c662fd1f540256407b0d629ea63927dca6c4be->enter($__internal_ade9412f02f30d64e6f5be5b96c662fd1f540256407b0d629ea63927dca6c4be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_ade9412f02f30d64e6f5be5b96c662fd1f540256407b0d629ea63927dca6c4be->leave($__internal_ade9412f02f30d64e6f5be5b96c662fd1f540256407b0d629ea63927dca6c4be_prof);

        
        $__internal_f7c7acd686c52431859e4263583f11aecd929f39afcd5de947f321c70135bc07->leave($__internal_f7c7acd686c52431859e4263583f11aecd929f39afcd5de947f321c70135bc07_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "C:\\xampp\\htdocs\\shop\\sps-twa\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
