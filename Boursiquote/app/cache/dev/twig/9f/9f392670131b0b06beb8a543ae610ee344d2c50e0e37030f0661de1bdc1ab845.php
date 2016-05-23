<?php

/* SIOBoursiquoteBundle:Default:tableau.html.twig */
class __TwigTemplate_8ecedd2e208ec4ab5b4b46da898f1cd35ec84dcc4bf282f957a66ad3ae2ad782 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SIOBoursiquoteBundle:Default:layout.html.twig", "SIOBoursiquoteBundle:Default:tableau.html.twig", 1);
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
        $__internal_1aea2d1946bd9d5b396622c15f913d82631e9b08f9dd706220a6193899d1a6a0 = $this->env->getExtension("native_profiler");
        $__internal_1aea2d1946bd9d5b396622c15f913d82631e9b08f9dd706220a6193899d1a6a0->enter($__internal_1aea2d1946bd9d5b396622c15f913d82631e9b08f9dd706220a6193899d1a6a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SIOBoursiquoteBundle:Default:tableau.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1aea2d1946bd9d5b396622c15f913d82631e9b08f9dd706220a6193899d1a6a0->leave($__internal_1aea2d1946bd9d5b396622c15f913d82631e9b08f9dd706220a6193899d1a6a0_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_86574536633d7fa535f4e72b9b25545900ac85539b0a836d352b4ad0d5d07bbf = $this->env->getExtension("native_profiler");
        $__internal_86574536633d7fa535f4e72b9b25545900ac85539b0a836d352b4ad0d5d07bbf->enter($__internal_86574536633d7fa535f4e72b9b25545900ac85539b0a836d352b4ad0d5d07bbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "<div class=\"span4 offset4 tableau\">
   <form id=\"tableau\" method=\"POST\">
<center><br>
<h1>Tableau des Actions</h1>
    <input type=\"submit\" name=\"fav\" value=\"Mes favoris\" class=\"btn\">
    <div class=\"datagrid\">
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 10
            echo "            <center><div class=\"flashnotice\">
                    ";
            // line 11
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                </div></center>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "<table border=\"1\" name=\"tableau\"><br>
<tr>
        <td><b>Symbole</b></td>
        <td><b>Nom</b></td>
        <td><b>Echange</b></td>
        <td><b>Echange affichage</b></td>
        <td><b>Type</b></td>
        <td><b>Type affichage</b></td>
        <td><b>Details</b></td>
        <td><b>Favoris</b></td>
</tr>
 ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            // line 26
            echo "
     <tr class=\"recherche\">
         <td class=\"recherche\">";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "symbol", array()), "html", null, true);
            echo "</td>
         <td class=\"recherche\">";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "name", array()), "html", null, true);
            echo "</td>
         <td class=\"recherche\">";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "exch", array()), "html", null, true);
            echo "</td>
         <td class=\"recherche\">";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "exchDisp", array()), "html", null, true);
            echo "</td>
         <td class=\"recherche\">";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "type", array()), "html", null, true);
            echo "</td>
         <td class=\"recherche\">";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "typeDisp", array()), "html", null, true);
            echo "</td>
         <td class=\"recherche\"><form id=\"tableau2\" method=\"POST\"><input type=\"hidden\" name=\"symbol_cacher\" value=";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "symbol", array()), "html", null, true);
            echo ">    <select name=\"graphique\" class=\"selectoption\">
                     <option>7jours</option>
                     <option>30jours</option>
                     <option>3mois</option>
                     <option>6mois</option>
                     <option>1an</option>
                 </select><input type=\"submit\" name=\"rechercheS\" value=\"Afficher Details\" class=\"btn\"></form></td>
         <td class=\"recherche\"><form id=\"tableau3\" method=\"POST\"><input type=\"hidden\" name=\"symbol_cacher\" value=";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "symbol", array()), "html", null, true);
            echo "><input type=\"hidden\" name=\"nom_cache\" value=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "name", array()), "html", null, true);
            echo "><input type=\"submit\" name=\"addFav\" value=\"+\" class=\"btn\"></form></td>
     </tr>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "</table>
