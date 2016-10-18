<?php

/* AppBundle::layout_backend.html.twig */
class __TwigTemplate_8b1f43757cec62e57e9f2bf97dfe226546e566fbd6fe255db1f04e79cdeb39e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle::layout_backend.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'headercontent' => array($this, 'block_headercontent'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_17434bd52b1862ce90a1f79f5565ddf132ebed0913f21b17cc7a3fbecdc5d2aa = $this->env->getExtension("native_profiler");
        $__internal_17434bd52b1862ce90a1f79f5565ddf132ebed0913f21b17cc7a3fbecdc5d2aa->enter($__internal_17434bd52b1862ce90a1f79f5565ddf132ebed0913f21b17cc7a3fbecdc5d2aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::layout_backend.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17434bd52b1862ce90a1f79f5565ddf132ebed0913f21b17cc7a3fbecdc5d2aa->leave($__internal_17434bd52b1862ce90a1f79f5565ddf132ebed0913f21b17cc7a3fbecdc5d2aa_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_28e320a9cb5eee49fa2cbe7f5d1d5b3617dade24edb80bc286cb45fca5dca70e = $this->env->getExtension("native_profiler");
        $__internal_28e320a9cb5eee49fa2cbe7f5d1d5b3617dade24edb80bc286cb45fca5dca70e->enter($__internal_28e320a9cb5eee49fa2cbe7f5d1d5b3617dade24edb80bc286cb45fca5dca70e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"wrapper\">

      <!-- ENCABEZADO -->
      ";
        // line 9
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("UsersBundle:Admin:includeHead"));
        echo "
      <!-- FIN ENCABEZADO -->
        
        
       <!-- Left side column. contains the logo and sidebar -->          
       ";
        // line 14
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("UsersBundle:Admin:includeAsideLeft"));
        echo "
       <!-- /.sidebar -->
        
      <!-- Content Wrapper. Contains page content -->
      <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        
        <section class=\"content-header\">
          <h1>
            ";
        // line 23
        $this->displayBlock('headercontent', $context, $blocks);
        echo "              
          </h1>
          <ol class=\"breadcrumb\">       
            <li class=\"active\">";
        // line 26
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d/m/Y H:i:s A"), "html", null, true);
        echo "</li>
          </ol>
        </section>

        <!-- Main content -->
        <div class=\"content\">
            ";
        // line 32
        $this->displayBlock('content', $context, $blocks);
        // line 33
        echo "        </div>
      <div class=\"container\">
        ";
        // line 35
        echo twig_include($this->env, $context, "AppBundle:Default:includes/flashMessages.html.twig");
        echo " 
      </div>
      </div><!-- /.content-wrapper -->
      
      
      <footer class=\"main-footer\">
        
        <strong>Copyright &copy; ";
        // line 42
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now ", "Y"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_modify_filter($this->env, "now", "+1 year"), "Y"), "html", null, true);
        echo " <a href=\"";
        echo $this->env->getExtension('routing')->getPath("app_homepage");
        echo "\">Sistema Integral de Reservas Complejo Turistico   </a>.</strong> Todos los derechos reservados.
      </footer>

      
      
    
           <!--immediately after the control sidebar -->
      <div class=\"control-sidebar-bg\"></div>
    </div><!-- ./wrapper -->
";
        
        $__internal_28e320a9cb5eee49fa2cbe7f5d1d5b3617dade24edb80bc286cb45fca5dca70e->leave($__internal_28e320a9cb5eee49fa2cbe7f5d1d5b3617dade24edb80bc286cb45fca5dca70e_prof);

    }

    // line 23
    public function block_headercontent($context, array $blocks = array())
    {
        $__internal_148d768a9797e2014a1a935bea5bd38a126a7211313c21293a53bcc271598095 = $this->env->getExtension("native_profiler");
        $__internal_148d768a9797e2014a1a935bea5bd38a126a7211313c21293a53bcc271598095->enter($__internal_148d768a9797e2014a1a935bea5bd38a126a7211313c21293a53bcc271598095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headercontent"));

        
        $__internal_148d768a9797e2014a1a935bea5bd38a126a7211313c21293a53bcc271598095->leave($__internal_148d768a9797e2014a1a935bea5bd38a126a7211313c21293a53bcc271598095_prof);

    }

    // line 32
    public function block_content($context, array $blocks = array())
    {
        $__internal_28a1d2d5e1ca3e77fb78db96a54b70bc4ab03d42cc589828afb630a1c6d75376 = $this->env->getExtension("native_profiler");
        $__internal_28a1d2d5e1ca3e77fb78db96a54b70bc4ab03d42cc589828afb630a1c6d75376->enter($__internal_28a1d2d5e1ca3e77fb78db96a54b70bc4ab03d42cc589828afb630a1c6d75376_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_28a1d2d5e1ca3e77fb78db96a54b70bc4ab03d42cc589828afb630a1c6d75376->leave($__internal_28a1d2d5e1ca3e77fb78db96a54b70bc4ab03d42cc589828afb630a1c6d75376_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle::layout_backend.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 32,  119 => 23,  98 => 42,  88 => 35,  84 => 33,  82 => 32,  73 => 26,  67 => 23,  55 => 14,  47 => 9,  42 => 6,  36 => 5,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* */
/* */
/* {% block body %}*/
/*     <div class="wrapper">*/
/* */
/*       <!-- ENCABEZADO -->*/
/*       {{render(controller('UsersBundle:Admin:includeHead')) }}*/
/*       <!-- FIN ENCABEZADO -->*/
/*         */
/*         */
/*        <!-- Left side column. contains the logo and sidebar -->          */
/*        {{render(controller('UsersBundle:Admin:includeAsideLeft'))}}*/
/*        <!-- /.sidebar -->*/
/*         */
/*       <!-- Content Wrapper. Contains page content -->*/
/*       <div class="content-wrapper">*/
/*         <!-- Content Header (Page header) -->*/
/*         */
/*         <section class="content-header">*/
/*           <h1>*/
/*             {% block headercontent %}{% endblock %}              */
/*           </h1>*/
/*           <ol class="breadcrumb">       */
/*             <li class="active">{{ "now" | date('d/m/Y H:i:s A') }}</li>*/
/*           </ol>*/
/*         </section>*/
/* */
/*         <!-- Main content -->*/
/*         <div class="content">*/
/*             {% block content %}{% endblock %}*/
/*         </div>*/
/*       <div class="container">*/
/*         {{ include ('AppBundle:Default:includes/flashMessages.html.twig')}} */
/*       </div>*/
/*       </div><!-- /.content-wrapper -->*/
/*       */
/*       */
/*       <footer class="main-footer">*/
/*         */
/*         <strong>Copyright &copy; {{ "now "   | date('Y')}} - {{ "now"   |date_modify("+1 year")| date('Y')}} <a href="{{path('app_homepage')}}">Sistema Integral de Reservas Complejo Turistico   </a>.</strong> Todos los derechos reservados.*/
/*       </footer>*/
/* */
/*       */
/*       */
/*     */
/*            <!--immediately after the control sidebar -->*/
/*       <div class="control-sidebar-bg"></div>*/
/*     </div><!-- ./wrapper -->*/
/* {% endblock %}*/
