<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_6c775e4c4ccdb3af11f3aa2031a382d5c0ed87f26f326c1f292fdbc62fcd4060 extends Twig_Template
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
        $__internal_9dc46f11bf08e14245199a29ac48b37ea962ff47ae6a7198dc06b0e5ddea0aab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9dc46f11bf08e14245199a29ac48b37ea962ff47ae6a7198dc06b0e5ddea0aab->enter($__internal_9dc46f11bf08e14245199a29ac48b37ea962ff47ae6a7198dc06b0e5ddea0aab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_df966a3b7323e4efc79f12e1383ddcd6ec86e0e68a1e79d5a812b42c42c33906 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df966a3b7323e4efc79f12e1383ddcd6ec86e0e68a1e79d5a812b42c42c33906->enter($__internal_df966a3b7323e4efc79f12e1383ddcd6ec86e0e68a1e79d5a812b42c42c33906_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9dc46f11bf08e14245199a29ac48b37ea962ff47ae6a7198dc06b0e5ddea0aab->leave($__internal_9dc46f11bf08e14245199a29ac48b37ea962ff47ae6a7198dc06b0e5ddea0aab_prof);

        
        $__internal_df966a3b7323e4efc79f12e1383ddcd6ec86e0e68a1e79d5a812b42c42c33906->leave($__internal_df966a3b7323e4efc79f12e1383ddcd6ec86e0e68a1e79d5a812b42c42c33906_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_051b5b99f3000f922b30d88fa32fdd3141423070f7b872bb29b88f1e856d235e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_051b5b99f3000f922b30d88fa32fdd3141423070f7b872bb29b88f1e856d235e->enter($__internal_051b5b99f3000f922b30d88fa32fdd3141423070f7b872bb29b88f1e856d235e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b45ceb1786ec255573e09588182d0bcd44f89b882f316aac98dd48677b6cf22b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b45ceb1786ec255573e09588182d0bcd44f89b882f316aac98dd48677b6cf22b->enter($__internal_b45ceb1786ec255573e09588182d0bcd44f89b882f316aac98dd48677b6cf22b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b45ceb1786ec255573e09588182d0bcd44f89b882f316aac98dd48677b6cf22b->leave($__internal_b45ceb1786ec255573e09588182d0bcd44f89b882f316aac98dd48677b6cf22b_prof);

        
        $__internal_051b5b99f3000f922b30d88fa32fdd3141423070f7b872bb29b88f1e856d235e->leave($__internal_051b5b99f3000f922b30d88fa32fdd3141423070f7b872bb29b88f1e856d235e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_caf3bb2240ff1b369e3bbc9e57bcc3a7c7ca3948f4c77a27436011b213b8207a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_caf3bb2240ff1b369e3bbc9e57bcc3a7c7ca3948f4c77a27436011b213b8207a->enter($__internal_caf3bb2240ff1b369e3bbc9e57bcc3a7c7ca3948f4c77a27436011b213b8207a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_65ef89f51dbcb32ea94cdd96dbda72c544605980a2eb06749647858a51c37d67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65ef89f51dbcb32ea94cdd96dbda72c544605980a2eb06749647858a51c37d67->enter($__internal_65ef89f51dbcb32ea94cdd96dbda72c544605980a2eb06749647858a51c37d67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_65ef89f51dbcb32ea94cdd96dbda72c544605980a2eb06749647858a51c37d67->leave($__internal_65ef89f51dbcb32ea94cdd96dbda72c544605980a2eb06749647858a51c37d67_prof);

        
        $__internal_caf3bb2240ff1b369e3bbc9e57bcc3a7c7ca3948f4c77a27436011b213b8207a->leave($__internal_caf3bb2240ff1b369e3bbc9e57bcc3a7c7ca3948f4c77a27436011b213b8207a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_38ada6a00f57eda15bfb39ce0582817d7124ace7c9a873c1679cd8faf4346e2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38ada6a00f57eda15bfb39ce0582817d7124ace7c9a873c1679cd8faf4346e2f->enter($__internal_38ada6a00f57eda15bfb39ce0582817d7124ace7c9a873c1679cd8faf4346e2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_341466f91bc8321353986943243462b02d89f61fa0291ad18861b5114005446f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_341466f91bc8321353986943243462b02d89f61fa0291ad18861b5114005446f->enter($__internal_341466f91bc8321353986943243462b02d89f61fa0291ad18861b5114005446f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_341466f91bc8321353986943243462b02d89f61fa0291ad18861b5114005446f->leave($__internal_341466f91bc8321353986943243462b02d89f61fa0291ad18861b5114005446f_prof);

        
        $__internal_38ada6a00f57eda15bfb39ce0582817d7124ace7c9a873c1679cd8faf4346e2f->leave($__internal_38ada6a00f57eda15bfb39ce0582817d7124ace7c9a873c1679cd8faf4346e2f_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
", "@WebProfiler/Collector/router.html.twig", "/home/shawk/work/surge/www/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
