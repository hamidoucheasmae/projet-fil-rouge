class App extends React.Component {
    constructor(props) {
        super(props)
    }


    render() {



      
        return (
     
    
          
   
<div className="login-wrap">
        <div className="login-html">
          <input id="tab-1" type="radio" name="tab" className="sign-in" defaultChecked /><label htmlFor="tab-1" className="tab">Se connecter</label>
          <input id="tab-2" type="radio" name="tab" className="sign-up" /><label htmlFor="tab-2" className="tab">S'inscrire</label>
          <div className="login-form">
            <form className="sign-in-htm" action="./api/client/login.php" method="GET">
              <div className="group">
                <label htmlFor="user" className="label">E-mail</label>
                <input id="email" name="email" type="text" className="input" />
              </div>
              <div className="group">
                <label htmlFor="pass" className="label">Mot de passe</label>
                <input id="password" name="password" type="password" className="input" data-type="password" />
              </div>
              <div className="group">
                <input id="check" type="checkbox" className="check" defaultChecked />
                <label htmlFor="check"><span className="icon" /> Se souvenir de moi</label>
              </div>
              <div className="group">
               <input type="submit" className="button" defaultValue="Se connecter" />
              </div>
              <div className="hr" />
              
            </form>
            <form className="sign-up-htm" action="./api/client/signup.php" method="POST">
            
              <div className="group">
                <label htmlFor="user" className="label">E-mail</label>
                <input id="email" name="email" type="text" className="input" />
              </div>
              <div className="group">
                <label htmlFor="pass" className="label">Mot de passe</label>
                <input id="password" name="password" type="password" className="input" data-type="password" />
              </div>
              <div className="group">
                <label htmlFor="pass" className="label">Confirmation du mot de passe</label>
                <input id="pass" type="password" className="input" data-type="password" />
              </div>
           
              <div className="group">
            
              <input type="submit" className="button" defaultValue="S'inscrire" />
            
              </div>
             

             
            </form>
          </div>
        </div>
      </div>
         
         
        


        
        )
    }
}