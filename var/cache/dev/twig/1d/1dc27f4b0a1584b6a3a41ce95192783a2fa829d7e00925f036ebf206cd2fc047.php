<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_344a65c33a9a0a13c872d86575993d0167f563202e0d515c5e8ab3cfe889c519 extends Twig_Template
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
        $__internal_504244994fa8caf778392498c84e5cc2cde918c162064f8db704c78e3d9e078e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_504244994fa8caf778392498c84e5cc2cde918c162064f8db704c78e3d9e078e->enter($__internal_504244994fa8caf778392498c84e5cc2cde918c162064f8db704c78e3d9e078e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_dbaa0a18b388bcb268d0974a493722a81ead9ea434d389ed8c5c6ffd8762b4e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbaa0a18b388bcb268d0974a493722a81ead9ea434d389ed8c5c6ffd8762b4e0->enter($__internal_dbaa0a18b388bcb268d0974a493722a81ead9ea434d389ed8c5c6ffd8762b4e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_504244994fa8caf778392498c84e5cc2cde918c162064f8db704c78e3d9e078e->leave($__internal_504244994fa8caf778392498c84e5cc2cde918c162064f8db704c78e3d9e078e_prof);

        
        $__internal_dbaa0a18b388bcb268d0974a493722a81ead9ea434d389ed8c5c6ffd8762b4e0->leave($__internal_dbaa0a18b388bcb268d0974a493722a81ead9ea434d389ed8c5c6ffd8762b4e0_prof);

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
