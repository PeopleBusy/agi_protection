<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_8347d7eaa36d0913200076e01b6246cbe20ddd7ebbe68dcf1125dd6e81d9e9ff extends Twig_Template
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
        $__internal_dac308ae1ce4a3fbfb622b39f74a1a07bdfa3f546ebff851ea82d7a397da23d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dac308ae1ce4a3fbfb622b39f74a1a07bdfa3f546ebff851ea82d7a397da23d6->enter($__internal_dac308ae1ce4a3fbfb622b39f74a1a07bdfa3f546ebff851ea82d7a397da23d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_843c87e8bc95b6ecca3a3bebd39f85a11c9060319bfb087effee4c28f610a155 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_843c87e8bc95b6ecca3a3bebd39f85a11c9060319bfb087effee4c28f610a155->enter($__internal_843c87e8bc95b6ecca3a3bebd39f85a11c9060319bfb087effee4c28f610a155_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_dac308ae1ce4a3fbfb622b39f74a1a07bdfa3f546ebff851ea82d7a397da23d6->leave($__internal_dac308ae1ce4a3fbfb622b39f74a1a07bdfa3f546ebff851ea82d7a397da23d6_prof);

        
        $__internal_843c87e8bc95b6ecca3a3bebd39f85a11c9060319bfb087effee4c28f610a155->leave($__internal_843c87e8bc95b6ecca3a3bebd39f85a11c9060319bfb087effee4c28f610a155_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/Users/rachid/Documents/Projet Client/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
