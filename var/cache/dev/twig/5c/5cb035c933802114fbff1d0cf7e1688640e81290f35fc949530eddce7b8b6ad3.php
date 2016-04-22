<?php

/* provincia/show.html.twig */
class __TwigTemplate_5e3a9445e5d1a72beb11c4f322898c11e6029eba5181cc4ea3ecaec18828e38d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "provincia/show.html.twig", 1);
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
        $__internal_b03a3db107607f22a820139b784dddf34f9a3e5034c26605a281e8130db26abe = $this->env->getExtension("native_profiler");
        $__internal_b03a3db107607f22a820139b784dddf34f9a3e5034c26605a281e8130db26abe->enter($__internal_b03a3db107607f22a820139b784dddf34f9a3e5034c26605a281e8130db26abe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "provincia/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b03a3db107607f22a820139b784dddf34f9a3e5034c26605a281e8130db26abe->leave($__internal_b03a3db107607f22a820139b784dddf34f9a3e5034c26605a281e8130db26abe_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_171b7e5baa8478eafec8b97afff0949fd0e431c456766fb956558ab48d5f4c13 = $this->env->getExtension("native_profiler");
        $__internal_171b7e5baa8478eafec8b97afff0949fd0e431c456766fb956558ab48d5f4c13->enter($__internal_171b7e5baa8478eafec8b97afff0949fd0e431c456766fb956558ab48d5f4c13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Provincia</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["provincium"]) ? $context["provincium"] : $this->getContext($context, "provincium")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["provincium"]) ? $context["provincium"] : $this->getContext($context, "provincium")), "nombre", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("homepage_provincia_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("homepage_provincia_edit", array("id" => $this->getAttribute((isset($context["provincium"]) ? $context["provincium"] : $this->getContext($context, "provincium")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 27
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 29
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_171b7e5baa8478eafec8b97afff0949fd0e431c456766fb956558ab48d5f4c13->leave($__internal_171b7e5baa8478eafec8b97afff0949fd0e431c456766fb956558ab48d5f4c13_prof);

    }

    public function getTemplateName()
    {
        return "provincia/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 29,  77 => 27,  71 => 24,  65 => 21,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Provincia</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ provincium.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Nombre</th>*/
/*                 <td>{{ provincium.nombre }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('homepage_provincia_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('homepage_provincia_edit', { 'id': provincium.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
