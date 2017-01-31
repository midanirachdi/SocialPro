<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_a28d0d688714daddcb92e5309fef000aedf4cdd6b5398c0a44924fbe5485f421 extends Twig_Template
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
        $__internal_a1d77b375896d7dd10048bdcab922f819b3de7b227895610525849d700bcbb76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1d77b375896d7dd10048bdcab922f819b3de7b227895610525849d700bcbb76->enter($__internal_a1d77b375896d7dd10048bdcab922f819b3de7b227895610525849d700bcbb76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1d77b375896d7dd10048bdcab922f819b3de7b227895610525849d700bcbb76->leave($__internal_a1d77b375896d7dd10048bdcab922f819b3de7b227895610525849d700bcbb76_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e02d42c9dc649bb97fcf7c7ddc5208ff471b6365ee8975fdea1bd8daf10f3a0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e02d42c9dc649bb97fcf7c7ddc5208ff471b6365ee8975fdea1bd8daf10f3a0d->enter($__internal_e02d42c9dc649bb97fcf7c7ddc5208ff471b6365ee8975fdea1bd8daf10f3a0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_e02d42c9dc649bb97fcf7c7ddc5208ff471b6365ee8975fdea1bd8daf10f3a0d->leave($__internal_e02d42c9dc649bb97fcf7c7ddc5208ff471b6365ee8975fdea1bd8daf10f3a0d_prof);

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
