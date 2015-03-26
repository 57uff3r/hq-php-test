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
        ";
        // line 7
        if ((isset($context["result"]) ? $context["result"] : null)) {
            // line 8
            echo "            ";
            if (((isset($context["result"]) ? $context["result"] : null) == 1)) {
                // line 9
                echo "                <div class=\"alert alert-success\" role=\"alert\">You order successfully completed</div>
            ";
            } else {
                // line 11
                echo "                <div class=\"alert alert-danger\" role=\"alert\">Error! Your order hasn't completed</div>
            ";
            }
            // line 13
            echo "        ";
        }
        // line 14
        echo "
        <form method=\"POST\" action=\"/\">

            <div class=\"form-horizontal\">

                <h3>Order</h3>

                <div class=\"form-group";
        // line 21
        if ($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "amount")) {
            echo " has-error";
        }
        echo "\">
                    <label class=\"col-sm-2 control-label\">Amount</label>
                    <div class=\"col-sm-10\">
                        <div class=\"input-group\">
                            <input type=\"text\" name=\"amount\" class=\"form-control\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["values"]) ? $context["values"] : null), "amount"), "html", null, true);
        echo "\">
                            <div class=\"input-group-addon\">.00</div>
                        </div>

                        ";
        // line 29
        if ($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "amount")) {
            // line 30
            echo "                            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "amount"));
            foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
                // line 31
                echo "                                <span  class=\"help-block\">";
                echo twig_escape_filter($this->env, (isset($context["e"]) ? $context["e"] : null), "html", null, true);
                echo "</span>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 33
            echo "                        ";
        }
        // line 34
        echo "                    </div>
                </div>

                <div class=\"form-group";
        // line 37
        if ($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "currency")) {
            echo " has-error";
        }
        echo "\">
                    <label class=\"col-sm-2 control-label\">Currency</label>
                    <div class=\"col-sm-10\">
                        <select class=\"form-control\" name=\"currency\">
                            ";
        // line 41
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["currencies"]) ? $context["currencies"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 42
            echo "                                ";
            if (((isset($context["c"]) ? $context["c"] : null) == $this->getAttribute((isset($context["values"]) ? $context["values"] : null), "currency"))) {
                // line 43
                echo "                                    <option value=\"";
                echo twig_escape_filter($this->env, (isset($context["c"]) ? $context["c"] : null), "html", null, true);
                echo "\" selected>";
                echo twig_escape_filter($this->env, (isset($context["c"]) ? $context["c"] : null), "html", null, true);
                echo "</option>
                                ";
            } else {
                // line 45
                echo "                                    <option value=\"";
                echo twig_escape_filter($this->env, (isset($context["c"]) ? $context["c"] : null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["c"]) ? $context["c"] : null), "html", null, true);
                echo "</option>
                                ";
            }
            // line 47
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 48
        echo "                        </select>

                        ";
        // line 50
        if ($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "currency")) {
            // line 51
            echo "                            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "currency"));
            foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
                // line 52
                echo "                                <span  class=\"help-block\">";
                echo twig_escape_filter($this->env, (isset($context["e"]) ? $context["e"] : null), "html", null, true);
                echo "</span>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 54
            echo "                        ";
        }
        // line 55
        echo "
                    </div>
                </div>


                <div class=\"form-group";
        // line 60
        if ($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "customer_name")) {
            echo " has-error";
        }
        echo "\">
                    <label class=\"col-sm-2 control-label\">Your full name</label>
                    <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"customer_name\" class=\"form-control\" value=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["values"]) ? $context["values"] : null), "customer_name"), "html", null, true);
        echo "\">

                        ";
        // line 65
        if ($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "customer_name")) {
            // line 66
            echo "                            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "customer_name"));
            foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
                // line 67
                echo "                                <span  class=\"help-block\">";
                echo twig_escape_filter($this->env, (isset($context["e"]) ? $context["e"] : null), "html", null, true);
                echo "</span>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 69
            echo "                        ";
        }
        // line 70
        echo "                    </div>
                </div>

            </div> <!-- /form-inline -->


            <div class=\"form-horizontal\">
                <h3>Payment</h3>

                <div class=\"form-group";
        // line 79
        if ($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "cardholder_name")) {
            echo " has-error";
        }
        echo "\">
                    <label class=\"col-sm-2 control-label\">Cardholder name</label>
                    <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"cardholder_name\" class=\"form-control\" value=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["values"]) ? $context["values"] : null), "cardholder_name"), "html", null, true);
        echo "\">

                        ";
        // line 84
        if ($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "cardholder_name")) {
            // line 85
            echo "                            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "cardholder_name"));
            foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
                // line 86
                echo "                                <span  class=\"help-block\">";
                echo twig_escape_filter($this->env, (isset($context["e"]) ? $context["e"] : null), "html", null, true);
                echo "</span>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 88
            echo "                        ";
        }
        // line 89
        echo "                    </div>
                </div>


                <div class=\"form-group";
        // line 93
        if ($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "card_number")) {
            echo " has-error";
        }
        echo "\">
                    <label class=\"col-sm-2 control-label\">Card number</label>
                    <div class=\"col-sm-10\">
                        <input type=\"text\"  name=\"card_number\" class=\"form-control\" value=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["values"]) ? $context["values"] : null), "card_number"), "html", null, true);
        echo "\">

                        ";
        // line 98
        if ($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "card_number")) {
            // line 99
            echo "                            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "card_number"));
            foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
                // line 100
                echo "                                <span  class=\"help-block\">";
                echo twig_escape_filter($this->env, (isset($context["e"]) ? $context["e"] : null), "html", null, true);
                echo "</span>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 102
            echo "                        ";
        }
        // line 103
        echo "
                    </div>
                </div>

                <div class=\"form-group";
        // line 107
        if ($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "card_ccv")) {
            echo " has-error";
        }
        echo "\">
                    <label class=\"col-sm-2 control-label\">Card CCV</label>
                    <div class=\"col-sm-10\">
                        <input type=\"password\" name=\"card_ccv\" class=\"form-control\" value=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["values"]) ? $context["values"] : null), "card_ccv"), "html", null, true);
        echo "\">

                        ";
        // line 112
        if ($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "card_ccv")) {
            // line 113
            echo "                            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "card_ccv"));
            foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
                // line 114
                echo "                                <span  class=\"help-block\">";
                echo twig_escape_filter($this->env, (isset($context["e"]) ? $context["e"] : null), "html", null, true);
                echo "</span>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 116
            echo "                        ";
        }
        // line 117
        echo "
                    </div>
                </div>


                <div class=\"form-group";
        // line 122
        if ($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "card_expiration")) {
            echo " has-error";
        }
        echo "\">
                    <label class=\"col-sm-2 control-label\">Card expiration</label>
                    <div class=\"col-xs-5\">
                        <select class=\"form-control\" name=\"card_expiration_month\">
                            ";
        // line 126
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 127
            echo "                                ";
            if (((isset($context["i"]) ? $context["i"] : null) == $this->getAttribute((isset($context["values"]) ? $context["values"] : null), "card_expiration_month"))) {
                // line 128
                echo "                                    <option value=\"";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
                echo "\" selected>";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
                echo "</option>
                                ";
            } else {
                // line 130
                echo "                                    <option value=\"";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
                echo "</option>
                                ";
            }
            // line 132
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 133
        echo "                        </select>
                    </div>

                    <div class=\"col-xs-5\">
                        <select class=\"form-control\" name=\"card_expiration_year\">
                            ";
        // line 138
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(2015, 2020));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 139
            echo "                                ";
            if (((isset($context["i"]) ? $context["i"] : null) == $this->getAttribute((isset($context["values"]) ? $context["values"] : null), "card_expiration_year"))) {
                // line 140
                echo "                                    <option value=\"";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
                echo "\" selected>";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
                echo "</option>
                                ";
            } else {
                // line 142
                echo "                                    <option value=\"";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
                echo "</option>
                                ";
            }
            // line 144
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 145
        echo "                        </select>


                        ";
        // line 148
        if ($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "card_expiration")) {
            // line 149
            echo "                            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["errors"]) ? $context["errors"] : null), "card_expiration"));
            foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
                // line 150
                echo "                                <span  class=\"help-block\">";
                echo twig_escape_filter($this->env, (isset($context["e"]) ? $context["e"] : null), "html", null, true);
                echo "</span>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 152
            echo "                        ";
        }
        // line 153
        echo "                    </div>

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
        return array (  425 => 153,  422 => 152,  413 => 150,  408 => 149,  406 => 148,  401 => 145,  395 => 144,  387 => 142,  379 => 140,  376 => 139,  372 => 138,  365 => 133,  359 => 132,  351 => 130,  343 => 128,  340 => 127,  336 => 126,  327 => 122,  320 => 117,  317 => 116,  308 => 114,  303 => 113,  301 => 112,  296 => 110,  288 => 107,  282 => 103,  279 => 102,  270 => 100,  265 => 99,  263 => 98,  258 => 96,  250 => 93,  244 => 89,  241 => 88,  232 => 86,  227 => 85,  225 => 84,  220 => 82,  212 => 79,  201 => 70,  198 => 69,  189 => 67,  184 => 66,  182 => 65,  177 => 63,  169 => 60,  162 => 55,  159 => 54,  150 => 52,  145 => 51,  143 => 50,  139 => 48,  133 => 47,  125 => 45,  117 => 43,  114 => 42,  110 => 41,  101 => 37,  96 => 34,  93 => 33,  84 => 31,  79 => 30,  77 => 29,  70 => 25,  61 => 21,  52 => 14,  49 => 13,  45 => 11,  41 => 9,  38 => 8,  36 => 7,  31 => 4,  28 => 3,);
    }
}
