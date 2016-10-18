<?php

/* AppBundle:Default:includes/flashMessages.html.twig */
class __TwigTemplate_6b696413a59475f52c47402021a5ae448d11602dc57d06cdd069ed3e026aa375 extends Twig_Template
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
        $__internal_cd7c497d572e11db677b7d2c505365b738a99a902e661d7781439c50c8cb2b79 = $this->env->getExtension("native_profiler");
        $__internal_cd7c497d572e11db677b7d2c505365b738a99a902e661d7781439c50c8cb2b79->enter($__internal_cd7c497d572e11db677b7d2c505365b738a99a902e661d7781439c50c8cb2b79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default:includes/flashMessages.html.twig"));

        // line 1
        echo "<div id=\"flash-messages\">  
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "msg-success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 3
            echo "        <div class=\"alert alert-success\" style=\"width: 100%\">
            <button class=\"close\" data-dismiss=\"alert\">&times;</button>
            ";
            // line 5
            echo nl2br($this->env->getExtension('translator')->trans($context["flashMessage"]));
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "
    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "msg-error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 10
            echo "        <div class=\"alert alert-error\">
            <button class=\"close\" data-dismiss=\"alert\">&times;</button>
            ";
            // line 12
            echo nl2br($this->env->getExtension('translator')->trans($context["flashMessage"]));
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "
    ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "mng-info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 17
            echo "        <div class=\"alert alert-info\">
            <button class=\"close\" data-dismiss=\"alert\">&times;</button>
            ";
            // line 19
            echo nl2br($this->env->getExtension('translator')->trans($context["flashMessage"]));
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "</div>";
        
        $__internal_cd7c497d572e11db677b7d2c505365b738a99a902e661d7781439c50c8cb2b79->leave($__internal_cd7c497d572e11db677b7d2c505365b738a99a902e661d7781439c50c8cb2b79_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Default:includes/flashMessages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 22,  73 => 19,  69 => 17,  65 => 16,  62 => 15,  53 => 12,  49 => 10,  45 => 9,  42 => 8,  33 => 5,  29 => 3,  25 => 2,  22 => 1,);
    }
}
/* <div id="flash-messages">  */
/*     {% for flashMessage in app.session.flashbag.get('msg-success') %}*/
/*         <div class="alert alert-success" style="width: 100%">*/
/*             <button class="close" data-dismiss="alert">&times;</button>*/
/*             {{ flashMessage|trans|raw|nl2br }}*/
/*         </div>*/
/*     {% endfor %}*/
/* */
/*     {% for flashMessage in app.session.flashbag.get('msg-error') %}*/
/*         <div class="alert alert-error">*/
/*             <button class="close" data-dismiss="alert">&times;</button>*/
/*             {{ flashMessage|trans|raw|nl2br }}*/
/*         </div>*/
/*     {% endfor %}*/
/* */
/*     {% for flashMessage in app.session.flashbag.get('mng-info') %}*/
/*         <div class="alert alert-info">*/
/*             <button class="close" data-dismiss="alert">&times;</button>*/
/*             {{ flashMessage|trans|raw|nl2br }}*/
/*         </div>*/
/*     {% endfor %}*/
/* </div>*/
