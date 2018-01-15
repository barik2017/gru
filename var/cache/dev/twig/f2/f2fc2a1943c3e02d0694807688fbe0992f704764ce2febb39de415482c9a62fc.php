<?php

/* @WebProfiler/Collector/memory.html.twig */
class __TwigTemplate_dad99750ae7fde2bba24134453e451c4aab2f00d7dc9ee4bc8b1acf7cfd574ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/memory.html.twig", 1);
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
        $__internal_b73876a1019cea1ec8a5d35d52efa5ba3cc3d11a4ed3c2f06e113bcacb456782 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b73876a1019cea1ec8a5d35d52efa5ba3cc3d11a4ed3c2f06e113bcacb456782->enter($__internal_b73876a1019cea1ec8a5d35d52efa5ba3cc3d11a4ed3c2f06e113bcacb456782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/memory.html.twig"));

        $__internal_72cbad07b4804a3d45ff2a9b781d6fed61795cb2018713d83ace42fc02fb4b66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72cbad07b4804a3d45ff2a9b781d6fed61795cb2018713d83ace42fc02fb4b66->enter($__internal_72cbad07b4804a3d45ff2a9b781d6fed61795cb2018713d83ace42fc02fb4b66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/memory.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b73876a1019cea1ec8a5d35d52efa5ba3cc3d11a4ed3c2f06e113bcacb456782->leave($__internal_b73876a1019cea1ec8a5d35d52efa5ba3cc3d11a4ed3c2f06e113bcacb456782_prof);

        
        $__internal_72cbad07b4804a3d45ff2a9b781d6fed61795cb2018713d83ace42fc02fb4b66->leave($__internal_72cbad07b4804a3d45ff2a9b781d6fed61795cb2018713d83ace42fc02fb4b66_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ad075b7f1c4df4ae6455c9b97a3a1e425ce9151aa1b2e3bbd0c087a0c5ccb742 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad075b7f1c4df4ae6455c9b97a3a1e425ce9151aa1b2e3bbd0c087a0c5ccb742->enter($__internal_ad075b7f1c4df4ae6455c9b97a3a1e425ce9151aa1b2e3bbd0c087a0c5ccb742_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_3d705ab0568b417525ac6a4272f3aae53bb1ece3c6f298e3dc11a2e8be1a3d19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d705ab0568b417525ac6a4272f3aae53bb1ece3c6f298e3dc11a2e8be1a3d19->enter($__internal_3d705ab0568b417525ac6a4272f3aae53bb1ece3c6f298e3dc11a2e8be1a3d19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        $context["status_color"] = (((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["collector"] ?? null), "memory", array()) / 1024) / 1024) > 50)) ? ("yellow") : (""));
        // line 6
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/memory.svg");
        echo "
        <span class=\"sf-toolbar-value\">";
        // line 7
        echo twig_escape_filter($this->env, sprintf("%.1f", ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["collector"] ?? null), "memory", array()) / 1024) / 1024)), "html", null, true);
        echo "</span>
        <span class=\"sf-toolbar-label\">MB</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 10
        echo "
    ";
        // line 11
        ob_start();
        // line 12
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Peak memory usage</b>
            <span>";
        // line 14
        echo twig_escape_filter($this->env, sprintf("%.1f", ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["collector"] ?? null), "memory", array()) / 1024) / 1024)), "html", null, true);
        echo " MB</span>
        </div>

        <div class=\"sf-toolbar-info-piece\">
            <b>PHP memory limit</b>
            <span>";
        // line 19
        echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["collector"] ?? null), "memoryLimit", array()) ==  -1)) ? ("Unlimited") : (sprintf("%.0f MB", ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["collector"] ?? null), "memoryLimit", array()) / 1024) / 1024)))), "html", null, true);
        echo "</span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 22
        echo "
    ";
        // line 23
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => ($context["profiler_url"] ?? null), "name" => "time", "status" => ($context["status_color"] ?? null)));
        echo "
";
        
        $__internal_3d705ab0568b417525ac6a4272f3aae53bb1ece3c6f298e3dc11a2e8be1a3d19->leave($__internal_3d705ab0568b417525ac6a4272f3aae53bb1ece3c6f298e3dc11a2e8be1a3d19_prof);

        
        $__internal_ad075b7f1c4df4ae6455c9b97a3a1e425ce9151aa1b2e3bbd0c087a0c5ccb742->leave($__internal_ad075b7f1c4df4ae6455c9b97a3a1e425ce9151aa1b2e3bbd0c087a0c5ccb742_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/memory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 23,  89 => 22,  83 => 19,  75 => 14,  71 => 12,  69 => 11,  66 => 10,  60 => 7,  55 => 6,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {% set status_color = (collector.memory / 1024 / 1024) > 50 ? 'yellow' : '' %}
        {{ include('@WebProfiler/Icon/memory.svg') }}
        <span class=\"sf-toolbar-value\">{{ '%.1f'|format(collector.memory / 1024 / 1024) }}</span>
        <span class=\"sf-toolbar-label\">MB</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b>Peak memory usage</b>
            <span>{{ '%.1f'|format(collector.memory / 1024 / 1024) }} MB</span>
        </div>

        <div class=\"sf-toolbar-info-piece\">
            <b>PHP memory limit</b>
            <span>{{ collector.memoryLimit == -1 ? 'Unlimited' : '%.0f MB'|format(collector.memoryLimit / 1024 / 1024) }}</span>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: profiler_url, name: 'time', status: status_color }) }}
{% endblock %}
", "@WebProfiler/Collector/memory.html.twig", "/var/www/test_project/gru/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/memory.html.twig");
    }
}
