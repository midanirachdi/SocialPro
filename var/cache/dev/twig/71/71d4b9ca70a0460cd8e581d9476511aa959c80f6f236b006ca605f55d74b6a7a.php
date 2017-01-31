<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_2a085f6806e042ee8935d9ea7b83bfb8b20f0e5c945556ef0c83b486533205e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c93bf3a1d265fc82fd7c4c8d261e0c451a958c83ad1467a3f6599a31a1bcb6ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c93bf3a1d265fc82fd7c4c8d261e0c451a958c83ad1467a3f6599a31a1bcb6ee->enter($__internal_c93bf3a1d265fc82fd7c4c8d261e0c451a958c83ad1467a3f6599a31a1bcb6ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c93bf3a1d265fc82fd7c4c8d261e0c451a958c83ad1467a3f6599a31a1bcb6ee->leave($__internal_c93bf3a1d265fc82fd7c4c8d261e0c451a958c83ad1467a3f6599a31a1bcb6ee_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_aad0757b7f8f9dbbc00f914b0a041a28213bdf53e3b551663e8e304197b9d6cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aad0757b7f8f9dbbc00f914b0a041a28213bdf53e3b551663e8e304197b9d6cf->enter($__internal_aad0757b7f8f9dbbc00f914b0a041a28213bdf53e3b551663e8e304197b9d6cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_aad0757b7f8f9dbbc00f914b0a041a28213bdf53e3b551663e8e304197b9d6cf->leave($__internal_aad0757b7f8f9dbbc00f914b0a041a28213bdf53e3b551663e8e304197b9d6cf_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "C:\\wamp\\www\\pidevsocialpro\\src\\Esprit\\socialproBundle\\Resources\\views\\Security\\login.html.twig");
    }
}
