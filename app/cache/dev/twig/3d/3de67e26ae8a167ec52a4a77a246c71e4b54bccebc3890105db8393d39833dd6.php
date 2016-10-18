<?php

/* AppBundle:Default:includes/head.html.twig */
class __TwigTemplate_1880c1418dc7aeb214f3c4b030265bbdb2865b006aabb208d6dabb12542a4461 extends Twig_Template
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
        $__internal_28ea42e2d3796e8e9dda319259c122b3af5b7c1ee3455ae52b5428b87c3b5073 = $this->env->getExtension("native_profiler");
        $__internal_28ea42e2d3796e8e9dda319259c122b3af5b7c1ee3455ae52b5428b87c3b5073->enter($__internal_28ea42e2d3796e8e9dda319259c122b3af5b7c1ee3455ae52b5428b87c3b5073_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default:includes/head.html.twig"));

        // line 1
        echo "
<header class=\"main-header\">
        <!-- Logo -->
        <a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("app_homepage");
        echo "\" class=\"logo\">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class=\"logo-mini\"><b>P</b>U</span>
          <!-- logo for regular state and mobile devices -->
          <span class=\"logo-lg\" style=\"z-index: 1000;\">
              ";
        // line 10
        echo "              <b>Sistema Base</b>
          </span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class=\"navbar navbar-static-top\" role=\"navigation\">
          <!-- Sidebar toggle button-->
          <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
            <span class=\"sr-only\">Toggle navigation</span>            
          </a>
          <span class=\"\">
              ";
        // line 21
        echo "          </span>
          <div class=\"navbar-custom-menu\">
            <ul class=\"nav navbar-nav\">
                
           
              <!-- User Account: style can be found in dropdown.less -->
              <li class=\"dropdown user user-menu\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                  ";
        // line 29
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "imagen", array()) == null)) {
            echo "  
                  <img src=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/images/np.jpg"), "html", null, true);
            echo "\" class=\"user-image\" alt=\"User Image\" />
                  ";
        } else {
            // line 32
            echo "                  <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("uploads/profiles/images/" . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "imagen", array()))), "html", null, true);
            echo "\" class=\"user-image\" alt=\"User Image\" />
                  ";
        }
        // line 34
        echo "                  <span class=\"hidden-xs\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "html", null, true);
        echo "</span>
                </a>
                <ul class=\"dropdown-menu\">
                  <!-- User image -->
                  <li class=\"user-header\">
                    ";
        // line 39
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "imagen", array()) == null)) {
            echo "  
                    <img src=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/images/np.jpg"), "html", null, true);
            echo "\" class=\"img-circle\" alt=\"User Image\" />
                    ";
        } else {
            // line 42
            echo "                    <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("uploads/profiles/images/" . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "imagen", array()))), "html", null, true);
            echo "\" class=\"img-circle\" alt=\"User Image\" />
                    ";
        }
        // line 44
        echo "                    <p>
                      ";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "html", null, true);
        echo " ";
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            echo " - Administrador ";
        }
        echo " 
                      <small>";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('app_extension')->createdAgoEsp((isset($context["datenow"]) ? $context["datenow"] : $this->getContext($context, "datenow"))), "html", null, true);
        echo "</small>
                    </p>
                  </li>                 
                  <!-- Menu Footer-->
                  <li class=\"user-footer\">
                    <div class=\"pull-left\">
                      <a href=\"\" class=\"btn btn-default btn-flat\">Perfil</a>
                    </div>
                    <div class=\"pull-right\">
                      <a href=\"";
        // line 55
        echo $this->env->getExtension('routing')->getPath("app_admin_logout");
        echo "\" class=\"btn btn-default btn-flat\">Cerrar Session</a>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
              
            </ul>
          </div>
        </nav>
      </header>";
        
        $__internal_28ea42e2d3796e8e9dda319259c122b3af5b7c1ee3455ae52b5428b87c3b5073->leave($__internal_28ea42e2d3796e8e9dda319259c122b3af5b7c1ee3455ae52b5428b87c3b5073_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Default:includes/head.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 55,  107 => 46,  99 => 45,  96 => 44,  90 => 42,  85 => 40,  81 => 39,  72 => 34,  66 => 32,  61 => 30,  57 => 29,  47 => 21,  35 => 10,  27 => 4,  22 => 1,);
    }
}
/* */
/* <header class="main-header">*/
/*         <!-- Logo -->*/
/*         <a href="{{path('app_homepage')}}" class="logo">*/
/*           <!-- mini logo for sidebar mini 50x50 pixels -->*/
/*           <span class="logo-mini"><b>P</b>U</span>*/
/*           <!-- logo for regular state and mobile devices -->*/
/*           <span class="logo-lg" style="z-index: 1000;">*/
/*               {#<img class="imaglogo" src="{{asset('bundles/app/images/head.png')}}" />#}*/
/*               <b>Sistema Base</b>*/
/*           </span>*/
/*         </a>*/
/*         <!-- Header Navbar: style can be found in header.less -->*/
/*         <nav class="navbar navbar-static-top" role="navigation">*/
/*           <!-- Sidebar toggle button-->*/
/*           <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">*/
/*             <span class="sr-only">Toggle navigation</span>            */
/*           </a>*/
/*           <span class="">*/
/*               {#<img class="imaghead" src="{{asset('bundles/app/images/textohead.png')}}" />#}*/
/*           </span>*/
/*           <div class="navbar-custom-menu">*/
/*             <ul class="nav navbar-nav">*/
/*                 */
/*            */
/*               <!-- User Account: style can be found in dropdown.less -->*/
/*               <li class="dropdown user user-menu">*/
/*                 <a href="#" class="dropdown-toggle" data-toggle="dropdown">*/
/*                   {% if app.user.imagen == NULL %}  */
/*                   <img src="{{ asset('bundles/app/images/np.jpg')}}" class="user-image" alt="User Image" />*/
/*                   {% else %}*/
/*                   <img src="{{asset('uploads/profiles/images/'~ app.user.imagen)}}" class="user-image" alt="User Image" />*/
/*                   {% endif %}*/
/*                   <span class="hidden-xs">{{ app.user }}</span>*/
/*                 </a>*/
/*                 <ul class="dropdown-menu">*/
/*                   <!-- User image -->*/
/*                   <li class="user-header">*/
/*                     {% if app.user.imagen == NULL %}  */
/*                     <img src="{{ asset('bundles/app/images/np.jpg')}}" class="img-circle" alt="User Image" />*/
/*                     {% else %}*/
/*                     <img src="{{asset('uploads/profiles/images/'~ app.user.imagen)}}" class="img-circle" alt="User Image" />*/
/*                     {% endif %}*/
/*                     <p>*/
/*                       {{ app.user }} {% if is_granted('ROLE_ADMIN') %} - Administrador {% endif  %} */
/*                       <small>{{datenow | created_ago_esp }}</small>*/
/*                     </p>*/
/*                   </li>                 */
/*                   <!-- Menu Footer-->*/
/*                   <li class="user-footer">*/
/*                     <div class="pull-left">*/
/*                       <a href="" class="btn btn-default btn-flat">Perfil</a>*/
/*                     </div>*/
/*                     <div class="pull-right">*/
/*                       <a href="{{ path('app_admin_logout')}}" class="btn btn-default btn-flat">Cerrar Session</a>*/
/*                     </div>*/
/*                   </li>*/
/*                 </ul>*/
/*               </li>*/
/*               <!-- Control Sidebar Toggle Button -->*/
/*               */
/*             </ul>*/
/*           </div>*/
/*         </nav>*/
/*       </header>*/
