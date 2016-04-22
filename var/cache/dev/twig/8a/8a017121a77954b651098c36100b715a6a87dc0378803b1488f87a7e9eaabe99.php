<?php

/* profesional/index.html.twig */
class __TwigTemplate_0f84573e0a64897ae3a5b47e9e762a18ed5bbaeb88da507916bd7a724b94d749 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "profesional/index.html.twig", 1);
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
        $__internal_4d76f6cf68afb242566f7d709807e7b14d0238398a2f354d248912f8a9c711ad = $this->env->getExtension("native_profiler");
        $__internal_4d76f6cf68afb242566f7d709807e7b14d0238398a2f354d248912f8a9c711ad->enter($__internal_4d76f6cf68afb242566f7d709807e7b14d0238398a2f354d248912f8a9c711ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "profesional/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d76f6cf68afb242566f7d709807e7b14d0238398a2f354d248912f8a9c711ad->leave($__internal_4d76f6cf68afb242566f7d709807e7b14d0238398a2f354d248912f8a9c711ad_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cced3af7485d13421133c8732d9b29c8fb44c369e9d1ef2ac8ff036ab4994cb8 = $this->env->getExtension("native_profiler");
        $__internal_cced3af7485d13421133c8732d9b29c8fb44c369e9d1ef2ac8ff036ab4994cb8->enter($__internal_cced3af7485d13421133c8732d9b29c8fb44c369e9d1ef2ac8ff036ab4994cb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
<div class=\"panel panel-info\">
  <div class=\"panel-heading clearfix\">
    <h3 class=\"panel-title pull-left\" style=\"padding-top: 7.5px;\">Listado de profesionales</h3> <button type=\"button\" class=\"btn btn-default btn-sm pull-right\"><span class=\"glyphicon glyphicon-save\" aria-hidden=\"true\"></span><span> Generar PDF </span></button>
    
  </div>
<div class=\"panel-body\">
    <table class=\"table table-striped\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Apellidos</th>
                <th>Nombres</th>
                <th>Matricula</th>
                <th>Profesion</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["profesionals"]) ? $context["profesionals"] : $this->getContext($context, "profesionals")));
        foreach ($context['_seq'] as $context["_key"] => $context["profesional"]) {
            // line 24
            echo "            <tr>
                <td><a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("profesional_show", array("id" => $this->getAttribute($context["profesional"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["profesional"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["profesional"], "apellidos", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["profesional"], "nombres", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["profesional"], "matricula", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["profesional"], "profesion", array()), "html", null, true);
            echo "</td>
                <td>
                    
                            <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("profesional_show", array("id" => $this->getAttribute($context["profesional"], "id", array()))), "html", null, true);
            echo "\">
                            <span class=\"glyphicon glyphicon-eye-open\" aria-hidden=\"true\"></span>
                            </a>
                            
                            <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("profesional_edit", array("id" => $this->getAttribute($context["profesional"], "id", array()))), "html", null, true);
            echo "\">
                            <span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span>
                            </a>

                            <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("profesional_edit", array("id" => $this->getAttribute($context["profesional"], "id", array()))), "html", null, true);
            echo "\">
                            <span class=\"glyphicon glyphicon-envelope\" aria-hidden=\"true\"></span>
                            </a>
                       
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['profesional'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "        </tbody>
    </table>
</div>
<!--
    <ul>
        <li>
            <a href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("profesional_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
-->
";
        
        $__internal_cced3af7485d13421133c8732d9b29c8fb44c369e9d1ef2ac8ff036ab4994cb8->leave($__internal_cced3af7485d13421133c8732d9b29c8fb44c369e9d1ef2ac8ff036ab4994cb8_prof);

    }

    public function getTemplateName()
    {
        return "profesional/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 53,  119 => 47,  106 => 40,  99 => 36,  92 => 32,  86 => 29,  82 => 28,  78 => 27,  74 => 26,  68 => 25,  65 => 24,  61 => 23,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     */
/* <div class="panel panel-info">*/
/*   <div class="panel-heading clearfix">*/
/*     <h3 class="panel-title pull-left" style="padding-top: 7.5px;">Listado de profesionales</h3> <button type="button" class="btn btn-default btn-sm pull-right"><span class="glyphicon glyphicon-save" aria-hidden="true"></span><span> Generar PDF </span></button>*/
/*     */
/*   </div>*/
/* <div class="panel-body">*/
/*     <table class="table table-striped">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Apellidos</th>*/
/*                 <th>Nombres</th>*/
/*                 <th>Matricula</th>*/
/*                 <th>Profesion</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for profesional in profesionals %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('profesional_show', { 'id': profesional.id }) }}">{{ profesional.id }}</a></td>*/
/*                 <td>{{ profesional.apellidos }}</td>*/
/*                 <td>{{ profesional.nombres }}</td>*/
/*                 <td>{{ profesional.matricula }}</td>*/
/*                 <td>{{ profesional.profesion }}</td>*/
/*                 <td>*/
/*                     */
/*                             <a href="{{ path('profesional_show', { 'id': profesional.id }) }}">*/
/*                             <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>*/
/*                             </a>*/
/*                             */
/*                             <a href="{{ path('profesional_edit', { 'id': profesional.id }) }}">*/
/*                             <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>*/
/*                             </a>*/
/* */
/*                             <a href="{{ path('profesional_edit', { 'id': profesional.id }) }}">*/
/*                             <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>*/
/*                             </a>*/
/*                        */
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* </div>*/
/* <!--*/
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('profesional_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* -->*/
/* {% endblock %}*/
/* */
