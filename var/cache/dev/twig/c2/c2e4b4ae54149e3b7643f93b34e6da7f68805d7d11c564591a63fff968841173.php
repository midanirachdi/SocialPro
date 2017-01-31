<?php

/* @FOSUser/Registration/register_content.html.twig */
class __TwigTemplate_465dfbea9ec64caf20b12b17b99abdfe607b1e9050fa5ddcaef6dbd09a06d6d3 extends Twig_Template
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
        $__internal_f1e51a0f604bcbdf2dbe816276dd0fdd282891f6c9d74a0ca1ed63b13610f96b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1e51a0f604bcbdf2dbe816276dd0fdd282891f6c9d74a0ca1ed63b13610f96b->enter($__internal_f1e51a0f604bcbdf2dbe816276dd0fdd282891f6c9d74a0ca1ed63b13610f96b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        // line 2
        echo "

<form action=\"";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\" method=\"POST\">
    <div class=\"form-group\" id=\"fos_user_registration_form\">
        <table>
            <tr>
                <td>";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label');
        echo "</td>
                <td>";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.email", array(), "FOSUserBundle"))));
        echo "</td>
                <td>";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "</td>
            </tr>
            <tr>
                <td>";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'label');
        echo "</td>
                <td>";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.username", array(), "FOSUserBundle"))));
        echo "</td>
                <td>";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'errors');
        echo "</td>
            </tr>
            <tr>
                <td>";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'label');
        echo "</td>
                <td>";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.password", array(), "FOSUserBundle"))));
        echo "</td>
                <td>";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'errors');
        echo "</td>
            </tr>
            <tr>
                <td>";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'label');
        echo "</td>
                <td>";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.password_confirmation", array(), "FOSUserBundle"))));
        echo "</td>
                <td>";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'errors');
        echo "</td>
            </tr>
            <tr>
                <td>";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'label');
        echo "</td>
                <td>";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.password_confirmation", array(), "FOSUserBundle"))));
        echo "</td>
                <td>";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'errors');
        echo "</td>
            </tr>
            <tr>
                <td>";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'label');
        echo "</td>
                <td>";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.password_confirmation", array(), "FOSUserBundle"))));
        echo "</td>
                <td>";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'errors');
        echo "</td>
            </tr>
            <tr>
                <td>";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "matricule", array()), 'label');
        echo "</td>
                <td>";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "matricule", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Matricule")));
        echo "</td>
                <td>";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "matricule", array()), 'errors');
        echo "</td>
            </tr>
            <tr>
                <td>";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numtel", array()), 'label');
        echo "</td>
                <td>";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numtel", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Numtel")));
        echo "</td>
                <td>";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numtel", array()), 'errors');
        echo "</td>
            </tr>
            <tr>
                <td>";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'label');
        echo "</td>
                <td>";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Adresse")));
        echo "</td>
                <td>";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'errors');
        echo "</td>
            </tr>
            <tr>
                <td>";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fonction", array()), 'label');
        echo "</td>
                <td>";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fonction", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Fonction")));
        echo "</td>
                <td>";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fonction", array()), 'errors');
        echo "</td>
            </tr>
            <tr>
                <td>";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nbprojets", array()), 'label');
        echo "</td>
                <td>";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nbprojets", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Nbprojets")));
        echo "</td>
                <td>";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nbprojets", array()), 'errors');
        echo "</td>
            </tr>
            <tr>
                <td>";
        // line 63
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "evaluation", array()), 'label');
        echo "</td>
                <td>";
        // line 64
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "evaluation", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Evaluation")));
        echo "</td>
                <td>";
        // line 65
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "evaluation", array()), 'errors');
        echo "</td>
            </tr>
            <tr>
                <td>";
        // line 68
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "roles", array()), 'label');
        echo "</td>
                <td>";
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "roles", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.password_confirmation", array(), "FOSUserBundle"))));
        echo "</td>
                <td>";
        // line 70
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "roles", array()), 'errors');
        echo "</td>
            </tr>
            <tr>
                <td>
                    <div>
                        <input class=\"btn btn-lg btn-primary btn-block\" type=\"submit\" value=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\">
                    </div>
                </td>
            </tr>
            <tr><td>";
        // line 79
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "</td></tr>
        </table>




    </div>

</form>
";
        
        $__internal_f1e51a0f604bcbdf2dbe816276dd0fdd282891f6c9d74a0ca1ed63b13610f96b->leave($__internal_f1e51a0f604bcbdf2dbe816276dd0fdd282891f6c9d74a0ca1ed63b13610f96b_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 79,  217 => 75,  209 => 70,  205 => 69,  201 => 68,  195 => 65,  191 => 64,  187 => 63,  181 => 60,  177 => 59,  173 => 58,  167 => 55,  163 => 54,  159 => 53,  153 => 50,  149 => 49,  145 => 48,  139 => 45,  135 => 44,  131 => 43,  125 => 40,  121 => 39,  117 => 38,  111 => 35,  107 => 34,  103 => 33,  97 => 30,  93 => 29,  89 => 28,  83 => 25,  79 => 24,  75 => 23,  69 => 20,  65 => 19,  61 => 18,  55 => 15,  51 => 14,  47 => 13,  41 => 10,  37 => 9,  33 => 8,  26 => 4,  22 => 2,);
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


