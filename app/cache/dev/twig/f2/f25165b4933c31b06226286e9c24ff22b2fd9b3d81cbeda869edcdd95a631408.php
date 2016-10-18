<?php

/* AppBundle:Default:includes/aside_left.html.twig */
class __TwigTemplate_d71646e54b2e32618a717550d556f8edd7e71f3be9aeab18cb63d775be477435 extends Twig_Template
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
        $__internal_b064b053f09d39f390d408c75be8ae5152edc157787d3590c4e37ff88d23cdf8 = $this->env->getExtension("native_profiler");
        $__internal_b064b053f09d39f390d408c75be8ae5152edc157787d3590c4e37ff88d23cdf8->enter($__internal_b064b053f09d39f390d408c75be8ae5152edc157787d3590c4e37ff88d23cdf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default:includes/aside_left.html.twig"));

        // line 1
        echo "<aside class=\"main-sidebar\">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class=\"sidebar\">
          <!-- Sidebar user panel -->
          <div class=\"user-panel\">
            <div class=\"pull-left image\">
              ";
        // line 7
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "imagen", array()) == null)) {
            // line 8
            echo "              <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/images/np.jpg"), "html", null, true);
            echo "\" class=\"img-circle\" alt=\"User Image\" />
              ";
        } else {
            // line 10
            echo "              <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("uploads/profiles/images/" . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "imagen", array()))), "html", null, true);
            echo "\" class=\"img-circle\" alt=\"User Image\" />
              ";
        }
        // line 12
        echo "            </div>
            <div class=\"pull-left info\">
              <p>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "html", null, true);
        echo "</p>
              <a href=\"#\"><i class=\"fa fa-circle text-success\"></i> Online</a>
            </div>
          </div>
          <!-- search form -->
          ";
        // line 28
        echo "          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class=\"sidebar-menu\">
            <li class=\"treeview\">
              <a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("app_homepage");
        echo "\">
                <i class=\"fa fa-home text-aqua\"></i> 
                <span>Início</span>                 
              </a>             
            </li>
            <li class=\"treeview\">
              <a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("app_homepage");
        echo "\">
                <i class=\"fa fa-pie-chart\"></i>
                <span>Mensajes enviados</span>
                <i class=\"fa fa-angle-left pull-right\"></i>
              </a>
              <ul class=\"treeview-menu\" style=\"display: none;\">
                <li><a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("app_admin_mensajes");
        echo "\"><i class=\"fa fa-plus\"></i> Ver mensajes</a></li>           
                
              </ul>
            </li>
          


            
            <li class=\"header\">Reportes</li>
        
            
            <li class=\"treeview active\">
              <a href=\"";
        // line 56
        echo $this->env->getExtension('routing')->getPath("app_homepage");
        echo "\">
                <i class=\"fa fa-book text-aqua\"></i>
                <span>Reporte 1</span>                
              </a>
            </li>
            
                        
        </ul>
        </section>
 </aside>
";
        
        $__internal_b064b053f09d39f390d408c75be8ae5152edc157787d3590c4e37ff88d23cdf8->leave($__internal_b064b053f09d39f390d408c75be8ae5152edc157787d3590c4e37ff88d23cdf8_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Default:includes/aside_left.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 56,  80 => 44,  71 => 38,  62 => 32,  56 => 28,  48 => 14,  44 => 12,  38 => 10,  32 => 8,  30 => 7,  22 => 1,);
    }
}
/* <aside class="main-sidebar">*/
/*         <!-- sidebar: style can be found in sidebar.less -->*/
/*         <section class="sidebar">*/
/*           <!-- Sidebar user panel -->*/
/*           <div class="user-panel">*/
/*             <div class="pull-left image">*/
/*               {% if app.user.imagen == NULL %}*/
/*               <img src="{{ asset('bundles/app/images/np.jpg')}}" class="img-circle" alt="User Image" />*/
/*               {% else%}*/
/*               <img src="{{asset('uploads/profiles/images/'~ app.user.imagen)}}" class="img-circle" alt="User Image" />*/
/*               {% endif %}*/
/*             </div>*/
/*             <div class="pull-left info">*/
/*               <p>{{ app.user}}</p>*/
/*               <a href="#"><i class="fa fa-circle text-success"></i> Online</a>*/
/*             </div>*/
/*           </div>*/
/*           <!-- search form -->*/
/*           {#<form action="" method="get" class="sidebar-form">*/
/*             <div class="input-group">*/
/*                 */
/*                 <input type="text" name="q" class="form-control" placeholder="Buscar..." />*/
/*                 <span class="input-group-btn">*/
/*                   <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>*/
/*                 </span>*/
/*             </div>*/
/*           </form>#}*/
/*           <!-- /.search form -->*/
/*           <!-- sidebar menu: : style can be found in sidebar.less -->*/
/*           <ul class="sidebar-menu">*/
/*             <li class="treeview">*/
/*               <a href="{{ path('app_homepage')}}">*/
/*                 <i class="fa fa-home text-aqua"></i> */
/*                 <span>Início</span>                 */
/*               </a>             */
/*             </li>*/
/*             <li class="treeview">*/
/*               <a href="{{ path('app_homepage')}}">*/
/*                 <i class="fa fa-pie-chart"></i>*/
/*                 <span>Mensajes enviados</span>*/
/*                 <i class="fa fa-angle-left pull-right"></i>*/
/*               </a>*/
/*               <ul class="treeview-menu" style="display: none;">*/
/*                 <li><a href="{{ path('app_admin_mensajes')}}"><i class="fa fa-plus"></i> Ver mensajes</a></li>           */
/*                 */
/*               </ul>*/
/*             </li>*/
/*           */
/* */
/* */
/*             */
/*             <li class="header">Reportes</li>*/
/*         */
/*             */
/*             <li class="treeview active">*/
/*               <a href="{{ path('app_homepage')}}">*/
/*                 <i class="fa fa-book text-aqua"></i>*/
/*                 <span>Reporte 1</span>                */
/*               </a>*/
/*             </li>*/
/*             */
/*                         */
/*         </ul>*/
/*         </section>*/
/*  </aside>*/
/* */
