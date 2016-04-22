<?php

/* default/header.html.twig */
class __TwigTemplate_0250756c19af02dca7d5ea3a5d80da5bdb6ac1a97968bdbc1aa363892a35add2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c1c3838a81067b606acdb637aba7c837d13b907bfc988ade538873875bc8739f = $this->env->getExtension("native_profiler");
        $__internal_c1c3838a81067b606acdb637aba7c837d13b907bfc988ade538873875bc8739f->enter($__internal_c1c3838a81067b606acdb637aba7c837d13b907bfc988ade538873875bc8739f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/header.html.twig"));

        // line 1
        echo "

<div class=\"page-header\">
<h1>Agenda de profesionales <span class=\"text-right\"><small> bienvenido <mark>";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "</mark></small></span></h1>
</div>
";
        
        $__internal_c1c3838a81067b606acdb637aba7c837d13b907bfc988ade538873875bc8739f->leave($__internal_c1c3838a81067b606acdb637aba7c837d13b907bfc988ade538873875bc8739f_prof);

    }

    public function getTemplateName()
    {
        return "default/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* */
/* */
/* <div class="page-header">*/
/* <h1>Agenda de profesionales <span class="text-right"><small> bienvenido <mark>{{app.user.username}}</mark></small></span></h1>*/
/* </div>*/
/* */
