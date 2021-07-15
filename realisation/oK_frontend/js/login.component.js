class AppLogin extends React.Component {
    constructor(props) {
        super(props)
    }
    render() {
        return (     
          <div className="hold-transition login-page">
          <div className="login-box">
          {/* /.login-logo */}
          <div className="card card-outline card-primary">
            <div className="card-header text-center">
              <a href="#" className="h2"><b>RAPPEL DES DATTES</b></a>
            </div>
            <div className="card-body">
              <p className="login-box-msg">Sign in to start your session</p>
              <form action="#" method="post">
                <div className="input-group mb-3">
                  <input type="text" className="loginname" placeholder="hhhh" />
                  <div className="input-group-append">
                    <div className="input-group-text loginname">
                      <span className="fas fa-envelope" />
                    </div>
                  </div>
                </div>
                <div className="input-group mb-3">
                  <input type="password" className="form-control loginPassword" placeholder="loginPassword" />
                  <div className="input-group-append">
                    <div className="input-group-text loginPassword">
                      <span className="fas fa-lock" />
                    </div>
                  </div>
                </div>
                <div className="row">
                  {/* /.col */}
                  <div className="col-12">
                    <button type="submit" className="btn btn-primary btn-block loginButton">Sign In</button>
                  </div>
                  {/* /.col */}
                </div>
              </form>
              <p className="mb-0">
                <a href="register.html" className="text-center">Register a new membership</a>
              </p>
            </div>
            {/* /.card-body */}
          </div>
          {/* /.card */}
        </div>
        </div>

        )
    }
}