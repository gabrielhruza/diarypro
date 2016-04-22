<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_8c48ea3e6ced49370945da18be289e51dc49636b7d9d2796dffe40e0140eec9f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_58780e36546d2f791238b1498fdae4ed77a208e72fea840741e2d7040b9ad09f = $this->env->getExtension("native_profiler");
        $__internal_58780e36546d2f791238b1498fdae4ed77a208e72fea840741e2d7040b9ad09f->enter($__internal_58780e36546d2f791238b1498fdae4ed77a208e72fea840741e2d7040b9ad09f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_58780e36546d2f791238b1498fdae4ed77a208e72fea840741e2d7040b9ad09f->leave($__internal_58780e36546d2f791238b1498fdae4ed77a208e72fea840741e2d7040b9ad09f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3639ee42c134f970194702b8d60d5fc4f3aee732652eb2e2d0d65ecec467c13b = $this->env->getExtension("native_profiler");
        $__internal_3639ee42c134f970194702b8d60d5fc4f3aee732652eb2e2d0d65ecec467c13b->enter($__internal_3639ee42c134f970194702b8d60d5fc4f3aee732652eb2e2d0d65ecec467c13b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3639ee42c134f970194702b8d60d5fc4f3aee732652eb2e2d0d65ecec467c13b->leave($__internal_3639ee42c134f970194702b8d60d5fc4f3aee732652eb2e2d0d65ecec467c13b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ec44ec2bb733ac24c2f659a249bf9ad5e006e615eab1404ea63c84e386739176 = $this->env->getExtension("native_profiler");
        $__internal_ec44ec2bb733ac24c2f659a249bf9ad5e006e615eab1404ea63c84e386739176->enter($__internal_ec44ec2bb733ac24c2f659a249bf9ad5e006e615eab1404ea63c84e386739176_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ec44ec2bb733ac24c2f659a249bf9ad5e006e615eab1404ea63c84e386739176->leave($__internal_ec44ec2bb733ac24c2f659a249bf9ad5e006e615eab1404ea63c84e386739176_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_68832a97920e409808c4197c2e060f325c79dd4dda3e48d8a959486999326e8d = $this->env->getExtension("native_profiler");
        $__internal_68832a97920e409808c4197c2e060f325c79dd4dda3e48d8a959486999326e8d->enter($__internal_68832a97920e409808c4197c2e060f325c79dd4dda3e48d8a959486999326e8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_68832a97920e409808c4197c2e060f325c79dd4dda3e48d8a959486999326e8d->leave($__internal_68832a97920e409808c4197c2e060f325c79dd4dda3e48d8a959486999326e8d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
