<?php

/* provincia/edit.html.twig */
class __TwigTemplate_7c6c79df581d82580727e7e274f544bc4e10eac329ca7dcd920fe9b8c7e831e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "provincia/edit.html.twig", 1);
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
        $__internal_76b101fe41ee3fc946010ee487e83559bf5d5420d180a9ac3f2c84bdf7fcec8f = $this->env->getExtension("native_profiler");
        $__internal_76b101fe41ee3fc946010ee487e83559bf5d5420d180a9ac3f2c84bdf7fcec8f->enter($__internal_76b101fe41ee3fc946010ee487e83559bf5d5420d180a9ac3f2c84bdf7fcec8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "provincia/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_76b101fe41ee3fc946010ee487e83559bf5d5420d180a9ac3f2c84bdf7fcec8f->leave($__internal_76b101fe41ee3fc946010ee487e83559bf5d5420d180a9ac3f2c84bdf7fcec8f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_500c613ecf8132b20249ec32b2fb58fc52c03df9334edc705ddfb7708624bdb9 = $this->env->getExtension("native_profiler");
        $__internal_500c613ecf8132b20249ec32b2fb58fc52c03df9334edc705ddfb7708624bdb9->enter($__internal_500c613ecf8132b20249ec32b2fb58fc52c03df9334edc705ddfb7708624bdb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Provincia edit</h1>

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
        echo $this->env->getExtension('routing')->getPath("homepage_provincia_index");
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
        
        $__internal_500c613ecf8132b20249ec32b2fb58fc52c03df9334edc705ddfb7708624bdb9->leave($__internal_500c613ecf8132b20249ec32b2fb58fc52c03df9334edc705ddfb7708624bdb9_prof);

    }

    public function getTemplateName()
    {
        return "provincia/edit.html.twig";
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
/*     <h1>Provincia edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('homepage_provincia_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
