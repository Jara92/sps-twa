<?php

/* base.html.twig */
class __TwigTemplate_fb9d94bc9cf75537140d68c7ddbca5bd46fe3cc635b72f7da37d793f5c0b9c0b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_878346e882ed51191971308b84be25f67023b03be6549c2d1772754690ec38e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_878346e882ed51191971308b84be25f67023b03be6549c2d1772754690ec38e5->enter($__internal_878346e882ed51191971308b84be25f67023b03be6549c2d1772754690ec38e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_f46ad05811f94b6fc94fb785ef657ba79a2a24741464d67b9bed7068805b9f85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f46ad05811f94b6fc94fb785ef657ba79a2a24741464d67b9bed7068805b9f85->enter($__internal_f46ad05811f94b6fc94fb785ef657ba79a2a24741464d67b9bed7068805b9f85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/eshop/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>";
        
        $__internal_878346e882ed51191971308b84be25f67023b03be6549c2d1772754690ec38e5->leave($__internal_878346e882ed51191971308b84be25f67023b03be6549c2d1772754690ec38e5_prof);

        
        $__internal_f46ad05811f94b6fc94fb785ef657ba79a2a24741464d67b9bed7068805b9f85->leave($__internal_f46ad05811f94b6fc94fb785ef657ba79a2a24741464d67b9bed7068805b9f85_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4ba9b0b2ea99fd7b3c74d55b6d75304d66edde697c97275e7e64ac2681c5b7f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ba9b0b2ea99fd7b3c74d55b6d75304d66edde697c97275e7e64ac2681c5b7f6->enter($__internal_4ba9b0b2ea99fd7b3c74d55b6d75304d66edde697c97275e7e64ac2681c5b7f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0130441a2a143467f7c850111ab53a905f6e21303137a9d02901d019c956d521 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0130441a2a143467f7c850111ab53a905f6e21303137a9d02901d019c956d521->enter($__internal_0130441a2a143467f7c850111ab53a905f6e21303137a9d02901d019c956d521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_0130441a2a143467f7c850111ab53a905f6e21303137a9d02901d019c956d521->leave($__internal_0130441a2a143467f7c850111ab53a905f6e21303137a9d02901d019c956d521_prof);

        
        $__internal_4ba9b0b2ea99fd7b3c74d55b6d75304d66edde697c97275e7e64ac2681c5b7f6->leave($__internal_4ba9b0b2ea99fd7b3c74d55b6d75304d66edde697c97275e7e64ac2681c5b7f6_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_707263ded3956dd1c45a234dd2735edf3ca6dc3714ac1dd8983b3f163e3650e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_707263ded3956dd1c45a234dd2735edf3ca6dc3714ac1dd8983b3f163e3650e1->enter($__internal_707263ded3956dd1c45a234dd2735edf3ca6dc3714ac1dd8983b3f163e3650e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bcd28832e35a9db93e0aebab5b7fca64d6cdd7b3a1f1b97b3408884e9c87fa6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcd28832e35a9db93e0aebab5b7fca64d6cdd7b3a1f1b97b3408884e9c87fa6a->enter($__internal_bcd28832e35a9db93e0aebab5b7fca64d6cdd7b3a1f1b97b3408884e9c87fa6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " ";
        
        $__internal_bcd28832e35a9db93e0aebab5b7fca64d6cdd7b3a1f1b97b3408884e9c87fa6a->leave($__internal_bcd28832e35a9db93e0aebab5b7fca64d6cdd7b3a1f1b97b3408884e9c87fa6a_prof);

        
        $__internal_707263ded3956dd1c45a234dd2735edf3ca6dc3714ac1dd8983b3f163e3650e1->leave($__internal_707263ded3956dd1c45a234dd2735edf3ca6dc3714ac1dd8983b3f163e3650e1_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_86d4d0e2eddee38a0ab0a3c7b076dfd6d97b61db50760277a0e7b141b7631743 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86d4d0e2eddee38a0ab0a3c7b076dfd6d97b61db50760277a0e7b141b7631743->enter($__internal_86d4d0e2eddee38a0ab0a3c7b076dfd6d97b61db50760277a0e7b141b7631743_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_9da60659722bcf3de22b6f8ec65735810d9fcee182832e58cf1fecb83f02d943 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9da60659722bcf3de22b6f8ec65735810d9fcee182832e58cf1fecb83f02d943->enter($__internal_9da60659722bcf3de22b6f8ec65735810d9fcee182832e58cf1fecb83f02d943_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_9da60659722bcf3de22b6f8ec65735810d9fcee182832e58cf1fecb83f02d943->leave($__internal_9da60659722bcf3de22b6f8ec65735810d9fcee182832e58cf1fecb83f02d943_prof);

        
        $__internal_86d4d0e2eddee38a0ab0a3c7b076dfd6d97b61db50760277a0e7b141b7631743->leave($__internal_86d4d0e2eddee38a0ab0a3c7b076dfd6d97b61db50760277a0e7b141b7631743_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 11,  81 => 10,  64 => 5,  53 => 12,  50 => 11,  48 => 10,  42 => 7,  38 => 6,  34 => 5,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"stylesheet\" href=\"{{ asset(\"bundles/eshop/css/bootstrap.min.css\") }}\" />
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset(\"favicon.ico\") }}\" />
    </head>
    <body>
        {% block body %} {% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>", "base.html.twig", "C:\\xampp\\htdocs\\Eshop\\sps-twa\\app\\Resources\\views\\base.html.twig");
    }
}
