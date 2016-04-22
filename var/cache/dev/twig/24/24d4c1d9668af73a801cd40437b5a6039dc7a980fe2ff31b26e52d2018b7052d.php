<?php

/* profesional/edit.html.twig */
class __TwigTemplate_2c7398b5b0df8da4b62467c93bdfd1efbfee827d69c25621f6bd474033261a1b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "profesional/edit.html.twig", 1);
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
        $__internal_fa7d409f5ad80b6476f467e6c0f4c6a9d94b9a4e1eef6fde8d780d7ddd7f3106 = $this->env->getExtension("native_profiler");
        $__internal_fa7d409f5ad80b6476f467e6c0f4c6a9d94b9a4e1eef6fde8d780d7ddd7f3106->enter($__internal_fa7d409f5ad80b6476f467e6c0f4c6a9d94b9a4e1eef6fde8d780d7ddd7f3106_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "profesional/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa7d409f5ad80b6476f467e6c0f4c6a9d94b9a4e1eef6fde8d780d7ddd7f3106->leave($__internal_fa7d409f5ad80b6476f467e6c0f4c6a9d94b9a4e1eef6fde8d780d7ddd7f3106_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_f65b1815a5c2db9ca08df48afd74074cfc6f5bb2fdbd848718a6662fa33efd83 = $this->env->getExtension("native_profiler");
        $__internal_f65b1815a5c2db9ca08df48afd74074cfc6f5bb2fdbd848718a6662fa33efd83->enter($__internal_f65b1815a5c2db9ca08df48afd74074cfc6f5bb2fdbd848718a6662fa33efd83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "     <div class=\"panel panel-info\">
    <div class=\"panel-heading\">
    <h3 class=\"panel-title\">Editar Profesional</h3>
    </div>
    <div class=\"panel-body\">

   ";
        // line 10
        $this->env->getExtension('form')->renderer->setTheme((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), array(0 => "bootstrap_3_horizontal_layout.html.twig"));
        // line 11
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" class=\"btn btn-info\" value=\"Edit\" />
    ";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

   
            <a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\" class=\"btn btn-primary\">Volver al INICIO</a>
        
            ";
        // line 19
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" class=\"btn btn-danger\" value=\"Borrar\">
            ";
        // line 21
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
       
    </div>
";
        
        $__internal_f65b1815a5c2db9ca08df48afd74074cfc6f5bb2fdbd848718a6662fa33efd83->leave($__internal_f65b1815a5c2db9ca08df48afd74074cfc6f5bb2fdbd848718a6662fa33efd83_prof);

    }

    public function getTemplateName()
    {
        return "profesional/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 21,  71 => 19,  66 => 17,  60 => 14,  55 => 12,  50 => 11,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block contenido %}*/
/*      <div class="panel panel-info">*/
/*     <div class="panel-heading">*/
/*     <h3 class="panel-title">Editar Profesional</h3>*/
/*     </div>*/
/*     <div class="panel-body">*/
/* */
/*    {% form_theme edit_form 'bootstrap_3_horizontal_layout.html.twig' %}*/
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" class="btn btn-info" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*    */
/*             <a href="{{ path('homepage') }}" class="btn btn-primary">Volver al INICIO</a>*/
/*         */
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" class="btn btn-danger" value="Borrar">*/
/*             {{ form_end(delete_form) }}*/
/*        */
/*     </div>*/
/* {% endblock %}*/
/* */
