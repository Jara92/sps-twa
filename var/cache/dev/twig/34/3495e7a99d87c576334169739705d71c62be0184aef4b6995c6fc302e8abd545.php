<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_3749c747f49256713b11d7c3bc93dd51d20ae64c5ce1c08ec46258e123e2ff9b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0916b27f3577c24b722f1535e9c4d93a90664fed20bbde11c5216d34283a3149 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0916b27f3577c24b722f1535e9c4d93a90664fed20bbde11c5216d34283a3149->enter($__internal_0916b27f3577c24b722f1535e9c4d93a90664fed20bbde11c5216d34283a3149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_c654bbc9e37fc11d6366d2f25a89f3a71dfa43d3555d0d8f8c28edd6da4172f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c654bbc9e37fc11d6366d2f25a89f3a71dfa43d3555d0d8f8c28edd6da4172f1->enter($__internal_c654bbc9e37fc11d6366d2f25a89f3a71dfa43d3555d0d8f8c28edd6da4172f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0916b27f3577c24b722f1535e9c4d93a90664fed20bbde11c5216d34283a3149->leave($__internal_0916b27f3577c24b722f1535e9c4d93a90664fed20bbde11c5216d34283a3149_prof);

        
        $__internal_c654bbc9e37fc11d6366d2f25a89f3a71dfa43d3555d0d8f8c28edd6da4172f1->leave($__internal_c654bbc9e37fc11d6366d2f25a89f3a71dfa43d3555d0d8f8c28edd6da4172f1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_eaa4d4d7413bdbdbdd71ce144764acd8ced2b9c0a2f62ebfcc869c90aee0f6f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eaa4d4d7413bdbdbdd71ce144764acd8ced2b9c0a2f62ebfcc869c90aee0f6f2->enter($__internal_eaa4d4d7413bdbdbdd71ce144764acd8ced2b9c0a2f62ebfcc869c90aee0f6f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d680a3055011e0f5f6656833391b3e2f4a59d9290ac29fbc717537ec5ebb288b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d680a3055011e0f5f6656833391b3e2f4a59d9290ac29fbc717537ec5ebb288b->enter($__internal_d680a3055011e0f5f6656833391b3e2f4a59d9290ac29fbc717537ec5ebb288b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_d680a3055011e0f5f6656833391b3e2f4a59d9290ac29fbc717537ec5ebb288b->leave($__internal_d680a3055011e0f5f6656833391b3e2f4a59d9290ac29fbc717537ec5ebb288b_prof);

        
        $__internal_eaa4d4d7413bdbdbdd71ce144764acd8ced2b9c0a2f62ebfcc869c90aee0f6f2->leave($__internal_eaa4d4d7413bdbdbdd71ce144764acd8ced2b9c0a2f62ebfcc869c90aee0f6f2_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\xampp\\htdocs\\shop\\sps-twa\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
