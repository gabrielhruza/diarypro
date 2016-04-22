<?php

/* provincia/index.html.twig */
class __TwigTemplate_5a01199296d5f685d1b71413723a9c1af13a8e9f5cbf25e4027b0cf22e5ff95d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "provincia/index.html.twig", 1);
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
        $__internal_7ca0eba20ac4ed6c8cef9432cd8c03183e1ff4049fbd84adaf5e629de2605f89 = $this->env->getExtension("native_profiler");
        $__internal_7ca0eba20ac4ed6c8cef9432cd8c03183e1ff4049fbd84adaf5e629de2605f89->enter($__internal_7ca0eba20ac4ed6c8cef9432cd8c03183e1ff4049fbd84adaf5e629de2605f89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "provincia/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ca0eba20ac4ed6c8cef9432cd8c03183e1ff4049fbd84adaf5e629de2605f89->leave($__internal_7ca0eba20ac4ed6c8cef9432cd8c03183e1ff4049fbd84adaf5e629de2605f89_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2f78b95ff8119dcc5418cef73e585280d3b617e8fc563090c66c6ecd6fa73865 = $this->env->getExtension("native_profiler");
        $__internal_2f78b95ff8119dcc5418cef73e585280d3b617e8fc563090c66c6ecd6fa73865->enter($__internal_2f78b95ff8119dcc5418cef73e585280d3b617e8fc563090c66c6ecd6fa73865_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Provincia list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["provincias"]) ? $context["provincias"] : $this->getContext($context, "provincias")));
        foreach ($context['_seq'] as $context["_key"] => $context["provincium"]) {
            // line 16
            echo "            <tr>
                <td><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("homepage_provincia_show", array("id" => $this->getAttribute($context["provincium"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["provincium"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["provincium"], "nombre", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("homepage_provincia_show", array("id" => $this->getAttribute($context["provincium"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("homepage_provincia_edit", array("id" => $this->getAttribute($context["provincium"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['provincium'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("homepage_provincia_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_2f78b95ff8119dcc5418cef73e585280d3b617e8fc563090c66c6ecd6fa73865->leave($__internal_2f78b95ff8119dcc5418cef73e585280d3b617e8fc563090c66c6ecd6fa73865_prof);

    }

    public function getTemplateName()
    {
        return "provincia/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 36,  91 => 31,  79 => 25,  73 => 22,  66 => 18,  60 => 17,  57 => 16,  53 => 15,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Provincia list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Nombre</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for provincium in provincias %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('homepage_provincia_show', { 'id': provincium.id }) }}">{{ provincium.id }}</a></td>*/
/*                 <td>{{ provincium.nombre }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('homepage_provincia_show', { 'id': provincium.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('homepage_provincia_edit', { 'id': provincium.id }) }}">edit</a>*/
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
/*             <a href="{{ path('homepage_provincia_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
