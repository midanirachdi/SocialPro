<?php

/* @FOSUser/Security/login_content.html.twig */
class __TwigTemplate_a0152b530657f2fb6387d0d22b4dab28b520afb15085bb38d298c05bd0661c14 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_38f8c57af711bafe68d69d8849adad7cabceaaa5f28651492096bec6b144f86c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38f8c57af711bafe68d69d8849adad7cabceaaa5f28651492096bec6b144f86c->enter($__internal_38f8c57af711bafe68d69d8849adad7cabceaaa5f28651492096bec6b144f86c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
";
        // line 4
        echo "
";
        // line 5
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 6
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 8
        echo "
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, maximum-scale=1\"/>
    <title>Social Pro</title>
    <link rel=\"icon\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/espritsocialpro/login/img/logosp.ico"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/espritsocialpro/login/css/style.css"), "html", null, true);
        echo "\"/>
</head>

<body>
<div class=\"wrapper\">
    <br/><br/><br/>
    <div class=\"container1\">
        <div class=\"card\"></div>
        <div class=\"card\">
            <center><img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/espritsocialpro/login/img/logosp.png"), "html", null, true);
        echo "\" width=\"150px\"
                         height=\"150px\"/></center>
            <br/>

            <form action=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">


                ";
        // line 30
        if ((isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token"))) {
            // line 31
            echo "                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\"/>
                ";
        }
        // line 33
        echo "

                <div class=\"input-container1\">

                    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\"/>
                    <label for=\"username\">Email</label>
                    <div class=\"bar\"></div>
                </div>

                <div class=\"input-container1\">

                    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\"/>
                    <label for=\"password\">";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                    <div class=\"bar\" style=\"height: 2px;\"></div>
                </div>

                <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\"/>
                <label for=\"remember_me\">";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>

                <div class=\"button-container1\">
                    <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\"/>
                </div>

                <div class=\"footer\"><a href=\"";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_request");
        echo "\">Forgot password ?</a></div>
                <div class=\"footer\"><a href=\"";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\">register user</a></div>

            </form>
        </div>


        <div class=\"card alt\">
            <div class=\"toggle\">
                <div><img src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/espritsocialpro/login/img/di.png"), "html", null, true);
        echo "\"></div>
            </div>
            <h1 class=\"title\">Demande d'inscription
                <div class=\"close\"></div>

            </h1>
            <form>
                <div class=\"input-container1\" style=\"margin-bottom: 7px;\">
                    <input type=\"#{type}\" id=\"#{label}\" required=\"required\"/>
                    <label for=\"#{label}\">Nom</label>
                    <div class=\"bar\"></div>
                </div>
                <div class=\"input-container1\" style=\"margin-bottom: 7px;\">
                    <input type=\"#{type}\" id=\"#{label}\" required=\"required\"/>
                    <label for=\"#{label}\">Prénom</label>
                    <div class=\"bar\"></div>
                </div>
                <div class=\"input-container1\" style=\"margin-bottom: 7px;\">
                    <input type=\"#{type}\" id=\"#{label}\" required=\"required\"/>
                    <label for=\"#{label}\">Email</label>
                    <div class=\"bar\"></div>
                </div>
                <div class=\"input-container1\"style=\"margin-bottom: 7px;\">
                    <input  type=\"Password\" id=\"#{label}\" required=\"required\"/>
                    <label for=\"#{label}\">Mot de passe</label>
                    <div class=\"bar\"></div>
                </div>
                <div class=\"input-container1\"style=\"margin-bottom: 30px;\">
                    <input  type=\"Password\" id=\"#{label}\" required=\"required\"/>
                    <label for=\"#{label}\">Confirmer votre mot de passe</label>
                    <div class=\"bar\"></div>
                </div>
                <div class=\"button-container1\">
        <span>                <input type=\"submit\" name=\"login\" value=\"Demander\"/>
</span>
                </div>
            </form>
        </div>
    </div>
    <ul class=\"bg-bubbles\">

        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
    <script src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/espritsocialpro/login/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/espritsocialpro/login/js/index.js"), "html", null, true);
        echo "\"></script>
</div>
";
        
        $__internal_38f8c57af711bafe68d69d8849adad7cabceaaa5f28651492096bec6b144f86c->leave($__internal_38f8c57af711bafe68d69d8849adad7cabceaaa5f28651492096bec6b144f86c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 140,  210 => 139,  133 => 65,  122 => 57,  118 => 56,  112 => 53,  106 => 50,  98 => 45,  87 => 37,  81 => 33,  75 => 31,  73 => 30,  67 => 27,  60 => 23,  48 => 14,  44 => 13,  37 => 8,  31 => 6,  29 => 5,  26 => 4,  22 => 1,);
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
{% trans_default_domain 'FOSUserBundle' %}

{% if error %}
    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, maximum-scale=1\"/>
    <title>Social Pro</title>
    <link rel=\"icon\" href=\"{{ asset('bundles/espritsocialpro/login/img/logosp.ico') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/espritsocialpro/login/css/style.css') }}\"/>
</head>

<body>
<div class=\"wrapper\">
    <br/><br/><br/>
    <div class=\"container1\">
        <div class=\"card\"></div>
        <div class=\"card\">
            <center><img src=\"{{ asset('bundles/espritsocialpro/login/img/logosp.png') }}\" width=\"150px\"
                         height=\"150px\"/></center>
            <br/>

            <form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">


                {% if csrf_token %}
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\"/>
                {% endif %}


                <div class=\"input-container1\">

                    <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\"/>
                    <label for=\"username\">Email</label>
                    <div class=\"bar\"></div>
                </div>

                <div class=\"input-container1\">

                    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\"/>
                    <label for=\"password\">{{ 'security.login.password'|trans }}</label>
                    <div class=\"bar\" style=\"height: 2px;\"></div>
                </div>

                <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\"/>
                <label for=\"remember_me\">{{ 'security.login.remember_me'|trans }}</label>

                <div class=\"button-container1\">
                    <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"{{ 'security.login.submit'|trans }}\"/>
                </div>

                <div class=\"footer\"><a href=\"{{ path('fos_user_resetting_request') }}\">Forgot password ?</a></div>
                <div class=\"footer\"><a href=\"{{ path('fos_user_registration_register') }}\">register user</a></div>

            </form>
        </div>


        <div class=\"card alt\">
            <div class=\"toggle\">
                <div><img src=\"{{ asset('bundles/espritsocialpro/login/img/di.png') }}\"></div>
            </div>
            <h1 class=\"title\">Demande d'inscription
                <div class=\"close\"></div>

            </h1>
            <form>
                <div class=\"input-container1\" style=\"margin-bottom: 7px;\">
                    <input type=\"#{type}\" id=\"#{label}\" required=\"required\"/>
                    <label for=\"#{label}\">Nom</label>
                    <div class=\"bar\"></div>
                </div>
                <div class=\"input-container1\" style=\"margin-bottom: 7px;\">
                    <input type=\"#{type}\" id=\"#{label}\" required=\"required\"/>
                    <label for=\"#{label}\">Prénom</label>
                    <div class=\"bar\"></div>
                </div>
                <div class=\"input-container1\" style=\"margin-bottom: 7px;\">
                    <input type=\"#{type}\" id=\"#{label}\" required=\"required\"/>
                    <label for=\"#{label}\">Email</label>
                    <div class=\"bar\"></div>
                </div>
                <div class=\"input-container1\"style=\"margin-bottom: 7px;\">
                    <input  type=\"Password\" id=\"#{label}\" required=\"required\"/>
                    <label for=\"#{label}\">Mot de passe</label>
                    <div class=\"bar\"></div>
                </div>
                <div class=\"input-container1\"style=\"margin-bottom: 30px;\">
                    <input  type=\"Password\" id=\"#{label}\" required=\"required\"/>
                    <label for=\"#{label}\">Confirmer votre mot de passe</label>
                    <div class=\"bar\"></div>
                </div>
                <div class=\"button-container1\">
        <span>                <input type=\"submit\" name=\"login\" value=\"Demander\"/>
</span>
                </div>
            </form>
        </div>
    </div>
    <ul class=\"bg-bubbles\">

        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
    <script src=\"{{ asset('bundles/espritsocialpro/login/js/jquery.min.js') }}\"></script>
    <script src=\"{{ asset('bundles/espritsocialpro/login/js/index.js') }}\"></script>
</div>
", "@FOSUser/Security/login_content.html.twig", "C:\\wamp\\www\\pidevsocialpro\\src\\Esprit\\socialproBundle\\Resources\\views\\Security\\login_content.html.twig");
    }
}
