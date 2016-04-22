<?php

/* profesional/new.html.twig */
class __TwigTemplate_eadc6328d5a51810e5977d6197df84bdc5f2245dca42809e5905562592461883 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "profesional/new.html.twig", 1);
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
        $__internal_ebf0d698e6465ea2d400ec7eb51dd95f622f70eb843060ffb80463a4b1c381d1 = $this->env->getExtension("native_profiler");
        $__internal_ebf0d698e6465ea2d400ec7eb51dd95f622f70eb843060ffb80463a4b1c381d1->enter($__internal_ebf0d698e6465ea2d400ec7eb51dd95f622f70eb843060ffb80463a4b1c381d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "profesional/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ebf0d698e6465ea2d400ec7eb51dd95f622f70eb843060ffb80463a4b1c381d1->leave($__internal_ebf0d698e6465ea2d400ec7eb51dd95f622f70eb843060ffb80463a4b1c381d1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1ca2c99e49fbe5c227eaaf049124949beb953d58be4c15a3c052c5e88addd861 = $this->env->getExtension("native_profiler");
        $__internal_1ca2c99e49fbe5c227eaaf049124949beb953d58be4c15a3c052c5e88addd861->enter($__internal_1ca2c99e49fbe5c227eaaf049124949beb953d58be4c15a3c052c5e88addd861_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"panel panel-info\">
  \t<div class=\"panel-heading\">
    <h3 class=\"panel-title\">Nuevo Profesional</h3>
  \t</div>
\t<div class=\"panel-body\">

    ";
        // line 10
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "bootstrap_3_horizontal_layout.html.twig"));
        // line 11
        echo "     ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" class=\"btn btn-info\" value=\"Dar de alta\" />
    ";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    
\t
\t</div>
    
";
        
        $__internal_1ca2c99e49fbe5c227eaaf049124949beb953d58be4c15a3c052c5e88addd861->leave($__internal_1ca2c99e49fbe5c227eaaf049124949beb953d58be4c15a3c052c5e88addd861_prof);

    }

    public function getTemplateName()
    {
        return "profesional/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 14,  55 => 12,  50 => 11,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div class="panel panel-info">*/
/*   	<div class="panel-heading">*/
/*     <h3 class="panel-title">Nuevo Profesional</h3>*/
/*   	</div>*/
/* 	<div class="panel-body">*/
/* */
/*     {% form_theme form 'bootstrap_3_horizontal_layout.html.twig' %}*/
/*      {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" class="btn btn-info" value="Dar de alta" />*/
/*     {{ form_end(form) }}*/
/*     */
/* 	*/
/* 	</div>*/
/*     */
/* {% endblock %}*/
/* */
