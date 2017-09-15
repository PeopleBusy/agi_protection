<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_d10ef154576083f4fe22fc05fefee129fcb7a484023ac45ede8f5cf12c7ec522 extends Twig_Template
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
        $__internal_038436316442a4db297343a1e797afbc3784645f5b83db0cbe40d6d975580e16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_038436316442a4db297343a1e797afbc3784645f5b83db0cbe40d6d975580e16->enter($__internal_038436316442a4db297343a1e797afbc3784645f5b83db0cbe40d6d975580e16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_08479d7ed9bd5c8a8415dbd593ce2698208190a5f75bfc89c7dabf5147f78de3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08479d7ed9bd5c8a8415dbd593ce2698208190a5f75bfc89c7dabf5147f78de3->enter($__internal_08479d7ed9bd5c8a8415dbd593ce2698208190a5f75bfc89c7dabf5147f78de3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_038436316442a4db297343a1e797afbc3784645f5b83db0cbe40d6d975580e16->leave($__internal_038436316442a4db297343a1e797afbc3784645f5b83db0cbe40d6d975580e16_prof);

        
        $__internal_08479d7ed9bd5c8a8415dbd593ce2698208190a5f75bfc89c7dabf5147f78de3->leave($__internal_08479d7ed9bd5c8a8415dbd593ce2698208190a5f75bfc89c7dabf5147f78de3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/home/rachid/Documents/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
