<?php

/* AppBundle:Default:index.html.twig */
class __TwigTemplate_7546b6204e4e8a3d9178cd50aa6b213a5cccbee0f515d19506d81b4980b0ceab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout_backend.html.twig", "AppBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'headercontent' => array($this, 'block_headercontent'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::layout_backend.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8b4c346133ae503819e3a13d9c33a3ca7e7d5cd2d9de62a314a0fcfeaf558d91 = $this->env->getExtension("native_profiler");
        $__internal_8b4c346133ae503819e3a13d9c33a3ca7e7d5cd2d9de62a314a0fcfeaf558d91->enter($__internal_8b4c346133ae503819e3a13d9c33a3ca7e7d5cd2d9de62a314a0fcfeaf558d91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b4c346133ae503819e3a13d9c33a3ca7e7d5cd2d9de62a314a0fcfeaf558d91->leave($__internal_8b4c346133ae503819e3a13d9c33a3ca7e7d5cd2d9de62a314a0fcfeaf558d91_prof);

    }

    // line 3
    public function block_headercontent($context, array $blocks = array())
    {
        $__internal_36449c01153f8d0c5b175c6d8f63733edb557a99fbb509f27a845df0d7a799f5 = $this->env->getExtension("native_profiler");
        $__internal_36449c01153f8d0c5b175c6d8f63733edb557a99fbb509f27a845df0d7a799f5->enter($__internal_36449c01153f8d0c5b175c6d8f63733edb557a99fbb509f27a845df0d7a799f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headercontent"));

        // line 4
        echo "    <br>
";
        
        $__internal_36449c01153f8d0c5b175c6d8f63733edb557a99fbb509f27a845df0d7a799f5->leave($__internal_36449c01153f8d0c5b175c6d8f63733edb557a99fbb509f27a845df0d7a799f5_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_9260c83d5611547d44b6b43901f859587381af8ecfcebfe0052910658e32931e = $this->env->getExtension("native_profiler");
        $__internal_9260c83d5611547d44b6b43901f859587381af8ecfcebfe0052910658e32931e->enter($__internal_9260c83d5611547d44b6b43901f859587381af8ecfcebfe0052910658e32931e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        echo "    
    
    
    
    <div class=\"box\">
        <div class=\"box-header\">
        
    
        </div>
       
        <div class=\"box-body\">            
       
         
       
            <div id=\"background\">
                
                <div class=\"row\">    
                        <div class=\"col-lg-12 col-md-12 col-xs-12\">
                     
\t\t\t<div id=\"Rectangle\"><img src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/Rectangle.png"), "html", null, true);
        echo "\"></div>
\t\t\t<div id=\"Rectangle_0\"><img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/Rectangle_0.png"), "html", null, true);
        echo "\"></div>
\t\t\t<div id=\"Community\"><img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/Community.png"), "html", null, true);
        echo "\"></div>
\t\t\t<div id=\"fromtheBLOG\"><img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/fromtheBLOG.png"), "html", null, true);
        echo "\"></div>
\t\t\t<div id=\"Company\"><img src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/Company.png"), "html", null, true);
        echo "\"></div>
\t\t\t<div id=\"Path\"><img src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/Path.png"), "html", null, true);
        echo "\"></div>
\t\t\t<div id=\"CompositePath\"><img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/CompositePath.png"), "html", null, true);
        echo "\"></div>
\t\t\t<div id=\"Path_0\"><img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/Path_0.png"), "html", null, true);
        echo "\"></div>
\t\t\t<div id=\"CompositePath_0\"><img src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/CompositePath_0.png"), "html", null, true);
        echo "\"></div>
\t\t\t<div id=\"MODUS\"><img src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/MODUS.png"), "html", null, true);
        echo "\"></div>
\t\t\t<div id=\"Loremipsumdolorsi\"><img src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/Loremipsumdolorsi.png"), "html", null, true);
        echo "\"></div>
\t\t\t<div id=\"Phone\"><img src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/Phone.png"), "html", null, true);
        echo "\"></div>
\t\t\t<div id=\"email\"><img src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/email.png"), "html", null, true);
        echo "\"></div>
\t\t\t<div id=\"layer_18225695896\"><img src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/layer_18225695896.png"), "html", null, true);
        echo "\"></div>
\t\t\t<div id=\"infomoduversus\"><img src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/infomoduversus.png"), "html", null, true);
        echo "\"></div>
\t\t\t<div id=\"BlogForumSupportN\"><img src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/BlogForumSupportN.png"), "html", null, true);
        echo "\"></div>
