<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* react/index.html.twig */
class __TwigTemplate_cf7df9467607bc92e8510d64fff85bfb extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "react/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "react/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "react/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello ReactController!
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<div class=\"bg-white\">
\t\t<div class=\"mx-auto max-w-7xl py-16 px-4 sm:py-24 sm:px-6 lg:px-8\">
\t\t\t<div class=\"text-center\">
\t\t\t\t<p class=\"mt-1 text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl lg:text-6xl\">Ceci est une démo de React dans une application Symfony</p>
\t\t\t\t<p class=\"mx-auto mt-5 max-w-xl text-xl text-gray-500\">Ceci est une démo de React dans une application Symfony</p>
\t\t\t\t<div ";
        // line 12
        echo $this->extensions['Symfony\UX\React\Twig\ReactComponentExtension']->renderReactComponent("MyComponent", ["fullName" => "YoanDev"]);
        echo "></div>
\t\t\t\t";
        // line 14
        echo "\t\t\t\t<div ";
        echo $this->extensions['Symfony\UX\React\Twig\ReactComponentExtension']->renderReactComponent("FormControll");
        echo "></div>
\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "react/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 14,  96 => 12,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello ReactController!
{% endblock %}

{% block body %}
\t<div class=\"bg-white\">
\t\t<div class=\"mx-auto max-w-7xl py-16 px-4 sm:py-24 sm:px-6 lg:px-8\">
\t\t\t<div class=\"text-center\">
\t\t\t\t<p class=\"mt-1 text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl lg:text-6xl\">Ceci est une démo de React dans une application Symfony</p>
\t\t\t\t<p class=\"mx-auto mt-5 max-w-xl text-xl text-gray-500\">Ceci est une démo de React dans une application Symfony</p>
\t\t\t\t<div {{ react_component('MyComponent', { 'fullName': 'YoanDev' } ) }}></div>
\t\t\t\t{# <div {{ react_component('Modal', { 'button' : \"click\"} ) }}></div> #}
\t\t\t\t<div {{ react_component('FormControll' ) }}></div>
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}
", "react/index.html.twig", "C:\\Users\\Yhouston\\Desktop\\NIXIA\\ReactSymfony\\templates\\react\\index.html.twig");
    }
}
