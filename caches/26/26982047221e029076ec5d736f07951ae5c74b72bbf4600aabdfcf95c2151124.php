<?php

/* templates/partials/navigation.twig */
class __TwigTemplate_9d0d94c5dc793d097d1247db374ccd245316afe2f91f7b3db0e9631711b36de9 extends Twig_Template
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
        // line 1
        echo "<nav class=\"navbar navbar-inverse\">
  <div class=\"container-fluid\">
    <div class=\"navbar-header\">
      <a class=\"navbar-brand\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("home"), "html", null, true);
        echo "\">WebSiteName</a>
    </div>
    <ul class=\"nav navbar-nav\">
      <li class=\"active\"><a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("home"), "html", null, true);
        echo "\">Home</a></li>
      <li class=\"dropdown\"><a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Page 1 <span class=\"caret\"></span></a>
        <ul class=\"dropdown-menu\">
          <li><a href=\"#\">Page 1-1</a></li>
          <li><a href=\"#\">Page 1-2</a></li>
          <li><a href=\"#\">Page 1-3</a></li>
        </ul>
      </li>
      <li><a href=\"#\">Page 2</a></li>
    </ul>
    <ul class=\"nav navbar-nav navbar-right\">
      ";
        // line 18
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["auth"] ?? null), "check", array())) {
            // line 19
            echo "        <li class=\"dropdown\"><a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Welcome, ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["auth"] ?? null), "user", array()), "name", array()), "html", null, true);
            echo " <b class=\"caret\"></b></a>
            <ul class=\"dropdown-menu\">
                <li><a href=\"/user/preferences\"><i class=\"icon-cog\"></i> Preferences</a></li>
                <li><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("auth.password.change"), "html", null, true);
            echo "\"><i class=\"icon-envelope\"></i> Change Password</a></li>
                <li class=\"divider\"></li>
                <li><a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("auth.signout"), "html", null, true);
            echo "\"><i class=\"icon-off\"></i> Logout</a></li>
            </ul>
        </li>
      ";
        } else {
            // line 28
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("auth.signup"), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-user\"></span> Sign Up</a></li>
        <li><a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("auth.signin"), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-log-in\"></span> Login</a></li>
      ";
        }
        // line 31
        echo "    </ul>
  </div>
</nav>";
    }

    public function getTemplateName()
    {
        return "templates/partials/navigation.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 31,  70 => 29,  65 => 28,  58 => 24,  53 => 22,  46 => 19,  44 => 18,  30 => 7,  24 => 4,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav class=\"navbar navbar-inverse\">
  <div class=\"container-fluid\">
    <div class=\"navbar-header\">
      <a class=\"navbar-brand\" href=\"{{ path_for('home') }}\">WebSiteName</a>
    </div>
    <ul class=\"nav navbar-nav\">
      <li class=\"active\"><a href=\"{{ path_for('home') }}\">Home</a></li>
      <li class=\"dropdown\"><a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">Page 1 <span class=\"caret\"></span></a>
        <ul class=\"dropdown-menu\">
          <li><a href=\"#\">Page 1-1</a></li>
          <li><a href=\"#\">Page 1-2</a></li>
          <li><a href=\"#\">Page 1-3</a></li>
        </ul>
      </li>
      <li><a href=\"#\">Page 2</a></li>
    </ul>
    <ul class=\"nav navbar-nav navbar-right\">
      {% if auth.check %}
        <li class=\"dropdown\"><a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Welcome, {{ auth.user.name }} <b class=\"caret\"></b></a>
            <ul class=\"dropdown-menu\">
                <li><a href=\"/user/preferences\"><i class=\"icon-cog\"></i> Preferences</a></li>
                <li><a href=\"{{ path_for('auth.password.change') }}\"><i class=\"icon-envelope\"></i> Change Password</a></li>
                <li class=\"divider\"></li>
                <li><a href=\"{{ path_for('auth.signout') }}\"><i class=\"icon-off\"></i> Logout</a></li>
            </ul>
        </li>
      {% else %}
        <li><a href=\"{{ path_for('auth.signup') }}\"><span class=\"glyphicon glyphicon-user\"></span> Sign Up</a></li>
        <li><a href=\"{{ path_for('auth.signin') }}\"><span class=\"glyphicon glyphicon-log-in\"></span> Login</a></li>
      {% endif %}
    </ul>
  </div>
</nav>", "templates/partials/navigation.twig", "C:\\xampp\\htdocs\\slim-auth-dev\\resources\\views\\templates\\partials\\navigation.twig");
    }
}