\t\t\t<div id=\"AboutFAQContactTe\"><img src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/AboutFAQContactTe.png"), "html", null, true);
        echo "\"></div>
\t\t\t<div id=\"layer_19\"><img src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/layer_19.png"), "html", null, true);
        echo "\"></div>
\t\t\t<div id=\"layer_20\"><img src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/layer_20.png"), "html", null, true);
        echo "\"></div>
\t\t\t<div id=\"layer_21\"><img src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/layer_21.png"), "html", null, true);
        echo "\"></div>
\t\t\t<div id=\"layer_22\"><img src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/layer_22.png"), "html", null, true);
        echo "\"></div>
\t\t\t<div id=\"layer_23\"><img src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/layer_23.png"), "html", null, true);
        echo "\"></div>
\t\t\t<div id=\"layer_24\"><img src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/layer_24.png"), "html", null, true);
        echo "\"></div>
\t\t\t<div id=\"layer_25\"><img src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/layer_25.png"), "html", null, true);
        echo "\"></div>
\t\t\t<div id=\"layer_26\"><img src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/layer_26.png"), "html", null, true);
        echo "\"></div>
\t\t\t<div id=\"layer_27\"><img src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/layer_27.png"), "html", null, true);
        echo "\"></div>
\t\t\t<div id=\"layer_28\"><img src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/layer_28.png"), "html", null, true);
        echo "\"></div>
\t\t\t<div id=\"versus\"><img src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/versus.png"), "html", null, true);
        echo "\"></div>
\t\t\t<div id=\"2013ModusVersus\"><img src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/2013ModusVersus.png"), "html", null, true);
        echo "\"></div>
\t\t\t<div id=\"Path_1\"><img src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/Path_1.png"), "html", null, true);
        echo "\"></div>
\t\t\t<div id=\"Rectangle_1\"><img src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/Rectangle_1.png"), "html", null, true);
        echo "\"></div>
\t\t\t<div id=\"Rectangle_2\"><img src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/Rectangle_2.png"), "html", null, true);
        echo "\"></div>
\t\t\t<div id=\"Loremipsumdolorsi_0\"><img src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/Loremipsumdolorsi_0.png"), "html", null, true);
        echo "\"></div>
\t\t\t<div id=\"Loremipsumdolorsi_1\"><img src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/Loremipsumdolorsi_1.png"), "html", null, true);
        echo "\"></div>
\t\t\t<div id=\"26May2013\"><img src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/26May2013.png"), "html", null, true);
        echo "\"></div>
\t\t\t<div id=\"26May2013_0\"><img src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/26May2013_0.png"), "html", null, true);
        echo "\"></div>
\t\t\t<div id=\"layer_38\"><img src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/layer_38.png"), "html", null, true);
        echo "\"></div>
\t\t\t<div id=\"layer_39\"><img src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/layer_39.png"), "html", null, true);
        echo "\"></div>
                
                       </div> 
                 </div>       
                  
                        
\t\t\t<div id=\"PORTFOLIOcopy\"><img src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/PORTFOLIOcopy.png"), "html", null, true);
        echo "\">
\t\t</div>
                      
                           ";
        // line 72
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
     
                    
              <div id=\"cuerpo\">
                     <div class=\"row\">    
                        <div class=\"col-lg-12 col-md-12 col-xs-12\">
                            <div class=\"form-group\">
                                 ";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'label', array("label" => "Name"));
        echo "
                                 ";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                 ";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'errors');
        echo "
                            </div>
                        </div>
                     </div>
                    <div class=\"row\">
                        <div class=\"col-lg-12 col-md-12 col-xs-12\">
                            <div class=\"form-group\">
                                ";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "e_mail", array()), 'label', array("label" => "Email"));
        echo "
                                ";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "e_mail", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                ";
        // line 90
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "e_mail", array()), 'errors');
        echo "
                            </div>
                        </div>
                     </div>
                    
                    <div class=\"row\">        
                <div class=\"col-lg-12 col-md-12 col-xs-12\">
                    <div class=\"form-group\">
                        ";
        // line 98
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "website", array()), 'label', array("label" => "Web Site"));
        echo "
                        ";
        // line 99
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "website", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        ";
        // line 100
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "website", array()), 'errors');
        echo "
                    </div>
                </div>
                </div>
                    
                    
            <div class=\"row\">
                <div class=\"col-lg-12 col-md-12 col-xs-12\">
                    <div class=\"form-group\">
                        ";
        // line 109
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mensaje", array()), 'label', array("label" => "Message"));
        echo "
                        ";
        // line 110
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mensaje", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        ";
        // line 111
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mensaje", array()), 'errors');
        echo "
                    </div>
                </div>
            </div>                    
                    
            
                    
            ";
        // line 118
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
            ";
        // line 119
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
            ";
        // line 120
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                      
                      
           </div>
