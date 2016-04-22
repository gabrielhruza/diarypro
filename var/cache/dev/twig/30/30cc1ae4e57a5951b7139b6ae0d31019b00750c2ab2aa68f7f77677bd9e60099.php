<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_8a613b1af4304f5add16421e7fe4279b2539896d450d0fa7f3a4cf223d3ad5df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_be2484a4b7d60e754ff3d75babc506379152af97ad8fd881f91ca1276b28b211 = $this->env->getExtension("native_profiler");
        $__internal_be2484a4b7d60e754ff3d75babc506379152af97ad8fd881f91ca1276b28b211->enter($__internal_be2484a4b7d60e754ff3d75babc506379152af97ad8fd881f91ca1276b28b211_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be2484a4b7d60e754ff3d75babc506379152af97ad8fd881f91ca1276b28b211->leave($__internal_be2484a4b7d60e754ff3d75babc506379152af97ad8fd881f91ca1276b28b211_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_46629e0ca7324f8c587b6a7c22d5dd16ba8d53bcde3ee7d721d3c8db91198f3d = $this->env->getExtension("native_profiler");
        $__internal_46629e0ca7324f8c587b6a7c22d5dd16ba8d53bcde3ee7d721d3c8db91198f3d->enter($__internal_46629e0ca7324f8c587b6a7c22d5dd16ba8d53bcde3ee7d721d3c8db91198f3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_46629e0ca7324f8c587b6a7c22d5dd16ba8d53bcde3ee7d721d3c8db91198f3d->leave($__internal_46629e0ca7324f8c587b6a7c22d5dd16ba8d53bcde3ee7d721d3c8db91198f3d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>*/
/*     {% if targetUrl %}*/
/*     <p><a href="{{ targetUrl }}">{{ 'registration.back'|trans }}</a></p>*/
/*     {% endif %}*/
/* {% endblock fos_user_content %}*/
/* */
