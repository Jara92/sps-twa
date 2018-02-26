<?php

/* @Eshop\security\login.html.twig */
class __TwigTemplate_820e9555f588b3ef6d38f95d1ee7bebc663c2e8ecdca13020862f088c62e2d21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Eshop\\security\\login.html.twig", 1);
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
        $__internal_c291a082f7838ccfb5a3181b63e2b73c87d15adef190b1a583b5d2f884ee70f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c291a082f7838ccfb5a3181b63e2b73c87d15adef190b1a583b5d2f884ee70f3->enter($__internal_c291a082f7838ccfb5a3181b63e2b73c87d15adef190b1a583b5d2f884ee70f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Eshop\\security\\login.html.twig"));

        $__internal_c8ee04a5bb65de9feeaf148af75edc19866b96ca478d133dce4b93f9cf5c2bd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8ee04a5bb65de9feeaf148af75edc19866b96ca478d133dce4b93f9cf5c2bd0->enter($__internal_c8ee04a5bb65de9feeaf148af75edc19866b96ca478d133dce4b93f9cf5c2bd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Eshop\\security\\login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c291a082f7838ccfb5a3181b63e2b73c87d15adef190b1a583b5d2f884ee70f3->leave($__internal_c291a082f7838ccfb5a3181b63e2b73c87d15adef190b1a583b5d2f884ee70f3_prof);

        
        $__internal_c8ee04a5bb65de9feeaf148af75edc19866b96ca478d133dce4b93f9cf5c2bd0->leave($__internal_c8ee04a5bb65de9feeaf148af75edc19866b96ca478d133dce4b93f9cf5c2bd0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6c7f60108c6a4ef300ba126fefa0ac9b4a70ddf4b73b0331da0d49415b85cec0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c7f60108c6a4ef300ba126fefa0ac9b4a70ddf4b73b0331da0d49415b85cec0->enter($__internal_6c7f60108c6a4ef300ba126fefa0ac9b4a70ddf4b73b0331da0d49415b85cec0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c00799b57049d17f27d1af38377c07d8942c9dfd93f5e7f5b39b0b6dc6eba173 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c00799b57049d17f27d1af38377c07d8942c9dfd93f5e7f5b39b0b6dc6eba173->enter($__internal_c00799b57049d17f27d1af38377c07d8942c9dfd93f5e7f5b39b0b6dc6eba173_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Přihlášení ";
        
        $__internal_c00799b57049d17f27d1af38377c07d8942c9dfd93f5e7f5b39b0b6dc6eba173->leave($__internal_c00799b57049d17f27d1af38377c07d8942c9dfd93f5e7f5b39b0b6dc6eba173_prof);

        
        $__internal_6c7f60108c6a4ef300ba126fefa0ac9b4a70ddf4b73b0331da0d49415b85cec0->leave($__internal_6c7f60108c6a4ef300ba126fefa0ac9b4a70ddf4b73b0331da0d49415b85cec0_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ec2a9a65e4c8d8a956af9f36cf15e255d96bd6387ef55f272fa08de37eba4b3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec2a9a65e4c8d8a956af9f36cf15e255d96bd6387ef55f272fa08de37eba4b3e->enter($__internal_ec2a9a65e4c8d8a956af9f36cf15e255d96bd6387ef55f272fa08de37eba4b3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_687c5178643b7bf8b2d868d0fce0b36c1451b164dc547ef68ee27855b54ca45e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_687c5178643b7bf8b2d868d0fce0b36c1451b164dc547ef68ee27855b54ca45e->enter($__internal_687c5178643b7bf8b2d868d0fce0b36c1451b164dc547ef68ee27855b54ca45e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"jumbotron\">
        <h1>Přihlášení</h1>
    </div>
    <div class=\"container\">
";
        // line 10
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 11
            echo "  <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 13
        echo "
<form action=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\" method=\"post\" class=\"form-group\">
    <label for=\"username\">Email:</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\" class=\"form-control\"/>

    <label for=\"password\">Heslo:</label>
    <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\" /><br />

    <button type=\"submit\" class=\"btn btn-default\">Přihlásit se</button>
</form>
    </div>
";
        
        $__internal_687c5178643b7bf8b2d868d0fce0b36c1451b164dc547ef68ee27855b54ca45e->leave($__internal_687c5178643b7bf8b2d868d0fce0b36c1451b164dc547ef68ee27855b54ca45e_prof);

        
        $__internal_ec2a9a65e4c8d8a956af9f36cf15e255d96bd6387ef55f272fa08de37eba4b3e->leave($__internal_ec2a9a65e4c8d8a956af9f36cf15e255d96bd6387ef55f272fa08de37eba4b3e_prof);

    }

    public function getTemplateName()
    {
        return "@Eshop\\security\\login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 16,  85 => 14,  82 => 13,  76 => 11,  74 => 10,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title %} Přihlášení {% endblock %}

{% block body %}
    <div class=\"jumbotron\">
        <h1>Přihlášení</h1>
    </div>
    <div class=\"container\">
{% if error %}
  <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}

<form action=\"{{ path('login') }}\" method=\"post\" class=\"form-group\">
    <label for=\"username\">Email:</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" class=\"form-control\"/>

    <label for=\"password\">Heslo:</label>
    <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\" /><br />

    <button type=\"submit\" class=\"btn btn-default\">Přihlásit se</button>
</form>
    </div>
{% endblock %}
", "@Eshop\\security\\login.html.twig", "C:\\xampp\\htdocs\\shop\\sps-twa\\src\\EshopBundle\\Resources\\views\\security\\login.html.twig");
    }
}
