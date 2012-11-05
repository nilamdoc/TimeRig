    <!-- Navbar
    ================================================== -->
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="./index.html">Application Name</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-th-list icon-white"></i>&nbsp;App<b class="caret"></b></a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="#"><i class="icon-th"></i>&nbsp;Menu 1</a></li>
						<li><a href="#"><i class="icon-th"></i>&nbsp;Menu 2</a></li>				
						<li><a href="#"><i class="icon-th"></i>&nbsp;Menu 3</a></li>				
					</ul>
				</li>	
            </ul>
          </div>
			<?php
		  	$search = array("url"=>"/Search", "class"=>"navbar-search pull-right form-search");
			echo $this->form->create(null,$search);
			echo "<div class='input-append'>";
			echo $this->form->text('SearchText', array("value"=>$_REQUEST['SearchText'],"class"=>"search-query span2","placeholder"=>"type in your search...","label"=>"")); 
			echo $this->form->submit("Search",array('class'=>'btn'));
			echo "</div>";
			echo $this->form->end();
			?>
        </div>
      </div>
    </div>
