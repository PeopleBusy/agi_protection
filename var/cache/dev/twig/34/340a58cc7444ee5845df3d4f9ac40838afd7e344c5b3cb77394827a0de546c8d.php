<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_69787b8f45555631b7dd60dddf820b29a6106424c88235bb45364dc950e1a374 extends Twig_Template
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
        $__internal_ad2ba905d2a6d82eb2cc39cace15cb5ed8ab775eef909776fa03beca7207f3da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad2ba905d2a6d82eb2cc39cace15cb5ed8ab775eef909776fa03beca7207f3da->enter($__internal_ad2ba905d2a6d82eb2cc39cace15cb5ed8ab775eef909776fa03beca7207f3da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_44b190e5ce4c74a5561f859bcbfcc6ec2b05f9b42c22bc22e0b7822d1f3d4356 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44b190e5ce4c74a5561f859bcbfcc6ec2b05f9b42c22bc22e0b7822d1f3d4356->enter($__internal_44b190e5ce4c74a5561f859bcbfcc6ec2b05f9b42c22bc22e0b7822d1f3d4356_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_ad2ba905d2a6d82eb2cc39cace15cb5ed8ab775eef909776fa03beca7207f3da->leave($__internal_ad2ba905d2a6d82eb2cc39cace15cb5ed8ab775eef909776fa03beca7207f3da_prof);

        
        $__internal_44b190e5ce4c74a5561f859bcbfcc6ec2b05f9b42c22bc22e0b7822d1f3d4356->leave($__internal_44b190e5ce4c74a5561f859bcbfcc6ec2b05f9b42c22bc22e0b7822d1f3d4356_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/home/rachid/Documents/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
