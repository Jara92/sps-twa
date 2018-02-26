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
        $__internal_2b54ce252d161a4dbf4f700990c404eba5649142b34e2abd9815bb7afde0e0dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b54ce252d161a4dbf4f700990c404eba5649142b34e2abd9815bb7afde0e0dc->enter($__internal_2b54ce252d161a4dbf4f700990c404eba5649142b34e2abd9815bb7afde0e0dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_33908c878d8f976dbda778a3302b674e6e59535b65e3a6f8f7d5456725840a2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33908c878d8f976dbda778a3302b674e6e59535b65e3a6f8f7d5456725840a2f->enter($__internal_33908c878d8f976dbda778a3302b674e6e59535b65e3a6f8f7d5456725840a2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        <style>
            body{
                margin: 10px;
            }
        </style>
    </head>
    <body>
        ";
        // line 15
        $this->displayBlock('body', $context, $blocks);
        // line 16
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 17
        echo "    </body>
</html>";
        
        $__internal_2b54ce252d161a4dbf4f700990c404eba5649142b34e2abd9815bb7afde0e0dc->leave($__internal_2b54ce252d161a4dbf4f700990c404eba5649142b34e2abd9815bb7afde0e0dc_prof);

        
        $__internal_33908c878d8f976dbda778a3302b674e6e59535b65e3a6f8f7d5456725840a2f->leave($__internal_33908c878d8f976dbda778a3302b674e6e59535b65e3a6f8f7d5456725840a2f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_06aa7f18099703f02e1cefaedf046f6aae2e3e22409aec50bbdc9fa10903513b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06aa7f18099703f02e1cefaedf046f6aae2e3e22409aec50bbdc9fa10903513b->enter($__internal_06aa7f18099703f02e1cefaedf046f6aae2e3e22409aec50bbdc9fa10903513b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b99fef1272c33c1116c5efd7032809c8c241dc0bf9b97ab38a36a71bc7b0166e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b99fef1272c33c1116c5efd7032809c8c241dc0bf9b97ab38a36a71bc7b0166e->enter($__internal_b99fef1272c33c1116c5efd7032809c8c241dc0bf9b97ab38a36a71bc7b0166e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_b99fef1272c33c1116c5efd7032809c8c241dc0bf9b97ab38a36a71bc7b0166e->leave($__internal_b99fef1272c33c1116c5efd7032809c8c241dc0bf9b97ab38a36a71bc7b0166e_prof);

        
        $__internal_06aa7f18099703f02e1cefaedf046f6aae2e3e22409aec50bbdc9fa10903513b->leave($__internal_06aa7f18099703f02e1cefaedf046f6aae2e3e22409aec50bbdc9fa10903513b_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_60b20dbe385e9fd8e3da60b0520138003cb5eb374165c4a467d0431759b9bca1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60b20dbe385e9fd8e3da60b0520138003cb5eb374165c4a467d0431759b9bca1->enter($__internal_60b20dbe385e9fd8e3da60b0520138003cb5eb374165c4a467d0431759b9bca1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_38c5369254c2779af74e4b21da477d05c31bda14b5eafc93d5eb0739e612bd37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38c5369254c2779af74e4b21da477d05c31bda14b5eafc93d5eb0739e612bd37->enter($__internal_38c5369254c2779af74e4b21da477d05c31bda14b5eafc93d5eb0739e612bd37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " ";
        
        $__internal_38c5369254c2779af74e4b21da477d05c31bda14b5eafc93d5eb0739e612bd37->leave($__internal_38c5369254c2779af74e4b21da477d05c31bda14b5eafc93d5eb0739e612bd37_prof);

        
        $__internal_60b20dbe385e9fd8e3da60b0520138003cb5eb374165c4a467d0431759b9bca1->leave($__internal_60b20dbe385e9fd8e3da60b0520138003cb5eb374165c4a467d0431759b9bca1_prof);

    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ad36c4f2068fd2979930f842d807588a652b4d01353064cf48683e4a860f25d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad36c4f2068fd2979930f842d807588a652b4d01353064cf48683e4a860f25d6->enter($__internal_ad36c4f2068fd2979930f842d807588a652b4d01353064cf48683e4a860f25d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_14dbaf7c94f8554fa18d715231b2fcb2158eb68c3ae97553dc9d08ead837e266 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14dbaf7c94f8554fa18d715231b2fcb2158eb68c3ae97553dc9d08ead837e266->enter($__internal_14dbaf7c94f8554fa18d715231b2fcb2158eb68c3ae97553dc9d08ead837e266_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_14dbaf7c94f8554fa18d715231b2fcb2158eb68c3ae97553dc9d08ead837e266->leave($__internal_14dbaf7c94f8554fa18d715231b2fcb2158eb68c3ae97553dc9d08ead837e266_prof);

        
        $__internal_ad36c4f2068fd2979930f842d807588a652b4d01353064cf48683e4a860f25d6->leave($__internal_ad36c4f2068fd2979930f842d807588a652b4d01353064cf48683e4a860f25d6_prof);

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
        return array (  104 => 16,  86 => 15,  69 => 5,  58 => 17,  55 => 16,  53 => 15,  42 => 7,  38 => 6,  34 => 5,  28 => 1,);
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
        <style>
            body{
                margin: 10px;
            }
        </style>
    </head>
    <body>
        {% block body %} {% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>", "base.html.twig", "C:\\xampp\\htdocs\\shop\\sps-twa\\app\\Resources\\views\\base.html.twig");
    }
}
