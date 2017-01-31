<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_fd7aaa6ea8d82db0a8833aa7a2c8a2ff9626fe89353a1e0a20dfe06d9d54fdd1 extends Twig_Template
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
        $__internal_c54bcbdfacff5766636c05343ab7bf234b2ba55cf8370d5d6da675997e9f19e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c54bcbdfacff5766636c05343ab7bf234b2ba55cf8370d5d6da675997e9f19e1->enter($__internal_c54bcbdfacff5766636c05343ab7bf234b2ba55cf8370d5d6da675997e9f19e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c54bcbdfacff5766636c05343ab7bf234b2ba55cf8370d5d6da675997e9f19e1->leave($__internal_c54bcbdfacff5766636c05343ab7bf234b2ba55cf8370d5d6da675997e9f19e1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1349e4fc5bd6a1aa056750ce25b740dcdb31056bc822b20409f709025e70f24f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1349e4fc5bd6a1aa056750ce25b740dcdb31056bc822b20409f709025e70f24f->enter($__internal_1349e4fc5bd6a1aa056750ce25b740dcdb31056bc822b20409f709025e70f24f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_1349e4fc5bd6a1aa056750ce25b740dcdb31056bc822b20409f709025e70f24f->leave($__internal_1349e4fc5bd6a1aa056750ce25b740dcdb31056bc822b20409f709025e70f24f_prof);

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
