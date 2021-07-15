class AppDashboard extends React.Component {
    constructor(props) {
        super(props)
    }

    render() {

        return (
          
    
   
            <div>   
      {/* Site wrapper */}
      <div className="wrapper">
          <Menu2 />

          <SideBar />
         
          

{/* Content Wrapper. Contains page content */}
        
      <Card />
      <div className="content-wrapper">
          {/* Content Header (Page header) */}
         
          {/* Main content */}
          <section className="content">
            {/* Default box */}
            <div className="card">
              
              <div className="card-body">
                {/* <CrudDashboard /> */}
              </div>
              {/* /.card-body */}
             
              {/* /.card-footer*/}
            </div>
            {/* /.card */}
          </section>
          {/* /.content */}
        </div>
     
      
        <footer className="main-footer">
          <div className="float-right d-none d-sm-block">
            <b>Version</b> 3.1.0
          </div>
          <strong>Copyright © 2020-2021 <a href="https://solicode.co">Solicode</a>.</strong> All rights reserved.
        </footer>
        {/* Control Sidebar */}
        <aside className="control-sidebar control-sidebar-dark">
          {/* Control sidebar content goes here */}
        </aside>
        {/* /.control-sidebar */}
      </div>
                
                

                


            </div>

        )
    }
}