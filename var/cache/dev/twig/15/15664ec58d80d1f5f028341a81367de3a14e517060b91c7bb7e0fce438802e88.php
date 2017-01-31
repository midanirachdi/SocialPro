<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_9d0bf7af13f70a0c2d15c57a91fb1f2c95c699817be07f41db4ca8436c9768b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bf1eb1c658c9d8bd5e05464f0042053c9d86a7164205dfe9b16525c64848b557 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf1eb1c658c9d8bd5e05464f0042053c9d86a7164205dfe9b16525c64848b557->enter($__internal_bf1eb1c658c9d8bd5e05464f0042053c9d86a7164205dfe9b16525c64848b557_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
</head>
<body>
<div>
    ";
        // line 9
        echo "    ";
        // line 10
        echo "    ";
        // line 11
        echo "    ";
        // line 12
        echo "    ";
        // line 13
        echo "    ";
        // line 14
        echo "    ";
        // line 15
        echo "    ";
        // line 16
        echo "</div>

";
        // line 18
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 19
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 20
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 21
                    echo "            <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                ";
                    // line 22
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
            </div>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 25
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 27
        echo "
<div>
    ";
        // line 29
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 31
        echo "</div>
</body>
</html>
";
        
        $__internal_bf1eb1c658c9d8bd5e05464f0042053c9d86a7164205dfe9b16525c64848b557->leave($__internal_bf1eb1c658c9d8bd5e05464f0042053c9d86a7164205dfe9b16525c64848b557_prof);

    }

    // line 29
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1339e263a629583853ed75b1c4e1e2e90091914919f3a5ea23c0c349bac6b209 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1339e263a629583853ed75b1c4e1e2e90091914919f3a5ea23c0c349bac6b209->enter($__internal_1339e263a629583853ed75b1c4e1e2e90091914919f3a5ea23c0c349bac6b209_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 30
        echo "    ";
        
        $__internal_1339e263a629583853ed75b1c4e1e2e90091914919f3a5ea23c0c349bac6b209->leave($__internal_1339e263a629583853ed75b1c4e1e2e90091914919f3a5ea23c0c349bac6b209_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 30,  99 => 29,  89 => 31,  87 => 29,  83 => 27,  76 => 25,  67 => 22,  62 => 21,  57 => 20,  52 => 19,  50 => 18,  46 => 16,  44 => 15,  42 => 14,  40 => 13,  38 => 12,  36 => 11,  34 => 10,  32 => 9,  23 => 1,);
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
    <meta charset=\"UTF-8\" />
</head>
<body>
<div>
    {#{% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}#}
    {#{{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |#}
    {#<a href=\"{{ path('fos_user_security_logout') }}\">#}
    {#{{ 'layout.logout'|trans({}, 'FOSUserBundle') }}#}
    {#</a>#}
    {#{% else %}#}
    {#<a href=\"{{ path('fos_user_security_login') }}\">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>#}
    {#{% endif %}#}
</div>

{% if app.request.hasPreviousSession %}
    {% for type, messages in app.session.flashbag.all() %}
        {% for message in messages %}
            <div class=\"flash-{{ type }}\">
                {{ message }}
            </div>
        {% endfor %}
    {% endfor %}
{% endif %}

<div>
    {% block fos_user_content %}
    {% endblock fos_user_content %}
</div>
</body>
</html>
", "@FOSUser/layout.html.twig", "C:\\wamp\\www\\pidevsocialpro\\src\\Esprit\\socialproBundle\\Resources\\views\\layout.html.twig");
    }
}
