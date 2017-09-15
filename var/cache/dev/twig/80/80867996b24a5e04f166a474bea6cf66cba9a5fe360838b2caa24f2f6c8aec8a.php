<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_18d8f4dc70a3461eb1fc6b2488827de0fd4d774415f7de8b3b067e98712dc6c3 extends Twig_Template
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
        $__internal_a5348e8d75a609f26d4a8c26fcd49ba39ae4599b96862a286a0b7e7130479ef6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5348e8d75a609f26d4a8c26fcd49ba39ae4599b96862a286a0b7e7130479ef6->enter($__internal_a5348e8d75a609f26d4a8c26fcd49ba39ae4599b96862a286a0b7e7130479ef6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_07bc9a81cc8438a497644667bafe4b5a91399d77671e40b100df8c4df4eca0fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07bc9a81cc8438a497644667bafe4b5a91399d77671e40b100df8c4df4eca0fe->enter($__internal_07bc9a81cc8438a497644667bafe4b5a91399d77671e40b100df8c4df4eca0fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_a5348e8d75a609f26d4a8c26fcd49ba39ae4599b96862a286a0b7e7130479ef6->leave($__internal_a5348e8d75a609f26d4a8c26fcd49ba39ae4599b96862a286a0b7e7130479ef6_prof);

        
        $__internal_07bc9a81cc8438a497644667bafe4b5a91399d77671e40b100df8c4df4eca0fe->leave($__internal_07bc9a81cc8438a497644667bafe4b5a91399d77671e40b100df8c4df4eca0fe_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/home/rachid/Documents/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
