<?php

/* @Eshop\Default\index.html.twig */
class __TwigTemplate_ec28c2197bf7b6ba55284f16e32931bbeb417f3bb386440b2a9efa9780868a83 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Eshop\\Default\\index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8ddebeee309dd7ec9475c0e89329a32ebe45af1387d1e9773b6ad8d5f9d07c93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ddebeee309dd7ec9475c0e89329a32ebe45af1387d1e9773b6ad8d5f9d07c93->enter($__internal_8ddebeee309dd7ec9475c0e89329a32ebe45af1387d1e9773b6ad8d5f9d07c93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Eshop\\Default\\index.html.twig"));

        $__internal_b43c369d83e5bf3f11ef339965dfe534f41487558bad655af8ab110332cdd44b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b43c369d83e5bf3f11ef339965dfe534f41487558bad655af8ab110332cdd44b->enter($__internal_b43c369d83e5bf3f11ef339965dfe534f41487558bad655af8ab110332cdd44b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Eshop\\Default\\index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ddebeee309dd7ec9475c0e89329a32ebe45af1387d1e9773b6ad8d5f9d07c93->leave($__internal_8ddebeee309dd7ec9475c0e89329a32ebe45af1387d1e9773b6ad8d5f9d07c93_prof);

        
        $__internal_b43c369d83e5bf3f11ef339965dfe534f41487558bad655af8ab110332cdd44b->leave($__internal_b43c369d83e5bf3f11ef339965dfe534f41487558bad655af8ab110332cdd44b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9250e02b2b8d140cf8049d70d4ee7b24491a8f21f62b7cc878b5b371ada733aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9250e02b2b8d140cf8049d70d4ee7b24491a8f21f62b7cc878b5b371ada733aa->enter($__internal_9250e02b2b8d140cf8049d70d4ee7b24491a8f21f62b7cc878b5b371ada733aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_63df2179840aa7121df1a740e8bec7977389ac3207bcdb31cae85742481f654b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63df2179840aa7121df1a740e8bec7977389ac3207bcdb31cae85742481f654b->enter($__internal_63df2179840aa7121df1a740e8bec7977389ac3207bcdb31cae85742481f654b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Produkty ";
        
        $__internal_63df2179840aa7121df1a740e8bec7977389ac3207bcdb31cae85742481f654b->leave($__internal_63df2179840aa7121df1a740e8bec7977389ac3207bcdb31cae85742481f654b_prof);

        
        $__internal_9250e02b2b8d140cf8049d70d4ee7b24491a8f21f62b7cc878b5b371ada733aa->leave($__internal_9250e02b2b8d140cf8049d70d4ee7b24491a8f21f62b7cc878b5b371ada733aa_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_7190e1f1d8b858aff1883e8322dd63d1d3748c1d56eaa43a41cc414c284934e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7190e1f1d8b858aff1883e8322dd63d1d3748c1d56eaa43a41cc414c284934e9->enter($__internal_7190e1f1d8b858aff1883e8322dd63d1d3748c1d56eaa43a41cc414c284934e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6cea86dfd2105fa80b89344b5e0a2833017ad91a4872f30ed12c0c46bb5af798 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cea86dfd2105fa80b89344b5e0a2833017ad91a4872f30ed12c0c46bb5af798->enter($__internal_6cea86dfd2105fa80b89344b5e0a2833017ad91a4872f30ed12c0c46bb5af798_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<table class=\"table\">
    <thead>
        <th>Název</th>
        <th>Popis</th>
        <th>Kategorie</th>
        <th>Cena</th>
    </thead>
    <tbody>
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? $this->getContext($context, "products")));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 15
            echo "            <tr>
                <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", array()), "html", null, true);
            echo "</td>
                <td> ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "description", array()), "html", null, true);
            echo " </td>
                <td> ";
            // line 18
            if ( !(null === $this->getAttribute($context["product"], "category", array()))) {
                // line 19
                echo "                    ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["product"], "category", array()), "name", array()), "html", null, true);
                echo "
                    ";
            } else {
                // line 21
                echo "                        Nemá kategorii
                    ";
            }
            // line 23
            echo "                </td>
                <td> ";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "price", array()), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "    </tbody>
</table>
";
        
        $__internal_6cea86dfd2105fa80b89344b5e0a2833017ad91a4872f30ed12c0c46bb5af798->leave($__internal_6cea86dfd2105fa80b89344b5e0a2833017ad91a4872f30ed12c0c46bb5af798_prof);

        
        $__internal_7190e1f1d8b858aff1883e8322dd63d1d3748c1d56eaa43a41cc414c284934e9->leave($__internal_7190e1f1d8b858aff1883e8322dd63d1d3748c1d56eaa43a41cc414c284934e9_prof);

    }

    public function getTemplateName()
    {
        return "@Eshop\\Default\\index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 27,  108 => 24,  105 => 23,  101 => 21,  95 => 19,  93 => 18,  89 => 17,  85 => 16,  82 => 15,  78 => 14,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %} 

{% block title %} Produkty {% endblock %}

{% block body %}
<table class=\"table\">
    <thead>
        <th>Název</th>
        <th>Popis</th>
        <th>Kategorie</th>
        <th>Cena</th>
    </thead>
    <tbody>
        {% for product in products%}
            <tr>
                <td>{{ product.name }}</td>
                <td> {{product.description}} </td>
                <td> {% if product.category is not null %}
                    {{product.category.name}}
                    {% else %}
                        Nemá kategorii
                    {% endif %}
                </td>
                <td> {{ product.price}}</td>
            </tr>
        {% endfor %}
    </tbody>
</table>
{% endblock %}", "@Eshop\\Default\\index.html.twig", "C:\\xampp\\htdocs\\Eshop\\sps-twa\\src\\EshopBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
