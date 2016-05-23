<?php

/* SIOBoursiquoteBundle:Default:favoris.html.twig */
class __TwigTemplate_e1ccae5087feb1f6b4deb02367b43b8b4189f6484de3906ea7fbf35ef4ed67e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SIOBoursiquoteBundle:Default:layout.html.twig", "SIOBoursiquoteBundle:Default:favoris.html.twig", 1);
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
        $__internal_84488b7d643e3da794cd814ccba1d70efff4c7b6c67f313d1962833d86e52e8f = $this->env->getExtension("native_profiler");
        $__internal_84488b7d643e3da794cd814ccba1d70efff4c7b6c67f313d1962833d86e52e8f->enter($__internal_84488b7d643e3da794cd814ccba1d70efff4c7b6c67f313d1962833d86e52e8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SIOBoursiquoteBundle:Default:favoris.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84488b7d643e3da794cd814ccba1d70efff4c7b6c67f313d1962833d86e52e8f->leave($__internal_84488b7d643e3da794cd814ccba1d70efff4c7b6c67f313d1962833d86e52e8f_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_f98b83a1c1b2620319dab1a663e882eecdf00abcefa08940651b5388234140b9 = $this->env->getExtension("native_profiler");
        $__internal_f98b83a1c1b2620319dab1a663e882eecdf00abcefa08940651b5388234140b9->enter($__internal_f98b83a1c1b2620319dab1a663e882eecdf00abcefa08940651b5388234140b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "    <div class=\"span4 offset4 tableau\">
        <form id=\"tableau\" method=\"POST\">
            <center><br>
                <h1>Tableau de mes Favoris</h1>
                <h3>Liste des symboles en favoris</h3>
                <div class=\"datagrid\">

                    <table border=\"1\" name=\"tableau\">
                        <tr height=50px>
                            <td><b>Symboles</b></td>
                            <td><b>Nom de l'Action</b></td>
                            <td><b>Details</b></td>
                            <td><b>Retirer des Favoris</b></td>
                        </tr>
                        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lesSymboles"]) ? $context["lesSymboles"] : $this->getContext($context, "lesSymboles")));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 18
            echo "                        <tr>
                            <td><b>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "SymbolAction", array()), "html", null, true);
            echo "</b></td>
                            <td><b>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "NomAction", array()), "html", null, true);
            echo "</b></td>
                            <td class=\"recherche\"><form id=\"tableau\" method=\"POST\"><input type=\"hidden\" name=\"symbol_cacher\" value=";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "SymbolAction", array()), "html", null, true);
            echo "><input type=\"submit\" name=\"rechercheS\" value=\"Afficher Details\" class=\"btn\">    <select name=\"graphique\" class=\"selectoption\">
                                        <option>7jours</option>
                                        <option>30jours</option>
                                        <option>3mois</option>
                                        <option>6mois</option>
                                        <option>1an</option>
                                    </select></form></td>
                            <td class=\"recherche\"><input type=\"hidden\" name=\"symbol_cacher\" value=";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "SymbolAction", array()), "html", null, true);
            echo "><input type=\"submit\" name=\"SupFav\" value=\"Retirer\" class=\"btn\"></td>
                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "                    </table>

                </div><br>
                <form>
                    <input type=\"button\" value=\"&lArr; Retour\"  class=\"btn\" onclick=\"history.go(-1)\">
                </form>
                <br><br><br>
            </center>
        </form>
    </div>
";
        
        $__internal_f98b83a1c1b2620319dab1a663e882eecdf00abcefa08940651b5388234140b9->leave($__internal_f98b83a1c1b2620319dab1a663e882eecdf00abcefa08940651b5388234140b9_prof);

    }

    public function getTemplateName()
    {
        return "SIOBoursiquoteBundle:Default:favoris.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 31,  81 => 28,  71 => 21,  67 => 20,  63 => 19,  60 => 18,  56 => 17,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "SIOBoursiquoteBundle:Default:layout.html.twig" %}*/
/* {% block content %}*/
/*     <div class="span4 offset4 tableau">*/
/*         <form id="tableau" method="POST">*/
/*             <center><br>*/
/*                 <h1>Tableau de mes Favoris</h1>*/
/*                 <h3>Liste des symboles en favoris</h3>*/
/*                 <div class="datagrid">*/
/* */
/*                     <table border="1" name="tableau">*/
/*                         <tr height=50px>*/
/*                             <td><b>Symboles</b></td>*/
/*                             <td><b>Nom de l'Action</b></td>*/
/*                             <td><b>Details</b></td>*/
/*                             <td><b>Retirer des Favoris</b></td>*/
/*                         </tr>*/
/*                         {% for s in lesSymboles %}*/
/*                         <tr>*/
/*                             <td><b>{{ s.SymbolAction }}</b></td>*/
/*                             <td><b>{{ s.NomAction }}</b></td>*/
/*                             <td class="recherche"><form id="tableau" method="POST"><input type="hidden" name="symbol_cacher" value={{ s.SymbolAction }}><input type="submit" name="rechercheS" value="Afficher Details" class="btn">    <select name="graphique" class="selectoption">*/
/*                                         <option>7jours</option>*/
/*                                         <option>30jours</option>*/
/*                                         <option>3mois</option>*/
/*                                         <option>6mois</option>*/
/*                                         <option>1an</option>*/
/*                                     </select></form></td>*/
/*                             <td class="recherche"><input type="hidden" name="symbol_cacher" value={{ s.SymbolAction }}><input type="submit" name="SupFav" value="Retirer" class="btn"></td>*/
/*                         </tr>*/
/*                         {% endfor %}*/
/*                     </table>*/
/* */
/*                 </div><br>*/
/*                 <form>*/
/*                     <input type="button" value="&lArr; Retour"  class="btn" onclick="history.go(-1)">*/
/*                 </form>*/
/*                 <br><br><br>*/
/*             </center>*/
/*         </form>*/
/*     </div>*/
/* {% endblock %}*/
