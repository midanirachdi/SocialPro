<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_62f6823c940f771cfbe3884aa99d6e37d2f39491bee361ff79b57b634b4ee702 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3394ee876fd235411b01256dd9284ff1358c14fb09ebcb3c95c94b275969d1d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3394ee876fd235411b01256dd9284ff1358c14fb09ebcb3c95c94b275969d1d8->enter($__internal_3394ee876fd235411b01256dd9284ff1358c14fb09ebcb3c95c94b275969d1d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_3394ee876fd235411b01256dd9284ff1358c14fb09ebcb3c95c94b275969d1d8->leave($__internal_3394ee876fd235411b01256dd9284ff1358c14fb09ebcb3c95c94b275969d1d8_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_371033b12591777720022bc183d3467c6c68a33c45ab803536f4ba53914194d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_371033b12591777720022bc183d3467c6c68a33c45ab803536f4ba53914194d3->enter($__internal_371033b12591777720022bc183d3467c6c68a33c45ab803536f4ba53914194d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_371033b12591777720022bc183d3467c6c68a33c45ab803536f4ba53914194d3->leave($__internal_371033b12591777720022bc183d3467c6c68a33c45ab803536f4ba53914194d3_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_d16cdecdf84cfa3a662d2ea80b6ed387997d3a283815b444f5abafb09967dc8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d16cdecdf84cfa3a662d2ea80b6ed387997d3a283815b444f5abafb09967dc8d->enter($__internal_d16cdecdf84cfa3a662d2ea80b6ed387997d3a283815b444f5abafb09967dc8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_d16cdecdf84cfa3a662d2ea80b6ed387997d3a283815b444f5abafb09967dc8d->leave($__internal_d16cdecdf84cfa3a662d2ea80b6ed387997d3a283815b444f5abafb09967dc8d_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_1ca60907e0632500fe974271b9994ce9c9bdb183bdf10ca1765ac0f386f0f2e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ca60907e0632500fe974271b9994ce9c9bdb183bdf10ca1765ac0f386f0f2e7->enter($__internal_1ca60907e0632500fe974271b9994ce9c9bdb183bdf10ca1765ac0f386f0f2e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_1ca60907e0632500fe974271b9994ce9c9bdb183bdf10ca1765ac0f386f0f2e7->leave($__internal_1ca60907e0632500fe974271b9994ce9c9bdb183bdf10ca1765ac0f386f0f2e7_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  67 => 13,  58 => 10,  52 => 8,  45 => 4,  39 => 2,  32 => 13,  30 => 8,  27 => 7,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "@FOSUser/Resetting/email.txt.twig", "C:\\wamp\\www\\pidevsocialpro\\src\\Esprit\\socialproBundle\\Resources\\views\\Resetting\\email.txt.twig");
    }
}
