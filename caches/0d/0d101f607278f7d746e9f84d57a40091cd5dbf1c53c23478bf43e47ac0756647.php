<?php

/* auth/password/change.twig */
class __TwigTemplate_a5ea1ebb71ee6ed376f4aa260a998a1621c6de96850d9f30169f0593437c97dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("templates/app.twig", "auth/password/change.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "templates/app.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Change password";
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"row\">
        <div class=\"col-md-6 col-md-offset-3\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">Change password</div>
                <div class=\"panel-body\">
                    <form action=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("auth.password.change"), "html", null, true);
        echo "\" method=\"post\" autocomplete=\"off\">
                        <div class=\"form-group";
        // line 10
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "password_old", array())) ? (" has-error") : (""));
        echo "\">                        
                            <label for=\"password_old\">Current password</label>
                            <input type=\"password\" name=\"password_old\" id=\"password_old\" class=\"form-control\">
                            ";
        // line 13
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "password_old", array())) {
            // line 14
            echo "                                <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "password_old", array())), "html", null, true);
            echo "</span>
                            ";
        }
        // line 16
        echo "                        </div>
                        <div class=\"form-group";
        // line 17
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "password", array())) ? (" has-error") : (""));
        echo "\">                        
                            <label for=\"password\">New password</label>
                            <input type=\"password\" name=\"password\" id=\"password\" class=\"form-control\">
                            ";
        // line 20
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "password", array())) {
            // line 21
            echo "                                <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "password", array())), "html", null, true);
            echo "</span>
                            ";
        }
        // line 23
        echo "                        </div>
                        <button type=\"submit\" class=\"btn btn-default\">Change password</button>
                        ";
        // line 25
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["csrf"] ?? null), "field", array());
        echo "
                    </form>
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "auth/password/change.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 25,  80 => 23,  74 => 21,  72 => 20,  66 => 17,  63 => 16,  57 => 14,  55 => 13,  49 => 10,  45 => 9,  38 => 4,  35 => 3,  29 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'templates/app.twig' %}
{% block title %}Change password{% endblock %}
{% block content %}
    <div class=\"row\">
        <div class=\"col-md-6 col-md-offset-3\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">Change password</div>
                <div class=\"panel-body\">
                    <form action=\"{{ path_for('auth.password.change') }}\" method=\"post\" autocomplete=\"off\">
                        <div class=\"form-group{{ errors.password_old ? ' has-error' : '' }}\">                        
                            <label for=\"password_old\">Current password</label>
                            <input type=\"password\" name=\"password_old\" id=\"password_old\" class=\"form-control\">
                            {% if errors.password_old %}
                                <span class=\"help-block\">{{ errors.password_old | first }}</span>
                            {% endif %}
                        </div>
                        <div class=\"form-group{{ errors.password ? ' has-error' : '' }}\">                        
                            <label for=\"password\">New password</label>
                            <input type=\"password\" name=\"password\" id=\"password\" class=\"form-control\">
                            {% if errors.password %}
                                <span class=\"help-block\">{{ errors.password | first }}</span>
                            {% endif %}
                        </div>
                        <button type=\"submit\" class=\"btn btn-default\">Change password</button>
                        {{ csrf.field | raw }}
                    </form>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "auth/password/change.twig", "C:\\xampp\\htdocs\\slim-auth-email\\resources\\views\\auth\\password\\change.twig");
    }
}
