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
        $__internal_38db59a109eba9ad6fdc09a4312dbcbc5c1df96d999a9d3cdbe192644bfe9158 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38db59a109eba9ad6fdc09a4312dbcbc5c1df96d999a9d3cdbe192644bfe9158->enter($__internal_38db59a109eba9ad6fdc09a4312dbcbc5c1df96d999a9d3cdbe192644bfe9158_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_da18e2268e4f7c4a05ac3c6e66368be0ec307712eb63ace3bd9e30231daebf34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da18e2268e4f7c4a05ac3c6e66368be0ec307712eb63ace3bd9e30231daebf34->enter($__internal_da18e2268e4f7c4a05ac3c6e66368be0ec307712eb63ace3bd9e30231daebf34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38db59a109eba9ad6fdc09a4312dbcbc5c1df96d999a9d3cdbe192644bfe9158->leave($__internal_38db59a109eba9ad6fdc09a4312dbcbc5c1df96d999a9d3cdbe192644bfe9158_prof);

        
        $__internal_da18e2268e4f7c4a05ac3c6e66368be0ec307712eb63ace3bd9e30231daebf34->leave($__internal_da18e2268e4f7c4a05ac3c6e66368be0ec307712eb63ace3bd9e30231daebf34_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b81d393c502eefe8a26a7c48228e21bce2d9efd62d828f85f4aa821c528ff410 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b81d393c502eefe8a26a7c48228e21bce2d9efd62d828f85f4aa821c528ff410->enter($__internal_b81d393c502eefe8a26a7c48228e21bce2d9efd62d828f85f4aa821c528ff410_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_8049a202913e22385b1a3ed4b0d00657784c7661e9231150e5821da40368830f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8049a202913e22385b1a3ed4b0d00657784c7661e9231150e5821da40368830f->enter($__internal_8049a202913e22385b1a3ed4b0d00657784c7661e9231150e5821da40368830f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_8049a202913e22385b1a3ed4b0d00657784c7661e9231150e5821da40368830f->leave($__internal_8049a202913e22385b1a3ed4b0d00657784c7661e9231150e5821da40368830f_prof);

        
        $__internal_b81d393c502eefe8a26a7c48228e21bce2d9efd62d828f85f4aa821c528ff410->leave($__internal_b81d393c502eefe8a26a7c48228e21bce2d9efd62d828f85f4aa821c528ff410_prof);

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
