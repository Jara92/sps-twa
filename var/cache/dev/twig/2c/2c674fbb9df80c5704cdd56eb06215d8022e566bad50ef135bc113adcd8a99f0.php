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
        $__internal_d8c03423184104a4f22828ca6e986b101354a95fc45f7eb742036a96196aa788 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8c03423184104a4f22828ca6e986b101354a95fc45f7eb742036a96196aa788->enter($__internal_d8c03423184104a4f22828ca6e986b101354a95fc45f7eb742036a96196aa788_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_8dfc1758a029b3a449650a8cfed2d3cff5431fa47ebd7b23f9cd0f001106d7c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dfc1758a029b3a449650a8cfed2d3cff5431fa47ebd7b23f9cd0f001106d7c8->enter($__internal_8dfc1758a029b3a449650a8cfed2d3cff5431fa47ebd7b23f9cd0f001106d7c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_d8c03423184104a4f22828ca6e986b101354a95fc45f7eb742036a96196aa788->leave($__internal_d8c03423184104a4f22828ca6e986b101354a95fc45f7eb742036a96196aa788_prof);

        
        $__internal_8dfc1758a029b3a449650a8cfed2d3cff5431fa47ebd7b23f9cd0f001106d7c8->leave($__internal_8dfc1758a029b3a449650a8cfed2d3cff5431fa47ebd7b23f9cd0f001106d7c8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_045895315eb94426e65687894afb0b26e325c69a6544f83a275b01eb0606b1e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_045895315eb94426e65687894afb0b26e325c69a6544f83a275b01eb0606b1e4->enter($__internal_045895315eb94426e65687894afb0b26e325c69a6544f83a275b01eb0606b1e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fb16f824a2053e0818c4a9bf5be7e4ebe811983ac7612ed1529d76bed6164a09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb16f824a2053e0818c4a9bf5be7e4ebe811983ac7612ed1529d76bed6164a09->enter($__internal_fb16f824a2053e0818c4a9bf5be7e4ebe811983ac7612ed1529d76bed6164a09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_fb16f824a2053e0818c4a9bf5be7e4ebe811983ac7612ed1529d76bed6164a09->leave($__internal_fb16f824a2053e0818c4a9bf5be7e4ebe811983ac7612ed1529d76bed6164a09_prof);

        
        $__internal_045895315eb94426e65687894afb0b26e325c69a6544f83a275b01eb0606b1e4->leave($__internal_045895315eb94426e65687894afb0b26e325c69a6544f83a275b01eb0606b1e4_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_05fd2caeafe9f65264b36446817d6c75cc64c984897c513332ff0f1d7fab16d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05fd2caeafe9f65264b36446817d6c75cc64c984897c513332ff0f1d7fab16d8->enter($__internal_05fd2caeafe9f65264b36446817d6c75cc64c984897c513332ff0f1d7fab16d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1dbfd1cf774d1eaf654b80e092e11030402289fbd36971624fa58c8de41ab11b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dbfd1cf774d1eaf654b80e092e11030402289fbd36971624fa58c8de41ab11b->enter($__internal_1dbfd1cf774d1eaf654b80e092e11030402289fbd36971624fa58c8de41ab11b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_1dbfd1cf774d1eaf654b80e092e11030402289fbd36971624fa58c8de41ab11b->leave($__internal_1dbfd1cf774d1eaf654b80e092e11030402289fbd36971624fa58c8de41ab11b_prof);

        
        $__internal_05fd2caeafe9f65264b36446817d6c75cc64c984897c513332ff0f1d7fab16d8->leave($__internal_05fd2caeafe9f65264b36446817d6c75cc64c984897c513332ff0f1d7fab16d8_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_81bea1bd44b2b994bc0e0e7e107139d41a127d4d57c066aed7c0c2c7c2503aaa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81bea1bd44b2b994bc0e0e7e107139d41a127d4d57c066aed7c0c2c7c2503aaa->enter($__internal_81bea1bd44b2b994bc0e0e7e107139d41a127d4d57c066aed7c0c2c7c2503aaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_72fb55a9450440a5690e62b56107691c98a2ea41b7f06e9fc3ce69a5c8ad14f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72fb55a9450440a5690e62b56107691c98a2ea41b7f06e9fc3ce69a5c8ad14f1->enter($__internal_72fb55a9450440a5690e62b56107691c98a2ea41b7f06e9fc3ce69a5c8ad14f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_72fb55a9450440a5690e62b56107691c98a2ea41b7f06e9fc3ce69a5c8ad14f1->leave($__internal_72fb55a9450440a5690e62b56107691c98a2ea41b7f06e9fc3ce69a5c8ad14f1_prof);

        
        $__internal_81bea1bd44b2b994bc0e0e7e107139d41a127d4d57c066aed7c0c2c7c2503aaa->leave($__internal_81bea1bd44b2b994bc0e0e7e107139d41a127d4d57c066aed7c0c2c7c2503aaa_prof);

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
