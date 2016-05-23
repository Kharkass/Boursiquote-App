<?php

/* SIOBoursiquoteBundle:Default:inscription.html.twig */
class __TwigTemplate_41430f90fe145b402775d143d245501292f2f92b937e8095310a6f43ddd3a6b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SIOBoursiquoteBundle:Default:layout.html.twig", "SIOBoursiquoteBundle:Default:inscription.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SIOBoursiquoteBundle:Default:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_96d37faad9faa45bf27a7549e781923f286539dcc19da87d50fcdd57a01f8dc7 = $this->env->getExtension("native_profiler");
        $__internal_96d37faad9faa45bf27a7549e781923f286539dcc19da87d50fcdd57a01f8dc7->enter($__internal_96d37faad9faa45bf27a7549e781923f286539dcc19da87d50fcdd57a01f8dc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SIOBoursiquoteBundle:Default:inscription.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_96d37faad9faa45bf27a7549e781923f286539dcc19da87d50fcdd57a01f8dc7->leave($__internal_96d37faad9faa45bf27a7549e781923f286539dcc19da87d50fcdd57a01f8dc7_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_a9afde86fe5d302989601aa285b04da8a111460c901f5e2dc6ce05c7666ca496 = $this->env->getExtension("native_profiler");
        $__internal_a9afde86fe5d302989601aa285b04da8a111460c901f5e2dc6ce05c7666ca496->enter($__internal_a9afde86fe5d302989601aa285b04da8a111460c901f5e2dc6ce05c7666ca496_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Nouveau Compte client ";
        
        $__internal_a9afde86fe5d302989601aa285b04da8a111460c901f5e2dc6ce05c7666ca496->leave($__internal_a9afde86fe5d302989601aa285b04da8a111460c901f5e2dc6ce05c7666ca496_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_0615cfc12ce10d569e1928f3f498333877b8940a82ddc4d8da408e5c0e9f384f = $this->env->getExtension("native_profiler");
        $__internal_0615cfc12ce10d569e1928f3f498333877b8940a82ddc4d8da408e5c0e9f384f->enter($__internal_0615cfc12ce10d569e1928f3f498333877b8940a82ddc4d8da408e5c0e9f384f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 6
            echo "        <div class=\"flash notice\">
            ";
            // line 7
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "<div class=\"site\"><div class=\"span4 offset4 login-inputs\">
    <div id=\"creationClient\"><center>
        <form name=\"nouveau\" method=\"POST\"><center><br>
                <Legend><h2>Nouveau Client</h2></legend>
                <p>
                    <input id =\"nom\" type=\"text\" name=\"nom\" placeholder=\"Nom Client\">
                </p>
                <p>
                    <input id =\"prenom\" type=\"text\" name=\"prenom\" placeholder=\"Prenom Client\">
                </p>
                <p>
                    <input id =\"mail\" type=\"text\" name=\"mail\" placeholder=\"E-Mail Client\">
                </p>
                <p>
                    <input id =\"telephone\" type=\"text\" name=\"telephone\" placeholder=\"Telephone Client\">
                </p>
                <p>
                    <input id =\"mdp\" type=\"text\" name=\"mdp\" placeholder=\"Mot De Passe Client\">
                </p>
                <p>
                    <input type=\"submit\" value=\"M'Inscrire !\" name=\"submit\" class=\"btn\">
                </p>
            </center></form></center>
        </div>
        </div>
    </div>
";
        
        $__internal_0615cfc12ce10d569e1928f3f498333877b8940a82ddc4d8da408e5c0e9f384f->leave($__internal_0615cfc12ce10d569e1928f3f498333877b8940a82ddc4d8da408e5c0e9f384f_prof);

    }

    public function getTemplateName()
    {
        return "SIOBoursiquoteBundle:Default:inscription.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 10,  63 => 7,  60 => 6,  55 => 5,  49 => 4,  35 => 2,  11 => 1,);
    }
}
/* {% extends "SIOBoursiquoteBundle:Default:layout.html.twig" %}*/
/* {%	block title	%} {{parent()}} - Nouveau Compte client {%	endblock %}*/
/* */
/* {% block content %}*/
/*     {% for flashMessage in app.session.flashbag.get('notice') %}*/
/*         <div class="flash notice">*/
/*             {{ flashMessage }}*/
/*         </div>*/
/*     {% endfor %}*/
/* <div class="site"><div class="span4 offset4 login-inputs">*/
/*     <div id="creationClient"><center>*/
/*         <form name="nouveau" method="POST"><center><br>*/
/*                 <Legend><h2>Nouveau Client</h2></legend>*/
/*                 <p>*/
/*                     <input id ="nom" type="text" name="nom" placeholder="Nom Client">*/
/*                 </p>*/
/*                 <p>*/
/*                     <input id ="prenom" type="text" name="prenom" placeholder="Prenom Client">*/
/*                 </p>*/
/*                 <p>*/
/*                     <input id ="mail" type="text" name="mail" placeholder="E-Mail Client">*/
/*                 </p>*/
/*                 <p>*/
/*                     <input id ="telephone" type="text" name="telephone" placeholder="Telephone Client">*/
/*                 </p>*/
/*                 <p>*/
/*                     <input id ="mdp" type="text" name="mdp" placeholder="Mot De Passe Client">*/
/*                 </p>*/
/*                 <p>*/
/*                     <input type="submit" value="M'Inscrire !" name="submit" class="btn">*/
/*                 </p>*/
/*             </center></form></center>*/
/*         </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* 		*/
/* 		*/
/* 		*/
/* */
