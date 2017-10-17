<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_74dbdc65411cb5beb07ae33382bbae1a5b57ebd1f177c28d715da8705b1244a9 extends Twig_Template
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
        $__internal_05653074e37ad75859aa3b020455befe5785adf85a2d7f196bd2dbc05f82b9cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05653074e37ad75859aa3b020455befe5785adf85a2d7f196bd2dbc05f82b9cc->enter($__internal_05653074e37ad75859aa3b020455befe5785adf85a2d7f196bd2dbc05f82b9cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_7398a2ecc5202d1d6fd2915e6dc213640844e00d180eb8e9cd8a109e660b5e83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7398a2ecc5202d1d6fd2915e6dc213640844e00d180eb8e9cd8a109e660b5e83->enter($__internal_7398a2ecc5202d1d6fd2915e6dc213640844e00d180eb8e9cd8a109e660b5e83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_05653074e37ad75859aa3b020455befe5785adf85a2d7f196bd2dbc05f82b9cc->leave($__internal_05653074e37ad75859aa3b020455befe5785adf85a2d7f196bd2dbc05f82b9cc_prof);

        
        $__internal_7398a2ecc5202d1d6fd2915e6dc213640844e00d180eb8e9cd8a109e660b5e83->leave($__internal_7398a2ecc5202d1d6fd2915e6dc213640844e00d180eb8e9cd8a109e660b5e83_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/Users/rachid/Documents/Projet Client/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
