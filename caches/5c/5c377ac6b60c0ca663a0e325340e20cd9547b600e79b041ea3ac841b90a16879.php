<?php

/* templates/app.twig */
class __TwigTemplate_9eeab70404d1678b0b8064863c30d0dd6ff72a7351c4793c7c3075c3e20365dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">    
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
    <link type=\"text/css\" rel=\"stylesheet\" media=\"all\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/css/app.css\" />
\t";
        // line 9
        $this->displayBlock('head', $context, $blocks);
        echo "    
</head>
<body>
    ";
        // line 12
        $this->loadTemplate("templates/partials/navigation.twig", "templates/app.twig", 12)->display($context);
        // line 13
        echo "    <div class=\"container\">
        ";
        // line 14
        $this->loadTemplate("templates/partials/flash.twig", "templates/app.twig", 14)->display($context);
        // line 15
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 16
        echo "    </div>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
    ";
        // line 19
        $this->displayBlock('javascripts', $context, $blocks);
        echo "    
</body>
</html>
";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
    }

    // line 9
    public function block_head($context, array $blocks = array())
    {
    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
    }

    // line 19
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "templates/app.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 19,  78 => 15,  73 => 9,  68 => 4,  60 => 19,  55 => 16,  52 => 15,  50 => 14,  47 => 13,  45 => 12,  39 => 9,  35 => 8,  28 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <title>{% block title %}{% endblock %}</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">    
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
    <link type=\"text/css\" rel=\"stylesheet\" media=\"all\" href=\"{{ base_url() }}/css/app.css\" />
\t{% block head %}{% endblock %}    
</head>
<body>
    {% include 'templates/partials/navigation.twig' %}
    <div class=\"container\">
        {% include 'templates/partials/flash.twig' %}
        {% block content %}{% endblock %}
    </div>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
    {% block javascripts %}{% endblock %}    
</body>
</html>
", "templates/app.twig", "C:\\xampp\\htdocs\\slim-auth-dev\\resources\\views\\templates\\app.twig");
    }
}
