<?php

/* default/nuevo.html.twig */
class __TwigTemplate_d3e419d2ee99b425949db4e8104d719d348529a822174114d135edcbd589651f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/nuevo.html.twig", 1);
        $this->blocks = array(
            'contenido' => array($this, 'block_contenido'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fbe7c7d0457f34e0073b8cda83f6d1e49f3ad6f3031eadf8c4f7822407d658b2 = $this->env->getExtension("native_profiler");
        $__internal_fbe7c7d0457f34e0073b8cda83f6d1e49f3ad6f3031eadf8c4f7822407d658b2->enter($__internal_fbe7c7d0457f34e0073b8cda83f6d1e49f3ad6f3031eadf8c4f7822407d658b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/nuevo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fbe7c7d0457f34e0073b8cda83f6d1e49f3ad6f3031eadf8c4f7822407d658b2->leave($__internal_fbe7c7d0457f34e0073b8cda83f6d1e49f3ad6f3031eadf8c4f7822407d658b2_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_2494113b25ef7c8944e93ca81c97bf70e7cffa807b86290b242893193b4cd723 = $this->env->getExtension("native_profiler");
        $__internal_2494113b25ef7c8944e93ca81c97bf70e7cffa807b86290b242893193b4cd723->enter($__internal_2494113b25ef7c8944e93ca81c97bf70e7cffa807b86290b242893193b4cd723_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "
";
        // line 5
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("AppBundle:Profesional:new"));
        echo "

";
        
        $__internal_2494113b25ef7c8944e93ca81c97bf70e7cffa807b86290b242893193b4cd723->leave($__internal_2494113b25ef7c8944e93ca81c97bf70e7cffa807b86290b242893193b4cd723_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7fcdfcfdcdfae283ad9653d212c26f5f2f5100383bfec19b16b8da97afafe240 = $this->env->getExtension("native_profiler");
        $__internal_7fcdfcfdcdfae283ad9653d212c26f5f2f5100383bfec19b16b8da97afafe240->enter($__internal_7fcdfcfdcdfae283ad9653d212c26f5f2f5100383bfec19b16b8da97afafe240_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "
";
        
        $__internal_7fcdfcfdcdfae283ad9653d212c26f5f2f5100383bfec19b16b8da97afafe240->leave($__internal_7fcdfcfdcdfae283ad9653d212c26f5f2f5100383bfec19b16b8da97afafe240_prof);

    }

    public function getTemplateName()
    {
        return "default/nuevo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 10,  54 => 9,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block contenido %}*/
/* */
/* {{ render(controller('AppBundle:Profesional:new')) }}*/
/* */
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/* */
/* {% endblock %}*/
/* */
