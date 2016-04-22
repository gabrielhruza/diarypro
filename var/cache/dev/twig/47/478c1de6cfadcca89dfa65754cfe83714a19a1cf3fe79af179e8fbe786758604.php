<?php

/* ciudad/new.html.twig */
class __TwigTemplate_bca1e156ed1ffed3017c7142e5a930a97c03013834f237e3a71535ee805aeb09 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ciudad/new.html.twig", 1);
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
        $__internal_b21470237a4763d7ad2095bc028c635024664b2ca198e1c57735c344f62485c3 = $this->env->getExtension("native_profiler");
        $__internal_b21470237a4763d7ad2095bc028c635024664b2ca198e1c57735c344f62485c3->enter($__internal_b21470237a4763d7ad2095bc028c635024664b2ca198e1c57735c344f62485c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ciudad/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b21470237a4763d7ad2095bc028c635024664b2ca198e1c57735c344f62485c3->leave($__internal_b21470237a4763d7ad2095bc028c635024664b2ca198e1c57735c344f62485c3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7a4c193ad52e1fba7216919ad2cb304f43dd9c1dad7f9714077abfbe3fec7911 = $this->env->getExtension("native_profiler");
        $__internal_7a4c193ad52e1fba7216919ad2cb304f43dd9c1dad7f9714077abfbe3fec7911->enter($__internal_7a4c193ad52e1fba7216919ad2cb304f43dd9c1dad7f9714077abfbe3fec7911_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Ciudad creation</h1>

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
        echo $this->env->getExtension('routing')->getPath("homepage_ciudad_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_7a4c193ad52e1fba7216919ad2cb304f43dd9c1dad7f9714077abfbe3fec7911->leave($__internal_7a4c193ad52e1fba7216919ad2cb304f43dd9c1dad7f9714077abfbe3fec7911_prof);

    }

    public function getTemplateName()
    {
        return "ciudad/new.html.twig";
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
/*     <h1>Ciudad creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('homepage_ciudad_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
