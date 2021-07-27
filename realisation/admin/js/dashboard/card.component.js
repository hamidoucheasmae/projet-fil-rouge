class Card extends React.Component {
    constructor(props) {
        super(props)
    }
    render() {
        return (     
          <div className="content-wrapper">
         
          {/* Main content */}
          <section className="content">
            {/* Default box */}
           
              <div className="card-body">
                <div className="row">
                  <div className="col-lg-3 col-6">
                    {/* small box */}
                    <div className="small-box bg-light">
                      <div className="inner">
                        <h3>150
                       
                        </h3>



                        
                        <p>New Orders</p>
                      </div>
                      <div className="icon">
                        <i className="ion ion-bag" />
                      </div>
                    </div>
                  </div>
                  {/* ./col */}
                  <div className="col-lg-3 col-6">
                    {/* small box */}
                    <div className="small-box bg-light">
                      <div className="inner">
                        <h3>53<sup style={{fontSize: '20px'}}>%</sup></h3>
                        <p>Bounce Rate</p>
                      </div>
                      <div className="icon">
                        <i className="ion ion-stats-bars" />
                      </div>
                    </div>
                  </div>
                  {/* ./col */}
                  <div className="col-lg-3 col-6">
                    {/* small box */}
                    <div className="small-box bg-light">
                      <div className="inner">
                        <h3>44</h3>
                        <p>User Registrations</p>
                      </div>
                      <div className="icon">
                        <i className="ion ion-person-add" />
                      </div>
                    </div>
                  </div>
                  {/* ./col */}
                  <div className="col-lg-3 col-6">
                    {/* small box */}
                    <div className="small-box bg-light">
                      <div className="inner">
                        <h3>65</h3>
                        <p>Unique Visitors</p>
                      </div>
                      <div className="icon">
                        <i className="ion ion-pie-graph" />
                      </div>
                    </div>
                  </div>
                  {/* ./col */}
                </div>
              </div>
              {/* /.card-body */}
              {/* /.card-footer*/}
     
            {/* /.card */}
          </section>
          {/* /.content */}
        </div>


        )
    }
}