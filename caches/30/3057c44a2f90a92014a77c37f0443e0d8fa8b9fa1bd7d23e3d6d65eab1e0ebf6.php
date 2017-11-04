<?php

/* templates/partials/flash.twig */
class __TwigTemplate_b0a94202c111211900a9440e8626ae79dd76f62cc75b4f7a2c70eef8c314a0df extends Twig_Template
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
        echo "<!-- 'success/info/warning/danger' -->

<!--
<div class=\"alert alert-info\">
    message
</div>
-->

";
        // line 9
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["flash"] ?? null), "getMessage", array(0 => "info"), "method")) {
            // line 10
            echo "    <div class=\"alert alert-info\">
        ";
            // line 11
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["flash"] ?? null), "getMessage", array(0 => "info"), "method")), "html", null, true);
            echo "
    </div>
";
        }
        // line 14
        echo "
";
        // line 15
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["flash"] ?? null), "getMessage", array(0 => "danger"), "method")) {
            // line 16
            echo "    <div class=\"alert alert-danger\">
        ";
            // line 17
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["flash"] ?? null), "getMessage", array(0 => "danger"), "method")), "html", null, true);
            echo "
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "templates/partials/flash.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 17,  45 => 16,  43 => 15,  40 => 14,  34 => 11,  31 => 10,  29 => 9,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- 'success/info/warning/danger' -->

<!--
<div class=\"alert alert-info\">
    message
</div>
-->

{% if flash.getMessage('info') %}
    <div class=\"alert alert-info\">
        {{ flash.getMessage('info') | first }}
    </div>
{% endif %}

{% if flash.getMessage('danger') %}
    <div class=\"alert alert-danger\">
        {{ flash.getMessage('danger') | first }}
    </div>
{% endif %}
", "templates/partials/flash.twig", "C:\\xampp\\htdocs\\slim_skeleton\\resources\\views\\templates\\partials\\flash.twig");
    }
}
