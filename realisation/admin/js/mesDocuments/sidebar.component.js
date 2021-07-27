class SideBar extends React.Component {
    constructor(props) {
        super(props)
    }

    render() {

        return (
            <aside className="main-sidebar sidebar-light-primary elevation-4">
           
            {/* Sidebar */}
            <div className="sidebar">
              {/* Sidebar user (optional) */}
              <div className="user-panel mt-3 pb-3 mb-3 d-flex">
                <div className="image">
                  <img src="dist/img/user2-160x160.jpg" className="img-circle elevation-2" alt="User Image" />
                </div>
                <div className="info">
                  <a href="#" className="d-block"> 
                  {/* <?php echo $userLoggedIn->getFirstName(); ?>  */}
                  Asmae HAMIDOUCHE
                   </a>
                </div>
              </div>
              {/* Sidebar Menu */}
              <nav className="mt-2">
                <ul className="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                  {/* Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library */}
                  <li className="nav-item">
                    <a href="dashboard3.php" className="nav-link">
                      <i className="nav-icon fas fa-tachometer-alt" />
                      <p>Dashboard</p>
                    </a>
                  </li>
               
        {/* Mes documents */}
        <li className="nav-item">
          <a href="mesDocuments.html" className="nav-link active">
            <i className="nav-icon fas fa-file" />
            <p> Mes Documents</p>
          </a>
        </li> 
        {/* calendar */}
        <li className="nav-item">
          <a href="calendar.html" className="nav-link">
            <i className="nav-icon far fa-calendar-alt" />
            <p>
              Calendar
              <span className="badge badge-info right">2</span>
            </p>
          </a>
        </li>


        <li class="nav-item ">
            <a href="../landing-page/index.html" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
              Se Déconnecter
               
              </p>
            </a>
          </li>


                </ul>
              </nav>
              {/* /.sidebar-menu */}
            </div>
            {/* /.sidebar */}
          </aside>
          

        )
    }
}