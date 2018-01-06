<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_274fddf7edde623788af8e77a6e37ed9dfb84b50a8f7ef6c92587327a9c69f7c extends Twig_Template
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
        $__internal_cc3885596f7b5431a77d43df5f87d37caab211cbef4974bbcacdff77116e6704 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc3885596f7b5431a77d43df5f87d37caab211cbef4974bbcacdff77116e6704->enter($__internal_cc3885596f7b5431a77d43df5f87d37caab211cbef4974bbcacdff77116e6704_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_4434f34e0213c236e12b504326a3e2d888bb78634e1dc7591f64c47b71b2dbff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4434f34e0213c236e12b504326a3e2d888bb78634e1dc7591f64c47b71b2dbff->enter($__internal_4434f34e0213c236e12b504326a3e2d888bb78634e1dc7591f64c47b71b2dbff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_cc3885596f7b5431a77d43df5f87d37caab211cbef4974bbcacdff77116e6704->leave($__internal_cc3885596f7b5431a77d43df5f87d37caab211cbef4974bbcacdff77116e6704_prof);

        
        $__internal_4434f34e0213c236e12b504326a3e2d888bb78634e1dc7591f64c47b71b2dbff->leave($__internal_4434f34e0213c236e12b504326a3e2d888bb78634e1dc7591f64c47b71b2dbff_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/Users/Rachid/SymfonyProjects/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
