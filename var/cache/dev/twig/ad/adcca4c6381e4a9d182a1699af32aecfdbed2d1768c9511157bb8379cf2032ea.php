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
        $__internal_4921796e53098f45290a29763cd02396605e0d31e565ac0beb7227e37af34206 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4921796e53098f45290a29763cd02396605e0d31e565ac0beb7227e37af34206->enter($__internal_4921796e53098f45290a29763cd02396605e0d31e565ac0beb7227e37af34206_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_dc1725d4a179412727472fe8ac733947f8a74c1b992b1d4f5d59a9672b4b2d2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc1725d4a179412727472fe8ac733947f8a74c1b992b1d4f5d59a9672b4b2d2e->enter($__internal_dc1725d4a179412727472fe8ac733947f8a74c1b992b1d4f5d59a9672b4b2d2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_4921796e53098f45290a29763cd02396605e0d31e565ac0beb7227e37af34206->leave($__internal_4921796e53098f45290a29763cd02396605e0d31e565ac0beb7227e37af34206_prof);

        
        $__internal_dc1725d4a179412727472fe8ac733947f8a74c1b992b1d4f5d59a9672b4b2d2e->leave($__internal_dc1725d4a179412727472fe8ac733947f8a74c1b992b1d4f5d59a9672b4b2d2e_prof);

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
