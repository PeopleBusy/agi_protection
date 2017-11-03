<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_2841a9545972d57844bf202778529ad23c85d7d5416888efed75b9baab47a3ad extends Twig_Template
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
        $__internal_c8dbd57bfead760cab3547f63a665da9435a391894296ef1c039931d29a78599 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8dbd57bfead760cab3547f63a665da9435a391894296ef1c039931d29a78599->enter($__internal_c8dbd57bfead760cab3547f63a665da9435a391894296ef1c039931d29a78599_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_3d4bc2a948513f4182c26b5371239c303c8940997104237b9dfce18b4cfd387c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d4bc2a948513f4182c26b5371239c303c8940997104237b9dfce18b4cfd387c->enter($__internal_3d4bc2a948513f4182c26b5371239c303c8940997104237b9dfce18b4cfd387c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_c8dbd57bfead760cab3547f63a665da9435a391894296ef1c039931d29a78599->leave($__internal_c8dbd57bfead760cab3547f63a665da9435a391894296ef1c039931d29a78599_prof);

        
        $__internal_3d4bc2a948513f4182c26b5371239c303c8940997104237b9dfce18b4cfd387c->leave($__internal_3d4bc2a948513f4182c26b5371239c303c8940997104237b9dfce18b4cfd387c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/Users/rachid/Documents/Projet Client/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
