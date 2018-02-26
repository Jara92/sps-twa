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
        $__internal_0e7057aa928e1f5871fc746f694f8dbd244133220e6edd72f2156eac2ff3b32d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e7057aa928e1f5871fc746f694f8dbd244133220e6edd72f2156eac2ff3b32d->enter($__internal_0e7057aa928e1f5871fc746f694f8dbd244133220e6edd72f2156eac2ff3b32d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Eshop\\Default\\index.html.twig"));

        $__internal_1298edb2e5596dc5348e5cf80e34c517cf74dd1a26758d42b47633cad0ac0ff3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1298edb2e5596dc5348e5cf80e34c517cf74dd1a26758d42b47633cad0ac0ff3->enter($__internal_1298edb2e5596dc5348e5cf80e34c517cf74dd1a26758d42b47633cad0ac0ff3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Eshop\\Default\\index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e7057aa928e1f5871fc746f694f8dbd244133220e6edd72f2156eac2ff3b32d->leave($__internal_0e7057aa928e1f5871fc746f694f8dbd244133220e6edd72f2156eac2ff3b32d_prof);

        
        $__internal_1298edb2e5596dc5348e5cf80e34c517cf74dd1a26758d42b47633cad0ac0ff3->leave($__internal_1298edb2e5596dc5348e5cf80e34c517cf74dd1a26758d42b47633cad0ac0ff3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a9e84d1ae80690ebc5c2129bc9b774d927a2923c9e80ae708601fac2f0e69ea2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9e84d1ae80690ebc5c2129bc9b774d927a2923c9e80ae708601fac2f0e69ea2->enter($__internal_a9e84d1ae80690ebc5c2129bc9b774d927a2923c9e80ae708601fac2f0e69ea2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_789274886913304456dfb762642783afe12add68d00ed462d4e0d371ba29d4e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_789274886913304456dfb762642783afe12add68d00ed462d4e0d371ba29d4e1->enter($__internal_789274886913304456dfb762642783afe12add68d00ed462d4e0d371ba29d4e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Produkty ";
        
        $__internal_789274886913304456dfb762642783afe12add68d00ed462d4e0d371ba29d4e1->leave($__internal_789274886913304456dfb762642783afe12add68d00ed462d4e0d371ba29d4e1_prof);

        
        $__internal_a9e84d1ae80690ebc5c2129bc9b774d927a2923c9e80ae708601fac2f0e69ea2->leave($__internal_a9e84d1ae80690ebc5c2129bc9b774d927a2923c9e80ae708601fac2f0e69ea2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3ae3e0ba7367173a3df1456de2d9dd072ead1ec55596fc6b00d0ae0c14205b9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ae3e0ba7367173a3df1456de2d9dd072ead1ec55596fc6b00d0ae0c14205b9c->enter($__internal_3ae3e0ba7367173a3df1456de2d9dd072ead1ec55596fc6b00d0ae0c14205b9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_85b4d28c97594e9b8fed0b5d6633ed49f76fb9402d7bbdd59497382d1d9f0d65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85b4d28c97594e9b8fed0b5d6633ed49f76fb9402d7bbdd59497382d1d9f0d65->enter($__internal_85b4d28c97594e9b8fed0b5d6633ed49f76fb9402d7bbdd59497382d1d9f0d65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        echo twig_escape_filter($this->env, ($context["password"] ?? $this->getContext($context, "password")), "html", null, true);
        echo "
<table class=\"table\">
    <thead>
        <th>Název</th>
        <th>Popis</th>
        <th>Kategorie</th>
        <th>Cena</th>
    </thead>
    <tbody>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? $this->getContext($context, "products")));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 16
            echo "            <tr>
                <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", array()), "html", null, true);
            echo "</td>
                <td> ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "description", array()), "html", null, true);
            echo " </td>
                <td> ";
            // line 19
            if ( !(null === $this->getAttribute($context["product"], "category", array()))) {
                // line 20
                echo "                    ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["product"], "category", array()), "name", array()), "html", null, true);
                echo "
                    ";
            } else {
                // line 22
                echo "                        Nemá kategorii
                    ";
            }
            // line 24
            echo "                </td>
                <td> ";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "price", array()), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "    </tbody>
</table>
";
        
        $__internal_85b4d28c97594e9b8fed0b5d6633ed49f76fb9402d7bbdd59497382d1d9f0d65->leave($__internal_85b4d28c97594e9b8fed0b5d6633ed49f76fb9402d7bbdd59497382d1d9f0d65_prof);

        
        $__internal_3ae3e0ba7367173a3df1456de2d9dd072ead1ec55596fc6b00d0ae0c14205b9c->leave($__internal_3ae3e0ba7367173a3df1456de2d9dd072ead1ec55596fc6b00d0ae0c14205b9c_prof);

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
        return array (  120 => 28,  111 => 25,  108 => 24,  104 => 22,  98 => 20,  96 => 19,  92 => 18,  88 => 17,  85 => 16,  81 => 15,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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
    {{ password}}
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
{% endblock %}", "@Eshop\\Default\\index.html.twig", "C:\\xampp\\htdocs\\shop\\sps-twa\\src\\EshopBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
