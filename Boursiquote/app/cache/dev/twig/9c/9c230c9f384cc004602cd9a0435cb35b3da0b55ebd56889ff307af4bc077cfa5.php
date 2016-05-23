<?php

/* SIOBoursiquoteBundle:Default:detail.html.twig */
class __TwigTemplate_fdc97a7e302647134be5c670d0d51a75f7211f656b15625a0f06bdf3d67b0948 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SIOBoursiquoteBundle:Default:layout.html.twig", "SIOBoursiquoteBundle:Default:detail.html.twig", 1);
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
        $__internal_694ce43fd780280b9b8468d60a20cc9adbb9fcf642ae0dede62d1966d2a8cf6f = $this->env->getExtension("native_profiler");
        $__internal_694ce43fd780280b9b8468d60a20cc9adbb9fcf642ae0dede62d1966d2a8cf6f->enter($__internal_694ce43fd780280b9b8468d60a20cc9adbb9fcf642ae0dede62d1966d2a8cf6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SIOBoursiquoteBundle:Default:detail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_694ce43fd780280b9b8468d60a20cc9adbb9fcf642ae0dede62d1966d2a8cf6f->leave($__internal_694ce43fd780280b9b8468d60a20cc9adbb9fcf642ae0dede62d1966d2a8cf6f_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_1de4f7c7e5b249be6287d9532927423330d198d1d897dfa8afe6076182c11d4e = $this->env->getExtension("native_profiler");
        $__internal_1de4f7c7e5b249be6287d9532927423330d198d1d897dfa8afe6076182c11d4e->enter($__internal_1de4f7c7e5b249be6287d9532927423330d198d1d897dfa8afe6076182c11d4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<div class=\"tableau-detail\">
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            // line 6
            echo "    <center><br><h1>Details de l'action: ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "Symbol", array()), "html", null, true);
            echo "</h1><br>
<table border=\"1\" name=\"tableau\">
<tr>
        <th><b></b></th>
        <th><b>Dernier prix d'echange</b></th>
        <th><b>Variations</b></th>
        <th><b>Derniere date d'echange</b></th>
</tr>

     <tr class=\"recherche\">
         <td class=\"recherche\">";
            // line 16
            if (($this->getAttribute($context["d"], "ChangeinPercent", array()) < 0)) {
                echo " <font color=\"red\"><img src=";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/decente.png"), "html", null, true);
                echo "\talt=\"Bourser\" title=\"Boursiquote\"/>";
            } else {
                echo "<img src=";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/monte.png"), "html", null, true);
                echo "\talt=\"Bourser\" title=\"Boursiquote\"/>";
            }
            echo "</td>
         <td class=\"recherche\">";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "LastTradePriceOnly", array()), "html", null, true);
            echo "</td>
         <td class=\"recherche\">";
            // line 18
            if (($this->getAttribute($context["d"], "ChangeinPercent", array()) < 0)) {
                echo " <font color=\"red\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "ChangeinPercent", array()), "html", null, true);
                echo "</font>";
            } else {
                echo "<font color=\"green\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "ChangeinPercent", array()), "html", null, true);
                echo "</font>";
            }
            echo "</td>
         <td class=\"recherche\">";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "LastTradeDate", array()), "html", null, true);
            echo "</td>
     </tr>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "
