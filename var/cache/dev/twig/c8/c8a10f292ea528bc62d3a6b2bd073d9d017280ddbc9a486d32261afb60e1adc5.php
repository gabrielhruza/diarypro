<?php

/* ciudad/index.html.twig */
class __TwigTemplate_b36ea6c4c68af6cedb1053dd9884a1ed9c0d6e0fc2753feda9940c2b51841ce9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ciudad/index.html.twig", 1);
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
        $__internal_16f84ffc07e0b3b5e08e627497344f192a7d0e86dbe27206df98b536aab3da52 = $this->env->getExtension("native_profiler");
        $__internal_16f84ffc07e0b3b5e08e627497344f192a7d0e86dbe27206df98b536aab3da52->enter($__internal_16f84ffc07e0b3b5e08e627497344f192a7d0e86dbe27206df98b536aab3da52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ciudad/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_16f84ffc07e0b3b5e08e627497344f192a7d0e86dbe27206df98b536aab3da52->leave($__internal_16f84ffc07e0b3b5e08e627497344f192a7d0e86dbe27206df98b536aab3da52_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a6220d026505bd23f531463f0272796c9aa8c92514c43f601e6ce93bf5402226 = $this->env->getExtension("native_profiler");
        $__internal_a6220d026505bd23f531463f0272796c9aa8c92514c43f601e6ce93bf5402226->enter($__internal_a6220d026505bd23f531463f0272796c9aa8c92514c43f601e6ce93bf5402226_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Ciudad list</h1>

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
        $context['_seq'] = twig_ensure_traversable((isset($context["ciudads"]) ? $context["ciudads"] : $this->getContext($context, "ciudads")));
        foreach ($context['_seq'] as $context["_key"] => $context["ciudad"]) {
            // line 16
            echo "            <tr>
                <td><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("homepage_ciudad_show", array("id" => $this->getAttribute($context["ciudad"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ciudad"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["ciudad"], "nombre", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("homepage_ciudad_show", array("id" => $this->getAttribute($context["ciudad"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("homepage_ciudad_edit", array("id" => $this->getAttribute($context["ciudad"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ciudad'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("homepage_ciudad_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_a6220d026505bd23f531463f0272796c9aa8c92514c43f601e6ce93bf5402226->leave($__internal_a6220d026505bd23f531463f0272796c9aa8c92514c43f601e6ce93bf5402226_prof);

    }

    public function getTemplateName()
    {
        return "ciudad/index.html.twig";
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
/*     <h1>Ciudad list</h1>*/
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
/*         {% for ciudad in ciudads %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('homepage_ciudad_show', { 'id': ciudad.id }) }}">{{ ciudad.id }}</a></td>*/
/*                 <td>{{ ciudad.nombre }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('homepage_ciudad_show', { 'id': ciudad.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('homepage_ciudad_edit', { 'id': ciudad.id }) }}">edit</a>*/
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
/*             <a href="{{ path('homepage_ciudad_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
