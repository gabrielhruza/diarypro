<?php

/* default/menu.html.twig */
class __TwigTemplate_7d9b2a3390e7bbd4d8844f0f6f84bbc14c61a35126850af8aa8279353d66b4af extends Twig_Template
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
        $__internal_32e2edd846da0c74358dd5dbb45d1b89703d7f4f5046fe5b6424fe5309f64eb6 = $this->env->getExtension("native_profiler");
        $__internal_32e2edd846da0c74358dd5dbb45d1b89703d7f4f5046fe5b6424fe5309f64eb6->enter($__internal_32e2edd846da0c74358dd5dbb45d1b89703d7f4f5046fe5b6424fe5309f64eb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/menu.html.twig"));

        // line 1
        echo "<div class=\"panel panel-info\">
  <div class=\"panel-heading\">
    <h3 class=\"panel-title\">Menú</h3>
  </div>
  <div class=\"panel-body\">
    <ul>
    <li><h4><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">Inicio</a></h4></li>
    <li><h4>Profesionales</h4></li>
    \t<ul>
    \t<li><h4><small><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("nuevo");
        echo "\">Nuevo</a></small></h4></li>
    \t<li><h4><small><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("rango");
        echo "\">Listar por rango de fechas</a></small></h4></li>
    \t<li><h4><small><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("listar");
        echo "\">Listar por localidad y profesión</a></small></h4></li>
    \t</ul>
    <li><h4>Profesiones</h4></li>
    \t<ul>
    \t<li><h4><small>Nuevo</small></h4></li>
    \t<li><h4><small>Listado completo</small></h4></li>
    \t</ul>
    <li><h4>Salir</h4></li>
    </ul> 
  </div>
</div>";
        
        $__internal_32e2edd846da0c74358dd5dbb45d1b89703d7f4f5046fe5b6424fe5309f64eb6->leave($__internal_32e2edd846da0c74358dd5dbb45d1b89703d7f4f5046fe5b6424fe5309f64eb6_prof);

    }

    public function getTemplateName()
    {
        return "default/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 12,  40 => 11,  36 => 10,  30 => 7,  22 => 1,);
    }
}
/* <div class="panel panel-info">*/
/*   <div class="panel-heading">*/
/*     <h3 class="panel-title">Menú</h3>*/
/*   </div>*/
/*   <div class="panel-body">*/
/*     <ul>*/
/*     <li><h4><a href="{{ path('homepage') }}">Inicio</a></h4></li>*/
/*     <li><h4>Profesionales</h4></li>*/
/*     	<ul>*/
/*     	<li><h4><small><a href="{{ path('nuevo') }}">Nuevo</a></small></h4></li>*/
/*     	<li><h4><small><a href="{{ path('rango') }}">Listar por rango de fechas</a></small></h4></li>*/
/*     	<li><h4><small><a href="{{ path('listar') }}">Listar por localidad y profesión</a></small></h4></li>*/
/*     	</ul>*/
/*     <li><h4>Profesiones</h4></li>*/
/*     	<ul>*/
/*     	<li><h4><small>Nuevo</small></h4></li>*/
/*     	<li><h4><small>Listado completo</small></h4></li>*/
/*     	</ul>*/
/*     <li><h4>Salir</h4></li>*/
/*     </ul> */
/*   </div>*/
/* </div>*/