</table><br>
<h1>Graphique:</h1>
        <script type=\"text/javascript\">
            var lesCategories = new Array();
            var lesValeurs = new Array();
            var lesValeursLow = new Array();
            var lesValeursClose= new Array();
            var lesValeursOuv= new Array();
            var debut= '";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["debut"]) ? $context["debut"] : $this->getContext($context, "debut")), "html", null, true);
        echo "';
            var fin='";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["fin"]) ? $context["fin"] : $this->getContext($context, "fin")), "html", null, true);
        echo "';

            ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["graph"]) ? $context["graph"] : $this->getContext($context, "graph")));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            // line 36
            echo "            lesCategories.push('";
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "Date", array()), "html", null, true);
            echo "');
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "
            ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["valeurs"]) ? $context["valeurs"] : $this->getContext($context, "valeurs")));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            // line 40
            echo "            lesValeurs.push(";
            echo twig_escape_filter($this->env, $context["d"], "html", null, true);
            echo ")
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "
            ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["valeursLow"]) ? $context["valeursLow"] : $this->getContext($context, "valeursLow")));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            // line 44
            echo "            lesValeursLow.push(";
            echo twig_escape_filter($this->env, $context["d"], "html", null, true);
            echo ")
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "
            ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["valeursClose"]) ? $context["valeursClose"] : $this->getContext($context, "valeursClose")));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            // line 48
            echo "            lesValeursClose.push(";
            echo twig_escape_filter($this->env, $context["d"], "html", null, true);
            echo ")
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "
            ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["valeursOuv"]) ? $context["valeursOuv"] : $this->getContext($context, "valeursOuv")));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            // line 52
            echo "            lesValeursOuv.push(";
            echo twig_escape_filter($this->env, $context["d"], "html", null, true);
            echo ")
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "
            \$(document).ready(function() {

                \$('#container').highcharts({
                    title: {
                        text: 'Evolution du cours de l\\'action',
                        x: -20 //center
                    },
                    subtitle: {
                        text: 'Periode du : '+debut+' au '+ fin,
                        x: -20
                    },
                    xAxis: {
                        categories: lesCategories
                    },
                    yAxis: {
                        title: {
                            text: 'Cours de l\\'action',
                        },
                        plotLines: [{
                            value: 0,
                            width: 1,
                            color: '#808080'
                        }]
                    },
                    tooltip: {
                        valueSuffix: ' Points'
                    },
                    legend: {
                        layout: 'vertical',
                        align: 'right',
                        verticalAlign: 'middle',
                        borderWidth: 0
                    },
                    series: [{
                        name: 'Plus haut',
                        data: lesValeurs
                    },
                        {
                            name: 'Plus basse',
                            data: lesValeursLow
                        }, {
                            name: 'Ouverture',
                            data: lesValeursOuv
                        }, {
                            name: 'Fermeture',
                            data: lesValeursClose
                        }
                    ]
                });
            });
        </script>

        <script src=\"https://code.highcharts.com/highcharts.js\"></script>
        <script src=\"https://code.highcharts.com/modules/exporting.js\"></script>

        <div id=\"container\" style=\"min-width: 310px; height: 400px; margin: 0 auto\"></div><br>
        <form>
            <input type=\"button\" value=\"&lArr; Retour\"  class=\"btn\" onclick=\"history.go(-1)\">
        </form>

    </center>
    </div>
