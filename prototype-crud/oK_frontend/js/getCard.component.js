class CardDocument extends React.Component {
    constructor(props) {
        super(props)

        this.state = {
            documentArray: []
        };
    }
    componentDidMount() {
        this.chargementDonnees();
    }
    chargementDonnees() {

        var documentArray = null;

        // affichage de données par Ajax

        $.getJSON("api/getCard.php",
            function (data) {
                this.setState({ documentArray: data });
            }.bind(this))
            .fail(function (jqXHR, textStatus, errorThrown) {
                console.log(errorThrown);
            });
    }
}