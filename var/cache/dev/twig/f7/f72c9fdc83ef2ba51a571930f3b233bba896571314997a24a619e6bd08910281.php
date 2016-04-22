<?php

/* profesion/index.html.twig */
class __TwigTemplate_66e777d7bb7c499ed2d068ad1086c574d4f89e371b01f83dd121b03e808e3ff1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "profesion/index.html.twig", 1);
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
        $__internal_b1b6bcc8fe27ccfd2dd01dd14cfcd7bc4ba54bf06a58d807d6699ca012207ee0 = $this->env->getExtension("native_profiler");
        $__internal_b1b6bcc8fe27ccfd2dd01dd14cfcd7bc4ba54bf06a58d807d6699ca012207ee0->enter($__internal_b1b6bcc8fe27ccfd2dd01dd14cfcd7bc4ba54bf06a58d807d6699ca012207ee0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "profesion/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1b6bcc8fe27ccfd2dd01dd14cfcd7bc4ba54bf06a58d807d6699ca012207ee0->leave($__internal_b1b6bcc8fe27ccfd2dd01dd14cfcd7bc4ba54bf06a58d807d6699ca012207ee0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_59efd226a18d696bca3c887f01ace5d403c37e5e4021c9f7c2df518f27e29a37 = $this->env->getExtension("native_profiler");
        $__internal_59efd226a18d696bca3c887f01ace5d403c37e5e4021c9f7c2df518f27e29a37->enter($__internal_59efd226a18d696bca3c887f01ace5d403c37e5e4021c9f7c2df518f27e29a37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Profesion list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["profesions"]) ? $context["profesions"] : $this->getContext($context, "profesions")));
        foreach ($context['_seq'] as $context["_key"] => $context["profesion"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("profesion_show", array("id" => $this->getAttribute($context["profesion"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["profesion"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["profesion"], "nombre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["profesion"], "descripcion", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("profesion_show", array("id" => $this->getAttribute($context["profesion"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("profesion_edit", array("id" => $this->getAttribute($context["profesion"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['profesion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("profesion_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_59efd226a18d696bca3c887f01ace5d403c37e5e4021c9f7c2df518f27e29a37->leave($__internal_59efd226a18d696bca3c887f01ace5d403c37e5e4021c9f7c2df518f27e29a37_prof);

    }

    public function getTemplateName()
    {
        return "profesion/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 38,  96 => 33,  84 => 27,  78 => 24,  71 => 20,  67 => 19,  61 => 18,  58 => 17,  54 => 16,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Profesion list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Nombre</th>*/
/*                 <th>Descripcion</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for profesion in profesions %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('profesion_show', { 'id': profesion.id }) }}">{{ profesion.id }}</a></td>*/
/*                 <td>{{ profesion.nombre }}</td>*/
/*                 <td>{{ profesion.descripcion }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('profesion_show', { 'id': profesion.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('profesion_edit', { 'id': profesion.id }) }}">edit</a>*/
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
/*             <a href="{{ path('profesion_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
