<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_5dfa37b4d8fa82e1610640e5581de5c0203440e1bc1285066c10d45d5f314958 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_800fe46f15d19ba364ceb5717c415e4fac6fcaab52f635f5253f72056a8c8152 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_800fe46f15d19ba364ceb5717c415e4fac6fcaab52f635f5253f72056a8c8152->enter($__internal_800fe46f15d19ba364ceb5717c415e4fac6fcaab52f635f5253f72056a8c8152_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_800fe46f15d19ba364ceb5717c415e4fac6fcaab52f635f5253f72056a8c8152->leave($__internal_800fe46f15d19ba364ceb5717c415e4fac6fcaab52f635f5253f72056a8c8152_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_71d0ccb373666efcaac75372aebaf73ba358ab80404528c937fbbd4a454a51ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71d0ccb373666efcaac75372aebaf73ba358ab80404528c937fbbd4a454a51ad->enter($__internal_71d0ccb373666efcaac75372aebaf73ba358ab80404528c937fbbd4a454a51ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_71d0ccb373666efcaac75372aebaf73ba358ab80404528c937fbbd4a454a51ad->leave($__internal_71d0ccb373666efcaac75372aebaf73ba358ab80404528c937fbbd4a454a51ad_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "C:\\wamp\\www\\pidevsocialpro\\src\\Esprit\\socialproBundle\\Resources\\views\\Registration\\register.html.twig");
    }
}
