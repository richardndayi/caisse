<aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="profile.html"><img src="img/ui-sam.jpg" class="img-circle" width="80"></a></p>
                 
			<li class="nav-item dropdown">
      <li class="nav-item dropdown">
                                

    
                            </li>
          <li class="mt">
            <a class="active" href="index.html">
              <i class="fa fa-dashboard"></i>
              <span>Accueil</span>
              </a>
          </li>
          
     
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-cogs"></i>
              <span>Guichets</span>
              </a>
            <ul class="sub">
            <li><a class="" href="{{ url('guichet')}}">
						<span class="fa fa-cog">&nbsp;</span> Guichet
					</a></li>
          <li><a class="" href="{{ url('caisse')}}">
						<span class="fa fa-bar-chart">&nbsp;</span> Caisse
					</a></li>
          <li><a class="" href="{{ url('detaille_caisse')}}">
						<span class="fa fa-bar-chart">&nbsp;</span> Detaille caisse
					</a></li>
         
              
           
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-book"></i>
              <span>Comptes</span>
              </a>
            <ul class="sub">
            <li><a class="" href="{{ url('categorie_compte')}}">
						<span class="fa fa-bar-chart">&nbsp;</span> Categorie compte
					</a></li>
          <li><a class="" href="{{ url('comptes')}}">
						<span class="fa fa-bar-chart">&nbsp;</span> Comptes
					</a></li>
          
            </ul>
          </li>
          <li><a class="" href="{{ url('historiques')}}">
						<span class="fa fa-list-alt">&nbsp;</span> Historique
					</a></li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-users"></i>
              <span>Utilisateurs</span>
              </a>
            <ul class="sub">
                                
                                    <li><a class="" href="{{ url('caisse_utilisateurs')}}">
						<span class="fa fa-user">&nbsp;</span> Caisse utilisateurs
					</a></li>
          <li><a class="" href="{{route('admin.users.index')}}">
						<span class="fa fa-user">&nbsp;</span>  utilisateurs
					</a></li>
          <!-- <li><a class="" href="{{ url('roles')}}">
						<span class="fa fa-user">&nbsp;</span> Roles
					</a></li>
          <li><a class="" href="{{ url('role_utilisateur')}}">
						<span class="fa fa-user">&nbsp;</span>Role utilisateur
					</a></li> -->
             
            </ul>
          </li>
         
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>