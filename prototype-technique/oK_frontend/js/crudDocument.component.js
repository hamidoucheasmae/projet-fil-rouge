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

        $.getJSON("api/getDocument.php",
            function (data) {
                this.setState({ documentsArray: data });
            }.bind(this))
            .fail(function (jqXHR, textStatus, errorThrown) {
                console.log(errorThrown);
            });
    }
    //add Document
    adddocument(e) {
        $.ajax({
            url: "api/addDocument.php",
            method: "POST",
            data: {
                name : addclientname.value,
                name : adddocumentname.value,
                date_expiration : adddate_expiration.value,
                etat : addetat.value
               
            },
            success: function (data) {
                this.chargementDonnees()
                $("#exampleModalCenter").modal('hide');
                console.log(data)
            }.bind(this)
        })
        e.preventDefault();
    }
    // Remove Document
    removedocument(i) {
        $.ajax({
            url: "api/deleteDocument.php",
            method: "POST",
            data: {
                id: i
            },
            success: function (data) {
                //   $(this).parent().remove();
                this.chargementDonnees()
            }.bind(this)
        })

    }
    //update Docment
    updatedocument(i) {
        $.ajax({
            url: "api/updateDocment.php",
            method: "POST",
            data: {
                id : i,
                name: hhhhame.value,
                date_expiration: updateExpiration.value,
                etat: etat.value
            },
            success: function (data) {
                this.chargementDonnees()
                console.log(data)
            }.bind(this)
        })
        e.preventDefault();
    }






    onChangeInput(e) {
        // this.setState({value: e.target.value})
    }

    render() {
        let documentsArray = this.state.documentsArray.map((document) => {
            return (
                <Document
                    key={document.id}
                    document={document}
                    onClickClose={this.removedocument.bind(this, document.id)}
                    onClickUpdate= {this.updatedocument.bind(this,document.id)}
                />
            )
        })

        return (
            <div className="container">
                {/* ADD Model */}
                <div className="modal fade" id="exampleModalCenter" tabIndex={-1} role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div className="modal-dialog modal-dialog-centered" role="document">
                        <div className="modal-content">
                            <div className="modal-header">
                                <h5 className="modal-title" id="exampleModalCenterTitle">Ajouter Document</h5>
                                <button type="button" className="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div className="modal-body">
                                <form
                                    id="form-add"
                                    className="form-horizontal"
                                    onSubmit={this.adddocument.bind(this)}>


                                    <div className="form-row">
                                        <div className="form-group col-12">
                                            <label htmlFor="inputName4">Document</label>
                                            <input type="text" className="form-control name" id="adddocumentname" placeholder="entrer votre document" />
                                        </div>
                                    </div>
                                    <div className="form-row">
                                        <div className="form-group col-12">
                                            <label htmlFor="inputLast4">Date d'expiration</label>
                                            <input type="text" className="form-control date_expiration" id="adddate_expiration" placeholder="Last name" />
                                        </div>
                                    </div>

                                    <div className="form-row">
                                        <div className="form-group col-12">
                                            <label htmlFor="inputMatricule4">Etat</label>
                                            <input type="text" className="form-control etat" id="addetat" placeholder="etat de document" />
                                        </div>
                                    </div>

                                    

                                    <div className="input-group text-right">
                                        <div className="input-group-btn">
                                        <button type="submit" className="btn btn-primary submit  ">AJOUTER DOCUMENT</button>
 
                                        </div>
                                    </div>
                                </form>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <table className="table table-hover">
                    <thead className="thead">
                        <tr>
                            <th scope="col">Document</th>
                            <th scope="col">Date d'expiration</th>
                            <th scope="col">Etat</th>
                           
                            <th scope="col"></th>
                            <th scope="col"></th>


                        </tr>
                    </thead>
                    <tbody>
                      
                        {documentsArray}
                    </tbody>
                </table>
            </div>
        )
    }
}