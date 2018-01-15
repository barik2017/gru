<?php

/* micro/random.html.twig */
class __TwigTemplate_6651f2ab9b0fbeb19e4d475e90bcf42cb7bcd99e4f11c568c1992ea5fbfa4dc2 extends Twig_Template
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
        $__internal_bdb83bcb0511f7a10d6ac002a0ffb456d8d351da468dcc65c247cb8aad533ecc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdb83bcb0511f7a10d6ac002a0ffb456d8d351da468dcc65c247cb8aad533ecc->enter($__internal_bdb83bcb0511f7a10d6ac002a0ffb456d8d351da468dcc65c247cb8aad533ecc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "micro/random.html.twig"));

        $__internal_c6bab46bb6862da1774976962af93a4536a18e7957611a63ab240b0b6537c04a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6bab46bb6862da1774976962af93a4536a18e7957611a63ab240b0b6537c04a->enter($__internal_c6bab46bb6862da1774976962af93a4536a18e7957611a63ab240b0b6537c04a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "micro/random.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>Random action</title>
    </head>
    <body>
        <p>";
        // line 7
        echo twig_escape_filter($this->env, ($context["number"] ?? null), "html", null, true);
        echo "</p>
    </body>
</html>
";
        
        $__internal_bdb83bcb0511f7a10d6ac002a0ffb456d8d351da468dcc65c247cb8aad533ecc->leave($__internal_bdb83bcb0511f7a10d6ac002a0ffb456d8d351da468dcc65c247cb8aad533ecc_prof);

        
        $__internal_c6bab46bb6862da1774976962af93a4536a18e7957611a63ab240b0b6537c04a->leave($__internal_c6bab46bb6862da1774976962af93a4536a18e7957611a63ab240b0b6537c04a_prof);

    }

    public function getTemplateName()
    {
        return "micro/random.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 7,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <title>Random action</title>
    </head>
    <body>
        <p>{{ number }}</p>
    </body>
</html>
", "micro/random.html.twig", "/var/www/test_project/gru/app/Resources/views/micro/random.html.twig");
    }
}
