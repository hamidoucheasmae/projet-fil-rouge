class Document extends React.Component {
    constructor(props) {
        super(props)
    }

    render() {

        return (
                <tr>
              <td scope="row">{this.props.document.name}</td>
              <td>{this.props.document.date_expiration}</td>
              <td>{this.props.document.etat}</td>
             
              <td></td>
              <td>
          <button type="button" className="btn btn-success ml-5" onClick={this.props.onClickUpdate}>
            <svg xmlns="http://www.w3.org/2000/svg" width={16} height={16} fill="currentColor" className="bi bi-pencil-square " viewBox="0 0 16 16">
              <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
              <path fillRule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
            </svg>
          </button>
          <button type="button" className="btn btn-danger ml-4" onClick={this.props.onClickClose}>
            <svg xmlns="http://www.w3.org/2000/svg" width={16} height={16} fill="currentColor" className="bi bi-person-x-fill" viewBox="0 0 16 16">
              <path fillRule="evenodd" d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6.146-2.854a.5.5 0 0 1 .708 0L14 6.293l1.146-1.147a.5.5 0 0 1 .708.708L14.707 7l1.147 1.146a.5.5 0 0 1-.708.708L14 7.707l-1.146 1.147a.5.5 0 0 1-.708-.708L13.293 7l-1.147-1.146a.5.5 0 0 1 0-.708z" />
            </svg>
          </button>
          </td>
                </tr>

        )
    }
}