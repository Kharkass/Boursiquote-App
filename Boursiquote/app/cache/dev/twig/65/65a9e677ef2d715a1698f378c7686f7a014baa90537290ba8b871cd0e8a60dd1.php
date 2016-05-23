<?php

/* SIOBoursiquoteBundle:Default:accueil.html.twig */
class __TwigTemplate_c4065f4f0443b4bb14c194617314c3ab59e557137c581bcbc795f7c72586b352 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SIOBoursiquoteBundle:Default:layout.html.twig", "SIOBoursiquoteBundle:Default:accueil.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SIOBoursiquoteBundle:Default:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5a5da8704ecbcd7b64ade3963f0dc21f514aa11faf2f23840b044c3a3563532b = $this->env->getExtension("native_profiler");
        $__internal_5a5da8704ecbcd7b64ade3963f0dc21f514aa11faf2f23840b044c3a3563532b->enter($__internal_5a5da8704ecbcd7b64ade3963f0dc21f514aa11faf2f23840b044c3a3563532b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SIOBoursiquoteBundle:Default:accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a5da8704ecbcd7b64ade3963f0dc21f514aa11faf2f23840b044c3a3563532b->leave($__internal_5a5da8704ecbcd7b64ade3963f0dc21f514aa11faf2f23840b044c3a3563532b_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_848ed658386d6fa86202a1f435bdc7976dfa3c2e80769bc63e2ab3aac57b5b58 = $this->env->getExtension("native_profiler");
        $__internal_848ed658386d6fa86202a1f435bdc7976dfa3c2e80769bc63e2ab3aac57b5b58->enter($__internal_848ed658386d6fa86202a1f435bdc7976dfa3c2e80769bc63e2ab3aac57b5b58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 4
            echo "        <center><div class=\"flashnotice\">
            ";
            // line 5
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div></center>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "    <div class=\"site\"><div class=\"span4 offset4 login-inputs\">
    <div id=\"ConnexionClient\">
        <center><form name=\"connexion\" method=\"POST\">
                <br>
                <Legend><h2>Espace Client</h2></Legend>
                <p>
                    <input id=\"mail\" type=\"text\" name=\"mail\" placeholder=\"E-Mail Client\" style=\"height:35px;\"/></br>
                </p>
                <p>
                    <input id=\"mdp\" type=\"password\" name=\"mdp\" placeholder=\"Mot de Passe\"  style=\"height:35px;\"/>
                </p>
                <p>
                    <input type=\"submit\" value=\"Valider\" name=\"submit\" class=\"btn\">
                </p>
                <p>Pas encore Inscrit ?</p>
                <p>
                    <input type=\"submit\" value=\"Creer Compte\" name=\"inscrire\" class=\"btn\">
                </p>
        </form></center>
    </div>
        </div>
    </div>
";
        
        $__internal_848ed658386d6fa86202a1f435bdc7976dfa3c2e80769bc63e2ab3aac57b5b58->leave($__internal_848ed658386d6fa86202a1f435bdc7976dfa3c2e80769bc63e2ab3aac57b5b58_prof);

    }

    public function getTemplateName()
    {
        return "SIOBoursiquoteBundle:Default:accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  48 => 5,  45 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "SIOBoursiquoteBundle:Default:layout.html.twig" %}*/
/* {% block content %}*/
/*     {% for flashMessage in app.session.flashbag.get('notice') %}*/
/*         <center><div class="flashnotice">*/
/*             {{ flashMessage }}*/
/*         </div></center>*/
/*     {% endfor %}*/
/*     <div class="site"><div class="span4 offset4 login-inputs">*/
/*     <div id="ConnexionClient">*/
/*         <center><form name="connexion" method="POST">*/
/*                 <br>*/
/*                 <Legend><h2>Espace Client</h2></Legend>*/
/*                 <p>*/
/*                     <input id="mail" type="text" name="mail" placeholder="E-Mail Client" style="height:35px;"/></br>*/
/*                 </p>*/
/*                 <p>*/
/*                     <input id="mdp" type="password" name="mdp" placeholder="Mot de Passe"  style="height:35px;"/>*/
/*                 </p>*/
/*                 <p>*/
/*                     <input type="submit" value="Valider" name="submit" class="btn">*/
/*                 </p>*/
/*                 <p>Pas encore Inscrit ?</p>*/
/*                 <p>*/
/*                     <input type="submit" value="Creer Compte" name="inscrire" class="btn">*/
/*                 </p>*/
/*         </form></center>*/
/*     </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
