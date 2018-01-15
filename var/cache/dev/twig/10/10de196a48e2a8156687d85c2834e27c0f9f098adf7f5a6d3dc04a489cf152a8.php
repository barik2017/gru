<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_ca1d58b9366b5f266cbd92ad0c699285368e504fe1112d9aa1c4e08b690f5b2b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c3821ec681f385f738cd9645f312a034f73a237d1432da234dd48c0c00f1b8ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3821ec681f385f738cd9645f312a034f73a237d1432da234dd48c0c00f1b8ac->enter($__internal_c3821ec681f385f738cd9645f312a034f73a237d1432da234dd48c0c00f1b8ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_fd5847aa31aed510706e5b81c96266d0e6c6ccf87a8f1aac0295bf21186bbdb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd5847aa31aed510706e5b81c96266d0e6c6ccf87a8f1aac0295bf21186bbdb2->enter($__internal_fd5847aa31aed510706e5b81c96266d0e6c6ccf87a8f1aac0295bf21186bbdb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3821ec681f385f738cd9645f312a034f73a237d1432da234dd48c0c00f1b8ac->leave($__internal_c3821ec681f385f738cd9645f312a034f73a237d1432da234dd48c0c00f1b8ac_prof);

        
        $__internal_fd5847aa31aed510706e5b81c96266d0e6c6ccf87a8f1aac0295bf21186bbdb2->leave($__internal_fd5847aa31aed510706e5b81c96266d0e6c6ccf87a8f1aac0295bf21186bbdb2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7ba6df3db52ca79ce7c1c946d79208f984c82bb6f1e89d5cc1718daba2e8bb0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ba6df3db52ca79ce7c1c946d79208f984c82bb6f1e89d5cc1718daba2e8bb0b->enter($__internal_7ba6df3db52ca79ce7c1c946d79208f984c82bb6f1e89d5cc1718daba2e8bb0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c236eab6831bc50d59aaa8de23e0aa4956870a6d208c8181deca74bfff0afd17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c236eab6831bc50d59aaa8de23e0aa4956870a6d208c8181deca74bfff0afd17->enter($__internal_c236eab6831bc50d59aaa8de23e0aa4956870a6d208c8181deca74bfff0afd17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c236eab6831bc50d59aaa8de23e0aa4956870a6d208c8181deca74bfff0afd17->leave($__internal_c236eab6831bc50d59aaa8de23e0aa4956870a6d208c8181deca74bfff0afd17_prof);

        
        $__internal_7ba6df3db52ca79ce7c1c946d79208f984c82bb6f1e89d5cc1718daba2e8bb0b->leave($__internal_7ba6df3db52ca79ce7c1c946d79208f984c82bb6f1e89d5cc1718daba2e8bb0b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_db0967e804687f8b8dcc75ab16fdf4f7cee6dde47eef60cc3ccce36abb556ae6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db0967e804687f8b8dcc75ab16fdf4f7cee6dde47eef60cc3ccce36abb556ae6->enter($__internal_db0967e804687f8b8dcc75ab16fdf4f7cee6dde47eef60cc3ccce36abb556ae6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ff766dc08eccd95f6b232638829fc7a90c7dfe21517ad36702234df31ed14361 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff766dc08eccd95f6b232638829fc7a90c7dfe21517ad36702234df31ed14361->enter($__internal_ff766dc08eccd95f6b232638829fc7a90c7dfe21517ad36702234df31ed14361_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ff766dc08eccd95f6b232638829fc7a90c7dfe21517ad36702234df31ed14361->leave($__internal_ff766dc08eccd95f6b232638829fc7a90c7dfe21517ad36702234df31ed14361_prof);

        
        $__internal_db0967e804687f8b8dcc75ab16fdf4f7cee6dde47eef60cc3ccce36abb556ae6->leave($__internal_db0967e804687f8b8dcc75ab16fdf4f7cee6dde47eef60cc3ccce36abb556ae6_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4c94da57ac90d0da9af356982e75b6272dc9a0a388086e8cc8e01341c7d515b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c94da57ac90d0da9af356982e75b6272dc9a0a388086e8cc8e01341c7d515b2->enter($__internal_4c94da57ac90d0da9af356982e75b6272dc9a0a388086e8cc8e01341c7d515b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b611777e828d823ff4c9b71f6f34eed78200bab2a3b64294ac5f64b070741e6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b611777e828d823ff4c9b71f6f34eed78200bab2a3b64294ac5f64b070741e6e->enter($__internal_b611777e828d823ff4c9b71f6f34eed78200bab2a3b64294ac5f64b070741e6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? null))));
        echo "
";
        
        $__internal_b611777e828d823ff4c9b71f6f34eed78200bab2a3b64294ac5f64b070741e6e->leave($__internal_b611777e828d823ff4c9b71f6f34eed78200bab2a3b64294ac5f64b070741e6e_prof);

        
        $__internal_4c94da57ac90d0da9af356982e75b6272dc9a0a388086e8cc8e01341c7d515b2->leave($__internal_4c94da57ac90d0da9af356982e75b6272dc9a0a388086e8cc8e01341c7d515b2_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/test_project/gru/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
