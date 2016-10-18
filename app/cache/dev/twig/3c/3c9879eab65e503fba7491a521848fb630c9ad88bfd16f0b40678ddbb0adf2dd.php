<?php

/* AppBundle:Default:login/index.html.twig */
class __TwigTemplate_61960d320922d6dffe0ac759427180e534bf8303b6e2e1925a481d1da24a3820 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Default:login/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'bodyclass' => array($this, 'block_bodyclass'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_55119996b2b79ce7ce40eca810af31dea1dec65b05671b0f3dde934c3cf860c7 = $this->env->getExtension("native_profiler");
        $__internal_55119996b2b79ce7ce40eca810af31dea1dec65b05671b0f3dde934c3cf860c7->enter($__internal_55119996b2b79ce7ce40eca810af31dea1dec65b05671b0f3dde934c3cf860c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default:login/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_55119996b2b79ce7ce40eca810af31dea1dec65b05671b0f3dde934c3cf860c7->leave($__internal_55119996b2b79ce7ce40eca810af31dea1dec65b05671b0f3dde934c3cf860c7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0b4a063d9f9744604ae89c5d32dc04ab83c242aca2049560e356944826d8679b = $this->env->getExtension("native_profiler");
        $__internal_0b4a063d9f9744604ae89c5d32dc04ab83c242aca2049560e356944826d8679b->enter($__internal_0b4a063d9f9744604ae89c5d32dc04ab83c242aca2049560e356944826d8679b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Login";
        
        $__internal_0b4a063d9f9744604ae89c5d32dc04ab83c242aca2049560e356944826d8679b->leave($__internal_0b4a063d9f9744604ae89c5d32dc04ab83c242aca2049560e356944826d8679b_prof);

    }

    // line 5
    public function block_bodyclass($context, array $blocks = array())
    {
        $__internal_87a32e77b8713efe252f0eb89a7e42faba68f04b9570fc818f8477c57a2034d3 = $this->env->getExtension("native_profiler");
        $__internal_87a32e77b8713efe252f0eb89a7e42faba68f04b9570fc818f8477c57a2034d3->enter($__internal_87a32e77b8713efe252f0eb89a7e42faba68f04b9570fc818f8477c57a2034d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyclass"));

        echo "login-page";
        
        $__internal_87a32e77b8713efe252f0eb89a7e42faba68f04b9570fc818f8477c57a2034d3->leave($__internal_87a32e77b8713efe252f0eb89a7e42faba68f04b9570fc818f8477c57a2034d3_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_c4a541a89a1f3a80db26bc03c4c4e6b10c552bff49b7ab14938c760e4e314c59 = $this->env->getExtension("native_profiler");
        $__internal_c4a541a89a1f3a80db26bc03c4c4e6b10c552bff49b7ab14938c760e4e314c59->enter($__internal_c4a541a89a1f3a80db26bc03c4c4e6b10c552bff49b7ab14938c760e4e314c59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
<div class=\"login-box\" style=\"margin: middle auto;\">
    
      <div class=\"login-logo\">
        <a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("app_homepage");
        echo "\"><b>Sistema Estandar </b> </a>
      </div><!-- /.login-logo -->
      <div class=\"login-box-body\">
        <p class=\"login-box-msg\">Inicia session para seguir conectado</p>
        <form action=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("app_admin_login_check");
        echo "\" method=\"post\">
          <div class=\"form-group has-feedback\">
              <input type=\"email\" class=\"form-control\" placeholder=\"Email\" name=\"_username\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, ((array_key_exists("last_username", $context)) ? (_twig_default_filter((isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "")) : ("")), "html", null, true);
        echo "\"
/>
              <span class=\"fa fa-envelope form-control-feedback\" style=\"margin-top: 8px;\"></span>
          </div>
          <div class=\"form-group has-feedback\">
                <input type=\"password\" class=\"form-control\" placeholder=\"Password\" name=\"_password\"/>
                <span class=\"fa fa-lock form-control-feedback\" style=\"margin-top: 8px;\"></span>
          </div>
          <div class=\"row\">
            <div class=\"col-xs-8\">
              <div class=\"checkbox icheck\">
                
              </div>
            </div><!-- /.col -->
            <div class=\"col-xs-4\">
              <button type=\"submit\" class=\"btn btn-primary btn-block btn-flat\">Ingresar</button>
            </div><!-- /.col -->
          </div>
        </form>        

        <a href=\"";
        // line 38
        echo "\">He olvidado mi password!</a><br>       

      </div><!-- /.login-box-body -->
      ";
        // line 41
        if (((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")) != null)) {
            // line 42
            echo "         <div class=\"alert alert-error\">
            <strong>Error!</strong> Usuario o Contraseña incorrecto!
         </div>    
       ";
        }
        // line 46
        echo "    </div><!-- /.login-box -->


<section class=\"container-full top-space\">
    <div id=\"map\"></div>
</section>
";
        
        $__internal_c4a541a89a1f3a80db26bc03c4c4e6b10c552bff49b7ab14938c760e4e314c59->leave($__internal_c4a541a89a1f3a80db26bc03c4c4e6b10c552bff49b7ab14938c760e4e314c59_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Default:login/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 46,  114 => 42,  112 => 41,  107 => 38,  84 => 18,  79 => 16,  72 => 12,  66 => 8,  60 => 7,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title 'Login' %}*/
/* */
/* {% block bodyclass 'login-page' %}*/
/* */
/* {% block body %}*/
/* */
/* <div class="login-box" style="margin: middle auto;">*/
/*     */
/*       <div class="login-logo">*/
/*         <a href="{{path('app_homepage')}}"><b>Sistema Estandar </b> </a>*/
/*       </div><!-- /.login-logo -->*/
/*       <div class="login-box-body">*/
/*         <p class="login-box-msg">Inicia session para seguir conectado</p>*/
/*         <form action="{{ path('app_admin_login_check')}}" method="post">*/
/*           <div class="form-group has-feedback">*/
/*               <input type="email" class="form-control" placeholder="Email" name="_username" value="{{ last_username | default('') }}"*/
/* />*/
/*               <span class="fa fa-envelope form-control-feedback" style="margin-top: 8px;"></span>*/
/*           </div>*/
/*           <div class="form-group has-feedback">*/
/*                 <input type="password" class="form-control" placeholder="Password" name="_password"/>*/
/*                 <span class="fa fa-lock form-control-feedback" style="margin-top: 8px;"></span>*/
/*           </div>*/
/*           <div class="row">*/
/*             <div class="col-xs-8">*/
/*               <div class="checkbox icheck">*/
/*                 */
/*               </div>*/
/*             </div><!-- /.col -->*/
/*             <div class="col-xs-4">*/
/*               <button type="submit" class="btn btn-primary btn-block btn-flat">Ingresar</button>*/
/*             </div><!-- /.col -->*/
/*           </div>*/
/*         </form>        */
/* */
/*         <a href="{#{path('app_record_my_password')}#}">He olvidado mi password!</a><br>       */
/* */
/*       </div><!-- /.login-box-body -->*/
/*       {% if error != null %}*/
/*          <div class="alert alert-error">*/
/*             <strong>Error!</strong> Usuario o Contraseña incorrecto!*/
/*          </div>    */
/*        {% endif %}*/
/*     </div><!-- /.login-box -->*/
/* */
/* */
/* <section class="container-full top-space">*/
/*     <div id="map"></div>*/
/* </section>*/
/* {% endblock %}*/
/*  */
