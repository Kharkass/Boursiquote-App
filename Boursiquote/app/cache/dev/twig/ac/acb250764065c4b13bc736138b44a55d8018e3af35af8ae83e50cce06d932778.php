<?php

/* base.html.twig */
class __TwigTemplate_9a4a78eb7f55c6d5c6256239b8def78116e3fbe909d4d1a1b6824b0e44901806 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_feb05d9f7654185a69db5fb804d001b0c00a6d1421aaaf65f336cb88e27647e4 = $this->env->getExtension("native_profiler");
        $__internal_feb05d9f7654185a69db5fb804d001b0c00a6d1421aaaf65f336cb88e27647e4->enter($__internal_feb05d9f7654185a69db5fb804d001b0c00a6d1421aaaf65f336cb88e27647e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_feb05d9f7654185a69db5fb804d001b0c00a6d1421aaaf65f336cb88e27647e4->leave($__internal_feb05d9f7654185a69db5fb804d001b0c00a6d1421aaaf65f336cb88e27647e4_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c6fc659b074211869da282ea8dde5f268381ead834227ea76e332f6f488bf7b8 = $this->env->getExtension("native_profiler");
        $__internal_c6fc659b074211869da282ea8dde5f268381ead834227ea76e332f6f488bf7b8->enter($__internal_c6fc659b074211869da282ea8dde5f268381ead834227ea76e332f6f488bf7b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c6fc659b074211869da282ea8dde5f268381ead834227ea76e332f6f488bf7b8->leave($__internal_c6fc659b074211869da282ea8dde5f268381ead834227ea76e332f6f488bf7b8_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_05307cac9748e77151dd8234153758a4b625f4be258eee73f98a9ed58a7ed042 = $this->env->getExtension("native_profiler");
        $__internal_05307cac9748e77151dd8234153758a4b625f4be258eee73f98a9ed58a7ed042->enter($__internal_05307cac9748e77151dd8234153758a4b625f4be258eee73f98a9ed58a7ed042_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_05307cac9748e77151dd8234153758a4b625f4be258eee73f98a9ed58a7ed042->leave($__internal_05307cac9748e77151dd8234153758a4b625f4be258eee73f98a9ed58a7ed042_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_e4b7c52e9b6de48bf5ef8a6a05ff99b3b0782e417258dda088e95eda2a864ef4 = $this->env->getExtension("native_profiler");
        $__internal_e4b7c52e9b6de48bf5ef8a6a05ff99b3b0782e417258dda088e95eda2a864ef4->enter($__internal_e4b7c52e9b6de48bf5ef8a6a05ff99b3b0782e417258dda088e95eda2a864ef4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e4b7c52e9b6de48bf5ef8a6a05ff99b3b0782e417258dda088e95eda2a864ef4->leave($__internal_e4b7c52e9b6de48bf5ef8a6a05ff99b3b0782e417258dda088e95eda2a864ef4_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_38218370af36205b592d5014adfca119eae1fb1a7176535196e43c9fa2918769 = $this->env->getExtension("native_profiler");
        $__internal_38218370af36205b592d5014adfca119eae1fb1a7176535196e43c9fa2918769->enter($__internal_38218370af36205b592d5014adfca119eae1fb1a7176535196e43c9fa2918769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_38218370af36205b592d5014adfca119eae1fb1a7176535196e43c9fa2918769->leave($__internal_38218370af36205b592d5014adfca119eae1fb1a7176535196e43c9fa2918769_prof);

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
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
