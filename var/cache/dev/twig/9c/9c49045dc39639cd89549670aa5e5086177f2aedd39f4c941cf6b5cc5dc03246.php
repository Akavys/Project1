<?php

/* GmaoMoulageBundle:Reference:liste.html.twig */
class __TwigTemplate_218d21d3885c6f5d56939617c8646fe87e470b8b8df28bce7a6c253fe9a39f9f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GmaoMoulageBundle::layout.html.twig", "GmaoMoulageBundle:Reference:liste.html.twig", 1);
        $this->blocks = array(
            'tittle' => array($this, 'block_tittle'),
            'body' => array($this, 'block_body'),
            'javascriptsss' => array($this, 'block_javascriptsss'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "GmaoMoulageBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_05dc9079ca4b9bb79df35209f4bcd8a840ad8b95ba0f3079914b5f0986f19c3b = $this->env->getExtension("native_profiler");
        $__internal_05dc9079ca4b9bb79df35209f4bcd8a840ad8b95ba0f3079914b5f0986f19c3b->enter($__internal_05dc9079ca4b9bb79df35209f4bcd8a840ad8b95ba0f3079914b5f0986f19c3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GmaoMoulageBundle:Reference:liste.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_05dc9079ca4b9bb79df35209f4bcd8a840ad8b95ba0f3079914b5f0986f19c3b->leave($__internal_05dc9079ca4b9bb79df35209f4bcd8a840ad8b95ba0f3079914b5f0986f19c3b_prof);

    }

    // line 3
    public function block_tittle($context, array $blocks = array())
    {
        $__internal_54d60b5255847f4e0a656b2c5d4fde462cfcafa5b4e64214b35234cdf6e1b7ce = $this->env->getExtension("native_profiler");
        $__internal_54d60b5255847f4e0a656b2c5d4fde462cfcafa5b4e64214b35234cdf6e1b7ce->enter($__internal_54d60b5255847f4e0a656b2c5d4fde462cfcafa5b4e64214b35234cdf6e1b7ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tittle"));

        // line 4
        echo "  Liste - ";
        $this->displayParentBlock("tittle", $context, $blocks);
        echo "
";
        
        $__internal_54d60b5255847f4e0a656b2c5d4fde462cfcafa5b4e64214b35234cdf6e1b7ce->leave($__internal_54d60b5255847f4e0a656b2c5d4fde462cfcafa5b4e64214b35234cdf6e1b7ce_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_380fd968e66a2e7184831e39099b4809001733727dff2116748eb2466a90c27c = $this->env->getExtension("native_profiler");
        $__internal_380fd968e66a2e7184831e39099b4809001733727dff2116748eb2466a90c27c->enter($__internal_380fd968e66a2e7184831e39099b4809001733727dff2116748eb2466a90c27c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "

      ";
        // line 11
        echo "      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 12
            echo "      <div class=\"ui info message\">
        <i class=\"close icon\"></i>
        <div class=\"header\">
          <p>Information : ";
            // line 15
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</p>
        </div>
      </div>

      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "
      <br/>

  <div class=\"row\">
    <div class=\"col-sm-10 col-md-10\">
      <h2 class=\"ui dividing header\">Liste des références</h2>
    </div>
    <div class=\"col-sm-2 col-md-2\" style=\"align-right\">
      <a class=\"ui primary button \" href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("gmao_moulage_ajouter_reference");
        echo "\">
        <span class=\"glyphicon glyphicon-plus\" aria-hidden=\"true\"></span>
          Ajouter une référence
      </a>
    </div>
  </div>

<br/>
  <table id=\"example\" class=\"ui celled table\">
        <thead>
            <tr>
                <th>Id Référence</th>
                <th>Référence - Version</th>
                <th>Désignation</th>
                <th>Etat</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
              <th>Id Référence</th>
              <th>Référence - Version</th>
              <th>Désignation</th>
              <th>Etat</th>
              <th>Modifier</th>
              <th>Supprimer</th>
            </tr>
        </tfoot>
        <tbody>

        ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["references"]) ? $context["references"] : $this->getContext($context, "references")));
        foreach ($context['_seq'] as $context["_key"] => $context["reference"]) {
            // line 60
            echo "        <tr>
            <td>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["reference"], "id", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["reference"], "nomReference", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["reference"], "version", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["reference"], "designation", array()), "html", null, true);
            echo "

            <td>";
            // line 65
            if (($this->getAttribute($context["reference"], "etatReference", array()) == true)) {
                echo "<h4><span class=\"label label-success\">Active</span></h4> ";
            } else {
                echo "<h4><span class=\"label label-danger\">Inactive</span></h4>";
            }
            echo "</td>
            <td><form action=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gmao_moulage_modifier_reference", array("id" => $this->getAttribute($context["reference"], "id", array()))), "html", null, true);
            echo "\" method=\"post\" >
                  <button type=\"submit\" class=\"btn btn-warning\">
                    <span class=\"glyphicon glyphicon-edit\" aria-hidden=\"true\"></span>
                  </button>
                </form>
            </td>
            <td><form action=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gmao_moulage_supprimer_reference", array("id" => $this->getAttribute($context["reference"], "id", array()))), "html", null, true);
            echo "\" method=\"get\" >
                  <button type=\"submit\" class=\"btn btn-danger\">
                    <span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span>
                  </button>
                </form>
            </td>
        </tr>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reference'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "
        </tbody>
    </table>

      <center><div id=\"pag_reference_data1\"></div></center>

      <div id=\"form_num_page\">
        <form class=\"form-inline\" id=\"recherche_num_page\" action=\"";
        // line 88
        echo $this->env->getExtension('routing')->getPath("gmao_moulage_liste_reference", array("page" => 1));
        echo "\" method=\"post\">
          <div class=\"form-group\">
          <label for=\"pag\">Aller à la page</label>
          <input class=\"form-control\" id=\"pag\" name=\"pag\" placeholder=\"N°Page\"></input>
          </div>
          <button type=\"submit\" class=\"ui primary button\"><i class=\"glyphicon glyphicon-log-in\"></i></button>
        </form>
      </div>


";
        
        $__internal_380fd968e66a2e7184831e39099b4809001733727dff2116748eb2466a90c27c->leave($__internal_380fd968e66a2e7184831e39099b4809001733727dff2116748eb2466a90c27c_prof);

    }

    // line 101
    public function block_javascriptsss($context, array $blocks = array())
    {
        $__internal_f58b66315782e372671b26b2c13643b0ef5602daa6ca8f0ae9cc05de7b416aa5 = $this->env->getExtension("native_profiler");
        $__internal_f58b66315782e372671b26b2c13643b0ef5602daa6ca8f0ae9cc05de7b416aa5->enter($__internal_f58b66315782e372671b26b2c13643b0ef5602daa6ca8f0ae9cc05de7b416aa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascriptsss"));

        // line 102
        echo "
<script type='text/javascript'>
    var options = {
      currentPage: ";
        // line 105
        echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "html", null, true);
        echo ",
      totalPages: ";
        // line 106
        echo twig_escape_filter($this->env, (isset($context["nombrePage"]) ? $context["nombrePage"] : $this->getContext($context, "nombrePage")), "html", null, true);
        echo ",
      pageUrl: function(type, page, current){
          return \"";
        // line 108
        echo $this->env->getExtension('routing')->getPath("gmao_moulage_liste_reference", array("page" => 1));
        echo "/\"+page;
      }
    }
    \$('#pag_reference_data1').bootstrapPaginator(options);

</script>
";
        
        $__internal_f58b66315782e372671b26b2c13643b0ef5602daa6ca8f0ae9cc05de7b416aa5->leave($__internal_f58b66315782e372671b26b2c13643b0ef5602daa6ca8f0ae9cc05de7b416aa5_prof);

    }

    public function getTemplateName()
    {
        return "GmaoMoulageBundle:Reference:liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 108,  223 => 106,  219 => 105,  214 => 102,  208 => 101,  190 => 88,  181 => 81,  166 => 72,  157 => 66,  149 => 65,  144 => 63,  138 => 62,  134 => 61,  131 => 60,  127 => 59,  93 => 28,  83 => 20,  72 => 15,  67 => 12,  62 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends "GmaoMoulageBundle::layout.html.twig" %}*/
/* */
/* {% block tittle %}*/
/*   Liste - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/* */
/*       {# On affiche tous les messages flash dont le nom est « info » #}*/
/*       {% for message in app.session.flashbag.get('info') %}*/
/*       <div class="ui info message">*/
/*         <i class="close icon"></i>*/
/*         <div class="header">*/
/*           <p>Information : {{ message }}</p>*/
/*         </div>*/
/*       </div>*/
/* */
/*       {% endfor %}*/
/* */
/*       <br/>*/
/* */
/*   <div class="row">*/
/*     <div class="col-sm-10 col-md-10">*/
/*       <h2 class="ui dividing header">Liste des références</h2>*/
/*     </div>*/
/*     <div class="col-sm-2 col-md-2" style="align-right">*/
/*       <a class="ui primary button " href="{{ path('gmao_moulage_ajouter_reference') }}">*/
/*         <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>*/
/*           Ajouter une référence*/
/*       </a>*/
/*     </div>*/
/*   </div>*/
/* */
/* <br/>*/
/*   <table id="example" class="ui celled table">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id Référence</th>*/
/*                 <th>Référence - Version</th>*/
/*                 <th>Désignation</th>*/
/*                 <th>Etat</th>*/
/*                 <th>Modifier</th>*/
/*                 <th>Supprimer</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tfoot>*/
/*             <tr>*/
/*               <th>Id Référence</th>*/
/*               <th>Référence - Version</th>*/
/*               <th>Désignation</th>*/
/*               <th>Etat</th>*/
/*               <th>Modifier</th>*/
/*               <th>Supprimer</th>*/
/*             </tr>*/
/*         </tfoot>*/
/*         <tbody>*/
/* */
/*         {% for reference in references %}*/
/*         <tr>*/
/*             <td>{{ reference.id }}</td>*/
/*             <td>{{ reference.nomReference }} - {{ reference.version }}</td>*/
/*             <td>{{ reference.designation }}*/
/* */
/*             <td>{% if reference.etatReference == true %}<h4><span class="label label-success">Active</span></h4> {% else %}<h4><span class="label label-danger">Inactive</span></h4>{% endif %}</td>*/
/*             <td><form action="{{ path('gmao_moulage_modifier_reference', {'id': reference.id }) }}" method="post" >*/
/*                   <button type="submit" class="btn btn-warning">*/
/*                     <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>*/
/*                   </button>*/
/*                 </form>*/
/*             </td>*/
/*             <td><form action="{{ path('gmao_moulage_supprimer_reference', {'id': reference.id }) }}" method="get" >*/
/*                   <button type="submit" class="btn btn-danger">*/
/*                     <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>*/
/*                   </button>*/
/*                 </form>*/
/*             </td>*/
/*         </tr>*/
/* */
/*         {% endfor %}*/
/* */
/*         </tbody>*/
/*     </table>*/
/* */
/*       <center><div id="pag_reference_data1"></div></center>*/
/* */
/*       <div id="form_num_page">*/
/*         <form class="form-inline" id="recherche_num_page" action="{{ path('gmao_moulage_liste_reference', {'page': 1}) }}" method="post">*/
/*           <div class="form-group">*/
/*           <label for="pag">Aller à la page</label>*/
/*           <input class="form-control" id="pag" name="pag" placeholder="N°Page"></input>*/
/*           </div>*/
/*           <button type="submit" class="ui primary button"><i class="glyphicon glyphicon-log-in"></i></button>*/
/*         </form>*/
/*       </div>*/
/* */
/* */
/* {% endblock %}*/
/* */
/* */
/* {% block javascriptsss %}*/
/* */
/* <script type='text/javascript'>*/
/*     var options = {*/
/*       currentPage: {{page}},*/
/*       totalPages: {{nombrePage}},*/
/*       pageUrl: function(type, page, current){*/
/*           return "{{ path('gmao_moulage_liste_reference', {'page': 1}) }}/"+page;*/
/*       }*/
/*     }*/
/*     $('#pag_reference_data1').bootstrapPaginator(options);*/
/* */
/* </script>*/
/* {% endblock %}*/
/* */
