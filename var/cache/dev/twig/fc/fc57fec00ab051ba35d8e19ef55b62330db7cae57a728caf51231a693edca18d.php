<?php

/* provincia/new.html.twig */
class __TwigTemplate_554dd9b215d0a995703806cc4a6155578744438aa0ed8f3800e0836ec1988505 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "provincia/new.html.twig", 1);
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
        $__internal_32d20152bda0409d616883934bebb4329995b2828f2d02d698d9c0c0b4714eee = $this->env->getExtension("native_profiler");
        $__internal_32d20152bda0409d616883934bebb4329995b2828f2d02d698d9c0c0b4714eee->enter($__internal_32d20152bda0409d616883934bebb4329995b2828f2d02d698d9c0c0b4714eee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "provincia/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_32d20152bda0409d616883934bebb4329995b2828f2d02d698d9c0c0b4714eee->leave($__internal_32d20152bda0409d616883934bebb4329995b2828f2d02d698d9c0c0b4714eee_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b36b162c6e83f6d011fbb9e7ad344bd6f4eabcc9f0054aa0059fe643c0996b9a = $this->env->getExtension("native_profiler");
        $__internal_b36b162c6e83f6d011fbb9e7ad344bd6f4eabcc9f0054aa0059fe643c0996b9a->enter($__internal_b36b162c6e83f6d011fbb9e7ad344bd6f4eabcc9f0054aa0059fe643c0996b9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Provincia creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("homepage_provincia_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_b36b162c6e83f6d011fbb9e7ad344bd6f4eabcc9f0054aa0059fe643c0996b9a->leave($__internal_b36b162c6e83f6d011fbb9e7ad344bd6f4eabcc9f0054aa0059fe643c0996b9a_prof);

    }

    public function getTemplateName()
    {
        return "provincia/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Provincia creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('homepage_provincia_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
