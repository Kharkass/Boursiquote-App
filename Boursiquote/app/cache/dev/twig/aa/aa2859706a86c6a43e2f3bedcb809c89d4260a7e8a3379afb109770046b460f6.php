<?php

/* SIOBoursiquoteBundle:Default:layout.html.twig */
class __TwigTemplate_6d215ef899dd7c25d5d9cfbdf0479a48463cfccbd6b40a05234cf8514ca1be4c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'Deconnexion' => array($this, 'block_Deconnexion'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bb73be41d7995625ba891d56d599b8132124b943d04d84e1fc67b457793e3712 = $this->env->getExtension("native_profiler");
        $__internal_bb73be41d7995625ba891d56d599b8132124b943d04d84e1fc67b457793e3712->enter($__internal_bb73be41d7995625ba891d56d599b8132124b943d04d84e1fc67b457793e3712_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SIOBoursiquoteBundle:Default:layout.html.twig"));

        // line 1
        echo "<html lang=\"fr\">
<head>

    <title>
        ";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        // line 8
        echo "



    </title>
    <meta http-equiv=\"Content-Language\" content=\"fr\">
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">

    ";
        // line 16
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "67871f8_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_67871f8_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/67871f8_cssGeneral_1.css");
            // line 17
            echo "    <link href= \"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" media=\"screen\" />
    ";
        } else {
            // asset "67871f8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_67871f8") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/67871f8.css");
            echo "    <link href= \"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" media=\"screen\" />
    ";
        }
        unset($context["asset_url"]);
        // line 19
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/analytics.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/popup.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-1.11.3.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/raphael.js"), "html", null, true);
        echo "\"></script>

</head>

<body>

<div id=\"bandeau\">
    <div class=\"logo\"><img src=";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/bourse.png"), "html", null, true);
        echo "\talt=\"Bourser\" title=\"Boursiquote\"/></div>

    ";
        // line 31
        $this->displayBlock('Deconnexion', $context, $blocks);
        // line 35
        echo "
    ";
        // line 36
        $this->displayBlock('content', $context, $blocks);
        // line 38
        echo "</div>

</body>

</html>";
        
        $__internal_bb73be41d7995625ba891d56d599b8132124b943d04d84e1fc67b457793e3712->leave($__internal_bb73be41d7995625ba891d56d599b8132124b943d04d84e1fc67b457793e3712_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_be33495973d9ff9d2da64adfcfba6bfc746e2968f97bbe81067034032f6f5638 = $this->env->getExtension("native_profiler");
        $__internal_be33495973d9ff9d2da64adfcfba6bfc746e2968f97bbe81067034032f6f5638->enter($__internal_be33495973d9ff9d2da64adfcfba6bfc746e2968f97bbe81067034032f6f5638_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "            Boursiquote Symfony 2
        ";
        
        $__internal_be33495973d9ff9d2da64adfcfba6bfc746e2968f97bbe81067034032f6f5638->leave($__internal_be33495973d9ff9d2da64adfcfba6bfc746e2968f97bbe81067034032f6f5638_prof);

    }

    // line 31
    public function block_Deconnexion($context, array $blocks = array())
    {
        $__internal_b45ca69fc8fa0e785177f8dd8b2ceb1a6d76c5ed0faf5b0ac38846d03756136b = $this->env->getExtension("native_profiler");
        $__internal_b45ca69fc8fa0e785177f8dd8b2ceb1a6d76c5ed0faf5b0ac38846d03756136b->enter($__internal_b45ca69fc8fa0e785177f8dd8b2ceb1a6d76c5ed0faf5b0ac38846d03756136b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Deconnexion"));

        // line 32
        echo "

    ";
        
        $__internal_b45ca69fc8fa0e785177f8dd8b2ceb1a6d76c5ed0faf5b0ac38846d03756136b->leave($__internal_b45ca69fc8fa0e785177f8dd8b2ceb1a6d76c5ed0faf5b0ac38846d03756136b_prof);

    }

    // line 36
    public function block_content($context, array $blocks = array())
    {
        $__internal_a7dc140b39fdc90bdb08f65917b244a308a23cd891327963628dede6409924bd = $this->env->getExtension("native_profiler");
        $__internal_a7dc140b39fdc90bdb08f65917b244a308a23cd891327963628dede6409924bd->enter($__internal_a7dc140b39fdc90bdb08f65917b244a308a23cd891327963628dede6409924bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 37
        echo "    ";
        
        $__internal_a7dc140b39fdc90bdb08f65917b244a308a23cd891327963628dede6409924bd->leave($__internal_a7dc140b39fdc90bdb08f65917b244a308a23cd891327963628dede6409924bd_prof);

    }

    public function getTemplateName()
    {
        return "SIOBoursiquoteBundle:Default:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 37,  136 => 36,  127 => 32,  121 => 31,  113 => 6,  107 => 5,  96 => 38,  94 => 36,  91 => 35,  89 => 31,  84 => 29,  74 => 22,  70 => 21,  66 => 20,  61 => 19,  47 => 17,  43 => 16,  33 => 8,  31 => 5,  25 => 1,);
    }
}
/* <html lang="fr">*/
/* <head>*/
/* */
/*     <title>*/
/*         {% block title %}*/
/*             Boursiquote Symfony 2*/
/*         {% endblock %}*/
/* */
/* */
/* */
/* */
/*     </title>*/
/*     <meta http-equiv="Content-Language" content="fr">*/
/*     <meta http-equiv="Content-Type" content="text/html; charset=utf-8">*/
/* */
/*     {% stylesheets '@SIOBoursiquoteBundle/public/css/cssGeneral.css' filter='cssrewrite' %}*/
/*     <link href= "{{  asset_url }}" rel="stylesheet" media="screen" />*/
/*     {% endstylesheets %}*/
/*     <script src="{{ asset('js/analytics.js') }}"></script>*/
/*     <script src="{{ asset('js/popup.js') }}"></script>*/
/*     <script src="{{ asset('js/jquery-1.11.3.min.js') }}"></script>*/
/*     <script src="{{ asset('js/raphael.js') }}"></script>*/
/* */
/* </head>*/
/* */
/* <body>*/
/* */
/* <div id="bandeau">*/
/*     <div class="logo"><img src={{ asset('images/bourse.png')  }}	alt="Bourser" title="Boursiquote"/></div>*/
/* */
/*     {% block Deconnexion %}*/
/* */
/* */
/*     {% endblock %}*/
/* */
/*     {% block content %}*/
/*     {% endblock %}*/
/* </div>*/
/* */
/* </body>*/
/* */
/* </html>*/
