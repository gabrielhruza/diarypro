<?php

/* profesional/show.html.twig */
class __TwigTemplate_33670597787e268d1ef81a59a5054abcbe962523f756465235d79cbf6ef6a1a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "profesional/show.html.twig", 1);
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
        $__internal_e9a2061a5b4f7d37ee8a77c70b6ec32c4e38efdbd839385973a518a6963ae85e = $this->env->getExtension("native_profiler");
        $__internal_e9a2061a5b4f7d37ee8a77c70b6ec32c4e38efdbd839385973a518a6963ae85e->enter($__internal_e9a2061a5b4f7d37ee8a77c70b6ec32c4e38efdbd839385973a518a6963ae85e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "profesional/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e9a2061a5b4f7d37ee8a77c70b6ec32c4e38efdbd839385973a518a6963ae85e->leave($__internal_e9a2061a5b4f7d37ee8a77c70b6ec32c4e38efdbd839385973a518a6963ae85e_prof);

    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_e0bcdac6d03c48112c256bedff24002c6f4aa401f7849130eb1812d67edc44a9 = $this->env->getExtension("native_profiler");
        $__internal_e0bcdac6d03c48112c256bedff24002c6f4aa401f7849130eb1812d67edc44a9->enter($__internal_e0bcdac6d03c48112c256bedff24002c6f4aa401f7849130eb1812d67edc44a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 4
        echo "   <div class=\"panel panel-info\">
  <div class=\"panel-heading\">
    <h3 class=\"panel-title\">Ver datos de profesional</h3>
  </div>
<div class=\"panel-body\">

    <table class=\"table table-striped\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profesional"]) ? $context["profesional"] : $this->getContext($context, "profesional")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Apellidos</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profesional"]) ? $context["profesional"] : $this->getContext($context, "profesional")), "apellidos", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nombres</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profesional"]) ? $context["profesional"] : $this->getContext($context, "profesional")), "nombres", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Matricula</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profesional"]) ? $context["profesional"] : $this->getContext($context, "profesional")), "matricula", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Profesion</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profesional"]) ? $context["profesional"] : $this->getContext($context, "profesional")), "profesion", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    
            <a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("profesional_index");
        echo "\" class=\"btn btn-primary\" >Volver al INICIO</a>
       
            <a href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("profesional_edit", array("id" => $this->getAttribute((isset($context["profesional"]) ? $context["profesional"] : $this->getContext($context, "profesional")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-info\">Editar datos</a>
        
            ";
        // line 40
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" class=\"btn btn-danger\" value=\"Borrar\">
            ";
        // line 42
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
       
    </div>
";
        
        $__internal_e0bcdac6d03c48112c256bedff24002c6f4aa401f7849130eb1812d67edc44a9->leave($__internal_e0bcdac6d03c48112c256bedff24002c6f4aa401f7849130eb1812d67edc44a9_prof);

    }

    public function getTemplateName()
    {
        return "profesional/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 42,  99 => 40,  94 => 38,  89 => 36,  80 => 30,  73 => 26,  66 => 22,  59 => 18,  52 => 14,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block contenido %}*/
/*    <div class="panel panel-info">*/
/*   <div class="panel-heading">*/
/*     <h3 class="panel-title">Ver datos de profesional</h3>*/
/*   </div>*/
/* <div class="panel-body">*/
/* */
/*     <table class="table table-striped">*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ profesional.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Apellidos</th>*/
/*                 <td>{{ profesional.apellidos }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Nombres</th>*/
/*                 <td>{{ profesional.nombres }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Matricula</th>*/
/*                 <td>{{ profesional.matricula }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Profesion</th>*/
/*                 <td>{{ profesional.profesion }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     */
/*             <a href="{{ path('profesional_index') }}" class="btn btn-primary" >Volver al INICIO</a>*/
/*        */
/*             <a href="{{ path('profesional_edit', { 'id': profesional.id }) }}" class="btn btn-info">Editar datos</a>*/
/*         */
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" class="btn btn-danger" value="Borrar">*/
/*             {{ form_end(delete_form) }}*/
/*        */
/*     </div>*/
/* {% endblock %}*/
/* */