\t\t\t<div id=\"layer_52\"><img src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/layer_52.png"), "html", null, true);
        echo "\"></div>
\t\t\t<div id=\"layer_53\"><img src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/layer_53.png"), "html", null, true);
        echo "\"></div>




\t\t\t<div id=\"Utinterdumtristiquee\">Barquisimeto. Edo Lara. Venezuela
                        
                        </div>
\t\t\t<div id=\"layer_11156985698\"><img src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/layer_11156985698.png"), "html", null, true);
        echo "\"></div>
\t\t\t<div id=\"layer_56\"><img src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/layer_56.png"), "html", null, true);
        echo "\"></div>
\t\t\t<div id=\"modusversuscom\"><img src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/modusversuscom.png"), "html", null, true);
        echo "\"></div>
\t\t\t<div id=\"Rectangle_3\"><img src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/Rectangle_3.png"), "html", null, true);
        echo "\"></div>
\t\t\t<div id=\"Uteleifendliberos\"><img src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/Uteleifendliberos.png"), "html", null, true);
        echo "\"></div>
\t\t\t<div id=\"Path_4\"><img src=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/Path_4.png"), "html", null, true);
        echo "\"></div>
\t\t\t<div id=\"Path_5\"><img src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/Path_5.png"), "html", null, true);
        echo "\"></div>
\t\t\t
                        
                        <div id=\"map\">
                            
                            <div id=\"map\" style=\"width:100%;height:500px\"></div>

                        <script>
                            function myMap() {
                            var mapCanvas = document.getElementById(\"map\");
                            var mapOptions = {
                            center: new google.maps.LatLng(51.5, -0.2),
                            zoom: 10
                                            }
                            var map = new google.maps.Map(mapCanvas, mapOptions);
                            }
                            </script>

                        
                        
                        
                        
                        </div>
\t\t\t<div id=\"Rectangle_4\"><img src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/Rectangle_4.png"), "html", null, true);
        echo "\"></div>
\t\t\t<div id=\"Path_6\"><img src=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/Path_6.png"), "html", null, true);
        echo "\"></div>
\t\t\t<div id=\"PORTFOLIO\"><img src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/PORTFOLIO.png"), "html", null, true);
        echo "\"></div>
\t\t\t<div id=\"HomePodtfolio\"><img src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/HomePodtfolio.png"), "html", null, true);
        echo "\"></div>
\t\t\t<div id=\"Rectangle_5\"><img src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/Rectangle_5.png"), "html", null, true);
        echo "\"></div>
\t\t\t
\t\t\t<div id=\"Path_8\"><img src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/Path_8.png"), "html", null, true);
        echo "\"></div>
\t\t\t<div id=\"Path_9\"><img src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/Path_9.png"), "html", null, true);
        echo "\"></div>
\t\t\t<div id=\"HOME\"><img src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/HOME.png"), "html", null, true);
        echo "\"></div>
\t\t\t<div id=\"PORTFOLIO_0\"><img src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/PORTFOLIO_0.png"), "html", null, true);
        echo "\"></div>
\t\t\t<div id=\"layer_73\"><img src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/layer_73.png"), "html", null, true);
        echo "\"></div>
\t\t\t<div id=\"BLOG\"><img src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/BLOG.png"), "html", null, true);
        echo "\"></div>
\t\t\t<div id=\"FEATURES\"><img src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/FEATURES.png"), "html", null, true);
        echo "\"></div>
\t\t\t<div id=\"ABOUT\"><img src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/ABOUT.png"), "html", null, true);
        echo "\"></div>
\t\t\t<div id=\"SERVICES\"><img src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/SERVICES.png"), "html", null, true);
        echo "\"></div>
\t\t\t<div id=\"CONTACTS\"><img src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/CONTACTS.png"), "html", null, true);
        echo "\"></div>
\t\t\t<div id=\"layer_79\"><img src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/layer_79.png"), "html", null, true);
        echo "\"></div>
\t\t\t<div id=\"MODUS_0\"><img src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/MODUS_0.png"), "html", null, true);
        echo "\"></div>
