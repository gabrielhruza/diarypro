<?php

/* bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_18dd3abc7dc1ed76b1ad853d3f4851d6caf27eba94765ce54d0c92d0595e4ff4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_3_layout.html.twig", "bootstrap_3_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_3_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'checkbox_radio_row' => array($this, 'block_checkbox_radio_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a3be948bbeaf6e8a8686dce889c1ab71e29af37a4f8d7a6ec405e4814f533d0c = $this->env->getExtension("native_profiler");
        $__internal_a3be948bbeaf6e8a8686dce889c1ab71e29af37a4f8d7a6ec405e4814f533d0c->enter($__internal_a3be948bbeaf6e8a8686dce889c1ab71e29af37a4f8d7a6ec405e4814f533d0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 7
        echo "
";
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('form_label', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 24
        echo "
";
        // line 26
        echo "
";
        // line 27
        $this->displayBlock('form_row', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 40
        echo "
";
        // line 41
        $this->displayBlock('radio_row', $context, $blocks);
        // line 44
        echo "
";
        // line 45
        $this->displayBlock('checkbox_radio_row', $context, $blocks);
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('submit_row', $context, $blocks);
        // line 67
        echo "
";
        // line 68
        $this->displayBlock('reset_row', $context, $blocks);
        // line 78
        echo "
";
        // line 79
        $this->displayBlock('form_group_class', $context, $blocks);
        
        $__internal_a3be948bbeaf6e8a8686dce889c1ab71e29af37a4f8d7a6ec405e4814f533d0c->leave($__internal_a3be948bbeaf6e8a8686dce889c1ab71e29af37a4f8d7a6ec405e4814f533d0c_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_750afb78a7eabedee38094dcc4d69dac222097cfd40be80370c0f6da79aaa048 = $this->env->getExtension("native_profiler");
        $__internal_750afb78a7eabedee38094dcc4d69dac222097cfd40be80370c0f6da79aaa048->enter($__internal_750afb78a7eabedee38094dcc4d69dac222097cfd40be80370c0f6da79aaa048_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_750afb78a7eabedee38094dcc4d69dac222097cfd40be80370c0f6da79aaa048->leave($__internal_750afb78a7eabedee38094dcc4d69dac222097cfd40be80370c0f6da79aaa048_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_ec72240a9d73a1d8701e1b06e96b0566b8dae1c366134335c8c03d22f1bab374 = $this->env->getExtension("native_profiler");
        $__internal_ec72240a9d73a1d8701e1b06e96b0566b8dae1c366134335c8c03d22f1bab374->enter($__internal_ec72240a9d73a1d8701e1b06e96b0566b8dae1c366134335c8c03d22f1bab374_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 11
        ob_start();
        // line 12
        echo "    ";
        if (((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) {
            // line 13
            echo "        <div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>
    ";
        } else {
            // line 15
            echo "        ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim((((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " ") . $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 16
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_ec72240a9d73a1d8701e1b06e96b0566b8dae1c366134335c8c03d22f1bab374->leave($__internal_ec72240a9d73a1d8701e1b06e96b0566b8dae1c366134335c8c03d22f1bab374_prof);

    }

    // line 21
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_e0976ee2a332218778418d5fdaf10a513b8189cb9a1208d3112a3c6b84dc9112 = $this->env->getExtension("native_profiler");
        $__internal_e0976ee2a332218778418d5fdaf10a513b8189cb9a1208d3112a3c6b84dc9112->enter($__internal_e0976ee2a332218778418d5fdaf10a513b8189cb9a1208d3112a3c6b84dc9112_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 22
        echo "col-sm-2";
        
        $__internal_e0976ee2a332218778418d5fdaf10a513b8189cb9a1208d3112a3c6b84dc9112->leave($__internal_e0976ee2a332218778418d5fdaf10a513b8189cb9a1208d3112a3c6b84dc9112_prof);

    }

    // line 27
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_a80f1263640ac1ff623452d3356785c1db263a2f807774c9ec737263894a2731 = $this->env->getExtension("native_profiler");
        $__internal_a80f1263640ac1ff623452d3356785c1db263a2f807774c9ec737263894a2731->enter($__internal_a80f1263640ac1ff623452d3356785c1db263a2f807774c9ec737263894a2731_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 28
        echo "<div class=\"form-group";
        if ((( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) ? $context["force_error"] : $this->getContext($context, "force_error")), false)) : (false))) &&  !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        // line 30
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 33
        echo "</div>
";
        // line 34
        echo "</div>";
        
        $__internal_a80f1263640ac1ff623452d3356785c1db263a2f807774c9ec737263894a2731->leave($__internal_a80f1263640ac1ff623452d3356785c1db263a2f807774c9ec737263894a2731_prof);

    }

    // line 37
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_6a5cb9e9a3481fd2554f29671fb10fef4ed8ac8382f5a21c708f0deef976fb41 = $this->env->getExtension("native_profiler");
        $__internal_6a5cb9e9a3481fd2554f29671fb10fef4ed8ac8382f5a21c708f0deef976fb41->enter($__internal_6a5cb9e9a3481fd2554f29671fb10fef4ed8ac8382f5a21c708f0deef976fb41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 38
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_6a5cb9e9a3481fd2554f29671fb10fef4ed8ac8382f5a21c708f0deef976fb41->leave($__internal_6a5cb9e9a3481fd2554f29671fb10fef4ed8ac8382f5a21c708f0deef976fb41_prof);

    }

    // line 41
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_e73ce66841307e53502e8419d9d500c25121aeaed4b16656821be90794652c5b = $this->env->getExtension("native_profiler");
        $__internal_e73ce66841307e53502e8419d9d500c25121aeaed4b16656821be90794652c5b->enter($__internal_e73ce66841307e53502e8419d9d500c25121aeaed4b16656821be90794652c5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 42
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_e73ce66841307e53502e8419d9d500c25121aeaed4b16656821be90794652c5b->leave($__internal_e73ce66841307e53502e8419d9d500c25121aeaed4b16656821be90794652c5b_prof);

    }

    // line 45
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        $__internal_5161e3260d2eb9ad52f0660e37101fd59d2a225a51ed0b0154e49b2801a88f47 = $this->env->getExtension("native_profiler");
        $__internal_5161e3260d2eb9ad52f0660e37101fd59d2a225a51ed0b0154e49b2801a88f47->enter($__internal_5161e3260d2eb9ad52f0660e37101fd59d2a225a51ed0b0154e49b2801a88f47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        // line 46
        ob_start();
        // line 47
        echo "    <div class=\"form-group";
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">
        <div class=\"";
        // line 48
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 49
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_5161e3260d2eb9ad52f0660e37101fd59d2a225a51ed0b0154e49b2801a88f47->leave($__internal_5161e3260d2eb9ad52f0660e37101fd59d2a225a51ed0b0154e49b2801a88f47_prof);

    }

    // line 57
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_cfd1637f69efd14a66ee2600253e0866663facf4034fe04d2cb20ce809e85595 = $this->env->getExtension("native_profiler");
        $__internal_cfd1637f69efd14a66ee2600253e0866663facf4034fe04d2cb20ce809e85595->enter($__internal_cfd1637f69efd14a66ee2600253e0866663facf4034fe04d2cb20ce809e85595_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 58
        ob_start();
        // line 59
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 60
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 61
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_cfd1637f69efd14a66ee2600253e0866663facf4034fe04d2cb20ce809e85595->leave($__internal_cfd1637f69efd14a66ee2600253e0866663facf4034fe04d2cb20ce809e85595_prof);

    }

    // line 68
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_20d649ad9f6f54192a29150e023ae015bb088653ce066aebd98896539accf6f0 = $this->env->getExtension("native_profiler");
        $__internal_20d649ad9f6f54192a29150e023ae015bb088653ce066aebd98896539accf6f0->enter($__internal_20d649ad9f6f54192a29150e023ae015bb088653ce066aebd98896539accf6f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 69
        ob_start();
        // line 70
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 71
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 72
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_20d649ad9f6f54192a29150e023ae015bb088653ce066aebd98896539accf6f0->leave($__internal_20d649ad9f6f54192a29150e023ae015bb088653ce066aebd98896539accf6f0_prof);

    }

    // line 79
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_cb779d239aecdb009db192588b405c32c306d19c49ff18934e89a0b12f7bb6fb = $this->env->getExtension("native_profiler");
        $__internal_cb779d239aecdb009db192588b405c32c306d19c49ff18934e89a0b12f7bb6fb->enter($__internal_cb779d239aecdb009db192588b405c32c306d19c49ff18934e89a0b12f7bb6fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 80
        echo "col-sm-10";
        
        $__internal_cb779d239aecdb009db192588b405c32c306d19c49ff18934e89a0b12f7bb6fb->leave($__internal_cb779d239aecdb009db192588b405c32c306d19c49ff18934e89a0b12f7bb6fb_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  327 => 80,  321 => 79,  309 => 73,  305 => 72,  301 => 71,  298 => 70,  296 => 69,  290 => 68,  278 => 62,  274 => 61,  270 => 60,  267 => 59,  265 => 58,  259 => 57,  247 => 51,  243 => 50,  239 => 49,  235 => 48,  228 => 47,  226 => 46,  220 => 45,  213 => 42,  207 => 41,  200 => 38,  194 => 37,  187 => 34,  184 => 33,  182 => 32,  180 => 31,  176 => 30,  174 => 29,  168 => 28,  162 => 27,  155 => 22,  149 => 21,  140 => 16,  137 => 15,  131 => 13,  128 => 12,  126 => 11,  120 => 10,  113 => 5,  111 => 4,  105 => 3,  98 => 79,  95 => 78,  93 => 68,  90 => 67,  88 => 57,  85 => 56,  83 => 45,  80 => 44,  78 => 41,  75 => 40,  73 => 37,  70 => 36,  68 => 27,  65 => 26,  62 => 24,  60 => 21,  57 => 20,  55 => 10,  52 => 9,  49 => 7,  47 => 3,  44 => 2,  14 => 1,);
    }
}
/* {% use "bootstrap_3_layout.html.twig" %}*/
/* */
/* {% block form_start -%}*/
/*     {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-horizontal')|trim}) %}*/
/*     {{- parent() -}}*/
/* {%- endblock form_start %}*/
/* */
/* {# Labels #}*/
/* */
/* {% block form_label -%}*/
/* {% spaceless %}*/
/*     {% if label is same as(false) %}*/
/*         <div class="{{ block('form_label_class') }}"></div>*/
/*     {% else %}*/
/*         {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) %}*/
/*         {{- parent() -}}*/
/*     {% endif %}*/
/* {% endspaceless %}*/
/* {%- endblock form_label %}*/
/* */
/* {% block form_label_class -%}*/
/* col-sm-2*/
/* {%- endblock form_label_class %}*/
/* */
/* {# Rows #}*/
/* */
/* {% block form_row -%}*/
/*     <div class="form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}">*/
/*         {{- form_label(form) -}}*/
/*         <div class="{{ block('form_group_class') }}">*/
/*             {{- form_widget(form) -}}*/
/*             {{- form_errors(form) -}}*/
/*         </div>*/
/* {##}</div>*/
/* {%- endblock form_row %}*/
/* */
/* {% block checkbox_row -%}*/
/*     {{- block('checkbox_radio_row') -}}*/
/* {%- endblock checkbox_row %}*/
/* */
/* {% block radio_row -%}*/
/*     {{- block('checkbox_radio_row') -}}*/
/* {%- endblock radio_row %}*/
/* */
/* {% block checkbox_radio_row -%}*/
/* {% spaceless %}*/
/*     <div class="form-group{% if not valid %} has-error{% endif %}">*/
/*         <div class="{{ block('form_label_class') }}"></div>*/
/*         <div class="{{ block('form_group_class') }}">*/
/*             {{ form_widget(form) }}*/
/*             {{ form_errors(form) }}*/
/*         </div>*/
/*     </div>*/
/* {% endspaceless %}*/
/* {%- endblock checkbox_radio_row %}*/
/* */
/* {% block submit_row -%}*/
/* {% spaceless %}*/
/*     <div class="form-group">*/
/*         <div class="{{ block('form_label_class') }}"></div>*/
/*         <div class="{{ block('form_group_class') }}">*/
/*             {{ form_widget(form) }}*/
/*         </div>*/
/*     </div>*/
/* {% endspaceless %}*/
/* {% endblock submit_row %}*/
/* */
/* {% block reset_row -%}*/
/* {% spaceless %}*/
/*     <div class="form-group">*/
/*         <div class="{{ block('form_label_class') }}"></div>*/
/*         <div class="{{ block('form_group_class') }}">*/
/*             {{ form_widget(form) }}*/
/*         </div>*/
/*     </div>*/
/* {% endspaceless %}*/
/* {% endblock reset_row %}*/
/* */
/* {% block form_group_class -%}*/
/* col-sm-10*/
/* {%- endblock form_group_class %}*/
/* */
