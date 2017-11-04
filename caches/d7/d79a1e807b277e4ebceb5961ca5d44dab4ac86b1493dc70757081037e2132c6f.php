<?php

/* auth/signup.twig */
class __TwigTemplate_18a78f31b141b378355323b8056300c8e266f873af05d041eed35eb4449c7a6f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("templates/app.twig", "auth/signup.twig", 1);
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
        echo "Signup";
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"row\">
        <div class=\"col-md-6 col-md-offset-3\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">Sign up</div>
                <div class=\"panel-body\">
                    ";
        // line 9
        echo " <!-- dump errors from class Validator -->
                    <form action=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("auth.signup"), "html", null, true);
        echo "\" method=\"post\" autocomplete=\"off\">
                        <div class=\"form-group";
        // line 11
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "email", array())) ? (" has-error") : (""));
        echo "\">
                            <label for=\"email\">Email</label>
                            <input type=\"text\" name=\"email\" id=\"email\" placeholder=\"your@email.com\" class=\"form-control\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "email", array()), "html", null, true);
        echo "\">
                            ";
        // line 14
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "email", array())) {
            // line 15
            echo "                                <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "email", array())), "html", null, true);
            echo "</span>
                            ";
        }
        // line 17
        echo "                        </div>
                        <div class=\"form-group";
        // line 18
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "name", array())) ? (" has-error") : (""));
        echo "\">
                            <label for=\"name\">Name</label>
                            <input type=\"text\" name=\"name\" id=\"name\" class=\"form-control\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "name", array()), "html", null, true);
        echo "\">
                            ";
        // line 21
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "name", array())) {
            // line 22
            echo "                                <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "name", array())), "html", null, true);
            echo "</span>
                            ";
        }
        // line 24
        echo "                        </div>                        
                        <div class=\"form-group";
        // line 25
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "password", array())) ? (" has-error") : (""));
        echo "\">                        
                            <label for=\"password\">Password</label>
                            <input type=\"password\" name=\"password\" id=\"password\" class=\"form-control\">
                            ";
        // line 28
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "password", array())) {
            // line 29
            echo "                                <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "password", array())), "html", null, true);
            echo "</span>
                            ";
        }
        // line 31
        echo "                        </div>
                        <button type=\"submit\" class=\"btn btn-default\">Sign up</button>
                        ";
        // line 33
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
        return "auth/signup.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 33,  106 => 31,  100 => 29,  98 => 28,  92 => 25,  89 => 24,  83 => 22,  81 => 21,  77 => 20,  72 => 18,  69 => 17,  63 => 15,  61 => 14,  57 => 13,  52 => 11,  48 => 10,  45 => 9,  38 => 4,  35 => 3,  29 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'templates/app.twig' %}
{% block title %}Signup{% endblock %}
{% block content %}
    <div class=\"row\">
        <div class=\"col-md-6 col-md-offset-3\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">Sign up</div>
                <div class=\"panel-body\">
                    {#{ errors | json_encode }#} <!-- dump errors from class Validator -->
                    <form action=\"{{ path_for('auth.signup') }}\" method=\"post\" autocomplete=\"off\">
                        <div class=\"form-group{{ errors.email ? ' has-error' : '' }}\">
                            <label for=\"email\">Email</label>
                            <input type=\"text\" name=\"email\" id=\"email\" placeholder=\"your@email.com\" class=\"form-control\" value=\"{{ old.email }}\">
                            {% if errors.email %}
                                <span class=\"help-block\">{{ errors.email | first }}</span>
                            {% endif %}
                        </div>
                        <div class=\"form-group{{ errors.name ? ' has-error' : '' }}\">
                            <label for=\"name\">Name</label>
                            <input type=\"text\" name=\"name\" id=\"name\" class=\"form-control\" value=\"{{ old.name }}\">
                            {% if errors.name %}
                                <span class=\"help-block\">{{ errors.name | first }}</span>
                            {% endif %}
                        </div>                        
                        <div class=\"form-group{{ errors.password ? ' has-error' : '' }}\">                        
                            <label for=\"password\">Password</label>
                            <input type=\"password\" name=\"password\" id=\"password\" class=\"form-control\">
                            {% if errors.password %}
                                <span class=\"help-block\">{{ errors.password | first }}</span>
                            {% endif %}
                        </div>
                        <button type=\"submit\" class=\"btn btn-default\">Sign up</button>
                        {{ csrf.field | raw }}
                    </form>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "auth/signup.twig", "C:\\xampp\\htdocs\\slim-auth-email\\resources\\views\\auth\\signup.twig");
    }
}
