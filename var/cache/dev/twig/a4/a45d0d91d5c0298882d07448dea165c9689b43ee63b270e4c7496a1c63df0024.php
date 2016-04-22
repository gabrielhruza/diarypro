<?php

/* direccionpostal/show.html.twig */
class __TwigTemplate_0e39ed6044390220eac301a0856b39edb09d7cc28d036ff669c7ca766aa2c03a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "direccionpostal/show.html.twig", 1);
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
        $__internal_d7921b9fe4e308cb6d95a8eaafa8d2c0779fbae8714c02544257e65a32ea8e5b = $this->env->getExtension("native_profiler");
        $__internal_d7921b9fe4e308cb6d95a8eaafa8d2c0779fbae8714c02544257e65a32ea8e5b->enter($__internal_d7921b9fe4e308cb6d95a8eaafa8d2c0779fbae8714c02544257e65a32ea8e5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "direccionpostal/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d7921b9fe4e308cb6d95a8eaafa8d2c0779fbae8714c02544257e65a32ea8e5b->leave($__internal_d7921b9fe4e308cb6d95a8eaafa8d2c0779fbae8714c02544257e65a32ea8e5b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_90c024f672608aa6e870d7a0504b74ce64b2f1c1b8fcfcfe0d922cb8de531526 = $this->env->getExtension("native_profiler");
        $__internal_90c024f672608aa6e870d7a0504b74ce64b2f1c1b8fcfcfe0d922cb8de531526->enter($__internal_90c024f672608aa6e870d7a0504b74ce64b2f1c1b8fcfcfe0d922cb8de531526_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>DireccionPostal</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["direccionPostal"]) ? $context["direccionPostal"] : $this->getContext($context, "direccionPostal")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prioridad</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["direccionPostal"]) ? $context["direccionPostal"] : $this->getContext($context, "direccionPostal")), "prioridad", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Provincia</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["direccionPostal"]) ? $context["direccionPostal"] : $this->getContext($context, "direccionPostal")), "provincia", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Localidad</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["direccionPostal"]) ? $context["direccionPostal"] : $this->getContext($context, "direccionPostal")), "localidad", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Codpostal</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["direccionPostal"]) ? $context["direccionPostal"] : $this->getContext($context, "direccionPostal")), "codPostal", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Calle</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["direccionPostal"]) ? $context["direccionPostal"] : $this->getContext($context, "direccionPostal")), "calle", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Numero</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["direccionPostal"]) ? $context["direccionPostal"] : $this->getContext($context, "direccionPostal")), "numero", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("direccionpostal_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("direccionpostal_edit", array("id" => $this->getAttribute((isset($context["direccionPostal"]) ? $context["direccionPostal"] : $this->getContext($context, "direccionPostal")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 47
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 49
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_90c024f672608aa6e870d7a0504b74ce64b2f1c1b8fcfcfe0d922cb8de531526->leave($__internal_90c024f672608aa6e870d7a0504b74ce64b2f1c1b8fcfcfe0d922cb8de531526_prof);

    }

    public function getTemplateName()
    {
        return "direccionpostal/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 49,  112 => 47,  106 => 44,  100 => 41,  90 => 34,  83 => 30,  76 => 26,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>DireccionPostal</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ direccionPostal.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Prioridad</th>*/
/*                 <td>{{ direccionPostal.prioridad }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Provincia</th>*/
/*                 <td>{{ direccionPostal.provincia }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Localidad</th>*/
/*                 <td>{{ direccionPostal.localidad }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Codpostal</th>*/
/*                 <td>{{ direccionPostal.codPostal }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Calle</th>*/
/*                 <td>{{ direccionPostal.calle }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Numero</th>*/
/*                 <td>{{ direccionPostal.numero }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('direccionpostal_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('direccionpostal_edit', { 'id': direccionPostal.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
