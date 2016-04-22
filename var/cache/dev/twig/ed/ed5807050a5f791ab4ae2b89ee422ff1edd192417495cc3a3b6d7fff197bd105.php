<?php

/* base.html.twig */
class __TwigTemplate_dc36385ae1b734b3fae2433ef0ad8550a628919d51484b8aaab1ceb203d61b0a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'contenido' => array($this, 'block_contenido'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_33fa81fca085b95c367d434eeca348c855dc61d86ff0eeb3cd54fc9891cfdcd4 = $this->env->getExtension("native_profiler");
        $__internal_33fa81fca085b95c367d434eeca348c855dc61d86ff0eeb3cd54fc9891cfdcd4->enter($__internal_33fa81fca085b95c367d434eeca348c855dc61d86ff0eeb3cd54fc9891cfdcd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 17
        $this->displayBlock('body', $context, $blocks);
        // line 36
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 67
        echo "    </body>
</html>



";
        
        $__internal_33fa81fca085b95c367d434eeca348c855dc61d86ff0eeb3cd54fc9891cfdcd4->leave($__internal_33fa81fca085b95c367d434eeca348c855dc61d86ff0eeb3cd54fc9891cfdcd4_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_68fa9a1a68fa1d424890478fd557356f09be65af8bff2b7eb5dd7e2c42cb8ad1 = $this->env->getExtension("native_profiler");
        $__internal_68fa9a1a68fa1d424890478fd557356f09be65af8bff2b7eb5dd7e2c42cb8ad1->enter($__internal_68fa9a1a68fa1d424890478fd557356f09be65af8bff2b7eb5dd7e2c42cb8ad1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Agenda de profesionales";
        
        $__internal_68fa9a1a68fa1d424890478fd557356f09be65af8bff2b7eb5dd7e2c42cb8ad1->leave($__internal_68fa9a1a68fa1d424890478fd557356f09be65af8bff2b7eb5dd7e2c42cb8ad1_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4cc36c2f70ce2f880351430cf78de29b77c9b3fe98773f383e9b88a958fb976b = $this->env->getExtension("native_profiler");
        $__internal_4cc36c2f70ce2f880351430cf78de29b77c9b3fe98773f383e9b88a958fb976b->enter($__internal_4cc36c2f70ce2f880351430cf78de29b77c9b3fe98773f383e9b88a958fb976b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"
        stylesheet\" />
        <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/fonts/glyphicons-halflings-regular.eot"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/fonts/glyphicons-halflings-regular.svg"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/fonts/glyphicons-halflings-regular.woff"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/fonts/glyphicons-halflings-regular.woff2"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_4cc36c2f70ce2f880351430cf78de29b77c9b3fe98773f383e9b88a958fb976b->leave($__internal_4cc36c2f70ce2f880351430cf78de29b77c9b3fe98773f383e9b88a958fb976b_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_edd7d57fcdd14668cca0bf167c322d844ff5f4f9846c4b50c78b2c03ccf49a48 = $this->env->getExtension("native_profiler");
        $__internal_edd7d57fcdd14668cca0bf167c322d844ff5f4f9846c4b50c78b2c03ccf49a48->enter($__internal_edd7d57fcdd14668cca0bf167c322d844ff5f4f9846c4b50c78b2c03ccf49a48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 18
        echo "       
        ";
        // line 19
        echo twig_include($this->env, $context, "default/header.html.twig");
        echo "
      
        <div class=\"container-fluid\">
        <div class=\"row-fluid\">
        <div class=\"col-md-3\">
        <!--Sidebar content-->
        ";
        // line 25
        echo twig_include($this->env, $context, "default/menu.html.twig");
        echo "
        </div>
        <div class=\"col-md-9\">
        ";
        // line 28
        $this->displayBlock('contenido', $context, $blocks);
        // line 31
        echo "    </div>
  </div>
</div>

        ";
        
        $__internal_edd7d57fcdd14668cca0bf167c322d844ff5f4f9846c4b50c78b2c03ccf49a48->leave($__internal_edd7d57fcdd14668cca0bf167c322d844ff5f4f9846c4b50c78b2c03ccf49a48_prof);

    }

    // line 28
    public function block_contenido($context, array $blocks = array())
    {
        $__internal_c7c2cae5428d4ead8ca73723b1362796ca7e7f113b60079d422b95aaeb9e59d0 = $this->env->getExtension("native_profiler");
        $__internal_c7c2cae5428d4ead8ca73723b1362796ca7e7f113b60079d422b95aaeb9e59d0->enter($__internal_c7c2cae5428d4ead8ca73723b1362796ca7e7f113b60079d422b95aaeb9e59d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenido"));

        // line 29
        echo "        ";
        // line 30
        echo "        ";
        
        $__internal_c7c2cae5428d4ead8ca73723b1362796ca7e7f113b60079d422b95aaeb9e59d0->leave($__internal_c7c2cae5428d4ead8ca73723b1362796ca7e7f113b60079d422b95aaeb9e59d0_prof);

    }

    // line 36
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_96b958e3e94dc8b671b0de39a289a5376316339897e336ce0d20269e5d0a5e23 = $this->env->getExtension("native_profiler");
        $__internal_96b958e3e94dc8b671b0de39a289a5376316339897e336ce0d20269e5d0a5e23->enter($__internal_96b958e3e94dc8b671b0de39a289a5376316339897e336ce0d20269e5d0a5e23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 37
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/js/jquery-2.2.3.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script>
        \$(\"#profesional_direccionPostal_provincia\").change(function() {
        
         var data = {
            provincia_id: \$(this).val()
        };

        \$.ajax({

            type: 'post',
            url: \"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("homepage_listarporprovincia", array("id" => 1));
        echo "\",
            data: data,
            success: function(data) {
                var \$ciudad_selector = \$('#profesional_direccionPostal_localidad');
                
                
                //\$ciudad_selector.html('');
                //\$ciudad_selector.parent().remove(\$this);


                for (var i = 0; i<data.length; i++) {
                    \$ciudad_selector.append('<option value=\"' + data[i].id + '\">' + data[i].nombre + '</option>');
                }
            }
        });
        });
        </script>
        ";
        
        $__internal_96b958e3e94dc8b671b0de39a289a5376316339897e336ce0d20269e5d0a5e23->leave($__internal_96b958e3e94dc8b671b0de39a289a5376316339897e336ce0d20269e5d0a5e23_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 49,  171 => 38,  166 => 37,  160 => 36,  153 => 30,  151 => 29,  145 => 28,  134 => 31,  132 => 28,  126 => 25,  117 => 19,  114 => 18,  108 => 17,  99 => 12,  95 => 11,  91 => 10,  87 => 9,  81 => 7,  75 => 6,  63 => 5,  51 => 67,  48 => 36,  46 => 17,  39 => 14,  37 => 6,  33 => 5,  27 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Agenda de profesionales{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*         <link href="{{ asset('bundles/app/css/bootstrap.min.css') }}" type="text/css" rel="*/
/*         stylesheet" />*/
/*         <link href="{{ asset('bundles/app/fonts/glyphicons-halflings-regular.eot') }}" type="text/css" rel="stylesheet" />*/
/*         <link href="{{ asset('bundles/app/fonts/glyphicons-halflings-regular.svg') }}" type="text/css" rel="stylesheet" />*/
/*         <link href="{{ asset('bundles/app/fonts/glyphicons-halflings-regular.woff') }}" type="text/css" rel="stylesheet" />*/
/*         <link href="{{ asset('bundles/app/fonts/glyphicons-halflings-regular.woff2')}}" type="text/css" rel="stylesheet" />*/
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}*/
/*        */
/*         {{ include('default/header.html.twig')}}*/
/*       */
/*         <div class="container-fluid">*/
/*         <div class="row-fluid">*/
/*         <div class="col-md-3">*/
/*         <!--Sidebar content-->*/
/*         {{ include('default/menu.html.twig')}}*/
/*         </div>*/
/*         <div class="col-md-9">*/
/*         {% block contenido %}*/
/*         {# include('default/principal.html.twig')#}*/
/*         {% endblock %}*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* */
/*         {% endblock %}*/
/*         {% block javascripts %}*/
/*         <script src="{{ asset('bundles/app/js/jquery-2.2.3.js') }}"></script>*/
/*         <script src="{{ asset('bundles/app/js/bootstrap.min.js') }}"></script>*/
/*         <script>*/
/*         $("#profesional_direccionPostal_provincia").change(function() {*/
/*         */
/*          var data = {*/
/*             provincia_id: $(this).val()*/
/*         };*/
/* */
/*         $.ajax({*/
/* */
/*             type: 'post',*/
/*             url: "{{ path('homepage_listarporprovincia' , {'id' : 1}) }}",*/
/*             data: data,*/
/*             success: function(data) {*/
/*                 var $ciudad_selector = $('#profesional_direccionPostal_localidad');*/
/*                 */
/*                 */
/*                 //$ciudad_selector.html('');*/
/*                 //$ciudad_selector.parent().remove($this);*/
/* */
/* */
/*                 for (var i = 0; i<data.length; i++) {*/
/*                     $ciudad_selector.append('<option value="' + data[i].id + '">' + data[i].nombre + '</option>');*/
/*                 }*/
/*             }*/
/*         });*/
/*         });*/
/*         </script>*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
/* */
/* */
/* */
