<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_4bcb5c68facefaa109de5d3d4ba452a49508bd6ed73998976cadc2a8f2fa5622 extends Twig_Template
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
        $__internal_cf7d7b492684fa6f172f603380518ac7589685a2140d4bb36976f4f867c18529 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf7d7b492684fa6f172f603380518ac7589685a2140d4bb36976f4f867c18529->enter($__internal_cf7d7b492684fa6f172f603380518ac7589685a2140d4bb36976f4f867c18529_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf7d7b492684fa6f172f603380518ac7589685a2140d4bb36976f4f867c18529->leave($__internal_cf7d7b492684fa6f172f603380518ac7589685a2140d4bb36976f4f867c18529_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_545ec2a7bcf200f4ec6c78ab39208fb38c7483bd536d4a202f2d0f689b623044 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_545ec2a7bcf200f4ec6c78ab39208fb38c7483bd536d4a202f2d0f689b623044->enter($__internal_545ec2a7bcf200f4ec6c78ab39208fb38c7483bd536d4a202f2d0f689b623044_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_545ec2a7bcf200f4ec6c78ab39208fb38c7483bd536d4a202f2d0f689b623044->leave($__internal_545ec2a7bcf200f4ec6c78ab39208fb38c7483bd536d4a202f2d0f689b623044_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_352323e605245d6d60414901a15500b89e216c76f16b030f046e9f9a0368e8ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_352323e605245d6d60414901a15500b89e216c76f16b030f046e9f9a0368e8ee->enter($__internal_352323e605245d6d60414901a15500b89e216c76f16b030f046e9f9a0368e8ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_352323e605245d6d60414901a15500b89e216c76f16b030f046e9f9a0368e8ee->leave($__internal_352323e605245d6d60414901a15500b89e216c76f16b030f046e9f9a0368e8ee_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0745291f1991e99ea4d3c75a7c08351f4903967d267f3647d6ce7cf93549c0ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0745291f1991e99ea4d3c75a7c08351f4903967d267f3647d6ce7cf93549c0ab->enter($__internal_0745291f1991e99ea4d3c75a7c08351f4903967d267f3647d6ce7cf93549c0ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0745291f1991e99ea4d3c75a7c08351f4903967d267f3647d6ce7cf93549c0ab->leave($__internal_0745291f1991e99ea4d3c75a7c08351f4903967d267f3647d6ce7cf93549c0ab_prof);

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
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

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
";
    }
}
