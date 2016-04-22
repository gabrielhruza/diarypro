<?php

/* default/principal.html.twig */
class __TwigTemplate_4deccac92294ecc5b9250f07899f22085517a8ac8ec6fce8d8a8e6922a1571ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/principal.html.twig", 1);
        $this->blocks = array(
            'contenido' => array($this, 'block_contenido'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8d2164e8ef184b6d482505ad2faf1ac66f650c709b37ea9ab77941c9294b52cb = $this->env->getExtension("native_profiler");
        $__internal_8d2164e8ef184b6d482505ad2faf1ac66f650c709b37ea9ab77941c9294b52cb->enter($__internal_8d2164e8ef184b6d482505ad2faf1ac66f650c709b37ea9ab77941c9294b52cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/principal.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d2164e8ef184b6d482505ad2faf1ac66f650c709b37ea9ab77941c9294b52cb->leave($__internal_8d2164e8ef184b6d482505ad2faf1ac66f650c709b37ea9ab77941c9294b52cb_prof);

    }

    // line 2
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_34fe789b7564fcbab3afa1c56446aec0e48f42a2a7634c4f95a13c8327a98c76 = $this->env->getExtension("native_profiler");
        $__internal_34fe789b7564fcbab3afa1c56446aec0e48f42a2a7634c4f95a13c8327a98c76->enter($__internal_34fe789b7564fcbab3afa1c56446aec0e48f42a2a7634c4f95a13c8327a98c76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 3
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("AppBundle:Profesional:index"));
        echo "
";
        
        $__internal_34fe789b7564fcbab3afa1c56446aec0e48f42a2a7634c4f95a13c8327a98c76->leave($__internal_34fe789b7564fcbab3afa1c56446aec0e48f42a2a7634c4f95a13c8327a98c76_prof);

    }

    public function getTemplateName()
    {
        return "default/principal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block contenido %}*/
/* {{ render(controller('AppBundle:Profesional:index')) }}*/
/* {% endblock %}*/
