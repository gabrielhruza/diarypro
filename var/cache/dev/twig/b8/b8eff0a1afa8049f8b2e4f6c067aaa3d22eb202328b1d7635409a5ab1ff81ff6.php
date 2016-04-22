<?php

/* profesion/show.html.twig */
class __TwigTemplate_ac097d8b13d4bbd95cb7cf44ab961c2164b07ba5b121b99a8a973a30515b852b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "profesion/show.html.twig", 1);
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
        $__internal_059e5e7829a39acf68085c959296d5b6c5b59e677c977a5efa39ab69e159b045 = $this->env->getExtension("native_profiler");
        $__internal_059e5e7829a39acf68085c959296d5b6c5b59e677c977a5efa39ab69e159b045->enter($__internal_059e5e7829a39acf68085c959296d5b6c5b59e677c977a5efa39ab69e159b045_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "profesion/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_059e5e7829a39acf68085c959296d5b6c5b59e677c977a5efa39ab69e159b045->leave($__internal_059e5e7829a39acf68085c959296d5b6c5b59e677c977a5efa39ab69e159b045_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_84155b2c61f01ad67eb1677054b66e3e139ed96a0165f5f9d78320743aa1bc0b = $this->env->getExtension("native_profiler");
        $__internal_84155b2c61f01ad67eb1677054b66e3e139ed96a0165f5f9d78320743aa1bc0b->enter($__internal_84155b2c61f01ad67eb1677054b66e3e139ed96a0165f5f9d78320743aa1bc0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Profesion</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profesion"]) ? $context["profesion"] : $this->getContext($context, "profesion")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profesion"]) ? $context["profesion"] : $this->getContext($context, "profesion")), "nombre", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Descripcion</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profesion"]) ? $context["profesion"] : $this->getContext($context, "profesion")), "descripcion", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("profesion_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("profesion_edit", array("id" => $this->getAttribute((isset($context["profesion"]) ? $context["profesion"] : $this->getContext($context, "profesion")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 31
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 33
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_84155b2c61f01ad67eb1677054b66e3e139ed96a0165f5f9d78320743aa1bc0b->leave($__internal_84155b2c61f01ad67eb1677054b66e3e139ed96a0165f5f9d78320743aa1bc0b_prof);

    }

    public function getTemplateName()
    {
        return "profesion/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 33,  84 => 31,  78 => 28,  72 => 25,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Profesion</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ profesion.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Nombre</th>*/
/*                 <td>{{ profesion.nombre }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Descripcion</th>*/
/*                 <td>{{ profesion.descripcion }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('profesion_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('profesion_edit', { 'id': profesion.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
