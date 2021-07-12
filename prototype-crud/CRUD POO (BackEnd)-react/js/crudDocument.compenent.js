// Composant : Tâche
class Document extends React.Component {


    render() {
      let class_name = 'Document'
      class_name += this.props.done == 1 ? ' Document-valide' : ' Document-perime';
  
      return (
        <div className={class_name} onClick={this.props.onClickTask}>
          <span>{this.props.value}</span>
          <span><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" className="close text-white mr-2 text-center bi bi-x-circle" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
          </svg></span>
        </div>
      )
    }
  }
  
  // Application
  class App extends React.Component {
  
    constructor(props) {
      super(props)
  
      this.state = {
        documentList: []
      };
    }
    componentDidMount() {
      this.chargementDonnees();
    }
    chargementDonnees() {
  
      var dataList = null;
  
      // affichage de données par Ajax
  
      $.getJSON("api/getDocument.php",
        function (data) {
          this.setState({ documentList: data });
        }.bind(this))
        .fail(function (jqXHR, textStatus, errorThrown) {
          
        })
        ;
  
    }
  
    //ajouter une tache
  
    add(e) {
  
      $.ajax({
        url: "/api/addDocument.php",
        method: "POST",
        data: {
          documentname: Inputname.value,
          documentdateexpiration: Inputdate-expiration.value
        },
        success: function (data) {
          this.chargementDonnees()
          console.log(data)
        }.bind(this)
      })
      e.preventDefault()
    }
  
    //supprimer une tache
  
    removeTache(i) {
  
      $.ajax({
        url: "/api/deleteDocument.php",
        method: "POST",
        data: {
          sid: i
        },
        success: function (data) {
          $(this).parent().remove();
          this.chargementDonnees()
        }.bind(this)
      })
  
    }
  
    //Tache faite
  
    markDone(i, status) {
  
      if (status != 1) {
        $.ajax({
          url: "api/done.php",
          method: "POST",
          data: {
            sid: i,
            done: 1,
          },
          success: function (data) {
            console.log(data)
            this.chargementDonnees()
          }.bind(this)
        })
      } else {
        $.ajax({
          url: "api/done.php",
          method: "POST",
          data: {
            sid: i,
            done: 0,
          },
          success: function (data) {
            console.log(data)
            this.chargementDonnees()
          }.bind(this)
        })
      }
    }
  
  
  
  
  
  
  
    render() {
  
      let tachesArrayMap = this.state.documentList.map((tache) => {
        return (
          <Tache
            key={tache.idtasks}
            value={tache.taskname}
            done={tache.done}
            onClickClose={this.removeTache.bind(this, tache.idtasks)}
            onClickTask={this.markDone.bind(this, tache.idtasks, tache.done)}
          />
        )
      })
  
      return (
  
        <div className="container">
          <div className="row">
            <div className="col-sm-12 col-lg-6 col-sm-offset-3 mx-auto app">
              <h1 className="text-center"> Mes taches</h1>
              <form
                id="form-add"
                className="form-horizontal" onSubmit={this.addTask.bind(this)}>
  
  
                <div className="input-group input-group-lg mb-3">
                  <input type="text" id="addInput" className="form-control" placeholder="Enterz une tache..." />
                  <div className="input-group-append">
                    <button type="submit" className="btn btn-light"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" className="bi bi-plus-lg my-auto" viewBox="0 0 16 16">
                      <path d="M8 0a1 1 0 0 1 1 1v6h6a1 1 0 1 1 0 2H9v6a1 1 0 1 1-2 0V9H1a1 1 0 0 1 0-2h6V1a1 1 0 0 1 1-1z" />
                    </svg></button>
                  </div>
                </div>
  
  
              </form>
  
              {tachesArrayMap}
  
            </div>
          </div>
        </div>
      )
    }
  }
  
  ReactDOM.render(<App />, document.getElementById('app'));