<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_4e3271903e33ece75271e854a17246dc43a169ac90a69a863843468c5ada6dd1 extends Twig_Template
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
        $__internal_697bbf67dc0eb9494ed111b5f6874febdf75ccbb2a4dc339a0c7c42896c50bcd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_697bbf67dc0eb9494ed111b5f6874febdf75ccbb2a4dc339a0c7c42896c50bcd->enter($__internal_697bbf67dc0eb9494ed111b5f6874febdf75ccbb2a4dc339a0c7c42896c50bcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_30431575aa0d4922f33dfc2bc5194ce511faf2f0852d6262ea73545e18fc8b7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30431575aa0d4922f33dfc2bc5194ce511faf2f0852d6262ea73545e18fc8b7c->enter($__internal_30431575aa0d4922f33dfc2bc5194ce511faf2f0852d6262ea73545e18fc8b7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_697bbf67dc0eb9494ed111b5f6874febdf75ccbb2a4dc339a0c7c42896c50bcd->leave($__internal_697bbf67dc0eb9494ed111b5f6874febdf75ccbb2a4dc339a0c7c42896c50bcd_prof);

        
        $__internal_30431575aa0d4922f33dfc2bc5194ce511faf2f0852d6262ea73545e18fc8b7c->leave($__internal_30431575aa0d4922f33dfc2bc5194ce511faf2f0852d6262ea73545e18fc8b7c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9cb650f7a8309b1518f56f69692aa1ebd34c93a5dfaeee7178244320287b707a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cb650f7a8309b1518f56f69692aa1ebd34c93a5dfaeee7178244320287b707a->enter($__internal_9cb650f7a8309b1518f56f69692aa1ebd34c93a5dfaeee7178244320287b707a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_40d58f8afca2cd76eb839d51704b210bb92b63ed9393b4ffe9d8e5b68f709647 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40d58f8afca2cd76eb839d51704b210bb92b63ed9393b4ffe9d8e5b68f709647->enter($__internal_40d58f8afca2cd76eb839d51704b210bb92b63ed9393b4ffe9d8e5b68f709647_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_40d58f8afca2cd76eb839d51704b210bb92b63ed9393b4ffe9d8e5b68f709647->leave($__internal_40d58f8afca2cd76eb839d51704b210bb92b63ed9393b4ffe9d8e5b68f709647_prof);

        
        $__internal_9cb650f7a8309b1518f56f69692aa1ebd34c93a5dfaeee7178244320287b707a->leave($__internal_9cb650f7a8309b1518f56f69692aa1ebd34c93a5dfaeee7178244320287b707a_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_701c89c2253dabbd5304f15206c01e26742c6f9cad87b2b43c4be3b176e36b08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_701c89c2253dabbd5304f15206c01e26742c6f9cad87b2b43c4be3b176e36b08->enter($__internal_701c89c2253dabbd5304f15206c01e26742c6f9cad87b2b43c4be3b176e36b08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_01e0de2c158f8f7584a15876f50265c23b172878f4866eed9bd2d6edb7098219 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01e0de2c158f8f7584a15876f50265c23b172878f4866eed9bd2d6edb7098219->enter($__internal_01e0de2c158f8f7584a15876f50265c23b172878f4866eed9bd2d6edb7098219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_01e0de2c158f8f7584a15876f50265c23b172878f4866eed9bd2d6edb7098219->leave($__internal_01e0de2c158f8f7584a15876f50265c23b172878f4866eed9bd2d6edb7098219_prof);

        
        $__internal_701c89c2253dabbd5304f15206c01e26742c6f9cad87b2b43c4be3b176e36b08->leave($__internal_701c89c2253dabbd5304f15206c01e26742c6f9cad87b2b43c4be3b176e36b08_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_25bd0b5cc70d75720ea221070fa19db0339e222c1653f82df70d421347f1b535 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25bd0b5cc70d75720ea221070fa19db0339e222c1653f82df70d421347f1b535->enter($__internal_25bd0b5cc70d75720ea221070fa19db0339e222c1653f82df70d421347f1b535_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7f13dabfcebc6bfcad86264b4dc591eeedcb35a1b60662d5a3c38e7355af0681 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f13dabfcebc6bfcad86264b4dc591eeedcb35a1b60662d5a3c38e7355af0681->enter($__internal_7f13dabfcebc6bfcad86264b4dc591eeedcb35a1b60662d5a3c38e7355af0681_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_7f13dabfcebc6bfcad86264b4dc591eeedcb35a1b60662d5a3c38e7355af0681->leave($__internal_7f13dabfcebc6bfcad86264b4dc591eeedcb35a1b60662d5a3c38e7355af0681_prof);

        
        $__internal_25bd0b5cc70d75720ea221070fa19db0339e222c1653f82df70d421347f1b535->leave($__internal_25bd0b5cc70d75720ea221070fa19db0339e222c1653f82df70d421347f1b535_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
", "@WebProfiler/Collector/exception.html.twig", "/home/shawk/work/surge/www/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
