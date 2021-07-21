class Login extends React.Component {
    constructor(props) {
        super(props)

        this.state = {
            array: [],
            isLoaded :false,
        };
    }
    componentDidMount() {
        this.chargementDonnees();
    }
    chargementDonnees() {

        var array = null;

        // affichage de données par Ajax

        $.getJSON("api/Client/login.php",
            function (data) {
                this.setState({ array: data });
            }.bind(this))
            .fail(function (jqXHR, textStatus, errorThrown) {
                console.log(errorThrown);
            });
        }

        render() {
            let array = this.state.array.map((client) => {
                return (
                    <client
                        key={client.id_client}
                        client={client}
                        onClickLogin={this.loginclient.bind(this, client.id_client)}
                        onClickSignup= {this.signupclient.bind(this,client.id_client)}
                    />
                )
            })


            return (
               <div>  {array}  </div>
            )
        }  

    }  



       