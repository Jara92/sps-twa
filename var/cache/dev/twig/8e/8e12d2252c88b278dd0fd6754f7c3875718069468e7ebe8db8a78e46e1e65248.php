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
        $__internal_2942574045c66b6309bcc7905335e2aecb0437c2a4feba8c201d2d3e361a8217 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2942574045c66b6309bcc7905335e2aecb0437c2a4feba8c201d2d3e361a8217->enter($__internal_2942574045c66b6309bcc7905335e2aecb0437c2a4feba8c201d2d3e361a8217_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_eec883ca359915b5d169a4b7f7159ea8d59a078c4c5332d6fdd629b4f892ae87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eec883ca359915b5d169a4b7f7159ea8d59a078c4c5332d6fdd629b4f892ae87->enter($__internal_eec883ca359915b5d169a4b7f7159ea8d59a078c4c5332d6fdd629b4f892ae87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2942574045c66b6309bcc7905335e2aecb0437c2a4feba8c201d2d3e361a8217->leave($__internal_2942574045c66b6309bcc7905335e2aecb0437c2a4feba8c201d2d3e361a8217_prof);

        
        $__internal_eec883ca359915b5d169a4b7f7159ea8d59a078c4c5332d6fdd629b4f892ae87->leave($__internal_eec883ca359915b5d169a4b7f7159ea8d59a078c4c5332d6fdd629b4f892ae87_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7eec48b7afd52673ebeb5348036ddbd62e75c039f6a1c7c6f6d6e3de8fbc139c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7eec48b7afd52673ebeb5348036ddbd62e75c039f6a1c7c6f6d6e3de8fbc139c->enter($__internal_7eec48b7afd52673ebeb5348036ddbd62e75c039f6a1c7c6f6d6e3de8fbc139c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_442249f6ec7822c5285b5bacd8d6b4f16efc07a3552f348d51286fd50f5be161 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_442249f6ec7822c5285b5bacd8d6b4f16efc07a3552f348d51286fd50f5be161->enter($__internal_442249f6ec7822c5285b5bacd8d6b4f16efc07a3552f348d51286fd50f5be161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_442249f6ec7822c5285b5bacd8d6b4f16efc07a3552f348d51286fd50f5be161->leave($__internal_442249f6ec7822c5285b5bacd8d6b4f16efc07a3552f348d51286fd50f5be161_prof);

        
        $__internal_7eec48b7afd52673ebeb5348036ddbd62e75c039f6a1c7c6f6d6e3de8fbc139c->leave($__internal_7eec48b7afd52673ebeb5348036ddbd62e75c039f6a1c7c6f6d6e3de8fbc139c_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bf1053ffe942c4cd4adb7558806cbec87f0c2809df323b312679f47897c7de37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf1053ffe942c4cd4adb7558806cbec87f0c2809df323b312679f47897c7de37->enter($__internal_bf1053ffe942c4cd4adb7558806cbec87f0c2809df323b312679f47897c7de37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6b7666621fd8505a0dc5ce74b1faa8e1a62fbac877e3e9862ef9057c4eb3034d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b7666621fd8505a0dc5ce74b1faa8e1a62fbac877e3e9862ef9057c4eb3034d->enter($__internal_6b7666621fd8505a0dc5ce74b1faa8e1a62fbac877e3e9862ef9057c4eb3034d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_6b7666621fd8505a0dc5ce74b1faa8e1a62fbac877e3e9862ef9057c4eb3034d->leave($__internal_6b7666621fd8505a0dc5ce74b1faa8e1a62fbac877e3e9862ef9057c4eb3034d_prof);

        
        $__internal_bf1053ffe942c4cd4adb7558806cbec87f0c2809df323b312679f47897c7de37->leave($__internal_bf1053ffe942c4cd4adb7558806cbec87f0c2809df323b312679f47897c7de37_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_46168ca0b447227c23a46341ebd39d4eec89a0b5d34dee427296811de3913870 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46168ca0b447227c23a46341ebd39d4eec89a0b5d34dee427296811de3913870->enter($__internal_46168ca0b447227c23a46341ebd39d4eec89a0b5d34dee427296811de3913870_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_17cb0951f51296d9d6d1d50f4e37de30268d56195c5b9e4e6646edbd366e2b43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17cb0951f51296d9d6d1d50f4e37de30268d56195c5b9e4e6646edbd366e2b43->enter($__internal_17cb0951f51296d9d6d1d50f4e37de30268d56195c5b9e4e6646edbd366e2b43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_17cb0951f51296d9d6d1d50f4e37de30268d56195c5b9e4e6646edbd366e2b43->leave($__internal_17cb0951f51296d9d6d1d50f4e37de30268d56195c5b9e4e6646edbd366e2b43_prof);

        
        $__internal_46168ca0b447227c23a46341ebd39d4eec89a0b5d34dee427296811de3913870->leave($__internal_46168ca0b447227c23a46341ebd39d4eec89a0b5d34dee427296811de3913870_prof);

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
