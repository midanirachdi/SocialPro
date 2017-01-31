<?php

/* @FOSUser/Resetting/request_content.html.twig */
class __TwigTemplate_0494ca9ac9476f63531065b8c8852d7a622a387eae94322154ee076f0dda9aed extends Twig_Template
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
        $__internal_9080a5e7e3d9374f6c03376a1b6dfa354196163812a168077f668cb05351d981 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9080a5e7e3d9374f6c03376a1b6dfa354196163812a168077f668cb05351d981->enter($__internal_9080a5e7e3d9374f6c03376a1b6dfa354196163812a168077f668cb05351d981_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request_content.html.twig"));

        // line 2
        echo "<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, maximum-scale=1\"/>
    <title>Social Pro</title>
    <link rel=\"icon\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/espritsocialpro/login/img/logosp.ico"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/espritsocialpro/login/css/style.css"), "html", null, true);
        echo "\" />
</head>
<body>
<div class=\"wrapper\">
    <br/><br/><br/>
    <div class=\"container1\">
        <div class=\"card\"></div>
        <div class=\"card\">
            <center> <img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/espritsocialpro/login/img/logosp.png"), "html", null, true);
        echo "\" width=\"150px\" height=\"150px\"/></center>
            <br/>

<form action=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\" class=\"fos_user_resetting_request\">

    <div class=\"input-container1\">

        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
        <label for=\"username\">Email</label>
        <div class=\"bar\"></div>
    </div>
    <div class=\"button-container1\" STYLE=\"\">
        <input type=\"submit\" value=\"Réinitialiser\" />
    </div>
    <div class=\"footer\"><a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "\">Se Connecter</a></div>





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
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/espritsocialpro/login/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/espritsocialpro/login/js/index.js"), "html", null, true);
        echo "\"></script>
</div>
";
        
        $__internal_9080a5e7e3d9374f6c03376a1b6dfa354196163812a168077f668cb05351d981->leave($__internal_9080a5e7e3d9374f6c03376a1b6dfa354196163812a168077f668cb05351d981_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 74,  110 => 73,  63 => 29,  49 => 18,  43 => 15,  32 => 7,  28 => 6,  22 => 2,);
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
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, maximum-scale=1\"/>
    <title>Social Pro</title>
    <link rel=\"icon\" href=\"{{ asset('bundles/espritsocialpro/login/img/logosp.ico') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/espritsocialpro/login/css/style.css') }}\" />
</head>
<body>
<div class=\"wrapper\">
    <br/><br/><br/>
    <div class=\"container1\">
        <div class=\"card\"></div>
        <div class=\"card\">
            <center> <img src=\"{{ asset('bundles/espritsocialpro/login/img/logosp.png') }}\" width=\"150px\" height=\"150px\"/></center>
            <br/>

<form action=\"{{ path('fos_user_resetting_send_email') }}\" method=\"POST\" class=\"fos_user_resetting_request\">

    <div class=\"input-container1\">

        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
        <label for=\"username\">Email</label>
        <div class=\"bar\"></div>
    </div>
    <div class=\"button-container1\" STYLE=\"\">
        <input type=\"submit\" value=\"Réinitialiser\" />
    </div>
    <div class=\"footer\"><a href=\"{{ path('fos_user_security_login') }}\">Se Connecter</a></div>





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
", "@FOSUser/Resetting/request_content.html.twig", "C:\\wamp\\www\\pidevsocialpro\\src\\Esprit\\socialproBundle\\Resources\\views\\Resetting\\request_content.html.twig");
    }
}
