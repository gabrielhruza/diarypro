<?php

/* direccionpostal/index.html.twig */
class __TwigTemplate_d88d0e70fde1241a7315e72783d7dc970ed1fae78333d4b9615bc674b1ac41be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "direccionpostal/index.html.twig", 1);
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
        $__internal_9d6ad05ce31eba46168b8fea38cb40c59d3c0924463b1d87e80a002f35239ae5 = $this->env->getExtension("native_profiler");
        $__internal_9d6ad05ce31eba46168b8fea38cb40c59d3c0924463b1d87e80a002f35239ae5->enter($__internal_9d6ad05ce31eba46168b8fea38cb40c59d3c0924463b1d87e80a002f35239ae5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "direccionpostal/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d6ad05ce31eba46168b8fea38cb40c59d3c0924463b1d87e80a002f35239ae5->leave($__internal_9d6ad05ce31eba46168b8fea38cb40c59d3c0924463b1d87e80a002f35239ae5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e841d9580d2e746be1bf507923a8a3a90214a6b6419947ad7887c35fb1e0003d = $this->env->getExtension("native_profiler");
        $__internal_e841d9580d2e746be1bf507923a8a3a90214a6b6419947ad7887c35fb1e0003d->enter($__internal_e841d9580d2e746be1bf507923a8a3a90214a6b6419947ad7887c35fb1e0003d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>DireccionPostal list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Prioridad</th>
                <th>Provincia</th>
                <th>Localidad</th>
                <th>Codpostal</th>
                <th>Calle</th>
                <th>Numero</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["direccionPostals"]) ? $context["direccionPostals"] : $this->getContext($context, "direccionPostals")));
        foreach ($context['_seq'] as $context["_key"] => $context["direccionPostal"]) {
            // line 21
            echo "            <tr>
                <td><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("direccionpostal_show", array("id" => $this->getAttribute($context["direccionPostal"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["direccionPostal"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["direccionPostal"], "prioridad", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["direccionPostal"], "provincia", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["direccionPostal"], "localidad", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["direccionPostal"], "codPostal", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["direccionPostal"], "calle", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["direccionPostal"], "numero", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("direccionpostal_show", array("id" => $this->getAttribute($context["direccionPostal"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("direccionpostal_edit", array("id" => $this->getAttribute($context["direccionPostal"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['direccionPostal'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("direccionpostal_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_e841d9580d2e746be1bf507923a8a3a90214a6b6419947ad7887c35fb1e0003d->leave($__internal_e841d9580d2e746be1bf507923a8a3a90214a6b6419947ad7887c35fb1e0003d_prof);

    }

    public function getTemplateName()
    {
        return "direccionpostal/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 46,  116 => 41,  104 => 35,  98 => 32,  91 => 28,  87 => 27,  83 => 26,  79 => 25,  75 => 24,  71 => 23,  65 => 22,  62 => 21,  58 => 20,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>DireccionPostal list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Prioridad</th>*/
/*                 <th>Provincia</th>*/
/*                 <th>Localidad</th>*/
/*                 <th>Codpostal</th>*/
/*                 <th>Calle</th>*/
/*                 <th>Numero</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for direccionPostal in direccionPostals %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('direccionpostal_show', { 'id': direccionPostal.id }) }}">{{ direccionPostal.id }}</a></td>*/
/*                 <td>{{ direccionPostal.prioridad }}</td>*/
/*                 <td>{{ direccionPostal.provincia }}</td>*/
/*                 <td>{{ direccionPostal.localidad }}</td>*/
/*                 <td>{{ direccionPostal.codPostal }}</td>*/
/*                 <td>{{ direccionPostal.calle }}</td>*/
/*                 <td>{{ direccionPostal.numero }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('direccionpostal_show', { 'id': direccionPostal.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('direccionpostal_edit', { 'id': direccionPostal.id }) }}">edit</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('direccionpostal_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
