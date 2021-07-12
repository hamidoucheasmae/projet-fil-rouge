// Application
class CrudDocument extends React.Component {
    constructor(props) {
        super(props)

        this.state = {
            documentsArray: []
        };
    }
    componentDidMount() {
        this.chargementDonnees();
    }
    chargementDonnees() {

        var documentsArray = null;

        // affichage de données par Ajax

        $.getJSON("../api/getDocument.php",
            function (data) {
                this.setState({ documentsArray: data });
            }.bind(this))
            .fail(function (jqXHR, textStatus, errorThrown) {
                console.log(errorThrown);
            });
    }
    //add document
    addDocument(e) {
        $.ajax({
            url: "api/addDocument.php",
            method: "POST",
            data: {
                name : Name.value,
                date_expiration : date_expiration.value,
                etat : etat.value
                
            },
            success: function (data) {
                this.chargementDonnees()
                console.log(data);
            }.bind(this)
        })
        e.preventDefault();
    }
    // Remove document
    removedocument(ID) {
        $.ajax({
            url: "/api/deleteDocument.php",
            method: "POST",
            data: {
                id: id
            },
            success: function (data) {
                //   $(this).parent().remove();
                this.chargementDonnees()
            }.bind(this)
        })

    }
        // Remove document
        updatedocument(ID){
          $.ajax({
            url:"api/updateDocument.php",
            method:"POST",
            data:{
              id : sID,
              name : Name.value,
                date_expiration : date_expiration.value,
                etat : etat.value
            },           
             success: function (data) {
              this.chargementDonnees()
          }.bind(this)
      })
        }

    

    onChangeInput(e) {
        // this.setState({value: e.target.value})
    }

    render() {
        let documentsArray = this.state.documentsArray.map((document) => {
            return (
                <document
                    key={document.id}
                    document={document}
                    onClickClose={this.removedocument.bind(this, document.id)}
                    onClickUpdate={this.updatedocument.bind(this, document.id)}

                />
            )
        })

        return (
            <div className="container">

        <table className="table">
          <thead className="thead-dark">
            <tr>
            
              <th scope="col">name</th>
              <th scope="col">date_expiration</th>
              <th scope="col">etat</th>
             
              <th scope="col"></th>

            </tr>
          </thead>
          <tbody>
                {documentsArray}
          </tbody>
        </table>

                <form id="form-add" className="form-horizontal" onSubmit={this.adddocument.bind(this)}>
                <div className="form-row">
        <div className="col-12">
          <label htmlFor="input1">Document</label>
          <input type="number" className="form-control cnumero" id="name" />
        </div>
      </div>

      <div className="form-row">
        <div className="col-12">
          <label htmlFor="input2">Date d'expiration</label>
          <input type="text" className="form-control ccapacite" id="date_expiration" />
        </div>
      </div>


      <div className="form-row">
        <div className="form-group col-12">
          <label htmlFor="input3">Etat</label>
          <input type="text" className="form-control cetat" id="etat" />
        </div>
        <button type="submit" className="btn btn-primary enrg-salle">Ajouter</button>
      </div>

     

      {/* <div className="modal-footer">
        <button type="submit" className="btn btn-primary enrg-salle">Ajouter</button>
      </div> */}
            </form> 
  
          </div>
        )
    }
  }