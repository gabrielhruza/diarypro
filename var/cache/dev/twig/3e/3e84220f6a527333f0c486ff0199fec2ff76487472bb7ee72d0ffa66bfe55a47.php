<?php

/* default/filtros.html.twig */
class __TwigTemplate_ba72a2acb8d7350b8b88f7403b7d0a3eea5a4883ccc3c7476265feb73f452cb3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/filtros.html.twig", 1);
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
        $__internal_fac00951aa9dd5c2001851b8381fc2c9551448fc2219cc4e4228801562bbf97d = $this->env->getExtension("native_profiler");
        $__internal_fac00951aa9dd5c2001851b8381fc2c9551448fc2219cc4e4228801562bbf97d->enter($__internal_fac00951aa9dd5c2001851b8381fc2c9551448fc2219cc4e4228801562bbf97d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/filtros.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fac00951aa9dd5c2001851b8381fc2c9551448fc2219cc4e4228801562bbf97d->leave($__internal_fac00951aa9dd5c2001851b8381fc2c9551448fc2219cc4e4228801562bbf97d_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_2953b47825c92381ac0f9b06c2bba34bd12866b0ce2b90e4f3ce5b17918f5c26 = $this->env->getExtension("native_profiler");
        $__internal_2953b47825c92381ac0f9b06c2bba34bd12866b0ce2b90e4f3ce5b17918f5c26->enter($__internal_2953b47825c92381ac0f9b06c2bba34bd12866b0ce2b90e4f3ce5b17918f5c26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "
<div class=\"panel panel-info\">
  <div class=\"panel-heading\">
    <h3 class=\"panel-title\">Filtro de Profesionales</h3>
  </div>
<div class=\"panel-body\">
\t ";
        // line 10
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "bootstrap_3_horizontal_layout.html.twig"));
        // line 11
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
</div>
</div>
    ";
        // line 14
        echo twig_include($this->env, $context, "profesional/index.html.twig");
        echo " 

";
        
        $__internal_2953b47825c92381ac0f9b06c2bba34bd12866b0ce2b90e4f3ce5b17918f5c26->leave($__internal_2953b47825c92381ac0f9b06c2bba34bd12866b0ce2b90e4f3ce5b17918f5c26_prof);

    }

    // line 18
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f649a0294da7337e82fff3f201ba0645b374ab9318b824aa156efe20bfe4d4cb = $this->env->getExtension("native_profiler");
        $__internal_f649a0294da7337e82fff3f201ba0645b374ab9318b824aa156efe20bfe4d4cb->enter($__internal_f649a0294da7337e82fff3f201ba0645b374ab9318b824aa156efe20bfe4d4cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 19
        echo "
";
        
        $__internal_f649a0294da7337e82fff3f201ba0645b374ab9318b824aa156efe20bfe4d4cb->leave($__internal_f649a0294da7337e82fff3f201ba0645b374ab9318b824aa156efe20bfe4d4cb_prof);

    }

    public function getTemplateName()
    {
        return "default/filtros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 19,  68 => 18,  58 => 14,  51 => 11,  49 => 10,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block contenido %}*/
/* */
/* <div class="panel panel-info">*/
/*   <div class="panel-heading">*/
/*     <h3 class="panel-title">Filtro de Profesionales</h3>*/
/*   </div>*/
/* <div class="panel-body">*/
/* 	 {% form_theme form 'bootstrap_3_horizontal_layout.html.twig' %}*/
/*     {{ form(form) }}*/
/* </div>*/
/* </div>*/
/*     {{ include ('profesional/index.html.twig') }} */
/* */
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/* */
/* {% endblock %}*/
/* */
