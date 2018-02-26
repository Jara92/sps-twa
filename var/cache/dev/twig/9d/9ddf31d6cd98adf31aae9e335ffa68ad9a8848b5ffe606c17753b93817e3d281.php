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
        $__internal_c9612fc4aff202f866f595ecd90206606012f8ac450e326fa6249c12340b4d56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9612fc4aff202f866f595ecd90206606012f8ac450e326fa6249c12340b4d56->enter($__internal_c9612fc4aff202f866f595ecd90206606012f8ac450e326fa6249c12340b4d56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_77863ae27c40044d5693b3adafbf169ce4c2fab0f3e97e1545bfbcb5acac6cae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77863ae27c40044d5693b3adafbf169ce4c2fab0f3e97e1545bfbcb5acac6cae->enter($__internal_77863ae27c40044d5693b3adafbf169ce4c2fab0f3e97e1545bfbcb5acac6cae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c9612fc4aff202f866f595ecd90206606012f8ac450e326fa6249c12340b4d56->leave($__internal_c9612fc4aff202f866f595ecd90206606012f8ac450e326fa6249c12340b4d56_prof);

        
        $__internal_77863ae27c40044d5693b3adafbf169ce4c2fab0f3e97e1545bfbcb5acac6cae->leave($__internal_77863ae27c40044d5693b3adafbf169ce4c2fab0f3e97e1545bfbcb5acac6cae_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1925cc30f7d116f38cf0974a3454cb7400d7cbf9a3df76aeaa9ba3b74bf9c995 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1925cc30f7d116f38cf0974a3454cb7400d7cbf9a3df76aeaa9ba3b74bf9c995->enter($__internal_1925cc30f7d116f38cf0974a3454cb7400d7cbf9a3df76aeaa9ba3b74bf9c995_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_51d4d730ddd52d97534308f6ab428bc2359728340f4b00277be468b6ba89b1b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51d4d730ddd52d97534308f6ab428bc2359728340f4b00277be468b6ba89b1b7->enter($__internal_51d4d730ddd52d97534308f6ab428bc2359728340f4b00277be468b6ba89b1b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_51d4d730ddd52d97534308f6ab428bc2359728340f4b00277be468b6ba89b1b7->leave($__internal_51d4d730ddd52d97534308f6ab428bc2359728340f4b00277be468b6ba89b1b7_prof);

        
        $__internal_1925cc30f7d116f38cf0974a3454cb7400d7cbf9a3df76aeaa9ba3b74bf9c995->leave($__internal_1925cc30f7d116f38cf0974a3454cb7400d7cbf9a3df76aeaa9ba3b74bf9c995_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3d9006a4deae87d640a5bb4d00c2dfaf158741e46fb00b4dd5eaa8dd85d7d907 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d9006a4deae87d640a5bb4d00c2dfaf158741e46fb00b4dd5eaa8dd85d7d907->enter($__internal_3d9006a4deae87d640a5bb4d00c2dfaf158741e46fb00b4dd5eaa8dd85d7d907_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a1124f856f9596629ec7f3d899d8bcbde0b77da15fe1a548f2ee89aa23bef59c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1124f856f9596629ec7f3d899d8bcbde0b77da15fe1a548f2ee89aa23bef59c->enter($__internal_a1124f856f9596629ec7f3d899d8bcbde0b77da15fe1a548f2ee89aa23bef59c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a1124f856f9596629ec7f3d899d8bcbde0b77da15fe1a548f2ee89aa23bef59c->leave($__internal_a1124f856f9596629ec7f3d899d8bcbde0b77da15fe1a548f2ee89aa23bef59c_prof);

        
        $__internal_3d9006a4deae87d640a5bb4d00c2dfaf158741e46fb00b4dd5eaa8dd85d7d907->leave($__internal_3d9006a4deae87d640a5bb4d00c2dfaf158741e46fb00b4dd5eaa8dd85d7d907_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b35a2dfe908ea68408f9ed278e4bf5051ee73d65c8fe0e78d4d19056cf440510 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b35a2dfe908ea68408f9ed278e4bf5051ee73d65c8fe0e78d4d19056cf440510->enter($__internal_b35a2dfe908ea68408f9ed278e4bf5051ee73d65c8fe0e78d4d19056cf440510_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4763451ef9e212217383ac5505067bca425ac98aacdc3fe31e49fa0bd6b4ebc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4763451ef9e212217383ac5505067bca425ac98aacdc3fe31e49fa0bd6b4ebc5->enter($__internal_4763451ef9e212217383ac5505067bca425ac98aacdc3fe31e49fa0bd6b4ebc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4763451ef9e212217383ac5505067bca425ac98aacdc3fe31e49fa0bd6b4ebc5->leave($__internal_4763451ef9e212217383ac5505067bca425ac98aacdc3fe31e49fa0bd6b4ebc5_prof);

        
        $__internal_b35a2dfe908ea68408f9ed278e4bf5051ee73d65c8fe0e78d4d19056cf440510->leave($__internal_b35a2dfe908ea68408f9ed278e4bf5051ee73d65c8fe0e78d4d19056cf440510_prof);

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
