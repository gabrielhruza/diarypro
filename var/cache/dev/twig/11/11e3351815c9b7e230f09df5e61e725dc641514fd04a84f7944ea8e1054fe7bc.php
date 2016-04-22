<?php

/* direccionpostal/edit.html.twig */
class __TwigTemplate_3c73c7253c99ae406d290262d8e1702274f2141a1c1a73dd6103ff7a7eaed370 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "direccionpostal/edit.html.twig", 1);
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
        $__internal_65c145f24d7867191aac086aeb673dbfbaf5c2cc13c63badd329130fdf7e5709 = $this->env->getExtension("native_profiler");
        $__internal_65c145f24d7867191aac086aeb673dbfbaf5c2cc13c63badd329130fdf7e5709->enter($__internal_65c145f24d7867191aac086aeb673dbfbaf5c2cc13c63badd329130fdf7e5709_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "direccionpostal/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_65c145f24d7867191aac086aeb673dbfbaf5c2cc13c63badd329130fdf7e5709->leave($__internal_65c145f24d7867191aac086aeb673dbfbaf5c2cc13c63badd329130fdf7e5709_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8cf5b141a4435d8aab6850104fba732bb92f50a6750a95ddc551637cdca3de79 = $this->env->getExtension("native_profiler");
        $__internal_8cf5b141a4435d8aab6850104fba732bb92f50a6750a95ddc551637cdca3de79->enter($__internal_8cf5b141a4435d8aab6850104fba732bb92f50a6750a95ddc551637cdca3de79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>DireccionPostal edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("direccionpostal_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_8cf5b141a4435d8aab6850104fba732bb92f50a6750a95ddc551637cdca3de79->leave($__internal_8cf5b141a4435d8aab6850104fba732bb92f50a6750a95ddc551637cdca3de79_prof);

    }

    public function getTemplateName()
    {
        return "direccionpostal/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  66 => 16,  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>DireccionPostal edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('direccionpostal_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
