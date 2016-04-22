<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_652efcb9335a672b4ba4ead8fc1d8cee04d1a88b54debf35904dfc6c0d364c90 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_702776cf3ccd3329d4caf0a0fa3a093b479503169654868b4988e89e25a15014 = $this->env->getExtension("native_profiler");
        $__internal_702776cf3ccd3329d4caf0a0fa3a093b479503169654868b4988e89e25a15014->enter($__internal_702776cf3ccd3329d4caf0a0fa3a093b479503169654868b4988e89e25a15014_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_702776cf3ccd3329d4caf0a0fa3a093b479503169654868b4988e89e25a15014->leave($__internal_702776cf3ccd3329d4caf0a0fa3a093b479503169654868b4988e89e25a15014_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a3857c225a4ca181c067d65971714756ff71914d088d7cc3abcd101401c0c4e3 = $this->env->getExtension("native_profiler");
        $__internal_a3857c225a4ca181c067d65971714756ff71914d088d7cc3abcd101401c0c4e3->enter($__internal_a3857c225a4ca181c067d65971714756ff71914d088d7cc3abcd101401c0c4e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_a3857c225a4ca181c067d65971714756ff71914d088d7cc3abcd101401c0c4e3->leave($__internal_a3857c225a4ca181c067d65971714756ff71914d088d7cc3abcd101401c0c4e3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
