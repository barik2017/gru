<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_1550e6605c01be83612de4427e7848109b47dc21ea75a98ccdbbed8f435defe9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1c80e49f773f2013d5f11986da25b786e4e8b6839b93e7e907ddf6beddd10787 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c80e49f773f2013d5f11986da25b786e4e8b6839b93e7e907ddf6beddd10787->enter($__internal_1c80e49f773f2013d5f11986da25b786e4e8b6839b93e7e907ddf6beddd10787_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_6ee5c75d524ea3d87aa1ec7a39b5c462fb5c4e30789f7ec6fd7669f1dcfd694e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ee5c75d524ea3d87aa1ec7a39b5c462fb5c4e30789f7ec6fd7669f1dcfd694e->enter($__internal_6ee5c75d524ea3d87aa1ec7a39b5c462fb5c4e30789f7ec6fd7669f1dcfd694e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c80e49f773f2013d5f11986da25b786e4e8b6839b93e7e907ddf6beddd10787->leave($__internal_1c80e49f773f2013d5f11986da25b786e4e8b6839b93e7e907ddf6beddd10787_prof);

        
        $__internal_6ee5c75d524ea3d87aa1ec7a39b5c462fb5c4e30789f7ec6fd7669f1dcfd694e->leave($__internal_6ee5c75d524ea3d87aa1ec7a39b5c462fb5c4e30789f7ec6fd7669f1dcfd694e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4ec7b49f3c4564367111853088ec86b692e0e06657a7ff6e2165b590c37b98be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ec7b49f3c4564367111853088ec86b692e0e06657a7ff6e2165b590c37b98be->enter($__internal_4ec7b49f3c4564367111853088ec86b692e0e06657a7ff6e2165b590c37b98be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_4270e3bf65bc845605a7d97f721978a77e31929790502499c3abd2a9f40ae0c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4270e3bf65bc845605a7d97f721978a77e31929790502499c3abd2a9f40ae0c1->enter($__internal_4270e3bf65bc845605a7d97f721978a77e31929790502499c3abd2a9f40ae0c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_4270e3bf65bc845605a7d97f721978a77e31929790502499c3abd2a9f40ae0c1->leave($__internal_4270e3bf65bc845605a7d97f721978a77e31929790502499c3abd2a9f40ae0c1_prof);

        
        $__internal_4ec7b49f3c4564367111853088ec86b692e0e06657a7ff6e2165b590c37b98be->leave($__internal_4ec7b49f3c4564367111853088ec86b692e0e06657a7ff6e2165b590c37b98be_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/var/www/test_project/gru/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
