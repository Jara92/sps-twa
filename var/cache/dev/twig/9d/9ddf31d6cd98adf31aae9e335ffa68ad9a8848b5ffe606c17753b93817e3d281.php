<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_704e012d6d33d6eb9dde2044ae5787141640c48ca6d3c58baf387020732fd61a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_94204dfcea8bf1ef3bdecfd11ea466b854546a269080e304a26adeaaf5338445 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94204dfcea8bf1ef3bdecfd11ea466b854546a269080e304a26adeaaf5338445->enter($__internal_94204dfcea8bf1ef3bdecfd11ea466b854546a269080e304a26adeaaf5338445_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_d444e54a8b9c05a21bb25507c5ec3e191d5cdf889cbb28f6b59a65b209ce9191 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d444e54a8b9c05a21bb25507c5ec3e191d5cdf889cbb28f6b59a65b209ce9191->enter($__internal_d444e54a8b9c05a21bb25507c5ec3e191d5cdf889cbb28f6b59a65b209ce9191_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_94204dfcea8bf1ef3bdecfd11ea466b854546a269080e304a26adeaaf5338445->leave($__internal_94204dfcea8bf1ef3bdecfd11ea466b854546a269080e304a26adeaaf5338445_prof);

        
        $__internal_d444e54a8b9c05a21bb25507c5ec3e191d5cdf889cbb28f6b59a65b209ce9191->leave($__internal_d444e54a8b9c05a21bb25507c5ec3e191d5cdf889cbb28f6b59a65b209ce9191_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_60da9dd23d522b7dceef670a0673d6afd513b5034244d77c52ff4f416ec6b873 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60da9dd23d522b7dceef670a0673d6afd513b5034244d77c52ff4f416ec6b873->enter($__internal_60da9dd23d522b7dceef670a0673d6afd513b5034244d77c52ff4f416ec6b873_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b8328e9273578af54e7402affe70c4270a091ea5d338f684edf5de27d0eb248b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8328e9273578af54e7402affe70c4270a091ea5d338f684edf5de27d0eb248b->enter($__internal_b8328e9273578af54e7402affe70c4270a091ea5d338f684edf5de27d0eb248b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b8328e9273578af54e7402affe70c4270a091ea5d338f684edf5de27d0eb248b->leave($__internal_b8328e9273578af54e7402affe70c4270a091ea5d338f684edf5de27d0eb248b_prof);

        
        $__internal_60da9dd23d522b7dceef670a0673d6afd513b5034244d77c52ff4f416ec6b873->leave($__internal_60da9dd23d522b7dceef670a0673d6afd513b5034244d77c52ff4f416ec6b873_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_83e62ee7f55692c3bc9bd778ca4fdbb847353ec6cb5b7cac7a4a1e2c4196bd88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83e62ee7f55692c3bc9bd778ca4fdbb847353ec6cb5b7cac7a4a1e2c4196bd88->enter($__internal_83e62ee7f55692c3bc9bd778ca4fdbb847353ec6cb5b7cac7a4a1e2c4196bd88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_63f6ebf0b6cf3dd1289311ef83b4df78809bcab8ff1a0aa54acf0b272c74077a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63f6ebf0b6cf3dd1289311ef83b4df78809bcab8ff1a0aa54acf0b272c74077a->enter($__internal_63f6ebf0b6cf3dd1289311ef83b4df78809bcab8ff1a0aa54acf0b272c74077a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_63f6ebf0b6cf3dd1289311ef83b4df78809bcab8ff1a0aa54acf0b272c74077a->leave($__internal_63f6ebf0b6cf3dd1289311ef83b4df78809bcab8ff1a0aa54acf0b272c74077a_prof);

        
        $__internal_83e62ee7f55692c3bc9bd778ca4fdbb847353ec6cb5b7cac7a4a1e2c4196bd88->leave($__internal_83e62ee7f55692c3bc9bd778ca4fdbb847353ec6cb5b7cac7a4a1e2c4196bd88_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a83837fc7e2d0a7c5dc47f745e3eaa87eb7301a966d3ddf36af7465db15ee791 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a83837fc7e2d0a7c5dc47f745e3eaa87eb7301a966d3ddf36af7465db15ee791->enter($__internal_a83837fc7e2d0a7c5dc47f745e3eaa87eb7301a966d3ddf36af7465db15ee791_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b5eb2599e94be945ed963b85dfb983b1e9fe65a13467a946c924a6e42d28efcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5eb2599e94be945ed963b85dfb983b1e9fe65a13467a946c924a6e42d28efcd->enter($__internal_b5eb2599e94be945ed963b85dfb983b1e9fe65a13467a946c924a6e42d28efcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b5eb2599e94be945ed963b85dfb983b1e9fe65a13467a946c924a6e42d28efcd->leave($__internal_b5eb2599e94be945ed963b85dfb983b1e9fe65a13467a946c924a6e42d28efcd_prof);

        
        $__internal_a83837fc7e2d0a7c5dc47f745e3eaa87eb7301a966d3ddf36af7465db15ee791->leave($__internal_a83837fc7e2d0a7c5dc47f745e3eaa87eb7301a966d3ddf36af7465db15ee791_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\shop\\sps-twa\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