<form action=\"{{ path('fos_user_registration_register') }}\" method=\"POST\">
    <div class=\"form-group\" id=\"fos_user_registration_form\">
        <table>
            <tr>
                <td>{{ form_label(form.email) }}</td>
                <td>{{ form_widget(form.email, { 'attr': {'class': 'form-control', 'placeholder': 'form.email'|trans } }) }}</td>
                <td>{{ form_errors(form.email) }}</td>
            </tr>
            <tr>
                <td>{{ form_label(form.username) }}</td>
                <td>{{ form_widget(form.username, { 'attr': {'class': 'form-control', 'placeholder': 'form.username'|trans } }) }}</td>
                <td>{{ form_errors(form.username) }}</td>
            </tr>
            <tr>
                <td>{{ form_label(form.plainPassword.first) }}</td>
                <td>{{ form_widget(form.plainPassword.first, { 'attr': {'class': 'form-control', 'placeholder': 'form.password'|trans } }) }}</td>
                <td>{{ form_errors(form.plainPassword.first) }}</td>
            </tr>
            <tr>
                <td>{{ form_label(form.plainPassword.second) }}</td>
                <td>{{ form_widget(form.plainPassword.second, { 'attr': {'class': 'form-control', 'placeholder': 'form.password_confirmation'|trans } }) }}</td>
                <td>{{ form_errors(form.plainPassword.second) }}</td>
            </tr>
            <tr>
                <td>{{ form_label(form.nom) }}</td>
                <td>{{ form_widget(form.nom, { 'attr': {'class': 'form-control', 'placeholder': 'form.password_confirmation'|trans } }) }}</td>
                <td>{{ form_errors(form.nom) }}</td>
            </tr>
            <tr>
                <td>{{ form_label(form.prenom) }}</td>
                <td>{{ form_widget(form.prenom, { 'attr': {'class': 'form-control', 'placeholder': 'form.password_confirmation'|trans } }) }}</td>
                <td>{{ form_errors(form.prenom) }}</td>
            </tr>
            <tr>
                <td>{{ form_label(form.matricule) }}</td>
                <td>{{ form_widget(form.matricule, { 'attr': {'class': 'form-control', 'placeholder': 'Matricule' } }) }}</td>
                <td>{{ form_errors(form.matricule) }}</td>
            </tr>
            <tr>
                <td>{{ form_label(form.numtel) }}</td>
                <td>{{ form_widget(form.numtel, { 'attr': {'class': 'form-control', 'placeholder': 'Numtel' } }) }}</td>
                <td>{{ form_errors(form.numtel) }}</td>
            </tr>
            <tr>
                <td>{{ form_label(form.adresse) }}</td>
                <td>{{ form_widget(form.adresse, { 'attr': {'class': 'form-control', 'placeholder': 'Adresse' } }) }}</td>
                <td>{{ form_errors(form.adresse) }}</td>
            </tr>
            <tr>
                <td>{{ form_label(form.fonction) }}</td>
                <td>{{ form_widget(form.fonction, { 'attr': {'class': 'form-control', 'placeholder': 'Fonction' } }) }}</td>
                <td>{{ form_errors(form.fonction) }}</td>
            </tr>
            <tr>
                <td>{{ form_label(form.nbprojets) }}</td>
                <td>{{ form_widget(form.nbprojets, { 'attr': {'class': 'form-control', 'placeholder': 'Nbprojets' } }) }}</td>
                <td>{{ form_errors(form.nbprojets) }}</td>
            </tr>
            <tr>
                <td>{{ form_label(form.evaluation) }}</td>
                <td>{{ form_widget(form.evaluation, { 'attr': {'class': 'form-control', 'placeholder': 'Evaluation' } }) }}</td>
                <td>{{ form_errors(form.evaluation) }}</td>
            </tr>
            <tr>
                <td>{{ form_label(form.roles) }}</td>
                <td>{{ form_widget(form.roles, { 'attr': {'class': 'form-control', 'placeholder': 'form.password_confirmation'|trans } }) }}</td>
                <td>{{ form_errors(form.roles) }}</td>
            </tr>
            <tr>
                <td>
                    <div>
                        <input class=\"btn btn-lg btn-primary btn-block\" type=\"submit\" value=\"{{ 'registration.submit'|trans }}\">
                    </div>
                </td>
            </tr>
            <tr><td>{{ form_rest(form) }}</td></tr>
        </table>




    </div>

</form>
", "@FOSUser/Registration/register_content.html.twig", "C:\\wamp\\www\\pidevsocialpro\\src\\Esprit\\socialproBundle\\Resources\\views\\Registration\\register_content.html.twig");
    }
}
