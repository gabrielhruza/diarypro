<?php

/* direccionpostal/new.html.twig */
class __TwigTemplate_c941745648d481625693a8ac4e164823dc74918a149ff55ccebca9f0aa18bba4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "direccionpostal/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9e4316a089c799f1a1e315b50e7c8cd1cd6b952f45efd894ca42c4d5a3203e43 = $this->env->getExtension("native_profiler");
        $__internal_9e4316a089c799f1a1e315b50e7c8cd1cd6b952f45efd894ca42c4d5a3203e43->enter($__internal_9e4316a089c799f1a1e315b50e7c8cd1cd6b952f45efd894ca42c4d5a3203e43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "direccionpostal/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e4316a089c799f1a1e315b50e7c8cd1cd6b952f45efd894ca42c4d5a3203e43->leave($__internal_9e4316a089c799f1a1e315b50e7c8cd1cd6b952f45efd894ca42c4d5a3203e43_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4316329199d779a097a6c4b577e0e582ca13acf820c95c4e723e065694207ac4 = $this->env->getExtension("native_profiler");
        $__internal_4316329199d779a097a6c4b577e0e582ca13acf820c95c4e723e065694207ac4->enter($__internal_4316329199d779a097a6c4b577e0e582ca13acf820c95c4e723e065694207ac4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>DireccionPostal creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("direccionpostal_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_4316329199d779a097a6c4b577e0e582ca13acf820c95c4e723e065694207ac4->leave($__internal_4316329199d779a097a6c4b577e0e582ca13acf820c95c4e723e065694207ac4_prof);

    }

    public function getTemplateName()
    {
        return "direccionpostal/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>DireccionPostal creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('direccionpostal_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
