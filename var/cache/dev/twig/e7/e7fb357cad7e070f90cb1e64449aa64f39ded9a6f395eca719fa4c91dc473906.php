<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_4ae55b287da9431b0e481e63e896cade20df3c3713de25bc9a3c17f02e6a4188 extends Twig_Template
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
        $__internal_3c133b66cad2ee169c4d2f821e88e5798f1ecf332039c6769a5797d455231d35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c133b66cad2ee169c4d2f821e88e5798f1ecf332039c6769a5797d455231d35->enter($__internal_3c133b66cad2ee169c4d2f821e88e5798f1ecf332039c6769a5797d455231d35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c133b66cad2ee169c4d2f821e88e5798f1ecf332039c6769a5797d455231d35->leave($__internal_3c133b66cad2ee169c4d2f821e88e5798f1ecf332039c6769a5797d455231d35_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1ce047359609a74a76aa27f85fcbb838c3435aeb4a9234600df3fcafdf72ac7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ce047359609a74a76aa27f85fcbb838c3435aeb4a9234600df3fcafdf72ac7e->enter($__internal_1ce047359609a74a76aa27f85fcbb838c3435aeb4a9234600df3fcafdf72ac7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_1ce047359609a74a76aa27f85fcbb838c3435aeb4a9234600df3fcafdf72ac7e->leave($__internal_1ce047359609a74a76aa27f85fcbb838c3435aeb4a9234600df3fcafdf72ac7e_prof);

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
