<?php

/* /views/site/index.twig */
class __TwigTemplate_8cae0c4f4bcaab0ca987b33024bf007c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("views/layouts/basic.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "views/layouts/basic.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"container\">

      <div class=\"jumbotron\">
        <form method=\"POST\" action=\"/\">

            <div class=\"form-horizontal\">

                <h3>Order</h3>

                <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\">Amount</label>
                    <div class=\"col-sm-10\">
                        <div class=\"input-group\">
                            <input type=\"text\" name=\"amount\" class=\"form-control\" value=\"67\">
                            <div class=\"input-group-addon\">.00</div>
                        </div>
                    </div>
                </div>

                <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\">Currency</label>
                    <div class=\"col-sm-10\">
                        <select class=\"form-control\" name=\"currency\">
                            <option value=\"USD\">USD</option>
                            <option value=\"EUR\">EUR</option>
                            <option value=\"THB\">THB</option>
                            <option value=\"HKD\">HKD</option>
                            <option value=\"SGD\">SGD</option>
                            <option value=\"AUD\">AUD</option>
                        </select>
                    </div>
                </div>


                <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\">Your full name</label>
                    <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"customer_name\" class=\"form-control\" value=\"John Smith\">
                    </div>
                </div>

            </div> <!-- /form-inline -->


            <div class=\"form-horizontal\">
                <h3>Payment</h3>

                <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\">Cardholder name</label>
                    <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"cardholder_name\" class=\"form-control\" value=\"Mr Cardholder\">
                    </div>
                </div>


                <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\">Card number</label>
                    <div class=\"col-sm-10\">
                        <input type=\"text\"  name=\"card_number\" class=\"form-control\" value=\"4012888888881881\">
                    </div>
                </div>

                <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\">Card CCV</label>
                    <div class=\"col-sm-10\">
                        <input type=\"password\" name=\"card_ccv\" class=\"form-control\" value=\"123\">
                    </div>
                </div>


                <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\">Card expiration</label>
                    <div class=\"col-xs-2\">
                        <select class=\"form-control\" name=\"card_expiration_month\">
                            ";
        // line 78
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 79
            echo "                                <option value=\"";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 81
        echo "                        </select>
                    </div>
                    <div class=\"col-xs-2\">
                        <select class=\"form-control\" name=\"card_expiration_year\">
                            ";
        // line 85
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(2015, 2020));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 86
            echo "                                <option value=\"";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 88
        echo "                        </select>
                    </div>
                </div>

            </div> <!-- /form-inline -->

            <hr>

            <button type=\"submit\" class=\"btn btn-primary\">Submit</button>

        </form>
      </div>

    </div> <!-- /container -->
";
    }

    public function getTemplateName()
    {
        return "/views/site/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 88,  132 => 86,  128 => 85,  122 => 81,  111 => 79,  107 => 78,  31 => 4,  28 => 3,);
    }
}