";
        
        $__internal_1de4f7c7e5b249be6287d9532927423330d198d1d897dfa8afe6076182c11d4e->leave($__internal_1de4f7c7e5b249be6287d9532927423330d198d1d897dfa8afe6076182c11d4e_prof);

    }

    public function getTemplateName()
    {
        return "SIOBoursiquoteBundle:Default:detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 54,  187 => 52,  183 => 51,  180 => 50,  171 => 48,  167 => 47,  164 => 46,  155 => 44,  151 => 43,  148 => 42,  139 => 40,  135 => 39,  132 => 38,  123 => 36,  119 => 35,  114 => 33,  110 => 32,  99 => 23,  89 => 19,  77 => 18,  73 => 17,  61 => 16,  47 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "SIOBoursiquoteBundle:Default:layout.html.twig" %}*/
/* */
/* {% block content %}*/
/* <div class="tableau-detail">*/
/*     {% for d in data %}*/
/*     <center><br><h1>Details de l'action: {{ d.Symbol }}</h1><br>*/
/* <table border="1" name="tableau">*/
/* <tr>*/
/*         <th><b></b></th>*/
/*         <th><b>Dernier prix d'echange</b></th>*/
/*         <th><b>Variations</b></th>*/
/*         <th><b>Derniere date d'echange</b></th>*/
/* </tr>*/
/* */
/*      <tr class="recherche">*/
/*          <td class="recherche">{% if d.ChangeinPercent < 0 %} <font color="red"><img src={{ asset('images/decente.png')  }}	alt="Bourser" title="Boursiquote"/>{% else %}<img src={{ asset('images/monte.png')  }}	alt="Bourser" title="Boursiquote"/>{% endif %}</td>*/
/*          <td class="recherche">{{ d.LastTradePriceOnly }}</td>*/
/*          <td class="recherche">{% if d.ChangeinPercent < 0 %} <font color="red">{{ d.ChangeinPercent }}</font>{% else %}<font color="green">{{ d.ChangeinPercent }}</font>{% endif %}</td>*/
/*          <td class="recherche">{{ d.LastTradeDate }}</td>*/
/*      </tr>*/
/* */
/*     {% endfor %}*/
/* */
/* </table><br>*/
/* <h1>Graphique:</h1>*/
/*         <script type="text/javascript">*/
/*             var lesCategories = new Array();*/
/*             var lesValeurs = new Array();*/
/*             var lesValeursLow = new Array();*/
/*             var lesValeursClose= new Array();*/
/*             var lesValeursOuv= new Array();*/
/*             var debut= '{{debut}}';*/
/*             var fin='{{ fin }}';*/
/* */
/*             {% for d in graph %}*/
/*             lesCategories.push('{{ d.Date }}');*/
/*             {% endfor %}*/
/* */
/*             {% for d in valeurs %}*/
/*             lesValeurs.push({{ d }})*/
/*             {% endfor %}*/
/* */
/*             {% for d in valeursLow %}*/
/*             lesValeursLow.push({{ d }})*/
/*             {% endfor %}*/
/* */
/*             {% for d in valeursClose %}*/
/*             lesValeursClose.push({{ d }})*/
/*             {% endfor %}*/
/* */
/*             {% for d in valeursOuv %}*/
/*             lesValeursOuv.push({{ d }})*/
/*             {% endfor %}*/
/* */
/*             $(document).ready(function() {*/
/* */
/*                 $('#container').highcharts({*/
/*                     title: {*/
/*                         text: 'Evolution du cours de l\'action',*/
/*                         x: -20 //center*/
/*                     },*/
/*                     subtitle: {*/
/*                         text: 'Periode du : '+debut+' au '+ fin,*/
/*                         x: -20*/
/*                     },*/
/*                     xAxis: {*/
/*                         categories: lesCategories*/
/*                     },*/
/*                     yAxis: {*/
/*                         title: {*/
/*                             text: 'Cours de l\'action',*/
/*                         },*/
/*                         plotLines: [{*/
/*                             value: 0,*/
/*                             width: 1,*/
/*                             color: '#808080'*/
/*                         }]*/
/*                     },*/
/*                     tooltip: {*/
/*                         valueSuffix: ' Points'*/
/*                     },*/
/*                     legend: {*/
/*                         layout: 'vertical',*/
/*                         align: 'right',*/
/*                         verticalAlign: 'middle',*/
/*                         borderWidth: 0*/
/*                     },*/
/*                     series: [{*/
/*                         name: 'Plus haut',*/
/*                         data: lesValeurs*/
/*                     },*/
/*                         {*/
/*                             name: 'Plus basse',*/
/*                             data: lesValeursLow*/
/*                         }, {*/
/*                             name: 'Ouverture',*/
/*                             data: lesValeursOuv*/
/*                         }, {*/
/*                             name: 'Fermeture',*/
/*                             data: lesValeursClose*/
/*                         }*/
/*                     ]*/
/*                 });*/
/*             });*/
/*         </script>*/
/* */
/*         <script src="https://code.highcharts.com/highcharts.js"></script>*/
/*         <script src="https://code.highcharts.com/modules/exporting.js"></script>*/
/* */
/*         <div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div><br>*/
/*         <form>*/
/*             <input type="button" value="&lArr; Retour"  class="btn" onclick="history.go(-1)">*/
/*         </form>*/
/* */
/*     </center>*/
/*     </div>*/
/* {% endblock %}*/
