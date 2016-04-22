<?php

/* profesion/new.html.twig */
class __TwigTemplate_1ed6205b613ecab82bd5c3cabd817eed2d677edcf23763755e6cdc431a52cdc2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "profesion/new.html.twig", 1);
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
        $__internal_63408f1df7fe19f45c8f7c68dd48b2a48f7e999bde7041766c7564bdbc73ed8e = $this->env->getExtension("native_profiler");
        $__internal_63408f1df7fe19f45c8f7c68dd48b2a48f7e999bde7041766c7564bdbc73ed8e->enter($__internal_63408f1df7fe19f45c8f7c68dd48b2a48f7e999bde7041766c7564bdbc73ed8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "profesion/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_63408f1df7fe19f45c8f7c68dd48b2a48f7e999bde7041766c7564bdbc73ed8e->leave($__internal_63408f1df7fe19f45c8f7c68dd48b2a48f7e999bde7041766c7564bdbc73ed8e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_21e2ab045e602f35094e926c6fcf4875e4f3de973b995fc20f2a08ced9b1b97a = $this->env->getExtension("native_profiler");
        $__internal_21e2ab045e602f35094e926c6fcf4875e4f3de973b995fc20f2a08ced9b1b97a->enter($__internal_21e2ab045e602f35094e926c6fcf4875e4f3de973b995fc20f2a08ced9b1b97a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Profesion creation</h1>

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
        echo $this->env->getExtension('routing')->getPath("profesion_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_21e2ab045e602f35094e926c6fcf4875e4f3de973b995fc20f2a08ced9b1b97a->leave($__internal_21e2ab045e602f35094e926c6fcf4875e4f3de973b995fc20f2a08ced9b1b97a_prof);

    }

    public function getTemplateName()
    {
        return "profesion/new.html.twig";
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
/*     <h1>Profesion creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('profesion_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
