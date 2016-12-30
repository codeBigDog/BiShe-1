<!Doctype>
<head>
    <meta charset='utf-8'>
    <meta content='IE=edge,chrome=1' http-equiv='X-UA-Compatible'>
    <title>Graduation Design</title>
    <meta content='lab2023' name='author'>
    <meta content='' name='description'>
    <meta content='' name='keywords'>
    <link rel="stylesheet" href="<?= $base_url ?>bishe/user_guide/_static/css/bootstrap.min.css">
    <link href="<?= $base_url ?>bishe/user_guide/_static/css/application-a07755f5.css" rel="stylesheet"
          type="text/css"/>
    <link href="<?= $base_url ?>bishe/user_guide/_static/css/font-awesome.min.css" rel="stylesheet"
          type="text/css"/>

</head>
<!-- Content -->
<div id='content'>

    <div id='content'>
        <div class='panel panel-default'>
            <div class='panel-heading'>
                <i class='icon-edit icon-large'></i>
                Upload Files
            </div>

            <div class='panel-body'>
                <form>
                    <fieldset>
                        <!--<legend>Default Inputs</legend>
                        <div class='form-group'>
                            <label class='control-label'>Text field</label>
                            <input class='form-control' placeholder='Enter username' type='text'>
                        </div>
                        <div class='form-group'>
                            <label class='control-label'>Password field</label>
                            <input class='form-control' placeholder='Enter password' type='password'>
                        </div>
                        <div class='form-group'>
                            <label class='control-label'>Input field with help</label>
                            <input class='form-control' placeholder='.help-block'>
                            <p class='help-block'>Example block-level help text here.</p>
                        </div>
                        <div class='form-group'>
                            <label class='control-label'>Disabled field</label>
                            <input class='form-control' disabled placeholder='This is field is disabled!'>
                        </div>
                        <div class='form-group'>
                            <label class='control-label'>Tooltip field</label>
                            <input class='form-control' data-toggle='tooltip' placeholder='This is field is disabled!' title='Input tips here'>
                        </div>
                        <div class='form-group'>
                            <label class='control-label'>Textarea field</label>
                            <textarea class='form-control' rows='4'></textarea>
                        </div>-->

                        <div class='form-group'>
                            <label class='control-label' >File input</label>
                            <input type='file'>
                        </div>

                        <!--<div class='form-group'>
                            <label class='control-label'>Large field</label>
                            <input class='form-control input-lg' placeholder='.input-lg' type='text'>
                        </div>
                        <div class='form-group'>
                            <label class='control-label'>Small field</label>
                            <input class='form-control input-sm' placeholder='.input-sm' type='text'>
                        </div>
                        <div class='form-group row'>
                            <div class='col-lg-2'>
                                <label class='control-label'>Column sizing</label>
                                <input class='form-control' placeholder='.col-lg-2' type='text'>
                            </div>
                            <div class='col-lg-3'>
                                <label class='control-label'>Column sizing</label>
                                <input class='form-control' placeholder='.col-lg-3' type='text'>
                            </div>
                            <div class='col-lg-7'>
                                <label class='control-label'>Column sizing</label>
                                <input class='form-control' placeholder='.col-lg-7' type='text'>
                            </div>
                        </div>-->
                    </fieldset>


                    <!--<fieldset>
                        <legend>Input Validation States</legend>
                        <div class='form-group has-warning'>
                            <label class='control-label'>Input field with help</label>
                            <input class='form-control' placeholder='.has-warning'>
                            <p class='help-block'>Example block-level help text here.</p>
                        </div>
                        <div class='form-group has-error'>
                            <label class='control-label'>Input field with help</label>
                            <input class='form-control' placeholder='.has-error'>
                            <p class='help-block'>Example block-level help text here.</p>
                        </div>
                        <div class='form-group has-success'>
                            <label class='control-label'>Input field with help</label>
                            <input class='form-control' placeholder='.has-success'>
                            <p class='help-block'>Example block-level help text here.</p>
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend>Checkboxes and radios</legend>
                        <div class='form-group'>
                            <label class='control-label'>Checkbox</label>
                            <div class='checkbox'>
                                <input type='checkbox' value=''>
                                Option one is this and that&mdash;be sure to include why it's great
                            </div>
                        </div>
                        <div class='form-group'>
                            <label class='control-label'>Inline checkbox</label>
                            <br>
                            <div class='checkbox-inline'>
                                <input type='checkbox' value=''>
                                1
                            </div>
                            <div class='checkbox-inline'>
                                <input type='checkbox' value=''>
                                2
                            </div>
                            <div class='checkbox-inline'>
                                <input type='checkbox' value=''>
                                3
                            </div>
                        </div>
                        <div class='form-group'>
                            <label class='control-label'>Radio</label>
                            <div class='radio'>
                                <input checked name='options_radio' type='radio' value='option1'>
                                Option one is this and that&mdash;be sure to include why it's great
                                <br>
                                <input checked name='options_radio' type='radio' value='option2'>
                                Option two can be something else and selecting it will deselect option one
                            </div>
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend>Selects</legend>
                        <div class='form-group'>
                            <label class='control-label'>Single select</label>
                            <select class='form-control'>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                        <div class='form-group'>
                            <label class='control-label'>Multiple select</label>
                            <select class='form-control' multiple>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                    </fieldset>
                    <div class='form-actions'>
                        <button class='btn btn-default' type='submit'>Submit</button>
                        <a class='btn' href='#'>Cancel</a>
                    </div>
                </form>
            </div>
        </div>
        <div class='panel panel-default'>
            <div class='panel-heading'>
                <i class='icon-edit icon-large'></i>
                Form Horizontal
            </div>
            <div class='panel-body'>
                <form class='form-horizontal'>
                    <fieldset>
                        <legend>Default inputs</legend>
                        <div class='form-group'>
                            <label class='col-lg-2 control-label'>Text field</label>
                            <div class='col-lg-10'>
                                <input class='form-control' placeholder='Enter username' type='text'>
                            </div>
                        </div>
                        <div class='form-group'>
                            <label class='col-lg-2 control-label'>Password field</label>
                            <div class='col-lg-10'>
                                <input class='form-control' placeholder='Enter password' type='password'>
                            </div>
                        </div>
                        <div class='form-group'>
                            <label class='col-lg-2 control-label'>Input field with help</label>
                            <div class='col-lg-10'>
                                <input class='form-control' placeholder='.help-block'>
                                <p class='help-block'>Example block-level help text here.%fieldset</p>
                            </div>
                        </div>
                        <legend>Validation inputs</legend>
                        <div class='form-group has-warning'>
                            <label class='col-lg-2 control-label'>Text field</label>
                            <div class='col-lg-10'>
                                <input class='form-control' placeholder='Enter username' type='text'>
                            </div>
                        </div>
                        <div class='form-group has-error'>
                            <label class='col-lg-2 control-label'>Password field</label>
                            <div class='col-lg-10'>
                                <input class='form-control' placeholder='Enter password' type='password'>
                            </div>
                        </div>
                        <div class='form-group has-success'>
                            <label class='col-lg-2 control-label'>Input field with help</label>
                            <div class='col-lg-10'>
                                <input class='form-control' placeholder='.help-block'>
                                <p class='help-block'>Example block-level help text here.</p>
                            </div>
                        </div>
                    </fieldset>
                    <div class='form-actions'>
                        <button class='btn btn-default' type='submit'>Save</button>
                        <a class='btn' href='#'>Cancel</a>
                    </div>
                </form>
            </div>
        </div>
        <div class='panel panel-default'>
            <div class='panel-heading'>
                <i class='icon-edit icon-large'></i>
                Knob Inputs
            </div>
            <div class='panel-body text-center'>
                <input class='knob' data-height='150' data-width='150' type='text' value='75'>
                <input class='knob' data-fgColor='#16a085' data-height='150' data-width='150' type='text' value='100'>
                <input class='knob' data-fgColor='#7f8c8d' data-height='150' data-width='150' type='text' value='200'>
            </div>
        </div>
    </div>-->

</div>

</div>