
<div class="navigacija">
    <div class="nav-outer"> 
        <div class="container">
            <nav class="navbar navbar-default" role="navigation">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="logo" href="#page_top"><img src="images/logo1@2x.png" alt=""></a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav pull-right">
                        
                        <li class=""><a href="#about">About Us</a></li>
                        <li class=""><a href="#ourwork">Services</a></li>
                        <li class=""><a href="#team">Our Team</a></li>
                        <li class=""><a href="#contact">Contact</a></li>
                        
                        <li class=""><a href="<?php if(Auth::check()): ?> /office <?php else: ?> /login <?php endif; ?>"</a>Office</li>  
                            
                    </ul>
                </div><!-- /.navbar-collapse -->
            </nav>
        </div>
    </div>
</div>