\t\t\t<div id=\"versus_0\"><img src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/versus_0.png"), "html", null, true);
        echo "\"></div>
\t\t\t
\t\t</div>
   
        
        
        
        
        
        
        
        
        
        
        
        
        </div>        
    </div>
                    
         <link rel=\"stylesheet\" href=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/styles.css"), "html", null, true);
        echo "\">
           <script src=\"https://maps.googleapis.com/maps/api/js?callback=myMap\"></script>
         
                    
";
        
        $__internal_9260c83d5611547d44b6b43901f859587381af8ecfcebfe0052910658e32931e->leave($__internal_9260c83d5611547d44b6b43901f859587381af8ecfcebfe0052910658e32931e_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  494 => 199,  472 => 180,  468 => 179,  464 => 178,  460 => 177,  456 => 176,  452 => 175,  448 => 174,  444 => 173,  440 => 172,  436 => 171,  432 => 170,  428 => 169,  424 => 168,  419 => 166,  415 => 165,  411 => 164,  407 => 163,  403 => 162,  377 => 139,  373 => 138,  369 => 137,  365 => 136,  361 => 135,  357 => 134,  353 => 133,  342 => 125,  338 => 124,  331 => 120,  327 => 119,  323 => 118,  313 => 111,  309 => 110,  305 => 109,  293 => 100,  289 => 99,  285 => 98,  274 => 90,  270 => 89,  266 => 88,  256 => 81,  252 => 80,  248 => 79,  238 => 72,  232 => 69,  223 => 63,  219 => 62,  215 => 61,  211 => 60,  207 => 59,  203 => 58,  199 => 57,  195 => 56,  191 => 55,  187 => 54,  183 => 53,  179 => 52,  175 => 51,  171 => 50,  167 => 49,  163 => 48,  159 => 47,  155 => 46,  151 => 45,  147 => 44,  143 => 43,  139 => 42,  135 => 41,  131 => 40,  127 => 39,  123 => 38,  119 => 37,  115 => 36,  111 => 35,  107 => 34,  103 => 33,  99 => 32,  95 => 31,  91 => 30,  87 => 29,  83 => 28,  79 => 27,  75 => 26,  49 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "AppBundle::layout_backend.html.twig" %}*/
