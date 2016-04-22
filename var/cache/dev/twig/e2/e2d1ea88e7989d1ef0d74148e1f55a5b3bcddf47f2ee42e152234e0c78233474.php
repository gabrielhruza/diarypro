<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_a274c3aeae51aab0f38788601783a2359c61271b2e0aae96afe8814e4b874307 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_80da2b1e40e1dc492fb56ca1c5fb522bf6a546929587db13c02a2d8d0f4d6c3d = $this->env->getExtension("native_profiler");
        $__internal_80da2b1e40e1dc492fb56ca1c5fb522bf6a546929587db13c02a2d8d0f4d6c3d->enter($__internal_80da2b1e40e1dc492fb56ca1c5fb522bf6a546929587db13c02a2d8d0f4d6c3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_80da2b1e40e1dc492fb56ca1c5fb522bf6a546929587db13c02a2d8d0f4d6c3d->leave($__internal_80da2b1e40e1dc492fb56ca1c5fb522bf6a546929587db13c02a2d8d0f4d6c3d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d1ea7323743a02afb08a1949cc80c5d270f3ada8aab6fec6d54b339ad4364509 = $this->env->getExtension("native_profiler");
        $__internal_d1ea7323743a02afb08a1949cc80c5d270f3ada8aab6fec6d54b339ad4364509->enter($__internal_d1ea7323743a02afb08a1949cc80c5d270f3ada8aab6fec6d54b339ad4364509_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d1ea7323743a02afb08a1949cc80c5d270f3ada8aab6fec6d54b339ad4364509->leave($__internal_d1ea7323743a02afb08a1949cc80c5d270f3ada8aab6fec6d54b339ad4364509_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7eaa00b3cda97c14aa39475e6b9c2a559045fd6997d553b3b7ebcec2edee9d67 = $this->env->getExtension("native_profiler");
        $__internal_7eaa00b3cda97c14aa39475e6b9c2a559045fd6997d553b3b7ebcec2edee9d67->enter($__internal_7eaa00b3cda97c14aa39475e6b9c2a559045fd6997d553b3b7ebcec2edee9d67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7eaa00b3cda97c14aa39475e6b9c2a559045fd6997d553b3b7ebcec2edee9d67->leave($__internal_7eaa00b3cda97c14aa39475e6b9c2a559045fd6997d553b3b7ebcec2edee9d67_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a3287856061de33e457f99b73d4c25ef2eb2cbd6f9868ce64f6902730fa43b03 = $this->env->getExtension("native_profiler");
        $__internal_a3287856061de33e457f99b73d4c25ef2eb2cbd6f9868ce64f6902730fa43b03->enter($__internal_a3287856061de33e457f99b73d4c25ef2eb2cbd6f9868ce64f6902730fa43b03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_a3287856061de33e457f99b73d4c25ef2eb2cbd6f9868ce64f6902730fa43b03->leave($__internal_a3287856061de33e457f99b73d4c25ef2eb2cbd6f9868ce64f6902730fa43b03_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
