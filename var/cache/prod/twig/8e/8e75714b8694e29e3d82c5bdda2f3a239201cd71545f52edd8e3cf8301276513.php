<?php

/* @Eshop\Default\index.html.twig */
class __TwigTemplate_e5f5db4041817fc7df07a80dd8f4e4e4a447a898c17cc800b748ee63ba75809f extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo " Produkty ";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
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
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
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
        return array (  87 => 27,  78 => 24,  75 => 23,  71 => 21,  65 => 19,  63 => 18,  59 => 17,  55 => 16,  52 => 15,  48 => 14,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Eshop\\Default\\index.html.twig", "C:\\xampp\\htdocs\\Eshop\\sps-twa\\src\\EshopBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
