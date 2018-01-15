<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_cba6f20f191ff5b5b6e9143801301eaca2d8765c7c1792ff6122ba7bf13ee6f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_6c19d21523a2893630b60ef3abfb62d254075abcbfba603edc524617ad5124fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c19d21523a2893630b60ef3abfb62d254075abcbfba603edc524617ad5124fb->enter($__internal_6c19d21523a2893630b60ef3abfb62d254075abcbfba603edc524617ad5124fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_030b199a05886ec4632ed4b13cd3461d35df7954ec7eaba6f85bbd4bab0c0b1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_030b199a05886ec4632ed4b13cd3461d35df7954ec7eaba6f85bbd4bab0c0b1e->enter($__internal_030b199a05886ec4632ed4b13cd3461d35df7954ec7eaba6f85bbd4bab0c0b1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c19d21523a2893630b60ef3abfb62d254075abcbfba603edc524617ad5124fb->leave($__internal_6c19d21523a2893630b60ef3abfb62d254075abcbfba603edc524617ad5124fb_prof);

        
        $__internal_030b199a05886ec4632ed4b13cd3461d35df7954ec7eaba6f85bbd4bab0c0b1e->leave($__internal_030b199a05886ec4632ed4b13cd3461d35df7954ec7eaba6f85bbd4bab0c0b1e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fab3223f151f1cef712cfd598070c7e3b190444c164a83073fd3fda7934508ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fab3223f151f1cef712cfd598070c7e3b190444c164a83073fd3fda7934508ce->enter($__internal_fab3223f151f1cef712cfd598070c7e3b190444c164a83073fd3fda7934508ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a20e61ece5f37e78e9b60a26cd7a2e00e0449950187a5d7df92806664857e34d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a20e61ece5f37e78e9b60a26cd7a2e00e0449950187a5d7df92806664857e34d->enter($__internal_a20e61ece5f37e78e9b60a26cd7a2e00e0449950187a5d7df92806664857e34d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["collector"] ?? null), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? null))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_a20e61ece5f37e78e9b60a26cd7a2e00e0449950187a5d7df92806664857e34d->leave($__internal_a20e61ece5f37e78e9b60a26cd7a2e00e0449950187a5d7df92806664857e34d_prof);

        
        $__internal_fab3223f151f1cef712cfd598070c7e3b190444c164a83073fd3fda7934508ce->leave($__internal_fab3223f151f1cef712cfd598070c7e3b190444c164a83073fd3fda7934508ce_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_55da1a6ea5794aeec8dd7de2fedd928aad284f40143f2fd87447964ba4c86ae4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55da1a6ea5794aeec8dd7de2fedd928aad284f40143f2fd87447964ba4c86ae4->enter($__internal_55da1a6ea5794aeec8dd7de2fedd928aad284f40143f2fd87447964ba4c86ae4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_24036c62d28b2230e8be5598f50de4b592e5aad83b078b0fda3472a2cc331850 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24036c62d28b2230e8be5598f50de4b592e5aad83b078b0fda3472a2cc331850->enter($__internal_24036c62d28b2230e8be5598f50de4b592e5aad83b078b0fda3472a2cc331850_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["collector"] ?? null), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["collector"] ?? null), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_24036c62d28b2230e8be5598f50de4b592e5aad83b078b0fda3472a2cc331850->leave($__internal_24036c62d28b2230e8be5598f50de4b592e5aad83b078b0fda3472a2cc331850_prof);

        
        $__internal_55da1a6ea5794aeec8dd7de2fedd928aad284f40143f2fd87447964ba4c86ae4->leave($__internal_55da1a6ea5794aeec8dd7de2fedd928aad284f40143f2fd87447964ba4c86ae4_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fc7949853a1d407b88d1554e6e696e4cebd032fde99581eaea1a9ac577ed9a8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc7949853a1d407b88d1554e6e696e4cebd032fde99581eaea1a9ac577ed9a8c->enter($__internal_fc7949853a1d407b88d1554e6e696e4cebd032fde99581eaea1a9ac577ed9a8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7e1a91d45bb8087578607e1d48c84867064464724b2081952dc4960ac2f2a65a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e1a91d45bb8087578607e1d48c84867064464724b2081952dc4960ac2f2a65a->enter($__internal_7e1a91d45bb8087578607e1d48c84867064464724b2081952dc4960ac2f2a65a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), ($context["collector"] ?? null), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? null))));
            echo "
        </div>
    ";
        }
        
        $__internal_7e1a91d45bb8087578607e1d48c84867064464724b2081952dc4960ac2f2a65a->leave($__internal_7e1a91d45bb8087578607e1d48c84867064464724b2081952dc4960ac2f2a65a_prof);

        
        $__internal_fc7949853a1d407b88d1554e6e696e4cebd032fde99581eaea1a9ac577ed9a8c->leave($__internal_fc7949853a1d407b88d1554e6e696e4cebd032fde99581eaea1a9ac577ed9a8c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/test_project/gru/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