/* */
/* {% block headercontent %}*/
/*     <br>*/
/* {% endblock %}*/
/* */
/* {% block content %}    */
/*     */
/*     */
/*     */
/*     <div class="box">*/
/*         <div class="box-header">*/
/*         */
/*     */
/*         </div>*/
/*        */
/*         <div class="box-body">            */
/*        */
/*          */
/*        */
/*             <div id="background">*/
/*                 */
/*                 <div class="row">    */
/*                         <div class="col-lg-12 col-md-12 col-xs-12">*/
/*                      */
/* 			<div id="Rectangle"><img src="{{asset('images/Rectangle.png')}}"></div>*/
/* 			<div id="Rectangle_0"><img src="{{asset('images/Rectangle_0.png')}}"></div>*/
/* 			<div id="Community"><img src="{{asset('images/Community.png')}}"></div>*/
/* 			<div id="fromtheBLOG"><img src="{{asset('images/fromtheBLOG.png')}}"></div>*/
/* 			<div id="Company"><img src="{{asset('images/Company.png')}}"></div>*/
/* 			<div id="Path"><img src="{{asset('images/Path.png')}}"></div>*/
/* 			<div id="CompositePath"><img src="{{asset('images/CompositePath.png')}}"></div>*/
/* 			<div id="Path_0"><img src="{{asset('images/Path_0.png')}}"></div>*/
/* 			<div id="CompositePath_0"><img src="{{asset('images/CompositePath_0.png')}}"></div>*/
/* 			<div id="MODUS"><img src="{{asset('images/MODUS.png')}}"></div>*/
/* 			<div id="Loremipsumdolorsi"><img src="{{asset('images/Loremipsumdolorsi.png')}}"></div>*/
/* 			<div id="Phone"><img src="{{asset('images/Phone.png')}}"></div>*/
/* 			<div id="email"><img src="{{asset('images/email.png')}}"></div>*/
/* 			<div id="layer_18225695896"><img src="{{asset('images/layer_18225695896.png')}}"></div>*/
/* 			<div id="infomoduversus"><img src="{{asset('images/infomoduversus.png')}}"></div>*/
/* 			<div id="BlogForumSupportN"><img src="{{asset('images/BlogForumSupportN.png')}}"></div>*/
/* 			<div id="AboutFAQContactTe"><img src="{{asset('images/AboutFAQContactTe.png')}}"></div>*/
/* 			<div id="layer_19"><img src="{{asset('images/layer_19.png')}}"></div>*/
/* 			<div id="layer_20"><img src="{{asset('images/layer_20.png')}}"></div>*/
/* 			<div id="layer_21"><img src="{{asset('images/layer_21.png')}}"></div>*/
/* 			<div id="layer_22"><img src="{{asset('images/layer_22.png')}}"></div>*/
/* 			<div id="layer_23"><img src="{{asset('images/layer_23.png')}}"></div>*/
/* 			<div id="layer_24"><img src="{{asset('images/layer_24.png')}}"></div>*/
/* 			<div id="layer_25"><img src="{{asset('images/layer_25.png')}}"></div>*/
/* 			<div id="layer_26"><img src="{{asset('images/layer_26.png')}}"></div>*/
/* 			<div id="layer_27"><img src="{{asset('images/layer_27.png')}}"></div>*/
/* 			<div id="layer_28"><img src="{{asset('images/layer_28.png')}}"></div>*/
/* 			<div id="versus"><img src="{{asset('images/versus.png')}}"></div>*/
/* 			<div id="2013ModusVersus"><img src="{{asset('images/2013ModusVersus.png')}}"></div>*/
/* 			<div id="Path_1"><img src="{{asset('images/Path_1.png')}}"></div>*/
/* 			<div id="Rectangle_1"><img src="{{asset('images/Rectangle_1.png')}}"></div>*/
/* 			<div id="Rectangle_2"><img src="{{asset('images/Rectangle_2.png')}}"></div>*/
/* 			<div id="Loremipsumdolorsi_0"><img src="{{asset('images/Loremipsumdolorsi_0.png')}}"></div>*/
/* 			<div id="Loremipsumdolorsi_1"><img src="{{asset('images/Loremipsumdolorsi_1.png')}}"></div>*/
/* 			<div id="26May2013"><img src="{{asset('images/26May2013.png')}}"></div>*/
/* 			<div id="26May2013_0"><img src="{{asset('images/26May2013_0.png')}}"></div>*/
/* 			<div id="layer_38"><img src="{{asset('images/layer_38.png')}}"></div>*/
/* 			<div id="layer_39"><img src="{{asset('images/layer_39.png')}}"></div>*/
/*                 */
/*                        </div> */
/*                  </div>       */
/*                   */
/*                         */
/* 			<div id="PORTFOLIOcopy"><img src="{{asset('images/PORTFOLIOcopy.png')}}">*/
/* 		</div>*/
/*                       */
/*                            {{ form_start(form) }}*/
/*      */
/*                     */
/*               <div id="cuerpo">*/
/*                      <div class="row">    */
/*                         <div class="col-lg-12 col-md-12 col-xs-12">*/
/*                             <div class="form-group">*/
/*                                  {{form_label(form.name, 'Name')}}*/
/*                                  {{form_widget(form.name, {'attr':{'class':'form-control'}})}}*/
/*                                  {{form_errors(form.name)}}*/
/*                             </div>*/
/*                         </div>*/
/*                      </div>*/
/*                     <div class="row">*/
/*                         <div class="col-lg-12 col-md-12 col-xs-12">*/
/*                             <div class="form-group">*/
/*                                 {{form_label(form.e_mail,'Email')}}*/
/*                                 {{form_widget(form.e_mail, {'attr':{'class':'form-control'} })}}*/
/*                                 {{form_errors(form.e_mail)}}*/
/*                             </div>*/
/*                         </div>*/
/*                      </div>*/
/*                     */
/*                     <div class="row">        */
/*                 <div class="col-lg-12 col-md-12 col-xs-12">*/
/*                     <div class="form-group">*/
/*                         {{form_label(form.website,'Web Site')}}*/
/*                         {{form_widget(form.website, {'attr':{'class':'form-control'} })}}*/
/*                         {{form_errors(form.website)}}*/
/*                     </div>*/
/*                 </div>*/
/*                 </div>*/
/*                     */
/*                     */
/*             <div class="row">*/
/*                 <div class="col-lg-12 col-md-12 col-xs-12">*/
/*                     <div class="form-group">*/
/*                         {{form_label(form.mensaje,'Message')}}*/
/*                         {{form_widget(form.mensaje, {'attr':{'class':'form-control'} })}}*/
/*                         {{form_errors(form.mensaje)}}*/
/*                     </div>*/
/*                 </div>*/
/*             </div>                    */
/*                     */
/*             */
/*                     */
/*             {{form_errors(form)}}*/
/*             {{form_rest(form)}}*/
/*             {{form_end(form)   }}*/
/*                       */
/*                       */
/*            </div>*/
/* 			<div id="layer_52"><img src="{{asset('images/layer_52.png')}}"></div>*/
/* 			<div id="layer_53"><img src="{{asset('images/layer_53.png')}}"></div>*/
/* */
/* */
/* */
/* */
/* 			<div id="Utinterdumtristiquee">Barquisimeto. Edo Lara. Venezuela*/
/*                         */
/*                         </div>*/
/* 			<div id="layer_11156985698"><img src="{{asset('images/layer_11156985698.png')}}"></div>*/
/* 			<div id="layer_56"><img src="{{asset('images/layer_56.png')}}"></div>*/
/* 			<div id="modusversuscom"><img src="{{asset('images/modusversuscom.png')}}"></div>*/
/* 			<div id="Rectangle_3"><img src="{{asset('images/Rectangle_3.png')}}"></div>*/
/* 			<div id="Uteleifendliberos"><img src="{{asset('images/Uteleifendliberos.png')}}"></div>*/
/* 			<div id="Path_4"><img src="{{asset('images/Path_4.png')}}"></div>*/
/* 			<div id="Path_5"><img src="{{asset('images/Path_5.png')}}"></div>*/
/* 			*/
/*                         */
/*                         <div id="map">*/
/*                             */
/*                             <div id="map" style="width:100%;height:500px"></div>*/
/* */
/*                         <script>*/
/*                             function myMap() {*/
/*                             var mapCanvas = document.getElementById("map");*/
/*                             var mapOptions = {*/
/*                             center: new google.maps.LatLng(51.5, -0.2),*/
/*                             zoom: 10*/
/*                                             }*/
/*                             var map = new google.maps.Map(mapCanvas, mapOptions);*/
/*                             }*/
/*                             </script>*/
/* */
/*                         */
/*                         */
/*                         */
/*                         */
/*                         </div>*/
/* 			<div id="Rectangle_4"><img src="{{asset('images/Rectangle_4.png')}}"></div>*/
/* 			<div id="Path_6"><img src="{{asset('images/Path_6.png')}}"></div>*/
/* 			<div id="PORTFOLIO"><img src="{{asset('images/PORTFOLIO.png')}}"></div>*/
/* 			<div id="HomePodtfolio"><img src="{{asset('images/HomePodtfolio.png')}}"></div>*/
/* 			<div id="Rectangle_5"><img src="{{asset('images/Rectangle_5.png')}}"></div>*/
/* 			*/
/* 			<div id="Path_8"><img src="{{asset('images/Path_8.png')}}"></div>*/
/* 			<div id="Path_9"><img src="{{asset('images/Path_9.png')}}"></div>*/
/* 			<div id="HOME"><img src="{{asset('images/HOME.png')}}"></div>*/
/* 			<div id="PORTFOLIO_0"><img src="{{asset('images/PORTFOLIO_0.png')}}"></div>*/
/* 			<div id="layer_73"><img src="{{asset('images/layer_73.png')}}"></div>*/
/* 			<div id="BLOG"><img src="{{asset('images/BLOG.png')}}"></div>*/
/* 			<div id="FEATURES"><img src="{{asset('images/FEATURES.png')}}"></div>*/
/* 			<div id="ABOUT"><img src="{{asset('images/ABOUT.png')}}"></div>*/
/* 			<div id="SERVICES"><img src="{{asset('images/SERVICES.png')}}"></div>*/
/* 			<div id="CONTACTS"><img src="{{asset('images/CONTACTS.png')}}"></div>*/
/* 			<div id="layer_79"><img src="{{asset('images/layer_79.png')}}"></div>*/
/* 			<div id="MODUS_0"><img src="{{asset('images/MODUS_0.png')}}"></div>*/
/* 			<div id="versus_0"><img src="{{asset('images/versus_0.png')}}"></div>*/
/* 			*/
/* 		</div>*/
/*    */
/*         */
/*         */
/*         */
/*         */
/*         */
/*         */
/*         */
/*         */
/*         */
/*         */
/*         */
/*         */
/*         </div>        */
/*     </div>*/
/*                     */
/*          <link rel="stylesheet" href="{{asset('css/styles.css')}}">*/
/*            <script src="https://maps.googleapis.com/maps/api/js?callback=myMap"></script>*/
/*          */
/*                     */
/* {% endblock %}*/
