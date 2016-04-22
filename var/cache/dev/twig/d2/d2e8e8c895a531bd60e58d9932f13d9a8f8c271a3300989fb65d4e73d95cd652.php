<?php

/* ciudad/show.html.twig */
class __TwigTemplate_13483773cfb8bb8b400e385da157b51400b8d012b2f6934894aebb157133e4ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ciudad/show.html.twig", 1);
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
        $__internal_30b94d269758b4bc44b3f428d6b7c111780668605cb707154b2fa521f7851f1b = $this->env->getExtension("native_profiler");
        $__internal_30b94d269758b4bc44b3f428d6b7c111780668605cb707154b2fa521f7851f1b->enter($__internal_30b94d269758b4bc44b3f428d6b7c111780668605cb707154b2fa521f7851f1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ciudad/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30b94d269758b4bc44b3f428d6b7c111780668605cb707154b2fa521f7851f1b->leave($__internal_30b94d269758b4bc44b3f428d6b7c111780668605cb707154b2fa521f7851f1b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_46bbf9076ea244b866843745a9925a02a6986ccfc33ffe60844f2390b067aee7 = $this->env->getExtension("native_profiler");
        $__internal_46bbf9076ea244b866843745a9925a02a6986ccfc33ffe60844f2390b067aee7->enter($__internal_46bbf9076ea244b866843745a9925a02a6986ccfc33ffe60844f2390b067aee7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Ciudad</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ciudad"]) ? $context["ciudad"] : $this->getContext($context, "ciudad")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ciudad"]) ? $context["ciudad"] : $this->getContext($context, "ciudad")), "nombre", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("homepage_ciudad_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("homepage_ciudad_edit", array("id" => $this->getAttribute((isset($context["ciudad"]) ? $context["ciudad"] : $this->getContext($context, "ciudad")), "id", array()))), "html", null, true);
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
        
        $__internal_46bbf9076ea244b866843745a9925a02a6986ccfc33ffe60844f2390b067aee7->leave($__internal_46bbf9076ea244b866843745a9925a02a6986ccfc33ffe60844f2390b067aee7_prof);

    }

    public function getTemplateName()
    {
        return "ciudad/show.html.twig";
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
/*     <h1>Ciudad</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ ciudad.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Nombre</th>*/
/*                 <td>{{ ciudad.nombre }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('homepage_ciudad_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('homepage_ciudad_edit', { 'id': ciudad.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
