ReactDOM.render(<App />, document.getElementById('app'));
ReactDOM.render(<App2>
    <Navigation />
    <Switch>
      <Route path="/" exact component={() => <App />} />
      <Route path="/card" exact component={() => <Card />} />
      
    </Switch>
    <Footer />
  </App2>, document.getElementById('app2'));