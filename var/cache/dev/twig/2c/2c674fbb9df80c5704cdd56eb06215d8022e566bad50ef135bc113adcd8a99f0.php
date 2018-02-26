<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_ffd648ac7ceac12a3d524a2f0d7882a466a14bffa1fb5f2158502a6c7124c5cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a50a12623dc8c711652c3dae3ea6186119b12c231fcacdae6beb6288dcd3c167 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a50a12623dc8c711652c3dae3ea6186119b12c231fcacdae6beb6288dcd3c167->enter($__internal_a50a12623dc8c711652c3dae3ea6186119b12c231fcacdae6beb6288dcd3c167_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_92394a53748b0eaee67ebf70f38ad69d201524bd4a668bddcdf9e8e4ffa1a480 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92394a53748b0eaee67ebf70f38ad69d201524bd4a668bddcdf9e8e4ffa1a480->enter($__internal_92394a53748b0eaee67ebf70f38ad69d201524bd4a668bddcdf9e8e4ffa1a480_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_a50a12623dc8c711652c3dae3ea6186119b12c231fcacdae6beb6288dcd3c167->leave($__internal_a50a12623dc8c711652c3dae3ea6186119b12c231fcacdae6beb6288dcd3c167_prof);

        
        $__internal_92394a53748b0eaee67ebf70f38ad69d201524bd4a668bddcdf9e8e4ffa1a480->leave($__internal_92394a53748b0eaee67ebf70f38ad69d201524bd4a668bddcdf9e8e4ffa1a480_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_656d7fd8d12079b7140a211e9a7ad687bb9f9ee521e609f0dac90fbbb289df03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_656d7fd8d12079b7140a211e9a7ad687bb9f9ee521e609f0dac90fbbb289df03->enter($__internal_656d7fd8d12079b7140a211e9a7ad687bb9f9ee521e609f0dac90fbbb289df03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0f6adfadb3853e0b249253442ad6a7631791e54c5e3b9411e6359bf7391165a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f6adfadb3853e0b249253442ad6a7631791e54c5e3b9411e6359bf7391165a2->enter($__internal_0f6adfadb3853e0b249253442ad6a7631791e54c5e3b9411e6359bf7391165a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_0f6adfadb3853e0b249253442ad6a7631791e54c5e3b9411e6359bf7391165a2->leave($__internal_0f6adfadb3853e0b249253442ad6a7631791e54c5e3b9411e6359bf7391165a2_prof);

        
        $__internal_656d7fd8d12079b7140a211e9a7ad687bb9f9ee521e609f0dac90fbbb289df03->leave($__internal_656d7fd8d12079b7140a211e9a7ad687bb9f9ee521e609f0dac90fbbb289df03_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_ebdf56da62e6735a3cd21b4e799edb45f469685338cbcde9d682242ee9442da2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebdf56da62e6735a3cd21b4e799edb45f469685338cbcde9d682242ee9442da2->enter($__internal_ebdf56da62e6735a3cd21b4e799edb45f469685338cbcde9d682242ee9442da2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6733606839361fa6e5578a3b1f4d14c4e771c6fbf34f4fe8fe735d057e15ca06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6733606839361fa6e5578a3b1f4d14c4e771c6fbf34f4fe8fe735d057e15ca06->enter($__internal_6733606839361fa6e5578a3b1f4d14c4e771c6fbf34f4fe8fe735d057e15ca06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_6733606839361fa6e5578a3b1f4d14c4e771c6fbf34f4fe8fe735d057e15ca06->leave($__internal_6733606839361fa6e5578a3b1f4d14c4e771c6fbf34f4fe8fe735d057e15ca06_prof);

        
        $__internal_ebdf56da62e6735a3cd21b4e799edb45f469685338cbcde9d682242ee9442da2->leave($__internal_ebdf56da62e6735a3cd21b4e799edb45f469685338cbcde9d682242ee9442da2_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_dafbed4a329afad2133033b132df3fda9cba0dacd380da533a3da4b15da6577a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dafbed4a329afad2133033b132df3fda9cba0dacd380da533a3da4b15da6577a->enter($__internal_dafbed4a329afad2133033b132df3fda9cba0dacd380da533a3da4b15da6577a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c7a76f0f5dc5fb086ac1a1428edbd497f1612ad70fb335649829e91c46401281 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7a76f0f5dc5fb086ac1a1428edbd497f1612ad70fb335649829e91c46401281->enter($__internal_c7a76f0f5dc5fb086ac1a1428edbd497f1612ad70fb335649829e91c46401281_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c7a76f0f5dc5fb086ac1a1428edbd497f1612ad70fb335649829e91c46401281->leave($__internal_c7a76f0f5dc5fb086ac1a1428edbd497f1612ad70fb335649829e91c46401281_prof);

        
        $__internal_dafbed4a329afad2133033b132df3fda9cba0dacd380da533a3da4b15da6577a->leave($__internal_dafbed4a329afad2133033b132df3fda9cba0dacd380da533a3da4b15da6577a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "C:\\xampp\\htdocs\\shop\\sps-twa\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
