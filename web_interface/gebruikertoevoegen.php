<?php include "header.php"?>
                
                <div class="mainpanel">
                    <div class="pageheader">
                        <div class="media">
                            <div class="pageicon pull-left">
                                <i class="fa fa-pencil"></i>
                            </div>
                            <div class="media-body">
                                <ul class="breadcrumb">
                                    <li><a href="#"><i class="glyphicon glyphicon-home"></i></a></li>
                                    <li><a href="#">Settings</a></li>
                                    <li>Add a user</li>
                                </ul>
                                <h4>Add a user</h4>
                            </div>
                        </div><!-- media -->
                    </div><!-- pageheader -->
                    
                    <div class="contentpanel contentpanel-wizard">
                        
                        <div class="row">
                            <div class="col-md-12">
                                <h5 class="lg-title">Wizard with Progress Bar</h5>
                                <p class="mb20">Same with basic wizard setup but with progress bar.</p>

                                <!-- PROGRESS WIZARD -->
                                <form method="post" id="progressWizard" class="panel-wizard">
                                    <ul class="nav nav-justified nav-wizard nav-wizard-warning">
                                        <li><a href="#tab1-2" data-toggle="tab"><strong>Step 1:</strong> Personal information</a></li>
                                        <li><a href="#tab2-2" data-toggle="tab"><strong>Step 2:</strong> Access rights</a></li>
                                        <li><a href="#tab3-2" data-toggle="tab"><strong>Step 3:</strong> Settings</a></li>
                                    </ul>
                                    
                                    <div class="progress progress-xs">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                 <div class="tab-content">
                                        <div class="tab-pane" id="tab1-4">
                                            <div class="form-group">
                                                <label class="col-sm-4">Firstname</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="firstname" class="form-control" required />
                                                </div>
                                            </div><!-- form-group -->
                                            
                                            <div class="form-group">
                                                <label class="col-sm-4">Lastname</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="lastname" class="form-control" required />
                                                </div>
                                            </div><!-- form-group -->
                                            
                                            <div class="form-group">
                                                <label class="col-sm-4">Gender</label>
                                                <div class="col-sm-8">
                                                    <div class="rdio rdio-primary">
                                                        <input type="radio" checked="checked" id="male4" value="m" name="radio" required>
                                                        <label for="male4">Male</label>
                                                    </div>
                                                    <div class="rdio rdio-primary">
                                                        <input type="radio" value="f" id="female4" name="radio">
                                                        <label for="female4">Female</label>
                                                    </div>
                                                </div>
                                            </div><!-- form-group -->
                                        </div><!-- tab-pane -->
                                        
                                        <div class="tab-pane" id="tab2-4">
                                            <div class="form-group">
                                                <label class="col-sm-4">Product ID</label>
                                                <div class="col-sm-5">
                                                    <input type="text" name="product_id" class="form-control" required/>
                                                </div>
                                            </div><!-- form-group -->
                                            
                                            <div class="form-group">
                                                <label class="col-sm-4">Product Name</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="product_name" class="form-control" required />
                                                </div>
                                            </div><!-- form-group -->
                                            
                                            <div class="form-group">
                                                <label class="col-sm-4">Category</label>
                                                <div class="col-sm-4">
                                                    <select class="width100p" data-placeholder="Choose One" required>
                                                        <option value="">Choose One</option>
                                                        <option value="3d-animation">3D Animation</option>
                                                        <option value="web-design">Web Design</option>
                                                        <option value="software-engineering">Software Engineering</option>
                                                    </select>
                                                </div>
                                            </div><!-- form-group -->
                                        </div><!-- tab-pane -->
                                        
                                        <div class="tab-pane" id="tab3-4">
                                            <div class="form-group">
                                                <label class="col-sm-4">Card No</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="cardno" class="form-control" />
                                                </div>
                                            </div><!-- form-group -->
                      
                                            <div class="form-group">
                                                <label class="col-sm-4">Expiration</label>
                                                <div class="col-sm-4">
                                                    <select class="width100p" data-placeholder="Month" required>
                                                        <option value="">Choose One</option>
                                                        <option value="">January</option>
                                                        <option value="">February</option>
                                                        <option value="">March</option>
                                                        <option value="">...</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-4">
                                                    <select class="width100p" data-placeholder="Year" required>
                                                        <option value="">Choose One</option>
                                                        <option value="">2013</option>
                                                        <option value="">2014</option>
                                                        <option value="">2015</option>
                                                        <option value="">...</option>
                                                    </select>
                                                </div>
                                            </div><!-- form-group -->
                      
                                            <div class="form-group">
                                                <label class="col-sm-4">CSV</label>
                                                <div class="col-sm-4">
                                                    <input type="text" name="csv" class="form-control" />
                                                </div>
                                            </div><!-- form-group -->
                                        </div><!-- tab-pane -->
                                    </div><!-- tab-content -->
                
                                    <ul class="list-unstyled wizard">
                                        <li class="pull-left previous"><button type="button" class="btn btn-default">Previous</button></li>
                                        <li class="pull-right next"><button type="button" class="btn btn-primary">Next</button></li>
                                        <li class="pull-right finish hide"><button type="submit" class="btn btn-primary">Finish</button></li>
                                    </ul>
                                    
                                </form><!-- panel-wizard -->
              
                            </div><!-- col-md-6 -->
                            
                        </div><!-- row -->
                        
                        <br /><br />
                        
                        <div class="row">
                            <div class="col-md-6">
                                <h5 class="lg-title">Wizard with Disabled Tab Click</h5>
                                <p class="mb20">Same with basic wizard setup but does not allow you to click into the tab</p>

                                <!-- BASIC WIZARD -->
                                <form method="post" id="tabWizard" class="panel-wizard">
                                    <ul class="nav nav-justified nav-wizard nav-disabled-click">
                                        <li><a href="#tab1-3" data-toggle="tab"><strong>Step 1:</strong> Basic Info</a></li>
                                        <li><a href="#tab2-3" data-toggle="tab"><strong>Step 2:</strong> Product Info</a></li>
                                        <li><a href="#tab3-3" data-toggle="tab"><strong>Step 3:</strong> Payment</a></li>
                                    </ul>
                
                                    <div class="tab-content">
                                        <div class="tab-pane" id="tab1-3">
                                            <div class="form-group">
                                                <label class="col-sm-4">Firstname</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="firstname" class="form-control" />
                                                </div>
                                            </div><!-- form-group -->
                                            
                                            <div class="form-group">
                                                <label class="col-sm-4">Lastname</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="lastname" class="form-control" />
                                                </div>
                                            </div><!-- form-group -->
                                            
                                            <div class="form-group">
                                                <label class="col-sm-4">Gender</label>
                                                <div class="col-sm-8">
                                                    <div class="rdio rdio-primary">
                                                        <input type="radio" checked="checked" id="male3" value="m" name="radio">
                                                        <label for="male3">Male</label>
                                                    </div>
                                                    <div class="rdio rdio-primary">
                                                        <input type="radio" value="f" id="female3" name="radio">
                                                        <label for="female3">Female</label>
                                                    </div>
                                                </div>
                                            </div><!-- form-group -->
                                        </div><!-- tab-pane -->
                                        
                                        <div class="tab-pane" id="tab2-3">
                                            <div class="form-group">
                                                <label class="col-sm-4">Product ID</label>
                                                <div class="col-sm-5">
                                                    <input type="text" name="product_id" class="form-control" />
                                                </div>
                                            </div><!-- form-group -->
                                            
                                            <div class="form-group">
                                                <label class="col-sm-4">Product Name</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="product_name" class="form-control" />
                                                </div>
                                            </div><!-- form-group -->
                                            
                                            <div class="form-group">
                                                <label class="col-sm-4">Category</label>
                                                <div class="col-sm-4">
                                                    <select class="width100p" data-placeholder="Choose One">
                                                        <option value="">Choose One</option>
                                                        <option value="">3D Animation</option>
                                                        <option value="">Web Design</option>
                                                        <option value="">Software Engineering</option>
                                                    </select>
                                                </div>
                                            </div><!-- form-group -->
                                        </div><!-- tab-pane -->
                                        
                                        <div class="tab-pane" id="tab3-3">
                                            <div class="form-group">
                                                <label class="col-sm-4">Card No</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="cardno" class="form-control" />
                                                </div>
                                            </div><!-- form-group -->
                      
                                            <div class="form-group">
                                                <label class="col-sm-4">Expiration</label>
                                                <div class="col-sm-4">
                                                    <select class="width100p" data-placeholder="Month">
                                                        <option value="">Choose One</option>
                                                        <option value="">January</option>
                                                        <option value="">February</option>
                                                        <option value="">March</option>
                                                        <option value="">...</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-4">
                                                    <select class="width100p" data-placeholder="Year">
                                                        <option value="">Choose One</option>
                                                        <option value="">2013</option>
                                                        <option value="">2014</option>
                                                        <option value="">2015</option>
                                                        <option value="">...</option>
                                                    </select>
                                                </div>
                                            </div><!-- form-group -->
                      
                                            <div class="form-group">
                                                <label class="col-sm-4">CSV</label>
                                                <div class="col-sm-4">
                                                    <input type="text" name="csv" class="form-control" />
                                                </div>
                                            </div><!-- form-group -->
                                        </div><!-- tab-pane -->
                                    </div><!-- tab-content -->
                
                                    <ul class="list-unstyled wizard">
                                        <li class="pull-left previous"><button type="button" class="btn btn-default">Previous</button></li>
                                        <li class="pull-right next"><button type="button" class="btn btn-primary">Next</button></li>
                                        <li class="pull-right finish hide"><button type="submit" class="btn btn-primary">Finish</button></li>
                                    </ul>
                                    
                                </form><!-- panel-wizard -->
              
                            </div><!-- col-md-6 -->
                            
                            <div class="col-md-6">
                                <h5 class="lg-title">Wizard with Form Validation</h5>
                                <p class="mb20">Same with basic wizard setup but with form validation</p>

                                <!-- BASIC WIZARD -->
                                <form method="post" id="valWizard" class="panel-wizard">
                                    <ul class="nav nav-justified nav-wizard nav-disabled-click">
                                        <li><a href="#tab1-4" data-toggle="tab"><strong>Step 1:</strong> Basic Info</a></li>
                                        <li><a href="#tab2-4" data-toggle="tab"><strong>Step 2:</strong> Product Info</a></li>
                                        <li><a href="#tab3-4" data-toggle="tab"><strong>Step 3:</strong> Payment</a></li>
                                    </ul>
                
                                    <div class="tab-content">
                                        <div class="tab-pane" id="tab1-4">
                                            <div class="form-group">
                                                <label class="col-sm-4">Firstname</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="firstname" class="form-control" required />
                                                </div>
                                            </div><!-- form-group -->
                                            
                                            <div class="form-group">
                                                <label class="col-sm-4">Lastname</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="lastname" class="form-control" required />
                                                </div>
                                            </div><!-- form-group -->
                                            
                                            <div class="form-group">
                                                <label class="col-sm-4">Gender</label>
                                                <div class="col-sm-8">
                                                    <div class="rdio rdio-primary">
                                                        <input type="radio" checked="checked" id="male4" value="m" name="radio" required>
                                                        <label for="male4">Male</label>
                                                    </div>
                                                    <div class="rdio rdio-primary">
                                                        <input type="radio" value="f" id="female4" name="radio">
                                                        <label for="female4">Female</label>
                                                    </div>
                                                </div>
                                            </div><!-- form-group -->
                                        </div><!-- tab-pane -->
                                        
                                        <div class="tab-pane" id="tab2-4">
                                            <div class="form-group">
                                                <label class="col-sm-4">Product ID</label>
                                                <div class="col-sm-5">
                                                    <input type="text" name="product_id" class="form-control" required/>
                                                </div>
                                            </div><!-- form-group -->
                                            
                                            <div class="form-group">
                                                <label class="col-sm-4">Product Name</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="product_name" class="form-control" required />
                                                </div>
                                            </div><!-- form-group -->
                                            
                                            <div class="form-group">
                                                <label class="col-sm-4">Category</label>
                                                <div class="col-sm-4">
                                                    <select class="width100p" data-placeholder="Choose One" required>
                                                        <option value="">Choose One</option>
                                                        <option value="3d-animation">3D Animation</option>
                                                        <option value="web-design">Web Design</option>
                                                        <option value="software-engineering">Software Engineering</option>
                                                    </select>
                                                </div>
                                            </div><!-- form-group -->
                                        </div><!-- tab-pane -->
                                        
                                        <div class="tab-pane" id="tab3-4">
                                            <div class="form-group">
                                                <label class="col-sm-4">Card No</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="cardno" class="form-control" />
                                                </div>
                                            </div><!-- form-group -->
                      
                                            <div class="form-group">
                                                <label class="col-sm-4">Expiration</label>
                                                <div class="col-sm-4">
                                                    <select class="width100p" data-placeholder="Month" required>
                                                        <option value="">Choose One</option>
                                                        <option value="">January</option>
                                                        <option value="">February</option>
                                                        <option value="">March</option>
                                                        <option value="">...</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-4">
                                                    <select class="width100p" data-placeholder="Year" required>
                                                        <option value="">Choose One</option>
                                                        <option value="">2013</option>
                                                        <option value="">2014</option>
                                                        <option value="">2015</option>
                                                        <option value="">...</option>
                                                    </select>
                                                </div>
                                            </div><!-- form-group -->
                      
                                            <div class="form-group">
                                                <label class="col-sm-4">CSV</label>
                                                <div class="col-sm-4">
                                                    <input type="text" name="csv" class="form-control" />
                                                </div>
                                            </div><!-- form-group -->
                                        </div><!-- tab-pane -->
                                    </div><!-- tab-content -->
                
                                    <ul class="list-unstyled wizard">
                                        <li class="pull-left previous"><button type="button" class="btn btn-default">Previous</button></li>
                                        <li class="pull-right next"><button type="button" class="btn btn-primary">Next</button></li>
                                        <li class="pull-right finish hide"><button type="submit" class="btn btn-primary">Finish</button></li>
                                    </ul>
                                    
                                </form><!-- panel-wizard -->
              
                            </div><!-- col-md-6 -->
                        </div><!-- row -->
                        
                        <br /><br />
                            
                        <h5 class="lg-title">Colored Tab Wizard</h5>
                        <p class="mb20">Additional colors for your tab wizard</p>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="nav nav-justified nav-wizard nav-wizard-success">
                                    <li class="done"><a><strong>Step 1:</strong> Basic Info</a></li>
                                    <li class="active"><a><strong>Step 2:</strong> Product Info</a></li>
                                    <li><a><strong>Step 3:</strong> Payment</a></li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="nav nav-justified nav-wizard nav-wizard-warning">
                                    <li class="done"><a><strong>Step 1:</strong> Basic Info</a></li>
                                    <li class="active"><a><strong>Step 2:</strong> Product Info</a></li>
                                    <li><a><strong>Step 3:</strong> Payment</a></li>
                                </ul>
                            </div>
                        </div><!-- row -->
                        
                        <br />
                        
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="nav nav-justified nav-wizard nav-wizard-danger">
                                    <li class="done"><a><strong>Step 1:</strong> Basic Info</a></li>
                                    <li class="active"><a><strong>Step 2:</strong> Product Info</a></li>
                                    <li><a><strong>Step 3:</strong> Payment</a></li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="nav nav-justified nav-wizard nav-wizard-info">
                                    <li class="done"><a><strong>Step 1:</strong> Basic Info</a></li>
                                    <li class="active"><a><strong>Step 2:</strong> Product Info</a></li>
                                    <li><a><strong>Step 3:</strong> Payment</a></li>
                                </ul>
                            </div>
                        </div><!-- row -->
    
                    </div><!-- contentpanel -->
                    
                </div><!-- mainpanel -->
            </div><!-- mainwrapper -->
        </section>

<?php include "footer.php"?>