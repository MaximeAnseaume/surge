<?php

/* base.html.twig */
class __TwigTemplate_ef6a598e82a5011af52d5b328f0cd2f8830bea5f4c88506ad9e23671aec9697a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0e8c5f997d17b7aecca6efd35adfb7256fcd762869d0e2e1c698e27b9e74b9bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e8c5f997d17b7aecca6efd35adfb7256fcd762869d0e2e1c698e27b9e74b9bb->enter($__internal_0e8c5f997d17b7aecca6efd35adfb7256fcd762869d0e2e1c698e27b9e74b9bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_cea7ab55bac022bc1602006b004552dcf3fed63671af7fd281af3665e9c6fe9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cea7ab55bac022bc1602006b004552dcf3fed63671af7fd281af3665e9c6fe9b->enter($__internal_cea7ab55bac022bc1602006b004552dcf3fed63671af7fd281af3665e9c6fe9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_0e8c5f997d17b7aecca6efd35adfb7256fcd762869d0e2e1c698e27b9e74b9bb->leave($__internal_0e8c5f997d17b7aecca6efd35adfb7256fcd762869d0e2e1c698e27b9e74b9bb_prof);

        
        $__internal_cea7ab55bac022bc1602006b004552dcf3fed63671af7fd281af3665e9c6fe9b->leave($__internal_cea7ab55bac022bc1602006b004552dcf3fed63671af7fd281af3665e9c6fe9b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f4ae482fb740747ffcd2d469c7ebbdcc64759d6c40f74a7fbe305fba3ae9eeb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4ae482fb740747ffcd2d469c7ebbdcc64759d6c40f74a7fbe305fba3ae9eeb0->enter($__internal_f4ae482fb740747ffcd2d469c7ebbdcc64759d6c40f74a7fbe305fba3ae9eeb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c3e1447dfb68ace0b477314e0776180f2134bbc752ef8682f750edf206e29f23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3e1447dfb68ace0b477314e0776180f2134bbc752ef8682f750edf206e29f23->enter($__internal_c3e1447dfb68ace0b477314e0776180f2134bbc752ef8682f750edf206e29f23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c3e1447dfb68ace0b477314e0776180f2134bbc752ef8682f750edf206e29f23->leave($__internal_c3e1447dfb68ace0b477314e0776180f2134bbc752ef8682f750edf206e29f23_prof);

        
        $__internal_f4ae482fb740747ffcd2d469c7ebbdcc64759d6c40f74a7fbe305fba3ae9eeb0->leave($__internal_f4ae482fb740747ffcd2d469c7ebbdcc64759d6c40f74a7fbe305fba3ae9eeb0_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f59a9b24c67a27c5f0241bd13b0daf04c3eb575910042bcb50c34f1368aee4e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f59a9b24c67a27c5f0241bd13b0daf04c3eb575910042bcb50c34f1368aee4e2->enter($__internal_f59a9b24c67a27c5f0241bd13b0daf04c3eb575910042bcb50c34f1368aee4e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_f7817cddf762d62c6000870cd515a500bb99986bfd964de751efb4a3cdf44e06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7817cddf762d62c6000870cd515a500bb99986bfd964de751efb4a3cdf44e06->enter($__internal_f7817cddf762d62c6000870cd515a500bb99986bfd964de751efb4a3cdf44e06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f7817cddf762d62c6000870cd515a500bb99986bfd964de751efb4a3cdf44e06->leave($__internal_f7817cddf762d62c6000870cd515a500bb99986bfd964de751efb4a3cdf44e06_prof);

        
        $__internal_f59a9b24c67a27c5f0241bd13b0daf04c3eb575910042bcb50c34f1368aee4e2->leave($__internal_f59a9b24c67a27c5f0241bd13b0daf04c3eb575910042bcb50c34f1368aee4e2_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_fb6dc438f9b65dc0d5b40311f81ccba77a19045f7b81e1a4c4924ff296b17027 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb6dc438f9b65dc0d5b40311f81ccba77a19045f7b81e1a4c4924ff296b17027->enter($__internal_fb6dc438f9b65dc0d5b40311f81ccba77a19045f7b81e1a4c4924ff296b17027_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4db077fcd3ae52f0c87a73ac9fb1bb491bff235ec5a01ea069b9e67427f48b79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4db077fcd3ae52f0c87a73ac9fb1bb491bff235ec5a01ea069b9e67427f48b79->enter($__internal_4db077fcd3ae52f0c87a73ac9fb1bb491bff235ec5a01ea069b9e67427f48b79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4db077fcd3ae52f0c87a73ac9fb1bb491bff235ec5a01ea069b9e67427f48b79->leave($__internal_4db077fcd3ae52f0c87a73ac9fb1bb491bff235ec5a01ea069b9e67427f48b79_prof);

        
        $__internal_fb6dc438f9b65dc0d5b40311f81ccba77a19045f7b81e1a4c4924ff296b17027->leave($__internal_fb6dc438f9b65dc0d5b40311f81ccba77a19045f7b81e1a4c4924ff296b17027_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8a776c7d9ab1389365f4aa0703088362e64971580b26d529866e5bff70f0624c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a776c7d9ab1389365f4aa0703088362e64971580b26d529866e5bff70f0624c->enter($__internal_8a776c7d9ab1389365f4aa0703088362e64971580b26d529866e5bff70f0624c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_164e28188d1b02ef35f197a4c1aa220ddf4b759bf7ebe754a2c297e7fc917521 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_164e28188d1b02ef35f197a4c1aa220ddf4b759bf7ebe754a2c297e7fc917521->enter($__internal_164e28188d1b02ef35f197a4c1aa220ddf4b759bf7ebe754a2c297e7fc917521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_164e28188d1b02ef35f197a4c1aa220ddf4b759bf7ebe754a2c297e7fc917521->leave($__internal_164e28188d1b02ef35f197a4c1aa220ddf4b759bf7ebe754a2c297e7fc917521_prof);

        
        $__internal_8a776c7d9ab1389365f4aa0703088362e64971580b26d529866e5bff70f0624c->leave($__internal_8a776c7d9ab1389365f4aa0703088362e64971580b26d529866e5bff70f0624c_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/shawk/work/surge/www/app/Resources/views/base.html.twig");
    }
}
