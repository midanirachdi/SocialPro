<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_cd7ff40392f81d7b43e9f983daaab8f647cdb6323502183897d356fd3cdce422 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b4a668b6b7ed65de381ae230603a0e9a84e6f360b9dfb86d8647176e79125a88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4a668b6b7ed65de381ae230603a0e9a84e6f360b9dfb86d8647176e79125a88->enter($__internal_b4a668b6b7ed65de381ae230603a0e9a84e6f360b9dfb86d8647176e79125a88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b4a668b6b7ed65de381ae230603a0e9a84e6f360b9dfb86d8647176e79125a88->leave($__internal_b4a668b6b7ed65de381ae230603a0e9a84e6f360b9dfb86d8647176e79125a88_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d1ec75d5e2aa3869c266f96497e31f3fb4f658fe6f130f6500724e7032c1db8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1ec75d5e2aa3869c266f96497e31f3fb4f658fe6f130f6500724e7032c1db8b->enter($__internal_d1ec75d5e2aa3869c266f96497e31f3fb4f658fe6f130f6500724e7032c1db8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d1ec75d5e2aa3869c266f96497e31f3fb4f658fe6f130f6500724e7032c1db8b->leave($__internal_d1ec75d5e2aa3869c266f96497e31f3fb4f658fe6f130f6500724e7032c1db8b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_fc77e7545096fd4eaf1ba5354cbb5c96ba5e9a2a26551283b71f6fa8156249a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc77e7545096fd4eaf1ba5354cbb5c96ba5e9a2a26551283b71f6fa8156249a2->enter($__internal_fc77e7545096fd4eaf1ba5354cbb5c96ba5e9a2a26551283b71f6fa8156249a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_fc77e7545096fd4eaf1ba5354cbb5c96ba5e9a2a26551283b71f6fa8156249a2->leave($__internal_fc77e7545096fd4eaf1ba5354cbb5c96ba5e9a2a26551283b71f6fa8156249a2_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_16b5d81201f48ee17cd8326c61a0ef68294b44ab44876891dba40ebe9092e353 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16b5d81201f48ee17cd8326c61a0ef68294b44ab44876891dba40ebe9092e353->enter($__internal_16b5d81201f48ee17cd8326c61a0ef68294b44ab44876891dba40ebe9092e353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_16b5d81201f48ee17cd8326c61a0ef68294b44ab44876891dba40ebe9092e353->leave($__internal_16b5d81201f48ee17cd8326c61a0ef68294b44ab44876891dba40ebe9092e353_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp\\www\\pidevsocialpro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
