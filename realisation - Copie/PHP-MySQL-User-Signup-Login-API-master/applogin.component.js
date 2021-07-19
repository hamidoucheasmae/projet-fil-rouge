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

        $.getJSON("api/User/login.php",
            function (data) {
                this.setState({ array: data });
            }.bind(this))
            .fail(function (jqXHR, textStatus, errorThrown) {
                console.log(errorThrown);
            });
        }

        render() {
            let array = this.state.array.map((user) => {
                return (
                    <user
                        key={user.id_user}
                        user={user}
                        onClickLogin={this.loginuser.bind(this, user.id_user)}
                        onClickSignup= {this.signupuser.bind(this,user.id_user)}
                    />
                )
            })


            return (
               <div>  {array}  </div>
            )
        }  

    }  



       