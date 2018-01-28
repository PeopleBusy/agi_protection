<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_461fed3294067ab5e7373a8b92cedc12b6e83b899d945e51b07a6e0df96844d6 extends Twig_Template
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
        $__internal_7c879242d09b74922a1712d57fe694e31f9667af90015640fd2f5011937d03fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c879242d09b74922a1712d57fe694e31f9667af90015640fd2f5011937d03fb->enter($__internal_7c879242d09b74922a1712d57fe694e31f9667af90015640fd2f5011937d03fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_b27a2d4d05ea66dc8989cb3af169a1c22ec179dcf85d6d2bc57091defa8368db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b27a2d4d05ea66dc8989cb3af169a1c22ec179dcf85d6d2bc57091defa8368db->enter($__internal_b27a2d4d05ea66dc8989cb3af169a1c22ec179dcf85d6d2bc57091defa8368db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_7c879242d09b74922a1712d57fe694e31f9667af90015640fd2f5011937d03fb->leave($__internal_7c879242d09b74922a1712d57fe694e31f9667af90015640fd2f5011937d03fb_prof);

        
        $__internal_b27a2d4d05ea66dc8989cb3af169a1c22ec179dcf85d6d2bc57091defa8368db->leave($__internal_b27a2d4d05ea66dc8989cb3af169a1c22ec179dcf85d6d2bc57091defa8368db_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/Users/Rachid/SymfonyProjects/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
