<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_8f5a1447cb550b0ad5da73cce4f8d57a7c802346ccd3baaa1351c680944f9add extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_02f68b83f751a17aabb832eef2374cb17d626c614c5c40027f9fb1290811a0be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02f68b83f751a17aabb832eef2374cb17d626c614c5c40027f9fb1290811a0be->enter($__internal_02f68b83f751a17aabb832eef2374cb17d626c614c5c40027f9fb1290811a0be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_f7486f4ff652e667c0410271147dabb8d93091faccd9fe990b8e2c4020177148 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7486f4ff652e667c0410271147dabb8d93091faccd9fe990b8e2c4020177148->enter($__internal_f7486f4ff652e667c0410271147dabb8d93091faccd9fe990b8e2c4020177148_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_02f68b83f751a17aabb832eef2374cb17d626c614c5c40027f9fb1290811a0be->leave($__internal_02f68b83f751a17aabb832eef2374cb17d626c614c5c40027f9fb1290811a0be_prof);

        
        $__internal_f7486f4ff652e667c0410271147dabb8d93091faccd9fe990b8e2c4020177148->leave($__internal_f7486f4ff652e667c0410271147dabb8d93091faccd9fe990b8e2c4020177148_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/home/rachid/Documents/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
