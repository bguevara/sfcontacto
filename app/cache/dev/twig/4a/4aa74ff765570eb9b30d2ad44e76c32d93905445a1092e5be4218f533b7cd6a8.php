<?php

/* ::base.html.twig */
class __TwigTemplate_c27cff0cdc9f14be061dd643de269664c48db671b8a1184f4fd232e848a3512c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'bodyclass' => array($this, 'block_bodyclass'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_15cf7c9b2e15f1ddddcb7836169aa11927e6db0bfd871eaf76754f2037c2c8a6 = $this->env->getExtension("native_profiler");
        $__internal_15cf7c9b2e15f1ddddcb7836169aa11927e6db0bfd871eaf76754f2037c2c8a6->enter($__internal_15cf7c9b2e15f1ddddcb7836169aa11927e6db0bfd871eaf76754f2037c2c8a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"es\">
  <head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo " </title>
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/images/head.png"), "html", null, true);
        echo "\" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
    <!-- Bootstrap 3.3.4 -->
    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- FontAwesome 4.3.0 -->
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- Ionicons 2.0.0 -->
    <!--link href=\"https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css\" rel=\"stylesheet\" type=\"text/css\" /-->
    <!-- Theme style -->
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/dist/css/AdminLTE.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/dist/css/skins/_all-skins.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- iCheck -->
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/plugins/iCheck/flat/blue.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- Morris chart -->
    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/plugins/morris/morris.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- jvectormap -->
    <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/plugins/jvectormap/jquery-jvectormap-1.2.2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- Date Picker -->
    <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/plugins/datepicker/datepicker3.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- Daterange picker -->
    <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/plugins/daterangepicker/daterangepicker-bs3.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- bootstrap wysihtml5 - text editor -->
    
    <link href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    
    ";
        // line 35
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 36
        echo "    
    <style>
        /* Start by setting display:none to make this hidden.
   Then we position it in relation to the viewport window
   with position:fixed. Width, height, top and left speak
   speak for themselves. Background we set to 80% white with
   our animation centered, and no-repeating */
    .modal_show {
        display:    none;
        position:   fixed;
        z-index:    1000;
        top:        0;
        left:       0;
        height:     100%;
        width:      100%;
        background: rgba( 255, 255, 255, .8 ) 
                    url('http://i.stack.imgur.com/FhHRx.gif') 
                    50% 50% 
                    no-repeat;
    }

    /* When the body has the loading class, we turn
       the scrollbar off with overflow:hidden */
    body.loading {
        overflow: hidden;   
    }

    /* Anytime the body has the loading class, our
       modal element will be visible */
    body.loading .modal_show {
        display: block;
    }
        
    </style>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
        <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
  </head>
  <body class=\"";
        // line 77
        $this->displayBlock('bodyclass', $context, $blocks);
        echo "\">
    <!--[if lt IE 7]>
            <p class=\"chromeframe\">You are using an <strong>outdated</strong> browser. Please <a href=\"http://browsehappy.com/\">upgrade your browser</a> or <a href=\"http://www.google.com/chromeframe/?redirect=true\">activate Google Chrome Frame</a> to improve your experience.</p>
    <![endif]-->
  ";
        // line 81
        $this->displayBlock('body', $context, $blocks);
        echo "     
      
   <div class=\"modal_show\"><!-- Place at bottom of page --></div>
 <!-- jQuery 2.1.4 -->
    <script src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/plugins/jQuery/jQuery-2.1.4.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src=\"https://code.jquery.com/ui/1.11.4/jquery-ui.min.js\" type=\"text/javascript\"></script>
    <script type=\"text/javascript\">
      \$.widget.bridge('uibutton', \$.ui.button);
    </script>
    
    <script type=\"text/javascript\" class=\"init\"></script>  
    
     
    
    
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    
    
    <!-- Bootstrap 3.3.2 JS -->
    <script src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    
    <!-- daterangepicker -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/plugins/daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- datepicker -->
    <script src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/plugins/datepicker/bootstrap-datepicker.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- Slimscroll -->
    <script src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/plugins/slimScroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- FastClick -->
    <script src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/plugins/fastclick/fastclick.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    
    
    <script src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/js/jquery.flashMessages.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- AdminLTE App -->
    <script src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/dist/js/app.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <!-- AdminLTE for demo purposes -->
    <script src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/dist/js/demo.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script>
        \$('#flash-messages').flashNotification('init');
    </script> 
    
    ";
        // line 126
        $this->displayBlock('javascripts', $context, $blocks);
        // line 127
        echo "    
  </body>
</html>
   
      ";
        
        $__internal_15cf7c9b2e15f1ddddcb7836169aa11927e6db0bfd871eaf76754f2037c2c8a6->leave($__internal_15cf7c9b2e15f1ddddcb7836169aa11927e6db0bfd871eaf76754f2037c2c8a6_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_348b9b2d53cf9ea63b05f81947686ece1dc989d14670ddf7f01b2ba5240e8818 = $this->env->getExtension("native_profiler");
        $__internal_348b9b2d53cf9ea63b05f81947686ece1dc989d14670ddf7f01b2ba5240e8818->enter($__internal_348b9b2d53cf9ea63b05f81947686ece1dc989d14670ddf7f01b2ba5240e8818_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Bienvenido";
        
        $__internal_348b9b2d53cf9ea63b05f81947686ece1dc989d14670ddf7f01b2ba5240e8818->leave($__internal_348b9b2d53cf9ea63b05f81947686ece1dc989d14670ddf7f01b2ba5240e8818_prof);

    }

    // line 35
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_29e234d1ac48110fa80e74d247b88c453a3f58096e3bb7d30827bdf57abbfb99 = $this->env->getExtension("native_profiler");
        $__internal_29e234d1ac48110fa80e74d247b88c453a3f58096e3bb7d30827bdf57abbfb99->enter($__internal_29e234d1ac48110fa80e74d247b88c453a3f58096e3bb7d30827bdf57abbfb99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_29e234d1ac48110fa80e74d247b88c453a3f58096e3bb7d30827bdf57abbfb99->leave($__internal_29e234d1ac48110fa80e74d247b88c453a3f58096e3bb7d30827bdf57abbfb99_prof);

    }

    // line 77
    public function block_bodyclass($context, array $blocks = array())
    {
        $__internal_5b5b0642610fa27c91a94ba53cc09cd867d61e948027caadc20f68bd04076ccf = $this->env->getExtension("native_profiler");
        $__internal_5b5b0642610fa27c91a94ba53cc09cd867d61e948027caadc20f68bd04076ccf->enter($__internal_5b5b0642610fa27c91a94ba53cc09cd867d61e948027caadc20f68bd04076ccf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyclass"));

        echo "skin-blue sidebar-mini";
        
        $__internal_5b5b0642610fa27c91a94ba53cc09cd867d61e948027caadc20f68bd04076ccf->leave($__internal_5b5b0642610fa27c91a94ba53cc09cd867d61e948027caadc20f68bd04076ccf_prof);

    }

    // line 81
    public function block_body($context, array $blocks = array())
    {
        $__internal_86acddcea92e0a767543e5e50f590421ebcc47d0e3e62b77263f59bd7b01b695 = $this->env->getExtension("native_profiler");
        $__internal_86acddcea92e0a767543e5e50f590421ebcc47d0e3e62b77263f59bd7b01b695->enter($__internal_86acddcea92e0a767543e5e50f590421ebcc47d0e3e62b77263f59bd7b01b695_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_86acddcea92e0a767543e5e50f590421ebcc47d0e3e62b77263f59bd7b01b695->leave($__internal_86acddcea92e0a767543e5e50f590421ebcc47d0e3e62b77263f59bd7b01b695_prof);

    }

    // line 126
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c18e793098a6306da4c5da60a0e09ad549ca8eb0797a97f428c71333ab4b6d2e = $this->env->getExtension("native_profiler");
        $__internal_c18e793098a6306da4c5da60a0e09ad549ca8eb0797a97f428c71333ab4b6d2e->enter($__internal_c18e793098a6306da4c5da60a0e09ad549ca8eb0797a97f428c71333ab4b6d2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c18e793098a6306da4c5da60a0e09ad549ca8eb0797a97f428c71333ab4b6d2e->leave($__internal_c18e793098a6306da4c5da60a0e09ad549ca8eb0797a97f428c71333ab4b6d2e_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  288 => 126,  277 => 81,  265 => 77,  254 => 35,  242 => 5,  231 => 127,  229 => 126,  221 => 121,  215 => 118,  210 => 116,  204 => 113,  199 => 111,  194 => 109,  189 => 107,  184 => 105,  177 => 101,  158 => 85,  151 => 81,  144 => 77,  101 => 36,  99 => 35,  94 => 33,  88 => 30,  83 => 28,  78 => 26,  73 => 24,  68 => 22,  63 => 20,  57 => 17,  50 => 13,  45 => 11,  37 => 6,  33 => 5,  27 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="es">*/
/*   <head>*/
/*     <meta charset="UTF-8">*/
/*     <title>{% block title 'Bienvenido'%} </title>*/
/*     <link rel="icon" type="image/png" href="{{ asset('bundles/app/images/head.png')}}" />*/
/*     <!-- Tell the browser to be responsive to screen width -->*/
/*     <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">*/
/*     <!-- Bootstrap 3.3.4 -->*/
/*     <link href="{{ asset('bundles/app/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />*/
/*     <!-- FontAwesome 4.3.0 -->*/
/*     <link href="{{ asset('bundles/app/awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />*/
/*     <!-- Ionicons 2.0.0 -->*/
/*     <!--link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" /-->*/
/*     <!-- Theme style -->*/
/*     <link href="{{ asset('bundles/app/dist/css/AdminLTE.min.css')}}" rel="stylesheet" type="text/css" />*/
/*     <!-- AdminLTE Skins. Choose a skin from the css/skins*/
/*          folder instead of downloading all of them to reduce the load. -->*/
/*     <link href="{{ asset('bundles/app/dist/css/skins/_all-skins.min.css')}}" rel="stylesheet" type="text/css" />*/
/*     <!-- iCheck -->*/
/*     <link href="{{ asset('bundles/app/plugins/iCheck/flat/blue.css')}}" rel="stylesheet" type="text/css" />*/
/*     <!-- Morris chart -->*/
/*     <link href="{{ asset('bundles/app/plugins/morris/morris.css')}}" rel="stylesheet" type="text/css" />*/
/*     <!-- jvectormap -->*/
/*     <link href="{{ asset('bundles/app/plugins/jvectormap/jquery-jvectormap-1.2.2.css')}}" rel="stylesheet" type="text/css" />*/
/*     <!-- Date Picker -->*/
/*     <link href="{{ asset('bundles/app/plugins/datepicker/datepicker3.css')}}" rel="stylesheet" type="text/css" />*/
/*     <!-- Daterange picker -->*/
/*     <link href="{{ asset('bundles/app/plugins/daterangepicker/daterangepicker-bs3.css')}}" rel="stylesheet" type="text/css" />*/
/*     <!-- bootstrap wysihtml5 - text editor -->*/
/*     */
/*     <link href="{{ asset('bundles/app/css/main.css')}}" rel="stylesheet" type="text/css" />*/
/*     */
/*     {% block stylesheets %}{% endblock %}*/
/*     */
/*     <style>*/
/*         /* Start by setting display:none to make this hidden.*/
/*    Then we position it in relation to the viewport window*/
/*    with position:fixed. Width, height, top and left speak*/
/*    speak for themselves. Background we set to 80% white with*/
/*    our animation centered, and no-repeating *//* */
/*     .modal_show {*/
/*         display:    none;*/
/*         position:   fixed;*/
/*         z-index:    1000;*/
/*         top:        0;*/
/*         left:       0;*/
/*         height:     100%;*/
/*         width:      100%;*/
/*         background: rgba( 255, 255, 255, .8 ) */
/*                     url('http://i.stack.imgur.com/FhHRx.gif') */
/*                     50% 50% */
/*                     no-repeat;*/
/*     }*/
/* */
/*     /* When the body has the loading class, we turn*/
/*        the scrollbar off with overflow:hidden *//* */
/*     body.loading {*/
/*         overflow: hidden;   */
/*     }*/
/* */
/*     /* Anytime the body has the loading class, our*/
/*        modal element will be visible *//* */
/*     body.loading .modal_show {*/
/*         display: block;*/
/*     }*/
/*         */
/*     </style>*/
/*     <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->*/
/*     <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->*/
/*     <!--[if lt IE 9]>*/
/*         <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>*/
/*         <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>*/
/*     <![endif]-->*/
/*   </head>*/
/*   <body class="{% block bodyclass 'skin-blue sidebar-mini' %}">*/
/*     <!--[if lt IE 7]>*/
/*             <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>*/
/*     <![endif]-->*/
/*   {% block body %}{% endblock %}     */
/*       */
/*    <div class="modal_show"><!-- Place at bottom of page --></div>*/
/*  <!-- jQuery 2.1.4 -->*/
/*     <script src="{{ asset('bundles/app/plugins/jQuery/jQuery-2.1.4.min.js')}}" type="text/javascript"></script>*/
/*     <!-- jQuery UI 1.11.4 -->*/
/*     <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js" type="text/javascript"></script>*/
/*     <script type="text/javascript">*/
/*       $.widget.bridge('uibutton', $.ui.button);*/
/*     </script>*/
/*     */
/*     <script type="text/javascript" class="init"></script>  */
/*     */
/*      */
/*     */
/*     */
/*     <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->*/
/*     */
/*     */
/*     <!-- Bootstrap 3.3.2 JS -->*/
/*     <script src="{{ asset('bundles/app/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>*/
/*     */
/*     <!-- daterangepicker -->*/
/*     <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js" type="text/javascript"></script>*/
/*     <script src="{{ asset('bundles/app/plugins/daterangepicker/daterangepicker.js')}}" type="text/javascript"></script>*/
/*     <!-- datepicker -->*/
/*     <script src="{{ asset('bundles/app/plugins/datepicker/bootstrap-datepicker.js')}}" type="text/javascript"></script>*/
/*     <!-- Bootstrap WYSIHTML5 -->*/
/*     <script src="{{ asset('bundles/app/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}" type="text/javascript"></script>*/
/*     <!-- Slimscroll -->*/
/*     <script src="{{ asset('bundles/app/plugins/slimScroll/jquery.slimscroll.min.js')}}" type="text/javascript"></script>*/
/*     <!-- FastClick -->*/
/*     <script src="{{ asset('bundles/app/plugins/fastclick/fastclick.min.js')}}" type="text/javascript"></script>*/
/*     */
/*     */
/*     <script src="{{ asset('bundles/app/js/jquery.flashMessages.js')}}" type="text/javascript"></script>*/
/*     <!-- AdminLTE App -->*/
/*     <script src="{{ asset('bundles/app/dist/js/app.min.js')}}" type="text/javascript"></script>*/
/*     <!-- AdminLTE dashboard demo (This is only for demo purposes) -->*/
/*     <!-- AdminLTE for demo purposes -->*/
/*     <script src="{{ asset('bundles/app/dist/js/demo.js')}}" type="text/javascript"></script>*/
/*     <script>*/
/*         $('#flash-messages').flashNotification('init');*/
/*     </script> */
/*     */
/*     {% block javascripts %}{% endblock %}*/
/*     */
/*   </body>*/
/* </html>*/
/*    */
/*       */
