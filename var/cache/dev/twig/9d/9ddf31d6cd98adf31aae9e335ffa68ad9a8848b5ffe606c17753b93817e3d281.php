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
        $__internal_2bf37a490040ab4ef83f519c61656f5cab9b4418bd851c37fd874e0011b2ae89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bf37a490040ab4ef83f519c61656f5cab9b4418bd851c37fd874e0011b2ae89->enter($__internal_2bf37a490040ab4ef83f519c61656f5cab9b4418bd851c37fd874e0011b2ae89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_18e682262c3e086e320220879c61d80f021b14cafd9d0e6cf7e3438ff4661d0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18e682262c3e086e320220879c61d80f021b14cafd9d0e6cf7e3438ff4661d0c->enter($__internal_18e682262c3e086e320220879c61d80f021b14cafd9d0e6cf7e3438ff4661d0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2bf37a490040ab4ef83f519c61656f5cab9b4418bd851c37fd874e0011b2ae89->leave($__internal_2bf37a490040ab4ef83f519c61656f5cab9b4418bd851c37fd874e0011b2ae89_prof);

        
        $__internal_18e682262c3e086e320220879c61d80f021b14cafd9d0e6cf7e3438ff4661d0c->leave($__internal_18e682262c3e086e320220879c61d80f021b14cafd9d0e6cf7e3438ff4661d0c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_01fbbc1f54a361d4554deaa19e8b93abd71098e66411e12d8bd122a5640da9a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01fbbc1f54a361d4554deaa19e8b93abd71098e66411e12d8bd122a5640da9a2->enter($__internal_01fbbc1f54a361d4554deaa19e8b93abd71098e66411e12d8bd122a5640da9a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_10ca7401c7f6b611b34b1de0f0cc48ea3ee2ae98d8f1e0f3c751c16067f14386 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10ca7401c7f6b611b34b1de0f0cc48ea3ee2ae98d8f1e0f3c751c16067f14386->enter($__internal_10ca7401c7f6b611b34b1de0f0cc48ea3ee2ae98d8f1e0f3c751c16067f14386_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_10ca7401c7f6b611b34b1de0f0cc48ea3ee2ae98d8f1e0f3c751c16067f14386->leave($__internal_10ca7401c7f6b611b34b1de0f0cc48ea3ee2ae98d8f1e0f3c751c16067f14386_prof);

        
        $__internal_01fbbc1f54a361d4554deaa19e8b93abd71098e66411e12d8bd122a5640da9a2->leave($__internal_01fbbc1f54a361d4554deaa19e8b93abd71098e66411e12d8bd122a5640da9a2_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_19df1b60bdbc337679bf45f15c6cb9fc31b5ae1feae3b47e37e3fff21313397d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19df1b60bdbc337679bf45f15c6cb9fc31b5ae1feae3b47e37e3fff21313397d->enter($__internal_19df1b60bdbc337679bf45f15c6cb9fc31b5ae1feae3b47e37e3fff21313397d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5dc89575ae3b935a57a7c710823fed7269c6ce39c872a765b203f976fe4e08b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dc89575ae3b935a57a7c710823fed7269c6ce39c872a765b203f976fe4e08b6->enter($__internal_5dc89575ae3b935a57a7c710823fed7269c6ce39c872a765b203f976fe4e08b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5dc89575ae3b935a57a7c710823fed7269c6ce39c872a765b203f976fe4e08b6->leave($__internal_5dc89575ae3b935a57a7c710823fed7269c6ce39c872a765b203f976fe4e08b6_prof);

        
        $__internal_19df1b60bdbc337679bf45f15c6cb9fc31b5ae1feae3b47e37e3fff21313397d->leave($__internal_19df1b60bdbc337679bf45f15c6cb9fc31b5ae1feae3b47e37e3fff21313397d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b22fa7064e065b325e48b81416f0c854be7f864373e64b3b4a25b7767d781301 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b22fa7064e065b325e48b81416f0c854be7f864373e64b3b4a25b7767d781301->enter($__internal_b22fa7064e065b325e48b81416f0c854be7f864373e64b3b4a25b7767d781301_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6a6dab48666e57bd37270b02c53b8f8f1d80255c80c49323aca004c2d0ec69a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a6dab48666e57bd37270b02c53b8f8f1d80255c80c49323aca004c2d0ec69a1->enter($__internal_6a6dab48666e57bd37270b02c53b8f8f1d80255c80c49323aca004c2d0ec69a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6a6dab48666e57bd37270b02c53b8f8f1d80255c80c49323aca004c2d0ec69a1->leave($__internal_6a6dab48666e57bd37270b02c53b8f8f1d80255c80c49323aca004c2d0ec69a1_prof);

        
        $__internal_b22fa7064e065b325e48b81416f0c854be7f864373e64b3b4a25b7767d781301->leave($__internal_b22fa7064e065b325e48b81416f0c854be7f864373e64b3b4a25b7767d781301_prof);

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
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\Eshop\\sps-twa\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
