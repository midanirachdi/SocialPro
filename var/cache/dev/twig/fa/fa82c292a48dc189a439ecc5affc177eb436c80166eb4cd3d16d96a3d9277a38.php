<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_15491efecf86db5089101c94d2576435ab70249a34355ac3539cfa3fcff68453 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_70392733432d051662c6a91c73dc480e5149f1562e6e3378951e8e5a5706b60c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70392733432d051662c6a91c73dc480e5149f1562e6e3378951e8e5a5706b60c->enter($__internal_70392733432d051662c6a91c73dc480e5149f1562e6e3378951e8e5a5706b60c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_70392733432d051662c6a91c73dc480e5149f1562e6e3378951e8e5a5706b60c->leave($__internal_70392733432d051662c6a91c73dc480e5149f1562e6e3378951e8e5a5706b60c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1a79069337b96448c38355b216624b1e8dea63246acdd224a9869d102ec8d9d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a79069337b96448c38355b216624b1e8dea63246acdd224a9869d102ec8d9d8->enter($__internal_1a79069337b96448c38355b216624b1e8dea63246acdd224a9869d102ec8d9d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_1a79069337b96448c38355b216624b1e8dea63246acdd224a9869d102ec8d9d8->leave($__internal_1a79069337b96448c38355b216624b1e8dea63246acdd224a9869d102ec8d9d8_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/request.html.twig", "C:\\wamp\\www\\pidevsocialpro\\src\\Esprit\\socialproBundle\\Resources\\views\\Resetting\\request.html.twig");
    }
}