</div><br>
<br><br><br>
    <form id=\"tableau\" method=\"POST\">
<input type=\"text\" name=\"nom\" placeholder=\"Nom de l'Action\" class=\"btn\">
<input type=\"submit\" name=\"recherche\" value=\"RECHERCHER\" class=\"btn\"><br>
</center>
</form>
</div>
";
        
        $__internal_86574536633d7fa535f4e72b9b25545900ac85539b0a836d352b4ad0d5d07bbf->leave($__internal_86574536633d7fa535f4e72b9b25545900ac85539b0a836d352b4ad0d5d07bbf_prof);

    }

    public function getTemplateName()
    {
        return "SIOBoursiquoteBundle:Default:tableau.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 45,  119 => 41,  109 => 34,  105 => 33,  101 => 32,  97 => 31,  93 => 30,  89 => 29,  85 => 28,  81 => 26,  77 => 25,  64 => 14,  55 => 11,  52 => 10,  48 => 9,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "SIOBoursiquoteBundle:Default:layout.html.twig" %}*/
/* {% block content %}*/
/* <div class="span4 offset4 tableau">*/
/*    <form id="tableau" method="POST">*/
/* <center><br>*/
/* <h1>Tableau des Actions</h1>*/
/*     <input type="submit" name="fav" value="Mes favoris" class="btn">*/
/*     <div class="datagrid">*/
/*         {% for flashMessage in app.session.flashbag.get('notice') %}*/
/*             <center><div class="flashnotice">*/
/*                     {{ flashMessage }}*/
/*                 </div></center>*/
/*         {% endfor %}*/
/* <table border="1" name="tableau"><br>*/
/* <tr>*/
/*         <td><b>Symbole</b></td>*/
/*         <td><b>Nom</b></td>*/
/*         <td><b>Echange</b></td>*/
/*         <td><b>Echange affichage</b></td>*/
/*         <td><b>Type</b></td>*/
/*         <td><b>Type affichage</b></td>*/
/*         <td><b>Details</b></td>*/
/*         <td><b>Favoris</b></td>*/
/* </tr>*/
/*  {% for d in data %}*/
/* */
/*      <tr class="recherche">*/
/*          <td class="recherche">{{ d.symbol }}</td>*/
/*          <td class="recherche">{{ d.name }}</td>*/
/*          <td class="recherche">{{ d.exch }}</td>*/
/*          <td class="recherche">{{ d.exchDisp }}</td>*/
/*          <td class="recherche">{{ d.type }}</td>*/
/*          <td class="recherche">{{ d.typeDisp }}</td>*/
/*          <td class="recherche"><form id="tableau2" method="POST"><input type="hidden" name="symbol_cacher" value={{ d.symbol }}>    <select name="graphique" class="selectoption">*/
/*                      <option>7jours</option>*/
/*                      <option>30jours</option>*/
/*                      <option>3mois</option>*/
/*                      <option>6mois</option>*/
/*                      <option>1an</option>*/
/*                  </select><input type="submit" name="rechercheS" value="Afficher Details" class="btn"></form></td>*/
/*          <td class="recherche"><form id="tableau3" method="POST"><input type="hidden" name="symbol_cacher" value={{ d.symbol }}><input type="hidden" name="nom_cache" value={{ d.name }}><input type="submit" name="addFav" value="+" class="btn"></form></td>*/
/*      </tr>*/
/* */
/*     {% endfor %}*/
/* </table>*/
/* </div><br>*/
/* <br><br><br>*/
/*     <form id="tableau" method="POST">*/
/* <input type="text" name="nom" placeholder="Nom de l'Action" class="btn">*/
/* <input type="submit" name="recherche" value="RECHERCHER" class="btn"><br>*/
/* </center>*/
/* </form>*/
/* </div>*/
/* {% endblock %}*/
