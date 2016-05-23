<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_5281ddc0eb69516a144748a078db0c23ee22f7bf13eb757615ec280f3fa83c89 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_16c16d9be2102842c984e122ebcd15accebfcbdff08746db686d136a30cc91d1 = $this->env->getExtension("native_profiler");
        $__internal_16c16d9be2102842c984e122ebcd15accebfcbdff08746db686d136a30cc91d1->enter($__internal_16c16d9be2102842c984e122ebcd15accebfcbdff08746db686d136a30cc91d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_16c16d9be2102842c984e122ebcd15accebfcbdff08746db686d136a30cc91d1->leave($__internal_16c16d9be2102842c984e122ebcd15accebfcbdff08746db686d136a30cc91d1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_14b791804c3bd4dc05dddebefc7f202c0e276dc613c62901487ea7310086f905 = $this->env->getExtension("native_profiler");
        $__internal_14b791804c3bd4dc05dddebefc7f202c0e276dc613c62901487ea7310086f905->enter($__internal_14b791804c3bd4dc05dddebefc7f202c0e276dc613c62901487ea7310086f905_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_14b791804c3bd4dc05dddebefc7f202c0e276dc613c62901487ea7310086f905->leave($__internal_14b791804c3bd4dc05dddebefc7f202c0e276dc613c62901487ea7310086f905_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8da26ecb73c113b9d49431d853a75b6721d866aab53eb9974dfa0171e3eff25c = $this->env->getExtension("native_profiler");
        $__internal_8da26ecb73c113b9d49431d853a75b6721d866aab53eb9974dfa0171e3eff25c->enter($__internal_8da26ecb73c113b9d49431d853a75b6721d866aab53eb9974dfa0171e3eff25c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_8da26ecb73c113b9d49431d853a75b6721d866aab53eb9974dfa0171e3eff25c->leave($__internal_8da26ecb73c113b9d49431d853a75b6721d866aab53eb9974dfa0171e3eff25c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_333d0ae396ef1cf6d571a75e7db296e3907545b2e22bb0bfe6e26c8f42e83bd8 = $this->env->getExtension("native_profiler");
        $__internal_333d0ae396ef1cf6d571a75e7db296e3907545b2e22bb0bfe6e26c8f42e83bd8->enter($__internal_333d0ae396ef1cf6d571a75e7db296e3907545b2e22bb0bfe6e26c8f42e83bd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_333d0ae396ef1cf6d571a75e7db296e3907545b2e22bb0bfe6e26c8f42e83bd8->leave($__internal_333d0ae396ef1cf6d571a75e7db296e3907545b2e22bb0bfe6e26c8f42e83bd8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
