<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_9ec463a5141422177decfe70c9e2421022bc554f5e1b060402d014ad6f52df54 extends Twig_Template
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
        $__internal_292a4dc58fba7ce60d7a0acef92152a47ba353ac392ee6cc5e6311ae2e621d0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_292a4dc58fba7ce60d7a0acef92152a47ba353ac392ee6cc5e6311ae2e621d0e->enter($__internal_292a4dc58fba7ce60d7a0acef92152a47ba353ac392ee6cc5e6311ae2e621d0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_e6e7de15604e12c2dced860a2e80f53b96bd5d5290b5e859a5f4a1b6c9241b2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6e7de15604e12c2dced860a2e80f53b96bd5d5290b5e859a5f4a1b6c9241b2e->enter($__internal_e6e7de15604e12c2dced860a2e80f53b96bd5d5290b5e859a5f4a1b6c9241b2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_292a4dc58fba7ce60d7a0acef92152a47ba353ac392ee6cc5e6311ae2e621d0e->leave($__internal_292a4dc58fba7ce60d7a0acef92152a47ba353ac392ee6cc5e6311ae2e621d0e_prof);

        
        $__internal_e6e7de15604e12c2dced860a2e80f53b96bd5d5290b5e859a5f4a1b6c9241b2e->leave($__internal_e6e7de15604e12c2dced860a2e80f53b96bd5d5290b5e859a5f4a1b6c9241b2e_prof);

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
", "@Framework/Form/textarea_widget.html.php", "/home/rachid/Documents/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
