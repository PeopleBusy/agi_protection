<?php

/* AgiBundle:Default/agent:new.html.twig */
class __TwigTemplate_217f8c9812c179a0d7aa34d69cd63fef9b996e7f33eaac436e30e5a6f3603209 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AgiBundle:Default/agent:new.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_40e8a0062f38cb7e42709a04b438de3dc1845bc0d1aa371941f74b306cf99d5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40e8a0062f38cb7e42709a04b438de3dc1845bc0d1aa371941f74b306cf99d5c->enter($__internal_40e8a0062f38cb7e42709a04b438de3dc1845bc0d1aa371941f74b306cf99d5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AgiBundle:Default/agent:new.html.twig"));

        $__internal_28c290dd8d163b8c35610b5dc9f035f942ff709946c3de98740d6d78b82637c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28c290dd8d163b8c35610b5dc9f035f942ff709946c3de98740d6d78b82637c5->enter($__internal_28c290dd8d163b8c35610b5dc9f035f942ff709946c3de98740d6d78b82637c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AgiBundle:Default/agent:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_40e8a0062f38cb7e42709a04b438de3dc1845bc0d1aa371941f74b306cf99d5c->leave($__internal_40e8a0062f38cb7e42709a04b438de3dc1845bc0d1aa371941f74b306cf99d5c_prof);

        
        $__internal_28c290dd8d163b8c35610b5dc9f035f942ff709946c3de98740d6d78b82637c5->leave($__internal_28c290dd8d163b8c35610b5dc9f035f942ff709946c3de98740d6d78b82637c5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_143dce93481622c4b0036679bf2cc3ba1f38f8f0c61f4554e7f0b66c0141bfed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_143dce93481622c4b0036679bf2cc3ba1f38f8f0c61f4554e7f0b66c0141bfed->enter($__internal_143dce93481622c4b0036679bf2cc3ba1f38f8f0c61f4554e7f0b66c0141bfed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8b6142ca427d02c436267e402664ece3c292c286eb0031a7e029bbb03e58e02f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b6142ca427d02c436267e402664ece3c292c286eb0031a7e029bbb03e58e02f->enter($__internal_8b6142ca427d02c436267e402664ece3c292c286eb0031a7e029bbb03e58e02f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Ajouter agent ";
        
        $__internal_8b6142ca427d02c436267e402664ece3c292c286eb0031a7e029bbb03e58e02f->leave($__internal_8b6142ca427d02c436267e402664ece3c292c286eb0031a7e029bbb03e58e02f_prof);

        
        $__internal_143dce93481622c4b0036679bf2cc3ba1f38f8f0c61f4554e7f0b66c0141bfed->leave($__internal_143dce93481622c4b0036679bf2cc3ba1f38f8f0c61f4554e7f0b66c0141bfed_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_43fa82d82395959f6d486b3a912ba588446958019b845ffa24f25e372c96ca89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43fa82d82395959f6d486b3a912ba588446958019b845ffa24f25e372c96ca89->enter($__internal_43fa82d82395959f6d486b3a912ba588446958019b845ffa24f25e372c96ca89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1c9b0b17111d5ced6edc9c1bc8bd6390ccf2c2707b0d89b055a88d19183d2007 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c9b0b17111d5ced6edc9c1bc8bd6390ccf2c2707b0d89b055a88d19183d2007->enter($__internal_1c9b0b17111d5ced6edc9c1bc8bd6390ccf2c2707b0d89b055a88d19183d2007_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
        <h1>
            <small></small>
        </h1>
        <ol class=\"breadcrumb\">
            <li><a href=\"#\"><i class=\"fa fa-user\"></i> Agents</a></li>
            <li class=\"active\">Enregistrer</li>
        </ol>

        ";
        // line 17
        if (array_key_exists("erreur", $context)) {
            // line 18
            echo "
            <div class=\"row\">
                <div class=\"col-md-3\"></div>
                <div class=\"col-md-6\">
                    <div class=\"box box-danger box-solid\" style=\"margin-bottom: 0px;\">
                        <div class=\"box-header with-border\">
                            <h3 class=\"box-title\">Erreur</h3>

                            <div class=\"box-tools pull-right\">
                                <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"remove\"><i class=\"fa fa-times\"></i></button>
                            </div>
                            <!-- /.box-tools -->
                        </div>
                        <!-- /.box-header -->
                        <div class=\"box-body\">
                            ";
            // line 33
            echo twig_escape_filter($this->env, ($context["erreur"] ?? $this->getContext($context, "erreur")), "html", null, true);
            echo "
                        </div>
                        <!-- /.box-body -->
                    </div>
                </div>
            </div>

        ";
        }
        // line 41
        echo "
        ";
        // line 42
        if (array_key_exists("success", $context)) {
            // line 43
            echo "
            <div class=\"row\">
                <div class=\"col-md-3\"></div>
                <div class=\"col-md-6\">
                    <div class=\"box box-success box-solid\" style=\"margin-bottom: 0px;\">
                        <div class=\"box-header with-border\">
                            <h3 class=\"box-title\">Succès</h3>

                            <div class=\"box-tools pull-right\">
                                <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"remove\"><i class=\"fa fa-times\"></i></button>
                            </div>
                            <!-- /.box-tools -->
                        </div>
                        <!-- /.box-header -->
                        <div class=\"box-body\">
                            ";
            // line 58
            echo twig_escape_filter($this->env, ($context["success"] ?? $this->getContext($context, "success")), "html", null, true);
            echo "
                        </div>
                        <!-- /.box-body -->
                    </div>
                </div>
            </div>

        ";
        }
        // line 66
        echo "
    </section>


    <section class=\"content\">


        <div class=\"box\">
            <div class=\"box-header with-border\">
                <h3 class=\"box-title\">
                    <i class=\"fa fa-user\"></i>
                    Enregistrer un agent
                </h3>

                <div class=\"box-tools pull-right\">
                    <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"collapse\" data-toggle=\"tooltip\" title=\"Collapse\">
                        <i class=\"fa fa-minus\"></i></button>
                    <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"remove\" data-toggle=\"tooltip\" title=\"Remove\">
                        <i class=\"fa fa-times\"></i></button>
                </div>
            </div>
            <div class=\"box-body\">

                ";
        // line 89
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "

                <div class=\"form-group col-md-2\">
                    ";
        // line 92
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", array()), 'row');
        echo "
                </div>
                <div class=\"form-group col-md-2\">
                    ";
        // line 95
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prenom", array()), 'row');
        echo "
                </div>
                <div class=\"form-group col-md-2\">
                    ";
        // line 98
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "telephone", array()), 'row');
        echo "
                </div>
                <div class=\"form-group col-md-1\">
                    ";
        // line 101
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "typeContrat", array()), 'row');
        echo "
                </div>
                <div class=\"form-group col-md-2 div_datecontrat\" id=\"div_datedebut\">
                    <label>Date début du contrat:</label>
                    <div class=\"input-group date\">
                        <div class=\"input-group-addon\">
                            <i class=\"fa fa-calendar\"></i>
                        </div>
                        <input type=\"text\" name=\"date_debut\" class=\"form-control pull-right\" id=\"datepicker1\">
                    </div>
                </div>
                <div class=\"form-group col-md-2 div_datecontrat\" id=\"div_datefin\">
                    <label>Date fin du contrat:</label>
                    <div class=\"input-group date\">
                        <div class=\"input-group-addon\">
                            <i class=\"fa fa-calendar\"></i>
                        </div>
                        <input type=\"text\" name=\"date_fin\" class=\"form-control pull-right\" id=\"datepicker2\">
                    </div>
                </div>
                <div class=\"form-group col-md-2 hide\" id=\"div_date_embauche\">
                    <label>Date d'embauche:</label>
                    <div class=\"input-group date\">
                        <div class=\"input-group-addon\">
                            <i class=\"fa fa-calendar\"></i>
                        </div>
                        <input type=\"text\" name=\"date_embauche\" class=\"form-control pull-right\" id=\"datepicker3\">
                    </div>
                </div>
                <div class=\"form-group col-md-1\">
                    <button type=\"submit\" class=\"btn btn-danger marTop25px\">Enregistrer</button>
                </div>

                ";
        // line 134
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "


            </div>
            <!-- /.box-body -->
            <div class=\"box-footer\">
                ";
        // line 141
        echo "            </div>
            <!-- /.box-footer-->
        </div>
    </section>

";
        
        $__internal_1c9b0b17111d5ced6edc9c1bc8bd6390ccf2c2707b0d89b055a88d19183d2007->leave($__internal_1c9b0b17111d5ced6edc9c1bc8bd6390ccf2c2707b0d89b055a88d19183d2007_prof);

        
        $__internal_43fa82d82395959f6d486b3a912ba588446958019b845ffa24f25e372c96ca89->leave($__internal_43fa82d82395959f6d486b3a912ba588446958019b845ffa24f25e372c96ca89_prof);

    }

    public function getTemplateName()
    {
        return "AgiBundle:Default/agent:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 141,  229 => 134,  193 => 101,  187 => 98,  181 => 95,  175 => 92,  169 => 89,  144 => 66,  133 => 58,  116 => 43,  114 => 42,  111 => 41,  100 => 33,  83 => 18,  81 => 17,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

{% block title %} Ajouter agent {% endblock %}

{% block body %}

    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
        <h1>
            <small></small>
        </h1>
        <ol class=\"breadcrumb\">
            <li><a href=\"#\"><i class=\"fa fa-user\"></i> Agents</a></li>
            <li class=\"active\">Enregistrer</li>
        </ol>

        {% if erreur is defined %}

            <div class=\"row\">
                <div class=\"col-md-3\"></div>
                <div class=\"col-md-6\">
                    <div class=\"box box-danger box-solid\" style=\"margin-bottom: 0px;\">
                        <div class=\"box-header with-border\">
                            <h3 class=\"box-title\">Erreur</h3>

                            <div class=\"box-tools pull-right\">
                                <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"remove\"><i class=\"fa fa-times\"></i></button>
                            </div>
                            <!-- /.box-tools -->
                        </div>
                        <!-- /.box-header -->
                        <div class=\"box-body\">
                            {{ erreur }}
                        </div>
                        <!-- /.box-body -->
                    </div>
                </div>
            </div>

        {% endif %}

        {% if success is defined  %}

            <div class=\"row\">
                <div class=\"col-md-3\"></div>
                <div class=\"col-md-6\">
                    <div class=\"box box-success box-solid\" style=\"margin-bottom: 0px;\">
                        <div class=\"box-header with-border\">
                            <h3 class=\"box-title\">Succès</h3>

                            <div class=\"box-tools pull-right\">
                                <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"remove\"><i class=\"fa fa-times\"></i></button>
                            </div>
                            <!-- /.box-tools -->
                        </div>
                        <!-- /.box-header -->
                        <div class=\"box-body\">
                            {{ success }}
                        </div>
                        <!-- /.box-body -->
                    </div>
                </div>
            </div>

        {% endif %}

    </section>


    <section class=\"content\">


        <div class=\"box\">
            <div class=\"box-header with-border\">
                <h3 class=\"box-title\">
                    <i class=\"fa fa-user\"></i>
                    Enregistrer un agent
                </h3>

                <div class=\"box-tools pull-right\">
                    <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"collapse\" data-toggle=\"tooltip\" title=\"Collapse\">
                        <i class=\"fa fa-minus\"></i></button>
                    <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"remove\" data-toggle=\"tooltip\" title=\"Remove\">
                        <i class=\"fa fa-times\"></i></button>
                </div>
            </div>
            <div class=\"box-body\">

                {{ form_start(form) }}

                <div class=\"form-group col-md-2\">
                    {{ form_row(form.nom) }}
                </div>
                <div class=\"form-group col-md-2\">
                    {{ form_row(form.prenom) }}
                </div>
                <div class=\"form-group col-md-2\">
                    {{ form_row(form.telephone) }}
                </div>
                <div class=\"form-group col-md-1\">
                    {{ form_row(form.typeContrat) }}
                </div>
                <div class=\"form-group col-md-2 div_datecontrat\" id=\"div_datedebut\">
                    <label>Date début du contrat:</label>
                    <div class=\"input-group date\">
                        <div class=\"input-group-addon\">
                            <i class=\"fa fa-calendar\"></i>
                        </div>
                        <input type=\"text\" name=\"date_debut\" class=\"form-control pull-right\" id=\"datepicker1\">
                    </div>
                </div>
                <div class=\"form-group col-md-2 div_datecontrat\" id=\"div_datefin\">
                    <label>Date fin du contrat:</label>
                    <div class=\"input-group date\">
                        <div class=\"input-group-addon\">
                            <i class=\"fa fa-calendar\"></i>
                        </div>
                        <input type=\"text\" name=\"date_fin\" class=\"form-control pull-right\" id=\"datepicker2\">
                    </div>
                </div>
                <div class=\"form-group col-md-2 hide\" id=\"div_date_embauche\">
                    <label>Date d'embauche:</label>
                    <div class=\"input-group date\">
                        <div class=\"input-group-addon\">
                            <i class=\"fa fa-calendar\"></i>
                        </div>
                        <input type=\"text\" name=\"date_embauche\" class=\"form-control pull-right\" id=\"datepicker3\">
                    </div>
                </div>
                <div class=\"form-group col-md-1\">
                    <button type=\"submit\" class=\"btn btn-danger marTop25px\">Enregistrer</button>
                </div>

                {{ form_end(form) }}


            </div>
            <!-- /.box-body -->
            <div class=\"box-footer\">
                {#Footer#}
            </div>
            <!-- /.box-footer-->
        </div>
    </section>

{% endblock %}", "AgiBundle:Default/agent:new.html.twig", "/Users/Rachid/SymfonyProjects/agi_protection/src/AgiBundle/Resources/views/Default/agent/new.html.twig");
    }
}
